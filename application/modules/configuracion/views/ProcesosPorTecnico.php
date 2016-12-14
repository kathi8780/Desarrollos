<div class="panel panel-primary" >
    <div class="panel-heading">ADICIONAR NUEVO TÉCNICO</div>

	<div class="container">
		<div class="row">
	        <!-- campo cliente -->
	        <div class="col-md- col-sm-2 col-xs-12">
	            <div class="form-group form-group-sm">                
	                <label class="control-label required" for="">Cliente<span class="required"> * </span></label> 
	                <input type="text" id="c_cliente" autocomplete="off" mayusculas="^[A-Za-zÁÉÍÓÚáéíóúÑñ]+$" maxlength="50" class="form-control"/>
	            </div>
	        </div>		

	        <!-- campo telefono -->
	        <div class="col-md-2 col-sm-2 col-xs-12">
	            <div class="form-group form-group-sm">                
	                <label class="control-label required" for="">Teléfono<span class="required"> * </span></label> 
	                <input type="text" id="c_telefono" autocomplete="off" mayusculas="^[A-Za-zÁÉÍÓÚáéíóúÑñ]+$" maxlength="50" class="form-control"/>
	            </div>
	        </div>	

	        <!-- campo contacto -->
	        <div class="col-md-2 col-sm-2 col-xs-12">
	            <div class="form-group form-group-sm">                
	                <label class="control-label required" for="">Contacto<span class="required"> * </span></label> 
	                <input type="text" id="c_contacto" autocomplete="off" mayusculas="^[A-Za-zÁÉÍÓÚáéíóúÑñ]+$" maxlength="50" class="form-control"/>
	            </div>
	        </div>

          <div class="col-md-2 col-sm-2 col-xs-12">
              <div class="form-group form-group-sm">                
                  <label class="control-label required" for="">Ciudad<span class="required"> * </span></label> 
                  <input type="text" id="c_ciudad" autocomplete="off" mayusculas="^[A-Za-zÁÉÍÓÚáéíóúÑñ]+$" maxlength="50" class="form-control"/>
              </div>
          </div>

          <div class="col-md-3 col-sm-3 col-xs-12">
              <div class="form-group form-group-sm">                
                  <label class="control-label required" for="">Direccion<span class="required"> * </span></label> 
                  <input type="text" id="c_direccion" autocomplete="off" mayusculas="^[A-Za-zÁÉÍÓÚáéíóúÑñ]+$" maxlength="50" class="form-control"/>
              </div>
          </div>
            

	        <!-- btn adicionar -->
	        <div class="col-md-2 col-sm-2 col-xs-12">
	            <div class="form-group form-group-sm">     
	            		<label class="control-label required" for=""> &nbsp</label>           
                        <button type="button" class="btn btn-primary btn-sm form-control" onclick="crearRetiro();">
                            <span class="glyphicon glyphicon-"></span> Crear Retiro
                        </button>
	            </div>
	        </div>	
		</div>		
	</div>
</div>
<div class="col-md-3 col-sm-3 col-xs-12">
 	<label class="control-label">Técnicos</label>
     <div class='input-group'>
		<select id="tecnico" class="form-control" style="height:30px">
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


    function crearRetiro()
    {
    	var cliente = $("#c_cliente").val().trim();
    	var telefono =$("#c_telefono").val().trim();
    	var contacto =$("#c_contacto").val().trim();
      var ciudad =$("#c_ciudad").val().trim();
      var direccion =$("#c_direccion").val().trim();

    	if(cliente=="")
    	{
            var text = 'Falta campo CLIENTE';
            $.notific8(text, params); 
            return;
    	}
    	else if(telefono=="")
    	{
            var text = 'Falta campo TELEFONO';
            $.notific8(text, params); 
            return;
    	}  
    	else if(contacto=="")
    	{
            var text = 'Falta campo CONTACTO';
            $.notific8(text, params); 
            return;
    	}
      else if(ciudad=="")
      {
            var text = 'Falta campo CIUDAD';
            $.notific8(text, params); 
            return;
      }
      else if(direccion=="")
      {
            var text = 'Falta campo DIRECCION';
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
                         data: {cliente:cliente,telefono:telefono,contacto:contacto,ciudad:ciudad,direccion:direccion},
                         url: '<?php echo base_url(); ?>index.php/pedido/pedidos/insertarRetiro',
                         success: function (data) 
                         {    
                           
						   $.isLoading("hide"); 
						   location.reload();
                           //alert(data['USUARIO_NOMBRE']);  
			
                           var usuario = data['USUARIO_NOMBRE']+" "+data['USUARIO_APELLIDO'];
                           var id_retiro = data['ID_RETIRO'];
				            //ADICIONO UNA LINEA DE PRUEBA
				            var cadena_html='<tr class="fila-retiro" id="r'+id_retiro+'" >'
                                        +'<td>'
				                                    +cliente
				                                +'</td>'
				                                +'<td>'
				                                    +telefono
				                                +'</td>'
				                                +'<td>'
				                                    +contacto
				                                +'</td>'
                                        +'<td>'
                                            +ciudad
                                        +'</td>'
                                        +'<td>'
                                            +direccion
                                        +'</td>'
				                                +'<td>'
				                                    +"<?php echo date("Y-m-d H:i:s"); ?>"
				                                +'</td>'
				                                +'<td>'
				                                    +usuario
				                                +'</td>'
				                                +'<td>'
				                                    +'<center><button type="button" class="btn btn-primary btn-sm" id="'+id_retiro+'" style="width:50px" onclick="asignarRetiro(this.id)" >'
				                                          +'<span class="glyphicon glyphicon-share-alt"></span>'
				                                    +'</button></center>'
				                                +'</td>'
				                            +'</tr>';

				            $( ".dataTables_empty" ).parent().remove();


				            $("#tablaGenerada").append(cadena_html); 

					    	$("#c_cliente").val("");
					    	$("#c_telefono").val("");
					    	$("#c_contacto").val(""); 
                $("#c_ciudad").val(""); 
                $("#c_direccion").val("");   
					    	          
                         }
                }); 
    }
	function constultarPedidos(){
		
    	var tecnico = $("#tecnico").val().trim();

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
			            var celda11 = document.createElement("td");
			            var celda12 = document.createElement("td");
						
		
						var textoCelda0 = document.createTextNode("CEDULA");
			            var textoCelda1 = document.createTextNode("TÉCNICO");
			            var textoCelda2 = document.createTextNode("DIRECCIÓN");
			            var textoCelda3 = document.createTextNode("PROCESO");
			            var textoCelda4 = document.createTextNode("CATEGORIA");
			            var textoCelda5 = document.createTextNode("SIGLAS");
			            var textoCelda11 = document.createTextNode("MODIFICAR");
			            var textoCelda12 = document.createTextNode("ELIMINAR");
			            
						celda0.appendChild(textoCelda0);
			            celda1.appendChild(textoCelda1);
			            celda2.appendChild(textoCelda2);
			            celda3.appendChild(textoCelda3);
			            celda4.appendChild(textoCelda4);
			            celda5.appendChild(textoCelda5);
			            celda11.appendChild(textoCelda11);
			            celda12.appendChild(textoCelda12);


						filaCabecera.appendChild(celda0);
			            filaCabecera.appendChild(celda1);
			            filaCabecera.appendChild(celda2);
			            filaCabecera.appendChild(celda3);
			            filaCabecera.appendChild(celda4);
			            filaCabecera.appendChild(celda5);
			            filaCabecera.appendChild(celda11);
			            filaCabecera.appendChild(celda12);

			            filaCabecera.setAttribute("id","fila_cabecera");
			            thead.appendChild(filaCabecera);

			            //CUERPO
			            for (var i = 0; i < data.length; i++)
			            {                   
			                var cedula    = data[i]['cedula']; 
			                var tecnico   = data[i]['tecnico']; 
			                var direccion = data[i]['direccion']; 
			                var proceso   = data[i]['proceso']; 
			                var categoria = data[i]['categoria'];
							var siglas    = data[i]['siglas'];
							var id        = data[i]['ID_TECNICO_PROCESO'];

			                
			                var fila = document.createElement("tr");

							var celda0 = document.createElement("td");
			                var celda1 = document.createElement("td");
			                var celda2 = document.createElement("td");
			                var celda3 = document.createElement("td");
			                var celda4 = document.createElement("td");
			                var celda5 = document.createElement("td");
			                var celda11 = document.createElement("td");       
			                var celda12 = document.createElement("td");   						

							var textoCelda0 = document.createTextNode(cedula);
			                var textoCelda1 = document.createTextNode(tecnico);
			                var textoCelda2 = document.createTextNode(direccion);
			                var textoCelda3 = document.createTextNode(proceso);
			                var textoCelda4 = document.createTextNode(categoria);
			                var textoCelda5 = document.createTextNode(siglas);
             

							celda0.appendChild(textoCelda0);
			                celda1.appendChild(textoCelda1);   
			                celda2.appendChild(textoCelda2); 
			                celda3.appendChild(textoCelda3); 
			                celda4.appendChild(textoCelda4); 
			                celda5.appendChild(textoCelda5); 


			                var btn = document.createElement("input");
			                btn.setAttribute("class", "btn btn-primary btn-xs");
			                btn.setAttribute("type", "button");
			                btn.setAttribute("value", "Editar" );
			                btn.setAttribute("onclick","modificarPedido('"+id+"')");
			                celda12.appendChild(btn);
			                celda12.setAttribute("style","text-align:center"); 
							
							var btn2 = document.createElement("input");
			                btn2.setAttribute("class", "btn btn-primary btn-xs");
			                btn2.setAttribute("type", "button");
			                btn2.setAttribute("value", "Eliminar" );
			                btn2.setAttribute("onclick","VerReporte('"+id+"')");
			                celda11.appendChild(btn2);
			                celda11.setAttribute("style","text-align:center"); 

							fila.appendChild(celda0);
			                fila.appendChild(celda1);
			                fila.appendChild(celda2);
			                fila.appendChild(celda3);
			                fila.appendChild(celda4);
			                fila.appendChild(celda5);
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