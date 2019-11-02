<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribe extends CI_Controller {
	public function __construct() {
    parent::__construct();
    date_default_timezone_set('Asia/Jakarta');

    $this->load->model('UserModel');
  }

	public function index()
	{  
    $nama = $this->session->userdata('nama_depan');

		if ($this->session->has_userdata('logged_in')) {

      $username = $this->session->userdata('username');
      $id = $this->session->userdata('id');
      $role = $this->session->userdata('role');

      $subscribe = $this->UserModel->check_subscribe($username);

      $data = array(  
                  'nama' => $nama,
                  'active'  => 'Subscribe',
                  'sidebar' => 'nav_Sidebar',
                  'header' => 'nav_Header',
                  'content' => 'content_Subscribe',
                  'title' => 'Subscribe',
                  'subscribe' => $subscribe['jenis']
      );


      $this->load->view('master_page', $data);
    }else{
      $this->load->view('login');
    }
	}
}
