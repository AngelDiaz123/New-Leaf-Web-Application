<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class User_model extends CI_Model {

		public function __construct(){
	  		parent::__construct();
	 	}

	 	public function login($email,$password){
	 		//call the database and where the values are equal
	  		$this->db->where("email",$email);
	  		$this->db->where("password",$password);

	  		//the users table
	  		$query=$this->db->get("users");

	  		//if more then one row
	  		if($query->num_rows()>0){
	   			
	   			//go thru all the results and set the session data
	   			foreach($query->result() as $rows){
				    //add all data to session
				    $newdata = array(
				      'user_id'  => $rows->m_id,
				      'user_name'  => $rows->username,
				      'user_email'    => $rows->email,
				      'logged_in'  => TRUE,
				    );
	   		}

	   		$this->session->set_userdata($newdata);
	   		return true;
	  	}
	  	return false;
	 	}

	 	public function get_weight($id){
	 		//calls the goals tables and matches the id with the user
	 		//returns all the data to the view
	 		$this->db->where("user_id",$id);
	 		$query = $this->db->get('goals');
	 		return $query->result_array();
	 	}

	 	public function track_weight($id,$lost,$date){
	 		//an array for the inputs
		  	$data = array(
				'user_id'=>$id,
			    'pounds_lost'=>$lost,
			    'date'=>$date
		  	);

		  	$this->db->insert('goals',$data);
		}

	 	public function edit_account($id,$username,$password,$email){
	 		//puts all the inputs into an array
	 		$data = array(
               'username' => $username,
               'password' => $password,
               'email' => $email
            );
	 		//matches the id and stores it back into the database
			$this->db->where('m_id', $id);
			$this->db->update('users', $data);

			//call the database and where the values are equal
	  		$this->login($email,$password);
	 	}

	 	public function delete_user($id){
	 		//removes the user from both database tables
	 		$this->db->where('user_id', $id);
			$this->db->delete('goals');

	 		$this->db->where('m_id', $id);
			$this->db->delete('users'); 
	 	}


	 	public function add_user(){
	 		//an array for the inputs
		  	$data = array(
				'username'=>$this->input->post('user_name'),
			    'email'=>$this->input->post('email_address'),
			    'password'=>md5($this->input->post('password'))
		  	);

		  	//call the database to check for username and password
		  	$this -> db -> select('email, username');
		  	$this -> db -> from('users');
		  	$query = $this -> db -> get();
		  	//if more then one result
		  	if($query -> num_rows()>0){
		  		//loop thru them alll
		  		foreach($query->result() as $rows){
		  			//check to make sure that the user didnt already sign up using an email
		  			if($rows->email == $data['email']){
		  				$this->load->view("eFailed.php");
		  				return false;
		  			}else if($rows->username == $data['username']){
		  				//check to make sure that the user didnt already sign up using a username
		  				$this->load->view("failed.php");
		  				return false;
		  			}
		  		}
		  	}
		  	//if all good, insert and send to welcome page
		  	$this->db->insert('users',$data);
		  	$this->login($data['email'],$data['password']);
		}
	}
?>