<?php
class M_profile extends CI_Model
{
	private $user_fields_to_show = array("first_name","last_name","user_name", "gender", "email", "adress", 
														"pic_url", "phone","hire_score","renter_score");
														
	private $objects_viewed_limit = 3;
	private $notification_limit = 3; 
	private $product_url = "products/";
	private $search_results_url = "";
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model("__");
	}
	
	 public function Get_data()
	 {
		$user_id = $this->session->userdata("user_id");
		$user_id = 1; //TODO:delete later
		$personal_info = $this->get_personal_info($user_id);
		$messages = $this->get_messages($user_id);
		$your_products = $this->get_your_products($user_id);
		$products_you_look_for = $this->get_products_you_look_for($user_id);
	 	
		return array("personal_info" => $personal_info, "messages" => $messages, "your_products" => $your_products, 
							"products_you_look_for" => $products_you_look_for);
	 }
	 
	 private function get_personal_info($user_id)
	 {
	 	$fields = implode(", ", $this->user_fields_to_show);
	 	$user_info = $this->db->select($fields)->get_where("users",array("id"=>$user_id))->row_array();
		return $user_info;
	 }
	 
	 private function get_messages($user_id)
	 {
	 	//TODO: to do the messages
	 	return array();
	 }
	 
	 private function get_your_products($user_id)
	 {
	 	$products = $this->db->select("name, id")->get_where("objects",array("user_id"=>$user_id, "available" => 1))->result_array();
		$rended_products = $this->rended_products($products, $this->product_url);
		
		return $rended_products;
	 }
	 
	 private function get_products_you_look_for($user_id)
	 {
	 	//TODO: maybe add available=1 in the object in get_where
	 	$products =	$this->db->select('objects.name as name')
								   ->join('objects', 'objects.id = object_id')
									->order_by("date_searched", "desc")
								   ->get_where("user_view_object_relation", array("user_view_object_relation.user_id" => $user_id, "active" => 1), $this->objects_viewed_limit) 
									->result_array();
					
		return $this->rended_products($products, $this->search_results_url);
	 }
	 
	 private function rended_products($products, $url_helper)
	 {
	 	$processed_products = array();
		foreach($products as $product)
		{
			$name_for_url = $this->get_fixed_url_name($product["name"]);
			$link = base_url().$url_helper.$name_for_url;
			$processed_products[] = array("link" => $link, "name" => $product["name"]); 
		} 
		
		return $processed_products;
	 }
	 
	 private function get_fixed_url_name($name)
	 {
	 	//TODO: add some rules here
	 	return $name;
	 }
}
?>
