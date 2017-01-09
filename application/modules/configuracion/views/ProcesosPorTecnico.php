<!--ventana modal para editar proceso-->
<div class="modal fade" id="modal-editar-procesotecnico">
    <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">MODIFICAR POR PROCESO POR TECNICO</h4>
                    </div>
        <div class="modal-body" id="cuerpo-modal-asignar-mensajero">
            <div class="table-responsive">
              <table class="table table-condensed table-striped table-bordered">
                <tr style="font-weight: bold">
                  <td colspan="2" class="bg-primary" style="text-align: center">
                    EDITAR
                  </td>
                </tr>
				<tr>
				  <td>
					<div class="col-md- col-sm-8 col-xs-12">
						<div class="form-group form-group-sm">                
							<label class="control-label required" for="">Categoria<span class="required"> * </span></label> 
							<input type='hidden' value="" id="ID_TECNICO_PROCESO"/>
							<select id="ID_CATEGORIA" class="form-control" style="height:30px">
								<option value="">TODOS</option>
								<?php foreach ($categoria as $array) 
									{?>
										<option value="<?php echo $array['ID_CATEGORIA']; ?>" ><?php echo $array['SIGLAS_CATEGORIA']; ?></option>  
								<?php } ?>
							</select>
						</div>
					</div>
				  </td>
				</tr>
              </table>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary btn-sm" onclick="ModificarProcesoTecnico()">
                <span class="glyphicon glyphicon-pencil"></span> Actualizar
            </button>
        </div>
		</div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
 </div><!-- /.modal -->
<!--fin ventana modal para editar proceso-->
<div class="panel panel-primary" >
    <div class="panel-heading">ADICIONAR NUEVO TÉCNICO A PROCESO</div>

	<div class="container">
		<div class="row">
	        <!-- campo técnico -->
	        <div class="col-md- col-sm-2 col-xs-12">
	            <div class="form-group form-group-sm">                
	                <label class="control-label required" for="">Técnico<span class="required"> * </span></label> 
					<select id="tecnico" class="form-control" style="height:30px">
						<option value="">TODOS</option>
						<?php foreach ($tecnico as $array) 
							{?>
								<option value="<?php echo $array['ID_TECNICO']; ?>" ><?php echo $array['TECNICO']; ?></option>  
					<?php } ?>
					</select>
	            </div>
	        </div>			
	        <!-- campo Proceso -->
	        <div class="col-md- col-sm-2 col-xs-12">
	            <div class="form-group form-group-sm">                
	                <label class="control-label required" for="">Proceso<span class="required"> * </span></label> 
					<select id="proceso" class="form-control" style="height:30px">
						<option value="">TODOS</option>
						<?php foreach ($proceso as $array) 
							{?>
								<option value="<?php echo $array['ID_PROCESO_NOMBRE']; ?>" ><?php echo $array['NOMBRE_PROCESO']; ?></option>  
					<?php } ?>
					</select>
	            </div>
	        </div>
	        <!-- campo Categoria -->
	        <div class="col-md- col-sm-2 col-xs-12">
	            <div class="form-group form-group-sm">                
	                <label class="control-label required" for="">Categoria<span class="required"> * </span></label> 
					<select id="categoria" class="form-control" style="height:30px">
						<option value="">TODOS</option>
						<?php foreach ($categoria as $array) 
							{?>
								<option value="<?php echo $array['ID_CATEGORIA']; ?>" ><?php echo $array['SIGLAS_CATEGORIA']; ?></option>  
						<?php } ?>
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
 	<label class="control-label">Reporte por Técnico</label>
     <div class='input-group'>
		<select id="ftecnico" class="form-control" style="height:30px">
			<option value="">TODOS</option>
             <?php foreach ($tecnico as $array) 
             	{?>
                	 <option value="<?php echo $array['ID_TECNICO']; ?>" ><?php echo $array['TECNICO']; ?></option>  
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
    	var tecnico   = $("#tecnico").val().trim();
    	var proceso   = $("#proceso").val().trim();
		var categoria = $("#categoria").val().trim();
		
    	if(tecnico=="")
    	{
            var text = 'Falta campo TÉCNICO';
            $.notific8(text, params); 
            return;
    	}
    	else if(proceso=="")
    	{
            var text = 'Falta campo PROCESO';
            $.notific8(text, params); 
            return;
    	}  
    	else if(categoria=="")
    	{
            var text = 'Falta campo CATEGORIA';
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
                 data: {tecnico:tecnico,proceso:proceso,categoria:categoria},
                 url: '<?php echo base_url(); ?>index.php/configuracion/configura_procesos/InsertarProcesosPorTecnico',
                 success: function (data) 
                 {     
				   alert('Técnico Asociado a Proceso con Exito');
				   $.isLoading("hide"); 
				   
                 }
        }); 
		
		constultarPedidos();
							
    }
	function ModificarRegistro(ID_TECNICO_PROCESO)
    {
	  
	   $.ajax({
                type: 'POST',
                async:false,
                dataType: 'json',
                data: {ID_TECNICO_PROCESO:ID_TECNICO_PROCESO},
                url: '<?php echo base_url(); ?>index.php/configuracion/configura_procesos/ObtenerProcesosPorTecnico',
                success: function (data) 
                {    

					var ID_CATEGORIA = data['procesos_tecnicos'][0]['ID_CATEGORIA'];
										
					$("#ID_CATEGORIA").val(ID_CATEGORIA);
					$("#ID_TECNICO_PROCESO").val(ID_TECNICO_PROCESO);
       
                }
       
       });
	   
	   $("#modal-editar-procesotecnico").modal('show');
    }
	function ModificarEstado(id_laboratorio){
			
				$.isLoading({
                      text: "Cargando",
                      position: "overlay"
                });
					  
			    $.ajax({
			             type: 'POST',
			             async:false,
			             dataType: 'json',
			             data: {id_laboratorio:id_laboratorio},
					     url: '<?php echo base_url(); ?>index.php/configuracion/configura_procesos/EstadoConfiguraLaboratorio',
			             success: function (data) 
			             {     
								$.isLoading("hide");  
								location.reload();
								//tablaReload();                    
			             }

			    });
			
			
	}
	function ModificarProcesoTecnico()
    {
	     
	  var ID_TECNICO_PROCESO  = $("#ID_TECNICO_PROCESO").val().trim();
      var ID_CATEGORIA        = $("#ID_CATEGORIA").val().trim();
 
	   
	   $.ajax({
                type: 'POST',
                async:false,
                dataType: 'json',
                data: {ID_TECNICO_PROCESO:ID_TECNICO_PROCESO,ID_CATEGORIA:ID_CATEGORIA},
                url: '<?php echo base_url(); ?>index.php/configuracion/configura_procesos/ActualizaProcesoTecnico',
                success: function (data) 
                {  
					//alert('Actualizado')
					//location.reload();
                }
       });
	  
	   $("#modal-editar-procesotecnico").modal('hide');
	   constultarPedidos();
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
			             url: '<?php echo base_url(); ?>index.php/configuracion/configura_procesos/EliminarProcesosPorTecnico',
			             success: function (data) 
			             {     
			                alert('Proceso Eliminado con Exito');
							$.isLoading("hide"); 
							constultarPedidos();		
			             }

			    });
	}
	function constultarPedidos(){
		
    	var tecnico = $("#ftecnico").val().trim();

				$.isLoading({
                      text: "Cargando",
                      position: "overlay"
                });
					  
			    $.ajax({
			             type: 'POST',
			             async:false,
			             dataType: 'json',
			             data: {tecnico:tecnico},
			             url: '<?php echo base_url(); ?>index.php/configuracion/configura_procesos/BuscarProcesosPorTecnico',
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
			            var celda5 = document.createElement("td");
						var celda6 = document.createElement("td");
			            var celda11 = document.createElement("td");
			            var celda12 = document.createElement("td");
						var celda13 = document.createElement("td");
		
						var textoCelda0 = document.createTextNode("CEDULA");
			            var textoCelda1 = document.createTextNode("TÉCNICO");
			            var textoCelda2 = document.createTextNode("DIRECCIÓN");
			            var textoCelda3 = document.createTextNode("PROCESO");
			            var textoCelda4 = document.createTextNode("CATEGORIA");
			            var textoCelda5 = document.createTextNode("SIGLAS");
						var textoCelda6 = document.createTextNode("ACTIVO");
			            var textoCelda11 = document.createTextNode("MODIFICAR");
			            var textoCelda12 = document.createTextNode("ELIMINAR");
						var textoCelda13 = document.createTextNode("ESTADO");
			            
						celda0.appendChild(textoCelda0);
			            celda1.appendChild(textoCelda1);
			            celda2.appendChild(textoCelda2);
			            celda3.appendChild(textoCelda3);
			            celda4.appendChild(textoCelda4);
			            celda5.appendChild(textoCelda5);
						celda6.appendChild(textoCelda6);
			            celda11.appendChild(textoCelda11);
			            celda12.appendChild(textoCelda12);
						celda13.appendChild(textoCelda13);

						filaCabecera.appendChild(celda0);
			            filaCabecera.appendChild(celda1);
			            filaCabecera.appendChild(celda2);
			            filaCabecera.appendChild(celda3);
			            filaCabecera.appendChild(celda4);
			            filaCabecera.appendChild(celda5);
						filaCabecera.appendChild(celda6);
			            filaCabecera.appendChild(celda11);
			            filaCabecera.appendChild(celda12);
						filaCabecera.appendChild(celda13);

			            filaCabecera.setAttribute("id","fila_cabecera");
			            thead.appendChild(filaCabecera);

			            var cedula_iteracion_anterior="";
						var tecnico_iteracion_anterior="";
						var direccion_iteracion_anterior="";
						
						//CUERPO
			            for (var i = 0; i < data.length; i++)
			            {                   
			                var cedula    = data[i]['cedula']; 
							
							if(i!=0)//aqui controlo que se muestre solo una celda con el nombre de la cedula
                              {
                                if(cedula==cedula_iteracion_anterior)
                                {
                                  cedula_iteracion_anterior=cedula;
                                  cedula="";
                                }
                                else
                                {
                                  cedula_iteracion_anterior=cedula;
                                }
                              }
                              else
                                cedula_iteracion_anterior=cedula;

							
			                var tecnico   = data[i]['tecnico']; 
							
							if(i!=0)//aqui controlo que se muestre solo una celda con el nombre del tecnico
                              {
                                if(tecnico==tecnico_iteracion_anterior && cedula!=cedula_iteracion_anterior)
                                {
                                  tecnico_iteracion_anterior=tecnico;
                                  tecnico="";
                                }
                                else
                                {
                                  tecnico_iteracion_anterior=tecnico;
                                }
                              }
                              else
                                tecnico_iteracion_anterior=tecnico;
							
			                var direccion = data[i]['direccion']; 
							
							if(i!=0)//aqui controlo que se muestre solo una celda con el nombre de la direccion
                              {
                                if(direccion==direccion_iteracion_anterior && cedula!=cedula_iteracion_anterior)
                                {
                                  direccion_iteracion_anterior=direccion;
                                  direccion="";
                                }
                                else
                                {
                                  direccion_iteracion_anterior=direccion;
                                }
                              }
                              else
                                direccion_iteracion_anterior=direccion;
							
			                var proceso   = data[i]['proceso']; 
			                var categoria = data[i]['categoria'];
							var siglas    = data[i]['siglas'];
							var id        = data[i]['ID_TECNICO_PROCESO'];
							var activo    = data[i]['ACTIVO'];
			                
			                var fila = document.createElement("tr");

							var celda0 = document.createElement("td");
			                var celda1 = document.createElement("td");
			                var celda2 = document.createElement("td");
			                var celda3 = document.createElement("td");
			                var celda4 = document.createElement("td");
			                var celda5 = document.createElement("td");
							var celda6 = document.createElement("td");
			                var celda11 = document.createElement("td");       
			                var celda12 = document.createElement("td");   						
							var celda13 = document.createElement("td");
							
							var textoCelda0 = document.createTextNode(cedula);
			                var textoCelda1 = document.createTextNode(tecnico);
			                var textoCelda2 = document.createTextNode(direccion);
			                var textoCelda3 = document.createTextNode(proceso);
			                var textoCelda4 = document.createTextNode(categoria);
			                var textoCelda5 = document.createTextNode(siglas);
							var textoCelda6 = document.createTextNode(activo);

							celda0.appendChild(textoCelda0);
			                celda1.appendChild(textoCelda1);   
			                celda2.appendChild(textoCelda2); 
			                celda3.appendChild(textoCelda3); 
			                celda4.appendChild(textoCelda4); 
			                celda5.appendChild(textoCelda5); 
							celda6.appendChild(textoCelda6); 
							
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
		
							var span3 = document.createElement("span");
							span3.setAttribute("class", "glyphicon glyphicon-ok");
							
							var btn3 = document.createElement("button");
							
							if(activo=='S'){
								btn3.setAttribute("class", "btn btn-success btn-sm");
							}else{
								btn3.setAttribute("class", "btn btn-danger btn-sm");
							}
							
			                btn3.setAttribute("type", "button");
			                btn3.setAttribute("value", "ESTADO");
							btn3.setAttribute("onclick","ModificarEstado('"+id+"')");
							btn3.appendChild(span3);
							
			                celda13.appendChild(btn3);
			                celda13.setAttribute("style","text-align:center");
														
							fila.appendChild(celda0);
			                fila.appendChild(celda1);
			                fila.appendChild(celda2);
			                fila.appendChild(celda3);
			                fila.appendChild(celda4);
			                fila.appendChild(celda5);
							fila.appendChild(celda6);
			                fila.appendChild(celda11);
			                fila.appendChild(celda12);
							fila.appendChild(celda13);
	
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
		function ModificarEstado(id){
			
				$.isLoading({
                      text: "Cargando",
                      position: "overlay"
                });
					  
			    $.ajax({
			             type: 'POST',
			             async:false,
			             dataType: 'json',
			             data: {id:id},
			             url: '<?php echo base_url(); ?>index.php/configuracion/configura_procesos/EstadoProcesosPorTecnico',
			             success: function (data) 
			             {     
			                constultarPedidos();							
			                $.isLoading("hide");                     
			             }

			    });
			
			
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
                                { "aTargets": [ 5 ],"bSortable": true },
                                { "aTargets": [ 6 ],"bSortable": false },
								{ "aTargets": [ 7 ],"bSortable": false }
								
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