<?php


class Categorias {
    //put your code here
        private $idcategorias;
        private $nombre;
        private $estado;
        
        function __construct() {
            
        }
        
        function getIdcategorias() {
            return $this->idcategorias;
        }

     
        function getNombre() {
            return $this->nombre;
        }


        function getEstado() {
            return $this->estado;
        }

      
        function setIdcategorias($idcategorias) {
            $this->idcategorias = $idcategorias;
        }

        function setNombre($nombre) {
            $this->nombre = $nombre;
        }

       

        function setEstado($estado) {
            $this->estado = $estado;
        }

    




}