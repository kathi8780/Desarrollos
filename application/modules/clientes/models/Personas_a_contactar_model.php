<?php class Personas_a_contactar_model extends CI_Model {
    
    public function __construct() { 
        $this->load->database();    
        
    }   
    public function buscarPersonasAContactarXIdCliente($idCliente) {        
        $this->db->select('tab_personas_a_contactar.*');        
        $this->db->from('tab_personas_a_contactar');        
        $this->db->where('tab_personas_a_contactar.ID_CLIENTE_JURIDICO',$idCliente);       
        $this->db->where('tab_personas_a_contactar.ESTADO',1);       
        $query = $this->db->get();        
        return $query->result_array();    
        
    }   
}