<?php
	class PatSampRej_model extends CI_Model{
		public function addRejDetails($data){
			$this->load->database();
			$this->db->insert("pat_samp_rej", $data);
			// return $this->db->insert_id();
		}
		// public function addMedicalDetails($data){
		// 	$this->load->database();
		// 	$this->db->insert("user_medical" , $data);
		// }
		// public function fetchUsers(){
		// 	$this->load->database();
		// 	$this->db->select("*");
		// 	$query = $this->db->get("user_details");
		// 	return $query->result();
		// }
		
	}
?>
