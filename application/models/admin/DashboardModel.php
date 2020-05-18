<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardModel extends CI_Model {

    public function __construct(){
        parent::__construct();
    }

    public function _totalTransaksi(){
        $result = $this->db->get('tb_transaksi')->num_rows();
        return $result;
    }

    public function _totalSimpanan($where = ''){
        $result = 0;
        $datas = $this->db->get_where('tb_simpanan', ['tb_simpanan_jenis' => $where])->result_array();
        
        foreach($datas as $data){
            $result = (int)$result+(int)$data['tb_simpanan_jumlah'];
        }
        
        return $result;
    }

    public function _totalAnggota(){
        $result = $this->db->get('tb_anggota')->num_rows();
        return $result;
    }

    public function _transaksi(){
        $this->db->join('tb_anggota', 'tb_anggota.id_tb_anggota = tb_relasi_transaksi.id_tb_anggota');
        $this->db->join('tb_produk', 'tb_produk.id_tb_produk = tb_relasi_transaksi.id_tb_produk');
        $this->db->join('tb_transaksi', 'tb_transaksi.id_tb_transaksi = tb_relasi_transaksi.id_tb_transaksi');
        $result = $this->db->get('tb_relasi_transaksi', 3, 0)->result_array();
        return $result;
    }
    
}
