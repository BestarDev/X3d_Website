<?php
  // Load Config
  require_once 'config/config.php';

  // Autoload Core Classes
  spl_autoload_register(function ($className) {
    if($className == 'Core' || $className =='Controller')
      require_once 'utils/'. $className . '.php';
  });
