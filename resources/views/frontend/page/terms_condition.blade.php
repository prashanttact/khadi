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



<!-- <div class="container-fluid" id="divTopBanner">
    <div class="banner-inner">
        <div class="divHeading banner-content">
            <p class="text-white mb-0" data-aos="fade-right" data-aos-once="true" data-aos-duration="1500">Kanpur Smart City</p>
            <h3 class="text-white" data-aos="fade-right" data-aos-once="true" data-aos-duration="1500">Terms and Conditions</h3>
            <div data-aos="fade-right" data-aos-once="true" data-aos-duration="1000" data-aos-delay="500">
                <img src="assets/img/headingbottomwhite.jpg">
            </div>
        </div>
    </div>
</div>
     -->
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
            <!-- This website is designed, developed and maintained by Kanpur Smart City Limited, Uttar Pradesh Government. -->
        </p>
    
        <p>
            <?php if($data->content_4)
            {
            ?>
            <?php    
                echo $data->content_4; 
            }
            ?>
            <!-- Though all efforts have been made to ensure the accuracy and currency of the content on this website, the same should not be construed as a statement of law or used for any legal purposes. In case of any ambiguity or doubts, users are advised to verify/check with the Department(s) and/or other source(s), and to obtain appropriate professional advice. Under no circumstances will this Department be liable for any expense, loss or damage including, without limitation, indirect or consequential loss or damage, or any expense, loss or damage whatsoever arising from use, or loss of use, of data, arising out of or in connection with the use of this website. -->
        </p>

        <p>
            <?php if($data->content_5)
            {
            ?>
            <?php    
                echo $data->content_5; 
            }
            ?>
            <!-- These terms and conditions shall be governed by and construed in accordance with the Indian Laws. Any dispute arising under these terms and conditions shall be subject to the jurisdiction of the courts of India. -->
        </p>

        <p>
            <?php if($data->content_6)
            {
            ?>
            <?php    
                echo $data->content_6; 
            }
            ?>
            <!-- The information posted on this website could include hypertext links or pointers to information created and maintained by non-Government / private organisations. Kanpur Smart City Limited is providing these links and pointers solely for your information and convenience. When you select a link to an external website, you are leaving the Kanpur Smart City Limited website and are subject to the privacy and security policies of the owners/ sponsors of the external website. -->
        </p>

        <p>
            <?php if($data->content_7)
            {
            ?>
            <?php    
                echo $data->content_7; 
            }
            ?>
            <!-- Kanpur Smart City Limited does not guarantee availability of linked pages at all times. And Department cannot authorise use of copyrighted materials contained in linked website. Users are advised to request such authorisation from owners of linked websites. Kanpur Smart City Limited does not guarantee that linked websites comply with Indian Government Web Guidelines. -->
        </p>
    </div> 
</div>

@stop 
