<?php
class Reports_ctrl extends CI_Controller{

    public function donor_reports(){
        $this->load->model("Reports_model");
        $data['user'] = $this->Reports_model->fetchDonor();
        // $data['one_rec'] = $this->BagIssueModel->fetch_one_rec();
        // $data['all_recipients'] =  $this->BagIssueModel->fetch_all_rec();        
        $this->load->view("nav.php");
        $this->load->view("Reports/donor_reports.php", $data);
    }

    function getDonorInfo(){
        $from =  $this->input->get('from');
        $to =  $this->input->get('to');
        $this->load->model('Reports_model');
        $array = $this->Reorts_model->getDonorInfo($from, $to);
        // if($array){
        //     echo $array[0]['name']."^".$array[0]['sex']."^".$array[0]['blood_gr']."^".$array[0]['phone_no']."^".$array[0]['email']."^".$array[0]['age']."^".$array[0]['pin']."^".$array[0]['dob']."^".$array[0]['occ']."^".$array[0]['address'];
        // }
        // else{
        //     echo "Data Not Found\nEnter a Valid ID";
        // }
        // if(!empty($array)){
        //     echo $array[0]['name']."^".$array[0]['sex']."^".$array[0]['blood_gr']."^".$array[0]['phone_no']."^".$array[0]['email']."^".$array[0]['age']."^".$array[0]['pin']."^".$array[0]['dob']."^".$array[0]['occ']."^".$array[0]['address'];
        // }
        // else{
        //   echo "Data Not Found\nEnter a Valid ID"; 
        // }
    }
}
?>