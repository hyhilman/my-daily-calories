<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Makanan {
	public function __construct($config = false)
	{
	    $this->CI =& get_instance();
	    if($config!=false) {
	    	$this->CI->load->model($config['model_name'], 'model');
	    }
	}

	public function hitung_kalori_makanan($id_makanan_dipilih, $berat_makanan_dipilih){

		$data_makanan_dipilih;
		for($counter = 0; $counter < 10; $counter++) {

			if(isset($id_makanan_dipilih[$counter])){
				$this->CI->model->jenis = "";
				$this->CI->model->id_makanan = $id_makanan_dipilih[$counter];
				// set id_makanan
				$data_makanan_dipilih[$counter] = $this->CI->model->get_makanan()[0];
				//Dapatkan makanan berdasarkan id

				$data_makanan_dipilih[$counter]['berat_makanan'] = $berat_makanan_dipilih[$counter];
				$data_makanan_dipilih[$counter]['total_kalori'] = $data_makanan_dipilih[$counter]['kaloripergram'] * $berat_makanan_dipilih[$counter];
				//Penambahan nilai pada data_makanana_dipilih

			}

		}
		if(isset($data_makanan_dipilih))
			return array_values($data_makanan_dipilih); // mereturn nilai array dan membantu untuk mengindex ulang form yg loncat"
		else
			return array(); // apabila user tidak mengisikan apa"
	}

	public function saran_makanan($karbo, $protein, $lemak){
		// Load Makanan berdasarkan JENIS makanan dari db

		$this->CI->model->jenis = 'karbohidrat';
		$daftar_makanan_karbo = $this->CI->model->get_makanan();

		$this->CI->model->jenis = 'protein';
		$daftar_makanan_protein = $this->CI->model->get_makanan();

		$this->CI->model->jenis = 'lemak';
		$daftar_makanan_lemak = $this->CI->model->get_makanan();

		// Memilih random dari daftar makanan
		$saran_makanan_karbo = $daftar_makanan_karbo[rand(0,sizeof($daftar_makanan_karbo)-1)];
		$saran_makanan_protein = $daftar_makanan_protein[rand(0,sizeof($daftar_makanan_protein)-1)];
		$saran_makanan_lemak = $daftar_makanan_lemak[rand(0,sizeof($daftar_makanan_lemak)-1)];

		// Perhitungan berat makanan
		$saran_makanan['karbo'] = array(
			'id_makanan' => $saran_makanan_karbo['id_makanan'],
			'nama_makanan' => $saran_makanan_karbo['nama_makanan'],
			'kaloripergram' => $saran_makanan_karbo['kaloripergram'],
			'berat_makanan' => $karbo / $saran_makanan_karbo['kaloripergram']
			);

		$saran_makanan['protein'] = array(
			'id_makanan' => $saran_makanan_protein['id_makanan'],
			'nama_makanan' => $saran_makanan_protein['nama_makanan'],
			'kaloripergram' => $saran_makanan_protein['kaloripergram'],
			'berat_makanan' => $protein / $saran_makanan_protein['kaloripergram']
			);

		$saran_makanan['lemak'] = array(
			'id_makanan' => $saran_makanan_lemak['id_makanan'],
			'nama_makanan' => $saran_makanan_lemak['nama_makanan'],
			'kaloripergram' => $saran_makanan_lemak['kaloripergram'],
			'berat_makanan' => $lemak / $saran_makanan_lemak['kaloripergram']
			);

		// return saran makanan
		return $saran_makanan;
	}

	public function alternatif_makanan($data_makanan_dipilih){
		$saran_tukar_komposisi;
		$makanan = $this->CI->model->get_semua_makanan();
		for($counter = 0; $counter < 10; $counter++) {
			$indeks=0;
			foreach($makanan as $row){
				if( isset($data_makanan_dipilih[$counter]) && $data_makanan_dipilih[$counter]['jenis'] == $row['jenis']) {
					$saran_tukar_komposisi[$counter][$indeks]['id_makanan'] = $row['id_makanan'];
					$saran_tukar_komposisi[$counter][$indeks]['nama_makanan'] = $row['nama_makanan'];
					$saran_tukar_komposisi[$counter][$indeks]['berat_makanan'] = $data_makanan_dipilih[$counter]['total_kalori'] / $row['kaloripergram'];
					$indeks++;
				}
			}
		}
		return $saran_tukar_komposisi;
	}
}