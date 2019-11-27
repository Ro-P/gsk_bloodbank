<?php

class Loan_ctrl extends CI_Controller{
    public function loan_request(){
        $this->load->view('nav.php');
        $this->load->view('Loan/loan_request');
    }
}

?>