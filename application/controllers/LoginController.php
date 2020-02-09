<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

    private $sessionData = array();
    public function __construct(){
        parent::__construct();

        $this->load->model('LoginModel');
        $this->load->model('LibraryRMYModel');
    }
    
    public function setLogin()
	{

        $post = $this->input->post();
        $this->LibraryRMYModel->data['result'] = $this->LoginModel->_setLogin($post);

        if($this->LibraryRMYModel->data['result']['data'] != null){
            $data = $this->LibraryRMYModel->data['result']['data'][0];
        
            $this->sessionData = array(
                'id_tb_anggota' => $data['id_tb_anggota'],
                'tb_anggota_nama' => $data['tb_anggota_nama'],
                'tb_anggota_username' => $data['tb_anggota_username']
            );

            $this->session->set_userdata($this->sessionData);

            redirect(base_url()."daftar-produk");
        }else{
            $this->load->view('daftar_produk_login', $this->LibraryRMYModel->data);
        }
        
    }

    public function setLogout()
	{
        
        $this->sessionData = array(
            'id_tb_anggota',
            'tb_anggota_nama',
            'tb_anggota_username'
        );

        $this->session->unset_userdata($this->sessionData);

		redirect(base_url()."daftar-produk");
    }

}