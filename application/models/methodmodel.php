<?php
class methodmodel extends CI_Model
{

    public function get_method_names()
    {
        $this->db->select('methodname');
        $this->db->from('es_methodTemplate'); // Replace with your actual table name
        $query = $this->db->get();
        return $query->result_array();
    }
}
