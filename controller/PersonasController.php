<?php

require_once 'model/PersonasModel.php';
require_once 'model/Personas.php';

class PersonasController
{
    private $personasModel;

    public function __construct()
    {
        $this->personasModel = new PersonasModel();

        session_start();
    }

    public function filtro()
    {
        if (isset($_SESSION['user'])) {
            require 'view/html/header.php';

                require_once 'view/html/catalogo.php';

                require_once 'view/html/footer.php';
        } else {
            $per = $this->personasModel->filtrarLogin($_REQUEST['usuario'], $_REQUEST['pass']);
            if (!empty($per)) {
                $_SESSION['user'] = $per[0];
                

                if( $_SESSION['user']->getIdroles()!='admin'){
                    require 'view/html/header.php';

                require_once 'view/html/catalogo.php';

                require_once 'view/html/footer.php';
                }else{
                    require 'view/html/header.php';

                require_once 'view/html/admin.php';
                

                require_once 'view/html/footer.php';
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
        require 'view/html/header.php';

        require_once 'view/html/admin.php';
        require_once 'view/roles/rolesView.php';

        require_once 'view/html/footer.php';
       
      }else{
        header("location:index.php");
      }
    }
 
}
