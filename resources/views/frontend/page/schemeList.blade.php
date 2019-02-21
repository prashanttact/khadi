@extends('frontend.inc.head')
@section('content') 

   <!-- Scheme section start-->

  <section class="mt-5 mb-5">
    <div class="container">
      <h3 class=" text-left"> List of Scheme you are eligible</h3>
      <div class="card card-scheme-container">
        <div class="row">
          <div class="col-md-3">
            <div class="tab schme-tab h-100">
            	<!--
              <button class="tablinks" onclick="openCity(event, 'Scheme')" id="defaultOpen">Khadi Development Scheme</button>
              <button class="tablinks" onclick="openCity(event, 'village')">Village Industries Scheme</button>
              <button class="tablinks" onclick="openCity(event, 'Tender')">CM Village Industries Employment Schemes</button>
              <button class="tablinks" onclick="openCity(event, 'Business')">PM's Employment Generation Program</button>
              <button class="tablinks" onclick="openCity(event, 'Others')">P. Deendayal Graamodyog Rojagaar Yojana</button>
				-->
			@if(isset($scheme_list))
				@foreach($scheme_list as $scheme)
				
				<button class="tablinks" onclick="openCity(event, '{{$scheme->id}}')" id="defaultOpen">{{$scheme->scheme_name_en}}</button>
				@endforeach
			@endif
            </div>
          </div>


          <div class="col-md-9  h-100">
            <div class="faq-blocks-scheme">

            	@if(isset($scheme_list))
            		@foreach($scheme_list as $scheme)

            		<div id="{{$scheme->id}}" class="tabcontent">
                <div class="card card-scheme">
                  <div class="row">
                    <div class="col-md-8">
                      <h3> {{$scheme->scheme_name_en}}</h3>
                      <span> Your Score : 100%</span>
                    </div>
                    <div class="col-md-4 text-center">
                      <button type="submit" class="btn btn-primary submit-btn ">Eligible </button>
                    </div>
                  </div>
                </div>
                <div class="card card-scheme mt-4">
                  <div class="row">
                    <div class="col-md-12 ">
                      <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                            aria-controls="nav-home" aria-selected="true">{{$scheme->scheme_name_en}}</a>
                          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                            aria-controls="nav-profile" aria-selected="false">Eligibility criteria</a>
                        </div>
                      </nav>
                      <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                          <p>{{$scheme->shceme_description_en}}</p>
                          <p>
                            "Village Industry" means any such industry situated in rural area which manufacture goods
                            without use of power or provide services and permanent capital investment (Plant and
                            Machinery and Land, Building) is not more than Rs.50000 per artisan. In this definition of
                            “Village area”, all revenue village and towns of more than 20,000 populations is included.
                          </p>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                          Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim
                          occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit
                          dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse
                          consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod
                          tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non
                          adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis
                          occaecat ex.
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                          Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim
                          occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit
                          dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse
                          consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod
                          tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non
                          adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis
                          occaecat ex.
                        </div>
                        <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                          Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim
                          occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit
                          dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse
                          consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod
                          tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non
                          adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis
                          occaecat ex.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>  

            		@endforeach
            	@endif
            <!--
              <div id="Scheme" class="tabcontent">
                <div class="card card-scheme">
                  <div class="row">
                    <div class="col-md-8">
                      <h3> Khadi Development Scheme</h3>
                      <span> Status : 100%</span>
                    </div>
                    <div class="col-md-4 text-center">
                      <button type="submit" class="btn btn-primary submit-btn ">Eligible </button>
                    </div>
                  </div>
                </div>
                <div class="card card-scheme mt-4">
                  <div class="row">
                    <div class="col-md-12 ">
                      <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                            aria-controls="nav-home" aria-selected="true">Khadi Vikash Yojna</a>
                          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                            aria-controls="nav-profile" aria-selected="false">Eligibility criteria</a>
                        </div>
                      </nav>
                      <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                          <p> "Khadi" means handspun natural fiber cloth of cotton, silk or wool or mix of any two yarn
                            on handloom in India. </p>
                          <p>
                            "Village Industry" means any such industry situated in rural area which manufacture goods
                            without use of power or provide services and permanent capital investment (Plant and
                            Machinery and Land, Building) is not more than Rs.50000 per artisan. In this definition of
                            “Village area”, all revenue village and towns of more than 20,000 populations is included.
                          </p>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                          Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim
                          occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit
                          dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse
                          consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod
                          tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non
                          adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis
                          occaecat ex.
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                          Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim
                          occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit
                          dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse
                          consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod
                          tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non
                          adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis
                          occaecat ex.
                        </div>
                        <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                          Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim
                          occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit
                          dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse
                          consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod
                          tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non
                          adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis
                          occaecat ex.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>  -->             
      <!-- second scheme-->
      <!--
              <div id="village" class="tabcontent">                  
                      <div class="card card-scheme">
                        <div class="row">
                          <div class="col-md-8">
                            <h3> Khadi Development Scheme</h3>
                            <span> Status : 100%</span>
                          </div>
                          <div class="col-md-4 text-center">
                            <button type="submit" class="btn btn-primary submit-btn ">Eligible12 </button>
                          </div>
                        </div>
                      </div>
                      <div class="card card-scheme mt-4">
                        <div class="row">
                          <div class="col-md-12 ">
                            <nav>
                              <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                                  aria-controls="nav-home" aria-selected="true">Khadi Vikash Yojna</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                                  aria-controls="nav-profile" aria-selected="false">Eligibility criteria</a>
                              </div>
                            </nav>
                            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <p> "Khadi" means handspun natural fiber cloth of cotton, silk or wool or mix of any two yarn
                                  on handloom in India. </p>
                                <p>
                                  "Village Industry" means any such industry situated in rural area which manufacture goods
                                  without use of power or provide services and permanent capital investment (Plant and
                                  Machinery and Land, Building) is not more than Rs.50000 per artisan. In this definition of
                                  “Village area”, all revenue village and towns of more than 20,000 populations is included.
                                </p>
                              </div>
                              <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim
                                occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit
                                dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse
                                consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod
                                tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non
                                adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis
                                occaecat ex.
                              </div>
                              <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim
                                occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit
                                dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse
                                consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod
                                tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non
                                adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis
                                occaecat ex.
                              </div>
                              <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim
                                occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit
                                dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse
                                consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod
                                tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non
                                adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis
                                occaecat ex.
                              </div>
                            </div>
                          </div>
                        </div>
                      </div> -->
              </div>
              <div id="Tender" class="tabcontent">
                <h3>Tender</h3>
                <p> Following are eligible for assistance provided by Khadi and Village Industry.
                  Registered village industry cooperative societies.
                  Registered NGO Individual entrepreneur and educated non-employed youth, women, SC/ST members and
                  traditional artisan.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Scheme section End -->

@endsection