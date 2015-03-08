<?php

/**
 * Created by PhpStorm.
 * User: vinay
 * Date: 26/1/15
 * Time: 12:30 PM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Food extends CI_Model
{

    function getFoods(){
        $this->db->select('*');
        $this->db->from('foods');
        $query = $this->db->get();
        return $result = $query->result();
    }

    function add(){
        $brand = $_POST['brand'];
        $name = $_POST['name'];
        $count = $_POST['quantity'];

        $this->db->query("INSERT INTO foods (brand,name,quantity) VALUES ('{$brand}','{$name}', '{$count}')");
    }

}