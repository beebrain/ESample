<?php
class methodmodel extends CI_Model
{


    private $table = 'es_methodTemplate';
    public function get_method_names($term = '')
    {
        $this->db->select('idmethod, methodname');
        $this->db->from('es_methodTemplate');
        if (!empty($term)) {
            $this->db->like('methodname', $term);
        }
        $query = $this->db->get();
        return $query->result_array();
    }


    public function check_duplicate_method($methodName, $excludeId = null)
    {
        // Trim and convert to lowercase for consistent comparison
        $methodName = trim($methodName);

        $this->db->where('LOWER(TRIM(methodname))', strtolower($methodName));

        // Exclude current method if updating
        if ($excludeId !== null) {
            $this->db->where('idmethod !=', $excludeId);
        }

        $query = $this->db->get($this->table);
        return $query->num_rows() > 0;
    }

    /**
     * Add a new method
     * @param string $methodName Name of the method
     * @return int|false Returns inserted ID on success, false on failure
     */
    public function add_new_method($methodName)
    {
        $this->db->trans_begin();

        try {
            // Trim whitespace
            $methodName = trim($methodName);

            // Check if empty after trimming
            if (empty($methodName)) {
                return false;
            }

            // Check for duplicate before inserting
            if ($this->check_duplicate_method($methodName)) {
                return false;
            }

            $data = array('methodname' => $methodName);
            $this->db->insert($this->table, $data);
            $insertId = $this->db->insert_id();

            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
                return false;
            }

            $this->db->trans_commit();
            return $insertId;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            log_message('error', 'Error adding method: ' . $e->getMessage());
            return false;
        }
    }
}
