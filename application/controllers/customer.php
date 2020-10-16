<?php class customer extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->is_login();
		$this->load->model("cmodel");
	}
	function is_login(){
		$is_login = $this->session->userdata('is_login');
		$is_lock = $this->session->userdata('is_lock');
		$logtype = $this->session->userdata('login_type');
		if(!$is_login){
			//echo $is_login;
			redirect("welcome/index");
		}
		elseif(!$is_lock){
			redirect("welcome/lockPage");
		}
	}
	function customer_list(){
		$uriv = $this->uri->segment(3);
		if($uriv==1){
			$status=1;
			$page = "Active";
	
		}else{
			if($uriv==2){
				$status=0;
				$page = "Inctive";
			}else{
				if($uriv==3){
					$status=2;
					$page = "Paid Inactive";
				}
			}
		}
		$matchcon="status";
		$tblname="employee_info";
	
		$dt = $this->cmodel->getcustomerdata($matchcon,$status,$tblname);
		$data['row']=$dt;
		$data['uriv'] = $uriv;
		$data['pageTitle'] = $page.' Employee list';
		$data['smallTitle'] = $page.' Employee list';
		$data['mainPage'] = $page.' Employee list';
		$data['subPage'] = $page.' Employee list';
		$data['title'] = $page.' Employee list';
		$data['headerCss'] = 'headerCss/customerlistcss';
		$data['footerJs'] = 'footerJs/customerlistjs';
		$data['mainContent'] = 'active_list';
		$this->load->view("includes/mainContent", $data);
	
	}
	
   function	 edit_profile(){
	  $cid= $this->input->post("id");
	  	$photo_name = time().trim($_FILES['photo']['name']);
	  $data["employee_iname"]= $this->input->post("cname");
	  $data["fname"]= $this->input->post("fname");
	  $data["city"]= $this->input->post("city");
	  $data["state"]= $this->input->post("state");
	  $data["current_address"]= $this->input->post("cadd");
	  $data["permanent_address"]= $this->input->post("peradd");
	  $data["pin"]= $this->input->post("pin");
	  $data["email"]= $this->input->post("email");
	  $data["mobilenumber"]= $this->input->post("mno");
	  $data["altnumber"]= $this->input->post("pmno");
	  $data["adhaarnumber"]= $this->input->post("adhar");
	  $data["pannumber"]= $this->input->post("panno");
	  $data["gender"]= $this->input->post("gender");
	  $data["dob"]= $this->input->post("dob");
	  $data["password"]= $this->input->post("password");
	  
	 // $data["photo"]= $this->input->post("photo");
	  	if (!empty($_FILES['photo']['name'])){
	  	    $this->load->library('upload');
			$image_path = realpath(APPPATH . '../assets/img/users/');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '50000';
			$config['file_name'] = $photo_name;
			
			$this->upload->initialize($config);
			 if($this->upload->do_upload('photo')){
	     	$data["image"]=$photo_name;
	    	}
	  	}
	  	    $this->db->where("id",$cid);
			$dt=	$this->db->update("employee_info",$data);
        if($dt){
        		redirect("clogin/customer_profile/$cid/success");
        			}else{
        		redirect("clogin/customer_profile/$cid/fail");   
        			}
			}

			function Diagnosis_of_disease(){
				
	    $data['pageTitle'] = 'Diagnosis_of_disease';
		$data['smallTitle'] = 'Diagnosis_of_disease';
		$data['mainPage'] = 'Diagnosis_of_disease';
		$data['subPage'] = 'Diagnosis_of_disease';
		$data['title'] = 'Diagnosis_of_disease';
		$data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/customerJs';
		$data['mainContent'] = 'diagnosis_of_disease';
		$this->load->view("includes/mainContent", $data);
	    
	}
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


function Oral_Cancer(){
    
    $data['uri'] =false;
	    if($this->input->post("username")){
	        $this->db->where("username",$this->input->post("username"));
	       $getpi =  $this->db->get("reg_patient_info");
	       if($getpi->num_rows()>0){
	           $data['uri'] =true;
	           $data['id']=$getpi->row()->id;
	           $data['msg'] ="Username of patien ".$getpi->row()->username. " found";
	       }
	       else{
	           $data['uri'] =0;
	           $data['id']=0;
	            $data['msg'] ="Username of patien is wrong";
	       }
	    }
	     if($this->uri->segment(3)=="success"){
	          $this->db->where("id",$this->uri->segment(4));
	            $getpi =  $this->db->get("reg_patient_info");
	       if($getpi->num_rows()>0){
	           $data['uri'] =true;
	           $data['id']=$getpi->row()->id;
	           $data['msg'] ="Username of patien ".$getpi->row()->username. " found";
	       }
	       else{
	           $data['uri'] =0;
	           $data['id']=0;
	            $data['msg'] ="Username of patien is wrong";
	       }
	         
	     }   
	    $data['pageTitle'] = 'Oral Cancer ';
		$data['smallTitle'] = 'Oral Cancer ';
		$data['mainPage'] = 'Oral Cancer ';
		$data['subPage'] = 'Oral Cancer ';
		$data['title'] = 'Oral Cancer ';
		$data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/customerJs';
		$data['mainContent'] = 'oral_cancer_proforma';
		$this->load->view("includes/mainContent", $data);
	    
	}

	function Breast_Cancer(){
	   
	     $data['uri'] =false;
	    if($this->input->post("username")){
	        $this->db->where("username",$this->input->post("username"));
	       $getpi =  $this->db->get("reg_patient_info");
	       if($getpi->num_rows()>0){
	           $data['uri'] =true;
	           $data['id']=$getpi->row()->id;
	           $data['msg'] ="Username of patien ".$getpi->row()->username. " found";
	       }
	       else{
	           $data['uri'] =0;
	           $data['id']=0;
	            $data['msg'] ="Username of patien is wrong";
	       }
	    }
	     if($this->uri->segment(3)=="success"){
	          $this->db->where("id",$this->uri->segment(4));
	            $getpi =  $this->db->get("reg_patient_info");
	       if($getpi->num_rows()>0){
	           $data['uri'] =true;
	           $data['id']=$getpi->row()->id;
	           $data['msg'] ="Username of patien ".$getpi->row()->username. " found";
	       }
	       else{
	           $data['uri'] =0;
	           $data['id']=0;
	            $data['msg'] ="Username of patien is wrong";
	       }
	         
	     }   
	      
	    $data['pageTitle'] = 'Breast Cancer ';
		$data['smallTitle'] = 'Breast Cancer ';
		$data['mainPage'] = 'Breast Cancer ';
		$data['subPage'] = 'Breast Cancer ';
		$data['title'] = 'Breast Cancer ';
		$data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/customerJs';
		$data['mainContent'] = 'breast_cancer_proforma';
		$this->load->view("includes/mainContent", $data);
	    
	}
	function hypertension(){
	    
	     $data['uri'] =false;
	    if($this->input->post("username")){
	        $this->db->where("username",$this->input->post("username"));
	       $getpi =  $this->db->get("reg_patient_info");
	       if($getpi->num_rows()>0){
	           $data['uri'] =true;
	           $data['id']=$getpi->row()->id;
	           $data['msg'] ="Username of patien ".$getpi->row()->username. " found";
	       }
	       else{
	           $data['uri'] =0;
	           $data['id']=0;
	            $data['msg'] ="Username of patien is wrong";
	       }
	    }
	     if($this->uri->segment(3)=="success"){
	          $this->db->where("id",$this->uri->segment(4));
	            $getpi =  $this->db->get("reg_patient_info");
	       if($getpi->num_rows()>0){
	           $data['uri'] =true;
	           $data['id']=$getpi->row()->id;
	           $data['msg'] ="Username of patien ".$getpi->row()->username. " found";
	       }
	       else{
	           $data['uri'] =0;
	           $data['id']=0;
	            $data['msg'] ="Username of patien is wrong";
	       }
	         
	     }   
	    $data['pageTitle'] = 'Hypertension Proforma';
		$data['smallTitle'] = 'Hypertension Proforma';
		$data['mainPage'] = 'Hypertension Proforma';
		$data['subPage'] = 'Hypertension Proforma';
		$data['title'] = 'Hypertension Proforma';
		$data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/customerJs';
		$data['mainContent'] = 'hypertension_proforma';
		$this->load->view("includes/mainContent", $data);
	    
	}
	function table(){
	    $data['pageTitle'] = 'Hypertension_Proforma';
		$data['smallTitle'] = 'Hypertension_Proforma';
		$data['mainPage'] = 'Hypertension_Proforma';
		$data['subPage'] = 'Hypertension_Proforma';
		$data['title'] = 'Hypertension_Proforma';
		$data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/customerJs';
		$data['mainContent'] = 'table';
		$this->load->view("includes/mainContent", $data);
	    
	}
	function diabetes(){
	     $data['uri'] =false;
	    if($this->input->post("username")){
	        $this->db->where("username",$this->input->post("username"));
	       $getpi =  $this->db->get("reg_patient_info");
	       if($getpi->num_rows()>0){
	           $data['uri'] =true;
	           $data['id']=$getpi->row()->id;
	           $data['msg'] ="Username of patien ".$getpi->row()->username. " found";
	       }
	       else{
	           $data['uri'] =0;
	           $data['id']=0;
	            $data['msg'] ="Username of patien is wrong";
	       }
	    }
	     if($this->uri->segment(3)=="success"){
	          $this->db->where("id",$this->uri->segment(4));
	            $getpi =  $this->db->get("reg_patient_info");
	       if($getpi->num_rows()>0){
	           $data['uri'] =true;
	           $data['id']=$getpi->row()->id;
	           $data['msg'] ="Username of patien ".$getpi->row()->username. " found";
	       }
	       else{
	           $data['uri'] =0;
	           $data['id']=0;
	            $data['msg'] ="Username of patien is wrong";
	       }
	         
	     }   
	    $data['pageTitle'] = 'Diabetes Proforma';
		$data['smallTitle'] = 'Diabetes Proforma';
		$data['mainPage'] = 'Diabetes Proforma';
		$data['subPage'] = 'Diabetes Proforma';
		$data['title'] = 'Diabetes Proforma';
		$data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/customerJs';
		$data['mainContent'] = 'diabetes_proforma';
		$this->load->view("includes/mainContent", $data);
	    
	}
	function coronary(){
	      $data['uri'] =false;
	    if($this->input->post("username")){
	        $this->db->where("username",$this->input->post("username"));
	       $getpi =  $this->db->get("reg_patient_info");
	       if($getpi->num_rows()>0){
	           $data['uri'] =true;
	           $data['id']=$getpi->row()->id;
	           $data['msg'] ="Username of patien ".$getpi->row()->username. " found";
	       }
	       else{
	           $data['uri'] =0;
	           $data['id']=0;
	            $data['msg'] ="Username of patien is wrong";
	       }
	    }
	     if($this->uri->segment(3)=="success"){
	          $this->db->where("id",$this->uri->segment(4));
	            $getpi =  $this->db->get("reg_patient_info");
	       if($getpi->num_rows()>0){
	           $data['uri'] =true;
	           $data['id']=$getpi->row()->id;
	           $data['msg'] ="Username of patien ".$getpi->row()->username. " found";
	       }
	       else{
	           $data['uri'] =0;
	           $data['id']=0;
	            $data['msg'] ="Username of patien is wrong";
	       }
	         
	     }   
	    $data['pageTitle'] = 'Coronary';
		$data['smallTitle'] = 'Coronary proforma';
		$data['mainPage'] = 'Coronary proforma';
		$data['subPage'] = 'Coronary proforma';
		$data['title'] = 'Coronary proforma';
		$data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/customerJs';
		$data['mainContent'] = 'coronary_proforma';
		$this->load->view("includes/mainContent", $data);
	    
	}
	function bpi(){
	     $data['uri'] =false;
	    if($this->input->post("username")){
	        $this->db->where("username",$this->input->post("username"));
	       $getpi =  $this->db->get("reg_patient_info");
	       if($getpi->num_rows()>0){
	           $data['uri'] =true;
	           $data['id']=$getpi->row()->id;
	           $data['msg'] ="Username of patien ".$getpi->row()->username. " found";
	       }
	       else{
	           $data['uri'] =0;
	           $data['id']=0;
	            $data['msg'] ="Username of patien is wrong";
	       }
	    }
	     if($this->uri->segment(3)=="success"){
	          $this->db->where("id",$this->uri->segment(4));
	            $getpi =  $this->db->get("reg_patient_info");
	       if($getpi->num_rows()>0){
	           $data['uri'] =true;
	           $data['id']=$getpi->row()->id;
	           $data['msg'] ="Username of patien ".$getpi->row()->username. " found";
	       }
	       else{
	           $data['uri'] =0;
	           $data['id']=0;
	            $data['msg'] ="Username of patien is wrong";
	       }
	         
	     }   
	    $data['pageTitle'] = 'Biochemicl Parameters';
		$data['smallTitle'] = 'Biochemicl Parameters';
		$data['mainPage'] = 'Biochemicl Parameters';
		$data['subPage'] = 'Biochemicl Parameters';
		$data['title'] = 'Biochemicl Parameters';
		$data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/customerJs';
		$data['mainContent'] = 'biochemical_parameters';
		$this->load->view("includes/mainContent", $data);
	    
	}
function bpi_submit(){	 
    $uri=$this->input->post("preg");
	$data=array(
	    "reg_id"=>$this->input->post("preg"),
	"hemoglobin_level"=>$this->input->post("himo_level"),
	"hemoglobin_unit"=>$this->input->post("himo_unit"),
	"tlc_level"=>$this->input->post("tlclevel"),
	"tlc_unit"=>$this->input->post("tlcunit"),
	"dlc_n_level"=>$this->input->post("dlcnlevel"),
	"dlc_nunit"=>$this->input->post("dlcnunit"),
	"dlc_l_level"=>$this->input->post("dlcllevel"),
	"dlc_l_unit"=>$this->input->post("dlclunit"),
	"dlc_m_level"=>$this->input->post("dlcmlevel"),
	"dlc_m_unit"=>$this->input->post("dlcmunit"),
	"dlc_b_level"=>$this->input->post("dlcblevel"),
	"dlc_b_unit"=>$this->input->post("dlcbunit"),
	"dlc_e_level"=>$this->input->post("dlcelevel"),
	"dlc_e_unit"=>$this->input->post("dlceunit"),
	"trbc_level"=>$this->input->post("trbclevel"),
	"trbc_unit"=>$this->input->post("trbcunit"),
	"mcv_level"=>$this->input->post("mcvlevel"),
	"mcv_unit"=>$this->input->post("mcvunit"),
	"mch_level"=>$this->input->post("mchleve"),
	"mch_unit"=>$this->input->post("mchunit"),
	"mchc_level"=>$this->input->post("mchclevel"),
	"mchc_unit"=>$this->input->post("mchcunit"),
	"rdw_level"=>$this->input->post("rdwlevel"),
	"rdw_unit"=>$this->input->post("rdwunit"),
	"esr_level"=>$this->input->post("esrlevel"),
	"esr_unit"=>$this->input->post("esrunit"),
	"pvc_level"=>$this->input->post("pcvlevel"),
	"pvc_unit"=>$this->input->post("pcvlevel"),
	"gbp_level"=>$this->input->post("gbplevel"),
	"gbp_unit"=>$this->input->post("gbpunit"),
	"bsf_level"=>$this->input->post("bsflevel"),
	"bsf_unit"=>$this->input->post("bsfunit"),
	"bspp_level"=>$this->input->post("bspplevel"),
	"bspp_unit"=>$this->input->post("bsppunit"),
	"rbs_level"=>$this->input->post("rbslevel"),
	"rbs_unit"=>$this->input->post("rbsunit"),
	"ogtt_level"=>$this->input->post("ogttlevel"),
	"ogtt_unit"=>$this->input->post("ogttunit"),
	"hba1c_level"=>$this->input->post("hba1clevel"),
	"hba1c_unit"=>$this->input->post("hba1unit"),
	"s_tp_level"=>$this->input->post("stplevel"),
	"s_tp_unit"=>$this->input->post("stpunit"),
	"microprotein_level"=>$this->input->post("mplevel"),
	"microprotein_unit"=>$this->input->post("mpunit"),
	"s_albumin_level"=>$this->input->post("salevel"),
	"s_albumin_unit"=>$this->input->post("saunit"),
	"microalbumin_level"=>$this->input->post("malevel"),
	"microalbumin_unit"=>$this->input->post("maunit"),
	"a_g_ratio_level"=>$this->input->post("agrlevel"),
	"a_g_ratio_unit"=>$this->input->post("agrunit"),
	"s_b_t_level"=>$this->input->post("sbtlevel"),
	"s_b_t_unit"=>$this->input->post("sbtunit"),
	"s_b_d_level"=>$this->input->post("sbdlevel"),
	"s_b_d_unit"=>$this->input->post("sbdunit"),
	"s_b_ind_level"=>$this->input->post("sbinlevel"),
	"s_b_ind_unit"=>$this->input->post("sbinunit"),
	"sgot_level"=>$this->input->post("sgotleve"),
	"sgot_unit"=>$this->input->post("sgotunit"),
	"sgpt_level"=>$this->input->post("sgptlevel"),
	"sgpt_unit"=>$this->input->post("sgptunit"),
	"alp_level"=>$this->input->post("alplevel"),
	"alp_unit"=>$this->input->post("alpunit"),
	"ldh_level"=>$this->input->post("ldhlevel"),
	"ldh_unit"=>$this->input->post("ldhunit"),
	"na_level"=>$this->input->post("nalevel"),
	"na_unit"=>$this->input->post("naunit"),
	"k_leve"=>$this->input->post("klevel"),
	"k_unit"=>$this->input->post("kunit"),
	"s_u_level"=>$this->input->post("sulevel"),
	"s_u_unit"=>$this->input->post("suunit"),
	"s_c_level"=>$this->input->post("sclevel"),
	"s_c_unit"=>$this->input->post("scunit"),
	"u_b_level"=>$this->input->post("ublevel"),
	"u_b_unit"=>$this->input->post("ubunit"),
	"l_p_level"=>$this->input->post("lplevel"),
	"l_p_unit"=>$this->input->post("lpunit"),
	"t_c_level"=>$this->input->post("tclevel"),
	"t_c_unit"=>$this->input->post("tcunit"),
	"triglyceride_level"=>$this->input->post("tlevel"),
	"triglyceride_unit"=>$this->input->post("tunit"),
	"hdl_level"=>$this->input->post("hdllevel"),
	"hdl_unit"=>$this->input->post("hdlunit"),
	"ldl_level"=>$this->input->post("ldllevel"),
	"ldl_unit"=>$this->input->post("ldlunit"),
	"vldl_level"=>$this->input->post("vldllevel"),
	"vldl_unit"=>$this->input->post("vldlunit"),
	"sa_level"=>$this->input->post("salevel"),
	"sa_unit"=>$this->input->post("saunit"),
	"sl_level"=>$this->input->post("sllevel"),
	"sl_unit"=>$this->input->post("slunit"),
	"ua_level"=>$this->input->post("ualevel"),
	"ua_unit"=>$this->input->post("uaunit"),
	"t3_level"=>$this->input->post("t3level"),
	"t3_unit"=>$this->input->post("t3unit"),
	"t4_level"=>$this->input->post("t4level"),
	"t4_unit"=>$this->input->post("t4unit"),
	"tsh_level"=>$this->input->post("tshlevel"),
	"tsh_unit"=>$this->input->post("tshunit"),
	"ft3_level"=>$this->input->post("ft3level"),
	"ft3_unit"=>$this->input->post("ft3unit"),
	"ft4_level"=>$this->input->post("ft4level"),
	"ft4_unit"=>$this->input->post("ft4unit"),
	"ct_level"=>$this->input->post("ctlevel"),
	"ct_unit"=>$this->input->post("ctunit"),
	"vb12_level"=>$this->input->post("b12level"),
	"vb12_level"=>$this->input->post("b12uni"),
	"hv_d_level"=>$this->input->post("hvdlevel"),
	"hv_d_unit"=>$this->input->post("hvdunit"),
	"ue_c_level"=>$this->input->post("ueclevel"),
	"ue_c_unit"=>$this->input->post("uecunit"),
	"ue_ph_level"=>$this->input->post("uephlevel"),
	"ue_ph_unit"=>$this->input->post("uephunit"),
	"ue_sg_level"=>$this->input->post("uesglevel"),
	"ue_sg_unit"=>$this->input->post("uesgunit"),
	"c_sg_level"=>$this->input->post("csglevel"),
	"c_sg_unit"=>$this->input->post("csgunit"),
	"c_k_level"=>$this->input->post("cklevel"),
	"c_k_unit"=>$this->input->post("ckunit"),
	"c_p_level"=>$this->input->post("cplevel"),
	"c_p_unit"=>$this->input->post("cpunit"),
	"c_u_level"=>$this->input->post("culevel"),
	"c_u_unit"=>$this->input->post("cuunit"),
	"c_b_level"=>$this->input->post("cblevel"),
	"c_b_unit"=>$this->input->post("cbunit"),
	"m_l_level"=>$this->input->post("mllevel"),
	"m_l_unit"=>$this->input->post("mlunit"),
	"m_rbc_level"=>$this->input->post("mrlevel"),
	"m_rbc_unit"=>$this->input->post("mrunit"),
	"m_casts_level"=>$this->input->post("mrlevel"),
	"m_casts_unit"=>$this->input->post("mrunit"),
	"m_crystals_level"=>$this->input->post("mcrlevel"),
	"m_crystals_unit"=>$this->input->post("mcrunit"),
	"m_ec_level	"=>$this->input->post("meclevel"),
	"m_ec_unit"=>$this->input->post("mecunit"),
	"m_fb_level"=>$this->input->post("mfblevel"),
	"m_fb_unit"=>$this->input->post("mfbunit"),
	"m_dlc_level"=>$this->input->post("mdlclevel"),
	"m_dlc_unit"=>$this->input->post("mdlcunit"),
	"vm_hiv_level"=>$this->input->post("vmhivlevel"),
	"vm_hiv_unit"=>$this->input->post("vmhivunit"),
	"vm_hbsag_level"		=>		$this->input->post("vmhblevel"),
	"vm_hbsag_unit"			=>		$this->input->post("vmhbunit"),
	"vm_hcv_level"			=>		$this->input->post("vmhcvlevel"),
	"vm_hcv_unit"			=>		$this->input->post("vmhcvunit"),
	
	);
	
	$this->db->insert("bpi_investigation",$data);
		redirect('customer/bpi/success/'.$uri); 
}

function observation(){
	    $data['pageTitle'] = 'Observation';
		$data['smallTitle'] = 'Observation';
		$data['mainPage'] = 'Observation';
		$data['subPage'] = 'Observation';
		$data['title'] = 'Observation';
		$data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/customerJs';
		$data['mainContent'] = 'Observation';
		$this->load->view("includes/mainContent", $data);
	    
	}



	function oralcancer_proforma(){
	 $uri=$this->input->post("preg");
	$data=array(
	    "reg_id"=>$this->input->post("preg"),
		"date"=>date("Y-m-d"),
	    "mother"=> $this->input->post("mother"),
	    "father"=> $this->input->post("father"),
	    "aunt"=> $this->input->post("aunt"),
	    "sister"=> $this->input->post("sister"),
	    "brother"=> $this->input->post("brother"),
	    "cousin"=> $this->input->post("cousin"),
	    "others"=> $this->input->post("other"),
	    "treatment_for_any"=> $this->input->post("treatment"),
	    "family_oral_cancer"=> $this->input->post("oraldetail"),
	    "mouth_disease"=> $this->input->post("mouthdisease"),
	    "history_medical_paper"=> $this->input->post("mouthdiseasedetail"),
	    "radiotherapy_report"=> $this->input->post("radiotherapy"),
	    "chemotherapy"=> $this->input->post("chemotherapy"),
	    "drugs_name"=> $this->input->post("drugs"),
	    "ct_scan"=> $this->input->post("ct_scan"),
	    "mother"=> $this->input->post("mother"),
	    "father"=> $this->input->post("father"),
	    "aunt"=> $this->input->post("aunt"),
	    "sister"=> $this->input->post("sister"),
	    "brother"=> $this->input->post("brother"),
	    "cousin"=> $this->input->post("cousin"),
	    "others"=> $this->input->post("other"),
	    "treatment_for_any"=> $this->input->post("treatment"),
	    "family_oral_cancer"=> $this->input->post("oraldetail"),
	    "mouth_disease"=> $this->input->post("mouthdisease"),
	    "history_medical_paper"=> $this->input->post("mouthdiseasedetail"),
	    "radiotherapy_report"=> $this->input->post("radiotherapy"),
	    "chemotherapy"=> $this->input->post("chemotherapy"),
	    "drugs_name"=> $this->input->post("drugs"),
	    "ct_scan"=> $this->input->post("ct_scan"),
	    "mri"=> $this->input->post("mri"),
	    "oral_squamous_cell_carcinoma"=> $this->input->post("squamous_cell"),
	    "buccal_mucosa"=> $this->input->post("buccal"),
	     "buccal_mucosa_vestibule"=> $this->input->post("sister"),
	    "buccal_mucosa_vestibule"=> $this->input->post("buccalvestibula"),
	    "alveolar_mucosa"=> $this->input->post("alveolar"),
	    "palate"=> $this->input->post("palate"),
	    "vestibule"=> $this->input->post("vestibule"),
	    "tounge"=> $this->input->post("tounge"),
	    "lip"=> $this->input->post("lip"),
	    "well_differentiated"=> $this->input->post("well_differentiated"),
	    "moderately_differentiated"=> $this->input->post("moderately"),
	    "poorly_differentiated"=> $this->input->post("poorly"),
	    "addition_details"=> $this->input->post("additionaldetails"),
	    "t1"=> $this->input->post("t1"),
	    "t2"=> $this->input->post("t2"),
	    "t3"=> $this->input->post("t3"),
	    "t4"=> $this->input->post("t4"),
	    "n1"=> $this->input->post("n1"),
	    "n2"=> $this->input->post("n2"),
	    "n2a"=> $this->input->post("n2a"),
	    "n2b"=> $this->input->post("n2b"),
	    "n2c"=> $this->input->post("n2c"),
	    "n3"=> $this->input->post("n3"),
	    "m0"=> $this->input->post("m0"),
	    "m1"=>$this->input->post("m1")
	);
			$this->load->model("Cmodel");
			$this->Cmodel->oral_cancer_proforma($data);	 
			redirect('customer/Oral_Cancer/success/'.$uri); 
			//echo "submmitted";
				//print_r($data);
}

function breast_cancer_proforma(){
    $uri=$this->input->post("preg");
	$data=array(
	    "reg_id"=>$this->input->post("preg"),
		"date"=>date("Y-m-d H:i:s"),
	    "many_children"=> $this->input->post("children"),
	    "your_ageat_first_child_birth"=> $this->input->post("age"),
	    "breast_feed_your_baby"=> $this->input->post("breastfeed"),
	    "duration_breast_feed_baby"=> $this->input->post("duration"),
	    "miscarriage"=> $this->input->post("miscarriage"),
	    "abortion"=> $this->input->post("abortion"),
	    "ectopic_pragnancy"=> $this->input->post("ectopic"),
	    "visited_doctor"=> $this->input->post("visited"),
	    "medication_treatment_breast_cancer"=> $this->input->post("disease"),
	    "drugs_name"=> $this->input->post("drugs"),
	    "diagnosed_breast_cancer"=> $this->input->post("familycancer"),
	    "diagnosed_ovarian_cancer"=> $this->input->post("ovariancancer"),
	    "mother"=> $this->input->post("mother"),
	    "father"=> $this->input->post("father"),
	    "aunt"=> $this->input->post("aunt"),
	    "sister"=> $this->input->post("sister"),
	    "cousin"=> $this->input->post("cousin"),
	    "other"=> $this->input->post("other"),
	    "breast_examination"=> $this->input->post("examination"),
	    "age_of_menarche"=> $this->input->post("ageofmenarche"),
	    "age_of_menopausal"=> $this->input->post("ageofmenopausal"),
	    "primary"=> $this->input->post("primary"),
	    "mammography"=> $this->input->post("mammography"),
	    "chest_xray"=> $this->input->post("chestreport"),
	    "usg"=> $this->input->post("usg"),
	    "bone_scan"=> $this->input->post("bonescan"),
	    "pet_scan"=> $this->input->post("petscan"),
	    "histopathology_ca_breast"=> $this->input->post("cabreast"),
	    "er_report_status"=> $this->input->post("erreport"),
	    "t1"=> $this->input->post("t1"),
	    "t2"=> $this->input->post("t2"),
	    "t3"=> $this->input->post("t3"),
	    "t4"=> $this->input->post("t4"),
	    "n1"=> $this->input->post("n1"),
	    "n2"=> $this->input->post("n2"),
	    "n2a"=> $this->input->post("n2a"),
	    "n2b"=> $this->input->post("n2b"),
	    "n2c"=> $this->input->post("n2c"),
	    "n3"=> $this->input->post("n3"),
	    "m0"=> $this->input->post("m0"),
	    "m1"=>$this->input->post("m1"),
	    "history_of_chemotherapy"=> $this->input->post("hormonal"),
	    "post_operative_specimen"=> $this->input->post("specimen")
	);
			$this->load->model("Cmodel");
			$this->Cmodel->breast_cancer_proforma($data);	 
			redirect('customer/Breast_Cancer/success/'.$uri); 
			
}

function diabetes_proforma(){
 $uri=$this->input->post("preg");
	$data=array(
	    "reg_id"                    =>  $this->input->post("preg"),
		"date"                      =>  date("Y-m-d H:i:s"),
	    "known_about_diabetes"      =>  $this->input->post("knownaboutdiabetes"),
	    "family_history_diabetes"   =>  $this->input->post("familyhistory"),
	    "whoom"                     =>  $this->input->post("whoom"),
	    "blood_sugar_level"         =>  $this->input->post("blood_sugar"),
	    "why"                       =>  $this->input->post("bloodsugardetail"),
	    "one"                       =>  $this->input->post("one"),
	    "two"                       =>  $this->input->post("two"),
	    "three"                     =>  $this->input->post("three"),
	    "more"                      =>  $this->input->post("more"),
	    "when_you_test"             =>  $this->input->post("whentest"),
	    "low_blood_pressure"        =>  $this->input->post("lbp"),
	    "regular"                   =>  $this->input->post("regular"),
	    "mixtard_insulin"           =>  $this->input->post("mixtard_insulin"),
	    "oral_hypoglycemic_agents"  =>  $this->input->post("oral_hypoglycemic_agents"),
	    "morning"                   =>  $this->input->post("morning"),
	    "midday"                    =>  $this->input->post("midday"),
	    "afternoon"                 =>  $this->input->post("afternoon"),
	    "evening"                   =>  $this->input->post("evening"),
	    "night"                     =>  $this->input->post("night"),
	    "treat_low_blood_pressure"  =>  $this->input->post("treatlowbloodsugar"),
	    "ever_lost_sensetolow_blood_pressure"   => $this->input->post("lostsense"),
	    "when_itlast_occur"         =>  $this->input->post("bloodsugar"),
	    "hba1c_blood_sugar_level"   =>  $this->input->post("hbalc"),
	    "last_level"                =>  $this->input->post("last_level"),
	    "daily"                     =>  $this->input->post("daily"),
	    "weekly"                    =>  $this->input->post("weekly"),
	    "monthly"                   =>  $this->input->post("monthly"),
	    "other"                     =>  $this->input->post("other"),
	    "bpmorning"                 =>  $this->input->post("morning"),
	    "bpmidday"                  =>  $this->input->post("bpmidday"),
	    "bpafternoon"               =>  $this->input->post("bpafternoon"),
	    "bpevening"                 =>  $this->input->post("bpevening"),
	    "at_night"                  =>  $this->input->post("at_night"),
	    "treat_blood_sugar"         =>  $this->input->post("treatsugar"),
	    "addition_information"      =>  $this->input->post("addition_information"),
	    "high_bp"                   =>  $this->input->post("hbpressure"),
	    "medicine"                  =>  $this->input->post("hbpressuredtl"),
	    "heart_disease"             =>  $this->input->post("hrtdisease"),
	    "hd_medicine"               =>  $this->input->post("hrtdiseasedetail"),
	    "high_cholestrol"           =>  $this->input->post("hghcholestrol"),
	    "hc_medicine"               =>  $this->input->post("hghcholestroldetail"),
	    "high_triglycerides"        =>  $this->input->post("hghtrigly"),
	    "htri_medicine"             =>  $this->input->post("hghtriglydetail"),
	    "cataract"                  =>  $this->input->post("glaucoma"),
	    "ct_medicine"               =>  $this->input->post("glaucomadetail"),
	    "stroke"                    =>  $this->input->post("stroke"),
	    "stroke_medicine"           =>  $this->input->post("strokedetail"),
	    "retinotherapy"             =>  $this->input->post("retinopathy"),
	    "retina_medicine"           =>  $this->input->post("retinopathydetail"),
	    "kidney_problem"            =>  $this->input->post("kidneyproblem"),
	    "kid_medicine"              =>  $this->input->post("kidneyprobdetail"),
	    "neuropathy"                =>  $this->input->post("neuropathy"),
	    "neuropathy_medicine"       =>  $this->input->post("neuropathydetail"),
	    "addition_information"      =>  $this->input->post("addition_information"),
	    "teeth_gum"                 =>  $this->input->post("teethndgum"),
	    "teeth_medicine"            =>  $this->input->post("teethndgumdetail"),
	    "osteoporosis"              =>  $this->input->post("osteoporosis"),
	    "osteoporosis_medicine"     =>  $this->input->post("osteoporosisdetail"),
	    "sexual_dysfunction"        =>  $this->input->post("dysfunction"),
	    "sexual_medicine"           =>  $this->input->post("sexual_medicine"),
	    "organ_transplant"          =>  $this->input->post("organ_transplant"),
	    "Organ_transplant_medicine" =>  $this->input->post("Organ_transplant_medicine"),
	    "thyroid_dysfunction"       =>  $this->input->post("thyroiddys"),
	    "thyroid_dysfunction_medicine"  => $this->input->post("thyroiddysdetail"),
	    "polycystic_ovarian_disease"    => $this->input->post("polycystic"),
	    "polycystic_ovarian_disease_medicine"=> $this->input->post("polycysticdetail"),
    	"complication_of_diabetes"      => $this->input->post("complication"),
	    "others"                    => $this->input->post("others"),
	    "other_medicine"            => $this->input->post("otherdetail"),
	    "taking_any_medicine"       => $this->input->post("compldiabetesdetail"),
	    "seewell_with_lense"        => $this->input->post("lense"),
	    "take_pills_for_diabetes"   => $this->input->post("take_pills"),
	    "type_of_pills"             => $this->input->post("type_of_pill"),
	    "time_of_day"               => $this->input->post("time_of_day"),
	    "duration_of_use"           => $this->input->post("duration_of_use"),
	    "take_insulin"              => $this->input->post("take_insulin"),
	    "regular_insulin"           => $this->input->post("regular_insulin"),
	    "take_mixtard_insulin"      => $this->input->post("take_mixtard_insulin"),
	    "see_doctor_monthly"        => $this->input->post("monthly"),
	    "every_3month"              => $this->input->post("every_3month"),
	    "every_6month"              => $this->input->post("every_6month"),
	    "not_visited"               => $this->input->post("not_visited"),
	    "last_eye_checkup"          => $this->input->post("last_eye_checkup"),
	    "angry"                     => $this->input->post("angry"),
	    "afraid"                    => $this->input->post("afraid"),
	    "confused"                  => $this->input->post("confused"),
	    "sad"                       => $this->input->post("sad"),
	    "upset"                     => $this->input->post("upset"),
	    "eat_better_other"          => $this->input->post("eat_better_other"),
	    "much_stresss"              => $this->input->post("much_stresss"),
	    "stress_example"            => $this->input->post("stress_example"),
	    "handle_stress"             => $this->input->post("handle_stress"),
	    "depressed"                 => $this->input->post("depressed"),
	    "depressed_example"         => $this->input->post("depressed_example"),
	    "diabetes_diet_plan"        => $this->input->post("dietplan"),
	    "special_meal"              => $this->input->post("specialmeal"),
	    "low_crbohydrate"           => $this->input->post("low_crbohydrate"),
	    "low_cholestrol"            => $this->input->post("low_cholestrol"),
	    "other_meal"                => $this->input->post("other_meal"),
	    "change_weight"             => $this->input->post("change_weight"),
	    "gain"                      => $this->input->post("gain"),
	    "gain_weight_in_kg"         => $this->input->post("gain_weight_in_kg"),
	    "depressed_example"         => $this->input->post("depressed_example"),
	    "loss"=> $this->input->post("loss"),
	    "loss_weight_in_kg"=> $this->input->post("loss_weight_in_kg"),
	    "height"=> $this->input->post("height"),
	    "age"=> $this->input->post("age"),
	    "current_weight"=> $this->input->post("current_weight"),
	    "happy_with_your_current_weight"=> $this->input->post("happyyrweight"),
	    "loosing_weight"=> $this->input->post("loosingweight"),
	    "food_alergies"=> $this->input->post("foodalergies"),
	    "food_name"=> $this->input->post("food_name"),
	    "bevarage_intolerance"=> $this->input->post("bevarage_intolerance"),
	    "bev_foods_name"=> $this->input->post("intolerancefood"),
	    "your_appetite"=> $this->input->post("your_appetite"),
	    "digestion_problem"=> $this->input->post("digestionprblm"),
	    "chewing"=> $this->input->post("chewing"),
	    "swallowing"=> $this->input->post("swallowing"),
	    "stomachache"=> $this->input->post("stomachache"),
	    "diarrhea"=> $this->input->post("diarrhea"),
	    "constipation"=> $this->input->post("constipation"),
	    "taking_vitamin"=> $this->input->post("taking_vitamin"),
	    "niacin"=> $this->input->post("niacin"),
	    "salt_subtitute"=> $this->input->post("salt_subtitute"),
	    "vitamin_d"=> $this->input->post("vitamin_d"),
	    "calcium"=> $this->input->post("calcium"),
	    "chromium"=> $this->input->post("chromium"),
	    "selenium"=> $this->input->post("selenium"),
	    "iron"=> $this->input->post("iron"),
	    "folic_acid"=> $this->input->post("folicacid"),
	    "vitamin_e"=> $this->input->post("vitamin_e"),
	    "vitamin_b6"=> $this->input->post("vitaminb6"),
	    "vitamin_b12"=> $this->input->post("vitaminb12")
    );
			$this->load->model("Cmodel");
			$this->Cmodel->diabetes_proforma($data);	 
			redirect('customer/diabetes/success/'.$uri); 
		
}


function hypertenstion_proforma(){
 $uri=$this->input->post("preg");
	$data=array(
	    "reg_id"=>$this->input->post("preg"),
		"date"=>date("Y-m-d H:i:s"),
	    "headache"=> $this->input->post("headache"),
	    "anxity"=> $this->input->post("anxity"),
	    "restlessness"=> $this->input->post("restlessness"),
	    "sweatign_sudden_onset"=> $this->input->post("sweatign_sudden_onset"),
	    "notice_your_heartbeat"=> $this->input->post("notice_your_heartbeat"),
	    "nasal_bleeding"=> $this->input->post("nasal_bleeding"),
	    "monthly"=> $this->input->post("monthly"),
	    "every_3month"=> $this->input->post("every_3month"),
	    "every_6month"=> $this->input->post("every_6month"),
	    "once_a_year"=> $this->input->post("once_a_year"),
	    "high_blood_pressure"=> $this->input->post("high_blood_pressure"),
	    "hbp_detail"=> $this->input->post("hbp_detail"),
	    "blood_pressure_reading"=> $this->input->post("blood_pressure_reading"),
	    "blood_pressure_high_loss"=> $this->input->post("blood_pressure_high_loss"),
	    "high_low_bp_reading"=> $this->input->post("high_low_bp_reading"),
	    "check_blood_pressure"=> $this->input->post("check_blood_pressure"),
	    "fill_reading"=> $this->input->post("fill_reading"),
	    "checking_tdate"=> $this->input->post("checking_tdate"),
	    "blurry_vision"=> $this->input->post("blurry_vision"),
	    "chest_pain"=> $this->input->post("chest_pain"),
	    "dizziness"=> $this->input->post("dizziness"),
	    "symptoms_headache"=> $this->input->post("symptoms_headache"),
	    "none"=> $this->input->post("none"),
	    "other"=> $this->input->post("other"),
	    "affect_performance_ability"=> $this->input->post("affect_performance_ability"),
	    "how_affect"=> $this->input->post("how_affect"),
	    "physical_activity"=> $this->input->post("physical_activity"),
	    "physical_activity_detail"=> $this->input->post("physical_activity_detail"),
	    "diabetes"=> $this->input->post("diabetes"),
	    "diabetes_detail"=> $this->input->post("diabetes_detail"),
	    "heartattack"=> $this->input->post("heartattack"),
	    "heartattack_detail"=> $this->input->post("heartattack_detail"),
	    "heart_failure"=> $this->input->post("heart_failure"),
	    "heart_failure_detail"=> $this->input->post("heart_failure_detail"),
	    "enlarged_heart"=> $this->input->post("enlarged_heart"),
	    "angina"=> $this->input->post("chest_pain"),
	    "chest_pain_detail"=>$this->input->post("chest_pain_detail"),
	    "coronary_bypass"=> $this->input->post("coronary_bypass"),
	    "coronary_bypass_detail"=> $this->input->post("coronary_bypass_detail"),
	    "stroke"=> $this->input->post("stroke"),
	    "stroke_detail"=> $this->input->post("stroke_detail"),
	    "high_cholestrol"=> $this->input->post("high_cholestrol"),
	    "high_cholestrol_detail"=> $this->input->post("high_cholestrol_detail"),
	    "kidney_dysfunction"=> $this->input->post("kidney_dysfunction"),
	    "kidney_dysfunction_detail"=> $this->input->post("kidney_dysfunction_detail"),
	    "kidney_dialysis"=> $this->input->post("kidney_dialysis"),
	    "kidney_dialysis_detail"=> $this->input->post("kidney_dialysis_detail"),
	    "norrowing_of_arteries"=> $this->input->post("norrowing_of_arteries"),
	    "norrowing_of_arteries_detail"=> $this->input->post("norrowing_of_arteries_detail"),
	    "speach_difficulty"=> $this->input->post("speach_difficulty"),
	    "speach_difficulty_detail"=> $this->input->post("speach_difficulty_detail"),
	    "weakness_one_side"=> $this->input->post("weakness_one_side"),
	    "slurred_speech"=> $this->input->post("slurred_speech"),
	    "slurred_speech_detail"=> $this->input->post("slurred_speech_detail"),
	    "loss_of_balance"=> $this->input->post("loss_of_balance"),
	    "loss_of_balance_detail"=>$this->input->post("loss_of_balance_detail"),
	    "fainting_losing"=> $this->input->post("fainting_losing"),
	    "fainting_losing_detail"=> $this->input->post("fainting_losing_detail"),
	    "dizziness2"=> $this->input->post("dizziness2"),
	    "feeling_depressed"=> $this->input->post("feeling_depressed"),
	    "feeling_tried"=> $this->input->post("feeling_tried"),
	    "shortness_of_breath"=> $this->input->post("shortness_of_breath"),
	    "cough"=> $this->input->post("cough"),
	    "decreased_interest_insex"=> $this->input->post("decreased_interest_insex"),
	    "headache3"=> $this->input->post("headache3"),
	    "tinglings_of_hand"=> $this->input->post("tinglings_of_hand"),
	    "leg_cramps"=> $this->input->post("leg_cramps"),
	    "swelling"=> $this->input->post("swelling"),
	    "thumping_racing_heart"=> $this->input->post("thumping_racing_heart"),
	    "feeling_week_standup"=> $this->input->post("feeling_week_standup"),
	    "diificulty_in_sleeping"=> $this->input->post("diificulty_in_sleeping"),
	    "unable_toget_erection"=> $this->input->post("unable_toget_erection"),
	    "cold_hand_feet"=> $this->input->post("cold_hand_feet"),
	    "diificulty_in_breathing"=> $this->input->post("diificulty_in_breathing"),
	    "reduce_salt"=> $this->input->post("reduce_salt"),
	    "walk_exercise"=> $this->input->post("walk_exercise"),
	    "serving_of_vegetable"=> $this->input->post("serving_of_vegetable"),
	    "maintain_normal_weight"=> $this->input->post("maintain_normal_weight"),
	    "alcohol_in_moderation"=> $this->input->post("alcohol_in_moderation"),
	    "blood_pressure_medication"=> $this->input->post("blood_pressure_medication"),
	    "7day_pillbox"=> $this->input->post("7day_pillbox"),
	    "carry_pills_withme"=> $this->input->post("carry_pills_withme"),
	    "take_pills_same_time"=> $this->input->post("take_pills_same_time"),
	    "keep_pills_see_them"=> $this->input->post("keep_pills_see_them"),
	    "use_watch_with_alarms"=> $this->input->post("use_watch_with_alarms"),
	    "other_specify"=> $this->input->post("other_specify"),
	    "blood_pressure_monotor"=> $this->input->post("blood_pressure_monotor"),
	    "keep_track_bp_reading"=> $this->input->post("keep_track_bp_reading"),
	    "check_food_lebel"=> $this->input->post("check_food_lebel"),
	    "step_counter"=> $this->input->post("step_counter"),
	    "fruit_serving"=> $this->input->post("fruit_serving"),
	    "vegetable_serving"=> $this->input->post("vegetable_serving"),
	    "timing_of_drink_alcohol"=> $this->input->post("timing_of_drink_alcohol"),
	    "eat_salty_snakes"=> $this->input->post("eat_salty_snakes"),
	    "eat_fast_food"=> $this->input->post("eat_fast_food"),
	    "eat_chicken_soup"=> $this->input->post("eat_chicken_soup")
	 
);
			$this->load->model("Cmodel");
			$this->Cmodel->hypertension_proforma($data);	 
			redirect('customer/hypertension/success/'.$uri); 
			
}

function coronary_proforma(){
  $uri=$this->input->post("preg");
 
	$data=array(
	    "reg_id"=>$this->input->post("preg"),
		"date"=>date("Y-m-d H:i:s"),
	    "bp_too_low"=> $this->input->post("bp_too_low"),
	    "bp_low_detail"=> $this->input->post("bp_low_detail"),
	    "pain_your_chest"=> $this->input->post("pain_your_chest"),
	    "pain_your_chest_detail"=> $this->input->post("pain_your_chest_detail"),
	    "own_heart_beat"=> $this->input->post("own_heart_beat"),
	    "extra_heartbeat"=> $this->input->post("extra_heartbeat"),
	    "ankles_badly_swollen"=> $this->input->post("ankles_badly_swollen"),
	    "coronary_heart_disease"=> $this->input->post("coronary_heart_disease"),
	    "cold_hand_feet_trouble"=> $this->input->post("cold_hand_feet_trouble"),
	    "excretion_at_rest"=> $this->input->post("excretion_at_rest"),
	    "get_out_of_breath"=> $this->input->post("get_out_of_breath"),
	    "cholestrol_level_high"=> $this->input->post("cholestrol_level_high"),
	    "morning_cough"=> $this->input->post("morning_cough"),
	    "coughing_up_blood"=> $this->input->post("coughing_up_blood"),
	    "increased_anxiety"=> $this->input->post("increased_anxiety"),
	    "recurrent_fatigue"=> $this->input->post("recurrent_fatigue"),
	    "migraine"=> $this->input->post("migraine"),
	    "painful_knees"=> $this->input->post("painful_knees"),
	    "walking_short_distances"=> $this->input->post("walking_short_distances"),
	    "exposure_to_loud_noises"=> $this->input->post("exposure_to_loud_noises"),
	    "pneumonia_accompanied"=> $this->input->post("pneumonia_accompanied"),
	    "weight_loss"=> $this->input->post("weight_loss"),
	    "dehydration_rapid_heartbeat"=> $this->input->post("dehydration_rapid_heartbeat"),
	    "vein_thrombosis"=> $this->input->post("vein_thrombosis"),
	    "causes_of_dm"=> $this->input->post("causes_of_dm"),
	    "detached_retina"=> $this->input->post("detached_retina"),
	    "cause_of_hypertension"=> $this->input->post("cause_of_hypertension"),
	    "lens_transplant"=> $this->input->post("lens_transplant"),
	    "period_problems"=> $this->input->post("period_problems"),
	    "childbirth_related_problem"=> $this->input->post("childbirth_related_problem"),
	    "urine_loss"=> $this->input->post("urine_loss"),
	    "pap_smear"=> $this->input->post("pap_smear"),
	    "hormone_replacement_therapy"=> $this->input->post("hormone_replacement_therapy"),
	    /*"heart_failure_detail"=> $this->input->post("heart_failure_detail"),
	    "enlarged_heart"=> $this->input->post("enlarged_heart"),
	    "angina"=> $this->input->post("chest_pain"),
	    "chest_pain_detail"=>$this->input->post("chest_pain_detail"),
	    "coronary_bypass"=> $this->input->post("coronary_bypass"),*/
	    "prescription_taken"=> $this->input->post("prescription_taken"),
	    "self_prescribed_medication"=> $this->input->post("self_prescribed_medication"),
	    "date_of_physical_examination"=> $this->input->post("date_of_physical_examination"),
	    "physical_examination_result"=> $this->input->post("physical_examination_result"),
	    "date_of_chest_xray"=> $this->input->post("date_of_chest_xray"),
	    "chest_xray_result"=> $this->input->post("chest_xray_result"),
	    "date_of_electrocardiogram"=> $this->input->post("date_of_electrocardiogram"),
	    "electrocardiogram_result"=> $this->input->post("electrocardiogram_result"),
	    "date_of_dental_checkup"=> $this->input->post("date_of_dental_checkup"),
	    "dental_checkup_result"=> $this->input->post("dental_checkup_result"),
	    "diagnostic_test"=> $this->input->post("diagnostic_test"),
	    "hospitalization"=> $this->input->post("hospitalization"),
	    "drug_allergies"=> $this->input->post("drug_allergies"),
	    "arine_in_place_of_butter"=> $this->input->post("arine_in_place_of_butter"),
	    "extra_sugar_usage"=> $this->input->post("extra_sugar_usage"),
	    "add_salt_food"=> $this->input->post("add_salt_food"),
	    "compared_to_weekdays"=> $this->input->post("compared_to_weekdays"),
	    "how_many_time_ago"=>$this->input->post("how_many_time_ago"),
	    "rheumatic_fever"=> $this->input->post("rheumatic_fever"),
	    "disease_of_artries"=> $this->input->post("disease_of_artries"),
	    "varicose_venis"=> $this->input->post("varicose_venis"),
	    "arthritisof_legs"=> $this->input->post("arthritisof_legs"),
	    "abnormal_blood_sugar_test"=> $this->input->post("abnormal_blood_sugar_test"),
	    "phlebitis"=> $this->input->post("phlebitis"),
	    "fainting_spells"=> $this->input->post("fainting_spells"),
	    "epilepsy"=> $this->input->post("epilepsy"),
	    "stroke2"=> $this->input->post("stroke2"),
	    /*"tinglings_of_hand"=> $this->input->post("tinglings_of_hand"),*/
	    "diptheria"=> $this->input->post("diptheria"),
	    "scarlet_fever"=> $this->input->post("scarlet_fever"),
	    "infectious_mononucleosis"=> $this->input->post("infectious_mononucleosis"),
	    "emotional_problem"=> $this->input->post("emotional_problem"),
	    "anemia"=> $this->input->post("anemia"),
	    "thyroid_dysfunction"=> $this->input->post("thyroid_dysfunction"),
	    "pneumonia"=> $this->input->post("pneumonia"),
	    "lung_disease"=> $this->input->post("lung_disease"),
	    "injuries_to_back"=> $this->input->post("injuries_to_back"),
	    "cardiac_infarction"=> $this->input->post("cardiac_infarction"),
	    "how_treatment"=> $this->input->post("how_treatment"),
	    "ecg_ischaemic"=> $this->input->post("ecg_ischaemic"),
	    "ecg_ischaemic_detail"=> $this->input->post("ecg_ischaemic_detail"),
	    "pf_arrhythmia"=> $this->input->post("pf_arrhythmia"),
	    "pf_arrhythmia_detail"=> $this->input->post("pf_arrhythmia_detail"),
	    "blood_pressure_high_at_age"=> $this->input->post("blood_pressure_high_at_age"),
	    "bphigh_at_age_detail"=> $this->input->post("bphigh_at_age_detail"),
	    "beta_blocker"=> $this->input->post("beta_blocker"),
	    "beta_blocker_detail"=> $this->input->post("beta_blocker_detail"),
	    "pacemaker_fitted"=> $this->input->post("pacemaker_fitted"),
	    "pacemaker_fitted_detail"=> $this->input->post("pacemaker_fitted_detail"),
	    "intermittent_claudication"=> $this->input->post("intermittent_claudication"),
	    "intermittent_claudication_detail"=> $this->input->post("intermittent_claudication_detail"),
	    "heart_surgery"=> $this->input->post("heart_surgery"),
	    "heart_surgery_detail"=> $this->input->post("heart_surgery_detail"),
	    "insulin_injection"=> $this->input->post("insulin_injection"),
	    "insulin_injection_detail"=> $this->input->post("insulin_injection_detail"),
	    "the_diabetes_stable"=> $this->input->post("the_diabetes_stable"),
	    "diabetes_stable_detail"=> $this->input->post("diabetes_stable_detail"),
	    "hypo_glycaemic_episode"=> $this->input->post("hypo_glycaemic_episode"),
	    "hypo_glycaemic_detail"=> $this->input->post("hypo_glycaemic_detail"),
	    "suffered_any_attack"=> $this->input->post("suffered_any_attack"),
	    "suffered_any_attack_detail"=> $this->input->post("suffered_any_attack_detail"),
	    "progressive_disorder"=> $this->input->post("progressive_disorder"),
	    "progressive_disorder_detail"=> $this->input->post("progressive_disorder_detail"),
	    "cerebrovascular_accident"=> $this->input->post("cerebrovascular_accident"),
	    "cerebrovascular_accident_detail"=> $this->input->post("cerebrovascular_accident_detail"),
	    "preventing_communication"=> $this->input->post("preventing_communication"),
	    "preventing_communication_detail"=> $this->input->post("preventing_communication_detail"),
	    "hearing_defect"=> $this->input->post("hearing_defect"),
	    "hearing_defect_detail"=> $this->input->post("hearing_defect_detail"),
	    "history_of_psychosis"=> $this->input->post("history_of_psychosis"),
	    "history_of_psychosis_detail"=> $this->input->post("history_of_psychosis_detail"),
	    "abuse_alcohol"=> $this->input->post("abuse_alcohol"),
	    "abuse_alcohol_detail"=> $this->input->post("abuse_alcohol_detail"),
	    "mental_disorder"=> $this->input->post("mental_disorder"),
	    "mental_disorder_detail"=> $this->input->post("mental_disorder_detail"),
	    "cataract_removed"=> $this->input->post("cataract_removed"),
	    "snelling"=> $this->input->post("snelling"),
	    "snelling_detail"=> $this->input->post("snelling_detail"),
	    "weaker_eye"=> $this->input->post("weaker_eye"),
	    "weaker_eye_detail"=> $this->input->post("weaker_eye_detail"),
	    "6/36_respectively"=> $this->input->post("6/36_respectively"),
	    "6/36_respectively_detail"=> $this->input->post("6/36_respectively_detail"),
	    "monocular_vision"=> $this->input->post("monocular_vision"),
	    "monocular_vision_detail"=> $this->input->post("monocular_vision_detail"),
	    "pathological_field_defect"=> $this->input->post("pathological_field_defect"),
	    "pathological_detail"=> $this->input->post("pathological_detail"),
	    "physical_disability"=> $this->input->post("physical_disability"),
	    "physical_disability_detail"=> $this->input->post("physical_disability_detail")
    );
			$this->load->model("Cmodel");
			$this->Cmodel->coronary_proforma($data);	 
			redirect('customer/coronary/success/'.$uri); 
    }
    
    function pestiside(){

	      $data['uri'] =false;
	    if($this->input->post("username")){
	        $this->db->where("username",$this->input->post("username"));
	       $getpi =  $this->db->get("reg_patient_info");
	       if($getpi->num_rows()>0){
	           $data['uri'] =true;

	           $data['id']=$getpi->row()->id;
	           $data['msg'] ="Username of patien ".$getpi->row()->username. " found";
	       }
	       else{
	           $data['uri'] =0;
	           $data['id']=0;
	            $data['msg'] ="Username of patien is wrong";
	       }
	    }
	    
	     if($this->uri->segment(3)=="success"){
	          $this->db->where("id",$this->uri->segment(4));
	            $getpi =  $this->db->get("reg_patient_info");
	       if($getpi->num_rows()>0){
	           $data['uri'] =true;
	           $data['id']=$getpi->row()->id;
	           $data['msg'] ="Username of patient ".$getpi->row()->username. " found";
	       }
	       else{
	           $data['uri'] =0;
	           $data['id']=0;
	            $data['msg'] ="Username of patien is wrong";
	       }
	         
	     }   

	    $data['pageTitle'] = 'Pesticide Parameters';
		$data['smallTitle'] = 'Pesticide Parameters';
		$data['mainPage'] = 'Pesticide Parameters';
		$data['subPage'] = 'Pesticide Parameters';
		$data['title'] = 'Pesticide Parameters';
		$data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/customerJs';
		$data['mainContent'] = 'pestiside_parameters';
		$this->load->view("includes/mainContent", $data);
	    
	}
	function pestiside_Submit(){
		//print_r($this->input->post());
		$regid= $this->input->post('ppid');
		
		$data=array(
				"reg_id" => $regid,
			   "kvm_name" => $this->input->post("kvmname"),
			    "do_you_have_own_farm" => $this->input->post("ownfarm"),
			   "how_many_acre_do_you_cultivate" => $this->input->post("cultivate"),
			   "do_you_use_pesticides_at" => $this->input->post("pestiside"),
			   "which_typeof_crop_you_are_cropping" => $this->input->post("cropping"),
			   "name_and_class_of_pesticide" => $this->input->post("cop"),
			   "gop_organophosphate"=> $this->input->post("gopo"),
			   "gop_organochlorine"=> $this->input->post("gop_o"),
			   "gop_carbamate"=> $this->input->post("gopc"),
			   "gop_pyrethroid"=> $this->input->post("gopp"),
			   "gop_bio_pesticides"=> $this->input->post("gopbp"),
			   "nccacp"=> $this->input->post("ncccp"),
			   "da_h"=> $this->input->post("dah"),
			   "frequency_timing" => $this->input->post("freq"),
			   "diposed"=> $this->input->post("disposed"),
			   	"h_m_y_h_y_b_u_p" => $this->input->post("hmyhybup"),
				"d_y_w_p_c_w_a_p" => $this->input->post("wear"),
				"gloves"=> $this->input->post("gloves"),
				"overalls"=> $this->input->post("overall"),
				"eye_glasses" => $this->input->post("eye_g"),
				 "face_mask" => $this->input->post("fm"),
				"boot_shoes" => $this->input->post("bs"),
				"long_sleeve_shirt" => $this->input->post("lss"),
				"long_pants" => $this->input->post("lpant"),
				"other"  => $this->input->post("others"),
				"pump_spray" => $this->input->post("pummps"),
				"fogging_gun" => $this->input->post("gun"),
				"manually"  => $this->input->post("manually"),
				"pa_yes_no" => $this->input->post("purposes"),
				"pa_where"  => $this->input->post("purposesw"),
				"rcd" => $this->input->post("rcd"),
				"buried" => $this->input->post("bur"),
				"burnt" => $this->input->post("burnt"),
				"tiof"  => $this->input->post("tof"),
				"pirt" => $this->input->post("rt"),
				"other_s" => $this->input->post("othe"),
				"hotf" => $this->input->post("hotf"),
				"h_w" => $this->input->post("hw"),
				"a_e_h_s" => $this->input->post("aehs"),
				"f" => $this->input->post("friends"),
				"sm_tv_r"  => $this->input->post("sm"),
				"other_sp" => $this->input->post("o_sp"),
				"organic_f" => $this->input->post("farming"),
				"loa" => $this->input->post("loa"),
				"wkn" => $this->input->post("weaknesss"),
				"wl"      => $this->input->post("wl"),
				"gfs"      => $this->input->post("gfs"),
				"nit"       => $this->input->post("nit"),
				"a_fatigue"     => $this->input->post("fati"),
				"a_sp"          => $this->input->post("a_sp"),
				"a_sob"    => $this->input->post("a_sob"),
				"a_lh"    => $this->input->post("a_lh"),
				"a_fhb"    => $this->input->post("a_fhb"),
				"ch"    => $this->input->post("ch"),
				"sas"    => $this->input->post("sas"),
				"lgf"    => $this->input->post("lgf"),
				"gba"    => $this->input->post("gba"),
				"ldj"    => $this->input->post("ldj"),
				"ldj_ycs"    => $this->input->post("ldj_ycs"),
				"ldj_sps"    => $this->input->post("ldj_sps"),
				"ldj_j"    => $this->input->post("ldj_j"),
				"ldj_j_ap"    => $this->input->post("ldj_j_ap"),
				"ldj_j_csc"    => $this->input->post("ldj_j_csc"),
				"ldj_j_dcus"    => $this->input->post("ldj_j_dcus"),
				"ldj_j_f"    => $this->input->post("ldj_j_f"),
				"c_walprm"  => $this->input->post("walpr"),
				"c_mlsdbeta" => $this->input->post("mlsdbe"),
				"fsp"   => $this->input->post("fsp"),
				"nvloa" => $this->input->post("nvla"),
				"fwdms"  => $this->input->post("fwdms"),
				"mtu" => $this->input->post("mtu"),
				"stsoa" => $this->input->post("stsa"),
				"sbhbp"   => $this->input->post("sbhbp"),
				"sbedpa" => $this->input->post("sbedpa"),
				"wheezing" => $this->input->post("wheez"),
				"ctigt" => $this->input->post("chest_t"),
				"wyg" => $this->input->post("cctmpm"),
				"fri" => $this->input->post("fri"),
				"loe" => $this->input->post("loe"),
				"uwl" => $this->input->post("wloss"),
				"safl" => $this->input->post("safl"),
				"c_f"  => $this->input->post("fati"),
				"c_ebb"   => $this->input->post("ebb"),
				"c_loa"  => $this->input->post("loapp"),
				"c_n"    => $this->input->post("nausea"),
				"c_slfa"  => $this->input->post("sylfa"),
				"c_wl" => $this->input->post("weitl"),
				"c_is"  => $this->input->post("iskin"),
				"c_j" => $this->input->post("ydse"),
				"c_a" => $this->input->post("saya"),
				"c_sbvs" => $this->input->post("sbvys"),
				"c_rph"  => $this->input->post("rph"),
				"c_csshe"   => $this->input->post("css"),
				"c_walprm"  => $this->input->post("walprm"),
				"c_mlsdbeta"   => $this->input->post("mlsdbeta"),
				"date"=>date("Y-m-d H:i:s")
			  
				);
				$this->db->insert("pesticide_proforma",$data);
				//redirect('customer/pestiside'); 
				$last_id = $this->db->insert_id();
			   // return $last_id; 
				
		//*******************************************************************************************
				$gname = $this->db->get("pestiside_group_name");
					foreach($gname->result() as $groupInfo):
						$this->db->where("group_name_id",$groupInfo->id);
						 $phndetails = $this->db->get("pestiside_head_name");
						$i=1;
					foreach($phndetails->result() as $data):
						$statusv="status".$data->id;
						$crop="crop".$data->id;
						$freq="freq".$data->id;
						$area="area".$data->id;
						//echo $data->id;
						//exit();
						$quantity="quantity".$data->id;
						$resultArray['pestiside_head_id']=$data->id;										
						$resultArray['status']=$this->input->post($statusv);
						$resultArray['crop']=$this->input->post($crop);
						$resultArray['frequency']=$this->input->post($freq);
						$resultArray['area_covered']=$this->input->post($area);
						$resultArray['quantity']=$this->input->post($quantity);
						$resultArray['pid']= $last_id;
					$i++; endforeach;
				endforeach;
				$this->db->insert('pestiside_p_value',$resultArray);

//second table----------------------------------------------------	
			$psie=$this->db->get("pestiside_siexposure");
				foreach($psie->result() as $psi):
				 $ps="psie".$psi->id;
				$resultArray1['siex_head_name']=$psi->id;
				$resultArray1['status']=$this->input->post($ps);
				$resultArray1['pid']=$last_id;
				endforeach;
				$this->db->insert('siexposure_status',$resultArray1);
				
//third table----------------------------------------------------	
				$ephe=$this->db->get("pestiside_eph");
				foreach($ephe->result() as $eph):
				 $ephd="eph".$eph->id;
				 $resultArray2['eph_head_name']= $eph->id;
				 $resultArray2['status']= $this->input->post($ephd);
				$resultArray2['pid']= $last_id;
				endforeach;
				$this->db->insert('pestiside_eph_status',$resultArray2);
				redirect('customer/pestiside'); 
				//echo "suvdd";
	}
	



function matchempid(){
		$username=$this->input->post("username");
		$this->db->where("id",$username);
		$res=$this->db->get("employee_info")->row();
		if($res){
			redirect(base_url()."index.php/customer/observation/sucess/".$username);
		}
		else{
			redirect(base_url()."index.php/customer/observation/false/");
		}
	}

function editdiet_form(){
  $data['pageTitle'] = 'Edit Patient Diet';
		$data['smallTitle'] = 'Edit Patient Diet Form';
	    $data['mainPage'] = 'Edit Patient Diet Form';
	    $uri=$this->uri->segment(3);
	    $this->db->where("id",$uri);
	   	$dietdata=$this->db->get("reg_patient_diet");
	    $data['dietdata']=$dietdata;
		$data['subPage'] = 'Edit Patient Diet Form';
		$data['title'] = 'Edit Patient Diet Form';
	    $data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/customerJs';
	    $data['mainContent'] = 'editdiet_form';
	    $this->load->view("includes/mainContent", $data);
}



function update_dietform(){
				$data=array(
				   
					'dietary_habit'=>$this->input->post("dietary_habit"),
					'break_fast'=>$this->input->post("breakfast"),
					'lunch'=>$this->input->post('lunch'),
					'snakes'=>$this->input->post("snake"),
					'dinner'=>$this->input->post('dinner'),
					'red_meat'=>$this->input->post('meat'),
					'number_of_meat_timing'=>$this->input->post('number_of_meat_timing'),
					'meat_routine'=>$this->input->post('meat_routine'),
					'fish'=>$this->input->post('fish'),
					'fish_routine'=>$this->input->post('fish_routine'),
					'number_of_fish_timing'=>$this->input->post('number_of_fish_timing'),
					'desserts'=>$this->input->post('desserts'),
					'desserts_routine'=>$this->input->post('desserts_routine'),
					'number_of_desserts_timing'=>$this->input->post('number_of_desserts_timing'),
					'pork'=>$this->input->post('pork'),
					'pork_routine'=>$this->input->post('pork_routine'),
					'number_of_timing_pork'=>$this->input->post('number_of_timing_pork'),
					'chicken'=>$this->input->post('chicken'),
					'chicken_routine'=>$this->input->post('chicken_routine'),
					'number_of_chicken_timing'=>$this->input->post('number_of_chicken_timing'),
					'fried_food'=>$this->input->post('fried_food'),
					'fried_routine'=>$this->input->post('fried_routine'),
					'number_of_fried_timing'=>$this->input->post('number_of_fried_timing'),
					'milk'=>$this->input->post('milk'),
					'number_of_glassesof_milk'=>$this->input->post('number_of_glassesof_milk'),
					'number_of_timimg'=>$this->input->post('number_of_timimg'),
					'tea'=>$this->input->post('tea'),
					'number_of_glassesof_tea'=>$this->input->post('number_of_glassesof_tea'),
					'coffee'=>$this->input->post('coffee'),
					'number_of_cupof_coffee'=>$this->input->post('number_of_cupof_coffee'),
					'water'=>$this->input->post('water'),
					'number_of_glassesof_water'=>$this->input->post('number_of_glassesof_water'),
					'date'=>date("Y-m-d H:i:s")
					);
					$this->db->update("reg_patient_diet",$data);
					redirect(base_url()."index.php/customer/editdiet_form/success/");
				}


	function editsmoking_status(){
  		$data['pageTitle'] = 'Edit Patient Diet';
		$data['smallTitle'] = 'Edit Patient Diet Form';
	    $data['mainPage'] = 'Edit Patient Diet Form';
	   	$uri=$this->uri->segment(3);
	    $this->db->where("id",$uri);
	   	$ss=$this->db->get("reg_smoking_status");
	    $data['ss']=$ss;
	   
		$data['subPage'] = 'Edit Patient Diet Form';
		$data['title'] = 'Edit Patient Diet Form';
	    $data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/customerJs';
	    $data['mainContent'] = 'editsmoking_status';
	    $this->load->view("includes/mainContent", $data);
}
		
		function update_smokingstatus(){

			$data=array(
					
					'your_smoking_status'=>$this->input->post('answer'),
					'duration'=>$this->input->post('duration'),
					'when_left'=>$this->input->post('left'),
					'number_of_cigaratte'=>$this->input->post('many'),
					
					'smokein_family_member'=>$this->input->post('know'),
					'paan_with_tabbacco'=>$this->input->post('paan'),
					'tambakoo'=>$this->input->post('tambacco'),
					'zarda_khaini'=>$this->input->post('zarda'),
					'other'=>$this->input->post('other'),
                    'date'=>date('Y-m-d H:i:s')
					);
				
				if($this->db->update("reg_smoking_status",$data)){
				 
		    	redirect(base_url()."index.php/customer/editsmoking_status/success/");
				}else{
				    	redirect(base_url()."index.php/customer/editsmoking_statusfail/");
				}

		}

function editalcohol_status(){
  		$data['pageTitle'] = 'Edit Patient Diet';
		$data['smallTitle'] = 'Edit Patient Diet Form';
	    $data['mainPage'] = 'Edit Patient Diet Form';
	   	$uri=$this->uri->segment(3);
	    $this->db->where("id",$uri);
	   	$as=$this->db->get("reg_alcohol_status");
	    $data['as']=$as;
	   
		$data['subPage'] = 'Edit Patient Diet Form';
		$data['title'] = 'Edit Patient Diet Form';
	    $data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/customerJs';
	    $data['mainContent'] = 'editalcohol_status';
	    $this->load->view("includes/mainContent", $data);
}

function update_alcoholstatus(){

		$data=array(
					'drinking_alcohol'=>$this->input->post('answer'),
					'alcoholic_beverages'=>$this->input->post('alcohol'),
					'beer'=>$this->input->post('left'),
					'wine'=>$this->input->post('wine'),
					'hard_liquor'=>$this->input->post('hard'),
					'date'=>date("Y-m-d H:i:s")
					);
				
				if($this->db->update("reg_alcohol_status",$data)){
				 	redirect(base_url()."index.php/customer/editalcohol_status/success");
				}else{
				     redirect(base_url()."index.php/customer/editalcohol_status/fail");
				}
}

	function editexercise_habit(){
  		$data['pageTitle'] = 'Edit Patient Diet';
		$data['smallTitle'] = 'Edit Patient Diet Form';
	    $data['mainPage'] = 'Edit Patient Diet Form';
	   	$uri=$this->uri->segment(3);
	    $this->db->where("id",$uri);
	   	$exh=$this->db->get("reg_exercise_habit");
	    $data['exh']=$exh;
	   
		$data['subPage'] = 'Edit Patient Diet Form';
		$data['title'] = 'Edit Patient Diet Form';
	    $data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/customerJs';
	    $data['mainContent'] = 'editexercise_habit';
	    $this->load->view("includes/mainContent", $data);
}

function update_exercisestatus() {
		$data=array(
					
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
					'date' =>date('Y-m-d H:i:s')
					);
				
				if($this->db->update("reg_exercise_habit",$data)){
			
				redirect(base_url()."index.php/customer/editexercise_habit/success");
				}else{
				    redirect(base_url()."index.php/customer/editexercise_habit/fail"); 
				}
		
            }
      function editpestiside_proforma(){
  		$data['pageTitle'] = 'Edit Pestiside Proforma';
		$data['smallTitle'] = 'Edit Pestiside Proforma';
	    $data['mainPage'] = 'Edit Pestiside Proforma';
	    $uri=$this->uri->segment(3);
	    $this->db->where("reg_id",$uri);
	    $pp=$this->db->get("pesticide_proforma");		
	    $data['pp']=$pp;	   
		$data['subPage'] = 'Edit Pestiside Proforma';
		$data['title'] = 'Edit Pestiside Proforma';
	    $data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/customerJs';
	    $data['mainContent'] = 'editpestiside_proforma';
	    $this->load->view("includes/mainContent", $data);
}

function updatepestiside_proforma(){
	$data=array(

			   "kvm_name" => $this->input->post("kvmname"),
			    "do_you_have_own_farm" => $this->input->post("ownfarm"),
			   "how_many_acre_do_you_cultivate" => $this->input->post("cultivate"),
			   "do_you_use_pesticides_at" => $this->input->post("pestiside"),
			   "which_typeof_crop_you_are_cropping" => $this->input->post("cropping"),
			   "name_and_class_of_pesticide" => $this->input->post("cop"),
			   "gop_organophosphate"=> $this->input->post("gopo"),
			   "gop_organochlorine"=> $this->input->post("gop_o"),
			   "gop_carbamate"=> $this->input->post("gopc"),
			   "gop_pyrethroid"=> $this->input->post("gopp"),
			   "gop_bio_pesticides"=> $this->input->post("gopbp"),
			   "nccacp"=> $this->input->post("ncccp"),
			   "da_h"=> $this->input->post("dah"),
			   "frequency_timing" => $this->input->post("freq"),
			   "diposed"=> $this->input->post("disposed"),
			   	"h_m_y_h_y_b_u_p" => $this->input->post("hmyhybup"),
				"d_y_w_p_c_w_a_p" => $this->input->post("wear"),
				"gloves"=> $this->input->post("gloves"),
				"overalls"=> $this->input->post("overall"),
				"eye_glasses" => $this->input->post("eye_g"),
				 "face_mask" => $this->input->post("fm"),
				"boot_shoes" => $this->input->post("bs"),
				"long_sleeve_shirt" => $this->input->post("lss"),
				"long_pants" => $this->input->post("lpant"),
				"other"  => $this->input->post("others"),
				"pump_spray" => $this->input->post("pummps"),
				"fogging_gun" => $this->input->post("gun"),
				"manually"  => $this->input->post("manually"),
				"pa_yes_no" => $this->input->post("purposes"),
				"pa_where"  => $this->input->post("purposesw"),
				"rcd" => $this->input->post("rcd"),
				"buried" => $this->input->post("bur"),
				"burnt" => $this->input->post("burnt"),
				"tiof"  => $this->input->post("tof"),
				"pirt" => $this->input->post("rt"),
				"other_s" => $this->input->post("othe"),
				"hotf" => $this->input->post("hotf"),
				"h_w" => $this->input->post("hw"),
				"a_e_h_s" => $this->input->post("aehs"),
				"f" => $this->input->post("friends"),
				"sm_tv_r"  => $this->input->post("sm"),
				"other_sp" => $this->input->post("o_sp"),
				"organic_f" => $this->input->post("farming"),
				"loa" => $this->input->post("loa"),
				"wkn" => $this->input->post("weaknesss"),
				"wl"      => $this->input->post("wl"),
				"gfs"      => $this->input->post("gfs"),
				"nit"       => $this->input->post("nit"),
				"a_fatigue"     => $this->input->post("fati"),
				"a_sp"          => $this->input->post("a_sp"),
				"a_sob"    => $this->input->post("a_sob"),
				"a_lh"    => $this->input->post("a_lh"),
				"a_fhb"    => $this->input->post("a_fhb"),
				"ch"    => $this->input->post("ch"),
				"sas"    => $this->input->post("sas"),
				"lgf"    => $this->input->post("lgf"),
				"gba"    => $this->input->post("gba"),
				"ldj"    => $this->input->post("ldj"),
				"ldj_ycs"    => $this->input->post("ldj_ycs"),
				"ldj_sps"    => $this->input->post("ldj_sps"),
				"ldj_j"    => $this->input->post("ldj_j"),
				"ldj_j_ap"    => $this->input->post("ldj_j_ap"),
				"ldj_j_csc"    => $this->input->post("ldj_j_csc"),
				"ldj_j_dcus"    => $this->input->post("ldj_j_dcus"),
				"ldj_j_f"    => $this->input->post("ldj_j_f"),
				"c_walprm"  => $this->input->post("walpr"),
				"c_mlsdbeta" => $this->input->post("mlsdbe"),
				"fsp"   => $this->input->post("fsp"),
				"nvloa" => $this->input->post("nvla"),
				"fwdms"  => $this->input->post("fwdms"),
				"mtu" => $this->input->post("mtu"),
				"stsoa" => $this->input->post("stsa"),
				"sbhbp"   => $this->input->post("sbhbp"),
				"sbedpa" => $this->input->post("sbedpa"),
				"wheezing" => $this->input->post("wheez"),
				"ctigt" => $this->input->post("chest_t"),
				"wyg" => $this->input->post("cctmpm"),
				"fri" => $this->input->post("fri"),
				"loe" => $this->input->post("loe"),
				"uwl" => $this->input->post("wloss"),
				"safl" => $this->input->post("safl"),
				"c_f"  => $this->input->post("fati"),
				"c_ebb"   => $this->input->post("ebb"),
				"c_loa"  => $this->input->post("loapp"),
				"c_n"    => $this->input->post("nausea"),
				"c_slfa"  => $this->input->post("sylfa"),
				"c_wl" => $this->input->post("weitl"),
				"c_is"  => $this->input->post("iskin"),
				"c_j" => $this->input->post("ydse"),
				"c_a" => $this->input->post("saya"),
				"c_sbvs" => $this->input->post("sbvys"),
				"c_rph"  => $this->input->post("rph"),
				"c_csshe"   => $this->input->post("css"),
				"c_walprm"  => $this->input->post("walprm"),
				"c_mlsdbeta"   => $this->input->post("mlsdbeta")
			  
				);
			if($this->db->update("pesticide_proforma",$data)){
			
				redirect(base_url()."index.php/customer/editpestiside_proforma/success");
				}else{
				    redirect(base_url()."index.php/customer/editpestiside_proforma/fail"); 
				}
}

function editproforma(){
  		
	   	$uri1=$this->uri->segment(3);
	   	$uri2=$this->uri->segment(4);

	   	 if($uri2==1){
	   	  redirect(base_url()."index.php/customer/editcoronary_form/".$uri1);
		}
           if($uri2==2){
            redirect(base_url()."index.php/customer/editbreast_cancer_proforma/".$uri1);
          }
           if($uri2==3){
           	redirect(base_url()."index.php/customer/edit_oralcancer_proforma/".$uri1);
           }
           if($uri2==4){

            redirect(base_url()."index.php/customer/edit_hypertension/".$uri1);
          }
           if($uri2==5){
             redirect(base_url()."index.php/customer/edit_diabetes_proforma/".$uri1);
          }
          
	   
		
}
function editbreast_cancer_proforma(){
		$data['pageTitle'] = 'Edit BPI Proforma';
		$data['smallTitle'] = 'Edit BPI Proforma';
	    $data['mainPage'] = 'Edit BPI Proforma';
	   	$uri=$this->uri->segment(3);
	    $this->db->where("reg_id",$uri);
	    $bcp=$this->db->get("breast_cancer_proforma");
	    $data['bcp']=$bcp;
	   
		$data['subPage'] = 'Edit BPI Proforma';
		$data['title'] = 'Edit BPI Proforma';
	    $data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/customerJs';
	    $data['mainContent'] = 'edit_breast_proforma';
	    $this->load->view("includes/mainContent", $data);
		}
 

function updatebreastcancer_proforma(){
	$data=array(
	    
		"date"=>date("Y-m-d H:i:s"),
	    "many_children"=> $this->input->post("children"),
	    "your_ageat_first_child_birth"=> $this->input->post("age"),
	    "breast_feed_your_baby"=> $this->input->post("breastfeed"),
	    "duration_breast_feed_baby"=> $this->input->post("duration"),
	    "miscarriage"=> $this->input->post("miscarriage"),
	    "abortion"=> $this->input->post("abortion"),
	    "ectopic_pragnancy"=> $this->input->post("ectopic"),
	    "visited_doctor"=> $this->input->post("visited"),
	    "medication_treatment_breast_cancer"=> $this->input->post("disease"),
	    "drugs_name"=> $this->input->post("drugs"),
	    "diagnosed_breast_cancer"=> $this->input->post("familycancer"),
	    "diagnosed_ovarian_cancer"=> $this->input->post("ovariancancer"),
	    "mother"=> $this->input->post("mother"),
	    "father"=> $this->input->post("father"),
	    "aunt"=> $this->input->post("aunt"),
	    "sister"=> $this->input->post("sister"),
	    "cousin"=> $this->input->post("cousin"),
	    "other"=> $this->input->post("other"),
	    "breast_examination"=> $this->input->post("examination"),
	    "age_of_menarche"=> $this->input->post("ageofmenarche"),
	    "age_of_menopausal"=> $this->input->post("ageofmenopausal"),
	    "primary"=> $this->input->post("primary"),
	    "mammography"=> $this->input->post("mammography"),
	    "chest_xray"=> $this->input->post("chestreport"),
	    "usg"=> $this->input->post("usg"),
	    "bone_scan"=> $this->input->post("bonescan"),
	    "pet_scan"=> $this->input->post("petscan"),
	    "histopathology_ca_breast"=> $this->input->post("cabreast"),
	    "er_report_status"=> $this->input->post("erreport"),
	    "t1"=> $this->input->post("t1"),
	    "t2"=> $this->input->post("t2"),
	    "t3"=> $this->input->post("t3"),
	    "t4"=> $this->input->post("t4"),
	    "n1"=> $this->input->post("n1"),
	    "n2"=> $this->input->post("n2"),
	    "n2a"=> $this->input->post("n2a"),
	    "n2b"=> $this->input->post("n2b"),
	    "n2c"=> $this->input->post("n2c"),
	    "n3"=> $this->input->post("n3"),
	    "m0"=> $this->input->post("m0"),
	    "m1"=>$this->input->post("m1"),
	    "history_of_chemotherapy"=> $this->input->post("hormonal"),
	    "post_operative_specimen"=> $this->input->post("specimen")
	);
	if($this->db->update("breast_cancer_proforma",$data)){
		redirect(base_url()."index.php/customer/editproforma/success");
				}else{
				    redirect(base_url()."index.php/customer/editproforma/fail"); 
				}
	}

	function editbpi_proforma(){
		$data['pageTitle'] = 'Edit BPI Proforma';
		$data['smallTitle'] = 'Edit BPI Proforma';
	    $data['mainPage'] = 'Edit BPI Proforma';
	   	$uri=$this->uri->segment(3);
	    $this->db->where("reg_id",$uri);
	   
	   	$bpi=$this->db->get("bpi_investigation");
	    $data['bpi']=$bpi;
	   
		$data['subPage'] = 'Edit BPI Proforma';
		$data['title'] = 'Edit BPI Proforma';
	    $data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/customerJs';
	    $data['mainContent'] = 'editbpi_proforma';
	    $this->load->view("includes/mainContent", $data);
		}

function updatebpi_proforma(){
	$data=array(
	   
	"hemoglobin_level"=>$this->input->post("himo_level"),
	"hemoglobin_unit"=>$this->input->post("himo_unit"),
	"tlc_level"=>$this->input->post("tlclevel"),
	"tlc_unit"=>$this->input->post("tlcunit"),
	"dlc_n_level"=>$this->input->post("dlcnlevel"),
	"dlc_nunit"=>$this->input->post("dlcnunit"),
	"dlc_l_level"=>$this->input->post("dlcllevel"),
	"dlc_l_unit"=>$this->input->post("dlclunit"),
	"dlc_m_level"=>$this->input->post("dlcmlevel"),
	"dlc_m_unit"=>$this->input->post("dlcmunit"),
	"dlc_b_level"=>$this->input->post("dlcblevel"),
	"dlc_b_unit"=>$this->input->post("dlcbunit"),
	"dlc_e_level"=>$this->input->post("dlcelevel"),
	"dlc_e_unit"=>$this->input->post("dlceunit"),
	"trbc_level"=>$this->input->post("trbclevel"),
	"trbc_unit"=>$this->input->post("trbcunit"),
	"mcv_level"=>$this->input->post("mcvlevel"),
	"mcv_unit"=>$this->input->post("mcvunit"),
	"mch_level"=>$this->input->post("mchleve"),
	"mch_unit"=>$this->input->post("mchunit"),
	"mchc_level"=>$this->input->post("mchclevel"),
	"mchc_unit"=>$this->input->post("mchcunit"),
	"rdw_level"=>$this->input->post("rdwlevel"),
	"rdw_unit"=>$this->input->post("rdwunit"),
	"esr_level"=>$this->input->post("esrlevel"),
	"esr_unit"=>$this->input->post("esrunit"),
	"pvc_level"=>$this->input->post("pcvlevel"),
	"pvc_unit"=>$this->input->post("pcvlevel"),
	"gbp_level"=>$this->input->post("gbplevel"),
	"gbp_unit"=>$this->input->post("gbpunit"),
	"bsf_level"=>$this->input->post("bsflevel"),
	"bsf_unit"=>$this->input->post("bsfunit"),
	"bspp_level"=>$this->input->post("bspplevel"),
	"bspp_unit"=>$this->input->post("bsppunit"),
	"rbs_level"=>$this->input->post("rbslevel"),
	"rbs_unit"=>$this->input->post("rbsunit"),
	"ogtt_level"=>$this->input->post("ogttlevel"),
	"ogtt_unit"=>$this->input->post("ogttunit"),
	"hba1c_level"=>$this->input->post("hba1clevel"),
	"hba1c_unit"=>$this->input->post("hba1unit"),
	"s_tp_level"=>$this->input->post("stplevel"),
	"s_tp_unit"=>$this->input->post("stpunit"),
	"microprotein_level"=>$this->input->post("mplevel"),
	"microprotein_unit"=>$this->input->post("mpunit"),
	"s_albumin_level"=>$this->input->post("salevel"),
	"s_albumin_unit"=>$this->input->post("saunit"),
	"microalbumin_level"=>$this->input->post("malevel"),
	"microalbumin_unit"=>$this->input->post("maunit"),
	"a_g_ratio_level"=>$this->input->post("agrlevel"),
	"a_g_ratio_unit"=>$this->input->post("agrunit"),
	"s_b_t_level"=>$this->input->post("sbtlevel"),
	"s_b_t_unit"=>$this->input->post("sbtunit"),
	"s_b_d_level"=>$this->input->post("sbdlevel"),
	"s_b_d_unit"=>$this->input->post("sbdunit"),
	"s_b_ind_level"=>$this->input->post("sbinlevel"),
	"s_b_ind_unit"=>$this->input->post("sbinunit"),
	"sgot_level"=>$this->input->post("sgotleve"),
	"sgot_unit"=>$this->input->post("sgotunit"),
	"sgpt_level"=>$this->input->post("sgptlevel"),
	"sgpt_unit"=>$this->input->post("sgptunit"),
	"alp_level"=>$this->input->post("alplevel"),
	"alp_unit"=>$this->input->post("alpunit"),
	"ldh_level"=>$this->input->post("ldhlevel"),
	"ldh_unit"=>$this->input->post("ldhunit"),
	"na_level"=>$this->input->post("nalevel"),
	"na_unit"=>$this->input->post("naunit"),
	"k_leve"=>$this->input->post("klevel"),
	"k_unit"=>$this->input->post("kunit"),
	"s_u_level"=>$this->input->post("sulevel"),
	"s_u_unit"=>$this->input->post("suunit"),
	"s_c_level"=>$this->input->post("sclevel"),
	"s_c_unit"=>$this->input->post("scunit"),
	"u_b_level"=>$this->input->post("ublevel"),
	"u_b_unit"=>$this->input->post("ubunit"),
	"l_p_level"=>$this->input->post("lplevel"),
	"l_p_unit"=>$this->input->post("lpunit"),
	"t_c_level"=>$this->input->post("tclevel"),
	"t_c_unit"=>$this->input->post("tcunit"),
	"triglyceride_level"=>$this->input->post("tlevel"),
	"triglyceride_unit"=>$this->input->post("tunit"),
	"hdl_level"=>$this->input->post("hdllevel"),
	"hdl_unit"=>$this->input->post("hdlunit"),
	"ldl_level"=>$this->input->post("ldllevel"),
	"ldl_unit"=>$this->input->post("ldlunit"),
	"vldl_level"=>$this->input->post("vldllevel"),
	"vldl_unit"=>$this->input->post("vldlunit"),
	"sa_level"=>$this->input->post("salevel"),
	"sa_unit"=>$this->input->post("saunit"),
	"sl_level"=>$this->input->post("sllevel"),
	"sl_unit"=>$this->input->post("slunit"),
	"ua_level"=>$this->input->post("ualevel"),
	"ua_unit"=>$this->input->post("uaunit"),
	"t3_level"=>$this->input->post("t3level"),
	"t3_unit"=>$this->input->post("t3unit"),
	"t4_level"=>$this->input->post("t4level"),
	"t4_unit"=>$this->input->post("t4unit"),
	"tsh_level"=>$this->input->post("tshlevel"),
	"tsh_unit"=>$this->input->post("tshunit"),
	"ft3_level"=>$this->input->post("ft3level"),
	"ft3_unit"=>$this->input->post("ft3unit"),
	"ft4_level"=>$this->input->post("ft4level"),
	"ft4_unit"=>$this->input->post("ft4unit"),
	"ct_level"=>$this->input->post("ctlevel"),
	"ct_unit"=>$this->input->post("ctunit"),
	"vb12_level"=>$this->input->post("b12level"),
	"vb12_level"=>$this->input->post("b12unit"),
	"hv_d_level"=>$this->input->post("hvdlevel"),
	"hv_d_unit"=>$this->input->post("hvdunit"),
	"ue_c_level"=>$this->input->post("ueclevel"),
	"ue_c_unit"=>$this->input->post("uecunit"),
	"ue_ph_level"=>$this->input->post("uephlevel"),
	"ue_ph_unit"=>$this->input->post("uephunit"),
	"ue_sg_level"=>$this->input->post("uesglevel"),
	"ue_sg_unit"=>$this->input->post("uesgunit"),
	"c_sg_level"=>$this->input->post("csglevel"),
	"c_sg_unit"=>$this->input->post("csgunit"),
	"c_k_level"=>$this->input->post("cklevel"),
	"c_k_unit"=>$this->input->post("ckunit"),
	"c_p_level"=>$this->input->post("cplevel"),
	"c_p_unit"=>$this->input->post("cpunit"),
	"c_u_level"=>$this->input->post("culevel"),
	"c_u_unit"=>$this->input->post("cuunit"),
	"c_b_level"=>$this->input->post("cblevel"),
	"c_b_unit"=>$this->input->post("cbunit"),
	"m_l_level"=>$this->input->post("mllevel"),
	"m_l_unit"=>$this->input->post("mlunit"),
	"m_rbc_level"=>$this->input->post("mrlevel"),
	"m_rbc_unit"=>$this->input->post("mrunit"),
	"m_casts_level"=>$this->input->post("mrlevel"),
	"m_casts_unit"=>$this->input->post("mrunit"),
	"m_crystals_level"=>$this->input->post("mcrlevel"),
	"m_crystals_unit"=>$this->input->post("mcrunit"),
	"m_ec_level	"=>$this->input->post("meclevel"),
	"m_ec_unit"=>$this->input->post("mecunit"),
	"m_fb_level"=>$this->input->post("mfblevel"),
	"m_fb_unit"=>$this->input->post("mfbunit"),
	"m_dlc_level"=>$this->input->post("mdlclevel"),
	"m_dlc_unit"=>$this->input->post("mdlcunit"),
	"vm_hiv_level"=>$this->input->post("vmhivlevel"),
	"vm_hiv_unit"=>$this->input->post("vmhivunit"),
	"vm_hbsag_level"		=>		$this->input->post("vmhblevel"),
	"vm_hbsag_unit"			=>		$this->input->post("vmhbunit"),
	"vm_hcv_level"			=>		$this->input->post("vmhcvlevel"),
	"vm_hcv_unit"			=>		$this->input->post("vmhcvunit"),
	
	);
	
	if($this->db->insert("bpi_investigation",$data)){
		redirect(base_url()."index.php/customer/editbpi_proforma/success");
				}else{
				    redirect(base_url()."index.php/customer/editbpi_proforma/fail"); 
				}
	
}
function editcoronary_form(){
  $data['pageTitle'] = 'Edit Patient Diet';
		$data['smallTitle'] = 'Edit Patient Diet Form';
	    $data['mainPage'] = 'Edit Patient Diet Form';
	    $uri=$this->uri->segment(3);
	    $this->db->where("reg_id",$uri);
	   	$cp=$this->db->get("coronary_proforma");
	    $data['cp']=$cp;
		$data['subPage'] = 'Edit Patient Diet Form';
		$data['title'] = 'Edit Patient Diet Form';
	    $data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/customerJs';
	    $data['mainContent'] = 'editcoronary_form';
	    $this->load->view("includes/mainContent", $data);
}

function updatecoronary_proforma(){

$data=array(
	   
		"date"=>date("Y-m-d H:i:s"),
	    "bp_too_low"=> $this->input->post("bp_too_low"),
	    "bp_low_detail"=> $this->input->post("bp_low_detail"),
	    "pain_your_chest"=> $this->input->post("pain_your_chest"),
	    "pain_your_chest_detail"=> $this->input->post("pain_your_chest_detail"),
	    "own_heart_beat"=> $this->input->post("own_heart_beat"),
	    "extra_heartbeat"=> $this->input->post("extra_heartbeat"),
	    "ankles_badly_swollen"=> $this->input->post("ankles_badly_swollen"),
	    "coronary_heart_disease"=> $this->input->post("coronary_heart_disease"),
	    "cold_hand_feet_trouble"=> $this->input->post("cold_hand_feet_trouble"),
	    "excretion_at_rest"=> $this->input->post("excretion_at_rest"),
	    "get_out_of_breath"=> $this->input->post("get_out_of_breath"),
	    "cholestrol_level_high"=> $this->input->post("cholestrol_level_high"),
	    "morning_cough"=> $this->input->post("morning_cough"),
	    "coughing_up_blood"=> $this->input->post("coughing_up_blood"),
	    "increased_anxiety"=> $this->input->post("increased_anxiety"),
	    "recurrent_fatigue"=> $this->input->post("recurrent_fatigue"),
	    "migraine"=> $this->input->post("migraine"),
	    "painful_knees"=> $this->input->post("painful_knees"),
	    "walking_short_distances"=> $this->input->post("walking_short_distances"),
	    "exposure_to_loud_noises"=> $this->input->post("exposure_to_loud_noises"),
	    "pneumonia_accompanied"=> $this->input->post("pneumonia_accompanied"),
	    "weight_loss"=> $this->input->post("weight_loss"),
	    "dehydration_rapid_heartbeat"=> $this->input->post("dehydration_rapid_heartbeat"),
	    "vein_thrombosis"=> $this->input->post("vein_thrombosis"),
	    "causes_of_dm"=> $this->input->post("causes_of_dm"),
	    "detached_retina"=> $this->input->post("detached_retina"),
	    "cause_of_hypertension"=> $this->input->post("cause_of_hypertension"),
	    "lens_transplant"=> $this->input->post("lens_transplant"),
	    "period_problems"=> $this->input->post("period_problems"),
	    "childbirth_related_problem"=> $this->input->post("childbirth_related_problem"),
	    "urine_loss"=> $this->input->post("urine_loss"),
	    "pap_smear"=> $this->input->post("pap_smear"),
	    "hormone_replacement_therapy"=> $this->input->post("hormone_replacement_therapy"),
	    /*"heart_failure_detail"=> $this->input->post("heart_failure_detail"),
	    "enlarged_heart"=> $this->input->post("enlarged_heart"),
	    "angina"=> $this->input->post("chest_pain"),
	    "chest_pain_detail"=>$this->input->post("chest_pain_detail"),
	    "coronary_bypass"=> $this->input->post("coronary_bypass"),*/
	    "prescription_taken"=> $this->input->post("prescription_taken"),
	    "self_prescribed_medication"=> $this->input->post("self_prescribed_medication"),
	    "date_of_physical_examination"=> $this->input->post("date_of_physical_examination"),
	    "physical_examination_result"=> $this->input->post("physical_examination_result"),
	    "date_of_chest_xray"=> $this->input->post("date_of_chest_xray"),
	    "chest_xray_result"=> $this->input->post("chest_xray_result"),
	    "date_of_electrocardiogram"=> $this->input->post("date_of_electrocardiogram"),
	    "electrocardiogram_result"=> $this->input->post("electrocardiogram_result"),
	    "date_of_dental_checkup"=> $this->input->post("date_of_dental_checkup"),
	    "dental_checkup_result"=> $this->input->post("dental_checkup_result"),
	    "diagnostic_test"=> $this->input->post("diagnostic_test"),
	    "hospitalization"=> $this->input->post("hospitalization"),
	    "drug_allergies"=> $this->input->post("drug_allergies"),
	    "arine_in_place_of_butter"=> $this->input->post("arine_in_place_of_butter"),
	    "extra_sugar_usage"=> $this->input->post("extra_sugar_usage"),
	    "add_salt_food"=> $this->input->post("add_salt_food"),
	    "compared_to_weekdays"=> $this->input->post("compared_to_weekdays"),
	    "how_many_time_ago"=>$this->input->post("how_many_time_ago"),
	    "rheumatic_fever"=> $this->input->post("rheumatic_fever"),
	    "disease_of_artries"=> $this->input->post("disease_of_artries"),
	    "varicose_venis"=> $this->input->post("varicose_venis"),
	    "arthritisof_legs"=> $this->input->post("arthritisof_legs"),
	    "abnormal_blood_sugar_test"=> $this->input->post("abnormal_blood_sugar_test"),
	    "phlebitis"=> $this->input->post("phlebitis"),
	    "fainting_spells"=> $this->input->post("fainting_spells"),
	    "epilepsy"=> $this->input->post("epilepsy"),
	    "stroke2"=> $this->input->post("stroke2"),
	    /*"tinglings_of_hand"=> $this->input->post("tinglings_of_hand"),*/
	    "diptheria"=> $this->input->post("diptheria"),
	    "scarlet_fever"=> $this->input->post("scarlet_fever"),
	    "infectious_mononucleosis"=> $this->input->post("infectious_mononucleosis"),
	    "emotional_problem"=> $this->input->post("emotional_problem"),
	    "anemia"=> $this->input->post("anemia"),
	    "thyroid_dysfunction"=> $this->input->post("thyroid_dysfunction"),
	    "pneumonia"=> $this->input->post("pneumonia"),
	    "lung_disease"=> $this->input->post("lung_disease"),
	    "injuries_to_back"=> $this->input->post("injuries_to_back"),
	    "cardiac_infarction"=> $this->input->post("cardiac_infarction"),
	    "how_treatment"=> $this->input->post("how_treatment"),
	    "ecg_ischaemic"=> $this->input->post("ecg_ischaemic"),
	    "ecg_ischaemic_detail"=> $this->input->post("ecg_ischaemic_detail"),
	    "pf_arrhythmia"=> $this->input->post("pf_arrhythmia"),
	    "pf_arrhythmia_detail"=> $this->input->post("pf_arrhythmia_detail"),
	    "blood_pressure_high_at_age"=> $this->input->post("blood_pressure_high_at_age"),
	    "bphigh_at_age_detail"=> $this->input->post("bphigh_at_age_detail"),
	    "beta_blocker"=> $this->input->post("beta_blocker"),
	    "beta_blocker_detail"=> $this->input->post("beta_blocker_detail"),
	    "pacemaker_fitted"=> $this->input->post("pacemaker_fitted"),
	    "pacemaker_fitted_detail"=> $this->input->post("pacemaker_fitted_detail"),
	    "intermittent_claudication"=> $this->input->post("intermittent_claudication"),
	    "intermittent_claudication_detail"=> $this->input->post("intermittent_claudication_detail"),
	    "heart_surgery"=> $this->input->post("heart_surgery"),
	    "heart_surgery_detail"=> $this->input->post("heart_surgery_detail"),
	    "insulin_injection"=> $this->input->post("insulin_injection"),
	    "insulin_injection_detail"=> $this->input->post("insulin_injection_detail"),
	    "the_diabetes_stable"=> $this->input->post("the_diabetes_stable"),
	    "diabetes_stable_detail"=> $this->input->post("diabetes_stable_detail"),
	    "hypo_glycaemic_episode"=> $this->input->post("hypo_glycaemic_episode"),
	    "hypo_glycaemic_detail"=> $this->input->post("hypo_glycaemic_detail"),
	    "suffered_any_attack"=> $this->input->post("suffered_any_attack"),
	    "suffered_any_attack_detail"=> $this->input->post("suffered_any_attack_detail"),
	    "progressive_disorder"=> $this->input->post("progressive_disorder"),
	    "progressive_disorder_detail"=> $this->input->post("progressive_disorder_detail"),
	    "cerebrovascular_accident"=> $this->input->post("cerebrovascular_accident"),
	    "cerebrovascular_accident_detail"=> $this->input->post("cerebrovascular_accident_detail"),
	    "preventing_communication"=> $this->input->post("preventing_communication"),
	    "preventing_communication_detail"=> $this->input->post("preventing_communication_detail"),
	    "hearing_defect"=> $this->input->post("hearing_defect"),
	    "hearing_defect_detail"=> $this->input->post("hearing_defect_detail"),
	    "history_of_psychosis"=> $this->input->post("history_of_psychosis"),
	    "history_of_psychosis_detail"=> $this->input->post("history_of_psychosis_detail"),
	    "abuse_alcohol"=> $this->input->post("abuse_alcohol"),
	    "abuse_alcohol_detail"=> $this->input->post("abuse_alcohol_detail"),
	    "mental_disorder"=> $this->input->post("mental_disorder"),
	    "mental_disorder_detail"=> $this->input->post("mental_disorder_detail"),
	    "cataract_removed"=> $this->input->post("cataract_removed"),
	    "snelling"=> $this->input->post("snelling"),
	    "snelling_detail"=> $this->input->post("snelling_detail"),
	    "weaker_eye"=> $this->input->post("weaker_eye"),
	    "weaker_eye_detail"=> $this->input->post("weaker_eye_detail"),
	    "respectively"=> $this->input->post("respectively"),
	    "respectively_detail"=> $this->input->post("respectively_detail"),
	    "monocular_vision"=> $this->input->post("monocular_vision"),
	    "monocular_vision_detail"=> $this->input->post("monocular_vision_detail"),
	    "pathological_field_defect"=> $this->input->post("pathological_field_defect"),
	    "pathological_detail"=> $this->input->post("pathological_detail"),
	    "physical_disability"=> $this->input->post("physical_disability"),
	    "physical_disability_detail"=> $this->input->post("physical_disability_detail")
    );
if($this->db->update("coronary_proforma",$data)){
		redirect(base_url()."index.php/customer/editcoronary_form/success");
				}else{
				    redirect(base_url()."index.php/customer/editcoronary_form/fail"); 
				}
}

function edit_oralcancer_proforma(){
  		$data['pageTitle'] = 'Edit Oral Cancer Form';
		$data['smallTitle'] = 'Edit Oral Cancer Form';
	    $data['mainPage'] = 'Edit Oral Cancer Form';
	    $uri=$this->uri->segment(3);
	    $this->db->where("reg_id",$uri);
	   	$ocp=$this->db->get("oral_cancer_proforma");
	    $data['ocp']=$ocp;
		$data['subPage'] = 'Edit Oral Cancer Form';
		$data['title'] = 'Edit Oral Cancer Form';
	    $data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/customerJs';
	    $data['mainContent'] = 'edit_oralcancerform';
	    $this->load->view("includes/mainContent", $data);
}
function update_oralcancer_form(){
$data=array(
	    
		"date"=>date("Y-m-d"),
	    "mother"=> $this->input->post("mother"),
	    "father"=> $this->input->post("father"),
	    "aunt"=> $this->input->post("aunt"),
	    "sister"=> $this->input->post("sister"),
	    "brother"=> $this->input->post("brother"),
	    "cousin"=> $this->input->post("cousin"),
	    "others"=> $this->input->post("other"),
	    "treatment_for_any"=> $this->input->post("treatment"),
	    "family_oral_cancer"=> $this->input->post("oraldetail"),
	    "mouth_disease"=> $this->input->post("mouthdisease"),
	    "history_medical_paper"=> $this->input->post("mouthdiseasedetail"),
	    "radiotherapy_report"=> $this->input->post("radiotherapy"),
	    "chemotherapy"=> $this->input->post("chemotherapy"),
	    "drugs_name"=> $this->input->post("drugs"),
	    "ct_scan"=> $this->input->post("ct_scan"),
	    "mother"=> $this->input->post("mother"),
	    "father"=> $this->input->post("father"),
	    "aunt"=> $this->input->post("aunt"),
	    "sister"=> $this->input->post("sister"),
	    "brother"=> $this->input->post("brother"),
	    "cousin"=> $this->input->post("cousin"),
	    "others"=> $this->input->post("other"),
	    "treatment_for_any"=> $this->input->post("treatment"),
	    "family_oral_cancer"=> $this->input->post("oraldetail"),
	    "mouth_disease"=> $this->input->post("mouthdisease"),
	    "history_medical_paper"=> $this->input->post("mouthdiseasedetail"),
	    "radiotherapy_report"=> $this->input->post("radiotherapy"),
	    "chemotherapy"=> $this->input->post("chemotherapy"),
	    "drugs_name"=> $this->input->post("drugs"),
	    "ct_scan"=> $this->input->post("ct_scan"),
	    "mri"=> $this->input->post("mri"),
	    "oral_squamous_cell_carcinoma"=> $this->input->post("squamous_cell"),
	    "buccal_mucosa"=> $this->input->post("buccal"),
	     "buccal_mucosa_vestibule"=> $this->input->post("sister"),
	    "buccal_mucosa_vestibule"=> $this->input->post("buccalvestibula"),
	    "alveolar_mucosa"=> $this->input->post("alveolar"),
	    "palate"=> $this->input->post("palate"),
	    "vestibule"=> $this->input->post("vestibule"),
	    "tounge"=> $this->input->post("tounge"),
	    "lip"=> $this->input->post("lip"),
	    "well_differentiated"=> $this->input->post("well_differentiated"),
	    "moderately_differentiated"=> $this->input->post("moderately"),
	    "poorly_differentiated"=> $this->input->post("poorly"),
	    "addition_details"=> $this->input->post("additionaldetails"),
	    "t1"=> $this->input->post("t1"),
	    "t2"=> $this->input->post("t2"),
	    "t3"=> $this->input->post("t3"),
	    "t4"=> $this->input->post("t4"),
	    "n1"=> $this->input->post("n1"),
	    "n2"=> $this->input->post("n2"),
	    "n2a"=> $this->input->post("n2a"),
	    "n2b"=> $this->input->post("n2b"),
	    "n2c"=> $this->input->post("n2c"),
	    "n3"=> $this->input->post("n3"),
	    "m0"=> $this->input->post("m0"),
	    "m1"=>$this->input->post("m1")
	);
if($this->db->update("oral_cancer_proforma",$data)){
		redirect(base_url()."index.php/customer/edit_oralcancer_proforma/success");
				}else{
				    redirect(base_url()."index.php/customer/edit_oralcancer_proforma/fail"); 
				}
}

function edit_hypertension(){
  $data['pageTitle'] = 'Edit Hypertension Proformaorma';
		$data['smallTitle'] = 'Edit Hypertension Proformaorma';
	    $data['mainPage'] = 'Edit Hypertension Proformaorma';
	    $uri=$this->uri->segment(3);
	    $this->db->where("reg_id",$uri);
	   	$cp=$this->db->get("hypertension_proforma");
	    $data['cp']=$cp;
		$data['subPage'] = 'Edit Hypertension Proformaorma';
		$data['title'] = 'Edit Hypertension Proformaorma';
	    $data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/customerJs';
	    $data['mainContent'] = 'edit_hypertension';
	    $this->load->view("includes/mainContent", $data);
}

function updthypertbsn_proforma(){
	$data=array(
	   
		"date"=>date("Y-m-d H:i:s"),
	    "headache"=> $this->input->post("headache"),
	    "anxity"=> $this->input->post("anxity"),
	    "restlessness"=> $this->input->post("restlessness"),
	    "sweatign_sudden_onset"=> $this->input->post("sweatign_sudden_onset"),
	    "notice_your_heartbeat"=> $this->input->post("notice_your_heartbeat"),
	    "nasal_bleeding"=> $this->input->post("nasal_bleeding"),
	    "monthly"=> $this->input->post("monthly"),
	    "every_3month"=> $this->input->post("every_3month"),
	    "every_6month"=> $this->input->post("every_6month"),
	    "once_a_year"=> $this->input->post("once_a_year"),
	    "high_blood_pressure"=> $this->input->post("high_blood_pressure"),
	    "hbp_detail"=> $this->input->post("hbp_detail"),
	    "blood_pressure_reading"=> $this->input->post("blood_pressure_reading"),
	    "blood_pressure_high_loss"=> $this->input->post("blood_pressure_high_loss"),
	    "high_low_bp_reading"=> $this->input->post("high_low_bp_reading"),
	    "check_blood_pressure"=> $this->input->post("check_blood_pressure"),
	    "fill_reading"=> $this->input->post("fill_reading"),
	    "checking_tdate"=> $this->input->post("checking_tdate"),
	    "blurry_vision"=> $this->input->post("blurry_vision"),
	    "chest_pain"=> $this->input->post("chest_pain"),
	    "dizziness"=> $this->input->post("dizziness"),
	    "symptoms_headache"=> $this->input->post("symptoms_headache"),
	    "none"=> $this->input->post("none"),
	    "other"=> $this->input->post("other"),
	    "affect_performance_ability"=> $this->input->post("affect_performance_ability"),
	    "how_affect"=> $this->input->post("how_affect"),
	    "physical_activity"=> $this->input->post("physical_activity"),
	    "physical_activity_detail"=> $this->input->post("physical_activity_detail"),
	    "diabetes"=> $this->input->post("diabetes"),
	    "diabetes_detail"=> $this->input->post("diabetes_detail"),
	    "heartattack"=> $this->input->post("heartattack"),
	    "heartattack_detail"=> $this->input->post("heartattack_detail"),
	    "heart_failure"=> $this->input->post("heart_failure"),
	    "heart_failure_detail"=> $this->input->post("heart_failure_detail"),
	    "enlarged_heart"=> $this->input->post("enlarged_heart"),
	    "angina"=> $this->input->post("chest_pain"),
	    "chest_pain_detail"=>$this->input->post("chest_pain_detail"),
	    "coronary_bypass"=> $this->input->post("coronary_bypass"),
	    "coronary_bypass_detail"=> $this->input->post("coronary_bypass_detail"),
	    "stroke"=> $this->input->post("stroke"),
	    "stroke_detail"=> $this->input->post("stroke_detail"),
	    "high_cholestrol"=> $this->input->post("high_cholestrol"),
	    "high_cholestrol_detail"=> $this->input->post("high_cholestrol_detail"),
	    "kidney_dysfunction"=> $this->input->post("kidney_dysfunction"),
	    "kidney_dysfunction_detail"=> $this->input->post("kidney_dysfunction_detail"),
	    "kidney_dialysis"=> $this->input->post("kidney_dialysis"),
	    "kidney_dialysis_detail"=> $this->input->post("kidney_dialysis_detail"),
	    "norrowing_of_arteries"=> $this->input->post("norrowing_of_arteries"),
	    "norrowing_of_arteries_detail"=> $this->input->post("norrowing_of_arteries_detail"),
	    "speach_difficulty"=> $this->input->post("speach_difficulty"),
	    "speach_difficulty_detail"=> $this->input->post("speach_difficulty_detail"),
	    "weakness_one_side"=> $this->input->post("weakness_one_side"),
	    "slurred_speech"=> $this->input->post("slurred_speech"),
	    "slurred_speech_detail"=> $this->input->post("slurred_speech_detail"),
	    "loss_of_balance"=> $this->input->post("loss_of_balance"),
	    "loss_of_balance_detail"=>$this->input->post("loss_of_balance_detail"),
	    "fainting_losing"=> $this->input->post("fainting_losing"),
	    "fainting_losing_detail"=> $this->input->post("fainting_losing_detail"),
	    "dizziness2"=> $this->input->post("dizziness2"),
	    "feeling_depressed"=> $this->input->post("feeling_depressed"),
	    "feeling_tried"=> $this->input->post("feeling_tried"),
	    "shortness_of_breath"=> $this->input->post("shortness_of_breath"),
	    "cough"=> $this->input->post("cough"),
	    "decreased_interest_insex"=> $this->input->post("decreased_interest_insex"),
	    "headache3"=> $this->input->post("headache3"),
	    "tinglings_of_hand"=> $this->input->post("tinglings_of_hand"),
	    "leg_cramps"=> $this->input->post("leg_cramps"),
	    "swelling"=> $this->input->post("swelling"),
	    "thumping_racing_heart"=> $this->input->post("thumping_racing_heart"),
	    "feeling_week_standup"=> $this->input->post("feeling_week_standup"),
	    "diificulty_in_sleeping"=> $this->input->post("diificulty_in_sleeping"),
	    "unable_toget_erection"=> $this->input->post("unable_toget_erection"),
	    "cold_hand_feet"=> $this->input->post("cold_hand_feet"),
	    "diificulty_in_breathing"=> $this->input->post("diificulty_in_breathing"),
	    "reduce_salt"=> $this->input->post("reduce_salt"),
	    "walk_exercise"=> $this->input->post("walk_exercise"),
	    "serving_of_vegetable"=> $this->input->post("serving_of_vegetable"),
	    "maintain_normal_weight"=> $this->input->post("maintain_normal_weight"),
	    "alcohol_in_moderation"=> $this->input->post("alcohol_in_moderation"),
	    "blood_pressure_medication"=> $this->input->post("blood_pressure_medication"),
	    "7day_pillbox"=> $this->input->post("7day_pillbox"),
	    "carry_pills_withme"=> $this->input->post("carry_pills_withme"),
	    "take_pills_same_time"=> $this->input->post("take_pills_same_time"),
	    "keep_pills_see_them"=> $this->input->post("keep_pills_see_them"),
	    "use_watch_with_alarms"=> $this->input->post("use_watch_with_alarms"),
	    "other_specify"=> $this->input->post("other_specify"),
	    "blood_pressure_monotor"=> $this->input->post("blood_pressure_monotor"),
	    "keep_track_bp_reading"=> $this->input->post("keep_track_bp_reading"),
	    "check_food_lebel"=> $this->input->post("check_food_lebel"),
	    "step_counter"=> $this->input->post("step_counter"),
	    "fruit_serving"=> $this->input->post("fruit_serving"),
	    "vegetable_serving"=> $this->input->post("vegetable_serving"),
	    "timing_of_drink_alcohol"=> $this->input->post("timing_of_drink_alcohol"),
	    "eat_salty_snakes"=> $this->input->post("eat_salty_snakes"),
	    "eat_fast_food"=> $this->input->post("eat_fast_food"),
	    "eat_chicken_soup"=> $this->input->post("eat_chicken_soup")
	 
);

if($this->db->update("hypertension_proforma",$data)){
		redirect(base_url()."index.php/customer/edit_hypertension/success");
				}else{
				    redirect(base_url()."index.php/customer/edit_hypertension/fail"); 
				}
}

function edit_diabetes_proforma(){
		$data['pageTitle'] = 'Edit Diabetes Proforma';
		$data['smallTitle'] = 'Edit Diabetes Proforma';
	    $data['mainPage'] = 'Edit Diabetes Proforma';
	   	$uri=$this->uri->segment(3);
	    $this->db->where("reg_id",$uri);
	    $bcp=$this->db->get("diabetes_proforma");
	    $data['dp']=$dp;
	   
		$data['subPage'] = 'Edit Diabetes Proforma';
		$data['title'] = 'Edit Diabetes Proforma';
	    $data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/customerJs';
	    $data['mainContent'] = 'edit_diabetes_proforma';
	    $this->load->view("includes/mainContent", $data);
		}

		function update_diabetes_proforma(){
			$data=array(
	    "reg_id"                    =>  $this->input->post("preg"),
		"date"                      =>  date("Y-m-d H:i:s"),
	    "known_about_diabetes"      =>  $this->input->post("knownaboutdiabetes"),
	    "family_history_diabetes"   =>  $this->input->post("familyhistory"),
	    "whoom"                     =>  $this->input->post("whoom"),
	    "blood_sugar_level"         =>  $this->input->post("blood_sugar"),
	    "why"                       =>  $this->input->post("bloodsugardetail"),
	    "one"                       =>  $this->input->post("one"),
	    "two"                       =>  $this->input->post("two"),
	    "three"                     =>  $this->input->post("three"),
	    "more"                      =>  $this->input->post("more"),
	    "when_you_test"             =>  $this->input->post("whentest"),
	    "low_blood_pressure"        =>  $this->input->post("lbp"),
	    "regular"                   =>  $this->input->post("regular"),
	    "mixtard_insulin"           =>  $this->input->post("mixtard_insulin"),
	    "oral_hypoglycemic_agents"  =>  $this->input->post("oral_hypoglycemic_agents"),
	    "morning"                   =>  $this->input->post("morning"),
	    "midday"                    =>  $this->input->post("midday"),
	    "afternoon"                 =>  $this->input->post("afternoon"),
	    "evening"                   =>  $this->input->post("evening"),
	    "night"                     =>  $this->input->post("night"),
	    "treat_low_blood_pressure"  =>  $this->input->post("treatlowbloodsugar"),
	    "ever_lost_sensetolow_blood_pressure"   => $this->input->post("lostsense"),
	    "when_itlast_occur"         =>  $this->input->post("bloodsugar"),
	    "hba1c_blood_sugar_level"   =>  $this->input->post("hbalc"),
	    "last_level"                =>  $this->input->post("last_level"),
	    "daily"                     =>  $this->input->post("daily"),
	    "weekly"                    =>  $this->input->post("weekly"),
	    "monthly"                   =>  $this->input->post("monthly"),
	    "other"                     =>  $this->input->post("other"),
	    "bpmorning"                 =>  $this->input->post("morning"),
	    "bpmidday"                  =>  $this->input->post("bpmidday"),
	    "bpafternoon"               =>  $this->input->post("bpafternoon"),
	    "bpevening"                 =>  $this->input->post("bpevening"),
	    "at_night"                  =>  $this->input->post("at_night"),
	    "treat_blood_sugar"         =>  $this->input->post("treatsugar"),
	    "addition_information"      =>  $this->input->post("addition_information"),
	    "high_bp"                   =>  $this->input->post("hbpressure"),
	    "medicine"                  =>  $this->input->post("hbpressuredtl"),
	    "heart_disease"             =>  $this->input->post("hrtdisease"),
	    "hd_medicine"               =>  $this->input->post("hrtdiseasedetail"),
	    "high_cholestrol"           =>  $this->input->post("hghcholestrol"),
	    "hc_medicine"               =>  $this->input->post("hghcholestroldetail"),
	    "high_triglycerides"        =>  $this->input->post("hghtrigly"),
	    "htri_medicine"             =>  $this->input->post("hghtriglydetail"),
	    "cataract"                  =>  $this->input->post("glaucoma"),
	    "ct_medicine"               =>  $this->input->post("glaucomadetail"),
	    "stroke"                    =>  $this->input->post("stroke"),
	    "stroke_medicine"           =>  $this->input->post("strokedetail"),
	    "retinotherapy"             =>  $this->input->post("retinopathy"),
	    "retina_medicine"           =>  $this->input->post("retinopathydetail"),
	    "kidney_problem"            =>  $this->input->post("kidneyproblem"),
	    "kid_medicine"              =>  $this->input->post("kidneyprobdetail"),
	    "neuropathy"                =>  $this->input->post("neuropathy"),
	    "neuropathy_medicine"       =>  $this->input->post("neuropathydetail"),
	    "addition_information"      =>  $this->input->post("addition_information"),
	    "teeth_gum"                 =>  $this->input->post("teethndgum"),
	    "teeth_medicine"            =>  $this->input->post("teethndgumdetail"),
	    "osteoporosis"              =>  $this->input->post("osteoporosis"),
	    "osteoporosis_medicine"     =>  $this->input->post("osteoporosisdetail"),
	    "sexual_dysfunction"        =>  $this->input->post("dysfunction"),
	    "sexual_medicine"           =>  $this->input->post("sexual_medicine"),
	    "organ_transplant"          =>  $this->input->post("organ_transplant"),
	    "Organ_transplant_medicine" =>  $this->input->post("Organ_transplant_medicine"),
	    "thyroid_dysfunction"       =>  $this->input->post("thyroiddys"),
	    "thyroid_dysfunction_medicine"  => $this->input->post("thyroiddysdetail"),
	    "polycystic_ovarian_disease"    => $this->input->post("polycystic"),
	    "polycystic_ovarian_disease_medicine"=> $this->input->post("polycysticdetail"),
    	"complication_of_diabetes"      => $this->input->post("complication"),
	    "others"                    => $this->input->post("others"),
	    "other_medicine"            => $this->input->post("otherdetail"),
	    "taking_any_medicine"       => $this->input->post("compldiabetesdetail"),
	    "seewell_with_lense"        => $this->input->post("lense"),
	    "take_pills_for_diabetes"   => $this->input->post("take_pills"),
	    "type_of_pills"             => $this->input->post("type_of_pill"),
	    "time_of_day"               => $this->input->post("time_of_day"),
	    "duration_of_use"           => $this->input->post("duration_of_use"),
	    "take_insulin"              => $this->input->post("take_insulin"),
	    "regular_insulin"           => $this->input->post("regular_insulin"),
	    "take_mixtard_insulin"      => $this->input->post("take_mixtard_insulin"),
	    "see_doctor_monthly"        => $this->input->post("monthly"),
	    "every_3month"              => $this->input->post("every_3month"),
	    "every_6month"              => $this->input->post("every_6month"),
	    "not_visited"               => $this->input->post("not_visited"),
	    "last_eye_checkup"          => $this->input->post("last_eye_checkup"),
	    "angry"                     => $this->input->post("angry"),
	    "afraid"                    => $this->input->post("afraid"),
	    "confused"                  => $this->input->post("confused"),
	    "sad"                       => $this->input->post("sad"),
	    "upset"                     => $this->input->post("upset"),
	    "eat_better_other"          => $this->input->post("eat_better_other"),
	    "much_stresss"              => $this->input->post("much_stresss"),
	    "stress_example"            => $this->input->post("stress_example"),
	    "handle_stress"             => $this->input->post("handle_stress"),
	    "depressed"                 => $this->input->post("depressed"),
	    "depressed_example"         => $this->input->post("depressed_example"),
	    "diabetes_diet_plan"        => $this->input->post("dietplan"),
	    "special_meal"              => $this->input->post("specialmeal"),
	    "low_crbohydrate"           => $this->input->post("low_crbohydrate"),
	    "low_cholestrol"            => $this->input->post("low_cholestrol"),
	    "other_meal"                => $this->input->post("other_meal"),
	    "change_weight"             => $this->input->post("change_weight"),
	    "gain"                      => $this->input->post("gain"),
	    "gain_weight_in_kg"         => $this->input->post("gain_weight_in_kg"),
	    "depressed_example"         => $this->input->post("depressed_example"),
	    "loss"=> $this->input->post("loss"),
	    "loss_weight_in_kg"=> $this->input->post("loss_weight_in_kg"),
	    "height"=> $this->input->post("height"),
	    "age"=> $this->input->post("age"),
	    "current_weight"=> $this->input->post("current_weight"),
	    "happy_with_your_current_weight"=> $this->input->post("happyyrweight"),
	    "loosing_weight"=> $this->input->post("loosingweight"),
	    "food_alergies"=> $this->input->post("foodalergies"),
	    "food_name"=> $this->input->post("food_name"),
	    "bevarage_intolerance"=> $this->input->post("bevarage_intolerance"),
	    "bev_foods_name"=> $this->input->post("intolerancefood"),
	    "your_appetite"=> $this->input->post("your_appetite"),
	    "digestion_problem"=> $this->input->post("digestionprblm"),
	    "chewing"=> $this->input->post("chewing"),
	    "swallowing"=> $this->input->post("swallowing"),
	    "stomachache"=> $this->input->post("stomachache"),
	    "diarrhea"=> $this->input->post("diarrhea"),
	    "constipation"=> $this->input->post("constipation"),
	    "taking_vitamin"=> $this->input->post("taking_vitamin"),
	    "niacin"=> $this->input->post("niacin"),
	    "salt_subtitute"=> $this->input->post("salt_subtitute"),
	    "vitamin_d"=> $this->input->post("vitamin_d"),
	    "calcium"=> $this->input->post("calcium"),
	    "chromium"=> $this->input->post("chromium"),
	    "selenium"=> $this->input->post("selenium"),
	    "iron"=> $this->input->post("iron"),
	    "folic_acid"=> $this->input->post("folicacid"),
	    "vitamin_e"=> $this->input->post("vitamin_e"),
	    "vitamin_b6"=> $this->input->post("vitaminb6"),
	    "vitamin_b12"=> $this->input->post("vitaminb12")
    );

if($this->db->update("diabetes_proforma",$data)){
		redirect(base_url()."index.php/customer/edit_diabetes_proforma/success");
				}else{
				    redirect(base_url()."index.php/customer/edit_diabetes_proforma/fail"); 
				}
		}

}