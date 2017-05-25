<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_Admin extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_Login');
	}
	
	public function index(){
		$data ["content"] = $this->load->view("admin/addadmin", '', true);
		$this->load->view("admin/homeadmin", $data);
	}
	
	public function save(){
		$pass_baru = $this->input->post("new_pass");
		$cek_baru = $this->input->post("cek_pass");
		$data = array(
			'nama_user' => $this->input->post('namauser'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => sha1($this->input->post('new_pass'))
		);
		if($pass_baru==$cek_baru){
			$this->M_Login->addData($data);
			echo '<script>alert("Berhasil update password.");document.location="'.site_url('A_Admin').'"</script>';
			redirect('A_Admin');
		}else{
			echo '<script>alert("Password yang anda masukkan tidak cocok, silahkan ulangi.");document.location="'.site_url('A_Admin').'"</script>';
		}
	}
}
?>