<?php
class TTI extends CI_Controller{

    public function elisaSample(){
        $this->load->view("nav.php");
        $this->load->view("TTI/elisa_sample.php");
	}
	
    public function elisaResults(){
        $this->load->view("nav.php");
        $this->load->view("TTI/elisa_results.php");
	}
	
	public function elisaValidation(){
        $this->load->view("nav.php");
        $this->load->view("TTI/elisa_validation.php");
	}
	
    public function vdrlMp(){
        $this->load->view("nav.php");
        $this->load->view("TTI/vdrl_mp.php");
	}
	
	public function natValidation(){
        $this->load->view("nav.php");
        $this->load->view("TTI/nat_validation.php");
	}
	
    public function bloodTestRapid(){
        $this->load->view("nav.php");
        $this->load->view("TTI/blood_test_rapid.php");
	}
	
	public function bloodTestGeneral(){
        $this->load->view("nav.php");
        $this->load->view("TTI/blood_test_general.php");
	}
	
    public function bloodTestAphresis(){
        $this->load->view("nav.php");
        $this->load->view("TTI/blood_test_aphresis.php");
	}
	
	public function bloodTestAuto(){
        $this->load->view("nav.php");
        $this->load->view("TTI/blood_test_auto.php");
	}
	
    public function eqasBqas(){
        $this->load->view("nav.php");
        $this->load->view("TTI/eqas_bqas.php");
	}
	
	public function qToStock(){
        $this->load->view("nav.php");
        $this->load->view("TTI/q_to_stock.php");
	}
	
    public function reagentOpen(){
        $this->load->view("nav.php");
        $this->load->view("TTI/reagent_open.php");
	}
	
	public function reagentClose(){
        $this->load->view("nav.php");
        $this->load->view("TTI/reagent_close.php");
	}
	
    public function kitMaster(){
        $this->load->view("nav.php");
        $this->load->view("TTI/kit_master.php");
    }
}
?>
