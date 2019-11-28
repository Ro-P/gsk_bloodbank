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
	public function Input_bill(){
        $this->load->view("nav.php");
        $this->load->view("bill\input_bill");
    }

    public function Bill_action(){
        $patient_name = $this->input->post("pat_name");
        $doctor_name = $this->input->post("hosp_name");
        $bgrp = $this->input->post("bgrp");
        $invoice = $this->input->post("invoice");
        $product = $this->input->post("product");
        $description = $this->input->post("description");
        $quantity = $this->input->post("quantity");
        $charges = $this->input->post("charges");
        $gross_amt = $this->input->post("gross");
        $discount = $this->input->post("discount");
        $amount = $this->input->post("amount");

        //array of patients
        $data_user = array(
           "patient_name"=>"$patient_name",
           "doctors_name"=>"$doctor_name",
           "bgrp"=>"$bgrp",
           "inv_no"=>"$invoice",
           "product"=>"$product",
           "description"=>"$description",
           "quantity"=>"$quantity",
           "charges"=>"$charges",
           "gross_amt"=>"$gross_amt",
           "discount" => "$discount",
           "amount"=>"$amount"


        );
        $this->load->model("Billing_model");
        $user_id = $this->Billing_model->input_bill($data_user);

        header("Location:../home?success=1");
      
    }
}
?>
