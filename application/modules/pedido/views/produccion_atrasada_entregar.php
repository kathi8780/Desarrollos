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
	      		<table class="table table-responsive table-hover" style="border:none">
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

    <style type="text/css">
        #fila_cabecera
        {
            font-weight: bold;
        }
    </style>

<div style="min-height:500px">
    <div class="panel panel-primary" style="border:none">
        <div class="panel-heading">Pedidos Atrasados en Entrega</div>
    </div>

    <div class="container">
        <div class="row">
            
        </div>

        <div id="tabla" class="table-responsive" style="font-size:11px; cursor: pointer">
         <table class="table table-condensed table-striped table-responsive" id="tablaGenerada">
            <thead>
             <tr style="font-weight:bold">
                 <td>
                    Nº 
                 </td>
                 <td>
                    PEDIDO 
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
                     FECHA DE INGRESO
                 </td>
                 <td>
                     TOTAL PEDIDO
                 </td>
                 <td>
                     FLETE
                 </td>
                 <td>
                     RECARGO 20%
                 </td>
                 <td>
                     ABONO
                 </td>
                 <td>
                     SALDO
                 </td>
                 <td>
                     ESTADO
                 </td>
                 <td>
                     FACTURADO
                 </td>
                 <td>
                     MOTIVO
                 </td>
             </tr>
             </thead>
            
            <?php              
                for($i=0;$i<count($pedidos_atrasados_cliente);$i++)
                {
            ?>
                <tr onclick="detallePedido('<?php echo $pedidos_atrasados_cliente[$i]['numero'] ?>')" >
                     <td>
                          <?php echo $i+1 ?>
                     </td>
                     <td>
                          <?php echo $pedidos_atrasados_cliente[$i]['numero'] ?>
                     </td>
                     <td>
                          <?php echo $pedidos_atrasados_cliente[$i]['cliente'] ?>
                     </td>
                     <td>
                          <?php echo $pedidos_atrasados_cliente[$i]['paciente'] ?>
                     </td>
                     <td>
                          <?php echo $pedidos_atrasados_cliente[$i]['medico'] ?>
                     </td>
                     <td>
                         <?php echo $pedidos_atrasados_cliente[$i]['fing'] ?>
                     </td>
                     <td>
                         <?php echo $pedidos_atrasados_cliente[$i]['total'] ?>
                     </td>
                     <td>
                         <?php echo $pedidos_atrasados_cliente[$i]['flete'] ?>
                     </td>
                     <td>
                     <?php echo $pedidos_atrasados_cliente[$i]['recargo'] ?>
                     </td>
                     <td>
                        <?php echo $pedidos_atrasados_cliente[$i]['abono'] ?>
                     </td>
                     <td >
                       <?php echo $pedidos_atrasados_cliente[$i]['saldo'] ?>
                     </td>
                     <td >
                       <?php 
                            if($pedidos_atrasados_cliente[$i]['estado']=="PENDIENTE" )
                                $pedidos_atrasados_cliente[$i]['estado']="PRODUCCIÓN";
                       echo $pedidos_atrasados_cliente[$i]['estado'] 
                       ?>
                     </td>
                     <td style="text-align:center">
                        <?php 
                            if($pedidos_atrasados_cliente[$i]['facturado']=='N')
                                echo 'NO';
                            else
                                echo 'SI';
                        ?>
                     </td>
                     <td >
                       <?php echo $pedidos_atrasados_cliente[$i]['motivo'] ?>
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
                                { "aTargets": [ 9 ],"bSortable": false }
                              ] 
          });

            var tableTools = new $.fn.dataTable.TableTools(table, {
                'aButtons': [
                    {
                        'sExtends': 'xls',
                        'sButtonText': 'Exportar a Excel',
                        'sFileName': 'Reporte de Producción Atrasada en Entregar.xls'
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
                        'sFileName': 'Reporte de Producción Atrasada en Entregar.pdf'
                    }
                ],
                'sSwfPath': '<?php echo base_url() ?>assets/librerias/tabletools/2.2.4/swf/copy_csv_xls_pdf.swf'
            });
            $(tableTools.fnContainer()).insertBefore('#tablaGenerada_wrapper');
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

    </script>