<?php

class Dashboard extends CI_controller{

    public function index(){
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pages/dashboard');
        $this->load->view('templates/footer');
    }
}