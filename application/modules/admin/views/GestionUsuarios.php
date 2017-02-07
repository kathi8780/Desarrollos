<!--ventana modal para mostrar ficha de usuario-->
<div class="modal fade" id="modal_ficha_usuario">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">FICHA DE USUARIO</h4>
            </div>
            <div class="modal-body" id="cuerpo-modal-asignar-mensajero">
				<div class="table-responsive"><div id="ficha_usuario" class="modal-dialog"></div></div>
			</div>
		</div>
	</div>
</div>	
<!--ventana modal para editar proceso-->
        <div class="modal fade" id="modal-editar-usuario">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">USUARIO</h4>
                    </div>
                    <div class="modal-body" id="cuerpo-modal-asignar-mensajero">
            <div class="table-responsive">
              <table class="table table-condensed table-striped table-bordered">
                <tr style="font-weight: bold">
                  <td colspan="2" class="bg-primary" style="text-align: center">MODIFICAR USUARIO</td>
                </tr>
                <tr>
                  <td>
                    <!-- campo cliente -->
					<div class="col-md-8 col-sm-6 col-xs-12">
						<div class="form-group form-group-sm">                
							<label class="control-label required" for="">Perfil de Usuario<span class="required"> * </span></label> 
							<select id="c_PERFIL_ID" class="form-control" style="height:30px">
							<option value="">TODOS</option>
								<?php foreach ($perfil as $array) 
									{?>
										<option value="<?php echo $array['PERFIL_ID']; ?>" ><?php echo $array['PERFIL_NOMBRE']; ?></option>  
								<?php } ?>
							</select>
						</div>
					</div>
				  </td>
				</tr>
				<tr>
                  <td>
					<!-- campo nombre -->
					<div class="col-md-8 col-sm-6 col-xs-12">
						<div class="form-group form-group-sm">                
							<label class="control-label required" for="">Nombre<span class="required"> * </span></label> 
							<input type="hidden" id="c_USUARIO_ID" class="form-control"/>
							<input type="text" min="0" max="30" id="c_USUARIO_NOMBRE" autocomplete="off" mayusculas="^[A-Za-zÁÉÍÓÚáéíóúÑñ]+$" maxlength="30" class="form-control"/>
						</div>
					</div>
				  </td>
				</tr>
				<tr>
                  <td>
					<!-- campo apellido -->
					<div class="col-md-8 col-sm-6 col-xs-12">
						<div class="form-group form-group-sm">                
							<label class="control-label required" for="">Apellido<span class="required"> * </span></label> 
							<input type="text"  min="0" max="30" id="c_USUARIO_APELLIDO" autocomplete="off" mayusculas="^[A-Za-zÁÉÍÓÚáéíóúÑñ]+$" maxlength="30" class="form-control"/>
						</div>
					</div>
				  </td>
				</tr>
				<tr>
					<td>
				    <!-- campo usuario -->
					<div class="col-md-8 col-sm-6 col-xs-12">
						<div class="form-group form-group-sm">                
							<label class="control-label required" for="">Usuario<span class="required"> * </span></label> 
							<input type="text"  min="0" max="30" id="c_USUARIO_USER" autocomplete="off" mayusculas="^[A-Za-zÁÉÍÓÚáéíóúÑñ]+$" maxlength="30" class="form-control"/>
						</div>
					</div>
					</td>
				</tr>
				<tr>
                  <td>
				  <!-- Fecha de Registro -->
					<div class="col-md-8 col-sm-6 col-xs-12">
						<label class="control-label">Fecha de Registro</label>
						<div class='input-group'>
							<span onclick="limpiarFecha('c_USUARIO_FECHA_REGISTRO')" class="input-group-addon left" style="cursor:pointer">
								<span class="glyphicon glyphicon-calendar"></span>
							</span>
							<input type="text" id="c_USUARIO_FECHA_REGISTRO" placeholder="yyyy-mm-dd" class="form-control dp" style="height:30px" readonly /> 						
					</div>
					</div>
				  </td>
				</tr>
				<tr>
                  <td>
					<!-- Fecha de Caducida -->
						<div class="col-md-8 col-sm-6 col-xs-12">
						<label class="control-label">Fecha de Caducida</label>
						<div class='input-group'>
							<span onclick="limpiarFecha('c_USUARIO_FECHA_CADUCA')" class="input-group-addon left" style="cursor:pointer">
								<span class="glyphicon glyphicon-calendar"></span>
							</span>
							<input type="text" id="c_USUARIO_FECHA_CADUCA" placeholder="yyyy-mm-dd" class="form-control dp" style="height:30px" readonly /> 					
                    </div>
                </div>
				  </td>
				</tr>
				<tr>
                  <td>
					<!-- campo email -->
					<div class="col-md-8 col-sm-6 col-xs-12">
						<div class="form-group form-group-sm">                
							<label class="control-label required" for="">E-mail<span class="required"> * </span></label> 
							<input type="text"  min="0" max="50" id="c_USUARIO_EMAIL" autocomplete="off" mayusculas="^[A-Za-zÁÉÍÓÚáéíóúÑñ]+$" maxlength="50" class="form-control"/>
						</div>
					</div>
				  </td>
				</tr>
				<tr>
                  <td>
					<!-- campo activo -->
					<div class="col-md-8 col-sm-6 col-xs-12">
						<div class="form-group form-group-sm">                
							<label class="control-label required" for="">Usuario Activo<span class="required"> * </span></label> 
							<select id="c_USUARIO_ACTIVO" class="form-control" style="height:30px">
							<option value="S">SI</option>
							<option value="N">NO</option>  
							</select>
						</div>
					</div>
				  </td>
				</tr>
				<tr>
                  <td>
					<!-- campo tmovil -->
					<div class="col-md-8 col-sm-6 col-xs-12">
						<div class="form-group form-group-sm">                
							<label class="control-label required" for="">Teléfono Movil<span class="required"> * </span></label> 
							<input type="text"  min="0" max="10" id="c_USUARIO_MOVIL" autocomplete="off" mayusculas="^[A-Za-zÁÉÍÓÚáéíóúÑñ]+$" maxlength="50" class="form-control"/>
						</div>
					</div>
				  </td>
				</tr>
				<tr>
                  <td>
					<!-- campo tfijo -->
					<div class="col-md-8 col-sm-6 col-xs-12">
						<div class="form-group form-group-sm">                
							<label class="control-label required" for="">Teléfono Fijo<span class="required"> * </span></label> 
							<input type="text" min="0" max="20" id="c_USUARIO_TELEFONO" autocomplete="off" mayusculas="^[A-Za-zÁÉÍÓÚáéíóúÑñ]+$" maxlength="50" class="form-control"/>
						</div>
					</div>
				  </td>
				</tr>
				<tr>
                  <td>
					<!-- campo tsesion -->
					<div class="col-md-8 col-sm-6 col-xs-12">
						<div class="form-group form-group-sm">                
							<label class="control-label required" for="">Tiempo en Sesión (minutos)<span class="required"> * </span></label> 
							<input type="text"  min="0" max="5" id="c_USUARIO_TIEMPO_SESION" autocomplete="off" mayusculas="^[A-Za-zÁÉÍÓÚáéíóúÑñ]+$" maxlength="50" class="form-control"/>
						</div>
					</div>
				  </td>
				</tr>
              </table>
            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-sm" onclick="ModificarUsuario()">
                            <span class="glyphicon glyphicon-pencil"></span> Actualizar
                        </button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
<!--ventana modal para crear proceso-->
        <div class="modal fade" id="modal-crear-usuario">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">USUARIO</h4>
                    </div>
                    <div class="modal-body" id="cuerpo-modal-asignar-mensajero">
            <div class="table-responsive">
              <table class="table table-condensed table-striped table-bordered">
                <tr style="font-weight: bold">
                  <td colspan="2" class="bg-primary" style="text-align: center">ADICIONAR NUEVO USUARIO</td>
                </tr>
                <tr>
                  <td>
                    <!-- campo perfil de usuario -->
					<div class="col-md-8 col-sm-6 col-xs-12">
						<div class="form-group form-group-sm">                
							<label class="control-label required" for="">Perfil de Usuario<span class="required"> * </span></label> 
							<select id="n_PERFIL_ID" class="form-control" style="height:30px">
							<option value="">TODOS</option>
								<?php foreach ($perfil as $array) 
									{?>
										<option value="<?php echo $array['PERFIL_ID']; ?>" ><?php echo $array['PERFIL_NOMBRE']; ?></option>  
								<?php } ?>
							</select>
						</div>
					</div>
				  </td>
				</tr>
				<tr>
                  <td>
					<!-- campo nombre -->
					<div class="col-md-8 col-sm-6 col-xs-12">
						<div class="form-group form-group-sm">                
							<label class="control-label required" for="">Nombre<span class="required"> * </span></label> 
							<input type="text" min="0" max="30" id="n_USUARIO_NOMBRE" autocomplete="off" mayusculas="^[A-Za-zÁÉÍÓÚáéíóúÑñ]+$" maxlength="30" class="form-control"/>
						</div>
					</div>
				  </td>
				</tr>
				<tr>
                  <td>
					<!-- campo apellido -->
					<div class="col-md-8 col-sm-6 col-xs-12">
						<div class="form-group form-group-sm">                
							<label class="control-label required" for="">Apellido<span class="required"> * </span></label> 
							<input type="text"  min="0" max="30" id="n_USUARIO_APELLIDO" autocomplete="off" mayusculas="^[A-Za-zÁÉÍÓÚáéíóúÑñ]+$" maxlength="30" class="form-control"/>
						</div>
					</div>
				  </td>
				</tr>
				<tr>
                  <td>
					<!-- campo usuario -->
					<div class="col-md-8 col-sm-6 col-xs-12">
						<div class="form-group form-group-sm">                
							<label class="control-label required" for="">Usuario<span class="required"> * </span></label> 
							<input type="text"  min="0" max="30" id="n_USUARIO_USER" autocomplete="off" mayusculas="^[A-Za-zÁÉÍÓÚáéíóúÑñ]+$" maxlength="30" class="form-control"/>
						</div>
					</div>
				  </td>
				</tr>
				<tr>
                  <td>
					<!-- campo password -->
					<div class="col-md-8 col-sm-6 col-xs-12">
						<div class="form-group form-group-sm">                
							<label class="control-label required" for="">Clave<span class="required"> * </span></label> 
							<input type="text"  min="0" max="30" id="n_USUARIO_PASSWORD" autocomplete="off" mayusculas="^[A-Za-zÁÉÍÓÚáéíóúÑñ]+$" maxlength="30" class="form-control"/>
						</div>
					</div>
				  </td>
				</tr>
				<tr>
                  <td>
				  <!-- Fecha de Registro -->
					<div class="col-md-8 col-sm-6 col-xs-12">
						<label class="control-label">Fecha de Registro</label>
						<div class='input-group'>
							<span onclick="limpiarFecha('n_USUARIO_FECHA_REGISTRO')" class="input-group-addon left" style="cursor:pointer">
								<span class="glyphicon glyphicon-calendar"></span>
							</span>
							<input type="text" id="n_USUARIO_FECHA_REGISTRO" placeholder="yyyy-mm-dd" class="form-control dp" style="height:30px" readonly
							<?php 
									$hoy = date("Y-m-d");
									echo " value='".$hoy."' ";
							?>	/> 						
					</div>
					</div>
				  </td>
				</tr>
				<tr>
                  <td>
					<!-- Fecha de Caducida -->
						<div class="col-md-8 col-sm-6 col-xs-12">
						<label class="control-label">Fecha de Caducida</label>
						<div class='input-group'>
							<span onclick="limpiarFecha('n_USUARIO_FECHA_CADUCA')" class="input-group-addon left" style="cursor:pointer">
								<span class="glyphicon glyphicon-calendar"></span>
							</span>
							<input type="text" id="n_USUARIO_FECHA_CADUCA" placeholder="yyyy-mm-dd" class="form-control dp" style="height:30px" readonly 
							<?php 
									$hoy = date("Y-m-d");
									echo " value='".$hoy."' ";
							?>	/> 					
                    </div>
                </div>
				  </td>
				</tr>
				<tr>
                  <td>
					<!-- campo email -->
					<div class="col-md-8 col-sm-6 col-xs-12">
						<div class="form-group form-group-sm">                
							<label class="control-label required" for="">E-mail<span class="required"> * </span></label> 
							<input type="text"  min="0" max="50" id="n_USUARIO_EMAIL" autocomplete="off" mayusculas="^[A-Za-zÁÉÍÓÚáéíóúÑñ]+$" maxlength="50" class="form-control"/>
						</div>
					</div>
				  </td>
				</tr>
				<tr>
                  <td>
					<!-- campo activo -->
					<div class="col-md-8 col-sm-6 col-xs-12">
						<div class="form-group form-group-sm">                
							<label class="control-label required" for="">Usuario Activo<span class="required"> * </span></label> 
							<select id="n_USUARIO_ACTIVO" class="form-control" style="height:30px">
							<option value="S">SI</option>
							<option value="N">NO</option>  
							</select>
						</div>
					</div>
				  </td>
				</tr>
				<tr>
                  <td>
					<!-- campo tmovil -->
					<div class="col-md-8 col-sm-6 col-xs-12">
						<div class="form-group form-group-sm">                
							<label class="control-label required" for="">Teléfono Movil<span class="required"> * </span></label> 
							<input type="text"  min="0" max="10" id="n_USUARIO_MOVIL" autocomplete="off" mayusculas="^[A-Za-zÁÉÍÓÚáéíóúÑñ]+$" maxlength="50" class="form-control"/>
						</div>
					</div>
				  </td>
				</tr>
				<tr>
                  <td>
					<!-- campo tfijo -->
					<div class="col-md-8 col-sm-6 col-xs-12">
						<div class="form-group form-group-sm">                
							<label class="control-label required" for="">Teléfono Fijo<span class="required"> * </span></label> 
							<input type="text" min="0" max="20" id="n_USUARIO_TELEFONO" autocomplete="off" mayusculas="^[A-Za-zÁÉÍÓÚáéíóúÑñ]+$" maxlength="50" class="form-control"/>
						</div>
					</div>
				  </td>
				</tr>
				<tr>
                  <td>
					<!-- campo tsesion -->
					<div class="col-md-8 col-sm-6 col-xs-12">
						<div class="form-group form-group-sm">                
							<label class="control-label required" for="">Tiempo en Sesión (minutos)<span class="required"> * </span></label> 
							<input type="text"  min="0" max="5" id="n_USUARIO_TIEMPO_SESION" autocomplete="off" mayusculas="^[A-Za-zÁÉÍÓÚáéíóúÑñ]+$" maxlength="50" class="form-control"/>
						</div>
					</div>
				  </td>
				</tr>
              </table>
            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-sm" onclick="crearUsuario()">
                            <span class="glyphicon glyphicon-pencil"></span> Crear Usuario
                        </button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

<!--fin ventana modal para editar proceso-->
<div class="panel panel-primary" >
    <div class="container">
    <div class="row">
	<table>
	<tr><td width=20%>
	<div class="col-md-4 col-sm-2 col-xs-12">
	     <div class="form-group form-group-sm">     
            <label class="control-label required" for=""> &nbsp</label>           
                  <button type="button" class="btn btn-primary btn-sm form-control" onclick="AbrirUsuario();">
                      <span class="glyphicon glyphicon-"></span> Crear Usuario
                  </button>
            </div>
	 </div>
	</tr></td>
	<tr><td></tr></td>
	</table>
	</div>
  </div>
</div>

 <div style="min-height:500px">
    <div class="panel panel-primary" style="border:none">
        <div class="panel-heading">Consultar Usuario</div>
        <div class="panel-body">
            <div class="row" > 
                <!-- campo perfil de usuario -->
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group form-group-sm">                
						<label class="control-label required" for="">Perfil de Usuario<span class="required"> * </span></label> 
						<select id="PERFIL_ID" class="form-control" style="height:30px">
						<option value="">TODOS</option>
							<?php foreach ($perfil as $array) 
								{?>
									<option value="<?php echo $array['PERFIL_ID']; ?>" ><?php echo $array['PERFIL_NOMBRE']; ?></option>  
							<?php } ?>
						</select>
					</div>
				</div>
                <!-- campo ACTIVO -->
                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label>Estado</label>                            
                            <select id="activo" class="form-control" style="height:30px">
							<option value="S">Activo</option>
							<option value="N">Inactivo</option>
							<option value="">TODOS</option>
							</select>
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
	function constultarPedidos(){
		
    		var PERFIL_ID = $("#PERFIL_ID").val().trim();
			var activo   = $("#activo").val().trim();

    
            $.isLoading({
                          text: "Cargando",
                          position: "overlay"
                       });
				            $.ajax({
				                     type: 'POST',
				                     async:false,
				                     dataType: 'json',
				                     data: {PERFIL_ID:PERFIL_ID, activo:activo},
				                     url: '<?php echo base_url(); ?>index.php/admin/usuarios/ObtenerUsuarios',
				                     success: function (data) 
				                     {     
				                        generarTablaDinamica(data); 
										//constultarPruebas();								
				                        $.isLoading("hide");                     
				                     }

				            });  
    }
	function generarTablaDinamica(pedidos){
		
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
			            var textoCelda1 = document.createTextNode("NOMBRE");
			            var textoCelda2 = document.createTextNode("APELLIDO");
			            var textoCelda3 = document.createTextNode("PERFIL");
			            var textoCelda4 = document.createTextNode("ESTADO");
			            var textoCelda5 = document.createTextNode("REGISTRO");
			            var textoCelda11 = document.createTextNode("TELEFONO");
			            var textoCelda12 = document.createTextNode("MODIFICAR");
						var textoCelda13 = document.createTextNode("ESTADO");
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
			            filaCabecera.appendChild(celda12);
					    filaCabecera.appendChild(celda13);
						//filaCabecera.appendChild(celda14);
			            
			            filaCabecera.setAttribute("id","fila_cabecera");
						
			            thead.appendChild(filaCabecera);

			            //CUERPO
			            for (var i = 0; i < pedidos.length; i++)
			            {
			                var id = pedidos[i]['USUARIO_ID']; 
			                var USUARIO_NOMBRE = pedidos[i]['USUARIO_NOMBRE']; 
			                var USUARIO_APELLIDO = pedidos[i]['USUARIO_APELLIDO']; 
			                var PERFIL_NOMBRE = pedidos[i]['PERFIL_NOMBRE']; 
			                var USUARIO_ACTIVO = pedidos[i]['USUARIO_ACTIVO'];
							var USUARIO_FECHA_REGISTRO = pedidos[i]['USUARIO_FECHA_REGISTRO'];
			                var USUARIO_TELEFONO = pedidos[i]['USUARIO_TELEFONO']; 
			               
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

							var textoCelda0 = document.createTextNode(id);
			                var textoCelda1 = document.createTextNode(USUARIO_NOMBRE);
			                var textoCelda2 = document.createTextNode(USUARIO_APELLIDO);
			                var textoCelda3 = document.createTextNode(PERFIL_NOMBRE);
			                var textoCelda4 = document.createTextNode(USUARIO_ACTIVO);
			                var textoCelda5 = document.createTextNode(USUARIO_FECHA_REGISTRO);
			                var textoCelda11 = document.createTextNode(USUARIO_TELEFONO);			 
							
							celda0.setAttribute("onclick","ConsultarUsuario('"+id+"')");
							celda1.setAttribute("onclick","ConsultarUsuario('"+id+"')");
							celda2.setAttribute("onclick","ConsultarUsuario('"+id+"')");
							celda3.setAttribute("onclick","ConsultarUsuario('"+id+"')");
							celda4.setAttribute("onclick","ConsultarUsuario('"+id+"')");
							celda5.setAttribute("onclick","ConsultarUsuario('"+id+"')");
							celda11.setAttribute("onclick","ConsultarUsuario('"+id+"')");

							celda0.appendChild(textoCelda0);
			                celda1.appendChild(textoCelda1);   
			                celda2.appendChild(textoCelda2); 
			                celda3.appendChild(textoCelda3); 
			                celda4.appendChild(textoCelda4); 
			                celda5.appendChild(textoCelda5); 
			                celda11.appendChild(textoCelda11); 

							var span2 = document.createElement("span");
							span2.setAttribute("class", "glyphicon glyphicon-pencil");
							
			               	var btn2 = document.createElement("button");
			                btn2.setAttribute("class", "btn btn-primary btn-sm");
			                btn2.setAttribute("type", "button");
			                btn2.setAttribute("value", "MODIFICAR" );
			                btn2.setAttribute("onclick","editarUsuario('"+id+"')");
			                btn2.appendChild(span2);

							var span3 = document.createElement("span");
							span3.setAttribute("class", "glyphicon glyphicon-ok");
							
							var btn3 = document.createElement("button");
							
							if(USUARIO_ACTIVO=='S'){
								btn3.setAttribute("class", "btn btn-success btn-sm");
							}else{
								btn3.setAttribute("class", "btn btn-danger btn-sm");
							}
							
			                btn3.setAttribute("type", "button");
			                btn3.setAttribute("value", "ESTADO");
							btn3.setAttribute("onclick","ModificarEstado('"+id+"')");
							btn3.appendChild(span3);
							
							celda12.appendChild(btn2);
			                celda13.appendChild(btn3);

							fila.appendChild(celda0);
			                fila.appendChild(celda1);
			                fila.appendChild(celda2);
			                fila.appendChild(celda3);
			                fila.appendChild(celda4);
			                fila.appendChild(celda5);
			                fila.appendChild(celda11);
							fila.appendChild(celda12);
			                fila.appendChild(celda13);
							//fila.setAttribute("onclick","ConsultarUsuario('"+id+"')");
							
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
	function ConsultarUsuario(USUARIO_ID){
		
		$.ajax({
                type: 'POST',
                async:false,
                dataType: 'json',
                data: {USUARIO_ID:USUARIO_ID},
                url: '<?php echo base_url(); ?>index.php/admin/usuarios/editarUsuario',
                success: function (data) 
                {  

					var USUARIO_ID = data[0]['USUARIO_ID'];	
					var USUARIO_NOMBRE = data[0]['USUARIO_NOMBRE'];	
					var USUARIO_APELLIDO = data[0]['USUARIO_APELLIDO'];	
					var USUARIO_ACTIVO = data[0]['USUARIO_ACTIVO'];	
					var USUARIO_FECHA_REGISTRO = data[0]['USUARIO_FECHA_REGISTRO'];	
					var USUARIO_MOVIL = data[0]['USUARIO_MOVIL'];	
					var USUARIO_TELEFONO = data[0]['USUARIO_TELEFONO'];
					var USUARIO_EMAIL = data[0]['USUARIO_EMAIL'];
					var USUARIO_FECHA_CADUCA = data[0]['USUARIO_FECHA_CADUCA'];
					var USUARIO_TIEMPO_SESION = data[0]['USUARIO_TIEMPO_SESION'];
					var USUARIO_USER = data[0]['USUARIO_USER'];
					var PERFIL_NOMBRE = data[0]['PERFIL_NOMBRE'];
					
					var html=''
                                +'<table class="table table-condensed table-striped table-bordered">';
					html+='     <td style="font-weight: bold" width="25%" >ID</td>';		
					html+='     <td width="25%">';
                    html+=          USUARIO_ID;
                    html+='     </td>';
					html+='     <td style="font-weight: bold" width="25%">Perfil</td>';
					html+='     <td width="25%">';
                    html+=          PERFIL_NOMBRE;
                    html+='     </td>';						
					html+='     </tr>';	

					html+='     <tr>';
					html+='     <td style="font-weight: bold" width="25%" >Nombre</td>';		
					html+='     <td width="25%">';
                    html+=          USUARIO_NOMBRE;
                    html+='     </td>';
					html+='     <td style="font-weight: bold" width="25%">Usuario</td>';
					html+='     <td width="25%">';
                    html+=          USUARIO_USER;
                    html+='     </td>';						
					html+='     </tr>';	

					html+='     <tr>';
					html+='     <td style="font-weight: bold" width="25%" >Teléfono Movil</td>';		
					html+='     <td width="25%">';
                    html+=          USUARIO_TELEFONO;
                    html+='     </td>';
					html+='     <td style="font-weight: bold" width="25%">Teléfono Fijo</td>';
					html+='     <td width="25%">';
                    html+=          USUARIO_MOVIL;
                    html+='     </td>';						
					html+='     </tr>';	

					html+='     <tr>';
					html+='     <td style="font-weight: bold" width="25%" >Fecha de Registro</td>';		
					html+='     <td width="25%">';
                    html+=          USUARIO_FECHA_REGISTRO;
                    html+='     </td>';
					html+='     <td style="font-weight: bold" width="25%">Fecha de Caducidad</td>';
					html+='     <td width="25%">';
                    html+=          USUARIO_FECHA_CADUCA;
                    html+='     </td>';						
					html+='     </tr>';	

					html+='     <tr>';
					html+='     <td style="font-weight: bold" width="25%" >Usuario Activo</td>';		
					html+='     <td width="25%">';
                    html+=          USUARIO_ACTIVO;
                    html+='     </td>';
					html+='     <td style="font-weight: bold" width="25%">Tiempo en Sesión</td>';
					html+='     <td width="25%">';
                    html+=          USUARIO_TIEMPO_SESION;
                    html+='     </td>';						
					html+='     </tr>';	

					html+='     <tr>';
					html+='     <td style="font-weight: bold" width="25%" >Email</td>';		
					html+='     <td width="25%" colspan=3>';
                    html+=          USUARIO_EMAIL;
                    html+='     </td>';

					html+=' </tr>';
		            html+=' </table>';
                            $('#ficha_usuario').html("");
                            $('#ficha_usuario').append(html); 
					
		
                }

       });
	  	
		 $('#modal_ficha_usuario').modal('show'); 
	}
	function AbrirUsuario(){
		
		$("#modal-crear-usuario").modal('show');
	}
    function crearUsuario()
    {
      	
	  var PERFIL_ID             = $("#n_PERFIL_ID").val().trim();
	  var USUARIO_NOMBRE        = $("#n_USUARIO_NOMBRE").val().trim();
	  var USUARIO_APELLIDO      = $("#n_USUARIO_APELLIDO").val().trim();
	  var USUARIO_ACTIVO        = $("#n_USUARIO_ACTIVO").val().trim();
	  var USUARIO_FECHA_REGISTRO = $("#n_USUARIO_FECHA_REGISTRO").val().trim();
	  var USUARIO_MOVIL         = $("#n_USUARIO_MOVIL").val().trim();
	  var USUARIO_TELEFONO      = $("#n_USUARIO_TELEFONO").val().trim();
	  var USUARIO_EMAIL         = $("#n_USUARIO_EMAIL").val().trim();
	  var USUARIO_FECHA_CADUCA  = $("#n_USUARIO_FECHA_CADUCA").val().trim();
	  var USUARIO_TIEMPO_SESION = $("#n_USUARIO_TIEMPO_SESION").val().trim();
	  var USUARIO_USER          = $("#n_USUARIO_USER").val().trim();
	  var USUARIO_PASSWORD      = $("#n_USUARIO_PASSWORD").val().trim();
	  
	     
      if(PERFIL_ID=="")
      {
            var text = 'Falta campo PERFIL DE USUARIO';
            $.notific8(text, params); 
            return;
      }
	  else if(USUARIO_NOMBRE=="")
      {
            var text = 'Falta campo NOMBRE DE USUARIO';
            $.notific8(text, params); 
            return;
      }
      else if(USUARIO_APELLIDO=="")
      {
            var text = 'Falta campo APELLIDO DE USUARIO';
            $.notific8(text, params); 
            return;
      } 
	  else if(USUARIO_USER=="")
      {
            var text = 'Falta campo USUARIO';
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
                         data: {USUARIO_PASSWORD:USUARIO_PASSWORD,USUARIO_USER:USUARIO_USER,PERFIL_ID:PERFIL_ID,USUARIO_NOMBRE:USUARIO_NOMBRE,USUARIO_APELLIDO:USUARIO_APELLIDO,USUARIO_ACTIVO:USUARIO_ACTIVO,USUARIO_FECHA_REGISTRO:USUARIO_FECHA_REGISTRO,USUARIO_MOVIL:USUARIO_MOVIL,USUARIO_TELEFONO:USUARIO_TELEFONO,USUARIO_EMAIL:USUARIO_EMAIL,USUARIO_FECHA_CADUCA:USUARIO_FECHA_CADUCA,USUARIO_TIEMPO_SESION:USUARIO_TIEMPO_SESION},
                         url: '<?php echo base_url(); ?>index.php/admin/usuarios/insertarUsuario',
                         success: function (data) 
                         {    
								alert(data);
								$.isLoading("hide"); 
								location.reload();
								tablaReload();  
                          
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
								{ "aTargets": [ 7 ],"bSortable": true },
								{ "aTargets": [ 8 ],"bSortable": true }
                                
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

    //var id_editar_usuario="";
    function editarUsuario(USUARIO_ID)
    {
	  
	   $.ajax({
                type: 'POST',
                async:false,
                dataType: 'json',
                data: {USUARIO_ID:USUARIO_ID},
                url: '<?php echo base_url(); ?>index.php/admin/usuarios/editarUsuario',
                success: function (data) 
                {  

					var USUARIO_ID = data[0]['USUARIO_ID'];	
					var PERFIL_ID = data[0]['PERFIL_ID'];	
					var USUARIO_NOMBRE = data[0]['USUARIO_NOMBRE'];	
					var USUARIO_APELLIDO = data[0]['USUARIO_APELLIDO'];	
					var USUARIO_ACTIVO = data[0]['USUARIO_ACTIVO'];	
					var USUARIO_FECHA_REGISTRO = data[0]['USUARIO_FECHA_REGISTRO'];	
					var USUARIO_MOVIL = data[0]['USUARIO_MOVIL'];	
					var USUARIO_TELEFONO = data[0]['USUARIO_TELEFONO'];
					var USUARIO_EMAIL = data[0]['USUARIO_EMAIL'];
					var USUARIO_FECHA_CADUCA = data[0]['USUARIO_FECHA_CADUCA'];
					var USUARIO_TIEMPO_SESION = data[0]['USUARIO_TIEMPO_SESION'];
					var USUARIO_USER = data[0]['USUARIO_USER'];
					
					$("#c_PERFIL_ID").val(PERFIL_ID);
					$("#c_USUARIO_ID").val(USUARIO_ID); 
					$("#c_USUARIO_NOMBRE").val(USUARIO_NOMBRE); 
					$("#c_USUARIO_APELLIDO").val(USUARIO_APELLIDO); 
					$("#c_USUARIO_ACTIVO").val(USUARIO_ACTIVO); 
					$("#c_USUARIO_FECHA_REGISTRO").val(USUARIO_FECHA_REGISTRO); 
					$("#c_USUARIO_MOVIL").val(USUARIO_MOVIL); 
					$("#c_USUARIO_TELEFONO").val(USUARIO_TELEFONO); 
					$("#c_USUARIO_EMAIL").val(USUARIO_EMAIL); 
					$("#c_USUARIO_FECHA_CADUCA").val(USUARIO_FECHA_CADUCA); 
					$("#c_USUARIO_TIEMPO_SESION").val(USUARIO_TIEMPO_SESION); 
					$("#c_USUARIO_USER").val(USUARIO_USER);
		
                }

       });
	  
	   $("#modal-editar-usuario").modal('show');
    }
	function ModificarEstado(USUARIO_ID){
			
				$.isLoading({
                      text: "Cargando",
                      position: "overlay"
                });
					  
			    $.ajax({
			             type: 'POST',
			             async:false,
			             dataType: 'json',
			             data: {USUARIO_ID:USUARIO_ID},
					     url: '<?php echo base_url(); ?>index.php/admin/usuarios/EstadoConfiguraUsuario',
			             success: function (data) 
			             {     
								$.isLoading("hide");  
								location.reload();
								//tablaReload();                    
			             }

			    });
			
			
	}
	function ModificarUsuario()
    {
	  
	  var USUARIO_ID = $("#c_USUARIO_ID").val().trim();
	  var PERFIL_ID = $("#c_PERFIL_ID").val().trim();
	  var USUARIO_NOMBRE = $("#c_USUARIO_NOMBRE").val().trim();
	  var USUARIO_APELLIDO = $("#c_USUARIO_APELLIDO").val().trim();
	  var USUARIO_ACTIVO = $("#c_USUARIO_ACTIVO").val().trim();
	  var USUARIO_FECHA_REGISTRO = $("#c_USUARIO_FECHA_REGISTRO").val().trim();
	  var USUARIO_MOVIL = $("#c_USUARIO_MOVIL").val().trim();
	  var USUARIO_TELEFONO = $("#c_USUARIO_TELEFONO").val().trim();
	  var USUARIO_EMAIL = $("#c_USUARIO_EMAIL").val().trim();
	  var USUARIO_FECHA_CADUCA = $("#c_USUARIO_FECHA_CADUCA").val().trim();
	  var USUARIO_TIEMPO_SESION = $("#c_USUARIO_TIEMPO_SESION").val().trim();
	  var USUARIO_USER =$("#c_USUARIO_USER").val().trim();
	   
	   $.ajax({
                type: 'POST',
                async:false,
                dataType: 'json',
                data: {USUARIO_USER:USUARIO_USER,USUARIO_ID:USUARIO_ID,PERFIL_ID:PERFIL_ID,USUARIO_NOMBRE:USUARIO_NOMBRE,USUARIO_APELLIDO:USUARIO_APELLIDO,USUARIO_ACTIVO:USUARIO_ACTIVO,USUARIO_FECHA_REGISTRO:USUARIO_FECHA_REGISTRO,USUARIO_MOVIL:USUARIO_MOVIL,USUARIO_TELEFONO:USUARIO_TELEFONO,USUARIO_EMAIL:USUARIO_EMAIL,USUARIO_FECHA_CADUCA:USUARIO_FECHA_CADUCA,USUARIO_TIEMPO_SESION:USUARIO_TIEMPO_SESION},
                url: '<?php echo base_url(); ?>index.php/admin/usuarios/ActualizaUsuario',
                success: function (data) 
                {  
					//alert('Actualizado')
					location.reload();
                }
       });
	  
	   $("#modal-editar-usuario").modal('hide');
    }
    //abrir eliminar proceso
    function eliminarUsuario(USUARIO_ID){

      $.isLoading({
                      text: "Cargando",
                      position: "overlay"
                });
       
       $.ajax({
                type: 'POST',
                async:false,
                dataType: 'json',
                data: {USUARIO_ID:USUARIO_ID},
                url: '<?php echo base_url(); ?>index.php/admin/usuarios/eliminarConfiguraUsuario',
                success: function (data) 
                {     
                    alert(data);
					$.isLoading("hide");  
					location.reload();
                    tablaReload();
                }
       });
    }
	function tablaReload(){

	var usuario = data['NOMBRE_PROCESO'];
                    var USUARIO_ID = data['USUARIO_ID'];
                    //ADICIONO UNA LINEA DE PRUEBA
                    var cadena_html='<tr class="fila-retiro" id="r'+USUARIO_ID+'" >'
                                        +'<td>'
                                            +usuario
                                        +'</td>'
                                        +'<td>'
                                            +activo
                                        +'</td>'
                                        +'<td>'
                                            +'<center><button type="button" class="btn btn-primary btn-sm" id="'+USUARIO_ID+'" style="width:50px" onclick="editarUsuario(this.id)" >'
                                                  +'<span class="glyphicon glyphicon-pencil"></span>'
                                            +'</button></center>'
                                        +'</td>'
                                        +'<td>'
                                            +'<center><button type="button" class="btn btn-primary btn-sm" id="'+USUARIO_ID+'" style="width:50px" onclick="eliminarUsuario(this.id)" >'
                                                  +'<span class="glyphicon glyphicon-trash"></span>'
                                            +'</button></center>'
                                        +'</td>'
                                    +'</tr>';

                    $( ".dataTables_empty" ).parent().remove();


                    $("#tablaGenerada").append(cadena_html); 

                $("#c_nuevo_proceso").val("");
                $("#c_minutos").val(""); 


                return cadena_html;
	}
    window.onload= function alcargar()
    {
      constultarPedidos();
    }
</script>