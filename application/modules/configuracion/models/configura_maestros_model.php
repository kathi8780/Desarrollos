<?php

class configura_maestros_model extends CI_Model 
{

    public function __construct() {
        $this->load->database();
    }

// Insertar Proceso Nuevo
    public function insertarNuevoProcesoNombre($data){

        $this->db->insert('procesos_nombre',$data);
        $id_retiro = $this->db->insert_id();

        $resultado['ID_PROCESO']=$id_retiro;
         return $resultado;


    }

public function obtenerProcesoNombre(){

        $this->db->select("*");
         $this->db->from("procesos_nombre");
         

         $consulta = $this->db->get();
         $resultado = $consulta->result_array();
         return $resultado;
}

}

