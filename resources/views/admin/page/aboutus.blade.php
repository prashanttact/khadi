@extends('frontend.inc.edit')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<div class="content-content_container">
  <section class="content" style="position:relative">
  <div class="row mrg-b20">
  <div class="col m8 s12 no-mrg">
  <h1 class="head-title"><span class="gry-light">Edit Page Content </span></h1>
  </div>
  <div class="back-align">
               <a href="{{ url('view-page-content') }}"><i class="far fa-arrow-alt-circle-left"></i> Back</a>
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


<div class="container-fluid" id="divTopBanner">
        <div class="banner-inner">
           <div class="divHeading banner-content">
                <p class="text-white mb-0" data-aos="fade-right" data-aos-once="true" data-aos-duration="1500">Get to Know The City</p>
                <h3 class="text-white" data-aos="fade-right" data-aos-once="true" data-aos-duration="1500">Kanpur City<br> Profile
                </h3>
                <div data-aos="fade-right" data-aos-once="true" data-aos-duration="1000" data-aos-delay="500">
                    <img src="{{ url('frontend/kscl/assets/img/headingbottomwhite.jpg')}}">
                </div>
            </div>
        </div>
    </div>
<div class="container-fluid containerpadding" id="main-content">
        <div class="row fixedrow" id="divRowMainFeatures">
            <div class="col-xl-3">
                <div class="divHeading">
                    <h1 class="text-uppercase" style="text-align: left;" data-aos="fade-right" data-aos-once="true" data-aos-duration="1500">&nbsp;About
                        <br>Kanpur
                    </h1>
                    <div style="text-align: left;" data-aos="fade-right" data-aos-once="true" data-aos-duration="1000" data-aos-delay="500">
                        <img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}">
                    </div>
                </div>
                <div class="divDotbgCaptionBox p-2" data-aos="fade-right" data-aos-once="true" data-aos-duration="3000">
                    <div style="text-align: left;">
                        <img src="{{ url('frontend/kscl/assets/img/bluequotestart.png')}} " style="width: 14px;">
                    </div>
                    <em>Kanpur is the 11th most populous urban city in India, largest urban agglomeration in Uttar Pradesh.</em>
                    <div style="text-align: right;">
                        <img src="{{ url('frontend/kscl/assets/img/bluequoteend.png')}}" style="width: 14px;">
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-md-9">
                <p>Kanpur is a city situated on the banks of River Ganga and is an important industrial centre of Uttar Pradesh. Known for its historical and religious past the city was a breeding ground for a change in the freedom and literary movements during the first half of the 20th century. Supposed to have been founded by King Hindu Singh of the earlier state of Sachendi, the city was formerly known as “Kanhpur”.Later it became a strategic and business centre during the British period and a large garrison was established here.</p>
                <p>Kanpur also played an important role during the war of Independence of 1857 and during the freedom struggle of India. Great heroes like Nana Sahib, Tatya Tope, Ajimullah khan etc. have operated from Kanpur during the freedom movement. Kanpur is also known globally for the finest quality leather tanned by them. It has become the core producer of saddlery products and is a prominent centre for leather processing.</p>
                <p>The beautiful leather apparels, industrial gloves, stylish belts and bags that adorn the people and add to their personality are actually manufactured in this splendid town. Kanpur has indeed earned the glory of being called as a “LeatherCity”.</p>
            </div>
            <div class="col-xl-2 col-md-3 d-flex">
                <div class="bg-img-dots pos-rt pr-0 ml-4">
                    <img class="img-fluid img-about" src="{{ url('frontend/kscl/assets/img/about-kanpur2.png')}}" alt=" kscl image">
                </div>
            </div>
        </div>
    </div>
<div class="container-fluid pt-5">
        <div class="row fixedrow people-list">
            <div class="col-xl-2 col-md-2">
                <div class="divHeading">
                    <h6 style="margin-bottom: 0px; text-align: left; color: rgb(20, 67, 209); font-family: poppins; font-weight: 600; font-size: 20px;" data-aos="fade-right" data-aos-once="true" data-aos-duration="1500" class="aos-init aos-animate">People
                    </h6>
                    <div class="divHeadingBottomH6 aos-init aos-animate" style="text-align: left;line-height: normal;" data-aos="fade-right" data-aos-once="true" data-aos-duration="1000" data-aos-delay="500">
                        <img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}">
                    </div>
                </div>
                <strong style=" font-family: Poppins; font-size: 20px; font-weight: 500; font-style: normal; letter-spacing: 0.6px;color: rgb(74, 74, 74);">Area-<br> 260.89 Sq <br>Kms </strong>
            </div>
            <div class="col-xl-10 col-md-10">
                <div class="row icon-list" style="
">
                    <div class="col-md-4">
                        <div class="center">
                            <img src="{{ url('frontend/kscl/assets/img/population.svg')}}" alt="icon image" data-aos="zoom-in" data-aos-duration="1500" data-aos-once="true">
                            <h5>2,765,348</h5>
                            <span style="font-family: Poppins;font-size: 18px; font-weight: 300;letter-spacing: 0.5px;color: #4a4a4a;">
                        Population
                    </span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="center">
                            <img src="{{ url('frontend/kscl/assets/img/literacy rate.svg')}}" alt="icon image" data-aos="zoom-in" data-aos-duration="1500" data-aos-once="true">
                            <h5>81.31%</h5>
                            <span style="font-family: Poppins;font-size: 18px; font-weight: 300;letter-spacing: 0.5px;color: #4a4a4a;">
                        Literacy Rate
                    </span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="center">
                            <img src="{{ url('frontend/kscl/assets/img/Male Population.svg')}}" alt="icon image" data-aos="zoom-in" data-aos-duration="1500" data-aos-once="true">
                            <h5>81.31%</h5>
                            <span style="font-family: Poppins;font-size: 18px; font-weight: 300;letter-spacing: 0.5px;color: #4a4a4a;">
                        Male<br> Population
                    </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row fixedrow icon-list">
            <div class="col-md-4 col-lg-3">
                <div class="center">
                    <img src="{{ url('frontend/kscl/assets/img/Average Population Density.svg')}}" alt="icon image" data-aos="zoom-in" data-aos-duration="1500" data-aos-once="true">
                    <h5>105 pph</h5>
                    <span style="font-family: Poppins;font-size: 18px; font-weight: 300;letter-spacing: 0.5px;color: #4a4a4a;">
                        Average <br>Population Density
                    </span>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="center">
                    <img src="{{ url('frontend/kscl/assets/img/Female Population.svg')}}" alt="icon image" data-aos="zoom-in" data-aos-duration="1500" data-aos-once="true">
                    <h5>12,80,633<br>46%</h5>
                    <span style="font-family: Poppins;font-size: 18px; font-weight: 300;letter-spacing: 0.5px;color: #4a4a4a;">
                        Female <br>Population
                    </span>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="center">
                    <img src="{{ url('frontend/kscl/assets/img/youth.svg')}}" alt="youth icon image" data-aos="zoom-in" data-aos-duration="1500" data-aos-once="true">
                    <h5>12,88,615</h5>
                    <span style="font-family: Poppins;font-size: 18px; font-weight: 300;letter-spacing: 0.5px;color: #4a4a4a;">
                        Youth Below<br> 18 Yrs
                    </span>
                </div>
            </div>
        </div>
    </div>
<div class="container-fluid containerpadding">
        <div class="row fixedrow" id="divRowMainFeatures">
            <div class="col-xl-12">
                <div class="divHeading">
                    <h1 class="text-uppercase" style="text-align: left;" data-aos="fade-right" data-aos-once="true" data-aos-duration="1500">history
                    </h1>
                    <div style="text-align: left;" data-aos="fade-right" data-aos-once="true" data-aos-duration="1000" data-aos-delay="500">
                        <img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}">
                    </div>
                </div>
            </div>
            <div class="col-xl-5">
                <p>It is believed that this city was founded by Raja Hindu Singh of the Sankandi state. Kanpur’s original name was Kanhpur. Whether it is suspected to be associated with the King Hindusi of the realty of the origin of the city, or belonging to the heroic Karna of Mahabharata period, it is so certified that in the last phase of the reign of Awadh, this city is situated in old Kanpur, Patkapura, Kuraswam, Juhi and Seemamau villages. </p>
                <p>It was made by meeting. With the neighboring state the rule of this town remained in the hands of the rulers of Kannauj and Kalpi and later the rulers of the Muslim rulers. From 1773 to 1801, Nawab Alamas Ali of Awadh had a decent government here.</p>
            </div>
            <div class="col-xl-5 col-md-9">
                <p>After the Treaty of 1773, the city came under the rule of the British, resulting in an English camp here in 1778 AD. Being located on the banks of the Ganges, there was a facility of traffic and industry. Therefore, the British gave birth to the industry and here the development of the city started. First of all, East India Company started the business of Neel here. After the construction of the Grand Trunk Road in 1832, the town was connected to Allahabad. In 1864 AD, Lucknow, Kalpi etc. were added by roads to the main places. Upper Ganges canal has also been constructed. With this development of traffic, the city’s business re-accelerated.</p>
            </div>
            <div class="col-xl-2 col-md-3 d-flex">
                <div class="bg-img-dots pos-rt pr-0 ml-4">
                    <img class="img-fluid img-about" src="{{ url('frontend/kscl/assets/img/about-kanpur2.png')}}" alt=" kscl image">
                </div>
            </div>
        </div>
    </div>
<div class="container-fluid containerpadding">
        <div class="row fixedrow align-items-center" id="divRowMainFeatures">
            <div class="col-xl-6 p-5 bg-img-dots bg-img-repeat">
                <div class="divHeading">
                    <h6 style="margin-bottom: 0px; text-align: left; color: rgb(20, 67, 209); font-family: poppins; font-weight: 600; font-size: 20px;" data-aos="fade-right" data-aos-once="true" data-aos-duration="1500">Mobility
                    </h6>
                    <div class="divHeadingBottomH6" style="text-align: left;line-height: normal;" data-aos="fade-right" data-aos-once="true" data-aos-duration="1000" data-aos-delay="500">
                        <img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}">
                    </div>
                </div>
                <div class="row align-items-end my-5">
                    <div class="col-md-auto col-12" style="width: 100%;max-width: 200px;">
                        <strong style=" font-family: Poppins; font-size: 20px; font-weight: 500; font-style: normal; letter-spacing: 0.6px;color: rgb(74, 74, 74);">Total Road <br>Length </strong>
                    </div>
                    <div class="col-md col-12 d-flex divHeadingBottomH6 align-items-end">
                        <img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}">
                        <span style="font-family: Poppins; font-size: 26px;font-weight: bold;font-style: normal;font-stretch: normal; line-height: 13px;letter-spacing: 0.7px;color: #1342d0; padding-left: 5px;">350 Kms</span>
                    </div>
                </div>
                <div class="row align-items-end">
                    <div class="col-md-auto col-12" style="width: 100%;max-width: 200px;">
                        <strong style=" font-family: Poppins; font-size: 20px; font-weight: 500; font-style: normal; letter-spacing: 0.6px;color: rgb(74, 74, 74);">Junctions to be improved with ITMS & SCSS</strong>
                    </div>
                    <div class="col-md col-12 d-flex divHeadingBottomH6 align-items-end">
                        <img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}">
                        <span style="font-family: Poppins; font-size: 26px;font-weight: bold;font-style: normal;font-stretch: normal; line-height: 13px;letter-spacing: 0.7px;color: #1342d0; padding-left: 5px;">122</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 text-center">
                <img class="img-fluid" src="{{ url('frontend/kscl/assets/img/map.png')}}" alt="Map Image" data-aos="fade-right" data-aos-once="true" data-aos-duration="1000" data-aos-delay="500">
            </div>
        </div>
    </div>
<div class="container-fluid containerpadding" style="background-image: url(assets/img/bgpattern-repeat.png')}});">
        <div class="row fixedrow mb-4 align-items-center" id="divRowMainFeatures">
            <div class="col-xl-3">
                <div class="divHeading">
                    <h1 class="text-uppercase" style="text-align: left;" data-aos="fade-right" data-aos-once="true" data-aos-duration="1500">How to<br> Reach
                    </h1>
                    <div style="text-align: left;" data-aos="fade-right" data-aos-once="true" data-aos-duration="1000" data-aos-delay="500">
                        <img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}">
                    </div>
                </div>
            </div>
            <div class="col-xl-9">
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <div id="divHowToReachCarousel" style="padding: 0px 40px;">
                            <div class="divNewSnapShots1">
                                <div class="slicknews">
                                    <div>
                                        <div class="divCaptionBoxImage" style="min-height:100%;padding:20px;max-height:350px;background-image: url(assets/img/Oval.svg')}}); background-repeat:no-repeat; background-position:center;background-size:contain;" data-aos="fade-up" data-aos-delay="250" data-aos-once="true" data-aos-duration="1000">
                                            <img src="{{ url('frontend/kscl/assets/img/plane.png')}}" class="img-fluid" alt="plane image">
                                            <h2 class="text-white">Plane</h2>
                                        </div>
                                        <div class="divDescription d-inline-block w-100 text-center pt-4">
                                            <p>Kanpur is well connected to other major cities of the country via regular flights. <br>Airport(s): Kanpur Airport (KNU)</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="divCaptionBoxImage" style="min-height:100%;padding:20px;max-height:350px;background-image: url(assets/img/Oval.svg')}}); background-repeat:no-repeat; background-position:center;background-size:contain;" data-aos="fade-up" data-aos-delay="250" data-aos-once="true" data-aos-duration="1000">
                                            <img src="{{ url('frontend/kscl/assets/img/plane.png')}}" class="img-fluid" alt="plane image">
                                            <h2 class="text-white">Plane</h2>
                                        </div>
                                        <div class="divDescription d-inline-block w-100 text-center pt-4">
                                            <p>Kanpur is well connected to other major cities of the country via regular flights. <br>Airport(s): Kanpur Airport (KNU)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="divPrevNext" style=" position: absolute;  top: 50%; left: 0; padding: 0; width: 100%;  transform: translateY(-50%);"><img src="{{ url('frontend/kscl/assets/img/lefticon.png')}}" class="previous previousnews"><img src="{{ url('frontend/kscl/assets/img/righticon.png')}}" class="next nextnews"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="container-fluid">
        <div class="row fixedrow" id="divTouristPlaceCarousel">
            <div class="col mb-5">
                <div class="divHeading divNewSnapShots text-center">
                    <h1 style="padding-bottom: 0px;" data-aos="zoom-in" data-aos-duration="1500" data-aos-once="true">TOURIST PLACES</h1>
                    <div class="UnderlineHeadingH1">
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
                                    <div class="divCaptionBoxImage" style="background-image: url(&quot;../frontend/kscl/assets/img/bithoor.jpg&quot;);background-repeat: no-repeat;background-size: cover;" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"></div>
                                    <div class="divCaptionBox">
                                        <h6>Bithoor</h6>
                                        <div class="divHeadingBottomH6"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}"></div>
                                        <div class="divDescription">
                                            <p>Bithoor or Bithur is a town in Kanpur District, 23.4 kilometres (14.5 mi) by road north of the centre of Kanpur city, in Uttar Pradesh, India...</p>
                                        </div>
                                        <div class="divReadMore"><a href="#">Read More</a></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-4">
                                    <div class="divCaptionBoxImage" style="background-image: url(&quot;../frontend/kscl/assets/img/green-park.jpg&quot;);background-repeat: no-repeat;background-size: cover;" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"></div>
                                    <div class="divCaptionBox">
                                        <h6>Green<br>Park</h6>
                                        <div class="divHeadingBottomH6"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}"></div>
                                        <div class="divDescription">
                                            <p>This is the best and most famous playground of Kanpur. International Cricket matches are held here and it has one of the best pitches in the world....</p>
                                        </div>
                                        <div class="divReadMore"><a href="#">Read More</a></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-4">
                                    <div class="divCaptionBoxImage" style="background-image: url(&quot;../frontend/kscl/assets/img/jagannath-mandir.png&quot;);background-repeat: no-repeat;background-size: cover;" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000" data-aos-once="true"></div>
                                    <div class="divCaptionBox">
                                        <h6>Jagannath Mandir<br>Benhta</h6>
                                        <div class="divHeadingBottomH6"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}"></div>
                                        <div class="divDescription">
                                            <p>This temple is located in the village of Benhta, three kilometers from the headquarters of the Bhiatargaon Block of Kanpur district....</p>
                                        </div>
                                        <div class="divReadMore"><a href="#">Read More</a></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-4">
                                    <div class="divCaptionBoxImage" style="background-image: url(&quot;../frontend/kscl/assets/img/kanpur-church.png&quot;);background-repeat: no-repeat;background-size: cover;" data-aos="fade-up" data-aos-delay="250" data-aos-once="true" data-aos-duration="1000"></div>
                                    <div class="divCaptionBox">
                                        <h6>Kanpur Memorial<br> Church</h6>
                                        <div class="divHeadingBottomH6"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}"></div>
                                        <div class="divDescription">
                                            <p>Kanpur Memorial Church, popularly known as All Soul’s Cathedral is an impressive architectural edifice that was constructed in 1875 to commemorate the courage....</p>
                                        </div>
                                        <div class="divReadMore"><a href="#">Read More</a></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-4">
                                    <div class="divCaptionBoxImage" style="background-image: url(&quot;../frontend/kscl/assets/img/green-park.jpg&quot;);background-repeat: no-repeat;background-size: cover;" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"></div>
                                    <div class="divCaptionBox">
                                        <h6>Green<br>Park</h6>
                                        <div class="divHeadingBottomH6"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}"></div>
                                        <div class="divDescription">
                                            <p>This is the best and most famous playground of Kanpur. International Cricket matches are held here and it has one of the best pitches in the world....</p>
                                        </div>
                                        <div class="divReadMore"><a href="#">Read More</a></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-4">
                                    <div class="divCaptionBoxImage" style="background-image: url(&quot;../frontend/kscl/assets/img/jagannath-mandir.png&quot;);background-repeat: no-repeat;background-size: cover;" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000" data-aos-once="true"></div>
                                    <div class="divCaptionBox">
                                        <h6>Jagannath Mandir<br>Benhta</h6>
                                        <div class="divHeadingBottomH6"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}"></div>
                                        <div class="divDescription">
                                            <p>This temple is located in the village of Benhta, three kilometers from the headquarters of the Bhiatargaon Block of Kanpur district....</p>
                                        </div>
                                        <div class="divReadMore"><a href="#">Read More</a></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-4">
                                    <div class="divCaptionBoxImage" style="background-image: url(&quot;../frontend/kscl/assets/img/kanpur-church.png')}}&quot;);background-repeat: no-repeat;background-size: cover;" data-aos="fade-up" data-aos-delay="250" data-aos-once="true" data-aos-duration="1000"></div>
                                    <div class="divCaptionBox">
                                        <h6>Kanpur Memorial<br> Church</h6>
                                        <div class="divHeadingBottomH6"><img src="{{ url('frontend/kscl/assets/img/headingbottom.jpg')}}"></div>
                                        <div class="divDescription">
                                            <p>Kanpur Memorial Church, popularly known as All Soul’s Cathedral is an impressive architectural edifice that was constructed in 1875 to commemorate the courage....</p>
                                        </div>
                                        <div class="divReadMore"><a href="#">Read More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="divPrevNext" style=" position: absolute;  top: 50%; left: 0; padding: 0; width: 100%;  transform: translateY(-50%);"><img src="{{ url('frontend/kscl/assets/img/lefticon.png')}}" class="previous previouspcp"><img src="{{ url('frontend/kscl/assets/img/righticon.png')}}" class="next nextpcp"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
</div>
<div id="content_1" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" id="mtitle" style="text-transform:capitalize;">About Us Page Content</h4>
      </div>
      <form action="{{ url('updateAboutusContent/1/content_1') }}" method="POST" class="content_1">
        {{ csrf_field() }}  
        <textarea style="margin: 0px; height: 96px;" id="content" name="content" class="validate ckeditor" placeholder="Page Content"><?php echo $data['results']->content_1; ?></textarea>
        <div class="modal-body" id="elistdata"> </div>
        <div class="modal-footer">
          <button style="float: none;" form-id="content_1" type="button" class="btn btn-default add_content" data-dismiss="modal">Update</button>
          &nbsp; <a class="waves-effect waves-light btn btn_default red" data-dismiss="modal">Close</a></div>
        </form>
      </div>
    </div>
  </div>


  <div id="content_2" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="mtitle" style="text-transform:capitalize;">About Us Page Content</h4>
        </div>
        <form action="{{ url('updateAboutusContent/1/content_2') }}" method="POST" class="content_2">
          {{ csrf_field() }}
          <textarea style="margin: 0px; height: 96px;" id="content" name="content" class="validate ckeditor" placeholder="Page Content"><?php echo $data['results']->content_2; ?></textarea>
          <div class="modal-body" id="elistdata"> </div>
          <div class="modal-footer">
            <button style="float: none;" form-id="content_2" type="button" class="btn btn-default add_content" data-dismiss="modal">Update</button>
            &nbsp; <a class="waves-effect waves-light btn btn_default red" data-dismiss="modal">Close</a></div>
          </form>
        </div>
      </div>
    </div>

      <div id="content_3" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="mtitle" style="text-transform:capitalize;">About Us Page Content</h4>
        </div>
        <form action="{{ url('updateAboutusContent/1/content_3') }}" method="POST" class="content_3">
          {{ csrf_field() }}
          <textarea style="margin: 0px; height: 96px;" id="content" name="content" class="validate ckeditor" placeholder="Page Content"><?php echo $data['results']->content_3; ?></textarea>
          <div class="modal-body" id="elistdata"> </div>
          <div class="modal-footer">
            <button style="float: none;" form-id="content_3" type="button" class="btn btn-default add_content" data-dismiss="modal">Update</button>
            &nbsp; <a class="waves-effect waves-light btn btn_default red" data-dismiss="modal">Close</a></div>
          </form>
        </div>
      </div>
    </div>

      <div id="content_4" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="mtitle" style="text-transform:capitalize;">About Us Page Content</h4>
        </div>
        <form action="{{ url('updateAboutusContent/1/content_4') }}" method="POST" class="content_4">
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




    <script>
      $(".choose-photo").on("click",function(){
        var form_id = $(this).closest('form')[0];
        form_id = form_id.id;
     // alert('Form Id:'+form_id);
     $('#'+form_id+' .input-file').click();
   });
      
      $(".input-file").on("change",function(event){   
        var input_file_value  = $(this).val();    
       /* var reg=/(.jpg')}}|.jpeg|.gif|.png')}})$/;        
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

       var url = "<?php echo url('aboutUsContentImageUpdate/?id=1'); ?>";

       var imageUrl = "<?php echo url('uploads/aboutusPageContent'); ?>";
       
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


