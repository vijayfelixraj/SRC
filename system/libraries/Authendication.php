<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// ------------------------------------------------------------------------
/**
 * Pagination Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 */
class CI_Authendication {

    /**
     * Constructor
     *
     * @access	public
     * @param	array	initialization parameters
     */
    function __construct() {
        $this->obj = & get_instance();
    }

    /**
     * Initialize Preferences
     *
     * @access	public
     * @param	array	initialization parameters
     * @return	void
     */
    function authendicate_user() {
        if (!$this->obj->session->userdata('username')) {
            $this->obj->session->set_flashdata('warning', 'Please login to access the page');
            redirect('/', 'refresh');
        }
    }

    function authendicate_admin() {
        if (!$this->obj->session->userdata('email')) {
            $this->obj->session->set_flashdata('warning', 'Please login to access the page');
            redirect('/backend', 'refresh');
        } else {
            if ($this->obj->session->userdata('user_type') != USER_TYPE_ADMINISTRATOR && $this->obj->session->userdata('user_type') != USER_TYPE_SITE_ADMIN) {
                $this->obj->session->set_flashdata('warning', 'You are not authorized to access the page');
                redirect('/backend', 'refresh');
            }
        }
    }


    function authendicate_clerk() {
        if (!$this->obj->session->userdata('email')) {
            $this->obj->session->set_flashdata('warning', 'Please login to access the page');
            redirect('/backend', 'refresh');
        } else {
            if ($this->obj->session->userdata('user_type') != USER_TYPE_CLERK) {
                $this->obj->session->set_flashdata('warning', 'Please login to access the page');
                redirect('/clerk/signin', 'refresh');
            }
        }
    }

    /**
     * Initialize Preferences
     *
     * @access	public
     * @param	array	initialization parameters
     * @return	void
     */
    function authendicate_module($module) {
        $usermodule = $this->obj->session->userdata('user_module');
        if (isset($usermodule[$module]) != $module) {
            $this->obj->sess_expiration = 0;
            $this->obj->session->sess_create();
            $this->obj->session->unset_userdata('usr_name');
            $this->obj->session->userdata('usr_name');
            $this->obj->session->sess_destroy();
            $this->obj->session->set_flashdata('message', '<div class="warning">Permission denied to access this module!</div>');
            redirect('administrator/login');
        }
    }

    function authendicate_agent() {
        if (!$this->obj->session->userdata('email')) {
            $this->obj->session->set_flashdata('warning', 'Please login to access the page');
            redirect('/backend', 'refresh');
        } else {
            if ($this->obj->session->userdata('user_type') != USER_TYPE_AGENT) {
                $this->obj->session->set_flashdata('warning', 'Please login to access the page');
                redirect('/backend', 'refresh');
            }
        }
    }

}

// END Authedication Class

/* End of file Authedication.php */
/* Location: ./system/libraries/Authedication.php */