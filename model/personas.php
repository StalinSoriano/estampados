<?php


class Personas {
    //put your code here
        private $idpersonas;
        private $nombres;
        private $apellidos;
        private $cedula;
        private $telefono;
        private $email;
        private $usuario;
        private $pass;
        private $genero;
        private $estado;
        private $idroles;
        
        function __construct() {
            
        }
        
        function getIdpersonas() {
            return $this->idpersonas;
        }

        function getNombres() {
            return $this->nombres;
        }

        function getApellidos() {
            return $this->apellidos;
        }

        function getCedula() {
            return $this->cedula;
        }

        function getTelefono() {
            return $this->telefono;
        }

        function getEmail() {
            return $this->email;
        }

        function getUsuario() {
            return $this->usuario;
        }

        function getPass() {
            return $this->pass;
        }

        function getGenero() {
            return $this->genero;
        }

        function getEstado() {
            return $this->estado;
        }

        function getIdroles() {
            return $this->idroles;
        }

        function setIdpersonas($idpersonas) {
            $this->idpersonas = $idpersonas;
        }

        function setNombres($nombres) {
            $this->nombres = $nombres;
        }

        function setApellidos($apellidos) {
            $this->apellidos = $apellidos;
        }

        function setCedula($cedula) {
            $this->cedula = $cedula;
        }

        function setTelefono($telefono) {
            $this->telefono = $telefono;
        }

        function setEmail($email) {
            $this->email = $email;
        }

        function setUsuario($usuario) {
            $this->usuario = $usuario;
        }

        function setPass($pass) {
            $this->pass = $pass;
        }

        function setGenero($genero) {
            $this->genero = $genero;
        }

        function setEstado($estado) {
            $this->estado = $estado;
        }

        function setIdroles($idroles) {
            $this->idroles = $idroles;
        }






}