<?php
class Recipient extends CI_Controller{
	public function addrecipient(){
		//assign variables
		$recipient_tor = $this->input->post("type_of_req");
		$recipient_fname = $this->input->post("frname");
		$recipient_mname = $this->input->post("mrname");
		$recipient_lname = $this->input->post("lrname");
		$recipient_name = ($recipient_fname . " " . $recipient_mname . " " . $recipient_lname);
		$recipient_age = $this->input->post("rage");
		$recipient_transfusion = $this->input->post("rtransfusion");
		$recipient_diagnosis = $this->input->post("rdiagnosis");
        $recipient_hb = $this->input->post("rhb");
        $recipient_gms = $this->input->post("rgms");
        $recipient_history = $this->input->post("rhistory");
        $recipient_reaction = $this->input->post("rreaction");
        $recipient_donor_sr = $this->input->post("donor_sr");
        $recipient_reqr = $this->input->post("reqr");
		$recipient_time = $this->input->post("time");
		$recipient_bgrp = $this->input->post("rbgrp");
		$recipient_sex = $this->input->post("rsex");
		$recipient_type_of_req = $this->input->post("type_of_req");
		//assign variables for requirement table
		$recipient_u1 = $this->input->post("u1");
		$recipient_u2 = $this->input->post("u2");
		$recipient_u3 = $this->input->post("u3");
		$recipient_u4 = $this->input->post("u4");
		$recipient_u5 = $this->input->post("u5");
		$recipient_u6 = $this->input->post("u6");
		$recipient_u7 = $this->input->post("u7");
		$recipient_d1 = $this->input->post("d1");
		$recipient_d2 = $this->input->post("d2");
		$recipient_d3 = $this->input->post("d3");
		$recipient_d4 = $this->input->post("d4");
		$recipient_d5 = $this->input->post("d5");
		$recipient_d6 = $this->input->post("d6");
		$recipient_d7 = $this->input->post("d7");
		$recipient_t1 = $this->input->post("t1");
		$recipient_t2 = $this->input->post("t2");
		$recipient_t3 = $this->input->post("t3");
		$recipient_t4 = $this->input->post("t4");
		$recipient_t5 = $this->input->post("t5");
		$recipient_t6 = $this->input->post("t6");
		$recipient_t7 = $this->input->post("t7");
		$recipient_r1 = $this->input->post("r1");
		$recipient_r2 = $this->input->post("r2");
		$recipient_r3 = $this->input->post("r3");
		$recipient_r4 = $this->input->post("r4");
		$recipient_r5 = $this->input->post("r5");
		$recipient_r6 = $this->input->post("r6");
		$recipient_r7 = $this->input->post("r7");
		//assign variables for bbtable
		$recipient_c1 = $this->input->post("c1");
		$recipient_uu1 = $this->input->post("uu1");
		$recipient_bgrp1 = $this->input->post("bgrp1");
		$recipient_x1 = $this->input->post("x1");
		$recipient_s1 = $this->input->post("s1");
		$recipient_dd1 = $this->input->post("dd1");
		$recipient_dt1 = $this->input->post("dt1");
		$recipient_rr1 = $this->input->post("rr1");
		
		$data_recipient = array(
			"type_of_req" => "$recipient_tor",
			"patient_name" => "$recipient_name",
			"age" => "$recipient_age",
			"transfusion" => "$recipient_transfusion",
			"diagnosis" => "$recipient_diagnosis",
			"hb" => "$recipient_hb",
			"gms_dl" => "$recipient_gms",
			"history" => "$recipient_history",
			"reaction" => "$recipient_reaction",
			"bgrp" => "$recipient_bgrp",
			"sex" => "$recipient_sex",
			"type_of_req" => "$recipient_type_of_req"
        );
        
		$this->load->model("Recipient_model");
        echo $insert_id = $this->Recipient_model->addrecipient($data_recipient);
        
		$data_med = array(
			"donor_sr" => "$recipient_donor_sr",
			"reqr" => "$recipient_reqr",
			"time" => "$recipient_time",
			
			"c1" => "$recipient_c1",
			"uu1" => "$recipient_uu1",
			"bgrp1" => "$recipient_bgrp1",
			"x1" => "$recipient_x1",
			"s1" => "$recipient_s1",
			"dd1" => "$recipient_dd1",
			"dt1" => "$recipient_dt1",
			"rr1" => "$recipient_rr1"
		);
		$this->Recipient_model->addrecipientDetails($data_med);

		$data_reqtable = array(
			"u1" => "$recipient_u1",
			"u2" => "$recipient_u2",
			"u3" => "$recipient_u3",
			"u4" => "$recipient_u4",
			"u5" => "$recipient_u5",
			"u6" => "$recipient_u6",
			"u7" => "$recipient_u7",

			"d1" => "$recipient_d1",
			"d2" => "$recipient_d2",
			"d3" => "$recipient_d3",
			"d4" => "$recipient_d4",
			"d5" => "$recipient_d5",
			"d6" => "$recipient_d6",
			"d7" => "$recipient_d7",

			"t1" => "$recipient_t1",
			"t2" => "$recipient_t2",
			"t3" => "$recipient_t3",
			"t4" => "$recipient_t4",
			"t5" => "$recipient_t5",
			"t6" => "$recipient_t6",
			"t7" => "$recipient_t7",

			"r1" => "$recipient_r1",
			"r2" => "$recipient_r2",
			"r3" => "$recipient_r3",
			"r4" => "$recipient_r4",
			"r5" => "$recipient_r5",
			"r6" => "$recipient_r6",
			"r7" => "$recipient_r7",
			"recipient_id" => $insert_id
		);

		$this->Recipient_model->addreqTable($data_reqtable);

		header("Location:home?success=1");

	}
}
?>
