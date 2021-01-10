<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Home extends CI_controller
{
	public function index()
	{
		$this->load->view('include/header.php');
		$this->load->view('index');
		$this->load->view('include/footer.php');
	}
	public function mytrackntrace()
	{
		$this->load->view('include/header.php');
		$this->load->view('mytrackntrace');
		$this->load->view('include/footer.php');
	}
}
?>