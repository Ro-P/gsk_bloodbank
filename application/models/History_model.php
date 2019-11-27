<?php
	class History_model extends CI_Model{
		//for bag and donor
		public function fetchUsers(){
			$this->load->database();
            $this->db->select("*");
			$query = $this->db->get("user_details");
			return $query->result();
		}

		//for bag
		public function getBloodgroup($id){
			$this->load->database();
			$this->db->select("blood_gr");
			$this->db->select("sex");	
			$this->db->where('id' , $id);
			$query = $this->db->get('user_details');
			return json_decode(json_encode($query->result()),true);
		}

		//for donor
		public function getDonorInfo($id){
			$this->load->database();
			$this->db->select("name");
			$this->db->select("sex");
			$this->db->select("blood_gr");
			$this->db->select("phone_no");
			$this->db->select("email");
			$this->db->select("age");
			$this->db->select("pin");
			$this->db->select("dob");
			$this->db->select("occ");
			$this->db->select("address");
			$this->db->where('id', $id);
			$query = $this->db->get('user_details');
			// $this->db->where_not_in('id', $id);
			return json_decode(json_encode($query->result()),true);
		}

		public function getD(){
			$this->load->database();
			$this->db->select("name");
			$this->db->select("sex");
			$this->db->select("blood_gr");
			$this->db->select("phone_no");
			$this->db->select("email");
			$this->db->select("age");
			$this->db->select("pin");
			$this->db->select("dob");
			$this->db->select("occ");
			$this->db->select("address");
			$query = $this->db->get('user_details');
			return $query->result();
		}

		//for recipient
		public function fetchRecipient(){
			$this->load->database();
            $this->db->select("*");
			$query = $this->db->get("recipient_details");
			return $query->result();
		}
		public function getRecipientInfo($id){
			$this->load->database();
			$this->db->select("patient_name");
			$this->db->select("bgrp");
			$this->db->select("age");
			$this->db->select("sex");
			$this->db->select("type_of_req");
			// $this->db->select("phone_no");
			// $this->db->select("email");
			// $this->db->select("age");
			// $this->db->select("pin"); 
			// $this->db->select("dob");
			// $this->db->select("occ");
			// $this->db->select("address");
			$this->db->where('rec_id', $id);
			$query = $this->db->get('recipient_details');
			return json_decode(json_encode($query->result()),true);
		}
		
	}
?>
