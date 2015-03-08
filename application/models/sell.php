<?php

/**
 * Created by PhpStorm.
 * User: vinay
 * Date: 26/1/15
 * Time: 12:30 PM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Sell extends CI_Model
{

    function getSells($id){
        $this->db->select('*,s.quantity as s_quantity');
        $this->db->from('sells as s');
        $this->db->join('foods f','f.id = s.food_id');
        $this->db->where('owner_id',$id);
        $query = $this->db->get();
        return $result = $query->result();
    }

}