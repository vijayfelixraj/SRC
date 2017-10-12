<?php
/**------------------------------------------------------------
 * Project 	: Student Resource Center
 * Author 	: Vijay Felix Raj C
 * Date 	: 22-sep-2017
 * Purpose 	: To controll the login credentials
 *--------------------------------------------------------------
 **/

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	/**
	*	To load the Constructor
	**/
	function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	/**
	 * To login Credential and set the session values
	 *
	 * @return array
	 **/
	public function login()
	{
		$this->template->title($this->lang->line('login'));
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->input->post()) {
			$result = $this->user_model->check_user_login();
			$result = ($result['data']) ? $result['data'][0] :'';
			if (!empty($result)) {
				$session_data['id'] = $result->id;
				$session_data['username'] = $result->username;
				$session_data['email'] = $result->email;
				$this->session->set_userdata($session_data);
				$this->session->set_flashdata('success', $this->lang->line('login_success'));
				redirect('dashboard/', $result);
			} else {
				$this->session->set_flashdata('error', $this->lang->line('login_invalid'));
			}
		}
		$this->template->set_layout('login');
		$this->template->build('users/login');
	}

	/**
	 * To redirect to the dashboard
	 *
	 * @return view page with authendication
	 **/
	public function dashboard() {
		$this->template->title($this->lang->line('dashboard'));
		$this->authendication->authendicate_user();
		$this->template->set_layout('main');
		$this->template->build('dashboard');
	}

	/**
	 * To log out Credential and unset the session values
	 *
	 * @return session message
	 **/
	public function logout()
	{
		$this->sess_expiration = 0;
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('username');
		$this->session->set_flashdata('success', 'Logout successfully!');
		//redirect('login');
		$this->template->set_layout('login');
		$this->template->build('users/login');
	}

	/**
	 * To show the profile page
	 *
	 * @return array
	 */
	public function updateProfile()
	{
		$id = $this->session->userdata('id');
		//echo '<pre>';print_r($sessionData);exit;
		if ($id) {
			$dbData = $this->user_model->getUserData($id);
			$data['profile_pic'] = $dbData->profile_pic;
			$data['id'] = $dbData->id;
			$data['username'] = $dbData->username;
			$data['address'] = $dbData->address;
			$data['phone'] = $dbData->phone;
			$data['country'] = $dbData->country;
			$data['city'] = $dbData->city;
			$data['postcode'] = $dbData->postcode;
			$data['email'] = $dbData->email;
			$data['status'] = $dbData->status;
		}

		$this->template->set_layout('main');
		$this->template->build('users/update-profile', $data);
	}

	/**
	 * To update the Profile of Admin
	 *
	 * @return @ture
	 */
	public function profileUpdate($id)
	{ die('in');
		# code...
	}
}
