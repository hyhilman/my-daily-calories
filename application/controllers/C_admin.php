<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
		if(!$_SESSION['admin']){
			redirect('c_akun/masuk_sistem');
		}
		$this->output->enable_profiler(TRUE);
	}

	public function lihat_akun() 
	{
		$this->load->model('m_akun');
		$akun = $this->m_akun->get_semua_akun();
		
		foreach ($akun as &$row) {
			$this->m_akun->id_akun = $row['id_akun'];
			if( $this->m_akun->is_admin() ){
				$row['admin'] = true;
			} else {
				$row['admin'] = false;
			}
		}

		$data['akun'] = $akun;

		$this->load->view('admin/header');
		$this->load->view('admin/nav_admin');
		$this->load->view('admin/content_lihat_akun',$data);
		$this->load->view('admin/footer');
	}

	public function buat_akun() 
	{

		if(isset($_POST['submit'])) {
			$this->load->model('m_akun');

			$this->m_akun->nama = $_POST['nama'];
			$this->m_akun->username = $_POST['username'];
			$this->m_akun->password = $_POST['password'];
			$this->m_akun->email = $_POST['email'];

			if($this->m_akun->is_username_mail_exist()) {
				show_error("Error Username / Email terdaftar", 500, $heading = 'An Error Was Encountered');
			} else if($_POST['password'] != $_POST['password_confirm']) {
				show_error("Password yang anda masukan tidak sama", 500, $heading = 'An Error Was Encountered');
			} else {
				$this->m_akun->id_akun = $this->m_akun->buat_akun();
				if($_POST['admin']=='true') {
					$this->m_akun->buat_admin();
				}
			}
		}

		$this->load->view('admin/header');
		$this->load->view('admin/nav_admin');
		$this->load->view('admin/content_buat_akun');
		$this->load->view('admin/footer');
	}

	public function hapus_akun(){
		$this->load->model('m_akun');
		$this->m_akun->id_akun = $_POST['id_akun'];
		if($_POST['admin']) {
			$this->m_akun->delete_admin();
		}
		
		$this->m_akun->delete_akun();
	}

	public function lihat_makanan() 
	{
		$this->load->model('m_makanan');
		$makanan = $this->m_makanan->get_semua_makanan();

		$data['makanan'] = $makanan;
		$this->load->view('admin/header');
		$this->load->view('admin/nav_admin');
		$this->load->view('admin/content_lihat_makanan',$data);
		$this->load->view('admin/footer');
	}

	public function tambah_makanan() 
	{
		if(isset($_POST['tambah'])) {
			$this->load->model('m_makanan');

			$this->m_makanan->nama_makanan = $_POST['nama_makanan'];
			$this->m_makanan->kaloripergram = $_POST['kaloripergram'];
			$this->m_makanan->jenis = $_POST['jenis'];

			if($this->m_makanan->is_makanan_exist()) {
				show_error("Makanan telah ada dalam database", 500, $heading = 'An Error Was Encountered');
			}

			$this->m_makanan->tambah_makanan();
		} 

		$this->load->view('admin/header');
		$this->load->view('admin/nav_admin');
		$this->load->view('admin/content_tambah_makanan');
		$this->load->view('admin/footer');
	}

	public function hapus_makanan() 
	{
		$this->load->model('m_makanan');
		$this->m_makanan->id_makanan = $_POST['id_makanan'];
		$this->m_makanan->delete_makanan();
	}
}
