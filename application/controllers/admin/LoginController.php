<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

    private $sessionData = array();
    public function __construct(){
        parent::__construct();

        $this->load->model('admin/LoginModel');
        $this->load->model('LibraryRMYModel');
    }
    
    public function setLogin()
	{

        $post = $this->input->post();
        if($post != null){
            $this->LibraryRMYModel->data['result'] = $this->LoginModel->_setLogin($post);

            if($this->LibraryRMYModel->data['result']['data'] != null){
                $data = $this->LibraryRMYModel->data['result']['data'][0];
            
                $this->sessionData = array(
                    'id_tb_akun' => $data['id_tb_akun'],
                    'tb_akun_nama' => $data['tb_akun_nama'],
                    'tb_akun_username' => $data['tb_akun_username']
                );

                $this->session->set_userdata($this->sessionData);

                redirect(base_url()."admin/produk/daftar-produk");
            }else{
                $this->load->view('admin_login', $this->LibraryRMYModel->data);
            }
        }else{
            $this->load->view('admin/pages/admin_login', $this->LibraryRMYModel->data);
        }
        
    }

    public function setLogout()
	{
        
        $this->sessionData = array(
            'id_tb_akun',
            'tb_akun_nama',
            'tb_akun_username'
        );

        $this->session->unset_userdata($this->sessionData);

		redirect(base_url()."admin");
    }

}