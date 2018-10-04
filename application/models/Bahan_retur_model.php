<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Bahan_retur_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get bahan_retur by rtr_id
     */
    function get_bahan_retur($rtr_id)
    {
        return $this->db->get_where('bahan_retur', array('rtr_id' => $rtr_id))->row_array();
    }
        
    /*
     * Get all bahan_retur
     */
    function get_all_bahan_retur()
    {
        $this->db->order_by('rtr_id', 'desc');
        return $this->db->get('bahan_retur')->result_array();
    }
        
    /*
     * function to add new bahan_retur
     */
    function add_bahan_retur($params)
    {
        $this->db->insert('bahan_retur', $params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update bahan_retur
     */
    function update_bahan_retur($rtr_id, $params)
    {
        $this->db->where('rtr_id',$rtr_id);
        return $this->db->update('bahan_retur', $params);
    }
    
    /*
     * function to delete bahan_retur
     */
    function delete_bahan_retur($rtr_id)
    {
        return $this->db->delete('bahan_retur', array('rtr_id' => $rtr_id));
    }
}
