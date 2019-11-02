<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function __construct() {
    parent::__construct();
    date_default_timezone_set('Asia/Jakarta');

    $this->load->model('UserModel');
  }
	
	public function index(){
		if ($this->session->has_userdata('logged_in')) {
      redirect('/Dashboard', 'refresh');
    }else{

      $user_register = array(
        'username' => $this->input->post('usernameReg'),
        'password' => md5($this->input->post('passwordReg')),
        'nama_depan' => $this->input->post('nama_depan'),
        'nama_belakang' => $this->input->post('nama_belakang'),
        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
        'tanggal_lahir' => $this->input->post('tgl_lahir'),
        'email' => $this->input->post('email'),
        'telepon' => $this->input->post('phone'),
        'alamat' => $this->input->post('alamat'),
        'id_role' => '2'
      );

      $username_check = $this->UserModel->username_check($user_register['username']);

      $email_check = $this->UserModel->email_check($user_register['email']);
      
      if ($username_check) {

        if($email_check){

          $this->UserModel->Register($user_register);

          $this->session->set_flashdata('success_msg', 'Registered successfully.');
          
          $user = array(
            'logged_in' => true
          );

          $this->session->set_userdata($user);

          redirect('/Dashboard', 'refresh');

        }else{
          $this->session->set_flashdata('error_msg', 'Email yang anda masukkan salah atau sudah digunakan oleh user lain. Gunakan Email yang lainnya.');
          redirect('/Login');
        }
      }else{
        $this->session->set_flashdata('error_msg', 'Username yang anda masukkan salah atau sudah digunakan oleh user lain. Gunakan Username yang lainnya.');
        redirect('/Login');
      }
      
    }
	}

}