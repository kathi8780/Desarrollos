<!-- DETALLE DE PEDIDO -->
<div class="modal fade" tabindex="-1" role="dialog" id="modal_detalle_pedido">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Detalles del pedido</h4>
      </div>
      <div class="modal-body" id="modal-body">
          <div class="table table-responsive">
            <table class="table table-responsive table-hover table-condensed" style="border:none">
              <tr>
                <td style="font-weight:bold">
                  Paciente: 
                </td>
                <td>
                  <div id="dp_paciente" style="text-align: left"></div>
                </td>
                <td style="font-weight:bold">
                  Nº Pedido:
                </td>
                <td>
                  <div id="dp_pedido"  style="text-align: left"></div>
                </td>
              </tr>
            </table>
          </div>

        <div class="panel panel-primary">
            <div class="panel-heading">PRUEBAS</div>
            <div class="panel-body">
          <div id="pd_pruebas" class="table table-responsive"></div>
            </div>
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading">PROCESOS</div>
            <div class="panel-body">
          <div id="pd_procesos" class="table table-responsive"></div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- MODAL RECIBE -->
<form  id="form_retiro" name="formulario_retiro" method="post" action="<?php echo base_url(); ?>index.php/pedido/pedidos/editarRetiro" enctype="multipart/form-data">
<div class="modal fade" tabindex="-1" role="dialog" id="modal-asignar-recibe">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Realizar Retiro</h4>
      </div>
      <div class="modal-body" id="modal-body">
	      	

		    <div class="panel panel-primary">
		        <div class="panel-heading">PRUEBAS</div>
		        <div class="panel-body">
					<div id="pd_pruebas" class="table table-responsive"></div>
          

            <div class="col-md- col-sm-7 col-xs-12">
              <div class="form-group form-group-sm">     
              <label  class="control-label required" for="">Recibe Conforme<span class="required"> * </span></label> 
                  <input type='hidden' id='id' value="" name="formulario_retiro[IDRECIBE]" />
                  <input type="text" id="c_nombre" autocomplete="off" mayusculas="^[A-Za-zÁÉÍÓÚáéíóúÑñ]+$" maxlength="50" class="form-control" value="" name="formulario_retiro[NOMBRERECIBE]" />
              </div>
            </div>

            <div class="col-md- col-sm-4 col-xs-12">
              <div class="form-group form-group-sm">     
              <label class="control-label" for="formulario_pedido_fotopaciente">Foto Paciente</label>         
                <input style="font-size:12px; max-width:95px" type="file" id="fotoparecibe" name="formulario_retiro[FOTORECIBE]" />
              </div>
            </div>


		        </div>

		    </div>

		  
      </div>
      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-sm" onclick="realizarEdicion()">
                            <span class="glyphicon glyphicon-pencil"></span> Actualizar
                        </button>
                    </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</form>
<!-- MODAL RECIBE PEDIDO-->
<form  id="form_entrega" name="formulario_entrega" method="post" action="<?php echo base_url(); ?>index.php/pedido/pedidos/editarEntregaPedido" enctype="multipart/form-data">
<div class="modal fade" tabindex="-1" role="dialog" id="modal-entrega-pedido">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Realizar Entrega Pedido</h4>
      </div>
      <div class="modal-body" id="modal-body">
          

        <div class="panel panel-primary">
            <div class="panel-heading">PRUEBAS</div>
            <div class="panel-body">
          <div id="pd_pruebas" class="table table-responsive"></div>
          

            <div class="col-md- col-sm-7 col-xs-12">
              <div class="form-group form-group-sm">     
              <label  class="control-label required" for="">Recibe Conforme<span class="required"> * </span></label> 
                  <input type='text' id='id_entrega' value="" name="formulario_entrega[IDRECIBE]" />
                  <input type="text" id="c_nombre" autocomplete="off" mayusculas="^[A-Za-zÁÉÍÓÚáéíóúÑñ]+$" maxlength="50" class="form-control" value="" name="formulario_entrega[NOMBRERECIBE]" />
              </div>
            </div>

            <div class="col-md- col-sm-4 col-xs-12">
              <div class="form-group form-group-sm">     
              <label class="control-label" for="formulario_pedido_fotopaciente">Foto Entrega</label>         
                <input style="font-size:12px; max-width:95px" type="file" id="fotoentrega" name="formulario_entrega[FOTORECIBE]" />
              </div>
            </div>


            </div>

        </div>

      
      </div>
      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-sm" onclick="realizarEntrega()">
                            <span class="glyphicon glyphicon-pencil"></span> Actualizar
                        </button>
                    </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</form>
    <style type="text/css">
        #fila_cabecera
        {
            font-weight: bold;
        }
    </style>


    <div class="panel panel-primary" style="border:none">
        <div class="panel-heading">Pedidos en Ruta</div>
    </div>

    <div class="container">
            <div class="row" >
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <label class="control-label">Tipo de Ruta</label>
                    <div class='input-group'>
                        <select id="s_filtro_tipo" class="form-control" style="height:30px">
                            <option value="">TODAS</option>
                            <option value="1">Entregas</option>
                            <option value="2">Retiros</optio>
                        </select>  
                    </div>
                </div>  
            </div> <br>
        <div class="panel-footer">                    
            <div class="pull-right">  
                <button class="btn btn-primary btn-sm" onclick="constultar()">Buscar</button>
            </div>
            <div class="clearfix"> </div>
        </div>       
    </div><br>

<!--Ruta de Retiro -->
<div id="panel-recibo" style="display:block">
    <div class="panel panel-primary" style="border:none">
        <div class="panel-heading">Ruta de Retiro</div>
    </div>

    <div class="container">
        <div id="tabla2" class="table-responsive" style="font-size:12px; overflow:hidden;">
         <table class="table table-condensed table-striped table-responsive tablaGenerada" id="tablaGenerada">
            <thead>
                <tr style="font-weight:bold">
                    <td>
                      Nº
                    </td>
                    <td>
                       CLIENTE  
                    </td>
                    <td>
                        TELÉFONO
                    </td>
                    <td>
                       CIUDAD  
                    </td>
                    <td>
                       DIRECCION  
                    </td>
                    <td>
                       CONTACTO  
                    </td>
                    <td>
                       FECHA ASIGNACIÓN  
                    </td>
                    <td>
                       MENSAJERO  
                    </td>
                    <td>
                        MODIFICAR
                    </td>
                </tr>
            </thead>

            <?php              
                for($i=0;$i<count($retiros_asignados);$i++)
                {
            ?>
                <tr>   
                     <td >
                          <?php echo $i+1; ?>
                     </td>
                     <td >
                          <?php echo $retiros_asignados[$i]['CLIENTE'] ?>
                     </td>    
                     <td >
                          <?php echo $retiros_asignados[$i]['TELEFONO'] ?>
                     </td>
                     <td >
                          <?php echo $retiros_asignados[$i]['CIUDAD'] ?>
                     </td> 
                     <td >
                          <?php echo $retiros_asignados[$i]['DIRECCION_RETIRO'] ?>
                     </td> 
                     <td >
                          <?php echo $retiros_asignados[$i]['CONTACTO'] ?>
                     </td> 
                     <td >
                          <?php echo $retiros_asignados[$i]['FECHA_FUE_ASIGNADO'] ?>
                     </td> 
                     <td >
                          <?php echo $retiros_asignados[$i]['USUARIO_NOMBRE']." ".$retiros_asignados[$i]['USUARIO_APELLIDO']; ?>
                     </td>
	                            <td style="text-align:center">
      				                    <center>
      				                    	<button id="<?php echo $retiros_asignados[$i]['ID_RETIRO']; ?>" type="button" class="btn btn-primary btn-sm" style="width:50px" onclick="asignarRetiro(this.id)">
      				                          	<span class="glyphicon glyphicon-share-alt">33</span>
      				                        </button>
      				                    </center>
	                            </td>
                </tr>
            <?php       
                }
            ?>

         </table>
        </div>
    </div>
  </div>
<!-- Ruta de Entrega -->
<div style="min-height:500px" id="panel-entrega" style="display:block">
    <div class="panel panel-primary" style="border:none">
        <div class="panel-heading">Ruta de Entrega</div>
    </div>

    <div class="container" >
        <div id="tabla" class="table-responsive" style="font-size:12px; overflow:hidden;" >
         <table class="table table-condensed table-striped table-responsive tablaGenerada" id="tablaGenerada2">
            <thead>
             <tr style="font-weight:bold">
                 <td>
                    Nº  
                 </td>
                 <td>
                    PEDIDO  
                 </td>
                 <td>
                     FECHA DE PEDIDO
                 </td>
                 <td>
                     CIUDAD
                 </td>
                 <td>
                     CLIENTE
                 </td>
                 <td>
                     PACIENTE
                 </td>
                 <td>
                     MEDICO TRATANTE
                 </td>
                 <td>
                     PRUEBA
                 </td>
                 <td>
                     FECHA EMPAQUE
                 </td>
                 <td>
                     MENSAJERO/ COURIER
                 </td>
                 <td>
                     FECHA DESPACHO
                 </td>
                 <td>
                     ESTADO
                 </td>
                 <td>
                     MODIFICAR
                 </td>
             </tr>
             </thead>
            
            <?php              
                for($i=0;$i<count($pedidos_ruta);$i++)
                {
            ?>
                <tr>   
                     <td style="cursor:pointer" onclick="detallePedido('<?php echo $pedidos_ruta[$i]['numero'] ?>')" >
                          <?php echo $i+1; ?>
                     </td>
                     <td style="cursor:pointer" onclick="detallePedido('<?php echo $pedidos_ruta[$i]['numero'] ?>')" >
                          <?php echo $pedidos_ruta[$i]['numero'] ?>
                     </td>
                     <td style="cursor:pointer" onclick="detallePedido('<?php echo $pedidos_ruta[$i]['numero'] ?>')" >
                         <?php echo $pedidos_ruta[$i]['fing'] ?>
                     </td>
                     <td style="cursor:pointer" onclick="detallePedido('<?php echo $pedidos_ruta[$i]['numero'] ?>')" >
                          <?php echo $pedidos_ruta[$i]['ciudad'] ?>
                     </td>
                     <td style="cursor:pointer" onclick="detallePedido('<?php echo $pedidos_ruta[$i]['numero'] ?>')" >
                          <?php echo $pedidos_ruta[$i]['cliente'] ?>
                     </td>
                     <td style="cursor:pointer" onclick="detallePedido('<?php echo $pedidos_ruta[$i]['numero'] ?>')" >
                          <?php echo $pedidos_ruta[$i]['paciente'] ?>
                     </td>
                     <td style="cursor:pointer" onclick="detallePedido('<?php echo $pedidos_ruta[$i]['numero'] ?>')" >
                          <?php echo $pedidos_ruta[$i]['medico'] ?>
                     </td>
                     <td style="cursor:pointer" onclick="detallePedido('<?php echo $pedidos_ruta[$i]['numero'] ?>')" >
                         <?php echo $pedidos_ruta[$i]['NOMBRE_PRUEBA'] ?>
                     </td>
                     <td style="cursor:pointer" onclick="detallePedido('<?php echo $pedidos_ruta[$i]['numero'] ?>')" >
                         <?php echo $pedidos_ruta[$i]['FECHA_EMPAQUE'] ?>
                     </td>
                     <td style="cursor:pointer" onclick="detallePedido('<?php echo $pedidos_ruta[$i]['numero'] ?>')" >
                     <?php echo $pedidos_ruta[$i]['mensajerocourirer'] ?>
                     </td>
                     <td style="cursor:pointer" onclick="detallePedido('<?php echo $pedidos_ruta[$i]['numero'] ?>')" >
                        <?php echo $pedidos_ruta[$i]['FECHA_SALIDA'] ?>
                     </td>
                     <td style="cursor:pointer" onclick="detallePedido('<?php echo $pedidos_ruta[$i]['numero'] ?>')" >
                        <?php echo $pedidos_ruta[$i]['estado'] ?>
                     </td>
                     <td style="text-align:center">
                          
                          <center>
                                    <button id="<?php echo $pedidos_ruta[$i]['ID_PEDIDO']; ?>" type="button" class="btn btn-primary btn-sm" style="width:50px" onclick="mostrarModalEntrega(this.id)">
                                          <span class="glyphicon glyphicon-share-alt">33</span>
                                      </button>
                            </center>
                     </td>

                </tr>
            <?php                 
               }
            ?>
         </table>
        </div>
    </div>
</div>

	<script src="<?php echo base_url() ?>assets/librerias/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/librerias/tabletools/2.2.4/js/dataTables.tableTools.min.js"/></script>
    <script type="text/javascript"> 
	
    //INICIALIZO DATEPICKER
    $('.dp').datepicker({format: "yyyy-mm-dd",
            language: 'es',
            autoclose: true,
            forceParse: true
    });

    //CONFIGURO EL ALERT
              var data=null;
              var params = 
              {                
                  onInit: function(data) {},
                  onCreate: function(notification, data) {},
                  onClose: function(notification, data) {}
              };                                
               params.heading = 'Notificación';
               params.theme = 'teal'; //ruby
               params.life = '4000';//4segundos 

                //var text = 'Debe abrir la caja.';
                //$.notific8(text, params);

	function constultarPedidos()
    {}

    window.onload=function alcargar()
    {
        aplicarPaginado();
		aplicarPaginado2();
    }   

    function aplicarPaginado() 
    {
          
          var table = $('#tablaGenerada').dataTable(
          {
              language: {
                  processing: "Procesando...",
                  search: "Filtro",
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
              },
              aLengthMenu: [
                            [20, 100, 200, -1],    //valor q utilizo en la propiedad iDisplayLength para asociar a una opcion
                            [20, 100, 200, "Todo"]  //opciones del select para la cant de registros a mostrar
                            ],
              iDisplayLength: -1,
              "bSort": true, //habilito el ordenar para todas las columnas
              "order": [],  //para que no ordene la primera columna por default
              "columnDefs": [{
                                    "targets"  : 'no-sort',
                                    "orderable": false,
                            }],

/*
              "aoColumnDefs": [  //habilito la opcion de ordenar en la columna deseada
                                { "aTargets": [ 0 ],"bSortable": true },
                                { "aTargets": [ 1 ],"bSortable": true },
                                { "aTargets": [ 2 ],"bSortable": true },
                                { "aTargets": [ 3 ],"bSortable": true },
                                { "aTargets": [ 4 ],"bSortable": true },

                                { "aTargets": [ 5 ],"bSortable": true },
                                { "aTargets": [ 6 ],"bSortable": true },
                                { "aTargets": [ 7 ],"bSortable": true },
                                { "aTargets": [ 8 ],"bSortable": true },
                                { "aTargets": [ 9 ],"bSortable": true },
                                { "aTargets": [ 10 ],"bSortable": true },
                                { "aTargets": [ 11 ],"bSortable": false }


                              ] */
          });

            var tableTools = new $.fn.dataTable.TableTools(table, {
                'aButtons': [
                    {
                        'sExtends': 'xls',
                        'sButtonText': 'Exportar a Excel',
                        'sFileName': 'Reporte de Pedidos en Ruta de Retiro.xls'
                    }/*,
                    {
                        'sExtends': 'print',
                        'bShowAll': true,
                        'sButtonText': 'Imprimir'
                    }*/,
                    {
                        'sExtends': 'pdf',
                        'bFooter': false,
                        'sButtonText': 'Imprimir desde PDF',
                        'sFileName': 'Reporte de Pedidos en Ruta de Retiro.pdf'
                    }
                ],
                'sSwfPath': '<?php echo base_url() ?>assets/librerias/tabletools/2.2.4/swf/copy_csv_xls_pdf.swf'
            });
            $(tableTools.fnContainer()).insertBefore('#tablaGenerada_wrapper');
    }
	function aplicarPaginado2() 
    {
          
          var table2 = $('#tablaGenerada2').dataTable(
          {
              language: {
                  processing: "Procesando...",
                  search: "Filtro",
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
              },
              aLengthMenu: [
                            [20, 100, 200, -1],    //valor q utilizo en la propiedad iDisplayLength para asociar a una opcion
                            [20, 100, 200, "Todo"]  //opciones del select para la cant de registros a mostrar
                            ],
              iDisplayLength: -1,
              "bSort": true, //habilito el ordenar para todas las columnas
              "order": [],  //para que no ordene la primera columna por default
              "columnDefs": [{
                                    "targets"  : 'no-sort',
                                    "orderable": false,
                            }],

/*
              "aoColumnDefs": [  //habilito la opcion de ordenar en la columna deseada
                                { "aTargets": [ 0 ],"bSortable": true },
                                { "aTargets": [ 1 ],"bSortable": true },
                                { "aTargets": [ 2 ],"bSortable": true },
                                { "aTargets": [ 3 ],"bSortable": true },
                                { "aTargets": [ 4 ],"bSortable": true },

                                { "aTargets": [ 5 ],"bSortable": true },
                                { "aTargets": [ 6 ],"bSortable": true },
                                { "aTargets": [ 7 ],"bSortable": true },
                                { "aTargets": [ 8 ],"bSortable": true },
                                { "aTargets": [ 9 ],"bSortable": true },
                                { "aTargets": [ 10 ],"bSortable": true },
                                { "aTargets": [ 11 ],"bSortable": false }


                              ] */
          });

            var tableTools = new $.fn.dataTable.TableTools(table2, {
                'aButtons': [
                    {
                        'sExtends': 'xls',
                        'sButtonText': 'Exportar a Excel',
                        'sFileName': 'Reporte de Pedidos en Ruta de Entrega.xls'
                    }/*,
                    {
                        'sExtends': 'print',
                        'bShowAll': true,
                        'sButtonText': 'Imprimir'
                    }*/,
                    {
                        'sExtends': 'pdf',
                        'bFooter': false,
                        'sButtonText': 'Imprimir desde PDF',
                        'sFileName': 'Reporte de Pedidos en Ruta de Entrega.pdf'
                    }
                ],
                'sSwfPath': '<?php echo base_url() ?>assets/librerias/tabletools/2.2.4/swf/copy_csv_xls_pdf.swf'
            });
            $(tableTools.fnContainer()).insertBefore('#tablaGenerada2_wrapper');
    }

    function detallePedido(nro_pedido)
    {

                //busco las pruebas para el detalle del pedido
                $.isLoading({
                              text: "Cargando",
                              position: "overlay"
                           });
                $.ajax({
                         type: 'POST',
                         async:false,
                         dataType: 'json',
                         data: {nro_pedido:nro_pedido},
                         url: '<?php echo base_url(); ?>index.php/pedido/pedidos/pruebasDetallePedido',
                         success: function (data) 
                         {    
                            var paciente = data[0]['NOMBRE_APELLIDO'];
                            $("#dp_paciente").html(paciente);
                            $("#dp_pedido").html(nro_pedido);

                                var html=''
                                    +'<table class="table table-condensed table-hover">'
                                    +'  <tr style="font-weight: bold">'
                                    +'      <td>'
                                    +'          Prueba'
                                    +'      </td>'
                                    +'      <td>'
                                    +'          Fecha de Salida'
                                    +'      </td>'
                                    +'      <td>'
                                    +'          Fecha de Retorno'
                                    +'      </td>'
                                    +'      <td>'
                                    +'          Estado'
                                    +'      </td>'
                                    +'      <td>'
                                    +'          Despachado'
                                    +'      </td>'
                                    +'  </tr>'

                            //TOMO LAS PRUEBAS DEL PRODUCTO DETALLE Y LAS PONGO EN UNA TABLA
                            for (var i = 0; i < data.length; i++)
                            {
                                var nombre_prueba = data[i]['NOMBRE_PRUEBA'];
                                var fecha_salida = data[i]['FECHA_SALIDA'];
                                var fecha_regreso = data[i]['FECHA_REGRESO'];

                                var nombre_estado = data[i]['NOMBRE_ESTADO'];
                                var despachado = data[i]['DESPACHADO'];
                                if(despachado=='S') despachado="Si";

                                if(nombre_estado=="TERMINADO")
                                    var estilo =" class='alert alert-success' ";
                                else
                                    var estilo="";

                                html+=' <tr '+estilo+' >';
                                html+='     <td>';
                                html+=          nombre_prueba;
                                html+='     </td>';
                                html+='     <td>';
                                html+=          fecha_salida;
                                html+='     </td>';
                                html+='     <td>';
                                html+=          fecha_regreso;
                                html+='     </td>';
                                html+='     <td>';
                                html+=          nombre_estado;
                                html+='     </td>';
                                html+='     <td style="text-align:center">';
                                html+=          despachado;
                                html+='     </td>';
                                html+=' </tr>';
                            }
                            html+=' </table>';
                            $('#pd_pruebas').html("");
                            $('#pd_pruebas').append(html);                       
                  
                         }
                });  
        
                $.ajax({
                         type: 'POST',
                         async:false,
                         dataType: 'json',
                         data: {nro_pedido:nro_pedido},
                         url: '<?php echo base_url(); ?>index.php/pedido/pedidos/procesosDetallePedido',
                         success: function (data) 
                         {    
                                var html=''
                                    +'<table class="table table-condensed table-hover">'
                                    +'  <tr style="font-weight: bold">'
                                    +'      <td>'
                                    +'          Producto'
                                    +'      </td>'
                                    +'      <td>'
                                    +'          Código'
                                    +'      </td>'
                                    +'      <td>'
                                    +'          Proceso'
                                    +'      </td>'
                                    +'      <td>'
                                    +'          Fecha'
                                    +'      </td>'
                                    +'      <td>'
                                    +'          Estado'
                                    +'      </td>'
                                    +'  </tr>'

                            //TOMO LOS PROCESOS DEL PRODUCTO DETALLE Y LAS PONGO EN UNA TABLA
                            var producto_iteracion_anterior="";
                            for (var i = 0; i < data.length; i++)
                            {
                              var producto = data[i]['PROD_NOM_PROD'];
                              if(i!=0)//aqui controlo que se muestre solo una celda con el nombre del producto
                              {
                                if(producto==producto_iteracion_anterior)
                                {
                                  producto_iteracion_anterior=producto;
                                  producto="";
                                }
                                else
                                {
                                  producto_iteracion_anterior=producto;
                                }
                              }
                              else
                                producto_iteracion_anterior=producto;

                                var codigo = data[i]['PROD_COD_PROD'];
                                var proceso = data[i]['NOMBRE_PROCESO'];
                                var fecha = data[i]['FECHA'];
                                    if(fecha==null)
                                        fecha="";
                                var estado = data[i]['NOMBRE_ESTADO'];

                                if(estado=="TERMINADO")
                                    var estilo =" class='alert alert-success' ";
                                else
                                    var estilo="";

                                html+=' <tr '+estilo+' >';
                                html+='     <td>';
                                html+=          producto;
                                html+='     </td>';
                                html+='     <td>';
                                html+=          codigo;
                                html+='     </td>';
                                html+='     <td>';
                                html+=          proceso;
                                html+='     </td>';
                                html+='     <td>';
                                html+=          fecha;
                                html+='     </td>';
                                html+='     <td>';
                                html+=          estado;
                                html+='     </td>';
                                html+=' </tr>';
                            }
                            html+=' </table>';
                            $('#pd_procesos').html("");
                            $('#pd_procesos').append(html);                      

                            $.isLoading("hide");   
                            $('#modal_detalle_pedido').modal('show');                   
                         }
                });  
    }

    function constultar()
    {
      var filtro = $("#s_filtro_tipo").val();

      if(filtro=="")
      {
        $("#panel-entrega").attr("style","display:block");
        $("#panel-recibo").attr("style","display:block");
      }
      else if(filtro==1)
      {
         $("#panel-entrega").attr("style","display:block");
         $("#panel-recibo").attr("style","display:none");
      }
      else if(filtro==2)
      {
        $("#panel-entrega").attr("style","display:none");
         $("#panel-recibo").attr("style","display:block");
      }

    }
	function asignarRetiro(id_retiro)
    {
    id=id_retiro;
    $("#modal-asignar-recibe").modal('show');
    $("#id").val(id);

	  
    }
  function mostrarModalEntrega(id){
    
    idr=id;
    $("#modal-entrega-pedido").modal('show');
    $("#id_entrega").val(idr);
  }
  function realizarEntrega(){

        
        
          $("#form_entrega").submit();
          //$("#modal-asignar-recibe").modal('hide');
                    
  }
	function realizarEdicion()
    {
      var nombre=$("#c_nombre").val().trim();
        
        if(nombre=="")
        {
            var text = 'Seleccione un Nombre';
            $.notific8(text, params); 
            return;
        }
        else
        {
          $("#form_retiro").submit();
          //$("#modal-asignar-recibe").modal('hide');
                    
        }
    }

    

    </script>