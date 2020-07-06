<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends My_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		$this->table = 'users';
	}

}

/* End of file users_model.php */
/* Location: ./application/models/users_model.php */