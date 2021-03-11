<?php


require_once 'model/SubcategoriasModel.php';
require_once 'model/Subcategorias.php';
require_once 'model/ProductosModel.php';
require_once 'model/Productos.php';
require_once 'model/Personas.php';

class ProductosController
{
    private $productosModel;
    private $subcategoriasModel;

    public function __construct()
    {
        $this->productosModel = new ProductosModel();
        $this->subcategoriasModel = new SubcategoriasModel();

        session_start();
    }

    public function consulta()
    {
        if (isset($_SESSION['user']) && ($_SESSION['user']->getIdroles()=='admin' || $_SESSION['user']->getIdroles()=='trabajador')) {
            $pro = $this->productosModel->listar();

                require 'view/html/header.php';
                require_once 'view/html/admin.php';
                require_once 'view/productos/productosView.php';
                require_once 'view/html/footer.php';
        } else {
            require 'view/html/header.php';
            require_once 'view/html/body.php';
            require_once 'view/html/footer.php';
        }
    }
    public function guardar()
{

  
    if (isset($_SESSION['user']) && ($_SESSION['user']->getIdroles()=='admin' || $_SESSION['user']->getIdroles()=='trabajador')) {
      $pro= new Productos();
      $pro->setNombre($_REQUEST['nombre']);
      $pro->setPrecios($_REQUEST['precios']);
      $pro->setDescripcion($_REQUEST['descripcion']);
      $pro->setFoto($this->validarfoto());
      $pro->setEstado($_REQUEST['estado']);
      $pro->setIdsubcategorias($_REQUEST['subcategorias']);
     
    if (isset($_REQUEST['id']) && !empty($_REQUEST['id'])) {
        $pro->setIdproductos($_REQUEST['id']);
        $this->productosModel->actualizar($pro);  
    } else {
            $this->productosModel->registrar($pro);
        }
        $pro = $this->productosModel->listar();
                require 'view/html/header.php';
                require_once 'view/html/admin.php';
                require_once 'view/productos/productosView.php';
                require_once 'view/html/footer.php';
            echo '<script>alertify.success ("Dato cargados correctamente"); </script>';
   }else {
    require 'view/html/header.php';
    require_once "view/html/body.php";
    require_once 'view/html/footer.php';
   }
  }
  public function mostrarActividad()
  {
      if (isset($_SESSION['user']) && ($_SESSION['user']->getIdroles()=='admin' || $_SESSION['user']->getIdroles()=='trabajador')) {
         
          $pro = new Productos();
          if (isset($_REQUEST['id']) && !empty($_REQUEST['id'])) {

              $pro = $this->productosModel->obtenerPorId($_REQUEST['id']);
          } 
          $sub=$this->subcategoriasModel->listar();
          require 'view/html/header.php';
          require_once 'view/html/admin.php';
          require_once 'view/productos/productosEditView.php';
          require_once 'view/html/footer.php';
          
      } else {
          header('location:index.php');
      }
  }
  public function eliminar()
    {
        if (isset($_SESSION['user']) && isset($_REQUEST['id']) && !empty($_REQUEST['id'])) {

            $this->productosModel->eliminar($_REQUEST['id']);

            //var_dump($per); 
            $this->consulta();
            echo '<script>alertify.success ("Dato eliminado correctamente"); </script>';
        } else {
            require 'view/html/header.php';
            require_once 'view/html/body.php';
            require_once 'view/html/footer.php';
        }
    }

    public function filtrarProductos()
{   
    if (isset($_SESSION['user']) && ($_SESSION['user']->getIdroles()=='admin' || $_SESSION['user']->getIdroles()=='trabajador')) {
        $pro = $this->productosModel->filtrar($_REQUEST['valor']);

        echo json_encode($pro);

    }else{
        require 'view/html/header.php';
            require_once 'view/html/login.php';
            require_once 'view/html/footer.php';
    }
  
  
}
    public function validarfoto() {
       
        if (isset($_REQUEST["boton"])) {
         $confirmacion=false;
      
         $name=$_FILES['foto']['name'];
         $tmp_name=$_FILES['foto']['tmp_name'];
         $error=$_FILES['foto']['error'];
         $size=$_FILES['foto']['size'];
         $max_size=1024*1024*5;
         $type=$_FILES['foto']['type'];
      
         if ($error) {
          $this->resultado="1";
        }elseif ($size>$max_size) {
          $this->resultado="2";
        }elseif ($type!= 'image/jpg' && $type!='image/png'  && $type!='image/jpeg') {
          $this->resultado="3";
          return "error";
        }
      
        else {
         $tiempo=time();
         if (!file_exists('assets/img/productos')) {
      
           mkdir('assets/img/productos/'.$tiempo,0777,true);
           $ruta='assets/img/productos/'.$tiempo.'-'.$name;
         }else{
           $ruta='assets/img/productos/'.$tiempo.'-'.$name;
         }
      
         move_uploaded_file($tmp_name, $ruta);
         $this->resultado="4";
      
         return $ruta;
       }
      }
      }

}
