<?php

class Example extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

       /*$app_id = "135722016595677";
	   $app_secret = "aded05b1410087dafb21f3f93e85279d";
	   $my_url = "http://newleaf.angelldiaz.com";*/

	   $fb_config = array(
		    'appId'  => "135722016595677",
		    'secret' => " 2698ab09f884237aca355520cbb00803"
		);

        $this->load->library('facebook', $fb_config);

        $user = $this->facebook->getUser();

        if ($user) {
            try {
                $data['user_profile'] = $this->facebook->api('/new_leaf');
            } catch (FacebookApiException $e) {
                $user = null;
            }
        }

        if ($user) {
            $data['logout_url'] = $this->facebook->getLogoutUrl();
        } else {
            $data['login_url'] = $this->facebook->getLoginUrl();
        }

        $this->load->view('view',$data);
    }
}