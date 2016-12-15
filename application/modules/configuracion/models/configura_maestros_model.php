<?php

class configura_maestros_model extends CI_Model 
{

    public function __construct() {
        $this->load->database();
    }

// Insertar Proceso Nuevo
    public function insertarNuevoProcesoNombre($data){

        $this->db->insert('procesos_nombre',$data);
        //$this->db->insert_id();

        //$resultado['ID_PROCESO']=$id_retiro;
         //return $resultado;


    }
    

public function obtenerProcesoNombre(){

        $this->db->select("*");
         $this->db->from("procesos_nombre");
         

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
        $this->db->where('ID_PROCESO_NOMBRE', $id);
        $this->db->delete('procesos_nombre'); 
    }



//PRUEBAS

    public function obtenerPruebas(){

        $this->db->select("*");
         $this->db->from("tipo_prueba");
         

         $consulta = $this->db->get();
         $resultado = $consulta->result_array();
         return $resultado;
}
public function insertarNuevoPrueba($data){

        $this->db->insert('tipo_prueba',$data);
        //$this->db->insert_id();

        //$resultado['ID_PROCESO']=$id_retiro;
         //return $resultado;


    }

    public function eliminarPrueba($id)
    {
        $this->db->where('ID_TIPO_PRUEBA', $id);
        $this->db->delete('tipo_prueba'); 
    }

// INVENTARIOS

   public function obtenerInventarios(){

        $this->db->select("*");
         $this->db->from("inventario");
         

         $consulta = $this->db->get();
         $resultado = $consulta->result_array();
         return $resultado;
}
public function insertarNuevoInventario($data){

        $this->db->insert('inventario',$data);
        //$this->db->insert_id();

        //$resultado['ID_PROCESO']=$id_retiro;
         //return $resultado;


    }

    public function eliminarInventario($id)
    {
        $this->db->where('id_inventario', $id);
        $this->db->delete('inventario'); 
    } 

    public function editarInventario($data,$id){
        $this->db->where('id_inventario', $id);
        $this->db->update('inventario', $data);
    }
}

