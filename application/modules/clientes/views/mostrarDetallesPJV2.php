<title>Clientes</title>
<form name="formulario_personas" method="post" action="<?php echo base_url(); ?>index.php/clientes/clientes/mostrarDetallesPJV2<?php if(isset($ID_CLIENTE) && $ID_CLIENTE != NULL){ echo "/".$ID_CLIENTE ;} ?>">


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

                                    Representante legal 
                                </span>
                            </a></li>
                        <li><a href="#tab3" data-toggle="tab" class="step">
                                <span class="number"> 3 </span>
                                <span class="desc">
                                    <span style="display: none" class="glyphicon glyphicon-ok" aria-hidden="true"></span>

                                    Información de contacto 
                                </span>
                            </a></li>
                            <li><a href="#tab4" data-toggle="tab" class="step">
                                <span class="number"> 4 </span>
                                <span class="desc">
                                    <span style="display: none" class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                    Personas a contactar
                                </span>
                            </a></li>


                    </ul>
                </div>
            </div>
        </div>
        <div id="bar" class="progress progress-striped active" style="margin-bottom: 0px;">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
        </div>
        <div class="panel-footer">
                <div class="pull-right" >
                    <input type='button' class='btn button-next btn-success btn-sm' name='next' value='Siguiente' />
                    <a class="btn btn-default btn-sm" href="<?php echo base_url(); ?>index.php/clientes/clientes/busquedaAvanzada">REALIZAR OTRA BÚSQUEDA</a>
                    </div>
                <div style="float:left">
                    <input type='button' class='btn button-previous btn-default btn-sm' name='previous' value='Anterior' />

                </div>
                <div class="clearfix"></div>
            </div>
        <div class="tab-content">
            <div class="tab-pane" id="tab1">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_razonSocial">Razón social</label>
                            <input type="text" id="formulario_personas_razonSocial" name="formulario_personas[RAZON_SOCIAL]"
                                   <?php if(isset($RAZON_SOCIAL) && $RAZON_SOCIAL != NULL) { ?> value="<?= $RAZON_SOCIAL ?>" <?php } ?> class="form-control" />
                            
                        </div>
                    </div> 
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_nombreComercial">Nombre comercial</label>
                            <input type="text" id="formulario_personas_nombreComercial" name="formulario_personas[NOMBRE_COMERCIAL]" class="form-control" 
                                    <?php if(isset($NOMBRE_COMERCIAL) && $NOMBRE_COMERCIAL != NULL) { ?> value="<?= $NOMBRE_COMERCIAL ?>" <?php } ?> />
                        </div>
                    </div>
                     <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_nroDocumento">Número de documento</label>
                            <input type="text" id="formulario_personas_nroDocumento" name="formulario_personas[NRO_DOCUMENTO]" class="form-control"                                    
                                    <?php if(isset($NRO_DOCUMENTO) && $NRO_DOCUMENTO != NULL) { ?> value="<?= $NRO_DOCUMENTO ?>" <?php } ?>/>
                                  
                        </div>

                    </div>
                </div>
                
                <div class="row">
                                     
                    <div class="col-md-4 col-sm-4 col-xs-12">                        
                                <div class="form-group form-group-sm">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="formulario_personas_es_contribuyente_especial" name="formulario_personas[ES_CONTRIBUYENTE_ESPECIAL]" 
                                                   <?php if(isset($ES_CONTRIBUYENTE_ESPECIAL) && $ES_CONTRIBUYENTE_ESPECIAL == TRUE) { ?> checked <?php } ?>                                   
                                                  value="1" />Contribuyente especial
                                        </label>
                                    </div>
                                </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">                        
                                <div class="form-group form-group-sm">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="formulario_personas_es_publico" name="formulario_personas[ES_PUBLICO]" 
                                                   <?php if(isset($ES_PUBLICO) && $ES_PUBLICO == TRUE) { ?> checked <?php } ?>                                   
                                                   value="1" />Público
                                        </label>
                                    </div>
                                </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">                        
                                <div class="form-group form-group-sm">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="formulario_personas_es_sin_fines_de_lucro" name="formulario_personas[ES_SIN_FINES_DE_LUCRO]" 
                                                   <?php if(isset($ES_SIN_FINES_DE_LUCRO) && $ES_SIN_FINES_DE_LUCRO == TRUE) { ?> checked <?php } ?>                                   
                                                   value="1" />Sin fines de lucro
                                        </label>
                                    </div>
                                </div>
                    </div>
                    
                </div>
            </div>
            <div class="tab-pane" id="tab2">

                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">
                            <input type="text" id="formulario_personas_idRepresentante" name="formulario_personas[ID_REPRESENTANTE]"  style="display:none" class="form-control" 
                                    <?php if(isset($ID_REPRESENTANTE) && $ID_REPRESENTANTE != NULL) { ?> value="<?= $ID_REPRESENTANTE ?>" <?php } ?>
                                     />
                        </div>
                    </div>
                </div>
                <div class="row representante">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_primerNombre">Primer nombre</label>
                            <input type="text" id="formulario_personas_primerNombre" name="formulario_personas[REPRESENTANTE][PRIMER_NOMBRE]"  mayusculasespacios="^[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+$" maxlength="50" class="form-control" 
                            <?php if(isset($PRIMER_NOMBRE) && $PRIMER_NOMBRE != NULL) { ?> value="<?= $PRIMER_NOMBRE ?>" <?php } ?>
                            />
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_segundoNombre">Segundo nombre</label>
                            <input type="text" id="formulario_personas_segundoNombre" name="formulario_personas[REPRESENTANTE][SEGUNDO_NOMBRE]" mayusculasespacios="^[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+$" maxlength="50" class="form-control" 
                            <?php if(isset($SEGUNDO_NOMBRE) && $SEGUNDO_NOMBRE != NULL) { ?> value="<?= $SEGUNDO_NOMBRE ?>" <?php } ?>
                            />
                        </div>
                    </div>
                </div>                    
                <div class="row representante">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_apellidoPaterno">Apellido paterno</label>
                            <input type="text" id="formulario_personas_apellidoPaterno" name="formulario_personas[REPRESENTANTE][APELLIDO_PATERNO]" mayusculasespacios="^[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+$" maxlength="50" class="form-control" 
                            <?php if(isset($APELLIDO_PATERNO) && $APELLIDO_PATERNO != NULL) { ?> value="<?= $APELLIDO_PATERNO ?>" <?php } ?>
                            />
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_apellidoMaterno">Apellido materno</label>
                            <input type="text" id="formulario_personas_apellidoMaterno" name="formulario_personas[REPRESENTANTE][APELLIDO_MATERNO]" mayusculasespacios="^[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+$" maxlength="50" class="form-control" 
                            <?php if(isset($APELLIDO_MATERNO) && $APELLIDO_MATERNO != NULL) { ?> value="<?= $APELLIDO_MATERNO ?>" <?php } ?>
                            />
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tab3">
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_idOperadorTelefonico">Operadora telefónica</label>
                            <select id="formulario_personas_idOperadorTelefonico" name="formulario_personas['CONTACTO_DOMICILIO'][ID_OPERADOR_TELEFONICO]" class="form-control">
                                <option value="" selected="selected">
                                    <?php if (isset($NOMBRE_OPERADOR_DOMICILIO)) {echo $NOMBRE_OPERADOR_DOMICILIO;} ?>
                                </option>
                            </select>
                        </div>
                    </div>


                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_celular">Celular</label>
                            <div class="input-group">
                                <span class="input-group-addon left"><span class="glyphicon glyphicon-phone"></span></span>
                                <input type="text" id="formulario_personas_celular" name="formulario_personas[CONTACTO_DOMICILIO][CELULAR]" 
                                       <?php if (isset($CELULAR_DOMICILIO) && $CELULAR_DOMICILIO != NULL) { ?> value="<?= $CELULAR_DOMICILIO ?>" <?php } ?> 
                                       maxlength="12" minlength="12" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_telefono">Teléfono</label>
                            <div class="input-group">
                                    <span class="input-group-addon left"><span class="glyphicon glyphicon-phone-alt"></span></span>
                                    <input type="text" id="formulario_personas_telefono" name="formulario_personas[CONTACTO_DOMICILIO][TELEFONO]" 
                                           <?php if(isset($TELEFONO_DOMICILIO) && $TELEFONO_DOMICILIO != NULL) { ?> value="<?= $TELEFONO_DOMICILIO ?>" <?php } ?> class="form-control"  />
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_correoElectronico">Correo electrónico</label>
                            <div class="input-group">
                                <span class="input-group-addon left"><span class="glyphicon glyphicon-envelope"></span></span>
                                <input type="email" id="formulario_personas_correoElectronico" name="formulario_personas[CONTACTO_DOMICILIO][CORREO_ELECTRONICO]" 
                                       <?php if(isset($CORREO_ELECTRONICO_DOMICILIO) && $CORREO_ELECTRONICO_DOMICILIO != NULL) { ?> value="<?= $CORREO_ELECTRONICO_DOMICILIO ?>" <?php } ?> class="form-control" 
                                    />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_idPais">País</label>
                            <select id="formulario_personas_idPais" name="formulario_personas[CONTACTO_DOMICILIO][ID_PAIS]" class="form-control">
                                    <option value="" selected="selected">
                                    <?php if (isset($PAIS_DOMICILIO)) {echo $PAIS_DOMICILIO;} ?>
                                </option>
                            </select>
                            
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">
                            <div>                 
                                <label class="control-label" for="formulario_personas_idProvincia">Provincia</label>
                            </div>
                            <select id="formulario_personas_idProvincia" name="formulario_personas[CONTACTO_DOMICILIO][ID_PROVINCIA]" class="form-control">
                                <option value="" selected="selected">
                                    <?php if (isset($PROVINCIA_DOMICILIO)) {echo $PROVINCIA_DOMICILIO;} ?>
                                </option>
                            </select>
                            
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">
                            <div>                 
                                <label class="control-label required" for="formulario_personas_idCanton">Cantón</label>
                            </div>
                            <select id="formulario_personas_idCanton" name="formulario_personas[CONTACTO_DOMICILIO][ID_CANTON]" class="form-control">
                                <option value="" selected="selected">
                                    <?php if (isset($CANTON_DOMICILIO)) {echo $CANTON_DOMICILIO;} ?>
                                </option>
                            </select>
                           
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">
                            <div>
                                <label class="control-label" for="formulario_personas_idParroquia">Parroquia de domicilio</label>
                            </div>
                            <select id="formulario_personas_idParroquia" name="formulario_personas[CONTACTO_DOMICILIO][ID_PARROQUIA]" class="form-control">
                                <option value="" selected="selected">
                                    <?php if (isset($PARROQUIA_DOMICILIO)) {echo $PARROQUIA_DOMICILIO;} ?>
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_direccionCallePrincipal">Calle Principal</label>
                            <input type="text" id="formulario_personas_direccionCallePrincipal" name="formulario_personas[CONTACTO_DOMICILIO][DIRECCION_CALLE_PRINCIPAL]"
                                   <?php if(isset($DIRECCION_CALLE_PRINCIPAL_DOMICILIO) && $DIRECCION_CALLE_PRINCIPAL_DOMICILIO != NULL) { ?> value="<?= $DIRECCION_CALLE_PRINCIPAL_DOMICILIO ?>" <?php } ?>
                                   class="form-control" /></div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_direccionNumero">Nro.</label>
                            <input type="text" id="formulario_personas_direccionNumero" name="formulario_personas[CONTACTO_DOMICILIO][DIRECCION_NUMERO]" 
                                   <?php if(isset($DIRECCION_NUMERO_DOMICILIO) && $DIRECCION_NUMERO_DOMICILIO != NULL) { ?> value="<?= $DIRECCION_NUMERO_DOMICILIO ?>" <?php } ?>                                   
                                   class="form-control" /></div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_direccionCalleSecundaria1">Calle Secundaria 1</label>
                            <input type="text" id="formulario_personas_direccionCalleSecundaria1" name="formulario_personas[CONTACTO_DOMICILIO][DIRECCION_CALLE_SECUNDARIA1]" 
                                   <?php if(isset($DIRECCION_CALLE_SECUNDARIA1_DOMICILIO) && $DIRECCION_CALLE_SECUNDARIA1_DOMICILIO != NULL) { ?> value="<?= $DIRECCION_CALLE_SECUNDARIA1_DOMICILIO ?>" <?php } ?>
                                   class="form-control" /></div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_direccionCalleSecundaria2">Calle Secundaria 2</label>
                            <input type="text" id="formulario_personas_direccionCalleSecundaria2" name="formulario_personas[CONTACTO_DOMICILIO][DIRECCION_CALLE_SECUNDARIA2]" 
                                   <?php if(isset($DIRECCION_CALLE_SECUNDARIA2_DOMICILIO) && $DIRECCION_CALLE_SECUNDARIA2_DOMICILIO != NULL) { ?> value="<?= $DIRECCION_CALLE_SECUNDARIA2_DOMICILIO ?>" <?php } ?>
                                   class="form-control" /></div>  
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">                
                            <label class="control-label" for="formulario_personas_direccionReferencia">Dirección de referencia</label>
                            <textarea id="formulario_personas_direccionReferencia" name="formulario_personas[CONTACTO_DOMICILIO][DIRECCION_REFERENCIA]" maxlength="300" class="form-control"><?php  if(isset($DIRECCION_REFERENCIA_DOMICILIO) && $DIRECCION_REFERENCIA_DOMICILIO != NULL) {  echo $DIRECCION_REFERENCIA_DOMICILIO;} ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">                
                            <label class="control-label" for="formulario_personas_descripcion_contacto">Descripción</label>
                            <textarea id="formulario_personas_direccionReferencia" name="formulario_personas[CONTACTO_DOMICILIO][DESCRIPCION]" maxlength="300" class="form-control"><?php  if(isset($DESCRIPCION_DOMICILIO) && $DESCRIPCION_DOMICILIO != NULL) {  echo $DESCRIPCION_DOMICILIO;} ?></textarea>
                        </div>
                    </div>
                </div>
                    

            </div>
            <div class="tab-pane" id="tab4">
                 <?php for($i =0; $i<4; $i++){ ?>
                <h5 class="form-section">Persona a contactar <?= $i+1 ?> </h5>
               <div class="row persona-a-contactar-<?= $i ?>">
                   
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_persona_contactar_nombre_completo_<?= $i ?>">Nombres y apellidos</label>
                            <input type="text" id="formulario_personas_persona_contactar_nombre_completo_<?= $i ?>" class="form-control" 
                                     <?php if(isset($PERSONA_CONTACTAR) && isset($PERSONA_CONTACTAR[$i]) && $PERSONA_CONTACTAR[$i]['NOMBRE_COMPLETO'] != NULL) { ?> 
                                     value="<?= $PERSONA_CONTACTAR[$i]['NOMBRE_COMPLETO'] ?>"
                                         <?php } ?>
                                   />
                        </div>
                    </div>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_persona_contactar_area_cargo_<?= $i ?>">Área o cargo</label>
                            <input type="text" id="formulario_personas_persona_contactar_area_cargo_<?= $i ?>" class="form-control" 
                                     <?php if(isset($PERSONA_CONTACTAR) && isset($PERSONA_CONTACTAR[$i]) && $PERSONA_CONTACTAR[$i]['AREA_CARGO'] != NULL) { ?> 
                                     value="<?= $PERSONA_CONTACTAR[$i]['AREA_CARGO'] ?>"
                                         <?php } ?>
                                   />
                        </div>
                    </div>
                   </div>
                <div class="row persona-a-contactar-<?= $i ?>">   
                   <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_persona_contactar_celular_<?= $i ?>">Celular</label>
                            <div class="input-group">
                                <span class="input-group-addon left"><span class="glyphicon glyphicon-phone"></span></span>
                                <input type="text" id="formulario_personas_persona_contactar_celular_<?= $i ?>" class="form-control"    
                                       <?php if(isset($PERSONA_CONTACTAR) && isset($PERSONA_CONTACTAR[$i]) && $PERSONA_CONTACTAR[$i]['CELULAR'] != NULL) { ?> 
                                        value="<?= $PERSONA_CONTACTAR[$i]['CELULAR'] ?>"
                                         <?php } ?>/>
                            </div>
                        </div>
                    </div>
                    
                     <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                           
                                <label class="control-label" for="formulario_personas_persona_contactar_telefono_<?= $i ?>">Teléfono</label>
                                 <div class="input-group">
                                    <span class="input-group-addon left"><span class="glyphicon glyphicon-phone-alt"></span></span>
                                    <input type="text" id="formulario_personas_persona_contactar_telefono_<?= $i ?>" class="form-control"                                                                                 
                                        <?php if(isset($PERSONA_CONTACTAR) && isset($PERSONA_CONTACTAR[$i]) && $PERSONA_CONTACTAR[$i]['TELEFONO'] != NULL) { ?> 
                                        value="<?= $PERSONA_CONTACTAR[$i]['TELEFONO'] ?>"
                                         <?php } ?>
                                        />
                                 </div>
                        </div>
                    </div>
                    
                     <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_persona_contactar_correo_electronico_<?= $i ?>">Correo electrónico</label>
                            <div class="input-group">
                                <span class="input-group-addon left"><span class="glyphicon glyphicon-envelope"></span></span>
                                <input type="email" id="formulario_personas_persona_contactar_correo_electronico_<?= $i ?>" class="form-control"
                                        <?php if(isset($PERSONA_CONTACTAR) && isset($PERSONA_CONTACTAR[$i]) && $PERSONA_CONTACTAR[$i]['CORREO_ELECTRONICO'] != NULL) { ?> 
                                        value="<?= $PERSONA_CONTACTAR[$i]['CORREO_ELECTRONICO'] ?>"
                                         <?php } ?>
                                       />
                            </div>
                        </div>
                    </div>
                    
                </div>
                       
             <?php } ?>
            </div>
            <div class="panel-footer">
                <div class="pull-right" >
                    <input type='button' class='btn button-next btn-success btn-sm' name='next' value='Siguiente' />
                    <a class="btn btn-default btn-sm" href="<?php echo base_url(); ?>index.php/clientes/clientes/busquedaAvanzada">REALIZAR OTRA BÚSQUEDA</a>
                    
                    </div>
                <div style="float:left">
                    <input type='button' class='btn button-previous btn-default btn-sm' name='previous' value='Anterior' />

                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</form>
<script type="text/javascript">
    $(function () {
       /*--------FUNCION PARA COMPROBAR SI EL TAB ACTIVO CUMPLE CON LAS VALIDACIONES ASOCIADAS------*/
            
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
                                    $('.button-previous').css('display', 'inline-block');
                                    $('.button-next').css('display', 'none');
                                }
                                else if ($current == 1)
                                {
                                    $('.button-previous').css('display', 'none');
                                    $('.button-next').css('display', 'inline-block');
                                }
                                else {
                                    $('.button-previous').css('display', 'inline-block');
                                    $('.button-next').css('display', 'inline-block');
                                }
                            }
                            

                        });

                         /*desabbilitar los campos*/
                            $('form[name=formulario_personas] input').each(function(){
                                if($(this).attr('type') != 'button')
                                {
                                    $(this).prop('disabled',true);
                                }
                            });
                            $('form[name=formulario_personas] textarea').each(function(){

                                    $(this).prop('disabled',true);
                            });
                            $('form[name=formulario_personas] select').each(function(){

                                    $(this).prop('disabled',true);
                            });
                       

                    });
</script>