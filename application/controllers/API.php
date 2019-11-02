<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class API extends CI_Controller {

  private $user;

	public function __construct() {

    parent::__construct();

    date_default_timezone_set('Asia/Jakarta');
    
    $this->load->model('ConfigModel');
    
    $this->load->model('DeviceModel');

  }

    private function checkAuth($auth){

    }
    public function index(){  
        return "YOU SHOULD NOT PASS";
    }
  
  public function retrieveData(){
      $auth = $this->input->get_request_header('Authorization');
      return false;
  }

}

