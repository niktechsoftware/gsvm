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
    }
