<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *Model class to handle ajax
 */
class AjaxModels extends CI_Model {

	/**
	 *Function to update the password
	 *@param array $credentials
	 *@return bool
	 */
	public function changePassword($credentials)
	{
		$this->db->where('email_id',$credentials['email_id']);

		if($this->db->update('login',$credentials)){
			return true;
		}else{
			return false;
		}
	}
}
