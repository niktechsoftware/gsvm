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
	    $this->load->view("includes/mainContent", $data);
	}
	public function addpatinfo(){

			$this->load->model("Patientmodel");
		    $tblnm ="reg_patient_info";
		    $maxid	=	$this->Patientmodel->pat_max($tblnm);
		    $tblnm ="reg_patient_info";
		    $maxid	=	$maxid+1;
			$username="GSVM".$maxid;
			$rn=rand(9999,99999);
			$usern1=$maxid+$rn;
			$username1="GSVM".$usern1;
			$data=array(
				'username'=>$username1,
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
	function newform(){
	    $data['pageTitle'] = 'Patient Exercise';
		$data['smallTitle'] = 'Patient Exercise';
		$data['mainPage'] = 'Patient Exercise';
		$data['subPage'] = 'Patient Exercise';
		$data['title'] = 'Patient Exercise';
		$data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/customerJs';
		$data['mainContent'] = 'newform';
		$this->load->view("includes/mainContent", $data);
	    
	}

	
		function patient_diet(){
				$data=array(
				'reg_id'=>$this->input->post('id'),
					'dietary_habit'=>$this->input->post("dietary_habit"),
					'break_fast'=>$this->input->post("breakfast"),
					'lunch'=>$this->input->post('lunch'),
					'snakes'=>$this->input->post("snake"),
					'dinner'=>$this->input->post('dinner'),
					'red_meat'=>$this->input->post('meat'),
					'fish'=>$this->input->post('fish'),
					'desserts'=>$this->input->post('dessert'),
					'chicken'=>$this->input->post('chicken'),
					'fried_food'=>$this->input->post('friedfood'),
					'pork'=>$this->input->post('pork'),
					'meat_routine'=>$this->input->post('meat_routine')




						);
				$this->load->model('Patientmodel');
				$this->Patientmodel->insertdiet($data);
				//echo "okkk";
				redirect(base_url()."index.php/patient/patient_diet");
		


		}

		function patient_smokingstatus(){
				$data=array(
					'reg_id'=>$this->input->post('id'),
					'your_smoking_status'=>$this->input->post('answer'),
					'duration'=>$this->input->post('duration'),
					'when_left'=>$this->input->post('left'),
					'number_of_cigaratte'=>$this->input->post('many'),
					//'number_of_year'=>$this->input->post(''),
					'smokein_family_member'=>$this->input->post('know'),
					'paan_with_tabbacco'=>$this->input->post('paan'),
					'tambakoo'=>$this->input->post('tambacco'),
					'zarda_khaini'=>$this->input->post('zarda'),
					'other'=>$this->input->post('other')

					);
				$this->load->model('Patientmodel');
				$this->Patientmodel->smoking_status($data);
				//echo "okkk";
				redirect(base_url()."index.php/patient/smoking_status");
		


		}

		function patient_alcoholstatus(){
				$data=array(
					'reg_id'=>$this->input->post('id'),
					'drinking_alcohol'=>$this->input->post('answer'),
					'alcoholic_beverages'=>$this->input->post('alcohol'),
					'beer'=>$this->input->post('left'),
					'wine'=>$this->input->post('wine'),
					'hard_liquor'=>$this->input->post('hard')
					);
				$this->load->model('Patientmodel');
				$this->Patientmodel->alcohol_status($data);
				//echo "okkk";
				redirect(base_url()."index.php/patient/alcohol_status");
		


		}
		
		function patient_exercisestatus(){
			//echo $reg_id=$this->input->post('id');
				$data=array(
					'reg_id'=>$this->input->post('id'),

					'sitting_for_large_time'=>$this->input->post('sitting'),
					'yoga'=>$this->input->post('yoga'),
					'sakha'=>$this->input->post('sakha'),
					'gym'=>$this->input->post('gym'),
					'walk'=>$this->input->post('walk'),
					'running'=>$this->input->post('running'),
					'swimming'=>$this->input->post('swimming'),
					'never'=>$this->input->post('never'),
					'other'=>$this->input->post('other'),
					'frequency'=>$this->input->post('frequency'),
					'sedantary'=>$this->input->post('sedantary'),
					'moderate'=>$this->input->post('moderate'),
					'vigorous'=>$this->input->post('vigorous'),
					'duration'=>$this->input->post('duration'),
					'routine'=>$this->input->post('routine'),
					'activity'=>$this->input->post('activity'),
					'fitness'=>$this->input->post('fitness'),
					'improve_fitness'=>$this->input->post('improve_fitness'),
					'sleep_hour'=>$this->input->post('sleep_hour'),
					'exposure'=>$this->input->post('exposure'),
					);
				$this->load->model('Patientmodel');
				$this->Patientmodel->exercise_status($data);
				//echo "okkk";
				redirect(base_url()."index.php/patient/patient_exercise");
		


		}

		

   
}

