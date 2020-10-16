<?php
class DaybookController extends CI_Controller{

  function __construct()
	{
		parent::__construct();
		$this->is_login();
		$this->load->model('daybook');
	
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
  function report(){
    $uri=$this->uri->segment(3);
    $data['uri']=$uri;
    $data['pageTitle'] = 'Daybook';
    $data['smallTitle'] = 'Daybook ';
    $data['mainPage'] = 'Accounting';
    $data['subPage'] = 'Accounting';
    $data['title'] = 'Daybook';
    $data['headerCss'] = 'headerCss/customerlistcss';
    $data['footerJs'] = 'footerJs/customerlistjs';
    $data['mainContent'] = 'daybook';
    $this->load->view("includes/mainContent", $data);
  }
  
  function gerReport(){
      $sdate = $this->input->post("sdate");
      $edate = $this->input->post("edate");
      $getv  = $this->input->post("getv");
      if($getv==1){
          $registration = $this->db->query("select * from reg_patient_info where DATE(date) >= '$sdate' and DATE(date) <='$edate'");
          $data['sdate']=$sdate;
          $data['edate']=$edate;
          $data['row']=$registration;
          $data['pageTitle'] = 'Daybook';
            $data['smallTitle'] = 'Daybook ';
            $data['mainPage'] = 'Registration';
            $data['subPage'] = 'Accounting';
            $data['title'] = 'Daybook';
            $data['headerCss'] = 'headerCss/customerlistcss';
            $data['footerJs'] = 'footerJs/customerlistjs';
            $data['mainContent'] = 'registrationReport';
            $this->load->view("includes/mainContent", $data);
      }
       if($getv==2){
          $pr = $this->db->query("select * from pesticide_proforma where DATE(date) >= '$sdate' and DATE(date) <='$edate'");
          $data['sdate']=$sdate;
          $data['edate']=$edate;
          $data['row']=$pr;
          $data['pageTitle'] = 'Daybook';
            $data['smallTitle'] = 'Daybook ';
            $data['mainPage'] = 'Registration';
            $data['subPage'] = 'Accounting';
            $data['title'] = 'Daybook';
            $data['headerCss'] = 'headerCss/customerlistcss';
            $data['footerJs'] = 'footerJs/customerlistjs';
            $data['mainContent'] = 'pesticidereport';
            $this->load->view("includes/mainContent", $data);
      }
       if($getv==3){
          $sspid =  $this->input->post("ssp");
          if($sspid==1){
              $table="coronary_proforma";
          }
           if($sspid==2){
              $table="breast_cancer_proforma";
          }
           if($sspid==3){
              $table="oral_cancer_proforma";
          }
           if($sspid==4){
              $table="hypertension_proforma";
          }
           if($sspid==5){
              $table="diabetes_proforma";
          }
          
          $dod = $this->db->query("select * from $table where DATE(date) >= '$sdate' and DATE(date) <='$edate'");
          $data['sdate']=$sdate;
          $data['edate']=$edate;
          $data['row']=$dod;
          $data['table']=$table;
          $data['sspid']=$sspid;
          $data['pageTitle'] = 'Daybook';
            $data['smallTitle'] = 'Daybook ';
            $data['mainPage'] = 'Registration';
            $data['subPage'] = 'Accounting';
            $data['title'] = 'Daybook';
            $data['headerCss'] = 'headerCss/customerlistcss';
            $data['footerJs'] = 'footerJs/customerlistjs';
            $data['mainContent'] = 'dodReport';
            $this->load->view("includes/mainContent", $data);
      }
      
      if($getv==4){
           $bpi = $this->db->query("select * from bpi_investigation where DATE(date) >= '$sdate' and DATE(date) <='$edate'");
          $data['sdate']=$sdate;
          $data['edate']=$edate;
          $data['row']=$bpi;
          $data['pageTitle'] = 'Daybook';
            $data['smallTitle'] = 'Daybook ';
            $data['mainPage'] = 'Registration';
            $data['subPage'] = 'Accounting';
            $data['title'] = 'Daybook';
            $data['headerCss'] = 'headerCss/customerlistcss';
            $data['footerJs'] = 'footerJs/customerlistjs';
            $data['mainContent'] = 'bpiReport';
            $this->load->view("includes/mainContent", $data);
      }
          
  }

function getroiandpool(){
 
    $data['pageTitle'] = 'Daybook';
    $data['smallTitle'] = 'Daybook ';
    $data['mainPage'] = 'Accounting';
    $data['subPage'] = 'Accounting';
    $data['title'] = 'Daybook';
    $data['headerCss'] = 'headerCss/customerlistcss';
    $data['footerJs'] = 'footerJs/customerlistjs';
    $data['mainContent'] = 'daybookpool';
    $this->load->view("includes/mainContent", $data);
}

function daybookTrans(){
     $data['camount']=0;
     $data['pageTitle'] = 'Monthly Balance ';
    $data['smallTitle'] = 'Daybook ';
    $data['mainPage'] = 'Monthly Balance';
    $data['subPage'] = 'Monthly Balance';
    $data['title'] = 'Monthly Balance';
    $data['headerCss'] = 'headerCss/customerlistcss';
    $data['footerJs'] = 'footerJs/customerlistjs';
    $data['mainContent'] = 'daymonthly';
    $this->load->view("includes/mainContent", $data);
}

function getdata(){
    $camount =0;
    $sdate = $this->input->post("sdate");
     $edate = $this->input->post("edate");
     $this->db->select_sum("amount");
      $this->db->where("debit_credit",0);
     $this->db->where("transaction_type",14);
     $this->db->where("DATE(date1) > ",$sdate);
     $this->db->where("Date(date1) <",$edate);
    $cam =  $this->db->get("inner_daybook");
    if($cam->num_rows()>0){
    $camount= $cam->row()->amount;
     $data['sdate']=$sdate;
      $data['edate']=$edate;
    }
    else{
        $camount=0;
        
    }
    $data['camount']=$camount;
    $data['pageTitle'] = 'Monthly Balance ';
    $data['smallTitle'] = 'Daybook ';
    $data['mainPage'] = 'Monthly Balance';
    $data['subPage'] = 'Monthly Balance';
    $data['title'] = 'Monthly Balance';
    $data['headerCss'] = 'headerCss/customerlistcss';
    $data['footerJs'] = 'footerJs/customerlistjs';
    $data['mainContent'] = 'daymonthly';
    $this->load->view("includes/mainContent", $data);
     
}

}
?>