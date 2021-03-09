<?php 
require_once 'model/conexion.php';
require_once 'model/Categorias.php';
class CategoriasModel
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
            $sentencia = $this->db->prepare("select * from categorias");
            /* Ejecutar la sentencia */
            $sentencia->execute(array());
            /* Obtener los resultado */
            $resultset = $sentencia->fetchAll(PDO::FETCH_CLASS, 'Categorias');
          
            /* retornar los resultados */
            return $resultset;
        } catch (Exception $e) {
                //die($e->getTrace());
            die($e->getMessage());
        }
    }
    public function registrar(Categorias $cat){
        try {
            /* Sentencias preparadas */
            $sentencia = $this->db->prepare("insert  into categorias ( nombre,estado ) values (?,?)");
            /* Ejecutar la sentencia */
            $sentencia->execute(array($cat->getNombre(),$cat->getEstado()));
        } catch (Exception $e) {
                //die($e->getTrace());
            die($e->getMessage());
        }
    }
    public function actualizar(Categorias $cat){
        try {
            /* Sentencias preparadas */
            $sentencia = $this->db->prepare("update categorias set nombre=?,estado=? where idcategorias=?");
            /* Ejecutar la sentencia */
            $sentencia->execute(array($cat->getNombre(),$cat->getEstado(),$cat->getIdcategorias()));
        } catch (Exception $e) {
                //die($e->getTrace());
            die($e->getMessage());
        }
    }
    public function eliminar($id) {
        try {
             /* Sentencias preparadas */
             $sentencia = $this->db->prepare("delete from categorias where idcategorias=?");
             /* Ejecutar la sentencia */
             $sentencia->execute(array($id));
             
         } catch (Exception $e) {
 
             die($e->getMessage());
         }
     }
     public function obtenerPorId($id) {
        try {
            /* Sentencias preparadas */
            $sentencia = $this->db->prepare("select * from categorias where idcategorias=?");/* Ejecutar la sentencia */
            $sentencia->execute(array($id));
            /* Obtener los resultado */
            $resultset = $sentencia->fetchAll(PDO::FETCH_CLASS, 'Categorias');
            /* retornar los resultados */
            return $resultset[0];
        } catch (Exception $e) {
            die($e->getTrace());
            die($e->getMessage());
        }
    }

     
    
}