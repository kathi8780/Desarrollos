<?php

class Contacto_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }   
    
    public function crearContacto($data) {
        $this->db->insert('tab_contactos', $data);  
        return $this->db->insert_id();
        
    }
    public function actualizarContacto($data,$idContacto){        
        $this->db->where('tab_contactos.ID_CONTACTO', $idContacto);
        $this->db->update('tab_contactos', $data); 
    }
    
    public function buscarContacto($datos_contacto) {
        $this->db->select('tab_contactos.ID_CONTACTO');
        $this->db->from('tab_contactos');
        $this->db->where($datos_contacto);
        
        $query = $this->db->get();
        return $query->row_array();
         
        
    }
    
    public function desactivarContactosLaborales($id_cliente) {
        $data=array();
        $data['ESTADO']=0;
        $this->db->where('tab_contactos.ID_CLIENTE', $id_cliente);
        $this->db->where('tab_contactos.ID_TIPO_CONTACTO', 1);
        $this->db->update('tab_contactos', $data); 
        
    }
    
    public function desactivarContactosDeDomicilio($id_cliente) {
        $data=array();
        $data['ESTADO']=0;
        $this->db->where('tab_contactos.ID_CLIENTE', $id_cliente);
        $this->db->where('tab_contactos.ID_TIPO_CONTACTO',2);
        $this->db->update('tab_contactos', $data); 
    }
    
    
    

}
