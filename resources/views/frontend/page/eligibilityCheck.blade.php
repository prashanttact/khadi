@extends('frontend.inc.head')
@section('content')

@section('stylesheet')
<link rel='stylesheet' href='css/tagsinput.css'>
<link rel='stylesheet' href='css/age.css'>

@endsection
  <!-- Registtration page  section -->
<form action="{{url('checkUserEligibility')}}" method="POST">
{{csrf_field()}}
  <section class="bg-query-form  bg-white mt-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3 registtration-login">
          <img src="image/loginlogo.png" class="login-bg" alt="Khadi Logo">
          <hr class="border-bottom">
          <p class="login-text text-center"> here is no one who loves pain itself, who seeks after it and wants to have
            it, simply because</p>
        </div>
        <div class="col-md-9">
          <div class="registration-block">
            <h3> Scheme Eligibility </h3>
            {{str_plural('legal_status')}}
            <div class="registration-card card">
              <h4 class="head-details"> Personal information</h4>
              <div class="col-md-12">
                <div class="control-group form-group">
                  <div class="controls">
                    <label>Full Name</label>
                    <input name="name" type="text" class="form-control no-border-input" required data-validation-required-message="Full Name">
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                     <!--  <select class="form-control no-border-input">
                        <option class="hidden" selected="" disabled="">Age</option>
                        <option>What is your Birthdate?</option>
                        <option>What is Your old Phone Number</option>
                        <option>What is your Pet Name?</option>
                      </select> -->
                     {{--  <input type="number" name="age" min=18 max=200 class="form-control no-border-input mt-4" placeholder=" Age" required> --}}
                     <div class="quantity buttons_added">
                     
                     <div class="folat-right">
                      <label class="align-middle mt-2">Age</label>
                      <input type="button" value="-" class="minus" style="background:color:red">
                       <input type="number" step="1" min="18" max="200" name="age" value="18" title="Qty" class="input-text qty text" size="6" pattern="" inputmode="" name="age">
                       <input type="button" value="+" class="plus">
                     </div>
                     </div>
                    </div>
                    <div class="form-group">
                      <select name="district" class="form-control no-border-input" required>
                        <option value="" class="hidden" selected="" disabled="">District</option>
                        <option>Lucknow</option>
                        <option>Kanpur</option>
                        <option>Banaras</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <select placeholder="Caste" name="caste" class="form-control no-border-input" required>
                        <option value="" class="hidden" selected="" disabled="">Applicant belongs to ?</option>
                        @if(isset($caste))
                          @foreach($caste as $caste)
                            <option value="{{$caste->value}}">{{$caste->name}}</option>
                          @endforeach
                        @endif
                      </select>
                    </div>

                     <div class="form-group">
                      <select name="edu_qualification" class="form-control no-border-input" required>
                        <option value="" class="hidden" selected="" disabled="">Educational Qualification</option>
                         @if(isset($edu_qualification))
                          @foreach($edu_qualification as $row)
                            <option value="{{$row->value}}">{{$row->name}}</option>
                          @endforeach
                        @endif
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-4"> <label>Gender</label>
                        </div>
                        <div class="col-md-8">
                          <div class="maxl">
                            <label class="radio inline">
                              <input type="radio" name="gender" value="male"  required>
                              <span> Male </span>
                            </label>
                            <label class="radio inline">
                              <input type="radio" name="gender" value="female">
                              <span>Female </span>
                            </label>
                          </div>
                        </div>
                      </div>
                      <hr>
                    </div>
                    <div class="form-group">
                      <select name="area" class="form-control no-border-input" required>
                        <option value="" class="hidden" selected="" disabled="">Area</option>
                        @if(isset($area))
                          @foreach($area as $row)
                          @if($row->display==1)
                            <option value="{{$row->value}}">
                              {{$row->area_type}}
                            </option>
                          @endif
                          @endforeach
                        @endif
                      </select>
                    </div>
                    <div class="form-group">
                      <select name="legal_status" class="form-control no-border-input" required>
                        <option value="" class="hidden" selected="" disabled="">Legal Status</option>
                         @if(isset($legal_status))
                          @foreach($legal_status as $row)
                            <option value="{{$row->value}}">{{$row->name}}</option>
                          @endforeach
                        @endif
                      </select>
                    </div>
                     <div class="form-group">
                      <select name="annual_income" class="form-control no-border-input" required>
                        <option value="" class="hidden" selected="" disabled="">Annual Income</option>
                         @if(isset($annual_income))
                          @foreach($annual_income as $row)
                            <option value="{{$row->value}}">{{$row->name}}</option>
                          @endforeach
                        @endif
                      </select>
                    </div>
                  </div>

                 

                </div>
              </div>
              <!--<div class="col-md-12">
                <div class="card bg-gray">
                  <div class="col-md-6">
                    <h3 class="head-middle">Education Qualification</h3>
                  </div>
                  <hr>
                  <div class="tags-input-block">
                    {{-- <input name="qualification" type="text" class="no-border-input" data-role="tagsinput" value="Intermediate (12th),Metriculation(10th)" required> --}}
                      @if(isset($edu_qualification))
                          @foreach($edu_qualification as $row)
                            <label><input  type="checkbox" name="edu_qualification[]" value="{{$row->value}}" >&nbsp;{{$row->name}}</label>&nbsp;&nbsp;
                          @endforeach
                      @endif
                    
                  </div> -->
                  

                     

                <!--</div> -->
              <!--</div>-->
            </div>
          </div>
          <!-- personal information details -->
          <div class="personal-block">
            <div class="personal-card card">
              <h4 class="head-details"> Personal information</h4>
              <div class="col-md-12">
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"> <label>Your employment Reg status</label>
                    </div>
                    <div class="col-md-3">
                      <div class="maxl">
                        <label class="radio inline">
                          <input type="radio" name="employment_registration" value="1"  required>
                          <span> yes </span>
                        </label>
                        <label class="radio inline">
                          <input type="radio" name="employment_registration"  value="0">
                          <span>No </span>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-3"> <label>Do you have adhar card?</label>
                    </div>
                    <div class="col-md-3">
                      <div class="maxl">
                        <label class="radio inline">
                          <input type="radio" name="adhaar" value="yes"  required>
                          <span> yes </span>
                        </label>
                        <label class="radio inline">
                          <input type="radio" name="adhaar" value="no" >
                          <span>No </span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"> <label>Any Gov Training Certification ?</label>
                    </div>
                    <div class="col-md-3">
                      <div class="maxl">
                        <label class="radio inline">
                          <input type="radio" name="govTraining_cer" value="yes"  required id="govT_yes">
                          <span> yes </span>
                        </label>
                        <label class="radio inline">
                          <input type="radio" name="govTraining_cer" value="no" id="govT_no">
                          <span> No </span>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <select name="govTrainig_type" class="form-control no-border-input" required id="govT_select">
                          <option value="" class="hidden" selected="" disabled="">Gov Training Type</option>
                          @if(isset($govTraining))
                            @foreach($govTraining as $training)
                            @if($training->display==1)
                              <option value="{{$training->value}}">
                                {{$training->name}}
                              </option>
                            @endif
                            @endforeach
                          @endif
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"> <label>Any Private Training Certification ?</label>
                    </div>
                    <div class="col-md-3">
                      <div class="maxl">
                        <label class="radio inline">
                          <input type="radio" name="pvtTraining_cer" value="yes"  required>
                          <span> yes </span>
                        </label>
                        <label class="radio inline">
                          <input type="radio" name="pvtTraining_cer" value="no">
                          <span> No </span>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <select name="pvtTrainig_type" class="form-control no-border-input" required id="pvtT_select">
                          <option value="" class="hidden" selected="" disabled="">Private Training Type</option>
                            @if(isset($pvtTraining))
                            @foreach($pvtTraining as $pvtTraining)
                              @if($pvtTraining->display==1)
                              <option value="{{$pvtTraining->value}}">{{$pvtTraining->name}}</option>
                              @endif
                            @endforeach
                            @endif
                          
                        </select>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="form-group">
                  <div class="row"> 
                  <div class="col-md-6">
                    <div class="form-group">
                      <select name="industry" class="form-control no-border-input" required>
                        <option value="" class="hidden" selected="" disabled="">Industry</option>
                         @if(isset($industry))
                          @foreach($industry as $row)
                            <option value="{{$row->value}}">{{$row->name}}</option>
                          @endforeach
                        @endif
                        
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                        <select name="loan_requirement" class="form-control no-border-input" required>
                          <option value="" class="hidden" selected="" disabled="">Loan/Fund Requirement</option>
                           @if(isset($loanLimit))
                          @foreach($loanLimit as $row)
                            <option value="{{$row->value}}">{{$row->name}}</option>
                          @endforeach
                        @endif
                          
                        </select>
                      </div>
                    </div>
                </div>
              </div>
              </div> 
            </div>
            <div class="control-group form-group mt-5">
                <div class="controls">
                  <button type="submit" class="btn btn-primary submit-btn" id="checkBtn">Check Now </button>
                </div>
              </div>
          </div>
        </div>
      </div>
  </section>

</form>


@section('script')
<script src="js/tagsinput.js"></script>
<script src="js/age.js"></script>

<script type="text/javascript">
  $('input[type=radio][name=govTraining_cer]').change(function() {
    if (this.value == 'yes') {
        //alert("Allot Thai Gayo Bhai");
        $('#govT_select').removeAttr('disabled');
    }
    else if (this.value == 'no') {
        //alert("Transfer Thai Gayo");
        $('#govT_select').prop('disabled', 'disabled');
    }
  });

    //=================================================================================
    $('input[type=radio][name=pvtTraining_cer]').change(function() {
    if (this.value == 'yes') {
        //alert("Allot Thai Gayo Bhai");
        $('#pvtT_select').removeAttr('disabled');
    }
    else if (this.value == 'no') {
        //alert("Transfer Thai Gayo");
        $('#pvtT_select').prop('disabled', 'disabled');
    }
});


    // $('#checkBtn').click(function() {
    //   checked = $("input[type=checkbox]:checked").length;

    //   if(!checked) {
    //     alert("Please select your Education Qualification");
    //     return false;
    //   }

    // });
</script>
@endsection


@endsection