<?php
	class Donor_model extends CI_Model{
		public function addUserDetails($data){
			$this->load->database();
			$this->db->insert("user_details", $data);
			return $this->db->insert_id();
		}
		public function addMedicalDetails($data){
			$this->load->database();
			$this->db->insert("user_medical", $data);
		}
		public function fetchUsers(){
			$this->load->database();
			$this->db->select("*");
			$query = $this->db->get("user_details");
			return $query->result();
		}
		
	}
?>
