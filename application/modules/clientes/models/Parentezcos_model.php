<?php

class Parentezcos_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    public function get_parentezcos() {
        $query = $this->db->get('tab_parentezcos');
            return $query->result_array();
    }
    

}
