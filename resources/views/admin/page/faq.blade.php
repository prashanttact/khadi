@extends('frontend.inc.edit')
<meta name="csrf-token" content="{{ csrf_token() }}" />

<div class="content-content_container">
  <section class="content" style="position:relative">
  <div class="row mrg-b20">
    <div class="col m8 s12 no-mrg">
      <h1 class="head-title"><span class="gry-light">Edit Page Content </span></h1>
    </div>
    <div class="back-align"> <a href="{{ url('view-page-content') }}"><i class="far fa-arrow-alt-circle-left"></i> Back</a> </div>
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

<div class="container-fluid">


<div class="container-fluid" id="divTopBanner">
        <div class="banner-inner">
            <div class="divHeading banner-content">
                <p class="text-white mb-0" data-aos="fade-right" data-aos-once="true" data-aos-duration="1500">Get to
                    Know The City</p>
                <h3 class="text-white" data-aos="fade-right" data-aos-once="true" data-aos-duration="1500">Kanpur City<br>
                    Profile
                </h3>
                <div data-aos="fade-right" data-aos-once="true" data-aos-duration="1000" data-aos-delay="500">
                    <!-- <img src="assets/img/headingbottomwhite.jpg"> -->
                    <img src="{{ URL::asset('frontend/kscl/assets/img/headingbottomwhite.jpg')}}">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid containerpadding" id="main-content">
        <div class="row fixedrow" id="divRowMainFeatures">
            <div class="col-xl-3">
                <div class="divHeading">
                    <h1 class="text-uppercase" style="text-align: left;" data-aos="fade-right" data-aos-once="true"
                        data-aos-duration="1500" data-blast="color">&nbsp; 
                        Help
                        <br>& FAQs'
                    </h1>
                    <div style="text-align: left;" data-aos="fade-right" data-aos-once="true" data-aos-duration="1000"
                        data-aos-delay="500">
                        <!-- <img src="assets/img/headingbottom.jpg"> -->
                        <img src="{{ URL::asset('frontend/kscl/assets/img/headingbottom.jpg')}}">
                    </div>
                </div>
                <div class="divDotbgCaptionBox p-2" data-aos="fade-right" data-aos-once="true" data-aos-duration="3000">
                    <div style="text-align: left;">
                        <!-- <img src="assets/img/bluequotestart.png " style="width: 14px;"> -->
                        <img src="{{ URL::asset('frontend/kscl/assets/img/bluequotestart.png')}}" style="width: 14px;">

                    </div>
                    <em>Kanpur is the 11th most populous urban city in India, largest urban agglomeration in Uttar
                        Pradesh.</em>
                    <div style="text-align: right;">
                        <!-- <img src="assets/img/bluequoteend.png" style="width: 14px;"> -->
                        <img src="{{ URL::asset('frontend/kscl/assets/img/bluequoteend.png')}}" style="width: 14px;">

                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-md-9">
                <div class="accordion" id="accordionExample">
                    <?php
                    $i = 1;
                    if($data['faq'])
                        {
                        foreach($data['faq'] as $row)  
                        {  
                            //print_r($row->questions);
                            //die();
                    ?>    
                        <div class="card">
                        <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            <h2 class="mb-0 accordion-title">
                                <!-- <a class="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    What is the famous places to see in Kanpur Smart City?
                                </a> -->
                                
                                <div class="edit-icon1">
                                    <a data-toggle='modal' data-target='#questions' href='javascript:void(0);'><img src="{{ URL::asset('frontend/images/edit_ic.png') }}" class="edit_icon"></a><?php echo $row->questions; ?>
                                </div>

                                <i class="fas fa-plus"></i>
                            </h2>
                        </div>
                        
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                 <p>
                                    Here are the list of places to see in Kanpur Smart City
                                </p>

                            </div>
                        </div>
                    </div>
                    <?php
                        }}
                    ?>
                    <!-- <div class="card">
                        <div class="card-header" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="false" aria-controls="collapseTwo">
                            <h2 class="mb-0 accordion-title">
                                <a class=" collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                     What are Do's and Dont's for Tourists?
                                </a>
                                <i class="fas fa-plus"></i>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>
                                As a first time visitor to the biggest holy gathering, you must be prepared with
                                basic
                                instructions about what to do
                                and what not. You can check these instructions at here
                                </p>

                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="card">
                        <div class="card-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree"
                            aria-expanded="false" aria-controls="collapseThree">
                            <h2 class="mb-0 accordion-title">
                                <a class=" collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    How to reach Kanpur Smart City?
                                </a>
                                <i class="fas fa-plus"></i>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>
                                    To reach Kanpur Smart City by air/train or road, please visit here.
                                </p>

                            </div>
                        </div>
                    </div> -->
                </div>
            </div>

        </div>
    </div>


</div>


</div>

</div>
</div>
  </div>


  
<div id="questions" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="mtitle" style="text-transform:capitalize;">FAQs Page Content</h4>
        </div>
        <form action="{{ url('updateFaqPage/4/questions') }}" method="POST" class="questions">
          {{ csrf_field() }}
          <textarea style="margin: 0px; height: 96px;" id="content" name="content" class="validate ckeditor" placeholder="Page Content"><?php echo $data['results']->questions; ?></textarea>
          <div class="modal-body" id="elistdata"> </div>
          <div class="modal-footer">
            <button style="float: none;" form-id="questions" type="button" class="btn btn-default add_content" data-dismiss="modal">Update</button>
            &nbsp; <a class="waves-effect waves-light btn btn_default red" data-dismiss="modal">Close</a> </div>
        </form>
      </div>
    </div>
  </div>

  </section>

<script>
      $(".choose-photo").on("click",function(){
    var form_id = $(this).closest('form')[0];
      form_id = form_id.id;
     // alert('Form Id:'+form_id);
        $('#'+form_id+' .input-file').click();
    });
  
  $(".input-file").on("change",function(event){   
    var input_file_value  = $(this).val();    
       /* var reg=/(.jpg|.jpeg|.gif|.png)$/;        
        if (!reg.test(input_file_value)) {
            alert('Invalid File Type');
            return false;
        }  */
        var Size=$(this)[0].files[0].size;
        var iSize = (Size / (1024*1024)).toFixed(2);
        if(validateFileType(input_file_value)==false){
      alert("Allowed file type ['jpg','png','jpeg'] and size up to 2 mb.");
            return false;    
    }
                   
       //disable the default form submission 
       event.preventDefault();
      var form_id = $(this).closest('form')[0];
      form_id = form_id.id;
       // Get form
        var form = $('#'+form_id)[0];
    
       //grab all form data (Create an FormData object ) 
        var formData = new FormData(form);
      //var formData = new FormData($(this)[0]);
    // formData = JSON.stringify(formData);

       var url = "<?php echo url('homePageContentImageUpdate/?id=9'); ?>";

       var imageUrl = "<?php echo url('uploads/homepage'); ?>";
       
       if (validateFileType(input_file_value)==true && iSize<=2) { 

        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        $.ajax({
            type: "POST",
            dataType: 'json',
            enctype: 'multipart/form-data',
            url: url,
            data: formData,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (data) {
      
           if(data.status == 'success'){

           $('#display_1').prop("src", imageUrl+"/"+data.response);
             window.location.reload();

          }

          if(data.status == 'error'){

            alert(data.response);

          }

            },
            error: function (e) {
                //console.log("ERROR : ", e.responseText);
                //console.log("ERROR : ", e);               
            }
        });
        /*.done(function(data) {
  
          if(data.status == 'success'){

            $('#display_'+form_id).prop("src", imageUrl+"/"+data.response);

          }

          if(data.status == 'error'){

            alert(data.response);

          }

        }); */ 
         }else {
      alert("Allowed file type ['jpg','png','jpeg'] and size up to 2 mb.");
            return false;
     }
        
              
    });
    
    
    function validateFileType(file)
    {
        var exts = ['jpg','png','jpeg'];
        if ( file ) {
        var get_ext = file.split('.');
        get_ext = get_ext.reverse();
        if ( $.inArray ( get_ext[0].toLowerCase(), exts ) > -1 ){
        return true;
        } else {
        return false;
        }
        }
    }

    $(document).ready(function(){

      $('.add_content').on('click', function(){

        var name = $(this).attr('form-id');

        $('.'+name).submit();

      });

    });

 </script>