<!-- <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet"> -->

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

<!--



<!--ventana modal para despachar pruebas-->
        <div class="modal fade" id="modal-despacho-pruebas">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Despachar Pruebas</h4>
                    </div>
                    <div class="modal-body" id="cuerpo-modal-despacho-prueba">
                      <div class="table-responsive">
                        <table class="table table-condensed table-striped table-bordered">
                          <tr style="font-weight: bold">
                            <td colspan="2" class="bg-primary" style="text-align: center">
                              DESPACHO
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Despacho: 
                            </td>
                            <td>
                                                  <select onchange="toggleDespacho()" id="s_despacho" class="form-control" style="height:30px">  
                                                      <option value="">Seleccione...</option>      
                                                       <option value="1">Courier</option> 
                                                       <option value="2">Mensajería Interna</option> 
                                                  </select>
                            </td>
                          </tr>

                          <tr style="display: none" id="fila-mensajeros">
                            <td>
                              Mensajero: 
                            </td>
                            <td>
                                    <select id="s_mensajero" class="form-control" style="height:30px">
                                      <option value="">Seleccione...</option> 
                                <?php 
                                      for ($i=0; $i < count($mensajeros); $i++) 
                                      { 
                                  ?> 
                                        <option value="<?php echo $mensajeros[$i]['USUARIO_ID'];?>"><?php echo $mensajeros[$i]['NOMBRE_MENSAJERO'] ;?>                                         
                                        </option>
                                <?php 
                                      }
                                 ?>
                                      </select>
                            </td>
                          </tr>

                          <tr style="display: none" id="fila-courier">
                            <td>
                              Courier: 
                            </td>
                            <td>
                                    <select id="s_courier" class="form-control" style="height:30px">
                                      <option value="">Seleccione...</option> 
                                <?php 
                                      for ($i=0; $i < count($courier); $i++) 
                                      { 
                                  ?> 
                                        <option value="<?php echo $courier[$i]['ID_COURIER'];?>">
                                        <?php echo $courier[$i]['NOMBRE_COURIER']; ?> 
                                        </option>
                                <?php 
                                      }
                                 ?>
                                      </select>
                            </td>
                          </tr>

                          <tr style="display: none" id="fila-recibe">
                            <td>
                              Tracking
                            </td>
                            <td>
                              <input id="c_recibe" type="text" class="form-control">
                            </td>
                          </tr>

                          <tr style="display: none" id="fila-flete">
                            <td>
                              Flete:
                            </td>
                            <td>
                              <input id="c_flete" type="text" class="form-control" style="max-width:200px">
                            </td>
                          </tr>
                        </table>

                      </div>
                    </div><!-- fin body -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-sm" onclick="realizarDespacho();" >
              <span class="glyphicon glyphicon-"></span> Despachar
                </button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
<!--fin ventana modal para despachar pruebas-->




    <div class="panel panel-primary" style="border:none">
        <div class="panel-heading">Consultar Pedidos Entregados</div>
        <div class="panel-body">
            <div class="row" >   
        <div class="col-md-4 col-sm-2 col-xs-12">
                  <label class="control-label">Fecha de inicio</label>
                    <div class='input-group'>
                        <span onclick="limpiarFecha('fecha_inicio')" class="input-group-addon left" style="cursor:pointer">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                        <input value="<?php $fecha = date("Y-m-d"); echo $fecha; ?>" type="text" id="fecha_inicio" placeholder="yyyy-mm-dd" class="form-control dp" style="height:30px" readonly/>   
                    </div>
                </div>   
                <div class="col-md-4 col-sm-2 col-xs-12">
                  <label class="control-label">Fecha de fin</label>
                    <div class='input-group'>
                        <span onclick="limpiarFecha('fecha_fin')" class="input-group-addon left" style="cursor:pointer">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                        <input value="<?php $fecha = date("Y-m-d"); echo $fecha; ?>" type="text" id="fecha_fin" placeholder="yyyy-mm-dd" class="form-control dp" style="height:30px" readonly/>   
                    </div>
                </div>
                <!-- campo Cliente -->
                <div class="col-md-4 col-sm-2 col-xs-12">
                    <div class="form-group form-group-sm">                
                        <label>Cliente</label>                            
                        <input type="text" id="cliente" mayusculas="^[A-Za-zÁÉÍÓÚáéíóúÑñ]+$" maxlength="50" class="form-control" />
                    </div>
                </div>
        <!-- campo Tipo -->
                <div class="col-md-4 col-sm-3 col-xs-12">
                    <div class="form-group form-group-sm">                
                        <label>Despacho</label>                            
                        <select id="activo" class="form-control" style="height:30px" onchange="seleccionarDespacho(this.value)">
            <option value="0">Seleccione una Ocpión</option>
            <option value="1">Mensajeria Interna</option>
            <option value="2">Courier</option>
            </select>
                    </div>
                </div>
        <!-- campo Mensajero -->
                <div id="men" style="display: none;" class="col-md-4 col-sm-2 col-xs-12">
                    <div class="form-group form-group-sm">                

          <label class="control-label required" for="">Mensajero<span class="required"> * </span></label>           
          <select id="mensajero" class="form-control" style="height:30px">
            <option value="">TODOS</option>
              <?php foreach ($mensajeros as $array) 
                {?>
                  <option value="<?php echo $array['ID_MENSAJERO']; ?>" ><?php echo $array['NOMBRE_MENSAJERO']; ?></option>  
              <?php } ?>
          </select>
           
          </div>
                </div>
        <!-- campo Courier -->
        <div id="cou" style="display: none;"   class="col-md-4 col-sm-4 col-xs-12">
          <div class="form-group form-group-sm">                
            <label class="control-label required" for="">Courier<span class="required"> * </span></label> 
            <select id="ID_COURIER" class="form-control" style="height:30px">
            <option value="">TODOS</option>
              <?php foreach ($courier as $array) 
                {?>
                  <option value="<?php echo $array['ID_COURIER']; ?>" ><?php echo $array['NOMBRE_COURIER']; ?></option>  
              <?php } ?>
            </select>
          </div>
        </div>
            </div>

        </div>
        <div class="panel-footer">                    
      <div class="pull-right">  
                <button class="btn btn-primary btn-sm" onclick="constultarPedidos()">Consultar</button>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="container">
      <div id="tabla" class="table-responsive" style="font-size:11px; text-align:center; cursor: pointer"></div>
    </div>


    <style type="text/css">
        #fila_cabecera
        {
            font-weight: bold;
        }

    </style>

<div style="min-height:500px">
    <div class="panel panel-primary" style="border:none">
        <div class="panel-heading">Pedidos Empacados</div>
    </div>

    <div class="container">
        <div id="tabla" class="table-responsive" style="font-size:12px;">
         <table class="table table-condensed table-striped table-responsive" id="tablaGenerada">
            <thead>
             <tr>
                <td colspan="11">
                            <center>
                                <button class="btn btn-primary btn-sm" type="button" onclick="despacharPruebas();">
                                    <span class="glyphicon glyphicon-"></span>
                                    DESPACHAR
                                </button>
                            </center>                   
                </td>
             </tr>
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
                     DIAS
                 </td>
                 <td>
                    	DESPACHAR
                 </td>
             </tr>
             </thead>
            
            <?php              
                for($i=0;$i<count($pedidos_empacados);$i++)
                {
            ?>
                <tr >
                    <td style="text-align:center; cursor:pointer" onclick="detallePedido('<?php echo $pedidos_empacados[$i]['numero'] ?>')">
                          <?php echo $i+1; ?>
                     </td>
                     <td style="cursor:pointer" onclick="detallePedido('<?php echo $pedidos_empacados[$i]['numero'] ?>')">
                          <?php echo $pedidos_empacados[$i]['numero'] ?>
                     </td>
                     <td style="cursor:pointer"  onclick="detallePedido('<?php echo $pedidos_empacados[$i]['numero'] ?>')">
                         <?php echo $pedidos_empacados[$i]['fing'] ?>
                     </td>
                     <td style="cursor:pointer"  onclick="detallePedido('<?php echo $pedidos_empacados[$i]['numero'] ?>')">
                          <?php echo $pedidos_empacados[$i]['ciudad'] ?>
                     </td>
                     <td style="cursor:pointer"  onclick="detallePedido('<?php echo $pedidos_empacados[$i]['numero'] ?>')">
                          <?php echo $pedidos_empacados[$i]['cliente'] ?>
                     </td>
                     <td style="cursor:pointer"  onclick="detallePedido('<?php echo $pedidos_empacados[$i]['numero'] ?>')">
                          <?php echo $pedidos_empacados[$i]['paciente'] ?>
                     </td>
                     <td style="cursor:pointer"  onclick="detallePedido('<?php echo $pedidos_empacados[$i]['numero'] ?>')">
                          <?php echo $pedidos_empacados[$i]['medico'] ?>
                     </td>
                     <td style="cursor:pointer"  onclick="detallePedido('<?php echo $pedidos_empacados[$i]['numero'] ?>')">
                         <?php echo $pedidos_empacados[$i]['NOMBRE_PRUEBA'] ?>
                     </td>
                     <td style="cursor:pointer"  onclick="detallePedido('<?php echo $pedidos_empacados[$i]['numero'] ?>')">
                         <?php echo $pedidos_empacados[$i]['FECHA_EMPAQUE']." ".$pedidos_empacados[$i]['HORA_EMPAQUE']?>
                     </td>
                     <td style="cursor:pointer"  onclick="detallePedido('<?php echo $pedidos_empacados[$i]['numero'] ?>')">
                         <?php echo $pedidos_empacados[$i]['DIAS']; ?>
                     </td>
                     <td style="cursor:pointer" style="text-align:center">
                       <center>
                        <input id="<?php echo $pedidos_empacados[$i]['ID_PRUEBAS']; ?>" data-toggle="toggle" data-on="Si" data-off="No" type="checkbox" data-size="small" data-offstyle="danger" class="dt" >
                       </center>
                     </td>
                </tr>
            <?php                 
               }
            ?>
              <tfoot>
               <tr>
                  <td colspan="11">
                              <center>
                                  <button class="btn btn-primary btn-sm" type="button" onclick="despacharPruebas();">
                                      <span class="glyphicon glyphicon-"></span>
                                      DESPACHAR
                                  </button>
                              </center>                   
                  </td>
               </tr>
             </tfoot> 
         </table>

        </div>
    </div>


</div>



    <script src="<?php echo base_url() ?>assets/librerias/js/jquery.dataTables.min.js"></script>
     <script src="<?php echo base_url() ?>assets/librerias/tabletools/2.2.4/js/dataTables.tableTools.min.js"/></script>
    <!-- <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script> -->
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
               params.theme = 'ruby'; //ruby
               params.life = '4000';//4segundos 

                //var text = 'Debe abrir la caja.';
                //$.notific8(text, params);

    function constultarPedidos()
      {
        var f_inicio  = $("#fecha_inicio").val().trim();
        var f_fin     = $("#fecha_fin").val().trim();
      var cliente   = $("#cliente").val().trim();
      var courier   = $("#ID_COURIER").val().trim();
      var mensajero = $("#mensajero").val().trim();

      
        if(f_inicio!="")
        var f1 = new Date(f_inicio);

      if(f_fin!="")
        var f2 = new Date(f_fin);

      //valido fechas
      if(f1>f2)
      {
            var text = 'Intervalo de fechas incorrecto';
              $.notific8(text, params);
              return;
      }
            
            $.isLoading({
                          text: "Cargando",
                          position: "overlay"
                       });
               $.ajax({
                        type: 'POST',
                        async:false,
                        dataType: 'json',
                        data: {f_inicio:f_inicio,f_fin:f_fin,cliente:cliente,mensajero:mensajero,courier:courier},
                        url: '<?php echo base_url(); ?>index.php/pedido/pedidos/obtenerPedidosEntregados',
                        success: function (data) 
                        {     
                           generarTablaDinamica(data);   
                           $.isLoading("hide");                     
                        }
            
               });  
      }

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
                                { "aTargets": [ 9 ],"bSortable": true },
                                { "aTargets": [ 10 ],"bSortable": false }

                              ] 
          });

            var tableTools = new $.fn.dataTable.TableTools(table, {
                'aButtons': [
	                    {
	                        'sExtends': 'xls',
	                        'sButtonText': 'Exportar a Excel',
	                        'sFileName': 'Reporte de Pedidos Empacados.xls'
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
	                        'sFileName': 'Reporte de Pedidos Empacados.pdf'
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

                            $.isLoading("hide") ;  
                            $('#modal_detalle_pedido').modal('show');                   
                         }
                });  
    }
    function seleccionarDespacho(id){

          
          if(id==0){

            $("#men").hide();
            $("#cou").hide();
          }
          if(id==1){

            $("#men").show();
            $("#cou").hide();
        
          }
          if (id==2) {
            $("#cou").show();
            $("#men").hide();
          
          }       
          
      }

    function despacharPruebas()
    {
        var btns_desp = $(".dt");
        var cadena ="";
        btns_desp.each(function()
        {
            if( $(this).prop('checked') )
            {
              var id_btn_desp = $(this).attr("id");
              cadena+=id_btn_desp+"&&";
            }
        }); 

      if(cadena!="")
      {
          $('#modal-despacho-pruebas').modal('show');
      }
      else
      {
            var text = 'Seleccione al menos una PRUEBA';
            $.notific8(text, params); 
            return;  
      }
         
    }

    function toggleDespacho()
    {
      var despacho = $("#s_despacho").val().trim();

      if(despacho==1)
      {
        $("#fila-courier").attr("style","display:table-row");
        $("#fila-recibe").attr("style","display:table-row");
        $("#fila-flete").attr("style","display:table-row");

        $("#fila-mensajeros").attr("style","display:none");
      }
      else if(despacho==2)
      {
        $("#fila-mensajeros").attr("style","display:table-row");
        $("#fila-flete").attr("style","display:none");

        $("#fila-courier").attr("style","display:none");
        $("#fila-recibe").attr("style","display:none");
      }   
      else
      {
        $("#fila-mensajeros").attr("style","display:none");
        $("#fila-flete").attr("style","display:none");
        $("#fila-courier").attr("style","display:none");
        $("#fila-recibe").attr("style","display:none");
      } 
    }

    function realizarDespacho()
    {
          var btns_desp = $(".dt");
          var cadena ="";
          btns_desp.each(function()
          {
              if( $(this).prop('checked') )
              {
                var id_btn_desp = $(this).attr("id");
                cadena+=id_btn_desp+"&&";
              }
          }); 

        if(cadena!="")
        {
          cadena=cadena.substring(0,cadena.length-2);         
        }

        //realizo validaciones
        var despacho =$("#s_despacho").val().trim();
        if(despacho=="")
        {
            var text = 'Seleccione DESPACHO';
            $.notific8(text, params); 
            return; 
        }
        else if(despacho==1)
        {
          if($("#s_courier").val().trim()=="")
          {
              var text = 'Seleccione COURIER';
              $.notific8(text, params); 
              return; 
          }
          else if($("#c_recibe").val().trim()=="")
          {
              var text = 'Campo RECIBE está vacío';
              $.notific8(text, params); 
              return;   
          }
          else if($("#c_flete").val().trim()=="")
          {
              var text = 'Campo FLETE está vacío';
              $.notific8(text, params); 
              return;   
          }
        }
        else if(despacho==2)
        {
            if($("#s_mensajero").val().trim()=="")
            {
                var text = 'Seleccione MENSAJERO';
                $.notific8(text, params); 
                return; 
            }
        }

        //obtengo los datos
        var courier = $("#s_courier").val().trim();
        var recibe = $("#c_recibe").val().trim();
        var flete = $("#c_flete").val().trim();
        var mensajero = $("#s_mensajero").val().trim();

        var tipoMensajeria = $("#s_despacho").val().trim();
        if(tipoMensajeria==1)
          tipoMensajeria="Courier";
        else
          tipoMensajeria="Interna";

                $.isLoading({
                              text: "Cargando",
                              position: "overlay"
                           });
                $.ajax({
                         type: 'POST',
                         async:false,
                         dataType: 'json',
                         data: {cadena:cadena,courier:courier,recibe:recibe,flete:flete,mensajero:mensajero,tipoMensajeria:tipoMensajeria},
                         url: '<?php echo base_url(); ?>index.php/pedido/pedidos/DespacharPruebas',
                         success: function (data) 
                         {                           
                            $.isLoading("hide") ;   
                            window.location.reload();
                         }
                });            

    }

    </script>