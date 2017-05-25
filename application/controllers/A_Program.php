<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_Program extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_Program');
		$this->load->library('session');
	}
	
	public function index()
	{
		$datadb["programs"] = $this->M_Program->get_program();
		$data ["content"] = $this->load->view("admin/program", $datadb, true);
		$this->load->view("admin/homeadmin", $data);
	}
	
	public function addprogram(){
		$data ["content"] = $this->load->view("admin/addprogram", '', true);
		$this->load->view("admin/homeadmin", $data);
	}
	
	public function saveprogram(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('upload');
		
		$is_submit = $this->input->post('is_submit');
		if(isset($is_submit) && $is_submit == 1){
				$fileUpload = array();
				$isUpload = FALSE;
				$config = array(
					'upload_path' => './uploads/',
					'allowed_types' => 'jpg|jpeg|png',
					'max_size' => '512'
				);
			$this->upload->initialize($config);
			if($this->upload->do_upload('userfile')){
				$fileUpload = $this->upload->data();
				$isUpload = TRUE;
			}
			
			if($isUpload){
				$data =array(
					'nama_program' => $this->input->post('nama_program'),
					'deskripsi_program' => $this->input->post('deskripsi_program'),
					'gambar_program' => $fileUpload['file_name']
				);
				$this->M_Program->add_program($data);
				$this->getprogram();
			}else{
				$this->getprogram();
			}
		}
	}
	
	public function getprogram(){
		$datadb["programs"] = $this->M_Program->get_program();
		$data ["content"] = $this->load->view("admin/program", $datadb, true);
		$this->load->view("admin/homeadmin", $data);
	}
	
	public function deleteprogram($id){
		$program = $this->M_Program->get_edit("WHERE id_program = '".$id."'");
			echo '<script>alert("Yakin anda akan menghapus program '.($program[0]["nama_program"]).'?");</script>';
			$this->M_Program->delete_program($id);
			redirect('A_Program');
	}
	
	public function getedit($id){
		$program = $this->M_Program->get_edit("WHERE id_program = '".$id."'");
		$datadb = array(
			"id_program" => $program[0]['id_program'],
			"nama_program" => $program[0]['nama_program'],
			"deskripsi_program" => $program[0]['deskripsi_program'],
			"gambar_program" => $program[0]['gambar_program']
		);
		$data ["content"] = $this->load->view("admin/editprogram", $datadb, true);
		$this->load->view("admin/homeadmin", $data);
		
	}
	
	public function updateprogram($id){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('upload');
		
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('upload');
		
		$is_submit = $this->input->post('is_submit');
		if(isset($is_submit) && $is_submit == 1){
				$fileUpload = array();
				$isUpload = FALSE;
				$config = array(
					'upload_path' => './uploads/',
					'allowed_types' => 'jpg|jpeg|png',
					'max_size' => '512'
				);
			$this->upload->initialize($config);
			if($this->upload->do_upload('userfile')){
				$fileUpload = $this->upload->data();
				$isUpload = TRUE;
			}
			
			if($isUpload){
				$data =array(
					'nama_program' => $this->input->post('nama_program_new'),
					'deskripsi_program' => $this->input->post('deskripsi_program_new'),
					'gambar_program' => $fileUpload['file_name']
				);
				$this->M_Program->update_program($data,$id);
				$this->getprogram();
			}else if(!$isUpload){
				$data =array(
					'nama_program' => $this->input->post('nama_program_new'),
					'deskripsi_program' => $this->input->post('deskripsi_program_new')
				);
				$this->M_Program->update_program($data,$id);
				$this->getprogram();
			}else{
				$this->getprogram();
				//echo "gagal";
			}
	}
	
}
}
?>