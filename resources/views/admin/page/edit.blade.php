<div class="content-content_container">
  <section class="content" style="position:relative">
  <div class="row mrg-b20">
  <div class="col m8 s12 no-mrg">
  <h1 class="head-title"><span class="gry-light">Edit Page Content </span></h1>
  </div>
  <div class="back-align">
    <a href="{{ url('view-page-content') }}"><i class="far fa-arrow-circle-o-left"></i> Back</a>
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

<form name="update-PageContent" action="<?php echo url('update-page-content/'.$data['results']->id); ?>" method="POST" id="updatePageContent" enctype="multipart/form-data">

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
<input id="title" name="title" type="text" class="validate" value="<?php echo $data['results']->title; ?>" placeholder="Page Title">
<div class="errorClass"><?php echo $errors->first('title'); ?></div>
</div>
</div>

<div class="col-md-12 mrg-b25">
<div class="col-md-3 text-right fldLabel">
<span class="required_fild">*</span>
Page Slug:
</div>
<div class="col-md-8">
 <input id="slug" name="slug" type="text" class="validate" value="<?php echo $data['results']->slug; ?>" placeholder="Page Slug" readonly>
 <div class="errorClass"><?php echo $errors->first('slug'); ?></div>
</div>
</div>

<div class="col-md-12 mrg-b25">
<div class="col-md-3 text-right fldLabel">
<span class="required_fild">*</span>
Page Keyword:
</div>
<div class="col-md-8">
 <input id="keyword" name="keyword" type="text" class="validate" value="<?php echo $data['results']->keyword; ?>" placeholder="Page Keyword">
 <div class="errorClass"><?php echo $errors->first('keyword'); ?></div>
</div>
</div>

<div class="col-md-12 mrg-b25">
<div class="col-md-3 text-right fldLabel">
<span class="required_fild">*</span>
Page Description:
</div>
<div class="col-md-8">
 <input id="description" name="description" type="text" class="validate" value="<?php echo $data['results']->description; ?>" placeholder="Page Description">
 <div class="errorClass"><?php echo $errors->first('description'); ?></div>
</div>
</div>

<div class="col-md-12 mrg-b25">
<div class="col-md-2 fldLabel" style="margin-left:80px;">
Page Content:
</div>
<div class="col-md-10" style="margin-left:80px;">
<textarea style="margin: 0px; height: 96px;" id="content" name="contents" class="validate ckeditor" placeholder="Page Content"><?php echo $data['results']->contents; ?></textarea>
<div class="errorClass"><?php echo $errors->first('contents'); ?></div>
</div>
</div>
</div>

<?php if(isset($data['holiday'])){ ?>

<div class="col-md-12 mrg-b25 field_wrapper_col">
 <table class="table table-bordered table-striped mrg-b0 table-responsive">
   <thead>
     <th>Holiday Name</th>
     <th>Holiday Date Range</th>
     <th>&nbsp;</th>
   </thead>
   <tbody>

<?php $i=0; if(count($data['holiday']->first()) > 0) { foreach($data['holiday'] as $data ){ ?>

     <tr id="tab_remove">


       <td><input placeholder="Holiday Name" value="<?php if($data->holiday_name){ echo $data->holiday_name;} ?>" name="holiday_name[]">
       <div class="errorClass"><?php echo $errors->first('holiday_name[]'); ?></div>
       </td>


       <td class="row">

       <div class="col-md-12">

      <div class="hide_date_on_load show_date<?php echo $i; ?>">
       <div class="clo-md-5">
       <input type="text" class="datePicker start_date<?php echo $i; ?>" value="<?php if($data->holiday_start_date){ echo $data->holiday_start_date; } ?>" placeholder="Holiday date start" name="holiday_date1[]">
       <i class="right fa fa-calendar" style="margin-right: 14px !important;
      margin-top: -28px !important;"></i>
      <div class="errorClass"><?php echo $errors->first('holiday_date1[]'); ?></div>
      </div>


      <div class="col-md-2">
      -
      </div>
      <div class="clo-md-5">
      <input type="text" class="datePicker end_date<?php echo $i; ?>" value="<?php if($data->holiday_end_date){ echo $data->holiday_end_date;} ?>" placeholder="Holiday date end" name="holiday_date2[]">
      <i class="right fa fa-calendar" style="margin-right: 14px !important;
      margin-top: -28px !important;"></i>
      <div class="errorClass"><?php echo $errors->first('holiday_date2[]'); ?></div>
      </div>
      </div>
      </div>

      </td>

      <td>
        <a href="javascript:void(0);" class="remove_button"><i class="material-icons">cancel</i></a>
      </td>


     </tr>

<?php $i++; } } else { echo '<tr class="errorClass"><th colspan="4"><center>No records..</center></th></tr>'; } ?>
     
   </tbody>
 </table>

</div>

<div class="col-md-12 mrg-b25">
<div class="text-left fldLabel">
<a href="javascript:void(0);" class="waves-effect waves-light btn btn_default red add_holiday">Add More <i class="fa fa-plus"></i></a>
</div>
</div>

<?php } ?>

<div class="col-md-12 mrg-b25">
<div class="col-md-3 text-right fldLabel">
&nbsp;
</div>
<div class="col-md-8">
<button class="waves-effect waves-light btn btn_default mr10 unique_member">Update</button>
 <a class="waves-effect waves-light btn btn_default red"
  onclick="window.location.href='<?php echo url('view-page-content'); ?>'">Cancel</a>
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
</div>


  <script type="text/javascript">

  $(window).load(function(){

      var maxField_color = 30; //Input fields increment limitation

      var addButton_col = $('.add_holiday'); //Add button selector

      var wrapper_col = $('.field_wrapper_col'); //Input field wrapper





      var table_inc = <?php echo isset($i) ? $i : 0; ?>;
      var col_count = table_inc+2; //Initial field counter is 1

      $(addButton_col).click(function(){ //Once add button is clicked
          $('.errorClass').remove();
          if(col_count < maxField_color){ //Check maximum number of input fields

              col_count++; //Increment field counter


          var fieldHTML_color = '<table id="tab_remove" class="table table-bordered table-striped mrg-b0 table-responsive"><tr><td><input placeholder="Holiday Name" name="holiday_name[]"><div class="errorClass"><?php echo $errors->first('holiday_name[]'); ?></div></td><td class="row"><div class="col-md-12"><div class="clo-md-5"></div><div class="hide_date_on_load show_date'+table_inc+'"><div class="clo-md-5"><input type="text" placeholder="Holiday date start" name="holiday_date1[]" class="datePicker"><i class="right fa fa-calendar" style="margin-right: 14px !important;margin-top: -28px !important;"></i><div class="errorClass"><?php echo $errors->first('holiday_date1[]'); ?></div></div><div class="col-md-2">-</div><div class="clo-md-5"><input type="text" placeholder="Holiday date end" name="holiday_date2[]" class="datePicker"><i class="right fa fa-calendar" style="margin-right: 14px !important;margin-top: -28px !important;"></i><div class="errorClass"><?php echo $errors->first('holiday_date2[]'); ?></div> </div></div></div></td><td><a href="javascript:void(0);" class="remove_button"><i class="material-icons">cancel</i></a></td></tr></table>';


              $(wrapper_col).append(fieldHTML_color); // Add field html

              table_inc++;

          }

      });

      $(wrapper_col).on('click', '.remove_button', function(){ //Once remove button is clicked

          /*$("#tab_remove").remove();*/

          $(this).parents("#tab_remove").remove();//Remove field html

          col_count--; //Decrement field counter

      });

     // $(".hide_date_on_load :input").prop("disabled", true);

      $('body').on('click','.hide_closed', function(){

        var close_name = $(this).attr('name');
        var close_no = close_name.match(/\d+/);

        $('.show_date'+close_no+' :input').prop("disabled", false);

      });

      $('body').on('click', '.hide_date' ,function(){

        var close_name = $(this).attr('name');
        var close_no = close_name.match(/\d+/);

        $('.show_date'+close_no+' :input').prop("disabled", true);

      });

      $('body').on('click', ".datePicker", function(){

        $(this).pickadate();

      });

       $('.enableAllInput').on('click', function(e){

        e.preventDefault();

        $(".hide_date_on_load :input").prop("disabled", false);

        $("#updatePageContent").submit();

      });

       var countRows = <?php echo isset($i) ? $i : 0; ?>;

       for(var i=0; i < countRows; i++) {

        var start = $(".start_date"+i).val();
        var end = $(".end_date"+i).val();

        if(start == end) {

          disableInputFields(i);

        }

       }

       function disableInputFields(i) {

        $('#closed'+i).trigger("click");

       }

    });


  </script>