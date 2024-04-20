<?php
  class Model extends Controller{
    public function __construct(){
      $this->model = $this->model();
    }

    // Load Model View
    public function index($type){
      if(!isset($type)) $type = "cocacola";
      $row = $this->model->getDetails($type);
      $choice = array_search($type, ["cocacola", "coke", "pepsi", "fanta", "soda"]);
      if($choice === false) {
        $this->view('error');
      } else {
        $data = [
          'data' => $row,
          'type' => $choice
        ];
        // Load Model View
        $this->view('model', $data);
      }
    }
  }