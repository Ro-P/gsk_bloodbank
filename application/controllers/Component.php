<?php
    class Component extends CI_Controller{
        public function process(){
            $this->load->view("component/component_process");
            
        }

        public function separation(){
            $this->load->view("component/component_separation");
        }

        public function discard(){
            $this->load->view("component/component_discard");
        }

        public function autoclave(){
            $this->load->view("component/component_autoclave");
        }
    }


?>