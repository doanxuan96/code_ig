<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends My_controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = array();
		$data['temp'] = 'backend/partials/content';
		$this->load->view('backend/index', $data);
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */