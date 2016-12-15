<?php
class configura_procesos extends MX_Controller {

    public function __construct() {
        parent::__construct();
		$this->load->model('configura_procesos_model');
    }
	public function ProcesosPorTecnico(){
		
		 if ($this->session->userdata('loggeado'))
		 {
			$datos=array();
			$datos['tecnico']   = $this->configura_procesos_model->obtenerTecnico();
			$datos['proceso']   = $this->configura_procesos_model->obtenerProcesos();
			$datos['categoria'] = $this->configura_procesos_model->obtenerCategoria();
			
			
			$this->load->view('templates/header');
            $this->load->view('ProcesosPorTecnico', $datos);
            $this->load->view('templates/footer');
						 
		 }
		
	}
	public function BuscarProcesosPorTecnico(){
		
		if ($this->session->userdata('loggeado')) 
        {
            $tecnico = trim($this->input->post('tecnico'));
			$resultado = $datos['procesos_tecnicos']  = $this->configura_procesos_model->ProcesosPorTecnico($tecnico);
            echo json_encode($resultado);             
        }
        else 
        {
          redirect('admin/login', 'refresh');
        }
		
	}
	public function InsertarProcesosPorTecnico(){
		
		if ($this->session->userdata('loggeado')) 
        {
            $tecnico   = trim($this->input->post('tecnico'));
			$proceso   = trim($this->input->post('proceso'));
			$categoria = trim($this->input->post('categoria'));
			
			//Inserto Proceso Por Tecnico 
            $data = array();
            $data['ID_TECNICO']=$tecnico;
            $data['ID_PROCESO_NOMBRE']=$proceso;
            $data['ID_CATEGORIA']=$categoria;
			
            $this->configura_procesos_model->InsertarProcesosPorTecnico($data);
			echo json_encode($data);    
                         
        }
        else 
        {
          redirect('admin/login', 'refresh');
        }	
	}
	public function EliminarProcesosPorTecnico(){
		
		if ($this->session->userdata('loggeado')) 
        {			
            $id = trim($this->input->post('id'));
			$this->configura_procesos_model->EliminarProcesosPorTecnico($id);
			echo json_encode($id);    
                         
        }
        else 
        {
          redirect('admin/login', 'refresh');
        }	
	}

}  