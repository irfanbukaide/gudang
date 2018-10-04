<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class User extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    } 

    /*
     * Listing of user
     */
    function index()
    {
        $data['user'] = $this->User_model->get_all_user();
        
        $data['_view'] = 'user/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new user
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('usr_password','Usr Password','required');
		$this->form_validation->set_rules('usr_username','Usr Username','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'usr_privileges' => $this->input->post('usr_privileges'),
				'usr_password' => $this->input->post('usr_password'),
				'usr_username' => $this->input->post('usr_username'),
            );
            
            $user_id = $this->User_model->add_user($params);
            redirect('user/index');
        }
        else
        {            
            $data['_view'] = 'user/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a user
     */
    function edit($usr_id)
    {   
        // check if the user exists before trying to edit it
        $data['user'] = $this->User_model->get_user($usr_id);
        
        if(isset($data['user']['usr_id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('usr_password','Usr Password','required');
			$this->form_validation->set_rules('usr_username','Usr Username','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'usr_privileges' => $this->input->post('usr_privileges'),
					'usr_password' => $this->input->post('usr_password'),
					'usr_username' => $this->input->post('usr_username'),
                );

                $this->User_model->update_user($usr_id,$params);            
                redirect('user/index');
            }
            else
            {
                $data['_view'] = 'user/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The user you are trying to edit does not exist.');
    } 

    /*
     * Deleting user
     */
    function remove($usr_id)
    {
        $user = $this->User_model->get_user($usr_id);

        // check if the user exists before trying to delete it
        if(isset($user['usr_id']))
        {
            $this->User_model->delete_user($usr_id);
            redirect('user/index');
        }
        else
            show_error('The user you are trying to delete does not exist.');
    }
    
}
