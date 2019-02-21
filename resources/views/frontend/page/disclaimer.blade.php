@extends('frontend.inc.head')
@section('content') 
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ url('frontend/kscl/assets/img/banner-kscl.jpg')}}" alt="banner" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="{{ url('frontend/kscl/assets/img/banner-kscl2.jpg')}}" alt="banner" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="{{ url('frontend/kscl/assets/img/banner-kscl3.jpg')}}" alt="banner" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="{{ url('frontend/kscl/assets/img/banner-kscl4.jpg')}}" alt="banner" width="1100" height="500">
    </div>
  	<div class="banner-inner">
  		<div class="divHeading banner-content text-white" data-aos="fade-right" data-aos-once="true" data-aos-duration="1500">
  			<p class="text-white mb-0">
	  			<?php if($data->content_1)
	            {
	            ?>
	            <?php    
	                echo $data->content_1; 
	            }
	            ?>
	        </p>
  			<!-- <p class="text-white mb-0" data-aos="fade-right" data-aos-once="true" data-aos-duration="1500">Kanpur Smart City Limited</p>
            <h3 class="text-white" data-aos="fade-right" data-aos-once="true" data-aos-duration="1500">Contact Us</h3> -->
            
            <div data-aos="fade-right" data-aos-once="true" data-aos-duration="1000" data-aos-delay="500">
                <!-- <img src="assets/img/headingbottomwhite.jpg"> -->
                <img src="{{ url('frontend/kscl/assets/img/headingbottomwhite.jpg')}}">
            </div>      
        </div>    
  	</div>
    
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>



<div class="container-fluid position-relative bg-icon bg-icon-bottom" id="main-content"> 
    <div class="container-fluid position-relative">
        <div class="row fixedrow py-5" id="divOnlineService">
            <div class="col-12 mb-5">
                <div class="divHeading divNewSnapShots">
                    
                    <h1 class="text-uppercase" style="padding-bottom: 0px;" data-aos="fade-right" data-aos-duration="1500" data-aos-once="true" data-blast="color">
	                    <?php if($data->content_2)
			            {
			            ?>
			            <?php    
			                echo $data->content_2; 
			            }
			            ?>
			        </h1>
                    <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
                        <!-- <img src="assets/img/headingbottom.jpg"> -->
                        <img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}">
                    </div>
                </div>
            </div>
            <p>
            	<?php if($data->content_3)
	            {
	            ?>
	            <?php    
	                echo $data->content_3; 
	            }
	            ?>
            </p>
        </div>     
    </div>
</div>

@stop 
