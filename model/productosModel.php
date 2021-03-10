<?php 
require_once 'model/conexion.php';
require_once 'model/Productos.php';
class ProductosModel
{
	private $db;
	public function __construct() {
        try {
            $this->db = Conexion::getConexion();
        } catch (Exception $e) {
            die($e->getTrace());
            die($e->getMessage());
        }
    }

    public function listar(){
        try {
            /* Sentencias preparadas */
            $sentencia = $this->db->prepare("select p.idproductos,p.nombre,p.precios,p.descripcion,p.foto,p.estado,s.nombre as idsubcategorias from productos as p inner join subcategorias as s on 
        p.idsubcategorias=s.idsubcategorias");
            /* Ejecutar la sentencia */
            $sentencia->execute(array());
            /* Obtener los resultado */
            $resultset = $sentencia->fetchAll(PDO::FETCH_CLASS, 'Productos');
          
            /* retornar los resultados */
            return $resultset;
        } catch (Exception $e) {
                //die($e->getTrace());
            die($e->getMessage());
        }
    }
    public function filtrar($valor){
        try {
            
            
            /* Sentencias preparadas */
            $sentencia = $this->db->prepare("select p.idproductos,p.nombre,p.precios,p.descripcion,p.foto,p.estado,s.nombre as idsubcategorias from productos as p inner join subcategorias as s on 
        p.idsubcategorias=s.idsubcategorias where p.nombre like '%$valor%' or s.nombre like '%$valor%'");
            /* Ejecutar la sentencia */
            $sentencia->execute(array());
            /* Obtener los resultado */
            $resultset = $sentencia->fetchAll(PDO::FETCH_CLASS, 'Productos');
          
            /* retornar los resultados */
            return $resultset;
        } catch (Exception $e) {
                //die($e->getTrace());
            die($e->getMessage());
        }
    }
    public function registrar(Productos $pro){
        try {
            /* Sentencias preparadas */
            $sentencia = $this->db->prepare("insert  into productos ( nombre,precios,descripcion,foto,estado,idsubcategorias ) values (?,?,?,?,?,?)");
            /* Ejecutar la sentencia */
            $sentencia->execute(array($pro->getNombre(),$pro->getPrecios(),$pro->getDescripcion(),$pro->getFoto(),$pro->getEstado(),$pro->getIdsubcategorias()));
        } catch (Exception $e) {
                //die($e->getTrace());
            die($e->getMessage());
        }
    }
    public function actualizar(Productos $pro){
        
        try {
            if($pro->getFoto()!=null){  
                /* Sentencias preparadas */
            $sentencia = $this->db->prepare("update productos set nombre=?,precios=?,descripcion=?,foto=?,estado=?,idsubcategorias=? where idproductos=?");
            /* Ejecutar la sentencia */
            $sentencia->execute(array($pro->getNombre(),$pro->getPrecios(),$pro->getDescripcion(),$pro->getFoto(),$pro->getEstado(),$pro->getIdsubcategorias(),$pro->getIdproductos()));
            }else{
                    /* Sentencias preparadas */
                    $sentencia = $this->db->prepare("update productos set nombre=?,precios=?,descripcion=?,estado=?,idsubcategorias=? where idproductos=?");
                    /* Ejecutar la sentencia */
                    $sentencia->execute(array($pro->getNombre(),$pro->getPrecios(),$pro->getDescripcion(),$pro->getEstado(),$pro->getIdsubcategorias(),$pro->getIdproductos()));
              
            }
            
        } catch (Exception $e) {
                //die($e->getTrace());
            die($e->getMessage());
        }
    }
    public function eliminar($id) {
        try {
             /* Sentencias preparadas */
             $sentencia = $this->db->prepare("delete from productos where idproductos=?");
             /* Ejecutar la sentencia */
             $sentencia->execute(array($id));
             
         } catch (Exception $e) {
 
             die($e->getMessage());
         }
     }
     public function obtenerPorId($id) {
        try {
            /* Sentencias preparadas */
            $sentencia = $this->db->prepare("select * from productos where idproductos=?");/* Ejecutar la sentencia */
            $sentencia->execute(array($id));
            /* Obtener los resultado */
            $resultset = $sentencia->fetchAll(PDO::FETCH_CLASS, 'Productos');
            /* retornar los resultados */
            return $resultset[0];
        } catch (Exception $e) {
            die($e->getTrace());
            die($e->getMessage());
        }
    }

     
    
}