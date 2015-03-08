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
        $this->load->model('owner');
        $this->owner->add();
        redirect('owners');
//        $this->load->view('medicine_view');
    }

    function addPet($id){
        $this->load->model('owner');
        $this->load->model('pet');
        $this->pet->add($id);
        redirect('owners/show/'.$id);
//        $this->load->view('medicine_view');
    }
    function addRecord($id,$petId){
        $this->load->model('owner');
        $this->load->model('pet');
        $this->load->model('record');
        $this->record->add($id,$petId);
        redirect('owners/show/'.$id.'/pet/'.$petId);
//        $this->load->view('medicine_view');
    }

    function showPet($id,$petId){
        $this->load->model('owner');
        $this->load->model('pet');
        $this->load->model('record');
        $data['owner_id'] = $id ;
        $data['pet'] = $this->pet->getPet($id,$petId);
        $data['records'] = $this->record->getRecords($petId);
        $this->load->view('pet_details',$data);
    }
} 