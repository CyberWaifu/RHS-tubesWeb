<?php

class Daftar extends CI_Controller{
    

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
    
    public function index(){
        $data['praktik'] = $this->model_daftar->tampil_praktik()->result();
        $this->load->view('templates-admin/header');
        $this->load->view('templates-admin/sidebar');
        $this->load->view('admin/buatpraktek',$data);
        $this->load->view('templates-admin/footer');
    }

    public function tambah_praktik(){
        $nama_dokter    =   $this->input->post('nama_dokter');
        $jenis_dokter   =   $this->input->post('jenis_dokter');
        $tgl_praktik    =   $this->input->post('tgl_praktik');

        $data = array(
            'nama_dokter' => $nama_dokter,
            'jenis_dokter' => $jenis_dokter,
            'tgl_praktik'    => $tgl_praktik
        );

        $this->model_daftar->tambah_praktik($data,'tb_praktik');
        redirect('admin/daftar/index');
    }

    public function pasien($id_praktik){
        $data['praktik'] = $this->model_daftar->pasien($id_praktik);
        $this->load->view('templates-admin/header');
        $this->load->view('templates-admin/sidebar');
        $this->load->view('admin/pasien',$data);
        $this->load->view('templates-admin/footer');
    }

    public function tampil_praktik(){
        $data['praktik'] = $this->model_daftar->tampil_praktik()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pages/daftar_praktik',$data);
        $this->load->view('templates/footer');
    }

    public function daftar_berobat(){
        $data['praktik'] = $this->model_daftar->tampil_praktik()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pages/daftar_berobat',$data);
        $this->load->view('templates/footer');
    }
    

    public function berobat(){
        $id_praktik = $this->input->post('id_praktik');
        $nama_pasien  =   $this->input->post('nama_pasien');
        $tlp_pasien   =   $this->input->post('tlp_pasien');
        $keluhan  =   $this->input->post('keluhan');

        $data = array(
            'id_praktik' => $id_praktik,
            'nama_pasien' => $nama_pasien,
            'tlp_pasien' => $tlp_pasien,
            'keluhan'    => $keluhan
        );

        $this->model_daftar->berobat($data,'tb_pasien');
        redirect('admin/daftar/index');
    }

}