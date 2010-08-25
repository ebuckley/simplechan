<?php

class Home extends Controller {

	function home()
	{
		parent::Controller();
		
	}
	
	function index()
	{
		
		$this->load->model('Postmodel', '', TRUE);
		
		$homeViewData =array(
		'data'=>$this->Postmodel->getQuery(),
		);
		$this->load->view('html_head');
		$this->load->view('home_view', $homeViewData);
	}
}

/* End of file home.php */
/* Location: ./system/application/controllers/home.php */
