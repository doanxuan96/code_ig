<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends My_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('users_model');
	}

	public function index()
	{
		if($this->input->post())
		{
			$this->form_validation->set_rules('login', 'login', 'callback_check_login');
			if ($this->form_validation->run()) {
				$user = $this->input->post('user');
				$this->session->set_userdata('login', $user);
				redirect(admin_url('home'));
			}
		}
		$this->load->view('backend/login');
	}
	public function check_login()
	{
		$user = $this->input->post('user');
		$pass = $this->input->post('password');
		//$where = array('user_name'->$user, 'password'->$password);
		$where = array(
                'user_name' => $user,
                'password' => $pass,
            );
		if($this->users_model->check_exists($where))
		{
			return true;
		}
		else
		{
			$this->form_validation->set_message(__FUNCTION__,'Không đăng nhập thành công');
			return false;
		}
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */