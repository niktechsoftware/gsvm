<?php 
    class Patientmodel extends CI_Model{
    	public function addpatient($data){
    	$info=	$this->db->insert("reg_patient_info",$data);
			return $info;
    	}
    	function pat_max($tblnm){
            $this->db->select_max('id');
						$this->db->from($tblnm);
						$maxid=$this->db->get();
						if($maxid->num_rows()>0){
			      	return $maxid->row()->id;
						}else{
							return 1; 
						}
        }
        function matchid($username){
			
	}
	 function insertdiet($data){
		
		$res=$this->db->insert("reg_patient_diet",$data);
		return $res;	
	}
	function smoking_status($data){
		
		$res=$this->db->insert("reg_smoking_status",$data);
		return $res;	
	}
	function alcohol_status($data){
		
		$res=$this->db->insert("reg_alcohol_status",$data);
		return $res;	
	}
	function exercise_status($data){
		
		$res=$this->db->insert("reg_exercise_habit",$data);
		return $res;	
	}

    }
