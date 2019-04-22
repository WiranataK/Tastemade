<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	public function Register()
	{
            if($this->user->Register()) {
                redirect('halaman_utamalogin');
            } else {
                redirect('BuatAkun');
            }
        }
    }