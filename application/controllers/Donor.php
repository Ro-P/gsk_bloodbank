<?php
class Donor extends CI_Controller{
	public function adddonor(){
		$donor_fname = $this->input->post("fname");
		$donor_mname = $this->input->post("mname");
		$donor_lname = $this->input->post("lname");
		$donor_name = ($donor_fname . " " . $donor_mname . " " . $donor_lname);
		$donor_email = $this->input->post("email");
		$donor_addr = $this->input->post("address");
		$donor_pincode = $this->input->post("pin");
		$donor_age = $this->input->post("age");
		$donor_phno = $this->input->post("phno");
		$donor_bgrp = $this->input->post("bgrp");
		$donor_sex = $this->input->post("sex");
		$donor_dob = $this->input->post("dob");
		$donor_occupation = $this->input->post("occ");
		$donor_weight = $this->input->post("wt");
		$donor_lbp = $this->input->post("lbp");
		$donor_rbp = $this->input->post("rbp");
		$donor_bp = ($donor_lbp . "/" . $donor_rbp);
		$donor_hb = $this->input->post("hb");
		$donor_pulse = $this->input->post("pulse");
		$donor_temp = $this->input->post("temp");
		$donor_resp = $this->input->post("resp");
		$donor_sysexam = $this->input->post("sys_exam");
		$donor_venipuncture = $this->input->post("venipuncture");
		$donor_other = $this->input->post("other");
		//array of donor's form
		$data_user = array(
			// "fname" => "$donor_fname",
			// "mname" => "$donor_mname",
			// "lname" => "$donor_lname",
			"name" => "$donor_name",
			"email" => "$donor_email",
			"address" => "$donor_addr",
			"pin" => "$donor_pincode",
			"age" => "$donor_age",
			"phone_no" => "$donor_phno",
			"blood_gr" => "$donor_bgrp",
			"sex" => "$donor_sex",
			"occ" => "$donor_occupation",
			"dob" => "$donor_dob"
		);
		$this->load->model("Donor_model");
		$user_id = $this->Donor_model->addUserDetails($data_user);
	
		//array of donor's physical details

		$data_med = array(
			"weight" => "$donor_weight",
			"bp" => "$donor_bp",
			"hb" => "$donor_hb",
			"pulse" => "$donor_pulse",
			"temp" => "$donor_temp",
			"resp" => "$donor_resp",
			"sys_exam" => "$donor_sysexam",
			"venipuncture" => "$donor_venipuncture",
			"other" => "$donor_other",
			"user_id" => $user_id

		);
		$this->Donor_model->addMedicalDetails($data_med);
		header("Location:home?success=1");
	}
}
?>
