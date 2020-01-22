<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
	
	// Load database
	public function __construct(){
		parent::__construct();
		$this->load->model('berita_model');
		$this->load->model('kategori_berita_model');
	}
	
	// Index
	public function index() {
		$berita = $this->berita_model->listing();
		
		$data = array(	'title'		=> 'Data berita',
						'berita'	=> $berita,
						'isi'		=> 'admin/berita/list');
		$this->load->view('admin/layout/wrapper', $data);
	}
	
	// Tambah
	public function tambah() {
		$kategori	= $this->kategori_berita_model->listing();
		
		// Validasi
		$v = $this->form_validation;
		
		$v->set_rules('nama_berita','Nama berita','required|is_unique[berita.nama_berita]',
			array(	'required'		=> 'Nama berita harus diisi',
					'is_unique'		=> 'Nama berita: <strong>'.$this->input->post('nama_berita').
									   '</strong> sudah ada. Buat nama yang berbeda'));
									   			
		$v->set_rules('keterangan','Keterangan berita','required',
			array(	'required'		=> 'Keterangan berita harus diisi'));
		
		if($v->run()) {
			$config['upload_path'] 		= './assets/upload/image/';
			$config['allowed_types'] 	= 'gif|jpg|png|svg';
			$config['max_size']			= '12000'; // KB	
			$this->load->library('upload', $config);
			if(! $this->upload->do_upload('gambar')) {
		// End validasi
		
		$data = array(	'title'		=> 'Tambah berita',
						'kategori'	=> $kategori,
						'error'		=> $this->upload->display_errors(),
						'isi'		=> 'admin/berita/tambah');
		$this->load->view('admin/layout/wrapper', $data);
		// Masuk database
		}else{
			$upload_data				= array('uploads' =>$this->upload->data());
			// Image Editor
			$config['image_library']	= 'gd2';
			$config['source_image'] 	= './assets/upload/image/'.$upload_data['uploads']['file_name']; 
			$config['new_image'] 		= './assets/upload/image/thumbs/';
			$config['create_thumb'] 	= TRUE;
			$config['quality'] 			= "100%";
			$config['maintain_ratio'] 	= TRUE;
			$config['width'] 			= 360; // Pixel
			$config['height'] 			= 200; // Pixel
			$config['x_axis'] 			= 0;
			$config['y_axis'] 			= 0;
			$config['thumb_marker'] 	= '';
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();
			
			// Proses ke database
			$i = $this->input;
			$data = array(	'id_user'				=> $this->session->userdata('id'),
							'id_kategori_berita'	=> $i->post('id_kategori_berita'),
							'slug_berita'			=> url_title($i->post('nama_berita'),'dash',TRUE),
							'nama_berita'			=> $i->post('nama_berita'),
							'keterangan'			=> $i->post('keterangan'),
							'jenis_berita'				=> $i->post('jenis_berita'),
							'status_berita'			=> $i->post('status_berita'),
							'gambar'				=> $upload_data['uploads']['file_name'],
							'tanggal_post'			=> date('Y-m-d H:i:s')
							);
			$this->berita_model->tambah($data);
			$this->session->set_flashdata('sukses','Berita telah ditambah');
			redirect(base_url('admin/berita'));
		}}
		// End masuk database
		$data = array(	'title'		=> 'Tambah berita',
						'kategori'	=> $kategori,
						'isi'		=> 'admin/berita/tambah');
		$this->load->view('admin/layout/wrapper', $data);
	}
	
	// Edit
	public function edit($id_berita) {
		$berita		= $this->berita_model->detail($id_berita);
		$kategori	= $this->kategori_berita_model->listing();
		
		// Validasi
		$v = $this->form_validation;
		
		$v->set_rules('nama_berita','Nama berita','required',
			array(	'required'		=> 'Nama berita harus diisi'));
					
		$v->set_rules('keterangan','Keterangan berita','required',
			array(	'required'		=> 'Keterangan berita harus diisi'));
		
		if($v->run()) {
			if(!empty($_FILES['gambar']['name'])) {
			$config['upload_path'] 		= './assets/upload/image/';
			$config['allowed_types'] 	= 'gif|jpg|png|svg';
			$config['max_size']			= '12000'; // KB	
			$this->load->library('upload', $config);
			if(! $this->upload->do_upload('gambar')) {
		// End validasi
		
		$data = array(	'title'		=> 'Edit berita',
						'kategori'	=> $kategori,
						'berita'	=> $berita,
						'error'		=> $this->upload->display_errors(),
						'isi'		=> 'admin/berita/edit');
		$this->load->view('admin/layout/wrapper', $data);
		// Masuk database
		}else{
			$upload_data				= array('uploads' =>$this->upload->data());
			// Image Editor
			$config['image_library']	= 'gd2';
			$config['source_image'] 	= './assets/upload/image/'.$upload_data['uploads']['file_name']; 
			$config['new_image'] 		= './assets/upload/image/thumbs/';
			$config['create_thumb'] 	= TRUE;
			$config['quality'] 			= "100%";
			$config['maintain_ratio'] 	= TRUE;
			$config['width'] 			= 360; // Pixel
			$config['height'] 			= 200; // Pixel
			$config['x_axis'] 			= 0;
			$config['y_axis'] 			= 0;
			$config['thumb_marker'] 	= '';
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();
			
			// Proses ke database
			$i = $this->input;
			$data = array(	'id_berita'				=> $id_berita,
							'id_user'				=> $this->session->userdata('id'),
							'id_kategori_berita'	=> $i->post('id_kategori_berita'),
							'slug_berita'			=> url_title($i->post('nama_berita'),'dash',TRUE),
							'nama_berita'			=> $i->post('nama_berita'),
							'keterangan'			=> $i->post('keterangan'),
							'jenis_berita'				=> $i->post('jenis_berita'),
							'status_berita'			=> $i->post('status_berita'),
							'gambar'				=> $upload_data['uploads']['file_name']
							);
			$this->berita_model->edit($data);
			$this->session->set_flashdata('sukses','Berita telah diedit');
			redirect(base_url('admin/berita'));
		}}else{
			// Proses ke database
			$i = $this->input;
			$data = array(	'id_berita'				=> $id_berita,
							'id_user'				=> $this->session->userdata('id'),
							'id_kategori_berita'	=> $i->post('id_kategori_berita'),
							'slug_berita'			=> url_title($i->post('nama_berita'),'dash',TRUE),
							'nama_berita'			=> $i->post('nama_berita'),
							'keterangan'			=> $i->post('keterangan'),
							'jenis_berita'				=> $i->post('jenis_berita'),
							'status_berita'			=> $i->post('status_berita')									
							);
			$this->berita_model->edit($data);
			$this->session->set_flashdata('sukses','Berita telah diedit');
			redirect(base_url('admin/berita'));
		}}
		// End masuk database
		$data = array(	'title'		=> 'Edit berita',
						'kategori'	=> $kategori,
						'berita'	=> $berita,
						'isi'		=> 'admin/berita/edit'); 
		$this->load->view('admin/layout/wrapper', $data);
	}

	// Delete
	public function delete($id_berita) {
		$this->simple_login->cek_login();
		$data = array('id_berita'	=> $id_berita);
		$this->berita_model->delete($data);
		$this->session->set_flashdata('sukses','Data telah didelete');
		redirect(base_url('admin/berita'));		
	}
}