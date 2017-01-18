<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends MX_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('usuarios_model');
    }

    function check_usuario_clave() 
    {   
        $usuario = $this->input->post('usuario');
        $clave = $this->input->post('clave');
        $result = $this->usuarios_model->login($usuario, $clave);
       
        if ($result) 
        {
            $sess_array = array();
            foreach ($result as $row) 
            {
                $sess_array = array(
                                    'ID_USUARIO' => $row->ID_USUARIO,
                                    'USUARIO'    => $row->USUARIO
                                    );
                $this->session->set_userdata('loggeado', $sess_array);
            }
            return true;
        } 
        else 
        {
            $this->session->set_userdata('loggeado', $sess_array=array('USUARIO' =>"binary"));
            return false;
        }
    }


    function index() 
    {        
       		
		//This method will have the credentials validation
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('usuario', 'usuario', 'trim|required');
        $this->form_validation->set_rules('clave', 'clave', 'trim|required');
        
        if ($this->form_validation->run() == FALSE) 
        {
            //Field validation failed.  User redirected to login page
            $this->load->view('login');
        } 
        else 
        {
            if($this->check_usuario_clave())
            {
                //redirect('index/index');
				//redirect('pedido/pedidos/mostrarFormularioTrackingProceso');
				redirect('pedido/pedidos/AgendaProduccion');
				//echo 'hola';
            }
            else
            {
                 $this->load->view('login',array('error'=>'Usuario o clave inválido.'));
            }
        }
    }
    
     function logout()
        {
          $this->session->unset_userdata('loggeado');
          session_destroy();
          redirect('admin/login', 'refresh');
        }

    
}
