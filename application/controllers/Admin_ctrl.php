<?php
class Admin_ctrl extends CI_Controller{
    public function user_registration(){
        $this->load->view("nav.php");
        $this->load->view("Admin/user_registration.php");
    }
    public function user_registration_entry(){
        $user_fname = $this->input->post("fname");
        $user_mname = $this->input->post("mname");
        $user_lname = $this->input->post("lname");
        $user_name = ($user_fname . " " . $user_mname . " " . $user_lname);
        $user_login_required = $this->input->post("login_required");
        $user_login_name = $this->input->post("login_name");
        $user_login_password = $this->input->post("login_password");
        $user_type = $this->input->post("user_type");
        $user_joining_date = $this->input->post("joining_date");
        $user_fda_approved = $this->input->post("fda_approved");
        $user_dob = $this->input->post("dob");
        $user_gender = $this->input->post("gender");
        $user_marital_status = $this->input->post("marital_status");
        $user_mobile_no1 = $this->input->post("mobile_no1");
        $user_mobile_no2 = $this->input->post("mobile_no2");
        $user_email = $this->input->post("email");
        $user_permanent_add = $this->input->post("permanent_add");
        $user_temporary_add = $this->input->post("temporary_add");

        //array of user's form
        $data_user = array(
            "name" => "$user_name",
            "login_required" => "$user_login_required",
            "login_name" => "$user_login_name",
            "login_password" => "$user_login_password",
            "user_type" => "$user_type",
            "joining_date" => "$user_joining_date",
            "fda_approved" => "$user_fda_approved",
            "dob" => "$user_dob",
            "gender" => "$user_gender",
            "marital_status" => "$user_marital_status",
            "mobile_no1" => "$user_mobile_no1",
            "mobile_no2" => "$user_mobile_no2",
            "email" => "$user_email",
            "permanent_add" => "$user_permanent_add",
            "temporary_add" => "$user_temporary_add"
        );
        $this->load->model("user_registration_model");
        $this->user_registration_model->addUserDetails($data_user);
        header("Location:home?success=1");
    }
    public function user_permission(){
        //$this->load->model("Reports_model");
        //$data['user'] = $this->Reports_model->fetchuser();
        // $data['one_rec'] = $this->BagIssueModel->fetch_one_rec();
        // $data['all_recipients'] =  $this->BagIssueModel->fetch_all_rec();        
        $this->load->view("nav.php");
        $this->load->view("Admin/user_permission.php");
    }
    public function user_deactivation(){       
        $this->load->model("User_registration_model");
        $data['all_user'] =  $this->User_registration_model->fetch_all_user(); 
        //$data['user'] = $this->Reports_model->fetchuser();
        // $data['one_rec'] = $this->BagIssueModel->fetch_one_rec();
        $this->load->view("nav.php");
        $this->load->view("Admin/user_deactivation.php", $data);
    }
    public function bill_delete(){
        //$this->load->model("Reports_model");
        //$data['user'] = $this->Reports_model->fetchuser();
        // $data['one_rec'] = $this->BagIssueModel->fetch_one_rec();
        // $data['all_recipients'] =  $this->BagIssueModel->fetch_all_rec();        
        $this->load->view("nav.php");
        $this->load->view("Admin/bill_delete.php");
    }
    public function patient_detail_edit(){
        //$this->load->model("Reports_model");
        //$data['user'] = $this->Reports_model->fetchuser();
        // $data['one_rec'] = $this->BagIssueModel->fetch_one_rec();
        // $data['all_recipients'] =  $this->BagIssueModel->fetch_all_rec();        
        $this->load->view("nav.php");
        $this->load->view("Admin/patient_detail_edit.php");
    }
    public function user_deactivation_action(){
        $this->load->model("User_registration_model");
        $this->User_registration_model->deleteRegUser($this->input->post("user_id"));
        header("Location:user_deactivation?success=1");
    }
}
?>