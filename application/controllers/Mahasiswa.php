<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mahasiswa_model');
		$this->load->library('form_validation');

		if ($this->session->userdata('level') != 'admin') {
			redirect('Login');
		}
	}

	public function index()
	{		
		$data['tittle'] = "List mahasiswa";

		$data['mahasiswa'] = $this->mahasiswa_model->getAllMahasiswa();

		if ($this->input->post('keyword')) {
			$data['mahasiswa'] = $this->mahasiswa_model->cariMahasiswa();
		}
		$this->load->view('templates/header', $data);			
		$this->load->view('Mahasiswa/index', $data);
		$this->load->view('templates/footer');
	}
	public function tambah()

	{  
		 
		 $this->form_validation->set_rules('nama', 'Nama', 'required');
		 $this->form_validation->set_rules('nim', 'NIM', 'required|numeric|is_unique[users.NIM]', [
		 	'is_unique' => 'Your NIM has been registed, Please change your NIM'
		 ]);
		 $this->form_validation->set_rules('no_hp', 'No hp', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data['tittle'] = "Form penambahan data mahasiswa";
			$this->load->view('templates/header', $data);			
			$this->load->view('Mahasiswa/tambah', $data);
			$this->load->view('templates/footer');
		} else {
			# code...
			$this->mahasiswa_model->tambahDataMahasiswa();
			redirect('mahasiswa','refresh');
		}
	}

	public function hapus($id){
		$this->mahasiswa_model->hapusMahasiswa($id);
		$this->session->set_flashdata('flash-data', 'dihapus');
		redirect('Mahasiswa','refresh');
	}

	public function detail($id){
		$data['tittle'] = "Detail Mahasiswa";
		$data['mahasiswa'] = $this->mahasiswa_model->getMahasiswaById($id);

		$this->load->view('templates/header', $data);
		$this->load->view('Mahasiswa/detail', $data);
		$this->load->view('templates/footer');
	}

	public function edit($id){
		$data['tittle'] = "Form edit data mahasiswa";
		$data['mahasiswa'] = $this->mahasiswa_model->getMahasiswaById($id);

		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('nim', 'NIM', 'required|numeric|trim');
		$this->form_validation->set_rules('no_hp', 'No Hp', 'required|numeric|trim');
		$this->form_validation->set_rules('kelamin', 'Jenis Kelamin', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('Mahasiswa/edit', $data);
			$this->load->view('templates/footer');
		} else {
			$data = [
				'NIM' => $this->input->post('nim', true),
				'nama' => $this->input->post('nama', true),
				'no_hp' => $this->input->post('no_hp', true),
				'kelamin' => $this->input->post('kelamin', true)
			];

			$this->mahasiswa_model->updateMahasiswa($id, $data);
			$this->session->set_flashdata('update', '
				<div class="alert alert-success" role="alert">
				  Data berhasil diupdate!
				</div>
				');
			redirect('Mahasiswa/detail/' . $id,'refresh');
		}
	}
		// public function index()
		// {	
		// 	$data['tittle'] = "List mahasiswa";
		// 	$data['mahasiswa'] =[
		// 							"Andi bagus",
		// 							"Dewi ayu",
		// 							"Dika Supatra",
		// 							"Agung pamudji"
		// 						];
		// 	$this->load->view('templates/header', $data);			
		// 	$this->load->view('Mahasiswa/index', $data);
		// 	$this->load->view('templates/footer');
		// }

}

/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Mahasiswa.php */
 ?>