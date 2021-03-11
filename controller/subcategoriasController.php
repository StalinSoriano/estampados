<?php

require_once 'model/SubcategoriasModel.php';
require_once 'model/Subcategorias.php';
require_once 'model/CategoriasModel.php';
require_once 'model/Categorias.php';
require_once 'model/Personas.php';

class SubcategoriasController
{
    private $subcategoriasModel;
    private $categoriasModel;

    public function __construct()
    {
        $this->subcategoriasModel = new SubcategoriasModel();
        $this->categoriasModel = new CategoriasModel();

        session_start();
    }

    public function consulta()
    {
        if (isset($_SESSION['user']) &&($_SESSION['user']->getIdroles()=='admin' || $_SESSION['user']->getIdroles()=='trabajador')) {
            $sub = $this->subcategoriasModel->listar();

                require 'view/html/header.php';
                require_once 'view/html/admin.php';
                require_once 'view/subcategorias/subcategoriasView.php';
                require_once 'view/html/footer.php';
        } else {
            require 'view/html/header.php';
            require_once 'view/html/body.php';
            require_once 'view/html/footer.php';
        }
    }
    public function guardar()
{

  
    if (isset($_SESSION['user']) && ($_SESSION['user']->getIdroles()=='admin' || $_SESSION['user']->getIdroles()=='trabajador')) {
      $sub= new Subcategorias();
      $sub->setNombre($_REQUEST['nombre']);
      $sub->setEstado($_REQUEST['estado']);
      $sub->setIdcategorias($_REQUEST['categoria']);
    if (isset($_REQUEST['id']) && !empty($_REQUEST['id'])) {
        $sub->setIdsubcategorias($_REQUEST['id']);
        $this->subcategoriasModel->actualizar($sub);  
    } else {
            $this->subcategoriasModel->registrar($sub);
        }
        $sub = $this->subcategoriasModel->listar();
                require 'view/html/header.php';
                require_once 'view/html/admin.php';
                require_once 'view/subcategorias/subcategoriasView.php';
                require_once 'view/html/footer.php';
            echo '<script>alertify.success ("Dato cargados correctamente"); </script>';
   }else {
    require 'view/html/header.php';
    require_once "view/html/body.php";
    require_once 'view/html/footer.php';
   }
  }
  public function mostrarActividad()
  {
      if (isset($_SESSION['user']) &&($_SESSION['user']->getIdroles()=='admin' || $_SESSION['user']->getIdroles()=='trabajador')) {
         
          $sub = new Subcategorias();
          if (isset($_REQUEST['id']) && !empty($_REQUEST['id'])) {

              $sub = $this->subcategoriasModel->obtenerPorId($_REQUEST['id']);
          } 
          $cat=$this->categoriasModel->listar();
          require 'view/html/header.php';
          require_once 'view/html/admin.php';
          require_once 'view/subcategorias/subcategoriasEditView.php';
          require_once 'view/html/footer.php';
          
      } else {
          header('location:index.php');
      }
  }
  public function eliminar()
    {
        if (isset($_SESSION['user']) && isset($_REQUEST['id']) && !empty($_REQUEST['id'])) {

            $this->subcategoriasModel->eliminar($_REQUEST['id']);

            //var_dump($per); 
            $this->consulta();
            echo '<script>alertify.success ("Dato eliminado correctamente"); </script>';
        } else {
            require 'view/html/header.php';
            require_once 'view/html/body.php';
            require_once 'view/html/footer.php';
        }
    }
  
}
