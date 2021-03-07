<section id="header">
    <a href="#" class="logo">LIONS DECORMOTORS<span>.</span></a>
    <ul class="navigation">
        <li><a href="index.php#banner">Inicio</a></li>
        <li><a href="?c=Home&a=catalogo">Catálogo</a></li>
        <li><a href="index.php#about">Nosotros</a></li>
        <li><a href="index.php#team">Nuestro Equipo</a></li>
        <li><a href="index.php#contact">Contáctanos</a></li>
        <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Carrito de compras" id="carrito1"><i class="bi bi-cart4"></i></a></li>
        <li class="icono"><?php if(!isset($_SESSION['user'])){echo'<a href="?c=Home&a=Login" data-toggle="tooltip" data-placement="bottom" title="Inicio de Sesión"><i
                    class="bi bi-person-circle"></i></a>';}else {echo'<!-- Default dropleft button -->
                        <div class="btn-group dropleft marginAbajo">
                          <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-person-circle "></i> '.$_SESSION['user']->getUsuario().'
                          </button>
                          <div class="dropdown-menu"  aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item submenu" href="#">Perfil</a>'; ?><?php 
                                if($_SESSION['user']->getIdroles()=='admin'){
                                    echo '<a class="dropdown-item submenu" href="?c=Personas&a=admin">Administración</a>';
                                }
                                echo 

                                '<a class="dropdown-item submenu" href="?c=Personas&a=logout">Cerrar Sesión</a>
                            </div>
                        </div> ';} ?></li>
    </ul>
</section>
<div class="menu">
</div>


<section id="catalogo">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Catálogo Virtual</h2>
            </div>
        </div>
        <div class="row ">

            <div class="col-sm-12 categoriasC">
                <a href="#">categoria 1</a>

                <a href="#">categoria 1</a>

                <a href="#">categoria 1</a>

                <a href="#">categoria 1</a>
            </div>


        </div>
        <div class="row " id="cardCatalogo">
            <div class="col-sm-2 bloque1">
                <div class="row">
                    <div class="col-sm-12 titleSub">
                        <p>Subcategorías</p>
                    </div>
                    <div class="col-sm-12 subcategorias">
                        <a href="#">categoria </a>
                        <a href="#">categoria 1</a>
                        <a href="#">categoria 1</a>
                        <a href="#">categoria 1</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="cardC">
                            <img src="assets/img/a.jpg" alt="">
                            <div class="infoCardC">
                                <p>Nombrekkkkkkk</p>
                                <em>precio</em>
                                <button><i class="bi bi-cart4"></i> Carrito </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="cardC">
                            <img src="assets/img/a.jpg" alt="">
                            <div class="infoCardC">
                                <p>Nombre</p>
                                <em>precio</em>
                                <button><i class="bi bi-cart4"></i> Carrito </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="cardC">
                            <img src="assets/img/a.jpg" alt="">
                            <div class="infoCardC">
                                <p>Nombre</p>
                                <em>precio</em>
                                <button><i class="bi bi-cart4"></i> Carrito </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="cardC">
                            <img src="assets/img/a.jpg" alt="">
                            <div class="infoCardC">
                                <p>Nombre</p>
                                <em>precio</em>
                                <button><i class="bi bi-cart4"></i> Carrito </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="cardC">
                            <img src="assets/img/a.jpg" alt="">
                            <div class="infoCardC">
                                <p>Nombre</p>
                                <em>precio</em>
                                <button><i class="bi bi-cart4"></i> Carrito </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="cardC">
                            <img src="assets/img/a.jpg" alt="">
                            <div class="infoCardC">
                                <p>Nombre</p>
                                <em>precio</em>
                                <button><i class="bi bi-cart4"></i> Carrito </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="cardC">
                            <img src="assets/img/a.jpg" alt="">
                            <div class="infoCardC">
                                <p>Nombre</p>
                                <em>precio</em>
                                <button><i class="bi bi-cart4"></i> Carrito </button>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>





