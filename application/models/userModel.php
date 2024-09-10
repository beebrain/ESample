<?php
class userModel extends CI_Model
{
  function Is_already_register($id)
  {
    $this->db->where('login_uid', $id);
    $query = $this->db->get('es_user');
    if ($query->num_rows() > 0) {
      return true;
    } else {
      return false;
    }
  }

  function Update_user_data($data, $id, $condition = "login_uid")
  {
    $this->db->where($condition, $id);
    $this->db->update('es_user', $data);
  }


  function Insert_user_data($data)
  {
    $this->db->insert('es_user', $data);
  }

  public function getInfoUser($id)
  {

    $this->db->where('uid', $id);
    $query = $this->db->get('es_user');
    return $query;
  }


  public function getCompleteInfoUser($condition = "")
  {
    $this->db->select('*');
    $this->db->from('es_user');
    if ($condition != "") {
      $this->db->where($condition);
    }
    $this->db->where('active', '1');
    $query = $this->db->get();

    log_message("Debug", $this->db->last_query());
    return $query;
  }


  public function checkDupUser($user)
  {
    $this->db->where('email', $user);
    $query = $this->db->get('es_user');
    return $query;
  }

  public function getallUser()
  {
    $query = $this->db->get('es_user');
    return $query;
  }


  public function get_total_records()
  {
    $this->db->from('es_user');
    return $this->db->count_all_results();
  }

  public function get_datatable($start, $length, $searchValue, $orderColumn, $orderDir)
  {

    $this->db->select('*');
    $this->db->from('es_user u');


    // Apply search query if available
    if (!empty($searchValue)) {
      $this->db->group_start();
      $this->db->like('u.uid', $searchValue);
      $this->db->or_like('u.email', $searchValue);
      $this->db->or_like('u.gf_name', $searchValue);
      $this->db->or_like('u.gl_name', $searchValue);
      $this->db->or_like('u.thai_name', $searchValue);
      $this->db->or_like('u.thai_lastname', $searchValue);
      $this->db->or_like('u.phone', $searchValue);
      $this->db->group_end();
    }

    // Apply sorting based on DataTable's request
    if (isset($orderColumn) && isset($orderDir)) {
      $this->db->order_by($orderColumn, $orderDir);
    }

    // Apply LIMIT and OFFSET for pagination
    $this->db->limit($length, $start);

    $query = $this->db->get();
    return $query->result();
  }
  public function get_filtered_records($searchValue)
  {
    $this->db->select('*');
    $this->db->from('es_user u');


    // Apply search query if available
    if (!empty($searchValue)) {
      $this->db->group_start();
      $this->db->like('u.uid', $searchValue);
      $this->db->or_like('u.email', $searchValue);
      $this->db->or_like('u.gf_name', $searchValue);
      $this->db->or_like('u.gl_name', $searchValue);
      $this->db->or_like('u.thai_name', $searchValue);
      $this->db->or_like('u.thai_lastname', $searchValue);
      $this->db->or_like('u.phone', $searchValue);
      $this->db->group_end();
    }

    $query = $this->db->get();
    return $query->num_rows();
  }
}
