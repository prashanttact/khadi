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
	  			<?php if($data->content_7)
	            {
	            ?>
	            <?php    
	                echo $data->content_7; 
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
        <div class="row fixedrow py-5" id="divSmartUrbanForm">
            <div class="col-lg-6 mb-5">
                 
                <div class="divHeading divNewSnapShots">
                	<h6 class="title title-sm mb-0" data-aos="fade-right" data-aos-duration="1500" data-aos-once="true" data-blast="color">
	                	<?php if($data->content_1)
	                    {
	                    ?>
	                    <?php    
	                        echo $data->content_1; 
	                    }
	                    ?>
	                </h6>
                    <!-- <h6 class="title title-sm mb-0" data-aos="fade-right" data-aos-duration="1500" data-aos-once="true" data-blast="color">Registered Office</h6> -->

                    

                    <div class="divHeadingBottom" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
                        <!-- <img src="assets/img/headingbottom.jpg"> -->
                        <img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}">
                    </div>
                </div>
                <div class="pt-5">
                    <ul class="smart-urban-list">
                    	<li>
	                    	<?php if($data->content_2)
		                    {
		                    ?>
		                    <?php    
		                        echo $data->content_2; 
		                    }
		                    ?>
		                </li>    
                        <!-- <li>Kanpur Smart City Limited, Nagar Nigam Mukhyalay </li> -->
                        
                        <li><p>
	                    	<?php if($data->content_3)
		                    {
		                    ?>
		                    <?php    
		                        echo $data->content_3; 
		                    }
		                    ?>
		                </p></li>  
                        <!-- <li><p>Moti Jheel, Harsh Nagar
                            <br>Kanpur, Uttar Pradesh 208002</p></li> -->
                        
                        <li>Phone </li>
                        <li><p><a href="callto: $data->content_4">
                        	<?php if($data->content_4)
		                    {
		                    ?>
		                    <?php    
		                        echo $data->content_4; 
		                    }
		                    ?>
		                </a></p></li>    
                        <!-- <li><p><a href="callto:05122541258"> 0512 254 1258</a></p></li> -->
                        

                        <li>E-Mail</li>
                        <li><p><a href="mailto:ksclkanpur@gmail.com">
                        	<?php if($data->content_5)
		                    {
		                    ?>
		                    <?php    
		                        echo $data->content_5; 
		                    }
		                    ?>
		                </a></p></li>    
                        <!-- <li><p><a href="mailto:ksclkanpur@gmail.com">ksclkanpur@gmail.com</a></p></li> -->
                    </ul>
                </div>
                
            </div>
            <div class="col-lg-6 divNewSnapShots">
                <div class="bg-img-dots pos-lb">
                    <img class="img-fluid" src="{{ url('frontend/kscl/assets/img/urbanopenspace.jpg')}}" alt="Smart Urban City" style="width: 98%;height: 498px;">
                </div>
              
            </div>
      
            <div class="col-lg-12 conract-form">
            	<h6 class="title title-sm mb-0" data-aos="fade-right" data-aos-duration="1500" data-aos-once="true" data-blast="color">
	            	<?php if($data->content_6)
	                {
	                ?>
	                <?php    
	                    echo $data->content_6; 
	                }
	                ?>
	            </h6>    
                <!-- <h6 class="title title-sm mb-0" data-aos="fade-right" data-aos-duration="1500" data-aos-once="true" data-blast="color">Contact Us</h6> -->
                

                <div class="divHeadingBottom" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
                    <img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}">
                </div><br>

             <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p> -->
                <div class="row mb-4">
                    <div class="col-md-4">
                        <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                    </div>
                    <div class="col-md-4">
                        <input type="text" id="name" name="name" class="form-control" placeholder="E-MAIL">
                    </div>
                    <div class="col-md-4">
                        <input type="text" id="name" name="name" class="form-control" placeholder="Contact Number">
                    </div>
                    <div class="col-md-12">
                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Message"></textarea>
                    </div>
                </div>
                <div class="col-md-12 ">
                    <button>Send</button>
                </div>
            </div>
        </div>
    </div>

    @stop 
