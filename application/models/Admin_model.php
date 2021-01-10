<?php

/**
 * 
 */
class Admin_model extends CI_Model
{
	
	public function login($email, $password)
	{
		$this->db->where('email', $email);
		$this->db->where('password', $password);

		$query = $this->db->get('admin');
		if ($query->num_rows()==1) 
		{
			return $query->row();
		}
		return false;

	}
	public function create_regi($userdata)
	{
		$this->db->insert('company',$userdata);
		return $this->db->insert_id();
	}
	public function select_company()
	{
		$query = $this->db->get('company');
		return $query->result();
	}
	public function create_user($userdata)
	{	$this->db->insert('company_user',$userdata);
		return $this->db->insert_id();
	}
	public function listofcompany()
	{	
		return $company = $this->db->get('company')->result_array();
	}
	public function listofuser()
	{	
		return $user = $this->db->get('company_user')->result_array();
	}
	public function getcompany($company_id)
	{
		$this->db->where('company_id',$company_id);
		return $this->db->get('company')->row_array();
	}
	public function updatecompany($company_id,$formArray)
	{
		$this->db->where('company_id',$company_id);
		$this->db->update('company',$formArray);
	}
	
	public function getuser($userId)
	{
		$this->db->where('user_id',$userId);
		return $this->db->get('company_user')->row_array();
	}
	public function updateuser($userId,$formArray)
	{
		$this->db->where('user_id',$userId);
		$this->db->update('company_user',$formArray);
	}
	public function update_status()
	{
		$id = $_REQUEST['sid'];
		$saval = $_REQUEST['sval'];

		if ($saval) 
		{
			$status = 0;
		}
		else
		{
			$status = 1;
		}

		$updata = array('status'=> $status);
		$this->db->where('user_id',$id);
		$this->db->set($updata);
		return $this->db->update('company_user');
	}
}

?>