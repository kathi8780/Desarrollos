<title>Clientes</title>
<form name="formulario_personas" method="post" action="<?php echo base_url(); ?>index.php/clientes/clientes/procesarFormularioGestionPJ<?php if(isset($ID_CLIENTE) && $ID_CLIENTE != NULL){ echo "/".$ID_CLIENTE ;} ?>">


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
                    <input type='button' class='btn button-next btn-success btn-sm' name='next' value='Siguiente' />
                    <div class="form-group form-group-sm"><button type="submit" class="formulario_personas_guardar btn-success btn btn-sm">GUARDAR</button></div>
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
                        <div class="form-group form-group-sm <?php if(form_error('formulario_personas[RAZON_SOCIAL]') != '' ){ echo "has-error";}?>">                
                            <label class="control-label required" for="formulario_personas_razonSocial">Razón social<span class="required"> * </span></label>
                            <input type="text" id="formulario_personas_razonSocial" name="formulario_personas[RAZON_SOCIAL]"
                                   <?php if(form_error('formulario_personas[RAZON_SOCIAL]') != '' ){?>
                                    aria-describedby="formulario_personas_razonSocial-error"
                                   <?php } ?>
                                   <?php if(isset($RAZON_SOCIAL) && $RAZON_SOCIAL != NULL) { ?> value="<?= $RAZON_SOCIAL ?>" <?php } ?>
                                   required="required" maxlength="100" class="form-control" />
                            
                            <?php if(form_error('formulario_personas[RAZON_SOCIAL]') != '' ){?>
                                <span id="formulario_personas_razonSocial-error" class="help-block">
                                    <?= form_error('formulario_personas[RAZON_SOCIAL]') ?>
                                </span>
                            <?php } ?>
                            
                        </div>
                    </div> 
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group form-group-sm <?php if(form_error('formulario_personas[NOMBRE_COMERCIAL]') != '' ){ echo "has-error";}?>">                
                            <label class="control-label required" for="formulario_personas_nombreComercial">Nombre comercial<span class="required"> * </span></label>
                            <input type="text" id="formulario_personas_nombreComercial" name="formulario_personas[NOMBRE_COMERCIAL]" 
                                   required="required" maxlength="100" class="form-control" 
                                   <?php if(form_error('formulario_personas[NOMBRE_COMERCIAL]') != '' ){?>
                                    aria-describedby="formulario_personas_nombreComercial-error"
                                   <?php } ?>
                                    <?php if(isset($NOMBRE_COMERCIAL) && $NOMBRE_COMERCIAL != NULL) { ?> value="<?= $NOMBRE_COMERCIAL ?>" <?php } ?>
                                   />
                                   <?php if(form_error('formulario_personas[NOMBRE_COMERCIAL]') != '' ){?>
                                        <span id="formulario_personas_nombreComercial-error" class="help-block">
                                            <?= form_error('formulario_personas[NOMBRE_COMERCIAL]') ?>
                                        </span>
                                    <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group form-group-sm <?php if(form_error('formulario_personas[NRO_DOCUMENTO]') != '' ){ echo "has-error";}?>">                
                            <label class="control-label required" for="formulario_personas_nroDocumento">Número de documento<span class="required"> * </span></label>
                            <input type="text" id="formulario_personas_nroDocumento" name="formulario_personas[NRO_DOCUMENTO]" 
                                   required="required" digits="digits" maxlength="13" minlength="13" ruc="true" class="form-control" 
                                   <?php if(form_error('formulario_personas[NRO_DOCUMENTO]') != '' ){?>
                                    aria-describedby="formulario_personas_nroDocumento-error"
                                   <?php } ?>
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
            </div>
            <div class="tab-pane" id="tab2">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group form-group-sm">
                        <div class="input-group">
                        <input id="formulario_personas_nroDocumentoBuscar"
                               class="form-control" type="text" 
                               name="formulario_personas[nroDocumentoBuscar]"
                               placeholder="Inserte un número de identificación para buscar el representante legal"
                               >
                        <span class="input-group-addon btn btn-primary btn-sm"  id="btnBuscar"><span style="color: white" class="glyphicon glyphicon-search"></span> </span>
                        </div>

                    </div>
                        </div>
                    <div class="clear-fix"></div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">
                            <input type="text" id="formulario_personas_idRepresentante" name="formulario_personas[ID_REPRESENTANTE]" required="required" style="display:none" class="form-control" 
                                    <?php if(isset($ID_REPRESENTANTE) && $ID_REPRESENTANTE != NULL) { ?> value="<?= $ID_REPRESENTANTE ?>" <?php } ?>
                                     />
                        </div>
                    </div>
                </div>
                <div class="row representante">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label required" for="formulario_personas_primerNombre">Primer nombre</label>
                            <input type="text" id="formulario_personas_primerNombre" name="formulario_personas[REPRESENTANTE][PRIMER_NOMBRE]" required="required" mayusculasespacios="^[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+$" maxlength="50" class="form-control" 
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
                            <input type="text" id="formulario_personas_apellidoPaterno" name="formulario_personas[REPRESENTANTE][APELLIDO_PATERNO]" mayusculasespacios="^[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+$" required="required" maxlength="50" class="form-control"
                            <?php if(isset($APELLIDO_PATERNO) && $APELLIDO_PATERNO != NULL) { ?> value="<?= $APELLIDO_PATERNO ?>" <?php } ?>
                            />
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label required" for="formulario_personas_apellidoMaterno">Apellido materno</label>
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
                            <label class="control-label" for="formulario_personas_celular">Celular</label>
                            <div class="input-group">
                                <span class="input-group-addon left"><span class="glyphicon glyphicon-phone"></span></span>
                                <input type="text" id="formulario_personas_celular" name="formulario_personas[CONTACTO_DOMICILIO][CELULAR]" 
                                       <?php if (isset($CELULAR) && $CELULAR != NULL) { ?> value="<?= $CELULAR ?>" <?php } ?> 
                                       maxlength="12" minlength="12" pareja="#formulario_personas_telefono" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm <?php if(form_error('formulario_personas[CONTACTO_DOMICILIO][TELEFONO]') != '' ){ echo "has-error";}?>">                
                            <label class="control-label" for="formulario_personas_telefono">Teléfono</label>
                            <div class="input-group">
                                    <span class="input-group-addon left"><span class="glyphicon glyphicon-phone-alt"></span></span>
                                    <input type="text" id="formulario_personas_telefono" name="formulario_personas[CONTACTO_DOMICILIO][TELEFONO]" 
                                           <?php if(isset($TELEFONO) && $TELEFONO != NULL) { ?> value="<?= $TELEFONO ?>" <?php } ?> 
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
                            <label class="control-label required" for="formulario_personas_correoElectronico">Correo electrónico<span class="required"> * </span></label>
                            <div class="input-group">
                                <span class="input-group-addon left"><span class="glyphicon glyphicon-envelope"></span></span>
                                <input type="email" id="formulario_personas_correoElectronico" name="formulario_personas[CONTACTO_DOMICILIO][CORREO_ELECTRONICO]" 
                                       <?php if(isset($CORREO_ELECTRONICO) && $CORREO_ELECTRONICO != NULL) { ?> value="<?= $CORREO_ELECTRONICO ?>" <?php } ?> 
                                       required="required" maxlength="80" email="email" class="form-control" 
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
                                <option value="<?php echo $pais['ID_PAIS']; ?>" <?php if (isset($ID_PAIS) && $pais['ID_PAIS'] == $ID_PAIS) { ?> selected="selected" <?php } ?>>
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
                                <option value="<?php echo $provincia['ID_PROVINCIA']; ?>" <?php if (isset($ID_PROVINCIA) && $provincia['ID_PROVINCIA'] == $ID_PROVINCIA) { ?> selected="selected" <?php } ?>>
                                        <?php echo $provincia['PROVINCIA']; ?>
                                    </option> 
                                <?php } ?>
                            </select>
                            <?php if (form_error('formulario_personas[ID_PROVINCIA_DOMICILIO]') != '') { ?>
                                <span id="formulario_personas_idProvincia-error" class="help-block">
                                    <?= form_error('formulario_personas[ID_PROVINCIA_DOMICILIO]') ?>
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
                                <option value="<?php echo $canton['ID_CANTON']; ?>" <?php if (isset($ID_CANTON) && $canton['ID_CANTON'] == $ID_CANTON) { ?> selected="selected" <?php } ?>>
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
                                    <option value="<?php echo $parroquia['ID_PARROQUIA']; ?>" <?php if ($parroquia['ID_PARROQUIA'] == $ID_PARROQUIA) { ?> selected="selected" <?php } ?>>
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
                                   <?php if(isset($DIRECCION_CALLE_PRINCIPAL) && $DIRECCION_CALLE_PRINCIPAL != NULL) { ?> value="<?= $DIRECCION_CALLE_PRINCIPAL ?>" <?php } ?>
                                   required="required" maxlength="50" class="form-control" /></div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_direccionNumero">Nro.</label>
                            <input type="text" id="formulario_personas_direccionNumero" name="formulario_personas[CONTACTO_DOMICILIO][DIRECCION_NUMERO]" 
                                   <?php if(isset($DIRECCION_NUMERO) && $DIRECCION_NUMERO != NULL) { ?> value="<?= $DIRECCION_NUMERO ?>" <?php } ?>                                   
                                   maxlength="20" class="form-control" /></div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_direccionCalleSecundaria1">Calle Secundaria 1</label>
                            <input type="text" id="formulario_personas_direccionCalleSecundaria1" name="formulario_personas[CONTACTO_DOMICILIO][DIRECCION_CALLE_SECUNDARIA1]" 
                                   <?php if(isset($DIRECCION_CALLE_SECUNDARIA1) && $DIRECCION_CALLE_SECUNDARIA1 != NULL) { ?> value="<?= $DIRECCION_CALLE_SECUNDARIA1 ?>" <?php } ?>
                                   maxlength="100" class="form-control" /></div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_direccionCalleSecundaria2">Calle Secundaria 2</label>
                            <input type="text" id="formulario_personas_direccionCalleSecundaria2" name="formulario_personas[CONTACTO_DOMICILIO][DIRECCION_CALLE_SECUNDARIA2]" 
                                   <?php if(isset($DIRECCION_CALLE_SECUNDARIA2) && $DIRECCION_CALLE_SECUNDARIA2 != NULL) { ?> value="<?= $DIRECCION_CALLE_SECUNDARIA2 ?>" <?php } ?>
                                   maxlength="100" class="form-control" /></div>  
                    </div>
                </div>

            </div>
            <div class="tab-pane" id="tab4">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <h4>Datos generales</h4>
                        <p>
                            <span class="confirmation-tab-label">Razón social:</span>
                            <span class="label label-warning">
                                <span data-display="formulario_personas[RAZON_SOCIAL]" class="confirmation-tab-value"></span>
                            </span>

                        </p>
                        <p>
                            <span class="confirmation-tab-label">Nombre comercial:</span>
                            <span data-display="formulario_personas[NOMBRE_COMERCIAL]" class="confirmation-tab-value"></span>
                        </p>
                        <p>
                            <span class="confirmation-tab-label">Ruc</span>:
                            <span data-display="formulario_personas[NRO_DOCUMENTO]" class="confirmation-tab-value"></span>
                        </p>
                        <p>
                            <span class="confirmation-tab-label">Representante legal:</span>

                            <span data-display="formulario_personas[REPRESENTANTE][PRIMER_NOMBRE]" class="confirmation-tab-value"></span>
                            <span data-display="formulario_personas[REPRESENTANTE][SEGUNDO_NOMBRE]" class="confirmation-tab-value"></span>
                            <span data-display="formulario_personas[REPRESENTANTE][APELLIDO_PATERNO]" class="confirmation-tab-value"></span>
                            <span data-display="formulario_personas[REPRESENTANTE][APELLIDO_MATERNO]" class="confirmation-tab-value"></span>


                        </p>

                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <h4>Información de contacto</h4>

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
                    <input type='button' class='btn button-next btn-success btn-sm' name='next' value='Siguiente' />
                     <div class="form-group form-group-sm"><button type="submit" class="formulario_personas_guardar btn-success btn btn-sm">GUARDAR</button></div>
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
                                    $('.formulario_personas_guardar').css('display', 'none');
                                    $('.button-previous').css('display', 'none');
                                    $('.button-next').css('display', 'inline-block');
                                }
                                else {
                                    $('.formulario_personas_guardar').css('display', 'none');
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
                                return false;
                            }

                        });

                        /*SE OCULTA EL BTN DE GUARDAR*/
                        $('.formulario_personas_guardar').css('display', 'none');

                        /*------------------------ACTUALIZAR NOMBRE COMERCIAL CON LOS DATOS DE RAZON COMERCIAL*/

                        $('#formulario_personas_razonSocial').keyup(function () {
                            if (!$('#formulario_personas_nombreComercial').attr('data-noupdate'))
                            {
                                $('#formulario_personas_nombreComercial').val($('#formulario_personas_razonSocial').val());
                            }
                        });
                        $('#formulario_personas_razonSocial').focusout(function () {
                            if (!$('#formulario_personas_nombreComercial').attr('data-noupdate'))
                            {
                                $('#formulario_personas_nombreComercial').val($('#formulario_personas_razonSocial').val());
                            }
                        })

                        $('#formulario_personas_nombreComercial').focusout(function () {
                            $('#formulario_personas_nombreComercial').attr('data-noupdate', true);
                            if ($('#formulario_personas_nombreComercial').val() == "")
                            {
                                $('#formulario_personas_nombreComercial').removeAttr('data-noupdate');
                                $('#formulario_personas_nombreComercial').val($('#formulario_personas_razonSocial').val());
                            }
                        });
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
                            if (form.valid() == true)
                            {
                               convertirTextosAMayusculas(); 
                                $('.formulario_personas_guardar').css('display', 'none');
                                $('.button-previous').css('display', 'none');
                                $('.button-next').css('display', 'none');
                                form.submit();
                            }

                        }
                        $(".formulario_personas_guardar").click(chequearValidacionYEnviarFormulario);

                        /*-----------------------INICIALIZACION DE LAS MASCARAS------------------*/
                    $('input[id*=telefono]').each(function () {
                        $(this).mask("00-000-0000", {placeholder: "00-000-0000"});
                    });
                    $('input[id*=celular]').each(function () {
                        $(this).mask('00-0000-0000', {placeholder: "00-0000-0000"});
                    });


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
                                            $('#formulario_personas_primerNombre').val(data.PRIMER_NOMBRE);
                                            $('#formulario_personas_segundoNombre').val(data.SEGUNDO_NOMBRE);
                                            $('#formulario_personas_apellidoPaterno').val(data.APELLIDO_PATERNO);
                                            $('#formulario_personas_apellidoMaterno').val(data.APELLIDO_MATERNO);
                                            $('#formulario_personas_idRepresentante').val(data.ID_CLIENTE);

                                        }
                                        else
                                        {
                                            $('#formulario_personas_primerNombre').val('');
                                            $('#formulario_personas_segundoNombre').val('');
                                            $('#formulario_personas_apellidoPaterno').val('');
                                            $('#formulario_personas_apellidoMaterno').val('');
                                            $('#formulario_personas_idRepresentante').val('');
                                            var urlCreacionPN = "<?php echo base_url(); ?>index.php/clientes/clientes/mostrarFormularioGestionBasicaPN";
                                            var win = window.open(urlCreacionPN, '_blank');
                                            win.focus();
                                        }
                                        /*ACTUALIZAR VALIDACION DE NO DE DOCUMENTO*/


                                    }

                                });
                            }
                            else return false;
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

                        /*EVENTOS PARA IMPEDIR Q SE ESCRIBAN DATOS EN LOS INPUTS QUE MUESTRAN LOS DATOS DEL REPRESENTANTE*/
                        $('div.representante input').each(function () {
                            $(this).keypress(function () {
                                return false;
                            });
                            $(this).mouseenter(function (e) {
                                e.preventDefault();
                                return false;
                            });
                            $(this).mousedown(function (e) {
                                e.preventDefault();
                                return false;
                            });
                            $(this).mouseleave(function (e) {
                                e.preventDefault();
                                return false;
                            });
                        });


                    });
</script>