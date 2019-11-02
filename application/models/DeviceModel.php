<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class DeviceModel extends CI_Model {

    public function assignDevice($data){
        $this->db->where('license_code',$data['license_code']);
        $this->db->update('device',$data);
    }

    public function checkAssignedDevice($license_code, $user_id){
        $this->db->select("*");
        $this->db->from('device');
        $this->db->where('license_code',$license_code);
        $this->db->where('user_id',null);
        $res = $this->db->get();
        
        if($res->num_rows() == 1) return true; // if device is not assign

        return false; 

    }

    public function getUserDevice($user_id){
        $this->db->select("*");
        $this->db->from('device');
        $this->db->where('user_id',$user_id);
        $res = $this->db->get();
        
        return $res->result_array();
    }

}