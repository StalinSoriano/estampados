<?php

class HomeController {
  

  public function __construct() {

  }
  public function body()
{

  require 'view/html/header.php';
 
  require_once 'view/html/body.php';

require_once 'view/html/footer.php';
}
public function login()
{

  require 'view/html/header.php';
 
  require_once 'view/html/login.php';

require_once 'view/html/footer.php';
}

}


