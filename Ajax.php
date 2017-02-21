<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *Controller class to handle ajax
 */
class Ajax extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *@param void
	 *@return void
	 */
	public function index()
	{
		$this->load->view("passwordajax");
	}

	/** 
	 *This function call from AJAX
	 *@param void
	 *@return void
	 */
	public function updateDatas() 
	{
		$email_id = $this->input->post('email_id');
		
		$credentials = array(
			'email_id' => $this->input->post('email_id'),
			'password'=>$this->input->post('pwd')
		);

		$this->load->model('AjaxModels');

		if($this->AjaxModels->changePassword($credentials)){			
   			$message="<p style='color:green;'>Thank you. Password has been successfully changed</p>";
			echo $message;				
		}			
	}
}