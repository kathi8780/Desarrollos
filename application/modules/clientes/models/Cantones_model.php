<?php

class Cantones_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    public function obtener_cantones_x_id_provincia($id_provincia) {
        if(!$id_provincia)
        {
            return array();
        }
        $this->db->where('tab_cantones.ID_PROVINCIA =',$id_provincia);
        $query = $this->db->get('tab_cantones');
            return $query->result_array();
    }
    public function obtener_cantones_x_id_provincia_formateados($id_provincia) {
        if(!$id_provincia)
        {
            return array();
        }
         $this->db->select('tab_cantones.ID_CANTON id, tab_cantones.CANTON text');
        $this->db->from('tab_cantones');
        $this->db->where('tab_cantones.ID_PROVINCIA =',$id_provincia);
        $query= $this->db->get();
        return $query->result_array();
    }
    

}
