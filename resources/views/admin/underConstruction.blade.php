<div class="content-content_container">
  <section class="content" style="position:relative">
    <div class="row mrg-b20">
      <div class="col m8 s12 no-mrg">
        <h2 class="head-title"><span class="gry-light">Under Construction</span></h2>
      </div>
      <div class="back-align">
               <a href="{{ url()->previous() }}"><i class=" fa fa-arrow-circle-o-left"></i> Back</a>
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
     <center>This Page is in Under Construction!</center>   
</div>
</div>
</section>
</div>

