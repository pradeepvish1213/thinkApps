<div class="col-md-3"></div>
<div class="col-md-6">
  <br>
  <div class="card text-white bg-info border-primary">
    <div class="card-header">
      <h2 class="text-warning">
        <?php echo $course[0]['course_name'] ?>
      </h2>
    </div>
    <div class="card-body">
      <div class="">
        <h5 class="card-header bg-transparent border-success">Courses Details</h5>
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
        <footer class="blockquote-footer">Course famous in <cite title="Source Title">mumbai</cite></footer>
      </blockquote>
    </div>
    <div class="card-footer text-muted"><?php echo date('d-M-Y',strtotime($course[0]['created_date'])) ?> Created</div>
  </div>
</div>
<div class="col-md-3"></div>