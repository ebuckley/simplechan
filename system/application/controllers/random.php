<?php

class Random extends Controller
{
	function Random()
	{
		parent::Controller();
		$this->load->model('PostModel', '',TRUE);
	}
	
	function index()
	{
		if ($this->input->post('postContent'))
		{
			$this->PostModel->putPosts();
		}
		else
		{
			"no content";
		}
		
		$indexContent = array(
		'posts'=>$this->PostModel->getPosts()
		);
		$this->load->view('html_head');
		$this->load->view('bview',$indexContent);
	}
}
/* End of file random.php */
/* Location: ./system/application/controllers/random.php */
