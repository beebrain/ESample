<?php
class controlSamplemodel extends CI_Model
{


    /**
     *  get all user reserve for admin
     */
    public function getcontroldoc()
    {
        $query = $this->db->get('es_controldoc');
        return $query;
    }


    public function updatedocnumber($number)
    {
        $data = array(
            'docnumber' => $number
        );

        $this->db->update('es_controldoc', $data);
    }

    public function updateoperationNumber($number)
    {
        $data = array(
            'operationnumber' => $number
        );

        $this->db->update('es_controldoc', $data);
    }
}
