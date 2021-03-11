<div class="row">
    <div class="col-sm-12 ">

        <section class="sectionAdminGetionEdit">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Gestión de Subcategorías</h2>
                </div>
                <div class="col-sm-12 text-right " >
                    <a  href="?c=Subcategorias&a=consulta" class="btn btn-success btnAdd" data-toggle="
                                            tooltip" data-placement="bottom" title="Listado">
                    <i class="bi bi-arrow-left-square"></i> 
                    </a>
                </div>
                <br>
                <div class="col-sm-12 ">
                    <form class="formView" action="?c=Subcategorias&a=guardar" method="post"
                        enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $sub->getIdsubcategorias(); ?>" />
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="nombreSub">Nombres</label>
                                <input type="text" class="form-control" id="nombreSub" placeholder="Nombre"
                                    name="nombre" value="<?php echo $sub->getNombre();?>">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="estadoSub">Categorias</label>
                                <select class="custom-select " name="categoria">
                                    <option selected>Seleccione</option>
                                    <?php
                                    require_once 'model/Categorias.php';
                                    $cat2 = new Categorias();
                                 
                                    foreach ($cat as $cat2) {
                                       
                                    ?>
                                   
                                        <option <?php if ($sub->getIdcategorias() == $cat2->getIdcategorias()) echo " selected=selected"; ?>
                                            value="<?php echo $cat2->getIdcategorias(); ?>"><?php echo $cat2->getNombre(); ?></option>
                                            <?php
                                    }                                       
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="estadoSub">Estado</label>
                                <select class="custom-select " name="estado">
                                    <option selected>Seleccione</option>
                                    <option <?php if ($sub->getEstado() == "1") echo " selected=selected"; ?> value="1">
                                        Activo</option>
                                    <option <?php if ($sub->getEstado() == "2") echo " selected=selected"; ?> value="2">
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