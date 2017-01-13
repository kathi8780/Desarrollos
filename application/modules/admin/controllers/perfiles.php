<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Perfiles extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('perfiles_model');
    }
	public function ActualizaPerfil(){

        if ($this->session->userdata('loggeado')) 
        {      
            $PERFIL_ID=trim($this->input->post('PERFIL_ID'));
            $data = array();
            $data['PERFIL_NOMBRE']=trim($this->input->post('PERFIL_NOMBRE'));
			
            $actualiza=$this->perfiles_model->Actualizaperfil($data,$PERFIL_ID);
			echo json_encode($actualiza);
        }
        else 
        {
          redirect('admin/login', 'refresh');
        } 
    }
	public function EstadoConfiguraPerfil(){
		
		if ($this->session->userdata('loggeado'))
		{	
			$PERFIL_ID = trim($this->input->post('PERFIL_ID'));			
			$resultado = $this->perfiles_model->EstadoConfiguraPerfil($PERFIL_ID);
            echo json_encode($resultado);  	
		}	
	}
    public function MostrarFormularioPerfiles(){
		
		 if ($this->session->userdata('loggeado'))
		 {
			$datos=array();
			$datos['perfil']  = $this->perfiles_model->obtenerPerfil();			
			$this->load->view('templates/header');
            $this->load->view('GestionPerfiles', $datos);
            $this->load->view('templates/footer');
						 
		 }
		
	}
	public function ObtenerPerfil(){
		
		 if ($this->session->userdata('loggeado'))
		 {
			$datos=array();
			$result=$datos['perfil']  = $this->perfiles_model->obtenerPerfil();			
			echo json_encode($result);   			 
		 }
		
	}
	public function editarPerfil(){
		
		 if ($this->session->userdata('loggeado'))
		 {
			$PERFIL_ID=trim($this->input->post('PERFIL_ID'));
			$datos=array();
			$result=$datos['perfil']  = $this->perfiles_model->editarPerfil($PERFIL_ID);			
			echo json_encode($result);   			 
		 }
		
	}
    public function insertarPerfil(){

    	if ($this->session->userdata('loggeado')) 
        {      			
            $data = array();

			$data['PERFIL_NOMBRE']=trim($this->input->post('PERFIL_NOMBRE')); 
			$data['PERFIL_ACTIVO']=trim($this->input->post('PERFIL_ACTIVO')); 
			$PERFIL_NOMBRE=trim($this->input->post('PERFIL_NOMBRE'));
			
            $result = $this->perfiles_model->insertarPerfil($data,$PERFIL_NOMBRE);

            echo json_encode($result);   
        }
        else 
        {
          redirect('admin/login', 'refresh');
        } 
    }    
}
