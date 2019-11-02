<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Tambah_Perangkat extends CI_Controller {

  private $nama;

  public function __construct() {

    parent::__construct();

    date_default_timezone_set('Asia/Jakarta');



    $this->load->model('UserModel');

    $this->load->model('DeviceModel');

  }



	public function index()

	{

    $this->nama = $this->session->userdata('nama_depan');



		if ($this->session->has_userdata('logged_in')) {

    	$data = array(

                  'nama' => $this->nama,  

    							'active' => 'Monitoring',

									'sidebar'=>'nav_Sidebar',

									'header'=>'nav_Header',

									'content'=>'content_Tambah_PLTS',

                  'title'=>'Tambah Perangkat'

      );
      
      $this->load->view('master_page', $data);

    }else{

      $this->load->view('login');

    }

  }
  
  public function addDevice(){
    //Get input post data
    $license_code = $this->input->post('license_code');
    $user = $this->session->userdata();

    $data = array(
      'nama' => $this->nama,  
      'active' => 'Monitoring',
      'sidebar'=>'nav_Sidebar',
      'header'=>'nav_Header',
      'content'=>'content_Monitoring',
      'title'=>'Monitoring',
      'footer' => 'chart_script'
    );

    $flash_msg = "Nomor lisensi ".$license_code." tidak ditemukan atau sudah terdaftar";
    $flash_name = "new_device_error";

    try{
      //check assigned device
      $res = $this->DeviceModel->checkAssignedDevice($license_code, $user['id']);

      /*var_dump($res);
      die();*/

      if($res){
        //set param for insert
        $param = array(
          'license_code' => $license_code,
          'user_id' => $user['id'],
          'date_updated' => date('Y-m-d H:i:s')
        );
          //assign device to user
          $this->DeviceModel->assignDevice($param);
        
          $flash_msg = "Nomor lisensi ".$license_code." telah berhasil ditambahkan.";
          $flash_name = "new_device_succes";
      }

    }catch(Exception $e){

      $flash_msg = "Sedang terjadi masalah jaringan internal. Mohon untuk mencoba kembali";
      $flash_name = "new_device_error";

    }

    $this->session->set_flashdata($flash_msg, $flash_msg);

    redirect('/Monitoring');
  }

}

