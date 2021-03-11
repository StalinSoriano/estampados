<?php

require_once 'model/PersonasModel.php';
require_once 'model/Personas.php';
require_once 'model/RolesModel.php';
require_once 'model/Roles.php';

class PersonasController
{
    private $personasModel;
    private $rolesModel;

    public function __construct()
    {
        $this->personasModel = new PersonasModel();
        $this->rolesModel = new rolesModel();

        session_start();
    }

    public function filtro()
    {
        if (isset($_SESSION['user'])) {
            require 'view/html/header.php';

                require_once 'view/html/catalogo.php';

                require_once 'view/html/footer.php';
        } else {
            $per = $this->personasModel->filtrarLogin($_REQUEST['usuario'],$_REQUEST['pass']);
            
            if (!empty($per)) {
              $_SESSION['user'] = $per[0];
                    

              if( $_SESSION['user']->getIdroles()!='admin'){
                  require 'view/html/header.php';

              require_once 'view/html/catalogo.php';

              require_once 'view/html/footer.php';
              }else{
                  $this->consulta();
              }
                    
               
             
            } else {
                require 'view/html/header.php';
                require_once 'view/html/login.php';
                require_once 'view/html/footer.php';
                echo '<script>alertify.error("usuario y/o contraseñas erroneos"); </script>';
            }
        }
    }

    public function logout()
    {

      if(isset($_SESSION['user'])){
        session_destroy();
       
        header("location:index.php");
      }
    }

    public function admin()
    {

      if(isset($_SESSION['user']) && $_SESSION['user']->getIdroles()=='admin'){
        $this->consulta();
       
      }else{
        header("location:index.php");
      }
    }

    
    public function consulta()
    {
        if (isset($_SESSION['user']) && $_SESSION['user']->getIdroles()=='admin') {
            $per = $this->personasModel->listar();

                require 'view/html/header.php';
                require_once 'view/html/admin.php';
                require_once 'view/personas/personasView.php';
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
      $per= new Personas();
      $per->setNombres($_REQUEST['nombres']);
      $per->setApellidos($_REQUEST['apellidos']);
      $per->setCedula($_REQUEST['cedula']);
      $per->setTelefono($_REQUEST['telefono']);
      $per->setEmail($_REQUEST['email']);
      $per->setUsuario($_REQUEST['usuario']);
      $passU=$_REQUEST['pass'];
      $cifrado=password_hash($passU,PASSWORD_DEFAULT);
      $per->setPass($cifrado);
      $per->setGenero($_REQUEST['genero']);
      $per->setEstado($_REQUEST['estado']);
      $per->setIdroles($_REQUEST['roles']);
    if (isset($_REQUEST['id']) && !empty($_REQUEST['id'])) {
        $per->setIdpersonas($_REQUEST['id']);
        $this->personasModel->actualizar($per);  
    } else {
            $this->personasModel->registrar($per);
        }
        $per = $this->personasModel->listar();
                require 'view/html/header.php';
                require_once 'view/html/admin.php';
                require_once 'view/personas/personasView.php';
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
         
          $per = new Personas();
          if (isset($_REQUEST['id']) && !empty($_REQUEST['id'])) {

              $per = $this->personasModel->obtenerPorId($_REQUEST['id']);
          } 
          $rol=$this->rolesModel->listar();
          require 'view/html/header.php';
          require_once 'view/html/admin.php';
          require_once 'view/personas/personasEditView.php';
          require_once 'view/html/footer.php';
          
      } else {
          header('location:index.php');
      }
  }
  public function eliminar()
    {
        if (isset($_SESSION['user']) && isset($_REQUEST['id']) && !empty($_REQUEST['id'])) {

            $this->personasModel->eliminar($_REQUEST['id']);

            //var_dump($per); 
            $this->consulta();
            echo '<script>alertify.success ("Dato eliminado correctamente"); </script>';
        } else {
            require 'view/html/header.php';
            require_once 'view/html/body.php';
            require_once 'view/html/footer.php';
        }
    }

    public function filtrarPersonas()
{   
  
  
  $per = $this->personasModel->filtrar($_REQUEST['valor']);

  echo json_encode($per);
}
 
}
