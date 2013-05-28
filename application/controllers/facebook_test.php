<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Facebook_test extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
    	

        
        $user = $this->facebook->getUser();
			echo var_dump($user);
        if ($user) {
            try {
                $data['user_profile'] = $this->facebook->api('/me');
					 echo var_dump($data);
            } catch (FacebookApiException $e) {
            	echo var_dump($e);
                $user = null;
            }
        }

        if ($user) {
            $data['logout_url'] = $this->facebook->getLogoutUrl();
        } else {
            $data['login_url'] = $this->facebook->getLoginUrl();
				echo $data['login_url'];
        }

        //$this->load->view('view',$data);
    }
}
?>