<?php

class Dashboard_admin extends CI_controller{
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