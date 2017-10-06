<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_nonmember extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(TRUE);
	}

	public function hitung_kalori() 
	{
		
		$karbo = 0; $lemak = 0; $protein = 0;

		if(isset($_GET['hitung'])) {

			//pengesetan variable
			$bb = $_GET['bb'];
			$tb = $_GET['tb'];
			$usia = $_GET['usia'];
			$jk = $_GET['jk'];
			$aktifitas = $_GET['aktifitas'];

			//Menghitung BMR
			$bmr = 0;
			if($jk == 'pria') {
				$bmr = 66 + 13.7 * $bb + 6 * $tb - 6.75 * $usia;
			} else if ($jk == 'wanita') {
				$bmr = 655 + 9.6 * $bb + 1.8 * $tb - 4.7 * $usia;
			}

			//Menghitung energi
			$energy = 0;
			if($aktifitas == 'ringan') {
				$energy = $bmr*1.1;
			} else if($aktifitas == 'sedang') {
				$energy = $bmr*1.2;
			} else if($aktifitas == 'berat') {
				$energy = $bmr*1.3;
			}


			//Menghitung nutrisi yang dibutuhkan
			$karbo = 60/100 * $energy /4;
			$protein = 15/100 * $energy /4;
			$lemak = 25/100 * $energy /9;

			//Penympanan variable ke data untuk dimasukkan ke view
			$data['energy'] = $energy;
			$data['karbo'] = $karbo;
			$data['protein'] = $protein;
			$data['lemak'] = $lemak;

			//Simpan hasil perhitungan ke cookie
			setcookie('mdc_energy',$energy,time() + 3600);
			setcookie('mdc_karbo',$karbo,time() + 3600);
			setcookie('mdc_protein',$protein,time() + 3600);
			setcookie('mdc_lemak',$lemak,time() + 3600);
		}
		
		$data['title'] = 'Hitung Kalori Saya - My Daily Calories';

		$this->load->view('template/header',$data);
		$this->load->view('hitung_kalori_saya',$data);
		if(isset($_GET['hitung'])){
			$this->load->view('hasil_hitung',$data);
		}else{
			$this->load->view('penjelasan_hitung_kalori',$data);
		}
		$this->load->view('saran_makanan',$data);
		
		$this->load->view('kata_mutiara');
		$this->load->view('template/footer');

	}

	public function bantuan() 
	{

		$data['title'] = 'Bantuan - My Daily Calories';
		$this->load->view('template/header',$data);
		
		$this->load->view('bantuan.php');
		$this->load->view('template/footer');
	}
}
