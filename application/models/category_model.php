<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_model extends My_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		$this->table = 'category_baiviet';
	}

}

/* End of file danhmuc_model.php */
/* Location: ./application/models/danhmuc_model.php */