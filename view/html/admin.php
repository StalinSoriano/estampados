
<div class="body" id="body-pd2">
    <div class="l-navbar2" id="navbar2">
        <nav class="nav2">
            <div>
                <div class="nav_brand2">
                    <ion-icon name="menu-outline" class="nav_toggle2" id="nav-toggle2"></ion-icon>
                    <a href="#" class="nav_logo2"><?php  echo ucwords($_SESSION['user']->getUsuario()).'/'.$_SESSION['user']->getIdroles();?> </a>
                </div>
                <div class="nav_list2">
                    <a href="#" class="nav_link2 <?php echo $active1;?>">
                        <ion-icon name="logo-usd" class="nav_icon2"></ion-icon>
                        <span class="nav_name2">Pedidos</span>
                    </a>
                
                    <a href="?c=Roles&a=consulta" class="nav_link2  <?php echo $active2;?>>">
                        <ion-icon name="reader-outline" class="nav_icon2"></ion-icon>
                        <span class="nav_name2">Gestión Roles</span>
                    </a>
                    <a href="#" class="nav_link2  <?php echo $active3;?>">
                        <ion-icon name="people-outline" class="nav_icon2"></ion-icon>
                        <span class="nav_name2">Gestión Personas</span>
                    </a>
                   
                    <div class="nav_link2 collapse2  <?php echo $active4;?>">
                    <ion-icon name="gift-outline" class="nav_icon2"></ion-icon>
                    <span class="nav_name2">Gestión Productos</span>
                    <ion-icon name="chevron-down-outline" class="collapse_link2"></ion-icon>
                    <ul class="collapse_menu2" >
                        <a href="" class="collapse_sublink2">Categorías</a>
                        <a href="" class="collapse_sublink2">Subcategoías</a>
                        <a href="" class="collapse_sublink2">Productos</a>
                    </ul>
                </div>



                </div>
            </div>
        </nav>
    </div>
    <?php 
$c=$_REQUEST['c'];
$active1='';
$active2='';
$active3='';
$active4='';
if($c=='Pedidos'){
    $active1=' active2';
    $active2='';
    $active3='';
    $active4='';
}else{
    if($c=='Roles'){
        $active1='';
        $active2=' active2';
        $active3='';
        $active4='';    
    }else{
        if($c=='Personas'){
            $active1='';
            $active2='';
            $active3=' active2';
            $active4='';    
        }else{
            
                $active1='';
                $active2='';
                $active3='';
                $active4=' active2';    
           
        }
    }
}
?>
    <div class="container-fluid " id="administracion">
    <div class="row barraadmin">
        <div class="col-sm-12 ">
            <div class="text-right">
                <a href="?c=Personas&a=logout" data-toggle="tooltip" data-placement="bottom" title="Cerrar de Sesión"><i class="bi bi-box-arrow-right" ></i></a>
            </div>
        </div>
    </div>