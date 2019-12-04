<?php
class Billing_model extends CI_Model{
    public function fetch_recipient_val(){
        $this->load->database();
        $this->db->select("*");
        $this->db->order_by("date" , "desc");
        $this->db->limit(1);
        $query = $this->db->get("bill");
        return $query->result();
    }

    public function input_bill($data){
        $this->load->database();
        $this->db->insert("bill",$data);
        
	}
	
	public function fetch_recipient(){
        $this->load->database();
        $this->db->select("*");
        $this->db->order_by("date" , "desc");
        $this->db->limit(5);
        $query = $this->db->get("recipient_details");
        return $query->result();
    }
}
?>
