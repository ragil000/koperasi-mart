<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

    public function __construct(){
        parent::__construct();
    }
	
	public function _setLogin($post)
	{
        $this->db->where('tb_akun_username =', $post['tb_akun_username']);
        $this->db->where('tb_akun_password =', md5($post['tb_akun_password']));
        $loginCek = $this->db->get('tb_akun')->num_rows();

        if($loginCek > 0){
            $this->db->where('tb_akun_username =', $post['tb_akun_username']);
            $this->db->where('tb_akun_password =', md5($post['tb_akun_password']));
            $result['data'] = $this->db->get('tb_akun')->result_array();
            return $result; 
        }else{
            $result['status'] = false;
            $result['message'] = 'username atau password salah.';
            $result['data'] = null;
            return $result;
        }
        
    }
    
}
