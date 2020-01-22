<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_berita extends CI_Controller {
	
	// Load database
	public function __construct(){
		parent::__construct();
		$this->load->model('kategori_berita_model');
	}
	
	// Index
	public function index() {
		$kategori_berita = $this->kategori_berita_model->listing();
		
		// Validasi
		$this->form_validation->set_rules('nama_kategori_berita','Nama kategori','required',
			array(	'required'	=> 'Nama kategori berita harus diisi'));
		
		if($this->form_validation->run() === FALSE) {
		// End validasi
		
		$data = array(	'title'				=> 'Kategori Berita',
						'kategori_berita'	=> $kategori_berita,
						'isi'				=> 'admin/kategori_berita/list');
		$this->load->view('admin/layout/wrapper',$data);
		// Masuk database
		}else{
			$i 				= $this->input;
			$slug_kategori	= url_title($i->post('nama_kategori_berita'),'dash',TRUE);
			$data = array(	'slug_kategori_berita'	=> $slug_kategori,
							'nama_kategori_berita'	=> $i->post('nama_kategori_berita'),
							'keterangan'			=> $i->post('keterangan'),
							'urutan'				=> $i->post('urutan'));
			$this->kategori_berita_model->tambah($data);
			$this->session->set_flashdata('sukses','Kategori berita telah ditambah');
			redirect(base_url('admin/kategori_berita'));
		}
		// End masuk database
	}
	
	// Edit
	public function edit($id_kategori_berita) {
		$kategori_berita = $this->kategori_berita_model->detail($id_kategori_berita);
		
		// Validasi
		$this->form_validation->set_rules('nama_kategori_berita','Nama kategori','required',
			array(	'required'	=> 'Nama kategori berita harus diisi'));
		
		if($this->form_validation->run() === FALSE) {
		// End validasi
		
		$data = array(	'title'				=> 'Edit Kategori Berita',
						'kategori_berita'	=> $kategori_berita,
						'isi'				=> 'admin/kategori_berita/edit');
		$this->load->view('admin/layout/wrapper',$data);
		// Masuk database
		}else{
			$i 				= $this->input;
			$slug_kategori	= url_title($i->post('nama_kategori_berita'),'dash',TRUE);
			$data = array(	'id_kategori_berita'	=> $id_kategori_berita,
							'slug_kategori_berita'	=> $slug_kategori,
							'nama_kategori_berita'	=> $i->post('nama_kategori_berita'),
							'keterangan'			=> $i->post('keterangan'),
							'urutan'				=> $i->post('urutan'));
			$this->kategori_berita_model->edit($data);
			$this->session->set_flashdata('sukses','Kategori berita telah diedit');
			redirect(base_url('admin/kategori_berita'));
		}
		// End masuk database
	}
	
	// Delete
	public function delete($id_kategori_berita) {
		$this->simple_login->cek_login();
		$data = array('id_kategori_berita'	=> $id_kategori_berita);
		$this->kategori_berita_model->delete($data);
		$this->session->set_flashdata('sukses','Kategori berita telah didelete');
		redirect(base_url('admin/kategori_berita'));		
	}
}