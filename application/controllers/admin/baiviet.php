<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Baiviet extends My_controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('baiviet_model');
	}
	public function thembai()
	{
		$this->load->model('danhmuc_model');
		$list_cat = $this->danhmuc_model->get_list();
		$data = array();
		$data['temp'] = 'backend/baiviet/add_post';
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
				$image = $this->upload->data();
			}


			$this->form_validation->set_rules('TieuDe', 'Tiêu đề bài viết', 'required');
			$this->form_validation->set_rules('TomTat', 'Tóm tắt bài viết', 'required');
			$this->form_validation->set_rules('NoiDung', 'Nội dung bài viết', 'required');
			$this->form_validation->set_rules('Hinh', 'Ảnh đại diện bài viết', '');
			$this->form_validation->set_rules('DanhMuc', 'Danh mục bài viết', '');
			if ($this->form_validation->run() ) 
			{
				$tieude = $this->input->post('TieuDe');
				$tomtat = $this->input->post('TomTat');
				$noidung = $this->input->post('NoiDung');
				$img =  $image['file_name'];
				$danhmuc = $this->input->post('DanhMuc');

				$input = array('tieude'=>$tieude,'noidung'=>$noidung,'tomtat'=>$tomtat,'hinhanh'=>$img,'id_danhmuc'=>$danhmuc);
				$this->baiviet_model->create($input);
				$this->session->set_flashdata('mess', 'Thêm bài viết thành công');
			}
		}

		$this->load->view('backend/index', $data);
	}
	public function danhsach()
	{
		$data = array();
		$data['temp'] = 'backend/baiviet/danhsach';
		$list = $this->baiviet_model->get_list();
		$data['list'] = $list;
		$this->load->view('backend/index', $data);
	}
	public function editpost()
	{
		$this->load->model('danhmuc_model');
		$this->load->model('comment_model');
		$data = array();
		$id = $this->uri->segment(4);
		$baiviet = $this->baiviet_model->get_info($id);
		// $this->db->SELECT ('id, idUser')->from('comments')->where('id_post', $id);
		// $query = $this->db->get()->row();
		// //$query1 = $query->row();
		// $id_cmt = $query->id;
		// $cmt = $this->comment_model->get_info($id_cmt);
		// $data['cmt'] = $cmt;
		$data['baiviet'] = $baiviet;
		$list_cat = $this->danhmuc_model->get_list();
		$data['list_cat'] = $list_cat;
		$data['temp'] = 'backend/baiviet/edit_post';
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
				$image = $this->upload->data();
			}



			$this->form_validation->set_rules('TieuDe', 'Tiêu đề bài viết', 'required');
			$this->form_validation->set_rules('TomTat', 'Tóm tắt bài viết', 'required');
			$this->form_validation->set_rules('NoiDung', 'Nội dung bài viết', 'required');
			$this->form_validation->set_rules('Hinh', 'Ảnh đại diện bài viết', '');
			$this->form_validation->set_rules('DanhMuc', 'Danh mục bài viết', '');
			if ($this->form_validation->run() ) 
			{
				$tieude = $this->input->post('TieuDe');
				$tomtat = $this->input->post('TomTat');
				$noidung = $this->input->post('NoiDung');
				$img =  $image['file_name'];
				$danhmuc = $this->input->post('DanhMuc');

				$input = array('tieude'=>$tieude,'noidung'=>$noidung,'tomtat'=>$tomtat,'hinhanh'=>$img,'id_danhmuc'=>$danhmuc);
				$this->baiviet_model->update($id,$input);
				$this->session->set_flashdata('mess', 'Đã sửa thành công');

				$baiviet->tieude = $tieude;
				$baiviet->tomtat = $tomtat;
				$baiviet->noidung = $noidung;
			}
		}
		$this->load->view('backend/index', $data);
	}
	public function deletepost()
	{
		$id = $this->uri->segment(4);
		$this->baiviet_model->delete($id);
		$this->session->set_flashdata('mess', 'Xóa bài viết thành công');
		redirect(admin_url('baiviet/danhsach'));
	}
}

/* End of file baiviet.php */
/* Location: ./application/controllers/baiviet.php */