<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AnggotaModel extends CI_Model {

    public function __construct(){
        parent::__construct();
    }
	
	public function _createAnggota()
	{
        $post = $this->input->post();
        $data = [
            'tb_anggota_nama' => $post['tb_anggota_nama'],
            'tb_anggota_username' => $post['tb_anggota_username'],
            'tb_anggota_password' => md5($post['tb_anggota_password']),
            'tb_anggota_tgl' => date('Y-m-d')
        ];

        $cekInsert = $this->db->insert('tb_anggota', $data);
        if($cekInsert){
            return true; 
        }else{
            return false;
        }
        
    }

    public function _readAnggota($limit = 5, $start = 0){
        $this->db->order_by('tb_anggota_tgl', 'DESC');
        $result = $this->db->get('tb_anggota', $limit, $start)->result_array();
        return $result;
    }

    public function _readAnggotaAll(){
        $this->db->order_by('tb_anggota_tgl', 'DESC');
        $result = $this->db->get('tb_anggota')->result_array();
        return $result;
    }

    public function _deleteAnggota($id_tb_anggota){
        $cekDelete = $this->db->delete('tb_anggota', ['id_tb_anggota' => $id_tb_anggota]);
        if($cekDelete){
            return true;
        }else{
            return false;
        }
    }
    
}
