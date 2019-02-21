<div class="content-content_container">
  <section class="content" style="position:relative">

    <div class="row mrg-b20">


      <div class="col m8 s12 no-mrg">
       <h1 class="head-title"><span class="gry-light">View Board of Directors</span></h1>
     </div>
     <div class="col m4 s12 right-align right mrg-t20">
     </div>

   </div>

   <div class="row mrg-l-10">
    <div class="col s12">
     <div class="card card-bg">
       <?php if (Session::get('success') != ''): ?>
        <div class="alert alert-success" style="text-align:center;"><?php echo Session::get('success'); ?></div>
      <?php endif;
      $error = Session::get('error');
      ?>
      <?php if ($error != ''): ?>
        <div class="alert alert-danger" style="text-align:center;"><?php echo $error; ?></div>
      <?php endif;?>

      <table id="myDataTable" class="table table-bordered table-striped mrg-b0 table-responsive">
        <thead>
          <tr>
            <th><center>Director Name</center></th>
            <th><center>Director Image</center></th>
            <th><center>Action</center></th>
          </tr>
        </thead>
        <tbody>
          <?php if ($data['results']->first()){
            $i=1;
            foreach ($data['results'] as $row) {
              ?>
              <tr>
                <td><center><?php echo $row->board_name; ?></center></td>
                <td><center><img src="<?php echo url('frontend/kscl/assets/img/boards/'.$row->board_images); ?>" width="50"></center></td>
                
                <td><center>
                 <a href = "<?php echo url('edit-boards/' . $row->id); ?>">
                  <img src="<?php echo url("images/edit.png"); ?>" width="18" height="18" title="Edit">
                </a>
                &nbsp;
                <a href = "<?php echo url('delete-boards/' . $row->id); ?>" onclick="return confirm('Are you sure! Do you want to delete?')">
                  <img src="<?php echo url('images/delete.png'); ?>" width="14" height="14" title="Delete">
                </a>
              </center></td>
            </tr>
            <?php
            $i++;}
          } else { echo '<tr class="errorClass"><th colspan="5"><center>No records..</center></th></tr>'; }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>
</div>

