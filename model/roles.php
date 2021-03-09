<?php


class Roles {
    //put your code here
        private $idroles;
        private $nombre;
        private $estado;
        
        function __construct() {
            
        }
        
        function getIdroles() {
            return $this->idroles;
        }

     
        function getNombre() {
            return $this->nombre;
        }


        function getEstado() {
            return $this->estado;
        }

      
        function setIdroles($idroles) {
            $this->idroles = $idroles;
        }

        function setNombre($nombre) {
            $this->nombre = $nombre;
        }

       

        function setEstado($estado) {
            $this->estado = $estado;
        }

    




}