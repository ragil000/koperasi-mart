<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProdukController extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('ProdukModel');
        $this->load->model('LibraryRMYModel');
        
    }
	
	public function daftarProduk()
	{
        $this->LibraryRMYModel->data['result'] = $this->pagination();
        $this->LibraryRMYModel->data['kategori'] = $this->ProdukModel->_getKategori();

		$this->load->view('template/header', $this->LibraryRMYModel->data);
		$this->load->view('daftar_produk');
		$this->load->view('template/footer');
    }

    public function daftarProdukKategori($id_tb_kategori)
	{
        $produkKategoriCount = $this->ProdukModel->_produkKategoriCount($id_tb_kategori);

        //konfigurasi pagination
        $config['base_url']     = site_url('daftar-produk/kategori/'.$id_tb_kategori.'/'); //site url
        $config['total_rows']   = $produkKategoriCount; //total row
        $config['per_page']     = 8;  //show record per halaman
        $config["uri_segment"]  = 4;  // uri parameter
        $choice                 = $config["total_rows"] / $config["per_page"];
        $config["num_links"]    = floor($choice);

        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'Awal';
        $config['last_link']        = 'Akhir';
        $config['next_link']        = '<i class="zmdi zmdi-chevron-right"></i>';
        $config['prev_link']        = '<i class="zmdi zmdi-chevron-left"></i>';
        $config['full_tag_open']    = '<ul class="food__pagination d-flex justify-content-center align-items-center mt--130">';
        $config['full_tag_close']   = '</ul>';
        $config['num_tag_open']     = '<li>';
        $config['num_tag_close']    = '</li>';
        $config['cur_tag_open']     = '<li class="active"><a>';
        $config['cur_tag_close']    = '</a></li>';
        $config['next_tag_open']    = '<li>';
        $config['next_tag_close']   = '</li>';
        $config['prev_tag_open']    = '<li>';
        $config['prev_tag_close']   = '</li>';
        $config['first_tag_open']   = '<li>';
        $config['first_tag_close']  = '</li>';
        $config['last_tag_open']    = '<li>';
        $config['last_tag_close']   = '</li>';
 
        $this->pagination->initialize($config);
        $data['page']       = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data['data']       = $this->ProdukModel->_readProdukKategori($config["per_page"], $data['page'], $id_tb_kategori);
        $data['pagination'] = $this->pagination->create_links();
        $data['tab']        = $id_tb_kategori;

        $this->LibraryRMYModel->data['result']      = $data;
        $this->LibraryRMYModel->data['kategori']    = $this->ProdukModel->_getKategori();

		$this->load->view('template/header', $this->LibraryRMYModel->data);
		$this->load->view('daftar_produk');
		$this->load->view('template/footer');
    }

    public function createTransaksi()
    {
        $result = $this->ProdukModel->_createTransaksi();
        if($result['status']){
            // redirect(base_url('daftar-produk/transaksi'));
        }else{
            echo 'gagal menambah data';
            die;
        }
    }
    
    public function pagination()
    {
        //konfigurasi pagination
        $config['base_url']     = site_url('daftar-produk/'); //site url
        $config['total_rows']   = $this->db->count_all('tb_produk'); //total row
        $config['per_page']     = 8;  //show record per halaman
        $config["uri_segment"]  = 2;  // uri parameter
        $choice                 = $config["total_rows"] / $config["per_page"];
        $config["num_links"]    = floor($choice);

        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'Awal';
        $config['last_link']        = 'Akhir';
        $config['next_link']        = '<i class="zmdi zmdi-chevron-right"></i>';
        $config['prev_link']        = '<i class="zmdi zmdi-chevron-left"></i>';
        $config['full_tag_open']    = '<ul class="food__pagination d-flex justify-content-center align-items-center mt--130">';
        $config['full_tag_close']   = '</ul>';
        $config['num_tag_open']     = '<li>';
        $config['num_tag_close']    = '</li>';
        $config['cur_tag_open']     = '<li class="active"><a>';
        $config['cur_tag_close']    = '</a></li>';
        $config['next_tag_open']    = '<li>';
        $config['next_tag_close']   = '</li>';
        $config['prev_tag_open']    = '<li>';
        $config['prev_tag_close']   = '</li>';
        $config['first_tag_open']   = '<li>';
        $config['first_tag_close']  = '</li>';
        $config['last_tag_open']    = '<li>';
        $config['last_tag_close']   = '</li>';
 
        $this->pagination->initialize($config);
        $data['page']       = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data['data']       = $this->ProdukModel->_readProduk($config["per_page"], $data['page']);
        $data['pagination'] = $this->pagination->create_links();
 
        return $data;
    }

    public function daftarKeranjang($id_tb_produk = null)
	{
	    if(!isset($_SESSION['id_tb_anggota'])){
            redirect(base_url());
        }else{
            if($id_tb_produk != null){
                $cekKeranjang = $this->ProdukModel->_setKeranjang($id_tb_produk);
            
                if($cekKeranjang){
                    redirect(base_url('daftar-keranjang'));
                }else{
                    echo 'gagal memasukkan';
                    die;
                }
            }else{
                $this->LibraryRMYModel->data['kategori']    = $this->ProdukModel->_getKategori();
                $this->LibraryRMYModel->data['data']        = $this->ProdukModel->_readKeranjang();
                
                $this->load->view('template/header', $this->LibraryRMYModel->data);
                $this->load->view('daftar_keranjang');
                $this->load->view('template/footer');
            }
        }
        
    }

    public function setKeranjang($id_tb_produk)
	{
        $cekKeranjang = $this->ProdukModel->_setKeranjang($id_tb_produk);
        
        if($cekKeranjang){
            redirect(base_url('daftar-produk/'));
        }else{
            echo 'gagal memasukkan';
            die;
        }
    }

    public function deleteKeranjang($id_tb_produk){
        $cekDelete = $this->ProdukModel->_deleteKeranjang($id_tb_produk);
        
        if($cekDelete){
            redirect(base_url('daftar-keranjang'));
        }else{
            echo 'gagal delete';
            die;
        }
    }

    public function setTransaksi()
	{
        $post = $this->input->post();

        $cekTransaksi = $this->ProdukModel->_setTransaksi($post);
        
        if($cekTransaksi){
            redirect(base_url('daftar-produk/'));
        }else{
            echo 'gagal memasukkan';
            die;
        }
    }

    public function daftarSimpanan()
	{
        if(!isset($_SESSION['id_tb_anggota'])){
            redirect(base_url());
        }else{
            $this->LibraryRMYModel->data['wajib'] = $this->ProdukModel->_getSimpananWajibById();
            $this->LibraryRMYModel->data['pokok'] = $this->ProdukModel->_getSimpananPokokById();
            $this->LibraryRMYModel->data['kategori'] = $this->ProdukModel->_getKategori();

            $this->load->view('template/header', $this->LibraryRMYModel->data);
            $this->load->view('daftar_simpanan');
            $this->load->view('template/footer');
        }
    }

    public function tentang()
	{
	    $this->LibraryRMYModel->data['kategori'] = $this->ProdukModel->_getKategori();
	    
		$this->load->view('template/header', $this->LibraryRMYModel->data);
		$this->load->view('tentang');
		$this->load->view('template/footer');
    }

    public function daftarAnggota()
	{
        $this->LibraryRMYModel->data['result'] = $this->paginationAnggota();
        $this->LibraryRMYModel->data['kategori'] = $this->ProdukModel->_getKategori();
	    
		$this->load->view('template/header', $this->LibraryRMYModel->data);
		$this->load->view('daftar_anggota');
		$this->load->view('template/footer');
    }

    public function paginationAnggota()
    {
        //konfigurasi pagination
        $config['base_url']     = site_url('daftar-anggota/'); //site url
        $config['total_rows']   = $this->db->count_all('tb_anggota'); //total row
        $config['per_page']     = 5;  //show record per halaman
        $config["uri_segment"]  = 2;  // uri parameter
        $choice                 = $config["total_rows"] / $config["per_page"];
        $config["num_links"]    = floor($choice);

        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'Awal';
        $config['last_link']        = 'Akhir';
        $config['next_link']        = '<i class="zmdi zmdi-chevron-right"></i>';
        $config['prev_link']        = '<i class="zmdi zmdi-chevron-left"></i>';
        $config['full_tag_open']    = '<ul class="food__pagination d-flex justify-content-center align-items-center mt--2">';
        $config['full_tag_close']   = '</ul>';
        $config['num_tag_open']     = '<li>';
        $config['num_tag_close']    = '</li>';
        $config['cur_tag_open']     = '<li class="active"><a>';
        $config['cur_tag_close']    = '</a></li>';
        $config['next_tag_open']    = '<li>';
        $config['next_tag_close']   = '</li>';
        $config['prev_tag_open']    = '<li>';
        $config['prev_tag_close']   = '</li>';
        $config['first_tag_open']   = '<li>';
        $config['first_tag_close']  = '</li>';
        $config['last_tag_open']    = '<li>';
        $config['last_tag_close']   = '</li>';
 
        $this->pagination->initialize($config);
        $data['page']       = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data['data']       = $this->ProdukModel->_readAnggota($config["per_page"], $data['page']);
        $data['pagination'] = $this->pagination->create_links();
 
        return $data;
    }


}
