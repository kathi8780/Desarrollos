<title>Clientes</title>
<form name="itca_clientebundle_buscar_personas" method="post" action="">
    <div class="panel panel-success">

        <div class="panel-heading">Buscar clientes existentes</div>
        <div class="panel-body">


            <div class="row" >
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div id="itca_clientebundle_buscar_personas_naturalezaCliente"  style="font-size: 13px;">
                        <div class="radio">                                                                                
                            <label class="required"><input type="radio" id="itca_clientebundle_buscar_personas_naturalezaCliente_1" name="itca_clientebundle_buscar_personas[naturalezaCliente]" required="required" value="1" checked />PERSONA NATURAL</label>
                        </div>
                        <div class="radio">                                                                                
                            <label class="required">
                                <input type="radio" id="itca_clientebundle_buscar_personas_naturalezaCliente_2" name="itca_clientebundle_buscar_personas[naturalezaCliente]" required="required" value="2" />PERSONA JURIDICA</label>
                        </div>
                    </div>

                </div> 
            </div>
            <div class="row" >
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group form-group-sm">


                        <input type="text" id="itca_clientebundle_buscar_personas_nroDocumento" name="itca_clientebundle_buscar_personas[nroDocumento]" class="form-control form-control" placeholder="Número de documento" tabindex="1" autofocus="autofocus" />
                    </div>
                </div>   
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group form-group-sm" id="nombreComercial">


                        <input type="text" id="itca_clientebundle_buscar_personas_nombreComercial" name="itca_clientebundle_buscar_personas[nombreComercial]" class="form-control form-control" placeholder="Nombre comercial" tabindex="2" />
                    </div>
                </div>   
            </div>
            <div class="row" id="nombreCompleto">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="form-group form-group-sm" id=>


                        <input type="text" id="itca_clientebundle_buscar_personas_apellidoPaterno" name="itca_clientebundle_buscar_personas[apellidoPaterno]" class="form-control form-control" placeholder="Apellido paterno" tabindex="2" />  
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="form-group form-group-sm">


                        <input type="text" id="itca_clientebundle_buscar_personas_apellidoMaterno" name="itca_clientebundle_buscar_personas[apellidoMaterno]" class="form-control form-control" placeholder="Apellido materno" tabindex="3" />
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="form-group form-group-sm">


                        <input type="text" id="itca_clientebundle_buscar_personas_primerNombre" name="itca_clientebundle_buscar_personas[primerNombre]" class="form-control form-control" placeholder="Primer nombre" tabindex="4" />
                    </div>
                </div>        
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="form-group  form-group-sm">


                        <input type="text" id="itca_clientebundle_buscar_personas_segundoNombre" name="itca_clientebundle_buscar_personas[segundoNombre]" class="form-control form-control" placeholder="Segundo nombre" tabindex="5" />
                    </div>

                </div>

            </div>

        </div>
        <div class="panel-footer">                    
            <div class="pull-right">  
                <button type="submit" id="itca_clientebundle_buscar_personas_buscar" name="itca_clientebundle_buscar_personas[buscar]" class="btn btn-success btn-sm">BUSCAR</button>

            </div>
            <div class="clearfix"> </div>

        </div>

    </div>
</form>



<div id="respuesta"></div>

<script type="text/javascript">

  
        window.onload = function alcargar()
    {
        $('#nombreCompleto').show();
        $('#nombreComercial').hide();
    }
    
        function enviarFormulario() 
        {
            $.isLoading({
                text: "Cargando",
                position: "overlay"
            });
            
           
            var url = '<?php echo base_url(); ?>index.php/clientes/clientes/busquedaAvanzada/'.$MODULO; // El script a dónde se realizará la petición.
            $.ajax({
                type: "POST",
                url: url,
                data: $("form[name=itca_clientebundle_buscar_personas]").serialize(), // Adjuntar los campos del formulario enviado.
                success: function (data)
                {
                    $.isLoading("hide");
                    $("#respuesta").html(data); // Mostrar la respuestas del script PHP.
                }

            });

            return false;
        }
        
        $("#itca_clientebundle_buscar_personas_buscar").click(enviarFormulario);

        $(document).keypress(function (e) {
            //13 es el código de la tecla
            if (e.which == 13) {
                enviarFormulario();
            }

        });

        function mostrarPersonaNatural() {
            $('#nombreCompleto').show();
            $('#nombreComercial').hide();
        }
        function mostrarPersonaJuridica() {
            $('#nombreCompleto').hide();
            $('#nombreComercial').show();
        }
        $('input[type=radio]').on('change', function () {
            if ($("input:radio:checked").val() == 1)
            {
                mostrarPersonaNatural();
            }
            else
            {
                mostrarPersonaJuridica();
            }
        });

</script>