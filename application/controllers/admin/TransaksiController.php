<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TransaksiController extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('admin/TransaksiModel');
        $this->load->model('LibraryRMYModel');

        if(!isset($_SESSION['id_tb_akun'])){
            redirect(base_url()."admin");
        }
    }
	
	public function daftarTransaksi()
	{
        $this->LibraryRMYModel->data['result'] = $this->pagination();

		$this->load->view('admin/template/header', $this->LibraryRMYModel->data);
		$this->load->view('admin/pages/daftar_transaksi');
		$this->load->view('admin/template/footer');
    }

    public function createKategori()
    {
        $result = $this->KategoriModel->_createKategori();
        if($result){
            redirect(base_url('admin/produk/daftar-kategori/'));
        }else{
            echo 'gagal menambah data';
            die;
        }
    }
    
    public function pagination()
    {
        //konfigurasi pagination
        $config['base_url'] = site_url('admin/transaksi/daftar-transaksi/'); //site url
        $config['total_rows'] = $this->db->count_all('tb_transaksi'); //total row
        $config['per_page'] = 10;  //show record per halaman
        $config["uri_segment"] = 4;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'Awal';
        $config['last_link']        = 'Akhir';
        $config['next_link']        = '>';
        $config['prev_link']        = '<';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>></li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
 
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->TransaksiModel->_readTransaksi($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();
 
        return $data;
    }

    public function deleteKategori($id_tb_kategori){
        $cekDelete = $this->KategoriModel->_deleteKategori($id_tb_kategori);
        
        if($cekDelete){
            redirect(base_url('admin/produk/daftar-kategori/'));
        }else{
            echo 'gagal delete';
            die;
        }
    }

}
