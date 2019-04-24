<div class="col-md-12">
  <div class="text-center">
    <h5 class="text-info">Add New School</h5>
  </div>
</div>
<div class="col-md-3"></div>
<div class="col-md-6 border border-success">
  <form method="post" action="<?php if(isset($school)){ echo base_url('updated-school');}else{ echo base_url('submit-form');} ?>">
    <div class="form-group">
      <br>
      <label for="schoolname">School Name</label>
      <input type="text" value="<?php if(isset($school)){ echo $school[0]['school_name'];} ?>" class="form-control"
        required name="schoolname" placeholder="Enter school name">
    </div>
    <div class="form-group">
      <label for="">Contact</label>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text">+91</div>
        </div>
        <input type="mobile" value="<?php if(isset($school)){ echo $school[0]['contact_no'];} ?>" class="form-control"
          required name="contact" placeholder="Enter contact number">
      </div>
    </div>
    <div class="form-group">
      <label for="pincode">Pin Code</label>
      <input type="text" class="form-control" value="<?php if(isset($school)){ echo $school[0]['pincode'];} ?>"
        required name="pincode" placeholder="Enter pin code">
    </div>
    <div class="form-group">
      <label for="address">Address</label>
      <textarea class="form-control" required name="address" rows="2">
      <?php if(isset($school)){ echo $school[0]['address'];} ?>
      </textarea>
    </div>
    <div class="form-group">
      <label for="course">Select Course</label>
      <select name="course[]" data-live-search="true" required class="selectpicker form-control" title="Select multiple course...."
        data-style="btn-info" multiple>
        <?php
          foreach ($selectbox as $key => $value) {
            echo '<option value="'.$value['id'].'">'.$value['course_name'].'</option>';
          }  
          ?>
      </select>
    </div>
    <div class="text-center">
      <?php
        if(isset($school)){
          echo '<button type="submit" class="btn btn-outline-warning">Update</button>';
        }else{
          echo '<button type="submit" class="btn btn-outline-primary">Submit</button>';
        }
        ?>
    </div><br>
    <?php
      if($this->session->flashdata('school_error')){
        if($this->session->flashdata('school_error')['school_status']==1){?>
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
      </button>
      <strong>
        <?php echo $this->session->flashdata('school_error')['school_name'];?></strong>
    </div>
    <?php }else if($this->session->flashdata('school_error')['school_status']==0){?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
      </button>
      <strong>
        <?php echo $this->session->flashdata('school_error')['school_name'];?></strong>
    </div>
    <?php }} ?>
    <input type="hidden" name="schoolId" value="<?php if(isset($school)){echo $school[0]["id"];} ?>">
  </form>
</div>
<div class="col-md-4"></div>