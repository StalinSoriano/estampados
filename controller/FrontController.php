<?php
   
class FrontController {

    public function __construct() {
    
    }

    public function rutear() {
    
        
   
            $controller = 'Home';
           if (!isset($_REQUEST['c'])) { /* si no existe el parametro c, se utilizara el controlador por defecto */
            require_once "controller/" . $controller . "Controller.php";
            /* ucwords — Uppercase the first character of each word in a string */
            $controller = ucwords($controller) . 'Controller';
            $controller = new $controller;
            //controlador y accion por defecto (inicial)
            $controller->body();
        } else {
            // Obtenemos el controlador que queremos cargar
            //strtolower — Make a string lowercase
            $controller = strtolower($_REQUEST['c']);
            // si no hay accion por defecto sera consultar
            $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'consultar';
            // Instanciamos el controlador
            require_once "controller/" . $controller . "Controller.php";
            //ucwords — Uppercase the first character of each word in a string          
            $controller = ucwords($controller) . 'Controller';
            $controller = new $controller;

            // $controller->$accion; no es posible realizar la llamada asi
            // Llama la accion con call_user_func — Llamar a una llamada de retorno () dada por el primer parámetro
            // en este caso sirve para llamar dinamicamente al metodo de un objeto. Indicamos el objeto y la funcion a ser llamada.
            call_user_func(array($controller, $accion));
        }
}


}
