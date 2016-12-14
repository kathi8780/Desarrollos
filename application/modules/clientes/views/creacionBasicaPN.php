<title>Clientes</title>
<form name="formulario_personas" method="post" action="<?php echo base_url(); ?>index.php/clientes/clientes/procesarFormularioGestionBasicaPN<?php if(isset($ID_CLIENTE) && $ID_CLIENTE != NULL){ echo "/".$ID_CLIENTE ;} ?>" enctype="multipart/form-data">

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
                                    Información personal
                                </span>
                            </a>
                        </li>
                        <li><a href="#tab2" data-toggle="tab" class="step">
                                <span class="number"> 2 </span>
                                <span class="desc">
                                    <span style="display: none" class="glyphicon glyphicon-ok" aria-hidden="true"></span>

                                    Información de contacto 
                                </span>
                            </a></li>                        
                        <li><a href="#tab5" data-toggle="tab" class="step">
                                <span class="number"> 3 </span>
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
                    <button type="submit" class="formulario_personas_guardar btn-success btn btn-sm">GUARDAR</button>
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
                        <input id="formulario_personas_nroDocumentoBuscar"
                               class="form-control" type="text" 
                               name="nroDocumentoBuscar"
                               placeholder="Inserte un número de identificación para buscar"
                               >
                        <span class="input-group-addon btn btn-primary btn-sm"  id="btnBuscar"><span style="color: white" class="glyphicon glyphicon-search"></span> </span>
                        </div>

                    </div>
                        </div>
                    <div class="clear-fix"></div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm <?php if(form_error('formulario_personas[PRIMER_NOMBRE]') != '' ){ echo "has-error";}?>">                
                            <label class="control-label required" for="formulario_personas_primerNombre">Primer nombre<span class="required"> * </span></label>                            
                            <input type="text" id="formulario_personas_primerNombre" name="formulario_personas[PRIMER_NOMBRE]" 
                                    <?php if(form_error('formulario_personas[PRIMER_NOMBRE]') != '' ){?>
                                    aria-describedby="formulario_personas_primerNombre-error"
                                   <?php } ?>
                                   required="required" mayusculas="^[A-Za-zÁÉÍÓÚáéíóúÑñ]+$" maxlength="50" class="form-control" 
                                   <?php if(isset($PRIMER_NOMBRE) && $PRIMER_NOMBRE != NULL) { ?> value="<?= $PRIMER_NOMBRE ?>" <?php } ?>
                                   />
                                    <?php if(form_error('formulario_personas[PRIMER_NOMBRE]') != '' ){?>
                                        <span id="formulario_personas_primerNombre-error" class="help-block">
                                            <?= form_error('formulario_personas[PRIMER_NOMBRE]') ?>
                                        </span>
                                    <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_segundoNombre">Segundo nombre</label>
                            <input type="text" id="formulario_personas_segundoNombre" name="formulario_personas[SEGUNDO_NOMBRE]" 
                                   mayusculasespacios="^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$" maxlength="50" class="form-control" 
                                    <?php if(isset($SEGUNDO_NOMBRE) && $SEGUNDO_NOMBRE != NULL) { ?> value="<?= $SEGUNDO_NOMBRE ?>" <?php } ?>
                                   />
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm <?php if(form_error('formulario_personas[APELLIDO_PATERNO]') != '' ){ echo "has-error";}?>">                
                            <label class="control-label required" for="formulario_personas_apellidoPaterno">Apellido paterno<span class="required"> * </span></label>
                            <input type="text" id="formulario_personas_apellidoPaterno" name="formulario_personas[APELLIDO_PATERNO]" 
                                   <?php if(form_error('formulario_personas[APELLIDO_PATERNO]') != '' ){?>
                                    aria-describedby="formulario_personas_apellidoPaterno-error"
                                   <?php } ?>
                                   required="required" mayusculasespacios="^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$" maxlength="50" class="form-control" 
                                   <?php if(isset($APELLIDO_PATERNO) && $APELLIDO_PATERNO != NULL) { ?> value="<?= $APELLIDO_PATERNO ?>" <?php } ?>
                                   />
                                   <?php if(form_error('formulario_personas[APELLIDO_PATERNO]') != '' ){?>
                                        <span id="formulario_personas_apellidoPaterno-error" class="help-block">
                                            <?= form_error('formulario_personas[APELLIDO_PATERNO]') ?>
                                        </span>
                                    <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_apellidoMaterno">Apellido materno</label>
                            <input type="text" id="formulario_personas_apellidoMaterno" name="formulario_personas[APELLIDO_MATERNO]" 
                                   mayusculasespacios="^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$" maxlength="50" class="form-control" 
                                    <?php if(isset($APELLIDO_MATERNO) && $APELLIDO_MATERNO != NULL) { ?> value="<?= $APELLIDO_MATERNO ?>" <?php } ?>
                                   />
                        </div>
                    </div>
                </div> 

                <div class="row">

                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group form-group-sm <?php if(form_error('formulario_personas[ID_TIPO_CONTRIBUYENTE]') != '' ){ echo "has-error";}?>">                
                            <label class="control-label required" for="formulario_personas_idTipoContribuyente">Tipo de contribuyente<span class="required"> * </span></label>
                            <select id="formulario_personas_idTipoContribuyente" 
                                    <?php if(form_error('formulario_personas[ID_TIPO_CONTRIBUYENTE]') != '' ){?>
                                        aria-describedby="formulario_personas_idTipoContribuyente-error"
                                   <?php } ?>
                                    name="formulario_personas[ID_TIPO_CONTRIBUYENTE]" class="form-control">            
                                <?php foreach ($tiposContribuyentes as $tipoContribuyente) { ?>
                                <option value="<?php echo $tipoContribuyente['ID_TIPO_CONTRIBUYENTE']; ?>" <?php   if(isset($ID_TIPO_CONTRIBUYENTE) && $tipoContribuyente['ID_TIPO_CONTRIBUYENTE'] == $ID_TIPO_CONTRIBUYENTE ) { ?> selected="selected" <?php }?>>
                                       <?php echo $tipoContribuyente['TIPO_CONTRIBUYENTE']; ?>
                                   </option>    
                                 <?php } ?>
                            </select>
                            <?php if(form_error('formulario_personas[ID_TIPO_CONTRIBUYENTE]') != '' ){?>
                                        <span id="formulario_personas_idTipoContribuyente-error" class="help-block">
                                            <?= form_error('formulario_personas[ID_TIPO_CONTRIBUYENTE]') ?>
                                        </span>
                                    <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">                        
                                <div class="form-group form-group-sm">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="formulario_personas_es_contribuyente_especial" name="formulario_personas[ES_CONTRIBUYENTE_ESPECIAL]" 
                                                   <?php if(isset($ES_CONTRIBUYENTE_ESPECIAL) && $ES_CONTRIBUYENTE_ESPECIAL == TRUE) { ?> checked <?php } ?>                                   
                                                   data-title="Tiene RUC" value="1" />Contribuyente especial
                                        </label>
                                    </div>
                                </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group form-group-sm <?php if(form_error('formulario_personas[TIPO_DOCUMENTO]') != '' ){ echo "has-error";}?>">                
                            <label class="control-label required" for="formulario_personas_idTipoDocumento">Tipo de documento<span class="required"> * </span></label>
                            <select id="formulario_personas_idTipoDocumento" 
                                    <?php if(form_error('formulario_personas[TIPO_DOCUMENTO]') != '' ){?>
                                    aria-describedby="formulario_personas_idTipoDocumento-error"
                                   <?php } ?>
                                    name="formulario_personas[TIPO_DOCUMENTO]" class="form-control">     
                                <?php foreach ($tiposDocumentos as $tipoDocumento) {?>
                                <option value="<?php echo $tipoDocumento['TIPO_DOCUMENTO']; ?>" <?php if(isset($TIPO_DOCUMENTO) && $tipoDocumento['TIPO_DOCUMENTO'] == $TIPO_DOCUMENTO ) {?> selected="selected" <?php }?>>
                                       <?php echo $tipoDocumento['NOMBRE_TIPO_DOCUMENTO']; ?>
                                   </option>  
                                <?php } ?>
                                
                            </select>
                            <?php if(form_error('formulario_personas[TIPO_DOCUMENTO]') != '' ){?>
                                        <span id="formulario_personas_idTipoDocumento-error" class="help-block">
                                            <?= form_error('formulario_personas[TIPO_DOCUMENTO]') ?>
                                        </span>
                                    <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group form-group-sm <?php if(form_error('formulario_personas[NRO_DOCUMENTO]') != '' ){ echo "has-error";}?>">                
                            <label class="control-label required" for="formulario_personas_nroDocumento">Número de documento<span class="required"> * </span></label>
                            <input type="text" id="formulario_personas_nroDocumento" name="formulario_personas[NRO_DOCUMENTO]" 
                                   <?php if(form_error('formulario_personas[NRO_DOCUMENTO]') != '' ){?>
                                    aria-describedby="formulario_personas_nroDocumento-error"
                                   <?php } ?>
                                   required="required" class="form-control" 
                                   <?php if(isset($NRO_DOCUMENTO) && $NRO_DOCUMENTO != NULL) { ?> value="<?= $NRO_DOCUMENTO ?>" <?php } ?>
                                   />
                                   <?php if(form_error('formulario_personas[NRO_DOCUMENTO]') != '' ){?>
                                        <span id="formulario_personas_nroDocumento-error" class="help-block">
                                            <?= form_error('formulario_personas[NRO_DOCUMENTO]') ?>
                                        </span>
                                    <?php } ?>
                        </div>
                    </div>
                </div>  
                
                              <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="form-group form-group-sm">
                                    <div class="checkbox"><label>
                                            <input type="checkbox" id="formulario_personas_tieneRuc" name="formulario_personas[TIENE_RUC]" 
                                                   <?php if(isset($TIENE_RUC) && $TIENE_RUC == TRUE) { ?> checked <?php } ?>                                   
                                                   data-title="Tiene RUC" value="1" />¿Tiene RUC?</label>
                                    </div>
                                </div>
                    </div>
                            <div id="nroRuc" class="col-md-3 col-sm-3 col-xs-12">
                                <div class="form-group form-group-sm <?php if(form_error('formulario_personas[NUMERO_RUC]') != '' ){ echo "has-error";}?>">                
                                    <label class="control-label required" for="formulario_personas_nroRuc">Número de RUC<span class="required"> * </span></label>
                                    <input type="text" id="formulario_personas_nroRuc" name="formulario_personas[NUMERO_RUC]" 
                                           required="required" maxlength="13" minlength="13" digits="digits" ruc="true" class="form-control" 
                                           <?php if(isset($NUMERO_RUC) && $NUMERO_RUC != NULL) { ?> value="<?= $NUMERO_RUC ?>" <?php } ?>
                                           <?php if(form_error('formulario_personas[NUMERO_RUC]') != '' ){?>
                                            aria-describedby="formulario_personas_nroRuc-error"
                                           <?php } ?>
                                           />
                                            <?php if(form_error('formulario_personas[NUMERO_RUC]') != '' ){?>
                                               <span id="formulario_personas_nroRuc-error" class="help-block">
                                                   <?= form_error('formulario_personas[NUMERO_RUC]') ?>
                                               </span>
                                           <?php } ?>
                                </div>
                            </div>
                            <div id="nombreComercial" class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group form-group-sm">                
                                    <label class="control-label" for="formulario_personas_nombreComercial">Nombre comercial</label>
                                    <input type="text" id="formulario_personas_nombreComercial" name="formulario_personas[NOMBRE_COMERCIAL]"
                                           <?php if(isset($NOMBRE_COMERCIAL) && $NOMBRE_COMERCIAL != NULL) { ?> value="<?= $NOMBRE_COMERCIAL ?>" <?php } ?> 
                                           maxlength="100" class="form-control" /></div>
                            </div>
                            
                </div> 
<!-- Esta informacion no se esta usando -->
                
                <div class="row" style="display: none">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group form-group-sm <?php if(form_error('formulario_personas[ID_NACIONALIDAD]') != '' ){ echo "has-error";}?>">                
                            <label class="control-label required" for="formulario_personas_idNacionalidad">Nacionalidad<span class="required"> * </span></label>
                            <select id="formulario_personas_idNacionalidad" 
                                    <?php if(form_error('formulario_personas[ID_NACIONALIDAD]') != '' ){?>
                                    aria-describedby="formulario_personas_idNacionalidad-error"
                                   <?php } ?>
                                    name="formulario_personas[ID_NACIONALIDAD]" class="form-control" required="required">            
                                <?php foreach ($nacionalidades as $nacionalidad) { ?>
                                <option value="<?php echo $nacionalidad['ID_NACIONALIDAD']; ?>" <?php if (isset($ID_NACIONALIDAD) && $nacionalidad['ID_NACIONALIDAD'] == $ID_NACIONALIDAD) { ?> selected="selected" <?php } ?>>
                                        <?php echo $nacionalidad['NACIONALIDAD']; ?>
                                    </option> 
                                <?php } ?>
                            </select>
                            <?php if(form_error('formulario_personas[ID_NACIONALIDAD]') != '' ){?>
                                        <span id="formulario_personas_idNacionalidad-error" class="help-block">
                                            <?= form_error('formulario_personas[ID_NACIONALIDAD]') ?>
                                        </span>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group form-group-sm <?php if(form_error('formulario_personas[FECHA_NACIMIENTO]') != '' ){ echo "has-error";}?>">                
                            <label class="control-label" for="formulario_personas_fechaNacimiento">Fecha de nacimiento<span class="required"> * </span></label>
                            <div class='input-group'>
                                <span class="input-group-addon left">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                                <input type="text" id="formulario_personas_fechaNacimiento" name="formulario_personas[FECHA_NACIMIENTO]" 
                                       <?php if (isset($FECHA_NACIMIENTO) && $FECHA_NACIMIENTO != NULL) { ?> value="<?= $FECHA_NACIMIENTO ?>" <?php } ?>
                                       placeholder="yyyy-mm-dd" class="form-control" 
                                       <?php if(form_error('formulario_personas[FECHA_NACIMIENTO]') != '' ){?>
                                       aria-describedby="formulario_personas_fechaNacimiento-error"
                                       <?php } ?>
                                       />
                                
                            </div>
                            <?php if(form_error('formulario_personas[FECHA_NACIMIENTO]') != '' ){?>
                                        <span id="formulario_personas_fechaNacimiento-error" class="help-block">
                                            <?= form_error('formulario_personas[FECHA_NACIMIENTO]') ?>
                                        </span>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group form-group-sm <?php if(form_error('formulario_personas[ID_PAIS_NACIMIENTO]') != '' ){ echo "has-error";}?>">                
                            <label class="control-label required" for="formulario_personas_idPaisNacimiento">País de Nacimiento<span class="required"> * </span></label>
                            <select id="formulario_personas_idPaisNacimiento" 
                                    <?php if(form_error('formulario_personas[ID_PAIS_NACIMIENTO]') != '' ){?>
                                    aria-describedby="formulario_personas_idPaisNacimiento-error"
                                   <?php } ?>
                                    name="formulario_personas[ID_PAIS_NACIMIENTO]" 
                                    required="required" class="form-control">
                                <option value="">SELECCIONE UN PAÍS</option>  
                                <?php foreach ($paises as $pais) { ?>
                                <option value="<?php echo $pais['ID_PAIS']; ?>" <?php if (isset($ID_PAIS_NACIMIENTO) && $pais['ID_PAIS'] == $ID_PAIS_NACIMIENTO) { ?> selected="selected" <?php } ?>>
                                        <?php echo $pais['PAIS']; ?>
                                    </option> 
                                <?php } ?>
                            </select>
                            <?php if(form_error('formulario_personas[ID_PAIS_NACIMIENTO]') != '' ){?>
                                        <span id="formulario_personas_idPaisNacimiento-error" class="help-block">
                                            <?= form_error('formulario_personas[ID_PAIS_NACIMIENTO]') ?>
                                        </span>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group form-group-sm <?php if(form_error('formulario_personas[ID_PROVINCIA_NACIMIENTO]') != '' ){ echo "has-error";}?>">
                            <div>                 
                                <label class="control-label required" for="formulario_personas_idProvinciaNacimiento">Provincia de nacimiento<span class="required"> * </span></label>
                                <span class="load"> </span>
                            </div>
                            <select id="formulario_personas_idProvinciaNacimiento"
                                    <?php if(form_error('formulario_personas[ID_PROVINCIA_NACIMIENTO]') != '' ){?>
                                    aria-describedby="formulario_personas_idProvinciaNacimiento-error"
                                   <?php } ?>
                                    name="formulario_personas[ID_PROVINCIA_NACIMIENTO]" required="required" class="form-control">
                                <option value="">SELECCIONE UNA PROVINCIA</option>        
                                <?php foreach ($provinciasNacimiento as $provincia) { ?>
                                <option value="<?php echo $provincia['ID_PROVINCIA']; ?>" <?php if (isset($ID_PROVINCIA_NACIMIENTO) && $provincia['ID_PROVINCIA'] == $ID_PROVINCIA_NACIMIENTO) { ?> selected="selected" <?php } ?>>
                                        <?php echo $provincia['PROVINCIA']; ?>
                                    </option> 
                                <?php } ?>
                            </select>
                            <?php if(form_error('formulario_personas[ID_PROVINCIA_NACIMIENTO]') != '' ){?>
                                        <span id="formulario_personas_idProvinciaNacimiento-error" class="help-block">
                                            <?= form_error('formulario_personas[ID_PROVINCIA_NACIMIENTO]') ?>
                                        </span>
                            <?php } ?>
                        </div>
                    </div>
                </div>   
                <div class="row" style="display: none">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm  <?php if(form_error('formulario_personas[ID_ESTADO_CIVIL]') != '' ){ echo "has-error";}?>">                
                            <label class="control-label required" 
                                   <?php if(form_error('formulario_personas[ID_ESTADO_CIVIL]') != '' ){?>
                                    aria-describedby="formulario_personas_idEstadoCivil-error"
                                   <?php } ?>
                                   for="formulario_personas_idEstadoCivil">Estado civil<span class="required"> * </span></label>
                            <select id="formulario_personas_idEstadoCivil" name="formulario_personas[ID_ESTADO_CIVIL]" class="form-control">            
                                <?php foreach ($estadosCiviles as $estadoCivil) { ?>
                                <option value="<?php echo $estadoCivil['ID_ESTADO_CIVIL']; ?>" <?php if (isset($ID_ESTADO_CIVIL) && $estadoCivil['ID_ESTADO_CIVIL'] == $ID_ESTADO_CIVIL) { ?> selected="selected" <?php } ?>>
                                        <?php echo $estadoCivil['ESTADO_CIVIL']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                            <?php if(form_error('formulario_personas[ID_ESTADO_CIVIL]') != '' ){?>
                                        <span id="formulario_personas_idEstadoCivil-error" class="help-block">
                                            <?= form_error('formulario_personas[ID_ESTADO_CIVIL]') ?>
                                        </span>
                            <?php } ?>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm <?php if(form_error('formulario_personas[GENERO]') != '' ){ echo "has-error";}?>">                
                            <label class="control-label required" for="formulario_personas_idGenero">Género<span class="required"> * </span></label>
                            <select id="formulario_personas_idGenero" 
                                    <?php if(form_error('formulario_personas[GENERO]') != '' ){?>
                                    aria-describedby="formulario_personas_idGenero-error"
                                   <?php } ?>
                                    name="formulario_personas[GENERO]" required="required" class="form-control">
                                <option value="" selected="selected">SELECCIONE UN GÉNERO</option>            
                                <?php foreach ($generos as $genero) { ?>
                                <option value="<?php echo $genero['ABREVIATURA_GENERO']; ?>" <?php if (isset($GENERO) && $genero['ABREVIATURA_GENERO'] == $GENERO) { ?> selected="selected" <?php } ?>>
                                        <?php echo $genero['GENERO']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                            <?php if(form_error('formulario_personas[GENERO]') != '' ){?>
                                        <span id="formulario_personas_idGenero-error" class="help-block">
                                            <?= form_error('formulario_personas[GENERO]') ?>
                                        </span>
                                    <?php } ?>
                        </div>
                    </div>
                </div> 

<!-- Fin de informacion que no se usa -->
            </div>
            <div class="tab-pane" id="tab2">
                <h5 class="form-section">Datos de contacto personales</h5>
                <div class="row">


                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_celular">Celular</label>
                            <div class="input-group">
                                <span class="input-group-addon left"><span class="glyphicon glyphicon-phone"></span></span>
                                <input type="text" id="formulario_personas_celular" name="formulario_personas[CONTACTO_DOMICILIO][CELULAR]" 
                                       <?php if (isset($CELULAR_DOMICILIO) && $CELULAR_DOMICILIO != NULL) { ?> value="<?= $CELULAR_DOMICILIO ?>" <?php } ?> 
                                       pareja="#formulario_personas_telefono" maxlength="12" minlength="12" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm <?php if(form_error('formulario_personas[CONTACTO_DOMICILIO][TELEFONO]') != '' ){ echo "has-error";}?>">                
                            <label class="control-label" for="formulario_personas_telefono">Teléfono</label>
                            <div class="input-group">
                                    <span class="input-group-addon left"><span class="glyphicon glyphicon-phone-alt"></span></span>
                                    <input type="text" id="formulario_personas_telefono" name="formulario_personas[CONTACTO_DOMICILIO][TELEFONO]" 
                                           <?php if(isset($TELEFONO_DOMICILIO) && $TELEFONO_DOMICILIO != NULL) { ?> value="<?= $TELEFONO_DOMICILIO ?>" <?php } ?> 
                                           pareja="#formulario_personas_celular" minlength="11" maxlength="11" class="form-control" 
                                            <?php if(form_error('formulario_personas[CONTACTO_DOMICILIO][TELEFONO]') != '' ){?>
                                            aria-describedby="formulario_personas_telefono-error" aria-required="true"
                                           <?php } ?>
                                           />
                            </div>
                             <?php if(form_error('formulario_personas[CONTACTO_DOMICILIO][TELEFONO]') != '' ){?>
                                        <span id="formulario_personas_telefono-error" class="help-block">
                                            <?= form_error('formulario_personas[CONTACTO_DOMICILIO][TELEFONO]') ?>
                                        </span>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group form-group-sm <?php if(form_error('formulario_personas[CONTACTO_DOMICILIO][CORREO_ELECTRONICO]') != '' ){ echo "has-error";}?>">                
                            <label class="control-label" for="formulario_personas_correoElectronico">Correo electrónico<span >  </span></label>
                            <div class="input-group">
                                <span class="input-group-addon left"><span class="glyphicon glyphicon-envelope"></span></span>
                                <input type="email" id="formulario_personas_correoElectronico" name="formulario_personas[CONTACTO_DOMICILIO][CORREO_ELECTRONICO]" 
                                       <?php if(isset($CORREO_ELECTRONICO_DOMICILIO) && $CORREO_ELECTRONICO_DOMICILIO != NULL) { ?> value="<?= $CORREO_ELECTRONICO_DOMICILIO ?>" <?php } ?> 
                                       maxlength="80" email="email" class="form-control" 
                                       <?php if(form_error('formulario_personas[CONTACTO_DOMICILIO][CORREO_ELECTRONICO]') != '' ){?>
                                        aria-describedby="formulario_personas_correoElectronico-error" aria-required="true"
                                       <?php } ?>
                                    />
                            </div>
                            <?php if(form_error('formulario_personas[CONTACTO_DOMICILIO][CORREO_ELECTRONICO]') != '' ){?>
                                        <span id="formulario_personas_correoElectronico-error" class="help-block">
                                            <?= form_error('formulario_personas[CONTACTO_DOMICILIO][CORREO_ELECTRONICO]') ?>
                                        </span>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm <?php if(form_error('formulario_personas[CONTACTO_DOMICILIO][ID_PAIS]') != '' ){ echo "has-error";}?>">                
                            <label class="control-label required" for="formulario_personas_idPais">País<span class="required"> * </span></label>
                            <select id="formulario_personas_idPais" 
                                    <?php if(form_error('formulario_personas[CONTACTO_DOMICILIO][ID_PAIS]') != '' ){?>
                                    aria-describedby="formulario_personas_idPais-error"
                                   <?php } ?>
                                    name="formulario_personas[CONTACTO_DOMICILIO][ID_PAIS]" required="required" class="form-control">
                                <option value="">SELECCIONE UN PAÍS</option> 
                                <?php foreach ($paises as $pais) { ?>
                                <option value="<?php echo $pais['ID_PAIS']; ?>" <?php if (isset($ID_PAIS_DOMICILIO) && $pais['ID_PAIS'] == $ID_PAIS_DOMICILIO) { ?> selected="selected" <?php } ?>>
                                        <?php echo $pais['PAIS']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                            <?php if(form_error('formulario_personas[CONTACTO_DOMICILIO][ID_PAIS]') != '' ){?>
                                        <span id="formulario_personas_idPais-error" class="help-block">
                                            <?= form_error('formulario_personas[CONTACTO_DOMICILIO][ID_PAIS]') ?>
                                        </span>
                                    <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm <?php if(form_error('formulario_personas[CONTACTO_DOMICILIO][ID_PROVINCIA]') != '' ){ echo "has-error";}?>">
                            <div>                 
                                <label class="control-label required" for="formulario_personas_idProvincia">Provincia<span class="required"> * </span></label>
                                <span class="load"></span>
                            </div>
                            <select id="formulario_personas_idProvincia" 
                                    <?php if(form_error('formulario_personas[CONTACTO_DOMICILIO][ID_PROVINCIA]') != '' ){?>
                                    aria-describedby="formulario_personas_idProvincia-error"
                                   <?php } ?>
                                    name="formulario_personas[CONTACTO_DOMICILIO][ID_PROVINCIA]" required="required" class="form-control">
                                <option value="">SELECCIONE UNA PROVINCIA</option>     
                                <?php foreach ($provinciasDomicilio as $provincia) { ?>
                                <option value="<?php echo $provincia['ID_PROVINCIA']; ?>" <?php if (isset($ID_PROVINCIA_DOMICILIO) && $provincia['ID_PROVINCIA'] == $ID_PROVINCIA_DOMICILIO) { ?> selected="selected" <?php } ?>>
                                        <?php echo $provincia['PROVINCIA']; ?>
                                    </option> 
                                <?php } ?>
                            </select>
                            <?php if (form_error('formulario_personas[CONTACTO_DOMICILIO][ID_PROVINCIA]') != '') { ?>
                                <span id="formulario_personas_idProvincia-error" class="help-block">
                                    <?= form_error('formulario_personas[CONTACTO_DOMICILIO][ID_PROVINCIA]') ?>
                                </span>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm <?php if(form_error('formulario_personas[CONTACTO_DOMICILIO][ID_CANTON]') != '' ){ echo "has-error";}?>">
                            <div>                 
                                <label class="control-label required" for="formulario_personas_idCanton">Cantón<span class="required"> * </span></label>
                                <span class="load"></span>
                            </div>
                            <select id="formulario_personas_idCanton" 
                                    <?php if(form_error('formulario_personas[CONTACTO_DOMICILIO][ID_CANTON]') != '' ){?>
                                    aria-describedby="formulario_personas_idCanton-error"
                                   <?php } ?>
                                    name="formulario_personas[CONTACTO_DOMICILIO][ID_CANTON]" class="form-control" required="required">
                                <option value="">SELECCIONE UN CANTON</option>    
                                <?php foreach ($cantonesDomicilio as $canton) { ?>
                                <option value="<?php echo $canton['ID_CANTON']; ?>" <?php if (isset($ID_CANTON_DOMICILIO) && $canton['ID_CANTON'] == $ID_CANTON_DOMICILIO) { ?> selected="selected" <?php } ?>>
                                        <?php echo $canton['CANTON']; ?>
                                    </option> 
                                <?php } ?>
                            </select>
                            <?php if(form_error('formulario_personas[CONTACTO_DOMICILIO][ID_CANTON]') != '' ){?>
                                        <span id="formulario_personas_idCanton-error" class="help-block">
                                            <?= form_error('formulario_personas[CONTACTO_DOMICILIO][ID_CANTON]') ?>
                                        </span>
                                    <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">
                            <div>
                                <label class="control-label" for="formulario_personas_idParroquia">Parroquia de domicilio</label>
                                <span class="load"></span>
                            </div>
                            <select id="formulario_personas_idParroquia" name="formulario_personas[CONTACTO_DOMICILIO][ID_PARROQUIA]" class="form-control">
                                <option value="">SELECCIONE UNA PARROQUIA</option>
                                <?php foreach ($parroquiasDomicilio as $parroquia) { ?>
                                    <option value="<?php echo $parroquia['ID_PARROQUIA']; ?>" <?php if ($parroquia['ID_PARROQUIA'] == $ID_PARROQUIA_DOMICILIO) { ?> selected="selected" <?php } ?>>
                                        <?php echo $parroquia['PARROQUIA']; ?>
                                    </option> 
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label required" for="formulario_personas_direccionCallePrincipal">Calle Principal<span class="required"> * </span></label>
                            <input type="text" id="formulario_personas_direccionCallePrincipal" name="formulario_personas[CONTACTO_DOMICILIO][DIRECCION_CALLE_PRINCIPAL]"
                                   <?php if(isset($DIRECCION_CALLE_PRINCIPAL_DOMICILIO) && $DIRECCION_CALLE_PRINCIPAL_DOMICILIO != NULL) { ?> value="<?= $DIRECCION_CALLE_PRINCIPAL_DOMICILIO ?>" <?php } ?>
                                   required="required" maxlength="50" class="form-control" /></div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_direccionNumero">Nro.</label>
                            <input type="text" id="formulario_personas_direccionNumero" name="formulario_personas[CONTACTO_DOMICILIO][DIRECCION_NUMERO]" 
                                   <?php if(isset($DIRECCION_NUMERO_DOMICILIO) && $DIRECCION_NUMERO_DOMICILIO != NULL) { ?> value="<?= $DIRECCION_NUMERO_DOMICILIO ?>" <?php } ?>                                   
                                   maxlength="20" class="form-control" /></div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_direccionCalleSecundaria1">Calle Secundaria 1</label>
                            <input type="text" id="formulario_personas_direccionCalleSecundaria1" name="formulario_personas[CONTACTO_DOMICILIO][DIRECCION_CALLE_SECUNDARIA1]" 
                                   <?php if(isset($DIRECCION_CALLE_SECUNDARIA1_DOMICILIO) && $DIRECCION_CALLE_SECUNDARIA1_DOMICILIO != NULL) { ?> value="<?= $DIRECCION_CALLE_SECUNDARIA1_DOMICILIO ?>" <?php } ?>
                                   maxlength="100" class="form-control" /></div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_direccionCalleSecundaria2">Calle Secundaria 2</label>
                            <input type="text" id="formulario_personas_direccionCalleSecundaria2" name="formulario_personas[CONTACTO_DOMICILIO][DIRECCION_CALLE_SECUNDARIA2]" 
                                   <?php if(isset($DIRECCION_CALLE_SECUNDARIA2_DOMICILIO) && $DIRECCION_CALLE_SECUNDARIA2_DOMICILIO != NULL) { ?> value="<?= $DIRECCION_CALLE_SECUNDARIA2_DOMICILIO ?>" <?php } ?>
                                   maxlength="100" class="form-control" /></div>  
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

            </div>
            <div class="tab-pane" id="tab5">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <h4>Información personal</h4>
                        <p>
                            <span class="confirmation-tab-label">Nombre completo:</span>
                            <span class="label label-warning">
                                <span data-display="formulario_personas[PRIMER_NOMBRE]" class="confirmation-tab-value"></span>
                                <span data-display="formulario_personas[SEGUNDO_NOMBRE]" class="confirmation-tab-value"></span>
                                <span data-display="formulario_personas[APELLIDO_PATERNO]" class="confirmation-tab-value"></span>
                                <span data-display="formulario_personas[APELLIDO_MATERNO]" class="confirmation-tab-value"></span>
                            </span>

                        </p>
                        <p>
                            <span class="confirmation-tab-label confirmation-tab-value" data-display="formulario_personas[TIPO_DOCUMENTO]"></span>:
                            <span data-display="formulario_personas[NRO_DOCUMENTO]" class="confirmation-tab-value"></span>
                        </p>
                        <p>
                            <span class="confirmation-tab-label">Tipo de contribuyente:</span>
                            <span data-display="formulario_personas[ID_TIPO_CONTRIBUYENTE]" class="confirmation-tab-value"></span>
                        </p>
                        
                        <p>
                            <span class="confirmation-tab-label">Nacionalidad:</span>
                            <span data-display="formulario_personas[ID_NACIONALIDAD]" class="confirmation-tab-value"></span>
                        </p>
<!--                        <p>
                            <span class="confirmation-tab-label">País de Nacimiento:</span>
                            <span data-display="formulario_personas[ID_PAIS_NACIMIENTO]" class="confirmation-tab-value"></span>
                        </p>-->
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <h4>Información de contacto</h4>
                        <p>
                            <span class="confirmation-tab-label">Celular:</span>
                            <span data-display="formulario_personas[CONTACTO_DOMICILIO][CELULAR]" class="confirmation-tab-value"></span>
                        </p> 
                        <p>
                            <span class="confirmation-tab-label">Teléfono:</span>
                            <span data-display="formulario_personas[CONTACTO_DOMICILIO][TELEFONO]" class="confirmation-tab-value"></span>
                        </p> 
                        <p>
                            <span class="confirmation-tab-label">Correo electrónico:</span>
                            <span style='text-transform: lowercase' data-display="formulario_personas[CONTACTO_DOMICILIO][CORREO_ELECTRONICO]" class="confirmation-tab-value"></span>
                        </p> 
                        <p>
                            <span class="confirmation-tab-label">País de domicilio:</span>
                            <span data-display="formulario_personas[CONTACTO_DOMICILIO][ID_PAIS]" class="confirmation-tab-value"></span>
                        </p> 
                        <p>
                            <span class="confirmation-tab-label">Provincia de domicilio:</span>
                            <span data-display="formulario_personas[CONTACTO_DOMICILIO][ID_PROVINCIA]" class="confirmation-tab-value"></span>
                        </p> 
                        <p>
                            <span class="confirmation-tab-label">Calle Principal:</span>
                            <span data-display="formulario_personas[CONTACTO_DOMICILIO][DIRECCION_CALLE_PRINCIPAL]" class="confirmation-tab-value"></span>
                        </p> 
                        <p>
                            <span class="confirmation-tab-label">Nro:</span>
                            <span data-display="formulario_personas[CONTACTO_DOMICILIO][DIRECCION_NUMERO]" class="confirmation-tab-value"></span>
                        </p> 
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
            <div class="panel-footer">
                <div class="pull-right" >
                    <a type='button' style="min-width: 80px;" class='btn btn-default btn-sm' href="<?php echo base_url(); ?>index.php/index/index">SALIR</a>
                     <input type='button' class='btn button-next btn-primary btn-sm' name='next' value='Siguiente' />
                    <button type="submit" class="formulario_personas_guardar btn-success btn btn-sm">GUARDAR</button>
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
<script type="text/javascript">
    $(function (){
        var esModoEdicion = <?php if(isset($ID_CLIENTE) && $ID_CLIENTE != NULL){ echo 1;} else {echo 0;}?>;
                
        $('#formulario_personas_es_contribuyente_especial').click(function() {
            //Si no es contribuyente obligado a llevar contabilidad no lo puede dejar marcar el 
            //check de especial
            if($('#formulario_personas_idTipoContribuyente').val() != 2)
            {
                 return false;
            }
            else
            {
                return true;
            }
           
        });
        
        $('#formulario_personas_idTipoContribuyente').change(function(){
            if( $('#formulario_personas_idTipoContribuyente').val() != 2 ){
                $('#formulario_personas_es_contribuyente_especial').prop('checked', false);
            }
        });
        
        
        /*TIENE RUC*/
            function mostrarOcultarNroRuc() {
                if ($("#formulario_personas_tieneRuc").is(":checked"))
                {
                    $("#nroRuc").css("display", "block");
                    $("#nombreComercial").css("display", "block");
                }
                else
                {
                    $("#nroRuc").css("display", "none");
                    $("#nombreComercial").css("display", "none");
                    $('#formulario_personas_nroRuc').prop('value',null);
                    $('#formulario_personas_nombreComercial').prop('value',null);
                }
            }
            
             $("#formulario_personas_tieneRuc").change(function () {
                mostrarOcultarNroRuc();
            });
            
            mostrarOcultarNroRuc();

        /*--------FUNCION PARA COMPROBAR SI EL TAB ACTIVO CUMPLE CON LAS VALIDACIONES ASOCIADAS------*/
        function chequearValidacion() {
            var form = $("form[name=formulario_personas]");
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
                    
                    $('.formulario_personas_guardar').css('display', 'inline-block');
                    $('.button-previous').css('display', 'inline-block');
                    $('.button-next').css('display', 'none');
                    displayConfirm();
                }
                else if ($current == 1)
                {
                    if(!esModoEdicion)
                    {
                        $('.formulario_personas_guardar').css('display', 'none');
                    }
                    $('.button-previous').css('display', 'none');
                    $('.button-next').css('display', 'inline-block');
                }
                else {
                    if(!esModoEdicion)
                    {
                        $('.formulario_personas_guardar').css('display', 'none');
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
            $('.formulario_personas_guardar').css('display', 'none');
        }
        else
        {
            $('.formulario_personas_guardar').css('display', 'inline-block');
        }
        

        /*Esta funcion se utiliza para llenar las opciones de un select que depende del valor seleccionado en otro */
        function actualizarCampoDependientePorCampoTarget(idCampoDependiente, campoTarget, url, textEmptyValueCampoDependiente, arrayCamposAResetear) {
            var data = {
                id: campoTarget.val()
            };
            $('label[for=' + idCampoDependiente + '] + span.load').isLoading({
                text: " ",
                position: "inside"

            });
            $('#' + idCampoDependiente).html(textEmptyValueCampoDependiente);
            for (var index = 0; index < arrayCamposAResetear.length; index++) {
                $('#' + arrayCamposAResetear[index][0]).html(arrayCamposAResetear[index][1]);
            }

            $.ajax({
                type: 'post',
                url: url,
                data: data,
                success: function (data) {
                    
                    var result = JSON.parse(data);
                    $.each(result, function(i, val){
                       $('#' + idCampoDependiente).append('<option value="' + val.id + '">' + val.text + '</option>');  
                    });
                    $('label[for=' + idCampoDependiente + '] + span.load').isLoading("hide");
                    
                    
                   
                }
            });
        }

        /*---------------ACTUALIZAR PROVINCIA DE NACIMIENTO POR PAIS DE NACIMIENTO--------------------*/

        $("#formulario_personas_idPaisNacimiento").change(function () {

            var idProvincia = 'formulario_personas_idProvinciaNacimiento';
            var url = '<?php echo base_url(); ?>index.php/clientes/clientes/buscarProvinciaXIdPais';
            var textEmptyValueCampoDependiente = '<option value="">SELECCIONE UNA PROVINCIA</option>';
            var arrayCamposAResetear = new Array();
            actualizarCampoDependientePorCampoTarget(idProvincia, $(this), url, textEmptyValueCampoDependiente, arrayCamposAResetear);
        });
        /*---------------------------------ACTUALIZAR PROVINCIA DE DOMICILIO por PAIS DE DOMICILIO--------------------*/


        $("#formulario_personas_idPais").change(function () {

            var idProvincia = 'formulario_personas_idProvincia';
            var url = '<?php echo base_url(); ?>index.php/clientes/clientes/buscarProvinciaXIdPais';
            var textEmptyValueCampoDependiente = '<option value="">SELECCIONE UNA PROVINCIA</option>';
            var arrayCamposAResetear = new Array();
            arrayCamposAResetear[0] = ["formulario_personas_idCanton", '<option value="">SELECCIONE UN CANTON</option>'];
            arrayCamposAResetear[1] = ["formulario_personas_idParroquia", '<option value="">SELECCIONE UNA PARROQUIA</option>'];
            actualizarCampoDependientePorCampoTarget(idProvincia, $(this), url, textEmptyValueCampoDependiente, arrayCamposAResetear);
        });
        /*---------------------------------ACTUALIZAR CANTON DE DOMICILIO por PROVINCIA DE DOMICILIO--------------------*/


        $("#formulario_personas_idProvincia").change(function () {

            var idCanton = 'formulario_personas_idCanton';
            var url = '<?php echo base_url(); ?>index.php/clientes/clientes/buscarCantonesXIdProvincia';
            var textEmptyValueCampoDependiente = '<option value="">SELECCIONE UN CANTON</option>';
            var arrayCamposAResetear = new Array();
            arrayCamposAResetear[0] = ["formulario_personas_idParroquia", '<option value="">SELECCIONE UNA PARROQUIA</option>'];
            actualizarCampoDependientePorCampoTarget(idCanton, $(this), url, textEmptyValueCampoDependiente, arrayCamposAResetear);
        });
        /*---------------------------------ACTUALIZAR PARROQUIA DE DOMICILIO por CANTON DE DOMICILIO--------------------*/


        $("#formulario_personas_idCanton").change(function () {

            var idParroquia = 'formulario_personas_idParroquia';
            var url = '<?php echo base_url(); ?>index.php/clientes/clientes/buscarParroquiasXIdCanton';
            var textEmptyValueCampoDependiente = '<option value="">SELECCIONE UNA PARROQUIA</option>';
            var arrayCamposAResetear = new Array();
            actualizarCampoDependientePorCampoTarget(idParroquia, $(this), url, textEmptyValueCampoDependiente, arrayCamposAResetear);
        });
        
       
       function convertirTextosAMayusculas(){
            $("form[name=formulario_personas] input").each(function () {

               if ( $(this).is(":text") || $(this).is("textarea")  ) {
                    $(this).val($(this).val().toUpperCase());
                }
                if($(this).attr('type') === 'email' )
                {
                     $(this).val($(this).val().toLowerCase());
                }
           });
                                      
            $("form[name=formulario_personas] textarea").each(function () {
                     $(this).val($(this).val().toUpperCase());
           });

       }
        
        /*----------------FUNCION PARA VALIDAR CAMPOS DEL FORMULARIO DEL TAB ACTIVO Y ENVIARLO----------------------*/

        function chequearValidacionYEnviarFormulario() {

            var form = $("form[name=formulario_personas]");
            form.validate();
            if (form.valid() == true) {
                convertirTextosAMayusculas();
                $('.formulario_personas_guardar').css('display', 'none');
                $('.button-previous').css('display', 'none');
                $('.button-next').css('display', 'none');
                form.submit();
            }

        }
        $(".formulario_personas_guardar").click(chequearValidacionYEnviarFormulario);
        /**************************/



        /*-----------------------INICIALIZACION DE LAS MASCARAS------------------*/


        $('input[id*=telefono]').each(function () {
            $(this).mask("00-000-0000", {placeholder: "00-000-0000"});
        });
        $('input[id*=celular]').each(function () {
            $(this).mask('00-0000-0000', {placeholder: "00-0000-0000"});
        });
        $('#formulario_personas_fechaNacimiento').mask('0000-00-00');
        $('#formulario_personas_fechaNacimiento').attr('required', true);
        
        /*----------------------INICIALIZACION DEL DATEPICKER--------------------*/
        $('#formulario_personas_fechaNacimiento').datepicker({format: "yyyy-mm-dd",
            language: 'es',
            autoclose: true,
            forceParse: true,
            enableOnReadonly: true,
            endDate: 'moment'
        });
//        $('#formulario_personas_fechaNacimiento').keypress(function (){
//        return false;
//    });
        /*EVENTOS RELACIONADOS CON LA VALIDACION DEL TIPO DE DOCUMENTO*/
        function asignarValidacionANroDocumento(target) {
            /*RUC*/
            if (target.val() == 'RUC')
            {
                $('#formulario_personas_nroDocumento').removeAttr('cedula');
                $('#formulario_personas_nroDocumento').removeAttr('pasaporte');
                $('#formulario_personas_nroDocumento').attr('digits', true);
                $('#formulario_personas_nroDocumento').attr('maxlength', 13);
                $('#formulario_personas_nroDocumento').attr('minlength', 13);
                $('#formulario_personas_nroDocumento').attr('ruc', true);
            }
            /*REFUGIADO*/
            if (target.val() == 'R')
            {
                $('#formulario_personas_nroDocumento').removeAttr('cedula');
                $('#formulario_personas_nroDocumento').removeAttr('ruc');
                $('#formulario_personas_nroDocumento').removeAttr('pasaporte');
                $('#formulario_personas_nroDocumento').removeAttr('digits');
                $('#formulario_personas_nroDocumento').removeAttr('minlength');
                $('#formulario_personas_nroDocumento').attr('maxlength', 16);
            }
            /*PASAPORTE*/
            if (target.val() == 'P')
            {
                $('#formulario_personas_nroDocumento').removeAttr('cedula');
                $('#formulario_personas_nroDocumento').removeAttr('ruc');
                $('#formulario_personas_nroDocumento').removeAttr('digits');
                $('#formulario_personas_nroDocumento').attr('pasaporte', '^[A-Za-zÑñ]{1}[0-9]{6}$');
                $('#formulario_personas_nroDocumento').attr('maxlength', 7);
                $('#formulario_personas_nroDocumento').attr('minlength', 7);
            }
            /*CEDULA*/
            if (target.val() == 'C')
            {

                $('#formulario_personas_nroDocumento').removeAttr('pasaporte');
                $('#formulario_personas_nroDocumento').removeAttr('ruc');
                $('#formulario_personas_nroDocumento').attr('cedula', true);
                $('#formulario_personas_nroDocumento').attr('maxlength', 10);
                $('#formulario_personas_nroDocumento').attr('minlength', 10);
                $('#formulario_personas_nroDocumento').attr('digits', true);
            }

        }
        $('#formulario_personas_idTipoDocumento').change(function(){
            asignarValidacionANroDocumento($(this));
        });
        asignarValidacionANroDocumento($('#formulario_personas_idTipoDocumento'));
        
                        
            function buscarPersonaNroDocumento(e)
            {
                var url = '<?php echo base_url(); ?>index.php/clientes/clientes/buscarPersonaXNroDucumento'; // El script a dónde se realizará la petición.
                var nroDocumento = $('#formulario_personas_nroDocumentoBuscar').val();
                if(nroDocumento !=='')
                {
                    
                    $.isLoading({
                                text: "Cargando",
                                position: "overlay"
                            });
                    $.ajax({
                        type: "POST",
                        url: url,
                        dataType: 'json',
                        data: {nroDocumento: nroDocumento}, // Adjuntar los campos del formulario enviado.
                        success: function (data)
                        {
                            $.isLoading("hide");
                            if (data != null)
                            {
                               var urlCreacionBasicaPN = "<?php echo base_url(); ?>index.php/clientes/clientes/mostrarFormularioGestionBasicaPN/"+data.ID_CLIENTE;
                                $(location).attr('href',urlCreacionBasicaPN); 
                            } 
                            else
                            {
                                if(!esModoEdicion)
                                {
                                    $('#formulario_personas_nroDocumento').val(nroDocumento);
                                }
                                var params = {                
                                    onInit: function(data) {
                                    },
                                    onCreate: function(notification, data) {
                                    },
                                    onClose: function(notification, data) {
                                    }
                                    };
                                var text = 'No existe ningún cliente registrado con ese número de documento.';
                                params.heading = 'Notificación';
                                params.theme = 'teal';
                                // show notification
                                $.notific8(text, params);
                            }
                        }

                    });
                 
                }
            }
            
            function buscarPersonaNroDcumentoEnterEvent(e) {
                if (e.which == 13) {
                    buscarPersonaNroDocumento(e);
                    return false;
                }
            }

            $('#formulario_personas_nroDocumentoBuscar').keypress(buscarPersonaNroDcumentoEnterEvent);
            $('#btnBuscar').click(function(e){
                buscarPersonaNroDocumento(e);
                return false;
            });
             
            
//        { % endif % }
    });
</script>