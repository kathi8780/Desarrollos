<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Rol extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('funcionalidades_model');
        $this->load->model('roles_model');
    }
    
    /**
     * METODO QUE VERIFICA SI UN USUARIO YA EXISTE EN BASE DE DATO
     */
    
//    public function noExisteUsuario($usuario,$idUsuario=NULL) {
//        $usuarios = $this->usuarios_model->buscar_usuario($usuario,$idUsuario);
//        if ($usuarios != NULL) { //ERROR
//             $this->form_validation->set_message("noExisteUsuario", "Ya existe un usuario registrado con ese correo electrónico.");
//            return false;
//        } else {
//            return true;
//        }
//    }
    
    public function busquedaAvanzada() {
        if ($this->session->userdata('loggeado')) {
            if (!$this->input->is_ajax_request()) {
                $this->load->view('templates/header');
                $this->load->view('busquedaAvanzadaRoles');
                $this->load->view('templates/footer');
            } else {
                $dataForm = $this->input->post('itca_admin_buscar_rol');
                $roles = $this->roles_model->buscar_roles($dataForm);
                $data['roles'] = $roles;
                $this->load->view('resultadoBusquedaAvanzadaRoles', $data);
            }
        } else {
            //If no session, redirect to login page
            redirect('admin/login', 'refresh');
        }
    }
    
    public function mostrarFormularioGestionRoles($idRol = null) {
        if ($this->session->userdata('loggeado')) {
        $this->load->helper('form');
        $this->load->library('form_validation');       
        $this->form_validation->CI =& $this;
        
        $rol = array();
       
        if($idRol != NULL)
        {
            $rol = $this->roles_model->obtener_datos_rol($idRol);
            if ($rol == NULL) {
               /*
                * Implementar redireccion  pq se esta buscando por in ID q no existe en BD.
                */ 
                 show_404();
            }
            $funcionalidadesModuloClientes = $this->funcionalidades_model->buscar_funcionalidades_x_rol_modulo($idRol,1);
            $rol['FUNCIONALIDADES_CLIENTE'] = $funcionalidadesModuloClientes;

            $funcionalidadesModuloFact = $this->funcionalidades_model->buscar_funcionalidades_x_rol_modulo($idRol,2);
            $rol['FUNCIONALIDADES_FACTURACION'] = $funcionalidadesModuloFact;

            $funcionalidadesModuloConfig = $this->funcionalidades_model->buscar_funcionalidades_x_rol_modulo($idRol,3);
            $rol['FUNCIONALIDADES_CONFIGURACION'] = $funcionalidadesModuloConfig;
        }
        else 
        {
            $funcionalidadesModuloClientes = $this->funcionalidades_model->buscar_funcionalidades(1);
            $rol['FUNCIONALIDADES_CLIENTE'] = $funcionalidadesModuloClientes;

            $funcionalidadesModuloFact = $this->funcionalidades_model->buscar_funcionalidades(2);
            $rol['FUNCIONALIDADES_FACTURACION'] = $funcionalidadesModuloFact;

            $funcionalidadesModuloConfig = $this->funcionalidades_model->buscar_funcionalidades(3);
            $rol['FUNCIONALIDADES_CONFIGURACION'] = $funcionalidadesModuloConfig;
        }
        
       
        
        $this->load->view('templates/header');
        $this->load->view('creacionRoles', $rol);
        $this->load->view('templates/footer');
        }
        else{
              //If no session, redirect to login page
          redirect('admin/login', 'refresh');
        }
    }
    
    
    public function procesarFormularioGestionRoles($idRol = null) {
        if ($this->session->userdata('loggeado')) {
            
        $rol = array();
        if ($idRol != NULL) {
            $rol = $this->roles_model->obtener_datos_rol($idRol);
            if ($rol == NULL) {
               /*
                * Implementar redireccion  pq se esta buscando por in ID_PERSONA q no existe en BD.
                */ 
                 show_404();
            }
        }        
        $this->load->helper('form');
        $this->load->library('form_validation');       
        $this->form_validation->CI =& $this;
        $this->form_validation->set_rules('formulario_roles[ROL]', 'rol', 'required');
        $data = $this->input->post('formulario_roles');        
        
//        if ($this->form_validation->run() === FALSE) {
//            
//            if($idUsuario != NULL){
//                $data['ID_USUARIO']=$idUsuario;
//            }
//            $this->load->view('templates/header',array('mostrarMensajeErrorValidacion'=>TRUE));
//            $this->load->view('creacionUsuarios', $data);
//            $this->load->view('templates/footer');
//        }
//        else{
         
        
            $this->roles_model->crear_actualizar_rol_transaccional($idRol,$data);
            $this->session->set_flashdata('mostrarMensajeConfirmacion', TRUE); 
            if($idRol == NULL)
            {
                redirect('index/index', 'refresh');
            }
            else{
                redirect('admin/rol/mostrarFormularioGestionRoles/'.$idRol, 'refresh');
            }
//        }
        }
        else{
              //If no session, redirect to login page
          redirect('admin/login', 'refresh');
        }
    }
    
    public function buscarRolesXDenominacion() {
        $rol = $this->input->post('rol');
        $roles = $this->roles_model->buscar_roles_x_denominacion($rol);
        echo json_encode($roles);
    }
    
    

    
}
