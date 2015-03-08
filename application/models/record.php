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
        $treatment = nl2br($_POST['treatment']);
        $charge = $_POST['charge'];
        $next_date = $_POST['remind'];
        $date = date('Y-m-d');

        $this->db->query("INSERT INTO records (pet_id,date,clinical_sign,treatment,charge) VALUES ('{$petId}','{$date}','{$sign}','{$treatment}', '{$charge}')");

        $newDate = new DateTime($next_date);
        $newDate = $newDate->format('Y-m-d');

        $this->db->query("UPDATE pets SET next_date = '{$newDate}' WHERE id = '{$petId}'");

    }

    function getRecords($petId){
        $this->db->select('*');
        $this->db->from('records');
        $this->db->where('pet_id',$petId);
        $query = $this->db->get();
        return $result = $query->result();

    }
}