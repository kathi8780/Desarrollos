<?php

class configura_procesos_model extends CI_Model 
{

    public function __construct() {
        $this->load->database();
    }
   	//Trae las Pruebas Por Laboratorio
	public function PruebasPorLaboratorio($laboratorio)
    {
   
		 $select=array("pl.ID_PRUEBA_LABORATORIO","l.NOMBRE_LABORATORIO as laboratorio","tp.NOMBRE_PRUEBA prueba");
		 $this->db->select($select);
         $this->db->from("pruebas_laboratorio pl");
		 $this->db->join("laboratorio l",'l.ID_LABORATORIO=pl.ID_LABORATORIO');
		 $this->db->join("tipo_prueba tp",'tp.ID_TIPO_PRUEBA= pl.ID_TIPO_PRUEBA');
		 
		 if($laboratorio!= ""){
			 
             $this->db->where("pl.ID_LABORATORIO=", $laboratorio);  
         }
		 
         $consulta = $this->db->get();
         $resultado = $consulta->result_array();
         return $resultado;
				
    }
	//Trae los procesos por producto
	public function ProcesosPorProducto($producto)
    {
   
		 $select=array("p.ID_PROCESOS","pl.PROD_COD_PROD producto", "l.NOMBRE_LABORATORIO laboratorio","pl.PRINCIPAL principal","pl.COMISION comision","p.ORDEN orden", "pn.NOMBRE_PROCESO proceso");
		 $this->db->select($select);
         $this->db->from("producto_laboratorio pl");
		 $this->db->join("procesos p",'pl.ID_PRODUCTO_LABORATORIO=p.ID_PRODUCTO_LABORATORIO');
		 $this->db->join("procesos_nombre pn",'pn.ID_PROCESO_NOMBRE=p.ID_PROCESO_NOMBRE');
		 $this->db->join("laboratorio l",'l.ID_LABORATORIO=pl.ID_LABORATORIO');
		 $this->db->order_by("pl.PROD_COD_PROD ASC,p.ORDEN ASC");
		 
		 if($producto!= ""){
			 
             $this->db->where("pl.PROD_COD_PROD=", $producto);  
         }
		 
         $consulta = $this->db->get();
         $resultado = $consulta->result_array();
         return $resultado;
				
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
	public function obtenerProducto()
    {
		
		$array=array("pl.PROD_COD_PROD");
		$this->db->select($array);
		$this->db->from("producto_laboratorio AS pl");
		$this->db->group_by("pl.PROD_COD_PROD");
								
		$consulta = $this->db->get();
		$resultado = $consulta->result_array();
		return $resultado;
				
    }
	public function obtenerTecnico()
    {
		
		$array=array("t.ID_TECNICO","CONCAT_WS(' ',t.APELLIDO_TECNICO,t.NOMBRE_TECNICO) AS TECNICO");
		$this->db->select($array);
		$this->db->from("tecnico AS t");
						
		$consulta = $this->db->get();
		$resultado = $consulta->result_array();
		return $resultado;
				
    }
	public function obtenerProcesos()
    {
           	
		$array=array("pn.ID_PROCESO_NOMBRE", "pn.NOMBRE_PROCESO");
		$this->db->select($array);
		$this->db->from("procesos_nombre AS pn");
						
		$consulta = $this->db->get();
		$resultado = $consulta->result_array();
		return $resultado;
				
    }
	public function obtenerPruebas()
    {
           	
		$array=array("p.ID_TIPO_PRUEBA","p.NOMBRE_PRUEBA");
		$this->db->select($array);
		$this->db->from("tipo_prueba AS p");
						
		$consulta = $this->db->get();
		$resultado = $consulta->result_array();
		return $resultado;
				
    }
	public function obtenerLaboratorio()
    {
           	
		$array=array("l.ID_LABORATORIO", "l.NOMBRE_LABORATORIO");
		$this->db->select($array);
		$this->db->from("laboratorio AS l");
						
		$consulta = $this->db->get();
		$resultado = $consulta->result_array();
		return $resultado;
				
    }
	public function obtenerCategoria()
    {	
		$array=array("c.ID_CATEGORIA","c.SIGLAS_CATEGORIA");
		$this->db->select($array);
		$this->db->from("categoria AS c");
						
		$consulta = $this->db->get();
		$resultado = $consulta->result_array();
		return $resultado;				
    }
	public function InsertarPruebasPorLaboratorio($data)
    {
        $this->db->insert('pruebas_laboratorio', $data);
        return $this->db->insert_id();
    }	
	public function InsertarProcesosPorTecnico($data)
    {
        $this->db->insert('tecnico_proceso', $data);
        return $this->db->insert_id();
    }
	public function EliminarPruebasPorLaboratorio($id)
    {
        $this->db->where('ID_PRUEBA_LABORATORIO', $id);
        $this->db->delete('pruebas_laboratorio'); 
    }
	public function EliminarProcesosPorTecnico($id)
    {
        $this->db->where('ID_TECNICO_PROCESO', $id);
        $this->db->delete('tecnico_proceso'); 
    }
	public function EliminarProcesosPorProducto($id)
    {
        $query =$this->db->query("SELECT COUNT(*)cant FROM proceso_pedido a where a.ID_PROCESOS='$id'");
		
		if ($query->num_rows() > 0)
		{
				$row = $query->row_array();
				
				if($row['cant']==0){
					$this->db->where('ID_PROCESOS', $id);
					$this->db->delete('procesos');
					$resultado='Proceso Eliminado con Exito';
				}else{
					$resultado='Proceso con Movimientos en Pedidos no puede ser Eliminado';
				}
		}
		return $resultado;	
    }
}