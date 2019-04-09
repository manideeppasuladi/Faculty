<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Employees extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Personal_info_model');
        $this->load->model('Faculty_education_model');
        $this->load->model('Faculty_subject_model');
        $this->load->model('Faculty_phd_model');
        $this->load->model('Faculty_publication_model');
        $this->load->model('Faculty_experience_model');
        
    }

    public function all_Employees()
    {
        $data['personal_info'] = $this->Personal_info_model->get_all_personal_info();
        /*$data['faculty_education'] = $this->Faculty_education_model->get_all_faculty_education();
        $data['faculty_subject'] = $this->Faculty_subject_model->get_all_faculty_subject();
        $data['faculty_phd'] = $this->Faculty_phd_model->get_all_faculty_phd();
        $data['faculty_publications'] = $this->Faculty_publication_model->get_all_faculty_publications();
        $data['faculty_experience'] = $this->Faculty_experience_model->get_all_faculty_experience();*/
        $data['_view'] = 'employeesList/index';
        $data['heading'] = 'List of Employees';
        $this->load->view('layouts/main',$data);
    }
    public function getEmployee($id)
    {
        $data['faculty_education'] = $this->Faculty_education_model->get_faculty_education($id);
        $data['faculty_subject'] = $this->Faculty_subject_model->get_faculty_subject($id);
        $data['faculty_phd'] = $this->Faculty_phd_model->get_faculty_phd($id);
        $data['faculty_publications'] = $this->Faculty_publication_model->get_faculty_publication($id);
        $data['faculty_experience'] = $this->Faculty_experience_model->get_faculty_experience($id);
        $data['_view'] = 'employeesList/getEmployee';
        $data['heading'] = 'Employee Details';
        $this->load->view('layouts/main',$data);
    }
}
