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
            $nombre=trim($this->input->post('proceso'));
            $data_procesos_nombre = array();
            $data_procesos_nombre['NOMBRE_PROCESO']=trim($this->input->post('proceso'));
            $data_procesos_nombre['MINUTOS']=trim($this->input->post('minutos')); 
            $procesos_nombre_datos = $this->configura_maestros_model->insertarNuevoProcesoNombre($data_procesos_nombre,$nombre);

            echo json_encode($procesos_nombre_datos);   
        }
        else 
        {
          redirect('admin/login', 'refresh');
        } 
    }
	public function EstadoConfiguraLaboratorio(){
		
		if ($this->session->userdata('loggeado'))
		{	
			$id = trim($this->input->post('id_laboratorio'));
			
			$resultado = $this->configura_maestros_model->EstadoConfiguraLaboratorio($id);
            echo json_encode($resultado);  	
		}	
	}
	public function ActualizaLaboratorio(){

        if ($this->session->userdata('loggeado')) 
        {      
            $id=trim($this->input->post('id_laboratorio'));
            $data = array();
            $data['NOMBRE_LABORATORIO']=trim($this->input->post('nombre_laboratorio'));
            $actualiza=$this->configura_maestros_model->ActualizaLaboratorio($data,$id);
			echo json_encode($actualiza);
        }
        else 
        {
          redirect('admin/login', 'refresh');
        } 
    }
	public function insertarTipoPrueba(){

        if ($this->session->userdata('loggeado')) 
        {      
            $nombre=trim($this->input->post('prueba'));
            $data_pruebas = array();
            $data_pruebas['NOMBRE_PRUEBA']=trim($this->input->post('prueba'));
            $data_pruebas['DIAS']=trim($this->input->post('dias')); 
            $pruebas_datos = $this->configura_maestros_model->insertarNuevoPrueba($data_pruebas,$nombre);
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
             $datos = $this->configura_maestros_model->buscarProcesoNombre($id);
            echo json_encode($datos); 
            
         }
         
        else 
        {
          redirect('admin/login', 'refresh');
        }

    }

    public function obtenerPrueba(){
        if ($this->session->userdata('loggeado'))
         {
            $id=trim($this->input->post('id'));
            $datos = $this->configura_maestros_model->obtenerPruebas($id);
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
            $id="";
			 $datos['procesos_nombre_datos'] = $this->configura_maestros_model->buscarProcesoNombre($id);
             
            $this->load->view('templates/header');
            $this->load->view('ConfiguraProceso',$datos);
            $this->load->view('templates/footer');
		 }
		else 
        {
          redirect('admin/login', 'refresh');
        }
	}
	public function editarProceso(){
            
        if ($this->session->userdata('loggeado')) 
        {      
            $id=trim($this->input->post('id_proceso'));
            $data = array();
            $data['NOMBRE_PROCESO']=trim($this->input->post('nombre_proceso'));
            $data['MINUTOS']=trim($this->input->post('minutos'));
            $actualiza=$this->configura_maestros_model->actualizarProcesoNombre($data,$id);
            
            echo json_encode($actualiza);
        }
        else 
        {
          redirect('admin/login', 'refresh');
        }             

	}

    public function editarPrueba(){

        if($this->session->userdata('loggeado')){
            $id=trim($this->input->post('id_prueba'));
            $data=array();
            $data['NOMBRE_PRUEBA']=trim($this->input->post('nombre_prueba'));
            $data['DIAS']=trim($this->input->post('dias'));
            $actualiza=$this->configura_maestros_model->actualizarPrueba($data,$id); 
            echo json_encode($actualiza);          


        }else{
            redirect('admin/login','refresh');

        }


    }
	public function ConfiguraPruebas(){
		
        if ($this->session->userdata('loggeado'))
         {
            $id="";
             $datos['tipo_pruebas'] = $this->configura_maestros_model->obtenerPruebas($id);
             
            $this->load->view('templates/header');
            $this->load->view('ConfiguraPrueba',$datos);
            $this->load->view('templates/footer');
         }
        else 
        {
          redirect('admin/login', 'refresh');
        }
	}
    public function eliminarProcesosNombre(){
  
	if ($this->session->userdata('loggeado')) 
        {   
            $id = trim($this->input->post('id'));
            $resultado=$this->configura_maestros_model->eliminarProcesosPorNombre($id);

            echo json_encode($resultado);    
                         
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
                    $resultado=$this->configura_maestros_model->eliminarPrueba($id);
                    echo json_encode($resultado);    
                                 
                }
                else 
                {
                  redirect('admin/login', 'refresh');
                } 
	}
    public function ConfiguraInventario(){
        

        if ($this->session->userdata('loggeado'))
         {
            $id="";
            $datos['inventario'] = $this->configura_maestros_model->obtenerInventarios($id);
             
            $this->load->view('templates/header');
            $this->load->view('ConfiguraInventario',$datos);
            $this->load->view('templates/footer');
         }
        else 
        {
          redirect('admin/login', 'refresh');
        }

    }

    public function obtenerInventario(){

        if ($this->session->userdata('loggeado'))
         {
            $id=trim($this->input->post('id'));
            $datos = $this->configura_maestros_model->obtenerInventarios($id);
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

            $nombre=trim($this->input->post('inventario'));
            $data_inventarios = array();
            $data_inventarios['nombre_inventario']=trim($this->input->post('inventario'));
            $data_inventarios['activo']=trim($this->input->post('activo')); 
            $inventarios_datos = $this->configura_maestros_model->insertarNuevoInventario($data_inventarios,$nombre);

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
				$resultado=$this->configura_maestros_model->eliminarInventario($id);
				echo json_encode($resultado);    
							
			}
			else 
			{
			redirect('admin/login', 'refresh');
			} 
	}
    public function editarInventario(){

         if ($this->session->userdata('loggeado')) 
        {      
            $id=trim($this->input->post('id_inventario'));
            $data = array();
            $data['nombre_inventario']=trim($this->input->post('inventario'));
            $data['activo']=trim($this->input->post('estado'));
            $actualiza=$this->configura_maestros_model->actualizarInventario($data,$id);
            echo json_encode($actualiza);
        }
        else 
        {
          redirect('admin/login', 'refresh');
        }
    }


	public function ConfiguraLaboratorio(){
        
         if ($this->session->userdata('loggeado'))
         {
            $id=trim($this->input->post('id'));
            $datos['laboratorio'] = $this->configura_maestros_model->obtenerLaboratorio($id);
			$this->load->view('templates/header');
            $this->load->view('ConfiguraLaboratorio',$datos);
            $this->load->view('templates/footer');
         }
        
    }
	public function obtenerLaboratorio(){
        
         if ($this->session->userdata('loggeado'))
         {
            $id=trim($this->input->post('id_laboratorio'));
            $datos= $this->configura_maestros_model->obtenerLaboratorio($id);
			echo json_encode($datos); 
         }
        
    }
    public function BuscarConfiguraLaboratorio(){

        if ($this->session->userdata('loggeado'))
         {
            $id=trim($this->input->post('id'));
            $datos['proceso_uno'] = $this->configura_maestros_model->BuscarConfiguraLaboratorio($id);
            echo json_encode($datos);     
            
         }
        else 
        {
          redirect('admin/login', 'refresh');
        }

    }
    public function insertarConfiguraLaboratorio(){

        if ($this->session->userdata('loggeado')) 
        {      
             
            $nombre=trim($this->input->post('laboratorio'));
			
            $data_laboratorio = array();
            $data_laboratorio['nombre_laboratorio']=trim($this->input->post('laboratorio'));
            $data_laboratorio['activo']=trim($this->input->post('activo')); 
			
            $data_laboratorio = $this->configura_maestros_model->insertarConfiguraLaboratorio($data_laboratorio,$nombre);


            echo json_encode($data_laboratorio);   

        }
        else 
        {
          redirect('admin/login', 'refresh');
        } 
    }
	public function eliminarConfiguraLaboratorio(){
	
	   if ($this->session->userdata('loggeado')) 
			{   
				
				$id = trim($this->input->post('id'));
				$resultado=$this->configura_maestros_model->eliminarLaboratorio($id);
				echo json_encode($resultado);    
							
			}
			else 
			{
			redirect('admin/login', 'refresh');
			} 
	}
} 