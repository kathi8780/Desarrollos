<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Rutas extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Rutas_model');
		date_default_timezone_set('UTC');
    }

    public function crearRutas(){

    	if ($this->session->userdata('loggeado')) 
        {      
            //$data_sesion = $this->session->userdata()['loggeado'];
           $dato=array();     
           $dato['ID_USUARIO_MENSAJERO']=null;
           $pruebas=trim($this->input->post('cadena'));
           $arreglo_ids_pruebas = explode("&&", $pruebas);
           $ruta=$this->Rutas_model->insertarRutaPedido($dato);


           $ids=$this->Rutas_model->distribuirRutas($arreglo_ids_pruebas,$ruta);
            echo json_encode($ruta);   
        }
        else 
        {
          redirect('admin/login', 'refresh');
        } 
    }
    public function mostrarRutasSinAsignar(){

      
    }
}
