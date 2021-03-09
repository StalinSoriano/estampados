<div class="row">
    <div class="col-sm-12 ">

        <section class="sectionAdminGetionView">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Listado de Subcategorias</h2>
                </div>
                <div class="col-sm-12 text-right ">
                    <a href="?c=Subcategorias&a=mostrarActividad" class="btn btn-success btnAdd">
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
                        <th scope="col">Nombre</th>
                        <th scope="col">Categoría</th>
                        <th scope="col">Estado</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                        require_once 'model/Subcategorias.php';
                        $sub2 = new Subcategorias();
                        $cont = 0;
                        foreach ($sub as $sub2) {
                            $cont++;
                        ?>
                    <tr>
                    <th><a href="?c=Subcategorias&a=mostrarActividad&id=<?php echo $sub2->getIdsubcategorias(); ?>" data-toggle="tooltip" data-placement="bottom" title="Editar"><i style="color: blue;" class="bi bi-pencil-square"></i></a> <a href="?c=Subcategorias&a=eliminar&id=<?php echo $sub2->getIdsubcategorias() ?>" onclick="javascript:return  confirm('Seguro de eliminar');"" data-toggle="tooltip" data-placement="bottom" title="Eliminar"><i style="color: red;" class="bi bi-trash-fill"></i></a></th>
                        <th scope="row"><?php echo $cont; ?></th>
                        <td><?php echo ucwords(mb_strtolower($sub2->getNombre(),'UTF-8')); ?></td>
                        <td><?php echo ucwords(mb_strtolower($sub2->getIdcategorias(),'UTF-8')); ?></td>
                        <td class="text-center"><?php if ($sub2->getEstado() == '1') echo '<i style="color:green" class="bi bi-check-square-fill"></i>';
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