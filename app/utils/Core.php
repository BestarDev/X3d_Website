<?php
  /* 
   *  APP CORE CLASS
   *  Creates URL & Loads Core Controller
   *  URL Format - /controller/method/param1/param2
   */
  class Core {
    // Set Defaults
    protected $currentController = 'Home'; // Default controller
    protected $currentMethod = 'index'; // Default method
    protected $params = []; // Set initial empty params array

    public function __construct(){
      $url = $this->getUrl();

      // Look in controllers folder for controller
      if(isset($url[0]) && file_exists('../app/controllers/'.ucwords($url[0]).'.php')){
        // If exists, set as controller
        $this->currentController = ucwords($url[0]);
        // Unset 0 index
        // unset($url);
      } else if(isset($url[0])){
        $this->currentMethod = 'error';
      }

      // Check if second part of url is set (method)
      if(isset($url[1])){
        // if(isset($url[0])) unset($url[0]);
        $this->params = [$url[1]];
      }

      if($this->currentController == 'Model' && !isset($this->params[0])) $this->params = array('cocacola');

      // Require the current controller
      require_once('../app/controllers/' . $this->currentController . '.php');

      // Instantiate the current controller
      $this->currentController = new $this->currentController;
      
      // Call a callback with an array of parameters
      call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    // Construct URL From $_GET['url']
    public function getUrl(){
        if(isset($_GET['url'])){
          $url = rtrim($_GET['url'], '/');
          $url = filter_var($url, FILTER_SANITIZE_URL);
          $url = explode('/', $url);
          // if(isset($url[0]))
            return $url;
          // return 'home';
        }
        return [];
    }
  }