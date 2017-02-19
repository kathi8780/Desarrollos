<!--ventana modal para asignar mensajero-->
        <div class="modal fade" id="modal-asignar-mensajero">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">ASIGNAR EL RETIRO A UN MENSAJERO</h4>
                    </div>
                    <div class="modal-body" id="cuerpo-modal-asignar-mensajero">
            <div class="table-responsive">
              <table class="table table-condensed table-striped table-bordered">
                <tr style="font-weight: bold">
                  <td colspan="2" class="bg-primary" style="text-align: center">
                    ASIGNAR
                  </td>
                </tr>
                <tr>
                  <td>
                    Mensajero: 
                  </td>
                  <td>
                      <select id="s_mensajeros" class="form-control" style="height:30px">
                      <option value="">Seleccione...</option> 
                      <?php 
                          for ($i=0; $i < count($mensajeros) ; $i++) 
                          { 
                       ?> 
                              <option value="<?php echo $mensajeros[$i]['USUARIO_ID']; ?>">
                                <?php echo $mensajeros[$i]['NOMBRE_MENSAJERO']; ?>
                              </option> 
                      <?php    
                          }
                       ?> 
                      </select>
                  </td>
                </tr>
              </table>
            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-sm" onclick="realizarAsignacion()">
                            <span class="glyphicon glyphicon-share-alt"></span> Asignar
                        </button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
<!--fin ventana modal para asignar mensajero-->


<div class="panel panel-primary" >
    <div class="panel-heading">ADICIONAR NUEVO RETIRO</div>

	<div class="container">
		<div class="row">
	        <!-- campo cliente -->
	        <div class="col-md- col-sm-2 col-xs-12">
	            <div class="form-group form-group-sm">                
	                <label class="control-label required" for="">Cliente<span class="required"> * </span></label> 
                  <select id="c_cliente" class="form-control" style="height:30px" onchange="obtenerPruebas(this.value);">
                    <option value="">TODOS</option>
                      <?php foreach ($clientes as $array) 
                        {?>
                          <option value="<?php echo $array['cliente']; ?>" ><?php echo $array['cliente']; ?></option>  
                      <?php } ?>
                    </select>
	                
	            </div>
	        </div>		

	        <!-- campo telefono -->
	        <div class="col-md-2 col-sm-2 col-xs-12">
	            <div class="form-group form-group-sm">                
	                <label class="control-label required" for="">Teléfono<span class="required"> * </span></label> 
	                <input type="text" id="c_telefono" autocomplete="off" mayusculas="^[A-Za-zÁÉÍÓÚáéíóúÑñ]+$" maxlength="50" class="form-control" value="097938338" />
	            </div>
	        </div>	

	        <!-- campo ciudad -->
	        
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
          <!-- campo contacto -->
            <div class="col-md-2 col-sm-2 col-xs-12">
              <div class="form-group form-group-sm">                
                  <label class="control-label required" for="">Contacto<span class="required"> * </span></label> 
                  <input type="text" id="c_contacto" autocomplete="off" mayusculas="^[A-Za-zÁÉÍÓÚáéíóúÑñ]+$" maxlength="50" class="form-control"/>
              </div>
          </div>
          <!--tipo -->
          <div class="col-md-2 col-sm-2 col-xs-12">
              <div class="form-group form-group-sm">                
                  <label class="control-label required" for="">TIPO<span class="required"> * </span></label> 
                  <select id="s_filtro_tipo" class="form-control" style="height:30px" onchange="selecionTipo(this.value)">
                            <option value="0">SELECCIONE</option>
                            <option value="1">PRUEBA </option>
                            <option value="2">PEDIDO ONLINE</optio>
                        </select> 
              </div>
          </div>
          <!--seleccion paciente-->
          <div class="col-md-2.5 col-sm-3 col-xs-12" style="display: none;" id="select_paciente">
              <div class="form-group form-group-sm">                
                  <label class="control-label required" for="">PACIENTE<span class="required"> * </span></label> 
                    <select id="c_pacientes" name="c_pacientes" class="form-control" style="height:30px" onchange="seleccionaPrueba(this.value);" >
                    <option value="0">Pacientes</option>                      
                    </select>
              </div>
          </div>
         <!-- pruebas -->
         <div class="col-md-4 col-sm-2 col-xs-12" style="display: none;" id="select_prueba">
              <div class="form-group form-group-sm">                
                  <label class="control-label required" for="">PRUEBA PACIENTE<span class="required"> * </span></label> 
                  <input type="hidden" id="c_id">
                  <input type="text" id="c_pruebas_paciente" autocomplete="off" mayusculas="^[A-Za-zÁÉÍÓÚáéíóúÑñ]+$" maxlength="50" class="form-control"/>              </div>
          </div>
          <!--seleccione pedido-->
          <div class="col-md-2 col-sm-2 col-xs-12" style="display: none;" id="select_pedido">
              <div class="form-group form-group-sm">                
                  <label class="control-label required" for="">PEDIDO<span class="required"> * </span></label> 
                    <select id="c_pedido" name="c_pedido" class="form-control" style="height:30px">
                    <option value="0">Todos</option>  
                    </select>
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


    function crearRetiro()
    {
       
      
    	var cliente = $("#c_cliente").val().trim();
    	var telefono =$("#c_telefono").val().trim();
    	var contacto =$("#c_contacto").val().trim();
      var ciudad =$("#c_ciudad").val().trim();
      var direccion =$("#c_direccion").val().trim();
      var pedido_online=$("#c_pedido").val().trim();
      var prueba=$("#c_id").val().trim();
      var paciente=$("#c_pacientes").val().trim();

      var dato="";
     
        dato=prueba;

      

      

    	if(cliente=="")
    	{
            var text = 'Falta campo CLIENTE';
            $.notific8(text, params); 
            return;
    	}else if(dato==""){
        var text = 'Falta campo TIPO';
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
      }else if(prueba=="Pruebas")
      {
            var text = 'Falta campo PRUEBA';
            $.notific8(text, params); 
            return;
      }
      else if(paciente=="")
      {
            var text = 'Falta campo PACIENTE';
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
                         data: {cliente:cliente,telefono:telefono,contacto:contacto,ciudad:ciudad,direccion:direccion,dato:dato,paciente},
                         url: '<?php echo base_url(); ?>index.php/pedido/pedidos/insertarRetiro',
                         success: function (data) 
                         {    
                           
						   $.isLoading("hide"); 
               alert('Retiro Creado Exitosamente');
						   location.reload();
                  
			
                           var usuario = data['USUARIO_NOMBRE']+" "+data['USUARIO_APELLIDO'];
                           var id_retiro = data['ID_RETIRO'];
				            //ADICIONO UNA LINEA DE PRUEBA
				            var cadena_html='<tr class="fila-retiro" id="r'+id_retiro+'" >'
                                        +'<td>'
                                            +pedido
                                        +'</td>'
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

        function aplicarPaginado() 
        {
          
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

    var id_retiro_a_asignar="";
    function asignarRetiro(id_retiro)
    {
      id_retiro_a_asignar=id_retiro;
      $("#modal-asignar-mensajero").modal('show');
    }

    window.onload= function alcargar()
    {
    	aplicarPaginado();
    }

    function selecionTipo(id) {

      if(id==0){

            
            $("#select_pedido").hide();
            $("#select_paciente").hide();

          }
          if(id==1){

           
            $("#select_paciente").show();
            $("#select_pedido").hide();



        
          }
          if (id==2) {
            $("#select_pedido").show();
            $("#select_paciente").hide();
            $("#select_prueba").hide();
          } 
          
    }
  
    function realizarAsignacion()
    {
        var id_mensajero = $("#s_mensajeros").val().trim();
        if(id_mensajero=="")
        {
            var text = 'Seleccione un MENSAJERO';
            $.notific8(text, params); 
            return;
        }
        else
        {
          //ACTUALIZO EL RETIRO
            $.isLoading({
                        text: "Cargando",
                        position: "overlay"
                    });


                    $.ajax({
                             type: 'POST',
                             async:false,
                             dataType: 'json',
                             data: {id_retiro_a_asignar:id_retiro_a_asignar, id_mensajero:id_mensajero},
                             url: '<?php echo base_url(); ?>index.php/pedido/pedidos/asignarRetiroMensajero',
                             success: function (data) 
                             {    
                              $("#r"+id_retiro_a_asignar).remove();
                              $('#modal-asignar-mensajero').modal('hide');
                              $.isLoading("hide") ;  
                             }
                    }); 
        }
    }

    $("#modal-asignar-mensajero").on('hidden.bs.modal', function () 
    {
        $("#s_mensajeros option[value='']").prop('selected', true);
    });



    function obtenerPruebas(id){

      $('#c_pacientes option[value!="0"]').remove();
      $('#c_pedido option[value!="0"]').remove();
      var x = document.getElementById("c_pacientes");
      var y = document.getElementById("c_pedido");
      
        
        var cliente=id;
        //alert(cliente);
        if(cliente!=""){
          //alert('dentro de if');
          $.ajax({
                             type: 'POST',
                             async:false,
                             dataType: 'json',
                             data: {cliente:cliente},
                             url: '<?php echo base_url(); ?>index.php/pedido/pedidos/obtenerPacientesPruebas',
                             success: function (data) 
                             {  
                              
                              for (var i = 0; i < data.length; i++)
                              {
                                if (x.selectedIndex >= 0) {
                                    var option = document.createElement("option");
                                    option.text = data[i]['paciente'];
                                    option.value= data[i]['id'];
                                    x.add(option);
                                }
                                
                              }
                             }
                    }); 

          obtenerPedidosOnline(cliente);

        }


    }

    function obtenerPedidosOnline(id){
      $('#c_pedido option[value!="0"]').remove();
      var y = document.getElementById("c_pedido");
      var cliente=id;
        //alert(cliente);
        if(cliente!=""){

          $.ajax({
                             type: 'POST',
                             async:false,
                             dataType: 'json',
                             data: {cliente:cliente},
                             url: '<?php echo base_url(); ?>index.php/pedido/pedidos/obtenerPedidosOnLineCliente',
                             success: function (data) 
                             {  
                              
                              for (var j = 0; j < data.length; j++)
                              {
                                if (y.selectedIndex >= 0) {
                                    var option = document.createElement("option");
                                    option.text = data[j]['pedido'];
                                    option.value= data[j]['pedido'];
                                    y.add(option);
                                }
                                
                              }
                             }
                    }); 



        }

    }
 function seleccionaPrueba(id){
    $('#select_prueba').show();
   // $('#c_pruebas_paciente option[value!="0"]').remove();
      var y = document.getElementById("c_pruebas_paciente");
      var paciente=id;
      //alert(paciente);
        if(paciente!=""){
          //alert('dentro de paciente');
          $.ajax({
                             type: 'POST',
                             async:false,
                             dataType: 'json',
                             data: {paciente:paciente},
                             url: '<?php echo base_url(); ?>index.php/pedido/pedidos/obtenerPruebasPorPaciente',
                             success: function (data) 
                             {  
                              
                              $("#c_pruebas_paciente").val(data[0]['prueba']);
                              $("#c_id").val(data[0]['id']);
                             }
                    }); 



        }


 }
</script>