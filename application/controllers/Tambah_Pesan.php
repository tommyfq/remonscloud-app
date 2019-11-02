<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah_Pesan extends CI_Controller {
	public function __construct() {
    parent::__construct();
    date_default_timezone_set('Asia/Jakarta');

    $this->load->model('UserModel');
  }

	public function index()
	{  
    $nama = $this->session->userdata('nama_depan');

		if ($this->session->has_userdata('logged_in')) {
    	$data = array(
                  'nama' => $nama,  
    							'active' => 'Pesan',
									'sidebar'=>'nav_Sidebar',
									'header'=>'nav_Header',
									'content'=>'content_Tambah_Pesan',
                  'title'=>'Tambah Pesan'
      );

      

      $this->load->view('master_page', $data);
    }else{
      $this->load->view('login');
    }
	}
}
