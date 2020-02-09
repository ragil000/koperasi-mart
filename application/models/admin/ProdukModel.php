<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProdukModel extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->library('upload');
    }

    public function _getKategori(){
        $result = $this->db->get('tb_kategori')->result_array();
        return $result;
    }

    public function _getProdukById($id_tb_produk){
        $result = $this->db->get_where('tb_produk', ['id_tb_produk' => $id_tb_produk])->result_array();
        return $result;
    }

    public function _getKategoriById($id_tb_produk){
        $this->db->join('tb_kategori', 'tb_kategori.id_tb_kategori = tb_relasi_kategori.id_tb_kategori');
        $this->db->join('tb_produk', 'tb_produk.id_tb_produk = tb_relasi_kategori.id_tb_produk');
        $result = $this->db->get_where('tb_relasi_kategori', ['tb_relasi_kategori.id_tb_produk' => $id_tb_produk])->result_array();
        return $result;
    }
	
	public function _createProduk()
	{
        $post = $this->input->post();

        $cekUpload = $this->_doUpload();

        if($cekUpload['status']){
            $data = [
                'tb_produk_nama' => $post['tb_produk_nama'],
                'tb_produk_harga_asli' => $post['tb_produk_harga_asli'],
                'tb_produk_harga_jual' => $post['tb_produk_harga_jual'],
                'tb_produk_jumlah_old' => $post['tb_produk_jumlah'],
                'tb_produk_jumlah' => $post['tb_produk_jumlah'],
                'tb_produk_deskripsi' => $post['tb_produk_deskripsi'],
                'tb_produk_gambar' => $cekUpload['image_name'],
                'tb_produk_tgl' => date('Y-m-d')
            ];
    
            $cekInsert = $this->db->insert('tb_produk', $data);
            $insertId = $this->db->insert_id();
    
            if($cekInsert){
                $tb_kategori_nama_array = explode(',', $post['tb_kategori_nama_array']);
                
                $status = true;
                $message = 'Data produk berhasil ditambahkan.';
                foreach($tb_kategori_nama_array as $result){
                    $dataKategori = $this->_getKategori();
    
                    foreach($dataKategori as $resultKategori){
                        if($result == $resultKategori['tb_kategori_nama']){
                            $data = [
                                'id_tb_produk' => $insertId,
                                'id_tb_kategori' => $resultKategori['id_tb_kategori'],
                            ];
                            $cekInsertKategori = $this->db->insert('tb_relasi_kategori', $data);
                            if(!$cekInsertKategori){
                                $status = false;
                                $message = 'Data kategori produk gagal ditambahkan.';
                            }
                        }
                    }
                }

                $resultArray = [
                    'status' => $status,
                    'message' => $message
                ];
                return $resultArray;

            }else{
                $resultArray = [
                    'status' => false,
                    'message' => 'Gagal insert data produk.'
                ];
                return $resultArray;
            }
        }else{

            $resultArray = [
                'status' => false,
                'message' => 'Gagal upload gambar.'
            ];
            return $resultArray;
        }
        
    }

    public function _doUpload(){
        $time = time();
        $config['upload_path'] = './assets/img/produk/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = $time.'.jpg';
 
        $this->upload->initialize($config);
 
        if(!empty($_FILES['tb_produk_gambar']['name'])){
            
            if($this->upload->do_upload('tb_produk_gambar')){
                $img = $this->upload->data();
                $cekThumb = $this->_createThumbs($img['file_name']);
                if($cekThumb){
                    $dataArray = [
                        'status' => true,
                        'image_name' => $config['file_name']
                    ];
                    return $dataArray;
                }else{
                    $dataArray = [
                        'status' => false,
                        'image_name' => null
                    ];
                    return $dataArray;
                }
            }else{
                echo $this->upload->display_errors();
            }

        }else{
            $dataArray = [
                'status' => false,
                'image_name' => null
            ];
            return $dataArray;
        }
    }

    function _createThumbs($img_name){
        // Image resizing config
        $config = array(
            // image Medium
            array(
                'image_library' => 'GD2',
                'source_image'  => './assets/img/produk/'.$img_name,
                'maintain_ratio'=> FALSE,
                'width'         => 600,
                'height'        => 400,
                'new_image'     => './assets/img/produk/medium/medium-'.$img_name
                ),
            // Image Small
            array(
                'image_library' => 'GD2',
                'source_image'  => './assets/img/produk/'.$img_name,
                'maintain_ratio'=> FALSE,
                'width'         => 200,
                'height'        => 134,
                'new_image'     => './assets/img/produk/small/small-'.$img_name
            )
        );
 
        $this->load->library('image_lib', $config[0]);
        
        foreach ($config as $item){
            $this->image_lib->initialize($item);
            
            if(!$this->image_lib->resize()){
                return false;
            }

            $this->image_lib->clear();
        }
        
        return true;
    }

    public function _readProduk($limit = 5, $start = 0){
        $this->db->order_by("tb_produk_tgl", "DESC");
        $result = $this->db->get('tb_produk', $limit, $start)->result_array();

        // print_r($result);
        // die;
        
        $resultArray = Array();
        foreach($result as $value){
            $resultKategori = $this->_getKategoriById($value['id_tb_produk']);
            
            $kategoriArray = Array();
            foreach($resultKategori as $valueKategori){
                array_push($kategoriArray, $valueKategori['tb_kategori_nama']);
            }

            $data = [
                'id_tb_produk' => $value['id_tb_produk'],
                'tb_produk_nama' => $value['tb_produk_nama'],
                'tb_produk_harga_asli' => $value['tb_produk_harga_asli'],
                'tb_produk_harga_jual' => $value['tb_produk_harga_jual'],
                'tb_produk_jumlah_old' => $value['tb_produk_jumlah_old'],
                'tb_produk_jumlah' => $value['tb_produk_jumlah'],
                'tb_produk_deskripsi' => $value['tb_produk_deskripsi'],
                'tb_produk_gambar' => $value['tb_produk_gambar'],
                'tb_produk_tgl' => $value['tb_produk_tgl'],
                'tb_kategori_nama_array' => $kategoriArray

            ];
            array_push($resultArray, $data);
        }

        return $resultArray;
    }

    public function _deleteProduk($id_tb_produk){
        $result = $this->db->get_where('tb_produk', ['id_tb_produk' => $id_tb_produk])->result_array();
        
        $config['original_path']  = './assets/img/produk/';
        $config['medium_path']  = './assets/img/produk/medium/medium-';
        $config['small_path']  = './assets/img/produk/small/small-';

        if(file_exists($config['original_path'].$result[0]['tb_produk_gambar'])){
            if(unlink($config['original_path'].$result[0]['tb_produk_gambar'])){
                unlink($config['medium_path'].$result[0]['tb_produk_gambar']);
                unlink($config['small_path'].$result[0]['tb_produk_gambar']);

                $cekDeleteKategori = $this->db->delete('tb_relasi_kategori', ['id_tb_produk' => $id_tb_produk]);
                if($cekDeleteKategori){
                    $cekDeleteProduk = $this->db->delete('tb_produk', ['id_tb_produk' => $id_tb_produk]);
                    if($cekDeleteProduk){
                        return true;
                    }else{
                        return false;
                    }
                }else{
                    return false;
                }
            }
        }
    }
    
}
