<div class="row">
    <div class="col-sm-12 ">

        <section class="sectionAdminGetionEdit">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Gestión de Productos</h2>
                </div>
                <div class="col-sm-12 ">
                    <form class="formView" action="?c=Productos&a=guardar" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $pro->getIdproductos(); ?>" />
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nombrePro">Nombre</label>
                                <input type="text" class="form-control" id="nombrePro" placeholder="Nombre"
                                    name="nombre" value="<?php echo $pro->getNombre();?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="escripgetDescripcionPro">Precio</label>
                                <input type="number" class="form-control" id="preciosPro" placeholder="Precio"
                                    name="precios" value="<?php echo $pro->getPrecios();?>">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleFormControlTextarea1">Descripción</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="descripcion"  placeholder="Detalle del producto"><?php echo $pro->getDescripcion();?></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="custom-file">Foto</label>
                                
                                <label for="exampleFormControlFile1">Example file input</label>
    <input name="foto" type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="estadoPro">Subcategorias</label>
                                <select class="custom-select " name="subcategorias">
                                    <option selected>Seleccione</option>
                                    <?php
                                    require_once 'model/Subcategorias.php';
                                    $sub2 = new Subcategorias();
                                 
                                    foreach ($sub as $sub2) {
                                       
                                    ?>

                                    <option
                                        <?php if ($pro->getIdsubcategorias() == $sub2->getIdsubcategorias()) echo " selected=selected"; ?>
                                        value="<?php echo $sub2->getIdsubcategorias(); ?>">
                                        <?php echo $sub2->getNombre(); ?></option>
                                    <?php
                                    }                                       
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="estadoSub">Estado</label>
                                <select class="custom-select " name="estado">
                                    <option selected>Seleccione</option>
                                    <option <?php if ($pro->getEstado() == "1") echo " selected=selected"; ?> value="1">
                                        Activo</option>
                                    <option <?php if ($pro->getEstado() == "0") echo " selected=selected"; ?> value="0">
                                        Inactivo</option>
                                </select>
                            </div>

                        </div>
                        <div class="col-sm-12 text-center">
                            <button name="boton" type="submit">Guardar</button>
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