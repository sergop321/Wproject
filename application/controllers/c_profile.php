<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

//include_once 'underscore.php';

class C_profile extends CI_Controller {
	
	public function index()
	{
		echo "<html><head>
<meta http-equiv='content-type' content='text/html; charset=UTF-8'/></head>
<body>";
		$this->load->model("M_profile","data_model");
		$data = $this->data_model->Get_data();
		echo var_dump($data);
		echo "</body></html>";
	}
}
?>