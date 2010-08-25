<?php

class Postmodel extends Model
{

	//db fields
	var $postContent = "";
	var $ipAddress = "";
	
	function __construct()
	{
		parent::Model();
	}
	
	//returns an multidimensional array of all fields in the random table
	function getPosts()
	{
		$query = $this->db->get('random');
		return $query->result_array();
	}
	
	//writes the post content and ip/time information to the database
	function putPosts()
	{
		$data = array(
			'content'=>$this->input->post('postContent'),
			'ip'=>$this->input->ip_address(),
			'date'=>time()
			);
		return $this->db->insert('random',$data);
	}
}

?>
