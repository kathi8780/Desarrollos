<?php

class Rutas_model extends CI_Model 
{

    public function __construct() {
        $this->load->database();
		date_default_timezone_set('UTC');
    }
   	
	public function  insertarRutaPedido($dato){

        $this->db->insert('ruta_entrega_retiro',$dato);
        return $this->db->insert_id();
    }

    public function distribuirRutas($arreglo_ids_pruebas,$ruta){

       

        for ($i=0; $i < count($arreglo_ids_pruebas); $i++) {
            $id_prueba = $arreglo_ids_pruebas[$i];
            $data_prueba['ID_RUTA']=$ruta;
            $data_retiro['ID_RUTA']=$ruta;
            $

            $sql="SELECT r.ID_PRUEBA FROM retiro r WHERE r.ID_RUTA IS NULL AND r.ASIGNADO='0' AND r.RETIRADO='0'    AND r.ID_PRUEBA=".$id_prueba;

            $query= $this->db->query($sql);

            if ($query->num_rows() > 0)
              {
                $this->db->where('retiro.ID_PRUEBA', $id_prueba);
                $this->db->update('retiro', $data_prueba);
              }else{
                $this->db->where('pruebas.ID_PRUEBAS', $id_prueba);
                $this->db->update('pruebas', $data_prueba);
               }
            }

            
        }

        public function obteneRutas(){
            $sql = "SELECT  pb.ID_RUTA as ruta
            from pedido p 
            INNER JOIN pruebas pb on pb.ID_PEDIDO=p.ID_PEDIDO 
            INNER JOIN estados e on e.ID_ESTADOS=pb.ID_ESTADOS 
            INNER JOIN estados ep on ep.ID_ESTADOS=p.ID_ESTADOS 
            left join paciente pac on pac.ID_PACIENTE= p.ID_PACIENTE 
            INNER JOIN tipo_prueba tp on tp.ID_TIPO_PRUEBA= pb.ID_TIPO_PRUEBA 
            left join usuario u on u.USUARIO_ID= pb.ID_USUARIO_MENSAJERO 
            INNER JOIN ruta rt on pb.ID_RUTA=rt.ID_RUTA
            WHERE e.NOMBRE_ESTADO ='EMPACADO' 
            AND pb.ENTREGADO ='N' 
            AND pb.DESPACHADO ='S' 
            AND ep.NOMBRE_ESTADO <> 'TERMINADO' 
            AND ep.NOMBRE_ESTADO <> 'ANULADO' 
            AND ep.NOMBRE_ESTADO <> 'SUSPENDIDO' 
            AND ep.NOMBRE_ESTADO <> 'EMPACADO'
            UNION
            SELECT r.ID_RUTA as ruta
            from pedido p 
            INNER JOIN pruebas pb on pb.ID_PEDIDO=p.ID_PEDIDO 
            INNER JOIN estados e on e.ID_ESTADOS=pb.ID_ESTADOS 
            INNER JOIN estados ep on ep.ID_ESTADOS=p.ID_ESTADOS 
            left join paciente pac on pac.ID_PACIENTE= p.ID_PACIENTE 
            INNER JOIN tipo_prueba tp on tp.ID_TIPO_PRUEBA= pb.ID_TIPO_PRUEBA 
            INNER JOIN retiro r on r.ID_PRUEBA=pb.ID_PRUEBAS
            INNER JOIN usuario u on u.USUARIO_ID = r.USUARIO_SESION
            WHERE r.ASIGNADO =1 
            AND r.RETIRADO =0 
            AND r.ID_RUTA IS NOT NULL";
            $query= $this->db->query($sql);
            $ds = $query->result_array();
            return $ds;

        }
        public function obtenerValoresPrueba(){

            $sql="
            SELECT  pb.ID_RUTA as ruta
            from pedido p 
            INNER JOIN pruebas pb on pb.ID_PEDIDO=p.ID_PEDIDO 
            INNER JOIN estados e on e.ID_ESTADOS=pb.ID_ESTADOS 
            INNER JOIN estados ep on ep.ID_ESTADOS=p.ID_ESTADOS 
            left join paciente pac on pac.ID_PACIENTE= p.ID_PACIENTE 
            INNER JOIN tipo_prueba tp on tp.ID_TIPO_PRUEBA= pb.ID_TIPO_PRUEBA 
            left join usuario u on u.USUARIO_ID= pb.ID_USUARIO_MENSAJERO 
            INNER JOIN ruta rt on pb.ID_RUTA=rt.ID_RUTA
            WHERE e.NOMBRE_ESTADO ='EMPACADO' 
            AND pb.ENTREGADO ='N' 
            AND pb.DESPACHADO ='S' 
            AND ep.NOMBRE_ESTADO <> 'TERMINADO' 
            AND ep.NOMBRE_ESTADO <> 'ANULADO' 
            AND ep.NOMBRE_ESTADO <> 'SUSPENDIDO' 
            AND ep.NOMBRE_ESTADO <> 'EMPACADO'
            UNION
            SELECT pb.ID_RUTA as ruta
            from pedido p 
            INNER JOIN pruebas pb on pb.ID_PEDIDO=p.ID_PEDIDO 
            INNER JOIN estados e on e.ID_ESTADOS=pb.ID_ESTADOS 
            INNER JOIN estados ep on ep.ID_ESTADOS=p.ID_ESTADOS 
            left join paciente pac on pac.ID_PACIENTE= p.ID_PACIENTE 
            INNER JOIN tipo_prueba tp on tp.ID_TIPO_PRUEBA= pb.ID_TIPO_PRUEBA 
            INNER JOIN retiro r on r.ID_PRUEBA=pb.ID_PRUEBAS
            INNER JOIN usuario u on u.USUARIO_ID = r.USUARIO_SESION
            WHERE r.ASIGNADO =1 
            AND r.RETIRADO =0 
            AND r.ID_RUTA IS NOT NULL";
            $query=$this->db->query($sql);
            $ds=$query->result_array();
            return $ds;

        }
    
    
}

