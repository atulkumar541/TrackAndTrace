<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Companylogin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Company_model');
		//$this->load->model('Company_model');

	}
	public function register()
	{
		$data['title'] = "Registration of Company";
		$this->form_validation->set_rules('company_name','Company Name','required');
		$this->form_validation->set_rules('company_email','Company Email','required|is_unique[company.company_email]|valid_email');
		$this->form_validation->set_rules('company_cont','Company Contact','required|exact_length[10]');

		$this->form_validation->set_error_delimiters('<div class="error">','</div>');

		if ($this->form_validation->run()==false) 
		{
			$this->load->view('company/registration');	
		}
		else
		{
			$data = array(
			'company_code'=>$this->input->post('company_code',TRUE),	
			'company_name'=>$this->input->post('company_name',TRUE),
			'company_email'=>$this->input->post('company_email',TRUE),
			'company_cont'=>$this->input->post('company_cont',TRUE),
			'company_type'=>$this->input->post('company_type',TRUE),
			'created_at'=>date('Y-m-d H:i:s',time()),
			);			
			$this->Company_model->register_com($data);

			$this->session->set_flashdata('message','Company Registration Sucessfully..!!');
			redirect('companylogin/successfully');

		}

	}
	public function successfully()
	{
		$this->load->view('company/successfully');
	}
	/*public function register()
	{
		$this->load->view('company/registration');	
	}*/
	public function login()
	{
		if($this->session->userdata('authenticate'))
		{
			redirect('companydash');
		}
		$data['title'] ="Company Login";
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('password','Password','required');

		$this->form_validation->set_error_delimiters('<div class="error">','</div>');
		if ($this->form_validation->run()==false) 
		{
			$this->load->view('company/login',$data);
		}
		else
		{
			$email = $this->security->xss_clean($this->input->post('email'));
			$password = $this->security->xss_clean(md5($this->input->post('password')));
			//$this->load->model(Company_model);
			$user = $this->Company_model->login($email,$password);
			if ($user) 
			{
				$userdata = array(
					'id' => $user->id,
					'name' => $user->name,
					'authenticate'=>TRUE
				);
				$this->session->set_userdata($userdata);
				redirect('companydash/index');
			}
			else
			{
				$this->session->set_flashdata('message','Invalid Email & Password');
				redirect('companylogin/login');
			}		
		}
	}
		public function logout()
		{
			$this->session->sess_destroy();
			redirect('Companylogin/login');
		}
}

?>