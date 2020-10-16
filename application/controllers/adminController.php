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
	
	function changePassword(){
	   $userid = $this->input->post("userid");
	   $op = $this->input->post("op");
	   $np = $this->input->post("np");
	   $rnp= $this->input->post("rnp");
	   $this->db->where("id",$userid);
	   $gst = $this->db->get("general_settings");
	   if($gst->row()->admin_password==md5($op)){
	       $uppass['admin_password']=md5($np);
	       $this->db->where("id",$userid);
	   if($this->db->update("general_settings", $uppass)){
	      echo '<div class="alert alert-success">Password Change Successfully|</div>';
	   }else{
	        echo '<div class="alert alert-danger">Please Try Again|</div>';
	   }
	   }else{
	        echo '<div class="alert alert-danger">Old Password is incorrect. </div>';
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
				'customer_name'=>$this->input->post("cname"),
				'business_name'=>$this->input->post("bisinessname"),
				'city'=>$this->input->post("city"),
				'state'=>$this->input->post("state"),
				'address_1'=> $this->input->post("cadd"),
				'address_2'=> $this->input->post("peradd"),
				'pin'=>$this->input->post("pin"),
				'email1'=>$this->input->post("email"),
				'email2'=>$this->input->post("email2"),
				'mobile_number'=>$this->input->post("mno"),
				'phone_number'=>$this->input->post("pmno"),
				'aadhar'=>$this->input->post("adhar"),
				'pan_no'=>$this->input->post("panno"),
				'language'=>$this->input->post("language"),
				'nationality'=>$this->input->post("nat")

        );
		 $this->load->library('upload');
	
		
	  if (!empty($_FILES['logo']['name'])) {
	      	$photo_name = time().trim($_FILES['logo']['name']);
			$photo_name=str_replace(' ', '_', $photo_name);
			$image_path = realpath(APPPATH . '../assets/img/');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '50000';
			$config['file_name'] = $photo_name;
			$this->upload->initialize($config);
			if($this->upload->do_upload('logo')){
				$data['logo']=$photo_name;
			
			}
					else{
					echo $this->upload->display_errors();
					    }
	  }
	  if (!empty($_FILES['profile_logo']['name'])) {
	      	$photo_name1 = time().trim($_FILES['profile_logo']['name']);
			$photo_name1=str_replace(' ', '_', $photo_name1);
			$image_path = realpath(APPPATH . '../assets/img/');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '50000';
			$config['file_name'] = $photo_name1;
			$this->upload->initialize($config);
			if($this->upload->do_upload('profile_logo')){
				$data['ico_logo']=$photo_name1;
			}
					else{
					echo  $this->upload->display_errors();
					    }
	  }         
	
	    $this->db->where("id",1);
       if($this->db->update("general_settings",$data)){
	    redirect('adminController/admin_profile/success'); 
       }else{
           echo "1";
       }
			
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
			$config['max_size'] = '50000';
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
				'gender'=>$this->input->post("gender"),
				'joining_date'=>$this->input->post("jdate"),
				'status' => 1,
				'password'=>$this->input->post("password")

                );

				$this->load->model("Adminmodel");
				if($this->Adminmodel->addemployee($data)){	 
				    redirect('adminController/addemployee/success'); 
				}else{
				    redirect('adminController/addemployee/fail'); 
				}
			
}

public function employee_list(){
		$this->load->model('Adminmodel');
		$data['row']=$this->Adminmodel->getinfo();
		$data['pageTitle'] = ' Employee list';
		$data['smallTitle'] =' Employee list';
		$data['mainPage'] =  'Employee list';
		$data['subPage'] =' Employee list';
		$data['title'] =' Employee list';
		$data['headerCss'] = 'headerCss/customerlistcss';
		$data['footerJs'] = 'footerJs/customerlistjs';
		$data['mainContent'] = 'employee_list';
		$this->load->view("includes/mainContent", $data);

}

public function studyAssign(){
	$this->load->model('Adminmodel');
	$data['record']=$this->Adminmodel->getEmployee();
	$data['pageTitle'] = ' Employee Role';
	$data['smallTitle'] =' Employee Role';
	$data['mainPage'] =  'Employee Role';
	$data['subPage'] =' Employee list';
	$data['title'] =' Assign Role';
	$data['headerCss'] = 'headerCss/nullCss';
	$data['footerJs'] = 'footerJs/dashboardJs';
	$data['mainContent'] = 'asignrole';
	$this->load->view("includes/mainContent", $data);
	
}

public function searchEmp(){
    $keyword = '%'.$this->input->post("keyword").'%';
    	$sql = "SELECT * FROM employee_info WHERE employee_iname LIKE '$keyword' ORDER BY employee_iname ASC LIMIT 0, 10";
    	$query = $this->db->query($sql);
    	foreach ($query->result() as $rs) {
    		// put in bold the written text
    		//$country_name = str_replace($this->input->post("keyword"), '<b>'.$this->input->post("keyword").'</b>', $rs->p_name);
    		// add new option
    		echo '<li onclick="set_item(\''.str_replace("'", "\'", $rs->id).'\')"><a href="#javascript();">'.$rs->employee_iname." - ".$rs->fname.'</a></li>';
    	}
}

public function updatePermissionStatus(){
	$eid = $this->input->post("eid");
	$sp = $this->input->post("sp");
	$this->db->where("plan_id",$sp);
	$this->db->where("employee_id",$eid);
	$spo = $this->db->get("assign_plan");
	if($spo->num_rows()>0){
		$data['plan_id']=$sp;
		$this->db->where("id",$spo->row()->id);
		if($this->db->update("assign_plan",$data)){
			echo '<div class="alert alert-info">Updated Successfully</div>';
		}
	}else{
		$data['plan_id']		=	$sp;
		$data['sub_plan_id']	=	0;
		$data['employee_id']	=	$eid;
		if($this->db->insert("assign_plan",$data)){
		echo '<div class="alert alert-success">Assign Permission Successfully</div>';
	}
	}
	
}

function supdatePermissionStatus(){
	$eid = $this->input->post("eid");
	$sp = $this->input->post("sp");
	$ssp = $this->input->post("ssp");
	
	$this->db->where("plan_id",$sp);
	$this->db->where("employee_id",$eid);
	$this->db->where("sub_plan_id",$ssp);
	$spo = $this->db->get("assign_plan");
	if($spo->num_rows()>0){
		$data['plan_id']=$sp;
		$data['sub_plan_id']=$ssp;
		$this->db->where("id",$spo->row()->id);
		if($this->db->update("assign_plan",$data)){
			echo '<div class="alert alert-info">Updated Successfully</div>';
		}
	}else{
		$data['plan_id']		=	$sp;
		$data['sub_plan_id']	=	$ssp;
		$data['employee_id']	=	$eid;
		if($this->db->insert("assign_plan",$data)){
			echo '<div class="alert alert-success">Assign Permission Successfully</div>';
		}
	}
	
	}

function deletePermissionStatus(){
	$eid = $this->input->post("eid");
	$sp = $this->input->post("sp");
	$this->db->where("plan_id",$sp);
	$this->db->where("employee_id",$eid);
	if($this->db->delete("assign_plan")){
	echo '<div class="alert alert-warning">Remove Permission Successfully</div>';
	}else{
		echo "Try Again";
	}
}

function sdeletePermissionStatus(){
	$eid = $this->input->post("eid");
	$sp = $this->input->post("sp");
	$ssp = $this->input->post("ssp");
	$this->db->where("plan_id",$sp);
	$this->db->where("sub_plan_id",$ssp);
	$this->db->where("employee_id",$eid);
	if($this->db->delete("assign_plan")){
		echo '<div class="alert alert-info">Updated Successfully</div>';
	}else{
		echo '<div class="alert alert-danger">Please try again!</div>';
	}
}
public function getPermissionStatus(){
	$eid = $this->input->post("eid");
		//print_r($plan_recotd->result());
			$data["eid"]=$eid;
			$this->load->view("permission",$data);
		
	}
}
?>