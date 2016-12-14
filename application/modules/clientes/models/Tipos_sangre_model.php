<?php

class Tipos_sangre_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    public function get_tipos_sangre() {
        $query = $this->db->get('tab_tipos_sangre');
            return $query->result_array();
    }
    

}
