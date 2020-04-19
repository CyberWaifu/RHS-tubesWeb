<?php

class Data_barang extends CI_Controller{
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
    
    public function index()
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $data['length'] = $this->model_barang->count_rows()->num_rows();
        $this->load->view('templates-admin/header');
        $this->load->view('templates-admin/sidebar');
        $this->load->view('admin/data_barang',$data);
        $this->load->view('templates-admin/footer');
    }

    public function tambah_aksi()
    {
        $nama_barang    =   $this->input->post('nama_barang');
        $keterangan    =   $this->input->post('keterangan');
        $kategori    =   $this->input->post('kategori');
        $harga    =   $this->input->post('harga');
        $stok    =   $this->input->post('stok');
        $gambar    =   $_FILES['gambar']['name'];

        if ($gambar =''){
        }else{
            $config ['upload_path'] = './uploads';
            $config ['allowed_types'] = 'jpg|jpeg|gif|png';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('gambar')){
                echo "gagal mengupload gambar";
            }else{
                $gambar=$this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_barang' => $nama_barang,
            'keterangan'  => $keterangan,
            'kategori'    => $kategori,
            'harga'       => $harga,
            'stok'        => $stok,
            'gambar'      => $gambar
        );

        $this->model_barang->tambah_barang($data,'tb_barang');
        redirect('admin/data_barang/index');
    }

    public function edit($id){
        $where = array('id_barang' =>$id);
        $data['barang'] = $this->model_barang->edit_barang($where,'tb_barang')->result();
        $this->load->view('templates-admin/header');
        $this->load->view('templates-admin/sidebar');
        $this->load->view('admin/edit_barang',$data);
        $this->load->view('templates-admin/footer');
    }

    public function update(){
        $id = $this->input->post('id_barang');
        $nama_barang = $this->input->post('nama_barang');
        $keterangan = $this->input->post('keterangan');
        $kategori = $this->input->post('kategori');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');

        $data = array(
            'nama_barang' => $nama_barang,
            'keterangan'  => $keterangan,
            'kategori'    => $kategori,
            'harga'       => $harga,
            'stok'        => $stok
        );

        $where = array(
            'id_barang' => $id
        );

        $this->model_barang->update_data($where,$data,'tb_barang');
        redirect('admin/data_barang/index');
    }

    public function hapus($id){
        $where = array('id_barang' => $id);
        $this->model_barang->hapus_data($where,'tb_barang');
        redirect('admin/data_barang/index');
        
    }
}