<footer class="footer-wrapper"> <strong>Copyright &copy; <?php echo date('Y') ?>  , Khadi Gram Udyog</strong> All rights reserved. </footer>

      </div>


  <script type="text/javascript" src="<?php echo url('js/account.js'); ?>"></script>

      <script src="<?php echo url('js/jquery.sliderTabs.min.js'); ?>"></script>
      <script>var slider = $("div#mySliderTabs").sliderTabs({
         autoplay: false,
         mousewheel: false,
         position: "top"
         });
      </script>
      <script src="<?php echo url('js/bootstrap.min.js'); ?>"></script>
      <script type="text/javascript" src="<?php echo url('js/materialize.min.js'); ?>"></script>
      <script type="text/javascript" src="<?php echo url('js/main.js'); ?>"></script>
      <script>$('.datepicker').pickadate({
         selectMonths: true,
         selectYears: 15
         });
      </script>
      <script type="text/javascript" src="<?php echo url('js/jquery.dataTables.min.js'); ?>"></script>

      <script>
         $(document).ready(function() {

          var uri = '<?php echo Request::segment(1); ?>';

          if(uri == 'view-page-content'){

            $('#myDataTable').dataTable( {
              order: [],
              columnDefs: [ { orderable: false, targets: [-1 ] } ],
              "pageLength": 25
              });
          
          }else{

            $('#myDataTable').dataTable( {
              order: [],
              columnDefs: [ { orderable: false, targets: [-1, -2] } ],
              "pageLength": 25
              });

          }

             $('select').material_select();
             $('.datePicker').pickadate({
                selectMonths: true, // Creates a dropdown to control month
                selectYears: 216, // Creates a dropdown of 15 years to control year,
                today: '',
                clear: 'Clear',
                close: 'OK',
              });

             

             //$('.datePicker').pickadate().pickadate('picker').set('select', [2015, 3, 20]);

              CKEDITOR.on('instanceReady', function(){
                  $.each( CKEDITOR.instances, function(instance) {
                    CKEDITOR.instances[instance].on("change",function(e) {
                      for ( instance in CKEDITOR.instances)
                        CKEDITOR.instances[instance].updateElement();
                      });
                  });
              });

            $("button").removeClass("waves-effect waves-light");

            var uri = '<?php echo Request::segment(1); ?>';

            if(uri == 'edit-page-content'){

              $('.sidebar-toggle').trigger('click');

            }

         } );

         function RestrictSpace() {
            if (event.keyCode == 32) {
                return false;
            }
          }

      </script>
      

<!-- Start Form Validation Script -->
<script type="text/javascript" src="<?php echo url('js/jquery.validate.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo url('js/materialize.min.js'); ?>"></script>
<!-- End Form Validation Script -->

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
   AOS.init();
</script>




  
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
 
 <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>  
<script>
$(document).ready(function(){
    //FANCYBOX
    //https://github.com/fancyapps/fancyBox
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
});
   
</script>
<style>
.gallery
{
    display: inline-block;
    margin-top: 20px;
}
.img-responsive{
width:100%}
</style>



<script src="{{ URL::asset('frontend/kscl/public/stickyheader.js?v=1547114448') }}"></script>


<script src="{{ URL::asset('frontend/kscl/public/carousel.js?v=1540980695') }}"></script>    
<script>
$(document).ready(function(){

   $('.blast-color').each(function(i){
    $('.blast-color').eq(i).css('backgroundColor', $(this).text());
    $('.blast-color').eq(i).on('click', function(){
      color = $(this).css('backgroundColor');
       localStorage.setItem('my_custom_color', color);
     });
  });

   $('input[name="blastCustomColor"]').on('change', function(){
    color = $(this).val();
     localStorage.setItem('my_custom_color', color);
    setColor(color);
  });

   $('*').on('click', function(){
    setColor(color);
  });
});

var color;

var my_custom_color = localStorage.getItem('my_custom_color');
if(my_custom_color) {
  color = my_custom_color;
  setColor(color);
}

 function setColor(color){
  $('[data-blast="color"]').css('color', color);
  $('[data-blast="bgColor"]').css('backgroundColor', color);
  $('[data-blast="borderColor"]').css('border-color', color);
}

</script>

   </body>
</html>
