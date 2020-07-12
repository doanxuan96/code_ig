<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends My_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('users_model');
	}

	public function index()
	{
		if($this->input->post())
		{
			$this->form_validation->set_rules('user_reg', 'Tên đăng nhập', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_check_email');
			$this->form_validation->set_rules('password_reg', 'Mật khẩu', 'required');
			$this->form_validation->set_rules('re_password_reg', 'Nhập lại mật khẩu', 'required|matches[password_reg]');
			if ($this->form_validation->run()) {
				$input = array(
					'user_name' => $this->input->post('user_reg'),
					'gmail' => $this->input->post('email'),
					'password' => md5($this->input->post('password_reg')),
				);
				
				//them thanh vien vao trong csdl
				$this->users_model->create($input);
				$this->session->set_flashdata('mess', 'Đăng ký thành công');
			}
		}
		$this->load->view('backend/register');
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

}

/* End of file register.php */
/* Location: ./application/controllers/register.php */