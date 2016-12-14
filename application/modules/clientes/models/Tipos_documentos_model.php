<?php

class Tipos_documentos_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    public function get_tipos_documentos_excepto_RUC() {
        $this->db->where('tab_tipos_documentos.ID_TIPO_DOCUMENTO <>',4);
        $query = $this->db->get('tab_tipos_documentos');
            return $query->result_array();
    }
    

}
