<?php

/**
 * User Model Class
 * @access public
 * @package models
 * @Author Vijay Felix Raj C
 */
class User_model extends CI_Model {

    public $CI;
    public $table_name = 'users';

    /**
     * Constructor
     * 
     * */
    public function __construct() {
        parent::__construct();
        $this->CI = & get_instance();
    }

    /**
     * Retrieves user details after checking user login details
     * @return array data
     * @param str $param array of login details
     * @access public
     */
    public function check_user_login() {
        $table_name = $this->table_name;
        $return = [];
        $this->db->select('id, username, email,status')
                ->from($table_name)
                ->where('email=', $this->input->post('email'))
                ->where('password=', md5($this->input->post('password')))
                ->where('status=', 'Active');
        $data = $this->db->get();
        if (!empty($data)) {
            $return['data'] = $data->result();
            return $return;
        } else {
            return $return;
        }
    }
    

    /**
     * Retrieves user details by User Id
     * @param int user id
     * @return array data  
     * @access public
     */
    public function get_administrator_by_id($id) {
        $table_name = $this->administrator_table_name;
        $return = [];

        $result = $this->db->get_where($table_name, array('id' => (int) $id));
        if (!empty($result)) {
            $return = $result->result();
        }
        return $return;
    }

    /**
     * Retrieves result by field
     * @param str field
     * @param array data
     * @param int current user id
     * @return array data  
     * @access public
     */
    public function get_user_by_field_for_validation($field, $data,
            $current_user_id) {
        $table_name = $this->administrator_table_name;
        $return = [];
        $sql = 'SELECT * FROM ' . $this->db->dbprefix($table_name) . ' WHERE id <>' . $current_user_id . ' AND ' . $field . '="' . $data . '"';
        $query = $this->db->query($sql);
        $result = $query->result();
        if (!empty($result)) {
            $return = $result;
        }
        return $return;
    }

    /**
     * Inserts administrator user details     
     * @param array data     
     * @return boolean true details added successfully
     * @access public
     */
    public function add_administrator($data) {
        $table_name = $this->administrator_table_name;
        $result = $this->db->insert($table_name, $data);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Deletes administrator by Id     
     * @param int user id
     * @return boolean true details deleted successfully
     * @access public
     */
    public function delete_administrator_by_id($id) {
        $table_name = $this->administrator_table_name;
        $this->db->where('id', $id);
        $result = $this->db->delete($table_name);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Updates administrator details by Id, Array of data     
     * @param int user id
     * @param array user data
     * @return boolean true details updated successfully
     * @access public
     */
    public function update_administrator_by_id($id, $data) {
        $table_name = $this->administrator_table_name;
        $this->db->where('id', $id);
        $result = $this->db->update($table_name, $data);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }


    /**
     * Updates user details by Id
     * @param int user id     
     * @return array result
     * @access public
     */
    public function myaccount_edit($id) {
        $data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'status' => $this->input->post('status')
        );
        $this->db->where(array('id' => $id));
        $result = $this->db->update('user', $data);
        return $result;
    }

    /**
     * Retrieves user details by Id
     * @param int user id     
     * @return array result
     * @access public
     */
    public function get_user_data($id) {
        $data = $this->db->get_where('user', array('id' => $id));
        return $data->result();
    }

    /**
     * Retrivews the user details by Id
     *
     * @return array
     */
    public function getUserData($id)
    {
        $table_name = $this->table_name;
        $data = $this->db->get_where($table_name, array('id' => $id));
        $result = $data->result();
        return $result[0];
    }



    /**
     * Updates user password details by Id
     * @param int user id     
     * @return array result
     * @access public
     */
    public function update_password($id) {
        $password =  md5($this->input->post('current_password'));
        $this->db->select('password');
        $this->db->where('user_id',$id);
        $this->db->where('password',$password);
        $query = $this->db->get('user_login');
        $old_password = $query->result();
        if($old_password){ 
            $password = $this->input->post('password');
            $data = array('password' => md5($password));
            $this->db->where('user_id', $id);
            $result = $this->db->update('user_login', $data);         
            $session_data['password'] = md5($password);
            $this->session->set_userdata($session_data);
            return $result;
        }else{
            return false;
        }
    }

    /**
     * Inserts agent details using array of data
     * @param array user details
     * @return boolean true text was added successfully
     * @access public
     */
    public function add_agent($data) {
        $table_name = $this->user_table_name;
        $result = $this->db->insert($table_name, $data);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Inserts agent login details using array of data
     * @param array user details
     * @return boolean true text was added successfully
     * @access public
     */
    public function add_agent_login_details($data) {
        $table_name = $this->login_table;
        $result = $this->db->insert($table_name, $data);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Inserts clerk details using array of data
     * @param array user details
     * @return boolean true text was added successfully
     * @access public
     */
    public function add_clerk($data) {
        $table_name = $this->user_table_name;
        $result = $this->db->insert($table_name, $data);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Inserts clerk login details using array of data
     * @param array user details
     * @return boolean true text was added successfully
     * @access public
     */
    public function add_clerk_login_details($data) {
        $table_name = $this->login_table;
        $result = $this->db->insert($table_name, $data);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Inserts agent details using array of data
     * @param array user details
     * @return boolean true text was added successfully
     * @access public
     */
    public function add_agent_details($data) {
        $table_name = $this->agent_table_name;
        $result = $this->db->insert($table_name, $data);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Inserts clerk area details using array of data
     * @param array user details
     * @return boolean true text was added successfully
     * @access public
     */
    public function add_clerk_area_details($data) {
        if ($data) {
            $clerk_id = $data['clerk_id'];
            $areas = $data['clerk_area_id'];
            if ($areas) {
                foreach ($areas as $row) {
                    $rows['clerk_id'] = $clerk_id;
                    $rows['clerk_area_id'] = $row;
                    $table_name = $this->clerk_area_table_name;
                    $result = $this->db->insert($table_name, $rows);
                }
            }
        }
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Inserts clerk type details using array of data
     * @param array user details
     * @return boolean true text was added successfully
     * @access public
     */
    public function add_clerk_type_details($data) {
        $result = '';
        if ($data) {
            $clerk_id = $data['clerk_id'];
            $types = $data['clerk_type_id'];

            if ($types) {
                foreach ($types as $row) {
                    $rows['clerk_id'] = $clerk_id;
                    $rows['clerk_type_id'] = $row;
                    $table_name = $this->clerk_type_table_name;
                    $result = $this->db->insert($table_name, $rows);
                }
            }
        }
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Inserts clerk time slots details using array of data
     * @param array user details
     * @return boolean true text was added successfully
     * @access public
     */
    public function add_clerk_time_slots_details($data) {
        if ($data) {
            $clerk_id = $data['clerk_id'];
            $slots = $data['clerk_time_slots_id'];
            
            if ($slots) {
                foreach ($slots as $row) {
                    $rows['clerk_id'] = $clerk_id;
                    $rows['clerk_time_slots_id'] = $row->id;
                    $table_name = $this->clerk_time_slots_table_name;
                    $result = $this->db->insert($table_name, $rows);
                }
            }
        }
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Inserts clerk details using array of data
     * @param array user details
     * @return boolean true text was added successfully
     * @access public
     */
    public function add_clerk_details($data) {
        $table_name = $this->clerk_table_name;
        $result = $this->db->insert($table_name, $data);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }


    /**
     * Retrieves user type id by name
     * @param str name
     * @return array result
     * @access public
     */
    public function get_user_type_id($name) {
        $table_name = 'user_type';
        $data = $this->db->get_where($table_name, array('name' => $name));
        if ($data) {
            $result = $data->result();
            $result = $result[0]->id;
        } else {
            $result = '';
        }
        return $result;
    }

    /**
     * Retrieves agent types by field
     * @param str field name
     * @return array result
     * @access public
     */
    public function get_all_agent_types($field = 'name', $order_by = 'ASC') {
        $table_name = $this->agent_type_table_name;
        $this->db->select('*')
                ->from($table_name)
                ->where('status=', $this->lang->line('status_publish'))
                ->order_by($field, $order_by);
        $data = $this->db->get();
        if (!empty($data)) {
            $return['data'] = $data->result();
            return $return;
        } else {
            return $return;
        }
    }

    /**
     * Retrieves user email count by email
     * @param str email
     * @return array result
     * @access public
     */
    public function get_user_email_count($email) {
        $table_name = $this->login_table;
        $data = $this->db->get_where($table_name, array('email' => $email));
        if ($data) {
            $result = $data->num_rows();
        } else {
            $result = '';
        }
        return $result;
    }

    /**
     * Retrieves user details by email
     * @param str email
     * @return array result
     * @access public
     */
    public function get_user_details_by_email($email) {
        $table_name = $this->table_name;
        $this->db->select('UL.email,UD.first_name, UD.last_name')
                ->from($table_name)
                ->join($this->user_details_name, 'UL.user_id = UD.id', 'left')
                ->where('UL.email', $email);
        $result = $this->db->get()->result();
        if ($result) {
            $result = $result;
        } else {
            $result = '';
        }
        return $result;
    }

    /**
     * Updates user password by Email
     * @param str password
     * @param str email
     * @return array result
     * @access public
     */
    public function update_password_by_email($password, $email) {
        $data = array('password' => $password);
        $this->db->where('email', $email);
        $result = $this->db->update('user_login', $data);
        return $result;
    }

}
