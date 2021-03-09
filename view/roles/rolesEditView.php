<div class="row">
    <div class="col-sm-12 ">

        <section id="rolesEdit">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Gestión de roles</h2>
                </div>
                <div class="col-sm-12 contenedorRol" >
                    <form class="formRol"  action="?c=Roles&a=guardar" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $rol->getIdroles(); ?>" />
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="nombreRol">Nombres</label>
                                <input type="text" class="form-control" id="nombreRol" placeholder="Nombre" name="nombre" value="<?php echo $rol->getNombre();?>">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="estadoRol">Estado</label>
                                <select class="custom-select " name="estado">
                                <option selected>Seleccione</option>
                                <option <?php if ($rol->getEstado() == "1") echo " selected=selected"; ?> value="1">Activo</option>
                                <option <?php if ($rol->getEstado() == "2") echo " selected=selected"; ?> value="2">Inactivo</option>
                            </select>
                            </div>
                           
                        </div>
                            <div class="col-sm-12 text-center">
                                <button type="submit" >Guardar</button>
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