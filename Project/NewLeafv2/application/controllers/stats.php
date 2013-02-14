<?php

class Pages extends CI_Controller {

	public function view($page = 'stats'){
			
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}

	$this->load->Database();
	
	$data['title'] = ucfirst($page); // Capitalize the first letter]
	
	$this->load->view('pages/'.$page, $data);

	}

	
}