<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

//include_once 'underscore.php';

class C_home_page extends CI_Controller {
	
	public function index()
	{
		$this->load->model("M_home","data_model");
		$data = $this->data_model->Get_data();
	}
}
?>