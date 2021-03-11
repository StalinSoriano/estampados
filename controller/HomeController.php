<?php
require_once 'model/Personas.php';
require_once 'model/Categorias.php';
require_once 'model/CategoriasModel.php';
require_once 'model/Subcategorias.php';
require_once 'model/SubcategoriasModel.php';
require_once 'model/Productos.php';
require_once 'model/ProductosModel.php';
class HomeController {
  
  
  private $productosModel;
    private $categoriasModel;
    private $subcategoriasModel;
  public function __construct() {
    $this->productosModel = new ProductosModel();
    $this->categoriasModel = new CategoriasModel();
    $this->subcategoriasModel = new SubcategoriasModel();
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


