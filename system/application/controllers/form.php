<?php
	
class Form extends Controller {
	
	function index()
	{
		$this->load->helper(array('form', 'url'));
		
		$this->load->library('form_validation');
				
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('formsubmit');
		}
		else
		{
			$this->load->view('formsuccess');
		}
	}
}

?>
