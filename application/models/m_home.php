<?php
class M_home_page extends CI_Model
{
	 public function Get_data()
	 {
	 	$this->load->model("__");
	 	$categories_array = $this->db->get_where("category_values")->result_array();
		return $categories_array;
	 }
}
?>
