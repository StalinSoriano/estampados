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

    public function filtrarLogin($usuario,$pass){
        try {
            /* Sentencias preparadas */
            $sentencia = $this->db->prepare("select p.idpersonas,p.nombres,p.apellidos,p.usuario,p.pass,r.nombre as idroles from
              personas as p inner join roles as r on p.idroles=r.idroles where p.usuario='$usuario' and p.estado=1 ");
            /* Ejecutar la sentencia */
            $sentencia->execute(array());
            /* Obtener los resultado */
            $resultset = $sentencia->fetchAll(PDO::FETCH_CLASS, 'Personas');
            if(!empty($resultset)){
                if(!password_verify($pass,$resultset[0]->getPass())){
                   
             
                    $resultset=null;
            }
        }
            /* retornar los resultados */
            return $resultset;
        } catch (Exception $e) {
                //die($e->getTrace());
            die($e->getMessage());
        }
    }

    public function listar(){
        try {
            /* Sentencias preparadas */
            $sentencia = $this->db->prepare("select p.idpersonas,p.nombres,p.apellidos,p.cedula,p.telefono,p.email,p.usuario,p.pass,p.genero,p.estado,r.nombre as idroles from
            personas as p inner join roles as r on p.idroles=r.idroles ");
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
    public function registrar(Personas $per){
        try {
            /* Sentencias preparadas */
            $sentencia = $this->db->prepare("insert  into personas ( nombres,apellidos,cedula,telefono,email,usuario,pass,genero,estado,idroles ) values (?,?,?,?,?,?,?,?,?,?)");
            /* Ejecutar la sentencia */
            $sentencia->execute(array($per->getNombres(),$per->getApellidos(),$per->getCedula(),$per->getTelefono(),$per->getEmail(),$per->getUsuario(),$per->getPass(),$per->getGenero(),$per->getEstado(),$per->getIdroles()));
        } catch (Exception $e) {
                //die($e->getTrace());
            die($e->getMessage());
        }
    }
    public function actualizar(Personas $per){
        try {
            /* Sentencias preparadas */
            if($per->getPass()=='')
            {
                $sentencia = $this->db->prepare("update personas set nombres=?,apellidos=?,cedula=?,telefono=?,email=?,usuario=?,genero=?,estado=?,idroles=? where idpersonas=?");
                $sentencia->execute(array($per->getNombres(),$per->getApellidos(),$per->getCedula(),$per->getTelefono(),$per->getEmail(),$per->getUsuario(),$per->getGenero(),$per->getEstado(),$per->getIdroles(),$per->getIdpersonas()));

            }
            else 
            {
                $sentencia = $this->db->prepare("update personas set nombres=?,apellidos=?,cedula=?,telefono=?,email=?,usuario=?,pass=?,genero=?,estado=?,idroles=? where idpersonas=?");
                $sentencia->execute(array($per->getNombres(),$per->getApellidos(),$per->getCedula(),$per->getTelefono(),$per->getEmail(),$per->getUsuario(),$per->getPass(),$per->getGenero(),$per->getEstado(),$per->getIdroles(),$per->getIdpersonas()));

            }

            /* Ejecutar la sentencia */
        } catch (Exception $e) {
                //die($e->getTrace());
            die($e->getMessage());
        }
    }
    public function eliminar($id) {
        try {
             /* Sentencias preparadas */
             $sentencia = $this->db->prepare("delete from personas where idpersonas=?");
             /* Ejecutar la sentencia */
             $sentencia->execute(array($id));
             
         } catch (Exception $e) {
 
             die($e->getMessage());
         }
     }
     public function obtenerPorId($id) {
        try {
            /* Sentencias preparadas */
            $sentencia = $this->db->prepare("select  idpersonas,nombres,apellidos,cedula,telefono,email,usuario,genero,estado,idroles from personas where idpersonas=?");/* Ejecutar la sentencia */
            $sentencia->execute(array($id));
            /* Obtener los resultado */
            $resultset = $sentencia->fetchAll(PDO::FETCH_CLASS, 'Personas');
            /* retornar los resultados */
            return $resultset[0];
        } catch (Exception $e) {
            die($e->getTrace());
            die($e->getMessage());
        }
    }
    public function filtrar($valor){
        try {
            
       
            /* Sentencias preparadas */
            $sentencia = $this->db->prepare("select p.idpersonas,p.nombres,p.apellidos,p.cedula,p.telefono,p.email,p.usuario,p.genero,p.estado,r.nombre as idroles
             from personas as p inner join roles as r on p.idroles=r.idroles where p.nombres like '%$valor%' or p.apellidos like '%$valor%' or p.cedula like '%$valor%' or r.nombre like '%$valor%'");
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