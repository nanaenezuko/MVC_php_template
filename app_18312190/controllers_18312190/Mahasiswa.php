<?php

class Mahasiswa extends Controller{
    public function index(){
        $data['judul'] = 'List Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMhs();
        $this->view('template_18312190/header',$data);
        $this->view('mahasiswa_18312190/index',$data);
        $this->view('template_18312190/footer');
    }

    public function detail($id=null){
        if ($id === null) {
          $this->index();
        } else {
          $data['mhs'] = $this->model('Mahasiswa_model')->getMhsById($id);
          if ($data['mhs'] != null) {
            $data['judul'] = 'Detail Mahasiswa';
            $this->view('template_18312190/header',$data);
            $this->view('mahasiswa_18312190/detail',$data);
            $this->view('template_18312190/footer');
          } else {
            $this->index();
          }
        }
    }

    public function tambah(){
        if($this->model('Mahasiswa_model')->tambahDataMhs($_POST) > 0){
            Flasher::setFlash('berhasil','ditambahkan','success');
            header('Location: '.BASEURL.'/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal','ditambahkan','danger');
            header('Location: '.BASEURL.'/mahasiswa');
            exit;
        }
    }

    public function hapus($id){
        if($this->model('Mahasiswa_model')->hapusDataMhs($id) > 0){
            Flasher::setFlash('berhasil','dihapus','success');
            header('Location: '.BASEURL.'/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal','dihapus','danger');
            header('Location: '.BASEURL.'/mahasiswa');
            exit;
        }
    }

    public function getubah(){
        echo json_encode($this->model('Mahasiswa_model')->getMhsById($_POST['id']));
    }

    public function cari(){
        $data['judul'] = 'List Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->cariDataMhs();
        $this->view('template_18312190/header',$data);
        $this->view('mahasiswa_18312190/index',$data);
        $this->view('template_18312190/footer');
    }

    public function ubah(){
        if($this->model('Mahasiswa_model')->ubahDataMhs($_POST) > 0){
            Flasher::setFlash('berhasil','diubah','success');
            header('Location: '.BASEURL.'/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal','diubah','danger');
            header('Location: '.BASEURL.'/mahasiswa');
            exit;
        }
    }
}
