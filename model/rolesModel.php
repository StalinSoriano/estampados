<?php 
require_once 'model/conexion.php';
require_once 'model/Roles.php';
class RolesModel
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
            $sentencia = $this->db->prepare("select * from roles");
            /* Ejecutar la sentencia */
            $sentencia->execute(array());
            /* Obtener los resultado */
            $resultset = $sentencia->fetchAll(PDO::FETCH_CLASS, 'Roles');
          
            /* retornar los resultados */
            return $resultset;
        } catch (Exception $e) {
                //die($e->getTrace());
            die($e->getMessage());
        }
    }
    public function registrar(Roles $rol){
        try {
            /* Sentencias preparadas */
            $sentencia = $this->db->prepare("insert  into roles ( nombre,estado ) values (?,?)");
            /* Ejecutar la sentencia */
            $sentencia->execute(array($rol->getNombre(),$rol->getEstado()));
        } catch (Exception $e) {
                //die($e->getTrace());
            die($e->getMessage());
        }
    }
    public function actualizar(Roles $rol){
        try {
            /* Sentencias preparadas */
            $sentencia = $this->db->prepare("update roles set nombre=?,estado=? where idroles=?");
            /* Ejecutar la sentencia */
            $sentencia->execute(array($rol->getNombre(),$rol->getEstado(),$rol->getIdroles()));
        } catch (Exception $e) {
                //die($e->getTrace());
            die($e->getMessage());
        }
    }
    public function eliminar($id) {
        try {
             /* Sentencias preparadas */
             $sentencia = $this->db->prepare("delete from roles where idroles=?");
             /* Ejecutar la sentencia */
             $sentencia->execute(array($id));
             
         } catch (Exception $e) {
 
             die($e->getMessage());
         }
     }
     public function obtenerPorId($id) {
        try {
            /* Sentencias preparadas */
            $sentencia = $this->db->prepare("select * from roles where idroles=?");/* Ejecutar la sentencia */
            $sentencia->execute(array($id));
            /* Obtener los resultado */
            $resultset = $sentencia->fetchAll(PDO::FETCH_CLASS, 'Roles');
            /* retornar los resultados */
            return $resultset[0];
        } catch (Exception $e) {
            die($e->getTrace());
            die($e->getMessage());
        }
    }

     
    
}