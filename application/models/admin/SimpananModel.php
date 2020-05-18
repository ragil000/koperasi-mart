<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SimpananModel extends CI_Model {

    public function __construct(){
        parent::__construct();
    }
	
	public function _createSimpanan($where = ''){
        $post = $this->input->post();

        $cekSimpanan = $this->_cekSimpanan($post['id_tb_anggota'], $where);
        if($cekSimpanan->num_rows() > 0){
            $cekSimpanan = $cekSimpanan->result_array();
            $jumlahAwal = $cekSimpanan[0]['tb_simpanan_jumlah'];
            $data = [
                'tb_simpanan_jumlah' => (int)$jumlahAwal+(int)$post['tb_simpanan_jumlah']
            ];
    
            $cekInsert = $this->db->update('tb_simpanan', $data, ['id_tb_anggota' => $post['id_tb_anggota'], 'tb_simpanan_jenis' => $where]);
        }else {
            $data = [
                'id_tb_anggota' => $post['id_tb_anggota'],
                'tb_simpanan_jumlah' => $post['tb_simpanan_jumlah'],
                'tb_simpanan_jenis' => $where
            ];
    
            $cekInsert = $this->db->insert('tb_simpanan', $data);
        }
        if($cekInsert){
            return true; 
        }else{
            return false;
        }
    }

    private function _cekSimpanan($id_tb_anggota = 1, $where = ''){
        $result = $this->db->get_where('tb_simpanan', ['tb_simpanan_jenis' => $where, 'id_tb_anggota' => $id_tb_anggota]);
        return $result;
    }

    public function _readSimpanan($limit = 5, $start = 0, $where = ''){
        $this->db->join('tb_anggota', 'tb_anggota.id_tb_anggota=tb_simpanan.id_tb_anggota');
        $this->db->where('tb_simpanan_jenis', $where);
        $result = $this->db->get('tb_simpanan', $limit, $start)->result_array();
        return $result;
    }

    public function _count_all($where = ''){
        $this->db->where('tb_simpanan_jenis', $where);
        $result = $this->db->count_all_results('tb_simpanan');
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
