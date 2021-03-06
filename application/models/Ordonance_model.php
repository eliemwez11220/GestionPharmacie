<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Ordonance_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get ordonance by ordon_id
     */
    function get_ordonance($ordon_id)
    {
        return $this->db->get_where('tb_cons_ordonances',array('ordon_id'=>$ordon_id))->row_array();
    }
    
    /*
     * Get all ordonances count
     */
    function get_all_ordonances_count()
    {
        $this->db->from('tb_cons_ordonances');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all ordonances
     */
    function get_all_ordonances($params = array())
    {
        $this->db->order_by('ordon_id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('tb_cons_ordonances')->result_array();
    }
        
    /*
     * function to add new ordonance
     */
    function add_ordonance($params)
    {
        $this->db->insert('tb_cons_ordonances',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update ordonance
     */
    function update_ordonance($ordon_id,$params)
    {
        $this->db->where('ordon_id',$ordon_id);
        return $this->db->update('tb_cons_ordonances',$params);
    }
    
    /*
     * function to delete ordonance
     */
    function delete_ordonance($ordon_id)
    {
        return $this->db->delete('tb_cons_ordonances',array('ordon_id'=>$ordon_id));
    }
}
