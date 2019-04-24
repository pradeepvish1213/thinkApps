<?php
defined('BASEPATH') or exit('No direct script access allowed');

class School extends CI_Controller
{
  public function index(){
    $data['school']=$this->school_model->getSchool();
    $this->load->view('header');
    $this->load->view('school',$data);
    $this->load->view('footer');
  }
  public function add_school(){
    $result['selectbox'] = $this->course_model->getCourse();
    $this->load->view('header');
    $this->load->view('add_school',$result);
    $this->load->view('footer');
  }
  public function edit($id){
    $data['selectbox'] = $this->course_model->getCourse();
    $data['school']=$this->school_model->getSchool($id);
    $this->load->view('header');
    $this->load->view('add_school',$data);
    $this->load->view('footer');
  }
  public function create(){
    $this->form_validation->set_rules('schoolname', 'School Name','trim|required|min_length[3]|max_length[50]');
    $this->form_validation->set_rules('contact', 'Mobile Number','trim|required|numeric|exact_length[10]');
    $this->form_validation->set_rules('pincode', 'Pincode','trim|required|numeric|exact_length[6]');
    $this->form_validation->set_rules('address', 'Address','trim|required|min_length[3]|max_length[50]');
    $this->form_validation->set_rules('course[]', 'Course Name','trim|required|min_length[1]|max_length[5]');

    if (!$this->form_validation->run()) {
      $success = validation_errors();
      $error=array(
        'school_name'=> $success,
        'school_status'=> 0
      );
      $this->session->set_flashdata('school_error', $error);
      redirect('add-school','refresh');
    } else {
      $data = array( 
        'school_name' => $this->input->post('schoolname'),
        'address' => $this->input->post('address'),
        'pincode' => $this->input->post('pincode'),
        'contact_no' => $this->input->post('contact')
      );
      $course=$this->input->post('course[]');
      $result = $this->school_model->save($data,$course);
      
      if($result>0)
      $success='New School Added Successful.';
      
      $error=array(
        'school_name'=> $success,
        'school_status'=> 1
      );
      $this->session->set_flashdata('school_error',$error);
      redirect('add-school','refresh');
    }
  }
  public function update(){
    $id=$this->input->post('schoolId');
    if($id!=''){
      $this->form_validation->set_rules('schoolname', 'School Name','trim|required|min_length[3]|max_length[50]');
      $this->form_validation->set_rules('contact', 'Mobile Number','trim|required|numeric|exact_length[10]');
      $this->form_validation->set_rules('pincode', 'Pincode','trim|required|numeric|exact_length[6]');
      $this->form_validation->set_rules('address', 'Address','trim|required|min_length[3]|max_length[50]');
      $this->form_validation->set_rules('course[]', 'Course Name','trim|required|min_length[1]|max_length[5]');
      
      if (!$this->form_validation->run()) {
        $success = validation_errors();
        $error=array(
          'school_name'=> $success,
          'school_status'=> 0
        );
        $this->session->set_flashdata('school_error', $error);
        redirect('edit-school/'.$id,'refresh');
      } else {
        $data = array( 
          'school_name' => $this->input->post('schoolname'),
          'address' => $this->input->post('address'),
          'pincode' => $this->input->post('pincode'),
          'contact_no' => $this->input->post('contact')
        );
        $course=$this->input->post('course[]');
        $result = $this->school_model->update($id,$data,$course);
        
        if($result>0)
        $success='School Updated Successful.';
        $error=array(
          'school_name'=> $success,
          'school_status'=> 1
        );
        $this->session->set_flashdata('school_error',$error);
        redirect('school','refresh');
      }
    }else{
      $success='School updated Unsuccessful. due to invalid school';
      $error=array(
        'school_name'=> $success,
        'school_status'=> 1
      );
      $this->session->set_flashdata('school_error',$error);
      redirect('add-school','refresh');
    }
  }
  public function delete($id){
    $result = $this->school_model->delete($id);
    if($result){
      $success='School deleted successful.';
    }else{
      $success='School deleted unsuccessful.';
    }
    $error=array('school_name'=> $success);
    $this->session->set_flashdata('school_error',$error);
    redirect('','refresh');
  }
  public function view($id){
    $res= $this->school_model->view($id);
    $result['school']= $res;
    if(count($res[0])>0){
      $this->load->view('header');
      $this->load->view('info_school',$result);
      $this->load->view('footer');
    }else{
      $success='School not found';
      $error=array('school_name'=> $success);
      $this->session->set_flashdata('school_error',$error);
      redirect('','refresh');
    }
  }
}