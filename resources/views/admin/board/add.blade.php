<div class="content-content_container">
  <section class="content" style="position:relative">
  <div class="row mrg-b20">
  <div class="col m8 s12 no-mrg">
  <h1 class="head-title"><span class="gry-light">Add Board of Directors</span></h1>
  </div>


  <div class="col m4 s12 right-align right required_msg">    
    <div class="back-align">
      <a href="{{ url('manage-boards') }}"><i class="far fa-arrow-alt-circle-left"></i> Back</a>
      <div class="error-msg">* Required field</div>
    </div>
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


<!--form-->


<form name="insertBoards" action="<?php echo url('insert-boards'); ?>" method="POST" id="insertBoard" enctype="multipart/form-data">
{{ csrf_field() }}

<div class="row form_fld_label">
<div class="col-md-12 formFldCont">


<div class="col-md-12 mrg-b25">
  <div class="row">
<div class="col-md-3 fldLabel">
<span class="required_fild">*</span>
Director Name:
</div>
<div class="col-md-8">
<input id="name" name="name" type="text" class="validate" placeholder="Director Name">
<div class="errorClass"><?php echo $errors->first('name'); ?></div>
</div>
</div>
</div>


<div class="col-md-12 mrg-b25">
  <div class="row">
<div class="col-md-3 fldLabel">
<span class="required_fild">*</span>
Director Title:
</div>
<div class="col-md-8">
<input id="title" name="title" type="text" class="validate" placeholder="Director Title">
<div class="errorClass"><?php echo $errors->first('title'); ?></div>
</div>
</div>
</div>



<div class="col-md-12 mrg-b25">
<div class="row">
<div class="col-md-3 fldLabel">
<span class="required_fild">*</span>
Director Image:
</div>
<div class="col-md-8">
<div>
<div>
<div class="file-upload">
<div class="file-select">
<div class="file-select-button" id="fileName">Upload</div>
<div class="file-select-name" id="noFile">No file chosen...</div> 
<input type="file" id="image" name="image" onchange="readURL(this);">
<!-- <input type="file" name="chooseFile" id="chooseFile" onchange="readURL(this);" > -->
</div>
</div>
  <!-- <input type="file" id="upload" name="image" onchange="readURL(this);"> -->
</div>
<p class="errorClass"><?php echo $errors->first('image'); ?></p>
</div>
</div>    
</div> 
</div>

<div class="col-md-12 mrg-b25">
  <div class="row">
<div class="col-md-3 fldLabel">
&nbsp;
</div>
<div class="col-md-8">
<span class="errorClass">Image should not be more than 2 MB!</span>
</div>
</div>
</div>

<div class="col-md-12 mrg-b25">
  <div class="row">
<div class="col-md-3 fldLabel">
&nbsp;
</div>
<div class="col-md-8">
<div class="file-field">
<img src="<?php echo url('images/no-product-img.png'); ?>" class="showImage" width="100px;" height="100px;" /> 
</div>

</div>
</div>
</div>

<div class="col-md-12 mrg-b25">
  <div class="row">
<div class="col-md-3 fldLabel">
&nbsp;
</div>
<div class="col-md-8">
<button class="waves-effect waves-light btn btn_default mr10 unique_member">Submit</button>
<a class="waves-effect waves-light btn btn_default red"
onclick="window.location.href='<?php echo url('manage-boards'); ?>'">Cancel</a>
</div>
</div>
</div>
</div>
</div>
</form>
          </div>
        </div>
      </section>
    </div>

    <script>

      function readURL(input) {
        if (input.files && input.files[0]) 
        {
          var reader = new FileReader();
          
          reader.onload = function (e) {

            $(input).parents().find('.showImage')
            .attr('src', e.target.result)
            .width(100)
            .height(100);
          };

          reader.readAsDataURL(input.files[0]);
        }
      }

    </script> 
<!--     <script>
$('#chooseFile').bind('change', function () {
  var filename = $("#chooseFile").val();
  if (/^\s*$/.test(filename)) {
    $(".file-upload").removeClass('active');
    $("#noFile").text("No file chosen..."); 
  }
  else {
    $(".file-upload").addClass('active');
    $("#noFile").text(filename.replace("C:\\fakepath\\", "")); 
  }
});

    </script>
 -->