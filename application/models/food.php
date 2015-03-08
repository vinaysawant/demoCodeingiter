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

    function getFood($id){
        $this->db->select('*');
        $this->db->from('foods');
        $this->db->where('id',$id);
        $result = $this->db->get()->row();
        return $result;
    }

    function add(){
        $brand = $_POST['brand'];
        $name = $_POST['name'];
        $count = $_POST['quantity'];
        $price = $_POST['price'];

        $this->db->query("INSERT INTO foods (brand,name,quantity,price) VALUES ('{$brand}','{$name}', '{$count}','{$price}')");
    }

    function sell($id){
        $foodId = $_POST['food_id'];
        $quantity = $_POST['quantity'];
        $date = date('Y-m-d');

        $this->db->query("INSERT INTO sells (owner_id,food_id,quantity,date) VALUES ('{$id}','{$foodId}','{$quantity}', '{$date}')");

        $food = $this->getFood($foodId);
        $oldQuantity = $food->quantity;
        $newQuantity = (int)$oldQuantity - (int)$quantity;

        $this->db->query("UPDATE foods SET quantity = '{$newQuantity}' WHERE id = '{$foodId}'");
    }

}