<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Csv_import extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Company_model');
		$this->load->library('excel');
	}

	function index()
	{
		$this->load->view('company/include/dash_header');
		$this->load->view('company/include/dash_sidebar');
		$this->load->view('company/import_excel');
		$this->load->view('company/include/dash_footer');
	}
	
	/*function fetch()
	{
		$data = $this->Company_model->select();
		$output = '
		<h3 align="center">Total Data - '.$data->num_rows().'</h3>
		<table class="table table-striped table-bordered">
			<tr>
				<th>First name</th>
				<th>last name</th>
				<th>phone</th>
				<th>email</th>
				
			</tr>
		';
		foreach($data->result() as $row)
		{
			$output .= '
			<tr>
				<td>'.$row->first_name.'</td>
				<td>'.$row->last_name.'</td>
				<td>'.$row->phone.'</td>
				<td>'.$row->email.'</td>
				
			</tr>
			';
		}
		$output .= '</table>';
		echo $output;
	}*/

	function fetch()
	{
		$data = $this->Company_model->select();
		$output = '
		<h3 align="center">Total Data - '.$data->num_rows().'</h3>
		<table class="table table-striped table-bordered table-responsive">
			<tr>
				<th>Reference_id</th>
		        <th>Booking_number</th>
		        <th>Shipping_bill_number</th>
		        <th>Menifest_HBL_number</th>
		        <th>HBL_number</th>
		        <th>Container_number</th>
		        <th>Shipping_invoice_number</th>
		        <th>MAWB_number</th>
		        <th>HAWB_number</th>
		        <th>OBL_number</th>
		        <th>OBL_date</th>
		        <th>Packages</th>
		        <th>Weight</th>
		        <th>Volume</th>
		        <th>Origin</th>
		        <th>Final_Destination</th>
		        <th>BL_Type</th>
		        <th>Shipment_status</th>
		        <th>Internal_Package</th>
		        <th>External_Package</th>
		        <th>DO_number</th>
		        <th>DO_Order_date</th>
		        <th>IGM_number</th>
		        <th>IGM_date</th>
		        <th>Local_IGM_number</th>
		        <th>Local_IGM_date</th>
			</tr>
		';
		foreach($data->result() as $row)
		{
			$output .= '
			<tr>
				<td>'.$row->Reference_id.'</td>
				<td>'.$row->Booking_number.'</td>
				<td>'.$row->Shipping_bill_number.'</td>
				<td>'.$row->Menifest_HBL_number.'</td>
				<td>'.$row->HBL_number.'</td>
				<td>'.$row->Container_number.'</td>
				<td>'.$row->Shipping_invoice_number.'</td>
				<td>'.$row->MAWB_number.'</td>
				<td>'.$row->HAWB_number.'</td>
				<td>'.$row->OBL_number.'</td>
				<td>'.$row->OBL_date.'</td>
				<td>'.$row->Packages.'</td>
				<td>'.$row->Weight.'</td>
				<td>'.$row->Volume.'</td>
				<td>'.$row->Origin.'</td>
				<td>'.$row->Final_Destination.'</td>
				<td>'.$row->BL_Type.'</td>
				<td>'.$row->Shipment_status.'</td>
				<td>'.$row->Internal_Package.'</td>
				<td>'.$row->External_Package.'</td>
				<td>'.$row->DO_number.'</td>
				<td>'.$row->DO_Order_date.'</td>
				<td>'.$row->IGM_number.'</td>
				<td>'.$row->IGM_date.'</td>
				<td>'.$row->Local_IGM_number.'</td>
				<td>'.$row->Local_IGM_date.'</td>
			</tr>
			';
		}
		$output .= '</table>';
		echo $output;
	}
	/*function import()
	{
		if(isset($_FILES["file"]["name"]))
		{
			$path = $_FILES["file"]["tmp_name"];
			$object = PHPExcel_IOFactory::load($path);
			foreach($object->getWorksheetIterator() as $worksheet)
			{
				$highestRow = $worksheet->getHighestRow();
				$highestColumn = $worksheet->getHighestColumn();
				for($row=2; $row<=$highestRow; $row++)
				{
					$Reference_id = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
					$Booking_number = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$Shipping_bill_number = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
					$Menifest_HBL_number = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
					$HBL_number = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
					$Container_number = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
					$Shipping_invoice_number = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
					$MAWB_number = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
					$HAWB_number = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
					$OBL_number = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
					$OBL_date = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
					$Packages = $worksheet->getCellByColumnAndRow(11, $row)->getValue();
					$Weight = $worksheet->getCellByColumnAndRow(12, $row)->getValue();
					$Volume = $worksheet->getCellByColumnAndRow(13, $row)->getValue();
					$Origin = $worksheet->getCellByColumnAndRow(14, $row)->getValue();
					$Final_Destination = $worksheet->getCellByColumnAndRow(15, $row)->getValue();
					$BL_Type = $worksheet->getCellByColumnAndRow(16, $row)->getValue();
					$Shipment_status = $worksheet->getCellByColumnAndRow(17, $row)->getValue();
					$Internal_Package = $worksheet->getCellByColumnAndRow(18, $row)->getValue();
					$External_Package = $worksheet->getCellByColumnAndRow(19, $row)->getValue();
					$DO_number = $worksheet->getCellByColumnAndRow(20, $row)->getValue();
					$DO_Order_date = $worksheet->getCellByColumnAndRow(21, $row)->getValue();
					$IGM_number = $worksheet->getCellByColumnAndRow(22, $row)->getValue();
					$IGM_date = $worksheet->getCellByColumnAndRow(23, $row)->getValue();
					$Local_IGM_number = $worksheet->getCellByColumnAndRow(24, $row)->getValue();
					$Local_IGM_date = $worksheet->getCellByColumnAndRow(25, $row)->getValue();
					$company_id = $worksheet->getCellByColumnAndRow(26, $row)->getValue();

					/*$first_name = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
					$last_name = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$phone = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
					$email = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
					//$country = $worksheet->getCellByColumnAndRow(4, $row)->getValue();

					$data[] = array(
						'Reference_id'				=>	$Reference_id,
						'Booking_number'			=>	$Booking_number,
						'Shipping_bill_number'		=>	$Shipping_bill_number,
						'Menifest_HBL_number'		=>	$Menifest_HBL_number,
						'HBL_number'				=>	$HBL_number,
						'Container_number'			=>	$Container_number,
						'Shipping_invoice_number'	=>	$Shipping_invoice_number,
						'MAWB_number'				=>	$MAWB_number,
						'HAWB_number'				=>	$HAWB_number,
						'OBL_number'				=>	$OBL_number,
						'OBL_date'					=>	$OBL_date,
						'Packages'					=>	$Packages,
						'Weight'					=>	$Weight,
						'Volume'					=>	$Volume,
						'Origin'					=>	$Origin,
						'Final_Destination'			=>	$Final_Destination,
						'BL_Type'					=>	$BL_Type,
						'Shipment_status'			=>	$Shipment_status,
						'Internal_Package'			=>	$Internal_Package,
						'External_Package'			=>	$External_Package,
						'DO_number'					=>	$DO_number,
						'DO_Order_date'				=>	$DO_Order_date,
						'IGM_number'				=>	$IGM_number,
						'IGM_date'					=>	$IGM_date,
						'Local_IGM_number'			=>	$Local_IGM_number,
						'Local_IGM_date'			=>	$Local_IGM_date,
						'company_id'				=>	$company_id,						
					);
				}
			}
			$this->Company_model->insert($data);
			echo 'Data Imported successfully';
		}	
	}*/
	function import()
	{
		if(isset($_FILES["file"]["name"]))
		{
			$path = $_FILES["file"]["tmp_name"];
			$object = PHPExcel_IOFactory::load($path);
			foreach($object->getWorksheetIterator() as $worksheet)
			{
				$highestRow = $worksheet->getHighestRow();
				$highestColumn = $worksheet->getHighestColumn();
				for($row=2; $row<=$highestRow; $row++)
				{
					$first_name = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
					$last_name = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$phone = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
					$email = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
					//$country = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
					$data[] = array(
						'first_name'		=>	$first_name,
						'last_name'			=>	$last_name,
						'phone'				=>	$phone,
						'email'				=>	$email,
						
					);
				}
			}
			$this->Company_model->insert($data);
			echo 'Data Imported successfully';
		}	
	}
}

?>