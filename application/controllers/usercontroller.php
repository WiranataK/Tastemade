<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	public function Register()
	{
            if($this->User->Register()) {
                $this->session->set_flashdata('SuccessReg','Success');
                redirect('halaman_utama');
            } else {
                $this->session->set_flashdata('FailReg', 'Fail');
                redirect('BuatAkun');
            }
        }
    }