<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Menu extends MX_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('menu_model');
    }
	public function MostrarFormularioAccesos(){
		
		if ($this->session->userdata('loggeado')) 
        {            
            $datos=array();
			$datos['perfil']  = $this->menu_model->obtenerPerfil();
			
			$this->load->view('templates/header');
            $this->load->view('Accesos',$datos);
            $this->load->view('templates/footer');
        }
        else 
        {
          redirect('admin/login', 'refresh');
        }	
	}
	public function ObtenerAccesos(){
		
		if ($this->session->userdata('loggeado')) 
        {            
			
			$perfil = trim($this->input->post('perfil'));
			$result = $this->menu_model->ObtenerAccesos($perfil);
            echo json_encode($result); 
			
        }
        else 
        {
          redirect('admin/login', 'refresh');
        }	
	}
	public function GuardarAcceso(){
		
		if ($this->session->userdata('loggeado')) 
        {            
			
			$perfil = trim($this->input->post('perfil'));
			$med_cod = trim($this->input->post('med_cod'));
			$acceso = trim($this->input->post('acceso'));
			
			$data = array();
			$data['usu_login']=trim($this->input->post('perfil')); 
			$data['men_cod']=trim($this->input->post('med_cod')); 
			$data['acceso']=trim($this->input->post('acceso'));
			
			$result = $this->menu_model->GuardarAcceso($data,$perfil,$med_cod,$acceso);
            echo json_encode($result); 
			
        }
        else 
        {
          redirect('admin/login', 'refresh');
        }	
	}
	
}
