<?php

class Nacionalidades_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    public function get_nacionalidades() {
        $query = $this->db->get('tab_nacionalidades');
            return $query->result_array();
    }
    

}
