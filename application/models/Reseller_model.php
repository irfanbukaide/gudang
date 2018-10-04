<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Reseller_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get reseller by rsl_id
     */
    function get_reseller($rsl_id)
    {
        return $this->db->get_where('reseller',array('rsl_id'=>$rsl_id))->row_array();
    }
        
    /*
     * Get all reseller
     */
    function get_all_reseller()
    {
        $this->db->order_by('rsl_id', 'desc');
        return $this->db->get('reseller')->result_array();
    }
        
    /*
     * function to add new reseller
     */
    function add_reseller($params)
    {
        $this->db->insert('reseller',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update reseller
     */
    function update_reseller($rsl_id,$params)
    {
        $this->db->where('rsl_id',$rsl_id);
        return $this->db->update('reseller',$params);
    }
    
    /*
     * function to delete reseller
     */
    function delete_reseller($rsl_id)
    {
        return $this->db->delete('reseller',array('rsl_id'=>$rsl_id));
    }
}