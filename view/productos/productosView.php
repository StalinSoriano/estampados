<div class="row">
    <div class="col-sm-12 ">

        <section class="sectionAdminGetionView">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Listado de Productos</h2>
                </div>
                <div class="col-sm-6  ">
                  
                        
                        <div class="form-group mx-sm-3 mb-2">
                            <input  id="btnProFiltro" type="text" class="form-control" id="inputPro" placeholder="Buscar">
                            <small id="passwordHelpBlock" class="form-text text-muted">
  Filtro por nombre y subcategoría
</small>

                        </div>
                    
                </div>
                <div class="col-sm-6 text-right ">
                    <a href="?c=Productos&a=mostrarActividad" class="btn btn-success btnAdd">
                        <i class="bi bi-plus-circle"></i> Agregar
                    </a>
                </div>


                <div class="col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Acciones</th>
                                    <th scope="col">#</th>
                                    <th scope="col">foto</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Descripción</th>
                                    <th scope="col">Subcategoría</th>
                                    <th scope="col">Estado</th>
                                </tr>
                            </thead>
                            <tbody id="tbodyPro">
                                <?php
                        require_once 'model/Productos.php';
                        $pro2 = new Productos();
                        $cont = 0;
                        foreach ($pro as $pro2) {
                            $cont++;
                        ?>
                                <tr>
                                    <th><a href="?c=Productos&a=mostrarActividad&id=<?php echo $pro2->getIdproductos(); ?>"
                                            data-toggle="tooltip" data-placement="bottom" title="Editar"><i
                                                style="color: blue;" class="bi bi-pencil-square"></i></a> <a
                                            href="?c=Productos&a=eliminar&id=<?php echo $pro2->getIdproductos() ?>"
                                            onclick="javascript:return  confirm('Seguro de eliminar');"" data-toggle="
                                            tooltip" data-placement="bottom" title="Eliminar"><i style="color: red;"
                                                class="bi bi-trash-fill"></i></a></th>
                                    <th scope="row"><?php echo $cont; ?></th>
                                    <td><img src="<?php echo $pro2->getFoto(); ?>" alt=""
                                            style="height: 50px;width:50px;"></td>
                                    <td><?php echo ucwords(mb_strtolower($pro2->getNombre(),'UTF-8')); ?></td>
                                    <td><?php echo ucwords(mb_strtolower($pro2->getPrecios(),'UTF-8')); ?></td>
                                    <td><?php echo ucwords(mb_strtolower($pro2->getDescripcion(),'UTF-8')); ?></td>
                                    <td><?php echo ucwords(mb_strtolower($pro2->getIdsubcategorias(),'UTF-8')); ?></td>
                                    <td class="text-center">
                                        <?php if ($pro2->getEstado() == '1') echo '<i style="color:green" class="bi bi-check-square-fill"></i>';
                                                    else echo '<i style="color:red" class="bi bi-x-square-fill"></i>'; ?></td>

                                </tr>
                                <?php
                        }
                        ?>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </section>
    </div>
</div>
</div>


</div>