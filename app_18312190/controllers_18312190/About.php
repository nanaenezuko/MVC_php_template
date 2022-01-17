<?php

class About extends Controller{
    public function index($nama='Bagas Triananda', $jurusan='Informatika'){
        $data['nama'] = $nama;
        $data['jurusan'] = $jurusan;
        $data['judul'] = 'About';
        $this->view('template_18312190/header',$data);
        $this->view('about_18312190/index', $data);
        $this->view('template_18312190/footer');
    }

    public function page(){
        $data['judul'] = 'Pages';
        $this->view('template_18312190/header',$data);
        $this->view('about_18312190/page');
        $this->view('template_18312190/footer');
    }
}
