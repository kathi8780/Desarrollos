<?php

class Clientes_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function buscar_persona_natural($data = array()) {
        $arrayParametros = array();
        $arrayParametros['primerNombre'] = $data['primerNombre'] != '' ? '%' . $data['primerNombre'] . '%' : NULL;
        $arrayParametros['segundoNombre'] = $data['segundoNombre'] != '' ? '%' . $data['segundoNombre'] . '%' : NULL;
        $arrayParametros['apellidoPaterno'] = $data['apellidoPaterno'] != '' ? '%' . $data['apellidoPaterno'] . '%' : NULL;
        $arrayParametros['apellidoMaterno'] = $data['apellidoMaterno'] != '' ? '%' . $data['apellidoMaterno'] . '%' : NULL;
        $arrayParametros['nroDocumento'] = $data['nroDocumento'] != '' ? '%' . $data['nroDocumento'] . '%' : NULL;

        $this->db->select('*');
        $this->db->from('tab_personas');
        $this->db->join('tab_clientes_naturales', 'tab_clientes_naturales.ID_PERSONA = tab_personas.ID_PERSONA');
        $this->db->join('tab_clientes', 'tab_clientes_naturales.ID_CLIENTE = tab_clientes.ID_CLIENTE');

        if ($arrayParametros['primerNombre'] != NULL) {
            $this->db->where('tab_personas.PRIMER_NOMBRE like', $arrayParametros['primerNombre']);
        }
        if ($arrayParametros['segundoNombre'] != NULL) {
            $this->db->where('tab_personas.SEGUNDO_NOMBRE like', $arrayParametros['segundoNombre']);
        }
        if ($arrayParametros['apellidoPaterno'] != NULL) {
            $this->db->where('tab_personas.APELLIDO_PATERNO like', $arrayParametros['apellidoPaterno']);
        }
        if ($arrayParametros['apellidoMaterno'] != NULL) {
            $this->db->where('tab_personas.APELLIDO_MATERNO like', $arrayParametros['apellidoMaterno']);
        }
        if ($arrayParametros['nroDocumento'] != NULL) {
            $this->db->where('tab_clientes.NRO_DOCUMENTO like', $arrayParametros['nroDocumento']);
        }
        $consulta = $this->db->get();
        $resultado = $consulta->result_array();
        return $resultado;
    }

    public function buscar_persona_juridica($data = array()) {
        $arrayParametros = array();
        $arrayParametros['nombreComercial'] = $data['nombreComercial'] != '' ? '%' . $data['nombreComercial'] . '%' : NULL;
        $arrayParametros['nroDocumento'] = $data['nroDocumento'] != '' ? '%' . $data['nroDocumento'] . '%' : NULL;
        $this->db->select('*');
        $this->db->from('tab_clientes_juridicos');
        $this->db->join('tab_clientes', 'tab_clientes.ID_CLIENTE=tab_clientes_juridicos.ID_CLIENTE');

        if ($arrayParametros['nombreComercial'] != NULL) {
            $this->db->where('tab_clientes_juridicos.NOMBRE_COMERCIAL like', $arrayParametros['nombreComercial']);
        }
        if ($arrayParametros['nroDocumento'] != NULL) {
            $this->db->where('tab_clientes.NRO_DOCUMENTO like', $arrayParametros['nroDocumento']);
        }
        $consulta = $this->db->get();
        $resultado = $consulta->result_array();
        return $resultado;
    }

    public function obtener_datos_cliente_natural($idCliente = null) 
    {
        $this->db->select('tab_personas.*, '
                . 'tab_contactos.ID_PAIS ID_CONTACTO_LABORAL,'
                . 'tab_contactos.ID_PAIS ID_PAIS_CONTACTO_LABORAL,'
                . 'tab_contactos.CORREO_ELECTRONICO CORREO_ELECTRONICO_CONTACTO_LABORAL,'
                . 'tab_contactos.ID_PROVINCIA ID_PROVINCIA_CONTACTO_LABORAL,'
                . 'tab_contactos.ID_CANTON ID_CANTON_CONTACTO_LABORAL,'
                . 'tab_contactos.ID_PARROQUIA ID_PARROQUIA_CONTACTO_LABORAL,'
                . 'tab_contactos.DIRECCION_CALLE_PRINCIPAL DIRECCION_CALLE_PRINCIPAL_CONTACTO_LABORAL,'
                . 'tab_contactos.DIRECCION_NUMERO DIRECCION_NUMERO_CONTACTO_LABORAL,'
                . 'tab_contactos.DIRECCION_CALLE_SECUNDARIA1 DIRECCION_CALLE_SECUNDARIA1_CONTACTO_LABORAL,'
                . 'tab_contactos.DIRECCION_CALLE_SECUNDARIA2 DIRECCION_CALLE_SECUNDARIA2_CONTACTO_LABORAL,'
                . 'tab_contactos.DIRECCION_REFERENCIA DIRECCION_REFERENCIA_CONTACTO_LABORAL,'
                . 'tab_contactos.TELEFONO TELEFONO_CONTACTO_LABORAL,'
                . 'tab_contactos.CELULAR CELULAR_CONTACTO_LABORAL,'
                . 'tab_contactos.ID_OPERADOR_TELEFONICO ID_OPERADOR_TELEFONICO_CONTACTO_LABORAL,'
                . 'tab_contactos.DESCRIPCION DESCRIPCION_CONTACTO_LABORAL,'
                
                . 'tab_contacto_domicilio.ID_CONTACTO AS ID_CONTACTO_DOMICILIO,'
                . 'tab_contacto_domicilio.ID_PAIS ID_PAIS_DOMICILIO,'
                . 'tab_contacto_domicilio.CORREO_ELECTRONICO CORREO_ELECTRONICO_DOMICILIO,'
                . 'tab_contacto_domicilio.ID_PROVINCIA ID_PROVINCIA_DOMICILIO,'
                . 'tab_contacto_domicilio.ID_CANTON ID_CANTON_DOMICILIO,'
                . 'tab_contacto_domicilio.ID_PARROQUIA ID_PARROQUIA_DOMICILIO,'
                . 'tab_contacto_domicilio.DIRECCION_CALLE_PRINCIPAL DIRECCION_CALLE_PRINCIPAL_DOMICILIO,'
                . 'tab_contacto_domicilio.DIRECCION_NUMERO DIRECCION_NUMERO_DOMICILIO,'
                . 'tab_contacto_domicilio.DIRECCION_CALLE_SECUNDARIA1 DIRECCION_CALLE_SECUNDARIA1_DOMICILIO,'
                . 'tab_contacto_domicilio.DIRECCION_CALLE_SECUNDARIA2 DIRECCION_CALLE_SECUNDARIA2_DOMICILIO,'
                . 'tab_contacto_domicilio.DIRECCION_REFERENCIA DIRECCION_REFERENCIA_DOMICILIO,'
                . 'tab_contacto_domicilio.TELEFONO TELEFONO_DOMICILIO,'
                . 'tab_contacto_domicilio.CELULAR CELULAR_DOMICILIO,'
                . 'tab_contacto_domicilio.ID_OPERADOR_TELEFONICO ID_OPERADOR_TELEFONICO_DOMICILIO,'
                . 'tab_contacto_domicilio.DESCRIPCION DESCRIPCION_DOMICILIO,'
                
                . 'tab_clientes.ID_CLIENTE,'
                . 'tab_clientes.TIPO_DOCUMENTO,'
                . 'tab_clientes.NRO_DOCUMENTO,'
                . 'tab_clientes.ID_NATURALEZA_PERSONA,'
                . 'tab_clientes.ID_TIPO_CONTRIBUYENTE,'
                . 'tab_clientes.ES_CONTRIBUYENTE_ESPECIAL'
        );
        $this->db->from('tab_clientes_naturales');
        $this->db->join('tab_clientes', 'tab_clientes_naturales.ID_CLIENTE = tab_clientes.ID_CLIENTE ');
        $this->db->join('tab_personas', 'tab_personas.ID_PERSONA = tab_clientes_naturales.ID_PERSONA ');
        $this->db->join('tab_contactos as tab_contacto_domicilio', 'tab_clientes.ID_CLIENTE = tab_contacto_domicilio.ID_CLIENTE AND tab_contacto_domicilio.ID_TIPO_CONTACTO=2 AND tab_contacto_domicilio.ESTADO=1', 'left');
        $this->db->join('tab_contactos', 'tab_clientes_naturales.ID_CLIENTE = tab_contactos.ID_CLIENTE AND tab_contactos.ID_TIPO_CONTACTO=1 AND tab_contactos.ESTADO=1', 'left');
        $this->db->where('tab_clientes.ID_CLIENTE', $idCliente);
        $query = $this->db->get();
        return $query->row_array();
    }
    
    public function obtener_detalles_cliente_natural($idCliente = null) {
        $this->db->select('tab_personas.*, '
                
                . 'tab_contactos.ID_CONTACTO ID_CONTACTO_LABORAL,'
                . 'tab_contactos.ID_PAIS ID_PAIS_CONTACTO_LABORAL,'
                . 'tab_contactos.CORREO_ELECTRONICO CORREO_ELECTRONICO_CONTACTO_LABORAL,'
                . 'tab_contactos.ID_PROVINCIA ID_PROVINCIA_CONTACTO_LABORAL,'
                . 'tab_contactos.ID_CANTON ID_CANTON_CONTACTO_LABORAL,'
                . 'tab_contactos.ID_PARROQUIA ID_PARROQUIA_CONTACTO_LABORAL,'
                . 'tab_contactos.DIRECCION_CALLE_PRINCIPAL DIRECCION_CALLE_PRINCIPAL_CONTACTO_LABORAL,'
                . 'tab_contactos.DIRECCION_NUMERO DIRECCION_NUMERO_CONTACTO_LABORAL,'
                . 'tab_contactos.DIRECCION_CALLE_SECUNDARIA1 DIRECCION_CALLE_SECUNDARIA1_CONTACTO_LABORAL,'
                . 'tab_contactos.DIRECCION_CALLE_SECUNDARIA2 DIRECCION_CALLE_SECUNDARIA2_CONTACTO_LABORAL,'
                . 'tab_contactos.DIRECCION_REFERENCIA DIRECCION_REFERENCIA_CONTACTO_LABORAL,'
                . 'tab_contactos.TELEFONO TELEFONO_CONTACTO_LABORAL,'
                . 'tab_contactos.CELULAR CELULAR_CONTACTO_LABORAL,'
                . 'tab_contactos.ID_OPERADOR_TELEFONICO ID_OPERADOR_TELEFONICO_CONTACTO_LABORAL,'
                . 'tab_contactos.DESCRIPCION DESCRIPCION_CONTACTO_LABORAL,'
                
                . 'pais_contacto_laboral.PAIS AS PAIS_CONTACTO_LABORAL,'
                . 'provincias_contacto_laboral.PROVINCIA AS PROVINCIA_CONTACTO_LABORAL,'
                . 'cantones_contacto_laboral.CANTON AS CANTON_CONTACTO_LABORAL,'
                . 'parroquias_contacto_laboral.PARROQUIA AS PARROQUIA_CONTACTO_LABORAL,'
                . 'operadoras_telefonicas_contacto_laboral.NOMBRE_OPERADOR AS NOMBRE_OPERADOR_CONTACTO_LABORAL,'
                
                . 'tab_contacto_domicilio.ID_CONTACTO AS ID_CONTACTO_DOMICILIO,'
                . 'tab_contacto_domicilio.ID_PAIS ID_PAIS_DOMICILIO,'
                . 'tab_contacto_domicilio.CORREO_ELECTRONICO CORREO_ELECTRONICO_DOMICILIO,'
                . 'tab_contacto_domicilio.ID_PROVINCIA ID_PROVINCIA_DOMICILIO,'
                . 'tab_contacto_domicilio.ID_CANTON ID_CANTON_DOMICILIO,'
                . 'tab_contacto_domicilio.ID_PARROQUIA ID_PARROQUIA_DOMICILIO,'
                . 'tab_contacto_domicilio.DIRECCION_CALLE_PRINCIPAL DIRECCION_CALLE_PRINCIPAL_DOMICILIO,'
                . 'tab_contacto_domicilio.DIRECCION_NUMERO DIRECCION_NUMERO_DOMICILIO,'
                . 'tab_contacto_domicilio.DIRECCION_CALLE_SECUNDARIA1 DIRECCION_CALLE_SECUNDARIA1_DOMICILIO,'
                . 'tab_contacto_domicilio.DIRECCION_CALLE_SECUNDARIA2 DIRECCION_CALLE_SECUNDARIA2_DOMICILIO,'
                . 'tab_contacto_domicilio.DIRECCION_REFERENCIA DIRECCION_REFERENCIA_DOMICILIO,'
                . 'tab_contacto_domicilio.TELEFONO TELEFONO_DOMICILIO,'
                . 'tab_contacto_domicilio.CELULAR CELULAR_DOMICILIO,'
                . 'tab_contacto_domicilio.ID_OPERADOR_TELEFONICO ID_OPERADOR_TELEFONICO_DOMICILIO,'
                . 'tab_contacto_domicilio.DESCRIPCION DESCRIPCION_DOMICILIO,'
                
                . 'pais_domicilio.PAIS AS PAIS_DOMICILIO,'
                . 'provincias_domicilio.PROVINCIA AS PROVINCIA_DOMICILIO,'
                . 'cantones_domicilio.CANTON AS CANTON_DOMICILIO,'
                . 'parroquias_domicilio.PARROQUIA AS PARROQUIA_DOMICILIO,'
                . 'operadoras_telefonicas_domicilio.NOMBRE_OPERADOR AS NOMBRE_OPERADOR_DOMICILIO,'
                
                . 'tab_clientes.ID_CLIENTE,'
                . 'tab_clientes.TIPO_DOCUMENTO,'
                . 'tab_clientes.NRO_DOCUMENTO,'
                . 'tab_clientes.ID_NATURALEZA_PERSONA,'
                . 'tab_clientes.ID_TIPO_CONTRIBUYENTE,'
                . 'tab_clientes.ES_CONTRIBUYENTE_ESPECIAL,'
                
                . 'tab_tipos_documentos.NOMBRE_TIPO_DOCUMENTO,'
                . 'tab_tipos_contribuyentes.TIPO_CONTRIBUYENTE,'
                . 'tab_tipos_becas.TIPO_BECA,'
                . 'tab_nacionalidades.NACIONALIDAD,'
                . 'pais_nacimiento.PAIS PAIS_NACIMIENTO,'
                . 'provincia_nacimiento.PROVINCIA PROVINCIA_NACIMIENTO,'
                . 'tab_estados_civiles.ESTADO_CIVIL,'
                . 'tab_grupos_culturales.GRUPO_CULTURAL,'
                . 'tab_profesiones.PROFESION,'
                . 'tab_generos.GENERO DENOMINACION_GENERO,'
        );
        $this->db->from('tab_clientes_naturales');
        $this->db->join('tab_clientes', 'tab_clientes_naturales.ID_CLIENTE = tab_clientes.ID_CLIENTE ');
        $this->db->join('tab_tipos_documentos', 'tab_clientes.TIPO_DOCUMENTO = tab_tipos_documentos.TIPO_DOCUMENTO ');
        $this->db->join('tab_tipos_contribuyentes', 'tab_clientes.ID_TIPO_CONTRIBUYENTE = tab_tipos_contribuyentes.ID_TIPO_CONTRIBUYENTE ');
        $this->db->join('tab_personas', 'tab_personas.ID_PERSONA = tab_clientes_naturales.ID_PERSONA ');        
        $this->db->join('tab_tipos_becas', 'tab_personas.ID_TIPO_BECA = tab_tipos_becas.ID_TIPO_BECA ','left');
        $this->db->join('tab_nacionalidades', 'tab_personas.ID_NACIONALIDAD = tab_nacionalidades.ID_NACIONALIDAD ');
        $this->db->join('tab_paises as pais_nacimiento', 'tab_personas.ID_PAIS_NACIMIENTO = pais_nacimiento.ID_PAIS','left');
        $this->db->join('tab_provincias as provincia_nacimiento', 'tab_personas.ID_PROVINCIA_NACIMIENTO = provincia_nacimiento.ID_PROVINCIA','left');
        $this->db->join('tab_estados_civiles', 'tab_personas.ID_ESTADO_CIVIL = tab_estados_civiles.ID_ESTADO_CIVIL','left');
        $this->db->join('tab_grupos_culturales', 'tab_personas.ID_GRUPO_CULTURAL = tab_grupos_culturales.ID_GRUPO_CULTURAL','left');
        $this->db->join('tab_profesiones', 'tab_personas.ID_PROFESION = tab_profesiones.ID_PROFESION','left');
        $this->db->join('tab_generos', 'tab_generos.ABREVIATURA_GENERO = tab_personas.GENERO','left');
        $this->db->join('tab_contactos as tab_contacto_domicilio', 'tab_clientes.ID_CLIENTE = tab_contacto_domicilio.ID_CLIENTE AND tab_contacto_domicilio.ID_TIPO_CONTACTO=2 AND tab_contacto_domicilio.ESTADO=1', 'left');
        $this->db->join('tab_contactos', 'tab_clientes_naturales.ID_CLIENTE = tab_contactos.ID_CLIENTE AND tab_contactos.ID_TIPO_CONTACTO=1 AND tab_contactos.ESTADO=1', 'left');
        
        $this->db->join('tab_paises as pais_domicilio', 'tab_contacto_domicilio.ID_PAIS = pais_domicilio.ID_PAIS', 'left');
        $this->db->join('tab_provincias as provincias_domicilio', 'tab_contacto_domicilio.ID_PROVINCIA = provincias_domicilio.ID_PROVINCIA', 'left');
        $this->db->join('tab_cantones as cantones_domicilio', 'tab_contacto_domicilio.ID_CANTON = cantones_domicilio.ID_CANTON', 'left');
        $this->db->join('tab_parroquias as parroquias_domicilio', 'tab_contacto_domicilio.ID_PARROQUIA = parroquias_domicilio.ID_PARROQUIA', 'left');
        $this->db->join('tab_operadoras_telefonicas as operadoras_telefonicas_domicilio', 'tab_contacto_domicilio.ID_OPERADOR_TELEFONICO = operadoras_telefonicas_domicilio.ID_OPERADOR_TELEFONICO', 'left');
        
        $this->db->join('tab_paises as pais_contacto_laboral', 'tab_contactos.ID_PAIS = pais_contacto_laboral.ID_PAIS', 'left');
        $this->db->join('tab_provincias as provincias_contacto_laboral', 'tab_contactos.ID_PROVINCIA = provincias_contacto_laboral.ID_PROVINCIA', 'left');
        $this->db->join('tab_cantones as cantones_contacto_laboral', 'tab_contactos.ID_CANTON = cantones_contacto_laboral.ID_CANTON', 'left');
        $this->db->join('tab_parroquias as parroquias_contacto_laboral', 'tab_contactos.ID_PARROQUIA = parroquias_contacto_laboral.ID_PARROQUIA', 'left');
        $this->db->join('tab_operadoras_telefonicas as operadoras_telefonicas_contacto_laboral', 'tab_contactos.ID_OPERADOR_TELEFONICO = operadoras_telefonicas_contacto_laboral.ID_OPERADOR_TELEFONICO', 'left');
        
        $this->db->where('tab_clientes.ID_CLIENTE', $idCliente);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function obtener_datos_clientes_juridicos($idCliente = null) {
        $this->db->select('tab_clientes.ID_CLIENTE,'
                . 'tab_clientes.TIPO_DOCUMENTO, '
                . 'tab_clientes.NRO_DOCUMENTO, '
                . 'tab_clientes.ID_NATURALEZA_PERSONA, '
                . 'tab_clientes.ID_TIPO_CONTRIBUYENTE, '
                . 'tab_clientes.ES_CONTRIBUYENTE_ESPECIAL, '
                
                . 'tab_clientes_juridicos.NOMBRE_COMERCIAL,'
                . 'tab_clientes_juridicos.RAZON_SOCIAL,'
                . 'tab_clientes_juridicos.ID_REPRESENTANTE, '
                . 'tab_clientes_juridicos.ES_PUBLICO, '
                . 'tab_clientes_juridicos.ES_SIN_FINES_DE_LUCRO, '
                
                . 'tab_contactos.CORREO_ELECTRONICO ,'
                . 'tab_contactos.ID_PAIS ,'
                . 'tab_contactos.ID_PROVINCIA ,'
                . 'tab_contactos.ID_CANTON ,'
                . 'tab_contactos.ID_PARROQUIA ,'
                . 'tab_contactos.DIRECCION_CALLE_PRINCIPAL ,'
                . 'tab_contactos.DIRECCION_NUMERO ,'
                . 'tab_contactos.DIRECCION_CALLE_SECUNDARIA1 ,'
                . 'tab_contactos.DIRECCION_CALLE_SECUNDARIA2 ,'
                . 'tab_contactos.DIRECCION_REFERENCIA ,'
                . 'tab_contactos.TELEFONO ,'
                . 'tab_contactos.CELULAR ,'
                . 'tab_contactos.ID_OPERADOR_TELEFONICO ,'
                . 'tab_contactos.ID_TIPO_CONTACTO ,'
                . 'tab_contactos.DESCRIPCION ,'
                . 'tab_contactos.ESTADO ,'
                
                . 'tab_representantes.PRIMER_NOMBRE,'
                . 'tab_representantes.SEGUNDO_NOMBRE,'
                . 'tab_representantes.APELLIDO_PATERNO,'
                . 'tab_representantes.APELLIDO_MATERNO');
        $this->db->from('tab_clientes');
        $this->db->join('tab_clientes_juridicos', 'tab_clientes.ID_CLIENTE = tab_clientes_juridicos.ID_CLIENTE');
        $this->db->join('tab_contactos', 'tab_clientes.ID_CLIENTE = tab_contactos.ID_CLIENTE  AND tab_contactos.ID_TIPO_CONTACTO=2 AND tab_contactos.ESTADO=1', 'left');
        $this->db->join('tab_representantes', 'tab_representantes.ID_REPRESENTANTE = tab_clientes_juridicos.ID_REPRESENTANTE','left');
        $this->db->where('tab_clientes.ID_CLIENTE', $idCliente);
        $consulta = $this->db->get();
        $resultado = $consulta->row_array();
        return $resultado;
    }
    
     public function obtener_detalles_clientes_juridicos($idCliente = null) {
        $this->db->select('tab_clientes.ID_CLIENTE,'
                . 'tab_clientes.TIPO_DOCUMENTO, '
                . 'tab_clientes.NRO_DOCUMENTO, '
                . 'tab_clientes.ID_NATURALEZA_PERSONA, '
                . 'tab_clientes.ID_TIPO_CONTRIBUYENTE, '
                . 'tab_clientes.ES_CONTRIBUYENTE_ESPECIAL, '
                
                . 'tab_clientes_juridicos.NOMBRE_COMERCIAL,'
                . 'tab_clientes_juridicos.RAZON_SOCIAL,'
                . 'tab_clientes_juridicos.ID_REPRESENTANTE, '
                . 'tab_clientes_juridicos.ES_PUBLICO, '
                . 'tab_clientes_juridicos.ES_SIN_FINES_DE_LUCRO, '
                . 'tab_tipos_documentos.NOMBRE_TIPO_DOCUMENTO,'
                . 'tab_tipos_contribuyentes.TIPO_CONTRIBUYENTE,'
                
                . 'tab_contacto_domicilio.ID_CONTACTO AS ID_CONTACTO_DOMICILIO,'
                . 'tab_contacto_domicilio.ID_PAIS ID_PAIS_DOMICILIO,'
                . 'tab_contacto_domicilio.CORREO_ELECTRONICO CORREO_ELECTRONICO_DOMICILIO,'
                . 'tab_contacto_domicilio.ID_PROVINCIA ID_PROVINCIA_DOMICILIO,'
                . 'tab_contacto_domicilio.ID_CANTON ID_CANTON_DOMICILIO,'
                . 'tab_contacto_domicilio.ID_PARROQUIA ID_PARROQUIA_DOMICILIO,'
                . 'tab_contacto_domicilio.DIRECCION_CALLE_PRINCIPAL DIRECCION_CALLE_PRINCIPAL_DOMICILIO,'
                . 'tab_contacto_domicilio.DIRECCION_NUMERO DIRECCION_NUMERO_DOMICILIO,'
                . 'tab_contacto_domicilio.DIRECCION_CALLE_SECUNDARIA1 DIRECCION_CALLE_SECUNDARIA1_DOMICILIO,'
                . 'tab_contacto_domicilio.DIRECCION_CALLE_SECUNDARIA2 DIRECCION_CALLE_SECUNDARIA2_DOMICILIO,'
                . 'tab_contacto_domicilio.DIRECCION_REFERENCIA DIRECCION_REFERENCIA_DOMICILIO,'
                . 'tab_contacto_domicilio.TELEFONO TELEFONO_DOMICILIO,'
                . 'tab_contacto_domicilio.CELULAR CELULAR_DOMICILIO,'
                . 'tab_contacto_domicilio.ID_OPERADOR_TELEFONICO ID_OPERADOR_TELEFONICO_DOMICILIO,'
                . 'tab_contacto_domicilio.DESCRIPCION DESCRIPCION_DOMICILIO,'
                
                . 'pais_domicilio.PAIS AS PAIS_DOMICILIO,'
                . 'provincias_domicilio.PROVINCIA AS PROVINCIA_DOMICILIO,'
                . 'cantones_domicilio.CANTON AS CANTON_DOMICILIO,'
                . 'parroquias_domicilio.PARROQUIA AS PARROQUIA_DOMICILIO,'
                . 'operadoras_telefonicas_domicilio.NOMBRE_OPERADOR AS NOMBRE_OPERADOR_DOMICILIO,'
                
                . 'representante.PRIMER_NOMBRE,'
                . 'representante.SEGUNDO_NOMBRE,'
                . 'representante.APELLIDO_PATERNO,'
                . 'representante.APELLIDO_MATERNO');
        
        $this->db->from('tab_clientes');
        $this->db->join('tab_clientes_juridicos', 'tab_clientes.ID_CLIENTE = tab_clientes_juridicos.ID_CLIENTE');
        $this->db->join('tab_tipos_documentos', 'tab_clientes.TIPO_DOCUMENTO = tab_tipos_documentos.TIPO_DOCUMENTO ');
        $this->db->join('tab_tipos_contribuyentes', 'tab_clientes.ID_TIPO_CONTRIBUYENTE = tab_tipos_contribuyentes.ID_TIPO_CONTRIBUYENTE ');
        
        $this->db->join('tab_contactos tab_contacto_domicilio', 'tab_clientes.ID_CLIENTE = tab_contacto_domicilio.ID_CLIENTE  AND tab_contacto_domicilio.ID_TIPO_CONTACTO=2 AND tab_contacto_domicilio.ESTADO=1', 'left');
        $this->db->join('tab_paises as pais_domicilio', 'tab_contacto_domicilio.ID_PAIS = pais_domicilio.ID_PAIS', 'left');
        $this->db->join('tab_provincias as provincias_domicilio', 'tab_contacto_domicilio.ID_PROVINCIA = provincias_domicilio.ID_PROVINCIA', 'left');
        $this->db->join('tab_cantones as cantones_domicilio', 'tab_contacto_domicilio.ID_CANTON = cantones_domicilio.ID_CANTON', 'left');
        $this->db->join('tab_parroquias as parroquias_domicilio', 'tab_contacto_domicilio.ID_PARROQUIA = parroquias_domicilio.ID_PARROQUIA', 'left');
        $this->db->join('tab_operadoras_telefonicas as operadoras_telefonicas_domicilio', 'tab_contacto_domicilio.ID_OPERADOR_TELEFONICO = operadoras_telefonicas_domicilio.ID_OPERADOR_TELEFONICO', 'left');
        
        $this->db->join('tab_representantes as representante', 'representante.ID_REPRESENTANTE = tab_clientes_juridicos.ID_REPRESENTANTE','left');
        $this->db->where('tab_clientes.ID_CLIENTE', $idCliente);
        $consulta = $this->db->get();
        $resultado = $consulta->row_array();
        return $resultado;
    }

    /*Este método se usa para buscar un cliente por su Nro de documento registrado*/
    public function obtener_cliente_por_nro_documento($nroDocumento = null) {
        if ($nroDocumento === null) {
            return array();
        } else {
            $this->db->select('tab_personas.*,tab_clientes.ID_CLIENTE');
            $this->db->from('tab_personas');
            $this->db->join('tab_clientes_naturales', 'tab_clientes_naturales.ID_PERSONA = tab_personas.ID_PERSONA');
            $this->db->join('tab_clientes', 'tab_clientes.ID_CLIENTE = tab_clientes_naturales.ID_CLIENTE');
            $this->db->where('tab_clientes.NRO_DOCUMENTO', $nroDocumento);
            $query = $this->db->get();
            return $query->row_array();
        }
    }
    
    /*Este método se usa para buscar un cliente juridico por su Nro de documento registrado*/
    public function obtener_cliente_juridico_por_nro_documento($nroDocumento = null) {
        if ($nroDocumento === null) {
            return array();
        } else {
            $this->db->select('tab_clientes.ID_CLIENTE');
            $this->db->from('tab_clientes');
            $this->db->join('tab_clientes_juridicos', 'tab_clientes.ID_CLIENTE = tab_clientes_juridicos.ID_CLIENTE');
            $this->db->where('tab_clientes.NRO_DOCUMENTO', $nroDocumento);
            $query = $this->db->get();
            return $query->row_array();
        }
    }

    /*este método se utiliza para verificar si u Nro de documento ya esta registrado.*/
    public function buscar_cliente_por_nro_documento($nroDocumento = null, $idCliente = NULL) {
        if ($nroDocumento === null) {
            return null;
        } else {
            $this->db->select('tab_clientes.ID_CLIENTE');
            $this->db->from('tab_clientes');
            $this->db->join('tab_clientes_naturales', 'tab_clientes_naturales.ID_CLIENTE=tab_clientes.ID_CLIENTE','left');
            $this->db->join('tab_personas', 'tab_personas.ID_PERSONA = tab_clientes_naturales.ID_PERSONA ','left');
            $this->db->where('tab_clientes.NRO_DOCUMENTO', $nroDocumento);
            if ($idCliente) {
                $this->db->where('tab_clientes.ID_CLIENTE <>', $idCliente);
            }
//            $this->db->or_where('tab_personas.NUMERO_RUC', $nroDocumento);
            $query = $this->db->get();
            return $query->row_array();
        }
    }
    
    public function crearPersona($data) {
        $this->db->insert('tab_personas', $data);
        return $this->db->insert_id();
    }

    public function actualizarPersona($data, $idPersona) {
        $this->db->where('tab_personas.ID_PERSONA', $idPersona);
        $this->db->update('tab_personas', $data);
    }

    public function crearCliente($data) {
        $this->db->insert('tab_clientes', $data);
        return $this->db->insert_id();
    }

    public function actualizarCliente($data, $idCliente) {
        $this->db->where('tab_clientes.ID_CLIENTE', $idCliente);
        $this->db->update('tab_clientes', $data);
    }

    public function crearClienteNatural($data) {
        $this->db->insert('tab_clientes_naturales', $data);
        return $this->db->insert_id();
    }

    public function crearClienteJuridico($data) {
        $this->db->insert('tab_clientes_juridicos', $data);
        return $this->db->insert_id();
    }

    public function actualizarClienteJuridico($data) {
        $this->db->where('tab_clientes_juridicos.ID_CLIENTE', $data['ID_CLIENTE']);
        $this->db->update('tab_clientes_juridicos', $data);
    }
    
    public function crearPersonaAContactar($data) {
        $this->db->insert('tab_personas_a_contactar', $data);
        return $this->db->insert_id();
    }

    public function actualizarPersonaAContactar($data) {
        $this->db->where('tab_personas_a_contactar.ID_PERSONA_CONTACTAR', $data['ID_PERSONA_CONTACTAR']);
        $this->db->update('tab_personas_a_contactar', $data);
    }
    
    public function obtenerDatosClientesParaFactura($idCliente=NULL) {
        $this->db->select('tab_clientes.*,'                
                . 'tab_clientes_juridicos.RAZON_SOCIAL,'                
                . 'tab_personas.*,'                
                . 'tab_tipos_becas.PORCENTAJE,'                                
                . 'tab_contactos.DIRECCION_CALLE_PRINCIPAL,'
                . 'tab_contactos.DIRECCION_NUMERO,'
                . 'tab_contactos.DIRECCION_CALLE_SECUNDARIA1,'
                . 'tab_contactos.TELEFONO,'
                . 'tab_contactos.CELULAR,'
                . 'tab_provincias.PROVINCIA,'                
                . 'tab_paises.PAIS'
                );
        $this->db->from('tab_clientes');
        $this->db->join('tab_contactos','tab_clientes.ID_CLIENTE = tab_contactos.ID_CLIENTE AND tab_contactos.ID_TIPO_CONTACTO = 2 AND tab_contactos.ESTADO = 1','left');
        $this->db->join('tab_provincias','tab_provincias.ID_PROVINCIA = tab_contactos.ID_PROVINCIA','left');
        $this->db->join('tab_paises','tab_contactos.ID_PAIS = tab_paises.ID_PAIS','left');
        $this->db->join('tab_clientes_juridicos','tab_clientes.ID_CLIENTE = tab_clientes_juridicos.ID_CLIENTE', 'left');
        $this->db->join('tab_clientes_naturales','tab_clientes.ID_CLIENTE = tab_clientes_naturales.ID_CLIENTE', 'left');
        $this->db->join('tab_personas','tab_clientes_naturales.ID_PERSONA = tab_personas.ID_PERSONA', 'left');
        $this->db->join('tab_tipos_becas','tab_personas.ID_TIPO_BECA = tab_tipos_becas.ID_TIPO_BECA', 'left');
        $this->db->where('tab_clientes.ID_CLIENTE',$idCliente);

        $query = $this->db->get();
        $result = $query->row_array();
        
        if($result['RAZON_SOCIAL'])
        {
            $result['CLIENTE_DENOMINACION'] = $result['RAZON_SOCIAL'];
        }
        else
        {
            $result['CLIENTE_DENOMINACION'] = $result['PRIMER_NOMBRE'].' '.
                                              $result['SEGUNDO_NOMBRE'].' ' .
                                              $result['APELLIDO_PATERNO'].' '.
                                              $result['APELLIDO_MATERNO'] ;
            
        }
       
        $result['DIRECCION'] = $result['DIRECCION_CALLE_PRINCIPAL'];
        
        if($result['DIRECCION_NUMERO']){
           $result['DIRECCION'] .= ' '.$result['DIRECCION_NUMERO'];
        }
        if($result['DIRECCION_CALLE_SECUNDARIA1']){
           $result['DIRECCION'] .= 'Y '.$result['DIRECCION_CALLE_SECUNDARIA1'];
        }
          //$result['DIRECCION'] .= '. '.$result['PAIS'].', '.$result['PROVINCIA'].'. ' ;
        return $result;
    }
    
    public function obtenerDatosClientesParaAsociacionRubros($idCliente=NULL) {
        $this->db->select('tab_clientes.*,'                
                . 'tab_clientes_juridicos.RAZON_SOCIAL,'                
                . 'tab_personas.*' 
                );
        $this->db->from('tab_clientes');
         $this->db->join('tab_clientes_juridicos','tab_clientes.ID_CLIENTE = tab_clientes_juridicos.ID_CLIENTE', 'left');
        $this->db->join('tab_clientes_naturales','tab_clientes.ID_CLIENTE = tab_clientes_naturales.ID_CLIENTE', 'left');
        $this->db->join('tab_personas','tab_clientes_naturales.ID_PERSONA = tab_personas.ID_PERSONA', 'left');
        $this->db->where('tab_clientes.ID_CLIENTE',$idCliente);

        $query = $this->db->get();
        $result = $query->row_array();
        
        $result['NOMBRE_CLIENTE'] = '';
        if( $result['RAZON_SOCIAL'] != NULL)
        {
            $result['NOMBRE_CLIENTE'] = $result['RAZON_SOCIAL'];
        }
        else
        {
             $result['NOMBRE_CLIENTE'] = $result['PRIMER_NOMBRE'].' '.$result['APELLIDO_PATERNO'].' '.$result['APELLIDO_MATERNO'];
        }
        
        
        if($result['ID_TIPO_CONTRIBUYENTE'] == '2')
        {
            $result['OBLIGADO_A_LLEVAR_CONTABILIDAD'] = TRUE;
        }
        else
        {
            $result['OBLIGADO_A_LLEVAR_CONTABILIDAD'] = FALSE;
        }
        
        
        if($result['ES_CONTRIBUYENTE_ESPECIAL'] == '1')
        {
            $result['ES_CONTRIBUYENTE_ESPECIAL'] = TRUE;
        }
        else
        {
            $result['ES_CONTRIBUYENTE_ESPECIAL'] = FALSE;
        }
        
        
//        esContribuyenteEspecial'=> $datosCliente[],
//        'estaObligadoLlevarcontabilidad
        return $result;
    }
    /*--------------------- METODOS RELACIONADOS CON LOS CONTACTOS -----------------------*/

    public function buscarContacto($datos_contacto) {
        $this->db->select('tab_contactos.ID_CONTACTO');
        $this->db->from('tab_contactos');
        $this->db->where($datos_contacto);

        $query = $this->db->get();
        return $query->row_array();
    }

    public function desactivarContactosLaborales($id_cliente) {
        $data = array();
        $data['ESTADO'] = 0;
        $this->db->where('tab_contactos.ID_CLIENTE', $id_cliente);
        $this->db->where('tab_contactos.ID_TIPO_CONTACTO', 1);
        $this->db->update('tab_contactos', $data);
    }

    public function desactivarContactosDeDomicilio($id_cliente) {
        $data = array();
        $data['ESTADO'] = 0;
        $this->db->where('tab_contactos.ID_CLIENTE', $id_cliente);
        $this->db->where('tab_contactos.ID_TIPO_CONTACTO', 2);
        $this->db->update('tab_contactos', $data);
    }

    public function crearContacto($data) {
        $this->db->insert('tab_contactos', $data);
        return $this->db->insert_id();
    }
    /*--------------------------------------------------------------------*/

    public function crearActualizarClienteNaturalTransaccional($persona, $dataPersona, $dataCliente, $contactoLaboral, $contactoDomiciliar) 
    {
        $this->db->trans_start();
        $idPersona = null;
        $idCliente = null;
        if (isset($persona['ID_PERSONA']) && $persona['ID_PERSONA'] != NULL) 
        {
            $idPersona = $persona['ID_PERSONA'];

            $this->actualizarPersona($dataPersona, $persona['ID_PERSONA']); //actualizo la persona
        } 
        else 
        {
            /* SETEAR LA NATURALEZA DE LA PERSONA */
            $idPersona = $this->crearPersona($dataPersona);
        }

        /* SE INSERTAN O MODIFICAN LOS DATOS DEL CLIENTE */
        if (isset($persona['ID_CLIENTE']) && $persona['ID_CLIENTE'] != NULL) {
            $idCliente = $persona['ID_CLIENTE'];
            $this->actualizarCliente($dataCliente, $persona['ID_CLIENTE']);
        } else {
            /* SETEAR LA NATURALEZA DE LA PERSONA */
            $dataCliente['ID_NATURALEZA_PERSONA'] = 1;

            /* INSERTAR CLIENTE */
            $idCliente = $this->crearCliente($dataCliente);

            /* INSERTAR CLIENTE NATURAL */
            $clienteNatural = array();
            $clienteNatural['ID_CLIENTE'] = $idCliente;
            $clienteNatural['ID_PERSONA'] = $idPersona;
            $this->crearClienteNatural($clienteNatural);
        }

        /* INSERCION O ACTUALIZACION DE LOS CONTACTOS LABORALES O DE DOMICILIO DE LAS PERSONAS */

        /* DETERMINAR SI EXISTE UN CONTACTO CON ESOS DATOS PARA ESA PERSONA */
        $estaVacioContactoLaboral = true;
        foreach ($contactoLaboral as $value) {
            if ($value !== NULL) {
                $estaVacioContactoLaboral = false;
            }
        }

        $contactoLaboral['ID_CLIENTE'] = $idCliente;
        $contactoLaboral['ID_TIPO_CONTACTO'] = 1;
        $contactoLaboral['ESTADO'] = 1;

        $contactoDomiciliar['ID_CLIENTE'] = $idCliente;
        $contactoDomiciliar['ID_TIPO_CONTACTO'] = 2;
        $contactoDomiciliar['ESTADO'] = 1;

        if (!$estaVacioContactoLaboral) {

            $contactosLaborales = $this->buscarContacto($contactoLaboral);
            /* SI NO EXISTE SE PROCEDERA A INSERTAR ESTE CONTACTO NUEVO Y SE CAMBIARA EL ESTADO DEL RESTO DE  LOS CONTACTOS EXISTENTES */
            if (!$contactosLaborales) {
                $this->desactivarContactosLaborales($idCliente);
                $this->crearContacto($contactoLaboral);
            }
        } else {
            $this->desactivarContactosLaborales($idCliente);
        }

        $contactosDomiciliares = $this->buscarContacto($contactoDomiciliar);
        if (!$contactosDomiciliares) {
            $this->desactivarContactosDeDomicilio($idCliente);
            $this->crearContacto($contactoDomiciliar);
        }
        $this->db->trans_complete();
    }
    
    public function crearActualizarClienteNaturalBasicoTransaccional($persona,$dataPersona, $dataCliente, $contactoDomiciliar) 
    {
        $this->db->trans_start();
        $idPersona = null;
        $idCliente = null;

        if (isset($persona['ID_PERSONA']) && $persona['ID_PERSONA'] != NULL) 
        {
            $idPersona = $persona['ID_PERSONA'];

            $this->actualizarPersona($dataPersona, $persona['ID_PERSONA']);
        } 
        else 
        {
            /* SETEAR LA NATURALEZA DE LA PERSONA */
            $dataPersona['OCUPACION']=3;
            $idPersona = $this->crearPersona($dataPersona);
        }

        /* SE INSERTAN O MODIFICAN LOS DATOS DEL CLIENTE */
        if (isset($persona['ID_CLIENTE']) && $persona['ID_CLIENTE'] != NULL) 
        {
            $idCliente = $persona['ID_CLIENTE'];
            $this->actualizarCliente($dataCliente, $persona['ID_CLIENTE']);
        } 
        else 
        {
            /* SETEAR LA NATURALEZA DE LA PERSONA */
            $dataCliente['ID_NATURALEZA_PERSONA'] = 1;

            /* INSERTAR CLIENTE */
            $idCliente = $this->crearCliente($dataCliente);

            /* INSERTAR CLIENTE NATURAL */
            $clienteNatural = array();
            $clienteNatural['ID_CLIENTE'] = $idCliente;
            $clienteNatural['ID_PERSONA'] = $idPersona;
            $this->crearClienteNatural($clienteNatural);
        }

        /* INSERCION O ACTUALIZACION DEL CONTACTO DE DOMICILIO DE LAS PERSONAS */


        $contactoDomiciliar['ID_CLIENTE'] = $idCliente;
        $contactoDomiciliar['ID_TIPO_CONTACTO'] = 2;
        $contactoDomiciliar['ESTADO'] = 1;
        
        $contactosDomiciliares = $this->buscarContacto($contactoDomiciliar);
        if (!$contactosDomiciliares) {
            $this->desactivarContactosDeDomicilio($idCliente);
            $this->crearContacto($contactoDomiciliar);
        }
        $this->db->trans_complete();
    }
    
    public function crearActualizarRepresentante($idRepresentante, $representanteData) { 
        if($idRepresentante == NULL)
        {
            $this->db->insert('tab_representantes', $representanteData);
            return $this->db->insert_id();
        }
        else
        {
            $this->db->where('tab_representantes.ID_REPRESENTANTE', $idRepresentante);
            $this->db->update('tab_representantes', $representanteData);
            return $idRepresentante;
        }
    }

    public function crearActualizarClienteJuridicoTransaccional($data, $persona) {
        $this->db->trans_start();      
        
        /* SE INSERTAN O MODIFICAN LOS DATOS DEL REPRESENTANTE */
        $representanteData = $data['REPRESENTANTE'];
        if($representanteData['PRIMER_NOMBRE'] != "" || $representanteData['APELLIDO_PATERNO']  != "" || $representanteData['SEGUNDO_NOMBRE']  != ""  || $representanteData['APELLIDO_MATERNO']  != "" )
        {
            $idRepresentante = $this->crearActualizarRepresentante($data['ID_REPRESENTANTE'], $representanteData);
            $data['ID_REPRESENTANTE'] = $idRepresentante;
        }
        if($representanteData['PRIMER_NOMBRE'] == "" && $representanteData['APELLIDO_PATERNO']  == "" && $representanteData['SEGUNDO_NOMBRE']  == ""  && $representanteData['APELLIDO_MATERNO']  == "" && $data['ID_REPRESENTANTE'] != "" )
        {
            $data['ID_REPRESENTANTE'] = NULL;
        }
        
        /* SE INSERTAN O MODIFICAN LOS DATOS DEL CLIENTE */
        $idCliente = NULL;
        $cliente = array();
        $cliente['TIPO_DOCUMENTO'] = 'RUC';
        $cliente['NRO_DOCUMENTO'] = $data['NRO_DOCUMENTO'];
        $cliente['ES_CONTRIBUYENTE_ESPECIAL'] = isset($data['ES_CONTRIBUYENTE_ESPECIAL'])?$data['ES_CONTRIBUYENTE_ESPECIAL']:0;
        $cliente['ID_TIPO_CONTRIBUYENTE'] = 2;

        if (isset($persona['ID_CLIENTE']) && $persona['ID_CLIENTE'] != NULL) {
            $idCliente = $persona['ID_CLIENTE'];
            $this->actualizarCliente($cliente, $persona['ID_CLIENTE']);
            
            $clienteJuridico = array();
            $clienteJuridico['ID_CLIENTE'] = $idCliente;
            $clienteJuridico['NOMBRE_COMERCIAL'] = $data['NOMBRE_COMERCIAL'];
            $clienteJuridico['RAZON_SOCIAL'] = $data['RAZON_SOCIAL'];
            $clienteJuridico['ES_PUBLICO'] = isset($data['ES_PUBLICO'])?$data['ES_PUBLICO']:0;
            $clienteJuridico['ES_SIN_FINES_DE_LUCRO'] = isset($data['ES_SIN_FINES_DE_LUCRO'])?$data['ES_SIN_FINES_DE_LUCRO']:0;
            $clienteJuridico['ID_REPRESENTANTE'] = $data['ID_REPRESENTANTE'];
            
            $this->actualizarClienteJuridico($clienteJuridico);
            
        } else {
            /* SETEAR LA NATURALEZA DE LA PERSONA */
            $cliente['ID_NATURALEZA_PERSONA'] = 1;

            /* INSERTAR CLIENTE */
            $idCliente = $this->crearCliente($cliente);

            /* INSERTAR CLIENTE juridico */
            $clienteJuridico = array();
            $clienteJuridico['ID_CLIENTE'] = $idCliente;
            $clienteJuridico['NOMBRE_COMERCIAL'] = $data['NOMBRE_COMERCIAL'];
            $clienteJuridico['RAZON_SOCIAL'] = $data['RAZON_SOCIAL'];
            $clienteJuridico['ES_PUBLICO'] = isset($data['ES_PUBLICO'])?$data['ES_PUBLICO']:0;
            $clienteJuridico['ES_SIN_FINES_DE_LUCRO'] = isset($data['ES_SIN_FINES_DE_LUCRO'])?$data['ES_SIN_FINES_DE_LUCRO']:0;
            $clienteJuridico['ID_REPRESENTANTE'] = $data['ID_REPRESENTANTE'];
            $this->crearClienteJuridico($clienteJuridico);
        }
        
        /*INSERTAR PERSONAS A CONTACTAR*/
        
        $personas_a_contactar = $data['PERSONA_CONTACTAR'];
        foreach ($personas_a_contactar as $personas_a_contactar) {
            $personas_a_contactar['ID_CLIENTE_JURIDICO'] = $idCliente;
            if($personas_a_contactar['ID_PERSONA_CONTACTAR'] != "") //Ya esta registrado 
            {
                if($personas_a_contactar['NOMBRE_COMPLETO'] == "" )
                {
                    $this->actualizarPersonaAContactar(array('ID_CLIENTE_JURIDICO'=>$idCliente, 'ESTADO'=>0,'ID_PERSONA_CONTACTAR'=>$personas_a_contactar['ID_PERSONA_CONTACTAR']));
                }
                else {
                    $this->actualizarPersonaAContactar($personas_a_contactar);
                    
                }
            }
            else {
                 if($personas_a_contactar['NOMBRE_COMPLETO'] != "") // crear nuevo
                 {
                     $this->crearPersonaAContactar($personas_a_contactar);
                 }
            }
            
        }
        
        /* INSERTAR DATOS DE CONTACTO */
        $contactoDomiciliar = $data['CONTACTO_DOMICILIO'];
        foreach ($contactoDomiciliar as $key => $value) {
            if ($value === '') {
                $contactoDomiciliar[$key] = NULL;
            }
        }
        $contactoDomiciliar['ID_CLIENTE'] = $idCliente;
        $contactoDomiciliar['ID_TIPO_CONTACTO'] = 2;
        $contactoDomiciliar['ESTADO'] = 1;

        $contactosDomiciliares = $this->buscarContacto($contactoDomiciliar);
        if (!$contactosDomiciliares) {
            $this->desactivarContactosDeDomicilio($idCliente);
            $this->crearContacto($contactoDomiciliar);
        }

        $this->db->trans_complete();
    }
    
    public function crearActualizarClienteJuridicoBasicoTransaccional($data) {
        $this->db->trans_start();
        /* SE INSERTAN O MODIFICAN LOS DATOS DEL CLIENTE */
        $cliente = array();
        $cliente['TIPO_DOCUMENTO'] = 'RUC';
        $cliente['NRO_DOCUMENTO'] = $data['NRO_DOCUMENTO'];
        $cliente['ID_TIPO_CONTRIBUYENTE'] = 2;

     
            /* SETEAR LA NATURALEZA DE LA PERSONA */
            $cliente['ID_NATURALEZA_PERSONA'] = 1;

            /* INSERTAR CLIENTE */
            $idCliente = $this->crearCliente($cliente);

            /* INSERTAR CLIENTE NATURAL */
            $clienteJuridico = array();
            $clienteJuridico['ID_CLIENTE'] = $idCliente;
            $clienteJuridico['NOMBRE_COMERCIAL'] = $data['NOMBRE_COMERCIAL'];
            $clienteJuridico['RAZON_SOCIAL'] = $data['NOMBRE_COMERCIAL'];
            $clienteJuridico['ID_REPRESENTANTE'] = $data['ID_REPRESENTANTE'];
            $this->crearClienteJuridico($clienteJuridico);
      
        /* INSERTAR DATOS DE CONTACTO */
        $contactoDomiciliar = $data['CONTACTO_DOMICILIO'];
        foreach ($contactoDomiciliar as $key => $value) {
            if ($value === '') {
                $contactoDomiciliar[$key] = NULL;
            }
        }
        $contactoDomiciliar['ID_CLIENTE'] = $idCliente;
        $contactoDomiciliar['ID_TIPO_CONTACTO'] = 2;
        $contactoDomiciliar['ESTADO'] = 1;

        $contactosDomiciliares = $this->buscarContacto($contactoDomiciliar);
        if (!$contactosDomiciliares) {
            $this->desactivarContactosDeDomicilio($idCliente);
            $this->crearContacto($contactoDomiciliar);
        }

        $this->db->trans_complete();
    }

    public function crearUsuario($p_nombre,$s_nombre,$p_apellido,$s_apellido)
    {
        $usuario=substr($p_nombre,0,1).$p_apellido; //wbaro
        if($this->existeUsuario($this->sustituir_caracteres_no_permitidos(strtolower($usuario))))
        {
             $usuario=$p_nombre.substr($p_apellido,0,1); //wilderb
             if($this->existeUsuario($this->sustituir_caracteres_no_permitidos(strtolower($usuario))))
             {
                 if($s_apellido!="" && $s_apellido!=NULL)
                 {
                    $usuario=substr($p_nombre,0,1).substr($p_apellido,0,1).$s_apellido; //wbfernandez
                    if($this->existeUsuario($this->sustituir_caracteres_no_permitidos(strtolower($usuario))))
                    {
                        while ($this->existeUsuario($this->sustituir_caracteres_no_permitidos(strtolower($usuario)))) //wbaro##
                        {
                            $usuario=substr($p_nombre,0,1).$p_apellido.$this->generateRandomString();
                        }
                    }
                 }
                 else
                 {
                    while ($this->existeUsuario($this->sustituir_caracteres_no_permitidos(strtolower($usuario)))) //wbaro##
                    {
                        $usuario=substr($p_nombre,0,1).$p_apellido.$this->generateRandomString();
                    }
                 }
             }
        }
        
        return $this->sustituir_caracteres_no_permitidos(strtolower($usuario));
    }

    public function existeUsuario($usuario)
    {
        $this->db->select('*');
        $this->db->from('tab_personas');
        $this->db->where('tab_personas.USUARIO', $usuario);
        $query = $this->db->get();
        $ds = $query->row_array();

        if (count($ds)>0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
    public function generateRandomString() 
    {
        $length = 2;
        return substr(str_shuffle("0123456789"), 0, $length); //str_shuffle baraja la cadena, o sea cambia los numeros de posicion
    }

    public function sustituir_caracteres_no_permitidos($cadena) 
    {
    $no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò","Ù","Ã™","Ã ","Ã¨","Ã¬","Ã²","Ã¹","ç","Ç","Ã¢","ê","Ã®","Ã´","Ã»","Ã‚","ÃŠ","ÃŽ","Ã”","Ã›","ü","Ã¶","Ã–","Ã¯","Ã¤","«","Ò","Ã","Ã„","Ã‹");
    $permitidas= array ("a","e","i","o","u","A","E","I","O","U","n","N","A","E","I","O","U","a","e","i","o","u","c","C","a","e","i","o","u","A","E","I","O","U","u","o","O","i","a","e","U","I","A","E");
    $texto = str_replace($no_permitidas, $permitidas ,$cadena);
    return $texto;
    }

}
