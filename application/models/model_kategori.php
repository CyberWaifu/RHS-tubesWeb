<?php

class Model_kategori extends CI_Model{

    public function data_obat(){
        return $this->db->get_where('tb_barang',array('kategori' => 'Obat'));
    }

    public function data_minuman(){
        return $this->db->get_where('tb_barang',array('kategori' => 'Minuman'));
    }
    
    public function data_vitamin(){
        return $this->db->get_where('tb_barang',array('kategori' => 'Vitamin'));
    }
    
    public function data_alatkesehatan(){
        return $this->db->get_where('tb_barang',array('kategori' => 'Alat kesehatan'));
    }
}