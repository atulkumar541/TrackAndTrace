<?php

/**
 * 
 */
class Company_model extends CI_Model
{
	
	public function login($email, $password)
	{
		//$this->db->where('user_status', 'active');
		$this->db->where('user_email', $email);
		$this->db->where('user_password', $password);

		$query = $this->db->get('company_user');
		if ($query->num_rows()==1) 
		{
			return $query->row();
		}
		return false;

	}
	public function register_com($data)
	{
		$this->db->insert('company',$data);
		return $this->db->insert_id();
	}
	function select()
	{
	  $this->db->order_by('Reference_id', 'DESC');
	  $query = $this->db->get('reference_master');
	  return $query;
	}
	
	 function insert($data)
	{
	//	$this->db->insert_batch('reference_master',$data);
		$this->db->set('reference_master',$data);
	  	$this->db->insert_batch('reference_master',$data);
	}

	public function add_manual($adddata)
	{
		$this->db->insert('reference_master',$adddata);
		return $this->db->insert_id();
	}
	public function select_refrence()
	{
		$query = $this->db->get('reference_master');
		return $query->result();
	}
	public function create_refrence($userdata)
	{	$this->db->insert('reference_milestone',$userdata);
		return $this->db->insert_id();
	}
	public function listofreference()
	{	
		return $delivery = $this->db->get('reference_master')->result_array();
	}
	public function managereference()
	{	
		return $manage = $this->db->get('reference_master')->result_array();
	}
	public function getdelivery($Reference_id)
	{
		$this->db->where('Reference_id',$Reference_id);
		return $this->db->get('reference_master')->row_array();
	}
	public function update_refrence($Reference_id,$formArray)
	{
		$this->db->where('Reference_id',$Reference_id);
		$this->db->update('reference_master',$formArray);
	}
	public function delete_ref($Reference_id)
	{
		$this->db->where('Reference_id',$Reference_id);
		$this->db->delete('reference_master');
	}
}

?>