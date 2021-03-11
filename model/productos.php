<?php


class Productos {
    public $idproductos;
    public $nombre;
    public $precios;
    public $descripcion;
    public $foto;
    public $estado;
    public $idsubcategorias;
    public $idpersonas;
            function __construct() {
        
    }
    function getIdproductos() {
        return $this->idproductos;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getPrecios() {
        return $this->precios;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getFoto() {
        return $this->foto;
    }

    function getEstado() {
        return $this->estado;
    }

    function getIdsubcategorias() {
        return $this->idsubcategorias;
    }
    function getIdpersonas() {
        return $this->idpersonas;
    }


    function setIdproductos($idproductos) {
        $this->idproductos = $idproductos;
    }


    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setPrecios($precios) {
        $this->precios = $precios;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setIdsubcategorias($idsubcategorias) {
        $this->idsubcategorias = $idsubcategorias;
    }

    function setIdpersonas($idpersonas) {
        $this->idpersonas = $idpersonas;
    }


}