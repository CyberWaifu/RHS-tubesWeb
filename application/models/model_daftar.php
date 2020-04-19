<?php

class Model_daftar extends CI_Model{

    public function tampil_praktik(){
        return $this->db->get('tb_praktik');
    }

    public function tambah_praktik($data,$table){
        $this->db->insert($table,$data);
    }

    public function berobat($data,$table){
        $this->db->insert($table,$data);
    }

    public function pasien($id_pratik){
        $result = $this->db->where('id_praktik',$id_pratik)->get('tb_pasien');
        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return array();
        }
    }
}