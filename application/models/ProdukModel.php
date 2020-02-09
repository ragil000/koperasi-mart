<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProdukModel extends CI_Model {

    public function __construct(){
        parent::__construct();
    }

    public function _getKategori(){
        $result = $this->db->get('tb_kategori')->result_array();
        return $result;
    }

    public function _getProdukById($id_tb_produk){
        $result = $this->db->get_where('tb_produk', ['id_tb_produk' => $id_tb_produk])->result_array();
        return $result;
    }

    public function _produkKategoriCount($id_tb_kategori){
        $this->db->join('tb_kategori', 'tb_kategori.id_tb_kategori = tb_relasi_kategori.id_tb_kategori');
        $this->db->join('tb_produk', 'tb_produk.id_tb_produk = tb_relasi_kategori.id_tb_produk');
        $result = $this->db->get_where('tb_relasi_kategori', ['tb_relasi_kategori.id_tb_kategori' => $id_tb_kategori])->num_rows();
        return $result;
    }

    public function _getKategoriById($id_tb_produk){
        $this->db->join('tb_kategori', 'tb_kategori.id_tb_kategori = tb_relasi_kategori.id_tb_kategori');
        $this->db->join('tb_produk', 'tb_produk.id_tb_produk = tb_relasi_kategori.id_tb_produk');
        $result = $this->db->get_where('tb_relasi_kategori', ['tb_relasi_kategori.id_tb_produk' => $id_tb_produk])->result_array();
        return $result;
    }
	
	public function _createTransaksi()
	{
        $post = $this->input->post();

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
        

        $resultArray = [
            'status' => $status,
            'message' => $message
        ];
        return $resultArray;
        
    }

    public function _readProduk($limit = 5, $start = 0){
        $this->db->order_by("tb_produk_tgl", "DESC");
        $result = $this->db->get('tb_produk', $limit, $start)->result_array();
        return $result;
    }

    public function _readProdukKategori($limit = 5, $start = 0, $id_tb_kategori){
        $this->db->join('tb_kategori', 'tb_kategori.id_tb_kategori = tb_relasi_kategori.id_tb_kategori');
        $this->db->join('tb_produk', 'tb_produk.id_tb_produk = tb_relasi_kategori.id_tb_produk');
        $this->db->order_by("tb_produk.tb_produk_tgl", "DESC");
        $this->db->limit($limit, $start);
        $result = $this->db->get_where('tb_relasi_kategori', ['tb_relasi_kategori.id_tb_kategori' => $id_tb_kategori])->result_array();
        return $result;
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

    public function _setKeranjang($id_tb_produk)
	{

        $this->db->delete('tb_keranjang', ['id_tb_produk' => $id_tb_produk, 'id_tb_anggota' => $_SESSION['id_tb_anggota']]);

        $data = [
            'id_tb_produk' => $id_tb_produk,
            'id_tb_anggota' => $_SESSION['id_tb_anggota']
        ];

        $cekInsert = $this->db->insert('tb_keranjang', $data);
        if($cekInsert){
            return true;
        }else{
            return false;
        }
    }

    public function _readKeranjang(){
        $this->db->join('tb_anggota', 'tb_anggota.id_tb_anggota = tb_keranjang.id_tb_anggota');
        $this->db->join('tb_produk', 'tb_produk.id_tb_produk = tb_keranjang.id_tb_produk');
        $result = $this->db->get_where('tb_keranjang', ['tb_keranjang.id_tb_anggota' => $_SESSION['id_tb_anggota']])->result_array();
        return $result;
    }

    public function _setTransaksi($post)
	{
        $data = [
            'tb_transaksi_kode' => $post['tb_transaksi_kode'],
            'tb_transaksi_alamat' => $post['tb_transaksi_alamat'],
            'tb_transaksi_kredit_old' => $post['tb_transaksi_kredit'],
            'tb_transaksi_kredit' => $post['tb_transaksi_kredit'],
            'tb_transaksi_metode' => $post['tb_transaksi_metode'],
            'tb_transaksi_nama' => $post['tb_transaksi_nama'],
            'tb_transaksi_bayar' => $post['tb_transaksi_bayar'],
            'tb_transaksi_ket' => 'masuk',
            'tb_transaksi_tgl' => date('Y-m-d'),
        ];
        $cekInsert = $this->db->insert('tb_transaksi', $data);
        $insertId = $this->db->insert_id();

        $batas = (int)$post['count_produk'];
        $i = 0;
        while($i < $batas){
            $data = [
                'id_tb_transaksi' => $insertId,
                'id_tb_produk' => $post['id_tb_produk'.($i+1)],
                'id_tb_anggota' => $_SESSION['id_tb_anggota'],
                'tb_relasi_transaksi_banyak' => $post['tb_produk_banyak'.($i+1)]
            ];

            $this->db->insert('tb_relasi_transaksi', $data);
            $i++;
        }

        $this->db->delete('tb_keranjang', ['id_tb_anggota' => $_SESSION['id_tb_anggota']]);

        if($cekInsert){
            return true;
        }else{
            return false;
        }
    }

    public function _deleteKeranjang($id_tb_produk){
        $cekDelete = $this->db->delete('tb_keranjang', ['id_tb_produk' => $id_tb_produk, 'id_tb_anggota' => $_SESSION['id_tb_anggota']]);
        if($cekDelete){
            return true;
        }else{
            return false;
        }
    }
    
}
