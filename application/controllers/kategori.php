<?php

class Kategori extends CI_Controller{

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