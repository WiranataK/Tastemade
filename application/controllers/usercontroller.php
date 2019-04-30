<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	public function Register()
	{
            if($this->user->Register()) {
                redirect('Welcome/halaman_utamalogin');
            } else {
                redirect('Welcome/BuatAkun');
            }
        }

        public function Signin() {
            $user = $this->user->findUser();
            if($user != null){
                $this->session->set_userdata('logged', $user[0]['email'] );
                redirect('Welcome/halaman_utamalogin');
            } else {
                redirect('Welcome/masuk');
            }
        }
    
        public function Logout() {
            session_destroy();
            redirect();
        }
    }