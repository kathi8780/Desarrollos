<?php

class Grupos_culturales_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    public function get_grupos_culturales() {
        $query = $this->db->get('tab_grupos_culturales');
            return $query->result_array();
    }
    

}
