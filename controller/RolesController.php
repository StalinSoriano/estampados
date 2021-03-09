<?php

require_once 'model/RolesModel.php';
require_once 'model/Roles.php';
require_once 'model/Personas.php';

class RolesController
{
    private $rolesModel;

    public function __construct()
    {
        $this->rolesModel = new RolesModel();

        session_start();
    }

    public function consulta()
    {
        if (isset($_SESSION['user']) && $_SESSION['user']->getIdroles()=='admin') {
            $rol = $this->rolesModel->listar();

                require 'view/html/header.php';
                require_once 'view/html/admin.php';
                require_once 'view/roles/rolesView.php';
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
      $rol= new Roles();
      $rol->setNombre($_REQUEST['nombre']);
      $rol->setEstado($_REQUEST['estado']);
    if (isset($_REQUEST['id']) && !empty($_REQUEST['id'])) {
        $rol->setIdroles($_REQUEST['id']);
        $this->rolesModel->actualizar($rol);  
    } else {
            $this->rolesModel->registrar($rol);
        }
        $rol = $this->rolesModel->listar();
                require 'view/html/header.php';
                require_once 'view/html/admin.php';
                require_once 'view/roles/rolesView.php';
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
         
          $rol = new Roles();
          if (isset($_REQUEST['id']) && !empty($_REQUEST['id'])) {

              $rol = $this->rolesModel->obtenerPorId($_REQUEST['id']);
          } 
          require 'view/html/header.php';
          require_once 'view/html/admin.php';
          require_once 'view/roles/rolesEditView.php';
          require_once 'view/html/footer.php';
          
      } else {
          header('location:index.php');
      }
  }
  public function eliminar()
    {
        if (isset($_SESSION['user']) && isset($_REQUEST['id']) && !empty($_REQUEST['id'])) {

            $this->rolesModel->eliminar($_REQUEST['id']);

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
