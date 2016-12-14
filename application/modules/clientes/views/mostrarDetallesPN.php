<title>Clientes</title>
<div class="detalles">

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist" style="border-bottom: none;">
        <li role="presentation" class="active"><a href="#informacion-personal" aria-controls="home" role="tab" data-toggle="tab">Información personal</a></li>
        <li role="presentation"><a href="#informacion-contacto" aria-controls="profile" role="tab" data-toggle="tab">Información de contacto </a></li>
        <li role="presentation"><a href="#informacion-emergencia" aria-controls="messages" role="tab" data-toggle="tab">Información de emergencia</a></li>
        <li role="presentation"><a href="#informacion-conaddis" aria-controls="settings" role="tab" data-toggle="tab">Discapacidad</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content" style="border: 1px #ddd solid;">
        <div role="tabpanel" class="tab-pane active" id="informacion-personal">
            <p>
                <span class="confirmation-tab-label">Nombre completo:</span>
                <span class="label label-warning">
                    <span  class="confirmation-tab-value"><?php if(isset($PRIMER_NOMBRE)){    echo $PRIMER_NOMBRE; } ?></span>
                    <span  class="confirmation-tab-value"><?php if(isset($SEGUNDO_NOMBRE)){    echo $SEGUNDO_NOMBRE; } ?></span>
                    <span class="confirmation-tab-value"><?php if(isset($APELLIDO_PATERNO)){    echo $APELLIDO_PATERNO; } ?></span>
                    <span class="confirmation-tab-value"><?php if(isset($APELLIDO_MATERNO)){    echo $APELLIDO_MATERNO; } ?></span>
                </span>

            </p>
            <p>
                <span class="confirmation-tab-label"><?php if(isset($NOMBRE_TIPO_DOCUMENTO)){    echo $NOMBRE_TIPO_DOCUMENTO; } ?></span>:
                <span class="confirmation-tab-value"><?php if(isset($NRO_DOCUMENTO)){    echo $NRO_DOCUMENTO; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Tipo de contribuyente:</span>
                <span class="confirmation-tab-value"><?php if(isset($TIPO_CONTRIBUYENTE)){    echo $TIPO_CONTRIBUYENTE; } ?></span>
            </p>            
            <p>
                <span class="confirmation-tab-label">Número de documento militar:</span>
                <span class="confirmation-tab-value"><?php if(isset($NRO_DOCUMENTO_MILITAR)){    echo $NRO_DOCUMENTO_MILITAR; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Número de RUC:</span>
                <span class="confirmation-tab-value"><?php if(isset($NUMERO_RUC)){    echo $NUMERO_RUC; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Nombre comercial:</span>
                <span class="confirmation-tab-value"><?php if(isset($NOMBRE_COMERCIAL)){    echo $NOMBRE_COMERCIAL; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Tipo de beca:</span>
                <span class="confirmation-tab-value"><?php if(isset($TIPO_BECA)){    echo $TIPO_BECA; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Nacionalidad:</span>
                <span class="confirmation-tab-value"><?php if(isset($NACIONALIDAD)){    echo $NACIONALIDAD; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Datos de nacimiento:</span>
                <span class="confirmation-tab-value"><?php if(isset($FECHA_NACIMIENTO)){    echo $FECHA_NACIMIENTO; } ?>,</span>
                <span class="confirmation-tab-value"><?php if(isset($PAIS_NACIMIENTO)){    echo $PAIS_NACIMIENTO; } ?>, </span>
                <span class="confirmation-tab-value"><?php if(isset($PROVINCIA_NACIMIENTO)){    echo $PROVINCIA_NACIMIENTO; } ?></span>
            </p>
           
            <p>
                <span class="confirmation-tab-label">Estado civil:</span>
                <span class="confirmation-tab-value"><?php if(isset($ESTADO_CIVIL)){    echo $ESTADO_CIVIL; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Tipo de sangre:</span>
                <span class="confirmation-tab-value"><?php if(isset($TIPO_SANGRE)){    echo $TIPO_SANGRE; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Género:</span>
                <span class="confirmation-tab-value"><?php if(isset($DENOMINACION_GENERO)){    echo $DENOMINACION_GENERO; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Grupo cultural:</span>
                <span class="confirmation-tab-value"><?php if(isset($GRUPO_CULTURAL)){    echo $GRUPO_CULTURAL; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Trato personal:</span>
                <span class="confirmation-tab-value"><?php if(isset($TRATO_PERSONAL)){    echo $TRATO_PERSONAL; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Profesión:</span>
                <span class="confirmation-tab-value"><?php if(isset($PROFESION)){    echo $PROFESION; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Ocupación:</span>
                <span class="confirmation-tab-value"><?php if(isset($OCUPACION)){    echo $OCUPACION; } ?></span>
            </p>
        </div> 
        <div role="tabpanel" class="tab-pane" id="informacion-contacto">
            
            <div class="row">
                <div class="col-md-6, col-sm-6, col-xs-6">
            <h5>CONTACTO DE DOMICILIO</h5>
            <p>
                <span class="confirmation-tab-label">Operadora telefónica:</span>
                <span class="confirmation-tab-value"><?php if(isset($NOMBRE_OPERADOR_DOMICILIO)){    echo $NOMBRE_OPERADOR_DOMICILIO; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Celular:</span>
                <span class="confirmation-tab-value"><?php if(isset($CELULAR_DOMICILIO)){    echo $CELULAR_DOMICILIO; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Teléfono :</span>
                <span class="confirmation-tab-value"><?php if(isset($TELEFONO_DOMICILIO)){    echo $TELEFONO_DOMICILIO; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Correo electrónico:</span>
                <span class="confirmation-tab-value"><?php if(isset($CORREO_ELECTRONICO_DOMICILIO)){    echo $CORREO_ELECTRONICO_DOMICILIO; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">País:</span>
                <span class="confirmation-tab-value"><?php if(isset($PAIS_DOMICILIO)){    echo $PAIS_DOMICILIO; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Provincia:</span>
                <span class="confirmation-tab-value"><?php if(isset($PROVINCIA_DOMICILIO)){    echo $PROVINCIA_DOMICILIO; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Canton:</span>
                <span class="confirmation-tab-value"><?php if(isset($CANTON_DOMICILIO)){    echo $CANTON_DOMICILIO; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Parroquia:</span>
                <span class="confirmation-tab-value"><?php if(isset($PARROQUIA_DOMICILIO)){    echo $PARROQUIA_DOMICILIO; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Calle Principal:</span>
                <span class="confirmation-tab-value"><?php if(isset($DIRECCION_CALLE_PRINCIPAL_DOMICILIO)){    echo $DIRECCION_CALLE_PRINCIPAL_DOMICILIO; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Nro:</span>
                <span class="confirmation-tab-value"><?php if(isset($DIRECCION_NUMERO_DOMICILIO)){    echo $DIRECCION_NUMERO_DOMICILIO; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Calle Secundaria 1:</span>
                <span class="confirmation-tab-value"><?php if(isset($DIRECCION_CALLE_SECUNDARIA1_DOMICILIO)){    echo $DIRECCION_CALLE_SECUNDARIA1_DOMICILIO; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Calle Secundaria 2:</span>
                <span class="confirmation-tab-value"><?php if(isset($DIRECCION_CALLE_SECUNDARIA2)){    echo $DIRECCION_CALLE_SECUNDARIA2; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Dirección de referencia:</span>
                <span class="confirmation-tab-value"><?php if(isset($DIRECCION_REFERENCIA_DOMICILIO)){    echo $DIRECCION_REFERENCIA_DOMICILIO; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Descripción:</span>
                <span class="confirmation-tab-value"><?php if(isset($DESCRIPCION_DOMICILIO)){    echo $DESCRIPCION_DOMICILIO; } ?></span>
            </p>
            </div>
            <div class="col-md-6, col-sm-6, col-xs-6">
             <h5>CONTACTO LABORAL</h5>
            <p>
                <span class="confirmation-tab-label">Operadora telefónica:</span>
                <span class="confirmation-tab-value"><?php if(isset($NOMBRE_OPERADOR_CONTACTO_LABORAL)){    echo $NOMBRE_OPERADOR_CONTACTO_LABORAL; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Celular:</span>
                <span class="confirmation-tab-value"><?php if(isset($CELULAR_CONTACTO_LABORAL)){    echo $CELULAR_CONTACTO_LABORAL; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Teléfono :</span>
                <span class="confirmation-tab-value"><?php if(isset($TELEFONO_CONTACTO_LABORAL)){    echo $TELEFONO_CONTACTO_LABORAL; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Correo electrónico:</span>
                <span class="confirmation-tab-value"><?php if(isset($CORREO_ELECTRONICO_CONTACTO_LABORAL)){    echo $CORREO_ELECTRONICO_CONTACTO_LABORAL; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">País:</span>
                <span class="confirmation-tab-value"><?php if(isset($PAIS_CONTACTO_LABORAL)){    echo $PAIS_CONTACTO_LABORAL; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Provincia:</span>
                <span class="confirmation-tab-value"><?php if(isset($PROVINCIA_CONTACTO_LABORAL)){    echo $PROVINCIA_CONTACTO_LABORAL; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Canton:</span>
                <span class="confirmation-tab-value"><?php if(isset($CANTON_CONTACTO_LABORAL)){    echo $CANTON_CONTACTO_LABORAL; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Parroquia:</span>
                <span class="confirmation-tab-value"><?php if(isset($PARROQUIA_CONTACTO_LABORAL)){    echo $PARROQUIA_CONTACTO_LABORAL; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Calle Principal:</span>
                <span class="confirmation-tab-value"><?php if(isset($DIRECCION_CALLE_PRINCIPAL_CONTACTO_LABORAL)){    echo $DIRECCION_CALLE_PRINCIPAL_CONTACTO_LABORAL; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Nro:</span>
                <span class="confirmation-tab-value"><?php if(isset($DIRECCION_NUMERO_CONTACTO_LABORAL)){    echo $DIRECCION_NUMERO_CONTACTO_LABORAL; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Calle Secundaria 1:</span>
                <span class="confirmation-tab-value"><?php if(isset($DIRECCION_CALLE_SECUNDARIA1_CONTACTO_LABORAL)){    echo $DIRECCION_CALLE_SECUNDARIA1_CONTACTO_LABORAL; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Calle Secundaria 2:</span>
                <span class="confirmation-tab-value"><?php if(isset($DIRECCION_CALLE_SECUNDARIA2)){    echo $DIRECCION_CALLE_SECUNDARIA2; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Dirección de referencia:</span>
                <span class="confirmation-tab-value"><?php if(isset($DIRECCION_REFERENCIA_CONTACTO_LABORAL)){    echo $DIRECCION_REFERENCIA_CONTACTO_LABORAL; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Descripción:</span>
                <span class="confirmation-tab-value"><?php if(isset($DESCRIPCION_CONTACTO_LABORAL)){    echo $DESCRIPCION_CONTACTO_LABORAL; } ?></span>
            </p>
            </div>
            
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="informacion-emergencia">
            <p>
                <span class="confirmation-tab-label">Persona a llamar en caso de emergencia:</span>
                <span class="confirmation-tab-value"><?php if(isset($PERSONA_LLAMAR_EMERGENCIA)){    echo $PERSONA_LLAMAR_EMERGENCIA; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Parentezco o afinidad:</span>
                <span class="confirmation-tab-value"><?php if(isset($PARENTESCO_AFINIDAD)){    echo $PARENTESCO_AFINIDAD; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Teléfono de emergencia:</span>
                <span class="confirmation-tab-value"><?php if(isset($TELEFONO_EMERGENCIA)){    echo $TELEFONO_EMERGENCIA; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Celular de emergencia:</span>
                <span class="confirmation-tab-value"><?php if(isset($CELULAR_EMERGENCIA)){    echo $CELULAR_EMERGENCIA; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Dirección de emergencia:</span>
                <span class="confirmation-tab-value"><?php if(isset($DIRECCION_EMERGENCIA)){    echo $DIRECCION_EMERGENCIA; } ?></span>
            </p>
        </div>
        <div role="tabpanel" class="tab-pane" style="padding: 20px;" id="informacion-conaddis">
            
            <p>
                <span class="confirmation-tab-label">Carné de conaddis:</span>
                <span class="confirmation-tab-value"><?php if(isset($CARNET_CONADIS)){    echo $CARNET_CONADIS; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Tipo de discapacidad:</span>
                <span class="confirmation-tab-value"><?php if(isset($TIPO_DISCAPACIDAD)){    echo $TIPO_DISCAPACIDAD; } ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Porcentaje de discapacidad:</span>
                <span class="confirmation-tab-value"><?php if(isset($PORCENTAJE_DICAPACIDAD)){    echo $PORCENTAJE_DICAPACIDAD;    echo '%';} ?></span>
            </p>
            <p>
                <span class="confirmation-tab-label">Descripción de la discapacidad:</span>
                <span class="confirmation-tab-value"><?php if(isset($DESCRIPCION_DISCAPACIDAD)){    echo $DESCRIPCION_DISCAPACIDAD; } ?></span>
            </p>
        </div>
    </div>

</div>