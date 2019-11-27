<?php
	class Reports_model extends CI_Model{

	//for donor
		public function fetchDonor(){
			$this->load->database();
			$this->db->select("*");
			$query = $this->db->get('user_details');
			return $query->result();
		}
		
		public function getDonorInfo($from, $to){
			$this->load->database();
			$this->db->select("*");
			$this->db->where('date >=', $from);
			$this->db->where('date <=', $to);
			//$this->db->where('date between $from and $to');
			$query = $this->db->get('user_details');
			// $this->db->where_not_in('id', $id);
			return json_decode(json_encode($query->result()),true);
		}
	}
?>
