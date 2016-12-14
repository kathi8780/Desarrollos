<?php

class Clientes extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('clientes_model');
        $this->load->model('tipos_contribuyentes_model');
        $this->load->model('tipos_documentos_model');
        $this->load->model('tipos_becas_model');
        $this->load->model('nacionalidades_model');
        $this->load->model('paises_model');
        $this->load->model('provincias_model');
        $this->load->model('estados_civiles_model');
        $this->load->model('tipos_sangre_model');
        $this->load->model('generos_model');
        $this->load->model('grupos_culturales_model');
        $this->load->model('tratos_personales_model');
        $this->load->model('profesiones_model');
        $this->load->model('ocupaciones_model');
        $this->load->model('operadoras_telefonicas_model');
        $this->load->model('cantones_model');
        $this->load->model('parroquias_model');
        $this->load->model('parentezcos_model');
        $this->load->model('contacto_model');
        $this->load->model('personas_a_contactar_model');
    }
    
    /*
     * METODOS PERSONALIZADOS DE VALIDACION DEL FORMULARIO
     */
    
    /**
     * METODO QUE VERIFICA SI UN NUMERO DE IDENTIFICACION YA EXISTE EN BASE DE DATO
     */
    
    public function noExisteNroIdentificacion($nroDocumento,$idCliente=NULL) {
        $clientes = $this->clientes_model->buscar_cliente_por_nro_documento($nroDocumento,$idCliente);
        if ($clientes != NULL) { //ERROR
             $this->form_validation->set_message("noExisteNroIdentificacion", "Ya está registrado ese número de documento.");
            return false;
        } else {
            return true;
        }
    }

    public function busquedaAvanzada($modulo= 'CLIENTES') 
    {
        if ($this->session->userdata('loggeado'))
        {
            if (!$this->input->is_ajax_request()) 
            {
                $this->load->view('templates/header');
                $this->load->view('busquedaAvanzada',array('MODULO'=>$modulo));
                $this->load->view('templates/footer');
            } 
            else 
            {
                $dataForm = $this->input->post('itca_clientebundle_buscar_personas');

                $naturalezaCliente = $dataForm['naturalezaCliente'];
                if ($naturalezaCliente == 1) 
                {
                    $personasNaturales = $this->clientes_model->buscar_persona_natural($dataForm);
                    $data['personas'] = $personasNaturales;
                    $data['MODULO'] = $modulo;
                    $this->load->view('resultadoBusquedaAvanzadaPN', $data);
                } 
                else if ($naturalezaCliente == 2) 
                {
                    $personasJuridicas = $this->clientes_model->buscar_persona_juridica($dataForm);
                    $data['MODULO'] = $modulo;
                    $data['personas'] = $personasJuridicas;
                    $this->load->view('resultadoBusquedaAvanzadaPJ', $data);
                }
            }
        } 
        else 
        {
            //If no session, redirect to login page
            redirect('admin/login', 'refresh');
        }
    }

    public function mostrarFormularioGestionPN($idCliente = null) 
    {
        if ($this->session->userdata('loggeado')) 
        {
            $this->load->helper('form');
            $this->load->library('form_validation');       
            $this->form_validation->CI =& $this;
            $persona = array();
            if ($idCliente === NULL) 
            {
                $persona['ID_TIPO_CONTRIBUYENTE'] = 1;
                $persona['TIPO_DOCUMENTO'] = 'C';
                $persona['ID_TIPO_BECA'] = 1;
                $persona['ID_NACIONALIDAD'] = 18;
                $persona['ID_PAIS_NACIMIENTO'] = 1;
                $persona['ID_PAIS_DOMICILIO'] = 1;
                $persona['ID_PAIS_CONTACTO_LABORAL'] = NULL;
                $persona['ID_PROVINCIA_NACIMIENTO'] = 19;
                $persona['ID_PROVINCIA_DOMICILIO'] = 19;
                $persona['ID_PROVINCIA_CONTACTO_LABORAL'] = NULL;
                $persona['ID_CANTON_DOMICILIO'] = null;
                $persona['ID_PARROQUIA_DOMICILIO'] = 11;
                $persona['ID_PARROQUIA_CONTACTO_LABORAL'] = NULL;
                $persona['ID_CANTON_CONTACTO_LABORAL'] = null;
                $persona['ID_ESTADO_CIVIL'] = 1;
                $persona['TIPO_SANGRE'] = null;
                $persona['GENERO'] = null;
                $persona['ID_GRUPO_CULTURAL'] = null;
                $persona['TRATO_PERSONAL'] = null;
                $persona['ID_PROFESION'] = null;
                $persona['OCUPACION'] = null;
                $persona['PARENTESCO_AFINIDAD'] = null;
                $persona['ID_OPERADOR_TELEFONICO_DOMICILIO'] = null;
                $persona['ID_OPERADOR_TELEFONICO_CONTACTO_LABORAL'] = null;
            } 
            else 
            {
                $persona = $this->clientes_model->obtener_datos_cliente_natural($idCliente);
                if ($persona == NULL) 
                {
                   /*
                    * Implementar redireccion  pq se esta buscando por in ID_PERSONA q no existe en BD.
                    */ 
                     show_404();
                }

    //            if (isset($persona['FECHA_NACIMIENTO'])) {
    //                $persona['FECHA_NACIMIENTO'] = DateTime::createFromFormat('Y-m-d', $persona['FECHA_NACIMIENTO']);
    //                $persona['FECHA_NACIMIENTO'] = $persona['FECHA_NACIMIENTO']->format('d-m-Y');
    //            }
            }
        
        
            $persona['tiposContribuyentes'] = $this->tipos_contribuyentes_model->get_tipos_contribuyentes();
            $persona['tiposDocumentos'] = $this->tipos_documentos_model->get_tipos_documentos_excepto_RUC();
            $persona['tiposBecas'] = $this->tipos_becas_model->get_tipos_becas();
            $persona['nacionalidades'] = $this->nacionalidades_model->get_nacionalidades();
            $persona['paises'] = $this->paises_model->get_paises();
            $persona['provinciasNacimiento'] = $this->provincias_model->obtener_provincias_x_id_pais($persona['ID_PAIS_NACIMIENTO']);
            $persona['provinciasDomicilio'] = $this->provincias_model->obtener_provincias_x_id_pais($persona['ID_PAIS_DOMICILIO']);
            $persona['provinciasContactoLaboral'] = $this->provincias_model->obtener_provincias_x_id_pais($persona['ID_PAIS_CONTACTO_LABORAL']);
            $persona['cantonesDomicilio'] = $this->cantones_model->obtener_cantones_x_id_provincia($persona['ID_PROVINCIA_DOMICILIO']);
            $persona['cantonesContactoLaboral'] = $this->cantones_model->obtener_cantones_x_id_provincia($persona['ID_PROVINCIA_CONTACTO_LABORAL']);
            $persona['parroquiasDomicilio'] = $this->parroquias_model->obtener_parroquias_x_id_canton($persona['ID_CANTON_DOMICILIO']);
            $persona['parroquiasContactoLaboral'] = $this->parroquias_model->obtener_parroquias_x_id_canton($persona['ID_CANTON_CONTACTO_LABORAL']);
            $persona['estadosCiviles'] = $this->estados_civiles_model->get_estados_civiles();
            $persona['tiposSangre'] = $this->tipos_sangre_model->get_tipos_sangre();
            $persona['generos'] = $this->generos_model->get_generos();
            $persona['gruposCulturales'] = $this->grupos_culturales_model->get_grupos_culturales();
            $persona['tratosPersonales'] = $this->tratos_personales_model->get_tratos_personales();
            $persona['profesiones'] = $this->profesiones_model->get_profesiones();
            $persona['ocupaciones'] = $this->ocupaciones_model->get_ocupaciones();
            $persona['parentezcos'] = $this->parentezcos_model->get_parentezcos();
            $persona['operadoras'] = $this->operadoras_telefonicas_model->get_operadoras_telefonicas_activas();

            $this->load->view('templates/header');
            $this->load->view('creacionAvanzadaPN', $persona);
            $this->load->view('templates/footer');
        }
        else
        {
              //If no session, redirect to login page
          redirect('admin/login', 'refresh');
        }
    }

    public function procesarFormularioGestionPN($idCliente = null) 
    {
        if($this->session->userdata('loggeado'))
        {
        $persona = array();
        if ($idCliente != NULL) 
        {
            $persona = $this->clientes_model->obtener_datos_cliente_natural($idCliente);
            if ($persona == NULL) {
               /*
                * Implementar redireccion  pq se esta buscando por in ID_PERSONA q no existe en BD.
                */ 
                 show_404();
            }
            
        }
        $this->load->helper('form');
        $this->load->library('form_validation');       
        $this->form_validation->CI =& $this;
        
        //$this->form_validation->set_rules('formulario_personas[NRO_DOCUMENTO]', 'número de documento', 'required');
        $this->form_validation->set_rules('formulario_personas[NRO_DOCUMENTO]', 'número de documento', 'required|callback_noExisteNroIdentificacion['.$idCliente.']');
        $this->form_validation->set_rules('formulario_personas[PRIMER_NOMBRE]', 'primer nombre', 'required');
        $this->form_validation->set_rules('formulario_personas[APELLIDO_PATERNO]', 'apellido paterno', 'required');
        $this->form_validation->set_rules('formulario_personas[ID_TIPO_CONTRIBUYENTE]', 'tipo de contribuyente', 'required');
        $this->form_validation->set_rules('formulario_personas[CONTACTO_DOMICILIO][ID_CANTON]', 'canton de domicilio', 'required');
        $this->form_validation->set_rules('formulario_personas[TIPO_DOCUMENTO]', 'tipo de documento', 'required');
        $this->form_validation->set_rules('formulario_personas[ID_NACIONALIDAD]', 'nacionalidad', 'required');
        $this->form_validation->set_rules('formulario_personas[ID_PAIS_NACIMIENTO]', 'país de nacimiento', 'required');
        //$this->form_validation->set_rules('formulario_personas[ID_PROVINCIA_NACIMIENTO]', 'provincia de nacimiento', 'required');
        $this->form_validation->set_rules('formulario_personas[ID_ESTADO_CIVIL]', 'estado civil', 'required');
        $this->form_validation->set_rules('formulario_personas[CONTACTO_DOMICILIO][ID_PAIS]', 'país de domicilio', 'required');
        $this->form_validation->set_rules('formulario_personas[CONTACTO_DOMICILIO][ID_PROVINCIA]', 'provincia de domicilio', 'required');
        $this->form_validation->set_rules('formulario_personas[CONTACTO_DOMICILIO][DIRECCION_CALLE_PRINCIPAL]', 'calle principal', 'required');
        //$this->form_validation->set_rules('formulario_personas[CONTACTO_DOMICILIO][TELEFONO]', 'teléfono', 'required');
        $this->form_validation->set_rules('formulario_personas[CONTACTO_DOMICILIO][CORREO_ELECTRONICO]', 'correo electrónico', 'required');
        $this->form_validation->set_rules('formulario_personas[FECHA_NACIMIENTO]', 'fecha de nacimiento', 'required');
        $this->form_validation->set_rules('formulario_personas[NUMERO_RUC]', 'número de ruc', 'callback_noExisteNroIdentificacion['.$idCliente.']');
        
        
        $data = $this->input->post('formulario_personas');
//        if (isset($data['FECHA_NACIMIENTO'])) {
//            $data['FECHA_NACIMIENTO'] = DateTime::createFromFormat('d-m-Y', $data['FECHA_NACIMIENTO']);
//            $data['FECHA_NACIMIENTO'] = $data['FECHA_NACIMIENTO']->format('Y-m-d');
//        }
        if ($this->form_validation->run() === FALSE) 
        {
            if (isset($persona['ID_CLIENTE']) && $persona['ID_CLIENTE'] != NULL) {
                $data['ID_CLIENTE'] = $persona['ID_CLIENTE'];
                $data['FOTOGRAFIA'] = $persona['FOTOGRAFIA'];
            }
            /* contenido de los combos */
            $data['tiposContribuyentes'] = $this->tipos_contribuyentes_model->get_tipos_contribuyentes();
            $data['tiposDocumentos'] = $this->tipos_documentos_model->get_tipos_documentos_excepto_RUC();
            $data['tiposBecas'] = $this->tipos_becas_model->get_tipos_becas();
            $data['nacionalidades'] = $this->nacionalidades_model->get_nacionalidades();
            $data['paises'] = $this->paises_model->get_paises();
            $data['provinciasNacimiento'] = $this->provincias_model->obtener_provincias_x_id_pais(isset($data['ID_PAIS_NACIMIENTO'])?$data['ID_PAIS_NACIMIENTO']:NULL);
            $data['provinciasDomicilio'] = $this->provincias_model->obtener_provincias_x_id_pais(isset($data['CONTACTO_DOMICILIO']['ID_PAIS'])?$data['CONTACTO_DOMICILIO']['ID_PAIS']:NULL);
            $data['provinciasContactoLaboral'] = $this->provincias_model->obtener_provincias_x_id_pais(isset($data['ID_CONTACTO_LABORAL']['ID_PAIS'])?$data['ID_CONTACTO_LABORAL']['ID_PAIS']:NULL);
            $data['cantonesDomicilio'] = $this->cantones_model->obtener_cantones_x_id_provincia(isset($data['CONTACTO_DOMICILIO']['ID_PROVINCIA'])?$data['CONTACTO_DOMICILIO']['ID_PROVINCIA']:NULL);
            $data['cantonesContactoLaboral'] = $this->cantones_model->obtener_cantones_x_id_provincia(isset($data['ID_CONTACTO_LABORAL']['ID_PROVINCIA'])?$data['ID_CONTACTO_LABORAL']['ID_PROVINCIA']:NULL);
            $data['parroquiasDomicilio'] = $this->parroquias_model->obtener_parroquias_x_id_canton(isset($data['CONTACTO_DOMICILIO']['ID_CANTON'])?$data['CONTACTO_DOMICILIO']['ID_CANTON']:NULL);
            $data['parroquiasContactoLaboral'] = $this->parroquias_model->obtener_parroquias_x_id_canton(isset($data['ID_CONTACTO_LABORAL']['ID_CANTON'])?$data['ID_CONTACTO_LABORAL']['ID_CANTON']:NULL);
            $data['estadosCiviles'] = $this->estados_civiles_model->get_estados_civiles();
            $data['tiposSangre'] = $this->tipos_sangre_model->get_tipos_sangre();
            $data['generos'] = $this->generos_model->get_generos();
            $data['gruposCulturales'] = $this->grupos_culturales_model->get_grupos_culturales();
            $data['tratosPersonales'] = $this->tratos_personales_model->get_tratos_personales();
            $data['profesiones'] = $this->profesiones_model->get_profesiones();
            $data['ocupaciones'] = $this->ocupaciones_model->get_ocupaciones();
            $data['parentezcos'] = $this->parentezcos_model->get_parentezcos();
            $data['operadoras'] = $this->operadoras_telefonicas_model->get_operadoras_telefonicas_activas();

            $data['ID_OPERADOR_TELEFONICO_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['ID_OPERADOR_TELEFONICO'])?$data['ID_CONTACTO_LABORAL']['ID_OPERADOR_TELEFONICO']:NULL;
            $data['CELULAR_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['CELULAR'])?$data['ID_CONTACTO_LABORAL']['CELULAR']:NULL;
            $data['TELEFONO_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['TELEFONO'])?$data['ID_CONTACTO_LABORAL']['TELEFONO']:NULL;
            $data['CORREO_ELECTRONICO_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['CORREO_ELECTRONICO'])?$data['ID_CONTACTO_LABORAL']['CORREO_ELECTRONICO']:NULL;
            $data['ID_PAIS_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['ID_PAIS'])?$data['ID_CONTACTO_LABORAL']['ID_PAIS']:NULL;
            $data['ID_PROVINCIA_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['ID_PROVINCIA'])?$data['ID_CONTACTO_LABORAL']['ID_PROVINCIA']:NULL;
            $data['ID_CANTON_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['ID_CANTON'])?$data['ID_CONTACTO_LABORAL']['ID_CANTON']:NULL;
            $data['ID_PARROQUIA_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['ID_PARROQUIA'])?$data['ID_CONTACTO_LABORAL']['ID_PARROQUIA']:NULL;
            $data['DIRECCION_CALLE_PRINCIPAL_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['DIRECCION_CALLE_PRINCIPAL'])?$data['ID_CONTACTO_LABORAL']['DIRECCION_CALLE_PRINCIPAL']:NULL;
            $data['DIRECCION_NUMERO_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['DIRECCION_NUMERO'])?$data['ID_CONTACTO_LABORAL']['DIRECCION_NUMERO']:NULL;
            $data['DIRECCION_CALLE_SECUNDARIA1_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['DIRECCION_CALLE_SECUNDARIA1'])?$data['ID_CONTACTO_LABORAL']['DIRECCION_CALLE_SECUNDARIA1']:NULL;
            $data['DIRECCION_CALLE_SECUNDARIA2_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['DIRECCION_CALLE_SECUNDARIA2'])?$data['ID_CONTACTO_LABORAL']['DIRECCION_CALLE_SECUNDARIA2']:NULL;
            $data['DIRECCION_REFERENCIA_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['DIRECCION_REFERENCIA'])?$data['ID_CONTACTO_LABORAL']['DIRECCION_REFERENCIA']:NULL;
            $data['DESCRIPCION_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['DESCRIPCION'])?$data['ID_CONTACTO_LABORAL']['DESCRIPCION']:NULL;
            
            $data['ID_OPERADOR_TELEFONICO_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['ID_OPERADOR_TELEFONICO'])?$data['CONTACTO_DOMICILIO']['ID_OPERADOR_TELEFONICO']:NULL;
            $data['CELULAR_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['CELULAR'])?$data['CONTACTO_DOMICILIO']['CELULAR']:NULL;
            $data['TELEFONO_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['TELEFONO'])?$data['CONTACTO_DOMICILIO']['TELEFONO']:NULL;
            $data['CORREO_ELECTRONICO_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['CORREO_ELECTRONICO'])?$data['CONTACTO_DOMICILIO']['CORREO_ELECTRONICO']:NULL;
            $data['ID_PAIS_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['ID_PAIS'])?$data['CONTACTO_DOMICILIO']['ID_PAIS']:NULL;
            $data['ID_PROVINCIA_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['ID_PROVINCIA'])?$data['CONTACTO_DOMICILIO']['ID_PROVINCIA']:NULL;
            $data['ID_CANTON_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['ID_CANTON'])?$data['CONTACTO_DOMICILIO']['ID_CANTON']:NULL;
            $data['ID_PARROQUIA_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['ID_PARROQUIA'])?$data['CONTACTO_DOMICILIO']['ID_PARROQUIA']:NULL;
            $data['DIRECCION_CALLE_PRINCIPAL_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['DIRECCION_CALLE_PRINCIPAL'])?$data['CONTACTO_DOMICILIO']['DIRECCION_CALLE_PRINCIPAL']:NULL;
            $data['DIRECCION_NUMERO_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['DIRECCION_NUMERO'])?$data['CONTACTO_DOMICILIO']['DIRECCION_NUMERO']:NULL;
            $data['DIRECCION_CALLE_SECUNDARIA1_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['DIRECCION_CALLE_SECUNDARIA1'])?$data['CONTACTO_DOMICILIO']['DIRECCION_CALLE_SECUNDARIA1']:NULL;
            $data['DIRECCION_CALLE_SECUNDARIA2_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['DIRECCION_CALLE_SECUNDARIA2'])?$data['CONTACTO_DOMICILIO']['DIRECCION_CALLE_SECUNDARIA2']:NULL;
            $data['DIRECCION_REFERENCIA_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['DIRECCION_REFERENCIA'])?$data['CONTACTO_DOMICILIO']['DIRECCION_REFERENCIA']:NULL;
            $data['DESCRIPCION_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['DESCRIPCION'])?$data['CONTACTO_DOMICILIO']['DESCRIPCION']:NULL;
            
            
            $this->load->view('templates/header',array('mostrarMensajeErrorValidacion'=>TRUE));
            $this->load->view('creacionAvanzadaPN', $data);
            $this->load->view('templates/footer');
        } 
        else 
        {
            /* VERIFICO, Y SI ESTA CREANDO LE ASIGNO UN USUARIO QUE NO EXISTA 
            if ($idCliente == NULL )  
            {
               $p_nombre = $data['PRIMER_NOMBRE'];
               $s_nombre = $data['SEGUNDO_NOMBRE'];
               $p_apellido = $data['APELLIDO_PATERNO'];
               $s_apellido = $data['APELLIDO_MATERNO'];

               $dir_correo_e = $data['CONTACTO_DOMICILIO']['CORREO_ELECTRONICO'];
               $pass = $data['CONTRASENA'];
               $usuario_generado = $this->clientes_model->crearUsuario($p_nombre,$s_nombre,$p_apellido,$s_apellido);
               $data['USUARIO'] = $usuario_generado;

               //notifico al mail
               $this->enviarCorreoElectronico($dir_correo_e, $usuario_generado, $pass );
            }*/


            /* TRABAJO CON LOS CHECKS */
            if (!isset($data['ES_BECADO'])) {
                $data['ES_BECADO'] = 0;
            }
            if (!isset($data['TIENE_RUC'])) {
                $data['TIENE_RUC'] = 0;
            }
            if (!isset($data['ES_DISCAPACITADO'])) {
                $data['ES_DISCAPACITADO'] = 0;
            }
            if (!isset($data['ES_CONTRIBUYENTE_ESPECIAL'])) {
                $data['ES_CONTRIBUYENTE_ESPECIAL'] = 0;
            }
            /*--------------------- TRABAJO CON LOS CONTACTOS ---------------------*/
            $contactoLaboral = $data['ID_CONTACTO_LABORAL'];
            
            $contactoDomiciliar = $data['CONTACTO_DOMICILIO'];
            
            unset($data['CONTACTO_DOMICILIO']);
            unset($data['ID_CONTACTO_LABORAL']);
            
            /*---------------------------TRABAJO CON LOS DATOS DE CLIENTE------------------------------------*/
           $cliente = array();
           $cliente['TIPO_DOCUMENTO']=$data['TIPO_DOCUMENTO'];
           $cliente['NRO_DOCUMENTO']=$data['NRO_DOCUMENTO'];
           $cliente['ID_TIPO_CONTRIBUYENTE']=$data['ID_TIPO_CONTRIBUYENTE'];
           $cliente['ES_CONTRIBUYENTE_ESPECIAL']=$data['ES_CONTRIBUYENTE_ESPECIAL'];
           
           unset($data['TIPO_DOCUMENTO']);
           unset($data['NRO_DOCUMENTO']);
           unset($data['ID_TIPO_CONTRIBUYENTE']);
           unset($data['ES_CONTRIBUYENTE_ESPECIAL']);
           
           /*-------------------------------------------------------------------------------------------------*/
           
            /* SE CONVIERTE A NULL TODOS LOS CAMPOS QUE VENGAN DEL FORMULARIO CON CADENA VACIA DE VALOR */
            foreach ($contactoLaboral as $key => $value) {
                if ($value === '') {
                    $contactoLaboral[$key] = NULL;
                }
            }
            foreach ($contactoDomiciliar as $key => $value) {
                if ($value === '') {
                    $contactoDomiciliar[$key] = NULL;
                }
            }
            foreach ($cliente as $key => $value) {
                if ($value === '') {
                    $cliente[$key] = NULL;
                }
            }
            foreach ($data as $key => $value) {
                if ($value === '') {
                    $data[$key] = NULL;
                }
            }
            
          /*-----------------------------------------------TRABAJO CON LA FOTOGRAFIA----------------------------------------*/  
            if ($_FILES['formulario_personas']['error']['file'] === 0) {
                /* SUBIR FOTOGRAFIA */
                $nombreUnicofotografia = sha1(uniqid(mt_rand(), true));
                $uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/ACADEMOS/assets/uploads/fotografias/';
                $nombreActual = $_FILES['formulario_personas']['name']['file'];
                $arrayNombreActual = explode('.', $nombreActual);
                $ext = $arrayNombreActual[count($arrayNombreActual) - 1];
                $uploaddirFotografiaActual = $uploaddir . $nombreUnicofotografia . '.' . $ext;
                if (move_uploaded_file($_FILES['formulario_personas']['tmp_name']['file'], $uploaddirFotografiaActual)) {
                    $data['FOTOGRAFIA'] = $nombreUnicofotografia . '.' . $ext;
                }
                /*ESTO ME DA UN ERROR DE PERMISOS*/
//                if (file_exists($uploaddir . $persona['FOTOGRAFIA'])) {
//                    unlink($uploaddir . $persona['FOTOGRAFIA']);
//                }
            }

            $this->clientes_model->crearActualizarClienteNaturalTransaccional($persona,$data,$cliente,$contactoLaboral,$contactoDomiciliar);
            $this->session->set_flashdata('mostrarMensajeConfirmacion', TRUE); 
            if($idCliente == NULL)
            {
                redirect('index/index', 'refresh');
            }
            else{
                redirect('clientes/clientes/mostrarFormularioGestionPN/'.$idCliente, 'refresh');
            }
        }
        }
        else
        {
            //If no session, redirect to login page
          redirect('admin/login', 'refresh');
        }
    }
    
       
    public function mostrarFormularioGestionBasicaPN($idCliente = null) {
        if ($this->session->userdata('loggeado')) {
            $this->load->helper('form');
            $this->load->library('form_validation');
            $this->form_validation->CI = & $this;
            $persona = array();

            if ($idCliente == null) {
                $persona['ID_TIPO_CONTRIBUYENTE'] = 1;
                $persona['TIPO_DOCUMENTO'] = 'C';
                $persona['ID_PAIS_DOMICILIO'] = 1;
                $persona['ID_PROVINCIA_DOMICILIO'] = 11;
                $persona['ID_CANTON_DOMICILIO'] = null;
                $persona['ID_PARROQUIA_DOMICILIO'] = 11;
                $persona['ID_ESTADO_CIVIL'] = 1;
                $persona['GENERO'] = null;
            } else {
                $persona = $this->clientes_model->obtener_datos_cliente_natural($idCliente);
                
                if ($persona == NULL) {
                    /*
                     * Implementar redireccion  pq se esta buscando por in ID_PERSONA q no existe en BD.
                     */
                    show_404();
                }
            }

            $persona['tiposContribuyentes'] = $this->tipos_contribuyentes_model->get_tipos_contribuyentes();
            $persona['tiposDocumentos'] = $this->tipos_documentos_model->get_tipos_documentos_excepto_RUC();
            $persona['nacionalidades'] = $this->nacionalidades_model->get_nacionalidades();
            $persona['paises'] = $this->paises_model->get_paises();
            $persona['provinciasDomicilio'] = $this->provincias_model->obtener_provincias_x_id_pais($persona['ID_PAIS_DOMICILIO']);
            $persona['cantonesDomicilio'] = $this->cantones_model->obtener_cantones_x_id_provincia($persona['ID_PROVINCIA_DOMICILIO']);
            $persona['parroquiasDomicilio'] = $this->parroquias_model->obtener_parroquias_x_id_canton($persona['ID_CANTON_DOMICILIO']);


//        $persona['estadosCiviles'] = $this->estados_civiles_model->get_estados_civiles();
//        $persona['generos'] = $this->generos_model->get_generos();        
//        $persona['ID_NACIONALIDAD'] = 18;
//        $persona['ID_PROVINCIA_NACIMIENTO'] = 11;
//        $persona['ID_PAIS_NACIMIENTO'] = 1;
//        $persona['provinciasNacimiento'] = $this->provincias_model->obtener_provincias_x_id_pais($persona['ID_PAIS_NACIMIENTO']);


            $this->load->view('templates/header');
            $this->load->view('creacionBasicaPN', $persona);
            $this->load->view('templates/footer');
        }
        else {
            //If no session, redirect to login page
          redirect('admin/login', 'refresh');
        }
    }
    
    public function procesarFormularioGestionBasicaPN($idCliente = null) {
        if($this->session->userdata('loggeado'))
        {
       
        $this->load->helper('form');
        $this->load->library('form_validation');               
        $this->form_validation->CI =& $this;
        
        $persona = array();
        if ($idCliente != NULL) {
            $persona = $this->clientes_model->obtener_datos_cliente_natural($idCliente);
            if ($persona == NULL) {
               /*
                * Implementar redireccion  pq se esta buscando por in ID_PERSONA q no existe en BD.
                */ 
                 show_404();
            }
            
        }
        
        $this->form_validation->set_rules('formulario_personas[NRO_DOCUMENTO]', 'número de documento', 'required|callback_noExisteNroIdentificacion['.$idCliente.']');
        $this->form_validation->set_rules('formulario_personas[PRIMER_NOMBRE]', 'primer nombre', 'required');
        $this->form_validation->set_rules('formulario_personas[APELLIDO_PATERNO]', 'apellido paterno', 'required');
        $this->form_validation->set_rules('formulario_personas[ID_TIPO_CONTRIBUYENTE]', 'tipo de contribuyente', 'required');
        $this->form_validation->set_rules('formulario_personas[CONTACTO_DOMICILIO][ID_CANTON]', 'canton de domicilio', 'required');
        $this->form_validation->set_rules('formulario_personas[TIPO_DOCUMENTO]', 'tipo de documento', 'required');
        $this->form_validation->set_rules('formulario_personas[CONTACTO_DOMICILIO][ID_PAIS]', 'país de domicilio', 'required');
        $this->form_validation->set_rules('formulario_personas[CONTACTO_DOMICILIO][ID_PROVINCIA]', 'provincia de domicilio', 'required');
        $this->form_validation->set_rules('formulario_personas[CONTACTO_DOMICILIO][DIRECCION_CALLE_PRINCIPAL]', 'calle principal', 'required');
        //$this->form_validation->set_rules('formulario_personas[CONTACTO_DOMICILIO][CORREO_ELECTRONICO]', 'correo electrónico', 'required');
        $this->form_validation->set_rules('formulario_personas[NUMERO_RUC]', 'número de ruc', 'callback_noExisteNroIdentificacion');

//        $this->form_validation->set_rules('formulario_personas[FECHA_NACIMIENTO]', 'fecha de nacimiento', 'required');
//        $this->form_validation->set_rules('formulario_personas[ID_NACIONALIDAD]', 'nacionalidad', 'required');
//        $this->form_validation->set_rules('formulario_personas[ID_PAIS_NACIMIENTO]', 'país de nacimiento', 'required');
//        $this->form_validation->set_rules('formulario_personas[ID_PROVINCIA_NACIMIENTO]', 'provincia de nacimiento', 'required');
//        $this->form_validation->set_rules('formulario_personas[ID_ESTADO_CIVIL]', 'estado civil', 'required');
        
        $data = $this->input->post('formulario_personas');
        
        if ($this->form_validation->run() === FALSE) {
            if (isset($persona['ID_CLIENTE']) && $persona['ID_CLIENTE'] != NULL) {
                $data['ID_CLIENTE'] = $persona['ID_CLIENTE'];
            }            
            /* contenido de los combos */
            $data['tiposContribuyentes'] = $this->tipos_contribuyentes_model->get_tipos_contribuyentes();
            $data['tiposDocumentos'] = $this->tipos_documentos_model->get_tipos_documentos_excepto_RUC();
            $data['paises'] = $this->paises_model->get_paises();            
            $data['provinciasDomicilio'] = $this->provincias_model->obtener_provincias_x_id_pais(isset($data['CONTACTO_DOMICILIO']['ID_PAIS'])?$data['CONTACTO_DOMICILIO']['ID_PAIS']:NULL);
            $data['cantonesDomicilio'] = $this->cantones_model->obtener_cantones_x_id_provincia(isset($data['CONTACTO_DOMICILIO']['ID_PROVINCIA'])?$data['CONTACTO_DOMICILIO']['ID_PROVINCIA']:NULL);
            $data['parroquiasDomicilio'] = $this->parroquias_model->obtener_parroquias_x_id_canton(isset($data['CONTACTO_DOMICILIO']['ID_CANTON'])?$data['CONTACTO_DOMICILIO']['ID_CANTON']:NULL);
            $data['estadosCiviles'] = $this->estados_civiles_model->get_estados_civiles();
            $data['generos'] = $this->generos_model->get_generos();
            
//            $data['nacionalidades'] = $this->nacionalidades_model->get_nacionalidades();
//            $data['provinciasNacimiento'] = $this->provincias_model->obtener_provincias_x_id_pais(isset($data['ID_PAIS_NACIMIENTO'])?$data['ID_PAIS_NACIMIENTO']:NULL);

            
            $data['CELULAR_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['CELULAR'])?$data['CONTACTO_DOMICILIO']['CELULAR']:NULL;
            $data['TELEFONO_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['TELEFONO'])?$data['CONTACTO_DOMICILIO']['TELEFONO']:NULL;
            $data['CORREO_ELECTRONICO_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['CORREO_ELECTRONICO'])?$data['CONTACTO_DOMICILIO']['CORREO_ELECTRONICO']:NULL;
            $data['ID_PAIS_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['ID_PAIS'])?$data['CONTACTO_DOMICILIO']['ID_PAIS']:NULL;
            $data['ID_PROVINCIA_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['ID_PROVINCIA'])?$data['CONTACTO_DOMICILIO']['ID_PROVINCIA']:NULL;
            $data['ID_CANTON_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['ID_CANTON'])?$data['CONTACTO_DOMICILIO']['ID_CANTON']:NULL;
            $data['ID_PARROQUIA_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['ID_PARROQUIA'])?$data['CONTACTO_DOMICILIO']['ID_PARROQUIA']:NULL;
            $data['DIRECCION_CALLE_PRINCIPAL_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['DIRECCION_CALLE_PRINCIPAL'])?$data['CONTACTO_DOMICILIO']['DIRECCION_CALLE_PRINCIPAL']:NULL;
            $data['DIRECCION_NUMERO_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['DIRECCION_NUMERO'])?$data['CONTACTO_DOMICILIO']['DIRECCION_NUMERO']:NULL;
            $data['DIRECCION_CALLE_SECUNDARIA1_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['DIRECCION_CALLE_SECUNDARIA1'])?$data['CONTACTO_DOMICILIO']['DIRECCION_CALLE_SECUNDARIA1']:NULL;
            $data['DIRECCION_CALLE_SECUNDARIA2_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['DIRECCION_CALLE_SECUNDARIA2'])?$data['CONTACTO_DOMICILIO']['DIRECCION_CALLE_SECUNDARIA2']:NULL;
            $data['DIRECCION_REFERENCIA_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['DIRECCION_REFERENCIA'])?$data['CONTACTO_DOMICILIO']['DIRECCION_REFERENCIA']:NULL;
            $data['DESCRIPCION_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['DESCRIPCION'])?$data['CONTACTO_DOMICILIO']['DESCRIPCION']:NULL;
            
            $this->load->view('templates/header',array('mostrarMensajeErrorValidacion'=>TRUE));
            $this->load->view('creacionBasicaPN', $data);
            $this->load->view('templates/footer');
        } else {
            /* TRABAJO CON LOS CHECKS */
            if (!isset($data['TIENE_RUC'])) {
                $data['TIENE_RUC'] = 0;
            }
            if (!isset($data['ES_CONTRIBUYENTE_ESPECIAL'])) {
                $data['ES_CONTRIBUYENTE_ESPECIAL'] = 0;
            }
           
            /*--------------------- TRABAJO CON LOS CONTACTOS ---------------------*/            
            $contactoDomiciliar = $data['CONTACTO_DOMICILIO'];            
            unset($data['CONTACTO_DOMICILIO']);
            
            /*---------------------------TRABAJO CON LOS DATOS DE CLIENTE------------------------------------*/
           $cliente = array();
           $cliente['TIPO_DOCUMENTO']=$data['TIPO_DOCUMENTO'];
           $cliente['NRO_DOCUMENTO']=$data['NRO_DOCUMENTO'];
           $cliente['ID_TIPO_CONTRIBUYENTE']=$data['ID_TIPO_CONTRIBUYENTE'];
           $cliente['ES_CONTRIBUYENTE_ESPECIAL']=$data['ES_CONTRIBUYENTE_ESPECIAL'];
           
           unset($data['TIPO_DOCUMENTO']);
           unset($data['NRO_DOCUMENTO']);
           unset($data['ID_TIPO_CONTRIBUYENTE']);
           unset($data['ES_CONTRIBUYENTE_ESPECIAL']);
           
           
           /*ESTOS DATOS SE ELIMINAN PQ SE OCULTARON ALGUNOS CAMPOS Y CUANDO SE ENVIA EL FORMULARIO SE ESTAN ENVIANDO EN NULL 
            EN CASOS DE Q DICHOS CAMPOS SE VOLVIERAN A MOSTRAR HAY Q DESCOMENTAREAR LAS PROXIMAS LINEAAS
            */
           unset($data['ID_PAIS_NACIMIENTO']);
           unset($data['ID_PROVINCIA_NACIMIENTO']);
           unset($data['GENERO']);
           
           
           /*-------------------------------------------------------------------------------------------------*/
           
            /* SE CONVIERTE A NULL TODOS LOS CAMPOS QUE VENGAN DEL FORMULARIO CON CADENA VACIA DE VALOR */
           
            foreach ($contactoDomiciliar as $key => $value) {
                if ($value === '') {
                    $contactoDomiciliar[$key] = NULL;
                }
            }
            foreach ($cliente as $key => $value) {
                if ($value === '') {
                    $cliente[$key] = NULL;
                }
            }
            foreach ($data as $key => $value) {
                if ($value === '') {
                    $data[$key] = NULL;
                }
            }
            
         
            $this->clientes_model->crearActualizarClienteNaturalBasicoTransaccional($persona,$data,$cliente,$contactoDomiciliar);
            $this->session->set_flashdata('mostrarMensajeConfirmacion', TRUE);            
             if($idCliente == NULL)
            {
                redirect('index/index', 'refresh');
            }
            else{
                redirect('clientes/clientes/mostrarFormularioGestionBasicaPN/'.$idCliente, 'refresh');
            }          
        }
        }
        else
        {
            //If no session, redirect to login page
          redirect('admin/login', 'refresh');
        }
    
    }    
    
    
    public function mostrarFormularioGestionPJ($idCliente = null) 
    {
        if($this->session->userdata('loggeado'))
        {
        $this->load->helper('form');
        $this->load->library('form_validation');               
        $this->form_validation->CI =& $this;
        $persona = array();
        if ($idCliente === NULL) {
            $persona['ID_PAIS'] = 1;
            $persona['ID_PROVINCIA'] = 11;
            $persona['ID_CANTON'] = null;
            $persona['ID_PARROQUIA'] = 11;
            $persona['ID_OPERADOR_TELEFONICO'] = null;
        } else {
            $persona = $this->clientes_model->obtener_datos_clientes_juridicos($idCliente);
            $personas_a_contactar = $this->personas_a_contactar_model->buscarPersonasAContactarXIdCliente($idCliente);
            if (count($personas_a_contactar)>0)
            {
             $persona['PERSONA_CONTACTAR'] = $personas_a_contactar;
            }
         
            
            if ($persona == NULL) {
               /*
                * Implementar redireccion  pq se esta buscando por in ID_PERSONA q no existe en BD.
                */ 
                 show_404();
            }
        }
  
        $persona['paises'] = $this->paises_model->get_paises();
        $persona['provinciasDomicilio'] = $this->provincias_model->obtener_provincias_x_id_pais($persona['ID_PAIS']);
        $persona['cantonesDomicilio'] = $this->cantones_model->obtener_cantones_x_id_provincia($persona['ID_PROVINCIA']);
        $persona['parroquiasDomicilio'] = $this->parroquias_model->obtener_parroquias_x_id_canton($persona['ID_CANTON']);
        $persona['operadoras'] = $this->operadoras_telefonicas_model->get_operadoras_telefonicas_activas();
        
        
        $this->load->view('templates/header');
        $this->load->view('creacionAvanzadaPJ', $persona);
        $this->load->view('templates/footer');
        }
        else
        {
            //If no session, redirect to login page
          redirect('admin/login', 'refresh');
        }
    }
    
    public function procesarFormularioGestionPJ($idCliente = null) {
        if($this->session->userdata('loggeado'))
        {
        $persona = array();
        if ($idCliente != NULL) {
            $persona = $this->clientes_model->obtener_datos_clientes_juridicos($idCliente);
            if ($persona == NULL) {
               /*
                * Implementar redireccion  pq se esta buscando por in ID_PERSONA q no existe en BD.
                */ 
                 show_404();
            }
        }
        $this->load->helper('form');
        $this->load->library('form_validation');        
        $this->form_validation->CI =& $this;
        
        $this->form_validation->set_rules('formulario_personas[NOMBRE_COMERCIAL]', 'nombre comercial', 'required');
        $this->form_validation->set_rules('formulario_personas[RAZON_SOCIAL]', 'razón socialwww', 'required');
        $this->form_validation->set_rules('formulario_personas[NRO_DOCUMENTO]', 'número de documento', 'required|callback_noExisteNroIdentificacion['.$idCliente.']');
//        $this->form_validation->set_rules('formulario_personas[NRO_DOCUMENTO]', 'número de documento', 'required');
        $this->form_validation->set_rules('formulario_personas[CONTACTO_DOMICILIO][ID_CANTON]', 'canton de domicilio', 'required');
        $this->form_validation->set_rules('formulario_personas[CONTACTO_DOMICILIO][ID_PAIS]', 'país de domicilio', 'required');
        $this->form_validation->set_rules('formulario_personas[CONTACTO_DOMICILIO][ID_PROVINCIA]', 'provincia de domicilio', 'required');
        $this->form_validation->set_rules('formulario_personas[CONTACTO_DOMICILIO][DIRECCION_CALLE_PRINCIPAL]', 'calle principal', 'required');
//        $this->form_validation->set_rules('formulario_personas[CONTACTO_DOMICILIO][TELEFONO]', 'teléfono', 'required');
        $this->form_validation->set_rules('formulario_personas[CONTACTO_DOMICILIO][CORREO_ELECTRONICO]', 'correo electrónico', 'required');
        
        $data = $this->input->post('formulario_personas');
        foreach ($data['PERSONA_CONTACTAR'] as $key => $value) {
            if($value['NOMBRE_COMPLETO'] != ""  || $value['TELEFONO'] != ""  || $value['CORREO_ELECTRONICO'] != ""  || $value['CELULAR'] != "")
            {
                $this->form_validation->set_rules('formulario_personas[PERSONA_CONTACTAR]['.$key.'][NOMBRE_COMPLETO]', 'nombre completo', 'required');
                $this->form_validation->set_rules('formulario_personas[PERSONA_CONTACTAR]['.$key.'][CORREO_ELECTRONICO]', 'correo electrónnico', 'required');
                if($value['TELEFONO'] == "" &&  $value['CELULAR'] == "")
                {
                    $this->form_validation->set_rules('formulario_personas[PERSONA_CONTACTAR]['.$key.'][TELEFONO]', 'teléfono', 'required');
                    $this->form_validation->set_rules('formulario_personas[PERSONA_CONTACTAR]['.$key.'][CELULAR]', 'celular', 'required');
                }
            }
        }
        
        if ($this->form_validation->run() === FALSE) 
        {
            if (isset($persona['ID_CLIENTE']) && $persona['ID_CLIENTE'] != NULL) {
                $data['ID_CLIENTE'] = $persona['ID_CLIENTE'];
            }
            // contenido de los combos
            $data['paises'] = $this->paises_model->get_paises();
            $data['provinciasDomicilio'] = $this->provincias_model->obtener_provincias_x_id_pais(isset($data['CONTACTO_DOMICILIO']['ID_PAIS'])?$data['CONTACTO_DOMICILIO']['ID_PAIS']:NULL);
            $data['cantonesDomicilio'] = $this->cantones_model->obtener_cantones_x_id_provincia(isset($data['CONTACTO_DOMICILIO']['ID_PROVINCIA'])?$data['CONTACTO_DOMICILIO']['ID_PROVINCIA']:NULL);
            $data['parroquiasDomicilio'] = $this->parroquias_model->obtener_parroquias_x_id_canton(isset($data['CONTACTO_DOMICILIO']['ID_CANTON'])?$data['CONTACTO_DOMICILIO']['ID_CANTON']:NULL);
            $data['operadoras'] = $this->operadoras_telefonicas_model->get_operadoras_telefonicas_activas();

            $data['PRIMER_NOMBRE'] = $data['REPRESENTANTE']['PRIMER_NOMBRE'];
            $data['SEGUNDO_NOMBRE'] = $data['REPRESENTANTE']['SEGUNDO_NOMBRE'];
            $data['APELLIDO_PATERNO'] = $data['REPRESENTANTE']['APELLIDO_PATERNO'];
            $data['APELLIDO_MATERNO'] = $data['REPRESENTANTE']['APELLIDO_MATERNO'];
            
            foreach ($data['CONTACTO_DOMICILIO'] as $key => $value) {
                $data[$key]=$value;
            }
            $this->load->view('templates/header',array('mostrarMensajeErrorValidacion'=>TRUE));
            $this->load->view('creacionAvanzadaPJ', $data);
            $this->load->view('templates/footer');
        } 
        else {
            
            foreach ($data as $key => $value) {
                if ($value === '') {
                    $data[$key] = NULL;
                }
            }
            
            $this->clientes_model->crearActualizarClienteJuridicoTransaccional($data, $persona);            
            $this->session->set_flashdata('mostrarMensajeConfirmacion', TRUE);
             if($idCliente == NULL)
            {
                redirect('index/index', 'refresh');
            }
            else{
               redirect('clientes/clientes/mostrarFormularioGestionPJ/'.$idCliente, 'refresh');
            }
        }
        }
        else
        {
            //If no session, redirect to login page
          redirect('admin/login', 'refresh');
        }
    }
    
    public function mostrarFormularioGestionBasicaPJ() {
        if($this->session->userdata('loggeado'))
        {
        $this->load->helper('form');
        $this->load->library('form_validation');       
        $this->form_validation->CI =& $this;
        $persona = array();
        $persona['ID_PAIS'] = 1;
        $persona['ID_PROVINCIA'] = 11;
        $persona['ID_CANTON'] = null;
        $persona['ID_PARROQUIA'] = 11;
        $persona['ID_OPERADOR_TELEFONICO'] = null;
       
    
        $persona['paises'] = $this->paises_model->get_paises();
        $persona['provinciasDomicilio'] = $this->provincias_model->obtener_provincias_x_id_pais($persona['ID_PAIS']);
        $persona['cantonesDomicilio'] = $this->cantones_model->obtener_cantones_x_id_provincia($persona['ID_PROVINCIA']);
        $persona['parroquiasDomicilio'] = $this->parroquias_model->obtener_parroquias_x_id_canton($persona['ID_CANTON']);
        
        
        $this->load->view('templates/header');
        $this->load->view('creacionBasicaPJ', $persona);
        $this->load->view('templates/footer');
        }
        else
        {
            //If no session, redirect to login page
          redirect('admin/login', 'refresh');
        }
    }
    
    public function procesarFormularioGestionBasicaPJ() {
        if($this->session->userdata('loggeado'))
        {
        $this->load->helper('form');
        $this->load->library('form_validation');       
        $this->form_validation->CI =& $this;
        
        $this->form_validation->set_rules('formulario_personas[NOMBRE_COMERCIAL]', 'nombre comercial', 'required');
        $this->form_validation->set_rules('formulario_personas[RAZON_SOCIAL]', 'razón social', 'required');
        $this->form_validation->set_rules('formulario_personas[NRO_DOCUMENTO]', 'número de documento', 'required|callback_noExisteNroIdentificacion');
//        $this->form_validation->set_rules('formulario_personas[NRO_DOCUMENTO]', 'número de documento', 'required');
        $this->form_validation->set_rules('formulario_personas[CONTACTO_DOMICILIO][ID_CANTON]', 'canton de domicilio', 'required');
        $this->form_validation->set_rules('formulario_personas[CONTACTO_DOMICILIO][ID_PAIS]', 'país de domicilio', 'required');
        $this->form_validation->set_rules('formulario_personas[CONTACTO_DOMICILIO][ID_PROVINCIA]', 'provincia de domicilio', 'required');
        $this->form_validation->set_rules('formulario_personas[CONTACTO_DOMICILIO][DIRECCION_CALLE_PRINCIPAL]', 'calle principal', 'required');
//        $this->form_validation->set_rules('formulario_personas[CONTACTO_DOMICILIO][TELEFONO]', 'teléfono', 'required');
        $this->form_validation->set_rules('formulario_personas[CONTACTO_DOMICILIO][CORREO_ELECTRONICO]', 'correo electrónico', 'required');
        
        $data = $this->input->post('formulario_personas');
        
        if ($this->form_validation->run() === FALSE) {
           
            /* contenido de los combos */
            $data['paises'] = $this->paises_model->get_paises();
            $data['provinciasDomicilio'] = $this->provincias_model->obtener_provincias_x_id_pais(isset($data['CONTACTO_DOMICILIO']['ID_PAIS'])?$data['CONTACTO_DOMICILIO']['ID_PAIS']:NULL);
            $data['cantonesDomicilio'] = $this->cantones_model->obtener_cantones_x_id_provincia(isset($data['CONTACTO_DOMICILIO']['ID_PROVINCIA'])?$data['CONTACTO_DOMICILIO']['ID_PROVINCIA']:NULL);
            $data['parroquiasDomicilio'] = $this->parroquias_model->obtener_parroquias_x_id_canton(isset($data['CONTACTO_DOMICILIO']['ID_CANTON'])?$data['CONTACTO_DOMICILIO']['ID_CANTON']:NULL);
           
            $data['PRIMER_NOMBRE'] = $data['REPRESENTANTE']['PRIMER_NOMBRE'];
            $data['SEGUNDO_NOMBRE'] = $data['REPRESENTANTE']['SEGUNDO_NOMBRE'];
            $data['APELLIDO_PATERNO'] = $data['REPRESENTANTE']['APELLIDO_PATERNO'];
            $data['APELLIDO_MATERNO'] = $data['REPRESENTANTE']['APELLIDO_MATERNO'];
            
            foreach ($data['CONTACTO_DOMICILIO'] as $key => $value) {
                $data[$key]=$value;
            }
            $this->load->view('templates/header',array('mostrarMensajeErrorValidacion'=>TRUE));
            $this->load->view('creacionBasicaPJ', $data);
            $this->load->view('templates/footer');
        } 
        else {
            
            foreach ($data as $key => $value) {
                if ($value === '') {
                    $data[$key] = NULL;
                }
            }
            
            $this->clientes_model->crearActualizarClienteJuridicoBasicoTransaccional($data);            
            $this->session->set_flashdata('mostrarMensajeConfirmacion', TRUE); 
            redirect('index/index', 'refresh');
        }
       }
        else
        {
            //If no session, redirect to login page
          redirect('admin/login', 'refresh');
        } 
    }
    
    public function mostrarDetallesPN($idCliente) {
        if($this->session->userdata('loggeado'))
        {
         $persona = $this->clientes_model->obtener_detalles_cliente_natural($idCliente);
            if ($persona == NULL) {
               /*
                * Implementar redireccion  pq se esta buscando por in ID_PERSONA q no existe en BD.
                */ 
                 show_404();
            }

//            if (isset($persona['FECHA_NACIMIENTO'])) {
//                $persona['FECHA_NACIMIENTO'] = DateTime::createFromFormat('Y-m-d', $persona['FECHA_NACIMIENTO']);
//                $persona['FECHA_NACIMIENTO'] = $persona['FECHA_NACIMIENTO']->format('d-m-Y');
//            }
            
                    
            $this->load->view('templates/header');
            $this->load->view('mostrarDetallesPN', $persona);
            $this->load->view('templates/footer');
            }
        else
        {
            //If no session, redirect to login page
          redirect('admin/login', 'refresh');
        }
            
    }
    
    public function mostrarDetallesPNV2($idCliente) {
        if($this->session->userdata('loggeado'))
        {
        $this->load->helper('form');
        $this->load->library('form_validation');       
        $this->form_validation->CI =& $this;
        
            $persona = $this->clientes_model->obtener_detalles_cliente_natural($idCliente);
            if ($persona == NULL) {
               /*
                * Implementar redireccion  pq se esta buscando por in ID_PERSONA q no existe en BD.
                */ 
                 show_404();
            }

//            if (isset($persona['FECHA_NACIMIENTO'])) {
//                $persona['FECHA_NACIMIENTO'] = DateTime::createFromFormat('Y-m-d', $persona['FECHA_NACIMIENTO']);
//                $persona['FECHA_NACIMIENTO'] = $persona['FECHA_NACIMIENTO']->format('d-m-Y');
//            }
        
        

        $this->load->view('templates/header');
        $this->load->view('mostrarDetallesPNV2', $persona);
        $this->load->view('templates/footer');
        }
        else
        {
            //If no session, redirect to login page
          redirect('admin/login', 'refresh');
        }
    }
    
    public function mostrarDetallesPJ($idCliente) {
        if($this->session->userdata('loggeado'))
        {
        
         $persona = $this->clientes_model->obtener_detalles_clientes_juridicos($idCliente);
            if ($persona == NULL) {
               /*
                * Implementar redireccion  pq se esta buscando por in ID_PERSONA q no existe en BD.
                */ 
                 show_404();
            }
            
                    
            $this->load->view('templates/header');
            $this->load->view('mostrarDetallesPJ', $persona);
            $this->load->view('templates/footer');
            }
        else
        {
            //If no session, redirect to login page
          redirect('admin/login', 'refresh');
        }
            
    }
    
    public function mostrarDetallesPJV2($idCliente) {
        if($this->session->userdata('loggeado'))
        {
         $persona = $this->clientes_model->obtener_detalles_clientes_juridicos($idCliente);
            if ($persona == NULL) {
               /*
                * Implementar redireccion  pq se esta buscando por in ID_PERSONA q no existe en BD.
                */ 
                 show_404();
            }
            $personas_a_contactar = $this->personas_a_contactar_model->buscarPersonasAContactarXIdCliente($idCliente);
            if (count($personas_a_contactar)>0)
            {
             $persona['PERSONA_CONTACTAR'] = $personas_a_contactar;
            }
            
                    
            $this->load->view('templates/header');
            $this->load->view('mostrarDetallesPJV2', $persona);
            $this->load->view('templates/footer');
            }
        else
        {
            //If no session, redirect to login page
          redirect('admin/login', 'refresh');
        }
            
    }
    
//    public function autocompletarDatosBasicosPN($nroDocumento) {
//        $persona = $this->clientes_model->obtener_cliente_por_nro_documento($nroDocumento);
//        if($persona  != NULL)
//        {
//            $this->mostrarFormularioGestionBasicaPN($persona['ID_CLIENTE']);
//        }
//        else{
//            $this->mostrarFormularioGestionBasicaPN();
//        }
//    }

    public function buscarProvinciaXIdPais() {
        $idPais = $this->input->post('id');
        $provincias = $this->provincias_model->obtener_provincias_x_id_pais_formateadas($idPais);
        echo json_encode($provincias);
    }

    public function buscarCantonesXIdProvincia() {
        $idProvincia = $this->input->post('id');
        $cantones = $this->cantones_model->obtener_cantones_x_id_provincia_formateados($idProvincia);
        echo json_encode($cantones);
    }

    public function buscarParroquiasXIdCanton() {
        $idCanton = $this->input->post('id');
        $parroquias = $this->parroquias_model->obtener_parroquias_x_id_canton_formateadas($idCanton);
        echo json_encode($parroquias);
    }
    
    public function buscarPersonaXNroDucumento() {
        $nroDocumento = $this->input->post('nroDocumento');
        $persona = $this->clientes_model->obtener_cliente_por_nro_documento($nroDocumento);
        if($persona  != NULL)
        {
            $persona = array('PRIMER_NOMBRE'=>$persona['PRIMER_NOMBRE'],
                            'SEGUNDO_NOMBRE'=>$persona['SEGUNDO_NOMBRE'],
                            'APELLIDO_PATERNO'=>$persona['APELLIDO_PATERNO'],
                            'APELLIDO_MATERNO'=>$persona['APELLIDO_MATERNO'],
                            'ID_CLIENTE'=>$persona['ID_CLIENTE']);
        }
        echo json_encode($persona);
    }
    public function buscarClienteJuridicoXNroDucumento() {
        $nroDocumento = $this->input->post('nroDocumento');
        $persona = $this->clientes_model->obtener_cliente_juridico_por_nro_documento($nroDocumento);
        if($persona  != NULL)
        {
            $persona = array('ID_CLIENTE'=>$persona['ID_CLIENTE']);
        }
        echo json_encode($persona);
    }
    


    public function mostrarFormularioGestionPND($idCliente = null) 
    {
        if ($this->session->userdata('loggeado')) {
        $this->load->helper('form');
        $this->load->library('form_validation');       
        $this->form_validation->CI =& $this;
        $persona = array();
        if ($idCliente === NULL) {
            $persona['ID_TIPO_CONTRIBUYENTE'] = 1;
            $persona['TIPO_DOCUMENTO'] = 'C';
            $persona['ID_TIPO_BECA'] = 1;
            $persona['ID_NACIONALIDAD'] = 18;
            $persona['ID_PAIS_NACIMIENTO'] = 1;
            $persona['ID_PAIS_DOMICILIO'] = 1;
            $persona['ID_PAIS_CONTACTO_LABORAL'] = NULL;
            $persona['ID_PROVINCIA_NACIMIENTO'] = 19;
            $persona['ID_PROVINCIA_DOMICILIO'] = 19;
            $persona['ID_PROVINCIA_CONTACTO_LABORAL'] = NULL;
            $persona['ID_CANTON_DOMICILIO'] = null;
            $persona['ID_PARROQUIA_DOMICILIO'] = 11;
            $persona['ID_PARROQUIA_CONTACTO_LABORAL'] = NULL;
            $persona['ID_CANTON_CONTACTO_LABORAL'] = null;
            $persona['ID_ESTADO_CIVIL'] = 1;
            $persona['TIPO_SANGRE'] = null;
            $persona['GENERO'] = null;
            $persona['ID_GRUPO_CULTURAL'] = null;
            $persona['TRATO_PERSONAL'] = null;
            $persona['ID_PROFESION'] = null;
            $persona['OCUPACION'] = null;
            $persona['PARENTESCO_AFINIDAD'] = null;
            $persona['ID_OPERADOR_TELEFONICO_DOMICILIO'] = null;
            $persona['ID_OPERADOR_TELEFONICO_CONTACTO_LABORAL'] = null;
        } else {
            $persona = $this->clientes_model->obtener_datos_cliente_natural($idCliente);
            if ($persona == NULL) {
               /*
                * Implementar redireccion  pq se esta buscando por in ID_PERSONA q no existe en BD.
                */ 
                 show_404();
            }

//            if (isset($persona['FECHA_NACIMIENTO'])) {
//                $persona['FECHA_NACIMIENTO'] = DateTime::createFromFormat('Y-m-d', $persona['FECHA_NACIMIENTO']);
//                $persona['FECHA_NACIMIENTO'] = $persona['FECHA_NACIMIENTO']->format('d-m-Y');
//            }
        }
        
        
        $persona['tiposContribuyentes'] = $this->tipos_contribuyentes_model->get_tipos_contribuyentes();
        $persona['tiposDocumentos'] = $this->tipos_documentos_model->get_tipos_documentos_excepto_RUC();
        $persona['tiposBecas'] = $this->tipos_becas_model->get_tipos_becas();
        $persona['nacionalidades'] = $this->nacionalidades_model->get_nacionalidades();
        $persona['paises'] = $this->paises_model->get_paises();
        $persona['provinciasNacimiento'] = $this->provincias_model->obtener_provincias_x_id_pais($persona['ID_PAIS_NACIMIENTO']);
        $persona['provinciasDomicilio'] = $this->provincias_model->obtener_provincias_x_id_pais($persona['ID_PAIS_DOMICILIO']);
        $persona['provinciasContactoLaboral'] = $this->provincias_model->obtener_provincias_x_id_pais($persona['ID_PAIS_CONTACTO_LABORAL']);
        $persona['cantonesDomicilio'] = $this->cantones_model->obtener_cantones_x_id_provincia($persona['ID_PROVINCIA_DOMICILIO']);
        $persona['cantonesContactoLaboral'] = $this->cantones_model->obtener_cantones_x_id_provincia($persona['ID_PROVINCIA_CONTACTO_LABORAL']);
        $persona['parroquiasDomicilio'] = $this->parroquias_model->obtener_parroquias_x_id_canton($persona['ID_CANTON_DOMICILIO']);
        $persona['parroquiasContactoLaboral'] = $this->parroquias_model->obtener_parroquias_x_id_canton($persona['ID_CANTON_CONTACTO_LABORAL']);
        $persona['estadosCiviles'] = $this->estados_civiles_model->get_estados_civiles();
        $persona['tiposSangre'] = $this->tipos_sangre_model->get_tipos_sangre();
        $persona['generos'] = $this->generos_model->get_generos();
        $persona['gruposCulturales'] = $this->grupos_culturales_model->get_grupos_culturales();
        $persona['tratosPersonales'] = $this->tratos_personales_model->get_tratos_personales();
        $persona['profesiones'] = $this->profesiones_model->get_profesiones();
        $persona['ocupaciones'] = $this->ocupaciones_model->get_ocupaciones();
        $persona['parentezcos'] = $this->parentezcos_model->get_parentezcos();
        $persona['operadoras'] = $this->operadoras_telefonicas_model->get_operadoras_telefonicas_activas();

        $this->load->view('templates/header');
        $this->load->view('creacionAvanzadaPND', $persona);
        $this->load->view('templates/footer');
        }
        else{
              //If no session, redirect to login page
          redirect('admin/login', 'refresh');
        }
    }

    public function mostrarFormularioGestionPNO($idCliente = null) 
    {
        if ($this->session->userdata('loggeado')) {
        $this->load->helper('form');
        $this->load->library('form_validation');       
        $this->form_validation->CI =& $this;
        $persona = array();
        if ($idCliente === NULL) {
            $persona['ID_TIPO_CONTRIBUYENTE'] = 1;
            $persona['TIPO_DOCUMENTO'] = 'C';
            $persona['ID_TIPO_BECA'] = 1;
            $persona['ID_NACIONALIDAD'] = 18;
            $persona['ID_PAIS_NACIMIENTO'] = 1;
            $persona['ID_PAIS_DOMICILIO'] = 1;
            $persona['ID_PAIS_CONTACTO_LABORAL'] = NULL;
            $persona['ID_PROVINCIA_NACIMIENTO'] = 19;
            $persona['ID_PROVINCIA_DOMICILIO'] = 19;
            $persona['ID_PROVINCIA_CONTACTO_LABORAL'] = NULL;
            $persona['ID_CANTON_DOMICILIO'] = null;
            $persona['ID_PARROQUIA_DOMICILIO'] = 11;
            $persona['ID_PARROQUIA_CONTACTO_LABORAL'] = NULL;
            $persona['ID_CANTON_CONTACTO_LABORAL'] = null;
            $persona['ID_ESTADO_CIVIL'] = 1;
            $persona['TIPO_SANGRE'] = null;
            $persona['GENERO'] = null;
            $persona['ID_GRUPO_CULTURAL'] = null;
            $persona['TRATO_PERSONAL'] = null;
            $persona['ID_PROFESION'] = null;
            $persona['OCUPACION'] = null;
            $persona['PARENTESCO_AFINIDAD'] = null;
            $persona['ID_OPERADOR_TELEFONICO_DOMICILIO'] = null;
            $persona['ID_OPERADOR_TELEFONICO_CONTACTO_LABORAL'] = null;
        } else {
            $persona = $this->clientes_model->obtener_datos_cliente_natural($idCliente);
            if ($persona == NULL) {
               /*
                * Implementar redireccion  pq se esta buscando por in ID_PERSONA q no existe en BD.
                */ 
                 show_404();
            }

//            if (isset($persona['FECHA_NACIMIENTO'])) {
//                $persona['FECHA_NACIMIENTO'] = DateTime::createFromFormat('Y-m-d', $persona['FECHA_NACIMIENTO']);
//                $persona['FECHA_NACIMIENTO'] = $persona['FECHA_NACIMIENTO']->format('d-m-Y');
//            }
        }
        
        
        $persona['tiposContribuyentes'] = $this->tipos_contribuyentes_model->get_tipos_contribuyentes();
        $persona['tiposDocumentos'] = $this->tipos_documentos_model->get_tipos_documentos_excepto_RUC();
        $persona['tiposBecas'] = $this->tipos_becas_model->get_tipos_becas();
        $persona['nacionalidades'] = $this->nacionalidades_model->get_nacionalidades();
        $persona['paises'] = $this->paises_model->get_paises();
        $persona['provinciasNacimiento'] = $this->provincias_model->obtener_provincias_x_id_pais($persona['ID_PAIS_NACIMIENTO']);
        $persona['provinciasDomicilio'] = $this->provincias_model->obtener_provincias_x_id_pais($persona['ID_PAIS_DOMICILIO']);
        $persona['provinciasContactoLaboral'] = $this->provincias_model->obtener_provincias_x_id_pais($persona['ID_PAIS_CONTACTO_LABORAL']);
        $persona['cantonesDomicilio'] = $this->cantones_model->obtener_cantones_x_id_provincia($persona['ID_PROVINCIA_DOMICILIO']);
        $persona['cantonesContactoLaboral'] = $this->cantones_model->obtener_cantones_x_id_provincia($persona['ID_PROVINCIA_CONTACTO_LABORAL']);
        $persona['parroquiasDomicilio'] = $this->parroquias_model->obtener_parroquias_x_id_canton($persona['ID_CANTON_DOMICILIO']);
        $persona['parroquiasContactoLaboral'] = $this->parroquias_model->obtener_parroquias_x_id_canton($persona['ID_CANTON_CONTACTO_LABORAL']);
        $persona['estadosCiviles'] = $this->estados_civiles_model->get_estados_civiles();
        $persona['tiposSangre'] = $this->tipos_sangre_model->get_tipos_sangre();
        $persona['generos'] = $this->generos_model->get_generos();
        $persona['gruposCulturales'] = $this->grupos_culturales_model->get_grupos_culturales();
        $persona['tratosPersonales'] = $this->tratos_personales_model->get_tratos_personales();
        $persona['profesiones'] = $this->profesiones_model->get_profesiones();
        $persona['ocupaciones'] = $this->ocupaciones_model->get_ocupaciones();
        $persona['parentezcos'] = $this->parentezcos_model->get_parentezcos();
        $persona['operadoras'] = $this->operadoras_telefonicas_model->get_operadoras_telefonicas_activas();

        $this->load->view('templates/header');
        $this->load->view('creacionAvanzadaPNO', $persona);
        $this->load->view('templates/footer');
        }
        else{
              //If no session, redirect to login page
          redirect('admin/login', 'refresh');
        }
    }



    public function procesarFormularioGestionPND($idCliente = null) 
    {
        if($this->session->userdata('loggeado'))
        {
        $persona = array();
        if ($idCliente != NULL) 
        {
            $persona = $this->clientes_model->obtener_datos_cliente_natural($idCliente);
            if ($persona == NULL) {
               /*
                * Implementar redireccion  pq se esta buscando por in ID_PERSONA q no existe en BD.
                */ 
                 show_404();
            }
            
        }
        $this->load->helper('form');
        $this->load->library('form_validation');       
        $this->form_validation->CI =& $this;
        
        //$this->form_validation->set_rules('formulario_personas[NRO_DOCUMENTO]', 'número de documento', 'required');
        $this->form_validation->set_rules('formulario_personas[NRO_DOCUMENTO]', 'número de documento', 'required|callback_noExisteNroIdentificacion['.$idCliente.']');
        $this->form_validation->set_rules('formulario_personas[PRIMER_NOMBRE]', 'primer nombre', 'required');
        $this->form_validation->set_rules('formulario_personas[APELLIDO_PATERNO]', 'apellido paterno', 'required');
        $this->form_validation->set_rules('formulario_personas[ID_TIPO_CONTRIBUYENTE]', 'tipo de contribuyente', 'required');
        $this->form_validation->set_rules('formulario_personas[CONTACTO_DOMICILIO][ID_CANTON]', 'canton de domicilio', 'required');
        $this->form_validation->set_rules('formulario_personas[TIPO_DOCUMENTO]', 'tipo de documento', 'required');
        $this->form_validation->set_rules('formulario_personas[ID_NACIONALIDAD]', 'nacionalidad', 'required');
        $this->form_validation->set_rules('formulario_personas[ID_PAIS_NACIMIENTO]', 'país de nacimiento', 'required');
        //$this->form_validation->set_rules('formulario_personas[ID_PROVINCIA_NACIMIENTO]', 'provincia de nacimiento', 'required');
        $this->form_validation->set_rules('formulario_personas[ID_ESTADO_CIVIL]', 'estado civil', 'required');
        $this->form_validation->set_rules('formulario_personas[CONTACTO_DOMICILIO][ID_PAIS]', 'país de domicilio', 'required');
        $this->form_validation->set_rules('formulario_personas[CONTACTO_DOMICILIO][ID_PROVINCIA]', 'provincia de domicilio', 'required');
        $this->form_validation->set_rules('formulario_personas[CONTACTO_DOMICILIO][DIRECCION_CALLE_PRINCIPAL]', 'calle principal', 'required');
        //$this->form_validation->set_rules('formulario_personas[CONTACTO_DOMICILIO][TELEFONO]', 'teléfono', 'required');
        $this->form_validation->set_rules('formulario_personas[CONTACTO_DOMICILIO][CORREO_ELECTRONICO]', 'correo electrónico', 'required');
        $this->form_validation->set_rules('formulario_personas[FECHA_NACIMIENTO]', 'fecha de nacimiento', 'required');
        $this->form_validation->set_rules('formulario_personas[NUMERO_RUC]', 'número de ruc', 'callback_noExisteNroIdentificacion['.$idCliente.']');
        
        
        $data = $this->input->post('formulario_personas');
//        if (isset($data['FECHA_NACIMIENTO'])) {
//            $data['FECHA_NACIMIENTO'] = DateTime::createFromFormat('d-m-Y', $data['FECHA_NACIMIENTO']);
//            $data['FECHA_NACIMIENTO'] = $data['FECHA_NACIMIENTO']->format('Y-m-d');
//        }
        if ($this->form_validation->run() === FALSE) 
        {
            if (isset($persona['ID_CLIENTE']) && $persona['ID_CLIENTE'] != NULL) {
                $data['ID_CLIENTE'] = $persona['ID_CLIENTE'];
                $data['FOTOGRAFIA'] = $persona['FOTOGRAFIA'];
            }
            /* contenido de los combos */
            $data['tiposContribuyentes'] = $this->tipos_contribuyentes_model->get_tipos_contribuyentes();
            $data['tiposDocumentos'] = $this->tipos_documentos_model->get_tipos_documentos_excepto_RUC();
            $data['tiposBecas'] = $this->tipos_becas_model->get_tipos_becas();
            $data['nacionalidades'] = $this->nacionalidades_model->get_nacionalidades();
            $data['paises'] = $this->paises_model->get_paises();
            $data['provinciasNacimiento'] = $this->provincias_model->obtener_provincias_x_id_pais(isset($data['ID_PAIS_NACIMIENTO'])?$data['ID_PAIS_NACIMIENTO']:NULL);
            $data['provinciasDomicilio'] = $this->provincias_model->obtener_provincias_x_id_pais(isset($data['CONTACTO_DOMICILIO']['ID_PAIS'])?$data['CONTACTO_DOMICILIO']['ID_PAIS']:NULL);
            $data['provinciasContactoLaboral'] = $this->provincias_model->obtener_provincias_x_id_pais(isset($data['ID_CONTACTO_LABORAL']['ID_PAIS'])?$data['ID_CONTACTO_LABORAL']['ID_PAIS']:NULL);
            $data['cantonesDomicilio'] = $this->cantones_model->obtener_cantones_x_id_provincia(isset($data['CONTACTO_DOMICILIO']['ID_PROVINCIA'])?$data['CONTACTO_DOMICILIO']['ID_PROVINCIA']:NULL);
            $data['cantonesContactoLaboral'] = $this->cantones_model->obtener_cantones_x_id_provincia(isset($data['ID_CONTACTO_LABORAL']['ID_PROVINCIA'])?$data['ID_CONTACTO_LABORAL']['ID_PROVINCIA']:NULL);
            $data['parroquiasDomicilio'] = $this->parroquias_model->obtener_parroquias_x_id_canton(isset($data['CONTACTO_DOMICILIO']['ID_CANTON'])?$data['CONTACTO_DOMICILIO']['ID_CANTON']:NULL);
            $data['parroquiasContactoLaboral'] = $this->parroquias_model->obtener_parroquias_x_id_canton(isset($data['ID_CONTACTO_LABORAL']['ID_CANTON'])?$data['ID_CONTACTO_LABORAL']['ID_CANTON']:NULL);
            $data['estadosCiviles'] = $this->estados_civiles_model->get_estados_civiles();
            $data['tiposSangre'] = $this->tipos_sangre_model->get_tipos_sangre();
            $data['generos'] = $this->generos_model->get_generos();
            $data['gruposCulturales'] = $this->grupos_culturales_model->get_grupos_culturales();
            $data['tratosPersonales'] = $this->tratos_personales_model->get_tratos_personales();
            $data['profesiones'] = $this->profesiones_model->get_profesiones();
            $data['ocupaciones'] = $this->ocupaciones_model->get_ocupaciones();
            $data['parentezcos'] = $this->parentezcos_model->get_parentezcos();
            $data['operadoras'] = $this->operadoras_telefonicas_model->get_operadoras_telefonicas_activas();

            $data['ID_OPERADOR_TELEFONICO_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['ID_OPERADOR_TELEFONICO'])?$data['ID_CONTACTO_LABORAL']['ID_OPERADOR_TELEFONICO']:NULL;
            $data['CELULAR_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['CELULAR'])?$data['ID_CONTACTO_LABORAL']['CELULAR']:NULL;
            $data['TELEFONO_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['TELEFONO'])?$data['ID_CONTACTO_LABORAL']['TELEFONO']:NULL;
            $data['CORREO_ELECTRONICO_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['CORREO_ELECTRONICO'])?$data['ID_CONTACTO_LABORAL']['CORREO_ELECTRONICO']:NULL;
            $data['ID_PAIS_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['ID_PAIS'])?$data['ID_CONTACTO_LABORAL']['ID_PAIS']:NULL;
            $data['ID_PROVINCIA_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['ID_PROVINCIA'])?$data['ID_CONTACTO_LABORAL']['ID_PROVINCIA']:NULL;
            $data['ID_CANTON_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['ID_CANTON'])?$data['ID_CONTACTO_LABORAL']['ID_CANTON']:NULL;
            $data['ID_PARROQUIA_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['ID_PARROQUIA'])?$data['ID_CONTACTO_LABORAL']['ID_PARROQUIA']:NULL;
            $data['DIRECCION_CALLE_PRINCIPAL_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['DIRECCION_CALLE_PRINCIPAL'])?$data['ID_CONTACTO_LABORAL']['DIRECCION_CALLE_PRINCIPAL']:NULL;
            $data['DIRECCION_NUMERO_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['DIRECCION_NUMERO'])?$data['ID_CONTACTO_LABORAL']['DIRECCION_NUMERO']:NULL;
            $data['DIRECCION_CALLE_SECUNDARIA1_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['DIRECCION_CALLE_SECUNDARIA1'])?$data['ID_CONTACTO_LABORAL']['DIRECCION_CALLE_SECUNDARIA1']:NULL;
            $data['DIRECCION_CALLE_SECUNDARIA2_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['DIRECCION_CALLE_SECUNDARIA2'])?$data['ID_CONTACTO_LABORAL']['DIRECCION_CALLE_SECUNDARIA2']:NULL;
            $data['DIRECCION_REFERENCIA_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['DIRECCION_REFERENCIA'])?$data['ID_CONTACTO_LABORAL']['DIRECCION_REFERENCIA']:NULL;
            $data['DESCRIPCION_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['DESCRIPCION'])?$data['ID_CONTACTO_LABORAL']['DESCRIPCION']:NULL;
            
            $data['ID_OPERADOR_TELEFONICO_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['ID_OPERADOR_TELEFONICO'])?$data['CONTACTO_DOMICILIO']['ID_OPERADOR_TELEFONICO']:NULL;
            $data['CELULAR_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['CELULAR'])?$data['CONTACTO_DOMICILIO']['CELULAR']:NULL;
            $data['TELEFONO_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['TELEFONO'])?$data['CONTACTO_DOMICILIO']['TELEFONO']:NULL;
            $data['CORREO_ELECTRONICO_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['CORREO_ELECTRONICO'])?$data['CONTACTO_DOMICILIO']['CORREO_ELECTRONICO']:NULL;
            $data['ID_PAIS_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['ID_PAIS'])?$data['CONTACTO_DOMICILIO']['ID_PAIS']:NULL;
            $data['ID_PROVINCIA_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['ID_PROVINCIA'])?$data['CONTACTO_DOMICILIO']['ID_PROVINCIA']:NULL;
            $data['ID_CANTON_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['ID_CANTON'])?$data['CONTACTO_DOMICILIO']['ID_CANTON']:NULL;
            $data['ID_PARROQUIA_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['ID_PARROQUIA'])?$data['CONTACTO_DOMICILIO']['ID_PARROQUIA']:NULL;
            $data['DIRECCION_CALLE_PRINCIPAL_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['DIRECCION_CALLE_PRINCIPAL'])?$data['CONTACTO_DOMICILIO']['DIRECCION_CALLE_PRINCIPAL']:NULL;
            $data['DIRECCION_NUMERO_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['DIRECCION_NUMERO'])?$data['CONTACTO_DOMICILIO']['DIRECCION_NUMERO']:NULL;
            $data['DIRECCION_CALLE_SECUNDARIA1_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['DIRECCION_CALLE_SECUNDARIA1'])?$data['CONTACTO_DOMICILIO']['DIRECCION_CALLE_SECUNDARIA1']:NULL;
            $data['DIRECCION_CALLE_SECUNDARIA2_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['DIRECCION_CALLE_SECUNDARIA2'])?$data['CONTACTO_DOMICILIO']['DIRECCION_CALLE_SECUNDARIA2']:NULL;
            $data['DIRECCION_REFERENCIA_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['DIRECCION_REFERENCIA'])?$data['CONTACTO_DOMICILIO']['DIRECCION_REFERENCIA']:NULL;
            $data['DESCRIPCION_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['DESCRIPCION'])?$data['CONTACTO_DOMICILIO']['DESCRIPCION']:NULL;
            
            
            $this->load->view('templates/header',array('mostrarMensajeErrorValidacion'=>TRUE));
            $this->load->view('creacionAvanzadaPN', $data);
            $this->load->view('templates/footer');
        } 
        else 
        {
            /* VERIFICO, Y SI ESTA CREANDO LE ASIGNO UN USUARIO QUE NO EXISTA */
            if ($idCliente == NULL)  
            {
               $p_nombre = $data['PRIMER_NOMBRE'];
               $s_nombre = $data['SEGUNDO_NOMBRE'];
               $p_apellido = $data['APELLIDO_PATERNO'];
               $s_apellido = $data['APELLIDO_MATERNO'];
               $usuario_generado = $this->clientes_model->crearUsuario($p_nombre,$s_nombre,$p_apellido,$s_apellido);
               $data['USUARIO'] = $usuario_generado;

               $dir_correo_e = $data['CONTACTO_DOMICILIO']['CORREO_ELECTRONICO'];
               $pass = $data['CONTRASENA'];
               $usuario_generado = $this->clientes_model->crearUsuario($p_nombre,$s_nombre,$p_apellido,$s_apellido);

               //notifico al mail
               $this->enviarCorreoElectronico($dir_correo_e, $usuario_generado, $pass );
            }


            /* TRABAJO CON LOS CHECKS */
            if (!isset($data['ES_BECADO'])) {
                $data['ES_BECADO'] = 0;
            }
            if (!isset($data['TIENE_RUC'])) {
                $data['TIENE_RUC'] = 0;
            }
            if (!isset($data['ES_DISCAPACITADO'])) {
                $data['ES_DISCAPACITADO'] = 0;
            }
            if (!isset($data['ES_CONTRIBUYENTE_ESPECIAL'])) {
                $data['ES_CONTRIBUYENTE_ESPECIAL'] = 0;
            }
            /*--------------------- TRABAJO CON LOS CONTACTOS ---------------------*/
            $contactoLaboral = $data['ID_CONTACTO_LABORAL'];
            
            $contactoDomiciliar = $data['CONTACTO_DOMICILIO'];
            
            unset($data['CONTACTO_DOMICILIO']);
            unset($data['ID_CONTACTO_LABORAL']);
            
            /*---------------------------TRABAJO CON LOS DATOS DE CLIENTE------------------------------------*/
           $cliente = array();
           $cliente['TIPO_DOCUMENTO']=$data['TIPO_DOCUMENTO'];
           $cliente['NRO_DOCUMENTO']=$data['NRO_DOCUMENTO'];
           $cliente['ID_TIPO_CONTRIBUYENTE']=$data['ID_TIPO_CONTRIBUYENTE'];
           $cliente['ES_CONTRIBUYENTE_ESPECIAL']=$data['ES_CONTRIBUYENTE_ESPECIAL'];
           
           unset($data['TIPO_DOCUMENTO']);
           unset($data['NRO_DOCUMENTO']);
           unset($data['ID_TIPO_CONTRIBUYENTE']);
           unset($data['ES_CONTRIBUYENTE_ESPECIAL']);
           
           /*-------------------------------------------------------------------------------------------------*/
           
            /* SE CONVIERTE A NULL TODOS LOS CAMPOS QUE VENGAN DEL FORMULARIO CON CADENA VACIA DE VALOR */
            foreach ($contactoLaboral as $key => $value) {
                if ($value === '') {
                    $contactoLaboral[$key] = NULL;
                }
            }
            foreach ($contactoDomiciliar as $key => $value) {
                if ($value === '') {
                    $contactoDomiciliar[$key] = NULL;
                }
            }
            foreach ($cliente as $key => $value) {
                if ($value === '') {
                    $cliente[$key] = NULL;
                }
            }
            foreach ($data as $key => $value) {
                if ($value === '') {
                    $data[$key] = NULL;
                }
            }
            
          /*-----------------------------------------------TRABAJO CON LA FOTOGRAFIA----------------------------------------*/  
            if ($_FILES['formulario_personas']['error']['file'] === 0) {
                /* SUBIR FOTOGRAFIA */
                $nombreUnicofotografia = sha1(uniqid(mt_rand(), true));
                $uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/ACADEMOS/assets/uploads/fotografias/';
                $nombreActual = $_FILES['formulario_personas']['name']['file'];
                $arrayNombreActual = explode('.', $nombreActual);
                $ext = $arrayNombreActual[count($arrayNombreActual) - 1];
                $uploaddirFotografiaActual = $uploaddir . $nombreUnicofotografia . '.' . $ext;
                if (move_uploaded_file($_FILES['formulario_personas']['tmp_name']['file'], $uploaddirFotografiaActual)) {
                    $data['FOTOGRAFIA'] = $nombreUnicofotografia . '.' . $ext;
                }
                /*ESTO ME DA UN ERROR DE PERMISOS*/
//                if (file_exists($uploaddir . $persona['FOTOGRAFIA'])) {
//                    unlink($uploaddir . $persona['FOTOGRAFIA']);
//                }
            }

            $this->clientes_model->crearActualizarClienteNaturalTransaccional($persona,$data,$cliente,$contactoLaboral,$contactoDomiciliar);
            $this->session->set_flashdata('mostrarMensajeConfirmacion', TRUE); 
            if($idCliente == NULL)
            {
                redirect('index/index', 'refresh');
            }
            else{
                redirect('clientes/clientes/mostrarFormularioGestionPND/'.$idCliente, 'refresh');
            }
        }
        }
        else
        {
            //If no session, redirect to login page
          redirect('admin/login', 'refresh');
        }
    }

    public function procesarFormularioGestionPNO($idCliente = null) 
    {
        if($this->session->userdata('loggeado'))
        {
        $persona = array();
        if ($idCliente != NULL) 
        {
            $persona = $this->clientes_model->obtener_datos_cliente_natural($idCliente);
            if ($persona == NULL) {
               /*
                * Implementar redireccion  pq se esta buscando por in ID_PERSONA q no existe en BD.
                */ 
                 show_404();
            }
            
        }
        $this->load->helper('form');
        $this->load->library('form_validation');       
        $this->form_validation->CI =& $this;
        
        //$this->form_validation->set_rules('formulario_personas[NRO_DOCUMENTO]', 'número de documento', 'required');
        $this->form_validation->set_rules('formulario_personas[NRO_DOCUMENTO]', 'número de documento', 'required|callback_noExisteNroIdentificacion['.$idCliente.']');
        $this->form_validation->set_rules('formulario_personas[PRIMER_NOMBRE]', 'primer nombre', 'required');
        $this->form_validation->set_rules('formulario_personas[APELLIDO_PATERNO]', 'apellido paterno', 'required');
        $this->form_validation->set_rules('formulario_personas[ID_TIPO_CONTRIBUYENTE]', 'tipo de contribuyente', 'required');
        $this->form_validation->set_rules('formulario_personas[CONTACTO_DOMICILIO][ID_CANTON]', 'canton de domicilio', 'required');
        $this->form_validation->set_rules('formulario_personas[TIPO_DOCUMENTO]', 'tipo de documento', 'required');
        $this->form_validation->set_rules('formulario_personas[ID_NACIONALIDAD]', 'nacionalidad', 'required');
        $this->form_validation->set_rules('formulario_personas[ID_PAIS_NACIMIENTO]', 'país de nacimiento', 'required');
        //$this->form_validation->set_rules('formulario_personas[ID_PROVINCIA_NACIMIENTO]', 'provincia de nacimiento', 'required');
        $this->form_validation->set_rules('formulario_personas[ID_ESTADO_CIVIL]', 'estado civil', 'required');
        $this->form_validation->set_rules('formulario_personas[CONTACTO_DOMICILIO][ID_PAIS]', 'país de domicilio', 'required');
        $this->form_validation->set_rules('formulario_personas[CONTACTO_DOMICILIO][ID_PROVINCIA]', 'provincia de domicilio', 'required');
        $this->form_validation->set_rules('formulario_personas[CONTACTO_DOMICILIO][DIRECCION_CALLE_PRINCIPAL]', 'calle principal', 'required');
        //$this->form_validation->set_rules('formulario_personas[CONTACTO_DOMICILIO][TELEFONO]', 'teléfono', 'required');
        $this->form_validation->set_rules('formulario_personas[CONTACTO_DOMICILIO][CORREO_ELECTRONICO]', 'correo electrónico', 'required');
        $this->form_validation->set_rules('formulario_personas[FECHA_NACIMIENTO]', 'fecha de nacimiento', 'required');
        $this->form_validation->set_rules('formulario_personas[NUMERO_RUC]', 'número de ruc', 'callback_noExisteNroIdentificacion['.$idCliente.']');
        
        
        $data = $this->input->post('formulario_personas');
//        if (isset($data['FECHA_NACIMIENTO'])) {
//            $data['FECHA_NACIMIENTO'] = DateTime::createFromFormat('d-m-Y', $data['FECHA_NACIMIENTO']);
//            $data['FECHA_NACIMIENTO'] = $data['FECHA_NACIMIENTO']->format('Y-m-d');
//        }
        if ($this->form_validation->run() === FALSE) 
        {
            if (isset($persona['ID_CLIENTE']) && $persona['ID_CLIENTE'] != NULL) {
                $data['ID_CLIENTE'] = $persona['ID_CLIENTE'];
                $data['FOTOGRAFIA'] = $persona['FOTOGRAFIA'];
            }
            /* contenido de los combos */
            $data['tiposContribuyentes'] = $this->tipos_contribuyentes_model->get_tipos_contribuyentes();
            $data['tiposDocumentos'] = $this->tipos_documentos_model->get_tipos_documentos_excepto_RUC();
            $data['tiposBecas'] = $this->tipos_becas_model->get_tipos_becas();
            $data['nacionalidades'] = $this->nacionalidades_model->get_nacionalidades();
            $data['paises'] = $this->paises_model->get_paises();
            $data['provinciasNacimiento'] = $this->provincias_model->obtener_provincias_x_id_pais(isset($data['ID_PAIS_NACIMIENTO'])?$data['ID_PAIS_NACIMIENTO']:NULL);
            $data['provinciasDomicilio'] = $this->provincias_model->obtener_provincias_x_id_pais(isset($data['CONTACTO_DOMICILIO']['ID_PAIS'])?$data['CONTACTO_DOMICILIO']['ID_PAIS']:NULL);
            $data['provinciasContactoLaboral'] = $this->provincias_model->obtener_provincias_x_id_pais(isset($data['ID_CONTACTO_LABORAL']['ID_PAIS'])?$data['ID_CONTACTO_LABORAL']['ID_PAIS']:NULL);
            $data['cantonesDomicilio'] = $this->cantones_model->obtener_cantones_x_id_provincia(isset($data['CONTACTO_DOMICILIO']['ID_PROVINCIA'])?$data['CONTACTO_DOMICILIO']['ID_PROVINCIA']:NULL);
            $data['cantonesContactoLaboral'] = $this->cantones_model->obtener_cantones_x_id_provincia(isset($data['ID_CONTACTO_LABORAL']['ID_PROVINCIA'])?$data['ID_CONTACTO_LABORAL']['ID_PROVINCIA']:NULL);
            $data['parroquiasDomicilio'] = $this->parroquias_model->obtener_parroquias_x_id_canton(isset($data['CONTACTO_DOMICILIO']['ID_CANTON'])?$data['CONTACTO_DOMICILIO']['ID_CANTON']:NULL);
            $data['parroquiasContactoLaboral'] = $this->parroquias_model->obtener_parroquias_x_id_canton(isset($data['ID_CONTACTO_LABORAL']['ID_CANTON'])?$data['ID_CONTACTO_LABORAL']['ID_CANTON']:NULL);
            $data['estadosCiviles'] = $this->estados_civiles_model->get_estados_civiles();
            $data['tiposSangre'] = $this->tipos_sangre_model->get_tipos_sangre();
            $data['generos'] = $this->generos_model->get_generos();
            $data['gruposCulturales'] = $this->grupos_culturales_model->get_grupos_culturales();
            $data['tratosPersonales'] = $this->tratos_personales_model->get_tratos_personales();
            $data['profesiones'] = $this->profesiones_model->get_profesiones();
            $data['ocupaciones'] = $this->ocupaciones_model->get_ocupaciones();
            $data['parentezcos'] = $this->parentezcos_model->get_parentezcos();
            $data['operadoras'] = $this->operadoras_telefonicas_model->get_operadoras_telefonicas_activas();

            $data['ID_OPERADOR_TELEFONICO_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['ID_OPERADOR_TELEFONICO'])?$data['ID_CONTACTO_LABORAL']['ID_OPERADOR_TELEFONICO']:NULL;
            $data['CELULAR_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['CELULAR'])?$data['ID_CONTACTO_LABORAL']['CELULAR']:NULL;
            $data['TELEFONO_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['TELEFONO'])?$data['ID_CONTACTO_LABORAL']['TELEFONO']:NULL;
            $data['CORREO_ELECTRONICO_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['CORREO_ELECTRONICO'])?$data['ID_CONTACTO_LABORAL']['CORREO_ELECTRONICO']:NULL;
            $data['ID_PAIS_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['ID_PAIS'])?$data['ID_CONTACTO_LABORAL']['ID_PAIS']:NULL;
            $data['ID_PROVINCIA_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['ID_PROVINCIA'])?$data['ID_CONTACTO_LABORAL']['ID_PROVINCIA']:NULL;
            $data['ID_CANTON_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['ID_CANTON'])?$data['ID_CONTACTO_LABORAL']['ID_CANTON']:NULL;
            $data['ID_PARROQUIA_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['ID_PARROQUIA'])?$data['ID_CONTACTO_LABORAL']['ID_PARROQUIA']:NULL;
            $data['DIRECCION_CALLE_PRINCIPAL_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['DIRECCION_CALLE_PRINCIPAL'])?$data['ID_CONTACTO_LABORAL']['DIRECCION_CALLE_PRINCIPAL']:NULL;
            $data['DIRECCION_NUMERO_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['DIRECCION_NUMERO'])?$data['ID_CONTACTO_LABORAL']['DIRECCION_NUMERO']:NULL;
            $data['DIRECCION_CALLE_SECUNDARIA1_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['DIRECCION_CALLE_SECUNDARIA1'])?$data['ID_CONTACTO_LABORAL']['DIRECCION_CALLE_SECUNDARIA1']:NULL;
            $data['DIRECCION_CALLE_SECUNDARIA2_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['DIRECCION_CALLE_SECUNDARIA2'])?$data['ID_CONTACTO_LABORAL']['DIRECCION_CALLE_SECUNDARIA2']:NULL;
            $data['DIRECCION_REFERENCIA_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['DIRECCION_REFERENCIA'])?$data['ID_CONTACTO_LABORAL']['DIRECCION_REFERENCIA']:NULL;
            $data['DESCRIPCION_CONTACTO_LABORAL'] = isset($data['ID_CONTACTO_LABORAL']['DESCRIPCION'])?$data['ID_CONTACTO_LABORAL']['DESCRIPCION']:NULL;
            
            $data['ID_OPERADOR_TELEFONICO_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['ID_OPERADOR_TELEFONICO'])?$data['CONTACTO_DOMICILIO']['ID_OPERADOR_TELEFONICO']:NULL;
            $data['CELULAR_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['CELULAR'])?$data['CONTACTO_DOMICILIO']['CELULAR']:NULL;
            $data['TELEFONO_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['TELEFONO'])?$data['CONTACTO_DOMICILIO']['TELEFONO']:NULL;
            $data['CORREO_ELECTRONICO_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['CORREO_ELECTRONICO'])?$data['CONTACTO_DOMICILIO']['CORREO_ELECTRONICO']:NULL;
            $data['ID_PAIS_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['ID_PAIS'])?$data['CONTACTO_DOMICILIO']['ID_PAIS']:NULL;
            $data['ID_PROVINCIA_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['ID_PROVINCIA'])?$data['CONTACTO_DOMICILIO']['ID_PROVINCIA']:NULL;
            $data['ID_CANTON_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['ID_CANTON'])?$data['CONTACTO_DOMICILIO']['ID_CANTON']:NULL;
            $data['ID_PARROQUIA_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['ID_PARROQUIA'])?$data['CONTACTO_DOMICILIO']['ID_PARROQUIA']:NULL;
            $data['DIRECCION_CALLE_PRINCIPAL_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['DIRECCION_CALLE_PRINCIPAL'])?$data['CONTACTO_DOMICILIO']['DIRECCION_CALLE_PRINCIPAL']:NULL;
            $data['DIRECCION_NUMERO_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['DIRECCION_NUMERO'])?$data['CONTACTO_DOMICILIO']['DIRECCION_NUMERO']:NULL;
            $data['DIRECCION_CALLE_SECUNDARIA1_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['DIRECCION_CALLE_SECUNDARIA1'])?$data['CONTACTO_DOMICILIO']['DIRECCION_CALLE_SECUNDARIA1']:NULL;
            $data['DIRECCION_CALLE_SECUNDARIA2_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['DIRECCION_CALLE_SECUNDARIA2'])?$data['CONTACTO_DOMICILIO']['DIRECCION_CALLE_SECUNDARIA2']:NULL;
            $data['DIRECCION_REFERENCIA_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['DIRECCION_REFERENCIA'])?$data['CONTACTO_DOMICILIO']['DIRECCION_REFERENCIA']:NULL;
            $data['DESCRIPCION_DOMICILIO'] = isset($data['CONTACTO_DOMICILIO']['DESCRIPCION'])?$data['CONTACTO_DOMICILIO']['DESCRIPCION']:NULL;
            
            
            $this->load->view('templates/header',array('mostrarMensajeErrorValidacion'=>TRUE));
            $this->load->view('creacionAvanzadaPNO', $data);
            $this->load->view('templates/footer');
        } 
        else 
        {
            /* VERIFICO, Y SI ESTA CREANDO LE ASIGNO UN USUARIO QUE NO EXISTA 
            if ($idCliente == NULL)  
            {
               $p_nombre = $data['PRIMER_NOMBRE'];
               $s_nombre = $data['SEGUNDO_NOMBRE'];
               $p_apellido = $data['APELLIDO_PATERNO'];
               $s_apellido = $data['APELLIDO_MATERNO'];
               $usuario_generado = $this->clientes_model->crearUsuario($p_nombre,$s_nombre,$p_apellido,$s_apellido);
               $data['USUARIO'] = $usuario_generado;

               $dir_correo_e = $data['CONTACTO_DOMICILIO']['CORREO_ELECTRONICO'];
               $pass = $data['CONTRASENA'];
               $usuario_generado = $this->clientes_model->crearUsuario($p_nombre,$s_nombre,$p_apellido,$s_apellido);

               //notifico al mail
               $this->enviarCorreoElectronico($dir_correo_e, $usuario_generado, $pass );
            }*/


            /* TRABAJO CON LOS CHECKS */
            if (!isset($data['ES_BECADO'])) {
                $data['ES_BECADO'] = 0;
            }
            if (!isset($data['TIENE_RUC'])) {
                $data['TIENE_RUC'] = 0;
            }
            if (!isset($data['ES_DISCAPACITADO'])) {
                $data['ES_DISCAPACITADO'] = 0;
            }
            if (!isset($data['ES_CONTRIBUYENTE_ESPECIAL'])) {
                $data['ES_CONTRIBUYENTE_ESPECIAL'] = 0;
            }
            /*--------------------- TRABAJO CON LOS CONTACTOS ---------------------*/
            $contactoLaboral = $data['ID_CONTACTO_LABORAL'];
            
            $contactoDomiciliar = $data['CONTACTO_DOMICILIO'];
            
            unset($data['CONTACTO_DOMICILIO']);
            unset($data['ID_CONTACTO_LABORAL']);
            
            /*---------------------------TRABAJO CON LOS DATOS DE CLIENTE------------------------------------*/
           $cliente = array();
           $cliente['TIPO_DOCUMENTO']=$data['TIPO_DOCUMENTO'];
           $cliente['NRO_DOCUMENTO']=$data['NRO_DOCUMENTO'];
           $cliente['ID_TIPO_CONTRIBUYENTE']=$data['ID_TIPO_CONTRIBUYENTE'];
           $cliente['ES_CONTRIBUYENTE_ESPECIAL']=$data['ES_CONTRIBUYENTE_ESPECIAL'];
           
           unset($data['TIPO_DOCUMENTO']);
           unset($data['NRO_DOCUMENTO']);
           unset($data['ID_TIPO_CONTRIBUYENTE']);
           unset($data['ES_CONTRIBUYENTE_ESPECIAL']);
           
           /*-------------------------------------------------------------------------------------------------*/
           
            /* SE CONVIERTE A NULL TODOS LOS CAMPOS QUE VENGAN DEL FORMULARIO CON CADENA VACIA DE VALOR */
            foreach ($contactoLaboral as $key => $value) {
                if ($value === '') {
                    $contactoLaboral[$key] = NULL;
                }
            }
            foreach ($contactoDomiciliar as $key => $value) {
                if ($value === '') {
                    $contactoDomiciliar[$key] = NULL;
                }
            }
            foreach ($cliente as $key => $value) {
                if ($value === '') {
                    $cliente[$key] = NULL;
                }
            }
            foreach ($data as $key => $value) {
                if ($value === '') {
                    $data[$key] = NULL;
                }
            }
            
          /*-----------------------------------------------TRABAJO CON LA FOTOGRAFIA----------------------------------------*/  
            if ($_FILES['formulario_personas']['error']['file'] === 0) {
                /* SUBIR FOTOGRAFIA */
                $nombreUnicofotografia = sha1(uniqid(mt_rand(), true));
                $uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/ACADEMOS/assets/uploads/fotografias/';
                $nombreActual = $_FILES['formulario_personas']['name']['file'];
                $arrayNombreActual = explode('.', $nombreActual);
                $ext = $arrayNombreActual[count($arrayNombreActual) - 1];
                $uploaddirFotografiaActual = $uploaddir . $nombreUnicofotografia . '.' . $ext;
                if (move_uploaded_file($_FILES['formulario_personas']['tmp_name']['file'], $uploaddirFotografiaActual)) {
                    $data['FOTOGRAFIA'] = $nombreUnicofotografia . '.' . $ext;
                }
                /*ESTO ME DA UN ERROR DE PERMISOS*/
//                if (file_exists($uploaddir . $persona['FOTOGRAFIA'])) {
//                    unlink($uploaddir . $persona['FOTOGRAFIA']);
//                }
            }

            $this->clientes_model->crearActualizarClienteNaturalTransaccional($persona,$data,$cliente,$contactoLaboral,$contactoDomiciliar);
            $this->session->set_flashdata('mostrarMensajeConfirmacion', TRUE); 
            if($idCliente == NULL)
            {
                redirect('index/index', 'refresh');
            }
            else{
                redirect('clientes/clientes/mostrarFormularioGestionPNO/'.$idCliente, 'refresh');
            }
        }
        }
        else
        {
            //If no session, redirect to login page
          redirect('admin/login', 'refresh');
        }
    }

    public function enviarCorreoElectronico($correo,$user,$pass) 
    {
        //cargamos la libreria email de ci
        $this->load->library("email"); //ubicada en system...
 
        //configuracion para gmail
        /*$configGmail = array(
                            'protocol' => 'smtp',
                            'smtp_host' => 'server.binaryecuador.com',
                            'smtp_port' => 465,
                            'smtp_user' => 'wbaro@binary.ec',
                            'smtp_pass' => 'wbaro.2016',
                            'mailtype' => 'html',
                            'charset' => 'utf-8',
                            'newline' => "\r\n"
        );    */
 
        //cargamos la configuración para enviar con gmail
        //$this->email->initialize($configGmail);
 
        $this->email->from('no-reply@binary.ec');
        $this->email->to($correo);
        $this->email->subject('Notificación de registro en sistema Bi-Academos');
        $this->email->message('Usted ha sido registrado en el sistema Bi-Academos, puede ingresar usando el usuario: '.$user.' y la clave: '.$pass);
        //$this->email->send();
    }

}
