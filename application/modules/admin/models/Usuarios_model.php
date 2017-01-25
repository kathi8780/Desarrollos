<?php

class usuarios_model extends CI_Model 
{

    public function __construct() {
        $this->load->database();
    }
	function login($usuario, $clave) {
		
		$array=array("USUARIO_ID ID_USUARIO","USUARIO_USER USUARIO","USUARIO_PASSWORD CLAVE","CONCAT(USUARIO_NOMBRE,' ',USUARIO_APELLIDO) AS NOMBRE");
		$this->db->select($array);
        $this->db->from('usuario');
        $this->db->where('USUARIO_ACTIVO','S');
        $this->db->where('USUARIO_USER', $usuario);
        $this->db->where('USUARIO_PASSWORD', MD5($clave));
        
		$this->db->limit(1);
        $query = $this->db->get();
        
        if ($query->num_rows() == 1) 
        {

            return $query->result();
        } 
        else 
        {
            return false;
        }
    }
	public function eliminarConfiguraUsuario($USUARIO_ID)
    {

         $query =$this->db->query("SELECT COUNT(*)cant FROM pedido a where a.USUARIO_ID='$USUARIO_ID'");
  
              if ($query->num_rows() > 0)
              {
                $row = $query->row_array();
                
                    if($row['cant']==0){
                     $this->db->where('USUARIO_ID', $USUARIO_ID);
                     $this->db->delete('usuario');
                     $resultado='Usuario Eliminado con Exito';
                    }else{
                     $resultado='Usuario Asociado a Pedidos no Puede Ser Eliminado';
                    }
              }

	return $resultado;
    }
	public function editarUsuario($USUARIO_ID)
    {
           
		$sql="SELECT u.USUARIO_ID,u.USUARIO_USER, u.USUARIO_NOMBRE, u.USUARIO_APELLIDO, u.PERFIL_ID, u.USUARIO_ACTIVO,
			u.USUARIO_FECHA_REGISTRO,u.USUARIO_MOVIL, u.USUARIO_TELEFONO,u.EMPL_COD_EMPL,  u.USUARIO_EMAIL, p.PERFIL_NOMBRE ,
			u.USUARIO_TIEMPO_SESION, u.USUARIO_FECHA_CADUCA
			FROM usuario u
			JOIN perfil  p ON u.PERFIL_ID=p.PERFIL_ID
			WHERE u.USUARIO_ID=".$USUARIO_ID; 
		
		$query= $this->db->query($sql);
        $ds = $query->result_array();
        return $ds;
				
    }
	public function obtenerPerfil()
    {
           
		$usuario=$this->session->userdata['loggeado']['USUARIO'];	
		
		$array=array("p.PERFIL_ID","p.PERFIL_NOMBRE");
		$this->db->select($array);
		$this->db->from("perfil AS p");
		$this->db->where("p.PERFIL_ACTIVO=",'S');
		
		$consulta = $this->db->get();
		$resultado = $consulta->result_array();
		return $resultado;
				
    }
	public function obtenerUsuarios($PERFIL_ID,$activo)
    {
        $sql="SELECT u.USUARIO_ID,u.USUARIO_USER, u.USUARIO_NOMBRE, u.USUARIO_APELLIDO,p.PERFIL_NOMBRE, u.USUARIO_ACTIVO,
			u.USUARIO_FECHA_REGISTRO,u.USUARIO_MOVIL, u.USUARIO_TELEFONO,u.EMPL_COD_EMPL,  u.USUARIO_EMAIL 
			FROM usuario u
			JOIN perfil p on u.PERFIL_ID=p.PERFIL_ID";
			
			if($PERFIL_ID != "")
            {
                $sql.=" and u.PERFIL_ID =".$PERFIL_ID ;           
            }
			
            if($activo!= "")
            {
                $sql.=" and u.USUARIO_ACTIVO='".$activo."'";  
            }	
			
		$sql.=" ORDER BY u.USUARIO_ID  DESC"; 
		
		$query= $this->db->query($sql);
        $ds = $query->result_array();
        return $ds;
			
					
    }

  public function obtenerPasswordUsuario(){

    


          $usuario=$this->session->userdata['loggeado']['ID_USUARIO']; 
          
          $array=array("u.USUARIO_NOMBRE","u.USUARIO_ID");
          $this->db->select($array);
          $this->db->from("usuario AS u");
          $this->db->where("u.USUARIO_ID=",$usuario);
          
          $consulta = $this->db->get();
          $resultado = $consulta->result_array();
          return $resultado;

      }
	public function insertarUsuario($data,$USUARIO_USER)
    { 
        		
		$query =$this->db->query("SELECT COUNT(*)cant FROM usuario a where a.USUARIO_USER='$USUARIO_USER'");
  
        if ($query->num_rows() > 0)
        {
          $row = $query->row_array();
          
              if($row['cant']==0){
               $this->db->insert('usuario', $data);
               $resultado='Usuario Guardado con Exito';
              }else{
               $resultado='El Usuario ya Existe';
              }
           

        }
		
		return $resultado;
		
    }
  public function actualizarClaveUsuario($data,$id){
    

    $this->db->where('usuario.USUARIO_ID', $id);
    $this->db->update('usuario', $data);

  } 
	public function ActualizaUsuario($data, $id)
    {
        $this->db->where('usuario.USUARIO_ID', $id);
        $this->db->update('usuario', $data);

    }
	public function EstadoConfiguraUsuario($id)
	{
		$this->db->query("UPDATE usuario SET USUARIO_ACTIVO=if(USUARIO_ACTIVO='S','N','S') WHERE USUARIO_ID=$id");

	}
}