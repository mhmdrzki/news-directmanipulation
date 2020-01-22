<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
	
	// Load database
	public function __construct(){
		parent::__construct();
		$this->load->model('konfigurasi_model');
		$this->load->model('berita_model');
		$this->load->model('kategori_berita_model');
	}
	
	// Index 
	public function index() {
		$site	= $this->konfigurasi_model->listing();
		$berita	= $this->berita_model->berita();
		
		$data	= array( 'title'	=> 'Berita '.$site['namaweb'].' | '.$site['tagline'],
						 'keywords' => 'Berita '.$site['namaweb'].', '.$site['keywords'],
						 'berita'	=> $berita,
						 'isi'		=> 'berita/list');
		$this->load->view('layout/wrapper',$data); 
	}
	
	// Kategori 
	public function kategori($slug_kategori_berita) {
		$site				= $this->konfigurasi_model->listing();
		$kategori			= $this->kategori_berita_model->read($slug_kategori_berita);
		$id_kategori_berita	= $kategori->id_kategori_berita;
		$berita				= $this->berita_model->kategori($id_kategori_berita);
		
		$data	= array( 'title'	=> 'Kategori Berita '.$kategori->nama_kategori_berita,
						 'keywords' => 'Kategori Berita '.$kategori->nama_kategori_berita,
						 'berita'	=> $berita,
						 'isi'		=> 'berita/list');
		$this->load->view('layout/wrapper',$data); 
	}
	
	// Read
	public function read($slug_berita) {
		$site	= $this->konfigurasi_model->listing();
		$berita	= $this->berita_model->home();
		$read	= $this->berita_model->read($slug_berita);
		
		$data	= array( 'title'	=> $read->nama_berita,
						 'keywords' => $read->nama_berita,
						 'berita'	=> $berita,
						 'read'		=> $read,
						 'isi'		=> 'berita/read');
		$this->load->view('layout/wrapper',$data); 
	}
}
		