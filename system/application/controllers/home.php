<?php

class Home extends Controller {

	function home()
	{
		parent::Controller();
		
	}
	
	function index()
	{
		$this->load->view('html_head');
		$this->load->view('home_view');
	}
}

/* End of file home.php */
/* Location: ./system/application/controllers/home.php */
