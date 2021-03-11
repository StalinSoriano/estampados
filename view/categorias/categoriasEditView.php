<div class="row">
    <div class="col-sm-12 ">

        <section class="sectionAdminGetionEdit">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Gestión de Categorias</h2>
                </div>
                <div class="col-sm-12 text-right " >
                    <a  href="?c=Categorias&a=consulta" class="btn btn-success btnAdd" data-toggle="
                                            tooltip" data-placement="bottom" title="Listado">
                    <i class="bi bi-arrow-left-square"></i> 
                    </a>
                </div>
                <br>
                <div class="col-sm-12 " >
                    <form class="formView"  action="?c=Categorias&a=guardar" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $cat->getIdcategorias(); ?>" />
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="nombreCat">Nombres</label>
                                <input type="text" class="form-control" id="nombreCat" placeholder="Nombre" name="nombre" value="<?php echo $cat->getNombre();?>">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="estadocat">Estado</label>
                                <select class="custom-select " name="estado">
                                <option selected>Seleccione</option>
                                <option <?php if ($cat->getEstado() == "1") echo " selected=selected"; ?> value="1">Activo</option>
                                <option <?php if ($cat->getEstado() == "2") echo " selected=selected"; ?> value="2">Inactivo</option>
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