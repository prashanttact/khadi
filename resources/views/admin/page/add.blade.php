<div class="content-content_container">
  <section class="content" style="position:relative">
  <div class="row mrg-b20">
  <div class="col m8 s12 no-mrg">
  <h1 class="head-title"><span class="gry-light">Add Page Content </span></h1>
  </div>
  <div class="col m4 s12 right-align right mrg-t20 required_msg">* Required field
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


<form name="insertPageContent" action="<?php echo url('insert-PageContent'); ?>" method="POST" id="insertPageContent" enctype="multipart/form-data">

{{ csrf_field() }}

<div class="row form_fld_label">
<div class="col-md-12 formFldCont">
<div class="row">





<div class="col-md-12 mrg-b25">
<div class="col-md-3 text-right fldLabel">
<span class="required_fild">*</span>
Page Title:
</div>
<div class="col-md-8">
 <input id="title" name="title" type="text" class="validate" placeholder="Page Title">
 <div class="errorClass"><?php echo $errors->first('title'); ?></div>
</div>
</div>

<div class="col-md-12 mrg-b25">
<div class="col-md-3 text-right fldLabel">
<span class="required_fild">*</span>
Page Slug:
</div>
<div class="col-md-8">
 <input id="slug" name="slug" type="text" class="validate" placeholder="Page Slug">
 <div class="errorClass"><?php echo $errors->first('slug'); ?></div>
</div>
</div>




<div class="col-md-12 mrg-b25">
<div class="col-md-3 text-right fldLabel">
<span class="required_fild">*</span>
Page Keyword:
</div>
<div class="col-md-8">
 <input id="keyword" name="keyword" type="text" class="validate" placeholder="Page Keyword">
 <div class="errorClass"><?php echo $errors->first('keyword'); ?></div>
</div>
</div>


<div class="col-md-12 mrg-b25">
<div class="col-md-3 text-right fldLabel">
<span class="required_fild">*</span>
Page Description:
</div>
<div class="col-md-8">
 <input id="description" name="description" type="text" class="validate" placeholder="Page Description">
 <div class="errorClass"><?php echo $errors->first('description'); ?></div>
</div>
</div>


<div class="col-md-12 mrg-b25">
<div class="col-md-3 text-right fldLabel">
<span class="required_fild">*</span>
Page Content:
</div>
<div class="col-md-8">
<textarea style="margin: 0px; height: 96px;" id="content" name="content" class="form-control summernote" placeholder="Page Content"></textarea>
 <div class="errorClass"><?php echo $errors->first('content'); ?></div>
</div>
</div>


<div class="col-md-12 mrg-b25">
<div class="col-md-3 text-right fldLabel">
&nbsp;
</div>
<div class="col-md-8">
<button class="waves-effect waves-light btn btn_default mr10 unique_member">Update</button>
      <a class="waves-effect waves-light btn btn_default red"
      onclick="window.location.href='<?php echo url('viewPageContent'); ?>'">Cancel</a>
</div>
</div>

</div>
</div>
</div>
  </form>
    <!--form end-->

  </div>
</div>
  </section>
</div>
<link href="http://localhost/papa_california/public/js/summernote/summernote.css" rel="stylesheet">
<script src="http://localhost/papa_california/public/js/summernote/summernote.js" type="text/javascript">



  <script type="text/javascript">

    $(document).ready(function($) {

          var addImgButton = $('.add_image'); 
          var wrapper_col  = $('.dynamicImageContent');
          //var imageCount   = 1; 

          var imageCount = 1;
          $(addImgButton).click(function()
          { 

                  var html = '<div class="col-md-12 mrg-b25" id="divRemove"><div class="col-md-3 text-right fldLabel">Image '+ (imageCount+1) +':</div><div class="col-md-9" style="padding-left: 0px;"><div class="col-md-4"><div class="file-field"><div class="btn"><span>Upload</span><input type="file" id="upload" onchange="readURL(this);" name="image[]"></div><div class="file-path-wrapper"><input class="file-path validate" type="text" name="image_name[]"></div><p class="errorClass"><?php echo $errors->first('image_name'); ?></p></div></div><div class="col-md-3"><div class="file-field"><div class="file-path-wrapper"><img alt="image" class="showImage" src="<?php echo url('/images/no-product-img.png'); ?>" width="100" height="100"></div></div><p class="errorClass"></p></div><div class="col-md-2"><a href="javascript:void(0);" class="btn-floating btn-small waves-effect waves-light green remove_button"><i class="material-icons">remove</i></a></div></div></div></div>';

             $(wrapper_col).append(html); // Add field html
              imageCount++;         

      });

        $(wrapper_col).on('click', '.remove_button', function()
        { 
          
          //$(this).parent().parent().parent().remove();
          $(this).parents("#divRemove").remove();
          imageCount--;
        });

        $('.remove_button').on('click',function(){
            $(this).parent().parent().parent().remove();
        });

     
    });
    



  </script>
  <script>
    $(document).ready(function() {

  $('#content').summernote();
});


  </script>

   <script>
       function readURL(input) 
        {
           
            if (input.files && input.files[0]) 
            {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $(input).parent().parent().parent().parent().find('.showImage')
                        .attr('src', e.target.result)
                        .width(100)
                        .height(100);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
  </script>  



<!--          var html = <div class="col-md-12 mrg-b25"><div class="col-md-3 text-right fldLabel">Page Banner Image :
</div><div class="col-md-9" style="padding-left: 0px;"><div class="col-md-4"><div class="file-field"><div class="btn"><span>Upload</span><input type="file" id="upload" onchange="readURL(this);" name="image"></div>
<div class="file-path-wrapper"><input class="file-path validate" type="text" name="image_name"></div>
<p class="errorClass"><?php //echo $errors->first('image_name'); ?></p></div></div><div class="col-md-3"><div class="file-field"><div class="file-path-wrapper"><img alt="image" class="showImage" src=""></div></div><p class="errorClass">Note:Image size must be less than 460*460 Resolution.</p></div><div class="col-md-2"><a href="javascript:void(0);" class="btn-floating btn-small waves-effect waves-light green add_image"><i class="material-icons">add</i></a>
</div></div></div>'; -->