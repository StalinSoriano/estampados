<div class="row">
    <div class="col-sm-12 ">

        <section class="sectionAdminGetionEdit">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Gestión de roles</h2>
                </div>
                <div class="col-sm-12 text-right " >
                    <a  href="?c=Roles&a=consulta" class="btn btn-success btnAdd" data-toggle="
                                            tooltip" data-placement="bottom" title="Listado">
                    <i class="bi bi-arrow-left-square"></i> 
                    </a>
                </div>
                <br>
                <div class="col-sm-12 " >
                    <form class="formView"  action="?c=Roles&a=guardar" method="post" enctype="multipart/form-data">
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