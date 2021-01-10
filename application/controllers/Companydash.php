<?php
class Companydash extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Company_model');
		$this->logged_in();

	}

	private function logged_in()
	{
		if(! $this->session->userdata('authenticate'))
		{			
			redirect('companylogin/login');
		}
	}
	public function index()
	{
		//$data['title'] = "Company Dashboard";
		$this->load->view('company/include/dash_header');
		$this->load->view('company/include/dash_sidebar');
		$this->load->view('company/companydashboard');
		$this->load->view('company/include/dash_footer');
		

	}
	public function add_delivery()
	{
		//$title = "Add Delivery";
		$this->load->view('company/include/dash_header');
		$this->load->view('company/include/dash_sidebar');
		$this->load->view('company/adddeliverymain');
		$this->load->view('company/include/dash_footer');
	}
	public function add_manual()
	{
		//$title = "Add Delivery";
		$this->form_validation->set_rules('HBL_number','HBL Number','trim|numeric|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('Booking_number','Booking Number','trim|numeric|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('Container_number','Container Number','trim|numeric|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('Shipping_bill_number','Shipping Bill Number','trim|numeric|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('Shipping_invoice_number','Shipping Invoice Number','trim|numeric|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('MAWB_number','MAWB Number','trim|numeric|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('HAWB_number','HAWB Number','trim|numeric|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('OBL_number','OBL Number','trim|required|numeric');
		$this->form_validation->set_rules('Menifest_HBL_number','Menifest HBL Number','trim|numeric|min_length[5]|max_length[12]');

		$this->form_validation->set_rules('Packages','Packages','required|numeric');
		$this->form_validation->set_rules('Weight','Weight','required');
		$this->form_validation->set_rules('Volume','Volume','required');
		$this->form_validation->set_rules('Origin','Origin','required');
		$this->form_validation->set_rules('Final_Destination','Final Destination','required');
		//$this->form_validation->set_rules('Local_IGM_date','Local_IGM_date',array('regex_match[/^((0[12]|[0-9][0-9]|3[01])[- \/.](0[1-9]|1[012])[- \/.](19|20)\d\d)$/]'));
		$this->form_validation->set_rules('BL_Type','BL Type','trim');
		$this->form_validation->set_rules('Shipment_status','Shipment Status','required');
		$this->form_validation->set_rules('Internal_Package','Internal Package','numeric');
		$this->form_validation->set_rules('External_Package','External Package','numeric');
		$this->form_validation->set_rules('DO_number','DO Number','numeric');
		$this->form_validation->set_rules('IGM_number','IGM Number','numeric');
		$this->form_validation->set_rules('Local_IGM_number','Local IGM Number','numeric');
		
		$this->form_validation->set_error_delimiters('<div class="error">','</div>');

		if ($this->form_validation->run()==false) 
		{
			$this->load->view('company/include/dash_header');
			$this->load->view('company/include/dash_sidebar');
			$this->load->view('company/addmanualdata');
			$this->load->view('company/include/dash_footer');
		}
		else
		{
			$adddata = array(
			'Booking_number'=>$this->input->post('Booking_number',TRUE),	
			'Shipping_bill_number'=>$this->input->post('Shipping_bill_number',TRUE),
			'Menifest_HBL_number'=>$this->input->post('Menifest_HBL_number',TRUE),
			'HBL_number'=>$this->input->post('HBL_number',TRUE),
			'Container_number'=>$this->input->post('Container_number',TRUE),
			'Shipping_invoice_number'=>$this->input->post('Shipping_invoice_number',TRUE),
			'MAWB_number'=>$this->input->post('MAWB_number',TRUE),
			'HAWB_number'=>$this->input->post('HAWB_number',TRUE),
			'OBL_number'=>$this->input->post('OBL_number',TRUE),
			'OBL_date'=>$this->input->post('OBL_date',TRUE),
			'Packages'=>$this->input->post('Packages',TRUE),
			'Weight'=>$this->input->post('Weight',TRUE),
			'Volume'=>$this->input->post('Volume',TRUE),
			'Origin'=>$this->input->post('Origin',TRUE),
			'Final_Destination'=>$this->input->post('Final_Destination',TRUE),
			'BL_Type'=>$this->input->post('BL_Type',TRUE),
			'Shipment_status'=>$this->input->post('Shipment_status',TRUE),
			'Internal_Package'=>$this->input->post('Internal_Package',TRUE),
			'External_Package'=>$this->input->post('External_Package',TRUE),
			'DO_number'=>$this->input->post('DO_number',TRUE),
			'DO_Order_date'=>$this->input->post('DO_Order_date',TRUE),
			'IGM_number'=>$this->input->post('IGM_number',TRUE),
			'IGM_date'=>$this->input->post('IGM_date',TRUE),
			'Local_IGM_number'=>$this->input->post('Local_IGM_number',TRUE),
			'Local_IGM_date'=>$this->input->post('Local_IGM_date',TRUE),
			'company_id'=>1,
			'added_at'=>date('Y-m-d H:i:s',time()),
			);

			$this->Company_model->add_manual($adddata);

			$this->session->set_flashdata('message','Details Added Sucessfully..!!');
			redirect('Companydash/add_manual');
		}
	}
	public function add_milestone()
	{
		//this->load->model('Admindash_model');
		//$data['sel_refrence'] = $this->Company_model->select_refrence();

		$this->form_validation->set_rules('Milestone','Milestone','required');
		$this->form_validation->set_rules('Milestone_date','Milestone date','required');
		//$this->form_validation->set_rules('select_refrence','select refrence','required');

		$this->form_validation->set_error_delimiters('<div class="error">','</div>');
		if ($this->form_validation->run()==false) 
		{
			$this->load->view('company/include/dash_header');
			$this->load->view('company/include/dash_sidebar');
			$this->load->view('company/addmilestone');
			$this->load->view('company/include/dash_footer');
		}
		else
		{
			$Reference_id = $this->input->get('Reference_id', TRUE);
            echo $Reference_id; 

			$userdata = array(
				//$Reference_id = $this->input->get('Reference_id', TRUE),
			'Milestone'=>$this->input->post('Milestone',TRUE),	
			'Milestone_date'=>$this->input->post('Milestone_date',TRUE),
			'Reference_id'=>$this->input->post('Reference_id',TRUE),
			//'Reference_id'=>$this->input->post('Reference_id', TRUE),
			);
			
			$this->Company_model->create_refrence($userdata);

			$this->session->set_flashdata('message','Milestone Added Sucessfully..!!');
			redirect('Companydash/list_delivery');
		}	
	}
	public function list_delivery()
	{	
		$delivery = $this->Company_model->listofreference();
		$data = array();
		$data['delivery'] = $delivery;
		$this->load->view('company/include/dash_header');
		$this->load->view('company/include/dash_sidebar');
		$this->load->view('company/listofdelivery',$data);
		$this->load->view('company/include/dash_footer');
	}
	public function manage_delivery()
	{
		$manage = $this->Company_model->managereference();
		$data = array();
		$data['manage'] = $manage;
		$this->load->view('company/include/dash_header');
		$this->load->view('company/include/dash_sidebar');
		$this->load->view('company/manage_delivery',$data);
		$this->load->view('company/include/dash_footer');
	}
	public function edit_delivery($Reference_id)
	{
		$refrence = $this->Company_model->getdelivery($Reference_id);
		$data = array();
		$data['refrence'] = $refrence;
		$this->form_validation->set_rules('HBL_number','HBL Number','trim|numeric|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('Booking_number','Booking Number','trim|numeric|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('Container_number','Container Number','trim|numeric|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('Shipping_bill_number','Shipping Bill Number','trim|numeric|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('Shipping_invoice_number','Shipping Invoice Number','trim|numeric|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('MAWB_number','MAWB Number','trim|numeric|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('HAWB_number','HAWB Number','trim|numeric|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('OBL_number','OBL Number','trim|required|numeric');
		$this->form_validation->set_rules('Menifest_HBL_number','Menifest HBL Number','trim|numeric|min_length[5]|max_length[12]');

		$this->form_validation->set_rules('Packages','Packages','required|numeric');
		$this->form_validation->set_rules('Weight','Weight','required');
		$this->form_validation->set_rules('Volume','Volume','required');
		$this->form_validation->set_rules('Origin','Origin','required');
		$this->form_validation->set_rules('Final_Destination','Final Destination','required');
		$this->form_validation->set_rules('BL_Type','BL Type','trim');
		$this->form_validation->set_rules('Shipment_status','Shipment Status','required');
		$this->form_validation->set_rules('Internal_Package','Internal Package','numeric');
		$this->form_validation->set_rules('External_Package','External Package','numeric');
		$this->form_validation->set_rules('DO_number','DO Number','numeric');
		$this->form_validation->set_rules('IGM_number','IGM Number','numeric');
		$this->form_validation->set_rules('Local_IGM_number','Local IGM Number','numeric');
		
		$this->form_validation->set_error_delimiters('<div class="error">','</div>');

		if ($this->form_validation->run() == FALSE) 
		{
			$this->load->view('company/include/dash_header');
			$this->load->view('company/include/dash_sidebar');
			$this->load->view('company/edit_delivery',$data);
			$this->load->view('company/include/dash_footer');	
		}
		else
		{
			$formArray = array();
			$formArray['Booking_number'] = $this->input->post('Booking_number');
			$formArray['Shipping_bill_number'] = $this->input->post('Shipping_bill_number');
			$formArray['Menifest_HBL_number'] = $this->input->post('Menifest_HBL_number');
			$formArray['HBL_number'] = $this->input->post('HBL_number');
			$formArray['Container_number'] = $this->input->post('Container_number');
			$formArray['Shipping_invoice_number'] = $this->input->post('Shipping_invoice_number');
			$formArray['MAWB_number'] = $this->input->post('MAWB_number');
			$formArray['HAWB_number'] = $this->input->post('HAWB_number');
			$formArray['OBL_number'] = $this->input->post('OBL_number');
			$formArray['OBL_date'] = $this->input->post('OBL_date');
			$formArray['Packages'] = $this->input->post('Packages');
			$formArray['Weight'] = $this->input->post('Weight');
			$formArray['Volume'] = $this->input->post('Volume');
			$formArray['Origin'] = $this->input->post('Origin');
			$formArray['Final_Destination'] = $this->input->post('Final_Destination');
			$formArray['BL_Type'] = $this->input->post('BL_Type');
			$formArray['Shipment_status'] = $this->input->post('Shipment_status');
			$formArray['Internal_Package'] = $this->input->post('Internal_Package');
			$formArray['External_Package'] = $this->input->post('External_Package');
			$formArray['DO_number'] = $this->input->post('DO_number');
			$formArray['DO_Order_date'] = $this->input->post('DO_Order_date');
			$formArray['IGM_number'] = $this->input->post('IGM_number');
			$formArray['IGM_date'] = $this->input->post('IGM_date');
			$formArray['Local_IGM_number'] = $this->input->post('Local_IGM_number');
			$formArray['Local_IGM_date'] = $this->input->post('Local_IGM_date');
			//$formArray['update_at'] = date('Y-m-d H:i:s',time());
			$this->Company_model->update_refrence($Reference_id,$formArray);
			$this->session->set_flashdata('success','Record updated successfully');
			redirect('Companydash/manage_delivery');

		}		
	}
	function delete_delivery($Reference_id)
	{
		$refrence = $this->Company_model->getdelivery($Reference_id);
		if (empty($refrence)) 
		{
			$this->session->set_flashdata('failure','Record Not Found In Database');
			redirect('Companydash/manage_delivery');
		}
		$this->Company_model->delete_ref($Reference_id);
		$this->session->set_flashdata('Success','Record Deleted successfully');
		redirect('Companydash/manage_delivery');
	}	
}
?>