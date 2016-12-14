<?php

class Tratos_personales_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    public function get_tratos_personales() {
        $query = $this->db->get('tab_tratos_personales');
            return $query->result_array();
    }
    

}
