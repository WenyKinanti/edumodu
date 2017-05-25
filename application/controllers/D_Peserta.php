<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class D_Peserta extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_Peserta');
		
	}
	
	public function addpeserta(){
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
				'max_size' => '2048'
			);
			$this->upload->initialize($config);
			if($this->upload->do_upload('siswafile')){
				$fileUpload = $this->upload->data();
				$isUpload = TRUE;
			}
			if($isUpload){
				$data =array(
					'nama_siswa' => $this->input->post('nama_peserta'),
					'sekolah_siswa' => $this->input->post('sekolah_peserta'),
					'kelas_siswa' => $this->input->post('kelas_peserta'),
					'alamat_siswa' => $this->input->post('alamat_peserta'),
					'kontak_siswa' => $this->input->post('kontak_peserta'),
					'email_siswa' => $this->input->post('email_peserta'),
					'ortu_siswa' => $this->input->post('ortu_peserta'),
					'alamat_ortu' => $this->input->post('alamat_ortu'),
					'kontak_ortu' => $this->input->post('kontak_ortu'),
					'id_program' => $this->input->post('program_peserta'),
					'upload' => $fileUpload['file_name']
				);
				$this->M_Peserta->add_siswa($data);
				echo '<script>alert("Yakin data yang diisikan benar? Data akan diseleksi dan silakan tunggu konfirmasi penerimaan dari Edu Modu.");document.location="'.site_url('Home/program').'"</script>';
				echo "simpan behasil";
			}else{
				//$this->getprogram();
				echo "simpan gagal";
			}
		}
	}
	
	public function getsiswa(){
		$datadb["pesertas"] = $this->M_Peserta->get_siswa();
		$data ["content"] = $this->load->view("admin/siswa", $datadb, true);
		$this->load->view("admin/homeadmin", $data);
	}
	
	public function sendemail(){
		$ci = get_instance();
		$ci->load->library('email');
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.gmail.com';
		$config['smtp_port'] = '465';
		$config['smtp_user'] = 'wenykp@gmail.com';
		$config['smtp_pass'] = 'Weny7397';
		$config['charset'] = 'utf-8';
		$config['mailtype'] = 'html';
		$config['newline'] = "\r\n";
		
		$receiver = $this->input->post('tujuan');
		$subject = $this->input->post('subject');
		$message = $this->input->post('message');
		
		$ci->email->initialize($config);

		$this->email->from('wenykp@gmail.com');
		$this->email->to($receiver);
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->send();
		$this->getsiswa();
	}
	
	public function carisiswa(){
		$cari = $this->input->post('cari_peserta');
		$datadb["pesertas"] = $this->M_Peserta->cari_siswa($cari);
		$data ["content"] = $this->load->view("admin/siswa", $datadb, true);
		$this->load->view("admin/homeadmin", $data);
	}
	
	public function viewemail(){
		$data ["content"] = $this->load->view("admin/email", '', true);
		$this->load->view("admin/homeadmin", $data);
	}
}
?>