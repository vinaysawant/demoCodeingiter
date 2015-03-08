<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: vinay
 * Date: 26/1/15
 * Time: 12:36 PM
 */
session_start();
class Owners extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index($id = null)
    {

        if ($this->session->userdata('logged_in')) {

            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];

            $this->load->model('owner');
            $data['result'] = $this->owner->getOwners();

            $this->load->helper(array('form'));
            $this->load->view('owner_view', $data);
        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    function show($id,$method = null,$petId = null, $record = null)
    {
        if ($this->session->userdata('logged_in')) {

            $this->load->model('owner');
            $this->load->model('pet');
            $data['result'] = $this->owner->getOwner($id);
            $data['pets'] = $this->pet->getPets($id);

            $this->load->helper(array('form'));

            if(is_null($method)){
                $this->load->view('owner_detail_view', $data);
            }

            if($method == 'addPet'){
                $this->addPet($id);
            }

            if($method == 'pet'){
                $this->showPet($id,$petId);
            }
            if($record == 'add'){
                $this->addRecord($id,$petId);
            }
        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    function add(){
        if ($this->session->userdata('logged_in')) {
            $this->load->model('owner');
            $this->owner->add();
            redirect('owners');
        }else{
            redirect('login', 'refresh');

        }
    }

    function addPet($id){

        if ($this->session->userdata('logged_in')) {
            $this->load->model('owner');
            $this->load->model('pet');
            $this->pet->add($id);
            redirect('owners/show/'.$id);
        }else{
            redirect('login', 'refresh');

        }
    }
    function addRecord($id,$petId){

        if ($this->session->userdata('logged_in')) {
            $this->load->model('owner');
            $this->load->model('pet');
            $this->load->model('record');
            $this->record->add($id,$petId);
            redirect('owners/show/'.$id.'/pet/'.$petId);
        }
        else{
            redirect('login', 'refresh');
        }
    }

    function showPet($id,$petId){


        if ($this->session->userdata('logged_in')) {

            $this->load->model('owner');
            $this->load->model('pet');
            $this->load->model('record');
            $data['owner_id'] = $id ;
            $data['pet'] = $this->pet->getPet($id,$petId);
            $data['records'] = $this->record->getRecords($petId);
            $this->load->view('pet_details',$data);

        }
        else{
            redirect('login', 'refresh');
        }

    }

    function logout(){

        $this->session->unset_userdata('logged_in');
        redirect('login', 'refresh');
    }
} 