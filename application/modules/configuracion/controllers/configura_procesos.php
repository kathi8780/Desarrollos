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
			$datos['tecnico'] = $this->configura_procesos_model->obtenerTecnico();
			
			
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
}
    