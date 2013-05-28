<?php
class M_product extends CI_Model
{
	private $user_fields_to_show = array("user_name", "renter_score", "facebook_profile_url", "phone");
														
	private $objects_viewed_limit = 3;
	private $notification_limit = 3; 
	private $product_url = "products/";
	private $search_results_url = "";
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model("__");
	}
	
	 public function Get_data($object_id)
	 {
		$object_info = $this->get_object_info($object_id);
		$user_info = $this->get_user_info($object_id);
		$object_images = $this->get_object_images($object_id);
		$related_objects = $this->get_related_objects($object_id);
	 	
		return array("object_info" => $object_info, "user_info" => $user_info, "object_images" => $object_images, "related_objects" => $related_objects); 
	 }
	 
	 private function get_object_info($object_id)
	 {
	 	
	 }
	 
	 private function get_user_info($object_id)
	 {
	 	$user_id_array = $this->db->select("user_id")->get_where("objects", array("id" => $object_id))->row_array();
		$user_id = $user_id_array["user_id"];
		
		$fields = implode(", ", $this->user_fields_to_show);
	 	$user_info = $this->db->select($fields)->get_where("users",array("id"=>$user_id))->row_array();
		return $user_info;
	 }
	 
	 private function get_object_images($object_id)
	 {
	 	$images = $this->db->select("pic_url")->get_where("object_pictures",array("object_id"=>$object_id, "is_show" => 1))->result_array();
		
		return $images;
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
	 
	 private function get_related_objects($object_id)
	 {
		//TODO: add this feature in the future(in mockup too)
		return array();
	 }
}
?>
