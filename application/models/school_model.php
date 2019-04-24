<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class School_model extends CI_Model {
  public function save($data,$course){
    $this->db->trans_begin();
    $this->db->insert('school_master', $data);
    $result =  $this->db->insert_id();
    $this->inserCourse($result,$course);
    if ($this->db->trans_status() === FALSE){
      $this->db->trans_rollback();
    }else{
      $this->db->trans_commit();
    }
    return $result;
  }
  public function getSchool($id=''){
    $this->db->select('id,school_name,address,pincode,contact_no,created_date');
    $this->db->from('school_master');

    if($id!='')
    $this->db->where('id',$id);

    $result=$this->db->get();
    return $result->result_array();
  }
  public function update($id,$data,$course){
    $this->db->trans_begin();
    $this->db->set($data);
    $this->db->where('id',$id);
    $this->db->update('school_master', $data);
    $this->deleteCourseMap($id);
    $this->inserCourse($id,$course);
    if ($this->db->trans_status() === FALSE){
      $this->db->trans_rollback();
      $result=false;
    }else{
      $this->db->trans_commit();
      $result = true;
    }
    return $result;
  }
  private function inserCourse($id,$course){
    $sql ="INSERT INTO school_course_mapping (school_id,course_id) VALUE";
    $sqls='';
    foreach ($course as $key => $value) {
      $sqls .='('.$id.','.$value.'),';
    }
    $this->db->query($sql.rtrim($sqls,','));
  }
  private function deleteCourseMap($id){
    $this->db->where('school_id', $id);
    return $this->db->delete('school_course_mapping');
  }
  public function delete($id){
    $this->db->trans_begin();
    $this->db->where('id',$id);
    $this->db->delete('school_master');
    $this->deleteCourseMap($id);
    if ($this->db->trans_status() === FALSE){
      $this->db->trans_rollback();
      $result=false;
    }else{
      $this->db->trans_commit();
      $result = true;
    }
    return $result;
  }
  public function view($id){
    $this->db->select('s.school_name,s.address,s.pincode,s.contact_no,s.created_date');
    $this->db->from('school_master s');
    $this->db->where('s.id', $id);
    $school = $this->db->get();
    $result[0] = $school->result_array();
    $this->db->select('c.course_name,c.description');
    $this->db->from('school_course_mapping scm');
    $this->db->join('course_master c', 'c.id = scm.course_id', 'left');
    $this->db->where('scm.school_id', $id);
    $course = $this->db->get();
    $result[1]=$course->result_array();
    return $result;
  }
}