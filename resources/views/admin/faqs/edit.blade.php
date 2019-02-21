<div class="content-content_container">
  <section class="content" style="position:relative">
  <div class="row mrg-b20">
  <div class="col m8 s12 no-mrg">
  <h1 class="head-title"><span class="gry-light">Edit FAQ </span></h1>
  </div>


  <div class="col m4 s12 right-align right required_msg">    <div class="back-align">
               <a href="{{ url('view-faq') }}"><i class="far fa-arrow-alt-circle-left"></i> Back</a>
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


<form name="updateFaqs" action="<?php echo url('update-faq/'.$data['results']->id); ?>" method="POST" id="updateFaqs" enctype="multipart/form-data">

{{ csrf_field() }}

<div class="row form_fld_label">
<div class="col-md-12 formFldCont">
 
 <!--Select category-->
<div class="col-md-12 mrg-b25">
  <div class="row">
<div class="col-md-3 fldLabel">
<span class="required_fild"></span>
Select Category <b style="color:red">*</b>
</div>
<div class="col-md-8">

 <select class="validate" name="category">

   @foreach($category_obj as $category)
   
   <option style="color:black" value="<?php echo $category['id'];  ?>"><?php echo $category['category']; ?></option>
   @endforeach
 </select>

 <div class="errorClass"><?php echo $errors->first('faq_question'); ?></div>
</div>
</div>
</div>






<div class="col-md-12 mrg-b25">
  <div class="row">
<div class="col-md-3 fldLabel">
<span class="required_fild"></span>
FAQ question <b style="color:red">*</b>
</div>
<div class="col-md-8">
 <textarea required style="margin: 0px; height: 100px;" id="faq_question" name="faq_question" type="text" class="validate" value="" placeholder="FAQ question"><?php echo $data['results']->faq_question; ?></textarea>
 <div class="errorClass"><?php echo $errors->first('faq_question'); ?></div>
</div>
</div>
</div>



<div class="col-md-12 mrg-b25">
  <div class="row">
<div class="col-md-3 fldLabel">
<span class="required_fild"></span>
FAQ Answers: <b style="color:red">*</b>
</div>
<div class="col-md-8">
<textarea required style="margin: 0px; height: 200px;" class="1ckeditor" id="faq_answer" name="faq_answer" placeholder="write answers"><?php echo $data['results']->faq_answer; ?></textarea>
 <div class="errorClass"><?php echo $errors->first('faq_answer'); ?></div>
</div>
</div>
</div>


<!--
<div class="col-md-12 mrg-b25">
<div class="row">
<div class="col-md-3 fldLabel">
<span class="required_fild">*</span>
Date:
</div>
<div class="col-md-3">
<input type="date" name="date" id="date" value="<?php echo date('Y-m-d',strtotime(now())); ?>">
<div class="errorClass"><?php echo $errors->first('news_date'); ?></div>
</div>
</div>
</div>
-->

<!-- <div class="col-md-12 mrg-b25">
  <div class="row">
<div class="col-md-3 fldLabel">
Additional Information:
</div>
<div class="col-md-8">
<div class="file-field">
<div class="btn">
<span>Upload</span>
<input type="file" id="upload" name="pdf">
</div>
<div class="file-path-wrapper">
<input class="file-path validate" id="pdf" type="text" name="image_name">
</div>
<p class="errorClass"><?php echo $errors->first('pdf'); ?></p>
</div>
</div>    
</div>  
</div> -->


<!-- <div class="col-md-12 mrg-b25">
<div class="col-md-3 text-right fldLabel">
&nbsp;
</div>
<div class="col-md-8">
<span class="errorClass">Note:PDF Size should not be more than 10 MB.</span>
</div>
</div> -->      


<!-- <div class="col-md-12 mrg-b25">
<div class="col-md-3 text-right fldLabel">
&nbsp;
</div>
<div class="col-md-8">
<?php if(!empty($data['results']->news_pdf)){?>
<div class="file-field">
   <a id="tab_remove" href="<?php echo url('frontend/kscl/assets/newspdf/').'/'.$data['results']->news_pdf; ?>" target="_blank"> <i class="fa fa-file-text-o" aria-hidden="true" style="font-size:80px;"  title="Document"></i></a>
  <a href="javascript:void(0);" class="remove_button"><i class="material-icons" onclick="window.location.href='<?php echo url('deletePdf-news/'.$data['results']->id); ?>'">cancel</i></a>

</div>
<?php }?>
</div>
</div> -->

<!--
<div class="col-md-12 mrg-b25">
<div class="row">
<div class="col-md-3 fldLabel">
<span class="required_fild">*</span>
News Image :
</div>
<div class="col-md-8">
<div>
<div>
<div class="file-upload">
<div class="file-select">
<div class="file-select-button" id="fileName">Upload</div>
<div class="file-select-name" id="noFile">No file chosen...</div> 
-->
<!-- <input type="file" name="chooseFile" id="chooseFile" onchange="readURL(this);" > -->

<!--
<input type="file" id="image" name="image" onchange="readURL(this);">
</div>
</div>  -->
<!-- <input type="file" id="image" name="image" onchange="readURL(this);">
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
     <img src="<?php echo url('frontend/kscl/assets/img/news/'.$data['results']->news_img_path ); ?>" class="showImage" width="100px;" height="100px;" />
</div>
</div>
</div> 
</div>  -->
<div class="col-md-12 mrg-b25">
  <div class="row">
<div class="col-md-3 fldLabel">
&nbsp;
</div>
<div class="col-md-8">
<button class="waves-effect waves-light btn btn_default mr10 unique_member">Update</button>
      <a class="waves-effect waves-light btn btn_default red"
      onclick="window.location.href='<?php echo url('view-faq'); ?>'">Cancel</a>
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
     <script>
$('#image').bind('change', function () {
  var filename = $("#image").val();
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