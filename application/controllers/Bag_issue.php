<?php
class Bag_issue extends CI_Controller{
    public function BRBI(){
        $this->load->model("BagIssueModel");
        $data['recipients_val'] =  $this->BagIssueModel->fetch_recipient_val();
        $data['all_recipients'] =  $this->BagIssueModel->fetch_all_rec();
        $this->load->view("nav.php");
        $this->load->view("bagIssue/BRBI.php", $data);
    }
    public function BBIM(){
        $this->load->model("BagIssueModel");
        $data['recipients_val'] = $this->BagIssueModel->fetch_recipient_val();
        $data['one_rec'] = $this->BagIssueModel->fetch_one_rec();
        $data['all_recipients'] =  $this->BagIssueModel->fetch_all_rec();        
        $this->load->view("nav.php");
        $this->load->view("bagIssue/BBIM.php", $data);
    }
}
?>