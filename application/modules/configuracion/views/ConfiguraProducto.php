<div class="panel panel-primary" >
    <div class="panel-heading">CONFIGURAR PRODUCTO</div>

	<div class="container">
		<div class="row">
	        <!-- campo Producto -->
	        <div class="col-md- col-sm-2 col-xs-12">
	            <div class="form-group form-group-sm">                
	                <label class="control-label required" for="">Producto<span class="required"> * </span></label> 
					<select id="producto" class="form-control" style="height:30px">
						<option value="">TODOS</option>
						<?php foreach ($producto as $array) 
							{?>
								<option value="<?php echo $array['PROD_COD_PROD']; ?>" ><?php echo $array['PROD_COD_PROD']; ?></option>  
					<?php } ?>
					</select>
	            </div>
	        </div>	
			<!-- campo Laboratorio -->
	        <div class="col-md- col-sm-2 col-xs-12">
	            <div class="form-group form-group-sm">                
	                <label class="control-label required" for="">Laboratorio<span class="required"> * </span></label> 
					<select id="laboratorio" class="form-control" style="height:30px">
						<option value="">TODOS</option>
						<?php foreach ($laboratorio as $array) 
							{?>
								<option value="<?php echo $array['ID_LABORATORIO']; ?>" ><?php echo $array['NOMBRE_LABORATORIO']; ?></option>  
					<?php } ?>
					</select>
	            </div>
	        </div>
		    <!-- campo comisión -->
			<div class="col-md- col-sm-2 col-xs-12">
	            <div class="form-group form-group-sm">                
	                <label class="control-label required" for="">Comisión<span class="required"> * </span></label> 
					<select id="comision" class="form-control" style="height:30px">
						<option value="S">SI</option>
						<option value="N">NO</option>			
					</select>
	            </div>
	        </div>	
			<!-- campo Prod. Principal -->
			<div class="col-md- col-sm-2 col-xs-12">
	            <div class="form-group form-group-sm">                
	                <label class="control-label required" for="">Prod. Principal<span class="required"> * </span></label> 
					<select id="pprincipal" class="form-control" style="height:30px">
						<option value="S">SI</option>
						<option value="N">NO</option>			
					</select>
	            </div>
	        </div>
			<!-- campo Prod. Principal -->
	        <div class="col-md- col-sm-2 col-xs-12">
	            <div class="form-group form-group-sm">                
	                <label class="control-label required" for="">Conf. Insentivo<span class="required"> * </span></label> 
					<select id="insentivo" class="form-control" style="height:30px">
						<option value="S">SI</option>
						<option value="N">NO</option>			
					</select>
	            </div>
	        </div>	
	        <!-- btn adicionar -->
	        <div class="col-md-2 col-sm-2 col-xs-12">
	            <div class="form-group form-group-sm">     
	            		<label class="control-label required" for=""> &nbsp</label>           
                        <button type="button" class="btn btn-primary btn-sm form-control" onclick="crearRegistro();">
                            <span class="glyphicon glyphicon-"></span> Crear
                        </button>
	            </div>
	        </div>	
		</div>		
	</div>
</div>
<div class="col-md-3 col-sm-3 col-xs-12">
 	<label class="control-label">Reporte por Laboratorio</label>
     <div class='input-group'>
		<select id="flaboratorio" class="form-control" style="height:30px">
			<option value="">TODOS</option>
             <?php foreach ($laboratorio as $array) 
             	{?>
                	 <option value="<?php echo $array['ID_LABORATORIO']; ?>" ><?php echo $array['NOMBRE_LABORATORIO']; ?></option>  
           <?php } ?>
		</select>  
     </div>
 </div> 
<div class="panel-footer">                    
    <div class="pull-right">  
        <button class="btn btn-primary btn-sm" onclick="constultarPedidos()">Consultar</button>
    </div>
    <div class="clearfix"> </div>
</div>
<div class="container">
    	<div id="tabla" class="table-responsive" style="font-size:11px; text-align:center;"></div>
</div>
<script src="<?php echo base_url() ?>assets/librerias/js/jquery.dataTables.min.js"></script>
 <script src="<?php echo base_url() ?>assets/librerias/tabletools/2.2.4/js/dataTables.tableTools.min.js"/></script>
<script type="text/javascript">


    //CONFIGURO EL ALERT
    var data=null;
    var params = 
    {                
       onInit: function(data) {},
       onCreate: function(notification, data) {},
       onClose: function(notification, data) {}
    };                                
     
    params.heading = 'Notificación';     
    params.theme = 'ruby';      
    params.life = '4000';//4segundos


    function crearRegistro()
    {
    	var producto    = $("#producto").val().trim();
		var laboratorio = $("#laboratorio").val().trim();
		var comision    = $("#comision").val().trim();
		var pprincipal  = $("#pprincipal").val().trim();
		var insentivo   = $("#insentivo").val().trim();
		
    	if(producto=="")
    	{
            var text = 'Falta campo PRODUCTO';
            $.notific8(text, params); 
            return;
    	}
    	
    	else if(laboratorio=="")
    	{
            var text = 'Falta campo LABORATORIO';
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
                 data: {producto:producto,laboratorio:laboratorio,comision:comision,pprincipal:pprincipal,insentivo:insentivo},
				 url: '<?php echo base_url(); ?>index.php/configuracion/configura_procesos/InsertarConfiguraProducto',
                 success: function (data) 
                 {     
				   alert('Producto Configurado con Exito');
				   $.isLoading("hide"); 
				   location.reload();
                 }
        }); 
							
    }
	function ModificarRegistro(id){
		
		alert(id);
		
	}
	function EliminarRegistro(id){
		
		$.isLoading({
                      text: "Cargando",
                      position: "overlay"
                });
					  
			    $.ajax({
			             type: 'POST',
			             async:false,
			             dataType: 'json',
			             data: {id:id},
			             url: '<?php echo base_url(); ?>index.php/configuracion/configura_procesos/EliminarConfiguraProducto',
			             success: function (data) 
			             {     
							alert(data);
							$.isLoading("hide"); 
							constultarPedidos();
			             }

			    });
	}
	function constultarPedidos(){
		
    	var laboratorio = $("#flaboratorio").val().trim();

				$.isLoading({
                      text: "Cargando",
                      position: "overlay"
                });
					  
			    $.ajax({
			             type: 'POST',
			             async:false,
			             dataType: 'json',
			             data: {laboratorio:laboratorio},
			             url: '<?php echo base_url(); ?>index.php/configuracion/configura_procesos/BuscarConfiguraProducto',
			             success: function (data) 
			             {     
			                generarTablaDinamica(data); 							
			                $.isLoading("hide");                     
			             }

			    });  
    	}
        function generarTablaDinamica(data)
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
			            var celda11 = document.createElement("td");
			            var celda12 = document.createElement("td");
						
		
						var textoCelda0 = document.createTextNode("LABORATORIO");
			            var textoCelda1 = document.createTextNode("PRODUCTO");
			            var textoCelda2 = document.createTextNode("PROD. PRINCIPAL");
			            var textoCelda3 = document.createTextNode("COMISIÓN");
			            var textoCelda4 = document.createTextNode("INSENTIVO");
			            var textoCelda11 = document.createTextNode("MODIFICAR");
			            var textoCelda12 = document.createTextNode("ELIMINAR");
			            
						celda0.appendChild(textoCelda0);
			            celda1.appendChild(textoCelda1);
			            celda2.appendChild(textoCelda2);
			            celda3.appendChild(textoCelda3);
			            celda4.appendChild(textoCelda4);
			            celda11.appendChild(textoCelda11);
			            celda12.appendChild(textoCelda12);


						filaCabecera.appendChild(celda0);
			            filaCabecera.appendChild(celda1);
			            filaCabecera.appendChild(celda2);
			            filaCabecera.appendChild(celda3);
			            filaCabecera.appendChild(celda4);
			            filaCabecera.appendChild(celda11);
			            filaCabecera.appendChild(celda12);

			            filaCabecera.setAttribute("id","fila_cabecera");
			            thead.appendChild(filaCabecera);

						var laboratorio_iteracion_anterior="";
						
						//CUERPO
			            for (var i = 0; i < data.length; i++)
			            {						
							
							var laboratorio = data[i]['laboratorio'];
							
							if(i!=0)//aqui controlo que se muestre solo una celda con el nombre del laboratorio
                              {
                                if(laboratorio==laboratorio_iteracion_anterior)
                                {
                                  laboratorio_iteracion_anterior=laboratorio;
                                  laboratorio="";
                                }
                                else
                                {
                                  laboratorio_iteracion_anterior=laboratorio;
                                }
                              }
                              else
                                laboratorio_iteracion_anterior=laboratorio;
					
			               							
			                var producto    = data[i]['producto'];
							var comision    = data[i]['comision'];
			                var principal   = data[i]['principal'];
							var insentivo   = data[i]['insentivo'];
							var id          = data[i]['ID_PRODUCTO_LABORATORIO'];

			                var fila = document.createElement("tr");

							var celda0 = document.createElement("td");
			                var celda1 = document.createElement("td");
			                var celda2 = document.createElement("td");
			                var celda3 = document.createElement("td");
			                var celda4 = document.createElement("td");
			                var celda11 = document.createElement("td");       
			                var celda12 = document.createElement("td");   						

							var textoCelda0 = document.createTextNode(laboratorio);
			                var textoCelda1 = document.createTextNode(producto);
			                var textoCelda2 = document.createTextNode(principal);
			                var textoCelda3 = document.createTextNode(comision);
			                var textoCelda4 = document.createTextNode(insentivo);
             
							celda0.appendChild(textoCelda0);
			                celda1.appendChild(textoCelda1);   
			                celda2.appendChild(textoCelda2); 
			                celda3.appendChild(textoCelda3); 
			                celda4.appendChild(textoCelda4); 

							var span2 = document.createElement("span");
							span2.setAttribute("class", "glyphicon glyphicon-pencil");
							
			               	var btn2 = document.createElement("button");
			                btn2.setAttribute("class", "btn btn-primary btn-sm");
			                btn2.setAttribute("type", "button");
			                btn2.setAttribute("value", "MODIFICAR" );
			                btn2.setAttribute("onclick","ModificarRegistro('"+id+"')");
			                btn2.appendChild(span2);
							
							celda11.appendChild(btn2);
			                celda11.setAttribute("style","text-align:center"); 

						    var span1 = document.createElement("span");
							span1.setAttribute("class", "glyphicon glyphicon-trash");
							
							var btn = document.createElement("button");
			                btn.setAttribute("class", "btn btn-danger btn-sm");
			                btn.setAttribute("type", "button");
			                btn.setAttribute("value", "ELIMINAR");
							btn.setAttribute("onclick","EliminarRegistro('"+id+"')");
							btn.appendChild(span1);
							
			                celda12.appendChild(btn);
			                celda12.setAttribute("style","text-align:center"); 
		
														
							fila.appendChild(celda0);
			                fila.appendChild(celda1);
			                fila.appendChild(celda2);
			                fila.appendChild(celda3);
			                fila.appendChild(celda4);
			                fila.appendChild(celda11);
			                fila.appendChild(celda12);
	
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
		function aplicarPaginado(){
          
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
              aLengthMenu:  [
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
                                { "aTargets": [ 5 ],"bSortable": false },
								{ "aTargets": [ 6 ],"bSortable": false }
								
                              ] 

		  });
		
		 var tableTools = new $.fn.dataTable.TableTools(table, {
                'aButtons': [
                    {
                        'sExtends': 'xls',
                        'sButtonText': 'Exportar a Excel',
                        'sFileName': 'Reporte de Retiros Pendientes.xls'
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
                        'sFileName': 'Reporte de Retiros Pendientes.pdf'
                    }
                ],
                'sSwfPath': '<?php echo base_url() ?>assets/librerias/tabletools/2.2.4/swf/copy_csv_xls_pdf.swf'
            });
			
			$(tableTools.fnContainer()).insertBefore('#tablaGenerada_wrapper');
   
		}
</script>