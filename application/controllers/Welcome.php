<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$datacontent = $this->user->getcontent();
		$this->load->view('halaman_utama', ['data' => $datacontent]);
	}

	public function halamanmakanan()
	{
		$datamakanan = $this->user->getmakanan();
		$this->load->view('halaman_makanan', ['data' => $datamakanan]);
	}

	public function resep($id)
	{
		$datamakanan = $this->user->getresep($id);
		$this->load->view('resep', ['data' => $datamakanan]);
	}

	public function tv()
	{
		$this->load->view('tv');
	}

	public function masuk()
	{
		$this->load->view('masuk');
	}

	public function BuatAkun()
	{
		$this->load->view('BuatAkun');
	}

	public function searching()
	{
		$this->load->view('searching');
	}

	public function halaman_utamalogin()
	{
		$datacontent = $this->user->getcontent();
		$this->load->view('halaman_utamalogin', ['data' => $datacontent]);
	}

	public function halaman_makananlogin()
	{
		$this->load->view('halaman_makananlogin');
	}

	public function reseplogin()
	{
		$this->load->view('reseplogin');
	}
	
	public function tvlogin()
	{
		$this->load->view('tvlogin');
	}

	public function akunsaya()
	{
		$datauser = $this->user->getuser($_SESSION['logged']);
		$this->load->view('akunsaya', ['data' => $datauser]);
	}
}

