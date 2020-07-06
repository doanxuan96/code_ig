<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Danhmuc extends My_controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('danhmuc_model');
	}

	public function themdanhmuc()
	{
		$data = array();
		$data['temp'] = 'backend/danhmuc/add_cat';
		if ($this->input->post()) 
		{
			$this->form_validation->set_rules('tendanhmuc', 'Tên danh mục', 'required|is_unique[category_baiviet.name_cat]');
			if ($this->form_validation->run()) 
			{
				$tendanhmuc = $this->input->post('tendanhmuc');
				$input = array('name_cat'=>$tendanhmuc);
				$this->danhmuc_model->create($input);
				$this->session->set_flashdata('mess', 'Đã thêm thành công');
			} else {
				//$this->session->set_flashdata('errors', 'Lỗi không thể thêm');
			}
		}
		$this->load->view('backend/index', $data);
	}
	public function listdanhmuc()
	{
		$data= array();
		$data['temp'] = 'backend/danhmuc/list_cat';
		$list = $this->danhmuc_model->get_list();
		$data['list'] = $list;
		$this->load->view('backend/index', $data);
	}
	public function editdanhmuc()
	{
		$data = array();
		$id = $this->uri->segment(4);
		$row = $this->danhmuc_model->get_info($id);
		$data['temp'] = 'backend/danhmuc/edit_cat';
		if($this->input->post())
		{
			$this->form_validation->set_rules('tendanhmuc', 'Tên danh mục', 'required|is_unique[category_baiviet.name_cat]');
			if ($this->form_validation->run()) {
				$tendanhmuc = $this->input->post('tendanhmuc');
				$input = array('name_cat'=>$tendanhmuc);
				$this->danhmuc_model->update($id,$input);
				$this->session->set_flashdata('mess', 'Cập nhật thành công danh mục');
				$row->name_cat = $tendanhmuc;
			}
		}
		$data['row'] = $row;
		$this->load->view('backend/index', $data);
	}
	public function deletedanhmuc()
	{
		$id = $this->uri->segment(4);
		$this->danhmuc_model->delete($id);
		$this->session->set_flashdata('mess','Đã xóa thành công');
		redirect(admin_url('danhmuc/listdanhmuc'));
	}
}

/* End of file danhmuc.php */
/* Location: ./application/controllers/danhmuc.php */