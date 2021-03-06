<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: vinay
 * Date: 26/1/15
 * Time: 12:36 PM
 */
session_start();
class Remainders extends CI_Controller
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

            $this->load->model('owner');
            $this->load->model('pet');
            $data['result'] = $this->pet->getRemainders();
            $this->load->helper(array('form'));
            $this->load->view('remainder_view', $data);
        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

} 