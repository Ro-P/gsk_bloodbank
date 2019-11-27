<?php
    class Login_model extends CI_Model{
        public function check_login($data){
            $this->load->database();
            $this->db->select("*");
            $this->db->where("uname", $data['uname']);
            $this->db->where("upass", $data['upass']);
            $query = $this->db->get("db_user");
            $result = $query->result();
            $user_array = json_decode(json_encode($result),true);
            if(empty($user_array)){
                header("Location:login");
            }else{
                if($user_array[0]["uname"] == $data['uname']) return 1;
                else return 0;
            }
        }
    }
?>