<?php

class configura_maestros_model extends CI_Model 
{

    public function __construct() {
        $this->load->database();
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
    

public function obtenerProcesoNombre(){

        $this->db->select("*");
         $this->db->from("procesos_nombre");
         $this->db->order_by("ID_PROCESO_NOMBRE","desc");

         $consulta = $this->db->get();
         $resultado = $consulta->result_array();
         return $resultado;
}
public function buscarprocesoNombreUnico($id){

        $this->db->select("*");
        $this->db->from("procesos_nombre");
        $this->db->where("procesos_nombre.ID_PROCESO_NOMBRE",$id);

        $query=$this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
        //$resultado=$consulta->

}

public function eliminarProcesosPorNombre($id)
    {
        //$this->db->where('ID_PROCESO_NOMBRE', $id);
        //$this->db->delete('procesos_nombre'); 


         $query =$this->db->query("SELECT COUNT(*)cant FROM procesos a where a.ID_PROCESO_NOMBRE='$id'");
  
              if ($query->num_rows() > 0)
              {
                $row = $query->row_array();
                
                    if($row['cant']==0){
                     $this->db->where('ID_PROCESO_NOMBRE', $id);
                     $this->db->delete('procesos_nombre');
                     $resultado='Nombre de Proceso Eliminado con Exito';
                    }else{
                     $resultado='Nombre de Proceso Asociado a Procesos no Puede Ser Eliminado';
                    }
                 

              }

  return $resultado;


    }



//PRUEBAS

    public function obtenerPruebas(){

        $this->db->select("*");
         $this->db->from("tipo_prueba");
         $this->db->order_by("ID_TIPO_PRUEBA","desc");

         $consulta = $this->db->get();
         $resultado = $consulta->result_array();
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
                     $resultado='Tipo de Prueba Asociada a Pruebas no Puede Ser Eliminada';
                    }
                 

              }

  return $resultado;


    }

    

// INVENTARIOS

   public function obtenerInventarios(){

        $this->db->select("*");
         $this->db->from("inventario");
         $this->db->order_by("id_inventario","desc");

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
        $this->db->where('id_inventario', $id);
        $this->db->delete('inventario'); 
       return $resultado='Inventario Eliminado con Exito';
                    


    }
    

    public function editarInventario($data,$id){
        $this->db->where('id_inventario', $id);
        $this->db->update('inventario', $data);
    }
}

