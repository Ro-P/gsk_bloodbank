<?php
    class Serology extends CI_Controller{
        public function bg_group(){
            $this->load->model("Serology_model");
            $data['recipients'] =  $this->Serology_model->fetch_recipient();
            $this->load->view("Patient_BG_Grouping", $data);
        }
        public function donor_bg_group(){
            $this->load->model("Serology_model");
            $data['donors'] =  $this->Serology_model->fetch_donor();
            $this->load->view("Donor_BG_Grouping", $data);
        }
        public function patient_bg_validation(){
            $this->load->model("Serology_model");
            $data['recipients_val'] =  $this->Serology_model->fetch_recipient_val();
            $data['all_recipients'] = $this->Serology_model->fetch_all();
            $this->load->view("Patient_BG_Validation", $data);
        }
    }
?>