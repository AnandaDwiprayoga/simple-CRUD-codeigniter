<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Siswa_model extends CI_Model {
		
		public function getAllSiswa(){
			return $this->db->get('nama_siswa')->result_array();
		}

		public function insertSiswa(){
			$data = [
				'Nama' => $this->input->post('nama', true),
				'Alamat' => $this->input->post('alamat', true),
				'NIM' => $this->input->post('nim', true)
			];

			$this->db->insert('nama_siswa', $data);
		}

		public function deleteSiswa($id){
			$nama = $this->db->query("SELECT Nama FROM nama_siswa WHERE id=$id")->row_array();
				
			$this->db->where('id', $id);
			$this->db->delete('nama_siswa');

			return $nama['Nama'];
		}

		public function getSiswaById($id){
			return $this->db->get_where('nama_siswa', array('id' => $id))->row_array();
		}

		public function update($id, $data){
			$this->db->where('id', $id);
			$this->db->update('nama_siswa', $data);
		}

		public function cariSiswa(){
			$keyword = $this->input->post('keyword');
			$this->db->like('Nama', $keyword);
			$this->db->or_like('Alamat', $keyword);
			return $this->db->get('nama_siswa')->result_array();
		}

		public function datatables(){
			return $this->db->order_by('NIM','DESC')->get('nama_siswa')->result();
		}
	}
	
	/* End of file siswa_model.php */
	/* Location: ./application/models/siswa_model.php */
	
?>