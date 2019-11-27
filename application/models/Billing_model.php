<?php
class Billing_model extends CI_Model{
    public function fetch_recipient_val(){
        $this->load->database();
        $this->db->select("*");
        $this->db->order_by("date" , "desc");
        $this->db->limit(1);
        $query = $this->db->get("recipient_details");
        return $query->result();
    }
}
?>