<div class="row">
    <div class="col-sm-12 ">

        <section class="sectionAdminGetionEdit">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Gestión de Personas</h2>
                </div>
                <div class="col-sm-12 text-right ">
                    <a href="?c=Personas&a=consulta" class="btn btn-success btnAdd" data-toggle="
                                            tooltip" data-placement="bottom" title="Listado">
                        <i class="bi bi-arrow-left-square"></i>
                    </a>
                </div>
                <br>
                <div class="col-sm-12 ">
                    <form class="formView" action="?c=Personas&a=guardar" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $per->getIdpersonas(); ?>" />
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nombreSub">Nombres</label>
                                <input type="text" class="form-control" id="nombreSub" placeholder="Nombre"
                                    name="nombres" value="<?php echo $per->getNombres();?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="apellidosSub">Apellidos</label>
                                <input type="text" class="form-control" id="apellidosSub" placeholder="Apellidos"
                                    name="apellidos" value="<?php echo $per->getApellidos();?>">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="cedulaSub">Cédula</label>
                                <input type="text" class="form-control" id="cedulaSub" placeholder="Cédula"
                                    name="cedula" value="<?php echo $per->getCedula();?>">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="telefonoSub">Teléfono</label>
                                <input type="text" class="form-control" id="telefonoSub" placeholder="Teléfono"
                                    name="telefono" value="<?php echo $per->getTelefono();?>">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="emailSub">Email</label>
                                <input type="text" class="form-control" id="emailSub" placeholder="Email" name="email"
                                    value="<?php echo $per->getEmail();?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="usuarioSub">Usuario</label>
                                <input type="text" class="form-control" id="usuarioSub" placeholder="Usuario"
                                    name="usuario" value="<?php echo $per->getUsuario();?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="passSub">Contraseña</label>
                                <input type="text" class="form-control" id="passSub" placeholder="Contraseña"
                                    name="pass" value="<?php echo $per->getPass();?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="rolSub">Rol</label>
                                <select class="custom-select " name="roles">
                                    <option selected>Seleccione</option>
                                    <?php
                                    require_once 'model/Roles.php';
                                    $rol2 = new Roles();
                                 
                                    foreach ($rol as $rol2) {
                                       
                                    ?>

                                    <option
                                        <?php if ($per->getIdroles() == $rol2->getIdroles()) echo " selected=selected"; ?>
                                        value="<?php echo $rol2->getIdroles(); ?>"><?php echo $rol2->getNombre(); ?>
                                    </option>
                                    <?php
                                    }                                       
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputState">Sexo</label>
                                <select id="inputState" class="form-control" name="genero">
                                    <option selected>Seleccione..</option>
                                    <option  <?php if ($per->getGenero() == "Masculino") echo " selected=selected"; ?> value="Masculino">Masculino</option>
                                    <option <?php if ($per->getGenero() == "Femenino") echo " selected=selected"; ?> value="Femenino">Femenino</option>
                                </select>
                            </div>
                            
                            <div class="form-group col-md-12">
                                <label for="estadoSub">Estado</label>
                                <select class="custom-select " name="estado">
                                    <option selected>Seleccione</option>
                                    <option <?php if ($per->getEstado() == "1") echo " selected=selected"; ?> value="1">
                                        Activo</option>
                                    <option <?php if ($per->getEstado() == "0") echo " selected=selected"; ?> value="0">
                                        Inactivo</option>
                                </select>
                            </div>

                        </div>
                        <div class="col-sm-12 text-center">
                            <button type="submit">Guardar</button>
                        </div>
                </div>
                </form>
            </div>

    </div>

    </section>
</div>
</div>
</div>


</div>