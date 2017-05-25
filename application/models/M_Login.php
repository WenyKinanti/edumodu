<?php
class M_Login extends CI_Model {
	public function login_authen($username,$password){
		$this->db->select('*');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db->from('user');
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return true;
		}
		else{
			return false;
		}
	}
	
	function authen_user($username){
		// $this->db->select('authentication');
		$this->db->select('*');
		$this->db->where('username', $username);
		$this->db->from('user');
		$query = $this->db->get();
		return $query->result_array();
	}
	
	function wrong_password($username, $value){
		$this->db->set('authentication', $value);
		$this->db->where("username", $username);
		$this->db->update('user');
	}
	
	public function addData($data){
		$this->db->insert('user', $data);
	}
}
?>