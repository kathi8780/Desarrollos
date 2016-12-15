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
 public function insertarTipoPrueba(){

        if ($this->session->userdata('loggeado')) 
        {      
            //$data_sesion = $this->session->userdata()['loggeado'];
            $id_usuario = $this->session->userdata['loggeado']['ID_USUARIO'];

            $data_pruebas = array();
            $data_pruebas['NOMBRE_PRUEBA']=trim($this->input->post('prueba'));
            $data_pruebas['DIAS']=trim($this->input->post('dias')); 
            $pruebas_datos = $this->configura_maestros_model->insertarNuevoPrueba($data_pruebas);

            echo json_encode($pruebas_datos);   
        }
        else 
        {
          redirect('admin/login', 'refresh');
        } 
    }
    public function obtenerUnProceso(){

            if ($this->session->userdata('loggeado'))
         {
            $id=trim($this->input->post('id'));
             $datos['proceso_uno'] = $this->configura_maestros_model->buscarprocesoNombreUnico($id);
            echo json_encode($datos); 
            
            
         }
        else 
        {
          redirect('admin/login', 'refresh');
        }

    }
	public function ConfiguraProcesos(){
		
		 if ($this->session->userdata('loggeado'))
		 {
			 $datos['procesos_nombre_datos'] = $this->configura_maestros_model->obtenerProcesoNombre();
            $this->load->view('templates/header');
            $this->load->view('ConfiguraProceso',$datos);
            $this->load->view('templates/footer');
		 }
		else 
        {
          redirect('admin/login', 'refresh');
        }
	}
public function editarProcesos(){

            echo "ola soy el editor";

}

	public function ConfiguraPruebas(){
		
		 if ($this->session->userdata('loggeado'))
		 {
			
            $datos['tipo_pruebas'] = $this->configura_maestros_model->obtenerPruebas();
            $this->load->view('templates/header');
            $this->load->view('ConfiguraPrueba',$datos);
            $this->load->view('templates/footer');
		 }
		
	}
	

    public function eliminarProcesosNombre(){
  
  if ($this->session->userdata('loggeado')) 
        {   
            $id = trim($this->input->post('id'));
            $this->configura_maestros_model->eliminarProcesosPorNombre($id);
            echo json_encode($id);    
                         
        }
        else 
        {
          redirect('admin/login', 'refresh');
        } 
 }
      public function eliminarTipoPrueba(){
  
  if ($this->session->userdata('loggeado')) 
        {   
            $id = trim($this->input->post('id'));
            $this->configura_maestros_model->eliminarPrueba($id);
            echo json_encode($id);    
                         
        }
        else 
        {
          redirect('admin/login', 'refresh');
        } 
 }

 //inventarios

public function ConfiguraInventario(){
        
         if ($this->session->userdata('loggeado'))
         {
            $datos['inventario'] = $this->configura_maestros_model->obtenerInventarios();
            $this->load->view('templates/header');
            $this->load->view('ConfiguraInventario',$datos);
            $this->load->view('templates/footer');
         }
        
    }

    public function obtenerUnInventario(){

            if ($this->session->userdata('loggeado'))
         {
            $id=trim($this->input->post('id'));
             $datos['proceso_uno'] = $this->configura_maestros_model->buscarprocesoNombreUnico($id);
            echo json_encode($datos); 
            
            
         }
        else 
        {
          redirect('admin/login', 'refresh');
        }

    }

    public function insertarInventario(){

        if ($this->session->userdata('loggeado')) 
        {      
            //$data_sesion = $this->session->userdata()['loggeado'];
            $id_usuario = $this->session->userdata['loggeado']['ID_USUARIO'];

            $data_inventarios = array();
            $data_inventarios['nombre_inventario']=trim($this->input->post('inventario'));
            $data_inventarios['activo']=trim($this->input->post('activo')); 
            $inventarios_datos = $this->configura_maestros_model->insertarNuevoInventario($data_inventarios);

            echo json_encode($inventarios_datos);   
        }
        else 
        {
          redirect('admin/login', 'refresh');
        } 
    }
 public function eliminarInventario(){
  
  if ($this->session->userdata('loggeado')) 
        {   
            $id = trim($this->input->post('id'));
            $this->configura_maestros_model->eliminarInventario($id);
            echo json_encode($id);    
                         
        }
        else 
        {
          redirect('admin/login', 'refresh');
        } 
 }

}
    