<?php

class Kategori extends CI_Controller{
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
    
    public function obat(){
        $data['obat'] = $this->model_kategori->data_obat()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pages/obat',$data);
        $this->load->view('templates/footer');
    }

    public function minuman(){
        $data['minuman'] = $this->model_kategori->data_minuman()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pages/minuman',$data);
        $this->load->view('templates/footer');
    }

    public function vitamin(){
        $data['vitamin'] = $this->model_kategori->data_vitamin()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pages/vitamin',$data);
        $this->load->view('templates/footer');
    }

    public function alatkesehatan(){
        $data['alatkesehatan'] = $this->model_kategori->data_alatkesehatan()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pages/alatkesehatan',$data);
        $this->load->view('templates/footer');
    }

}