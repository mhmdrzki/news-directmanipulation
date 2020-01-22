<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	
	// Load database
	public function __construct(){
		parent::__construct();
		$this->load->model('konfigurasi_model');
		$this->load->model('berita_model');
	}
	
	// Index 
	public function index() {
		$site	= $this->konfigurasi_model->listing();
		$berita	= $this->berita_model->home();
		
		// Validasi
		$valid = $this->form_validation;
		$valid->set_rules('nama','Nama','required',
			array(	'required'		=> 'Nama harus diisi'));
		
		$valid->set_rules('email','Email','required',
			array(	'required'		=> 'Email harus diisi'));
		
		$valid->set_rules('pesan','Pesan','required',
			array(	'required'		=> 'Pesan harus diisi'));
		
		if($valid->run() === FALSE) {
		// End validasi
		
		$data	= array( 'title'	=> $site['namaweb'].' | '.$site['tagline'],
						 'keywords' => $site['namaweb'].', '.$site['keywords'],
						 'berita'	=> $berita,
						 'site'		=> $site,
						 'isi'		=> 'home/kontak');
		$this->load->view('layout/wrapper',$data); 
		//Kirim ke pemilik website
		}else{
			$i 			= $this->input;
			$email		= $i->post('email');
			$subject	= 'Form contact us - '.$site['namaweb'];
			$message	= 'Nama pengirim: '.$i->post('nama').'<br>'.
						  'Nomor telepon: '.$i->post('telepon').'<br>
						  Email: '.$i->post('email').'<br>
						  Berikut isi pesan:<hr>'.
						  $i->post('pesan');
			$nama		= $i->post('nama');
			
			$this->load->library('email');

			$this->email->from($email, $nama);
			$this->email->to($site['email']);
			$this->email->cc($email);
			$this->email->bcc('andoyoandoyo@gmail.com');
			
			$this->email->subject($subject);
			$this->email->message($message);
			
			$this->email->send();
			
			// Redirect page
			$this->session->set_flashdata('sukses','Terimakasih, pesan Anda sudah terkirim');
			redirect(base_url('contact'));
		}
		// End kirim
	}
}
		