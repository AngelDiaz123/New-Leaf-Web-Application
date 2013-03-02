<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  class Edit extends CI_Controller{
    public function __construct(){
      parent::__construct();
      //load the model for the database usage
      $this->load->model('user_model');
    }

    public function index(){
      //if a session with username already exist
      if(($this->session->userdata('user_name')!="")){
        //run welcome function
        $this->load->view('edit_view');
      }else{
        //load register/login page
        $this->load->view("registration");
      }
    }

    public function edit_user(){
      $this->load->library('form_validation');
      // field name, error message, validation rules
      $this->form_validation->set_rules('username', 'User Name', 'trim|required|min_length[4]|xss_clean');
      $this->form_validation->set_rules('email', 'Your Email', 'trim|required|valid_email');
      $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');

      if($this->form_validation->run() == FALSE){
        $this->load->view("edit_view");
      }else{
        //grab bothe the inputs from the form
        $e=$this->input->post('email');
        $p=md5($this->input->post('password'));
        $u=$this->input->post('username');
        $id=$this->input->post('id');

        //call the function login in model to check for match
        $this->user_model->edit_account($id,$u,$p,$e);

        $this->load->view('welcome');
      }
    }

    public function delete_user(){
      $this->load->library('form_validation');
      // field name, error message, validation rules
      $this->form_validation->set_rules('user', 'User', 'required');

      if($this->form_validation->run() == FALSE){
        $this->load->view("edit_view");
      }else{
        $id=$this->input->post('user');

        $this->user_model->delete_user($id);

        $this->logout();
      }
    }

    public function logout(){
      //set everything to blank
      $newdata = array(
      'user_id'   =>'',
      'user_name'  =>'',
      'user_email'     => '',
      'logged_in' => FALSE,
      );
      //delete the session and send the user back to the register page
      $this->session->unset_userdata($newdata);
      $this->session->sess_destroy();
      $this->index();
    }
  }
?>