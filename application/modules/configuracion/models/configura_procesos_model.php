<?php

class configura_procesos_model extends CI_Model 
{

    public function __construct() {
        $this->load->database();
    }
   	//Trae los procesos por técnico
	public function ProcesosPorTecnico($tecnico)
    {
   
		 $select=array("T0.ID_TECNICO_PROCESO","T1.CEDULA as cedula","CONCAT(T1.APELLIDO_TECNICO,T1.NOMBRE_TECNICO)AS tecnico", "T1.DIRECCION as direccion","T2.NOMBRE_PROCESO as proceso","T3.NOMBRE_CATEGORIA as categoria", "T3.SIGLAS_CATEGORIA as siglas");
		 $this->db->select($select);
         $this->db->from("tecnico_proceso T0");
		 $this->db->join("tecnico T1",'T0.ID_TECNICO=T1.ID_TECNICO');
		 $this->db->join("procesos_nombre T2",'T0.ID_PROCESO_NOMBRE=T2.ID_PROCESO_NOMBRE');
		 $this->db->join("categoria T3",'T0.ID_CATEGORIA=T3.ID_CATEGORIA');
		 
		 if($tecnico!= ""){
			 
             $this->db->where("T0.ID_TECNICO=", $tecnico);  
         }
		 
         $consulta = $this->db->get();
         $resultado = $consulta->result_array();
         return $resultado;
				
    }
	public function obtenerTecnico()
    {
           
		$usuario=$this->session->userdata['loggeado']['USUARIO'];	
		
		$array=array("t.ID_TECNICO","CONCAT_WS(' ',t.APELLIDO_TECNICO,t.NOMBRE_TECNICO) AS TECNICO");
		$this->db->select($array);
		$this->db->from("tecnico AS t");
				
		$consulta = $this->db->get();
		$resultado = $consulta->result_array();
		return $resultado;
				
    }
	
}

