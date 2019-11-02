<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
    parent::__construct();
    date_default_timezone_set('Asia/Jakarta');

    $this->load->model('UserModel');
  }
	
	public function index()
	{
		if ($this->session->has_userdata('logged_in')) {
      redirect('/Dashboard', 'refresh');
    }else{
      $this->load->view('login');
    }
	}

	public function doLogin(){
 
    $username = $this->input->post('username');
    $password = md5($this->input->post('password'));
   
    if($this->UserModel->checkUser($username, $password)==1){
      $results = $this->UserModel->get_user($username, $password);

      $user = array(
        'username' => $results['username'],
        'nama_depan' => $results['nama_depan'],
        'id' => $results['id'],
        'role' => $results['id_role'],
        'logged_in' => true
      );

      $this->session->set_userdata($user);

      redirect('/Dashboard', 'refresh');
    }else{
      $this->session->set_flashdata("login_error_message","User Id /Password tidak tepat.");
    	redirect('login','refresh');
    }    
	}

  public function doLogout(){
      $this->session->sess_destroy();
      redirect('/Home', 'refresh');
  }
}
