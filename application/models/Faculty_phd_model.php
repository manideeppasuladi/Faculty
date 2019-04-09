<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Faculty_phd_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get faculty_phd by id
     */
    function get_faculty_phd($id)
    {
        return $this->db->get_where('faculty_phd',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all faculty_phd
     */
    function get_all_faculty_phd()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('faculty_phd')->result_array();
    }
        
    /*
     * function to add new faculty_phd
     */
    function add_faculty_phd($params)
    {
        $this->db->insert('faculty_phd',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update faculty_phd
     */
    function update_faculty_phd($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('faculty_phd',$params);
    }
    
    /*
     * function to delete faculty_phd
     */
    function delete_faculty_phd($id)
    {
        return $this->db->delete('faculty_phd',array('id'=>$id));
    }
}