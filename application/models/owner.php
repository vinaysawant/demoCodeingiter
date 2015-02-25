<?php

/**
 * Created by PhpStorm.
 * User: vinay
 * Date: 26/1/15
 * Time: 12:30 PM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Owner extends CI_Model
{


    function getOwner($id){
        $this->db->select('*');
        $this->db->from('owners');
        $this->db->where('id',$id);
        $result = $this->db->get()->row();
        return $result;
    }

    function getOwners(){
        $this->db->select('*');
        $this->db->from('owners');
        $query = $this->db->get();
        return $result = $query->result();
    }


    function add(){
        $name = $_POST['name'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        $this->db->query("INSERT INTO owners (name,address,phone,email) VALUES ('{$name}', '{$address}','{$phone}','{$email}')");
    }
}