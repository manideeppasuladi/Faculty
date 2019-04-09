<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Faculty_publication extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Faculty_publication_model');
    } 

    /*
     * Listing of faculty_publications
     */
    function index()
    {
        $data['faculty_publications'] = $this->Faculty_publication_model->get_all_faculty_publications();
        $data['heading'] = 'Faculty Publications';
        $data['_view'] = 'faculty_publication/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new faculty_publication
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'emp_id' => $this->input->post('emp_id'),
				'date_of_publication' => $this->input->post('date_of_publication'),
				'validation' => $this->input->post('validation'),
				'page' => $this->input->post('page'),
				'international_name' => $this->input->post('international_name'),
				'index_name' => $this->input->post('index_name'),
            );
            
            $faculty_publication_id = $this->Faculty_publication_model->add_faculty_publication($params);
            //redirect('faculty_publication/index');
            if(isset($_SESSION['start-adding']))
            {
                $this->session->set_flashdata('success','Data Stored. Go to next page');
                redirect('faculty_publication/add');
            }
            else 
            {
                redirect('faculty_publication/index');
            }
        }
        else
        {
			$this->load->model('Personal_info_model');
			$data['all_personal_info'] = $this->Personal_info_model->get_all_personal_info();
            $data['heading'] = 'Faculty Publications';
            $data['_view'] = 'faculty_publication/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a faculty_publication
     */
    function edit($id)
    {   
        // check if the faculty_publication exists before trying to edit it
        $data['faculty_publication'] = $this->Faculty_publication_model->get_faculty_publication($id);
        
        if(isset($data['faculty_publication']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'emp_id' => $this->input->post('emp_id'),
					'date_of_publication' => $this->input->post('date_of_publication'),
					'validation' => $this->input->post('validation'),
					'page' => $this->input->post('page'),
					'international_name' => $this->input->post('international_name'),
					'index_name' => $this->input->post('index_name'),
                );

                $this->Faculty_publication_model->update_faculty_publication($id,$params);            
                redirect('faculty_publication/index');
            }
            else
            {
				$this->load->model('Personal_info_model');
				$data['all_personal_info'] = $this->Personal_info_model->get_all_personal_info();

                $data['_view'] = 'faculty_publication/edit';
                $data['heading'] = 'Faculty Publications';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The faculty_publication you are trying to edit does not exist.');
    } 

    /*
     * Deleting faculty_publication
     */
    function remove($id)
    {
        $faculty_publication = $this->Faculty_publication_model->get_faculty_publication($id);

        // check if the faculty_publication exists before trying to delete it
        if(isset($faculty_publication['id']))
        {
            $this->Faculty_publication_model->delete_faculty_publication($id);
            redirect('faculty_publication/index');
        }
        else
            show_error('The faculty_publication you are trying to delete does not exist.');
    }
    
}
