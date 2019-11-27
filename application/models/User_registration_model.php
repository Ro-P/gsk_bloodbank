<?php
	class User_registration_model extends CI_Model{
		public function addUserDetails($data){
			$this->load->database();
			$this->db->insert("user_registration", $data);
        }

        public function fetch_all_user(){
            $this->load->database();
            $this->db->select("*");
            //$this->db->order_by("date" , "desc");
            $query = $this->db->get("user_registration");
            return $query->result();
        }
	}
?>
