<?php

class Profesiones_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    public function get_profesiones() {
        $query = $this->db->get('tab_profesiones');
            return $query->result_array();
    }
    

}
