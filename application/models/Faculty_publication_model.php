<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Faculty_publication_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get faculty_publication by id
     */
    function get_faculty_publication($id)
    {
        return $this->db->get_where('faculty_publications',array('id'=>$id))->row_array();
    }
    function get_info_by_id($emp_id)
    {
        $this->db->order_by('id', 'desc');
        $this->db->where('emp_id',$emp_id);
        return $this->db->get('faculty_publications')->result_array();
    }   
    /*
     * Get all faculty_publications
     */
    function get_all_faculty_publications()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('faculty_publications')->result_array();
    }
        
    /*
     * function to add new faculty_publication
     */
    function add_faculty_publication($params)
    {
        $this->db->insert('faculty_publications',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update faculty_publication
     */
    function update_faculty_publication($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('faculty_publications',$params);
    }
    
    /*
     * function to delete faculty_publication
     */
    function delete_faculty_publication($id)
    {
        return $this->db->delete('faculty_publications',array('id'=>$id));
    }
}
