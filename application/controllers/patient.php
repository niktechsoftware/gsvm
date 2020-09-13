<?php class patient extends CI_Controller{

	public function addpatient()
	{   

	    $data['pageTitle'] = 'Patient Form';
		$data['smallTitle'] = 'Patient Form';
	    $data['mainPage'] = 'Patient Form';
		$data['subPage'] = 'Patient Form';
		$data['title'] = 'Patient Form';
	    $data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/customerJs';
	    $data['mainContent'] = 'addpatient';
	    $this->load->view("includes/mainContent", $data);
	}

	public function 
   
}