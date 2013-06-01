<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

//include_once 'underscore.php';

class C_product extends CI_Controller {

	public function index()
	{	
		$object_id = 5;
		$this->load->model("M_product","data_model");
		$data = $this->data_model->Get_data($object_id);
		$body = $this->load->view("v_product", $data, true);
		$this->load->view("view_template",array("tittle"=>"we share","body"=>$body));
		
	}
}
?>