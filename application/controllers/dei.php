<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dei extends CI_Controller {

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	// $this->output->enable_profiler();
	// }

	public function index()
	{
		$this->load->view('./pages/landing');
	}

	public function poll()
	{	
		$this->load->model("Poll");
		$this->Poll->add($this->input->post());
	}
	




}

//end of main controller