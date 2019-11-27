<?php
    class Login extends CI_Controller{
        private $username;
        private $password;
        public function index(){
            $this->load->view("login/index.php");
        }
        public function user_login(){
            $this->username = $this->input->post("username");
            $this->password = $this->input->post("password");
            $this->check_login();
        }
        private function check_login(){
            $this->load->model("Login_model");
            $data = array(
                "uname" => $this->username,
                "upass" => $this->password
            );
            
            if($this->Login_model->check_login($data)) header("Location:home");
            else header("Location:login");
        }


    }
?>