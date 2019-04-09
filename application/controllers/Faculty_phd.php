<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Faculty_phd extends CI_Controller{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('Faculty_phd_model');
        
    } 

    /*
     * Listing of faculty_phd
     */
    function index()
    {
        $data['faculty_phd'] = $this->Faculty_phd_model->get_all_faculty_phd();
        $data['heading'] = 'Faculty Phd';
        $data['_view'] = 'faculty_phd/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new faculty_phd
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'emp_id' => $this->input->post('emp_id'),
				'specialisation' => $this->input->post('specialisation'),
				'year' => $this->input->post('year'),
				'university_name' => $this->input->post('university_name'),
				'college' => $this->input->post('college'),
            );
            
            $faculty_phd_id = $this->Faculty_phd_model->add_faculty_phd($params);
            //redirect('faculty_phd/index');
            if(isset($_SESSION['start-adding']))
            {
                $this->session->set_flashdata('success','Data Stored. Go to next page');
                redirect('faculty_phd/add');
            }
            else 
            {
                redirect('faculty_phd/index');
            }
        }
        else
        {
			$this->load->model('Personal_info_model');
			$data['all_personal_info'] = $this->Personal_info_model->get_all_personal_info();
            $data['heading'] = 'Faculty Phd';
            $data['_view'] = 'faculty_phd/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a faculty_phd
     */
    function edit($id)
    {   
        // check if the faculty_phd exists before trying to edit it
        $data['faculty_phd'] = $this->Faculty_phd_model->get_faculty_phd($id);
        
        if(isset($data['faculty_phd']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'emp_id' => $this->input->post('emp_id'),
					'specialisation' => $this->input->post('specialisation'),
					'year' => $this->input->post('year'),
					'university_name' => $this->input->post('university_name'),
					'college' => $this->input->post('college'),
                );

                $this->Faculty_phd_model->update_faculty_phd($id,$params);            
                redirect('faculty_phd/index');
            }
            else
            {
				$this->load->model('Personal_info_model');
				$data['all_personal_info'] = $this->Personal_info_model->get_all_personal_info();

                $data['_view'] = 'faculty_phd/edit';
                $data['heading'] = 'Faculty Phd';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The faculty_phd you are trying to edit does not exist.');
    } 

    /*
     * Deleting faculty_phd
     */
    function remove($id)
    {
        $faculty_phd = $this->Faculty_phd_model->get_faculty_phd($id);

        // check if the faculty_phd exists before trying to delete it
        if(isset($faculty_phd['id']))
        {
            $this->Faculty_phd_model->delete_faculty_phd($id);
            redirect('faculty_phd/index');
        }
        else
            show_error('The faculty_phd you are trying to delete does not exist.');
    }
    
}