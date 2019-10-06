<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {

	public function getAllMahasiswa(){

		$query = $this->db->get('users');
		return $query->result_array();
	}

	public function tambahDataMahasiswa(){
		$data = [
			"nama" => $this->input->post('nama', true),
			"NIM" => $this->input->post('nim', true),
			'no_hp' => $this->input->post('no_hp', true),
			'kelamin' => $this->input->post('kelamin')
		];

		$this->db->insert('users', $data);
	}

	public function hapusMahasiswa($id){
		$this->db->where('NIM', $id);
		$this->db->delete('users');
	}

	public function getMahasiswaById($id){
		return $this->db->get_where('users', array('NIM' => $id))->row_array();
	}

	public function updateMahasiswa($id, $data){
		$this->db->where('NIM', $id);
		$this->db->update('users', $data);
	}
	
	public function cariMahasiswa(){
		$keyword = $this->input->post('keyword');
		$this->db->like('Nama', $keyword);
		$this->db->or_like('NIM', $keyword, 'BOTH');
		return $this->db->get('users')->result_array();
	}

	public function datatables(){
		$query = $this->db->order_by('nim', 'DESC')->get('users');
		return $query->result();
	}
}

/* End of file mahasiswa_model.php */
/* Location: ./application/models/mahasiswa_model.php */
 ?>
