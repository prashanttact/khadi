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
                <!-- As a general rule, this website does not collect Personal Information about you when you visit the site. You can generally visit the site without revealing Personal Information, unless you choose to provide such information. -->
            </p>
            <h6>Site Visit data:</h6>
            <!-- <h5>Site Visit data:</h5> -->
            <p>
            	<?php if($data->content_4)
	            {
	            ?>
	            <?php    
	                echo $data->content_4; 
	            }
	            ?>
                <!-- This website records your visit and logs the following information for statistical purposes -your server’s address; the name of the top-level domain from which you access the Internet (for example, .gov, .com, .in, etc.); the type of browser you use; the date and time you access the site; the pages you have accessed and the documents downloaded and the previous Internet address from which you linked directly to the site. -->
            </p>
            <p>
            	<?php if($data->content_5)
	            {
	            ?>
	            <?php    
	                echo $data->content_5; 
	            }
	            ?>
                <!-- We will not identify users or their browsing activities, except when a law enforcement agency may exercise a warrant to inspect the service provider’s logs. -->
            </p>
            <h6>Cookies:</h6>
            <!-- <h5>Cookies:</h5> -->
            <p>
            	<?php if($data->content_6)
	            {
	            ?>
	            <?php    
	                echo $data->content_6; 
	            }
	            ?>
                <!-- A cookie is a piece of software code that an internet web site sends to your browser when you access information at that site. This site does not use cookies. -->
            </p>
            <h6>Email Management:</h6>
            <!-- <h5>Email Management:</h5> -->
            <p>
            	<?php if($data->content_7)
	            {
	            ?>
	            <?php    
	                echo $data->content_7; 
	            }
	            ?>
                <!-- Your email address will only be recorded if you choose to send a message. It will only be used for the purpose for which you have provided it and will not be added to a mailing list. Your email address will not be used for any other purpose, and will not be disclosed, without your consent. -->
            </p>
            <h6>Collection of Personal Information:</h6>
            <!-- <h5>Collection of Personal Information:</h5> -->
            <p>
            	<?php if($data->content_8)
	            {
	            ?>
	            <?php    
	                echo $data->content_8; 
	            }
	            ?>
                <!-- If you are asked for any other Personal Information you will be informed how it will be used if you choose to give it. If at any time you believe the principles referred to in this privacy statement have not been followed, or have any other comments on these principles, please notify the webmaster through the contact us page.  -->
            </p>
            <p>
            	<?php if($data->content_9)
	            {
	            ?>
	            <?php    
	                echo $data->content_9; 
	            }
	            ?>
                <!-- * Note: The use of the term “Personal Information” in this privacy statement refers to any information from which your identity is apparent or can be reasonably ascertained  -->
            </p>
        </div> 
    </div> 
</div>

@stop 
