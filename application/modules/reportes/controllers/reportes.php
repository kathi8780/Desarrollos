<?php

class reportes extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('Pdf_Library');
		$this->load->model('reportes_model');
    }
    //Ver reportes generados en Library TCPDF
	public function VerReporte($nombre,$nro_pedido){
		
		 if ($this->session->userdata('loggeado'))
		 {
			$datos=array();
            $datos['pedidos_procesos']           = $this->reportes_model->procesosDetallePedido($nro_pedido);
			$datos['obtenerInventarioPedido']    = $this->reportes_model->obtenerInventarioPedido($nro_pedido);
			$datos['obtenerProductosDeUnPedido'] = $this->reportes_model->obtenerProductosDeUnPedido($nro_pedido);
			
			$this->load->view($nombre, $datos);
						 
		 }
		
	}
}
    