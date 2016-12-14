<?php

class Ocupaciones_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    public function get_ocupaciones() {
        $query = $this->db->get('tab_ocupaciones');
            return $query->result_array();
    }
    

}
