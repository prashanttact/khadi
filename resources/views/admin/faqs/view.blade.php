<div class="content-content_container">
    <section class="content" style="position:relative">

      <div class="row mrg-b20">


          <div class="col m8 s12 no-mrg">
           <h1 class="head-title"><span class="gry-light">View FAQ</span></h1>
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
                <th><center>Category Type</center></th>
                <th><center>FAQ Question</center></th>
                <th><center>Answer</center></th>
                <!--<th style="width: 15%"><center>Creation Date</center></th> -->
                <!-- <th><center>Image</center></th> -->
                <!--<th><center>Status</center></th> -->
                <th><center>Action</center></th>
              </tr>
            </thead>
            <tbody>


             <?php if ($data['results']){
              $i=1;
              foreach ($data['results'] as $row) {
                ?>
                <tr>
                  <td style="width:15%"><?php echo " ".$row->category->category; ?></td>
                  <td style="width: 25%"><?php echo " ".$row->faq_question; ?></td>
                  <td><?php echo $row->faq_answer; ?></td>
                  <!--<td style="width: 15%"><center><?php echo date("d F Y", strtotime($row->created_at));?></center></td>-->
                  <!-- <td><center><img src="<?php echo url('frontend/kscl/assets/img/news/'.$row->news_img_path); ?>" width="50"></center></td> -->
                  <!--<td><center><a href="javascript:void(0);" id="<?php echo $row->id; ?>" class="actdev" data-value="<?php  if($row->faq_status=='Active'){ echo 'Active'; } else { echo "Inactive"; } ?>"><?php if($row->faq_status=='Active'){ echo 'Active'; }else { echo "Inactive"; } ?></a> </center></td>-->

                  <td style="width:10%"><center>
                   <a href = "<?php echo url('edit-faq/' . $row->id); ?>">
                    <img src="<?php echo url("images/edit.png"); ?>" width="18" height="18" title="Edit">
                  </a>
                  &nbsp;
                  <a href = "<?php echo url('delete-faq/' . $row->id); ?>" onclick="return confirm('Are you sure! do you want to delete?')">
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

    <script>
    jQuery(document).ready(function($) {
      jQuery(".actdev").click(function(event) {
        var id = jQuery(this).attr("id");
        var status = jQuery(this).attr("data-value");
        //alert(id);
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