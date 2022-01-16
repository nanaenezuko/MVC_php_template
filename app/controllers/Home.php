<?php

class Home extends Controller {
  public function index(){
    $data['name'] = "Bagas Triananda";
    $this->view("index", $data);
  }
}

 ?>
