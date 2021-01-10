<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Admindash extends CI_controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Admin_model');

		$this->logged_in();

	}
	private function logged_in(){
		if(! $this->session->userdata('authenticate'))
		{
			redirect('Adminlogin/login');
		}
	}
	public function index() 
	{
		$data['title'] = "Dashboard";
		$this->load->view('admin/include/dash_header');
		$this->load->view('admin/include/dash_sidebar');
		$this->load->view('admin/Dashboard');
		$this->load->view('admin/include/dash_footer');
	}
	public function create_company()
	{
		$data['title'] = "Create_company";
		$this->form_validation->set_rules('company_name','Company Name','required');
		$this->form_validation->set_rules('company_email','Company Email','required|is_unique[company.company_email]|valid_email');
		$this->form_validation->set_rules('company_cont','Company Contact','required|exact_length[10]');
		$this->form_validation->set_error_delimiters('<div class="error">','</div>');

		if ($this->form_validation->run()==false) 
		{
			$this->load->view('admin/include/dash_header',$data);
			$this->load->view('admin/include/dash_sidebar',$data);
			$this->load->view('admin/create_company',$data);
			$this->load->view('admin/include/dash_footer',$data);
		}
		else
		{
			$userdata = array(
			'company_code'=>$this->input->post('company_code',TRUE),	
			'company_name'=>$this->input->post('company_name',TRUE),
			'company_email'=>$this->input->post('company_email',TRUE),
			'company_cont'=>$this->input->post('company_cont',TRUE),
			'company_addr'=>$this->input->post('company_addr',TRUE),
			'company_city'=>$this->input->post('company_city',TRUE),
			'company_state'=>$this->input->post('company_state',TRUE),
			'company_type'=>$this->input->post('company_type',TRUE),
			'created_at'=>date('Y-m-d H:i:s',time()),
			);
			
			$this->Admin_model->create_regi($userdata);

			$this->session->set_flashdata('message','Company Registration Sucessfully..!!');
			redirect('Admindash/create_company');

		}
	}
	public function list_company()
	{
		$company = $this->Admin_model->listofcompany();
		$data = array();
		$data['company'] = $company;
		$this->load->view('admin/include/dash_header');
		$this->load->view('admin/include/dash_sidebar');
		$this->load->view('admin/listofcompany',$data);
		$this->load->view('admin/include/dash_footer');
	}
	public function edit_company($company_id)
	{
		$company = $this->Admin_model->getcompany($company_id);
		$data = array();
		$data['company'] = $company;

		$this->form_validation->set_rules('company_name','Company Name','required');
		$this->form_validation->set_rules('company_email','Company Email','required|valid_email');
		$this->form_validation->set_rules('company_cont','Company Contact','required|exact_length[10]');

		$this->form_validation->set_error_delimiters('<div class="error">','</div>');
		if ($this->form_validation->run() == false) 
		{
			$this->load->view('admin/include/dash_header');
			$this->load->view('admin/include/dash_sidebar');
			$this->load->view('admin/edit_company',$data);
			$this->load->view('admin/include/dash_footer');			
		}
		else
		{
			//update company Record
			$formArray = array();
			$formArray['company_name'] = $this->input->post('company_name');
			$formArray['company_email'] = $this->input->post('company_email');
			$formArray['company_cont'] = $this->input->post('company_cont');
			$formArray['company_addr'] = $this->input->post('company_addr');
			$formArray['company_city'] = $this->input->post('company_city');
			$formArray['company_state'] = $this->input->post('company_state');
			$formArray['company_type'] = $this->input->post('company_type');
			$formArray['update_at'] = date('Y-m-d H:i:s',time());
			$this->Admin_model->updatecompany($company_id,$formArray);
			$this->session->set_flashdata('success','Record updated successfully');
			redirect('Admindash/list_company');
		}	
	
	}
	public function create_user()
	{
		//this->load->model('Admindash_model');
		$data['sel_company'] = $this->Admin_model->select_company();

		$this->form_validation->set_rules('selctcompany','Select Company','required');
		$this->form_validation->set_rules('user_name','User name','required');
		$this->form_validation->set_rules('user_email','User E-mail','required|valid_email');

		$this->form_validation->set_error_delimiters('<div class="error">','</div>');
		if ($this->form_validation->run()==false) 
		{
			$this->load->view('admin/include/dash_header', $data);
			$this->load->view('admin/include/dash_sidebar', $data);
			$this->load->view('admin/Create_company_user', $data);
			$this->load->view('admin/include/dash_footer', $data);
		}
		else
		{
			$userdata = array(
			'company_id'=>$this->input->post('selctcompany',TRUE),	
			'user_name'=>$this->input->post('user_name',TRUE),
			'user_email'=>$this->input->post('user_email',TRUE),
			'user_password' => md5('12345'),
			'status' => 1,
			'created_at'=>date('Y-m-d H:i:s',time()),
			);
			
			$this->Admin_model->create_user($userdata);

			$this->session->set_flashdata('message','Company User Created Sucessfully..!!');
			redirect('Admindash/create_user');
		}

		
	}
	public function list_user()
	{
		$user = $this->Admin_model->listofuser();
		$data = array();
		$data['user'] = $user;
		$this->load->view('admin/include/dash_header');
		$this->load->view('admin/include/dash_sidebar');
		$this->load->view('admin/listofuser',$data);
		$this->load->view('admin/include/dash_footer');
	}
	public function edit_user($userId)
	{
		$user = $this->Admin_model->getuser($userId);
		$data = array();
		$data['user'] = $user;		

		//$this->form_validation->set_rules('selctcompany','Select Company','required');
		$this->form_validation->set_rules('user_name','User name','required');
		$this->form_validation->set_rules('user_email','User E-mail','required|valid_email');

		$this->form_validation->set_error_delimiters('<div class="error">','</div>');
		if ($this->form_validation->run()==false) 
		{

			$this->load->view('admin/include/dash_header');
			$this->load->view('admin/include/dash_sidebar');
			$this->load->view('admin/edit_user',$data);
			$this->load->view('admin/include/dash_footer');
		}
		else
		{
			//update company  user Record
			$formArray = array();
			$formArray['user_name'] = $this->input->post('user_name');
			$formArray['user_email'] = $this->input->post('user_email');
			$formArray['update_at'] = date('Y-m-d H:i:s',time());
			$this->Admin_model->updateuser($userId,$formArray);
			$this->session->set_flashdata('success','Record updated successfully');
			redirect('Admindash/list_user');
		}

	}
	public function update_status()
	{
		if (isset($_REQUEST['sval'])) 
		{
			$up_status = $this->Admin_model->update_status();
			if ($up_status>0) 
			{
				$this->session->set_flashdata('success','Status updated successfully');	
				//$this->session->set_flashdata('msg_class','alert-success');
			}
			else
			{
				$this->session->set_flashdata('failed','Status updated unsuccessfully');	
				//$this->session->set_flashdata('msg_class','alert-danger');
			}
			redirect('Admindash/list_user');
		}
	}
}
?>