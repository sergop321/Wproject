<?php
class M_product extends CI_Model
{
	private $user_fields_to_show = array("user_name", "renter_score", "facebook_profile_url");
	private $objects_fields_to_show = array("name", "area", "adress", "price", "description", "extra_info", "phone");
	private $objects_pictures_limit = 3;
	
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
	 	$select_fields = implode(", ", $this->objects_fields_to_show);
		$select_fields .= ", table_name, category_fields_id";
	 	$object_fields = $this->db->select($select_fields)
										  ->from("objects")
										  ->where("available", 1)
										  ->join('category_values', 'category_id = category_values.id')
										  ->get()
										  ->row_array();
										  
		$table_name = $object_fields["table_name"];
		$category_fields_id = $object_fields["category_fields_id"];
		
		unset($object_fields["table_name"]);
		unset($object_fields["category_fields_id"]);
		$object_fields["extra_info"] = json_decode($object_fields["extra_info"], true); 
		
		$object_common_data = $this->db->select($table_name.".*, sub_category.name as sub_category_name")
												 ->from("$table_name")
												 ->join("sub_category", "sub_category.id = $table_name.sub_category_id")
												 ->get()
												 ->row_array();
												 
		unset($object_common_data["id"]);
		unset($object_common_data["sub_category_id"]);
		
		return array("object_spacefic_data" => $object_fields, "object_common_data" => $object_common_data);
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
	 	$images = $this->db->select("pic_url")->get_where("object_pictures",array("object_id"=>$object_id, "is_show" => 1), $this->objects_pictures_limit)->result_array();
		
		return $images;
	 }
	  
	 private function get_related_objects($object_id)
	 {
		//TODO: add this feature in the future(in mockup too)
		return array();
	 }
}
?>
