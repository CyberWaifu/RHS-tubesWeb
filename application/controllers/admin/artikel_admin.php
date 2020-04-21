<?php

class Artikel_admin extends CI_Controller{
    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id')!='1'){
            $this->session->set_flashdata('Anda belum login','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Username atau password salah</strong> silakan masukan kembali username dan password
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
          redirect('auth/login');
        }
    }

    public function edit_page(){
        $data['dnone'] = 'd-none';
        $data['info'] = '';
        $data['artikel'] = $this->model_artikel->terbaru()->result();
        $this->load->view('templates-admin/header');
        $this->load->view('templates-admin/sidebar');
        $this->load->view('admin/data_artikel',$data);
        $this->load->view('templates-admin/footer');
    }


    public function detail_artikel($id){
        $result = $this->db->where('id_artikel',$id)->get('db_artikel');
        if($result->num_rows() > 0){
            return $result;
        }else{
            return false;
        }
    }


    public function tambah_page(){
        // NAMPILIN FORM BUAT ARTIKEL
        $data['jumlah'] = $this->db->get('tb_user')->num_rows();
        $data['user'] = $this->session->userdata('username');
        $this->load->view('templates-admin/header');
        $this->load->view('templates-admin/sidebar');
        $this->load->view('admin/tambah_artikel', $data);
        $this->load->view('templates-admin/footer');
    }

    public function editor($id){
        $data['artikel'] = $this->db->where('id_artikel',$id)->get('db_artikel')->row_array();
        $this->load->view('templates-admin/header');
        $this->load->view('templates-admin/sidebar');
        $this->load->view('admin/edit_artikel', $data);
        $this->load->view('templates-admin/footer');
    }

    public function tambah(){
        //KALO SUDAH FIX BUAT ARTIKEL
        $user = $this->session->userdata('nama');
        // $data['jumlah_artikel'] = $this->model_artikel->semua()->num_rows();
        $data['user'] = $this->model_artikel->get_user($user)->row_array();
        $n_kategori = $this->input->post('n_kategori');
        if($n_kategori=='Penyakit'){
            $k_kategori = 1;
        } else if($n_kategori=='Hidup Sehat'){
            $k_kategori = 3;
        } else if($n_kategori== 'Sex & Relationship'){
            $k_kategori = 4;
        } else if($n_kategori== 'Parenting'){
            $k_kategori = 6;
        } else if($n_kategori== 'Bayi & Menyusui'){
            $k_kategori = 5;
        } else if($n_kategori== 'Kesehatan Mental'){
            $k_kategori = 2;
        } else{
            $k_kategori = 10;
        }
        // $k_kategori = $this->input->post('k_kategori');
        $judul = $this->input->post('judul');
        $caption = $this->input->post('caption');
        $isi = $this->input->post('isi');
        $n_author = $this->input->post('n_author');
        $k_author = $this->input->post('k_author');
        $gambar = $this->input->post('gambar');
        $n_date = $this->input->post('n_date');
        $data = array(
            'id_artikel' => '',
            'n_kategori' => $n_kategori,
            'k_kategori' => $k_kategori,
            'judul' => $judul,
            'caption' => $caption,
            'isi' => $isi,
            'n_author' => $n_author,
            'k_author' => $k_author,
            'gambar' => $gambar,
            'n_date' => $n_date
        );
        
        $this->db->insert('db_artikel',$data);

        // redirect('/admin/artikel_admin/edit_page');
        $data['dnone'] = '';
        $data['info'] = 'Data telah diitambahkan';
        $data['artikel'] = $this->model_artikel->terbaru()->result();
        $this->load->view('templates-admin/header');
        $this->load->view('templates-admin/sidebar');
        $this->load->view('admin/data_artikel',$data);
        $this->load->view('templates-admin/footer');
        
    }

    public function update($id){
        //KALO SUDAH FIX BUAT ARTIKEL
        $user = $this->session->userdata('username');
        // $data['jumlah_artikel'] = $this->model_artikel->semua()->num_rows();
        $data['user'] = $this->model_artikel->get_user($user)->row_array();
        $n_kategori = $this->input->post('n_kategori');
        if($n_kategori=='Penyakit'){
            $k_kategori = 1;
        } else if($n_kategori=='Hidup Sehat'){
            $k_kategori = 3;
        } else if($n_kategori== 'Sex & Relationship'){
            $k_kategori = 4;
        } else if($n_kategori== 'Parenting'){
            $k_kategori = 6;
        } else if($n_kategori== 'Bayi & Menyusui'){
            $k_kategori = 5;
        } else if($n_kategori== 'Kesehatan Mental'){
            $k_kategori = 2;
        } else{
            $k_kategori = 10;
        }
        // $k_kategori = $this->input->post('k_kategori');
        $judul = $this->input->post('judul');
        $caption = $this->input->post('caption');
        $isi = $this->input->post('isi');
        $n_author = $this->input->post('n_author');
        $k_author = $this->input->post('k_author');
        $gambar = $this->input->post('gambar');
        $n_date = $this->input->post('n_date');
        $data = array(
            'id_artikel' => '',
            'n_kategori' => $n_kategori,
            'k_kategori' => $k_kategori,
            'judul' => $judul,
            'caption' => $caption,
            'isi' => $isi,
            'n_author' => $n_author,
            'k_author' => $k_author,
            'gambar' => $gambar,
            'n_date' => $n_date
        );
        $where = array (
            'id_artikel' => $id
        );
        
        $this->model_barang->update_data($where,$data,'db_artikel');

        // redirect('/admin/artikel_admin/edit_page');
        $data['dnone'] = '';
        $data['info'] = 'Data telah diitambahkan';
        $data['artikel'] = $this->model_artikel->terbaru()->result();
        $this->load->view('templates-admin/header');
        $this->load->view('templates-admin/sidebar');
        $this->load->view('admin/data_artikel',$data);
        $this->load->view('templates-admin/footer');
        
    }

    public function hapus($id){
        $this->db->delete('db_artikel', array('id_artikel'=>$id));
        $this->db->delete('tb_komentar', array('id_artikel'=>$id));
        
        $data['dnone'] = '';
        $data['info'] = 'Data telah dihapus';
        $data['artikel'] = $this->model_artikel->terbaru()->result();
        $this->load->view('templates-admin/header');
        $this->load->view('templates-admin/sidebar');
        $this->load->view('admin/data_artikel',$data);
        $this->load->view('templates-admin/footer');
    }


}