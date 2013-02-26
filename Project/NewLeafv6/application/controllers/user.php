<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  class User extends CI_Controller{
    public function __construct(){
      parent::__construct();
      //load the model for the database usage
      $this->load->model('user_model');
    }

    public function index(){
      //if a session with username already exist
      if(($this->session->userdata('user_name')!="")){
        //run welcome function
        $this->welcome();
      }else{
        //load register/login page
        $this->load->view("registration");
      }
    }

    public function welcome(){
      //home page
      $this->load->view('welcome');
    }

    public function login(){
      //grab bothe the inputs from the form
      $email=$this->input->post('email');
      $password=md5($this->input->post('pass'));

      //call the function login in model to check for match
      $result=$this->user_model->login($email,$password);

      //if results, go to home page
      if($result){ 
        $this->welcome();
      }else{
        //else go back to run index again to go to register page
        $this->index();
      }
    }

    public function edit(){
      //grab bothe the inputs from the form
      $email=$this->input->post('email');
      $password=md5($this->input->post('pass'));
      $username=$this->input->post('username');
      $id=$this->input->post('id');

      //call the function login in model to check for match
      $this->user_model->edit_profile($id,$username,$password,$email);

      $this->load->view('welcome');
    }

    public function delete_user(){
      //grab the id from the form
      $id=$this->input->post('id');

      $this->logout();
    }

    public function registration(){
      $this->load->library('form_validation');
      // field name, error message, validation rules
      $this->form_validation->set_rules('user_name', 'User Name', 'trim|required|min_length[4]|xss_clean');
      $this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
      $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
      $this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');

      //if the form fails, load the index and send the error with it
      if($this->form_validation->run() == FALSE){
        $this->load->view("registration");
      }else{
        //run the add user function in model
        $this->user_model->add_user();
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

    public function search(){
      $amount=$this->input->post('amount');
      $item=$this->input->post('item');
      //Empty Array to hold all the recipes
      $UserID = "8df48ce4";
      $UserKey = "8e77b9e52913c5e4a3a4740383dec756";
      //loads one of the requested items
      $Recipes = file_get_contents("http://api.yummly.com/v1/api/recipes?_app_id=".$UserID."&_app_key=".$UserKey."&maxResult=
      ".$amount."&requirePictures=true&q=".$item);
      //Decode the JSON into a php object
      $data['Recipes'] = json_decode($Recipes)->matches;
      //Cycle Through The Recipes and Get full recipe for each
      $this->load->view('search.php',$data);
    }
  }
?>