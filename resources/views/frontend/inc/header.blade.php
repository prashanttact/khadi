<body>
  <!-- top Header-->
  <section class="bg-top">
    <div class="container">
      <div class="row">
        <div class="col-md-5 p-2 date-time" id="time2">

          <span>{{ \Carbon\Carbon::parse(now())->format('l, jS F Y, h:i A')}} {{-- Wednesday, 30 Jan, 2019 05:45:05 PM --}} </span>
        </div>
        <div class="col-md-6 top-navigation">
          <ul>
            <li><a href="javascript:void(0)"> मुख्य सामग्री पर जाएं  | </a> </li>
            <li><a href="javascript:void(0)">स्क्रीन रीडर |  </a></li>
            <li><a href="javascript:void(0)">साइटमैप |  </a> </li>
            <li><a href="javascript:void(0)">A- A A+ </a> </li>
          </ul>
        </div>
        <div class="col-md-1 no-padding language-b">
          <div class="dropdown">
            <button type="button" class="btn dropdown-toggle lang-btn" data-toggle="dropdown">
              हिंदी 
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">English</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Navigation start -->
  <nav class="navbar navbar-expand-lg navbar-dark header-bg ">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{url('/homePage')}}"> <img src="{{asset('image/khadi-logo.svg')}}" alt="Khadi Logo">
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse main-nav" id="navbarResponsive">
        <ul class="navbar-nav ml-left">
          <li class="nav-item">
            <a class="nav-link" href="{{url('homePage')}}">मुख्य पृष्ठ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('homePage/#know_us')}}">हमारे बारे में</a>
          </li>
         {{--   <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              योजनायें
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="{{url('pageUnderConstruction')}}">खादी एवं ग्रामोद्योगी योजनाएं</a>
              <a class="dropdown-item" href="{{url('pageUnderConstruction')}}">मुख्यमंत्री ग्रामोद्योग रोजगार योजना</a>
              <a class="dropdown-item" href="{{url('pageUnderConstruction')}}">प्रधानमंत्री रोजगार सृजन कार्यक्रम</a>
              <a class="dropdown-item" href="{{url('pageUnderConstruction')}}">पं0 दीनदयाल ग्रामोद्योग रोजगार योजना</a>
              <a class="dropdown-item" href="{{url('pageUnderConstruction')}}">मॉडल परियोजनाएं</a>
              <a class="dropdown-item" href="{{url('pageUnderConstruction')}}">प्रशिक्षण योजना</a>
            </div>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" href="{{url('homePage/#scheme_list')}}">योजनायें</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('eligibilityCheck')}}">क्या मैं पात्र हूँ ?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('homePage/#faq')}}"> सामान्य प्रश्न</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="{{url('homePage/#feedback')}}"> प्रतिक्रिया/सवाल</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="{{url('homePage/#contact')}}"> संपर्क करें</a>
          </li>
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
             
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="blog-home-1.html">Blog Home 1</a>
              <a class="dropdown-item" href="blog-home-2.html">Blog Home 2</a>
              <a class="dropdown-item" href="blog-post.html">Blog Post</a>
            </div>
          </li> -->
      </div>
    </div>
  </nav>
  <!-- Navigation End -->


@section('script')

@endsection

