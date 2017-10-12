<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**------------------------------------------------------------
 * Project 	: Student Resource Center
 * Author 	: Vijay Felix Raj C
 * Date 	: 23-sep-2017	
 * Purpose 	: To controll the Staff details
 *--------------------------------------------------------------
 **/

class Staff extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * To render the view file
	 **/
	public function _example_output($output = null)
	{
		$this->template->set_layout('calendar');
		$this->template->build('staffs/staff.php',(array)$output);
	}

	/*public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}*/

	/**
	 * To run the index page
	 **/
	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('staff');
			//$crud->set_subject('Office');
			$crud->required_fields('staff_id','name','dob','gender','email','phone_no');
			$crud->columns('staff_id','name','gender','email','phone_no');
			$output = $crud->render();
			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}

	}

	
}
