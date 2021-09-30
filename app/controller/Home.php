<?php

class Home extends Controller{
    public function index($nama = 'Hanif')
    {
        $data['nama'] = $nama;
        $data['judul'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}