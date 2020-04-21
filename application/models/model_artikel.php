<?php

/**
 * 
 */
class model_artikel extends CI_Model
{
	public function tampil_artikel()
	{
		return $this->db->get('db_artikel');
	}

	public function per_kategori($kategori){
		$result = $this->db->where('k_kategori', $kategori)->get('db_artikel');
		return $result;
	}

	public function detail_artikel($id){
        $result = $this->db->where('id_artikel',$id)->get('db_artikel');
        if($result->num_rows() > 0){
            return $result;
        }else{
            return false;
        }
    }

    public function detail_author($adminkode){
    	$result = $this->db->where('k_author',$adminkode)->get('db_artikel');
        if($result->num_rows() > 0){
        	return $result->result();
        }else{
            return $result;
        }
    }

    public function get_komen($id){
    	$result = $this->db->where('id_artikel',$id)->order_by('id_komen','desc')->get('tb_komentar');
    	if($result->num_rows() > 0){
            return $result;
        }else{
            return $result;
        }
    }

    public function get_user($username){
    	$result = $this->db->where('username',$username)->get('tb_user');
    	if($result->num_rows() > 0){
            return $result;
        }else{
            return $result;
        }
    }

    public function insert_model($data){
    	$this->db->insert('tb_komentar',$data);
    }

    public function terbaru(){
    	return $this->db->order_by('id_artikel','desc')->get('db_artikel');
    }
	
	public function lainnya(){
		return $this->db->where("(n_kategori!='Penyakit' AND n_kategori!='Kesehatan Mental' AND n_kategori!='Sex & Relationship' AND n_kategori!='Parenting' AND n_kategori!='Hidup Sehat' AND n_kategori!='Bayi & Menyusui')")->get('db_artikel');
	}

	public function tampil_pagination($limit, $start)
	{
		return $this->db->get('db_artikel', $limit, $start);
	}

	public function countArtikel(){
		return $this->db->get('db_artikel')->num_rows();
	}

	public function delete_artikel($id){
		$this->db->where('id',$id);
		$this->db->delete('db_artikel');
	}

	public function update_data($where,$data,$tabel){
		$this->db->where($where);
		$this->db->update($tabel,$data);
	}

	public function tambah_data($tabel,$data){
		$this->db->insert($tabel,$data);
	}

	// public function save($upload){
 //    $data = array(
 //      'deskripsi'=>$this->input->post('input_deskripsi'),
 //      'nama_file' => $upload['file']['file_name'],
 //      'ukuran_file' => $upload['file']['file_size'],
 //      'tipe_file' => $upload['file']['file_type']
 //    );
    
 //    $this->db->insert('tb_gambar', $data);
	// }

	// public function get_gambar($id){
	// 	return $this->db->where('id_artikel',$id)->get('tb_gambar');
	// }

}                                           