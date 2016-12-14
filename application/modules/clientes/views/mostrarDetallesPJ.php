<div class="detalles">

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist" style="border-bottom: none;">
        <li role="presentation" class="active"><a href="#informacion-general" aria-controls="home" role="tab" data-toggle="tab">Datos generales</a></li>
        <li role="presentation"><a href="#informacion-contacto" aria-controls="messages" role="tab" data-toggle="tab">Información de contacto</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content" style="border: 1px #ddd solid;">
        <div role="tabpanel"class="tab-pane active" id="informacion-general">
            
            <p>
                <span class="confirmation-tab-label">Nombre comercial:</span>
                 <span class="label label-warning">
                    <span class="confirmation-tab-value"><?php if(isset($NOMBRE_COMERCIAL)){    echo $NOMBRE_COMERCIAL; } ?></span>
                 </span>
            </p>
            <p>
                <span class="confirmation-tab-label">Razón social:</span>
                <span class="confirmation-tab-value"><?php if(isset($RAZON_SOCIAL)){    echo $RAZON_SOCIAL; } ?></span>
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
                <span class="confirmation-tab-label">Representante:</span>
                    <span  class="confirmation-tab-value"><?php if(isset($PRIMER_NOMBRE)){    echo $PRIMER_NOMBRE; } ?></span>
                    <span  class="confirmation-tab-value"><?php if(isset($SEGUNDO_NOMBRE)){    echo $SEGUNDO_NOMBRE; } ?></span>
                    <span class="confirmation-tab-value"><?php if(isset($APELLIDO_PATERNO)){    echo $APELLIDO_PATERNO; } ?></span>
                    <span class="confirmation-tab-value"><?php if(isset($APELLIDO_MATERNO)){    echo $APELLIDO_MATERNO; } ?></span>
            </p>
                        
            
        </div> 
        <div role="tabpanel" class="tab-pane" id="informacion-contacto">
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
    </div>

</div>