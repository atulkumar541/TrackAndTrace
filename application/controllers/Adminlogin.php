<?php 

class Adminlogin extends CI_controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Admin_model');

	}
	public function login()
	{
		if($this->session->userdata('authenticate'))
		{
			redirect('Admindash');
		}
		//$this->load->view('admin/login');
		$data['title'] ="Login";
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('password','Password','required');

		$this->form_validation->set_error_delimiters('<div class="error">','</div>');
		if ($this->form_validation->run()==false) 
		{
			//$this->load->view('admin/include/header.php');	
			$this->load->view('admin/login',$data);
			//$this->load->view('admin/include/footer.php');
		}
		else
		{
			$email = $this->security->xss_clean($this->input->post('email'));
			$password = $this->security->xss_clean($this->input->post('password'));

			$user = $this->Admin_model->login($email,$password);
			if ($user) 
			{
				$userdata = array(
					'id' => $user->id,
					'name' => $user->name,
					'authenticate'=>TRUE
				);
				$this->session->set_userdata($userdata);
				redirect('Admindash');
			}
			else
			{
				$this->session->set_flashdata('message','Invalid Email & Password');
				redirect('Adminlogin/login');
			}
		}

	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Adminlogin/login');
	}
}
?>