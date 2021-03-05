<?php 
require_once 'model/Conexion.php';
require_once 'model/Personas.php';
class PersonasModel
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

    public function filtrarLogin($usuario,$contrasenia){
        try {
            /* Sentencias preparadas */
            $sentencia = $this->db->prepare("select p.idpersonas,p.nombres,p.apellidos,p.usuario,r.nombre as idroles from
              personas as p inner join roles as r on p.idroles=r.idroles where p.usuario='$usuario' and p.pass='$contrasenia' and p.estado=1 ");
            /* Ejecutar la sentencia */
            $sentencia->execute(array());
            /* Obtener los resultado */
            $resultset = $sentencia->fetchAll(PDO::FETCH_CLASS, 'Personas');
          
            /* retornar los resultados */
            return $resultset;
        } catch (Exception $e) {
                //die($e->getTrace());
            die($e->getMessage());
        }
    }
}