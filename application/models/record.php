<?php

/**
 * Created by PhpStorm.
 * User: vinay
 * Date: 26/1/15
 * Time: 12:30 PM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Record extends CI_Model
{

    function add($id,$petId){
        $sign = $_POST['clinical_sign'];
        $treatment = $_POST['treatment'];
        $charge = $_POST['charge'];

        $this->db->query("INSERT INTO records (pet_id,clinical_sign,treatment,charge) VALUES ('{$petId}','{$sign}','{$treatment}', '{$charge}')");
    }

    function getRecords($petId){
        $this->db->select('*');
        $this->db->from('records');
        $this->db->where('pet_id',$petId);
        $query = $this->db->get();
        return $result = $query->result();

    }
}