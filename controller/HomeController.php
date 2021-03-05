<?php
require_once 'model/Personas.php';
class HomeController {
  

  public function __construct() {
    session_start();
  }
  public function body()
{

  require 'view/html/header.php';
 
  require_once 'view/html/body.php';

require_once 'view/html/footer.php';
}
public function login()
{

  if(isset($_SESSION['user'])){
    require 'view/html/header.php';
 
    require_once 'view/html/body.php';
  
  require_once 'view/html/footer.php';
  }else{
    require 'view/html/header.php';
 
  require_once 'view/html/login.php';

require_once 'view/html/footer.php';
  }
}
public function catalogo()
{

  require 'view/html/header.php';
 
  require_once 'view/html/catalogo.php';

require_once 'view/html/footer.php';
}


}


