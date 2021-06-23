<?php
  // Load Config
  require_once 'config/config.php';
  require_once 'config/constants.php';
  require_once 'helpers/all.php';
  require_once APPROOT.'/models/Config.php';

  // Autoload Core Libraries
  spl_autoload_register(function($className){
    require_once 'libraries/' . $className . '.php';
  });
  
