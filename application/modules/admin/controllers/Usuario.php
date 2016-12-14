<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuario extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('usuarios_model');
    }
    
    /**
     * METODO QUE VERIFICA SI UN USUARIO YA EXISTE EN BASE DE DATO
     */
    
    public function noExisteUsuario($usuario,$idUsuario=NULL) {
        $usuarios = $this->usuarios_model->buscar_usuario($usuario,$idUsuario);
        if ($usuarios != NULL) { //ERROR
             $this->form_validation->set_message("noExisteUsuario", "Ya existe un usuario registrado con ese correo electrónico.");
            return false;
        } else {
            return true;
        }
    }
    
    public function busquedaAvanzada() {
        if ($this->session->userdata('loggeado')) {
            if (!$this->input->is_ajax_request()) {
                $this->load->view('templates/header');
                $this->load->view('busquedaAvanzada');
                $this->load->view('templates/footer');
            } else {
                $dataForm = $this->input->post('itca_admin_buscar_usuario');
                $personasNaturales = $this->usuarios_model->buscar_usuarios($dataForm);
                $data['personas'] = $personasNaturales;
                $this->load->view('resultadoBusquedaAvanzada', $data);
            }
        } else {
            //If no session, redirect to login page
            redirect('admin/login', 'refresh');
        }
    }
    
    public function mostrarFormularioGestionUsuarios($idUsuario = null) {
        if ($this->session->userdata('loggeado')) {
        $this->load->helper('form');
        $this->load->library('form_validation');       
        $this->form_validation->CI =& $this;
        $persona = array();
        if ($idUsuario === NULL) {
        } else {
            $persona = $this->usuarios_model->obtener_datos_usuario($idUsuario);
            if ($persona == NULL) {
               /*
                * Implementar redireccion  pq se esta buscando por in ID_PERSONA q no existe en BD.
                */ 
                 show_404();
            }
        }
        
        $this->load->view('templates/header');
        $this->load->view('creacionUsuarios', $persona);
        $this->load->view('templates/footer');
        }
        else{
              //If no session, redirect to login page
          redirect('admin/login', 'refresh');
        }
    }
    
    public function enviarCorreoElectronicoCreacionUsuario($datosCreacion) {
        //cargamos la libreria email de ci
		$this->load->library("email");
 
		//configuracion para gmail
		$configGmail = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.gmail.com',
			'smtp_port' => 465,
			'smtp_user' => 'alcampos988@gmail.com',
			'smtp_pass' => 'AmorAmor14.',
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'newline' => "\r\n"
		);    
 
		//cargamos la configuración para enviar con gmail
		$this->email->initialize($configGmail);
 
		$this->email->from('ITCA-SIS');
                $this->email->to($datosCreacion['USUARIO']);
		$this->email->subject('Registro en el sistema académico');
		$this->email->message('Usted ha sido registrado en el sistema puede ingresar usando su correo electrónico y la siguiente clave:'.$datosCreacion['CLAVE_SIN_CIFRAR'] );
		$this->email->send();
	}
    
    public function procesarFormularioGestionUsuarios($idUsuario = null) {
        if ($this->session->userdata('loggeado')) {
            
        $persona = array();
        if ($idUsuario === NULL) {
        } else {
            $persona = $this->usuarios_model->obtener_datos_usuario($idUsuario);
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
        $this->form_validation->set_rules('formulario_usuarios[NRO_DOCUMENTO]', 'número de documento', 'required');
        $this->form_validation->set_rules('formulario_usuarios[NOMBRE_COMPLETO]', 'nombre completo', 'required');
        $this->form_validation->set_rules('formulario_usuarios[USUARIO]', 'correo electrónico', 'required|callback_noExisteUsuario['.$idUsuario.']' );
        
        $data = $this->input->post('formulario_usuarios');
        
        if ($this->form_validation->run() === FALSE) {
            
            if($idUsuario != NULL){
                $data['ID_USUARIO']=$idUsuario;
            }
            $this->load->view('templates/header',array('mostrarMensajeErrorValidacion'=>TRUE));
            $this->load->view('creacionUsuarios', $data);
            $this->load->view('templates/footer');
        }
        else{           
        
            $datosCreacion = $this->usuarios_model->crearActualizarUsuario($idUsuario,$data);
            $this->session->set_flashdata('mostrarMensajeConfirmacion', TRUE); 
            if($idUsuario == NULL)
            {
                $this->enviarCorreoElectronicoCreacionUsuario($datosCreacion);
                redirect('index/index', 'refresh');
            }
            else{
                redirect('admin/usuario/mostrarFormularioGestionUsuarios/'.$idUsuario, 'refresh');
            }
        }
        }
        else{
              //If no session, redirect to login page
          redirect('admin/login', 'refresh');
        }
    }
    
    public function buscarUsuario() {
        $usuario = $this->input->post('usuario');
        $usuarios = $this->usuarios_model->buscar_usuario($usuario);
        echo json_encode($usuarios);
    }

    
}
