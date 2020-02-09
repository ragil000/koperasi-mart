<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TransaksiModel extends CI_Model {

    public function __construct(){
        parent::__construct();
    }
	
	public function _createKategori()
	{
        $post = $this->input->post();
        $data = [
            'tb_kategori_nama' => strtolower($post['tb_kategori_nama'])
        ];

        $cekInsert = $this->db->insert('tb_kategori', $data);
        if($cekInsert){
            return true; 
        }else{
            return false;
        }
        
    }

    public function _readTransaksi($limit = 5, $start = 0){
        $res = $this->db->get('tb_transaksi', $limit, $start)->result_array();
        $result = Array();
        foreach($res as $val){
            $this->db->join('tb_anggota', 'tb_anggota.id_tb_anggota = tb_relasi_transaksi.id_tb_anggota');
            $this->db->join('tb_produk', 'tb_produk.id_tb_produk = tb_relasi_transaksi.id_tb_produk');
            $this->db->join('tb_transaksi', 'tb_transaksi.id_tb_transaksi = tb_relasi_transaksi.id_tb_transaksi');
            $resu = $this->db->get_where('tb_relasi_transaksi', ['tb_relasi_transaksi.id_tb_transaksi' => $val['id_tb_transaksi']])->result_array();
            
            $kum = Array();
            foreach($resu as $valu){
                $n = [
                    'tb_produk_nama' => $valu['tb_produk_nama'],
                    'tb_relasi_transaksi_banyak' => $valu['tb_relasi_transaksi_banyak']
                ];
                array_push($kum, $n);
            }

            $dataK = [
                'id_tb_transaksi' => $val['id_tb_transaksi'],
                'tb_transaksi_kode' => $val['tb_transaksi_kode'],
                'tb_transaksi_alamat' => $val['tb_transaksi_alamat'],
                'tb_transaksi_kredit_old' => $val['tb_transaksi_kredit_old'],
                'tb_transaksi_kredit' => $val['tb_transaksi_kredit'],
                'tb_transaksi_metode' => $val['tb_transaksi_metode'],
                'tb_transaksi_nama' => $val['tb_transaksi_nama'],
                'tb_transaksi_bayar' => $val['tb_transaksi_bayar'],
                'tb_transaksi_ket' => $val['tb_transaksi_ket'],
                'tb_transaksi_tgl' => $val['tb_transaksi_tgl'],
                'produk' => $kum
                
            ];
            array_push($result, $dataK);
        }
        return $result;
    }

    public function _deleteKategori($id_tb_kategori){
        $cekDelete = $this->db->delete('tb_kategori', ['id_tb_kategori' => $id_tb_kategori]);
        if($cekDelete){
            return true;
        }else{
            return false;
        }
    }
    
}
