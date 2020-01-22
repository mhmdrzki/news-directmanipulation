<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	// Load database
	public function __construct(){
		parent::__construct();
		$this->load->model('konfigurasi_model');
		$this->load->model('berita_model');
		$this->load->model('video_model');
	}
	
	// Index 
	public function index() {
		$site	= $this->konfigurasi_model->listing();
		$produk	= $this->berita_model->hotnews();
		$berita	= $this->berita_model->home();
		$olahraga	= $this->berita_model->olahraga();
		$teknologi	= $this->berita_model->teknologi();
		$video	= $this->video_model->home();
		
		$data	= array( 'title'	=> $site['namaweb'].' | '.$site['tagline'],
						 'keywords' => $site['namaweb'].', '.$site['keywords'],
						 'produk'	=> $produk,
						 'berita'	=> $berita,
						 'olahraga'	=> $olahraga,
						 'teknologi'	=> $teknologi,
						 'video'	=> $video,
						 'isi'		=> 'home/list');
		$this->load->view('layout/wrapper',$data); 
	}
}
		