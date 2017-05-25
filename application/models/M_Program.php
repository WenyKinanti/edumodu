<?php
class M_Program extends CI_Model {
	public function get_program(){
		$query = $this->db->get('program');
		return $query->result_array();
	}
	
	public function add_program($data){
		return $this->db->insert('program', $data);
	}
	
	public function delete_program($id){
		$this->db->where_in('id_program', $id);
		$this->db->delete('program');
	}
	
	public function get_edit($id){
		$data = $this->db->query('SELECT * FROM program '.$id);
			return $data->result_array();
	}
	
	public function update_program($data,$where){
		$this->db->where('id_program',$where);
		$this->db->update('program',$data);
	}
}
?>