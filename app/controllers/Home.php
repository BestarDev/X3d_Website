<?php
  class Home extends Controller{
    public function __construct(){
      $this->model = $this->model();
    }

    public function index(){
      $rows = $this->model->getBrands();
      $data = [
        'brands' => $rows
      ];
      $this->view('home', ['title' => 'Welcome', 'description' => 'I called you.']);
    }

    public function error() {
      $this->view("error");
    }
  }