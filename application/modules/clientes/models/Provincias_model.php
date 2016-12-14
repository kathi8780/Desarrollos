<?php

class Provincias_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    public function obtener_provincias_x_id_pais($id_pais) {
        if(!$id_pais)
        {
            return array();
        }
        $this->db->where('tab_provincias.ID_PAIS =',$id_pais);
        $query = $this->db->get('tab_provincias');
            return $query->result_array();
    }
    public function obtener_provincias_x_id_pais_formateadas($id_pais) {
        if(!$id_pais)
        {
            return array();
        }
         $this->db->select('tab_provincias.ID_PROVINCIA id, tab_provincias.PROVINCIA text');
        $this->db->from('tab_provincias');
        $this->db->where('tab_provincias.ID_PAIS =',$id_pais);
        $query= $this->db->get();
        return $query->result_array();
    }
    
    

}
