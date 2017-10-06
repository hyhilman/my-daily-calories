<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_akun extends CI_Model {

	var $nama;
	var $id_akun;
	var $username;
	var $password;
	var $email;

	public function __construct()
	{
		$this->load->database();
	}

	public function buat_akun() 
	{
		$this->db->insert('akun', array(
			'username' => $this->username,
			'password' => $this->password,
			'email' => $this->email,
			'nama' => $this->nama)
		);

		return $this->db->insert_id();
	}

	public function buat_admin(){
		$this->db->insert('admin', array('id_akun' => $this->id_akun));
	}

	public function delete_akun() 
	{
		$this->db->where('id_akun', $this->id_akun);
		$this->db->delete('akun');
	}

	public function delete_admin() 
	{
		$this->db->where('id_akun', $this->id_akun);
		$this->db->delete('admin');
	}

	public function get_akun() 
	{
		$this->db->where('username', $this->username);
		$this->db->or_where('email', $this->email);
		$query = $this->db->get('akun');
		return $query->row();
	}

	public function get_semua_akun() 
	{

		$query = $this->db->get('akun');
		return $query->result_array();
	}

	public function is_admin() 
	{
		$this->db->where('id_akun', $this->id_akun);
		$query = $this->db->get('admin');
		return $query->result();
	}

	public function is_username_mail_exist() 
	{
		$this->db->where('username', $this->username);
		$this->db->or_where('email', $this->email);
		$query = $this->db->get('akun');
		return $query->result();
	}

}
