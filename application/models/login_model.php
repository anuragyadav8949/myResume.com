<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model{
	public function __construct()
	{
		parent:: __construct();

	}
	public function login_user($email,$pass)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('email',$email);
		$this->db->where('password',$pass);

		if ($query=$this->db->get()) 
		{
			return $query->row_array();
		}else {
			return false;
		}
	}

	public function user_add($usrData)
	{
		
		$this->db->insert('user',$usrData);
		$usr_id = $this->db->insert_id();
		return $usr_id;
	}
}