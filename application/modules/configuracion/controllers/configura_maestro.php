<?php

class configura_maestro extends MX_Controller {

    public function __construct() {
        parent::__construct();
		$this->load->model('configura_maestro_model');
    }
	public function ConfiguraProceso($nombre,$nro_pedido){
		
		 if ($this->session->userdata('loggeado'))
		 {
			$datos=array();
            $datos['pedidos_procesos']  = $this->configura_maestro_model->ConfiguraProceso($nro_pedido);		
			$this->load->view('ConfiguraProceso', $datos);
						 
		 }
		
	}
}
    