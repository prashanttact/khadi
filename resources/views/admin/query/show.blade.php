<div class="content-content_container">
    <section class="content" style="position:relative">

      <div class="row mrg-b20">


          <div class="col m8 s12 no-mrg">
           <h1 class="head-title"><span class="gry-light">View Query/Feedback</span></h1>
         </div>

         <div class="col m4 s12 right-align right mrg-t20">
          <div class="back-align">
            <a href="{{ url('view-query') }}"><i class="far fa-arrow-alt-circle-left"></i> Back</a>
            <div class="error-msg"></div>
          </div>
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
                
              </tr>
            </thead>
            <tbody>


             <?php if ($data['results']){
              $row=$data['results'];
              
              
                ?>
                <tr><th style="width:25%">Name : </th><td><?php echo $row->name;?></td></tr>
                 <tr><th>Email ID : </th><td><?php echo $row->email_id;?></td></tr>
                 <tr><th>Mobile No : </th><td><?php echo $row->mobile_no;?></td></tr>
                 <tr><th>Query Type : </th><td><?php echo $row->queryFeedbackType->query_type;?></td></tr>
                 <tr><th>Remark : </th><td><?php echo nl2br($row->remark);?></td></tr>
                 
              <?php
              
             
            }
            else { echo '<tr class="errorClass"><th colspan="5"><center>No records..</center></th></tr>'; }
            ?>
          </tbody>
        </table>
        <div style="text-align:center">
        <a style="width:25%;margin-top:20px" class="waves-effect waves-light btn btn_default red"
                  onclick="window.location.href='<?php echo url('view-query'); ?>'">Cancel</a>
        </div>
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