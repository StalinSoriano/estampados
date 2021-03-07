<section id="header">
    <a href="#" class="logo">LIONS DECORMOTORS<span>.</span></a>
    <ul class="navigation">
        <li><a href="index.php#banner">Inicio</a></li>
        <li><a href="?c=Home&a=catalogo">Catálogo</a></li>
        <li><a href="index.php#about">Nosotros</a></li>
        <li><a href="index.php#team">Nuestro Equipo</a></li>
        <li><a href="index.php#contact">Contáctanos</a></li>
        <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Carrito de compras" id="carrito3"><i
                    class="bi bi-cart4"></i></a></li>
                    <li class="icono"><?php if(!isset($_SESSION['user'])){echo'<a href="?c=Home&a=Login" data-toggle="tooltip" data-placement="bottom" title="Inicio de Sesión"><i
                    class="bi bi-person-circle"></i></a>';}else {echo'<!-- Default dropleft button -->
                        <div class="btn-group dropleft">
                          <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-person-circle "></i> '.$_SESSION['user']->getUsuario().'
                          </button>
                          <div class="dropdown-menu"  aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item submenu" href="#">Perfil</a>';?><?php 
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

<section id="login">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 cardL">
                <img src="assets/img/logo.jpg" alt="">
            </div>
            <div class="col-sm-6 formL">
                <div class="encabezadoL">
                    <p class="titleL">Bienvenido a <br> LIONS DECORMOTORS</p>
                    <div class="separatorL"></div>
                    <p class="welcome-messageL">Por favor, proporcione una credencial de inicio de sesión para continuar
                        y tener
                        acceso a todos nuestros servicios.
                    </p>

                </div>
                <form action="?c=Personas&a=filtro" method="post" enctype="multipart/form-data" class="login-form">
                    <div class="form-controlL">

                        <input type="text" placeholder="Usuario" name="usuario">
                        <i class="bi bi-person-square"></i>

                    </div>
                    <div class="form-controlL">

                        <input type="password" placeholder="Contraseña" name="pass">
                        <i class="bi bi-lock-fill"></i>

                    </div>

                    <button class="submit">Iniciar Sesión </button>
                    <button type="button" class="button" id="btnRegistrar">Crear cuenta</button>

                </form>
            </div>
        </div>
    </div>
</section>





<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="modelRegistrarCuenta" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>Crear Cuenta</h3>
                        </div>
                        <div class="col-sm-12">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nombreIn">Nombres</label>
                                        <input type="text" class="form-control" id="nombreIn" placeholder="Nombres">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="apellidosIn">Apellidos</label>
                                        <input type="text" class="form-control" id="apellidosIn"
                                            placeholder="Apellidos">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="cedulaIn">Cédula</label>
                                        <input type="text" class="form-control" id="cedulaIn" placeholder="Cédula">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="telefonoIn">Teléfono</label>
                                        <input type="text" class="form-control" id="telefonoIn" placeholder="Teléfono">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="emailIn">Email</label>
                                        <input type="text" class="form-control" id="emailIn" placeholder="Email">
                                    </div>
                                </div>


                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="usuarioIn">Usuario</label>
                                        <input type="text" class="form-control" id="usuarioIn" placeholder="Usuario">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="passIn">Contraseña</label>
                                        <input type="text" class="form-control" id="passIn" placeholder="Contraseña">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Sexo</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Seleccione..</option>
                                            <option value="Masculino">Masculino</option>
                                            <option value="Femenino">Femenino</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="submit">Guardar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<br>