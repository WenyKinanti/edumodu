<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_Login');
		$this->load->model('M_Program');
		$this->load->library('session');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// $data['err_message'] = "";
		// $this->load->view('login', $data);
		$this->load->view('unlogin/adminlogin');
	}
	
	public function viewlogin(){
	    $this->load->view('unlogin/adminlogin');
	}
	
	public function masuk(){
		$username = $this->input->post('username');
		$password = sha1($this->input->post('password'));
		
		$isLogin = $this->M_Login->login_authen($username, $password);
		$authen = $this->M_Login->authen_user($username);
		if ($isLogin == true && $authen[0]['authentication'] < 3) {
			$session = array(
				'username' => $authen[0]['username'],
				'nama_user' => $authen[0]['nama_user']
			);
			$this->session->set_userdata($session);
			redirect('login/home');
		}
		else{
			if($authen[0]['authentication']<3){
				$update = $this->M_Login->wrong_password($username, $authen[0]['authentication']+1);
				$data['err_message'] = "gagal login".($authen[0]['authentication']+1);
				echo '<script>alert("Gagal Login Ke- '.($authen[0]["authentication"]+1).'");</script>';
				$this->load->view('unlogin/adminlogin', $data);
			}else{
				$data['err_message'] = "AKUN ANDA TERBLOCK";
				$this->load->view('unlogin/adminlogin', $data);
			}
			
		}
	}
	
	public function home(){
		$datadb["programs"] = $this->M_Program->get_program();
		$data ["content"] = $this->load->view("admin/program", $datadb, true);
		$this->load->view("admin/homeadmin", $data);
	}
	
	public function out()
	{
		$this->session->sess_destroy();
		$this->load->view('unlogin/adminlogin');
	}
	
	public function kontak(){
		$this->load->view('loginuser/kontakuser');
	}
	
	
	
	
	
}
