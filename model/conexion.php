<?php
class Conexion{
    // patron de disenio singleton
    private static $conexion = null;
    
    private function __construct() {
        
    }
    public static function getConexion(){
        try{
            // si no existe la conexion se crea
            if(!isset(self::$conexion)){
                self::$conexion=new PDO("mysql:host=localhost; dbname=proyecto","root","");
               self::$conexion->setAttribute(
                       PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
               self::$conexion->exec("set character set utf8");
               
            }
            
            
        }catch(Exception $e){
            echo "linea del error " .$e->getLine();
            echo "</br>";
            echo "archivo " . $e->getFile();
            echo "</br>";
            die("error " . $e->getMessage());
            
        }
        return self::$conexion;
    }
    
    
}


