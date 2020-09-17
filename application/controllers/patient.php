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
public function patient_diet()
{
echo $this->input->post("gender");
echo $this->input->post("dinner");
echo $this->input->post("lunch");
echo $this->input->post("snakes");
echo $this->input->post("snakes");
echo $this->input->post("snakes");

echo $this->input->post("snakes");
echo $this->input->post("snakes");

echo $this->input->post("snakes");

}


	public function nisha()
	{   
	 $data['pageTitle'] = 'Patient Form';
		$data['smallTitle'] = 'Patient Form';
	    $data['mainPage'] = 'Patient Form';
		$data['subPage'] = 'Patient Form';
		$data['title'] = 'Patient Form';
	    $data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/customerJs';
	    $data['mainContent'] = 'nisha';
	    $this->load->view("includes/mainContent",$data);
	}
	public function addpatinfo(){
		$data=array(
				'first_name'=>$this->input->post("fname"),
				'middle_name'=>$this->input->post("mname"),
				'last_name'=> $this->input->post("lname"),
				'father_name'=>$this->input->post("father"),
				'mother_name'=>$this->input->post("mother"),
				'gender'=>$this->input->post("gender"),
				'address'=> $this->input->post("address"),
				'post'=>$this->input->post("post"),
				'tehsil'=>$this->input->post("tehsil"),
				'block'=> $this->input->post("block"),
				'city'=>$this->input->post("city"),
				'state'=>$this->input->post("state"),
				'area'=> $this->input->post("area"),
				'pincode'=>$this->input->post("pincode"),
				'email'=>$this->input->post("email"),
				'dob'=>$this->input->post("dob"),
				'mobile_number'=>$this->input->post("mobile"),
				'telephone_number'=>$this->input->post("number"),
				'voter_id'=>$this->input->post("voter"),
				'aadhar_card'=>$this->input->post("adhaar"),
				'pan_card'=>$this->input->post("pancard"),
				//'country'=>$this->input->post("country"),
				'password'=>$this->input->post("password")

);

				$this->load->model("Patientmodel");
				$this->Patientmodel->addpatient($data);	 
				redirect('patient/nisha'); 
				//echo "submmitted";
				//print_r($data);

	}
	public function diet()
	{   

	    $data['pageTitle'] = 'Patient Diet';
		$data['smallTitle'] = 'Patient Diet Form';
	    $data['mainPage'] = 'Patient Diet Form';
		$data['subPage'] = 'Patient Diet Form';
		$data['title'] = 'Patient Diet Form';
	    $data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/customerJs';
	    $data['mainContent'] = 'patient_diet';
	    $this->load->view("includes/mainContent", $data);
	}
	public function smoking_status()
	{   

	    $data['pageTitle'] = 'Smoking Status';
		$data['smallTitle'] = 'Smoking Status';
	    $data['mainPage'] = 'Smoking Status';
		$data['subPage'] = 'Smoking Status';
		$data['title'] = 'Smoking Status';
	    $data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/customerJs';
	    $data['mainContent'] = 'smoking_status';
	    $this->load->view("includes/mainContent", $data);
	}
	function alcohol_status(){
	    $data['pageTitle'] = 'Alcohol Status';
		$data['smallTitle'] = 'Alcohol Status';
		$data['mainPage'] = 'alcohol_status';
		$data['subPage'] = 'Alcohol Status';
		$data['title'] = 'Alcohol Status';
		$data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/customerJs';
		$data['mainContent'] = 'alcohol_status';
		$this->load->view("includes/mainContent", $data);
	    
	}
	function patient_exercise(){
	    $data['pageTitle'] = 'Patient Exercise';
		$data['smallTitle'] = 'Patient Exercise';
		$data['mainPage'] = 'Patient Exercise';
		$data['subPage'] = 'Patient Exercise';
		$data['title'] = 'Patient Exercise';
		$data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/customerJs';
		$data['mainContent'] = 'patient_exercise';
		$this->load->view("includes/mainContent", $data);
	    
	}
   
}

