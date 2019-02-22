@extends('frontend.inc.head')
@section('content')

@include('frontend.inc.slider')

@include('frontend.inc.eligibilityBox')


  <!-- Page Content section start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="card h-100 ">
          <div class=" card-body card-body-block">
            <img src="image/no-of-visit.svg" class="card-img-left">
            <h3 class="card-head">विज़िटर्स की संख्या</h3>
            <h1 class="card-title-main">{{ Counter::showAndCount('homePage') }}</h1>
            
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <div class="card-body card-body-block">
            <img src="image/top-schemes.svg" class="card-img-left">
            <h3 class="card-head">शीर्ष योजनाएं</h3>
            <h1 class="card-title-main">मुख्यमंत्री ग्रामोद्योग रोजगार योजना</h1>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <div class="card-body card-body-block">
            <img src="image/enquires.svg" class="card-img-left">
            <h3 class="card-head">पूछताछ की संख्या</h3>
            <h1 class="card-title-main"><?php echo count($noOfQueries);  ?></h1>
            @if(isset($noOfQueries))

            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page Content section End -->

  <!-- Introduction section Start -->
  <section class="background-light">
    <div class="container">
      <h2 class="text-center tittle-heading" id="know_us"><u>संक्षिप्त परिचय</u></h2>
      <h3 class="text-center tittle-heading-hindi">खादी विकास योजना</h3>
      <p class="text-center mt-4"><strong>"खादी"</strong> का अर्थ है कपास, रेशम या ऊन के हाथ कते सूत अथवा इनमें से दो या सभी प्रकार के
        सूतों
        के मिश्रण से भारत में हथकरघे पर बुना गया कोई भी वस्त्र। </p>
      <p class="text-center mt-4 my-4"><strong>"ग्रामोद्योग"</strong> का अर्थ है, ऐसा कोई भी उद्योग जो ग्रामीण क्षेत्रों में स्थित हो
        तथा जो
        विद्युत के उपयोग या बिना उपयोग के कोई माल तैयार करता हो या कोई सेवा प्रदान करता हो तथा जिसमें स्थायी पूँजी
        निवेश (संयंत्र तथा मशीनरी एवं भूमि भवन में) प्रति कारीगर या कर्मी पचास हजार रूपये से अधिक न हो। इस हेतु
        परिभाषित "ग्रामीण क्षेत्र में" समस्त राजस्व ग्राम तथा 20 हजार तक की आवादी वाले कस्बे सम्मिलित है। </p>
    </div>
  </section>
  <section class="background-image-block">
    <div class="container background-padding" id="scheme_list">
      <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100 card-shadow">
            <a href="#"><img class="card-img-top" src="image/intro1.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title text-center"> <a href="#">खादी एवं ग्रामोद्योगी योजनाएं</a></h4>
              <p class="card-text">ग्रामोद्योग" का अर्थ है, ऐसा कोई भी उद्योग जो ग्रामीण क्षेत्रों में स्थित हो तथा जो
                विद्युत के उपयोग या बिना उपयोग के कोई माल…</p>
            </div>
            <span class="btn btn-rounded btn-primary btn-readmore" title="Read More">
              आगे बढ़ें ...
            </span>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100 card-shadow">
            <a href="#"><img class="card-img-top" src="image/intro2.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title text-center">
                <a href="#">मुख्यमंत्री ग्रामोद्योग रोजगार योजना</a>
              </h4>
              <p class="card-text">ग्रामोद्योग" का अर्थ है, ऐसा कोई भी उद्योग जो ग्रामीण क्षेत्रों में स्थित हो तथा जो
                विद्युत के उपयोग या बिना उपयोग के कोई माल…</p>
            </div>
            <span class="btn btn-rounded btn-primary btn-readmore" title="Read More">
              आगे बढ़ें ...
            </span>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100 card-shadow">
            <a href="#"><img class="card-img-top" src="image/intro3.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title text-center">
                <a href="#">प्रधानमंत्री रोजगार सृजन कार्यक्रम</a>
              </h4>
              <p class="card-text">ग्रामोद्योग" का अर्थ है, ऐसा कोई भी उद्योग जो ग्रामीण क्षेत्रों में स्थित हो तथा जो
                विद्युत के उपयोग या बिना उपयोग के कोई माल…</p>
            </div>
            <span class="btn btn-rounded btn-primary btn-readmore" title="Read More">
              आगे बढ़ें ...
            </span>
          </div>
        </div>

           <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100 card-shadow">
            <a href="#"><img class="card-img-top" src="image/intro3.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title text-center">
                <a href="#">पं0 दीनदयाल ग्रामोद्योग रोजगार योजना</a>
              </h4>
              <p class="card-text">ग्रामोद्योग" का अर्थ है, ऐसा कोई भी उद्योग जो ग्रामीण क्षेत्रों में स्थित हो तथा जो
                विद्युत के उपयोग या बिना उपयोग के कोई माल…</p>
            </div>
            <span class="btn btn-rounded btn-primary btn-readmore" title="Read More">
              आगे बढ़ें ...
            </span>
          </div>
        </div>

           <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100 card-shadow">
            <a href="#"><img class="card-img-top" src="image/intro3.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title text-center">
                <a href="#">मॉडल परियोजनाएं</a>
              </h4>
              <p class="card-text">ग्रामोद्योग" का अर्थ है, ऐसा कोई भी उद्योग जो ग्रामीण क्षेत्रों में स्थित हो तथा जो
                विद्युत के उपयोग या बिना उपयोग के कोई माल…</p>
            </div>
            <span class="btn btn-rounded btn-primary btn-readmore" title="Read More">
              आगे बढ़ें ...
            </span>
          </div>
        </div>

           <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100 card-shadow">
            <a href="#"><img class="card-img-top" src="image/intro3.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title text-center">
                <a href="#"> प्रशिक्षण योजना</a>
              </h4>
              <p class="card-text">ग्रामोद्योग" का अर्थ है, ऐसा कोई भी उद्योग जो ग्रामीण क्षेत्रों में स्थित हो तथा जो
                विद्युत के उपयोग या बिना उपयोग के कोई माल…</p>
            </div>
            <span class="btn btn-rounded btn-primary btn-readmore" title="Read More">
              आगे बढ़ें ...
            </span>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- Introduction section End -->

  <!-- Faq section start-->
  <section class="mt-5 mb-5" id="faq">
    <div class="container">
      <h2 class="text-center tittle-heading">सामान्य प्रश्न </h2>
      <div class="card card-faq" >
        <div class="row">
          <div class="col-md-3">
            <div class="tab h-100">
              <!--This block will generate dynamic categories of FAQ -->
              @if(isset($faq))
                @foreach($category_list as $category)
                <button class="tablinks" onclick="openCity(event, '<?php echo $category->id; ?>')" id="defaultOpen">{{$category->category}}</button>
                @endforeach
              @endif
              <!-- -->
            </div>
          </div>

          <div class="col-md-9  h-100">
            <div class="faq-blocks">
              <!--This block will first generate a div with category id and then will display all FAQ related to linked categories, the if condition will only display FAQ matching to particular category  -->
              @foreach($category_list as $category2)
                 <div id="{{$category2->id}}" class="tabcontent">
                    @if(isset($faq))
                      @foreach($faq as $faq1)
                        @if($faq1->category_id==$category2->id)
                          <h4><?php echo nl2br($faq1->faq_question); ?></h4>
                          <p><?php echo nl2br($faq1->faq_answer); ?></p>
                        @endif
                      @endforeach
                    @endif
                  </div>
              @endforeach

            </div>
          </div>
        </div> <!--  row ends here -->
      </div>
    </div>
  </section>
  <!-- feedback section -->


<form action="{{url('feedback')}}" method="POST">
{{csrf_field()}}
  <section class="bg-query-form" id="feedback">
    <div class="container">
      <h2 class="text-center tittle-heading query-head mt-5, my-5 ">प्रश्न / प्रतिक्रिया फ़ॉर्म<!--  Feedback/Query form --></h2>
      
      @if(session()->has('message'))
      <div class="alert alert-success">
        {{ session()->get('message') }}
      </div>
      @endif
      <p>
        यदि आपके पास उत्तर प्रदेश खादी और ग्रामोद्योग बोर्ड के लिए कोई प्रश्न / प्रतिक्रिया है, तो आप निम्नलिखित जनमत फ़ॉर्म का उपयोग कर सकते हैं। हम आपकी प्रतिक्रिया को उचित सरकारी एजेंसियों के ध्यान में लाने में मदद करेंगे।
       <!-- If you have any query / feedback for Uttar Pradesh Khadi & Village Industries Board and
        need assistance then please fill below form and we will assist you further. --></p>
      <div class="row">
        <div class="col-md-5 mt-3, my-3 query-block-left">
          <!--<form name="sentMessage" novalidate> -->
            <div class="control-group form-group">
              <div class="controls">
                <label>Full Name</label>
                <input type="text" class="form-control no-border-input" required data-validation-required-message="Please enter your name." name="name">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Mobile Number</label>
                <input type="text" class="form-control no-border-input" required data-validation-required-message="Please enter your phone number." name="mobile_no">
              </div>
            </div>
         <!-- </form>  -->
        </div>
        <div class="col-md-5 mt-3, my-3 query-block-right">
         <!-- <form name="sentMessage" no validate> -->
            <div class="control-group form-group">
              <div class="controls">
                <label>Email Address</label>
                <input type="email" class="form-control no-border-input" required data-validation-required-message="Please enter your email id." name="email_id">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Query/Feedback type</label>
                @if(isset($faq))
                <select class="form-control no-border-input" name="query_type">
                  @foreach($query_type as $query)
                    <option value="{{$query->id}}">{{$query->query_type}}</option>
                  @endforeach
                </select>
                @endif
                <!--
                <input type="text" class="form-control no-border-input" required data-validation-required-message="Please enter your phone number." name="query_type">
                -->
              </div>
            </div>
          <!--</form> -->
        </div>

        <div class="col-md-12">
          <div class="control-group form-group">
            <div class="controls">
              <label>Message:</label>
              <textarea rows="3" cols="50" class="form-control no-border-input" required
                data-validation-required-message="Please enter your message" maxlength="999" name="message"></textarea>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <button type="submit" class="btn btn-primary submit-btn">सबमिट करें</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</form>
@stop
