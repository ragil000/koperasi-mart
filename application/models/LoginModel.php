<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

    public function __construct(){
        parent::__construct();
    }
	
	public function _setLogin($post)
	{
        $this->db->where('tb_anggota_username =', $post['tb_anggota_username']);
        $this->db->where('tb_anggota_password =', md5($post['tb_anggota_password']));
        $loginCek = $this->db->get('tb_anggota')->num_rows();

        if($loginCek > 0){
            $this->db->where('tb_anggota_username =', $post['tb_anggota_username']);
            $this->db->where('tb_anggota_password =', md5($post['tb_anggota_password']));
            $result['data'] = $this->db->get('tb_anggota')->result_array();
            return $result; 
        }else{
            $result['status'] = false;
            $result['message'] = 'username atau password salah.';
            $result['data'] = null;
            return $result;
        }
        
    }
    
}
