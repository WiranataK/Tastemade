<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
    public function Register() {
        $data = array(
            "email" => $this->input->post('email'),
            "password" => md5($this->input->post('password'))
        );

        if($this->isExist($data['Email'])) {
            return false;
        } else {
            $this->db->insert('register', $data);
            return true;
        }
    }

    public function isExist($email) {
        $this->db->where("email",$email);
        $result = $this->db->get('register')->result_array();
        if(isset($result[0])) {
            return true;
        } else {
            return false;
        }
    }
}