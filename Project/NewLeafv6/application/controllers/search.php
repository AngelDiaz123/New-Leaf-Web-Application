<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  class Search extends CI_Controller{
    public function __construct(){
      parent::__construct();
    }

    function index()
  {
    $this->load->view('search');  
  }

    public function search(){
      $amount=$this->input->post('amount');
      $item=$this->input->post('item');
      //Empty Array to hold all the recipes
      
      //loads one of the requested items
      $Recipes = file_get_contents("http://api.yummly.com/v1/api/recipes?_app_id=".$UserID."&_app_key=".$UserKey."&maxResult=
      ".$amount."&requirePictures=true&q=".$item);
      //Decode the JSON into a php object
      $data['Recipes'] = json_decode($Recipes)->matches;
      //Cycle Through The Recipes and Get full recipe for each
      $this->load->view('results.php');
    }
  }
?>