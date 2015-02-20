<?php

/**
 * Created by PhpStorm.
 * User: vinay
 * Date: 26/1/15
 * Time: 12:30 PM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Medicine extends CI_Model
{

    function getMedicines(){
        $this->db->select('*');
        $this->db->from('medicines');
        $query = $this->db->get();
        return $result = $query->result();
    }

    function add(){
        $name = $_POST['name'];
        $count = $_POST['quantity'];

        $this->db->query("INSERT INTO medicines (name,quantity) VALUES ('{$name}', '{$count}')");
    }

}