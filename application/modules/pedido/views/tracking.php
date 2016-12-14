	<div class="panel panel-primary">
		<div class="panel-heading">Tracking de Proceso</div>
		<div class="panel-body">
			<div class="row">
                <!--  campo pedidos -->
                <div class="col-md4 col-sm-4 col-xs-12">
                    <div class="form-group form-group-sm"> 
                        <label class="control-label required" for="s_pedidos">Ingrese Número de Pedido *</label>
                        <input type="text" id="s_pedidos" maxlength="50" class="form-control" />
                    </div>
                 </div>	
                <!--  campo proceso	-->
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <div class="form-group form-group-sm"> 
                        <label class="control-label required" for="s_proceso">Proceso *</label>
                        <select id="s_proceso" class="form-control">  
                            <option value="">Seleccione...</option>      
                            <?php 
                            	for ($i=0; $i < count($pedidos_procesos) ; $i++) 
                            	{ 
                             ?>      
                             		<option value="<?php echo $pedidos_procesos[$i]['ID_PROCESO_NOMBRE']; ?>" IDE="<?php echo $pedidos_procesos[$i]['ID_PROCESO_NOMBRE']; ?>">
                             			<?php echo $pedidos_procesos[$i]['NOMBRE_PROCESO']; ?> 
                             		</option> 
                             <?php  
                         		}
                             ?>                      
                        </select>
                    </div>
                 </div>	
                  <!--  campo tipo de proceso	-->
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <div class="form-group form-group-sm"> 
                        <label class="control-label required" for="s_tproceso">Tipo de Proceso *</label>
                        <select id="s_tproceso" class="form-control" onchange="GuardarProceso()">  
                            <option value="">Seleccione...</option>      
   
                             	<option value="1">Manual</option>
                             	<option value="2">Digital</option>  
                    
                        </select>
                    </div>
                 </div>		 
			</div>
		</div>
	</div>
    <div>
    	<div id="tabla-productos" class="table-responsive" style="cursor: pointer"></div>
    </div>



 <script src="<?php echo base_url() ?>assets/librerias/js/jquery.dataTables.min.js"></script>
 <script src="<?php echo base_url() ?>assets/librerias/tabletools/2.2.4/js/dataTables.tableTools.min.js"/></script>


<script type="text/javascript">
    //INICIALIZO DATEPICKER
    $('.dp').datepicker({format: "yyyy-mm-dd",
            language: 'es',
            autoclose: true,
            forceParse: true,
            zIndexOffset: 1040 
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
    params.theme = 'ruby';      
    params.life = '4000';//4segundos


	function GuardarProceso()
	{
		
		var nro_pedido =  $("#s_pedidos").val().trim();
		var proceso    =  $("#s_proceso").val().trim();
		var tproceso   =  $("#s_tproceso").val().trim();
		
		if(nro_pedido!="" && proceso!="" && tproceso!="" )
	 	{
			//alert(tproceso);
			$.ajax({
	                     type: 'POST',
	                     async:false,
	                     dataType: 'json',
	                     data: {nro_pedido:nro_pedido,proceso:proceso,tproceso:tproceso},
	                     url: '<?php echo base_url(); ?>index.php/pedido/pedidos/validaProcesoCreado',
	                     success: function (data) 
	                     {    
								if(data.length>0){
									
									var PROCESO_SIGUIENTE    = data[0]['ID_PROCESO_NOMBRE'];
									var PROCESO_SELECCIONADO = proceso;
									var NOMBRE_PROCESO       = data[0]['NOMBRE_PROCESO'];
									
									if(PROCESO_SIGUIENTE!=PROCESO_SELECCIONADO){
										
										var text = 'Proceso Incorrecto, Segun el Orden Cronológico el Siguiente Proceso es '+NOMBRE_PROCESO;
										$.notific8(text, params); 	
									}else
									{
										//alert('Proceso Correcto');
										
										$.ajax({
											type: 'POST',
											async:false,
											dataType: 'json',
											data: {nro_pedido:nro_pedido,proceso:proceso,tproceso:tproceso},
											url: '<?php echo base_url(); ?>index.php/pedido/pedidos/TrackingCreado',
											success: function (data) 
											{
												
												alert(NOMBRE_PROCESO + ': Procesado con Éxito');
												cargarPedido();
												
											} 
										});
										
									} 
								}
	                  	                  
	                     }
	            }); 
			
		}else
		{
			var text = 'Falta un Campo por Llenar,(*)Todos los campos son Obligatorios';
            $.notific8(text, params); 
            return;
		}
	}
	function cargarPedido()
	{
	 	var nro_pedido =  $("#s_pedidos").val().trim();
	 	if(nro_pedido!="")
	 	{
	 		
			//busco los prodcutos con los procesos y los tecnicos
 				$.isLoading({
	                          text: "Cargando",
	                          position: "overlay"
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
									+'<center><div class="panel panel-primary" style="width:80%">'
									+'		<div class="panel-heading">PRODUCTOS</div>'
									+'		<div class="panel-body table-responsive">'

									+'<table class="table table-condensed table-bordered">'
									+'	<tr style="font-weight: bold">'
									+'		<td>'
									+'			Producto'
									+'		</td>'
									+'		<td>'
									+'			Proceso'
									+'		</td>'
									+'		<td>'
									+'			Tecnico'
									+'		</td>'
									+'		<td>'
									+'			Fecha'
									+'		</td>'
									+'		<td>'
									+'			Comisión'
									+'		</td>'
									+'		<td>'
									+'			Estado'
									+'		</td>'
									+'	</tr>'

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
								var fecha = data[i]['FECHA'];if(fecha==null)fecha="";
								var estado = data[i]['NOMBRE_ESTADO'];
								var tecnico = data[i]['tecnico'];
								var comision_categoria = data[i]['NOMBRE_CATEGORIA'];

								if(estado=="TERMINADO")//pongo la fila de color danger si se termino el proceso
									var estilo='class="bg-info" ';
								else
									var estilo='';

								html+='	<tr '+estilo+' >';
								html+='		<td>';
								html+=			producto;
								html+='		</td>';
								html+='		<td>';
								html+= 			proceso;
								html+='		</td>';
								html+='		<td>';
								html+= 			tecnico;
								html+='		</td>';
								html+='		<td>';
								html+=			fecha;
								html+='		</td>';
								html+='		<td>';
								html+= 			comision_categoria;
								html+='		</td>';
								html+='		<td>';
								html+=			estado;
								html+='		</td>';
								html+='	</tr>';

								
							}

							html+='	</table>';
							html+='</div>';
							html+='</div></center>';
							$('#tabla-productos').html("");
							$('#tabla-productos').append(html);			             

	                        $.isLoading("hide");   
	                                          
	                     }
	            });  

	 	}//cierra el if
	 	else
	 	{
	 		$('#tabla-pruebas').html("");
	 		$('#tabla-productos').html("");
	 	}
	}

</script>