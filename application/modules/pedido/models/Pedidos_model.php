<?php

class Pedidos_model extends CI_Model 
{

    public function __construct() {
        $this->load->database();
		date_default_timezone_set('UTC');
    }
   	public function ObtenerColor($laboratorio){
		
		$sql="SELECT l.COLOR1 ,l.COLOR2 FROM laboratorio l WHERE l.ID_LABORATORIO =".$laboratorio;
		
		$query= $this->db->query($sql);
        $ds = $query->result_array();
        return $ds;
		
        return $resultado;
		
	}
	//Crea el Tranking Producto
	public function TrackingCreado($nro_pedido, $proceso, $tproceso)
    {
   
		$usuario=$this->session->userdata['loggeado']['USUARIO'];	
		
		$sql_2   ="SELECT t.CEDULA,u.EMPL_COD_EMPL, t.ID_TECNICO FROM usuario u 
		JOIN tecnico t on t.CEDULA=u.EMPL_COD_EMPL  WHERE u.USUARIO_USER='".$usuario."'";
		
		$query   = $this->db->query($sql_2);
		
		$row     = $query->row();
		$tecnico = $row->ID_TECNICO;
		
		$sql_1="SELECT  tp.ID_CATEGORIA FROM tecnico_proceso AS tp 
		WHERE tp.ID_TECNICO='".$tecnico."' AND tp.ID_PROCESO_NOMBRE=".$proceso." LIMIT 1";
		
		$query_1  = $this->db->query($sql_1);
		$row1     = $query_1->row();
		$categoria= $row1->ID_CATEGORIA;
		
		$sql="SELECT pp.ID_PROCESO_PEDIDO,pro.ID_PROCESO_NOMBRE
            from pedido p
            INNER JOIN pedido_descripcion pd on p.ID_PEDIDO=pd.ID_PEDIDO
            INNER JOIN proceso_pedido pp on pp.ID_PEDIDO_DESCRIPCION = pd.ID_PEDIDO_DESCRIPCION
            INNER JOIN procesos pro on pro.ID_PROCESOS = pp.ID_PROCESOS
            WHERE p.PEDF_NUM_PREIMP =".$nro_pedido." 
			HAVING ID_PROCESO_NOMBRE=".$proceso;
		
		$query2= $this->db->query($sql);
        $resultado = $query2->result_array();				
		
		for ($i=0; $i < count($resultado); $i++) 
        { 
           $ID_PROCESO_PEDIDO = $resultado[$i]['ID_PROCESO_PEDIDO'];
		   $sql="UPDATE proceso_pedido SET ID_TECNICO=".$tecnico.", COMISION_CATEGORIA=".$categoria." , COMISION='S', FECHA=NOW(), ID_ESTADOS=4, OBSERVACIONES='NV'
		         WHERE ID_PROCESO_PEDIDO=".$ID_PROCESO_PEDIDO; 
		   $query= $this->db->query($sql);				 
        }	
				
    }
	//Se obtiene el proceso siguiente
	public function validaProcesoCreado($nro_pedido, $proceso, $tproceso)
    {
           
		
		$sql="SELECT pp.ID_PEDIDO_DESCRIPCION, pro.ORDEN, pro.ID_PROCESO_NOMBRE #,pd.PROD_COD_PROD,pp.ID_PROCESO_PEDIDO,pro.ID_PROCESOS,pp.ID_ESTADOS
            from pedido p
            INNER JOIN pedido_descripcion pd on p.ID_PEDIDO=pd.ID_PEDIDO
            INNER JOIN proceso_pedido pp on pp.ID_PEDIDO_DESCRIPCION = pd.ID_PEDIDO_DESCRIPCION
            INNER JOIN procesos pro on pro.ID_PROCESOS = pp.ID_PROCESOS
            where p.PEDF_NUM_PREIMP =$nro_pedido
            HAVING ID_PROCESO_NOMBRE=$proceso";
		
			$query=$this->db->query($sql);	
			$procesos =$query->result();
			

		foreach($procesos AS $valida){
			
			$proceso=$valida->ID_PEDIDO_DESCRIPCION;
			$orden=$valida->ORDEN-1;
			
			$sQL="SELECT pro.ID_PROCESO_NOMBRE,(SELECT NOMBRE_PROCESO FROM procesos_nombre pn where pn.ID_PROCESO_NOMBRE=pro.ID_PROCESO_NOMBRE)as NOMBRE_PROCESO 
			FROM  proceso_pedido pp
			JOIN  procesos pro on pro.ID_PROCESOS = pp.ID_PROCESOS 
			WHERE  pp.ID_PEDIDO_DESCRIPCION=$proceso AND pro.ORDEN=$orden AND pp.ID_ESTADOS<>4";
			
			//echo $sQL;
			
			$query=$this->db->query($sQL);

			if ($query->num_rows() > 0)
			{
				$row = $query->row_array();   
				$resultado=$row['NOMBRE_PROCESO'];
				return 'INCORRECTO.! Pase Primero '.$resultado;
			}else{
				
				return 0;
			}
				
		}
        
				
    }
   public function obtenerTecnico()
    {
           
		$usuario=$this->session->userdata['loggeado']['USUARIO'];	
		
		$array=array("t.ID_TECNICO","CONCAT_WS(' ',t.APELLIDO_TECNICO,t.NOMBRE_TECNICO) AS TECNICO");
		$this->db->select($array);
		$this->db->from("tecnico AS t");
		
		$consulta = $this->db->get();
		$resultado = $consulta->result_array();
		return $resultado;
				
    }
	// Se obtiene los procesos realizados por un técnico
	public function obtenerProcesosRealizadosPorTecnicos($tecnico, $f_inicio, $f_fin)
    {
           		
		    $sql="SELECT p.PEDF_NUM_PREIMP, pd.PROD_NOM_PROD, pd.PROD_COD_PROD , pp.FECHA, e.NOMBRE_ESTADO,
            (
            SELECT NOMBRE_PROCESO
            FROM procesos_nombre pn where pn.ID_PROCESO_NOMBRE=pro.ID_PROCESO_NOMBRE
            )as NOMBRE_PROCESO,
            pro.ID_PROCESOS,IFNULL(t.NOMBRE_APELLIDO, '') AS tecnico, IFNULL(categ.NOMBRE_CATEGORIA,'') AS NOMBRE_CATEGORIA,
			IFNULL(categ.SIGLAS_CATEGORIA,'Sin Nivel') AS SIGLAS_CATEGORIA,
			pp.FECHA, pd.CANTIDAD
            FROM pedido p
            INNER JOIN pedido_descripcion pd on p.ID_PEDIDO=pd.ID_PEDIDO
            INNER JOIN proceso_pedido pp on pp.ID_PEDIDO_DESCRIPCION = pd.ID_PEDIDO_DESCRIPCION
            INNER JOIN procesos pro on pro.ID_PROCESOS = pp.ID_PROCESOS
            LEFT JOIN tecnico t on t.ID_TECNICO = pp.ID_TECNICO
            LEFT JOIN tecnico_proceso tp on (tp.ID_TECNICO=t.ID_TECNICO and tp.ID_PROCESO_NOMBRE = pro.ID_PROCESO_NOMBRE )
            LEFT JOIN categoria categ on categ.ID_CATEGORIA = tp.ID_CATEGORIA
            INNER JOIN estados e on e.ID_ESTADOS=pp.ID_ESTADOS
			WHERE e.ID_ESTADOS=4";
       			
			 if($tecnico != "-1")
            {
                $sql.=" and tp.ID_TECNICO =".$tecnico." ";           
            }
            if($f_inicio!= "")
            {
                $sql.=" and Date(pp.FECHA)  >= Date('".$f_inicio."') "  ;  
            }
            if($f_fin!= "")
            {
               $sql.=" and Date(pp.FECHA)  <= Date('".$f_fin."') "  ; 
            }

            $query= $this->db->query($sql);
            $ds = $query->result_array();
            return $ds; 
				
    }
	// Se obtiene los procesos asociados a un Proceso
	public function ObtenerTecnicosPedido($nro_pedido)
    {
           
		$usuario=$this->session->userdata['loggeado']['USUARIO'];	
		
		$sql_2   ="SELECT t.CEDULA,u.EMPL_COD_EMPL, t.ID_TECNICO FROM usuario u 
		JOIN tecnico t on t.CEDULA=u.EMPL_COD_EMPL  WHERE u.USUARIO_USER='".$usuario."'";
		$query   = $this->db->query($sql_2);
		
		$row     = $query->row();
		$tecnico = $row->ID_TECNICO;
		
		
		$sQL="SELECT 
		pn.ID_PROCESO_NOMBRE,pn.NOMBRE_PROCESO 
		FROM pedido p 
		JOIN pedido_descripcion pd ON p.ID_PEDIDO=pd.ID_PEDIDO
		JOIN proceso_pedido  AS pp ON pp.ID_PEDIDO_DESCRIPCION=pd.ID_PEDIDO_DESCRIPCION
		JOIN procesos as pr on pr.ID_PRODUCTO_LABORATORIO=pd.ID_PRODUCTO_LABORATORIO
		JOIN tecnico_proceso AS tp ON tp.ID_PROCESO_NOMBRE=pr.ID_PROCESO_NOMBRE
		JOIN procesos_nombre AS pn ON pn.ID_PROCESO_NOMBRE=tp.ID_PROCESO_NOMBRE
		WHERE p.PEDF_NUM_PREIMP='$nro_pedido' AND tp.ID_TECNICO='$tecnico' AND pp.ID_ESTADOS<>4
		GROUP BY pr.ID_PROCESO_NOMBRE
		ORDER BY pr.ID_PROCESO_NOMBRE  ASC";
				
		$query= $this->db->query($sQL);
        $ds = $query->result_array();
        return $ds; 
				
    }
    // Se obtiene los procesos asociados a un técnico
	public function obtenerProcesosPorTecnico()
    {
           
		$usuario=$this->session->userdata['loggeado']['USUARIO'];	
		
		$sql_2   ="SELECT t.CEDULA,u.EMPL_COD_EMPL, t.ID_TECNICO FROM usuario u 
		JOIN tecnico t on t.CEDULA=u.EMPL_COD_EMPL  WHERE u.USUARIO_USER='".$usuario."'";
		$query   = $this->db->query($sql_2);
		
		$row     = $query->row();
		$tecnico = $row->ID_TECNICO;
		
		$this->db->select("pn.ID_PROCESO_NOMBRE,pn.NOMBRE_PROCESO");
		$this->db->from("tecnico_proceso AS tp");
		$this->db->join("procesos_nombre AS pn",'pn.ID_PROCESO_NOMBRE=tp.ID_PROCESO_NOMBRE');
		$this->db->where("tp.ID_TECNICO=",$tecnico);
		$this->db->where("tp.ACTIVO=",'S');
		$this->db->order_by("pn.NOMBRE_PROCESO ASC");
		
		$consulta = $this->db->get();
		$resultado = $consulta->result_array();
		return $resultado;
				
    }
    public function obtenerEstadosTmp() 
    {
         $this->db->select("*");
         $this->db->from("estados_tmp et");
         $this->db->where("et.ID_ESTADOS !=",'22');
         $consulta = $this->db->get();
         $resultado = $consulta->result_array();
         return $resultado;
    }

    public function obtenerEstados() 
    {
         $this->db->select("*");
         $this->db->from("estados e");
         $consulta = $this->db->get();
         $resultado = $consulta->result_array();
         return $resultado;
    }

    public function obtenerEstadosParaConsultaPedido() 
    {
        $sql="select e.ID_ESTADOS, e.NOMBRE_ESTADO from estados e where e.ID_ESTADOS in (  6, 7, 5,9 ) ";
        $sql.="union select id_estados, nombre_estado from estados_tmp ";


        $query= $this->db->query($sql);
        $ds = $query->result_array();
        return $ds;
    }

    public function obtenerPacientes() 
    {
         $this->db->distinct();
         $this->db->select("NOMBRE_APELLIDO");
         $this->db->from("paciente p");
		 //$this->db->limit(3);
         $consulta = $this->db->get();
         $resultado = $consulta->result_array();
         return $resultado;
    }

    public function obtenerNumPedidos($id_estado='') 
    {
         $this->db->distinct();
         $this->db->select("PEDF_NUM_PREIMP, ID_PEDIDO");
         $this->db->from("pedido p");
		 $names = array('7', '9', '5');
		 $this->db->where_not_in('p.ID_ESTADOS', $names);

         if($id_estado!="")
         {
            $this->db->where(" ID_ESTADOS =", $id_estado );  
         }
         $this->db->order_by("PEDF_NUM_PREIMP", "asc");

         $consulta = $this->db->get();
         $resultado = $consulta->result_array();
         return $resultado;
    }

    public function obtenerPedidos($estado, $f_inicio, $f_fin) 
    {
         //$this->db->limit(2000);
         $this->db->select("
                            p.PEDF_NUM_PREIMP as numero,'Cliente Generico' as cliente,pac.NOMBRE_APELLIDO as paciente,IFNULL(p.MEDICO_TRATANTE,'Sin Asignar') as medico,
                            p.FECHA_COTIZACION fing,'Sin Dato' as total,'Sin Dato' as flete, 'Sin Dato' as recargo, 'Sin Dato' as abono, 'Sin Dato' as saldo,et.NOMBRE_ESTADO as estado, p.FACTURA as facturado,'SIN DATOS' as motivo
                            ");

             $this->db->from("pedido p");
             $this->db->join("paciente pac",'pac.ID_PACIENTE= p.ID_PACIENTE');
             $this->db->join("estados et",'et.ID_ESTADOS=p.ID_ESTADOS');

            if($estado != "-1")
            {
                $this->db->where("et.ID_ESTADOS =",$estado);
            }
            if($f_inicio!= "")
            {
                $this->db->where("Date(p.FECHA_COTIZACION)  >=", Date($f_inicio) );  
            }
            if($f_fin!= "")
            {
                $this->db->where("Date(p.FECHA_COTIZACION)  <=",Date($f_fin) );  
            }

             $consulta = $this->db->get();
             $resultado = $consulta->result_array();
             return $resultado;
    }
    public function obtenerPedidosPrePedido()
    {
        $sql="SELECT 
                p.PEDF_NUM_PREIMP as numero,'Cliente Generico' as cliente,pac.NOMBRE_APELLIDO as paciente,IFNULL(p.MEDICO_TRATANTE,'Sin Asignar') as medico,
                    p.FECHA_COTIZACION fing,et.NOMBRE_ESTADO as estado, tp.NOMBRE_PRUEBA,
            (
                SELECT SUM(pdi.CANTIDAD) from pedido_descripcion pdi where pdi.ID_PEDIDO =p.ID_PEDIDO  
            ) AS CANTIDAD, p.ID_ESTADOS AS estado
            from pedido p
            INNER JOIN paciente pac on pac.ID_PACIENTE= p.ID_PACIENTE
            INNER JOIN estados et on et.ID_ESTADOS=p.ID_ESTADOS
            INNER JOIN pruebas pb on pb.ID_PEDIDO=p.ID_PEDIDO
            INNER JOIN tipo_prueba tp on tp.ID_TIPO_PRUEBA = pb.ID_TIPO_PRUEBA WHERE p.ID_ESTADOS=9";

            $query= $this->db->query($sql);
            $ds = $query->result_array();
            return $ds; 
    }
	public function obtenerPedidoProduccion()
    {
        $sql="SELECT 
                p.PEDF_NUM_PREIMP as numero,'Cliente Generico' as cliente,pac.NOMBRE_APELLIDO as paciente,IFNULL(p.MEDICO_TRATANTE,'Sin Asignar') as medico,
                p.FECHA_COTIZACION fing,et.NOMBRE_ESTADO as estado, tp.NOMBRE_PRUEBA,
            pb.FECHA_SALIDA as FECHA_PRUEBA, DATEDIFF(pb.FECHA_SALIDA,CURDATE()) DIAS 
            from pedido p
            INNER JOIN paciente pac on pac.ID_PACIENTE= p.ID_PACIENTE
            INNER JOIN estados et on et.ID_ESTADOS=p.ID_ESTADOS
            INNER JOIN pruebas pb on pb.ID_PEDIDO=p.ID_PEDIDO
            INNER JOIN tipo_prueba tp on tp.ID_TIPO_PRUEBA = pb.ID_TIPO_PRUEBA 
			INNER JOIN kpiproduccion k on k.ID_PEDIDO=p.ID_PEDIDO
			WHERE pb.ID_ESTADOS IN (3,8)";

			$query= $this->db->query($sql);
            $ds = $query->result_array();
            return $ds; 
    }
	public function ObtenerConsultarPedidos($f_inicio, $f_fin, $numped, $cliente, $activo)
    {
        $sql="SELECT 
                p.PEDF_NUM_PREIMP as numero,'Cliente Generico' as cliente,pac.NOMBRE_APELLIDO as paciente,IFNULL(p.MEDICO_TRATANTE,'Sin Asignar') as medico,
                p.FECHA_COTIZACION fing,et.NOMBRE_ESTADO as estado, tp.NOMBRE_PRUEBA,
            SUM(pd.CANTIDAD) AS CANTID
            from pedido p
            INNER JOIN paciente pac on pac.ID_PACIENTE= p.ID_PACIENTE
            INNER JOIN estados et on et.ID_ESTADOS=p.ID_ESTADOS
            INNER JOIN pruebas pb on pb.ID_PEDIDO=p.ID_PEDIDO
            INNER JOIN tipo_prueba tp on tp.ID_TIPO_PRUEBA = pb.ID_TIPO_PRUEBA 
			INNER JOIN pedido_descripcion pd on p.ID_PEDIDO=pd.ID_PEDIDO ";


            if($f_inicio!= "")
            {
                $sql.=" and Date(pb.FECHA_SALIDA)  >= Date('".$f_inicio."') "  ;  
            }
            if($f_fin!= "")
            {
               $sql.=" and Date(pb.FECHA_SALIDA)  <= Date('".$f_fin."') "  ; 
            }
            if($numped != "")
            {
                $sql.=" and p.PEDF_NUM_PREIMP  =".$numped." " ;             
            }
			
			if($cliente != "")
            {
                $sql.=" and p.CLPV_COD_CLPV  =".$cliente." " ;             
            }
			
			if($activo == "S")
            {
                $sql.=" and p.ID_ESTADOS!=7 " ;             
            }

            $sql.="GROUP BY p.PEDF_NUM_PREIMP,tp.NOMBRE_PRUEBA";
			$query= $this->db->query($sql);
            $ds = $query->result_array();
            return $ds; 
    }
    public function buscarPedidosAgProd($estado, $f_inicio, $f_fin, $numped)
    {
        $sql="SELECT 
                p.PEDF_NUM_PREIMP as numero,'Cliente Generico' as cliente,pac.NOMBRE_APELLIDO as paciente,IFNULL(p.MEDICO_TRATANTE,'Sin Asignar') as medico,
                p.FECHA_COTIZACION fing,et.NOMBRE_ESTADO as estado, tp.NOMBRE_PRUEBA,
            SUM(pd.CANTIDAD) AS CANTID
            from pedido p
            INNER JOIN paciente pac on pac.ID_PACIENTE= p.ID_PACIENTE
            INNER JOIN estados et on et.ID_ESTADOS=p.ID_ESTADOS
            INNER JOIN pruebas pb on pb.ID_PEDIDO=p.ID_PEDIDO
            INNER JOIN tipo_prueba tp on tp.ID_TIPO_PRUEBA = pb.ID_TIPO_PRUEBA 
			INNER JOIN pedido_descripcion pd on p.ID_PEDIDO=pd.ID_PEDIDO
			INNER JOIN producto_laboratorio l on pd.ID_PRODUCTO_LABORATORIO = l.ID_PRODUCTO_LABORATORIO
			WHERE pb.ID_ESTADOS = 3 AND p.ID_ESTADOS = 2 AND l.PRINCIPAL='S'";

            if($estado != "-1")
            {
                $sql.=" and et.ID_ESTADOS =".$estado." ";           
            }
            if($f_inicio!= "")
            {
                $sql.=" and Date(pb.FECHA_SALIDA)  >= Date('".$f_inicio."') "  ;  
            }
            if($f_fin!= "")
            {
               $sql.=" and Date(pb.FECHA_SALIDA)  <= Date('".$f_fin."') "  ; 
            }
            if($numped != "")
            {
                $sql.=" and p.PEDF_NUM_PREIMP  =".$numped." " ;             
            }

            $sql.="GROUP BY p.PEDF_NUM_PREIMP,tp.NOMBRE_PRUEBA";
			$query= $this->db->query($sql);
            $ds = $query->result_array();
            return $ds; 
    }
	  public function pruebasDetallePedido($nro_pedido)
    {
         $this->db->select("
                            pb.ID_PRUEBAS,
                            pac.NOMBRE_APELLIDO, p.PEDF_NUM_PREIMP,
                            tp.NOMBRE_PRUEBA,
                            pb.FECHA_SALIDA,IFNULL(pb.FECHA_REGRESO,'') as FECHA_REGRESO,
                            e.NOMBRE_ESTADO, pb.DESPACHADO, pb.OBSERVACIONES
                            ");

             $this->db->from("pedido p");
             $this->db->join("pedido_descripcion pd",'p.ID_PEDIDO=pd.ID_PEDIDO');
             $this->db->join("pedidos_suspendidos ps",'ps.ID_PEDIDO=p.ID_PEDIDO','left');
             $this->db->join("pruebas pb",'pb.ID_PEDIDO=p.ID_PEDIDO');
             $this->db->join("tipo_prueba tp",'tp.ID_TIPO_PRUEBA = pb.ID_TIPO_PRUEBA','left');
             $this->db->join("estados e",'e.ID_ESTADOS=pb.ID_ESTADOS','left');
             $this->db->join("paciente pac",'pac.ID_PACIENTE= p.ID_PACIENTE','left');
             $this->db->where("p.PEDF_NUM_PREIMP =",$nro_pedido);  
             $this->db->group_by("pb.ID_PRUEBAS");

             $consulta = $this->db->get();
             $resultado = $consulta->result_array();
             return $resultado;
    }
    public function pruebasGeneralPedido($f_inicio, $f_fin, $numped)
    {
		 
		     $select=array("select pp.ID_PEDIDO_DESCRIPCION from proceso_pedido pp, pedido p1,
                                                                                    pedido_descripcion pd2, pruebas pr2, producto_laboratorio l where
                                                                                    p1.ID_PEDIDO = pd2.ID_PEDIDO and
                                                                                    pd2.ID_PEDIDO_DESCRIPCION = pp.ID_PEDIDO_DESCRIPCION and
                                                                                    p1.ID_PEDIDO = pr2.ID_PEDIDO and
                                                                                    pd2.ID_PRODUCTO_LABORATORIO = l.ID_PRODUCTO_LABORATORIO and
                                                                                    l.PRINCIPAL = 'S' and
                                                                                    pr2.ID_ESTADOS = 3 and
                                                                                    p1.ID_ESTADOS = 2 and
                                                                                    p1.EMPR_COD_EMPR = '1' group by pp.ID_PEDIDO_DESCRIPCION");
			 
			 $this->db->select("COUNT(*) CANT_PRUEBA,tp.NOMBRE_PRUEBA,
			 SUM(pd.CANTIDAD) AS CANT_PRODUCTO");
			 //SUM((SELECT SUM(pdi.CANTIDAD) from pedido_descripcion pdi where pdi.ID_PEDIDO =p.ID_PEDIDO)) AS CANT_PRODUCTO");

             $this->db->from("pedido p");
             $this->db->join("pruebas pb",'pb.ID_PEDIDO=p.ID_PEDIDO');
             $this->db->join("tipo_prueba tp",'tp.ID_TIPO_PRUEBA = pb.ID_TIPO_PRUEBA','left');
			 $this->db->join("pedido_descripcion pd",'p.ID_PEDIDO=pd.ID_PEDIDO');
			 $this->db->join("producto_laboratorio l",'pd.ID_PRODUCTO_LABORATORIO = l.ID_PRODUCTO_LABORATORIO');
			 $this->db->where("pb.ID_ESTADOS =",'3');
			 $this->db->where("p.ID_ESTADOS =",'2');
			 $this->db->where("l.PRINCIPAL =",'S');
			 //$this->db->where_in("pd.ID_PEDIDO_DESCRIPCION",$select);  
			 
			 if($numped != "")
            {
               $this->db->where("p.PEDF_NUM_PREIMP =",$numped);           
            }
			
			if($f_inicio!= "")
            {
                $this->db->where("Date(pb.FECHA_SALIDA)  >=", Date($f_inicio) );  
            }
			
            if($f_fin!= "")
            {
                $this->db->where("Date(pb.FECHA_SALIDA)  <=",Date($f_fin) );  
				
            }
              
			 $this->db->group_by("tp.NOMBRE_PRUEBA");
			 
             $consulta = $this->db->get();
             $resultado = $consulta->result_array();
             return $resultado;
			 
			 
    }
    public function procesosDetallePedido($nro_pedido)
    {
        /*
            $this->db->select("
                            pd.PROD_NOM_PROD, pd.PROD_COD_PROD,'NOMBRE PROCESO' as NOMBRE_PROCESO, pp.FECHA, e.NOMBRE_ESTADO
                          ");//pn.NOMBRE_PROCESO
             $this->db->from("pedido p");
             $this->db->join("pedido_descripcion pd",'p.ID_PEDIDO=pd.ID_PEDIDO');
             $this->db->join("proceso_pedido pp",'pp.ID_PEDIDO_DESCRIPCION = pd.ID_PEDIDO_DESCRIPCION');
             $this->db->join("procesos pro",'pro.ID_PROCESOS = pp.ID_PROCESOS');
             //$this->db->join("procesos_nombre pn",'pro.ID_PROCESO_NOMBRE = pn.ID_PROCESO_NOMBRE');
             $this->db->join("estados e",'e.ID_ESTADOS=pp.ID_ESTADOS');

             $this->db->where("p.PEDF_NUM_PREIMP =",$nro_pedido);                 

             $consulta = $this->db->get();
             $resultado = $consulta->result_array();
             return $resultado;
        */

    $sql="  select pd.PROD_NOM_PROD, pd.PROD_COD_PROD , pp.FECHA, e.NOMBRE_ESTADO,
            (
            select NOMBRE_PROCESO
            from procesos_nombre pn where pn.ID_PROCESO_NOMBRE=pro.ID_PROCESO_NOMBRE
            )as NOMBRE_PROCESO,
            pro.ID_PROCESOS,IFNULL(t.NOMBRE_APELLIDO, '') AS tecnico, IFNULL(categ.NOMBRE_CATEGORIA,'') AS NOMBRE_CATEGORIA

            from pedido p
            INNER JOIN pedido_descripcion pd on p.ID_PEDIDO=pd.ID_PEDIDO
            INNER JOIN proceso_pedido pp on pp.ID_PEDIDO_DESCRIPCION = pd.ID_PEDIDO_DESCRIPCION
            INNER JOIN procesos pro on pro.ID_PROCESOS = pp.ID_PROCESOS
            left join tecnico t on t.ID_TECNICO = pp.ID_TECNICO
            left join tecnico_proceso tp on (tp.ID_TECNICO=t.ID_TECNICO and tp.ID_PROCESO_NOMBRE = pro.ID_PROCESO_NOMBRE )
            left join categoria categ on categ.ID_CATEGORIA = tp.ID_CATEGORIA
            INNER JOIN estados e on e.ID_ESTADOS=pp.ID_ESTADOS
            where p.PEDF_NUM_PREIMP =".$nro_pedido;

            $query= $this->db->query($sql);
            $ds = $query->result_array();
            return $ds; 
    }

    public function cantidadPedidosSuspendidos()
    {
        $this->db->select(" count(*) as cantidad");
        $this->db->from("pedido p");
        $this->db->join("estados e",'p.ID_ESTADOS=e.ID_ESTADOS');
        $this->db->where("e.NOMBRE_ESTADO=",'SUSPENDIDO');  

        $consulta = $this->db->get();
        $resultado = $consulta->row_array();
        return $resultado['cantidad'];
    }
    public function obtenerPedidosSuspendidos()
    {
        $this->db->select("
                            p.PEDF_NUM_PREIMP as numero,'Cliente Generico' as cliente,pac.NOMBRE_APELLIDO as paciente,IFNULL(p.MEDICO_TRATANTE,'Sin Asignar') as medico,p.FECHA_COTIZACION fing, ps.FECHA_SUSPENDIDO, ps.OBSERVACION_SUSPENDIDO

                        ");
        $this->db->from("pedido p");
        $this->db->join("estados e",'p.ID_ESTADOS=e.ID_ESTADOS');
        $this->db->join("pedidos_suspendidos ps",'ps.ID_PEDIDO=p.ID_PEDIDO');
        $this->db->join("paciente pac",'pac.ID_PACIENTE= p.ID_PACIENTE');
        $this->db->where("e.NOMBRE_ESTADO=",'SUSPENDIDO'); 
        $this->db->where("ps.REANUDAR=",'N'); 

        $consulta = $this->db->get();
        $resultado = $consulta->result_array();
        return $resultado;
    }
    public function cantidadPedidosAtrasadosEnProduccion() 
    {
        $sql="SELECT COUNT(*) AS cantidad
            from pedido p
            INNER JOIN paciente pac on pac.ID_PACIENTE= p.ID_PACIENTE
            INNER JOIN estados et on et.ID_ESTADOS=p.ID_ESTADOS
            INNER JOIN pruebas pb on pb.ID_PEDIDO=p.ID_PEDIDO
            INNER JOIN tipo_prueba tp on tp.ID_TIPO_PRUEBA = pb.ID_TIPO_PRUEBA 
			INNER JOIN kpiproduccion k on k.ID_PEDIDO=p.ID_PEDIDO
			WHERE pb.ID_ESTADOS IN (3,8) AND DATEDIFF(pb.FECHA_SALIDA,CURDATE())<0";        

			
		$query= $this->db->query($sql);
        $ds = $query->row_array();
        $resultado = $ds['cantidad'];
        return $resultado;
	
    }

    public function obtenerPedidosAtrasadosEnProduccion() 
    {
        $sql="SELECT 
                p.PEDF_NUM_PREIMP as numero,'Cliente Generico' as cliente,pac.NOMBRE_APELLIDO as paciente,IFNULL(p.MEDICO_TRATANTE,'Sin Asignar') as medico,
                p.FECHA_COTIZACION fing,et.NOMBRE_ESTADO as estado, tp.NOMBRE_PRUEBA,
            pb.FECHA_SALIDA as FECHA_PRUEBA,DATEDIFF(pb.FECHA_SALIDA,CURDATE()) DIAS 
            from pedido p
            INNER JOIN paciente pac on pac.ID_PACIENTE= p.ID_PACIENTE
            INNER JOIN estados et on et.ID_ESTADOS=p.ID_ESTADOS
            INNER JOIN pruebas pb on pb.ID_PEDIDO=p.ID_PEDIDO
            INNER JOIN tipo_prueba tp on tp.ID_TIPO_PRUEBA = pb.ID_TIPO_PRUEBA 
			INNER JOIN kpiproduccion k on k.ID_PEDIDO=p.ID_PEDIDO
			WHERE pb.ID_ESTADOS IN (3,8) AND DATEDIFF(pb.FECHA_SALIDA,CURDATE())<0";

			$query= $this->db->query($sql);
            $ds = $query->result_array();
            return $ds;
    }

    public function cantidadPedidosAtrasadosEnEntrega() 
    {
        
		$sql = "SELECT count(*) as cantidad ";
        $sql .= "from pedido p ";
        $sql .= "INNER JOIN pruebas pb on pb.ID_PEDIDO=p.ID_PEDIDO ";
        $sql .= "INNER JOIN estados e on e.ID_ESTADOS=pb.ID_ESTADOS ";
        $sql .= "INNER JOIN estados ep on ep.ID_ESTADOS=p.ID_ESTADOS ";
        $sql .= "WHERE e.NOMBRE_ESTADO ='EMPACADO' AND pb.ENTREGADO ='N'";
        $sql .= "AND DATEDIFF(CURDATE(),pb.FECHA_SALIDA)>1";     

        $query= $this->db->query($sql);
        $ds = $query->row_array();
        $resultado = $ds['cantidad'];
        return $resultado;
    }
    public function obtenerPedidosAtrasadosEnEntrega() 
    {
        $sql = "SELECT if(pb.DESPACHADO='S','SI','NO') DESPACHADO, if(pb.DESPACHADO='S',pb.FECHA_SALIDA,'')FECHA_SALIDA, p.PEDF_NUM_PREIMP as numero,p.FECHA_COTIZACION fing,'Ciudad' as ciudad, 'Cliente Generico' as cliente,pac.NOMBRE_APELLIDO as paciente,IFNULL(p.MEDICO_TRATANTE,'Sin Asignar') as medico, tp.NOMBRE_PRUEBA, pb.FECHA_EMPAQUE, pb.HORA_EMPAQUE, pb.ID_PRUEBAS, DATEDIFF(CURDATE(),pb.FECHA_EMPAQUE) AS DIAS ";

        $sql .= "from pedido p ";
        $sql .= "INNER JOIN pruebas pb on pb.ID_PEDIDO=p.ID_PEDIDO ";
        $sql .= "INNER JOIN estados e on e.ID_ESTADOS=pb.ID_ESTADOS ";
        $sql .= "INNER JOIN estados ep on ep.ID_ESTADOS=p.ID_ESTADOS ";
        $sql .= "left join paciente pac on pac.ID_PACIENTE= p.ID_PACIENTE ";
        $sql .= "INNER JOIN tipo_prueba tp on tp.ID_TIPO_PRUEBA= pb.ID_TIPO_PRUEBA ";
        $sql .= "WHERE e.NOMBRE_ESTADO ='EMPACADO' AND pb.ENTREGADO ='N'";
        $sql .= " AND DATEDIFF(CURDATE(),pb.FECHA_SALIDA)>1";     

        $query= $this->db->query($sql);
        $ds = $query->result_array();
        return $ds;
    }

    public function cantidadPedidosEnTransito() 
    {
        $sql = "Select count(*) as cant ";

        $sql .= "from pedido p ";
        $sql .= "INNER JOIN pruebas pb on pb.ID_PEDIDO=p.ID_PEDIDO ";
        $sql .= "INNER JOIN estados e on e.ID_ESTADOS=p.ID_ESTADOS ";
        $sql .= "left join paciente pac on pac.ID_PACIENTE= p.ID_PACIENTE ";
        $sql .= "INNER JOIN tipo_prueba tp on tp.ID_TIPO_PRUEBA= pb.ID_TIPO_PRUEBA ";

        $sql .= "WHERE e.NOMBRE_ESTADO ='PENDIENTE' "; //QUE ES PRODUCCION
        $sql .= "AND pb.DESPACHADO ='S' ";
        $sql .= "AND pb.FECHA_REGRESO IS NULL order by pb.FECHA_SALIDA ";

        $query= $this->db->query($sql);
        $ds = $query->row_array();
        return $ds['cant'];
    }

    public function obtenerPedidosEnTransito($rango_dias_atrazados="") 
    {    

        $sql = "SELECT p.PEDF_NUM_PREIMP as numero,'Cliente Generico' as cliente,pac.NOMBRE_APELLIDO as paciente,IFNULL(p.MEDICO_TRATANTE,'Sin Asignar') as medico,p.FECHA_COTIZACION fing, pb.FECHA_SALIDA, tp.NOMBRE_PRUEBA, DATEDIFF(CURDATE(),pb.FECHA_SALIDA) AS dias, 'total' as total ";

        $sql .= "from pedido p ";
        $sql .= "INNER JOIN pruebas pb on pb.ID_PEDIDO=p.ID_PEDIDO ";
        $sql .= "INNER JOIN estados e on e.ID_ESTADOS=p.ID_ESTADOS ";
        $sql .= "left join paciente pac on pac.ID_PACIENTE= p.ID_PACIENTE ";
        $sql .= "INNER JOIN tipo_prueba tp on tp.ID_TIPO_PRUEBA= pb.ID_TIPO_PRUEBA ";

        $sql .= "WHERE e.NOMBRE_ESTADO ='PENDIENTE' "; //QUE ES PRODUCCION

        if($rango_dias_atrazados=="15-29")
            $sql .=  " and DATEDIFF(CURDATE(),pb.FECHA_SALIDA) >=15 AND DATEDIFF(CURDATE(),pb.FECHA_SALIDA) <29 ";
        else if($rango_dias_atrazados=="30")
            $sql .= " and DATEDIFF(CURDATE(),pb.FECHA_SALIDA) >=30 ";

        $sql .= "AND pb.DESPACHADO ='S' ";
        $sql .= "AND pb.FECHA_REGRESO IS NULL order by pb.FECHA_SALIDA ";

        $query= $this->db->query($sql);
        $ds = $query->result_array();
        return $ds;
    }

    public function cantidadPedidosEnRuta() 
    {
        $sql = "SELECT count(*) as cantidad ";
        $sql .= "from pedido p ";
        $sql .= "INNER JOIN pruebas pb on pb.ID_PEDIDO=p.ID_PEDIDO ";
        $sql .= "INNER JOIN estados e on e.ID_ESTADOS=pb.ID_ESTADOS ";
        $sql .= "INNER JOIN estados ep on ep.ID_ESTADOS=p.ID_ESTADOS ";
        $sql .= "WHERE e.NOMBRE_ESTADO ='EMPACADO' ";
        $sql .= "AND pb.ENTREGADO ='N' ";
        $sql .= "AND pb.DESPACHADO ='S' ";
        $sql .= "AND ep.NOMBRE_ESTADO <> 'TERMINADO' ";
        $sql .= "AND ep.NOMBRE_ESTADO <> 'ANULADO' ";
        $sql .= "AND ep.NOMBRE_ESTADO <> 'SUSPENDIDO' ";
        $sql .= "AND ep.NOMBRE_ESTADO <> 'EMPACADO' ";


        $query= $this->db->query($sql);
        $ds = $query->row_array();
        $resultado = $ds['cantidad'];
        return $resultado;
    }

    public function obtenerPedidosEnRuta() 
    {
        $sql = "SELECT p.PEDF_NUM_PREIMP as numero,'Ciudad' as ciudad, 'Cliente Generico' as cliente,pac.NOMBRE_APELLIDO as paciente,IFNULL(p.MEDICO_TRATANTE,'Sin Asignar') as medico,p.FECHA_COTIZACION fing, tp.NOMBRE_PRUEBA, pb.FECHA_EMPAQUE, CONCAT_WS(' ',u.USUARIO_NOMBRE,u.USUARIO_APELLIDO) as mensajerocourirer, pb.FECHA_SALIDA, 'En Ruta' as estado ";

        $sql .= "from pedido p ";
        $sql .= "INNER JOIN pruebas pb on pb.ID_PEDIDO=p.ID_PEDIDO ";
        $sql .= "INNER JOIN estados e on e.ID_ESTADOS=pb.ID_ESTADOS ";
        $sql .= "INNER JOIN estados ep on ep.ID_ESTADOS=p.ID_ESTADOS ";
        $sql .= "left join paciente pac on pac.ID_PACIENTE= p.ID_PACIENTE ";
        $sql .= "INNER JOIN tipo_prueba tp on tp.ID_TIPO_PRUEBA= pb.ID_TIPO_PRUEBA ";

        $sql .= "left join usuario u on u.USUARIO_ID= pb.ID_USUARIO_MENSAJERO ";

        $sql .= "WHERE e.NOMBRE_ESTADO ='EMPACADO' ";
        $sql .= "AND pb.ENTREGADO ='N' ";
        $sql .= "AND pb.DESPACHADO ='S' "; 
        $sql .= "AND ep.NOMBRE_ESTADO <> 'TERMINADO' ";
        $sql .= "AND ep.NOMBRE_ESTADO <> 'ANULADO' ";
        $sql .= "AND ep.NOMBRE_ESTADO <> 'SUSPENDIDO' ";
        $sql .= "AND ep.NOMBRE_ESTADO <> 'EMPACADO' ";
  
        $query= $this->db->query($sql);
        $ds = $query->result_array();
        return $ds;
    }

    public function cantidadPedidosEmpacados() 
    {
        $sql = "SELECT count(*) as cantidad ";
        $sql .= "from pedido p ";
        $sql .= "INNER JOIN pruebas pb on pb.ID_PEDIDO=p.ID_PEDIDO ";
        $sql .= "INNER JOIN estados e on e.ID_ESTADOS=pb.ID_ESTADOS ";
        $sql .= "INNER JOIN estados ep on ep.ID_ESTADOS=p.ID_ESTADOS ";
        $sql .= "WHERE e.NOMBRE_ESTADO ='EMPACADO' ";
        $sql .= "AND pb.ENTREGADO ='N' ";
        $sql .= "AND pb.DESPACHADO ='N'  ";     

        $query= $this->db->query($sql);
        $ds = $query->row_array();
        $resultado = $ds['cantidad'];
        return $resultado;
    }

    public function obtenerPedidosEmpacados() 
    {
        $sql = "SELECT p.PEDF_NUM_PREIMP as numero,p.FECHA_COTIZACION fing,'Ciudad' as ciudad, 'Cliente Generico' as cliente,pac.NOMBRE_APELLIDO as paciente,IFNULL(p.MEDICO_TRATANTE,'Sin Asignar') as medico, tp.NOMBRE_PRUEBA, pb.FECHA_EMPAQUE, pb.HORA_EMPAQUE, pb.ID_PRUEBAS, DATEDIFF(CURDATE(),pb.FECHA_EMPAQUE) AS DIAS ";

        $sql .= "from pedido p ";
        $sql .= "INNER JOIN pruebas pb on pb.ID_PEDIDO=p.ID_PEDIDO ";
        $sql .= "INNER JOIN estados e on e.ID_ESTADOS=pb.ID_ESTADOS ";
        $sql .= "INNER JOIN estados ep on ep.ID_ESTADOS=p.ID_ESTADOS ";
        $sql .= "left join paciente pac on pac.ID_PACIENTE= p.ID_PACIENTE ";
        $sql .= "INNER JOIN tipo_prueba tp on tp.ID_TIPO_PRUEBA= pb.ID_TIPO_PRUEBA ";

        $sql .= "WHERE e.NOMBRE_ESTADO ='EMPACADO' ";
        $sql .= "AND pb.ENTREGADO ='N' ";
        $sql .= "AND pb.DESPACHADO ='N'  ";     

        $query= $this->db->query($sql);
        $ds = $query->result_array();
        return $ds;
    }
    public function cantidadPedidosFacturados() 
    {
             $fecha = date("Y-m-d"); 

             $this->db->select("count(*) as cantidad");
             $this->db->from("kpiporfacturar p");

             $consulta = $this->db->get();
             $resultado = $consulta->row_array();
             return $resultado['cantidad'];
    }
    public function cantidadPedProduccion() 
    {
             $fecha = date("Y-m-d"); 

             $this->db->select("count(*) as cantidad");
             $this->db->from("kpiproduccion p");

             $consulta = $this->db->get();
             $resultado = $consulta->row_array();
             return $resultado['cantidad'];
    }
    public function obtenerPedidosFacturados($f_inicio, $f_fin) 
    {
         $this->db->select("
                            p.PEDF_NUM_PREIMP as numero,'Cliente Generico' as cliente,pac.NOMBRE_APELLIDO as paciente,IFNULL(p.MEDICO_TRATANTE,'Sin Asignar') as medico,
                            p.FECHA_COTIZACION fing,'Sin Dato' as total,'Sin Dato' as flete, 'Sin Dato' as recargo, 'Sin Dato' as abono, 'Sin Dato' as saldo,et.NOMBRE_ESTADO as estado
                            ");

             $this->db->from("pedido p");
             $this->db->join("paciente pac",'pac.ID_PACIENTE= p.ID_PACIENTE');
             $this->db->join("estados et",'et.ID_ESTADOS=p.ID_ESTADOS');
             //$this->db->join("estados etpb",'et.ID_ESTADOS=p.ID_ESTADOS');
			 $this->db->join("kpiporfacturar pf",'pf.ID_PEDIDO=p.ID_PEDIDO');
			
			/*
            if($f_inicio!= "")
            {
                $this->db->where("Date(p.FECHA_FACTURA)  >=", Date($f_inicio) );  
            }
            if($f_fin!= "")
            {
                $this->db->where("Date(p.FECHA_FACTURA)  <=",Date($f_fin) );  
            }
			*/
             $consulta = $this->db->get();
             $resultado = $consulta->result_array();
             return $resultado;
    }

    public function cantidadPedidosEntregados() 
    {
             $fecha = date("Y-m-d"); 

             $this->db->select("count(*) as cantidad");

             $this->db->from("pedido p");
             $this->db->join("pruebas pb",'pb.ID_PEDIDO=p.ID_PEDIDO');
             $this->db->join("paciente pac",'pac.ID_PACIENTE= p.ID_PACIENTE');
             $this->db->join("estados et",'et.ID_ESTADOS=p.ID_ESTADOS');

             $this->db->where("pb.ENTREGADO =", 'S'); 
             $this->db->where("pb.ID_ESTADOS =", '8'); 
             $this->db->where("pb.DESPACHADO =", 'S'); 

             $this->db->where("Date(pb.FEC_HOR_ENTR) =", Date($fecha) );  


             $consulta = $this->db->get();
             $resultado = $consulta->row_array();
             return $resultado['cantidad'];
    }

    public function obtenerPedidosEntregados($f_inicio,$f_fin,$cliente,$mensajero,$courier)
    {
             $fecha = date("Y-m-d"); 

             $array=array("p.PEDF_NUM_PREIMP as numero", "p.FECHA_COTIZACION fing","pac.NOMBRE_APELLIDO as paciente",
			 "IFNULL(p.MEDICO_TRATANTE,'Sin Asignar') as medico","tp.NOMBRE_PRUEBA","pb.FECHA_EMPAQUE",
			 "if(pb.EMPL_COD_EMPL='' or pb.EMPL_COD_EMPL is null,(SELECT c.NOMBRE_COURIER FROM courier c WHERE c.ID_COURIER=pb.ID_COURIER),(SELECT CONCAT(u.USUARIO_APELLIDO,' ',u.USUARIO_NOMBRE) FROM usuario u WHERE u.EMPL_COD_EMPL=pb.EMPL_COD_EMPL)) as mensajerocourirer",
			 "pb.FECHA_SALIDA","pb.FEC_HOR_ENTR","pb.PERSO_RECIBE","'Cliente Generico' as cliente","p.CLPV_COD_CLPV as ciudad");
		
			 
			 $this->db->select($array);

             $this->db->from("pedido p");
             $this->db->join("pruebas pb",'pb.ID_PEDIDO=p.ID_PEDIDO');
             $this->db->join("paciente pac",'pac.ID_PACIENTE= p.ID_PACIENTE');
             $this->db->join("estados et",'et.ID_ESTADOS=p.ID_ESTADOS');
             $this->db->join("tipo_prueba tp",'tp.ID_TIPO_PRUEBA=pb.ID_TIPO_PRUEBA');

             $this->db->where("pb.ENTREGADO =", 'S'); 
             $this->db->where("pb.ID_ESTADOS =", '8'); 
             $this->db->where("pb.DESPACHADO =", 'S'); 
			 


			if($f_inicio!= "")
			{
				$this->db->where("DATE(pb.FEC_HOR_ENTR)  >=", Date($f_inicio) );  
			}
			if($f_fin!= "")
			{
				$this->db->where("DATE(pb.FEC_HOR_ENTR)  <=",Date($f_fin) );  
			}
			if($cliente!= "")
			{
				$this->db->where(" p.CLPV_COD_CLPV  =",$cliente);  
			}
			if($mensajero!= "")
			{
				$this->db->where(" pb.EMPL_COD_EMPL  =",$mensajero);  
			}
			if($courier!= "")
			{
				$this->db->where(" pb.ID_COURIER =",$courier);  
			}
			 //$this->db->limit(100); 
			
			 $this->db->order_by(" pb.FEC_HOR_ENTR ASC");
             $consulta = $this->db->get();
             $resultado = $consulta->result_array();
             return $resultado;
    }
    public function obtenerInventarios()
    {
             $this->db->select("*");
             $this->db->from("inventario i");
             $this->db->where("i.activo =",'S' );  
             $this->db->order_by("i.id_inventario", "asc"); 


             $consulta = $this->db->get();
             $resultado = $consulta->result_array();
             return $resultado;
    }
    public function obtenerProductos()
    {
             //$this->db->limit(9);
             $this->db->select("
                                p.PERFIL_NOMBRE, u.USUARIO_NOMBRE
                             ");

             $this->db->from("usuario u");
             $this->db->join("perfil p",'u.PERFIL_ID = p.PERFIL_ID');
             $this->db->order_by("p.PERFIL_NOMBRE", "asc"); 


             $consulta = $this->db->get();
             $resultado = $consulta->result_array();
             return $resultado;
    }
    public function obtenerPruebas()
    {
             $fecha_actual = date("Y-m-d H:i:s");

             $this->db->select("
                                ID_TIPO_PRUEBA, NOMBRE_PRUEBA, DIAS
                             ");
             $this->db->from("tipo_prueba tp");


             $consulta = $this->db->get();
             $resultado = $consulta->result_array();
 
             for ($i=0; $i < count($resultado); $i++) 
             { 
                $dias_a_sumar=0;
                $dias_a_sumar1=0;
                if($resultado[$i]['DIAS']>0)
                {
                    $dias_a_sumar= $this->calcular_fecha_produccion($resultado[$i]['DIAS']-1);
                    $dias_a_sumar1= $this->calcular_fecha_produccion($resultado[$i]['DIAS']);
                }
                $resultado[$i]['FECHA_CALCULADA']=date( 'Y-m-d' , strtotime ( '+'.$dias_a_sumar.' day' , strtotime ( $fecha_actual ) )) ; 
                $resultado[$i]['FECHA_ENTREGA']=date( 'Y-m-d' , strtotime ( '+'.$dias_a_sumar1.' day' , strtotime ( $fecha_actual ) )) ; 
                
                if($resultado[$i]['DIAS']>0)
                    $resultado[$i]['DIAS']=$resultado[$i]['DIAS']-1;
                else
                    $resultado[$i]['DIAS']=0;

             }

             return $resultado;
    }
    public function suma_Dias_A_Fecha($dias)
    {
        $fecha_actual = date("Y-m-d H:i:s");

        $nuevafecha = strtotime ( '+'.$dias.' day' , strtotime ( $fecha_actual ) ) ;      
        $nuevafecha = date ( 'Y-m-d H:i:s' , $nuevafecha );
        return $nuevafecha;
    }
    public function calcular_fecha_produccion($dias_prueba)
    {
        $fecha_actual = date("Y-m-d H:i:s");
        $cont=$dias_prueba ; //tomo la duración en dias de la fecha
        $dias_sumados=1;

        if($cont<=0)
            return 0;

        while ($cont>0) 
        {
           $fecha_obt = $this->suma_Dias_A_Fecha($dias_sumados);
           

           $datos_fecha_obt = new DateTime($fecha_obt);
           //$datos_fecha_obt = $datos_fecha_obt->getTimestamp();
		   $datos_fecha_obt = $datos_fecha_obt->format("U");
           $datos_fecha_obt = getdate($datos_fecha_obt);

           //"wday"     Representacion numérica del día de la semana    0 (para Domingo) hasta 6 (para Sábado)
           if($datos_fecha_obt['wday']==0 || $datos_fecha_obt['wday']==6)
           {
            $dias_sumados++;
           }
           else
           {
            $cont--;
            if($cont==0)
                break;
            $dias_sumados++;
           }   

        }
        return  $dias_sumados;
    }
    public function insertarPaciente($data)
    {
        $this->db->insert('paciente', $data);
        return $this->db->insert_id();
    }
    public function actualizarPaciente($data,$idPaciente) 
    {
        $this->db->where('paciente.ID_PACIENTE', $idPaciente);
        $this->db->update('paciente', $data);
    }
    public function getIdPaciente($numped)
    {
             $this->db->select("ID_PACIENTE");

             $this->db->from("pedido p");
             $this->db->where("p.PEDF_NUM_PREIMP =",$numped);
             $consulta = $this->db->get();
             $resultado = $consulta->row_array();
             return $resultado['ID_PACIENTE'];
    }
    public function insertarFoto($data)
    {
        $this->db->insert('fotos', $data);
        return $this->db->insert_id();
    }
    public function insertarPedido($data)
    {
        $this->db->insert('pedido', $data);
        return $this->db->insert_id();
    }
    public function actualizarPedido($data, $numped)
    {
        $this->db->where('pedido.PEDF_NUM_PREIMP', $numped);
        $this->db->update('pedido', $data);

             $this->db->select("ID_PEDIDO");
             $this->db->from("pedido p");
             $this->db->where("p.PEDF_NUM_PREIMP =",$numped);
             $consulta = $this->db->get();
             $resultado = $consulta->row_array();
             return $resultado['ID_PEDIDO'];
    }

    public function insertarPedidoEnAgendaProd($data)
    {
        $this->db->where('title', $data['title']);
        $this->db->delete('`events`'); 

        $data['`start`']=strtotime($data['`start`']." 00:00")*1000;
        $data['`end`']=strtotime($data['`end`']." 00:00")*1000;

        $this->db->insert('`events`', $data);
    } 

    private function _formatDate($date)
    {
        return strtotime(substr($date, 6, 4)."-".substr($date, 3, 2)."-".substr($date, 0, 2)." " .substr($date, 10, 6)) * 1000;
    }

    public function insertarInventarioRecibido($data, $id_pedido)
    {
        $this->db->where('ID_PEDIDO', $id_pedido);
        $this->db->delete('inventario_recibido');         

        $this->db->insert_batch('inventario_recibido', $data); 
    }

    public function insertarPruebas($data, $id_pedido)
    {
        $this->db->where('ID_PEDIDO', $id_pedido);
        $this->db->delete('pruebas');    

        $this->db->insert_batch('pruebas', $data); 
    }

    public function insertarPrueba($data, $id_pedido)
    { 
        $this->db->insert('pruebas', $data);
        return $this->db->insert_id();
    }

    public function insertarProducto($data)
    {
        $this->db->insert('pedido_descripcion', $data);
        return $this->db->insert_id();
    }
    public function insertarProcesoPedido($data)
    {
         $this->db->insert_batch('proceso_pedido', $data); 
    }

    public function obtenerUltimoNumPedido()
    {
             $this->db->select("MAX(p.PEDF_NUM_PREIMP) AS PEDF_NUM_PREIMP");

             $this->db->from("pedido p");
             $this->db->where("p.PEDF_NUM_PREIMP !=",'121212');
             $consulta = $this->db->get();
             $resultado = $consulta->row_array();
             return $resultado['PEDF_NUM_PREIMP'];
    }

    // busco el id_producto_laboratorio, los ID_PROCESOS, si comisiona el producto, si comisiona el proceso
    public function obtenerProcesosDeProducto($codigo_prod)
    {
             $this->db->select("
                                pl.ID_PRODUCTO_LABORATORIO,p.ID_PROCESOS,pl.COMISION AS PRODUCTO_COMISIONA, p.COMISION_PROCESO AS PROCESO_COMISIONA
                             ");

             $this->db->from("producto_laboratorio pl");
             $this->db->join("procesos p",'p.ID_PRODUCTO_LABORATORIO=pl.ID_PRODUCTO_LABORATORIO');
             $this->db->join("procesos_nombre pn",'pn.ID_PROCESO_NOMBRE = p.ID_PROCESO_NOMBRE');
             $this->db->where("pl.prod_cod_prod =", $codigo_prod); 


             $consulta = $this->db->get();
             $resultado = $consulta->result_array();
             return $resultado;
    }

    // BUSCO DATOS DE CLIENTE, INVENTARIO RECIBIDO y FECHAS PARA LA PANTALLA DE MODIFICAR PEDIDO
    public function obtenerClteInvRecFechas($numped)
    {
             $this->db->select("
                                'Cliente Generico' as cliente, pac.NOMBRE_PACIENTE, pac.APELLIDO_PACIENTE, ped.MEDICO_TRATANTE, ped.PRIORIDAD,
                                ir.id_inventario, ir.DESCRIPCION_INVENTARIO,
                                ped.FECHA_COTIZACION, ped.FECHA_VENCIMIENTO, ped.FECHA_ENTREGA, ped.FECHA_CITA
                             ");

             $this->db->from("pedido ped");
             $this->db->join("paciente pac",'ped.ID_PACIENTE=pac.ID_PACIENTE');
             $this->db->join("inventario_recibido ir",'ir.ID_PEDIDO = ped.ID_PEDIDO');
             $this->db->where("ped.PEDF_NUM_PREIMP =", $numped); 


             $consulta = $this->db->get();
             $resultado = $consulta->result_array();
             return $resultado;
    }

    // OBTENGO LAS PRUEBAS DE UN PEDIDO
    public function obtenerPruebasDeUnPedido($numped)
    {
             $this->db->select("
                                pb.ID_TIPO_PRUEBA, tp.NOMBRE_PRUEBA, (tp.DIAS)-1 AS DIAS, pb.FECHA_SALIDA_PRODUCCION, pb.FECHA_ENTREGA_CLIENTE
                             ");

             $this->db->from("pedido p");
             $this->db->join("pruebas pb",'pb.ID_PEDIDO = p.ID_PEDIDO');
             $this->db->join("tipo_prueba tp",'tp.ID_TIPO_PRUEBA = pb.ID_TIPO_PRUEBA');
             $this->db->where("p.PEDF_NUM_PREIMP =", $numped); 


             $consulta = $this->db->get();
             $resultado = $consulta->result_array();
             return $resultado;
    }

    // OBTENGO LOS PRODUCTOS DE UN PEDIDO
    public function obtenerProductosDeUnPedido($numped)
    {
             $this->db->select("
                                pl.ID_LABORATORIO AS CATEGORIA, pd.DETALLE, pd.PROD_NOM_PROD, pd.CANTIDAD, pd.GUIACOLORES, pd.COLORES, pd.OBSERVACIONES
                             ");

             $this->db->from("pedido p");
             $this->db->join("pedido_descripcion pd",'p.ID_PEDIDO = pd.ID_PEDIDO');
			 $this->db->join("producto_laboratorio pl","pd.ID_PRODUCTO_LABORATORIO=pl.ID_PRODUCTO_LABORATORIO"); 
             $this->db->where("p.PEDF_NUM_PREIMP =", $numped); 

             $consulta = $this->db->get();
             $resultado = $consulta->result_array();
             return $resultado;
    }

    public function eliminarProductosyProcesos($id_pedido)
    {
        $this->db->select("ID_PEDIDO_DESCRIPCION");
        $this->db->from("pedido_descripcion pd");
        $this->db->where("pd.ID_PEDIDO=",$id_pedido);  

        $consulta = $this->db->get();
        $resultado = $consulta->result_array();


        $this->db->where('ID_PEDIDO', $id_pedido);
        $this->db->delete('pedido_descripcion'); 


        for ($i=0; $i < count($resultado); $i++) 
        { 
           $id = $resultado[$i]['ID_PEDIDO_DESCRIPCION'];

           $this->db->where('ID_PROCESO_PEDIDO', $id);
           $this->db->delete('proceso_pedido'); 
        }

    }

    public function obtenerDatosAdministracionPedido($numped)
    {
        $this->db->select("ID_PEDIDO_DESCRIPCION");
        $this->db->from("pedido_descripcion pd");
        $this->db->where("pd.ID_PEDIDO=",$id_pedido);  

        $consulta = $this->db->get();
        $resultado = $consulta->result_array();


        $this->db->where('ID_PEDIDO', $id_pedido);
        $this->db->delete('pedido_descripcion'); 


        for ($i=0; $i < count($resultado); $i++) 
        { 
           $id = $resultado[$i]['ID_PEDIDO_DESCRIPCION'];

           $this->db->where('ID_PROCESO_PEDIDO', $id);
           $this->db->delete('proceso_pedido'); 
        }

    }

    public function eliminar_Prueba($id_prueba)
    {
        $this->db->where('ID_PRUEBAS', $id_prueba);
        $this->db->delete('pruebas'); 
    }

    public function datosDetallePrueba($id_prueba)
    {
        $sql="           select 
                        tp.NOMBRE_PRUEBA, pb.FECHA_SALIDA, pb.FECHA_REGRESO,pb.OBSERVACIONES,
                        CONCAT_WS (' ', u.USUARIO_NOMBRE, u.USUARIO_APELLIDO) AS usuario_responsable,
                        pb.VALOR_FLETE, IFNULL(cou.NOMBRE_COURIER,'') as courier, pb.EMPL_COD_EMPL
            
                        from pruebas pb 
                        left join tipo_prueba tp on tp.ID_TIPO_PRUEBA = pb.ID_TIPO_PRUEBA
                        left join usuario u on u.USUARIO_ID=pb.USER_DESPACHO
                        left join courier cou on cou.ID_COURIER = pb.ID_COURIER
                        where pb.ID_PRUEBAS =".$id_prueba;

        $sql2="         select i.nombre_inventario, inr.DESCRIPCION_INVENTARIO from inventario_recibido inr, inventario i where
                                                i.id_inventario =  inr.id_inventario and
                                                inr.ID_PRUEBAS =".$id_prueba;

        $query2= $this->db->query($sql2);
        $ds2 = $query2->result_array();

        $query= $this->db->query($sql);
        $ds = $query->result_array();
        $ds['inv']=$ds2;
        return $ds;
    }

    public function datosImprimirDespacho($id_prueba)
    {
        $sql="select pb.FECHA_SALIDA, p.PEDF_NUM_PREIMP, 'Cliente Genérico' as cliente, pac.NOMBRE_APELLIDO,tp.NOMBRE_PRUEBA,
                IFNULL(cou.NOMBRE_COURIER,'') as courier from pruebas pb
                left join pedido p on p.ID_PEDIDO= pb.ID_PEDIDO
                left join paciente pac on pac.ID_PACIENTE = p.ID_PACIENTE
                left join tipo_prueba tp on tp.ID_TIPO_PRUEBA = pb.ID_TIPO_PRUEBA
                left join courier cou on cou.ID_COURIER = pb.ID_COURIER
                where pb.ID_PRUEBAS=".$id_prueba;

        $sql2="         select i.nombre_inventario, inr.DESCRIPCION_INVENTARIO from inventario_recibido inr, inventario i where
                                                i.id_inventario =  inr.id_inventario and
                                                inr.ID_PRUEBAS =".$id_prueba;

        $query2= $this->db->query($sql2);
        $ds2 = $query2->result_array();

        $query= $this->db->query($sql);
        $ds = $query->result_array();
        $ds['inv']=$ds2;
        return $ds;
    }


    public function actualizarPrueba($data,$idPrueba) 
    {
        $this->db->where('pruebas.ID_PRUEBAS', $idPrueba);
        $this->db->update('pruebas', $data);
    }

    public function obtenerInventarioPedido($idPedido)
    {
        $sql = "select 
        inr.ID_INVENTARIO_RECIBIDO, i.id_inventario, i.nombre_inventario
        from inventario_recibido inr, inventario i where
        i.id_inventario =  inr.id_inventario and
        inr.ID_PEDIDO ='".$idPedido."' order by inr.ENVIADO = 'N' ";

        $query= $this->db->query($sql);
        $ds = $query->result_array();
        return $ds;
    }

    public function eliminar_Inventario_Recibido($id_inv_rec)
    {
        $this->db->where('ID_INVENTARIO_RECIBIDO', $id_inv_rec);
        $this->db->delete('inventario_recibido'); 
    }

    
    public function obtener_DatosCabeceraPedido($numped)
    {
             $this->db->select("
                                'Cliente Generico' as cliente, pac.NOMBRE_PACIENTE, pac.APELLIDO_PACIENTE, ped.MEDICO_TRATANTE, ped.PRIORIDAD,
                                ped.FECHA_COTIZACION, ped.FECHA_VENCIMIENTO, ped.FECHA_ENTREGA, ped.FECHA_CITA,f.FOTO_PACIENTE,ped.OBSERVACIONES
                             ");

             $this->db->from("pedido ped");
             $this->db->join("paciente pac",'ped.ID_PACIENTE=pac.ID_PACIENTE');
             $this->db->join("fotos f",'f.ID_FOTOS= pac.ID_FOTOS','left');
             $this->db->where("ped.PEDF_NUM_PREIMP =", $numped); 


             $consulta = $this->db->get();
             $resultado = $consulta->row_array();
             return $resultado;
    }

    public function suspenderPedido($idPedido,$motivo)
    {
        $data=array();
        $data['ID_ESTADOS']=6;
        $this->db->where('pedido.ID_PEDIDO', $idPedido);
        $this->db->update('pedido', $data);

        $data_suspendido=array();
        $data_suspendido['ID_PEDIDO']=$idPedido;
        $data_suspendido['FECHA_SUSPENDIDO']= date("Y-m-d H:i:s");
        $data_suspendido['OBSERVACION_SUSPENDIDO']=$motivo;
        $this->db->insert('pedidos_suspendidos', $data_suspendido);

        $this->db->where('title', $idPedido);
        $this->db->delete('`events`'); 
    }
    public function reanudarPedidos($arreglo_nros_pedido)
    {
        for ($i=0; $i < count($arreglo_nros_pedido); $i++) 
        { 
            $nro_pedido = $arreglo_nros_pedido[$i];

            //actualizo el pedido, le pongo estado dos
            $data=array();
            $data['ID_ESTADOS']=2;
            $this->db->where('pedido.PEDF_NUM_PREIMP', $nro_pedido);
            $this->db->update('pedido', $data);

            //Busco el id de pedido SUSPENDIDO
            $this->db->select("max(ID_PEDIDO_SUSPENDIDO) as id, p.FECHA_VENCIMIENTO ");
            $this->db->from("pedido p");
            $this->db->join("pedidos_suspendidos ps",'ps.ID_PEDIDO=p.ID_PEDIDO');
            $this->db->where("p.PEDF_NUM_PREIMP =",$nro_pedido);  

            $consulta = $this->db->get();
            $resultado = $consulta->row_array();
            $max_id_pedido_suspendido = $resultado['id']; 
            $fecha_vencimiento=$resultado['FECHA_VENCIMIENTO']; 

            //actualizo en pedidos supendidos
            $data=array();
            $data['REANUDAR']='S';
            $this->db->where('pedidos_suspendidos.ID_PEDIDO_SUSPENDIDO', $max_id_pedido_suspendido);
            $this->db->update('pedidos_suspendidos', $data);

            //inserto el pedido en la agenda de produccion
            $data_agenda_prod = array();
            $data_agenda_prod['title']=$nro_pedido;
            $data_agenda_prod['body']=$nro_pedido;
            $data_agenda_prod['`start`']=$fecha_vencimiento;
            $data_agenda_prod['`end`']=$fecha_vencimiento;
            $this->insertarPedidoEnAgendaProd($data_agenda_prod);
        }
    }


    public function obtenerPedidosEnProduccion()
    {
         $this->db->select("
                            p.PEDF_NUM_PREIMP, 'Clietne Generico' as cliente,  pac.NOMBRE_APELLIDO,p.MEDICO_TRATANTE, p.FECHA_COTIZACION, tp.NOMBRE_PRUEBA, pb.FECHA_SALIDA
                          ");

             $this->db->from("pedido p");
             $this->db->join("pruebas pb",'pb.ID_PEDIDO=p.ID_PEDIDO');
             $this->db->join("tipo_prueba tp",'tp.ID_TIPO_PRUEBA = pb.ID_TIPO_PRUEBA','left');
             $this->db->join("estados e",'e.ID_ESTADOS=pb.ID_ESTADOS','left');
             $this->db->join("paciente pac",'pac.ID_PACIENTE= p.ID_PACIENTE','left');
             $this->db->where("pb.ID_ESTADOS =",3);  
             $this->db->where("pb.ENTREGADO =",'N');
             $this->db->where("pb.DESPACHADO =",'N');
             $this->db->where("p.ID_ESTADOS =",2);

             $consulta = $this->db->get();
             $resultado = $consulta->result_array();

             for ($i=0; $i < count($resultado) ; $i++) 
             {  
                if(isset($resultado[$i]['FECHA_SALIDA']))
                {
                 $dias = date_diff(date_create(date("Y-m-d"))  , date_create($resultado[$i]['FECHA_SALIDA']))->format("%R%a days");  
                 $resultado[$i]['DIAS']=$dias;
                }
             }
             return $resultado;
    }
    public function obtenerProcesosNombre()
    {
        $this->db->select("*");
        $this->db->from("procesos_nombre pn");

        $consulta = $this->db->get();
        $resultado = $consulta->result_array();
        return $resultado;
    }

    public function obtenerMensajerosActivos()
    {
        $array=array("u.EMPL_COD_EMPL AS ID_MENSAJERO", "CONCAT(u.USUARIO_APELLIDO,' ',u.USUARIO_NOMBRE) AS NOMBRE_MENSAJERO");
		$this->db->select($array);
        $this->db->from("usuario u");
        $this->db->join("perfil p",'u.PERFIL_ID = p.PERFIL_ID');
        $this->db->where("p.PERFIL_ACTIVO =",'S');
        $this->db->where("p.PERFIL_ID =",9);

        $consulta = $this->db->get();
        $resultado = $consulta->result_array();
        return $resultado;
    }
    public function obtenerCourier()
    {
        $this->db->select("*");
        $this->db->from("courier");

        $consulta = $this->db->get();
        $resultado = $consulta->result_array();
        return $resultado;
    }

    public function despacharPruebas($arreglo_ids_pruebas, $courier, $recibe, $flete, $mensajero, $tipoMensajeria)
    {
        for ($i=0; $i < count($arreglo_ids_pruebas); $i++) 
        { 
            $fecha_actual = date("Y-m-d H:i:s");
            //$data_sesion = $this->session->userdata()['loggeado'];
            $id_usuario = $data_sesion["ID_USUARIO"];
            $id_prueba = $arreglo_ids_pruebas[$i];

            $data_prueba = array();
            $data_prueba['FECHA_SALIDA']=$fecha_actual;
            $data_prueba['FECHA_SALIDA_PRODUCCION']=$fecha_actual ;            
            $data_prueba['VALOR_FLETE']=$flete ;
            $data_prueba['DESPACHADO']='S' ;
            $data_prueba['USER_DESPACHO']= $id_usuario;  

            if($tipoMensajeria=="Courier")
            {
                $data_prueba['ID_COURIER']=$courier;
                $data_prueba['ENTREGADO']='S' ;
                $data_prueba['PERSO_RECIBE']=$recibe ;
                $data_prueba['FEC_HOR_ENTR']=$fecha_actual ;          
            }
            else if($tipoMensajeria=="Interna")
            {
                $data_prueba['ID_USUARIO_MENSAJERO']=$mensajero ;
            }


            $this->db->where('pruebas.ID_PRUEBAS', $id_prueba);
            $this->db->update('pruebas', $data_prueba);

        }

    }

    public function insertarRetiro($data)
    {
        $this->db->insert('retiro', $data);
        $id_retiro = $this->db->insert_id();

         $this->db->select("*");
         $this->db->from("usuario u");
         $this->db->where("u.USUARIO_ID =",$data['USUARIO_SESION']);
         $consulta = $this->db->get();
         $resultado = $consulta->row_array();

         $resultado['ID_RETIRO']=$id_retiro;
         return $resultado;
    }

    public function obtenerRetiros() 
    {
         $this->db->select("*");
         $this->db->from("retiro r");
         $this->db->join("usuario u",'u.USUARIO_ID = r.USUARIO_SESION');
         $this->db->where("r.ASIGNADO =",0);
         $this->db->order_by("r.CLIENTE", "asc");

         $consulta = $this->db->get();
         $resultado = $consulta->result_array();
         return $resultado;
    }

    public function cantidadRetirosPendientes()
    {
        $this->db->select(" count(*) as cantidad");
        $this->db->from("retiro r");
        $this->db->where("r.ASIGNADO =",0);

        $consulta = $this->db->get();
        $resultado = $consulta->row_array();

        return $resultado['cantidad'];
    }

    public function actualizarRetiro($data,$idRetiro) 
    {
        $this->db->where('retiro.ID_RETIRO', $idRetiro);
        $this->db->update('retiro', $data);
    }

    public function obtenerRetirosAsignados() 
    {
         $this->db->select("*");
         $this->db->from("retiro r");
         $this->db->join("usuario u",'u.USUARIO_ID = r.USUARIO_SESION');
         $this->db->where("r.ASIGNADO =",1);
         $this->db->where("r.RETIRADO =",0);
         $consulta = $this->db->get();
         $resultado = $consulta->result_array();
         return $resultado;
    }
	public function cantidadPrePedido() 
    {
         $this->db->select("count(*) as cantidad");
         $this->db->from("pedido p");
         $this->db->where("p.ID_ESTADOS =",9);
         $consulta = $this->db->get();
         $resultado = $consulta->row_array();
         return $resultado['cantidad'];
    }
    public function cantidadRetirosAsignados() 
    {
         $this->db->select("count(*) as cantidad");
         $this->db->from("retiro r");
         $this->db->join("usuario u",'u.USUARIO_ID = r.USUARIO_SESION');
         $this->db->where("r.ASIGNADO =",1);
         $this->db->where("r.RETIRADO =",0);
         $consulta = $this->db->get();
         $resultado = $consulta->row_array();
         return $resultado['cantidad'];
    }
	public function ObtenerPedidosControlCalidad() 
	{
			
		$sql="SELECT 
                p.PEDF_NUM_PREIMP as numero,'Cliente Generico' as cliente,pac.NOMBRE_APELLIDO as paciente,IFNULL(p.MEDICO_TRATANTE,'Sin Asignar') as medico,
                p.FECHA_COTIZACION fing,et.NOMBRE_ESTADO as estado, tp.NOMBRE_PRUEBA, 1 CANTIDAD, 'cc' modulo
            from pedido p
            INNER JOIN paciente pac on pac.ID_PACIENTE= p.ID_PACIENTE
            INNER JOIN estados et on et.ID_ESTADOS=p.ID_ESTADOS
            LEFT JOIN pruebas pb on pb.ID_PEDIDO=p.ID_PEDIDO
            LEFT JOIN tipo_prueba tp on tp.ID_TIPO_PRUEBA = pb.ID_TIPO_PRUEBA 
			INNER JOIN kpicontrolcalidad cc on cc.ID_PEDIDO=p.ID_PEDIDO		
			WHERE pb.ID_ESTADOS = 3 AND p.ID_ESTADOS = 2";
		    
        $query= $this->db->query($sql);
        $ds = $query->result_array();
        return $ds;

    }
	public function cantidadControlCalidad() 
	{
		
		$sql="SELECT 
                COUNT(*)cantidad
            from pedido p
            INNER JOIN paciente pac on pac.ID_PACIENTE= p.ID_PACIENTE
            INNER JOIN estados et on et.ID_ESTADOS=p.ID_ESTADOS
            LEFT JOIN pruebas pb on pb.ID_PEDIDO=p.ID_PEDIDO
            LEFT JOIN tipo_prueba tp on tp.ID_TIPO_PRUEBA = pb.ID_TIPO_PRUEBA 
			INNER JOIN kpicontrolcalidad cc on cc.ID_PEDIDO=p.ID_PEDIDO		
			WHERE pb.ID_ESTADOS = 3 AND p.ID_ESTADOS = 2";	
			
        $query= $this->db->query($sql);
        $ds = $query->row_array();
        $resultado = $ds['cantidad'];
        return $resultado;

    }
}

