<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends My_controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('category_model');
	}

	public function add_category()
	{
		$data = array();
		$data['temp'] = 'backend/category/add_cat';
		if ($this->input->post()) 
		{
			$this->form_validation->set_rules('tendanhmuc', 'Tên danh mục', 'required|is_unique[category_baiviet.name_cat]');
			if ($this->form_validation->run()) 
			{
				$name_cat = $this->input->post('tendanhmuc');
				$input = array('name_cat'=>$name_cat);
				$this->category_model->create($input);
				$this->session->set_flashdata('messenger', 'Đã thêm thành công');
			}
		}
		$this->load->view('backend/index', $data);
	}
	public function list_category()
	{
		$data= array();
		$data['temp'] = 'backend/category/list_cat';
		$list = $this->category_model->get_list();
		$data['list'] = $list;
		$this->load->view('backend/index', $data);
	}
	public function edit_category()
	{
		$data = array();
		$id = $this->uri->segment(4);
		$row = $this->category_model->get_info($id);
		$data['temp'] = 'backend/category/edit_cat';
		if($this->input->post())
		{
			$this->form_validation->set_rules('tendanhmuc', 'Tên danh mục', 'required|is_unique[category_baiviet.name_cat]');
			if ($this->form_validation->run()) {
				$name_cat = $this->input->post('tendanhmuc');
				$input = array('name_cat'=>$name_cat);
				$this->category_model->update($id,$input);
				$this->session->set_flashdata('messenger', 'Cập nhật thành công danh mục');
				$row->name_cat = $name_cat;
			}
		}
		$data['row'] = $row;
		$this->load->view('backend/index', $data);
	}
	public function delete_category()
	{
		$id = $this->uri->segment(4);
		$this->category_model->delete($id);
		$this->session->set_flashdata('messenger','Đã xóa thành công');
		redirect(admin_url('category/list_category'));
	}
}

/* End of file danhmuc.php */
/* Location: ./application/controllers/danhmuc.php */