<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends My_controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('post_model');
	}
	public function add_post()
	{
		$this->load->model('category_model');
		$list_cat = $this->category_model->get_list();
		$data = array();
		$data['temp'] = 'backend/post/add_post';
		$data['list_cat'] = $list_cat;
		if($this->input->post())
		{
			$config['upload_path']          = './public/uploads/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 1024;
			$config['max_width']            = 1024;
			$config['max_height']           = 1024;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('Hinh'))
			{
				$error = $this->upload->display_errors();
			}
			else
			{
				$get_image = $this->upload->data();
			}


			$this->form_validation->set_rules('TieuDe', 'Tiêu đề bài viết', 'required');
			$this->form_validation->set_rules('TomTat', 'Tóm tắt bài viết', 'required');
			$this->form_validation->set_rules('NoiDung', 'Nội dung bài viết', 'required');
			$this->form_validation->set_rules('Hinh', 'Ảnh đại diện bài viết', '');
			$this->form_validation->set_rules('DanhMuc', 'Danh mục bài viết', '');
			if ($this->form_validation->run() ) 
			{
				$title = $this->input->post('TieuDe');
				$description = $this->input->post('TomTat');
				$content = $this->input->post('NoiDung');
				$image =  $get_image['file_name'];
				$category = $this->input->post('DanhMuc');

				$input = array('tieude'=>$title,'noidung'=>$content,'tomtat'=>$description,'hinhanh'=>$image,'id_danhmuc'=>$category);
				$this->post_model->create($input);
				$this->session->set_flashdata('messenger', 'Thêm bài viết thành công');
			}
		}

		$this->load->view('backend/index', $data);
	}
	public function list_post()
	{
		$data = array();
		$data['temp'] = 'backend/post/list_post';
		$list = $this->post_model->get_list();
		$data['list'] = $list;
		$this->load->view('backend/index', $data);
	}
	public function edit_post()
	{
		$this->load->model('category_model');
		$data = array();
		$id = $this->uri->segment(4);
		$get_post = $this->post_model->get_info($id);
		$data['get_post'] = $get_post;
		$list_cat = $this->category_model->get_list();
		$data['list_cat'] = $list_cat;
		$data['temp'] = 'backend/post/edit_post';
		if($this->input->post())
		{
			$config['upload_path']          = './public/uploads/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 1024;
			$config['max_width']            = 1024;
			$config['max_height']           = 1024;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('Hinh'))
			{
				$error = $this->upload->display_errors();
			}
			else
			{
				$get_image = $this->upload->data();
			}

			$this->form_validation->set_rules('TieuDe', 'Tiêu đề bài viết', 'required');
			$this->form_validation->set_rules('TomTat', 'Tóm tắt bài viết', 'required');
			$this->form_validation->set_rules('NoiDung', 'Nội dung bài viết', 'required');
			$this->form_validation->set_rules('Hinh', 'Ảnh đại diện bài viết', '');
			$this->form_validation->set_rules('DanhMuc', 'Danh mục bài viết', '');
			if ($this->form_validation->run() ) 
			{
				$title = $this->input->post('TieuDe');
				$description = $this->input->post('TomTat');
				$content = $this->input->post('NoiDung');
				$image =  $get_image['file_name'];
				$category = $this->input->post('DanhMuc');

				$input = array('tieude'=>$title,'noidung'=>$content,'tomtat'=>$description,'hinhanh'=>$image,'id_danhmuc'=>$category);
				$this->post_model->update($id,$input);
				$this->session->set_flashdata('messenger', 'Đã sửa thành công');

				$get_post->tieude = $title;
				$get_post->tomtat = $description;
				$get_post->noidung = $content;
			}
		}
		$this->load->view('backend/index', $data);
	}
	public function delete_post()
	{
		$id = $this->uri->segment(4);
		$this->post_model->delete($id);
		$this->session->set_flashdata('messenger', 'Xóa bài viết thành công');
		redirect(admin_url('posts/list_post'));
	}
}

/* End of file baiviet.php */
/* Location: ./application/controllers/baiviet.php */