<?php

class Dashboard extends CI_controller{
    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id') != '2'){
            $this->session->set_flashdata('Anda belum login','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Username atau password salah</strong> silakan masukan kembali username dan password
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
          redirect('auth/login');
        }
    }

    public function home(){
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pages/mainmenu');
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
        redirect('dashboard/semua');
    }

    public function detail_keranjang(){
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pages/keranjang');
        $this->load->view('templates/footer');
    }

    public function hapus_keranjang(){
        $this->cart->destroy();
        redirect('dashboard/semua');
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

    public function semua(){
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pages/dashboard', $data);
        $this->load->view('templates/footer');
    }
        
}