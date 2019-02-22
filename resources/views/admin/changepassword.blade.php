<div class="content-content_container">
  <section class="content" style="position:relative">
    <div class="row mrg-b20">
      <div class="col m8 s12 no-mrg">
        <h2 class="head-title"><span class="gry-light">Change Password</span></h2>
      </div>
      <div class="col m4 s12 right-align right mrg-t20">
      </div>
    </div>
    
    <?php if (Session::get('success') != ''): ?>
      <div class="alert alert-success" style="text-align:center;"><?php echo Session::get('success'); ?></div>
    <?php endif;
    $error = Session::get('error');
    ?>
    <?php if ($error != ''): ?>
      <div class="alert alert-danger" style="text-align:center;"><?php echo $error; ?></div>
    <?php endif;?>

    
    <div class="right-bg" id="basic-information">
      <div class="inner_form ui-slider-tabs">
        <form class="form-horizontal" id="changePassword" method="POST" action="{{ route('change-pwd') }}">
          {{ csrf_field() }}
          <div class="row">
            <div class=" col s12 m6 mrg-r40 required_msg">
             * Required field
           </div>
           <div class="clearfix"></div>
           
           <div class=" col s12 m6 mrg-r40">
             <div class="input-field"><div></div>
             <span class="required_fild">*</span> <input id="password" name="password" type="password" class="validate" placeholder="New Password" >
             <div class="errorClass"><?php echo $errors->first('password'); ?></div>
           </div>
         </div>
         <div class="clearfix"></div>
         <div class=" col s12 m6 mrg-r40">
           <div class="input-field">
            <span class="required_fild">*</span> <input id="cpassword" name="cpassword" type="password" class="validate" placeholder="Confirm New Password">
            <div class="errorClass"><?php echo $errors->first('cpassword'); ?></div>
          </div>
        </div>
        <div class="clearfix"></div>

        <div class=" col s12 m6 l6">
         <div class="input-field pull-left" style="width:auto; margin-right:10px;"> 
           <button class="waves-effect waves-light btn btn_default">Submit</button> 
         </div>
         <div class="input-field pull-left" style="width:auto"> 
          <a class="waves-effect waves-light btn btn_default red"
          onclick="window.location.href='<?php echo url('admin-dashboard'); ?>'">Cancel</a>
        </div>
      </div>
    </div>
  </form>
</div>
</div>
</section>
</div>

