<?php

class Dashboard_admin extends CI_controller{
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
        $this->load->view('templates-admin/header');
        $this->load->view('templates-admin/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('templates-admin/footer');
    }

    public function detail($id_barang){
        $data['barang'] = $this->model_barang->detail_barang($id_barang);
        $this->load->view('templates-admin/header');
        $this->load->view('templates-admin/sidebar');
        $this->load->view('admin/detail_barang',$data);
        $this->load->view('templates-admin/footer');
    }
}