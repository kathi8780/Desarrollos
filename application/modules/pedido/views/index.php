	
	<!--<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">-->
	<link rel="stylesheet" href="<?php echo base_url() ?>bower_components/bootstrap-calendar/css/calendar.css">
	<!--<script type="text/javascript" src="<?php echo base_url() ?>bower_components/jquery/jquery.min.js"></script>-->
	<!--<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>-->
	<script type="text/javascript" src="<?php echo base_url() ?>bower_components/bootstrap-calendar/js/language/es-ES.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<title>Calendario de evento</title>

	<style type="text/css">
		.ui-autocomplete { max-height: 200px; overflow-y: auto; overflow-x: hidden;}

        .no-seleccionable
        {
         -webkit-user-select: none;
         -khtml-user-select: none;
         -moz-user-select: none;
         -o-user-select: none;
         -ms-user-select: none;
         user-select: none;
        }

	</style>

	<div class="container">
		<div class="row">
			 <div class="col-md-4 col-sm-4 col-xs-12" >

			    <div class="form-group form-group-sm" style="margin-top:3px">
					<ul class="nav nav-tabs">
						  <li>
						  	<a class="alert-info" href="#" onclick="activarPestana('cliente')" id="pestana_cliente">Cliente</a>
						  </li>
						  <li>
						  	<a href="#" onclick="activarPestana('pedido')" id="pestana_pedido">Pedido</a>
						  </li>
					</ul>
			        <div class="input-group">
				       <input id="formulario_pedido_Buscar"
				               class="form-control" type="text" 
				               name="nroPedidoBuscar"
				               placeholder="Inserte criterio de búsqueda"
				               >
				       <span onclick="realizarBusqueda()" class="input-group-addon btn btn-primary btn-sm"  id="btnBuscar"><span style="color: white" class="glyphicon glyphicon-search"></span> </span>
			        </div>
			    </div>
				<button type="button" class="btn btn-primary btn-lg btn-block" style="max-width: 300px; margin-top:20px" onclick="direccionar('mostrarFormularioPedido/9');"> Nuevo Pre -Pedido </button>
				<button type="button" class="btn btn-primary btn-lg btn-block" style="max-width: 300px;" onclick="direccionar('mostrarFormularioPedido/2');">Nuevo Pedido</button>
				<!--
				<button type="button" class="btn btn-primary btn-lg btn-block" style="max-width: 300px;" onclick="direccionar('consultarPedidos');">
					Consultar Pedidos
				</button> -->
				<!-- <button type="button" class="btn btn-primary btn-lg btn-block" style="max-width: 300px;" onclick="direccionar('buscarEnAgendaProduccion');">
					Buscar en Agenda Producción
				</button> -->

				<button type="button" class="btn btn-info btn-lg btn-block" style="max-width: 300px; margin-top:20px" onclick="direccionar('consultarPrePedidos');">
					<span class="badge pull-left" id="indicador_pre_pedido"> 0 </span> Pre-Pedido
				</button>		
				<button type="button" class="btn btn-info btn-lg btn-block" style="max-width: 300px;" onclick="direccionar('mostrarFormularioPedidosTransito');">
					<span class="badge pull-left" id="indicador_transito"> 0 </span> Pedidos en Tránsito
				</button>	
				<button type="button" class="btn btn-info btn-lg btn-block" style="max-width: 300px;" onclick="direccionar('mostrarGestionRetiros');">
					<span class="badge pull-left" id="indicador_retiros_pendientes"> 0 </span> Retiros Pendientes
				</button>

				<button type="button" class="btn btn-info btn-lg btn-block" style="max-width: 300px;" onclick="direccionar('mostrarFormularioRutaMotorizados');">
					<span class="badge pull-left" id="indicador_ruta_motorizado"> 0 </span> 
					<span class="badge pull-right" id="indicador_retiros_asignados"> 0 </span>
					Retiros y Entregas
				</button>

				<button type="button" class="btn btn-info btn-lg btn-block" style="max-width: 300px;" onclick="direccionar('mostrarFormularioPedidosEmpacados');">
					<span class="badge pull-left" id="indicador_empacados"> 0 </span> Pedidos Empacados
				</button>		

				<button type="button" class="btn btn-info btn-lg btn-block" style="max-width: 300px;" onclick="direccionar('consultarPedidosEntregados');">
					<span class="badge pull-left" id="indicador_entregados"> 0 </span> Pedidos Entregados
				</button>
				
				<button type="button" class="btn btn-info btn-lg btn-block" style="max-width: 300px;" onclick="direccionar('consultarPedidosFacturados');">
				      <span class="badge pull-left" id="indicador_facturados"> 0 </span> Pedidos por Facturar
				</button>
				
				<button type="button" class="btn btn-danger btn-lg btn-block" style="max-width: 300px; margin-top:20px;" onclick="direccionar('mostrarFormularioProduccionSuspendida');">
					<span class="badge pull-left" id="indicador_suspendido"> 0 </span> Pedidos Suspendidos
				</button>

				<button type="button" class="btn btn-danger btn-lg btn-block" style="max-width: 300px;" onclick="direccionar('mostrarFormularioProduccionAtrasada');">
					<span class="badge pull-left" id="indicador_atrasados_p"> 0 </span> Atrasados en Producción
				</button>

				<button type="button" class="btn btn-danger btn-lg btn-block" style="max-width: 300px;" onclick="direccionar('mostrarFormularioProduccionAtrasadaCliente');">
					<span class="badge pull-left" id="indicador_atrasados_c"> 0 </span> Atrasados en Entregar
				</button>
				
				<button type="button" class="btn btn-danger btn-lg btn-block" style="max-width: 300px;" onclick="direccionar('mostrarFormularioControlCalidad');">
					<span class="badge pull-left" id="indicador_control_calidad"> 0 </span> Control de Calidad
				</button>
				<br>
			</div> 
				<div class="col-md-8 col-sm-8 col-xs-12" >
								<center>				
						        <div class="row" style="margin-top:2px">
									<div class="col-md-12 col-sm-12 col-xs-12">
										<div class="form-inline" style="padding-top:20px">
											<!-- <div class="btn-group">
												<a class="btn btn-info" href="<?php echo base_url() ?>index.php/calendario/events" style="margin-left:2px">Añadir evento</a>
											</div> -->
											<div class="btn-group">
												<button class="btn btn-primary" data-calendar-nav="prev"><< Anterior</button>
												<button class="btn" data-calendar-nav="today">Hoy</button>
												<button class="btn btn-primary" data-calendar-nav="next">Siguiente >></button>
											</div>
											<div class="btn-group">
												<button class="btn btn-info" data-calendar-view="year">Año</button>
												<button class="btn btn-info active" data-calendar-view="month">Mes</button>
												<button class="btn btn-info" data-calendar-view="week">Semana</button>
												<!--<button class="btn btn-warning" data-calendar-view="day">Día</button>-->
											</div>
										</div>
									</div>	
						        </div></center>
						        <br>

						        <!-- <div class="row">
						        	<div class="col-md-12 col-sm-12 col-xs-12">
										<input type="checkbox" value="#events-modal" id="events-in-modal"> Abrir eventos en una ventana
						        	</div>
						        </div> <hr>--> 

								<div class="row" style="margin-left:5px">
									<center>
										<div id="calendar" class="no-seleccionable"></div>
									</center><br>
								</div>	
	
				</div>

		</div>

		<!--ventana modal para el calendario-->
		<div class="modal fade" id="events-modal">
		    <div class="modal-dialog">
			    <div class="modal-content">
			        <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				        <h4 class="modal-title">Modal title</h4>
			        </div>
				    <div class="modal-body" style="height: 400px">
				        <p>One fine body&hellip;</p>
				    </div>
			        <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        <button type="button" class="btn btn-primary">Save changes</button>
			        </div>
			    </div><!-- /.modal-content -->
		    </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	</div>


    <script src="<?php echo base_url() ?>bower_components/underscore/underscore-min.js"></script>
    <script src="<?php echo base_url() ?>bower_components/bootstrap-calendar/js/calendar.js"></script>

     <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 
    <script type="text/javascript">

	(function($){
		//creamos la fecha actual
		var date = new Date();
		var yyyy = date.getFullYear().toString();
		var mm = (date.getMonth()+1).toString().length == 1 ? "0"+(date.getMonth()+1).toString() : (date.getMonth()+1).toString();
		var dd  = (date.getDate()).toString().length == 1 ? "0"+(date.getDate()).toString() : (date.getDate()).toString();

		//establecemos los valores del calendario
		var options = {
			events_source: '<?php echo base_url() ?>index.php/calendario/events/getAll',
			view: 'month',
			language: 'es-ES',
			tmpl_path: '<?php echo base_url() ?>bower_components/bootstrap-calendar/tmpls/',
			tmpl_cache: false,
			day: yyyy+"-"+mm+"-"+dd,
			time_start: '10:00',
			time_end: '20:00',
			ime_split: '30',
			width: '90%',

			onAfterEventsLoad: function(events) 
			{
				if(!events) 
				{
					return;
				}
				var list = $('#eventlist');
				list.html('');

				$.each(events, function(key, val) 
				{
					$(document.createElement('li'))
						.html('<a href="' + val.url + '">' + val.title + '</a>')
						.appendTo(list);
				});
			},
			onAfterViewLoad: function(view) 
			{

				elimiarEventos();
				elimiarIndSemanas();
				$('.page-header h3').text(this.getTitle());
				$('.btn-group button').removeClass('active');
				$('button[data-calendar-view="' + view + '"]').addClass('active');
			},
			classes: {
				months: {
					general: 'label'
				}
			}
		};

		var calendar = $('#calendar').calendar(options);

		$('.btn-group button[data-calendar-nav]').each(function() 
		{

			var $this = $(this);
			$this.click(function() 
			{
				calendar.navigate($this.data('calendar-nav'));
			});
		});

		$('.btn-group button[data-calendar-view]').each(function() 
		{

			var $this = $(this);
			$this.click(function() 
			{
				calendar.view($this.data('calendar-view'));
			});
		});

		$('#first_day').change(function()
		{

			var value = $(this).val();
			value = value.length ? parseInt(value) : null;
			calendar.setOptions({first_day: value});
			calendar.view();
		});

		$('#events-in-modal').change(function()
		{

			var val = $(this).is(':checked') ? $(this).val() : null;
			calendar.setOptions(
				{
					modal: val,
					modal_type:'iframe'
				}
			);
		});
	}(jQuery));


    //borro los punticos de los eventos 
    function elimiarEventos()
    {    	
	    var eventos = $(".events-list");                    
	    eventos.each(function()
	    { 
	        $(this).remove(); 
	    });
    }

    //borro los indicadores de semana Ej: Semana 40
    function elimiarIndSemanas()
    {    	

    }

    function verPedidos(fecha, tipo)
    {
    	//alert(fecha);
    	//alert(tipo);
    	if(tipo=="day")
    	{
    		direccionar("buscarEnAgendaProduccion/"+fecha+"/"+fecha);
    	}
    	else if(tipo=="mes") 
    	{
    		var mes = fecha.substr(5, 2);
    		var anno = fecha.substr(0, 4);
    		var cantDiasDelMes = cantDias(mes,anno);
    		var fechaf=anno+"-"+mes+"-"+cantDiasDelMes;
    		direccionar("buscarEnAgendaProduccion/"+fecha+"/"+fechaf);
    	}
    }

	function cantDias(mes, anno) 
	{
	return new Date(anno || new Date().getFullYear(), mes, 0).getDate();
	}


    var pacientes=[];
    var pedidos=[];
    function asociarPacientesABusqueda()
    {
		    $( "#formulario_pedido_Buscar" ).autocomplete({
		      source: pacientes,
		      minLength:3,   
              delay:500
		    });
    }

    function asociarPedidosABusqueda()
    {
		    $( "#formulario_pedido_Buscar" ).autocomplete({
		      source: pedidos,
		      minLength:3,   
              delay:500
		    });
    }

    window.onload=function alcargar()
    {
    	//tomo los indicadores
        var suspendidos=0;

        $.ajax({
         type: 'POST',
         async:false,
         dataType: 'json',
         url: '<?php echo base_url(); ?>index.php/pedido/pedidos/getIndicadores',
         success: function (data) 
         {     
             var suspendidos = data.cant_suspendidos;
             var atrasados_p = data.cant_atrasados_produccion;
             var atrasados_c = data.cant_atrasados_entrega_cliente;
             var transito = data.cant_pedidos_transito;
             var ruta = data.cant_pedidos_ruta;
             var empacados = data.cant_pedidos_empacados;
             var facturados = data.cant_pedidos_facturados;
             var entregados = data.cant_pedidos_entregados;
             var retiros_pendientes = data.cant_retiros_pendientes;
             var retiros_asignados = data.cant_retiros_asignados;
			 var control_calidad = data.cant_control_calidad;
			 var pre_pedido = data.cant_pre_pedido;

             $('#indicador_suspendido').html(suspendidos);
             $('#indicador_atrasados_p').html(atrasados_p);
             $('#indicador_atrasados_c').html(atrasados_c);
             $('#indicador_transito').html(transito);
             $('#indicador_ruta_motorizado').html(ruta);
             $('#indicador_empacados').html(empacados);
             $('#indicador_facturados').html(facturados);
             $('#indicador_entregados').html(entregados);
             $('#indicador_retiros_pendientes').html(retiros_pendientes);
             $('#indicador_retiros_asignados').html(retiros_asignados);
			 $('#indicador_control_calidad').html(control_calidad);
			 $('#indicador_pre_pedido').html(pre_pedido);

             //obtengo los pacientes y pedidos para el autocompletar del campo buscar
            var arreglo_asociativo_pacientes = data.pacientes; // esto me da un arreglo asociativo y yo necesito uno lineal
            var arreglo_asociativo_pedidos = data.pedidos;

            for(var i=0; i<arreglo_asociativo_pacientes.length; i++)
            {
            	pacientes[i]=arreglo_asociativo_pacientes[i]['NOMBRE_APELLIDO'];
            }

            for(var i=0; i<arreglo_asociativo_pedidos.length; i++)
            {
            	pedidos[i]=arreglo_asociativo_pedidos[i]['PEDF_NUM_PREIMP'];
            }

            asociarPacientesABusqueda();

         }
      });
    }

    function direccionar(url)
    {
    	$(location).attr('href','<?php echo base_url(); ?>index.php/pedido/pedidos/'+url);
    }

    function activarPestana(pestana)
    {
    	if(pestana=="cliente")
    	{
    		$("#pestana_cliente").attr("class","alert-info");
    		$("#pestana_pedido").attr("class","");
    		asociarPacientesABusqueda();
    	}
    	else
    	{
    		$("#pestana_pedido").attr("class","alert-info");
    		$("#pestana_cliente").attr("class","");
    		asociarPedidosABusqueda();
    	}
    }

    function realizarBusqueda()
    {
    	var criterio = $("#formulario_pedido_Buscar").val();    	
    	var clase = 	$("#pestana_cliente").attr("class");

    	if(clase=="alert-info")
    		var pestana_activa="cliente";
    	else
    		var pestana_activa="pedido";

    	if(pestana_activa=="pedido")//busco por numero de pedido
    	{
    		var numped = $("#formulario_pedido_Buscar").val().trim();
    		direccionar("buscarEnAgendaProduccion/sinfecha/sinfecha/"+numped);
    	}
    	else //busco por cliente
    	{

    	}
    }


    </script>








