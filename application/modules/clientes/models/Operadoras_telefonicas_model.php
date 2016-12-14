<?php

class Operadoras_telefonicas_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    public function get_operadoras_telefonicas() {
        $query = $this->db->get('tab_operadoras_telefonicas');
            return $query->result_array();
    }
    public function get_operadoras_telefonicas_activas() {
       $this->db->where('tab_operadoras_telefonicas.ESTADO  = "A"');
        $query = $this->db->get('tab_operadoras_telefonicas');
            return $query->result_array();
    }
    

}
