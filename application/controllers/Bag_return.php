<?php
class Bag_return extends CI_Controller{
    public function reserve(){
        $this->load->model("BagReturnModel");
        $data['recipients_val'] =  $this->BagReturnModel->fetch_recipient_val();
        $data['all_recipients'] =  $this->BagReturnModel->fetch_all_rec();
        $this->load->view("nav.php");
        $this->load->view("bagReturn/reserveORrelease.php", $data);
    }
    public function reissue(){
        $this->load->model("BagReturnModel");
        $data['recipients_val'] = $this->BagReturnModel->fetch_recipient_val();
        $data['all_recipients'] =  $this->BagReturnModel->fetch_all_rec();        
        $this->load->view("nav.php");
        $this->load->view("bagReturn/reissueORrelease.php", $data);
    }
}
?>