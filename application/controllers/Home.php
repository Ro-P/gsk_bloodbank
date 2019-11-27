<?php
class Home extends CI_Controller{
    public function index(){
        $this->load->model("Donor_model");
        $this->load->model("Recipient_model");
        $data['rows'] = $this->Donor_model->fetchUsers();
        $data['rec'] = $this->Recipient_model->fetchrec();
        $this->load->view("myhome.php" , $data);
    }
}
?>
