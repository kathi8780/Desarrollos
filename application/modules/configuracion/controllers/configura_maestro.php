<?php

class configura_maestro extends MX_Controller {

    public function __construct() {
        parent::__construct();
		$this->load->model('configura_maestros_model');
    }

    //insertar Proceso Nombre
    public function insertarProcesoNombre(){

    	if ($this->session->userdata('loggeado')) 
        {      
            //$data_sesion = $this->session->userdata()['loggeado'];
            $id_usuario = $this->session->userdata['loggeado']['ID_USUARIO'];

            $data_procesos_nombre = array();
            $data_procesos_nombre['NOMBRE_PROCESO']=trim($this->input->post('proceso'));
            $data_procesos_nombre['MINUTOS']=trim($this->input->post('minutos')); 
            $procesos_nombre_datos = $this->configura_maestros_model->insertarNuevoProcesoNombre($data_procesos_nombre);

            echo json_encode($procesos_nombre_datos);   
        }
        else 
        {
          redirect('admin/login', 'refresh');
        } 
    }
	public function ConfiguraProcesos(){
		
		 if ($this->session->userdata('loggeado'))
		 {
			 $datos['retiros_pendientes'] = $this->configura_maestros_model->obtenerProcesoNombre();
            $this->load->view('templates/header');
            $this->load->view('ConfiguraProceso',$datos);
            $this->load->view('templates/footer');
		 }
		else 
        {
          redirect('admin/login', 'refresh');
        }
	}
	public function ConfiguraPruebas(){
		
		 if ($this->session->userdata('loggeado'))
		 {
			
            $this->load->view('templates/header');
            $this->load->view('ConfiguraPrueba');
            $this->load->view('templates/footer');
		 }
		
	}
	public function ConfiguraInventario(){
		
		 if ($this->session->userdata('loggeado'))
		 {
			
            $this->load->view('templates/header');
            $this->load->view('ConfiguraInventario');
            $this->load->view('templates/footer');
		 }
		
	}
}
    