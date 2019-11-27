<?php
class Rejection_ctrl extends CI_Controller{
    public function pat_samp_rej(){
        $this->load->view("nav.php");
        $this->load->view("Pat_samp_rej/pat_samp_rej.php");
        // $this->load->model("BagIssueModel");
        // $data['recipients_val'] =  $this->BagIssueModel->fetch_recipient_val();
        // $data['all_recipients'] =  $this->BagIssueModel->fetch_all_rec();
    }
    public function addPatient(){
        $patient_hhno = $this->input->post("hhno");
        $patient_vno = $this->input->post("vno");
		$patient_reqno = $this->input->post("reqno");
		$patient_accno = $this->input->post("accno");
		$patient_uhid = $this->input->post("uhid");
		$patient_pname = $this->input->post("pname");
        $patient_req_date = $this->input->post("req_date");
        $patient_sampbar = $this->input->post("sampbar");
		$patient_remarks = $this->input->post("remarks");

        $data_patient = array(
            "hhno" => "$patient_hhno",
            "vno" => "$patient_vno",
            "reqno" => "$patient_reqno",
            "accno" => "$patient_accno",
            "uhid" => "$patient_uhid",
            "pname" => "$patient_pname",
            "req_date" => "$patient_req_date",
            "sampbar" => "$patient_sampbar",
            "remarks" => "$patient_remarks"
        );
        $this->load->model("Rejection/PatSampRej_model");

        $this->PatSampRej_model->addRejDetails($data_patient);

        header("Location:home?success=1");

    }

    public function adv_reac(){
        // $this->load->model("BagIssueModel");
        // $data['recipients_val'] =  $this->BagIssueModel->fetch_recipient_val();
        // $data['all_recipients'] =  $this->BagIssueModel->fetch_all_rec();
        $this->load->view("nav.php");
        $this->load->view("Pat_samp_rej/adv_reac.php");
    }

    public function addAdvRej(){
        $patient1 = $this->input->post("patient1");
        $pbarcode = $this->input->post("pbarcode");
		$bbarcode1 = $this->input->post("bbarcode1");
		$patient2 = $this->input->post("patient2");
		$reqno = $this->input->post("reqno");
		$bbarcode2 = $this->input->post("bbarcode2");
        $component = $this->input->post("component");
        $fs_date = $this->input->post("fs_date");
        $fe_date = $this->input->post("fe_date");
        $voltrans = $this->input->post("volt");
        $natofreac = $this->input->post("natofreac");
        $crobs = $this->input->post("crobs");
		$fuia = $this->input->post("fuia");
		$remarks = $this->input->post("remarks");

        $data = array(
            "patient1" => "$patient1",
            "pbarcode" => "$pbarcode",
            "bbarcode1" => "$bbarcode1",
            "patient2" => "$patient2",
            "reqno" => "$reqno",
            "bbarcode2" => "$bbarcode2",
            "component" => "$component",
            "fs_date" => "$fs_date",
            "fe_date" => "$fe_date",
            "voltrans" => "$voltrans",
            "natofreac" => "$natofreac",
            "crobs" => "$crobs",
            "fuia" => "$fuia",
            "remarks" => "$remarks"
        );
        $this->load->model("Rejection/AdvRej_model");

        $this->AdvRej_model->addAdvRejDetails($data);

        header("Location:home?success=1");

    }
}
?>