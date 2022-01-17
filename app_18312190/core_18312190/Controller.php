<?php

class Controller{
    public function view($view, $data = []){
        require_once '../app_18312190/views_18312190/'.$view.'.php';
    }

    public function model($model){
        require_once '../app_18312190/models_18312190/'.$model.'.php';
        return new $model;
    }
}
