<div class="col-md-3"></div>
<div class="col-md-6">
  <br>
  <div class="card text-white border-primary bg-dark">
    <div class="card-header">
      <h2 class="text-warning">
        <?php echo $school[0][0]['school_name'] ?>
        </h6>
        <span class="text-info"><i class="fa fa-mobile" aria-hidden="true"></i>
          <?php echo $school[0][0]['contact_no'] ?> 
        </span>
        <span class="text-info"><i class="fa fa-map-pin" aria-hidden="true"></i>
          <?php echo $school[0][0]['pincode'] ?> 
        </span>
        <address class="text-danger"><i class="fa fa-map-signs" aria-hidden="true"></i>
          <?php echo $school[0][0]['address'] ?> 
        </address>
    </div>
    <div class="card-body">
      <div class="">
        <h5 class="card-header bg-transparent border-success">Avilable Courses</h5>
        <div class="card-body text-white">
          <?php
          foreach ($school[1] as $key => $value) {
            echo "<h6 class='card-title'>$value[course_name]</h6>
            <p class='card-text'>$value[description]</p>";
          } ?>
        </div>
        <div class="card-footer bg-transparent border-success"></div>
      </div>
      <blockquote class="blockquote mb-0">
        <p>Why do we use it?
          It is a long established fact that a reader will be distracted by the readable content of a page when looking
          at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
          as opposed to using 'Content here, content here', making it look like readable English. Many desktop
          publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for
          'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the
          years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
        <footer class="blockquote-footer">School famous in <cite title="Source Title">mumbai</cite></footer>
      </blockquote>
    </div>
    <div class="card-footer text-danger"><?php echo date('d-M-Y',strtotime($school[0][0]['created_date'])) ?></div>
  </div>
</div>
<div class="col-md-3"></div>