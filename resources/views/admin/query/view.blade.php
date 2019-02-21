<div class="content-content_container">
    <section class="content" style="position:relative">

      <div class="row mrg-b20">


          <div class="col m8 s12 no-mrg">
           <h1 class="head-title"><span class="gry-light">View Query/Feedback</span></h1>
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
                <th><center>Name</center></th>
                <th><center>Email ID</center></th>
                <th style="width: 15%"><center>Mobile No</center></th>
                <th style="width: 15%"><center>Query Type</center></th>
                <th style="width: 15%"><center>Remark</center></th>
                <!-- <th><center>Image</center></th> -->
                <!--<th><center>Status</center></th>-->
                <th><center>Action</center></th>
              </tr>
            </thead>
            <tbody>

            @if(isset($data['results']))
              @foreach($data['results'] as $row)
                <tr>
                  <td><?php echo $row->name; ?></td>
                  <td><?php echo $row->email_id; ?></td>
                  <td><?php echo $row->mobile_no; ?></td>
                  <td><?php echo $row->queryFeedbackType->query_type ?></td>
                  <td><?php echo substr($row->remark,0,50)."..." ?></td>
                  <td>
                    <center>
                     <a href = "<?php echo url('show-query/' . $row->id); ?>">
                      <img src="<?php echo url("images/applicaton_open_show.png"); ?>" width="18" height="18" title="show">
                    </a>
                    &nbsp;
                  
                    <a href = "<?php echo url('delete-query/' . $row->id); ?>" onclick="return confirm('Are you sure! do you want to delete?')">
                    <img src="<?php echo url('images/delete.png'); ?>" width="14" height="14" title="Delete">
                    </a> 
                    </center>
                  </td>
                </tr>
              @endforeach
            @else
            <?php echo '<tr class="errorClass"><th colspan="5"><center>No records..</center></th></tr>'; ?>
            @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>
  </section>
  </div>

    <script>
    jQuery(document).ready(function($) {
      jQuery(".actdev").click(function(event) {
        var id = jQuery(this).attr("id");
        var status = jQuery(this).attr("data-value");
        alert(id);
        $.ajax({
          url: "<?php echo url('changeStatusNews'); ?>",
          type: 'get',
          dataType: "json",
          data: {'id': id,'status':status},
        })
        .done(function(data) {
          if(data.status=='success')
          {
            $('#'+id).attr('data-value', data.response.replace(/\s/g, '') );
            $('#'+id).html(data.response);
          }
          else if(data.status=='error')
          {
            $('#error-status').html(data.response);
          }

        });

      });
    });
 </script>