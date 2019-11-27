<?php
class Bill extends CI_Controller{
    public function CM_Bill(){
        $this->load->model("Billing_model");
        $data['recipients_val'] =  $this->Billing_model->fetch_recipient_val();
        $this->load->view("nav.php");
        $this->load->view("bill/bill1.php", $data);
    }
    public function Final_Bill(){
        $this->load->view("nav.php");
        $this->load->view("bill/bill2.php");
    }
}
?>