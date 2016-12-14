<?php

class Generos_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    public function get_generos() {
        $query = $this->db->get('tab_generos');
            return $query->result_array();
    }
    

}
