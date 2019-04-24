<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Course_model extends CI_Model
{
  public function save($data)
  {
    $this->db->insert('course_master', $data);
    if ($this->db->affected_rows() > 0) {
      $result = $this->db->insert_id();
    } else {
      $result = $this->db->_error_message();
    }
    return $result;
  }
  public function getCourse($id = '')
  {
    $this->db->select('id,course_name,created_date,description');
    $this->db->from('course_master');

    if ($id != '') {
      $this->db->where('id', $id);
    }

    $this->db->order_by('course_name','ASC');
    $result = $this->db->get();
    return $result->result_array();
  }
  public function update($data, $id)
  {
    $this->db->trans_begin();
    $this->db->set($data);
    $this->db->where('id', $id);
    $this->db->update('course_master', $data);
    if ($this->db->trans_status() === false) {
      $this->db->trans_rollback();
      $result = false;
    } else {
      $this->db->trans_commit();
      $result = true;
    }
    return $result;
  }
  public function delete($id)
  {
    $this->db->where('id', $id);
    return $this->db->delete('course_master');
  }
}
