<div class="panel panel-primary" >
    <div class="panel-heading">CONTROL DE ACCESO DE PERFIL</div>

  <div class="container">
    <div class="row">
         <!-- Perfil -->
		<div class="col-md-6 col-sm-4 col-xs-12">
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
		<div class="panel-footer">                     
                <button class="btn btn-primary btn-sm" onclick="constultarPedidos()">Consultar</button>
        </div>
    </div>    
  </div>
</div>
<div class="container">
    	<div id="tabla" class="table-responsive" style="font-size:11px; text-align:center;"></div>
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
		
    	var perfil = $("#c_PERFIL_ID").val().trim();

				$.isLoading({
                      text: "Cargando",
                      position: "overlay"
                });
					  
			    $.ajax({
			             type: 'POST',
			             async:false,
			             dataType: 'json',
			             data: {perfil:perfil},
			             url: '<?php echo base_url(); ?>index.php/admin/menu/ObtenerAccesos',
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
						//var celda3 = document.createElement("td");
			            		
						var textoCelda0 = document.createTextNode("PANEL");
			            var textoCelda1 = document.createTextNode("MODULO");
			            var textoCelda2 = document.createTextNode("ACCESO");
						//var textoCelda3 = document.createTextNode("CODIGO");
			            
						celda0.appendChild(textoCelda0);
			            celda1.appendChild(textoCelda1);
			            celda2.appendChild(textoCelda2);
			            //celda3.appendChild(textoCelda3);
			            						
						filaCabecera.appendChild(celda0);
			            filaCabecera.appendChild(celda1);
			            filaCabecera.appendChild(celda2);
						//filaCabecera.appendChild(celda3);
			            
			            filaCabecera.setAttribute("id","fila_cabecera");
			            thead.appendChild(filaCabecera);

			            var panel_iteracion_anterior="";
						
						//CUERPO
			            for (var i = 0; i < data.length; i++)
			            {                   
			                var panel    = data[i]['panel']; 
							
							if(i!=0)//aqui controlo que se muestre solo una celda con el nombre de la panel
                              {
                                if(panel==panel_iteracion_anterior)
                                {
                                  panel_iteracion_anterior=panel;
                                  panel="";
                                }
                                else
                                {
                                  panel_iteracion_anterior=panel;
                                }
                              }
                              else
                                panel_iteracion_anterior=panel;

			                var modulo   = data[i]['modulo']; 
			                var acceso   = data[i]['acceso']; 
							var mostrar  = data[i]['men_mostrar'];
							var med_cod  = data[i]['men_cod']; 
			               			                
			                var fila = document.createElement("tr");

							var celda0 = document.createElement("td");
			                var celda1 = document.createElement("td");
			                var celda2 = document.createElement("td");
			                //var celda3 = document.createElement("td");
							
							var textoCelda0 = document.createTextNode(panel);
			                var textoCelda1 = document.createTextNode(modulo);
			                //var textoCelda2 = document.createTextNode(acceso);
			                
							celda0.appendChild(textoCelda0);
			                celda1.appendChild(textoCelda1);   
			                //celda2.appendChild(textoCelda2); 
							
							celda1.setAttribute("style","text-align:left");
							celda2.setAttribute("style","text-align:center");
									
							if(mostrar=='N' && med_cod <=999){
								celda0.setAttribute("class", "alert alert-info");
								celda1.setAttribute("class", "alert alert-info");
								celda2.setAttribute("class", "alert alert-info");
								//celda3.setAttribute("class", "alert alert-info");
								
							}
						
								var selectList = document.createElement('select');
								selectList.setAttribute("onchange","GuardarAcceso('"+med_cod+"','"+acceso+"')");
								selectList.id ='acceso';
								
								var option = document.createElement("option");
									option.value = acceso;
								    option.text  = acceso;
								selectList.appendChild(option);
								
								if(acceso=='S'){
																		
									var option = document.createElement("option");
									option.value = 'N';
									option.text = 'N';
									selectList.appendChild(option);
									
								}else{
									
									var option = document.createElement("option");									
									option.value = 'S';
									option.text = 'S';
									selectList.appendChild(option);									
								}								
								
								celda2.appendChild(selectList);	

							fila.appendChild(celda0);
			                fila.appendChild(celda1);
			                fila.appendChild(celda2);
							//fila.appendChild(celda3);
		
			                tbody.appendChild(fila);
			            }
			
			tabla.appendChild(thead);
            tabla.appendChild(tbody);

            var contenedor = document.getElementById("tabla");
            contenedor.appendChild(tabla);

            tabla.setAttribute("class","table table-condensed table-striped table-responsive");
            tabla.setAttribute("id","tablaGenerada");
			//aplicarPaginado();
			
    }
	function GuardarAcceso(med_cod,acceso){
		
		var perfil   = $("#c_PERFIL_ID").val().trim();
		var med_cod  = med_cod;
		
		if(acceso=='N'){
			var acceso   = 'S';
		}else{
			var acceso   = 'N';
		}
		
		//alert(acceso);			  
		$.ajax({
		         type: 'POST',
		         async:false,
		         dataType: 'json',
		         data: {perfil:perfil,med_cod:med_cod,acceso:acceso},
		         url: '<?php echo base_url(); ?>index.php/admin/menu/GuardarAcceso',
		         success: function (data) 
		         {     
		            alert(data);
					constultarPedidos(); 							
          
		         }
        
		});  
		
	}
</script>