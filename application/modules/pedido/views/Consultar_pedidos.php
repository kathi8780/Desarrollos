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
        <div class="panel-heading">Consultar pedidos</div>
        <div class="panel-body">
            <div class="row" >
                <div class="col-md-2 col-sm-2 col-xs-12">
                	<label class="control-label">Estado del Pedido</label>
                    <div class='input-group'>
						<select id="s_estado" class="form-control" style="height:30px">
							<option value="-1">TODOS</option>
                            <?php foreach ($estados as $estado) 
                            	{?>
                               	 <option value="<?php echo $estado['ID_ESTADOS']; ?>" >
                                       <?php 
                                       		if($estado['NOMBRE_ESTADO']=="PENDIENTE")
                                       			echo "PRODUCCION";
                                       		else
                                       			echo $estado['NOMBRE_ESTADO']; 
                                       ?>
                                  </option>  
                          <?php } ?>
						</select>  
                    </div>
                </div>  
                <div class="col-md-3 col-sm-3 col-xs-12">
                	<label class="control-label">Fecha de Inicio</label>
                    <div class='input-group'>
                        <span onclick="limpiarFecha('fecha_inicio')" class="input-group-addon left" style="cursor:pointer">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                        <input type="text" id="fecha_inicio" placeholder="yyyy-mm-dd" class="form-control dp" style="height:30px" readonly  value="" />   
                    </div>
                </div>   
                <div class="col-md-3 col-sm-3 col-xs-12">
                	<label class="control-label">Fecha de Fin</label>
                    <div class='input-group'>
                        <span onclick="limpiarFecha('fecha_fin')" class="input-group-addon left" style="cursor:pointer">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                        <input type="text" id="fecha_fin" placeholder="yyyy-mm-dd" class="form-control dp" style="height:30px" readonly/>   
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
    	<div id="tabla" class="table-responsive" style="font-size:10px; text-align:center; cursor: pointer"></div>
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

	    function poner_cargando()
	    {
            $.isLoading({
                          text: "Cargando",
                          position: "overlay"
                       });
	    }  

	    function quitar_cargando()
	    {
	    	$.isLoading("hide");  
	    }     

    	function constultarPedidos()
    	{
    		var f_inicio = $("#fecha_inicio").val().trim();
    		var f_fin = $("#fecha_fin").val().trim();
    		var estado = $("#s_estado").val().trim();
			

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
				                     data: {estado:estado, f_inicio:f_inicio, f_fin:f_fin},
				                     //url: '<?php echo base_url(); ?>index.php/pedido/pedidos/obtenerPedidos',
									 url: '<?php echo base_url(); ?>index.php/pedido/pedidos/buscarPedidosAgProd',
				                     success: function (data) 
				                     {     
				                        generarTablaDinamica(data);   
				                        quitar_cargando();           
				                     }

				            });  
    	}
		
		function generarTablaDinamica(pedidos)
        {
            $("#tabla").html(""); // limpio el div que contiene la tabla generaada

            //tabla
            var tabla = document.createElement("table");
            var thead = document.createElement("thead");
            var tbody = document.createElement("tbody");

            //cabecera
            var filaCabecera = document.createElement("tr");
						var celda0 = document.createElement("td");
			            var celda1 = document.createElement("td");
			            var celda2 = document.createElement("td");
			            var celda3 = document.createElement("td");
			            var celda4 = document.createElement("td");
			            var celda5 = document.createElement("td");
			            var celda11 = document.createElement("td");
			            var celda12 = document.createElement("td");
						var celda13 = document.createElement("td");
						//var celda14 = document.createElement("td");
		

						var textoCelda0 = document.createTextNode("Nº");
			            var textoCelda1 = document.createTextNode("PEDIDO");
			            var textoCelda2 = document.createTextNode("CLIENTE");
			            var textoCelda3 = document.createTextNode("PACIENTE");
			            var textoCelda4 = document.createTextNode("MEDICO TRATANTE");
			            var textoCelda5 = document.createTextNode("FECHA INGRESO");
			            var textoCelda11 = document.createTextNode("PRUEBA");
			            var textoCelda12 = document.createTextNode("EDITAR");
						var textoCelda13 = document.createTextNode("CANTIDAD");
						//var textoCelda14 = document.createTextNode("IMPRIMIR");
			            
						celda0.appendChild(textoCelda0);
			            celda1.appendChild(textoCelda1);
			            celda2.appendChild(textoCelda2);
			            celda3.appendChild(textoCelda3);
			            celda4.appendChild(textoCelda4);
			            celda5.appendChild(textoCelda5);
			            celda11.appendChild(textoCelda11);
			            celda12.appendChild(textoCelda12);
						celda13.appendChild(textoCelda13);
						//celda14.appendChild(textoCelda14);

						filaCabecera.appendChild(celda0);
			            filaCabecera.appendChild(celda1);
			            filaCabecera.appendChild(celda2);
			            filaCabecera.appendChild(celda3);
			            filaCabecera.appendChild(celda4);
			            filaCabecera.appendChild(celda5);
			            filaCabecera.appendChild(celda11);
						filaCabecera.appendChild(celda13);
			            filaCabecera.appendChild(celda12);
						//filaCabecera.appendChild(celda14);
			            
			            filaCabecera.setAttribute("id","fila_cabecera");
			            thead.appendChild(filaCabecera);

			            //CUERPO
			            for (var i = 0; i < pedidos.length; i++)
			            {
			                var numero = pedidos[i]['numero']; 
			                var cliente = pedidos[i]['cliente']; 
			                var paciente = pedidos[i]['paciente']; 
			                var medico = pedidos[i]['medico']; 
			                var f_ing = pedidos[i]['fing'];
							var cantid = pedidos[i]['CANTID'];

			                var total_p = pedidos[i]['total']; 
			                var flete = pedidos[i]['flete']; 
			                var recargo = pedidos[i]['recargo']; 
			                var abono = pedidos[i]['abono']; 
			                var saldo = pedidos[i]['saldo'];

			                var estado = pedidos[i]['estado'];
			                if(estado=='PENDIENTE') estado="PRODUCCIÓN";
			                var facturado = pedidos[i]['facturado']; 
			                var motivo = pedidos[i]['motivo'];
							var prueba = pedidos[i]['NOMBRE_PRUEBA'];

			                //var accion ="Seleccionar";

			                var fila = document.createElement("tr");

							var celda0 = document.createElement("td");
			                var celda1 = document.createElement("td");
			                var celda2 = document.createElement("td");
			                var celda3 = document.createElement("td");
			                var celda4 = document.createElement("td");
			                var celda5 = document.createElement("td");
			                var celda11 = document.createElement("td");       
			                var celda12 = document.createElement("td");   
							var celda13 = document.createElement("td"); 
							//var celda14 = document.createElement("td"); 							

							var textoCelda0 = document.createTextNode(i+1);
			                var textoCelda1 = document.createTextNode(numero);
			                var textoCelda2 = document.createTextNode(cliente);
			                var textoCelda3 = document.createTextNode(paciente);
			                var textoCelda4 = document.createTextNode(medico);
			                var textoCelda5 = document.createTextNode(f_ing);
			                var textoCelda11 = document.createTextNode(prueba);			 
							var textoCelda13 = document.createTextNode(cantid);                

							celda0.appendChild(textoCelda0);
			                celda1.appendChild(textoCelda1);   
			                celda2.appendChild(textoCelda2); 
			                celda3.appendChild(textoCelda3); 
			                celda4.appendChild(textoCelda4); 
			                celda5.appendChild(textoCelda5); 
			                celda11.appendChild(textoCelda11); 
							celda13.appendChild(textoCelda13);

			                var btn = document.createElement("input");
			                btn.setAttribute("class", "btn btn-primary btn-xs");
			                btn.setAttribute("type", "button");
			                btn.setAttribute("value", "Editar" );
			                btn.setAttribute("onclick","modificarPedido('"+numero+"')");
			                celda12.appendChild(btn);
			                celda12.setAttribute("style","text-align:center"); 
							
							//var btn2 = document.createElement("input");
			                //btn2.setAttribute("class", "btn btn-primary btn-xs");
			                //btn2.setAttribute("type", "button");
			                //btn2.setAttribute("value", "Imprimir" );
			                //btn2.setAttribute("onclick","VerReporte('"+numero+"')");
			                //celda14.appendChild(btn2);
			                //celda14.setAttribute("style","text-align:center"); 

							fila.appendChild(celda0);
			                fila.appendChild(celda1);
			                fila.appendChild(celda2);
			                fila.appendChild(celda3);
			                fila.appendChild(celda4);
			                fila.appendChild(celda5);
							fila.appendChild(celda13);
			                fila.appendChild(celda11);
							fila.appendChild(celda13);
			                fila.appendChild(celda12);
							//fila.appendChild(celda14);

			                tbody.appendChild(fila);
			            }

            tabla.appendChild(thead);
            tabla.appendChild(tbody);

            var contenedor = document.getElementById("tabla");
            contenedor.appendChild(tabla);

            tabla.setAttribute("class","table table-condensed table-striped table-responsive");
            tabla.setAttribute("id","tablaGenerada");

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
              iDisplayLength: 20,
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
                                { "aTargets": [ 7 ],"bSortable": true }
                                
                              ] 
          });

            var tableTools = new $.fn.dataTable.TableTools(table, {
                'aButtons': [
                    {
                        'sExtends': 'xls',
                        'sButtonText': 'Exportar a Excel',
                        'sFileName': 'Reporte Consulta Pedidos.xls'
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
                        'sFileName': 'Reporte Consulta Pedidos.pdf'
                    }
                ],
                'sSwfPath': '<?php echo base_url() ?>assets/librerias/tabletools/2.2.4/swf/copy_csv_xls_pdf.swf'
            });
            $(tableTools.fnContainer()).insertBefore('#tablaGenerada_wrapper');
        }

        function limpiarFecha(id){ $("#"+id).val("");}


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

        function modificarPedido(numped)
        {
        	
			$(location).attr('href','<?php echo base_url(); ?>index.php/pedido/pedidos/mostrarFormularioEditarPedido/'+numped);
        }


    </script>