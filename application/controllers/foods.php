<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: vinay
 * Date: 26/1/15
 * Time: 12:36 PM
 */
session_start();
class Foods extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        if ($this->session->userdata('logged_in')) {

            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];

            $this->load->model('food');
            $data['result'] = $this->food->getFoods();

            $this->load->helper(array('form'));
            $this->load->view('food_view', $data);
        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    function add(){
        $this->load->model('food');
        $this->food->add();
        redirect('foods');
//        $this->load->view('medicine_view');
    }
} 