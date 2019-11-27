<?php
	class Recipient_model extends CI_Model{
		public function addrecipient($data){
			$this->load->database();
			$this->db->insert("recipient_details" , $data);
		    return $this->db->insert_id();
		}
		public function addrecipientDetails($data){
			$this->load->database();
			$this->db->insert("recipient_bbtable" , $data);
			return $this->db->insert_id();	

		}

		public function addreqTable($data){
			$this->load->database();
			$this->db->insert("recipient_reqtable", $data);
		}
		
		public function fetchrec(){
			$this->load->database();
			$this->db->select("*");
			$query = $this->db->get("recipient_details");
			return $query->result();
		}
	}
?>
