<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Personal_info extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Personal_info_model');
        $this->load->model('user_model');
    } 

    /*
     * Listing of personal_info
     */
    function index()
    {
        $data['personal_info'] = $this->Personal_info_model->get_all_personal_info();
        $data['heading'] = 'Faculty Personal Info';
        $data['_view'] = 'personal_info/index';
        $this->load->view('layouts/main',$data);
    }
    function faculty_view()
    {
        $data['personal_info'] = $this->Personal_info_model->get_info_by_id( $this->session->userdata('password'));
       
      //  $data['_view'] = 'personal_info/index';
      //  $this->load->view('layouts/main',$data);
    }
    /*
     * Adding a new personal_info
     */
    function add()
    {   
        

        if(isset($_POST['add_Employee'])){
            $_SESSION['start-adding'] = TRUE ;
            redirect('personal_info/add');
        }
        
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'Name' => $this->input->post('Name'),
				'DEPT' => $this->input->post('DEPT'),
				'emp_id' => $this->input->post('emp_id'),
				'email' => $this->input->post('email'),
				'phone_no' => $this->input->post('phone_no'),
				'date_of_joining' => $this->input->post('date_of_joining'),
				'PAN' => $this->input->post('PAN'),
				'aadhaar' => $this->input->post('aadhaar'),
				'JNTU_no' => $this->input->post('JNTU_no'),
            );
            $_SESSION['emp_id']= $this->input->post('emp_id');
            $user_login=array(
      
                'username'=>$this->input->post('email'),
                'password'=>$this->input->post('emp_id'),
                'login_type'=>'Faculty',
              
                  );
                  $this->user_model->register_user($user_login);
            $personal_info_id = $this->Personal_info_model->add_personal_info($params);
            //redirect('personal_info/index');
            if(isset($_SESSION['start-adding']))
            {
                $_SESSION['empId']=$this->input->post('emp_id');
                $this->session->set_flashdata('success','Data Stored. Go to next page');
                redirect('personal_info/add');
            }
            else 
            {
                redirect('personal_info/index');
            }
        }
        else
        {            
            $data['_view'] = 'personal_info/add';
            $data['heading'] = 'Faculty Personal Info';
            $this->load->view('layouts/main',$data);
            
        }
    }  

    /*
     * Editing a personal_info
     */
    function edit($id)
    {   
        // check if the personal_info exists before trying to edit it
        
        $data['personal_info'] = $this->Personal_info_model->get_personal_info($id);
        
        if(isset($data['personal_info']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'Name' => $this->input->post('Name'),
					'DEPT' => $this->input->post('DEPT'),
					'emp_id' => $this->input->post('emp_id'),
					'email' => $this->input->post('email'),
					'phone_no' => $this->input->post('phone_no'),
					'date_of_joining' => $this->input->post('date_of_joining'),
					'PAN' => $this->input->post('PAN'),
					'aadhaar' => $this->input->post('aadhaar'),
					'JNTU_no' => $this->input->post('JNTU_no'),
                );

                $this->Personal_info_model->update_personal_info($id,$params);            
                redirect('personal_info/index');
            }
            else
            {
                $data['_view'] = 'personal_info/edit';
                $data['heading'] = 'Faculty Personal Info';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The personal_info you are trying to edit does not exist.');
    } 

    /*
     * Deleting personal_info
     */
    function remove($id)
    {
        $personal_info = $this->Personal_info_model->get_personal_info($id);

        // check if the personal_info exists before trying to delete it
        if(isset($personal_info['id']))
        {
            $this->Personal_info_model->delete_personal_info($id);
            redirect('personal_info/index');
        }
        else
            show_error('The personal_info you are trying to delete does not exist.');
    }

    
}
