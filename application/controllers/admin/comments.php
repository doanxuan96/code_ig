<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comments extends My_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('comment_model');
	}

	public function list_comments()
	{
		$data = array();
		$data['temp'] = 'backend/comments/list_comment';
		$cmt = $this->comment_model->get_list();
		$data['cmt'] = $cmt;
		$this->load->view('backend/index', $data);
	}
	public function delete_comment()
	{
		$id = $this->uri->segment(4);
		$this->comment_model->delete($id);
		$this->session->set_flashdata('messenger', 'Xóa bình luận thành công!');
		redirect(admin_url('comments/list_comments'));
		
	}
}

/* End of file comments.php */
/* Location: ./application/controllers/comments.php */