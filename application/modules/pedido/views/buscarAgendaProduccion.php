 <style type="text/css">
   	#fila_cabecera
    {
        font-weight: bold;
    }
 </style>


 <div style="min-height:500px">
    <div class="panel panel-primary" style="border:none">
        <div class="panel-heading">Consultar Pedido Agenda Producción</div>
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
                        <input type="text" id="fecha_inicio" placeholder="yyyy-mm-dd" class="form-control dp" style="height:30px" readonly 
                         <?php 
                         	if($fechai!="" && $fechai!="sinfecha")
                         		echo " value='".$fechai."' ";
                          else if($fechai=="sinfecha")
                          {
                            echo "";
                          }
                         	else
                         	{
                         		$hoy = date("Y-m-d");
                         		echo " value='".$hoy."' ";
                         	}
                          ?>
                        />   
                    </div>
                </div>   
                <div class="col-md-3 col-sm-3 col-xs-12">
                	<label class="control-label">Fecha de Fin</label>
                    <div class='input-group'>
                        <span onclick="limpiarFecha('fecha_fin')" class="input-group-addon left" style="cursor:pointer">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                        <input type="text" id="fecha_fin" placeholder="yyyy-mm-dd" class="form-control dp" style="height:30px" readonly
                         <?php 
                         	if($fechaf!="" && $fechaf!="sinfecha")
                         		echo " value='".$fechaf."' ";
                          else if($fechaf=="sinfecha")
                          {
                            echo "";
                          }
                          else
                          {
                            $hoy = date("Y-m-d");
                            echo " value='".$hoy."' ";
                          }
                          ?>
                        />   
                    </div>
                </div> 

                <!-- campo direccion -->
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label>Número de Pedido</label>                            
                            <input type="text" id="num_pedido" mayusculas="^[A-Za-zÁÉÍÓÚáéíóúÑñ]+$" maxlength="50" class="form-control" 
	                         <?php 
	                         	if($numped!="")
	                         		echo " value='".$numped."' ";
	                          ?>
                            />
                        </div>
                    </div>  
            </div>

        </div>
        <div class="panel-footer">                    
            <div class="pull-right">  
                <button class="btn btn-primary btn-sm" onclick="constultarPedidos()" id="btn_buscar">Buscar</button>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

    <div class="container">
      <div id="tabla-resumen" class="table-responsive" style="font-size:11px; text-align:center;"></div>
    </div>


    <div class="container">
    	<div id="tabla" class="table-responsive" style="font-size:11px; text-align:center;"></div>
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

	    window.onload=function alcargar()
	    {
	    	if(<?php if($fechai!="" || $fechaf!="" ||$numped!="") echo "true"; else echo "false"; ?>)
	    	{
	    		$("#btn_buscar").click();
	    	}
	    } 

    	function constultarPedidos()
    	{
    		var f_inicio = $("#fecha_inicio").val().trim();
    		var f_fin = $("#fecha_fin").val().trim();
    		var estado = $("#s_estado").val().trim();
    		var numped = $("#num_pedido").val().trim();

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
				                     data: {estado:estado, f_inicio:f_inicio, f_fin:f_fin,numped},
				                     url: '<?php echo base_url(); ?>index.php/pedido/pedidos/buscarPedidosAgProd',
				                     success: function (data) 
				                     {     
				                        generarTablaDinamica(data); 
										constultarPruebas();								
				                        $.isLoading("hide");                     
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

                                { "aTargets": [ 5 ],"bSortable": true }
                              ] 
          });

            var tableTools = new $.fn.dataTable.TableTools(table, {
                'aButtons': [
                    {
                        'sExtends': 'xls',
                        'sButtonText': 'Exportar a Excel',
                        'sFileName': 'Reporte Agenda Produccion.xls'
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
                        'sFileName': 'Reporte Agenda Produccion.pdf'
                    }
                ],
                'sSwfPath': '<?php echo base_url() ?>assets/librerias/tabletools/2.2.4/swf/copy_csv_xls_pdf.swf'
            });
            $(tableTools.fnContainer()).insertBefore('#tablaGenerada_wrapper');
        }

        function constultarPruebas()
    	{
    					
			var f_inicio = $("#fecha_inicio").val().trim();
    		var f_fin = $("#fecha_fin").val().trim();
			var numped = $("#num_pedido").val().trim();

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
				                     data: {f_inicio:f_inicio,f_fin:f_fin,numped:numped},
				                     url: '<?php echo base_url(); ?>index.php/pedido/pedidos/pruebasGeneralPedido',
				                     success: function (data) 
				                     {     
										generarTablaPruebas(data); 										
				                        $.isLoading("hide");                     
				                     }

				            });  
    	}
		function generarTablaPruebas(pedidos)
        {
            $("pruebas").html(""); // limpio el div que contiene la tabla generaada

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
			            		

						var textoCelda0 = document.createTextNode("Nº");
			            var textoCelda1 = document.createTextNode("PRUEBA");
			            var textoCelda2 = document.createTextNode("CANTIDAD PRUEBA");
						var textoCelda3 = document.createTextNode("CANTIDAD PRODUCTO");
			            			            
						celda0.appendChild(textoCelda0);
			            celda1.appendChild(textoCelda1);
			            celda2.appendChild(textoCelda2);
			            celda3.appendChild(textoCelda3);

						filaCabecera.appendChild(celda0);
			            filaCabecera.appendChild(celda1);
			            filaCabecera.appendChild(celda2);
			            filaCabecera.appendChild(celda3);
			            
			            filaCabecera.setAttribute("id","fila_cabecera");
			            thead.appendChild(filaCabecera);

			            //CUERPO
			            for (var i = 0; i < pedidos.length; i++)
			            {
			                var prueba = pedidos[i]['NOMBRE_PRUEBA']; 
			                var cant_producto  = pedidos[i]['CANT_PRODUCTO'];
							var cant_prueba    = pedidos[i]['CANT_PRUEBA'];							
			               
			                var fila = document.createElement("tr");

							var celda0 = document.createElement("td");
			                var celda1 = document.createElement("td");
			                var celda2 = document.createElement("td");
			                var celda3 = document.createElement("td");						

							var textoCelda0 = document.createTextNode(i+1);
			                var textoCelda1 = document.createTextNode(prueba);
			                var textoCelda2 = document.createTextNode(cant_prueba);
							var textoCelda3 = document.createTextNode(cant_producto);
			               
							celda0.appendChild(textoCelda0);
			                celda1.appendChild(textoCelda1);   
			                celda2.appendChild(textoCelda2); 
							celda3.appendChild(textoCelda3); 
			                
							fila.appendChild(celda0);
			                fila.appendChild(celda1);
			                fila.appendChild(celda2);
							fila.appendChild(celda3);
			                
			                tbody.appendChild(fila);
			            }

            tabla.appendChild(thead);
            tabla.appendChild(tbody);

            var contenedor = document.getElementById("tabla");
            contenedor.appendChild(tabla);

            tabla.setAttribute("class","table table-condensed table-striped table-responsive");
            tabla.setAttribute("id","tablaGenerada");

        }
		function limpiarFecha(id){ $("#"+id).val("");}

        function modificarPedido(numped)
        {
        	$(location).attr('href','<?php echo base_url(); ?>index.php/pedido/pedidos/mostrarFormularioEditarPedido/'+numped);
        }
		function VerReporte(numped)
        {
        	$(location).attr('href','<?php echo base_url(); ?>index.php/reportes/reportes/VerReporte/Pedido/'+numped);
			
        }

    </script>