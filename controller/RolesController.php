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

 
}
