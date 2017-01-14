<!--ventana modal para editar proceso-->
        <div class="modal fade" id="modal-editar-laboratorio">
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
				  <!-- Fecha de Registro -->
					<div class="col-md-8 col-sm-6 col-xs-12">
						<label class="control-label">Fecha de Registro</label>
						<div class='input-group'>
							<span onclick="limpiarFecha('c_USUARIO_FECHA_REGISTRO')" class="input-group-addon left" style="cursor:pointer">
								<span class="glyphicon glyphicon-calendar"></span>
							</span>
							<input type="text" id="c_USUARIO_FECHA_REGISTRO" placeholder="yyyy-mm-dd" class="form-control dp" style="height:30px" readonly
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
							<span onclick="limpiarFecha('c_USUARIO_FECHA_CADUCA')" class="input-group-addon left" style="cursor:pointer">
								<span class="glyphicon glyphicon-calendar"></span>
							</span>
							<input type="text" id="c_USUARIO_FECHA_CADUCA" placeholder="yyyy-mm-dd" class="form-control dp" style="height:30px" readonly 
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
        <div class="modal fade" id="modal-crear-laboratorio">
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
							<input type="text" id="c_USUARIO_FECHA_REGISTRO" placeholder="yyyy-mm-dd" class="form-control dp" style="height:30px" readonly
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
							<span onclick="limpiarFecha('c_USUARIO_FECHA_CADUCA')" class="input-group-addon left" style="cursor:pointer">
								<span class="glyphicon glyphicon-calendar"></span>
							</span>
							<input type="text" id="c_USUARIO_FECHA_CADUCA" placeholder="yyyy-mm-dd" class="form-control dp" style="height:30px" readonly 
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
	<div class="col-md-4 col-sm-2 col-xs-12">
	     <div class="form-group form-group-sm">     
            <label class="control-label required" for=""> &nbsp</label>           
                  <button type="button" class="btn btn-primary btn-sm form-control" onclick="AbrirUsuario();">
                      <span class="glyphicon glyphicon-"></span> Crear Usuario
                  </button>
            </div>
	 </div>
	</div>
  </div>
</div>
<div class="panel panel-primary" >
    <div class="panel-heading">USUARIOS REGISTRADOS</div></div>
    <div class="container">
      <div class="table-responsive">
        <table id="tablaGenerada" class="table table-condensed table-hover table-striped tablaGenerada">
              <thead>
                        <tr style="font-weight: bold" >
                            <th>
                              Nº
                            </th>
							<th>
                                NOMBRE
                            </th>
							<th>
                                APELLIDO
                            </th>
							<th>
                                PERFIL
                            </th>
							<th>
                                ESTADO
                            </th>
							<th>
                                REGISTRO
                            </th>
							<th>
                                TELEFONO
                            </th>
                            <th style="text-align:center">
                              MODIFICAR
                            </th>
                            <th style="text-align:center">
                              ELIMINAR
                            </th>
							<th style="text-align:center">
                              ESTADO
                            </th>
                        </tr>
              </thead>
                        <?php 
                          $cliente_iteracion_anterior="";
                          for ($i=0; $i < count($usuarios); $i++) 
                          { 
                            
                         ?>
                          <tr id="<?php echo  'r'.$usuarios[$i]['USUARIO_ID']; ?>" >
                              <td>
                                  <?php echo $usuarios[$i]['USUARIO_ID']; ?>
                              </td>
                              <td>
                                  <?php echo $usuarios[$i]['USUARIO_NOMBRE'];  ?>
                              </td>
                              <td>
                                  <?php echo $usuarios[$i]['USUARIO_APELLIDO']; ?>
                              </td>
							  <td>
                                  <?php echo $usuarios[$i]['PERFIL_NOMBRE']; ?>
                              </td>
							  <td>
                                  <?php echo $usuarios[$i]['USUARIO_ACTIVO']; ?>
                              </td>
							  <td>
                                  <?php echo $usuarios[$i]['USUARIO_FECHA_REGISTRO']; ?>
                              </td>
							  <td>
                                  <?php echo $usuarios[$i]['USUARIO_TELEFONO']; ?>
                              </td>
                              
                              <td style="text-align:center">
                                  <center>
                                    <button id="<?php echo $usuarios[$i]['USUARIO_ID']; ?>" type="button" class="btn btn-primary btn-sm" style="width:50px" onclick="editarUsuario(this.id)">
                                          <span class="glyphicon glyphicon-pencil"></span>
                                      </button>
                                  </center>
                              </td>
						      <td style="text-align:center">
                                  <center>
                                    <button id="<?php echo $usuarios[$i]['USUARIO_ID']; ?>" type="button" class="btn btn-danger btn-sm" style="width:50px" onclick="eliminarUsuario(this.id)">
                                          <span class="glyphicon glyphicon-trash"></span>
                                      </button>
                                  </center>
                              </td>
                              <td style="text-align:center">
							  <?php
								
								if($usuarios[$i]['USUARIO_ACTIVO']=='S')
									$class='btn btn-success btn-sm';
								else
									$class='btn btn-danger btn-sm';
							  ?>
                                  <center>
                                    <button id="<?php echo $usuarios[$i]['USUARIO_ID']; ?>" class="<?php echo $class ?>" type="button" style="width:50px" onclick="ModificarEstado(this.id)">
                                          <span class="glyphicon glyphicon-ok"></span>
                                      </button>
                                  </center>
                              </td>
                          </tr>
                        <?php     
                          }
                ?>
        </table>
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
	function AbrirUsuario(){
		
		$("#modal-crear-laboratorio").modal('show');
	}
    function crearUsuario()
    {
      	  
	  var USUARIO_ID = $("#c_USUARIO_ID").val().trim();
	  var USUARIO_NOMBRE = $("#c_USUARIO_NOMBRE").val().trim();
	  var USUARIO_APELLIDO = $("#c_USUARIO_APELLIDO").val().trim();
	  var USUARIO_ACTIVO = $("#c_USUARIO_ACTIVO").val().trim();
	  var USUARIO_FECHA_REGISTRO = $("#c_USUARIO_FECHA_REGISTRO").val().trim();
	  var USUARIO_MOVIL = $("#c_USUARIO_MOVIL").val().trim();
	  var USUARIO_TELEFONO = $("#c_USUARIO_TELEFONO").val().trim();
	  var USUARIO_EMAIL = $("#c_USUARIO_EMAIL").val().trim();
	  var USUARIO_FECHA_CADUCA = $("#c_USUARIO_FECHA_CADUCA").val().trim();
	  var USUARIO_TIEMPO_SESION = $("#c_USUARIO_TIEMPO_SESION").val().trim();
	  var USUARIO_USER = $("#c_USUARIO_USER").val().trim();
	  
	     
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
                         data: {USUARIO_USER:USUARIO_USER,PERFIL_ID:PERFIL_ID,USUARIO_NOMBRE:USUARIO_NOMBRE,USUARIO_APELLIDO:USUARIO_APELLIDO,USUARIO_ACTIVO:USUARIO_ACTIVO,USUARIO_FECHA_REGISTRO:USUARIO_FECHA_REGISTRO,USUARIO_MOVIL:USUARIO_MOVIL,USUARIO_TELEFONO:USUARIO_TELEFONO,USUARIO_EMAIL:USUARIO_EMAIL,USUARIO_FECHA_CADUCA:USUARIO_FECHA_CADUCA,USUARIO_TIEMPO_SESION:USUARIO_TIEMPO_SESION},
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
          
          var table = $('.tablaGenerada').dataTable(
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
								{ "aTargets": [ 8 ],"bSortable": true },
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

    //var id_editar_laboratorio="";
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
	  
	   $("#modal-editar-laboratorio").modal('show');
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
	   
	   $.ajax({
                type: 'POST',
                async:false,
                dataType: 'json',
                data: {USUARIO_ID:USUARIO_ID,PERFIL_ID:PERFIL_ID,USUARIO_NOMBRE:USUARIO_NOMBRE,USUARIO_APELLIDO:USUARIO_APELLIDO,USUARIO_ACTIVO:USUARIO_ACTIVO,USUARIO_FECHA_REGISTRO:USUARIO_FECHA_REGISTRO,USUARIO_MOVIL:USUARIO_MOVIL,USUARIO_TELEFONO:USUARIO_TELEFONO,USUARIO_EMAIL:USUARIO_EMAIL,USUARIO_FECHA_CADUCA:USUARIO_FECHA_CADUCA,USUARIO_TIEMPO_SESION:USUARIO_TIEMPO_SESION},
                url: '<?php echo base_url(); ?>index.php/admin/usuarios/ActualizaUsuario',
                success: function (data) 
                {  
					//alert('Actualizado')
					location.reload();
                }
       });
	  
	   $("#modal-editar-laboratorio").modal('hide');
    }
    //abrir eliminar proceso
    function eliminarUsuario(id){

      $.isLoading({
                      text: "Cargando",
                      position: "overlay"
                });
       
       $.ajax({
                type: 'POST',
                async:false,
                dataType: 'json',
                data: {id:id},
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
                                            +laboratorio
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
      aplicarPaginado();
    }
</script>