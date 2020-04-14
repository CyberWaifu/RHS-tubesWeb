<?php

class Invoice extends CI_Controller{

    public function index(){
        $data['invoice'] = $this->model_invoice->tampil_data();
        $this->load->view('templates-admin/header');
        $this->load->view('templates-admin/sidebar');
        $this->load->view('admin/invoice',$data);
        $this->load->view('templates-admin/footer');
    }

}