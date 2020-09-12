<?php
Class AdminController extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->is_login();
		$this->load->model('cmodel');
	
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
   
    function active_status(){
    $cid= $this->uri->segment(3);
    $custid="id";
    $tblnm="customer_info";
 
    $dt = $this->cmodel->activestatus($custid,$cid,$tblnm);
    //  print_r($dt);
    //  exit();
    if($dt){
      redirect("adminController/Paid_InaciveList");
    }
    else{
      echo "Status Not Updated";
    }
    }
    function approve_paystatus(){
      $comment=$this->input->post("stats");
      $cid=$this->input->post("id");
      $arr=array(
        "status" =>$comment
      );
      $this->db->where("c_id",$cid);
      $dt=$this->db->update("pay_details",$arr);
      if($dt){
        echo "Approved";

      }
      
    }
    
    public function admin_profile(){
		$this->load->library("form_validation");
		$this->load->model("adminmodel");
		$data['crecord'] = $this->adminmodel->getrecord();
		$data['pageTitle'] = 'Admin Profile';
		$data['smallTitle'] = 'Profile form';
		$data['mainPage'] = 'Admin Profile';
		$data['subPage'] = 'Admin Profile';
		$data['title'] = 'Admin Profile Form';
		$data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/customerJs';
		$data['mainContent'] = 'admin_profile';
		$this->load->view("includes/mainContent", $data);
	}

	public function admin_edit_profile(){  
	$data=array(
				'admin_username'=>$this->input->post("cname"),
				//'admin_password'=>$this->input->post("fname"),
				'city'=>$this->input->post("city"),
				'state'=>$this->input->post("state"),
				'address_1'=> $this->input->post("cadd"),
				'address_2'=> $this->input->post("peradd"),
				'pin'=>$this->input->post("pin"),
				'email1'=>$this->input->post("email"),
				'email2'=>$this->input->post("email2"),
				'mobile_number'=>$this->input->post("mno"),
				'phone_number'=>$this->input->post("pmno"),
				'fax_number'=>$this->input->post("adhar"),
				'gst_number'=>$this->input->post("panno"),
				'language'=>$this->input->post("gen"),
				'nationality'=>$this->input->post("nat")

);
	 $this->load->library('upload');

			$photo_name = time().trim($_FILES['logo']['name']);
			$photo_name=str_replace(' ', '_', $photo_name);
			$logo=$this->input->post('logo');
	 		//echo $logo;
			$image_path = realpath(APPPATH . '../assets/img/');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '500';
			$config['file_name'] = $photo_name;
	  if (!empty($_FILES['logo']['name'])) {
			$this->upload->initialize($config);
			if($this->upload->do_upload('logo')){
				$data=array(
				 'logo'=>$photo_name,

				);
				
				//print_r($data);
        		$this->db->update("general_settings",$data);
				// redirect("clogin/admin_profile");
			}
					else{
					 echo "Somthing going wrong. Please Contact Site administrator";
					    }}else{
						echo "file not Select";
						  }

				$this->load->model("Adminmodel");
				$this->Adminmodel->update_admin_profile($data);	 
				redirect('adminController/admin_profile'); 
				//print_r($data);
}

	function addemployee(){
	    $data['pageTitle'] = 'Admin Profile';
		$data['smallTitle'] = 'Profile form';
		$data['mainPage'] = 'Admin Profile';
		$data['subPage'] = 'Admin Profile';
		$data['title'] = 'Admin Profile Form';
		$data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/customerJs';
		$data['mainContent'] = 'addemployee';
		$this->load->view("includes/mainContent", $data);
	    
	}

	function insertproduct(){
	    	$photo_name = time().trim($_FILES['img']['name']);
	    	
	   $data['product_name']= $this->input->post("name");
	   
	   $data['price']=$this->input->post("price");
	   
	   	$this->load->library('upload');
			$image_path = realpath(APPPATH . '../assets/img/');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '500';
			$config['file_name'] = $photo_name;
				if (!empty($_FILES['img']['name'])) {
			$this->upload->initialize($config);
			 $f1= $this->upload->do_upload('img');
	     	$data["image_name"]=$photo_name;
	     	
				}
				$dt=$this->db->insert("products",$data);
				if($dt){ ?>
				<script> alert("Product Inserted Successfully."); </script>
			<?php redirect("adminController/addproduct","refresh");
			}
	    
	}
    	public function sms()
	{    $data['uri']= $this->uri->segment(3);
	    $data['pageTitle'] = 'Admin Profile';
		$data['smallTitle'] = 'Profile form';
	    $data['mainPage'] = 'Admin Profile';
		$data['subPage'] = 'Admin Profile';
		$data['title'] = 'Admin Profile Form';
	    $data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/customerJs';
	    $data['mainContent'] = 'writesms';
	    $this->load->view("includes/mainContent", $data);
	}
   

  

public function addemployeeinfo(){
$data=array(
				'employee_iname'=>$this->input->post("empname"),
				'job_tittle'=>$this->input->post("jobtittle"),
				'current_address'=> $this->input->post("address"),
				'city'=>$this->input->post("city"),
				'state'=>$this->input->post("state"),
				'area'=> $this->input->post("area"),
				'pin'=>$this->input->post("pincode"),
				'email'=>$this->input->post("email"),
				'dob'=>$this->input->post("dob"),
				'mobilenumber'=>$this->input->post("mobile"),
				'altnumber'=>$this->input->post("number"),
				'country'=>$this->input->post("country"),
				'qualification'=>$this->input->post("qualification"),
				'experience'=>$this->input->post("experience"),
				'joining_date'=>$this->input->post("jdate"),
				'status' => 1,
				'password'=>$this->input->post("password")

);

				$this->load->model("Adminmodel");
				$this->Adminmodel->addemployee($data);	 
				redirect('adminController/addemployeeinfo'); 
				//echo "submmitted";
				//print_r($data);
}

public function employee_list(){
		$this->load->model('Adminmodel');
		$data['row']=$this->Adminmodel->getinfo();
		$data['pageTitle'] = ' Customer list';
		$data['smallTitle'] =' Customer list';
		$data['mainPage'] =  'Customer list';
		$data['subPage'] =' Customer list';
		$data['title'] =' Customer list';
		$data['headerCss'] = 'headerCss/customerlistcss';
		$data['footerJs'] = 'footerJs/customerlistjs';
		$data['mainContent'] = 'employee_list';
		$this->load->view("includes/mainContent", $data);

}


}

?>