<?php

require_once 'model/CategoriasModel.php';
require_once 'model/Categorias.php';
require_once 'model/Personas.php';

class CategoriasController
{
    private $categoriasModel;

    public function __construct()
    {
        $this->categoriasModel = new CategoriasModel();

        session_start();
    }

    public function consulta()
    {
        if (isset($_SESSION['user']) && $_SESSION['user']->getIdroles()=='admin') {
            $cat = $this->categoriasModel->listar();

                require 'view/html/header.php';
                require_once 'view/html/admin.php';
                require_once 'view/categorias/categoriasView.php';
                require_once 'view/html/footer.php';
        } else {
            require 'view/html/header.php';
            require_once 'view/html/catalogo.php';
            require_once 'view/html/footer.php';
        }
    }
    public function guardar()
{

  
    if (isset($_SESSION['user']) && $_SESSION['user']->getIdroles()=='admin') {
      $cat= new Categorias();
      $cat->setNombre($_REQUEST['nombre']);
      $cat->setEstado($_REQUEST['estado']);
    if (isset($_REQUEST['id']) && !empty($_REQUEST['id'])) {
        $cat->setIdcategorias($_REQUEST['id']);
        $this->categoriasModel->actualizar($cat);  
    } else {
            $this->categoriasModel->registrar($cat);
        }
        $cat = $this->categoriasModel->listar();
                require 'view/html/header.php';
                require_once 'view/html/admin.php';
                require_once 'view/categorias/categoriasView.php';
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
      if (isset($_SESSION['user']) && $_SESSION['user']->getIdroles() == 'admin') {
         
          $cat = new Categorias();
          if (isset($_REQUEST['id']) && !empty($_REQUEST['id'])) {

              $cat = $this->categoriasModel->obtenerPorId($_REQUEST['id']);
          } 
          require 'view/html/header.php';
          require_once 'view/html/admin.php';
          require_once 'view/categorias/categoriasEditView.php';
          require_once 'view/html/footer.php';
          
      } else {
          header('location:index.php');
      }
  }
  public function eliminar()
    {
        if (isset($_SESSION['user']) && isset($_REQUEST['id']) && !empty($_REQUEST['id'])) {

            $this->categoriasModel->eliminar($_REQUEST['id']);

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
