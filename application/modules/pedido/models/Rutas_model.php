<?php

class Rutas_model extends CI_Model 
{

    public function __construct() {
        $this->load->database();
		date_default_timezone_set('UTC');
    }
   	
	public function  insertarRutaPedido($dato){

        $this->db->insert('ruta_entrega_retiro',$dato);
        return $this->db->insert_id();
    }

    public function distribuirRutas($arreglo_ids_pruebas,$ruta){

       

        for ($i=0; $i < count($arreglo_ids_pruebas); $i++) {
            $id_prueba = $arreglo_ids_pruebas[$i];
            $data_prueba['ID_RUTA']=$ruta;
            $data_retiro['ID_RUTA']=$ruta;
            $

            $sql="SELECT r.ID_PRUEBA FROM retiro r WHERE r.ID_RUTA IS NULL AND r.ASIGNADO='0' AND r.RETIRADO='0'    AND r.ID_PRUEBA=".$id_prueba;

            $query= $this->db->query($sql);

            if ($query->num_rows() > 0)
              {
                $this->db->where('retiro.ID_PRUEBA', $id_prueba);
                $this->db->update('retiro', $data_prueba);
              }else{
                $this->db->where('pruebas.ID_PRUEBAS', $id_prueba);
                $this->db->update('pruebas', $data_prueba);
               }
            }

            
        }
    
    
}

