<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
    public function Register() {
        $data = array(
            "Email" => $this->input->post('email'),
            "Password" => md5($this->input->post('password'))
        );

        if($this->isExist($data['Email'])) {
            return false;
        } else {
            $this->db->insert('register', $data);
            $this->db->insert('register',
            array(
                "Email" => $data['email'],
                "Password" => $data['password']
            ));
            return true;
        }
    }

    public function isExist($email) {
        $this->db->where("Email",$email);
        $result = $this->db->get('register')->result_array();
        if(isset($result[0])) {
            return true;
        } else {
            return false;
        }
    }

    public function findUser() {
        $data = array(
            "Username" => $this->input->post('your_name'),
            "Pass" => md5($this->input->post('your_pass'))
        );

        $this->db->where($data);
        $result = $this->db->get('login');
        return $result->result_array();
    }
}