<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  class Graph extends CI_Controller{
    public function __construct(){
      parent::__construct();
      //load the model for the database usage
      $this->load->model('user_model');
    }

    public function index(){
      //if a session with username already exist
      if(($this->session->userdata('user_name')!="")){
        //run welcome function
        $id = $this->session->userdata('user_id');
        $stats = $this->user_model->get_weight($id);
        //var_dump($stats);
        $data = array('stats'=>$stats);
        $this->load->view('graph_view',$data);
      }else{
        //load register/login page
        $this->load->view("registration");
      }
    }
  }
?>