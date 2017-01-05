<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Europe/Madrid"); 
	}

	/**
	* @desc - añade un nuevo evento
	* @access public
	* @author Iparra
	* @return bool
	*/
	public function add()
	{
		$this->db->set("start", $this->_formatDate($this->input->post("from")));
		$this->db->set("end", $this->_formatDate($this->input->post("to")));
		$this->db->set("url", $this->input->post("url"));
		$this->db->set("title", $this->input->post("title"));
		$this->db->set("body", $this->input->post("event"));
		$this->db->set("class", $this->input->post("class"));
		if($this->db->insert("events"))
		{
			return TRUE;
		}
		return FALSE;
	}

	

	/**
	* @desc - obtiene todos los registros de events
	* @access public
	* @author Iparra
	* @return object
	*/
	public function getAll()
	{
		
		//$mes=date('m');
		//$ano=date('Y');
		
		//$this->db->select('start, end');
		//$query = $this->db->get_where('events', array('mes' => '12','ano'=>'2016'));

		$array=array("UNIX_TIMESTAMP(concat('',pb.FECHA_SALIDA,' 00:00'))*1000 as start","UNIX_TIMESTAMP(concat('',pb.FECHA_SALIDA,' 00:00'))*1000 as end");
		$this->db->select($array);
		$this->db->from("pedido p");
		$this->db->join("estados et","et.ID_ESTADOS=p.ID_ESTADOS");
		$this->db->join("pruebas pb","pb.ID_PEDIDO=p.ID_PEDIDO");
		$this->db->join("tipo_prueba tp","tp.ID_TIPO_PRUEBA = pb.ID_TIPO_PRUEBA");
		$this->db->join("pedido_descripcion pd","p.ID_PEDIDO=pd.ID_PEDIDO");
		$this->db->join("producto_laboratorio l","pd.ID_PRODUCTO_LABORATORIO = l.ID_PRODUCTO_LABORATORIO");
		$this->db->where("pb.ID_ESTADOS =",'3');
		$this->db->where("p.ID_ESTADOS =",'2');
		$this->db->where("l.PRINCIPAL =",'S');
		$this->db->group_by("p.PEDF_NUM_PREIMP");
		
		$query = $this->db->get();
		
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		 return object();
	}

	private function _formatDate($date)
	{
		return strtotime(substr($date, 6, 4)."-".substr($date, 3, 2)."-".substr($date, 0, 2)." " .substr($date, 10, 6)) * 1000;
	}
}
/* End of file events_model.php */
/* Location: ./application/models/events_model.php */