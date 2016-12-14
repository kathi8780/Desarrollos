<title>Clientes</title>
<form name="formulario_personas" method="post" action="<?php echo base_url(); ?>index.php/clientes/clientes/mostrarDetallesPNV2<?php if(isset($ID_CLIENTE) && $ID_CLIENTE != NULL){ echo "/".$ID_CLIENTE ;} ?>" enctype="multipart/form-data">

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
                        <li><a href="#tab3" data-toggle="tab" class="step">
                                <span class="number"> 3 </span>
                                <span class="desc">
                                    <span style="display: none" class="glyphicon glyphicon-ok" aria-hidden="true"></span>

                                    Información de emergencia
                                </span></a></li>
                        <li><a href="#tab4" data-toggle="tab" class="step">
                                <span class="number"> 4 </span>
                                <span class="desc">
                                    <span style="display: none" class="glyphicon glyphicon-ok" aria-hidden="true"></span>

                                    Discapacidad
                                </span></a></li>

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

             
                    <?php 
                        $uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/CLIENTES/ITCA/assets/uploads/fotografias/';
                        if(isset($FOTOGRAFIA)  && file_exists($uploaddir . $FOTOGRAFIA) ) 
                    {
                    ?>
                        <div>
                            <div class="pull-right"> <img width="128" src="<?= base_url('assets/uploads/fotografias/'.$FOTOGRAFIA ) ?>" class="img-thumbnail"> </div>
                            <div class="clearfix"></div>
                        </div>
               
                    <?php } else { ?>
                        <div id="imgPerfil">
                             <div class="pull-right"> <img width="128" src="<?= base_url('assets/uploads/fotografias/perfil.jpg') ?>" class="img-thumbnail"> </div>
                             <div class="clearfix"></div>
                         </div>
                         <div id="imgPerfilFemenino">
                             <div class="pull-right"> <img width="128" src="<?= base_url('assets/uploads/fotografias/perfil_femenino.jpg') ?>" class="img-thumbnail"> </div>
                             <div class="clearfix"></div>
                         </div>
                         <div id="imgPerfilMasculino">
                             <div class="pull-right"> <img width="128" src="<?= base_url('assets/uploads/fotografias/perfil_masculino.jpg') ?>" class="img-thumbnail"> </div>
                             <div class="clearfix"></div>
                         </div>
                    <?php }?>


                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label required" for="formulario_personas_primerNombre">Primer nombre</label>                            
                            <input type="text" id="formulario_personas_primerNombre" name="formulario_personas[PRIMER_NOMBRE]" class="form-control" 
                                   <?php if(isset($PRIMER_NOMBRE) && $PRIMER_NOMBRE != NULL) { ?> value="<?= $PRIMER_NOMBRE ?>" <?php } ?>
                                   />
                                    
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_segundoNombre">Segundo nombre</label>
                            <input type="text" id="formulario_personas_segundoNombre" name="formulario_personas[SEGUNDO_NOMBRE]"  class="form-control" 
                                    <?php if(isset($SEGUNDO_NOMBRE) && $SEGUNDO_NOMBRE != NULL) { ?> value="<?= $SEGUNDO_NOMBRE ?>" <?php } ?>
                                   />
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label required" for="formulario_personas_apellidoPaterno">Apellido paterno</label>
                            <input type="text" id="formulario_personas_apellidoPaterno" name="formulario_personas[APELLIDO_PATERNO]" 
                                   class="form-control" 
                                   <?php if(isset($APELLIDO_PATERNO) && $APELLIDO_PATERNO != NULL) { ?> value="<?= $APELLIDO_PATERNO ?>" <?php } ?>
                                   />
                                  
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_apellidoMaterno">Apellido materno</label>
                            <input type="text" id="formulario_personas_apellidoMaterno" name="formulario_personas[APELLIDO_MATERNO]" 
                                   class="form-control" 
                                    <?php if(isset($APELLIDO_MATERNO) && $APELLIDO_MATERNO != NULL) { ?> value="<?= $APELLIDO_MATERNO ?>" <?php } ?>
                                   />
                        </div>
                    </div>
                </div> 

                <div class="row">

                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label required" for="formulario_personas_idTipoContribuyente">Tipo de contribuyente</label>
                            <select id="formulario_personas_idTipoContribuyente" 
                                    name="formulario_personas[ID_TIPO_CONTRIBUYENTE]" class="form-control">  
                                <option value="" selected="selected">
                                       <?php if(isset($TIPO_CONTRIBUYENTE)){ echo $TIPO_CONTRIBUYENTE;} ?>
                                </option>    
                            </select>
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
                        <div class="form-group form-group-sm">                
                            <label class="control-label required" for="formulario_personas_idTipoDocumento">Tipo de documento</label>
                            <select id="formulario_personas_idTipoDocumento" 
                                    name="formulario_personas[TIPO_DOCUMENTO]" class="form-control"> 
                                <option value="" selected="selected">
                                       <?php if(isset($NOMBRE_TIPO_DOCUMENTO)){ echo $NOMBRE_TIPO_DOCUMENTO;} ?>
                                </option> 
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label required" for="formulario_personas_nroDocumento">Número de documento</label>
                            <input type="text" id="formulario_personas_nroDocumento" name="formulario_personas[NRO_DOCUMENTO]" 
                                  
                                   required="required" class="form-control" 
                                   <?php if(isset($NRO_DOCUMENTO) && $NRO_DOCUMENTO != NULL) { ?> value="<?= $NRO_DOCUMENTO ?>" <?php } ?>
                                   />
                        </div>
                    </div>
                </div>    

                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="row"> 
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group form-group-sm">
                                    <div class="checkbox"><label>
                                            <input type="checkbox" id="formulario_personas_tieneRuc" name="formulario_personas[TIENE_RUC]" 
                                                   <?php if(isset($TIENE_RUC) && $TIENE_RUC == TRUE) { ?> checked <?php } ?>                                   
                                                   data-title="Tiene RUC" value="1" />¿Tiene RUC?</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group form-group-sm">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="formulario_personas_esBecado" name="formulario_personas[ES_BECADO]" 
                                                   <?php if(isset($ES_BECADO) && $ES_BECADO == TRUE) { ?> checked <?php } ?>   
                                                   data-title="Es becado" value="1" />
                                            ¿Es becado?
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="row"> 
                            <div id="nroRuc" class="col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group form-group-sm">                
                                    <label class="control-label required" for="formulario_personas_nroRuc">Número de RUC</label>
                                    <input type="text" id="formulario_personas_nroRuc" name="formulario_personas[NUMERO_RUC]" class="form-control" 
                                            <?php if(isset($NUMERO_RUC) && $NUMERO_RUC != NULL) { ?> value="<?= $NUMERO_RUC ?>" <?php } ?> 
                                           />
                                        
                                </div>
                            </div>
                            <div id="nombreComercial" class="col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group form-group-sm">                
                                    <label class="control-label" for="formulario_personas_nombreComercial">Nombre comercial</label>
                                    <input type="text" id="formulario_personas_nombreComercial" name="formulario_personas[NOMBRE_COMERCIAL]"
                                           <?php if(isset($NOMBRE_COMERCIAL) && $NOMBRE_COMERCIAL != NULL) { ?> value="<?= $NOMBRE_COMERCIAL ?>" <?php } ?> 
                                            class="form-control" />
                                </div>
                            </div>
                            <div id="tipoBeca" class="col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group form-group-sm">
                                    <label class="control-label required" for="formulario_personas_idTipoBeca">Tipo de beca</label>
                                    <select id="formulario_personas_idTipoBeca" name="formulario_personas[ID_TIPO_BECA]" class="form-control">  
                                        
                                        <option value="" selected="selected">
                                            <?php if(isset($TIPO_BECA)){ echo $TIPO_BECA;} ?>
                                        </option> 

                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label required" for="formulario_personas_idNacionalidad">Nacionalidad</label>
                            <select id="formulario_personas_idNacionalidad" name="formulario_personas[ID_NACIONALIDAD]" class="form-control">            
                                <option value="" selected="selected">
                                            <?php if(isset($NACIONALIDAD)){ echo $NACIONALIDAD;} ?>
                                </option> 
                            </select>
                            
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_fechaNacimiento">Fecha de nacimiento</label>
                            <div class='input-group'>
                                <span class="input-group-addon left">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                                <input type="text" id="formulario_personas_fechaNacimiento" name="formulario_personas[FECHA_NACIMIENTO]" 
                                       <?php if (isset($FECHA_NACIMIENTO) && $FECHA_NACIMIENTO != NULL) { ?> value="<?= $FECHA_NACIMIENTO ?>" <?php } ?>
                                       placeholder="yyyy-mm-dd" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label required" for="formulario_personas_idPaisNacimiento">País de Nacimiento</label>
                            <select id="formulario_personas_idPaisNacimiento"  name="formulario_personas[ID_PAIS_NACIMIENTO]" class="form-control">
                                <option value="" selected="selected">
                                            <?php if(isset($PAIS_NACIMIENTO)){ echo $PAIS_NACIMIENTO;} ?>
                                </option> 
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group form-group-sm <?php if(form_error('formulario_personas[ID_PROVINCIA_NACIMIENTO]') != '' ){ echo "has-error";}?>">
                            <div>                 
                                <label class="control-label required" for="formulario_personas_idProvinciaNacimiento">Provincia de nacimiento</label>
                                <span class="load"> </span>
                            </div>
                            <select id="formulario_personas_idProvinciaNacimiento"
                                    name="formulario_personas[ID_PROVINCIA_NACIMIENTO]" class="form-control">
                                    <option value="" selected="selected">
                                                 <?php if(isset($PROVINCIA_NACIMIENTO)){ echo $PROVINCIA_NACIMIENTO;} ?>
                                     </option> 
                            </select>
                        </div>
                    </div>
                </div>   
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_idEstadoCivil">Estado civil</label>
                            <select id="formulario_personas_idEstadoCivil" name="formulario_personas[ID_ESTADO_CIVIL]" class="form-control">            
                                <option value="" selected="selected">
                                                 <?php if(isset($ESTADO_CIVIL)){ echo $ESTADO_CIVIL;} ?>
                                     </option> 
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_idTipoSangre">Tipo de sangre</label>
                            <select id="formulario_personas_idTipoSangre" name="formulario_personas[TIPO_SANGRE]" class="form-control">
                                 <option value="" selected="selected">
                                                 <?php if(isset($TIPO_SANGRE)){ echo $TIPO_SANGRE;} ?>
                                     </option> 
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_idGenero">Género</label>
                            <select id="formulario_personas_idGenero" name="formulario_personas[GENERO]" class="form-control">
                                <option value="" selected="selected">
                                                 <?php if(isset($DENOMINACION_GENERO)){ echo $DENOMINACION_GENERO;} ?>
                                     </option> 
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_idGrupoCultural">Grupo cultural</label>
                            <select id="formulario_personas_idGrupoCultural" name="formulario_personas[ID_GRUPO_CULTURAL]" class="form-control">
                               <option value="" selected="selected">
                                                 <?php if(isset($GRUPO_CULTURAL)){ echo $GRUPO_CULTURAL;} ?>
                                     </option> 
                            </select>
                        </div>  
                    </div>
                </div>   
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_idTrato">Trato personal</label>
                            <select id="formulario_personas_idTrato" name="formulario_personas[TRATO_PERSONAL]" class="form-control">
                                <option value="" selected="selected">
                                                 <?php if(isset($TRATO_PERSONAL)){ echo $TRATO_PERSONAL;} ?>
                                     </option> 
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_nroDocumentoMilitar">Número de documento militar</label>
                            <input type="text" id="formulario_personas_nroDocumentoMilitar" name="formulario_personas[NRO_DOCUMENTO_MILITAR]" 
                                   maxlength="20" class="form-control" 
                                   <?php if(isset($NRO_DOCUMENTO_MILITAR) && $NRO_DOCUMENTO_MILITAR != NULL) { ?> value="<?= $NRO_DOCUMENTO_MILITAR ?>" <?php } ?>
                                   />
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_idProfesion">Profesión</label>
                            <select id="formulario_personas_idProfesion" name="formulario_personas[ID_PROFESION]" class="form-control">
                                <option value="" selected="selected">
                                    <?php if (isset($PROFESION)) {echo $PROFESION;} ?>
                                </option> 

                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_idOcupacion">Ocupación</label>
                            <select id="formulario_personas_idOcupacion" name="formulario_personas[OCUPACION]" class="form-control">
                              <option value="" selected="selected">
                                    <?php if (isset($OCUPACION)) {echo $OCUPACION;} ?>
                                </option>   
                            </select>
                        </div>
                    </div>

                </div> 

            </div>
            <div class="tab-pane" id="tab2">
                <h5 class="form-section">Datos de contacto personales</h5>
                <div class="row">

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_idOperadorTelefonico">Operadora telefónica</label>
                            <select id="formulario_personas_idOperadorTelefonico" name="formulario_personas[CONTACTO_DOMICILIO][ID_OPERADOR_TELEFONICO]" class="form-control">
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
                                      class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label required" for="formulario_personas_telefono">Teléfono</label>
                            <div class="input-group">
                                    <span class="input-group-addon left"><span class="glyphicon glyphicon-phone-alt"></span></span>
                                    <input type="text" id="formulario_personas_telefono" name="formulario_personas[CONTACTO_DOMICILIO][TELEFONO]" 
                                           <?php if(isset($TELEFONO_DOMICILIO) && $TELEFONO_DOMICILIO != NULL) { ?> value="<?= $TELEFONO_DOMICILIO ?>" <?php } ?> 
                                           class="form-control" />
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm <?php if(form_error('formulario_personas[CONTACTO_DOMICILIO][CORREO_ELECTRONICO]') != '' ){ echo "has-error";}?>">                
                            <label class="control-label required" for="formulario_personas_correoElectronico">Correo electrónico</label>
                            <div class="input-group">
                                <span class="input-group-addon left"><span class="glyphicon glyphicon-envelope"></span></span>
                                <input type="email" id="formulario_personas_correoElectronico" name="formulario_personas[CONTACTO_DOMICILIO][CORREO_ELECTRONICO]" 
                                       <?php if(isset($CORREO_ELECTRONICO_DOMICILIO) && $CORREO_ELECTRONICO_DOMICILIO != NULL) { ?> value="<?= $CORREO_ELECTRONICO_DOMICILIO ?>" <?php } ?> 
                                        class="form-control" 
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

                <h5 class="form-section">Datos de contacto laborales</h5>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_idContactoLaboral_idOperadorTelefonico">Operadora telefónica</label>
                            <select id="formulario_personas_idContactoLaboral_idOperadorTelefonico" 
                                    name="formulario_personas[ID_CONTACTO_LABORAL][ID_OPERADOR_TELEFONICO]" class="form-control">
                               <option value="" selected="selected">
                                    <?php if (isset($NOMBRE_OPERADOR_CONTACTO_LABORAL)) {echo $NOMBRE_OPERADOR_CONTACTO_LABORAL;} ?>
                                </option>
                            </select>
                        </div>
                    </div>


                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_idContactoLaboral_celular">Celular</label>
                            <div class="input-group">
                                <span class="input-group-addon left"><span class="glyphicon glyphicon-phone"></span></span>
                                <input type="text" id="formulario_personas_idContactoLaboral_celular" name="formulario_personas[ID_CONTACTO_LABORAL][CELULAR]" 
                                       <?php if (isset($CELULAR_CONTACTO_LABORAL) && $CELULAR_CONTACTO_LABORAL != NULL) { ?> value="<?= $CELULAR_CONTACTO_LABORAL ?>" <?php } ?>
                                       class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                           
                                <label class="control-label" for="formulario_personas_idContactoLaboral_telefono">Teléfono</label>
                                 <div class="input-group">
                                    <span class="input-group-addon left"><span class="glyphicon glyphicon-phone-alt"></span></span>
                                    <input type="text" id="formulario_personas_idContactoLaboral_telefono" name="formulario_personas[ID_CONTACTO_LABORAL][TELEFONO]" 
                                           <?php if(isset($TELEFONO_CONTACTO_LABORAL) && $TELEFONO_CONTACTO_LABORAL != NULL) { ?> value="<?= $TELEFONO_CONTACTO_LABORAL ?>" <?php } ?>
                                           class="form-control" />
                                 </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_idContactoLaboral_correoElectronico">Correo electrónico</label>
                            <div class="input-group">
                                <span class="input-group-addon left"><span class="glyphicon glyphicon-envelope"></span></span>
                                <input type="email" id="formulario_personas_idContactoLaboral_correoElectronico" 
                                       name="formulario_personas[ID_CONTACTO_LABORAL][CORREO_ELECTRONICO]" 
                                       <?php if(isset($CORREO_ELECTRONICO_CONTACTO_LABORAL) && $CORREO_ELECTRONICO_CONTACTO_LABORAL != NULL) { ?> value="<?= $CORREO_ELECTRONICO_CONTACTO_LABORAL ?>" <?php } ?>
                                       class="form-control" />
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_idContactoLaboral_idPais">País</label>
                            <select id="formulario_personas_idContactoLaboral_idPais" name="formulario_personas[ID_CONTACTO_LABORAL][ID_PAIS]" class="form-control">
                                <option value="" selected="selected">
                                    <?php if (isset($PAIS_CONTACTO_LABORAL)) {echo $PAIS_CONTACTO_LABORAL;} ?>
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">
                            <div>                 
                                <label class="control-label" for="formulario_personas_idContactoLaboral_idProvincia">Provincia</label>
                            </div>

                            <select id="formulario_personas_idContactoLaboral_idProvincia" name="formulario_personas[ID_CONTACTO_LABORAL][ID_PROVINCIA]" class="form-control">
                                <option value="" selected="selected">
                                    <?php if (isset($PROVINCIA_CONTACTO_LABORAL)) {echo $PROVINCIA_CONTACTO_LABORAL;} ?>
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">
                            <div>                 
                                <label class="control-label" for="formulario_personas_idContactoLaboral_idCanton">Cantón</label>
                            <select id="formulario_personas_idContactoLaboral_idCanton" name="formulario_personas[ID_CONTACTO_LABORAL][ID_CANTON]" 
                                    class="form-control">
                                <option value="" selected="selected">
                                    <?php if (isset($CANTON_CONTACTO_LABORAL)) {echo $CANTON_CONTACTO_LABORAL;} ?>
                                </option>
                            </select>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">
                            <div>                 
                                <label class="control-label" for="formulario_personas_idContactoLaboral_idParroquia">Parroquia</label>
                            </div>
                            <select id="formulario_personas_idContactoLaboral_idParroquia" 
                                    name="formulario_personas[ID_CONTACTO_LABORAL][ID_PARROQUIA]" class="form-control">
                                <option value="" selected="selected">
                                    <?php if (isset($PARROQUIA_CONTACTO_LABORAL)) {echo $PARROQUIA_CONTACTO_LABORAL;} ?>
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                    
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label required" for="formulario_personas_idContactoLaboral_direccionCallePrincipal">Calle Principal</label>
                            <input type="text" id="formulario_personas_idContactoLaboral_direccionCallePrincipal" 
                                   <?php if(isset($DIRECCION_CALLE_PRINCIPAL_CONTACTO_LABORAL) && $DIRECCION_CALLE_PRINCIPAL_CONTACTO_LABORAL != NULL) { ?> value="<?= $DIRECCION_CALLE_PRINCIPAL_CONTACTO_LABORAL ?>" <?php } ?>
                                   name="formulario_personas[ID_CONTACTO_LABORAL][DIRECCION_CALLE_PRINCIPAL]" class="form-control" /></div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_idContactoLaboral_direccionNumero">Nro.</label>
                            <input type="text" id="formulario_personas_idContactoLaboral_direccionNumero" 
                                   <?php if(isset($DIRECCION_NUMERO_CONTACTO_LABORAL) && $DIRECCION_NUMERO_CONTACTO_LABORAL != NULL) { ?> value="<?= $DIRECCION_NUMERO_CONTACTO_LABORAL ?>" <?php } ?>
                                   name="formulario_personas[ID_CONTACTO_LABORAL][DIRECCION_NUMERO]" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_idContactoLaboral_direccionCalleSecundaria1">Calle Secundaria 1</label>
                            <input type="text" id="formulario_personas_idContactoLaboral_direccionCalleSecundaria1" 
                                   <?php if(isset($DIRECCION_CALLE_SECUNDARIA1_CONTACTO_LABORAL) && $DIRECCION_CALLE_SECUNDARIA1_CONTACTO_LABORAL != NULL) { ?> value="<?= $DIRECCION_CALLE_SECUNDARIA1_CONTACTO_LABORAL ?>" <?php } ?>
                                   name="formulario_personas[ID_CONTACTO_LABORAL][DIRECCION_CALLE_SECUNDARIA1]" class="form-control" /></div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_idContactoLaboral_direccionClleSecundaria2">Calle Secundaria 2</label>
                            <input type="text" id="formulario_personas_idContactoLaboral_direccionCalleSecundaria2" 
                                   <?php if(isset($DIRECCION_CALLE_SECUNDARIA2_CONTACTO_LABORAL) && $DIRECCION_CALLE_SECUNDARIA2_CONTACTO_LABORAL != NULL) { ?> value="<?= $DIRECCION_CALLE_SECUNDARIA2_CONTACTO_LABORAL ?>" <?php } ?>
                                   name="formulario_personas[ID_CONTACTO_LABORAL][DIRECCION_CALLE_SECUNDARIA2]" class="form-control" />
                        </div>  
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">                
                            <label class="control-label" for="formulario_personas_idContactoLaboral_direccionReferencia">Dirección de referencia</label>
                            <textarea id="formulario_personas_idContactoLaboral_direccionReferencia" name="formulario_personas[ID_CONTACTO_LABORAL][DIRECCION_REFERENCIA]" class="form-control"><?php  if(isset($DIRECCION_REFERENCIA_CONTACTO_LABORAL) && $DIRECCION_REFERENCIA_CONTACTO_LABORAL != NULL) {  echo $DIRECCION_REFERENCIA_CONTACTO_LABORAL;} ?></textarea>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">                
                            <label class="control-label" for="formulario_personas_idContactoLaboral_descripcion">Descripción</label>
                            <textarea id="formulario_personas_direccionReferencia" name="formulario_personas[ID_CONTACTO_LABORAL][DESCRIPCION]" class="form-control"><?php  if(isset($DESCRIPCION_CONTACTO_LABORAL) && $DESCRIPCION_CONTACTO_LABORAL != NULL) {  echo $DESCRIPCION_CONTACTO_LABORAL;} ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tab3">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_personaLlamarEmergencia">Persona a llamar</label>
                            <input type="text" id="formulario_personas_personaLlamarEmergencia" 
                                   <?php if(isset($PERSONA_LLAMAR_EMERGENCIA) && $PERSONA_LLAMAR_EMERGENCIA != NULL) { ?> value="<?= $PERSONA_LLAMAR_EMERGENCIA ?>" <?php } ?>
                                   name="formulario_personas[PERSONA_LLAMAR_EMERGENCIA]"
                                   maxlength="100" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_idParentezcoAfinidad">Parentezco o afinidad</label>
                            <select id="formulario_personas_idParentezcoAfinidad" name="formulario_personas[PARENTESCO_AFINIDAD]" class="form-control">
                                <option value="" selected="selected">
                                    <?php if (isset($PARENTESCO_AFINIDAD)) {echo $PARENTESCO_AFINIDAD;} ?>
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_celularEmergencia">Celular</label>
                            <div class="input-group">
                                    <span class="input-group-addon left"><span class="glyphicon glyphicon-phone"></span></span>
                                    <input type="text" id="formulario_personas_celularEmergencia" 
                                           <?php if(isset($CELULAR_EMERGENCIA) && $CELULAR_EMERGENCIA != NULL) { ?> value="<?= $CELULAR_EMERGENCIA ?>" <?php } ?>
                                           name="formulario_personas[CELULAR_EMERGENCIA]" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label required" for="formulario_personas_telefonoEmergencia">Teléfono</label>
                            <div class="input-group">
                                <span class="input-group-addon left"><span class="glyphicon glyphicon-phone-alt"></span></span>
                                <input type="text" id="formulario_personas_telefonoEmergencia" 
                                       <?php if (isset($TELEFONO_EMERGENCIA) && $TELEFONO_EMERGENCIA != NULL) { ?> value="<?= $TELEFONO_EMERGENCIA ?>" <?php } ?>
                                       name="formulario_personas[TELEFONO_EMERGENCIA]" class="form-control" 
                                       />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">                
                            <label class="control-label" for="formulario_personas_direccionEmergencia">Dirección</label>
                            <textarea id="formulario_personas_direccionEmergencia" name="formulario_personas[DIRECCION_EMERGENCIA]" class="form-control"><?php  if(isset($DIRECCION_EMERGENCIA) && $DIRECCION_EMERGENCIA != NULL) {  echo $DIRECCION_EMERGENCIA;} ?></textarea>
                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-pane" id="tab4">
                <div> 
                    <div class="form-group form-group-sm"><div class="checkbox">                                        
                            <label>
                                <input type="checkbox" id="formulario_personas_esDiscapacitado" name="formulario_personas[ES_DISCAPACITADO]" value="1"
                                    <?php if(isset($ES_DISCAPACITADO) && $ES_DISCAPACITADO == TRUE) { ?> checked <?php } ?>  
                                />
                                ¿Tiene algún tipo de discapacidad?
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_carnetConadis">Carné de conadis</label>
                            <input type="text" id="formulario_personas_carnetConadis" name="formulario_personas[CARNET_CONADIS]" 
                                   <?php if(isset($CARNET_CONADIS) && $CARNET_CONADIS != NULL) { ?> value="<?= $CARNET_CONADIS ?>" <?php } ?>
                                   class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_tipoDiscapacidad">Tipo de discapacidad</label>
                            <input type="text" id="formulario_personas_tipoDiscapacidad" name="formulario_personas[TIPO_DISCAPACIDAD]"
                                   <?php if(isset($TIPO_DISCAPACIDAD) && $TIPO_DISCAPACIDAD != NULL) { ?> value="<?= $TIPO_DISCAPACIDAD ?>" <?php } ?>
                                   class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group form-group-sm">                
                            <label class="control-label" for="formulario_personas_porcentajeDiscapacidad">Porcentaje de discapacidad</label>
                            <div class="input-group">
                                <input type="text" id="formulario_personas_porcentajeDiscapacidad" name="formulario_personas[PORCENTAJE_DICAPACIDAD]"
                                       <?php if(isset($PORCENTAJE_DICAPACIDAD) && $PORCENTAJE_DICAPACIDAD != NULL) { ?> value="<?= $PORCENTAJE_DICAPACIDAD ?>" <?php } ?>
                                       class="form-control" /><span class="input-group-addon">%</span>
                            </div>
                        </div>
                    </div>
                         
                    </div>

                    <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">                
                            <label class="control-label" for="formulario_personas_descripcionDiscapacidad">Descripción de la discapacidad</label>
                            <textarea id="formulario_personas_descripcionDiscapacidad" name="formulario_personas[DESCRIPCION_DISCAPACIDAD]" class="form-control"><?php  if(isset($DESCRIPCION_DISCAPACIDAD) && $DESCRIPCION_DISCAPACIDAD != NULL) {  echo $DESCRIPCION_DISCAPACIDAD;} ?></textarea>
                        </div>
                    </div>
                    </div>

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
    <div class="clearfix"></div>

</form>

<!--<script src="<?= base_url('assets/clientes/javascript/creacionAvanzadaPN.js') ?>" type="text/javascript"></script>-->
<script type="text/javascript">
     $(function () {
           /*--------FUNCION PARA COMPROBAR SI EL TAB ACTIVO CUMPLE CON LAS VALIDACIONES ASOCIADAS------*/
   
    /*--------------ESTA FUNCION ES UTIL PARA EL TAB DE CONFIRMACION---------------------------
     * ------------SE ENCARGA DE LLENAR LOS VALORES DE CADA UNO DE LOS CAMPOS MOSTRADOS EN LA CONFIRMACION
     * ------------A PARTIR DE LOS DATOS QUE SE INTRODUJERON EN EL FORMULARIO---------------------------------*/
    
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
    /*TRABAJO CON LAS FOTOGRAFIAS CUNADO NO TIEN ENINGUNA REGISTRADA*/
//        { % if persona.fotografia is null % }
        <?php
        $uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/CLIENTES/ITCA/assets/uploads/fotografias/';
        if(!isset($FOTOGRAFIA)  || !file_exists($uploaddir . $FOTOGRAFIA) ) 
        {
        ?>
        function actualizarFotografiaPorGenero() {
            if ($('#formulario_personas_idGenero').val() == 'M')
            {
                $('#imgPerfilFemenino').css("display", "none");
                $('#imgPerfil').css("display", "none");
                $('#imgPerfilMasculino').css("display", "block");
            }
            else if ($('#formulario_personas_idGenero').val() == 'F')
            {
                $('#imgPerfilFemenino').css("display", "block");
                $('#imgPerfil').css("display", "none");
                $('#imgPerfilMasculino').css("display", "none");
            }
            else
            {
                $('#imgPerfilFemenino').css("display", "none");
                $('#imgPerfil').css("display", "block");
                $('#imgPerfilMasculino').css("display", "none");
            }
        }
        $('#formulario_personas_idGenero').change(actualizarFotografiaPorGenero);
        actualizarFotografiaPorGenero();
        <?php } ?>
            
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