<?php
	class AdvRej_model extends CI_Model{
		public function addAdvRejDetails($data){
			$this->load->database();
			$this->db->insert("adv_rej", $data);
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
