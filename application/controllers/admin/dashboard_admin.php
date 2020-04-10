<?php

class Dashboard_admin extends CI_controller{
    public function index()
    {
        $this->load->view('templates-admin/header');
        $this->load->view('templates-admin/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('templates-admin/footer');
    }
}