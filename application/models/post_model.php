<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post_model extends My_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		$this->table = 'post';
		
	}

}

/* End of file baiviet_model.php */
/* Location: ./application/models/baiviet_model.php */