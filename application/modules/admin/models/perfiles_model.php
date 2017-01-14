<?php

class perfiles_model extends CI_Model 
{

    public function __construct() {
        $this->load->database();
    }
	public function eliminarConfiguraPerfil($PERFIL_ID)
    {

         $query =$this->db->query("SELECT COUNT(*)cant FROM usuario a where a.PERFIL_ID='$PERFIL_ID'");
  
              if ($query->num_rows() > 0)
              {
                $row = $query->row_array();
                
                    if($row['cant']==0){
                     $this->db->where('PERFIL_ID', $PERFIL_ID);
                     $this->db->delete('perfil');
                     $resultado='Perfil Eliminado con Exito';
                    }else{
                     $resultado='Perfil Asociado a Usuario no Puede Ser Eliminado';
                    }
              }

	return $resultado;
    }
	public function obtenerperfil()
    {
           
		$perfil=$this->session->userdata['loggeado']['USUARIO'];	
		
		$array=array("p.PERFIL_ID","p.PERFIL_NOMBRE","p.PERFIL_ACTIVO");
		$this->db->select($array);
		$this->db->from("perfil AS p");
		$this->db->order_by("p.PERFIL_ID ASC");
		
		
		$consulta = $this->db->get();
		$resultado = $consulta->result_array();
		return $resultado;
				
    }
	public function editarPerfil($PERFIL_ID)
    {
           
		$perfil=$this->session->userdata['loggeado']['USUARIO'];	
		
		$array=array("p.PERFIL_ID","p.PERFIL_NOMBRE","p.PERFIL_ACTIVO");
		$this->db->select($array);
		$this->db->from("perfil AS p");
		$this->db->order_by("p.PERFIL_ID ASC");
		$this->db->where("p.PERFIL_ID=",$PERFIL_ID);
		
		$consulta = $this->db->get();
		$resultado = $consulta->result_array();
		return $resultado;
				
    }
	public function insertarperfil($data,$PERFIL_NOMBRE)
    { 
        		
		$query =$this->db->query("SELECT COUNT(*)cant FROM perfil a where a.PERFIL_NOMBRE='$PERFIL_NOMBRE'");
  
        if ($query->num_rows() > 0)
        {
          $row = $query->row_array();
          
              if($row['cant']==0){
               $this->db->insert('perfil', $data);
               $resultado='Perfil Guardado con Exito';
              }else{
               $resultado='El Perfil ya Existe';
              }
        }
		
		return $resultado;
		
    }
	public function Actualizaperfil($data, $id)
    {
        $this->db->where('perfil.PERFIL_ID', $id);
        $this->db->update('perfil', $data);

    }
	public function EstadoConfiguraPerfil($id)
	{
		$this->db->query("UPDATE perfil SET PERFIL_ACTIVO=if(PERFIL_ACTIVO='S','N','S') WHERE PERFIL_ID=$id");

	}
}