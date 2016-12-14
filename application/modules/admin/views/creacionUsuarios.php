    <title>Admin</title>
<form name="formulario_usuarios" method="post" action="<?php echo base_url(); ?>index.php/admin/usuario/procesarFormularioGestionUsuarios<?php if(isset($ID_USUARIO) && $ID_USUARIO != NULL){ echo "/".$ID_USUARIO ;} ?>" enctype="multipart/form-data">

    <div id="rootwizard">
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <ul class="nav-justified">
                        <li>
                            <a href="#tab1" data-toggle="tab" class="step">
                                <span class="number"> 1 </span>
                                <span class="desc">
                                    <span style="display: none" class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                    Datos generales
                                </span>
                            </a>
                        </li>
                       
                        <li><a href="#tab2" data-toggle="tab" class="step">
                                <span class="number"> 2 </span>
                                <span class="desc">
                                    <span style="display: none" class="glyphicon glyphicon-ok" aria-hidden="true"></span>

                                    Confirmación
                                </span></a></li>

                    </ul>
                </div>
            </div>
        </div>
        <div id="bar" class="progress progress-striped active" style="margin-bottom: 0px;">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
        </div>
        <div class="panel-footer">
        <div class="pull-right">
                    <a type='button' style="min-width: 80px;" class='btn btn-default btn-sm' href="<?php echo base_url(); ?>index.php/index/index">SALIR</a>
                    <input type='button' class='btn button-next btn-primary btn-sm' name='next' value='Siguiente' />
                    <button type="submit" class="formulario_usuarios_guardar btn-success btn btn-sm">GUARDAR</button>
                </div>
                <div style="float:left">
                    <input type='button' class='btn button-previous btn-default btn-sm' name='previous' value='Anterior' />

                </div>
                <div class="clearfix"></div>
        </div>
        <div class="tab-content">
            <div class="tab-pane" id="tab1">      
            <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group form-group-sm">
                        <div class="input-group">
                        <input id="formulario_usuarios_buscar"
                               class="form-control" type="email" 
                               name="nroUsuarioBuscar"
                               placeholder="Ingrese un correo eléctronico para buscar"
                               >
                        <span class="input-group-addon btn btn-primary btn-sm"  id="btnBuscar"><span style="color: white" class="glyphicon glyphicon-search"></span> </span>
                        </div>

                    </div>
                        </div>
                    <div class="clear-fix"></div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group form-group-sm <?php if(form_error('formulario_usuarios[NOMBRE_COMPLETO]') != '' ){ echo "has-error";}?>">                
                            <label class="control-label required" for="formulario_usuarios_nombre_completo">Nombre completo<span class="required"> * </span></label>                            
                            <input type="text" id="formulario_usuarios_nombre_completo" name="formulario_usuarios[NOMBRE_COMPLETO]" 
                                    <?php if(form_error('formulario_usuarios[NOMBRE_COMPLETO]') != '' ){?>
                                    aria-describedby="formulario_usuarios_nombre_completo-error"
                                   <?php } ?>
                                   required="required" 
                                   mayusculasespacios="^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$"
                                   maxlength="50" class="form-control" 
                                   <?php if(isset($NOMBRE_COMPLETO) && $NOMBRE_COMPLETO != NULL) { ?> value="<?= $NOMBRE_COMPLETO ?>" <?php } ?>
                                   />
                                    <?php if(form_error('formulario_usuarios[NOMBRE_COMPLETO]') != '' ){?>
                                        <span id="formulario_usuarios_nombre_completo-error" class="help-block">
                                            <?= form_error('formulario_usuarios[NOMBRE_COMPLETO]') ?>
                                        </span>
                                    <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group form-group-sm <?php if(form_error('formulario_usuarios[NRO_DOCUMENTO]') != '' ){ echo "has-error";}?>">                
                            <label class="control-label required" for="formulario_usuarios_nroDocumento">Número de documento<span class="required"> * </span></label>
                            <input type="text" id="formulario_usuarios_nroDocumento" name="formulario_usuarios[NRO_DOCUMENTO]" 
                                   <?php if(form_error('formulario_usuarios[NRO_DOCUMENTO]') != '' ){?>
                                    aria-describedby="formulario_usuarios_nroDocumento-error"
                                   <?php } ?>
                                   required="required" maxlength="16"  class="form-control" 
                                   <?php if(isset($NRO_DOCUMENTO) && $NRO_DOCUMENTO != NULL) { ?> value="<?= $NRO_DOCUMENTO ?>" <?php } ?>
                                   />
                                   <?php if(form_error('formulario_usuarios[NRO_DOCUMENTO]') != '' ){?>
                                        <span id="formulario_usuarios_nroDocumento-error" class="help-block">
                                            <?= form_error('formulario_usuarios[NRO_DOCUMENTO]') ?>
                                        </span>
                                    <?php } ?>
                        </div>
                    </div>
                    
                    
                    
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group form-group-sm <?php if(form_error('formulario_usuarios[USUARIO]') != '' ){ echo "has-error";}?>">                
                            <label class="control-label required" for="formulario_usuarios_usuario">Correo electrónico<span class="required"> * </span></label>                            
                            <input type="email" usuario id="formulario_usuarios_usuario" name="formulario_usuarios[USUARIO]" 
                                    <?php if(form_error('formulario_usuarios[USUARIO]') != '' ){?>
                                    aria-describedby="formulario_usuarios_usuario-error"
                                   <?php } ?>
                                   required="required" maxlength="80" email="email"
                                   class="form-control" 
                                   <?php if(isset($USUARIO) && $USUARIO != NULL) { ?> value="<?= $USUARIO ?>" <?php } ?>
                                   />
                                    <?php if(form_error('formulario_usuarios[USUARIO]') != '' ){?>
                                        <span id="formulario_usuarios_usuario-error" class="help-block">
                                            <?= form_error('formulario_usuarios[USUARIO]') ?>
                                        </span>
                                    <?php } ?>
                        </div>
                    </div>
                </div>

               


            </div>
            <div class="tab-pane" id="tab2">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <h4>Información personal</h4>
                        <p>
                            <span class="confirmation-tab-label">Nombre completo:</span>
                            <span class="label label-warning">
                                <span data-display="formulario_usuarios[NOMBRE_COMPLETO]" class="confirmation-tab-value"></span>
                            </span>

                        </p>
                        <p>
                            <span class="confirmation-tab-label confirmation-tab-value">Número de documento</span>:
                            <span data-display="formulario_usuarios[NRO_DOCUMENTO]" class="confirmation-tab-value"></span>
                        </p>
                        <p>
                            <span class="confirmation-tab-label confirmation-tab-value">Correo electrónico</span>:
                            <span data-display="formulario_usuarios[USUARIO]" class="confirmation-tab-value" style="text-transform: lowercase"></span>
                        </p>
                       
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
            <div class="panel-footer">
                <div class="pull-right">
                    <a type='button' style="min-width: 80px;" class='btn btn-default btn-sm' href="<?php echo base_url(); ?>index.php/index/index">SALIR</a>
                    <input type='button' class='btn button-next btn-primary btn-sm' name='next' value='Siguiente' />
                    <button type="submit" class="formulario_usuarios_guardar btn-success btn btn-sm">GUARDAR</button>
                </div>
                <div style="float:left">
                    <input type='button' class='btn button-previous btn-default btn-sm' name='previous' value='Anterior' />

                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>

</form>

<!--<script src="<?= base_url('assets/clientes/javascript/creacionAvanzadaPN.js') ?>" type="text/javascript"></script>-->
<script type="text/javascript">
     $(function () 
     {
         var esModoEdicion = <?php if(isset($ID_USUARIO) && $ID_USUARIO != NULL){ echo 1;} else {echo 0;}?>;               

           /*--------FUNCION PARA COMPROBAR SI EL TAB ACTIVO CUMPLE CON LAS VALIDACIONES ASOCIADAS------*/
            function chequearValidacion() 
            {
                var form = $("form[name=formulario_usuarios]");
                form.validate();
                if (form.valid() == true)
                    return true;
                else
                    return false;
            }

            /*--------------ESTA FUNCION ES UTIL PARA EL TAB DE CONFIRMACION---------------------------
             * ------------SE ENCARGA DE LLENAR LOS VALORES DE CADA UNO DE LOS CAMPOS MOSTRADOS EN LA CONFIRMACION
             * ------------A PARTIR DE LOS DATOS QUE SE INTRODUJERON EN EL FORMULARIO---------------------------------*/
            var displayConfirm = function () {
                $('.confirmation-tab-value').each(function () {
                    var input = $('[name="' + $(this).attr("data-display") + '"]');
                    if (input.is(":radio")) {
                        input = $('[name="' + $(this).attr("data-display") + '"]:checked');
                    }
                    if (input.is(":text") || input.is("textarea")) {
                        $(this).html(input.val());
                    } else if (input.is("select")) {
                        if (input.find('option:selected').attr('value') != "")
                        {
                            $(this).html(input.find('option:selected').text());
                        }
                        else
                        {
                            $(this).html("");
                        }
                    } else if (input.attr("type") == "checkbox") {
                        if (input.is(":checked")) {
                            $(this).html('<span class="glyphicon glyphicon-ok"></span> ' + input.attr("data-title"));
                        }
                        else {
                            $(this).html('');
                        }
                    } else if (input.is(":radio") && input.is(":checked")) {
                        $(this).html(input.attr("data-title"));
                    }
                    else
                    {
                        $(this).html(input.val());
                    }
                });
            };
    /*ESTA FUNCION ES UTIL PARA LA INICIALIZACION DEL WIZARD Y ES DONDE SE IMPLEMENTAN LOS EVENTOS
     * MAS IMPORTANTES DE ESTE TIPO DE COMPONENTE COMO SON ONTABSHOW, ONNEXT Y ONPREVIOUS*/
   
   $('#rootwizard').bootstrapWizard({
            'nextSelector': '.button-next',
            'previousSelector': '.button-previous',
            onTabShow: function (tab, navigation, index) {

                var $total = navigation.find('li').length;
                var $current = index + 1;
                var $percent = ($current / $total) * 100;
                $('#rootwizard .progress-bar').css({width: $percent + '%'});
                var li_list = navigation.find('li');
                for (var i = 0; i < index; i++) {
                    jQuery(li_list[i]).addClass("done");
                }
                for (var i = index; i < $total; i++) {
                    jQuery(li_list[i]).removeClass("done");
                }


                if ($current == $total)
                {
                    
                    $('.formulario_usuarios_guardar').css('display', 'inline-block');
                    $('.button-previous').css('display', 'inline-block');
                    $('.button-next').css('display', 'none');
                    displayConfirm();
                }
                else if ($current == 1)
                {
                    if(!esModoEdicion)
                    {
                        $('.formulario_usuarios_guardar').css('display', 'none');
                    }
                    $('.button-previous').css('display', 'none');
                    $('.button-next').css('display', 'inline-block');
                }
                else {
                    if(!esModoEdicion)
                    {
                        $('.formulario_usuarios_guardar').css('display', 'none');
                    }
                    $('.button-previous').css('display', 'inline-block');
                    $('.button-next').css('display', 'inline-block');
                }
            },
            onNext: function (tab, navigation, index) {

                if (chequearValidacion())
                {
                    var $total = navigation.find('li').length;
                    var li_list = navigation.find('li');
                    for (var i = 0; i < index; i++) {
                        jQuery(li_list[i]).addClass("done");
                    }
                    for (var i = index; i < $total; i++) {
                        jQuery(li_list[i]).removeClass("done");
                    }


                    return true;
                }
                else
                    return false;
            },
            onPrevious: function (tab, navigation, index) {


                var $total = navigation.find('li').length;
                var li_list = navigation.find('li');
                for (var i = 0; i < index; i++) {
                    jQuery(li_list[i]).addClass("done");
                }
                for (var i = index; i < $total; i++) {
                    jQuery(li_list[i]).removeClass("done");
                }

            },
            onTabClick: function (tab, navigation, index) {
                if(esModoEdicion)
                {
                    if (chequearValidacion())
                    {
                        var $total = navigation.find('li').length;
                        var li_list = navigation.find('li');
                        for (var i = 0; i < index; i++) {
                            jQuery(li_list[i]).addClass("done");
                        }
                        for (var i = index; i < $total; i++) {
                            jQuery(li_list[i]).removeClass("done");
                        }


                        return true;
                    }
                    else
                        return false;
                }
                else
                {
                    return false;
                }
            }

        });
        
        
        /*SE OCULTA EL BTN DE GUARDAR SOLO SI NO ESTA EN MODO EDICION*/
        if(!esModoEdicion)
        {
            $('.formulario_usuarios_guardar').css('display', 'none');
        }
        else
        {
            $('.formulario_usuarios_guardar').css('display', 'inline-block');
        }
   

    function convertirTextosAMayusculas(){
            $("form[name=formulario_usuarios] input").each(function () {

               if ( $(this).is(":text") || $(this).is("textarea")  ) {
                    $(this).val($(this).val().toUpperCase());
                }
                if($(this).attr('type') === 'email' )
                {
                     $(this).val($(this).val().toLowerCase());
                }
           });                           
            $("form[name=formulario_usuarios] textarea").each(function () {
                     $(this).val($(this).val().toUpperCase());
           });

       }

    /*----------------FUNCION PARA VALIDAR CAMPOS DEL FORMULARIO DEL TAB ACTIVO Y ENVIARLO----------------------*/

    function chequearValidacionYEnviarFormulario() {

        var form = $("form[name=formulario_usuarios]");
        form.validate();
        if (form.valid() == true) {
            convertirTextosAMayusculas();
            $('.btn').css('display', 'none');
            form.submit();
        }

    }
    $(".formulario_usuarios_guardar").click(chequearValidacionYEnviarFormulario);
    /**************************/
    
    
    /*------------------------ACTUALIZAR NUMERO DE RUC A PARTIR DE LA CEDULA*/

     function buscarUsuario(e)
            {
                var url = '<?php echo base_url(); ?>index.php/admin/usuario/buscarUsuario'; // El script a dónde se realizará la petición.
                var usuario = $('#formulario_usuarios_buscar').val();
                if(usuario !=='')
                {                    
                    
                    $.isLoading({
                                text: "Cargando",
                                position: "overlay"
                            });
                    $.ajax({
                        type: "POST",
                        url: url,
                        dataType: 'json',
                        data: {usuario: usuario}, // Adjuntar los campos del formulario enviado.
                        success: function (data)
                        {
                            $.isLoading("hide");
                            if (data != null)
                            {
                               var urlCreacionBasica = "<?php echo base_url(); ?>index.php/admin/usuario/mostrarFormularioGestionUsuarios/"+data.ID_USUARIO;
                                $(location).attr('href',urlCreacionBasica); 
                            } 
                            else
                            {
                                if(!esModoEdicion)
                                {
                                    $('#formulario_usuarios_usuario').val(usuario);
                                }
                                var params = {                
                                    onInit: function(data) {
                                    },
                                    onCreate: function(notification, data) {
                                    },
                                    onClose: function(notification, data) {
                                    }
                                    };
                                var text = 'No existe ningún usuario registrado con ese correo electrónico.';
                                params.heading = 'Notificación';
                                params.theme = 'teal';
                                // show notification
                                $.notific8(text, params);
                            }
                        }

                    });
                 
                }
            }
            
            function buscarUsuarioEnterEvent(e) {
                if (e.which == 13) {
                    buscarUsuario(e);
                    return false;
                }
            }

            $('#formulario_usuarios_buscar').keypress(buscarUsuarioEnterEvent);
            $('#btnBuscar').click(function(e){
                buscarUsuario(e);
                return false;
            });
        
        
        });
</script>