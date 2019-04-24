<div class="col-md-12">
  <br>
  <div class="text-center">
    <h4 class="text-info">School List</h4>
  </div>
</div>
<div class="col-md-12">
  <?php if($this->session->flashdata('school_error')){?>
  <div class="alert alert-primary alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      <span class="sr-only">Close</span>
    </button>
    <strong>
      <?php echo $this->session->flashdata('school_error')['school_name'];?></strong>
  </div>
  <?php } ?>
  <div class="text-center border border-primary custom-padding">
    <table id="schoolTable" class="table table-striped table-bordered" style="width:100%">
      <thead>
        <tr>
          <th>School Name</th>
          <th>Contact</th>
          <th>Pin Code</th>
          <th>Address</th>
          <th>Date</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($school as $key => $value) {
          echo "<tr>
            <td><a href='info-school/$value[id]' title='School Information' data-toggle='tooltip' data-placement='top'>$value[school_name]</a></td>
            <td>$value[contact_no]</td>
            <td>$value[pincode]</td>
            <td>$value[address]</td>
            <td>".date('d-M-Y',strtotime($value['created_date']))."</td>
            <td>
              <a name='editschool' class='btn btn-sm btn-outline-info' href='edit-school/$value[id]' role='button'>Edit</a>
              <a name='editschool' class='btn btn-sm btn-outline-warning' href='delete-school/$value[id]' role='button'>Delete</a>
            </td>
            </tr>";
          }  
        ?>
      </tbody>
    </table>
  </div>
</div>
</div>