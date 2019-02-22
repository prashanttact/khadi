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
                <h3 class="text-white" data-aos="fade-right" data-aos-once="true" data-aos-duration="1500">Terms and Conditions -->
                </h3>
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
                    <!-- <h1 class="text-uppercase" style="padding-bottom: 0px;" data-aos="fade-right" data-aos-duration="1500" data-aos-once="true" data-blast="color">Terms and Conditions</h1> -->
                    <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
                        <!-- <img src="assets/img/headingbottom.jpg"> -->
                        <img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}">
                    </div>
                </div>
            </div>
            <div class="edit-icon1">
                <a data-toggle='modal' data-target='#content_3' href='javascript:void(0);'><img src="{{ URL::asset('frontend/images/edit_ic.png') }}" class="edit_icon"></a><p><?php echo $data['results']->content_3; ?></p>
            </div>
            <!-- <p>This website is designed, developed and maintained by Kanpur Smart City Limited, Uttar Pradesh Government.</p> -->

            <div class="edit-icon1">
                <a data-toggle='modal' data-target='#content_4' href='javascript:void(0);'><img src="{{ URL::asset('frontend/images/edit_ic.png') }}" class="edit_icon"></a><p><?php echo $data['results']->content_4; ?></p>
            </div>
            <!-- <p>Though all efforts have been made to ensure the accuracy and currency of the content on this website, the same should not be construed as a statement of law or used for any legal purposes. In case of any ambiguity or doubts, users are advised to verify/check with the Department(s) and/or other source(s), and to obtain appropriate professional advice. Under no circumstances will this Department be liable for any expense, loss or damage including, without limitation, indirect or consequential loss or damage, or any expense, loss or damage whatsoever arising from use, or loss of use, of data, arising out of or in connection with the use of this website.</p> -->
            
            <div class="edit-icon1">
                <a data-toggle='modal' data-target='#content_5' href='javascript:void(0);'><img src="{{ URL::asset('frontend/images/edit_ic.png') }}" class="edit_icon"></a><p><?php echo $data['results']->content_5; ?></p>
            </div>
            <!-- <p>These terms and conditions shall be governed by and construed in accordance with the Indian Laws. Any dispute arising under these terms and conditions shall be subject to the jurisdiction of the courts of India.</p> -->
            
            <div class="edit-icon1">
                <a data-toggle='modal' data-target='#content_6' href='javascript:void(0);'><img src="{{ URL::asset('frontend/images/edit_ic.png') }}" class="edit_icon"></a><p><?php echo $data['results']->content_6; ?></p>
            </div>
            <!-- <p>The information posted on this website could include hypertext links or pointers to information created and maintained by non-Government / private organisations. Kanpur Smart City Limited is providing these links and pointers solely for your information and convenience. When you select a link to an external website, you are leaving the Kanpur Smart City Limited website and are subject to the privacy and security policies of the owners/ sponsors of the external website.</p> -->
            
            <div class="edit-icon1">
                <a data-toggle='modal' data-target='#content_7' href='javascript:void(0);'><img src="{{ URL::asset('frontend/images/edit_ic.png') }}" class="edit_icon"></a><p><?php echo $data['results']->content_7; ?></p>
            </div>
            <!-- <p>Kanpur Smart City Limited does not guarantee availability of linked pages at all times. And Department cannot authorise use of copyrighted materials contained in linked website. Users are advised to request such authorisation from owners of linked websites. Kanpur Smart City Limited does not guarantee that linked websites comply with Indian Government Web Guidelines.</p> -->
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
                <h4 class="modal-title" id="mtitle" style="text-transform:capitalize;">Terms and Condition Page Content</h4>
            </div>
            <form action="{{ url('updateTermsPage/7/content_1') }}" method="POST" class="content_1">
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
                <h4 class="modal-title" id="mtitle" style="text-transform:capitalize;">Terms and Condition Page Content</h4>
            </div>
            <form action="{{ url('updateTermsPage/7/content_2') }}" method="POST" class="content_2">
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
                <h4 class="modal-title" id="mtitle" style="text-transform:capitalize;">Terms and Condition Page Content</h4>
            </div>
            <form action="{{ url('updateTermsPage/7/content_3') }}" method="POST" class="content_3">
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
                <h4 class="modal-title" id="mtitle" style="text-transform:capitalize;">Terms and Condition Page Content</h4>
            </div>
            <form action="{{ url('updateTermsPage/7/content_4') }}" method="POST" class="content_4">
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
                <h4 class="modal-title" id="mtitle" style="text-transform:capitalize;">Terms and Condition Page Content</h4>
            </div>
            <form action="{{ url('updateTermsPage/7/content_5') }}" method="POST" class="content_5">
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
                <h4 class="modal-title" id="mtitle" style="text-transform:capitalize;">Terms and Condition Page Content</h4>
            </div>
            <form action="{{ url('updateTermsPage/7/content_6') }}" method="POST" class="content_6">
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
                <h4 class="modal-title" id="mtitle" style="text-transform:capitalize;">Terms and Condition Page Content</h4>
            </div>
            <form action="{{ url('updateTermsPage/7/content_7') }}" method="POST" class="content_7">
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