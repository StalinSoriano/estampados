<div class="row">
    <div class="col-sm-12 ">

        <section id="roles">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Listado de roles</h2>
                </div>
                <div class="col-sm-12 text-right ">
                    <a href="?c=Roles&a=mostrarActividad" class="btn btn-success btnAdd">
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
                        <th scope="col">Estado</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                        require_once 'model/Roles.php';
                        $rol2 = new Roles();
                        $cont = 0;
                        foreach ($rol as $rol2) {
                            $cont++;
                        ?>
                    <tr>
                    <th><a href="?c=Roles&a=mostrarActividad&id=<?php echo $rol2->getIdroles(); ?>" data-toggle="tooltip" data-placement="bottom" title="Editar"><i style="color: blue;" class="bi bi-pencil-square"></i></a> <a href="?c=Roles&a=eliminar&id=<?php echo $rol2->getIdRoles() ?>" onclick="javascript:return  confirm('Seguro de eliminar');"" data-toggle="tooltip" data-placement="bottom" title="Eliminar"><i style="color: red;" class="bi bi-trash-fill"></i></a></th>
                        <th scope="row"><?php echo $cont; ?></th>
                        <td><?php echo ucwords(mb_strtolower($rol2->getNombre(),'UTF-8')); ?></td>
                        <td class="text-center"><?php if ($rol2->getEstado() == '1') echo '<i style="color:green" class="bi bi-check-square-fill"></i>';
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