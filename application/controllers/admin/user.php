<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends My_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('users_model');
	}
	function check_email()
	{

		$email = $this->input->post('email');
		$where = array('gmail'=>$email);
    //kiểm tra điều kiện email có tồn tại trong csdl hay không
		if($this->users_model->check_exists($where))
		{
         //trả về thông báo lỗi nếu đã tồn tại email này
			$this->form_validation->set_message(__FUNCTION__, 'Email đã sử dụng');
			return FALSE;
		}
		return TRUE;
	}
	public function add_user()
	{
		$data = array();
		$data['temp'] = 'backend/users/add-user';
		if($this->input->post())
		{
			$this->form_validation->set_rules('username', 'Tên tài khoản', 'required|is_unique[users.user_name]');
			$this->form_validation->set_rules('password', 'Mật khẩu', 'required');
			$this->form_validation->set_rules('re_password', 'Nhập lại mật khẩu', 'required|matches[password]');
			$this->form_validation->set_rules('mail', 'Email', 'required|callback_check_email');
			if ($this->form_validation->run()) {
				$user = $this->input->post('username');
				$pass = md5($this->input->post('password'));
				$mail = $this->input->post('mail');
				$input = array('user_name'=>$user,'gmail'=>$mail,'password'=>$pass);
				$this->users_model->create($input);
				$this->session->set_flashdata('mess', 'Thêm tài khoản thành công');
			}
		}
		$this->load->view('backend/index', $data);
	}

	public function list_user()
	{
		$data = array();
		$data['temp'] = 'backend/users/list-user';
		$list = $this->users_model->get_list();
		$data['list'] = $list;
		$this->load->view('backend/index', $data);
	}
	public function deleteuser()
	{
		$id = $this->uri->segment(4);
		$this->users_model->delete($id);
		$this->session->set_flashdata('mess', 'Đã xóa thành công');
		redirect(admin_url('user/list_user'));
	}
	public function edituser()
	{
		$data = array();
		$data['temp'] = 'backend/users/edit-user';
		$id = $this->uri->segment(4);
		$row = $this->users_model->get_info($id);
		$data['row'] = $row;
		if($this->input->post())
		{
			$this->form_validation->set_rules('username', 'Tài khoản', 'required|is_unique[users.user_name]');
			$this->form_validation->set_rules('password', 'Mật khẩu', 'required');
			$this->form_validation->set_rules('re_password', 'Nhập lại mật khẩu', 'required|matches[password]');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.gmail]');
			if ($this->form_validation->run()) {
				$user = $this->input->post('username');
				$pass = md5($this->input->post('password'));
				$mail = $this->input->post('email');
				$input = array('user_name'=>$user,'gmail'=>$mail,'password'=>$pass);
				$this->users_model->update($id,$input);
				$this->session->set_flashdata('mess', 'Cập nhật thành công');

				$user = $row->user_name;
				$pass = $row->password;
				$mail = $row->gmail;
			}
		}
		$this->load->view('backend/index', $data);
	}
}

/* End of file user.php */
/* Location: ./application/controllers/user.php */