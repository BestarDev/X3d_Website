<?php
  /* 
   *  CORE CONTROLLER CLASS
   *  Loads Models & Views
   */
  class Controller {
    // Lets us load model from controllers
    public function model(){
      // Require model file
      require_once '../app/models/DB.php';
      // Instantiate model
      return new DB();
    }

    // Lets us load view from controllers
    public function view($url, $data = []){
      // Check for view file
      if(file_exists('../app/views/pages/'.$url.'.php')){
        // Require view file
        require_once '../app/views/pages/'.$url.'.php';
      } else {
        // No view exists
        die('View does not exist');
      }
    }
  }