<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_model extends CI_Model {

	public function view(){
		$this->db->select('nama,NIM,no_hp');
		$query= $this->db->get('users');
		return $query->result();
	}

	public function viewUser(){
		$this->db->select('Nama, NIM, Alamat');
		$query =  $this->db->get('nama_siswa');
		return $query->result();
	}
}

/* End of file cetak_model.php */
/* Location: ./application/models/cetak_model.php */
?>