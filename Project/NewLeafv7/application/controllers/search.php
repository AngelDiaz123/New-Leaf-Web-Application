<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  class Search extends CI_Controller{
    public function __construct(){
      parent::__construct();
    }

    function index(){
      $this->load->view('search_view');  
    }

    public function lookUp(){
      $this->load->library('form_validation');
      $this->form_validation->set_rules('recipe', 'Recipe', 'required');

      //if the form fails, load the index and send the error with it
      if($this->form_validation->run() == FALSE){
        $this->load->view('search_view');
      }else{
        $amount=$this->input->post('amount');
        $item = '';
        $item=$this->input->post('recipe');
        $UserID = "8df48ce4";
        $UserKey = "8e77b9e52913c5e4a3a4740383dec756";
        //Empty Array to hold all the recipes
          
        //loads one of the requested items
        $Recipes = file_get_contents("http://api.yummly.com/v1/api/recipes?_app_id=".$UserID."&_app_key=".$UserKey."&maxResult=10&requirePictures=true&q=".$item);
        //Decode the JSON into a php object
        $Recipes = json_decode($Recipes)->matches;
        //stores to the recipes into the data variable to send to the view
        $data = array('Recipes' => $Recipes);
        //Cycle Through The Recipes and Get full recipe for each
        $this->load->view('search_view', $data);
      }
    }
  }

?>