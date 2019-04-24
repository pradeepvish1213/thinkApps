<div class="col-md-12">
  <div class="text-center">
    <h4 class="text-center text-info">Add New Course</h4>
  </div>
</div>
<div class="col-md-3"></div>
<div class="col-md-6 border border-success">
  <form action="<?php if(isset($course)){ echo base_url('updated-course');}else{ echo base_url('submit-course'); } ?>" method="post">
    <div class="form-group">
      <label for="">Course Name</label>
      <input type="text" name="coursename"  value="<?php if(isset($course)){ echo $course[0]['course_name'];} ?>"  required class="form-control" placeholder="Enter course" aria-describedby="helpId">
      <small id="helpId" class="text-danger">
        <?= $this->session->flashdata('course_error');?></small>
    </div>
    <div class="form-group">
      <div class="form-group">
      <label for="">Course Description</label>
        <textarea class="form-control" name="coursedesc" required class="form-control" placeholder="Enter course description" rows="3">
        <?php if(isset($course)){ echo $course[0]['description'];} ?>
        </textarea>
      </div>
    </div>
    <div class="text-center">
    <?php
        if(isset($course)){
          echo '<button type="submit" class="btn btn-outline-warning">Update</button>';
        }else{
          echo '<button type="submit" class="btn btn-outline-primary">Submit</button>';
        }
      ?>
      <br><br>
      <?php if($this->session->flashdata('course_added')!=''){ ?>
      <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <strong>
          <?php echo $this->session->flashdata('course_added'); ?></strong>
      </div>
      <?php } ?>
    </div>
    <input type="hidden" name="courseId" value="<?php if(isset($course)){echo $course[0]["id"];} ?>">
  </form>
</div>
<div class="col-md-3"></div>