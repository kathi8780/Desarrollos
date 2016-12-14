<?php

class Tipos_contribuyentes_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    public function get_tipos_contribuyentes() {
        $query = $this->db->get('tab_tipos_contribuyentes');
            return $query->result_array();
    }
    

}
