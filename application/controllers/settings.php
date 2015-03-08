<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: vinay
 * Date: 26/1/15
 * Time: 12:36 PM
 */
session_start();
class Settings extends CI_Controller
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
            $this->load->view('setting_view', $data);
        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    function change(){

        if ($this->session->userdata('logged_in')) {

            $passwd = $_POST["password"];
            $passwd1 = $_POST["newpasswd1"];
            $passwd2 = $_POST["newpasswd2"];

            $this->load->model('user');
            $user = $this->user->getUser();
            if(md5($passwd) == $user->password){

                if($passwd1 == $passwd2){

                    if(strlen($passwd2) > 5){
                        $md5 = md5($passwd1);
                        $userId = $user->id;
                        $this->db->query("UPDATE users SET password = '{$md5}' WHERE id = '{$userId}'");

                        redirect('/owners');

                    }

                }

            }else{
                redirect('/settings');
            }

        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

} 