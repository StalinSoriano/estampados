<?php


class Subcategorias {
    //put your code here
        private $idsubcategorias;
        private $nombre;
        private $estado;
        private $idcategorias;
        
        function __construct() {
            
        }
        
        function getIdsubcategorias() {
            return $this->idsubcategorias;
        }

     
        function getNombre() {
            return $this->nombre;
        }


        function getEstado() {
            return $this->estado;
        }

        function getIdcategorias() {
            return $this->idcategorias;
        }

      
        function setIdsubcategorias($idsubcategorias) {
            $this->idsubcategorias = $idsubcategorias;
        }

        function setNombre($nombre) {
            $this->nombre = $nombre;
        }

       

        function setEstado($estado) {
            $this->estado = $estado;
        }

        function setIdcategorias($idcategorias) {
            $this->idcategorias = $idcategorias;
        }
    




}