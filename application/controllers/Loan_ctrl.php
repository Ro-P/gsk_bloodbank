<?php

class Loan_ctrl extends CI_Controller{
    public function loan_request(){
        $this->load->view('nav.php');
        $this->load->view('Loan/loan_request');
        
    }
    public function loan_bank(){
        $this->load->view('nav.php');
        $this->load->view('Loan/loan_bank');
        
    }
    public function loan_outward(){
        $this->load->view('nav.php');
        $this->load->view('Loan/loan_outward');
        
    }
    public function allot_fraction(){
        $this->load->view('nav.php');
        $this->load->view('Loan/allot_fraction');
        
    }
    public function send_fraction(){
        $this->load->view('nav.php');
        $this->load->view('Loan/send_fraction');
        
    }
}

?>