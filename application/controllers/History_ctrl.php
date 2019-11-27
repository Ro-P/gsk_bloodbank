<?php
class History_ctrl extends CI_Controller{

    //for bag
    public function bag(){
        $this->load->model("History_model");
        $data['user'] =  $this->History_model->fetchUsers();
        // $data['all_recipients'] =  $this->History_model->fetch_all_rec();
        $this->load->view("nav.php");
        $this->load->view("History/bag_history", $data);
    }
    function getBloodgroup(){
        $id =  $this->input->get('id');
        $this->load->model('History_model');
        $array = $this->History_model->getBloodgroup($id);
        if($array){
            echo $array[0]['blood_gr']."^".$array[0]['sex'];
        }
        else{
            echo "Data Not Found\nEnter a Valid ID";
        }
    }

    //for donor
    public function donor(){
        $this->load->model("History_model");
        $data['user'] = $this->History_model->fetchUsers();
        // $data['one_rec'] = $this->BagIssueModel->fetch_one_rec();
        // $data['all_recipients'] =  $this->BagIssueModel->fetch_all_rec();        
        $this->load->view("nav.php");
        $this->load->view("History/donor_history.php", $data);
    }
    function getDonorInfo(){
        $id =  $this->input->get('id');
        $this->load->model('History_model');
        $array = $this->History_model->getDonorInfo($id);
        if($array){
            echo $array[0]['name']."^".$array[0]['sex']."^".$array[0]['blood_gr']."^".$array[0]['phone_no']."^".$array[0]['email']."^".$array[0]['age']."^".$array[0]['pin']."^".$array[0]['dob']."^".$array[0]['occ']."^".$array[0]['address'];
        }
        else{
            echo "Data Not Found\nEnter a Valid ID";
        }
    }

    //for recipient
    public function recipient(){
        $this->load->model("History_model");
        $data['recipient'] = $this->History_model->fetchRecipient();
        // $data['one_rec'] = $this->BagIssueModel->fetch_one_rec();
        // $data['all_recipients'] =  $this->BagIssueModel->fetch_all_rec();        
        $this->load->view("nav.php");
        $this->load->view("History/recipient_history.php", $data);
    }
    function getRecipientInfo(){
        $id = $this->input->get('id');
        $this->load->model('History_model');
        $array = $this->History_model->getRecipientInfo($id);
        if($array){
            echo $array[0]['patient_name']."^".$array[0]['bgrp']."^".$array[0]['age']."^".$array[0]['sex']."^".$array[0]['type_of_req'];
        }
        else{
            echo "Data Not Found\nEnter a Valid ID";
        }
    }

    public function generate_pdf() {
        //load pdf library
        $this->load->library('Pdf');
        
        $pdf = new Pdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        // set document information
        // $pdf->SetCreator(PDF_CREATOR);
        // `$pdf->SetAuthor('https://www.roytuts.com');
        // $pdf->SetTitle('Sales Information for Products');
        // $pdf->SetSubject('Report generated using Codeigniter and TCPDF');
        // $pdf->SetKeywords('TCPDF, PDF, MySQL, Codeigniter');`
    
        // set default header data
        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);
    
        // set header and footer fonts
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
    
        // set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
    
        // set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
    
        // set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
    
        // set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
    
        // set font
        //$fontname = $this->pdf->addTTFfont('fonts/Times New Roman.ttf', 'TrueTypeUnicode', '', 20);
        //$this->pdf->SetFont($fontname, '', 14, '', false);
         $pdf->SetFont('helvetica', 'B', 10);
        
        // ---------------------------------------------------------
        
        $pdf->SetDisplayMode('fullpage', 'SinglePage', 'UseNone');

        
        //Generate HTML table data from MySQL - start
        $template = array(
            'table_open' => '<table border="1" cellpadding="2" cellspacing="1">'
        );
    
        $this->load->library('table');
        $this->load->model('History_model');
        $this->table->set_template($template);
    
        $this->table->set_heading('Patient Name', 'Sex', 'B Group', 'Phone No', 'Email', 'Age', 'Pin', 'DOB', 'Occupation', 'Address');
        
        $salesinfo = $this->History_model->getD();
            
        foreach ($salesinfo as $row):
            $this->table->add_row($row->name, $row->sex, $row->blood_gr, $row->phone_no, $row->email, $row->age, $row->pin, $row->dob, $row->occ, $row->address);
        endforeach;
        
        $html = $this->table->generate();
        //Generate HTML table data from MySQL - end
        
        // add a page
        $pdf->AddPage('L', 'A4');
        
        // output the HTML content
        $pdf->writeHTML($html, true, false, true, false, '');
        
        // reset pointer to the last page
        $pdf->lastPage();
    
        //Close and output PDF document
        $pdf->Output(md5(time()).'.pdf', 'D');

        // $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
        // $pdf->setTitle('GSK Blood Bank');
        // $pdf->setHeaderMargin(30);
        // $pdf->setTopMargin(20);
        // $pdf->setFooterMargin(20);
        // $pdf->setAutoPageBreak(true);
        // $pdf->setAuthor('XYZ');
        // $pdf->setDisplayMode('real', 'default');
        // $pdf->AddPage();
        // $pdf->Write(5, 'HIIIII');
        // $pdf->Output(md5(time()).'.pdf', 'D');
    }
}
?>