<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

		// public function __construct()
		// {
		// 	// parent::__construct();
		// 	// $this->load->database;
		// }

	public function index()
	{	

		if ($this->session->userdata('user') != 'admin') {
			redirect('Login');
		}
		// echo "Selamat datang di halaman homoe";	
		$data['tittle'] = "Home";
		
		$this->load->view('templates/header', $data);
		$this->load->view('Home/index');
		$this->load->view('templates/footer');

	
	}

	public function belajar(){
		$data['tittle'] = "Tugas1";
		$this->load->view('templates/header', $data);
		$this->load->view('Home/tugas1');
		$this->load->view('templates/footer');
	}

	public function belajar_kedua(){
		$data['tittle'] = "Tugas2";
		$this->load->view('templates/header', $data);
		$this->load->view('Home/tugas2');
		$this->load->view('templates/footer');	
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */

 ?>