<?php

class Paises_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    public function get_paises() {
        $query = $this->db->get('tab_paises');
            return $query->result_array();
    }
    

}
