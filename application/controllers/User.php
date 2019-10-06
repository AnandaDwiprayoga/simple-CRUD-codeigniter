<?php  

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
		$this->load->model('mahasiswa_model');
		$this->load->model('siswa_model');
		$this->load->model('cetak_model');
		if ($this->session->userdata('user') != 'user') {
			redirect('Login');
		}
	}

	public function index()
	{	
		$data = [
			'tittle' =>  'data mahasiswa',
			'mahasiswa' => $this->mahasiswa_model->datatables()
		];
		
		$this->load->view('templates/header_datatables_user', $data);
		$this->load->view('Mahasiswa/user', $data);
		$this->load->view('templates/footer_datatables_user');
	}

	public function siswa(){
		$data = [
			'tittle' =>  'data siswa',
			'mahasiswa' => $this->siswa_model->datatables()
		];

		$this->load->view('templates/header_datatables_user', $data);
		$this->load->view('Mahasiswa/user_siswa', $data);
		$this->load->view('templates/footer_datatables_user', $data, FALSE);
	}

	public function laporan_pdf(){
		$data['mahasiswa'] = $this->cetak_model->view();
		$this->pdf->setPaper('A4','potrait');
		$this->pdf->filename = "laporan-petanikode.pdf";
		$this->pdf->load_view('Mahasiswa/laporan', $data);
	}

	public function laporan_pdf_User(){
		$data['siswa'] = $this->cetak_model->viewUser();
		$this->pdf->setPaper('A4','potrait');
		$this->pdf->filename = "Laporan Siwa";
		$this->pdf->load_view_siswa('Mahasiswa/laporan_siswa', $data);
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */