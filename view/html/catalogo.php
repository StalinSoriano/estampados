<section id="header">
    <a href="#" class="logo">LIONS DECORMOTORS<span>.</span></a>
    <ul class="navigation">
        <li><a href="index.php#banner">Inicio</a></li>
        <li><a href="?c=Home&a=catalogo">Catálogo</a></li>
        <li><a href="index.php#about">Nosotros</a></li>
        <li><a href="index.php#team">Nuestro Equipo</a></li>
        <li><a href="index.php#contact">Contáctanos</a></li>
        <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Carrito de compras" id="carrito1"><i
                    class="bi bi-cart4"></i></a></li>
        <li class="icono"><?php if(!isset($_SESSION['user'])){echo'<a href="?c=Home&a=Login" data-toggle="tooltip" data-placement="bottom" title="Inicio de Sesión"><i
                    class="bi bi-person-circle"></i></a>';}else {echo'<!-- Default dropleft button -->
                        <div class="btn-group dropleft marginAbajo">
                          <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-person-circle "></i> '.$_SESSION['user']->getUsuario().'
                          </button>
                          <div class="dropdown-menu"  aria-labelledby="dropdownMenuLink">
                               '; ?><?php 
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
                <?php
                      
                        $cat2 = new Categorias();
                        $cont=0;
                        foreach ($cat as $cat2) {
                            $cont++;
                        ?>
                <a <?php if(!isset($_REQUEST['id']) && $cont==1){echo 'class="focus"'; }else {if(isset($_REQUEST['id'])&&$cat2->getIdcategorias()==$_REQUEST['id']){echo 'class="focus"';}} ?>
                    href="?c=Home&a=catalogo&id=<?php echo $cat2->getIdcategorias();?>"><?php echo ucwords(mb_strtolower($cat2->getNombre(),'UTF-8')); ?></a>
                <?php } ?>
            </div>


        </div>
        <div class="row " id="cardCatalogo">
            <div class="col-sm-2 bloque1">
                <div class="row">
                    <div class="col-sm-12 titleSub">
                        <p>Subcategorías</p>
                    </div>
                    <div class="col-sm-12 subcategorias">
                        <?php
                        
                        $sub2 = new Subcategorias();
                        $cont2=0;
                        foreach ($sub as $sub2) {
                            $cont2++;
                        ?>
                        <a <?php if(!isset($_REQUEST['ids']) && $cont2==1){echo 'class="focusS"';}
                        else{
                            if(isset($_REQUEST['ids']) && $sub2->getIdsubcategorias()==$_REQUEST['ids']){
                                echo 'class="focusS"';
                            }
                        }
                            ?>
                            href="?c=Home&a=catalogo&ids=<?php echo $sub2->getIdsubcategorias();?>&id=<?php if(isset($_REQUEST['id'])){echo $_REQUEST['id'];}else{echo $cat[0]->getIdcategorias();}?>"><?php echo ucwords(mb_strtolower($sub2->getNombre(),'UTF-8')); ?>
                        </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-10">
                <div class="row">
                    <?php
                     
                        $pro2 = new Productos();
                        
                        foreach ($pro as $pro2) {
                        ?>
                    <div class="col-sm-3">
                        <div class="cardC">
                            <img src="<?php echo $pro2->getFoto();?>" alt="">
                            <div class="infoCardC">
                                <p><?php echo $pro2->getNombre();?></p>
                                <em>$ <?php echo $pro2->getPrecios();?></em>
                                <button class="btnInfo"><i class="bi bi-info-circle"></i> Información </button>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>







<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="modalInfo" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <section id="contact" style="padding-top: 0px;">
                    <div class="container">
                        <div class="row">

                            <div class="col-sm-12 titleContact">
                                <h2><span>C</span>ontáctanos</h2>
                            </div>
                            <div class="col-lg-3 info">
                                <h3>Información</h3>
                                <i class="bi bi-geo-alt-fill"></i> <span>Dirección:</span>
                                <p> bolivar bla bla bla</p>
                                <i class="bi bi-telephone-fill"></i> <span>Teléfono:</span>
                                <p> bolivar bla bla bla</p>
                                <i class="bi bi-envelope-fill"></i> <span>Email:</span>
                                <p> bolivar bla bla bla</p>

                            </div>
                            <div class="col-lg-9 infoMapa">
                                <h3>Visítanos</h3>
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.47723276108!2d-79.72579008552206!3d-1.962868198568985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d3d4ed245dfc5%3A0xce8ea89b714b58af!2sBolivar%2C%20Samborond%C3%B3n!5e0!3m2!1ses-419!2sec!4v1614736542700!5m2!1ses-419!2sec"
                                    width="100%" height="250" style="border:0;" allowfullscreen=""
                                    loading="lazy"></iframe>
                            </div>


                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>
</div>