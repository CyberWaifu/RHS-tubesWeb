<?php

class Dashboard extends CI_controller{

    public function index(){
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pages/dashboard', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_ke_keranjang($id){
        $barang = $this->model_barang->find($id);

        $data = array(
            'id'      => $barang->id_barang,
            'qty'     => 1,
            'price'   => $barang->harga,
            'name'    => $barang->nama_barang, 
        );
        
        $this->cart->insert($data);
        redirect('dashboard');
    }

    public function detail_keranjang(){
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pages/keranjang');
        $this->load->view('templates/footer');
    }

    public function hapus_keranjang(){
        $this->cart->destroy();
        redirect('dashboard/index');
    }

    public function pembayaran(){
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pages/pembayaran');
        $this->load->view('templates/footer');
    }

    public function proses_pesanan(){
        $is_processed = $this->model_invoice->index();
            if($is_processed){
                $this->cart->destroy();
                $this->load->view('templates/header');
                $this->load->view('templates/sidebar');
                $this->load->view('pages/proses_pesanan');
                $this->load->view('templates/footer');
            }else{
                echo "pesanan gagal di proses";
            }
    }

    public function detail($id_barang){
        $data['barang'] = $this->model_barang->detail_barang($id_barang);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pages/detail_barang',$data);
        $this->load->view('templates/footer');
    }
        
}