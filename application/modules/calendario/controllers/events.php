<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events extends CI_Controller {

	public function index()
	{
		$this->load->helper('form');

		$this->load->view('templates/header');
			$this->load->view("add_event");
        $this->load->view('templates/footer');



	}

	public function save()
	{
        	$this->load->model("events_model");
        	$this->events_model->add();
        	redirect("index/index");
	}

	public function getAll()
	{
		if($this->input->is_ajax_request())
		{
			$this->load->model('events_model');
			$events = $this->events_model->getAll();
			echo json_encode(
				array(
					"success" => 1,
					"result" => $events
				)
			);
		}
	}

	public function render($id = 0)
	{
		if($id != 0)
		{
			echo $id;
		}
	}
}


/* End of file events.php */
/* Location: ./application/controllers/events.php */
