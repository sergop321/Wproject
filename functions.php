<?php



 function enter_keywords_into_urls($url_id,$keywords)
  {
  	global $mysqli;
    $result = $mysqli->query("UPDATE e_commerce_sites_list SET meta_keywords = '$keywords' WHERE id=$url_id");
  }







 function get_keywords($url)
  {
      $tags = get_meta_tags($url);  
	  return $tags['keywords'];
  }
  
  
  
  
  
  
function fixUrl($url,$part=NULL){
	//lowercase
	$url = strtolower($url);
	
	//add http if absent
	if (!(preg_match("#^http.*#", $url))){
		$url = "http://" . $url;
	}
	
	//remove www
	$url = str_replace("www.", "", $url);
	
	//check URL is valid
	if (!isValidUrl($url)){
		return false;
	}
	
	//parse URL
	$parts = parse_url($url);
	
	//check that URL was parsed correctly
	if (!(is_array($parts))){
		return false;
	}
	
	if($part==NULL){
		$part = "default";
	}
	
	switch($part){
		case "default":
			return ($parts['scheme'] ."://". $parts['host'] . $parts['path']);
		break;
		
		case "domain":
			return $parts['host'];
		break;
		
		case "domain,path":
			return $parts['host'] . $parts['path'];
		break;
		
		case "path":
			return $parts['path'];
		break;
		
		case "full":
			return $parts;
		break;
	}
}






function isValidURL($url){	
	return preg_match('|^http(s)?://[a-z0-9-]+(.[a-z0-9-]+)*(:[0-9]+)?(/.*)?$|i', $url);
}
  
 




 
 function enter_domain($domain)
  {

  	global $mysqli;
	$domain = trim($domain);
    $mysqli->query("INSERT INTO smb_domains (domain) VALUES ('$domain')");
  }
  

  
  
  
  
  
  
  
  
  
  
 function get_domain_id($domain)
  {
	global $mysqli;
	if ($result = $mysqli->query("SELECT * FROM smb_domains WHERE domain='$domain'")) {
    	$domain = $result->fetch_object();
    	$result->close();
    	return $domain->id;
	}
	else return false;
  }
  
  
  

 
  
  
  
  
  
 function enter_domain_id_into_url($domain_id,$url_id)
  {
  	global $mysqli; 
    $result = $mysqli->query("UPDATE e_commerce_sites_list SET domain_id = $domain_id WHERE id=$url_id");
  } 

  // =================================================

  
 function enter_keyword($keyword)
  {
  	global $mysqli;
	$keyword = trim($keyword);
    $result = $mysqli->query("INSERT INTO smb_keywords (keyword) VALUES ('$keyword')"); 
  }
  
  
 function get_keyword_id($keyword)
 {
  	global $mysqli;
	if ($result = $mysqli->query("SELECT * FROM smb_keywords WHERE keyword='$keyword'")) 
	{
    	$keyword = $result->fetch_object();
    	$result->close();
    	return $keyword->id;
	}
	else return false;
 }
  
  
  
  
  
  
  

  
  
  
  
 function enter_url_id_keyword_id($url_id,$keyword_id)
  {
  	global $mysqli;
    $result = $mysqli->query("INSERT INTO smb_urls_keywords (url_id,keyword_id) VALUES ($url_id,$keyword_id)");
  }
  








  
 function set_keywords_count($url_id,$count)
  {
  	global $mysqli;
    $result = $mysqli->query("UPDATE e_commerce_sites_list SET keywords_count = $count WHERE id=$url_id");
  }
  
  

?>