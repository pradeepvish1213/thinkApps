<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {
  public function index(){
    $data['course']=$this->course_model->getCourse();
    $this->load->view('header');
    $this->load->view('course',$data);
    $this->load->view('footer');
  }
  public function add_course(){
    $this->load->view('header');
    $this->load->view('add_course');
    $this->load->view('footer');
  }
  public function create(){
    $this->form_validation->set_rules('coursename', 'Course','trim|required|min_length[3]|max_length[50]');
    $this->form_validation->set_rules('coursedesc', 'Course Description','trim|required');
    if (!$this->form_validation->run()) {
      $error = validation_errors();
      $this->session->set_flashdata('course_error', $error);
      redirect('add-course','refresh');
    } else {
      $data = array( 
        'course_name' =>$this->input->post('coursename'),
        'description' => $this->input->post('coursedesc')
      );
      $result = $this->course_model->save($data);
      
      if($result>0)
      $error='Course Added Successful.';

      $this->session->set_flashdata('course_added', $error);
      redirect('add-course','refresh');
    }
  }
  public function edit($id){
    $result['course'] = $this->course_model->getCourse($id);
    if(count($result['course'])>0){
      $this->load->view('header');
      $this->load->view('add_course',$result);
      $this->load->view('footer');
    }else{
      $success='Course not found';
      $error=array('course_added'=> $success);
      $this->session->set_flashdata('course_added',$error);
      redirect('course','refresh');
    }
  }
  public function update(){
    $this->form_validation->set_rules('coursename', 'Course','trim|required|min_length[3]|max_length[50]');
    $this->form_validation->set_rules('coursedesc', 'Course Description','trim|required');
    $id=$this->input->post('courseId');
    if (!$this->form_validation->run()) {
      $error = validation_errors();
      $this->session->set_flashdata('course_error', $error);
      redirect('update-course/'.$id,'refresh');
    } else {
      $data = array( 
        'course_name' =>$this->input->post('coursename'),
        'description' => $this->input->post('coursedesc')
      );
      $result = $this->course_model->update($data,$id);
      if($result>0)
      $error='Course Updated Successful.';

      $error=array('school_name'=> $error);
      $this->session->set_flashdata('school_error',$error);
      redirect('course','refresh');
    }
  }
  public function delete($id){
    $result = $this->course_model->delete($id);
    if($result){
      $success='Course deleted successful.';
    }else{
      $success='Course deleted unsuccessful.';
    }
    $error=array('school_name'=> $success);
    $this->session->set_flashdata('school_error',$error);
    redirect('course','refresh');
  }
  public function view($id){
    $result['course'] = $this->course_model->getCourse($id);
    if(count($result)>0){
      $this->load->view('header');
      $this->load->view('info_course',$result);
      $this->load->view('footer');
    }else{
      $success='Course not found';
      $error=array('school_name'=> $success);
      $this->session->set_flashdata('school_error',$error);
      redirect('course','refresh');
    }
  }
}