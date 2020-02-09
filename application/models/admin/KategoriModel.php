<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KategoriModel extends CI_Model {

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

    public function _readKategori($limit = 5, $start = 0){
        $result = $this->db->get('tb_kategori', $limit, $start)->result_array();
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
