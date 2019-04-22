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
                set_cookie('logged', $user[0]['email'], '3600');
                redirect('Welcome/halaman_utamalogin');
            } else {
                redirect('Welcome/masuk');
            }
        }
    
        public function Logout() {
            $cookie = $this->input->cookie('logged');
            if(isset($cookie)) {
                delete_cookie('logged');
                redirect('Welcome/index');
            } else {
                session_destroy();
                redirect('Welcome/index');
            }
        }
    }