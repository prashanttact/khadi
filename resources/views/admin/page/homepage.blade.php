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
      <!-- <div class="container-fluid">
        <div class="home-header text-center">
          <div class="container">
            <div class="pera_graph"><a data-toggle='modal' data-target='#content_1' href='javascript:void(0);'><img src="{{ URL::asset('frontend/images/edit_ic.png') }}" class="edit_icon"></a> <?php echo $data['results']->content_1; ?> </div>
          </div>
        </div>
      </div> -->
<div class="container-fluid">
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
           <div class="divHeading banner-content home-banner-content">
                <div class="edit-icon text-white" data-aos="fade-right" data-aos-once="true" data-aos-duration="1500">
                    <a data-toggle='modal' data-target='#content_1' href='javascript:void(0);'><img src="{{ URL::asset('frontend/images/edit_ic.png') }}" class="edit_icon"></a><p class="text-white mb-0" ><?php echo $data['results']->content_1; ?></p>

                    <!-- <p class="text-white mb-0" data-aos="fade-right" data-aos-once="true" data-aos-duration="1500">Welcome to</p>
                    <h3 class="text-white" data-aos="fade-right" data-aos-once="true" data-aos-duration="1500">Kanpur Smart City</h3> -->
                </div>
                
                

                <div class="banner-read-more"><span>Read More</span></div>
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



<div class="container-fluid containerpadding" id="main-content">
        <div class="row fixedrow" id="divRowMainFeatures">
            <div class="col-xl-3">
                <div class="divHeading">
                    <h1 style="text-align: left;" data-aos="fade-right" data-aos-once="true" data-aos-duration="1500" data-blast="color">MAIN<br>FEATURES</h1>
                    <div style="text-align: left;" data-aos="fade-right" data-aos-once="true" data-aos-duration="1000" data-aos-delay="500"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}"></div>
                </div>
                
                
                <div class="edit-icon1">
                    <a data-toggle='modal' data-target='#content_2' href='javascript:void(0);'><img src="{{ URL::asset('frontend/images/edit_ic.png') }}" class="edit_icon"></a>
                        <?php
                        $count = str_word_count($data['results']->content_2);
                        if($count <= 30)
                        {
                        ?>
                        <p>
                        <?php 
                            echo $data['results']->content_2; 
                        }
                        else
                        {   
                        ?>
                        <?php
                            echo "Error... This content must be in limit to 30 words."; 
                        }    
                        ?>
                    </p>
                </div>
                
            </div>
            <div class="col-xl-9">
                <div class="row" id="divMainFeaturesIcon">
                    <div class="col-md-6 col-lg-3 col-xl-3">
                        <div class="divMainFeatures"><img src="{{ url('frontend/kscl/assets/img/it-hub.svg')}}" data-aos="flip-up" data-aos-once="true">
                            <p>IT Hub</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3">
                        <div class="divMainFeatures"><img src="{{ url('frontend/kscl/assets/img/health.svg')}}" data-aos="flip-up" data-aos-delay="150" data-aos-once="true">
                            <p>Health</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3">
                        <div class="divMainFeatures"><img src="{{ url('frontend/kscl/assets/img/info-centre.svg')}}" data-aos="flip-up" data-aos-delay="300" data-aos-once="true">
                            <p>Info Center</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3">
                        <div class="divMainFeatures"><img src="{{ url('frontend/kscl/assets/img/multiparking.svg')}}" data-aos="flip-up" data-aos-delay="450" data-aos-once="true">
                            <p>Multilevel Parking</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div id="horizontallinemainfeatures"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="container-fluid containerpadding">
        <div class="row fixedrow" id="divRowAboutKanpur">
            <div class="col-md-12 col-lg-6 col-xl-6" id="colAboutKanpur">
                <div class="divColorCaptionBox floatingbox" data-aos="fade-right" data-aos-delay="1000" data-aos-once="true" data-aos-duration="1200">
                    <div><img src="{{ url('frontend/kscl/assets/img/whitequotestart.png')}}"></div>
                    <!-- <a data-toggle='modal' data-target='#content_3' href='javascript:void(0);'><img src="{{ URL::asset('frontend/images/edit_ic.png') }}" class="edit_icon"></a><?php echo $data['results']->content_3; ?> -->

                    <div class="edit-icon1">
	                    <a data-toggle='modal' data-target='#content_3' href='javascript:void(0);'><img src="{{ URL::asset('frontend/images/edit_ic.png') }}" class="edit_icon"></a>
                            <?php
                            $count = str_word_count($data['results']->content_3);
                            //print_r($count);    
                            if($count <= 30)
                            {
                            ?>
                            <p> 
                            <?php    
                                echo $data['results']->content_3; 
                            }
                            else
                            {   
                            ?>
                            <?php
                               echo "Error... This content must be in limit to 30 words."; 
                            }    
                            ?>
                        </p>
	                </div>

                    <!--<p>Kanpur is the 11th most populous urban city in India, largest urban agglomeration in Uttar Pradesh<br></p>-->
                    <div><img src="{{ url('frontend/kscl/assets/img/whitequoteend.png')}}"></div>
                </div>
                  <div id="divAboutKanpurImage1"><div class="width-ratio ratio1-1"><img src="{{ url('frontend/kscl/assets/img/g1.jpg')}}" class="contenido"></div></div>
                <div id="divAboutKanpurImage2"><div class="width-ratio ratio4-3"><img src="{{ url('frontend/kscl/assets/img/kanpursmartcity.jpg')}}"  class="contenido"></div></div>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-6">
                <div class="divHeading">
                    <h1 style="text-align: left;" data-aos="fade-right" data-aos-once="true" data-aos-duration="1500" data-blast="color">ABOUT KANPUR</h1>
                    <div style="text-align: left;" data-aos="fade-right" data-aos-once="true" data-aos-duration="1000" data-aos-delay="500"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}"></div>
                </div>
                <!-- <a data-toggle='modal' data-target='#content_4' href='javascript:void(0);'><img src="{{ URL::asset('frontend/images/edit_ic.png') }}" class="edit_icon"></a><?php echo $data['results']->content_4; ?> -->

                <div class="edit-icon1">
                    <a data-toggle='modal' data-target='#content_4' href='javascript:void(0);'><img src="{{ URL::asset('frontend/images/edit_ic.png') }}" class="edit_icon"></a><p><?php echo $data['results']->content_4; ?></p>
                </div>	

                <!--<p>Kanpur is a city situated on the banks of River Ganga and is an important industrial centre of Uttar Pradesh. Known for its historical and religious past the city was a breeding ground for a change in the freedom and literary movements
                    during the first half of the 20th century. Supposed to have been founded by King Hindu Singh of the earlier state of Sachendi.<br></p>-->
                
                <a href="{{ url('edit-page-content/1') }}" class="btnReadMore">Read More</a>
                <!-- <a href="{{ url('view-page-content') }}" class="btnReadMore">Read More</a> -->

            </div>
        </div>
    </div>
<div class="container-fluid containerpadding" style="background-image: url(&quot;../frontend/kscl/assets/img/bgpattern-repeat.png&quot;);padding-bottom: 0px;">
        <div class="row fixedrow" id="divRowVCCOnlineService">
            <div class="col">
                <div>
                    <h1 data-aos="zoom-in" data-aos-duration="1500" data-aos-once="true" data-blast="color">VIRTUAL CIVIC CENTER (ONLINE SERVICE)</h1>
                    <div class="UnderlineHeadingH1"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}">
                        <!-- <a data-toggle='modal' data-target='#content_5' href='javascript:void(0);'><img src="{{ URL::asset('frontend/images/edit_ic.png') }}" class="edit_icon"></a><?php echo $data['results']->content_5; ?> -->

                        <div class="edit-icon1">
		                    <a data-toggle='modal' data-target='#content_5' href='javascript:void(0);'><img src="{{ URL::asset('frontend/images/edit_ic.png') }}" class="edit_icon"></a><p class="para"><?php echo $data['results']->content_5; ?></p>
		                </div>

                        <!--<p class="para">With a view to provide easy services to the citizens, Kanpur Smart City has started the profile based Virtual Civic Center - Online Service Portal. To benefit from this, you need to register with your mobile and email address.
                            Once verified, you can enrol for different services like property tax, profession tax, water meter. The enrolled services will be linked to your profile and will enable to carry out future transactions quickly and also track
                            historic transactions.&nbsp;</p>-->
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-l-12">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                        <div class="divColorCaptionBox" data-aos="fade-right" data-aos-once="true" data-aos-duration="3000">
                            <div style="text-align: left;"><img src="{{ url('frontend/kscl/assets/img/whitequotestart.png')}}" style="width: 14px;"></div>
                           <!--  <a data-toggle='modal' data-target='#content_6' href='javascript:void(0);'><img src="{{ URL::asset('frontend/images/edit_ic.png') }}" class="edit_icon"></a><?php echo $data['results']->content_6; ?> -->

                            <div class="edit-icon1">
			                    <a data-toggle='modal' data-target='#content_6' href='javascript:void(0);'><img src="{{ URL::asset('frontend/images/edit_ic.png') }}" class="edit_icon"></a>
                                    <?php
                                    $count = str_word_count($data['results']->content_6);
                                    //print_r($count);    
                                    if($count <= 30)
                                    {
                                    ?>
                                    <p>
                                    <?php 
                                        echo $data['results']->content_6; 
                                    }
                                    else
                                    {   
                                    ?>
                                    <?php
                                       echo "Error... This content must be in limit to 30 words."; 
                                    }    
                                    ?>
                                </p>
			                </div>

                            <!--<p>Kanpur is globally known for the finest quality leather tanned and produced by them.</p>-->
                            <div style="text-align: right;"><img src="{{ url('frontend/kscl/assets/img/whitequoteend.png')}}" style="width: 14px;"></div>
                        </div>
                        <div class="divPrevNext"><img src="{{ url('frontend/kscl/assets/img/lefticon.png')}}" class="previous previousvcc"><img src="{{ url('frontend/kscl/assets/img/righticon.png')}}" class="next nextvcc"></div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9">
                        <div id="divVCCOnlineServiceSlider">
                            <div class="row slicksliderareavcc">
                                <div class="col-md-6 col-lg-4 col-xl-4">
                                    <div class="divCaptionBoxIcon" data-aos="fade-up" data-aos-once="true" data-aos-duration="1000"><img src="{{ url('frontend/kscl/assets/img/birth-certificate.svg')}}"></div>
                                    <div class="divCaptionBox">
                                        <h6>Birth Certificate</h6>
                                        <div class="divHeadingBottomH6"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}"></div>
                                        <div class="divDescription" style="padding-top: 20px;">
                                            <p>Search the birth registration details based on date and registration number.</p><a href="#" class="btnEnroll">Search & Enroll</a></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-4">
                                    <div class="divCaptionBoxIcon" data-aos="fade-up" data-aos-delay="150" data-aos-once="true" data-aos-duration="1000"><img src="{{ url('frontend/kscl/assets/img/electricity.svg')}}"></div>
                                    <div class="divCaptionBox">
                                        <h6>Electricity Bill</h6>
                                        <div class="divHeadingBottomH6"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}"></div>
                                        <div class="divDescription" style="padding-top: 20px;">
                                            <p>View your electricity billing detail and pay the electricity bill online.</p><a href="#" class="btnEnroll">Search & Enroll</a></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-4">
                                    <div class="divCaptionBoxIcon" data-aos="fade-up" data-aos-delay="250" data-aos-once="true" data-aos-duration="1000"><img src="{{ url('frontend/kscl/assets/img/ProfessionTax_EC.svg')}}"></div>
                                    <div class="divCaptionBox">
                                        <h6>Profession Tax (EC)</h6>
                                        <div class="divHeadingBottomH6"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}"></div>
                                        <div class="divDescription" style="padding-top: 20px;">
                                            <p>View your property assessment details and pay your property tax online.</p><a href="#" class="btnEnroll">Search & Enroll</a></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-4">
                                    <div class="divCaptionBoxIcon"><img src="{{ url('frontend/kscl/assets/img/birth-certificate.svg')}}"></div>
                                    <div class="divCaptionBox">
                                        <h6>Birth Certificate</h6>
                                        <div class="divHeadingBottomH6"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}"></div>
                                        <div class="divDescription" style="padding-top: 20px;">
                                            <p>Search the birth registration details based on date and registration number.</p><a href="#" class="btnEnroll">Search & Enroll</a></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-4">
                                    <div class="divCaptionBoxIcon"><img src="{{ url('frontend/kscl/assets/img/electricity.svg')}}"></div>
                                    <div class="divCaptionBox">
                                        <h6>Electricity Bill</h6>
                                        <div class="divHeadingBottomH6"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}"></div>
                                        <div class="divDescription" style="padding-top: 20px;">
                                            <p>View your electricity billing detail and pay the electricity bill online.</p><a href="#" class="btnEnroll">Search & Enroll</a></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-4 carousel-item">
                                    <div class="divCaptionBoxIcon"><img src="{{ url('frontend/kscl/assets/img/ProfessionTax_EC.svg')}}"></div>
                                    <div class="divCaptionBox">
                                        <h6>Profession Tax (EC)</h6>
                                        <div class="divHeadingBottomH6"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}"></div>
                                        <div class="divDescription" style="padding-top: 20px;">
                                            <p>View your property assessment details and pay your property tax online.</p><a href="#" class="btnEnroll">Search & Enroll</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="container-fluid">
        <div class="row fixedrow" id="divRowKanpurSmartCity">
            <div class="col-xl-5">
                <div class="divHeading">
                    <h1 style="text-align: left;" data-aos="fade-right" data-aos-once="true" data-aos-duration="1500" data-blast="color">KANPUR SMART CITY</h1>
                    <div style="text-align: left;"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}" data-aos="fade-right" data-aos-once="true" data-aos-duration="1000" data-aos-delay="500">
                        
                        <div class="edit-icon1">
		                    <a data-toggle='modal' data-target='#content_7' href='javascript:void(0);'><img src="{{ URL::asset('frontend/images/edit_ic.png') }}" class="edit_icon"></a><p class="para"><?php echo $data['results']->content_7; ?></p>
		                </div>

                        <!--<p class="para">Kanpur Smart City aspires to leverage its Culture and Heritage by investing in Inclusive and Transformative Solutions that enhance the Quality of Life for its Citizens. As per the Government of India's guidelines, Kanpur Municipal
                            Corporation has formed a seperate Special Purpose Vehicle (SPV) as Kanpur Smart City Limited. For the implementation of projects under the smart city mission for the city of Kanpur.</p>-->
                        <a href="#" class="btnReadMore">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div id="divKanpurSmartCityImage">
                    <div class="width-ratio ratio4-3">
                        <img src="{{ url('frontend/kscl/assets/img/kanpursmartcity.jpg')}}" class="contenido">
                    </div>
                </div>
               <div class="divColorCaptionBox floatingbox" data-aos="fade-left" data-aos-delay="1000" data-aos-once="true" data-aos-duration="1200">
                    <div style="text-align: left;"><img src="{{ url('frontend/kscl/assets/img/whitequotestart.png')}}" style="width: 14px;"></div>
                    <!-- <a data-toggle='modal' data-target='#content_8' href='javascript:void(0);'><img src="{{ URL::asset('frontend/images/edit_ic.png') }}" class="edit_icon"></a><?php echo $data['results']->content_8; ?> -->

                    <div class="edit-icon1">
	                    <a data-toggle='modal' data-target='#content_8' href='javascript:void(0);'><img src="{{ URL::asset('frontend/images/edit_ic.png') }}" class="edit_icon"></a>
                            <?php
                            $count = str_word_count($data['results']->content_8);
                            //print_r($count);    
                            if($count <= 30)
                            {
                            ?>
                            <p>
                            <?php 
                                echo $data['results']->content_8; 
                            }
                            else
                            {   
                            ?>
                            <?php
                               echo "Error... This content must be in limit to 30 words."; 
                            }    
                            ?>
                        </p>
	                </div>

                    <!--<p>Kanpur was one of the most important center to bring Industrial Revolution to the country.</p>-->
                    <div style="text-align: right;"><img src="{{ url('frontend/kscl/assets/img/whitequoteend.png')}}" style="width: 14px;"></div>
                </div>
            </div>
        </div>
    </div>
<div class="container-fluid">
        <div class="row fixedrow" id="divPanCityProjects">
            <div class="col">
                <div class="divHeading">
                    <h1 data-aos="zoom-in" data-aos-duration="1500" data-aos-once="true" data-blast="color">PAN CITY PROJECTS</h1>
                    <div class="UnderlineHeadingH1" style="padding-bottom: 0px;"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}">
                        
                        <div class="edit-icon1">
		                    <a data-toggle='modal' data-target='#content_9' href='javascript:void(0);'><img src="{{ URL::asset('frontend/images/edit_ic.png') }}" class="edit_icon"></a><p class="para"><?php echo $data['results']->content_9; ?></p>
		                </div>

                        <!--<p class="para">Based on the vision outlines, the strategic focus and blueprint for Kanpur Smart City was formulated as a way forward. The plan was grouped under various focus areas and to ahieve these focus areas, goals and sub goals were identified
                            to narrow down the projects such that they would translate the vision, address the issues and would hardness on the strength and opportunities for the development of city by strengthening and augmentation of existin physical
                            infrastructure.&nbsp;<br>The Pan City Development is a integrated smart and sustainable mobility project framed under broader strategies for Kanpur Smart City Development. In the overall process it was ensured that each aspect
                            was linked to another to crystallize and formulates project, addressing concern of citizen and harnessing the strength & opportunies to overcome weakness & threats. Their implementation would make a marked change in
                            the behaviour and lifestyle of the citizens of Kanpur. The Pan City Development Program takes care of various aspects of Urban Development. These solutions can only be implemented with the support of the residents, as this
                            would change Kanpur totally.</p>-->
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-l-12">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-3 offset-lg-0">
                        <div class="divColorCaptionBox" data-aos="fade-right" data-aos-delay="1000" data-aos-once="true" data-aos-duration="1200">
                            <div style="text-align: left;"><img src="{{ url('frontend/kscl/assets/img/whitequotestart.png')}}" style="width: 14px;"></div>
                            
                            <div class="edit-icon1">
			                    <a data-toggle='modal' data-target='#content_10' href='javascript:void(0);'><img src="{{ URL::asset('frontend/images/edit_ic.png') }}" class="edit_icon"></a>
                                    <?php
                                    $count = str_word_count($data['results']->content_10);
                                    //print_r($count);    
                                    if($count <= 30)
                                    {
                                    ?>
                                    <p>
                                    <?php 
                                        echo $data['results']->content_10; 
                                    }
                                    else
                                    {   
                                    ?>
                                    <?php
                                       echo "Error... This content must be in limit to 30 words."; 
                                    }    
                                    ?>
                                </p>
			                </div>

                            <!--<p>Kanpur has one of its kind in India the 'Indian Institute of Pulse Research'. The only Indian Institute.</p>-->
                            <div style="text-align: right;"><img src="{{ url('frontend/kscl/assets/img/whitequoteend.png')}}" style="width: 14px;"></div>
                        </div>
                        <div class="divPrevNext"><img src="{{ url('frontend/kscl/assets/img/lefticon.png')}}" class="previous previouspcp"><img src="{{ url('frontend/kscl/assets/img/righticon.png')}}" class="next nextpcp"></div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-9">
                        <div id="divPanCItyProjectsCarousel">
                            <div class="row slicksliderareapcp">
                                <div class="col-md-6 col-lg-4 col-xl-4">
                                    <div class="divCaptionBoxImage">
                                    
                                        <div class="width-ratio ratio4-3">
                                                <img src="{{ url('frontend/kscl/assets/img/smartcity1.png')}}" class="contenido">
                                        </div>
                                    </div>
                                    <div class="divCaptionBox">
                                        <h6>Smart<br>Mobility</h6>
                                        <div class="divHeadingBottomH6"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}"></div>
                                        <div class="divDescription">
                                            <p>Improve pedestrian mobility in the area by increased Non-Motorized Transport...</p>
                                        </div>
                                        <div class="divReadMore"><a href="#">View All</a></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-4">
                                    <div class="divCaptionBoxImage">
                                        <div class="width-ratio ratio4-3">
                                                <img src="{{ url('frontend/kscl/assets/img/pancity2.png')}}" class="contenido">
                                        </div>
                                    </div>
                                    
                                    <div class="divCaptionBox">
                                        <h6>Smart & Sustainable<br>Civic Infrastructure</h6>
                                        <div class="divHeadingBottomH6"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}"></div>
                                        <div class="divDescription">
                                            <p>Enable coverage and monitoring of 100% smart meters for water connections...</p>
                                        </div>
                                        <div class="divReadMore"><a href="#">View All</a></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-4">
                                    <div class="divCaptionBoxImage">
                                        <div class="width-ratio ratio4-3">
                                                <img src="{{ url('frontend/kscl/assets/img/pan-city3.png')}}" class="contenido">
                                        </div>
                                    </div>
                                    
                                    <div class="divCaptionBox">
                                        <h6>Integrated Transport Management System</h6>
                                        <div class="divHeadingBottomH6"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}"></div>
                                        <div class="divDescription">
                                            <p>UPSRTC has implemented Intelligent Transport Management System (ITMS) Project ...</p>
                                        </div>
                                        <div class="divReadMore"><a href="#">View All</a></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-4">
                                    <div class="divCaptionBoxImage">
                                        <div class="width-ratio ratio4-3">
                                                <img src="{{ url('frontend/kscl/assets/img/smartcity1.png')}}" class="contenido">
                                        </div>
                                    </div>
                                    
                                    <div class="divCaptionBox">
                                        <h6>Smart<br>Mobility</h6>
                                        <div class="divHeadingBottomH6"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}"></div>
                                        <div class="divDescription">
                                            <p>Improve pedestrian mobility in the area by increased Non-Motorized Transport share from 15% to 25% and 100% barrier free access.....</p>
                                        </div>
                                        <div class="divReadMore"><a href="#">View All</a></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-4">
                                    <div class="divCaptionBoxImage">
                                        <div class="width-ratio ratio4-3">
                                                <img src="{{ url('frontend/kscl/assets/img/pancity2.png')}}" class="contenido">
                                        </div>
                                    </div>
                                    
                                    <div class="divCaptionBox">
                                        <h6>Smart & Sustainable<br>Civic Infrastructure</h6>
                                        <div class="divHeadingBottomH6"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}"></div>
                                        <div class="divDescription">
                                            <p>Enable coverage and monitoring of 100% smart meters for water connections and 100% coverage of door to door collection adopting.....</p>
                                        </div>
                                        <div class="divReadMore"><a href="#">View All</a></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-4">
                                    <div class="divCaptionBoxImage">
                                        <div class="width-ratio ratio4-3">
                                                <img src="{{ url('frontend/kscl/assets/img/smartcity1.png')}}" class="contenido">
                                        </div>
                                    </div>
                                   
                                    <div class="divCaptionBox">
                                        <h6>Smart<br>Mobility</h6>
                                        <div class="divHeadingBottomH6"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}"></div>
                                        <div class="divDescription">
                                            <p>Improve pedestrian mobility in the area by increased Non-Motorized Transport share from 15% to 25% and 100% barrier free access.....</p>
                                        </div>
                                        <div class="divReadMore"><a href="#">View All</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="container-fluid">
        <div class="row fixedrow" id="divAreaBasedDevelopmentProjects">
            <div class="col">
                <div class="divHeading">
                    <h1 data-aos="zoom-in" data-aos-duration="1500" data-aos-once="true" data-blast="color">AREA BASED DEVELOPMENT PROJECTS</h1>
                    <div class="UnderlineHeadingH1" style="padding-bottom: 0px;"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}">
                        

                        <div class="edit-icon1">
		                    <a data-toggle='modal' data-target='#content_11' href='javascript:void(0);'><img src="{{ URL::asset('frontend/images/edit_ic.png') }}" class="edit_icon"></a><p><?php echo $data['results']->content_11; ?></p>
		                </div>

                        <!--<p>Area based development projects are solutions which can be implemented in the complete city. These solutions are of bigger interest for the citizens of Kanpur. Their implementation would make a marked change in the behavior and
                            life style of the citizens of Kanpur. ONce these are implemented then Kanpur wold automatically come in the top of the mind recall of everyone. The Kanpur Smart City takes care of multi modal mobility and smart solid waste
                            management. These solutions can only be implemented with the support of the residents, as this would change Kanpur in totality.&nbsp;<br><br>Augmenting Public Transportation facilities, citizen safey programs by speedy response
                            to the incidents based on real time data, reduction in air pollution and fuel consumption, hence providing a holistic, viable and effective approach towards traffic management. Provision for a Smart Grid comprising of 20 buildings
                            is proposed which includes Rooftop Solar Panels, Rain Water Harvesting & Waste Water Treatment & its reuse.&nbsp;</p>-->
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-l-12">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9">
                        <div id="divAreaBasedDevelopmentProjectsSlider">
                            <div class="row slicksliderareaabdp">
                                <div class="col-md-6 col-lg-4 col-xl-4">
                                    <div class="divCaptionBoxImage">
                                        <div class="width-ratio ratio4-3">
                                            <img src="{{ url('frontend/kscl/assets/img/g4.jpg')}}" class="contenido">
                                        </div>
                                    </div>
                                    
                                    <div class="divCaptionBox">
                                        <h6>Satat</h6>
                                        <div class="divHeadingBottomH6"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}"></div>
                                        <div class="divDescription">
                                            <p>Safe, Green, with waste management and vibrant city Level Recreaional Space.</p>
                                        </div>
                                        <div class="divReadMore"><a href="#">View All</a></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-4">
                                    <div class="divCaptionBoxImage">
                                        <div class="width-ratio ratio4-3">
                                            <img src="{{ url('frontend/kscl/assets/img/areabased-dev2.png')}}" class="contenido">
                                        </div>
                                    </div>
                                    
                                    <div class="divCaptionBox">
                                        <h6>Sampann</h6>
                                        <div class="divHeadingBottomH6"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}"></div>
                                        <div class="divDescription">
                                            <p>The project implies focus on development of underground ducts for water and drainage...</p>
                                        </div>
                                        <div class="divReadMore"><a href="#">View All</a></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-4">
                                    <div class="divCaptionBoxImage">
                                        <div class="width-ratio ratio4-3">
                                            <img src="{{ url('frontend/kscl/assets/img/areabased-dev3.png')}}" class="contenido">
                                        </div>
                                    </div>
                                    
                                    <div class="divCaptionBox">
                                        <h6>Swasth</h6>
                                        <div class="divHeadingBottomH6"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}"></div>
                                        <div class="divDescription">
                                            <p>Air and Water quality monitoring. Along with construction of new STP's and CETP.</p>
                                        </div>
                                        <div class="divReadMore"><a href="#">View All</a></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-4">
                                    <div class="divCaptionBoxImage">
                                        <div class="width-ratio ratio4-3">
                                            <img src="{{ url('frontend/kscl/assets/img/g4.jpg')}}" class="contenido">
                                        </div>
                                    </div>
                                    
                                    <div class="divCaptionBox">
                                        <h6>Satat</h6>
                                        <div class="divHeadingBottomH6"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}"></div>
                                        <div class="divDescription">
                                            <p>Safe, Green, with waste management and vibrant city Level Recreaional Space.</p>
                                        </div>
                                        <div class="divReadMore"><a href="#">View All</a></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-4">
                                    <div class="divCaptionBoxImage">
                                        <div class="width-ratio ratio4-3">
                                            <img src="{{ url('frontend/kscl/assets/img/areabased-dev2.png')}}" class="contenido">
                                        </div>
                                    </div>
                                    
                                    <div class="divCaptionBox">
                                        <h6>Sampann</h6>
                                        <div class="divHeadingBottomH6"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}"></div>
                                        <div class="divDescription">
                                            <p>The project implies focus on development of underground ducts for water and drainage Pipes and Cabling for Electricity & Telecom...</p>
                                        </div>
                                        <div class="divReadMore"><a href="#">View All</a></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-4">
                                    <div class="divCaptionBoxImage">
                                        <div class="width-ratio ratio4-3">
                                            <img src="{{ url('frontend/kscl/assets/img/areabased-dev3.png')}}" class="contenido">
                                        </div>
                                    </div>
                                    
                                    <div class="divCaptionBox">
                                        <h6>Swasth</h6>
                                        <div class="divHeadingBottomH6"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}"></div>
                                        <div class="divDescription">
                                            <p>Air and Water quality monitoring. Along with construction of new STP's and CETP.</p>
                                        </div>
                                        <div class="divReadMore"><a href="#">View All</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                        <div class="divColorCaptionBox" data-aos="fade-left" data-aos-delay="1000" data-aos-once="true" data-aos-duration="1200">
                            <div style="text-align: left;"><img src="{{ url('frontend/kscl/assets/img/whitequotestart.png')}}" style="width: 14px;"></div>
                            

                            <div class="edit-icon1">
			                    <p><a data-toggle='modal' data-target='#content_12' href='javascript:void(0);'><img src="{{ URL::asset('frontend/images/edit_ic.png') }}" class="edit_icon"></a>
                                    <?php
                                    $count = str_word_count($data['results']->content_12);
                                    //print_r($count);    
                                    if($count <= 30)
                                    {
                                    ?>
                                    <?php 
                                        echo $data['results']->content_12; 
                                    }
                                    else
                                    {   
                                    ?>
                                    <?php
                                       echo "Error... This content must be in limit to 30 words."; 
                                    }    
                                    ?>
                                </p>
			                </div>

                            <!--<p>Kanpur Central Railway Station is the second most busiest railway station in India.</p>-->
                            <div style="text-align: right;"><img src="{{ url('frontend/kscl/assets/img/whitequoteend.png')}}" style="width: 14px;"></div>
                        </div>
                      <div class="divPrevNext"><img src="{{ url('frontend/kscl/assets/img/lefticon.png')}}" class="previous previousabdp"><img src="{{ url('frontend/kscl/assets/img/righticon.png')}}" class="next nextabdp"></div> 

                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="container-fluid divSnapshot">
    <div class="edit-icon1">
        <!-- <a href = "{{ url('view-estimation-content') }}">
            <img src="{{ URL::asset('frontend/images/edit_ic.png') }}" class="edit_icon"></a> -->
    <div class="row fixedrow rowsnapshot">
        <div class="col-md-6 col-lg-3 col-xl-3">
            <div class="center"><svg width="175px" height="175px" viewBox="0 0 175 175" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                
                <title>population</title>
                <desc>Created with Sketch.</desc>
                <g id="population" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Group-17" transform="translate(12.000000, 44.000000)" fill="#FFFFFF">
                    <path d="M5.02409362,63.1428596 C5.05267898,53.1185749 13.2579767,44.9997186 23.388022,44.9714329 L42.8087425,44.9714329 C45.9535653,44.9680043 49.0455484,45.7711471 51.7828132,47.3028612 C53.6179067,48.3297183 55.2641636,49.6574324 56.6509867,51.2285751 C48.8337569,54.5860034 43.4649065,61.866574 42.6181735,70.2571446 L42.6181735,70.7885732 C42.6181735,71.0285731 42.6181735,71.2514303 42.6181735,71.4914302 L42.6181735,73.6857157 L5.02409362,73.6857157 L5.02409362,63.1428596 Z M65.8156264,54.3314319 L85.2536714,54.3314319 C94.4776474,54.3648605 102.256763,61.1392884 103.46168,70.1885732 C103.46168,70.565716 103.46168,70.9428589 103.565626,71.3200017 C103.565626,71.7087159 103.565626,72.0970016 103.565626,72.4857158 L103.565626,83.0457148 L47.451698,83.0457148 L47.451698,72.2971444 C47.451698,72.1030016 47.451698,71.9144302 47.451698,71.7314302 C47.451698,71.4344302 47.451698,71.1370017 47.451698,70.8400017 L47.451698,70.3942875 C47.451698,70.2228589 47.451698,70.0514304 47.451698,69.8800018 L47.451698,68.5942877 L47.5556448,68.1828591 L47.7288894,67.5657163 L47.8501606,67.1542878 C50.3388194,59.6907171 57.370818,54.6374319 65.3132171,54.6057176 L65.8156264,54.3314319 Z M99.2691602,47.3028612 C102.006425,45.7711471 105.098408,44.9680043 108.243231,44.9714329 L127.681276,44.9714329 C137.811321,44.9997186 146.016619,53.1185749 146.045204,63.1428596 L146.045204,73.7028586 L108.624369,73.7028586 L108.624369,72.2114302 C108.624369,72.0228587 108.624369,71.8342873 108.624369,71.6457159 C108.624369,71.4515731 108.624369,71.2570017 108.624369,71.0628588 C108.624369,70.7885732 108.624369,70.4971446 108.624369,70.2228589 L108.624369,66.5028593 L108.503098,66.0742879 L108.503098,65.234288 L108.260555,64.5657166 C106.003178,58.6278601 101.399203,53.8557177 95.5097522,51.3485751 C96.5518185,49.8220038 97.8191028,48.4582897 99.2691602,47.3028612 Z M2.51204681,78.6571438 L42.3583066,78.6571438 L42.3583066,85.514286 C42.3583066,86.8870001 43.4830972,88 44.8703534,88 L106.129647,88 C107.516903,88 108.641693,86.8870001 108.641693,85.514286 L108.641693,78.6571438 L148.487953,78.6571438 C149.875209,78.6571438 151,77.5441439 151,76.1714298 L151,63.1428596 C150.971415,50.3997181 140.558981,40.0660048 127.681276,40.0000048 L108.260555,40.0000048 C104.246911,39.9974334 100.301265,41.0251476 96.8090867,42.9828617 C93.8366424,44.6512901 91.2652593,46.938147 89.2729463,49.6857181 C87.9458926,49.4564324 86.6010813,49.3415753 85.2536714,49.342861 L65.8156264,49.342861 C64.4682165,49.3415753 63.1234052,49.4564324 61.7963515,49.6857181 C59.8044717,46.9377184 57.2330886,44.6508615 54.2602111,42.9828617 C50.7680329,41.0251476 46.822387,39.9974334 42.8087425,40.0000048 L23.388022,40.0000048 C10.4830312,40.0282905 0.0285853603,50.3731466 0,63.1428596 L0,76.1885726 C0.00952845342,77.5548582 1.13128729,78.6571438 2.51204681,78.6571438 Z" id="Fill-1"></path>
                <path d="M42.3768338,26.3442668 C37.4846344,31.2381801 29.5517899,31.2398941 24.657448,26.3476948 C19.7635347,21.455924 19.7618207,13.522651 24.65402,8.62873765 C29.5462193,3.73482433 37.4790639,3.73311033 42.3734058,8.62488114 C44.7233069,10.9739252 46.0439479,14.1602609 46.0448049,17.4828599 C46.0495184,20.807173 44.7297344,23.9960797 42.3768338,26.3442668 Z M33.5154269,7.03020185e-06 C23.8505801,-0.00856299574 16.0085778,7.8192987 16.0000078,17.484574 C15.9910092,27.1494207 23.8192995,34.9914229 33.4841463,34.999993 C43.1489931,35.008563 50.9909954,27.1807013 50.9999939,17.515426 C51.0038505,12.8768995 49.1664369,8.42648504 45.8905444,5.14202259 C42.615509,1.84770462 38.1608095,-0.00342098017 33.5154269,7.03020185e-06 Z" id="Fill-3"></path>
            <path d="M108.640306,8.63859318 C113.532506,3.74467986 121.46535,3.74296586 126.359692,8.63516517 C131.253605,13.526936 131.255319,21.460209 126.36312,26.3541223 C121.470921,31.2480356 113.538076,31.2497496 108.643734,26.3579788 C106.293833,24.0089347 104.973192,20.8225991 104.972335,17.5 C104.967622,14.1756869 106.287406,10.9867803 108.640306,8.63859318 Z M117.484573,34.999993 C127.14942,35.008563 134.991422,27.1807013 134.999992,17.515426 C135.008991,7.85057929 127.180701,0.00857705614 117.515854,7.03020185e-06 C107.851007,-0.00856299574 100.009005,7.8192987 100.000006,17.484574 C99.9961495,22.1231005 101.833563,26.573515 105.109456,29.8579774 C108.384491,33.1522954 112.839191,35.003421 117.484573,34.999993 Z" id="Fill-8"></path>
        <path d="M88.0331692,27.5342759 C88.0310246,34.4609136 82.4142965,40.0741965 75.4880708,40.0724808 C68.5614162,40.0703362 62.9476906,34.4536219 62.9498352,27.5269843 C62.9519798,20.6003467 68.5687079,14.9870637 75.4949335,14.9892083 C78.8207915,14.9900662 82.0102523,16.3119992 84.3616004,18.6641994 C86.7168088,21.0146839 88.0378873,24.2067105 88.0331692,27.5342759 Z M63.1042469,15.1470511 C56.2818203,21.9930516 56.3011218,33.0733556 63.1471391,39.8957656 C69.9931564,46.7181755 81.0734876,46.6988741 87.8959143,39.8528735 C94.717912,33.006873 94.6990394,21.926569 87.8530221,15.104159 C84.5709142,11.8332111 80.125142,9.99786015 75.4915022,10.0000048 C70.8415633,9.99657339 66.3824946,11.8495101 63.1042469,15.1470511 Z" id="Fill-10"></path>
    </g>
</g>
</svg>
<h2><br>2,767,348</h2>
<p>ESTIMATED<br>POPULATION<br></p>
</div>
</div>
<div class="col-md-6 col-lg-3 col-xl-3">
<div class="center"><svg width="175px" height="175px" viewBox="0 0 175 175" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<title>population</title>
<desc>Created with Sketch.</desc>
<defs>
<polygon id="path-1" points="0 0 111 0 111 112 0 112"></polygon>
</defs>
<g id="population" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<g id="Group" transform="translate(32.000000, 32.000000)">
<mask id="mask-2" fill="white">
<use xlink:href="#path-1"></use>
</mask>
<g id="Clip-2"></g>
<path d="M111,28.3592109 L111,0 L82.8918453,0 L82.8918453,12.4454091 L28.1060036,12.4454091 L28.1060036,0 L0,0 L0,28.3592109 L12.3342894,28.3592109 L12.3342894,83.6299368 L0,83.6299368 L0,112 L28.1060036,112 L28.1060036,99.5524204 L82.8918453,99.5524204 L82.8918453,112 L111,112 L111,83.6386187 L98.6635596,83.6386187 L98.6635596,28.3592109 L111,28.3592109 Z M86.3292702,24.8843068 L107.553971,24.8843068 L107.553971,3.47707453 L86.3292702,3.47707453 L86.3292702,24.8843068 Z M3.44602922,24.8843068 L3.44602922,3.47707453 L24.6621255,3.47707453 L24.6621255,24.8929886 L3.44602922,24.8929886 L3.44602922,24.8843068 Z M3.44602922,108.522925 L24.6707298,108.522925 L24.6707298,87.1070114 L3.44602922,87.1070114 L3.44602922,108.522925 Z M86.3292702,108.522925 L107.553971,108.522925 L107.553971,87.1070114 L86.3292702,87.1070114 L86.3292702,108.522925 Z M95.2196814,83.6386187 L82.8918453,83.6386187 L82.8918453,96.0775164 L28.1060036,96.0775164 L28.1060036,83.6386187 L15.7717143,83.6386187 L15.7717143,28.3592109 L28.1060036,28.3592109 L28.1060036,15.9138018 L82.8918453,15.9138018 L82.8918453,28.3592109 L95.2196814,28.3592109 L95.2196814,83.6386187 Z" id="Fill-1" stroke="#FFFFFF" fill="#FFFFFF" mask="url(#mask-2)"></path>
</g>
</g>
</svg>
<h2><br>403.07</h2>
<p>SQ. KM. AREA</p>
</div>
</div>
<div class="col-md-6 col-lg-3 col-xl-3">
<div class="center"><svg width="175px" height="175px" viewBox="0 0 175 175" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<title>population</title>
<desc>Created with Sketch.</desc>
<g id="population" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<g id="Group" transform="translate(28.000000, 34.000000)" fill="#FFFFFF">
<g id="Group-19">
<path d="M60,79.826087 C58.70625,79.826087 57.65625,80.877913 57.65625,82.173913 C57.65625,83.469913 58.70625,84.5217391 60,84.5217391 C61.29375,84.5217391 62.34375,83.469913 62.34375,82.173913 C62.34375,80.877913 61.29375,79.826087 60,79.826087" id="Fill-1"></path>
<path d="M115.3125,35.2173913 C115.3125,36.5119826 114.261094,37.5652174 112.96875,37.5652174 L110.625,37.5652174 L110.625,23.4782609 L112.96875,23.4782609 C114.261094,23.4782609 115.3125,24.5314957 115.3125,25.826087 L115.3125,35.2173913 Z M95.15625,44.2635652 C95.15625,47.0924609 94.3858594,50.1077739 92.8005469,53.4830087 C91.275,56.7354522 90.46875,60.353687 90.46875,63.9453913 L90.46875,70.4347826 L57.65625,70.4347826 L57.65625,64.53 C57.65625,60.1405043 55.95,56.0139652 52.8517969,52.9103739 L44.6814844,44.7263217 C43.1948438,43.2368609 42.1347656,41.3719826 41.6151563,39.331487 C41.3728125,38.3822609 41.25,37.4048609 41.25,36.4267565 L41.25,35.2173913 C41.25,32.6946522 42.0825,30.1932783 43.59375,28.173913 C45.4110938,25.7464957 48.0555469,24.1361217 51.0407813,23.639087 C51.6792188,23.5322609 52.3279688,23.4782609 52.96875,23.4782609 L71.4234375,23.4782609 C71.0111719,25.0872261 70.1758594,26.5635391 68.9716406,27.7698522 C67.2002344,29.5443391 64.8464063,30.5217391 62.34375,30.5217391 L55.3125,30.5217391 C54.0965625,30.5217391 53.0824219,31.4533565 52.9776563,32.666713 C52.8726563,33.8803043 53.7114844,34.9727478 54.9091406,35.1824087 C58.7807813,35.8602261 62.1501563,38.016 64.3966406,41.2531826 C64.4017969,41.2604609 64.4078906,41.2668 64.4130469,41.2740783 C66.0946875,43.709713 66.9921094,46.5632609 67.0078125,49.5278609 L67.03125,54.0122087 C67.0380469,55.3049217 68.0859375,56.3478261 69.3747656,56.3478261 C69.3789844,56.3478261 69.3829688,56.3478261 69.3871875,56.3478261 C70.6816406,56.3410174 71.7255469,55.2844957 71.71875,53.9877913 L71.6953125,49.5032087 C71.6819531,46.992913 71.1878906,44.5436609 70.2510938,42.2606348 L95.15625,42.2606348 L95.15625,44.2635652 Z M52.96875,103.304348 L95.15625,103.304348 L95.15625,75.1304348 L52.96875,75.1304348 L52.96875,103.304348 Z M20.5136719,24.0459652 C23.3327344,27.8827826 23.3327344,33.1606957 20.5136719,36.997513 L7.58460938,30.5217391 L20.5136719,24.0459652 Z M39.8435156,25.3567565 C37.7278125,28.1835391 36.5625,31.6855565 36.5625,35.2173913 L36.5625,36.4265217 C36.5625,36.8064 36.5770313,37.1862783 36.6035156,37.5652174 L25.6434375,37.5652174 C27.8648438,33.1496609 27.8648438,27.8938174 25.6434375,23.4782609 L41.4869531,23.4782609 C40.8979687,24.0581739 40.3471875,24.6841043 39.8435156,25.3567565 Z M52.96875,8.2173913 C52.96875,6.27550435 54.5458594,4.69565217 56.484375,4.69565217 C58.4228906,4.69565217 60,6.27550435 60,8.2173913 L60,18.7826087 L52.96875,18.7826087 L52.96875,8.2173913 Z M68.203125,4.69565217 C69.1429688,4.69565217 70.0258594,5.06191304 70.6896094,5.72705217 C71.353125,6.39148696 71.71875,7.27591304 71.71875,8.2173913 L71.71875,18.7826087 L64.6875,18.7826087 L64.6875,8.2173913 C64.6875,6.27550435 66.2646094,4.69565217 68.203125,4.69565217 Z M79.921875,4.69565217 C81.8603906,4.69565217 83.4375,6.27550435 83.4375,8.2173913 L83.4375,24.6521739 C83.4375,26.5940609 81.8603906,28.173913 79.921875,28.173913 C77.9833594,28.173913 76.40625,26.5940609 76.40625,24.6521739 L76.40625,8.2173913 C76.40625,6.27550435 77.9833594,4.69565217 79.921875,4.69565217 Z M91.640625,9.39130435 C92.5804688,9.39130435 93.4633594,9.75756522 94.1271094,10.4227043 C94.790625,11.0871391 95.15625,11.9715652 95.15625,12.9130435 L95.15625,24.6521739 C95.15625,26.5940609 93.5791406,28.173913 91.640625,28.173913 C89.7021094,28.173913 88.125,26.5940609 88.125,24.6521739 L88.125,12.9130435 C88.125,10.9711565 89.7021094,9.39130435 91.640625,9.39130435 Z M105.9375,23.4782609 L105.9375,37.5652174 L67.4974219,37.5652174 C66.7446094,36.6150522 65.91375,35.745887 65.0146875,34.965 C67.7524219,34.4402609 70.2707813,33.1092783 72.2857031,31.0901478 C72.7160156,30.659087 73.1116406,30.2029043 73.4782031,29.7286435 C74.9819531,31.6393043 77.3104688,32.8695652 79.921875,32.8695652 C82.2154688,32.8695652 84.2910938,31.9205739 85.78125,30.3951913 C87.2714063,31.9203391 89.3470313,32.8695652 91.640625,32.8695652 C96.1638281,32.8695652 99.84375,29.1832435 99.84375,24.6521739 L99.84375,23.4782609 L105.9375,23.4782609 Z M112.96875,18.7826087 L99.84375,18.7826087 L99.84375,12.9130435 C99.84375,10.7171217 98.9903906,8.65314783 97.441875,7.10217391 C95.893125,5.55049565 93.8327344,4.69565217 91.640625,4.69565217 C90.2245313,4.69565217 88.8909375,5.05721739 87.7272656,5.69277391 C86.6610938,2.39337391 83.5659375,0 79.921875,0 C77.6299219,0 75.5554688,0.947582609 74.0655469,2.47108696 C74.0446875,2.44972174 74.0252344,2.42765217 74.004375,2.40652174 C72.455625,0.854843478 70.3952344,0 68.203125,0 C65.9095313,0 63.8339062,0.948991304 62.34375,2.47437391 C60.8535938,0.948991304 58.7779687,0 56.484375,0 C51.9611719,0 48.28125,3.68632174 48.28125,8.2173913 L48.28125,18.7826087 L21.09375,18.7826087 C21.09,18.7826087 21.0864844,18.783313 21.0827344,18.783313 C21.0028125,18.7837826 20.9228906,18.788713 20.8434375,18.7971652 C20.8169531,18.7999826 20.7909375,18.804913 20.7646875,18.8084348 C20.7067969,18.8166522 20.6491406,18.8262783 20.5917188,18.8389565 C20.5640625,18.8450609 20.5366406,18.8521043 20.5092187,18.8591478 C20.4522656,18.8737043 20.3960156,18.8906087 20.3402344,18.9096261 C20.315625,18.9180783 20.2910156,18.9260609 20.2666406,18.9354522 C20.2052344,18.9586957 20.145,18.9849913 20.0854688,19.0134 C20.0723437,19.0197391 20.0585156,19.0239652 20.045625,19.0305391 L20.0074219,19.0497913 C20.0057813,19.0507304 20.0041406,19.0514348 20.0025,19.0523739 L1.295625,28.4218435 C0.5015625,28.8195652 0,29.6323826 0,30.5217391 C0,31.4110957 0.5015625,32.223913 1.295625,32.6216348 L20.0020312,41.9911043 C20.0041406,41.9922783 20.00625,41.9932174 20.0083594,41.9943913 L20.045625,42.0129391 C20.0582813,42.0192783 20.0716406,42.0235043 20.0842969,42.0296087 C20.1445312,42.058487 20.2054688,42.0850174 20.2675781,42.1084957 C20.29125,42.1174174 20.3151563,42.1254 20.3390625,42.1336174 C20.3957813,42.1528696 20.4529688,42.1700087 20.5108594,42.1850348 C20.5373438,42.1918435 20.5638281,42.1986522 20.5905469,42.2045217 C20.649375,42.2174348 20.7084375,42.2272957 20.7677344,42.2357478 C20.7925781,42.2392696 20.8171875,42.2437304 20.8420313,42.2465478 C20.9257031,42.2552348 21.0096094,42.2608696 21.09375,42.2608696 L37.6338281,42.2608696 C38.4541406,44.4243913 39.7235156,46.3996174 41.3669531,48.0463826 L49.5372656,56.2306696 C51.75,58.4472522 52.96875,61.394713 52.96875,64.53 L52.96875,70.4347826 L50.625,70.4347826 C49.3305469,70.4347826 48.28125,71.4861391 48.28125,72.7826087 L48.28125,105.652174 C48.28125,106.948643 49.3305469,108 50.625,108 L97.5,108 C98.7942187,108 99.84375,106.948643 99.84375,105.652174 L99.84375,72.7826087 C99.84375,71.4861391 98.7942187,70.4347826 97.5,70.4347826 L95.15625,70.4347826 L95.15625,63.9453913 C95.15625,61.0390174 95.80875,58.111513 97.0427344,55.4807739 C98.9275781,51.4681043 99.84375,47.798687 99.84375,44.2635652 L99.84375,42.2608696 L112.96875,42.2608696 C116.845781,42.2608696 120,39.1011652 120,35.2173913 L120,25.826087 C120,21.942313 116.845781,18.7826087 112.96875,18.7826087 Z" id="Fill-3"></path>
<path d="M88.125,79.826087 L69.375,79.826087 C68.0807813,79.826087 67.03125,80.8774435 67.03125,82.173913 C67.03125,83.4703826 68.0807813,84.5217391 69.375,84.5217391 L88.125,84.5217391 C89.4192188,84.5217391 90.46875,83.4703826 90.46875,82.173913 C90.46875,80.8774435 89.4192188,79.826087 88.125,79.826087" id="Fill-5"></path>
</g>
</g>
</g>
</svg>
<h2><br>2,767,348</h2>
<p>LITERACY RATE</p>
</div>
</div>
<div class="col-md-6 col-lg-3 col-xl-3">
<div class="center"><svg width="175px" height="175px" viewBox="0 0 175 175" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<title>population</title>
<desc>Created with Sketch.</desc>
<g id="population" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<g id="Group" transform="translate(27.000000, 36.000000)">
<path d="M116.096328,66.6517769 C114.632856,57.6332576 106.749816,51 97.5001675,51 C88.2505192,51 80.3696927,57.6332576 78.9034538,66.6517769 L74.0602713,96.4577099 C73.8377617,97.8410962 74.2373934,99.2523578 75.1589818,100.319823 C76.0778027,101.385101 77.4244842,102 78.8453356,102 L116.154999,102 C117.575297,102 118.922532,101.385101 119.843567,100.319823 C120.762388,99.2545441 121.162573,97.8410962 120.93951,96.4577099 L116.096328,66.6517769 Z" id="Fill-1" stroke="#FFFFFF" stroke-width="4.4000001"></path>
<g id="Group-5" transform="translate(6.000000, 0.000000)" stroke="#FFFFFF" stroke-width="4.4000001">
<path d="M101.883665,22.5469091 C101.883665,33.1150909 93.2235892,41.6847273 82.5389514,41.6847273 C71.8565189,41.6847273 63.1964432,33.1150909 63.1964432,22.5469091 C63.1964432,11.9787273 71.8565189,3.41127273 82.5389514,3.41127273 C93.2235892,3.41127273 101.883665,11.9787273 101.883665,22.5469091 Z" id="Fill-2"></path>
<path d="M21.4315784,66.3878182 C22.6594378,69.6883636 25.8164757,71.7316364 29.1742054,71.7316364 C30.1241838,71.7316364 31.0868432,71.5674545 32.028,71.2243636 C36.3053838,69.6665455 38.4953514,64.9707273 36.9190378,60.7412727 L16.4716216,5.84836364 C14.8975135,1.61509091 10.148173,-0.541090909 5.8752,1.00963636 C1.59781622,2.56963636 -0.592151351,7.26327273 0.986367568,11.4927273 L21.4315784,66.3878182 Z" id="Fill-4"></path>
</g>
<path d="M37.7886649,90.729615 L17.121839,90.729615 C14.5329527,90.729615 12.4232235,88.645841 12.4232235,86.0882585 L12.4232235,41.1354657 C12.4232235,37.7455758 9.64400236,35 6.21188838,35 C2.77922111,35 0,37.7455758 0,41.1354657 L0,86.0882585 C0,95.4130515 7.68145065,103 17.121839,103 L37.7886649,103 C41.2207789,103 44,100.254424 44,96.8645343 C44,93.4746444 41.2207789,90.729615 37.7886649,90.729615 Z" id="Fill-6" stroke="#FFFFFF" stroke-width="4.4000001"></path>
<path d="M57.5003067,93 C53.1388235,93 49.4613458,95.4700681 48.099839,98.9051261 C47.9095966,99.3869041 47.9941487,99.9193452 48.3285634,100.337555 C48.6629781,100.753854 49.2071473,101 49.7854625,101 L65.2135248,101 C65.791298,101 66.3332992,100.753854 66.6698819,100.337555 C67.0042966,99.9193452 67.0910168,99.3869041 66.9007744,98.9051261 C65.5370995,95.4700681 61.8617898,93 57.5003067,93 Z" id="Fill-7" fill="#FFFFFF"></path>
</g>
</g>
</svg>
<h2><br>2,767,348</h2>
<p>INTERNET USERS</p>
</div>
</div>
</div>
</div>
</div>
<!-- <div class="container-fluid">
        <div class="row rowBoardMembers fixedrow" id="divOurBoardMembers">
            <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 pulse animated">
                <div class="divColorCaptionBox" data-aos="fade-right" data-aos-delay="1000" data-aos-once="true" data-aos-duration="1200">
                    <h1 style="padding-top: 0px;text-align: left;color: #fff;">OUR<br>BOARD<br>MEMBERS</h1>
                </div>
                <div class="divPrevNext"><img src="{{ url('frontend/kscl/assets/img/lefticon.png')}}" class="previous previousobm"><img src="{{ url('frontend/kscl/assets/img/righticon.png')}}" class="next nextobm"></div>

            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9">
                <div id="divOurBoardMembersSlider">
                    <div class="row slicksliderareaobm">
                        <?php if ($data['board_directors'])
                        {
                            foreach ($data['board_directors'] as $row) 
                            { 
                        ?>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <div id="divBoardMember">
                                 
                                <a href = "{{ url('edit-boards/' . $row->id) }}">
                                <img src="{{ URL::asset('frontend/images/edit_ic.png') }}" class="edit_icon"></a>
                                <div class="divCaptionBoxImage imgBoardMembers" style="background-image: url(&quot;../frontend/kscl/assets/img/boards/<?php echo $row->board_images; ?>&quot;);background-repeat: no-repeat;background-size: cover;">
                                </div> 
                                <p class="boardMembersName"><?php echo $row->board_name; ?></p>
                                <div class="divDescription">
                                    <p><?php echo $row->board_title; ?></p>
                                </div>
                                <div class="divReadMore"></div>
                            </div>
                        </div>
                        <?php 
                            }}
                        ?> 
                    </div>                            
                    </div>
                </div>                
            </div>
        </div> -->



        <div class="container-fluid">
        <div class="row fixedrow" id="divTouristPlaceCarousel">
            <div class="col mb-5 mt-5">
                <div class="divHeading divNewSnapShots text-center">
                    <h1 style="padding-bottom: 0px;" data-aos="zoom-in" data-aos-duration="1500" data-aos-once="true" data-blast="color">TOURIST PLACES</h1>
                    <div class="UnderlineHeadingH1">
                        <!-- <img src="assets/img/headingbottom.jpg"> -->
                        <img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}">
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-l-12">
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <div id="divTourismPlacesCarousel" style="padding: 0px 40px;">
                            <div class="row slicksliderareapcp">
                            <div class="col-md-6 col-lg-4 col-xl-4">
                                <div class="divCaptionBoxImage">
                                <div class="width-ratio ratio4-3">
                                        <img src="{{ url('frontend/kscl/assets/img/zoo.jpg')}}" class="contenido">
                                    </div>
                                    </div>
                                    <div class="divCaptionBox">
                                        <h6>Allen Forest Zoo</h6>
                                        <div class="divHeadingBottomH6"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}"></div>
                                        <div class="divDescription">
                                            <p>Kanpur Zoological Park, Kanpur is one of the oldest Zoological Park of India. It has been established and opened for the public on 4th February, 1974....</p>
                                        </div>
                                        <!-- <div class="divReadMore"><a href="#">Read More</a></div> -->
                                    </div>
                                </div>
                                  <div class="col-md-6 col-lg-4 col-xl-4">
                                  <div class="divCaptionBoxImage">
                                <div class="width-ratio ratio4-3">
                                        <img src="{{ url('frontend/kscl/assets/img/jagannath-mandir.png')}}" class="contenido">                         
                                    
                                    </div></div>
                                    <div class="divCaptionBox">
                                        <h6>Jagannath Mandir<br>Benhta</h6>
                                        <div class="divHeadingBottomH6"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}"></div>
                                        <div class="divDescription">
                                            <p>This temple is located in the village of Benhta, three kilometers from the headquarters of the Bhiatargaon Block of Kanpur district....</p>
                                        </div>
                                        <!-- <div class="divReadMore"><a href="#">Read More</a></div> -->
                                    </div>
                                </div>
                             <div class="col-md-6 col-lg-4 col-xl-4">
                             <div class="divCaptionBoxImage">
                                <div class="width-ratio ratio4-3">
                                    <div class="divCaptionBoxImage" style="background-image: url(&quot;assets/img/green-park.jpg &quot;);background-repeat: no-repeat;background-size: cover;" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"></div>
                                     <img src="{{ url('frontend/kscl/assets/img/jagannath-mandir.png')}}" class="contenido">                         
                                    
                                    </div></div>
                                    <div class="divCaptionBox">
                                        <h6>Green<br>Park</h6>
                                        <div class="divHeadingBottomH6"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}"></div>
                                        <div class="divDescription">
                                            <p>This is the best and most famous playground of Kanpur. International Cricket matches are held here and it has one of the best pitches in the world....</p>
                                        </div>
                                        <!-- <div class="divReadMore"><a href="#">Read More</a></div> -->
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-4">
                                <div class="divCaptionBoxImage">
                                <div class="width-ratio ratio4-3">
                                     
                                     <img src="{{ url('frontend/kscl/assets/img/nanaraopark.jpg')}}"  class="contenido">                         
                                    
                                    </div></div>
                                    <div class="divCaptionBox">
                                        <h6>Nana Rao<br>Park</h6>
                                        <div class="divHeadingBottomH6"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}"></div>
                                        <div class="divDescription">
                                            <p>TFormerly known as Memorial Well Garden, it is the biggest park in Kanpur and is situated in the heart of the city on the Mall Road....</p>
                                        </div>
                                        <!-- <div class="divReadMore"><a href="#">Read More</a></div> -->
                                    </div>
                                </div>
                                 <div class="col-md-6 col-lg-4 col-xl-4">
                                 <div class="divCaptionBoxImage">
                                <div class="width-ratio ratio4-3">
                                  
                                     <img src="{{ url('frontend/kscl/assets/img/kanpur-church.png')}}" class="contenido">                         
                                    
                                    </div></div>
                                    <div class="divCaptionBox">
                                        <h6>Kanpur Memorial<br> Church</h6>
                                        <div class="divHeadingBottomH6"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}"></div>
                                        <div class="divDescription">
                                            <p>Kanpur Memorial Church, popularly known as All Soul’s Cathedral is an impressive architectural edifice that was constructed in 1875 to commemorate the courage....</p>
                                        </div>
                                        <!-- <div class="divReadMore"><a href="#">Read More</a></div> -->
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-4">
                                <div class="divCaptionBoxImage">
                                <div class="width-ratio ratio4-3">
                                     
                                     <img src="{{ url('frontend/kscl/assets/img/jk.jpg')}}" class="contenido">                         
                                    
                                    </div></div>
                                    <div class="divCaptionBox">
                                        <h6>JK Temple</h6>
                                        <div class="divHeadingBottomH6"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}"></div>
                                        <div class="divDescription">
                                            <p>This beautifully constructed temple is a unique blend of ancient and modern architecture. The even-level roofs...</p>
                                        </div>
                                        <!-- <div class="divReadMore"><a href="#">Read More</a></div> -->
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-4">
                                <div class="divCaptionBoxImage">
                                <div class="width-ratio ratio4-3">
                                 <img src="{{ url('frontend/kscl/assets/img/bhitargaon.jpg')}}" class="contenido">                         
                                    
                                    </div></div>
                                     
                                    <div class="divCaptionBox">
                                        <h6>Bhitargaon Temple</h6>
                                        <div class="divHeadingBottomH6"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}"></div>
                                        <div class="divDescription">
                                            <p>The Bhitargaon Temple is a terraced brick building fronted with a terracotta panel. Built in the 6th century during the Gupta Empire...</p>
                                        </div>
                                        <!-- <div class="divReadMore"><a href="#">Read More</a></div> -->
                                    </div>
                                </div>
                               
                              
                               
                                <div class="col-md-6 col-lg-4 col-xl-4">
                                <div class="divCaptionBoxImage">
                                <div class="width-ratio ratio4-3">
                                  
                                     <img src="{{ url('frontend/kscl/assets/img/green-park.jpg')}}" class="contenido">                         
                                    
                                    </div></div>
                                    <div class="divCaptionBox">
                                        <h6>Green<br>Park</h6>
                                        <div class="divHeadingBottomH6"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}"></div>
                                        <div class="divDescription">
                                            <p>This is the best and most famous playground of Kanpur. International Cricket matches are held here and it has one of the best pitches in the world....</p>
                                        </div>
                                        <!-- <div class="divReadMore"><a href="#">Read More</a></div> -->
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-4">
                                <div class="divCaptionBoxImage">
                                <div class="width-ratio ratio4-3">
                                   
                                     <img src="{{ url('frontend/kscl/assets/img/jagannath-mandir.png')}}" class="contenido">                         
                                    
                                    </div></div>
                                    <div class="divCaptionBox">
                                        <h6>Jagannath Mandir<br>Benhta</h6>
                                        <div class="divHeadingBottomH6"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}"></div>
                                        <div class="divDescription">
                                            <p>This temple is located in the village of Benhta, three kilometers from the headquarters of the Bhiatargaon Block of Kanpur district....</p>
                                        </div>
                                        <!-- <div class="divReadMore"><a href="#">Read More</a></div> -->
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-4">
                                <div class="divCaptionBoxImage">
                                <div class="width-ratio ratio4-3">
                                     <img src="{{ url('frontend/kscl/assets/img/kanpur-church.png')}}" class="contenido">                         
                                    
                                    </div></div>
                                    <div class="divCaptionBox">
                                        <h6>Kanpur Memorial<br> Church</h6>
                                        <div class="divHeadingBottomH6"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}"></div>
                                        <div class="divDescription">
                                            <p>Kanpur Memorial Church, popularly known as All Soul’s Cathedral is an impressive architectural edifice that was constructed in 1875 to commemorate the courage....</p>
                                        </div>
                                        <!-- <div class="divReadMore"><a href="#">Read More</a></div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="divPrevNext" style=" position: absolute;  top: 50%; left: 0; padding: 0; width: 100%;  transform: translateY(-50%);"><img src="{{ url('frontend/kscl/assets/img/lefticon.png')}}" class="previous previouspcp"><img src="{{ url('frontend/kscl/assets/img/righticon.png')}}" class="next nextpcp"></div>
                    </div>
                </div>
            </div>
            <a href="{{ url('edit-page-content/1') }}" class="btnReadMore m-a">Read More</a>
        </div>
    </div>



    </div>

<div class="container-fluid">
        <div class="row rowBoardMembers fixedrow" id="divOurBoardMembers">
            <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 m-a">
          <section class="bg-white bg-img">
        <div class="search-tours-form" id="demo">
             <h1 data-aos="zoom-in" data-aos-duration="1500" data-aos-once="true" data-blast="color">WHERE WOULD YOU LIKE TO GO?</h1>
             <div class="UnderlineHeadingH1">
                        <img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}">
                    </div>
            <div class="search-tours-wrap">
                <div class="search-tours-content">
                    <div class="tours-container active">
                        <div class="tours-box">
                            <div class="tours-search">
                            
                             <div class="col-md-6 p-0">
                             
                             <form method="post" class="form search divider-skew">
                                    <div class="search-wrap">
                                        <input type="text" id="source" placeholder="From" class="typeahead form-control search-field">
                                    </div>
                                </form>
                                <img src="img/pic/loader.gif" alt="" class="progress_loader1" />

                             </div>
                             <div class="col-md-6 p-0 to-destination">
                                  <form method="post" class="form search divider-skew">
                                    <div class="search-wrap">
                                        <input type="text" id="destination" placeholder="To" class="typeahead form-control search-field">
                                    </div>
                                </form>
                                <img src="{{ url('frontend/kscl/assets/img/trip/pic/loader.gif')}}" alt="" class="progress_loader2" />
                             </div>
                                
                           </div>

                            </div>

                        </div>

                    </div>
                  
                </div>
                  <div class="row button-searching">
                        <div class="button-search">Search</div>
                    </div>
            </div>
            </section>
        </div>
    
    <section class="bg-white page-section travel-option stick">
        <div class="container">
            <div class="row travel-mode">
                <div class="col-md-12 cust-width">
                    <div class="col trip_plan">
                        <div class="form-check has-success">
                            <label class="form-check-label">

                                <input type="radio" checked="checked" name="radio">
                                <span class="checkmark"></span>

                            </label>
                        </div>
                        <img src="{{ url('frontend/kscl/assets/img/trip/plane.svg')}}"  alt="plane" />
                        <span>FLIGHTS</span>
                    </div>
                    <div class="col trip_plan">
                        <div class="form-check has-success">
                            <label class="form-check-label">

                                <input type="radio" checked="checked" name="radio">
                                <span class="checkmark"></span>

                            </label>
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" id="" value="option1">
                            </label>
                        </div>
                        <img src="{{ url('frontend/kscl/assets/img/trip/train.svg')}}"  alt="train" />
                        <span>TRAIN</span>
                    </div>
                    <div class="col trip_plan">
                        <div class="form-check has-success">
                            <label class="form-check-label">
                                <input type="radio" checked="checked" name="radio">
                                <span class="checkmark"></span>

                            </label>
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" id="" value="option1">
                            </label>
                        </div>
                        <img src="{{ url('frontend/kscl/assets/img/trip/bus.svg')}}" alt="bus" />
                        <span>BUSES</span>
                    </div>
                    <div class="col trip_plan">
                        <div class="form-check has-success">
                            <label class="form-check-label">

                                <input type="radio" checked="checked" name="radio">
                                <span class="checkmark"></span>

                            </label>
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" id="" value="option1">
                            </label>
                        </div>
                        <img src="{{ url('frontend/kscl/assets/img/trip/car.svg')}}" alt="cab" />
                        <span>TAXI/CAB</span>
                    </div>
                </div>
            </div>
        </div>



    </section>
    <section class="page-section main-section">
        <div class="container-fluid">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 serach_darkbg">
                        <div class="col-md-3">
                            <div class="form-group trip_group ">
                                <input type="text" placeholder="Distance" class="form-control search-field trip_form">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group trip_group">
                                <input type="text" placeholder="Price" class="form-control search-field trip_form">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group trip_group">
                                <input type="text" placeholder="Duration" class="form-control search-field trip_form">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group trip_group trip_last">
                                <input type="text" placeholder="Route Rank" class="form-control search-field trip_form">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section_trip ">
<div class="container-fluid">
<div class="container" id="flights">
        </div>
        </div>
        
    </section>
    
     <div id="sharedPref" style="display: none;">
        <div id="indirectRoute">
            <div class="col-md-12 serach_lightbg trip_planner">
                <div class="col-md-5">
                    <div class="form-group trip_group-g ">
                        <span class="duration_L from"> </span>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group trip_group-g duration_C ">
                        <span class="duration_C to"></span>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group trip_group-g">
                        <span class="duration_R destination"></span>
                    </div>
                </div>
            </div>
            <div class="col-md-12 serach_lightbg trip_shadow">
                <div class="col-md-1">
                    <img class="form_img" src="{{ url('frontend/kscl/assets/img/trip/pic/locomotive.svg')}}">
                </div>
                <div class="col-md-10 flight_border-bus">
                    <span class="bus_duration">  <img class="to_img" src="{{ url('frontend/kscl/assets/img/trip/pic/bus-front-view2.svg')}}"></span>
                </div>
                <div class="col-md-1">
                    <img class="destination_img" src="{{ url('frontend/kscl/assets/img/trip/pic/bus-front-view.svg')}}">
                </div>
            </div>
        </div>
        <div id="indirectRoute_3">
            <div class="col-md-12 serach_lightbg trip_planner">
                <div class="col-md-2 custom_left">
                    <div class="form-group trip_group-g ">
                        <span class="duration_L from"> </span>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="col-md-12">
                        <div class="form-group trip_group-g duration_C ">
                            <span class="duration_C destination"></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 custom_left">
                    <div class="form-group trip_group-g">
                        <span class="duration_R final"></span>
                    </div>
                </div>
            </div>
            <div class="col-md-12 serach_lightbg trip_shadow">
                <div class="col-md-1">
                    <img class="form_img" src="{{ url('frontend/kscl/assets/img/trip/pic/locomotive.svg')}}">
                </div>
                <div class="col-md-1 flight_border-single">
                </div>
                <div class="col-md-8 flight_border-bus">
                    <div class="col-md-12">
                        <div class="form-group trip_group-g duration_C ">
                            <span class="bus_duration">  <img class="to_img" src="{{ url('frontend/kscl/assets/img/trip/pic/bus-front-view2.svg')}}"></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 flight_border-single">
                </div>
                <div class="col-md-1">
                    <img class="final_img" src="{{ url('frontend/kscl/assets/img/trip/pic/bus-front-view.svg')}}">
                </div>
            </div>
        </div>
        <div id="indirectRoute_4">
            <div class="col-md-12 serach_lightbg trip_planner">
                <div class="col-md-2 custom_left">
                    <div class="form-group trip_group-g ">
                        <span class="duration_L from"> </span>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="col-md-6">
                        <div class="form-group trip_group-g duration_C ">
                            <span class="duration_C to"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group trip_group-g duration_C ">
                            <span class="duration_C destination"></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 custom_left">
                    <div class="form-group trip_group-g">
                        <span class="duration_R final"></span>
                    </div>
                </div>
            </div>
            <div class="col-md-12 serach_lightbg trip_shadow">
                <div class="col-md-1">
                    <img class="form_img" src="{{ url('frontend/kscl/assets/img/trip/pic/locomotive.svg')}}">
                </div>
                <div class="col-md-1 flight_border-single">
                </div>
                <div class="col-md-8 flight_border-bus">
                    <div class="col-md-6">
                        <div class="form-group trip_group-g duration_C ">
                            <span class="bus_duration">  <img class="to_img" src="{{ url('frontend/kscl/assets/img/trip/pic/bus-front-view2.svg')}}"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group trip_group-g duration_C ">
                            <span class="bus_duration">  <img class="destination_img" src="{{ url('frontend/kscl/assets/img/trip/pic/bus-front-view2.svg')}}"></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 flight_border-single">
                </div>
                <div class="col-md-1">
                    <img class="final_img" src="{{ url('frontend/kscl/assets/img/trip/pic/bus-front-view.svg')}}">
                </div>
            </div>
        </div>
        <div id="indirectRoute_5">
            <div class="col-md-12 serach_lightbg trip_planner">
                <div class="col-md-2 custom_left">
                    <div class="form-group trip_group-g ">
                        <span class="duration_L from"> </span>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="col-md-4">
                        <div class="form-group trip_group-g duration_C ">
                            <span class="duration_C to"></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group trip_group-g duration_C ">
                            <span class="duration_C destination"></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group trip_group-g duration_C ">
                            <span class="duration_C destination_"></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 custom_left">
                    <div class="form-group trip_group-g">
                        <span class="duration_R final"></span>
                    </div>
                </div>
            </div>
            <div class="col-md-12 serach_lightbg trip_shadow">
                <div class="col-md-1">
                    <img class="form_img" src="{{ url('frontend/kscl/assets/img/trip/pic/locomotive.svg')}}">
                </div>
                <div class="col-md-1 flight_border-single">
                </div>
                <div class="col-md-8 flight_border-bus">
                    <div class="col-md-4">
                        <div class="form-group trip_group-g duration_C ">
                            <span class="bus_duration">  <img class="to_img" src="{{ url('frontend/kscl/assets/img/trip/pic/bus-front-view2.svg')}}"></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group trip_group-g duration_C ">
                            <span class="bus_duration">  <img class="destination_img" src="{{ url('frontend/kscl/assets/img/trip/pic/bus-front-view2.svg')}}"></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group trip_group-g duration_C ">
                            <span class="bus_duration">  <img class="_destination_img" src="{{ url('frontend/kscl/assets/img/trip/pic/bus-front-view2.svg')}}"></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 flight_border-single">
                </div>
                <div class="col-md-1">
                    <img class="final_img" src="{{ url('frontend/kscl/assets/img/trip/pic/bus-front-view.svg')}}">
                </div>
            </div>
        </div>
        <div id="indirectRoute_6">
            <div class="col-md-12 serach_lightbg trip_planner">
                <div class="col-md-2 custom_left">
                    <div class="form-group trip_group-g ">
                        <span class="duration_L from"> </span>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="col-md-3">
                        <div class="form-group trip_group-g duration_C ">
                            <span class="duration_C to"></span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group trip_group-g duration_C ">
                            <span class="duration_C destination"></span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group trip_group-g duration_C ">
                            <span class="duration_C destination_"></span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group trip_group-g duration_C ">
                            <span class="duration_C destination__"></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 custom_left">
                    <div class="form-group trip_group-g">
                        <span class="duration_R final"></span>
                    </div>
                </div>
            </div>
            <div class="col-md-12 serach_lightbg trip_shadow">
                <div class="col-md-1">
                    <img class="form_img" src="{{ url('frontend/kscl/assets/img/trip/pic/locomotive.svg')}}">
                </div>
                <div class="col-md-1 flight_border-single">
                </div>
                <div class="col-md-8 flight_border-bus">
                    <div class="col-md-3">
                        <div class="form-group trip_group-g duration_C ">
                            <span class="bus_duration">  <img class="to_img" src="{{ url('frontend/kscl/assets/img/trip/pic/bus-front-view2.svg')}}"></span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group trip_group-g duration_C ">
                            <span class="bus_duration">  <img class="destination_img" src="{{ url('frontend/kscl/assets/img/trip/pic/bus-front-view2.svg')}}"></span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group trip_group-g duration_C ">
                            <span class="bus_duration">  <img class="_destination_img" src="{{ url('frontend/kscl/assets/img/trip/pic/bus-front-view2.svg')}}"></span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group trip_group-g duration_C ">
                            <span class="bus_duration">  <img class="__destination_img" src="{{ url('frontend/kscl/assets/img/trip/pic/bus-front-view2.svg')}}"></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 flight_border-single">
                </div>
                <div class="col-md-1">
                    <img class="final_img" src="{{ url('frontend/kscl/assets/img/trip/pic/bus-front-view.svg')}}">
                </div>

                <div id="expand_container">
                    <div class="col-md-12 serach_lightbg trip_planner_red">
                        <div id="expandview" class="collapse">
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div id="expand_header">
            <div class="col-md-12 bg_red">
                <div class="col-md-4 trip-P-center">
                    <span class="trip-P from"> Jaipur </span> <br>
                </div>
                <div class="col-md-4 border_solid">
                    <span class="trip-P durations"> 4hr. 32m (Rs.2,433) </span>
                </div>
                <div class="col-md-4 trip-P-center">
                    <span class="trip-P to"> Jaipur Juntions </span> <br>
                </div>

                <!--<div class="img_design"> <img src="img/pic/line.svg"><span class="changes">Changeover at Jaipur 3hr 30m</span>  </div>-->
            </div>
        </div>
        <div id="expand_row">
            <div class="col-md-12 bg_red-2">
                <div class="col-md-4  trip-P-center">
                    <span class="trip-P from"> Jaipur </span> <br>
                </div>
                <div class="col-md-4 border_solid">
                    <span class="trip-P durations"> 4hr. 32m (Rs.2,433) </span>
                </div>
                <div class="col-md-4 trip-P-center">
                    <span class="trip-P to"> Jaipur Juntions </span> <br>
                </div>

            </div>
        </div>
        <div id="directRoute">
            <div class="col-md-12 serach_lightbg trip_planner">
                <div class="col-md-5">
                    <div class="form-group trip_group-g ">
                        <span class="duration_L from"></span>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group trip_group-g duration_C ">
                        <span class="duration_C "> To</span>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group trip_group-g">
                        <span class="duration_R to"></span>
                    </div>
                </div>
            </div>
            <div class="col-md-12 serach_lightbg trip_planner trip_shadow">
                <div class="col-md-1">
                    <img class="form_img" src="{{ url('frontend/kscl/assets/img/trip/pic/takeoff-the-plane2.svg')}}">
                </div>
                <div class="col-md-10 flight_border">
                    <span></span>
                </div>
                <div class="col-md-1">
                    <img class="to_img" src="{{ url('frontend/kscl/assets/img/trip/pic/plane-landing.svg')}}">
                </div>
            </div>
        </div>
        <div id="row" class="row">
        </div>
        <div id="summary">
            <div class="col-md-12 serach_lightbg">
                <div class="col-md-3">
                    <div class="form-group trip_group-g ">
                        <input type="text" placeholder="1136Km" class="form-control search-field trip_form-w distance">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group trip_group-g">
                        <input type="text" placeholder="Rs. 2,666" class="form-control search-field trip_form-w price">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group trip_group-g">
                        <input type="text" placeholder="1 h 55 m" class="form-control search-field trip_form-w durations">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group trip_group-g">
                        <input type="text" placeholder="7.9" class="form-control search-field trip_form-w rating">
                    </div>
                </div>
            </div>
        </div>
    </div>

            </div>
        </div>
    


<div class="container-fluid">
        <div class="row fixedrow" id="divNewsSnapshotsRow">
            <div class="col-lg-7 col-xl-7">
                <div class="divNewSnapShots">
                    <div>
                        <div class="row">
                            <div class="col-xl-8">
                                <h1 data-aos="zoom-in" data-aos-duration="1500" data-aos-once="true" data-blast="color">NEWS & EVENTS</h1>
                            </div>
                            <div class="col">
                                <div class="divPrevNext">
                                    <img src="{{ url('frontend/kscl/assets/img/lefticon.png')}}" class="previous previousnews">
                                    <img src="{{ url('frontend/kscl/assets/img/righticon.png')}}" class="next nextnews">
                                </div>
                            </div>
                        </div>
                    </div>
                     
                    <div class="slicknews">
                        <div>
                          <div class="row">
                            <?php 
                            $i=1;
                            foreach($data['news'] as $new)      
                                {  ?>              
                                <div class="col-md-6 col-lg-6 col-xl-6 offset-xl-0 divNewsExcerpt edit-icon3">
                                    <div class="divNewsImage1">
                                        <div class="width-ratio ratio16-9">
                                            <img src="{{ url('frontend/kscl/assets/img/news/')}}/<?php echo $new->news_img_path; ?>" class="contenido">
                                        </div>
                                    </div>
                                    <a href = "{{ url('edit-news/' . $new->id) }}"> 
                                    <img src="{{ URL::asset('frontend/images/edit_ic.png') }}" class="edit_icon"></a>
                                    <div class="divNewsDate"><?php echo date("d F, Y", strtotime($new->news_date)); ?></div>
                                    <div class="divNewsTitle"><?php echo $new->news_title; ?><br></div>
                                    <div class="divNewsExcerpt"><br><?php echo $new->news_desc; ?><br></div>
                                </div>
                                <?php
                                if($i%4 == 0)
                                {
                                ?>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <?php
                                    }
                                    ?>
                                    <?php 
                                    $i++; 
                                    }
                                    ?>
                                </div> 
                            </div>      
                </div>
        </div>
        </div>
            <div class="col-lg-5 col-xl-5">
                <div class="divColorCaptionBox">
                    <div style="text-align: left;"><img src="{{ url('frontend/kscl/assets/img/whitequotestart.png')}}" style="width: 14px;">
                    	
                    </div>
					
					<div class="edit-icon1">
	                    <a data-toggle='modal' data-target='#content_13' href='javascript:void(0);'><img src="{{ URL::asset('frontend/images/edit_ic.png') }}" class="edit_icon"></a>
                            <?php
                            $count = str_word_count($data['results']->content_13);
                            //print_r($count);    
                            if($count <= 30)
                            {
                            ?>
                            <p>
                            <?php 
                                echo $data['results']->content_13; 
                            }
                            else
                            {   
                            ?>
                            <?php
                               echo "Error... This content must be in limit to 30 words."; 
                            }    
                            ?>
                        </p>
	                </div>

                    <!--<p>Kanpur Central Railway Station is the second most busiest railway station in India.</p>-->

                    <div style="text-align: right;"><img src="{{ url('frontend/kscl/assets/img/whitequoteend.png')}}" style="width: 14px;"></div>
                </div>
                <div class="divNewSnapShots divNewsTickers">
                    <h1 data-aos="zoom-in" data-aos-duration="1500" data-aos-once="true" data-blast="color">ALERTS</h1>
                    <div id="divNewTickerWrapper">
                        <div class="row">
                        	<?php if ($data['alerts'])
	                        {
	                            foreach ($data['alerts'] as $row) 
	                            {    
	                        ?>
                            <div class="col-5 col-sm-3 col-md-2 col-lg-4 col-xl-3 offset-xl-0">
                                <div>
                                    <div class="width-ratio ratio4-3">
                                        <img src="{{ url('frontend/kscl/assets/img/alerts/')}}/<?php echo $row->alert_image; ?>" class="contenido"> 
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-7 col-sm-9 col-md-10 col-lg-8 col-xl-9">
                                
                                <div class="divNewsExcerpt edit-icon1">
                                    <a href = "{{ url('edit-alert/' . $row->id) }}"> 
                                    <img src="{{ URL::asset('frontend/images/edit_ic.png') }}" class="edit_icon"></a>
                                    <?php
                                    $count = str_word_count($row->alert_desc);
                                    if($count <= 30)
                                    {
                                    ?>
                                    <?php 

                                        echo $row->alert_desc; 
                                    }
                                    else
                                    {   
                                    ?>
                                    <?php
                                        echo "Error... This content must be in limit to 30 words."; 
                                    }    
                                    ?>
                                </div>
                                <div class="divNewsDate"><?php echo date("d F, Y", strtotime($row->alert_date)); ?></div>
                            </div>
                            <?php
                        		}}
                            ?>
                        </div>      
                    </div>
                </div>                   
            </div>
        </div>
    </div>
<div class="container-fluid">
        <div class="row fixedrow" id="divGallery">
            <div class="col-lg-12 col-xl-12">
                <div id="divGalleryHeading" class="divHeading">
                    <h1 data-aos="fade-left" data-aos-once="true" data-aos-duration="1500" data-blast="color">GALLERY</h1>
                    <div class="UnderlineHeadingH1" style="padding-bottom: 0px;"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}" style="text-align: left;" data-aos="fade-left" data-aos-once="true" data-aos-duration="1000" data-aos-delay="500"></div>
                </div>
                
                <div id="divGalleryWrapper">
                    <div class="divNewsImage1">
                    <?php 
                        $i = 4;
                    ?>
                    <?php if ($data['gallery_random'])
                    {
                        foreach ($data['gallery_random'] as $row) 
                        {    
                    ?>
                    <div id="divGalleryPic<?php echo $i; ?>" 
                            <?php if($i == 4){?>class="gallerypic edit-icon1 width-ratio ratio4-3"<?php }?> 
                            <?php if($i == 3){?>class="gallerypic edit-icon1 width-ratio ratio16-9"<?php }?> 
                            <?php if($i == 2){?>class="gallerypic edit-icon1 width-ratio ratio1-1"<?php }?> 
                            <?php if($i == 1){?>class="gallerypic edit-icon1 width-ratio ratio4-3"<?php }?>>
                            <img src="{{ url('frontend/kscl/assets/img/gallery/')}}/<?php echo $row->gallery_image; ?>" class="contenido">
                        <div>
                            <a href = "{{ url('edit-gallery/' . $row->id) }}"> 
                            <img src="{{ URL::asset('frontend/images/edit_ic.png') }}" class="edit_icon"></a>
                        </div>
                    </div>
                    <?php 
                        $i--;}}
                    ?>
                    </div> 
                </div>
            </div> 
            <div id="divGalleryWrapperResponsive" class="slickgallery">
                <div><img src="{{ url('frontend/kscl/assets/img/kanpursmartcity.jpg')}}"></div>
                <div><img src="{{ url('frontend/kscl/assets/img/Bitmap.jpg')}}"></div>
                <div><img src="{{ url('frontend/kscl/assets/img/g1.jpg')}}"></div>
                <div><img src="{{ url('frontend/kscl/assets/img/g4.jpg')}}"></div>
            </div>
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
          <h4 class="modal-title" id="mtitle" style="text-transform:capitalize;">Home Page Content</h4>
        </div>
        <form action="{{ url('updateHomePage/9/content_1') }}" method="POST" class="content_1">
          {{ csrf_field() }}
          <textarea style="margin: 0px; height: 96px;" id="content" name="content" class="validate ckeditor" placeholder="Page Content"><?php echo $data['results']->content_1; ?></textarea>
          <div class="modal-body" id="elistdata"> </div>
          <div class="modal-footer">
            <button style="float: none;" form-id="content_1" type="button" class="btn btn-default add_content" data-dismiss="modal">Update</button>
            &nbsp; <a class="waves-effect waves-light btn btn_default red" data-dismiss="modal">Close</a> </div>
        </form>
      </div>
    </div>
  </div>
  <div id="content_2" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="mtitle" style="text-transform:capitalize;">Home Page Content</h4>
        </div>
        <form action="{{ url('updateHomePage/9/content_2') }}" method="POST" class="content_2">
          {{ csrf_field() }}
          <textarea style="margin: 0px; height: 96px;" id="content" name="content" class="validate ckeditor" placeholder="Page Content"><?php echo $data['results']->content_2; ?></textarea>
          <div class="modal-body" id="elistdata"> </div>
          <div class="modal-footer">
            <button style="float: none;" form-id="content_2" type="button" class="btn btn-default add_content" data-dismiss="modal">Update</button>
            &nbsp; <a class="waves-effect waves-light btn btn_default red" data-dismiss="modal">Close</a> </div>
        </form>
      </div>
    </div>
  </div>
  <div id="content_3" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="mtitle" style="text-transform:capitalize;">Home Page Content</h4>
        </div>
        <form action="{{ url('updateHomePage/9/content_3') }}" method="POST" class="content_3">
          {{ csrf_field() }}
          <textarea style="margin: 0px; height: 96px;" id="content" name="content" class="validate ckeditor" placeholder="Page Content"><?php echo $data['results']->content_3; ?></textarea>
          <div class="modal-body" id="elistdata"> </div>
          <div class="modal-footer">
            <button style="float: none;" form-id="content_3" type="button" class="btn btn-default add_content" data-dismiss="modal">Update</button>
            &nbsp; <a class="waves-effect waves-light btn btn_default red" data-dismiss="modal">Close</a> </div>
        </form>
      </div>
    </div>
  </div>
  <div id="content_4" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="mtitle" style="text-transform:capitalize;">Home Page Content</h4>
        </div>
        <form action="{{ url('updateHomePage/9/content_4') }}" method="POST" class="content_4">
          {{ csrf_field() }}
          <textarea style="margin: 0px; height: 96px;" id="content" name="content" class="validate ckeditor" placeholder="Page Content"><?php echo $data['results']->content_4; ?></textarea>
          <div class="modal-body" id="elistdata"> </div>
          <div class="modal-footer">
            <button style="float: none;" form-id="content_4" type="button" class="btn btn-default add_content" data-dismiss="modal">Update</button>
            &nbsp; <a class="waves-effect waves-light btn btn_default red" data-dismiss="modal">Close</a></div>
        </form>
      </div>
    </div>
  </div>
  <div id="content_5" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="mtitle" style="text-transform:capitalize;">Home Page Content</h4>
        </div>
        <form action="{{ url('updateHomePage/9/content_5') }}" method="POST" class="content_5">
          {{ csrf_field() }}
          <textarea style="margin: 0px; height: 96px;" id="content" name="content" class="validate ckeditor" placeholder="Page Content"><?php echo $data['results']->content_5; ?></textarea>
          <div class="modal-body" id="elistdata"> </div>
          <div class="modal-footer">
            <button style="float: none;" form-id="content_5" type="button" class="btn btn-default add_content" data-dismiss="modal">Update</button>
            &nbsp; <a class="waves-effect waves-light btn btn_default red" data-dismiss="modal">Close</a></div>
        </form>
      </div>
    </div>
  </div>
  <div id="content_6" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="mtitle" style="text-transform:capitalize;">Home Page Content</h4>
        </div>
        <form action="{{ url('updateHomePage/9/content_6') }}" method="POST" class="content_6">
          {{ csrf_field() }}
          <textarea style="margin: 0px; height: 96px;" id="content" name="content" class="validate ckeditor" placeholder="Page Content"><?php echo $data['results']->content_6; ?></textarea>
          <div class="modal-body" id="elistdata"> </div>
          <div class="modal-footer">
            <button style="float: none;" form-id="content_6" type="button" class="btn btn-default add_content" data-dismiss="modal">Update</button>
            &nbsp; <a class="waves-effect waves-light btn btn_default red" data-dismiss="modal">Close</a></div>
        </form>
      </div>
    </div>
  </div>
  <div id="content_7" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="mtitle" style="text-transform:capitalize;">Home Page Content</h4>
        </div>
        <form action="{{ url('updateHomePage/9/content_7') }}" method="POST" class="content_7">
          {{ csrf_field() }}
          <textarea style="margin: 0px; height: 96px;" id="content" name="content" class="validate ckeditor" placeholder="Page Content"><?php echo $data['results']->content_7; ?></textarea>
          <div class="modal-body" id="elistdata"> </div>
          <div class="modal-footer">
            <button style="float: none;" form-id="content_7" type="button" class="btn btn-default add_content" data-dismiss="modal">Update</button>
            &nbsp; <a class="waves-effect waves-light btn btn_default red" data-dismiss="modal">Close</a></div>
        </form>
      </div>
    </div>
  </div>

 <div id="content_8" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="mtitle" style="text-transform:capitalize;">Home Page Content</h4>
        </div>
        <form action="{{ url('updateHomePage/9/content_8') }}" method="POST" class="content_8">
          {{ csrf_field() }}
          <textarea style="margin: 0px; height: 96px;" id="content" name="content" class="validate ckeditor" placeholder="Page Content"><?php echo $data['results']->content_8; ?></textarea>
          <div class="modal-body" id="elistdata"> </div>
          <div class="modal-footer">
            <button style="float: none;" form-id="content_8" type="button" class="btn btn-default add_content" data-dismiss="modal">Update</button>
            &nbsp; <a class="waves-effect waves-light btn btn_default red" data-dismiss="modal">Close</a></div>
        </form>
      </div>
    </div>
  </div>

   <div id="content_9" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="mtitle" style="text-transform:capitalize;">Home Page Content</h4>
        </div>
        <form action="{{ url('updateHomePage/9/content_9') }}" method="POST" class="content_9">
          {{ csrf_field() }}
          <textarea style="margin: 0px; height: 96px;" id="content" name="content" class="validate ckeditor" placeholder="Page Content"><?php echo $data['results']->content_9; ?></textarea>
          <div class="modal-body" id="elistdata"> </div>
          <div class="modal-footer">
            <button style="float: none;" form-id="content_9" type="button" class="btn btn-default add_content" data-dismiss="modal">Update</button>
            &nbsp; <a class="waves-effect waves-light btn btn_default red" data-dismiss="modal">Close</a></div>
        </form>
      </div>
    </div>
  </div>

   <div id="content_10" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="mtitle" style="text-transform:capitalize;">Home Page Content</h4>
        </div>
        <form action="{{ url('updateHomePage/9/content_10') }}" method="POST" class="content_10">
          {{ csrf_field() }}
          <textarea style="margin: 0px; height: 96px;" id="content" name="content" class="validate ckeditor" placeholder="Page Content"><?php echo $data['results']->content_10; ?></textarea>
          <div class="modal-body" id="elistdata"> </div>
          <div class="modal-footer">
            <button style="float: none;" form-id="content_10" type="button" class="btn btn-default add_content" data-dismiss="modal">Update</button>
            &nbsp; <a class="waves-effect waves-light btn btn_default red" data-dismiss="modal">Close</a></div>
        </form>
      </div>
    </div>
  </div>

   <div id="content_11" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="mtitle" style="text-transform:capitalize;">Home Page Content</h4>
        </div>
        <form action="{{ url('updateHomePage/9/content_11') }}" method="POST" class="content_11">
          {{ csrf_field() }}
          <textarea style="margin: 0px; height: 96px;" id="content" name="content" class="validate ckeditor" placeholder="Page Content"><?php echo $data['results']->content_11; ?></textarea>
          <div class="modal-body" id="elistdata"> </div>
          <div class="modal-footer">
            <button style="float: none;" form-id="content_11" type="button" class="btn btn-default add_content" data-dismiss="modal">Update</button>
            &nbsp; <a class="waves-effect waves-light btn btn_default red" data-dismiss="modal">Close</a></div>
        </form>
      </div>
    </div>
  </div>


  <div id="content_12" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="mtitle" style="text-transform:capitalize;">Home Page Content</h4>
        </div>
        <form action="{{ url('updateHomePage/9/content_12') }}" method="POST" class="content_12">
          {{ csrf_field() }}
          <textarea style="margin: 0px; height: 96px;" id="content" name="content" class="validate ckeditor" placeholder="Page Content"><?php echo $data['results']->content_12; ?></textarea>
          <div class="modal-body" id="elistdata"> </div>
          <div class="modal-footer">
            <button style="float: none;" form-id="content_12" type="button" class="btn btn-default add_content" data-dismiss="modal">Update</button>
            &nbsp; <a class="waves-effect waves-light btn btn_default red" data-dismiss="modal">Close</a></div>
        </form>
      </div>
    </div>
  </div>

  <div id="content_13" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="mtitle" style="text-transform:capitalize;">Home Page Content</h4>
        </div>
        <form action="{{ url('updateHomePage/9/content_13') }}" method="POST" class="content_13">
          {{ csrf_field() }}
          <textarea style="margin: 0px; height: 96px;" id="content" name="content" class="validate ckeditor" placeholder="Page Content"><?php echo $data['results']->content_13; ?></textarea>
          <div class="modal-body" id="elistdata"> </div>
          <div class="modal-footer">
            <button style="float: none;" form-id="content_13" type="button" class="btn btn-default add_content" data-dismiss="modal">Update</button>
            &nbsp; <a class="waves-effect waves-light btn btn_default red" data-dismiss="modal">Close</a></div>
        </form>
      </div>
    </div>
  </div>

  <div id="content_14" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="mtitle" style="text-transform:capitalize;">Home Page Content</h4>
        </div>
        <form action="{{ url('updateHomePage/9/content_14') }}" method="POST" class="content_14">
          {{ csrf_field() }}
          <textarea style="margin: 0px; height: 96px;" id="content" name="content" class="validate ckeditor" placeholder="Page Content"><?php echo $data['results']->content_14; ?></textarea>
          <div class="modal-body" id="elistdata"> </div>
          <div class="modal-footer">
            <button style="float: none;" form-id="content_14" type="button" class="btn btn-default add_content" data-dismiss="modal">Update</button>
            &nbsp; <a class="waves-effect waves-light btn btn_default red" data-dismiss="modal">Close</a></div>
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
 <script type="text/javascript" src="<?php echo url('js-trip-planner/imagesloaded.pkgd.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo url('js-trip-planner/script.js'); ?>"></script>
<script type="text/javascript" src="<?php echo url('js-trip-planner/jquery.tweet.js'); ?>"></script>
<script type="text/javascript" src="<?php echo url('js-trip-planner/typeahead.bundle.js'); ?>"></script>
<script type="text/javascript" src="<?php echo url('js-trip-planner/trippallner.js'); ?>"></script>
<script type="text/javascript" src="<?php echo url('js-trip-planner/jquery.flexslider.js'); ?>"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
 
