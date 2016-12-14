<?php

class Estados_civiles_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    public function get_estados_civiles() {
        $query = $this->db->get('tab_estados_civiles');
            return $query->result_array();
    }
    

}
