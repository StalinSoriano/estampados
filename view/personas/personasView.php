<div class="row">
    <div class="col-sm-12 ">

        <section class="sectionAdminGetionView">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Listado de Personas</h2>
                </div>
                <div class="col-sm-6  ">


                    <div class="form-group mx-sm-3 mb-2">
                        <input id="btnPerFiltro" type="text" class="form-control" id="inputPer" placeholder="Buscar">
                        <small id="passwordHelpBlock" class="form-text text-muted">
                            Filtro por nombres/apellidos/cédula/rol
                            
                        </small>
                    </div>

                </div>
                <div class="col-sm-6 text-right ">
                    <a href="?c=Personas&a=mostrarActividad" class="btn btn-success btnAdd">
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

                                    <th scope="col">Rol</th>
                                    <th scope="col">Cédula</th>
                                    <th scope="col">Nombres</th>
                                    <th scope="col">Apellidos</th>
                                    <th scope="col">Teléfono</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Usuario</th>
                                    <th scope="col">Género</th>
                                    <th scope="col">Estado</th>
                                </tr>
                            </thead>
                            <tbody id="tbodyPer">
                                <?php
                        require_once 'model/Personas.php';
                        $per2 = new Personas();
                        $cont = 0;
                        foreach ($per as $per2) {
                            $cont++;
                        ?>
                                <tr>
                                    <th><a href="?c=Personas&a=mostrarActividad&id=<?php echo $per2->getIdpersonas(); ?>"
                                            data-toggle="tooltip" data-placement="bottom" title="Editar"><i
                                                style="color: blue;" class="bi bi-pencil-square"></i></a> <a
                                            href="?c=Personas&a=eliminar&id=<?php echo $per2->getIdpersonas() ?>"
                                            onclick="javascript:return  confirm('Seguro de eliminar');"" data-toggle="
                                            tooltip" data-placement="bottom" title="Eliminar"><i style="color: red;"
                                                class="bi bi-trash-fill"></i></a></th>
                                    <th scope="row"><?php echo $cont; ?></th>

                                    <td><?php echo ucwords(mb_strtolower($per2->getIdroles(),'UTF-8')); ?></td>
                                    <td><?php echo ucwords(mb_strtolower($per2->getCedula(),'UTF-8')); ?></td>
                                    <td><?php echo ucwords(mb_strtolower($per2->getNombres(),'UTF-8')); ?></td>
                                    <td><?php echo ucwords(mb_strtolower($per2->getApellidos(),'UTF-8')); ?></td>
                                    <td><?php echo ucwords(mb_strtolower($per2->getTelefono(),'UTF-8')); ?></td>
                                    <td><?php echo ucwords(mb_strtolower($per2->getEmail(),'UTF-8')); ?></td>
                                    <td><?php echo ucwords(mb_strtolower($per2->getUsuario(),'UTF-8')); ?></td>
                                    <td><?php echo ucwords(mb_strtolower($per2->getGenero(),'UTF-8')); ?></td>
                                    <td class="text-center">
                                        <?php if ($per2->getEstado() == '1') echo '<i style="color:green" class="bi bi-check-square-fill"></i>';
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