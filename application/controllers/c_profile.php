<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

//include_once 'underscore.php';

class C_profile extends CI_Controller {
	
	public function index()
	{
		
		$this->load->model("M_profile","data_model");
		$data = $this->data_model->Get_data();
		$body = $this->load->view("v_profile", $data, true);
		//echo var_dump($data);
		$this->load->view("view_template",array("tittle"=>"we share","body"=>$body));
	}
}
?>