<?php
class M_Peserta extends CI_Model {
	public function add_siswa($data){
		return $this->db->insert('siswa', $data);
	}
	
	public function get_siswa(){
		//$query = $this->db->get('siswa');
		$query = $this->db->query('SELECT a.*, b.nama_program FROM siswa a JOIN program b ON b.id_program = a.id_program');
		return $query->result_array();
	}
	
	public function cari_siswa($cari){
		$query = $this->db->query('SELECT a.*, b.nama_program FROM siswa a JOIN program b ON b.id_program = a.id_program WHERE a.nama_siswa LIKE "%'.$cari.'%" OR a.sekolah_siswa LIKE "%'.$cari.'%" OR a.alamat_siswa LIKE "%'.$cari.'%" OR a.ortu_siswa LIKE "%'.$cari.'%" OR b.nama_program LIKE "%'.$cari.'%"');
		return $query->result_array();
	}
		
	
}
?>