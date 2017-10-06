<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_makanan extends CI_Model {

  var $jenis;
  var $id_makanan;
  var $nama_makanan;

  public function __construct()
  {
    $this->load->database();
  }

  public function tambah_makanan()
  {
    $this->db->insert('makanan', array(
      'jenis' => $this->jenis,
      'kaloripergram' => $this->kaloripergram,
      'nama_makanan' => $this->nama_makanan)
    );

    return $this->db->insert_id();
  }

  public function delete_makanan(){
    $this->db->where('id_makanan', $this->id_makanan);
    $this->db->delete('makanan');
  }

  public function get_semua_makanan(){
    $this->db->order_by('jenis', 'DESC');
    $query = $this->db->get('makanan');
    return $query->result_array();
  }

  public function get_makanan()
  {
  	$this->db->where('jenis', $this->jenis);
    $this->db->or_where('id_makanan', $this->id_makanan);
    $query = $this->db->get('makanan');
    return $query->result_array();
  }

  public function is_makanan_exist(){
    $this->db->where('nama_makanan', $this->nama_makanan);
    $query = $this->db->get('makanan');
    return $query->result_array();
  }
}
