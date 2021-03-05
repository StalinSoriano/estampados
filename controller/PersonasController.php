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
                require 'view/html/header.php';

                require_once 'view/html/catalogo.php';

                require_once 'view/html/footer.php';
               
             
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

        session_destroy();
       
       header("location:index.php");
    }
}
