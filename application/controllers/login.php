<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		$data['tittle']	= "Login";
		$this->load->view('templates/header_login', $data);
		$this->load->view('login/index');
		$this->load->view('templates/footer');
	}

	public function proses_login(){
		$username = $this->input->post('nim');
		$password = $this->input->post('password');

		$cek_login= $this->login_model->login($username,  $password);
		if($cek_login){
			foreach ($cek_login as $row) {
				$this->session->set_userdata('user', $row->username);
				$this->session->set_userdata('level', $row->level);

				if ($this->session->userdata('user') == 'admin') {
					redirect('Mahasiswa/index','refresh');
				}elseif($this->session->userdata('user') == 'user'){
					redirect('user','refresh');
				}
			}
		}else{
			$this->session->set_flashdata('fail_login', '<div class="alert alert-warning" role="alert">Username/Password yang anda masukkan salah</div>');
			redirect('Login','refresh');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('Login','refresh');
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */
 ?>