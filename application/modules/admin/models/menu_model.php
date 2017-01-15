<?php

class menu_model extends CI_Model 
{

    public function __construct() {
        $this->load->database();
    }
	public function GuardarAcceso($data,$perfil,$med_cod,$acceso){

		$query =$this->db->query("SELECT COUNT(*)cant FROM accesosni where usu_login='$perfil' AND men_cod='$med_cod'");
  
        if ($query->num_rows() > 0)
        {
          $row = $query->row_array();
          
              if($row['cant']==0){
               $this->db->insert('accesosni', $data);
               $resultado='OK.!';
              }else{
		       $this->db->query("UPDATE accesosni SET acceso='$acceso' WHERE usu_login='$perfil' AND men_cod='$med_cod'");
               $resultado='OK.!';
              }
        }
		
		return $resultado;
    }
	public function obtenerPerfil()
    {
           		
		$array=array("p.PERFIL_ID","p.PERFIL_NOMBRE");
		$this->db->select($array);
		$this->db->from("perfil AS p");
		$this->db->where("p.PERFIL_ACTIVO=",'S');
		
		$consulta = $this->db->get();
		$resultado = $consulta->result_array();
		return $resultado;
				
    }
	public function ObtenerAccesos($perfil)
    {
           
		$sql="SELECT a.men_cod, men_mostrar,
	    (SELECT men_titulo FROM menuni WHERE men_cod=SUBSTRING(a.men_cod,1,2)) panel,
		men_titulo modulo,IFNULL((SELECT acceso FROM accesosni WHERE a.men_cod=men_cod AND usu_login='$perfil'),'N') acceso
		FROM menuni AS a";
		
		$sql.=" ORDER BY a.men_orden ASC";
		
		$query= $this->db->query($sql);
        $ds = $query->result_array();
        return $ds;
		
        return $resultado;
				
    }

}