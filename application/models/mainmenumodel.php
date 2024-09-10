<?php
class Mainmenumodel extends CI_Model
{


    /**
     *  get all user reserve for admin
     */
    public function getsubmenu($mainid)
    {
        $this->db->where("menuid", $mainid);
        $query = $this->db->get('es_submenu');
        return $query;
    }


    public function getMainMenu()
    {
        $query = $this->db->get('es_mainmenu');
        return $query;
    }
}
