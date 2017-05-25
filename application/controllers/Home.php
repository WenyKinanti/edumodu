<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_Program');
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
		$this->load->view('unlogin/home');
	}
	
	public function about(){
		$this->load->view('unlogin/about');
	}
	
	public function program(){
		$datadb["programs"] = $this->M_Program->get_program();
		$this->load->view('unlogin/program', $datadb);
	}
	
	public function kontak(){
		$this->load->view('unlogin/kontak');
	}
	
	public function addsiswa(){
		$datadb["programs"] = $this->M_Program->get_program();
		$this->load->view('unlogin/addpeserta', $datadb);
	}
	
	public function login()
	{
		$this->load->view('unlogin/login');
	}
	
	public function loginadmin()
	{
		$this->load->view('unlogin/adminlogin');
	}
	
	
}
