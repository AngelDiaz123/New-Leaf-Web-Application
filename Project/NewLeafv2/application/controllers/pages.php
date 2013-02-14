<?php

class Pages extends CI_Controller {

	public function view($page = 'home'){
			
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}

	$this->load->Database();

	$data['results'] = $this->db->query('SELECT email FROM users');
	
	$data['title'] = ucfirst($page); // Capitalize the first letter]
	
	$this->load->view('pages/'.$page, $data);

	}

	
}