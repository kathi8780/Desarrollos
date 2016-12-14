<?php



class Index extends CI_Controller {

    public function __construct() {

        parent::__construct();

        

    }

    public function index() {

        if($this->session->userdata('loggeado'))

        {

             $this->load->view('templates/header');

             $this->load->view('index/index');

             $this->load->view('templates/footer');

        }

        else

        {

            //If no session, redirect to login page

          redirect('admin/login', 'refresh');

        }

        

    }

}

