<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  class Weight extends CI_Controller{
    public function __construct(){
      parent::__construct();
      //load the model for the database usage
      $this->load->model('user_model');
    }

    public function index(){
      //if a session with username already exist
      if(($this->session->userdata('user_name')!="")){
        //run welcome function
        $this->load->view('weight_view');
      }else{
        //load register/login page
        $this->load->view("registration");
      }
    }

    public function track(){
      $this->load->library('form_validation');
      // field name, error message, validation rules
      $this->form_validation->set_rules('lost', 'Weight Lost', 'required');
      $this->form_validation->set_rules('date', 'Date', 'required');

      if($this->form_validation->run() == FALSE){
        $this->load->view("weight_view");
      }else{
        //grab bothe the inputs from the form
        $l=$this->input->post('lost');
        $d=$this->input->post('date');
        $id=$this->input->post('user');

        //call the function login in model to check for match
        $this->user_model->track_weight($id,$l,$d);

        $this->load->view('welcome');
      }
    }

  }
?>