
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *Model class to handle ajax
 */
class SearchModel extends CI_Model {
	 /**
	 *Function to search for email_id
	 *@param array $credentials
	 *@return null
	 */
	public function searchData($credentials)
	{
	$this->db->select('*');
	// var_dump($credentials);die();
	$this->db->from('login');
	$this->db->like('email_id', $credentials['email_id'], 'after');
	$query = $this->db->get(); 
	return ($query->result());
	}
}
