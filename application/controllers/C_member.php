<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_member extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(TRUE);
		if(!isset($_SESSION['username'])){
			redirect('c_akun/masuk_sistem');
		}
	}

	public function susun_makanan()
	{
		$this->load->model('m_makanan');
		$data['makanan'] = $this->m_makanan->get_semua_makanan();
		$data['title'] = 'Susun Komposisi Makanan - My Daily Calories';

		if(!isset($_COOKIE['mdc_karbo'])){
			show_error("Anda belum menghitung kebutuhan kalori anda", 500, $heading = 'An Error Was Encountered');
		}

		if(isset($_GET['hitung'])) {
			
			$makanan_dipilih = $_GET['makanan_dipilih'];
			$berat_makanan_dipilih = $_GET['berat_makanan'];

			$config = array(
				'model_name' => 'm_makanan'
				);
			$this->load->library('makanan',$config);

			$data_makanan_dipilih = $this->makanan->hitung_kalori_makanan($makanan_dipilih, $berat_makanan_dipilih);
			$data['data_makanan_dipilih'] = $data_makanan_dipilih;
			
		}

		$this->load->view('template/header.php',$data);

		if(isset($_GET['hitung'])){
			$this->load->view('hasil_susun.php',$data);	
		} else {
			$this->load->view('susun_makanan.php',$data);
		}
		$this->load->view('template/footer.php');
	}

	public function saran_makanan()
	{


		if(!isset($_COOKIE['mdc_karbo'])){
		  show_error("Anda belum menghitung kebutuhan kalori anda", 500, $heading = 'An Error Was Encountered');
		}

		$config = array(
			'model_name' => 'm_makanan'
			);
		$this->load->library('makanan',$config);

		$saran_makanan = $this->makanan->saran_makanan($_COOKIE['mdc_karbo'],$_COOKIE['mdc_protein'],$_COOKIE['mdc_lemak']);
		$counter=0;
		foreach($saran_makanan as $row){
			$id_makanan_dipilih[$counter] = $row['id_makanan'];
			$berat_makanan_dipilih[$counter] = $row['berat_makanan'];
			$counter++;
		}

		$data_makanan_dipilih = $this->makanan->hitung_kalori_makanan($id_makanan_dipilih, $berat_makanan_dipilih);
		$saran_tukar_komposisi = $this->makanan->alternatif_makanan($data_makanan_dipilih);

		$data['saran_tukar_komposisi'] = $saran_tukar_komposisi;
		$data['data_makanan_dipilih'] = $data_makanan_dipilih;
		$data['title'] = 'Saran Komposisi Makanan - My Daily Calories';

		$this->load->view('template/header.php',$data);
		$this->load->view('hasil_susun.php',$data);	
		$this->load->view('template/footer.php');
	}
}
