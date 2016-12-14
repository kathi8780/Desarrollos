
<style type="text/css">

</style>


<!--ventana modal para pruebas-->
        <div class="modal fade" id="modal-adicionar-pruebas" >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Adicionar Prueba</h4>
                    </div>
                    <div class="modal-body" style="height:auto">
                    <br>
                    <!-- campo select de pruebas-->
                            <div class="row">
                                <div class="col-md-2 col-sm-2 col-xs-12"> 
                                        <label for="formulario_pedido_prueba" style="padding-top:5px">Prueba: </label>
                                </div>                            
                                <div class="col-md-8 col-sm-8 col-xs-12">                                        
                                        <select id="formulario_pedido_prueba" class="form-control" style="height:30px">
                                            <option value="" dias="" fecha="">Seleccione...</option>
                                            <?php 
                                                for ($i=0; $i < count($pruebas); $i++) 
                                                { 
                                             ?>
                                                    <option fechaEntrega="<?php echo $pruebas[$i]['FECHA_ENTREGA']; ?>" nombre="<?php echo $pruebas[$i]['NOMBRE_PRUEBA']; ?>" value="<?php echo $pruebas[$i]['ID_TIPO_PRUEBA']; ?>" fecha="<?php echo $pruebas[$i]['FECHA_CALCULADA']; ?>" dias="<?php echo $pruebas[$i]['DIAS']; ?>">
                                                        <?php echo $pruebas[$i]['NOMBRE_PRUEBA']; ?> 
                                                    </option>
                                            <?php 
                                                }
                                             ?>
                                        </select>
                                </div>
                            </div><br>
                    <!-- campo select de pruebas-->

                    <!-- campo duracion de prueba-->
                            <div class="row" style="margin-top:4px">
                                <div class="col-md-2 col-sm-2 col-xs-12"> 
                                    <label for="" style="padding-top:5px">Duración(días): </label>
                                </div>  
                                <div class="col-md-4 col-sm-4 col-xs-12">                                        
                                        <input readonly="" type="text"  maxlength="2" class="form-control" value="" id="duracion_prueba" style="height:30px">
                                </div>
                            </div><br>
                    <!-- campo duracion de prueba-->

                    <!--campo fecha calculada de prueba-->
                            <div class="row" style="margin-top:4px">
                                <div class="col-md-2 col-sm-2 col-xs-12"> 
                                    <label for=""  style="padding-top:5px">Fecha: </label>
                                </div>  
                                <div class="col-md-4 col-sm-4 col-xs-12">                                        
                                    <div class='input-group'>
                                        <span class="input-group-addon left">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                        <input readonly="" value="<?php $fecha = date("Y-m-d"); echo $fecha; ?>" type="text" id="fecha_calculada" placeholder="yyyy-mm-dd" class="form-control dp" style="height:30px; "/>
                                    </div>
                                </div>
                            </div> 
                    <!-- campo fecha calculada de prueba-->

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="adicionarPrueba()" id="btn-modal-prueba"><span id="nombre-btn-modal-prueba">Seleccionar</span></button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
<!--fin ventana modal para pruebas-->

<!--ventana modal para detalle pruebas-->
        <div class="modal fade" id="modal-detalle-pruebas">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Detalles de la Prueba</h4>
                    </div>
                    <div class="modal-body" id="cuerpo-modal-detalle-prueba">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
<!--fin ventana modal para detalle pruebas-->

<!--ventana modal para actualizar pruebas-->
        <div class="modal fade" id="modal-actualizar-pruebas">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Actualizar Prueba</h4>
                    </div>
                    <div class="modal-body" id="cuerpo-modal-actualizar-prueba">
						<div class="table-responsive">
							<table class="table table-condensed table-striped table-bordered">
								<tr style="font-weight: bold">
									<td colspan="2" class="bg-primary" style="text-align: center">
										ESTADO DE LA PRUEBA
									</td>
								</tr>
								<tr>
									<td>
										Estado Prueba: 
									</td>
									<td>
                                        <select id="s_estados" class="form-control" style="height:30px">  
                                            <option value="">Seleccione...</option>      
                                             <option value="3">Pendiente</option> 
                                             <option value="8">Empacado</option> 
                                        </select>
									</td>
								</tr>
							</table>

							<table class="table table-condensed table-striped table-bordered" id="filas_invent">
									<tr style="font-weight: bold">
										<td colspan="3" class="bg-primary" style="text-align: center">
											INVENTARIO
										</td>
									</tr>								

							</table>

							<table class="table table-condensed table-striped table-bordered">
								<tr style="font-weight: bold">
									<td colspan="3" class="bg-primary" style="text-align: center">
										RETORNO DE LA PRUEBA
									</td>
								</tr>
								<tr>
									<td>
										RETORNO
									</td>
									<td>
										<input id="c_retorno" data-toggle="toggle" data-on="Si" data-off="No" type="checkbox" data-size="small" data-onstyle="primary" class="form-control" data-offstyle="danger" onchange="toggleFilaFechaRetorno()">
									</td>
								</tr>

								<tr id="fila_fecha_retorno" style="display:none">
									<td>
										FECHA DE RETORNO
									</td>
									<td>
										<input value="<?php $fecha = date("Y-m-d"); echo $fecha; ?>" type="text" id="c_fecha_retorno" placeholder="yyyy-mm-dd" class="form-control dp" style="height:30px;"/>
									</td>
								</tr>

								<tr>
									<td>
										OBSERVACIONES
									</td>
									<td>
										<textarea class="form-control" rows="1" id="observaciones_prueba" class="form-control"></textarea>
									</td>
								</tr>
							</table>
						</div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-sm" onclick="actualizarPrueba();" >
							<span class="glyphicon glyphicon-refresh"></span> Actualizar
				        </button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
<!--fin ventana modal para actualizar pruebas-->


<!--ventana modal para detalle despachos-->
        <div class="modal fade" id="modal-detalle-despacho">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Detalles de Despacho</h4>
                    </div>
                    <div class="modal-body" id="cuerpo-modal-detalle-despacho">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
<!--fin ventana modal para detalle despachos-->

<!--ventana modal para foto paciente-->
        <div class="modal fade" id="modal-foto-paciente" >
            <div class="modal-dialog modal-xs">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Foto Paciente</h4>
                    </div>
                    <div class="modal-body">
                        <div id="mensaje-nofoto">
                            <h4 class="alert alert-danger">Sin foto...</h4>
                        </div>
                        <div id="cuerpo-modal-foto-paciente"> 
                            
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
<!--fin ventana modal para foto paciente-->


	<div class="panel panel-primary">
		<div class="panel-heading">ORDEN DE PRODUCCIÓN</div>
		<div class="panel-body">
			<div class="row">
                                <!--  campo pedidos -->
                                <div class="col-md-2 col-sm-2 col-xs-12">
                                    <div class="form-group form-group-sm"> 
                                        <label class="control-label required" for="s_pedidos">Pedidos </label>
                                        <select id="s_pedidos" class="form-control" onchange="cargarPedido()">  
                                            <option value="">Seleccione...</option>      
                                            <?php 
                                            	for ($i=0; $i < count($pedidos) ; $i++) 
                                            	{ 
                                             ?>      
                                             		<option value="<?php echo $pedidos[$i]['PEDF_NUM_PREIMP']; ?>" IDE="<?php echo $pedidos[$i]['ID_PEDIDO']; ?>">
                                             			<?php echo $pedidos[$i]['PEDF_NUM_PREIMP']; ?> 
                                             		</option> 
                                             <?php  
                                         		}
                                             ?>                      
                                        </select>
                                    </div>
                                </div>

	                            <!-- campo prioridad -->
	                            <div class="col-md-2 col-sm-2 col-xs-12">
	                                <div class="form-group form-group-sm">                
	                                    <label class="control-label" for="c_prioridad">Prioridad </label>             
	                                    <input type="text" id="c_prioridad" autocomplete="off" maxlength="50" class="form-control" />
	                                </div>
	                            </div>


                                <div class="col-md-8 col-sm-8 col-xs-12" id="region_suspender" >
                                    <!-- campo suspender pedido -->
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <div class="form-group form-group-sm">                
                                            <label class="control-label" for="c_suspender">Suspender</label>             
                                            <input onchange="toggleAreaSusp()" id="c_suspender" data-toggle="toggle" data-on="Si" data-off="No" type="checkbox" data-size="small" data-onstyle="danger" class="form-control">
                                        </div>                                  
                                    </div>

                                    <div id="aria-suspender" style="display:none">
                                        <!-- campo motivo -->
                                        <div class="col-md-8 col-sm-8 col-xs-12">
                                            <div class="form-group form-group-sm">                
                                                <label class="control-label" for="c_prioridad">Motivo </label>             
                                                <input type="text" id="c_motivo" autocomplete="off" maxlength="50" class="form-control" />
                                            </div>
                                        </div>

                                        <!-- campo btn suspender -->
                                        <div class="col-md-2 col-sm-2 col-xs-12">
                                            <div class="form-group form-group-sm">   
                                                <label class="control-label" for="c_prioridad">&nbsp;</label>   <br>      
                                                <button type="button" class="btn btn-danger btn-sm" onclick="suspender()">
                                                    <span class="glyphicon glyphicon-remove"></span> Suspender
                                                </button>        
                                            </div>
                                        </div>
                                    </div>
                                </div>
			</div>

			<div class="row">
	                            <!-- campo cliente -->
	                            <div class="col-md-3 col-sm-3 col-xs-12">
	                                <div class="form-group form-group-sm">                
	                                    <label class="control-label required" for="c_cliente">Cliente</label>             
	                                    <input type="text" id="c_cliente" autocomplete="off" maxlength="50" class="form-control" />
	                                </div>
	                            </div>

	                            <!-- campo paciente -->
	                            <div class="col-md-3 col-sm-3 col-xs-12">
	                                <div class="form-group form-group-sm">                
	                                    <label class="control-label required" for="c_paciente">Paciente</label>             
	                                    <input type="text" id="c_paciente" autocomplete="off" maxlength="50" class="form-control" />
	                                </div>
	                            </div>

	                            <!-- campo telefono -->
	                            <div class="col-md-2 col-sm-2 col-xs-12">
	                                <div class="form-group form-group-sm">                
	                                    <label class="control-label required" for="c_telefono">Teléfono</label>             
	                                    <input type="text" id="c_telefono" autocomplete="off" maxlength="50" class="form-control" />
	                                </div>
	                            </div>

								<!-- campo contacto -->
	                            <div class="col-md-2 col-sm-2 col-xs-12">
	                                <div class="form-group form-group-sm">                
	                                    <label class="control-label required" for="c_contacto">Contacto</label>             
	                                    <input type="text" id="c_contacto" autocomplete="off" maxlength="50" class="form-control" />
	                                </div>
	                            </div>

								<!-- campo color -->
	                            <div class="col-md-2 col-sm-2 col-xs-12">
	                                <div class="form-group form-group-sm">                
	                                    <label class="control-label required" for="c_contacto">Color</label>             
	                                    <input type="text" id="c_color" autocomplete="off" maxlength="50" class="form-control" />
	                                </div>
	                            </div>

								<!-- campo medico tratante -->
	                            <div class="col-md-2 col-sm-2 col-xs-12">
	                                <div class="form-group form-group-sm">                
	                                    <label class="control-label required" for="c_contacto">Médico Tratante</label>             
	                                    <input type="text" id="c_medicot" autocomplete="off" maxlength="50" class="form-control" />
	                                </div>
	                            </div>

								<!-- campo fecha ingreso -->
	                            <div class="col-md-2 col-sm-2 col-xs-12">
	                                <div class="form-group form-group-sm">                
	                                    <label class="control-label required" for="c_fechaIng">Fecha Ingreso</label>             
	                                    <input type="text" id="c_fechaIng" autocomplete="off" maxlength="50" class="form-control" />
	                                </div>
	                            </div>

								<!-- campo foto paciente -->
	                            <div class="col-md-1 col-sm-1 col-xs-12">
	                                <div class="form-group form-group-sm">                
	                                    <label class="control-label required" for="c_fotoPac">Foto</label>   <br>
	                                     <button id="c_fotoPac" onclick="mostrarFotoClte()" type="button" class="btn btn-link" style="margin-left: -15px">
	                                    Paciente...
	                                    </button> 
	                                    <!--<a href="">Paciente...</a>-->
	                                </div>
	                            </div>


    	                            <!-- campo subir documento -->
    	                            <div class="col-md-4 col-sm-4 col-xs-12">
    	                                <div class="form-group form-group-sm">                
    	                                    <label class="control-label" for="c_docadjunto">Adjuntar Documento</label>    
    	                                    <input style="font-size:12px" type="file" id="c_docadjunto" name="formulario_pedido[DOCADJUNTO]"  />
    	                                </div>
    	                            </div>

    								<!-- campo nombre del documento -->
    	                            <div class="col-md-2 col-sm-2 col-xs-12">
    	                                <div class="form-group form-group-sm">                
    	                                    <label class="control-label required" for="c_nombreDocumento">Nombre</label>             
    	                                    <input type="text" id="c_nombreDocumento" autocomplete="off" maxlength="50" class="form-control" />
    	                                </div>
    	                            </div>

	                                <!-- campo btn subir -->
	                                <div class="col-md-1 col-sm-1 col-xs-12">
	                                    <div class="form-group form-group-sm">                
	                                       <label class="control-label required" for="c_btn_subirdoc">&nbsp;</label> <br>            
	                                       <button id="c_btn_subirdoc" onclick="subirDoc()" type="button" class="btn btn-primary btn-sm" style="margin-left:-15px">
	                                    	  <span class="glyphicon glyphicon-floppy-disk"></span> Guardar
	                                        </button>
	                                   </div>
	                                </div>

			</div>

			<div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                        <!--  campo observaciones -->                        
                            <div class="control-label" class="form-group form-group-sm">
                                <label for="formulario_pedido_tipoanticipo">Observaciones:</label>
                                <textarea class="form-control" rows="1" id="observaciones"  class="form-control"></textarea>
                            </div>        
                </div> 
			</div>
		</div>
	</div>

<!--
	<div class="panel panel-primary">
		<div class="panel-heading">PROCESOS</div>
		<div class="panel-body">

		</div>
	</div>
-->

    <div>
    	<div id="tabla-pruebas" class="table-responsive" style="cursor: pointer">
    		
    	</div>
    </div>

    <div>
    	<div id="tabla-productos" class="table-responsive" style="cursor: pointer">
    		
    	</div>
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

	function toggleAreaSusp()
	{
		if( $('#c_suspender').prop('checked') ) 
        {
			$("#aria-suspender").attr("style", "display: block");
            $("#region_suspender").attr("class", "col-md-8 col-sm-8 col-xs-12 bg-danger");
        }
		else
        {
			$("#aria-suspender").attr("style", "display: none");
            $("#region_suspender").attr("class", "col-md-8 col-sm-8 col-xs-12");
        }
	}

	function cargarPedido()
	{
	 	var nro_pedido =  $("#s_pedidos").val().trim();
	 	if(nro_pedido!="")
	 	{
	 		//busco las pruebas
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
	                     	if(data.length>0)
	                     		var paciente = data[0]['NOMBRE_APELLIDO'];

								var html=''
									+'<center><div class="panel panel-primary" style="width:80%">'
									+'		<div class="panel-heading">PRUEBAS</div>'
									+'		<div class="panel-body table-responsive">'

									+'<table class="table table-condensed table-bordered" id="filas_pruebas" >'
									+'	<tr style="font-weight: bold">'
									+'		<td>'
									+'			Prueba'
									+'		</td>'
									+'		<td>'
									+'			Fecha de Salida'
									+'		</td>'
									+'		<td>'
									+'			Fecha de Retorno'
									+'		</td>'
									+'		<td>'
									+'			Estado'
									+'		</td>'
									+'		<td style="text-align:center">'
									+'			Despachado'
									+'		</td>'
									+'		<td style="text-align:center">'
									+'			Editar'
									+'		</td>'
									+'		<td style="text-align:center">'
									+'			Eliminar'
									+'		</td>'
									+'		<td style="text-align:center">'
									+'			Imprimir'
									+'		</td>'
									+'	</tr>'

	                     	//TOMO LAS PRUEBAS DEL PRODUCTO DETALLE Y LAS PONGO EN UNA TABLA
							for (var i = 0; i < data.length; i++)
							{
								var id_prueba = data[i]['ID_PRUEBAS']; 
								var nombre_prueba = data[i]['NOMBRE_PRUEBA'];
								var fecha_salida = data[i]['FECHA_SALIDA'];
								var fecha_regreso = data[i]['FECHA_REGRESO'];
								var observaciones_prueba = data[i]['OBSERVACIONES'];
								 	if(observaciones_prueba==null)
								 		observaciones_prueba="";

								var nombre_estado = data[i]['NOMBRE_ESTADO'];
								var despachado = data[i]['DESPACHADO'];
								if(despachado=='S') 
									despachado="Si";
								else
									despachado="No";

								if(nombre_estado=="TERMINADO")//pongo la fila de color  si se termino la prueba
									var estilo='bg-info ';
								else
									var estilo='';

								html+='	<tr class="'+id_prueba+' '+estilo+'"  obs="'+observaciones_prueba+'" >';
								html+='		<td>';
								html+=			nombre_prueba;
								html+='		</td>';
								html+='		<td>';
								html+=			fecha_salida;
								html+='		</td>';
								html+='		<td id="fr'+id_prueba+'" >';
								html+= 			fecha_regreso;
								html+='		</td>';
								html+='		<td id="est'+id_prueba+'" >';
								html+=			nombre_estado;
								html+='		</td>';
								html+='		<td style="text-align:center">';
								html+=			despachado;
								html+='		</td>';
				                //si la prueba esta terminada pongo un candado
				                if(nombre_estado=="TERMINADO")
				                {
				                	html+='      <td>';
					                html+='      <center><button type="button" class="btn btn-primary btn-xs" style="width:50px" onclick="mostrarDetallePrueba(this.id)" id="'+id_prueba+'" >';
					                html+='      <span class="glyphicon glyphicon-lock"></span>';
					                html+='          </button></center>';
					                html+='      </td>';

					                html+='      <td>';	
					                html+='      <center><button type="button" class="btn btn-danger btn-xs" style="width:50px" onclick="mostrarDetallePrueba(this.id)"  id="'+id_prueba+'" >';
					                html+='      <span class="glyphicon glyphicon-lock"></span>';
					                html+='          </button></center>';
					                html+='      </td>';
				                }
				                else
				                {
				                	html+='      <td>';
					                html+='      <center><button type="button" class="btn btn-primary btn-xs" style="width:50px" onclick="editarFilaPrueba(this.id)"  id="'+id_prueba+'" >';
					                html+='      <span class="glyphicon glyphicon-pencil"></span>';
					                html+='          </button></center>';
					                html+='      </td>';

					                html+='      <td>';	
					                html+='      <center><button type="button" class="btn btn-danger btn-xs" style="width:50px" onclick="eliminarFilaPrueba(this.id)"  id="'+id_prueba+'" >';
					                html+='      <span class="glyphicon glyphicon-trash"></span>';
					                html+='          </button></center>';
					                html+='      </td>';		                	
				                }
					            html+='      <td>';	
					            html+='      <center><button type="button" class="btn btn-primary btn-xs" style="width:50px" onclick="mostrarDetalleDespacho(this.id)"  id="'+id_prueba+'" >';
					            html+='      <span class="glyphicon glyphicon-print"></span>';
					            html+='          </button></center>';
					            html+='      </td>';	

				                html+='	</tr>';

							}
							html+='	</table>';



							html+='<table class="table table-condensed table-bordered" >';
							html+='	<tr>';
							html+='		<td colspan="7">';
							html+='		  <center><button type="button" class="btn btn-primary btn-sm" onclick="modaladicionarPrueba();" style="margin-top:2px">';
							html+='         <span class="glyphicon glyphicon-plus"></span> Agregar Prueba';
							html+='      </button>';
							html+='		  <button type="button" class="btn btn-primary btn-sm" onclick="imprimirPedido(this.id);" style="margin-top:2px" id="'+nro_pedido+'">';
							html+='         <span class="glyphicon glyphicon-print"></span> Imprimir';
							html+='      </button></center>';


							html+='		</td>';
							html+='	</tr>';
							html+='	</table>';

							html+='</div>';
							html+='</div></center>';
							$('#tabla-pruebas').html("");
							$('#tabla-pruebas').append(html);			             

	                        $.isLoading("hide");                     
	                     }
	            }); 

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



            //busco los datos del pedido
                            $.isLoading({
                              text: "Cargando",
                              position: "overlay"
                           });

                $.ajax({
                         type: 'POST',
                         async:false,
                         dataType: 'json',
                         data: {nro_pedido:nro_pedido},
                         url: '<?php echo base_url(); ?>index.php/pedido/pedidos/getDataCabeceraPedido',
                         success: function (data) 
                         {
                            if(data.FOTO_PACIENTE!="" && data.FOTO_PACIENTE!=null)
                            {
                                var nombref=data.FOTO_PACIENTE;
                                var url="<?php echo base_url(); ?>assets/uploads/fotografias/"+nombref;
                                var html='<center><img src="'+url+'" class="img-thumbnail" ></center>';

                                $('#mensaje-nofoto').attr("style","display:none");
                                $('#cuerpo-modal-foto-paciente').html(html);     
                            }
                            else
                            {
                                $('#mensaje-nofoto').attr("style","display:block");
                                $('#cuerpo-modal-foto-paciente').html(""); 
                            }

                            var priorid = data.PRIORIDAD;
                            var clte = data.cliente;
                            var pacte = data.NOMBRE_PACIENTE;
                            var telef= "";
                            var contac= "";
                            var color= "";
                            var medtra= data.MEDICO_TRATANTE;
                            var fing= data.FECHA_COTIZACION;
                            var obs_ped= data.OBSERVACIONES;


                            $('#c_prioridad').val(priorid); 
                            $('#c_cliente').val(clte); 
                            $('#c_paciente').val(pacte); 
                            $('#c_telefono').val(telef); 
                            $('#c_contacto').val(contac); 
                            $('#c_color').val(color); 
                            $('#c_medicot').val(medtra); 
                            $('#c_fechaIng').val(fing); 
                            $('#observaciones').val(obs_ped); 

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

	function eliminarFilaPrueba(idPrueba)
	{
		$("."+idPrueba).remove();

	            $.ajax({
	                     type: 'POST',
	                     async:true,
	                     dataType: 'json',
	                     data: {idPrueba:idPrueba},
	                     url: '<?php echo base_url(); ?>index.php/pedido/pedidos/eliminarPrueba',
	                     success: function () 
	                     {                           
	                     }
	            });  

	}

	function mostrarDetallePrueba(idPrueba)
	{
 		$.isLoading({
	                 text: "Cargando",
	                 position: "overlay"
	    });

		$.ajax({
	        	type: 'POST',
	        	async:false,
	        	dataType: 'json',
	        	data: {idPrueba:idPrueba},
	        	url: '<?php echo base_url(); ?>index.php/pedido/pedidos/getdatosDetallePrueba',
	        	success: function (data) 
	        	{       
	        		var despacho="Desconocido";

		        		if(data[0].EMPL_COD_EMPL!="")
		        			despacho="Mensajería Interna";
		        		if(data[0].courier!="")
		        			despacho="Courier";	        			


								var html=''
									+'<div class="table-responsive">'
									+'<table class="table table-condensed table-striped table-bordered">'
									+'	<tr style="font-weight: bold">'
									+'		<td colspan="2" class="bg-primary" style="text-align: center">'
									+'			PRUEBA'
									+'		</td>'
									+'	</tr>'
									+'	<tr>'
									+'		<td>'
									+'			Prueba: '
									+'		</td>'
									+'		<td>'
									+data[0].NOMBRE_PRUEBA
									+'		</td>'
									+'	</tr>'
									+'	<tr >'
									+'		<td>'
									+'			Fecha de Salida: '
									+'		</td>'
									+'		<td>'
									+data[0].FECHA_SALIDA
									+'		</td>'
									+'	</tr>'
									+'	<tr>'
									+'		<td>'
									+'			Fecha de Retorno: '
									+'		</td>'
									+'		<td>'
									+data[0].FECHA_REGRESO
									+'		</td>'
									+'	</tr>'
									+'	<tr>'
									+'		<td>'
									+'			Observaciones: '
									+'		</td>'
									+'		<td>'
									+data[0].OBSERVACIONES
									+'		</td>'
									+'	</tr>'
									+'	<tr style="font-weight: bold">'
									+'		<td colspan="2" class="bg-primary"  style="text-align: center">'
									+'			DESPACHO'
									+'		</td>'
									+'	</tr>'
									+'	<tr>'
									+'		<td>'
									+'			Despacho: '
									+'		</td>'
									+'		<td>'
									+despacho
									+'		</td>'
									+'	</tr>'
									+'	<tr >'
									+'		<td>'
									+'			Courier: '
									+'		</td>'
									+'		<td>'
									+data[0].courier
									+'		</td>'
									+'	</tr>'
									+'	<tr>'
									+'		<td>'
									+'			Valor Flete: '
									+'		</td>'
									+'		<td>'
									+data[0].VALOR_FLETE
									+'		</td>'
									+'	</tr>'
									+'	<tr>'
									+'		<td>'
									+'			Usuario Responsable: '
									+'		</td>'
									+'		<td>'
									+data[0].usuario_responsable
									+'		</td>'
									+'	</tr>'
									+'	<tr style="font-weight: bold">'
									+'		<td colspan="2" class="bg-primary"  style="text-align: center">'
									+'			INVENTARIO ENVIADO'
									+'		</td>'
									+'	</tr>';

									if(data['inv'].length==0)
									{
									   html+='<tr>'
											+'		<td colspan="2" style="text-align: center; font-weight: bold">'
											+'			Sin Inventario...'
											+'		</td>'
											+'	</tr>';
									}

									html+='	</table>';
									html+='	</div>';

									$('#cuerpo-modal-detalle-prueba').html("");
									$('#cuerpo-modal-detalle-prueba').append(html);		
 					$.isLoading("hide");  
	        		$("#modal-detalle-pruebas").modal('show');

	        	}
	    }); 
	}

	function mostrarDetalleDespacho(idPrueba)
	{
		$.isLoading({
	                 text: "Cargando",
	                 position: "overlay"
	    });

		$.ajax({
	        	type: 'POST',
	        	async:false,
	        	dataType: 'json',
	        	data: {idPrueba:idPrueba},
	        	url: '<?php echo base_url(); ?>index.php/pedido/pedidos/getdatosImprimirDespacho',
	        	success: function (data) 
	        	{             			
								var html=''
									+'<div class="table-responsive" id="imprimeme">'
									+'<table class="table table-condensed table-striped table-bordered" id="tabla-despacho" >'
									+'	<tr style="font-weight: bold">'
									+'		<td style="text-align: center">'
									+'			FECHA DESPACHO'
									+'		</td>'
									+'		<td style="text-align: center">'
									+'			PEDIDO '
									+'		</td>'
									+'		<td style="text-align: center">'
									+'			CLIENTE '
									+'		</td>'
									+'		<td style="text-align: center">'
									+'			PACIENTE '
									+'		</td>'
									+'		<td style="text-align: center">'
									+'			PRUEBA '
									+'		</td>'
									+'		<td style="text-align: center">'
									+'			 COURIER '
									+'		</td>'
									+'		<td style="text-align: center">'
									+'			 INVENTARIO'
									+'		</td>'
									+'	</tr>'

									+'	<tr>'
									+'		<td style="text-align: center">'
									+data[0].FECHA_SALIDA
									+'		</td>'
									+'		<td style="text-align: center">'
									+data[0].PEDF_NUM_PREIMP
									+'		</td>'
									+'		<td style="text-align: center">'
									+data[0].cliente
									+'		</td>'
									+'		<td style="text-align: center">'
									+data[0].NOMBRE_APELLIDO
									+'		</td>'
									+'		<td style="text-align: center">'
									+data[0].NOMBRE_PRUEBA
									+'		</td>'
									+'		<td style="text-align: center">'
									+data[0].courier
									+'		</td>'



									+'		<td style="text-align: center">'
									+data[0].NOMBRE_PRUEBA
									+'		</td>'
									+'	</tr>'

									html+='	</table>';
									html+='	</div>';

									html+='<center><button class="btn btn-primary btn-sm" type="button" onclick="imprimirDespacho();" style="margin-top:2px"> <span class="glyphicon glyphicon-print"></span> Imprimir</button></center>'

									$('#cuerpo-modal-detalle-despacho').html("");
									$('#cuerpo-modal-detalle-despacho').append(html);		
 					$.isLoading("hide");  
	        		$("#modal-detalle-despacho").modal('show');
	        	}
	    }); 
	}

	function imprimirDespacho()
	{
		//$("#tabla-despacho").attr("style","border-collapse: collapse;");
		var cadena="<head><style> table, th, td {margin-top: 30px; border: 1px solid black;border-collapse: collapse; } </style></head> ";

	    var objeto=document.getElementById('imprimeme');  //obtenemos el objeto a imprimir 

	    var ventana=window.open('','_blank');  //abrimos una ventana vacía nueva
	    ventana.document.write(cadena+"<center style='font-weight:bold; margin-top:30px'><span>BADENT CIA. LTDA<span><br>"+objeto.innerHTML+"</center>");  //imprimimos el HTML del objeto en la nueva ventana
	    ventana.document.close();  //cerramos el documento
	    ventana.print();  //imprimimos la ventana
	    ventana.close();  //cerramos la ventana
	    
	    //var url_dir = "<?php echo base_url(); ?>index.php/facturacion/facturacion/cajas_cerradas";
	    //$(location).attr('href',url_dir);
	}

	function imprimirPedido(idPedido)
	{
		var url='<?php echo base_url(); ?>index.php/pedido/pedidos/mostrarImprimirPedido/'+idPedido;
		window.open(url, '_blank');
	}

    //TRABAJANDO CON MODAL DE PRUEBAS
    function modaladicionarPrueba()
    {
        $("#modal-adicionar-pruebas").modal('show');
    }

    $("#formulario_pedido_prueba").change(function()
    {
        var valor = $("#formulario_pedido_prueba").val();
        var dias = $("#formulario_pedido_prueba option[value='"+valor+"']").attr("dias");
        var fecha =$("#formulario_pedido_prueba option[value='"+valor+"']").attr("fecha");;

        $("#duracion_prueba").val(dias);
        $("#fecha_calculada").val(fecha);
    });


    function adicionarPrueba()
    {
        var valor =$("#formulario_pedido_prueba").val().trim(); //id
        var prueba = $("#formulario_pedido_prueba option[value='"+valor+"']").attr("nombre");
        var fecha_entrega = $("#formulario_pedido_prueba option[value='"+valor+"']").attr("fechaentrega");
        var duracion = $("#duracion_prueba").val().trim(); 
        var fecha =$("#fecha_calculada").val().trim();  //fecha pro


        if(prueba=="" || duracion =="" || fecha=="" )
        {
            var text = 'Seleccione una PRUEBA';
            $.notific8(text, params); 
            return;
        }
        else
        {
            //ADICIONO la prueba y UNA LINEA DE PRUEBA
            var pedf_num_preimp=$("#s_pedidos").val().trim();
            var idPedido=$("#s_pedidos option[value='"+pedf_num_preimp+"']").attr("ide").trim();
            var fecha_salida= fecha;
            var fecha_salida_produccion=fecha;
            var id_tipo_prueba=valor;
            var fecha_entrega_cliente=fecha_entrega;
            var id_estados=3;

            	 $.isLoading({
	               text: "Cargando",
	               position: "overlay"
	            });
	            $.ajax({
	                     type: 'POST',
	                     async:false,
	                     dataType: 'json',
	                     data: {idPedido:idPedido,pedf_num_preimp:pedf_num_preimp,fecha_salida:fecha_salida,fecha_salida_produccion:fecha_salida_produccion,id_tipo_prueba:id_tipo_prueba,fecha_entrega_cliente:fecha_entrega_cliente,id_estados:id_estados},
	                     url: '<?php echo base_url(); ?>index.php/pedido/pedidos/adicionarPruebaAlPedido',
	                     success: function (data) 
	                     {    	      
								var id_prueba = data; //data[i]['ID_PRUEBAS']; 
								var nombre_prueba = prueba;
								var fecha_salida = fecha;
								var fecha_regreso = '';
								var id_tipo_pruebas = valor;

								var nombre_estado = 'PROCESO';
								var despachado = 'No';

								if(nombre_estado=="TERMINADO")//pongo la fila de color  si se termino la prueba
									var estilo='bg-info ';
								else
									var estilo='';

								html ='	<tr class="'+id_prueba+' '+estilo+'">';
								html+='		<td>';
								html+=			nombre_prueba;
								html+='		</td>';
								html+='		<td>';
								html+=			fecha_salida;
								html+='		</td>';
								html+='		<td id="fr'+id_prueba+'"  >';
								html+= 			fecha_regreso;
								html+='		</td>';
								html+='		<td id="est'+id_prueba+'"  >';
								html+=			nombre_estado;
								html+='		</td>';
								html+='		<td style="text-align:center">';
								html+=			despachado;
								html+='		</td>';
				                //si la prueba esta terminada pongo un candado
				                if(nombre_estado=="TERMINADO")
				                {
				                	html+='      <td>';
					                html+='      <center><button type="button" class="btn btn-primary btn-xs" style="width:50px" onclick="mostrarDetallePrueba(this.id)" id="'+id_prueba+'" >';
					                html+='      <span class="glyphicon glyphicon-lock"></span>';
					                html+='          </button></center>';
					                html+='      </td>';

					                html+='      <td>';	
					                html+='      <center><button type="button" class="btn btn-danger btn-xs" style="width:50px" onclick="mostrarDetallePrueba(this.id)"  id="'+id_prueba+'" >';
					                html+='      <span class="glyphicon glyphicon-lock"></span>';
					                html+='          </button></center>';
					                html+='      </td>';
				                }
				                else
				                {
				                	html+='      <td>';
					                html+='      <center><button type="button" class="btn btn-primary btn-xs" style="width:50px" onclick="editarFilaPrueba(this.id)"  id="'+id_prueba+'" >';
					                html+='      <span class="glyphicon glyphicon-pencil"></span>';
					                html+='          </button></center>';
					                html+='      </td>';

					                html+='      <td>';	
					                html+='      <center><button type="button" class="btn btn-danger btn-xs" style="width:50px" onclick="eliminarFilaPrueba(this.id)"  id="'+id_prueba+'" >';
					                html+='      <span class="glyphicon glyphicon-trash"></span>';
					                html+='          </button></center>';
					                html+='      </td>';		                	
				                }
					            html+='      <td>';	
					            html+='      <center><button type="button" class="btn btn-primary btn-xs" style="width:50px" onclick="mostrarDetalleDespacho(this.id)"  id="'+id_prueba+'" >';
					            html+='      <span class="glyphicon glyphicon-print"></span>';
					            html+='          </button></center>';
					            html+='      </td>';	

				                html+='	</tr>';

					            $("#filas_pruebas tbody").append(html);
					            $('#modal-adicionar-pruebas').modal('hide');
		                        $.isLoading("hide");                     
	                     }
	            });            
        }
    }

    var id_prueba_a_actualizar="";
    function editarFilaPrueba(idPrueba)
    {
    	id_prueba_a_actualizar=idPrueba;
    	var pedf_num_preimp=$("#s_pedidos").val().trim();
    	var idPedido = $("#s_pedidos option[value='"+pedf_num_preimp+"']").attr("ide").trim();
    	var obs = $("."+idPrueba).attr("obs");
    	$("#observaciones_prueba").val(obs);
		$.ajax({
	        	type: 'POST',
	        	async:false,
	        	dataType: 'json',
	        	data: {idPedido:idPedido},
	        	url: '<?php echo base_url(); ?>index.php/pedido/pedidos/obtenerInventarioDePedido',
	        	success: function (data) 
	        	{
	        		$("#filas_invent tbody").html("");
					var cad_html='  <tr style="font-weight: bold">';
						cad_html+='	    <td colspan="3" class="bg-primary" style="text-align: center">';
						cad_html+='			INVENTARIO';
						cad_html+='		</td>';
						cad_html+='	</tr>';	
					$("#filas_invent tbody").append(cad_html);


	        		for (var i = 0; i < data.length; i++) 
	        		{
	        			var id_inv_rec = data[i]['ID_INVENTARIO_RECIBIDO'];
	        			var nomb_inv = data[i]['nombre_inventario'];

				    	html='	<tr>';
						html+='		<td>';
						html+=nomb_inv;
						html+='		</td>';
						html+='		<td>';
						html+='			<input id="'+id_inv_rec+'" data-toggle="toggle" data-on="Si" data-off="No" type="checkbox" data-size="small" data-onstyle="primary" class="form-control dt"  data-offstyle="danger">';
						html+='		</td>';
						html+='	</tr>';

						$("#filas_invent tbody").append(html);
						$('#'+id_inv_rec).bootstrapToggle();
	        		}
	        	}
		});


    	$("#modal-actualizar-pruebas").modal('show');
    }

    function toggleFilaFechaRetorno()
    {
		if( $('#c_retorno').prop('checked') ) 
		{
			$("#fila_fecha_retorno").attr("style","display:table-row");
		}
		else
		{
			$("#fila_fecha_retorno").attr("style","display:none");
		}
    }

    function actualizarPrueba()
    {
    	var idPrueba=id_prueba_a_actualizar;
    	var estado = $("#s_estados").val();
    	if( $('#c_retorno').prop('checked') ) 
    		var fecha_retorno=$("#c_fecha_retorno").val()+" "+"<?php echo date("H:i:s"); ?>";
    	else
    		var fecha_retorno="";
    	var obs = $("#observaciones_prueba").val().trim();

    	var cadena_id_inv_devuelto ="";
        var btns_inv = $(".dt");
        btns_inv.each(function()
        {
            if( $(this).prop('checked') )
            {
            	var id_inv_devuelto = $(this).attr("id");
            	cadena_id_inv_devuelto+=id_inv_devuelto+"&&";
            }

        });  

        if(cadena_id_inv_devuelto!="")
        	cadena_id_inv_devuelto=cadena_id_inv_devuelto.substring(0,cadena_id_inv_devuelto.length-2); 

		$.ajax({
	        	type: 'POST',
	        	async:false,
	        	dataType: 'json',
	        	data: {idPrueba:idPrueba, estado:estado,obs:obs,fecha_retorno:fecha_retorno,cadena_id_inv_devuelto:cadena_id_inv_devuelto},
	        	url: '<?php echo base_url(); ?>index.php/pedido/pedidos/actualizarPrueba',
	        	success: function (data) 
	        	{
	        		if(data==1)
	        		{
	        			if(fecha_retorno!="")
		        		$("#fr"+idPrueba).html(fecha_retorno);

		        		if(estado==8)
		        			$("#est"+idPrueba).html("EMPACADO");
		        		else if(estado==3)
		        			$("#est"+idPrueba).html("PROCESO");	

		        		$("."+idPrueba).attr("obs",obs);       			
	        		}
	        		$('#modal-actualizar-pruebas').modal('hide');
	        	}
		});
    }

    //ONHIDDEN modal adicionar producto
    $("#modal-actualizar-pruebas").on('hidden.bs.modal', function () 
    {
        $("#s_estados option[value='']").prop('selected', true);
        $("#observaciones_prueba").val(""); 
        $("#c_fecha_retorno").val("<?php echo date('Y-m-d'); ?>"); 

         $('#c_retorno').prop('checked',false);
         $('#c_retorno').bootstrapToggle('off');

         $("#fila_fecha_retorno").attr("style","display:none");
    });

    function mostrarFotoClte()
    {
        $("#modal-foto-paciente").modal('show');
    }

    function suspender()
    {
        var pedf_num_preimp=$("#s_pedidos").val().trim();

        if(pedf_num_preimp=="")
        {
            var text = 'Seleccione un PEDIDO';
            $.notific8(text, params); 
            return;
        }
        else if($("#c_motivo").val().trim()=="" )
        {
            var text = 'Ingrese un motivo';
            $.notific8(text, params); 
            return;
        }
        else
        {
            var idPedido=$("#s_pedidos option[value='"+pedf_num_preimp+"']").attr("ide").trim();
            var motivo =$("#c_motivo").val().trim();
            $.isLoading({
                text: "Cargando",
                position: "overlay"
            });

            $.ajax({
                    type: 'POST',
                    async:false,
                    dataType: 'json',
                    data: {idPedido:idPedido,motivo:motivo},
                    url: '<?php echo base_url(); ?>index.php/pedido/pedidos/suspenderPedido',
                    success: function (data) 
                    {
                        $.isLoading("hide");
                        window.location.reload();  
                    }
            });

        }
    }


</script>