<div class="content-content_container">
  <section class="content" style="position:relative">
  <div class="row mrg-b20">
  <div class="col m8 s12 no-mrg">
  <h1 class="head-title"><span class="gry-light">Add Alert </span></h1>
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


<form name="insertAlert" action="<?php echo url('insert-alert'); ?>" method="POST" id="insertAlert" enctype="multipart/form-data">

{{ csrf_field() }}

<div class="row form_fld_label">
<div class="col-md-12 formFldCont">






<div class="col-md-12 mrg-b25">
  <div class="row">
<div class="col-md-3 fldLabel">
<span class="required_fild">*</span>
Description:
</div>
<div class="col-md-8">
<textarea style="margin: 0px; height: 96px;" class="ckeditor" id="description" name="description" placeholder="Description">{{ old('description') }}</textarea>
 <div class="errorClass"><?php echo $errors->first('description'); ?></div>
</div>
</div>
</div>


<div class="col-md-12 mrg-b25">
  <div class="row">
<div class="col-md-3 fldLabel">
<span class="required_fild">*</span>
Date:
</div>
<div class="col-md-3" data-provide="datepicker">
<input id="datepicker" data-provide="datepicker" name="date" type="text" class="validate datePicker" placeholder="DD/MM/YYY" value="<?php echo date('j F, Y',strtotime(now())); ?>">
 <div class="errorClass"><?php echo $errors->first('date'); ?></div>
</div>
</div>
</div>

  

<div class="col-md-12 mrg-b25">
  <div class="row">
<div class="col-md-3 fldLabel">
<span class="required_fild">*</span>
Alert Image :
</div>

<div class="col-md-8">

<div class="file-field">
<div class="btn">
<span>Upload</span>
<input type="file" id="image" name="image" onchange="readURL(this);">
</div>
<div class="file-path-wrapper">
<input class="file-path validate"  type="text" name="image_name2">
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
<span class="errorClass">Image Size should not be more than 2 MB!


</span>
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
      onclick="window.location.href='<?php echo url('view-alert'); ?>'">Cancel</a>
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


<script>

function readURL(input) {
    /*console.log(input + 'test');
    alert(input);*/
    if (input.files && input.files[0]) 
    {
        var reader = new FileReader();
        
        reader.onload = function (e) {

           // $('#displayImg').find('.showImage')
            $(input).parents().find('.showImage')
                .attr('src', e.target.result)
                .width(100)
                .height(100);

               // console.log('test' + input.files[0]);
               // alert(e.target.result + 'test' + input.files[0]);

        };



        reader.readAsDataURL(input.files[0]);
    }
}

</script> 