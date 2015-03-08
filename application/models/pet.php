<?php

/**
 * Created by PhpStorm.
 * User: vinay
 * Date: 26/1/15
 * Time: 12:30 PM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pet extends CI_Model
{

    function getPet($id,$petId){
        $this->db->select('*');
        $this->db->from('pets');
        $this->db->where('id',$petId);
        $query = $this->db->get()->row();
        return $query;
    }

    function getPets($id){
        $this->db->select('*');
        $this->db->from('pets');
        $this->db->where('owner_id',$id);
        $query = $this->db->get();
        return $result = $query->result();
    }


    function add($id){
        $name = $_POST['name'];
        $sex = $_POST['sex'];
        $age = $_POST['age'];
        $species = $_POST['species'];

        $this->db->query("INSERT INTO pets (name,owner_id,sex,age,species) VALUES ('{$name}','{$id}', '{$sex}','{$age}','{$species}')");
    }

    function getRemainders(){
        $today = date('Y-m-d');

        $this->db->select('*,p.id as pet_id,p.name as pet_name');
        $this->db->from('pets as p');
        $this->db->join('owners o','o.id = p.owner_id');
        $this->db->where('p.next_date > '.$today);
        $this->db->group_by('p.id');
        $query = $this->db->get();
        return $result = $query->result();

    }
}
