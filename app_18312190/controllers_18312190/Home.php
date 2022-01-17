<?php

class Home extends Controller{
    public function index(){
        $data['judul'] = 'Home';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('template_18312190/header',$data);
        $this->view('home_18312190/index',$data);
        $this->view('template_18312190/footer');
    }
}
