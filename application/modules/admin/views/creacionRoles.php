    <title>Admin</title>
<form name="formulario_roles" method="post" action="<?php echo base_url(); ?>index.php/admin/rol/procesarFormularioGestionRoles<?php if(isset($ID_ROL) && $ID_ROL != NULL){ echo "/".$ID_ROL ;} ?>" enctype="multipart/form-data">

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
                    <button type="submit" class="formulario_roles_guardar btn-success btn btn-sm">GUARDAR</button>
                </div>
                <div style="float:left">
                    <input type='button' class='btn button-previous btn-default btn-sm' name='previous' value='Anterior' />

                </div>
                <div class="clearfix"></div>
        </div>
        <div class="tab-content">
            <div class="tab-pane" id="tab1">      
            <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="form-group form-group-sm">
                        <div class="input-group">
                        <input id="formulario_roles_buscar"
                               class="form-control" type="text" 
                               name="rolBuscar"
                               placeholder="Ingrese un rol para buscar"
                               >
                        <span class="input-group-addon btn btn-primary btn-sm"  id="btnBuscar"><span style="color: white" class="glyphicon glyphicon-search"></span> </span>
                        </div>

                    </div>
                        </div>
                    <div class="clear-fix"></div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm <?php if(form_error('formulario_roles[ROL]') != '' ){ echo "has-error";}?>">                
                            <label class="control-label required" for="formulario_roles_rol">Rol<span class="required"> * </span></label>                            
                            <input type="text" id="formulario_roles_rol" name="formulario_roles[ROL]" 
                                    <?php if(form_error('formulario_roles[ROL]') != '' ){?>
                                    aria-describedby="formulario_roles_rol-error"
                                   <?php } ?>
                                   required="required" 
                                   mayusculasespacios="^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$"
                                   maxlength="50" class="form-control" 
                                   <?php if(isset($ROL) && $ROL != NULL) { ?> value="<?= $ROL ?>" <?php } ?>
                                   />
                                    <?php if(form_error('formulario_roles[ROL]') != '' ){?>
                                        <span id="formulario_roles_rol-error" class="help-block">
                                            <?= form_error('formulario_roles[ROL]') ?>
                                        </span>
                                    <?php } ?>
                        </div>
                    </div>
                    
                </div>
                    <div class="row">
                            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 bhoechie-tab-container">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
                                  <div class="list-group">
                                    <a href="#" class="list-group-item active text-center">
                                        <h4 class="glyphicon glyphicon-user"></h4><br/><span class="asignar-roles-funcionalidad">Clientes</span>
                                    </a>
                                    <a href="#" class="list-group-item text-center">
                                      <h4 class="glyphicon glyphicon-folder-open"></h4><br/><span class="asignar-roles-funcionalidad">Facturación</span>
                                    </a>
                                    <a href="#" class="list-group-item text-center">
                                      <h4 class="glyphicon glyphicon-usd"></h4><br/><span class="asignar-roles-funcionalidad">Contabilidad</span>
                                    </a>
                                    <a href="#" class="list-group-item text-center">
                                      <h4 class="glyphicon glyphicon-cog"></h4><br/><span class="asignar-roles-funcionalidad">Configuración</span>
                                    </a>
<!--                                    <a href="#" class="list-group-item text-center">
                                      <h4 class="glyphicon glyphicon-credit-card"></h4><br/>Credit Card
                                    </a>-->
                                  </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                                    <!-- flight section -->
                                    <div class="bhoechie-tab-content active">
                                            <?php foreach ($FUNCIONALIDADES_CLIENTE as $funcionalidad) {  ?>
                                                <div class="form-group form-group-sm">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox"  name="formulario_roles[CLIENTES][FUNCIONALIDAD][<?php echo $funcionalidad['ID_FUNCIONALIDAD']; ?>]"                                   
                                                                    value="<?php echo $funcionalidad['ID_FUNCIONALIDAD']; ?>" 
                                                                    data-title ="<?php echo $funcionalidad['FUNCIONALIDAD']; ?>"
                                                                    <?php if(isset( $funcionalidad['IS_CHECKED']) && $funcionalidad['IS_CHECKED'] != NULL) { ?> checked <?php } ?>/>
                                                                        <?php echo $funcionalidad['FUNCIONALIDAD']; ?>
                                                        </label>
                                                    </div>
                                                </div>
                                           <?php } ?>
                                        
                                        
                                    </div>
                                    <!-- train section -->
                                    <div class="bhoechie-tab-content">
                                        <?php foreach ($FUNCIONALIDADES_FACTURACION as $funcionalidad) {  ?>
                                                <div class="form-group form-group-sm">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox"  name="formulario_roles[FACTURACION][FUNCIONALIDAD][<?php echo $funcionalidad['ID_FUNCIONALIDAD']; ?>]"                                   
                                                                    value="<?php echo $funcionalidad['ID_FUNCIONALIDAD']; ?>" 
                                                                    data-title ="<?php echo $funcionalidad['FUNCIONALIDAD']; ?>"
                                                                    <?php if(isset( $funcionalidad['IS_CHECKED']) && $funcionalidad['IS_CHECKED'] != NULL) { ?> checked <?php } ?>/>
                                                                        <?php echo $funcionalidad['FUNCIONALIDAD']; ?>
                                                        </label>
                                                    </div>
                                                </div>
                                           <?php } ?>
                                    </div>

                                    <!-- hotel search -->
                                    <div class="bhoechie-tab-content">
                                        
                                    </div>
                                    <div class="bhoechie-tab-content">
                                        <?php foreach ($FUNCIONALIDADES_CONFIGURACION as $funcionalidad) {  ?>
                                                <div class="form-group form-group-sm">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox"  name="formulario_roles[CONFIGURACION][FUNCIONALIDAD][<?php echo $funcionalidad['ID_FUNCIONALIDAD']; ?>]"                                   
                                                                    value="<?php echo $funcionalidad['ID_FUNCIONALIDAD']; ?>" 
                                                                    data-title ="<?php echo $funcionalidad['FUNCIONALIDAD']; ?>"
                                                                    <?php if(isset( $funcionalidad['IS_CHECKED']) && $funcionalidad['IS_CHECKED'] != NULL) { ?> checked <?php } ?>/>
                                                                        <?php echo $funcionalidad['FUNCIONALIDAD']; ?>
                                                        </label>
                                                    </div>
                                                </div>
                                           <?php } ?>
                                    </div>
<!--                                    <div class="bhoechie-tab-content">
                                        <center>
                                          <h1 class="glyphicon glyphicon-credit-card" style="font-size:12em;color:#55518a"></h1>
                                          <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                                          <h3 style="margin-top: 0;color:#55518a">Credit Card</h3>
                                        </center>
                                    </div>-->
                                </div>
                            </div>
                      </div>

               


            </div>
            <div class="tab-pane" id="tab2">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <h4>Información general</h4>
                        <p>
                            <span class="confirmation-tab-label">Rol</span>:
                            <span class="label label-warning">
                                <span data-display="formulario_roles[ROL]" class="confirmation-tab-value"></span>
                            </span>

                        </p>
                        
                       
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                         <h4>Información detallada</h4>
                         <div class="bs-callout bs-callout-orange" >
                             <span class="confirmation-tab-label"><h4>Clientes</h4></span>
                             <?php foreach ($FUNCIONALIDADES_CLIENTE as $funcionalidad) {  ?>
                                            <div style="padding-bottom: 8px;"><span data-display="formulario_roles[CLIENTES][FUNCIONALIDAD][<?php echo $funcionalidad['ID_FUNCIONALIDAD']; ?>]" class="confirmation-tab-value"></span></div>
                                           <?php } ?>
                         </div>
                         <div class="bs-callout bs-callout-orange" >
                             <span class="confirmation-tab-label"><h4>Facturación</h4></span>
                             <?php foreach ($FUNCIONALIDADES_FACTURACION as $funcionalidad) {  ?>
                                            <div style="padding-bottom: 8px;"><span data-display="formulario_roles[FACTURACION][FUNCIONALIDAD][<?php echo $funcionalidad['ID_FUNCIONALIDAD']; ?>]" class="confirmation-tab-value"></span></div>
                                           <?php } ?>
                         </div>
                         <div class="bs-callout bs-callout-orange" >
                             <span class="confirmation-tab-label"><h4>Configuración</h4></span>
                             <?php foreach ($FUNCIONALIDADES_CONFIGURACION as $funcionalidad) {  ?>
                                            <div style="padding-bottom: 8px;"><span data-display="formulario_roles[CONFIGURACION][FUNCIONALIDAD][<?php echo $funcionalidad['ID_FUNCIONALIDAD']; ?>]" class="confirmation-tab-value"></span></div>
                                           <?php } ?>
                         </div>
                    </div>

                <div class="clearfix"></div>
            </div>
            <div class="panel-footer">
                <div class="pull-right">
                    <a type='button' style="min-width: 80px;" class='btn btn-default btn-sm' href="<?php echo base_url(); ?>index.php/index/index">SALIR</a>
                    <input type='button' class='btn button-next btn-primary btn-sm' name='next' value='Siguiente' />
                    <button type="submit" class="formulario_roles_guardar btn-success btn btn-sm">GUARDAR</button>
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
     $(function () {
         $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
                e.preventDefault();
                $(this).siblings('a.active').removeClass("active");
                $(this).addClass("active");
                var index = $(this).index();
                $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
                $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
            });
            
            
         var esModoEdicion = <?php if(isset($ID_ROL) && $ID_ROL != NULL){ echo 1;} else {echo 0;}?>;
                
  
         
           /*--------FUNCION PARA COMPROBAR SI EL TAB ACTIVO CUMPLE CON LAS VALIDACIONES ASOCIADAS------*/
    function chequearValidacion() {
        var form = $("form[name=formulario_roles]");
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
                    $(this).html('<span class="glyphicon glyphicon-ok" style="color:#0b610b;"></span> ' + input.attr("data-title"));
                }
                else {
                    $(this).html('<span class="glyphicon glyphicon-remove" style="color:#a94442;"></span> ' + input.attr("data-title"));
              
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
                    
                    $('.formulario_roles_guardar').css('display', 'inline-block');
                    $('.button-previous').css('display', 'inline-block');
                    $('.button-next').css('display', 'none');
                    displayConfirm();
                }
                else if ($current == 1)
                {
                    if(!esModoEdicion)
                    {
                        $('.formulario_roles_guardar').css('display', 'none');
                    }
                    $('.button-previous').css('display', 'none');
                    $('.button-next').css('display', 'inline-block');
                }
                else {
                    if(!esModoEdicion)
                    {
                        $('.formulario_roles_guardar').css('display', 'none');
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
            $('.formulario_roles_guardar').css('display', 'none');
        }
        else
        {
            $('.formulario_roles_guardar').css('display', 'inline-block');
        }
   

    function convertirTextosAMayusculas(){
            $("form[name=formulario_roles] input").each(function () {

               if ( $(this).is(":text") || $(this).is("textarea")  ) {
                    $(this).val($(this).val().toUpperCase());
                }
                if($(this).attr('type') === 'email' )
                {
                     $(this).val($(this).val().toLowerCase());
                }
           });                           
            $("form[name=formulario_roles] textarea").each(function () {
                     $(this).val($(this).val().toUpperCase());
           });

       }

    /*----------------FUNCION PARA VALIDAR CAMPOS DEL FORMULARIO DEL TAB ACTIVO Y ENVIARLO----------------------*/

    function chequearValidacionYEnviarFormulario() {

        var form = $("form[name=formulario_roles]");
        form.validate();
        if (form.valid() == true) {
            convertirTextosAMayusculas();
            $('.btn').css('display', 'none');
            form.submit();
        }

    }
    $(".formulario_roles_guardar").click(chequearValidacionYEnviarFormulario);
    /**************************/
    
    
    /*------------------------ACTUALIZAR NUMERO DE RUC A PARTIR DE LA CEDULA*/

     function buscarRol(e)
            {
                var url = '<?php echo base_url(); ?>index.php/admin/rol/buscarRolesXDenominacion'; // El script a dónde se realizará la petición.
                var rol = $('#formulario_roles_buscar').val();
                if(rol !=='')
                {                    
                    
                    $.isLoading({
                                text: "Cargando",
                                position: "overlay"
                            });
                    $.ajax({
                        type: "POST",
                        url: url,
                        dataType: 'json',
                        data: {rol: rol}, // Adjuntar los campos del formulario enviado.
                        success: function (data)
                        {
                            $.isLoading("hide");
                            if (data != null)
                            {
                               var urlCreacionBasica = "<?php echo base_url(); ?>index.php/admin/rol/mostrarFormularioGestionRoles/"+data.ID_ROL;
                                $(location).attr('href',urlCreacionBasica); 
                            } 
                            else
                            {
                                if(!esModoEdicion)
                                {
                                    $('#formulario_roles_rol').val(rol);
                                }
                                var params = {                
                                    onInit: function(data) {
                                    },
                                    onCreate: function(notification, data) {
                                    },
                                    onClose: function(notification, data) {
                                    }
                                    };
                                var text = 'No existe ningún rol registrado con esa denominación.';
                                params.heading = 'Notificación';
                                params.theme = 'teal';
                                // show notification
                                $.notific8(text, params);
                            }
                        }

                    });
                 
                }
            }
            
            function buscarRolEnterEvent(e) {
                if (e.which == 13) {
                    buscarRol(e);
                    return false;
                }
            }

            $('#formulario_roles_buscar').keypress(buscarRolEnterEvent);
            $('#btnBuscar').click(function(e){
                buscarRol(e);
                return false;
            });
        
        
        });
</script>