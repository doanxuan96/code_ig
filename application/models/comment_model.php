<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comment_model extends My_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		$this->table = 'comments';
	}


}

/* End of file comment_model.php */
/* Location: ./application/models/comment_model.php */