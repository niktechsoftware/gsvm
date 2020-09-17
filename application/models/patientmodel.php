<?php 
    class Patientmodel extends CI_Model{
    	public function addpatient($data){
    	$info=	$this->db->insert("reg_patient_info",$data);
			return $info;
    	}
    }
