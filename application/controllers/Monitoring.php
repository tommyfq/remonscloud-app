<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Monitoring extends CI_Controller {

  private $user;

	public function __construct() {

    parent::__construct();

    date_default_timezone_set('Asia/Jakarta');

    $this->load->model('UserModel');

    $this->load->model('DeviceModel');

  }

	public function index()

	{  

    $this->user = $this->session->userdata();
    
		if ($this->session->has_userdata('logged_in')) {

    	$data = array( 
                  'nama' => $this->user['nama_depan'], 
    							'active' => 'Monitoring',
									'sidebar'=>'nav_Sidebar',
									'header'=>'nav_Header',
									'content'=>'content_Monitoring',
                  'title'=>'Monitoring',
                  'footer' => 'monitoring_script'
      );
 
      $res = $this->DeviceModel->getUserDevice($this->user['id']);
      
      $data['devices'] = $res;

      $this->load->view('master_page', $data);

    }else{

      $this->load->view('login');

    }

  }
  
  public function getData(){
    
  }

}

