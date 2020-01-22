<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site_model extends CI_Model {
	
	// Load database
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	

	
	// Nav berita
	public function nav_berita() {
		$this->db->select('berita.*,kategori_berita.nama_kategori_berita,
						  kategori_berita.slug_kategori_berita');
		$this->db->from('berita');
		$this->db->join('kategori_berita','kategori_berita.id_kategori_berita = berita.id_kategori_berita');
		$this->db->group_by('berita.id_kategori_berita');
		$this->db->order_by('kategori_berita.nama_kategori_berita','ASC');
		$query = $this->db->get();
		return $query->result();
	}
	
	// Nav profil
	// public function nav_profil() {
	// 	$this->db->select('*');
	// 	$this->db->from('berita');
	// 	$this->db->where(array(	'jenis_berita'	=> 'Profil',
	// 							'status_berita'	=> 'Publish'));
	// 	$this->db->order_by('nama_berita');
	// 	$query = $this->db->get();
	// 	return $query->result();
	// }
}