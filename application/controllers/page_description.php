<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

//include_once 'underscore.php';

class Page_description extends CI_Controller {
	private $mongo_db_url = "mongodb://localhost:27017";
	private $mongo_collection = 'facebook_pages';
	private $limit_per_tag = 10;
	private $show_per_tag = 2;

	function index($page)
	{
		$page_id = end(explode("_", $page));
		
		$this -> session -> set_userdata('page_id', $page_id);
		//echo "info".phpinfo();
		$data_for_head['tittle'] = "FBBI - Result Page";
		$data_for_head['extra_js_file'] = array("page_description","string_helpers");
		$page_data = $this -> get_page();
		$fields_not_to_show = $this -> applay_restrictions($page_data);
		$data_for_page['tags'] = $page_data['data_for_tag']['tags'];
		$data_for_page['page_data_not_show'] = $fields_not_to_show;
		$data_for_page['page_data'] = $page_data['data_for_tag']['data'];
		$data_for_page['related_pages'] = $page_data['related_pages'];

		$this -> load -> view("head_for_search", $data_for_head);
		$this -> load -> view("pagedescription", $data_for_page);
	}

	function applay_restrictions(&$page_data)
	{
		$data = $page_data['data_for_tag']['data'];
		$res = $this -> db -> get('search_restrictions') -> result_array();
		$not_show_fields = array();
		//print_r($res);
		foreach ($res as $obj)
		{
			switch ($obj['restriction_name'])
			{
				case 'EX' :
					foreach (explode(",",$obj['fields']) as $field)
					{
						if (isset($data[$field]))
						{
							$not_show_fields[$field] = $data[$field];
							unset($data[$field]);
						}
					}
					break;
				case 'NC' :
					foreach (explode(",",$obj['fields']) as $field)
					{
						if (isset($data[$field]))
						{
							$data[$field] = number_format($data[$field]);
						}
					}
					break;
				case 'TOP' :
					$temp_array = array();
					foreach (explode(",",$obj['fields']) as $field)
					{
						if (isset($data[$field]))
						{
							$temp_array[$field] = $data[$field];
							unset($data[$field]);
						}
					}
					$data = array_merge($temp_array, $data);
					break;
				case 'ML' :
					foreach (explode(",",$obj['fields']) as $field)
					{
						if (isset($data[$field]))
						{
							$data[$field] = "<a href='" . $data[$field] . "' target='_blank'>" . $data[$field] . "</a>";
						}
					}
					break;
				case 'MT' :
					//foreach (explode(",",$obj['fields']) as $field)
					//{
						$field = $obj['fields'];
						if (isset($data[$field]))
						{
							$data[$field] = "<a href='../../" . $data[$field] . "' >" . $data[$field] . "</a>";
						}
					//}
					break;
				case 'RN' :
					break;
				case 'RU_UC' :
					$new_data = array();
					if ($obj['fields'] == "all")
					{
						foreach ($data as $key => $value)
						{
							$key = ucwords(str_replace("_", " ", $key));
							$new_data[$key] = $value;
						}
						$data = $new_data;
					}
					else
					{
						foreach (explode(",",$obj['fields']) as $field)
						{
							//TODO: partial keys
						}
					}
					break;

				default :
					break;
			}
		}

		$page_data['data_for_tag']['data'] = $data;

		return $not_show_fields;
	}

	function get_page()
	{
		$this -> load -> model("__", "__");

		$search_for = empty($search_for) ? $this -> session -> userdata['page_id'] : NULL;
		
		//$search_for = "112720642097846";
		if (!empty($search_for))
		{
			$obj_to_return = array();
			$m = new Mongo($this -> mongo_db_url);
			//echo var_dump($m->getConnections());
			$db = $m -> selectDB($this -> mongo_collection);
			$likes_collection = $db -> fb_pages;

			$query = array('id' => $search_for);

			$cursor = $likes_collection -> find($query) -> limit(1);
			$cursor_array = iterator_to_array($cursor);
			if (!empty($cursor_array))
			{
				$obj_to_return["data_for_tag"]["data"] = __::first(iterator_to_array($cursor));
				$res_tags = $this -> db -> where('page_id', $search_for) -> get('page_tag') -> result_array();
				$res_tags = __::pluck($res_tags, 'tag_id');
				$res_tags_names = __::pluck($this -> db -> select('name') -> where_in("id", $res_tags) -> get('tags') -> result_array(), 'name');
				$obj_to_return["data_for_tag"]['tags'] = $res_tags_names;
				$pages_ids = array();
				foreach ($res_tags as $tag)
				{
					$res = $this -> db -> get_where("page_tag", array("tag_id" => $tag), $this -> limit_per_tag) -> result_array();
					array_push($pages_ids, __::pluck($res, "page_id"));
				}

				$pages_ids = __::uniq(__::flatten($pages_ids));
				$key = array_search($search_for, $pages_ids);
				$key  = empty($key) ? -1 : $key;
				unset($pages_ids[$key]);
				$pages_ids = array_slice($pages_ids, 0, count($res_tags)*$this->show_per_tag);
				
				$query = array('id' => array('$in' => $pages_ids));
				$cursor = $likes_collection -> find($query);

				$related_pages = __::map(iterator_to_array($cursor), function($obj)
				{
					$desc;
					if (empty($obj["description"]))
					{
						$desc = !empty($obj["about"]) ? $obj["about"] : "";
					}
					else
					{
						$desc = $obj["description"];
					}
					$obj["likes"] = number_format($obj["likes"]);
					$desc = substr($desc, 0,155);		
					$temp = substr($desc,155,1000);		 
					$desc = !empty($temp) ? $desc."..." : $desc;
					$pic = !empty($obj["cover"]["source"]) ? $obj["cover"]["source"] : "";
					$category = !empty($obj["category"]) ? $obj["category"] : "";
					return array("name" => $obj["name"], "likes" => $obj["likes"], "pic" => $pic, "description" => $desc, "id" => $obj["id"], "category" => $category);
				});

				$obj_to_return["related_pages"] = $related_pages;
				//		echo var_dump($obj_to_return);
				$m -> close();
				return $obj_to_return;
			}
			else
			{
				return array("data_for_tag"=>array("data"=>array(),"tags"=>array()),"related_pages" => array());
			}
		}
		else
		{
			return array("error" => "session empty");
		}
	}

}
?>