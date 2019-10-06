<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Siswa extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->model('siswa_model');		
			$this->load->library('form_validation');

			if ($this->session->userdata('user') == false) {
				redirect('Login','refresh');
			}
		}
	
		public function index()
		{	
			$data['siswa'] = $this->siswa_model->getAllSiswa();
			if($this->input->post('keyword')){
				$data['siswa'] = $this->siswa_model->cariSiswa();
			}
			$data['tittle'] = "List Siswa";
			$this->load->view('templates/header', $data);
			$this->load->view('Mahasiswa/Siswa', $data);
			$this->load->view('templates/footer');
			
		}

		public function tambah_siswa(){

			$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
			$this->form_validation->set_rules('nim', 'NIM', 'trim|required|numeric');

			if ($this->form_validation->run() == FALSE) {
				$data['tittle'] ="Tambah Siswa";
				$this->load->view('templates/header', $data);
				$this->load->view('Mahasiswa/tambahSiswa');
				$this->load->view('templates/footer');
			}else{
				$this->siswa_model->insertSiswa();
				$this->session->set_flashdata('siswa_tambah', '
						<div class="alert alert-success alert-dismissible fade show" role="alert">
						  Data berhasil <strong>ditambahkan</strong>
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>
					');
				redirect('Siswa','refresh');
			}
		}

		public function hapus($id){
			$nama = $this->siswa_model->deleteSiswa($id);
			$this->session->set_flashdata('hapusSiswa', '
					<div class="alert alert-success text-center" role="alert"> '. $nama . '
					   has been successfully deleted
					</div>
				');
			redirect('Siswa','refresh');
		}

		public function edit($id){
			$data['tittle'] = "Detail Siswa";
			$data['siswa']= $this->siswa_model->getSiswaById($id);

			$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
			$this->form_validation->set_rules('nim', 'NIM', 'trim|required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');

			if ($this->form_validation->run() ==  FALSE) {
				$this->load->view('templates/header', $data);
				$this->load->view('Mahasiswa/editSiswa', $data);
				$this->load->view('templates/footer');
			} else {
				$data = [
					'Nama' => $this->input->post('nama'),
					'NIM' => $this->input->post('nim'),
					'Alamat' => $this->input->post('alamat')
				];

				$this->siswa_model->update($id, $data);
				$this->session->set_flashdata('updateSiswa', '
						<div class="alert alert-success" role="alert">
						  Data berhasil diubah!
						</div>
					');

				redirect('Siswa','refresh');
			}
		}

		public function detail($id){
			$data['tittle'] = "Detail Siswa";
			$data['siswa']= $this->siswa_model->getSiswaById($id);

			$this->load->view('templates/header', $data);
			$this->load->view('Mahasiswa/detailSiswa', $data);
			$this->load->view('templates/footer');
		}	
	}
	
	/* End of file Siswa.php */
	/* Location: ./application/controllers/Siswa.php */
 ?>