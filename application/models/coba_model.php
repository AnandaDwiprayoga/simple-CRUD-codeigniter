<?php 
class Coba_Model extends CI_Model {
	public function getData()
	{
		return $this->db->get('users');
	}

	public function getListTable(){
		return $this->db->list_tables('users');
	}
}