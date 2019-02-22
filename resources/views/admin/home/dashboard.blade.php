@include('admin/includes/header')
<div class="content-content_container">
          <section class="content" style="position:relative">
          <div class="row mrg-b20">
          <div class="col m4 s12 right-align right mrg-t20">
          </div>
          </div>
          <div class="right-bg" id="basic-information">
			  <div class="inner_form ui-slider-tabs">

           <?php if (Session::get('success') != ''): ?>
                        <div class="alert alert-success" style="text-align:center;"><?php echo Session::get('success'); ?></div>
                    <?php endif;
                    $error = Session::get('error');
                     ?>
                    <?php if ($error != ''): ?>
                        <div class="alert alert-danger" style="text-align:center;"><?php echo $error; ?></div>
                    <?php endif;?>
        
				<div class="row">	
 				 
                <div class="clear"></div> 
                  <img src="<?php echo url('images/dashboard.jpg?img=1.0');?>" alt="Welcome" width="100%;">
           <div class="clearfix"></div>
          </div>
          </section>
       </div>

@include('admin/includes/footer')