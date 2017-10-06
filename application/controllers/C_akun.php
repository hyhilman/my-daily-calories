<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_akun extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(TRUE);
	}

	public function daftar()
	{
		if(isset($_SESSION['id_akun'])){
			redirect('');
		}

		if(isset($_POST['daftar'])) {
			// Form terisi dengan benar
			$this->load->model('m_akun');
			$this->m_akun->nama = $_POST['nama'];
			$this->m_akun->username = $_POST['username'];
			$this->m_akun->password = $_POST['password'];
			$this->m_akun->email = $_POST['email'];
			if($this->m_akun->is_username_mail_exist()) {
				// Username atau email sudah terdaftar
				show_error("Error Username / Email terdaftar", 500, $heading = 'An Error Was Encountered');
			} else {
				// Pembuatan akun dan pindah halaman login
				$this->m_akun->userid = $this->m_akun->buat_akun();
				redirect('c_akun/masuk_sistem');
			}
		}

		$this->load->view('template/header');
		$this->load->view('daftar');
		$this->load->view('template/footer');
	}

	public function masuk_sistem()
	{
		if(isset($_SESSION['id_akun'])){
			redirect('');
		}

		if (isset($_POST['password'])) {
			$this->load->model('m_akun');

			$this->m_akun->username = $_POST['username_mail'];
			$this->m_akun->email = $_POST['username_mail'];
			$password = $_POST['password'];

			if($akun = $this->m_akun->get_akun()) {
				
				if($password == $akun->password) {
					// Password sama dengan database 

					$this->m_akun->id_akun = $akun->id_akun;

					$_SESSION['id_akun'] = $akun->id_akun;
					$_SESSION['nama'] = $akun->nama;
					$_SESSION['username'] = $akun->username;
					// Membuat session

					if($this->m_akun->is_admin()) {
						$_SESSION['admin'] = true;
						redirect('c_admin/lihat_akun','refresh');
						//masuk controller admin apabila admin

					} else {

						redirect('');
						//masuk controller default atau non_member apabila bukan admin
					}
				} else {
					show_error("Password salah", 500, $heading = 'An Error Was Encountered');
				}


			} else {
				// Username email tidak ada
				show_error("email / username tidak terdaftar", 500, $heading = 'An Error Was Encountered');

			}

		}
		$this->load->view('template/header');
		$this->load->view('login');
		$this->load->view('template/footer');
	}

	public function keluar_sistem()
	{
		session_destroy();
		redirect('c_akun/masuk_sistem');
	}
}