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

      $count_days = cal_days_in_month(CAL_GREGORIAN, 10, 2019);
      $days = array();
      $energy_data_daily = array();
      $power_data_daily = array();
      for($i = 1; $i <= $count_days; $i++){
        array_push($days,$i);
        array_push($energy_data_daily,rand(10,100));
        array_push($power_data_daily,rand(10,100));
      }

    	$data = array( 
                  'nama' => $this->user['nama_depan'], 
    							'active' => 'Monitoring',
									'sidebar'=>'nav_Sidebar',
									'header'=>'nav_Header',
									'content'=>'content_Monitoring',
                  'title'=>'Monitoring',
                  'footer' => 'monitoring_script',
                  'time' => array("00:00","01:00","02:00","03:00","04:00","05:00","06:00",
                  "07:00","08:00","09:00","10:00","11:00","12:00",
                  "13:00","14:00","15:00","16:00","17:00","18:00",
                  "19:00","20:00","21:00","22:00","23:00","24:00"),
                  'label_day' => $days,
                  'energy_data_daily' => $energy_data_daily,
                  'power_data_daily' => $power_data_daily
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

