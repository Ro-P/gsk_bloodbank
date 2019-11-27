<?php
	class QC extends CI_Controller{
		public function blood_bags(){
			$this->load->view("QC/blood_bags");
		}

		public function reports(){
			$this->load->view("QC/qc_reports");
		}
	}
?>
