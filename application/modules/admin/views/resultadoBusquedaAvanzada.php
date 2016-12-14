    <title>Admin</title>
<?php if (count($personas) > 0) { ?>
<div class="panel panel-success">
        <div class="panel-body"  style="padding:0px 15px">        
            <table id="resultadoBusqueda" class="table table-striped table-condensed">

                <thead >

                    <tr> 

                        <th>Usuario</th>
                        <th>Nombre completo</th>
                        <th>Número de documento</th>

                       
                        <th><div class="pull-right">Acciones</div>
                <div class="clear-fix"></div></th>

                </tr>

                </thead>

                <tbody>

                    <?php foreach ($personas as $key => $persona) { ?>
                        <tr class="color">  
                            <td> <?php echo $persona['USUARIO']; ?></td>
                            <td> <?php echo $persona['NOMBRE_COMPLETO']; ?></td>
                            <td> <?php echo $persona['NRO_DOCUMENTO']; ?></td>
                            <td> 
                                <div class="pull-right">
                                    <div><a class="btn btn-sm btn-success" href="<?php echo base_url(); ?>index.php/admin/usuario/mostrarFormularioGestionUsuarios/<?php echo $persona['ID_USUARIO']; ?>">EDITAR</a> </div>          
                                </div>
                                <div class="clear-fix"></div>
                            </td>
                        </tr>
                    <?php } ?>



                </tbody>

            </table>
        </div>
    </div>
<?php } else { ?>
    <div style="padding: 10px;">No se encontró ningun resultado. Haga click <a href="<?php echo base_url(); ?>index.php/admin/usuario/mostrarFormularioGestionUsuarios">aquí</a> para crear un nuevo usuario.</div>
<?php } ?>
<script type="text/javascript">
    $(document).ready(function () {
        $('#resultadoBusqueda').dataTable({
            language: {
                processing: "Procesando...",
                search: "Buscar",
                lengthMenu: "Mostrar _MENU_ registros",
                info: "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                infoEmpty: "Mostrando registros del 0 al 0 de un total de 0 registros",
                infoFiltered: "(filtrado de un total de _MAX_ registros)",
                infoPostFix: "",
                loadingRecords: "Cargando...",
                zeroRecords: "No se encontraron resultados",
                emptyTable: "Ningún dato disponible en esta tabla",
                paginate: {
                    first: "Primero",
                    previous: "Anterior",
                    next: "Siguiente",
                    last: "&uacute;ltimo"
                }
            }
        });
         $('#resultadoBusqueda_filter input[type="search"]').attr('placeholder','Filtrar resultado');
    });
</script>



