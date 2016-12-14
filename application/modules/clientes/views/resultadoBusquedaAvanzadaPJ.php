<title>Clientes</title>
<?php if (count($personas) > 0) { ?>
<div class="panel panel-success">
        <div class="panel-body"  style="padding:0px 15px">    
        <table id="resultadoBusqueda" class="table able-striped table-condensed">

            <thead >

                <tr> 

                    <th>Nombre comercial</th>
                    <th>RUC</th>    
                    <th><div class="pull-right">Acciones</div>
            <div class="clear-fix"></div></th>

            </tr>

            </thead>

            <tbody>

                <?php foreach ($personas as $key => $persona) { ?>
                    <tr class="color">  
                        <td> <?php echo $persona['NOMBRE_COMERCIAL']; ?></td>
                        <td> <?php echo $persona['NRO_DOCUMENTO']; ?></td>
                        <td> 
                            <div class="pull-right">
                                <?php if(isset($MODULO) && $MODULO=='FACTURACION') { ?>
                                    <!--<div><a class="btn btn-sm btn-primary" href="<?php echo base_url(); ?>index.php/facturacion/facturacion/mostrarFormularioEdicionFactura/<?php echo $persona['ID_CLIENTE']; ?>">FACTURAR</a> </div>-->          
                                        <div><a class="btn btn-sm btn-primary" href="<?php echo base_url(); ?>index.php/facturacion/facturacion/facturar/<?php echo $persona['ID_CLIENTE']; ?>">FACTURAR</a> </div>   
                                        <!--<div><a class="btn btn-sm btn-info" href="<?php echo base_url(); ?>index.php/automatica/automatica/facturarAutomatico/<?php echo $persona['ID_CLIENTE']; ?>">F/AUTOMATICA</a> </div> -->         
                                <?php } else { ?>
                                    <div><a class="btn btn-sm btn-success btn-sm" href="<?php echo base_url(); ?>index.php/clientes/clientes/mostrarFormularioGestionPJ/<?php echo $persona['ID_CLIENTE']; ?>">EDITAR</a> </div> 
                                <?php } ?>
                                <!-- <div><a class="btn btn-sm btn-default btn-sm" href="<?php echo base_url(); ?>index.php/clientes/clientes/mostrarDetallesPJV2/<?php echo $persona['ID_CLIENTE']; ?>">CONSULTAR</a> </div> -->         
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
<div style="padding: 10px;">No se encontró ningun resultado. Haga click <a href="<?php echo base_url(); ?>index.php/clientes/clientes/mostrarFormularioGestionPJ">aquí</a> para crear un nuevo cliente jurídico.</div>
<?php } ?>

 <script type="text/javascript">
     $(document).ready(function() {
            $('#resultadoBusqueda').dataTable({
                         language: {
                            processing:     "Procesando...",
                            search:         "Buscar",
                            lengthMenu:    "Mostrar _MENU_ registros",
                            info:           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                            infoEmpty:      "Mostrando registros del 0 al 0 de un total de 0 registros",
                            infoFiltered:   "(filtrado de un total de _MAX_ registros)",
                            infoPostFix:    "",
                            loadingRecords: "Cargando...",
                            zeroRecords:    "No se encontraron resultados",
                            emptyTable:     "Ningún dato disponible en esta tabla",
                            paginate: {
                                first:      "Primero",
                                previous:   "Anterior",
                                next:       "Siguiente",
                                last:       "&uacute;ltimo"
                            }
                        }
                    });
        });
         $('#resultadoBusqueda_filter input[type="search"]').attr('placeholder','Filtrar resultado');
     </script>

