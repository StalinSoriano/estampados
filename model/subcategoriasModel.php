<?php 
require_once 'model/conexion.php';
require_once 'model/Subcategorias.php';
class SubcategoriasModel
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
            $sentencia = $this->db->prepare("select s.idsubcategorias, s.nombre,s.estado,c.nombre as idcategorias from subcategorias as s inner join categorias as c on c.idcategorias=s.idcategorias");
            /* Ejecutar la sentencia */
            $sentencia->execute(array());
            /* Obtener los resultado */
            $resultset = $sentencia->fetchAll(PDO::FETCH_CLASS, 'Subcategorias');
          
            /* retornar los resultados */
            return $resultset;
        } catch (Exception $e) {
                //die($e->getTrace());
            die($e->getMessage());
        }
    }
    public function registrar(Subcategorias $sub){
        try {
            /* Sentencias preparadas */
            $sentencia = $this->db->prepare("insert  into subcategorias ( nombre,estado,idcategorias ) values (?,?,?)");
            /* Ejecutar la sentencia */
            $sentencia->execute(array($sub->getNombre(),$sub->getEstado(),$sub->getIdcategorias()));
        } catch (Exception $e) {
                //die($e->getTrace());
            die($e->getMessage());
        }
    }
    public function actualizar(Subcategorias $sub){
        try {
            /* Sentencias preparadas */
            $sentencia = $this->db->prepare("update subcategorias set nombre=?,estado=?,idcategorias=? where idsubcategorias=?");
            /* Ejecutar la sentencia */
            $sentencia->execute(array($sub->getNombre(),$sub->getEstado(),$sub->getIdcategorias(),$sub->getIdsubcategorias()));
        } catch (Exception $e) {
                //die($e->getTrace());
            die($e->getMessage());
        }
    }
    public function eliminar($id) {
        try {
             /* Sentencias preparadas */
             $sentencia = $this->db->prepare("delete from subcategorias where idsubcategorias=?");
             /* Ejecutar la sentencia */
             $sentencia->execute(array($id));
             
         } catch (Exception $e) {
 
             die($e->getMessage());
         }
     }
     public function obtenerPorId($id) {
        try {
            /* Sentencias preparadas */
            $sentencia = $this->db->prepare("select * from subcategorias where idsubcategorias=?");/* Ejecutar la sentencia */
            $sentencia->execute(array($id));
            /* Obtener los resultado */
            $resultset = $sentencia->fetchAll(PDO::FETCH_CLASS, 'Subcategorias');
            /* retornar los resultados */
            return $resultset[0];
        } catch (Exception $e) {
            die($e->getTrace());
            die($e->getMessage());
        }
    }

     
    
}