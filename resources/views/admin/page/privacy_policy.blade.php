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
                        <div class="edit-icon text-white" data-aos="fade-right" data-aos-once="true" data-aos-duration="1500">
                            <a data-toggle='modal' data-target='#content_1' href='javascript:void(0);'><img src="{{ URL::asset('frontend/images/edit_ic.png') }}" class="edit_icon"></a><p class="text-white mb-0" ><?php echo $data['results']->content_1; ?></p>
                        </div>
                        <!-- <p class="text-white mb-0" data-aos="fade-right" data-aos-once="true" data-aos-duration="1500">Kanpur Smart City</p>
                        <h3 class="text-white" data-aos="fade-right" data-aos-once="true" data-aos-duration="1500">Privacy Policy</h3> -->
                        <div data-aos="fade-right" data-aos-once="true" data-aos-duration="1000" data-aos-delay="500">
                            <!-- <img src="assets/img/headingbottomwhite.jpg"> -->
                            <img src="{{ url('frontend/kscl/assets/img/headingbottomwhite.jpg')}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid position-relative">
                <div class="row fixedrow py-5" id="divOnlineService">
                    <div class="col-12 mb-5">
                        <div class="divHeading divNewSnapShots">
                            <div class="edit-icon1">
                                <a data-toggle='modal' data-target='#content_2' href='javascript:void(0);'><img src="{{ URL::asset('frontend/images/edit_ic.png') }}" class="edit_icon"></a><h1 class="text-uppercase" style="padding-bottom: 0px;" data-aos="fade-right" data-aos-duration="1500" data-aos-once="true" data-blast="color"><?php echo $data['results']->content_2; ?></h1>
                            </div>
                            <!-- <h1 class="text-uppercase" style="padding-bottom: 0px;" data-aos="fade-right" data-aos-duration="1500" data-aos-once="true" data-blast="color">Privacy Policy</h1> -->

                            <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
                                <!-- <img src="assets/img/headingbottom.jpg"> -->
                                <img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}">
                            </div>
                        </div>
                    </div>
                    <div class="edit-icon1">
                        <a data-toggle='modal' data-target='#content_3' href='javascript:void(0);'><img src="{{ URL::asset('frontend/images/edit_ic.png') }}" class="edit_icon"></a><p><?php echo $data['results']->content_3; ?></p>
                    </div>
                    <!-- <p>
                        As a general rule, this website does not collect Personal Information about you when you visit the site. You can generally visit the site without revealing Personal Information, unless you choose to provide such information.
                    </p> -->
                    <h6>Site Visit data:</h6>
                    <!-- <h5>Site Visit data:</h5> -->
                    <div class="edit-icon1">
                        <a data-toggle='modal' data-target='#content_4' href='javascript:void(0);'><img src="{{ URL::asset('frontend/images/edit_ic.png') }}" class="edit_icon"></a><p><?php echo $data['results']->content_4; ?></p>
                    </div>
                    <!-- <p>
                        This website records your visit and logs the following information for statistical purposes -your server’s address; the name of the top-level domain from which you access the Internet (for example, .gov, .com, .in, etc.); the type of browser you use; the date and time you access the site; the pages you have accessed and the documents downloaded and the previous Internet address from which you linked directly to the site.
                    </p> -->
                    <div class="edit-icon1">
                        <a data-toggle='modal' data-target='#content_5' href='javascript:void(0);'><img src="{{ URL::asset('frontend/images/edit_ic.png') }}" class="edit_icon"></a><p><?php echo $data['results']->content_5; ?></p>
                    </div>
                    <!-- <p>
                        We will not identify users or their browsing activities, except when a law enforcement agency may exercise a warrant to inspect the service provider’s logs.
                    </p>  -->
                    <h6>Cookies:</h6>
                    <!-- <h5>Cookies:</h5> -->
                    <div class="edit-icon1">
                        <a data-toggle='modal' data-target='#content_6' href='javascript:void(0);'><img src="{{ URL::asset('frontend/images/edit_ic.png') }}" class="edit_icon"></a><p><?php echo $data['results']->content_6; ?></p>
                    </div>
                    <!-- <p>
                        A cookie is a piece of software code that an internet web site sends to your browser when you access information at that site. This site does not use cookies.
                    </p>  -->
                    <h6>Email Management:</h6>
                    <!-- <h5>Email Management:</h5> -->
                    <div class="edit-icon1">
                        <a data-toggle='modal' data-target='#content_7' href='javascript:void(0);'><img src="{{ URL::asset('frontend/images/edit_ic.png') }}" class="edit_icon"></a><p><?php echo $data['results']->content_7; ?></p>
                    </div>
                    <!-- <p>
                        Your email address will only be recorded if you choose to send a message. It will only be used for the purpose for which you have provided it and will not be added to a mailing list. Your email address will not be used for any other purpose, and will not be disclosed, without your consent.
                    </p>  -->
                    <h6>Collection of Personal Information:</h6>
                    <!-- <h5>Collection of Personal Information:</h5> -->
                    <div class="edit-icon1">
                        <a data-toggle='modal' data-target='#content_8' href='javascript:void(0);'><img src="{{ URL::asset('frontend/images/edit_ic.png') }}" class="edit_icon"></a><p><?php echo $data['results']->content_8; ?></p>
                    </div>
                    <!-- <p>
                        If you are asked for any other Personal Information you will be informed how it will be used if you choose to give it. If at any time you believe the principles referred to in this privacy statement have not been followed, or have any other comments on these principles, please notify the webmaster through the contact us page. 
                    </p> -->
                    <div class="edit-icon1">
                        <a data-toggle='modal' data-target='#content_9' href='javascript:void(0);'><img src="{{ URL::asset('frontend/images/edit_ic.png') }}" class="edit_icon"></a><p><?php echo $data['results']->content_9; ?></p>
                    </div>
                    <!-- <p>
                        * Note: The use of the term “Personal Information” in this privacy statement refers to any information from which your identity is apparent or can be reasonably ascertained 
                    </p> -->
                </div> 
            </div> 
        </div>
    </div>
</div>
</div>
</div>


<div id="content_1" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="mtitle" style="text-transform:capitalize;">Privacy Policy Page Content</h4>
            </div>
            <form action="{{ url('updatePrivacyPage/6/content_1') }}" method="POST" class="content_1">
                {{ csrf_field() }}
                <textarea style="margin: 0px; height: 96px;" id="content" name="content" class="validate ckeditor" placeholder="Page Content"><?php echo $data['results']->content_1; ?></textarea>
                <div class="modal-body" id="elistdata"> </div>
                <div class="modal-footer">
                    <button style="float: none;" form-id="content_1" type="button" class="btn btn-default add_content" data-dismiss="modal">Update</button>
                    &nbsp; <a class="waves-effect waves-light btn btn_default red" data-dismiss="modal">Close</a> 
                </div>
            </form>
        </div>
    </div>
</div>

<div id="content_2" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="mtitle" style="text-transform:capitalize;">Privacy Policy Page Content</h4>
            </div>
            <form action="{{ url('updatePrivacyPage/6/content_2') }}" method="POST" class="content_2">
                {{ csrf_field() }}
                <textarea style="margin: 0px; height: 96px;" id="content" name="content" class="validate ckeditor" placeholder="Page Content"><?php echo $data['results']->content_2; ?></textarea>
                <div class="modal-body" id="elistdata"> </div>
                <div class="modal-footer">
                    <button style="float: none;" form-id="content_2" type="button" class="btn btn-default add_content" data-dismiss="modal">Update</button>
                    &nbsp; <a class="waves-effect waves-light btn btn_default red" data-dismiss="modal">Close</a> 
                </div>
            </form>
        </div>
    </div>
</div>

<div id="content_3" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="mtitle" style="text-transform:capitalize;">Privacy Policy Page Content</h4>
            </div>
            <form action="{{ url('updatePrivacyPage/6/content_3') }}" method="POST" class="content_3">
                {{ csrf_field() }}
                <textarea style="margin: 0px; height: 96px;" id="content" name="content" class="validate ckeditor" placeholder="Page Content"><?php echo $data['results']->content_3; ?></textarea>
                <div class="modal-body" id="elistdata"> </div>
                <div class="modal-footer">
                    <button style="float: none;" form-id="content_3" type="button" class="btn btn-default add_content" data-dismiss="modal">Update</button>
                    &nbsp; <a class="waves-effect waves-light btn btn_default red" data-dismiss="modal">Close</a> 
                </div>
            </form>
        </div>
    </div>
</div>

<div id="content_4" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="mtitle" style="text-transform:capitalize;">Privacy Policy Page Content</h4>
            </div>
            <form action="{{ url('updatePrivacyPage/6/content_4') }}" method="POST" class="content_4">
                {{ csrf_field() }}
                <textarea style="margin: 0px; height: 96px;" id="content" name="content" class="validate ckeditor" placeholder="Page Content"><?php echo $data['results']->content_4; ?></textarea>
                <div class="modal-body" id="elistdata"> </div>
                <div class="modal-footer">
                    <button style="float: none;" form-id="content_4" type="button" class="btn btn-default add_content" data-dismiss="modal">Update</button>
                    &nbsp; <a class="waves-effect waves-light btn btn_default red" data-dismiss="modal">Close</a> 
                </div>
            </form>
        </div>
    </div>
</div>

<div id="content_5" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="mtitle" style="text-transform:capitalize;">Privacy Policy Page Content</h4>
            </div>
            <form action="{{ url('updatePrivacyPage/6/content_5') }}" method="POST" class="content_5">
                {{ csrf_field() }}
                <textarea style="margin: 0px; height: 96px;" id="content" name="content" class="validate ckeditor" placeholder="Page Content"><?php echo $data['results']->content_5; ?></textarea>
                <div class="modal-body" id="elistdata"> </div>
                <div class="modal-footer">
                    <button style="float: none;" form-id="content_5" type="button" class="btn btn-default add_content" data-dismiss="modal">Update</button>
                    &nbsp; <a class="waves-effect waves-light btn btn_default red" data-dismiss="modal">Close</a> 
                </div>
            </form>
        </div>
    </div>
</div>

<div id="content_6" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="mtitle" style="text-transform:capitalize;">Privacy Policy Page Content</h4>
            </div>
            <form action="{{ url('updatePrivacyPage/6/content_6') }}" method="POST" class="content_6">
                {{ csrf_field() }}
                <textarea style="margin: 0px; height: 96px;" id="content" name="content" class="validate ckeditor" placeholder="Page Content"><?php echo $data['results']->content_6; ?></textarea>
                <div class="modal-body" id="elistdata"> </div>
                <div class="modal-footer">
                    <button style="float: none;" form-id="content_6" type="button" class="btn btn-default add_content" data-dismiss="modal">Update</button>
                    &nbsp; <a class="waves-effect waves-light btn btn_default red" data-dismiss="modal">Close</a> 
                </div>
            </form>
        </div>
    </div>
</div>

<div id="content_7" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="mtitle" style="text-transform:capitalize;">Privacy Policy Page Content</h4>
            </div>
            <form action="{{ url('updatePrivacyPage/6/content_7') }}" method="POST" class="content_7">
                {{ csrf_field() }}
                <textarea style="margin: 0px; height: 96px;" id="content" name="content" class="validate ckeditor" placeholder="Page Content"><?php echo $data['results']->content_7; ?></textarea>
                <div class="modal-body" id="elistdata"> </div>
                <div class="modal-footer">
                    <button style="float: none;" form-id="content_7" type="button" class="btn btn-default add_content" data-dismiss="modal">Update</button>
                    &nbsp; <a class="waves-effect waves-light btn btn_default red" data-dismiss="modal">Close</a> 
                </div>
            </form>
        </div>
    </div>
</div>

<div id="content_8" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="mtitle" style="text-transform:capitalize;">Privacy Policy Page Content</h4>
            </div>
            <form action="{{ url('updatePrivacyPage/6/content_8') }}" method="POST" class="content_8">
                {{ csrf_field() }}
                <textarea style="margin: 0px; height: 96px;" id="content" name="content" class="validate ckeditor" placeholder="Page Content"><?php echo $data['results']->content_8; ?></textarea>
                <div class="modal-body" id="elistdata"> </div>
                <div class="modal-footer">
                    <button style="float: none;" form-id="content_8" type="button" class="btn btn-default add_content" data-dismiss="modal">Update</button>
                    &nbsp; <a class="waves-effect waves-light btn btn_default red" data-dismiss="modal">Close</a> 
                </div>
            </form>
        </div>
    </div>
</div>

<div id="content_9" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="mtitle" style="text-transform:capitalize;">Privacy Policy Page Content</h4>
            </div>
            <form action="{{ url('updatePrivacyPage/6/content_9') }}" method="POST" class="content_9">
                {{ csrf_field() }}
                <textarea style="margin: 0px; height: 96px;" id="content" name="content" class="validate ckeditor" placeholder="Page Content"><?php echo $data['results']->content_9; ?></textarea>
                <div class="modal-body" id="elistdata"> </div>
                <div class="modal-footer">
                    <button style="float: none;" form-id="content_9" type="button" class="btn btn-default add_content" data-dismiss="modal">Update</button>
                    &nbsp; <a class="waves-effect waves-light btn btn_default red" data-dismiss="modal">Close</a> 
                </div>
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