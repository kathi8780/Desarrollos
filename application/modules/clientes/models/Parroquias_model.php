<?php

class Parroquias_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    public function obtener_parroquias_x_id_canton($id_canton) {
        if(!$id_canton)
        {
            return array();
        }
        $this->db->where('tab_parroquias.ID_CANTON =',$id_canton);
        $query = $this->db->get('tab_parroquias');
            return $query->result_array();
    }
    
    public function obtener_parroquias_x_id_canton_formateadas($id_canton) {
    
        if(!$id_canton)
        {
            return array();
        }
         $this->db->select('tab_parroquias.ID_PARROQUIA id, tab_parroquias.PARROQUIA text');
        $this->db->from('tab_parroquias');
        $this->db->where('tab_parroquias.ID_CANTON =',$id_canton);
        $query= $this->db->get();
        return $query->result_array();
    }
    

}
