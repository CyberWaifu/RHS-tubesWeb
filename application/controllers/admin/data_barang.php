<?php

class Data_barang extends CI_Controller{
    public function index()
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();
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
}