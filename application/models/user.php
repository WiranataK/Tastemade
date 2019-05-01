<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

    public function Register() {
        $data = array(
            "email" => $this->input->post('email'),
            "password" => md5($this->input->post('password'))
        );

        if($this->isExist($data['email'])) {
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

    public function findUser() {
        $data = array(
            "email" => $this->input->post('email'),
            "password" => md5($this->input->post('password'))
        );

        $this->db->where($data);
        $result = $this->db->get('register');
        return $result->result_array();
    }

    public function getcontent(){
        $query = $this->db->get('resep');
        return $query->result();
    }

    public function getuser($iduser){
        $this->db->where("email",$iduser);
        $result = $this->db->get('register')->result_array();
        if(isset($result[0])) {
            return $result;
        } else {
            return false;
        }
    }

    public function getmakanan(){
        $query = $this->db->get('resep');
        return $query->result();
    }

    public function getresep($id){
        $this->db->where("id",$id);
        $result = $this->db->get('resep')->result();
        if(isset($result[0])) {
            return $result;
        } else {
            return false;
        }
    }

    public function updateemail()
    {
        $data = array(
            'iduser'  => $this->input->post('iduser'),
            'email'  => $this->input->post('email')
        );
        if($this->isExist($data['email'])) {
            $this->db->replace('register', $data);
        } else {
            return false;
        }
        #$this->db->replace('register', $data);
    
    }

}