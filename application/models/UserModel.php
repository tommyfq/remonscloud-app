<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

	public function checkUser($username, $password){
    $query = $this->db->query("SELECT * FROM tbl_user WHERE username = '$username' AND password = '$password'");
    return $query->num_rows();
  }

  public function get_user($username, $password){
    $this->db->select('*');
    $this->db->from('tbl_user');
    $this->db->where('username',$username);
    $this->db->where('password',$password);
    $query=$this->db->get();

    return $query->row_array();
  }

  public function Register($user_register){
   $this->db->insert('tbl_user', $user_register);
  }

  public function email_check($email){
    $this->db->select('*');
    $this->db->from('tbl_user');
    $this->db->where('email',$email);
    $query=$this->db->get();

    if($query->num_rows()>0){
      return false;
    }else{
      return true;
    }
  }

  public function username_check($username){
    $this->db->select('*');
    $this->db->from('tbl_user');
    $this->db->where('username',$username);
    $query=$this->db->get();

    if($query->num_rows()>0){
      return false;
    }else{
      return true;
    }
  }

  public function check_subscribe($username){
    $this->db->select('tbl_user.id_subs, tbl_subs.jenis');
    $this->db->from('tbl_user');
    $this->db->join('tbl_subs', 'tbl_subs.id = tbl_user.id_subs');
    $this->db->where('tbl_user.username', $username);

    $query = $this->db->get();
    return $query->row_array();
  }
}