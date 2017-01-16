

<?php

class configura_maestros_model extends CI_Model 
{

    public function __construct() {
        $this->load->database();
    }
	public function ActualizaLaboratorio($data, $id)
    {
        $this->db->where('laboratorio.ID_LABORATORIO', $id);
        $this->db->update('laboratorio', $data);

    }
	// Insertar Proceso Nuevo
    public function insertarNuevoProcesoNombre($data,$nombre){

        
        $query =$this->db->query("SELECT COUNT(*)cant FROM procesos_nombre a where a.NOMBRE_PROCESO='$nombre'");
  
              if ($query->num_rows() > 0)
              {
                $row = $query->row_array();
                
                    if($row['cant']==0){
                     $this->db->insert('procesos_nombre',$data);
                     $resultado='Nombre de Proceso Guardado con Exito';
                    }else{
                     $resultado='El Nombre de Proceso ya Existe';
                    }
                 

              }

		return $resultado;
    }
	public function obtenerLaboratorio($id)
    {
           	
		$array=array("l.ID_LABORATORIO id_laboratorio", "l.NOMBRE_LABORATORIO nombre_laboratorio","l.ACTIVO as activo");
		$this->db->select($array);
		$this->db->from("laboratorio AS l");
		
		if($id!="")
         {
            $this->db->where("l.ID_LABORATORIO =", $id);  
         }
		
		$this->db->order_by("l.ID_LABORATORIO","DESC");
		
		$consulta = $this->db->get();
		$resultado = $consulta->result_array();
		return $resultado;
				
    }
	
    // obtener datos de proceso por id
	public function buscarProcesoNombre($id){

        $array=array("p.ID_PROCESO_NOMBRE as id_proceso", "p.NOMBRE_PROCESO as nombre_proceso","p.MINUTOS as minutos");
        $this->db->select($array);
        $this->db->from("procesos_nombre AS p");
        
        if($id!="")
         {
            $this->db->where("p.ID_PROCESO_NOMBRE =", $id);  
         }
        
        $this->db->order_by("p.ID_PROCESO_NOMBRE","DESC");
        
        $consulta = $this->db->get();
        $resultado = $consulta->result_array();
        return $resultado;

	}
	public function eliminarProcesosPorNombre($id)
    {

         $query =$this->db->query("SELECT COUNT(*)cant FROM procesos a where a.ID_PROCESO_NOMBRE='$id'");
  
              if ($query->num_rows() > 0)
              {
                $row = $query->row_array();
                
                    if($row['cant']==0){
                     $this->db->where('ID_PROCESO_NOMBRE', $id);
                     $this->db->delete('procesos_nombre');
                     $resultado='Nombre de Proceso Eliminado con Exito';
                    }else{
                     $resultado='Proceso Asociado a Pedidos no Puede Ser Eliminado';
                    }
                 

              }

	return $resultado;
    }

    public function actualizarProcesoNombre($data,$id){

       
        $this->db->where('procesos_nombre.ID_PROCESO_NOMBRE', $id);
        $this->db->update('procesos_nombre', $data);

    }
	//PRUEBAS



    public function actualizarPrueba($data,$id){

        $this->db->where('tipo_prueba.ID_TIPO_PRUEBA', $id);
        $this->db->update('tipo_prueba', $data);

    }
    public function obtenerPruebas($id){

        
         $array=array("t.ID_TIPO_PRUEBA as id_prueba", "t.NOMBRE_PRUEBA as nombre_prueba","t.DIAS as dias");
        $this->db->select($array);
        $this->db->from("tipo_prueba AS t");
        
        if($id!="")
         {
            $this->db->where("t.ID_TIPO_PRUEBA =", $id);  
         }
        $this->db->order_by("t.ID_TIPO_PRUEBA","DESC");   
        $consulta = $this->db->get();
        $resultado = $consulta->result_array();
        return $resultado;

	}
	public function insertarConfiguraLaboratorio($data,$nombre){

        
        $query =$this->db->query("SELECT COUNT(*)cant FROM laboratorio a where a.NOMBRE_LABORATORIO='$nombre'");
  
              if ($query->num_rows() > 0)
              {
                $row = $query->row_array();
                
                    if($row['cant']==0){
                     $this->db->insert('laboratorio',$data);
                     $resultado='Laboratorio Guardado con Exito';
                    }else{
                     $resultado='Laboratorio ya Existe';
                    }
                 

              }

		return $resultado;


    }
	public function insertarNuevoPrueba($data,$nombre){

        
        $query =$this->db->query("SELECT COUNT(*)cant FROM tipo_prueba a where a.NOMBRE_PRUEBA='$nombre'");
  
              if ($query->num_rows() > 0)
              {
                $row = $query->row_array();
                
                    if($row['cant']==0){
                     $this->db->insert('tipo_prueba',$data);
                     $resultado='Tipo de Prueba Guardado con Exito';
                    }else{
                     $resultado='Tipo de Prueba ya Existe';
                    }
                 

              }

		return $resultado;
    }
    public function eliminarPrueba($id)
    {
        //$this->db->where('ID_TIPO_PRUEBA', $id);
        //$this->db->delete('tipo_prueba'); 


        $query =$this->db->query("SELECT COUNT(*)cant FROM pruebas a where a.ID_TIPO_PRUEBA=".$id."");
  
              if ($query->num_rows() > 0)
              {
                $row = $query->row_array();
                
                    if($row['cant']==0){
                     $this->db->where('ID_TIPO_PRUEBA', $id);
                     $this->db->delete('tipo_prueba');
                     $resultado='Tipo de Prueba Eliminado con Exito';
                    }else{
                     $resultado='Prueba Asociada a Pedidos no Puede Ser Eliminada';
                    }
                 

              }

		return $resultado;


    }
    public function obtenerInventarios($id){

         $array=array("i.id_inventario as id_inventario", "i.nombre_inventario as nombre_inventario","i.activo as estado");
        $this->db->select($array);
        $this->db->from("inventario AS i");
        
        if($id!="")
         {
            $this->db->where("i.id_inventario =", $id);  
         }
        $this->db->order_by("i.id_inventario","DESC");   
        $consulta = $this->db->get();
        $resultado = $consulta->result_array();
        return $resultado;

	}
	public function insertarNuevoInventario($data,$nombre){

        
        $query =$this->db->query("SELECT COUNT(*)cant FROM inventario a where a.nombre_inventario='$nombre'");
  
              if ($query->num_rows() > 0)
              {
                $row = $query->row_array();
                
                    if($row['cant']==0){
                     $this->db->insert('inventario',$data);
                     $resultado='Inventario Guardado con Exito';
                    }else{
                     $resultado='El Invemtario ya Existe';
                    }
                 

              }

	return $resultado;
    }
    public function eliminarInventario($id)
    {
   
        $query =$this->db->query("SELECT COUNT(*)cant FROM laboratorio a where a.id_laboratorio=".$id."");
  
              if ($query->num_rows() > 0)
              {
                $row = $query->row_array();
                
                    if($row['cant']==0){
                     $this->db->where('id_inventario', $id);
                    $this->db->delete('inventario'); 
                     $resultado='Inventario Eliminado con Exito';
                    }else{
                     $resultado='Inventario Asociado a Pedidos no Puede Ser Eliminado';
                    }
                 

              }

		return $resultado;       
    }

    public function actualizarInventario($data,$id){

        $this->db->where('inventario.id_inventario', $id);
        $this->db->update('inventario', $data);

    }
	public function eliminarLaboratorio($id)
    {
   
        $query =$this->db->query("SELECT COUNT(*)cant FROM producto_laboratorio a where a.id_laboratorio=".$id."");
  
              if ($query->num_rows() > 0)
              {
                $row = $query->row_array();
                
                    if($row['cant']==0){
						$this->db->where('id_laboratorio', $id);
						$this->db->delete('laboratorio'); 
						$resultado='Laboratorio Eliminado con Exito';
                    }else{
						$resultado='Laboratorio Asociado a Producto no Puede Ser Eliminado';
                    }
              }

		return $resultado;       
    }
    public function editarInventario($data,$id){
        $this->db->where('id_inventario', $id);
        $this->db->update('inventario', $data);
    }
	public function EstadoConfiguraLaboratorio($id)
	{
		$this->db->query("UPDATE laboratorio SET activo=if(ACTIVO='S','N','S') WHERE id_laboratorio=$id");

	}

}