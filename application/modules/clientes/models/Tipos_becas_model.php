<?php

class Tipos_becas_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    public function get_tipos_becas() {
        $query = $this->db->get('tab_tipos_becas');
            return $query->result_array();
    }
    

}
