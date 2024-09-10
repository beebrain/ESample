<?php
class serviceModel extends CI_Model
{


    public function getservicegroup($id = "")
    {
        if ($id != "") {
            $this->db->where('groupid', $id);
        }

        $query = $this->db->get('es_servicegroup');
        return $query;
    }


    public function getservice($idgroup, $discount = FALSE)
    {

        $this->db->where('idgroup', $idgroup);


        if ($discount) {
            $this->db->where("price <", 0);
        } else {
            $this->db->where("price >", 0);
        }



        $query = $this->db->get('es_service');
        return $query;
    }
}
