@extends('frontend.inc.head')
@section('content') 

<!-- Navbar End-->
<div class="container-fluid">
<div class="innerpage-header text-center">
<div class="container">
<h1>About Us</h1>

<h3><a href="#">Home</a> &gt; About Us</h3>
</div>
</div>
</div>

<div class="container margin-top-45 margin-bottom-45">
<div class="col-md-6">
<h1 class="text-30"><!-- Pesticide Applicators Professional Association (PAPA) --><?php echo $result->content_1; ?></h1>

<!-- <p class="margin-top-25">PAPA is a non-profit, public benefit corporation which is dedicated to providing Continuing Education for the implementation of safe and effective pest control techniques throughout California.</p>

<p>Decisions within PAPA are made by a Board of Directors, and Directors stand for election every three years. The Board is responsible to all members of PAPA. The day-to-day activities of PAPA are administered by an Executive Director selected by the Board of Directors.</p> -->
<?php echo $result->content_2; ?>
</div>

<div class="col-md-6"><img class="img-responsive" src="{{ url('uploads/aboutusPageContent/'.$result->image) }}" /></div>
</div>

<div class="container-fluid padding-top-30 padding-bottom-30" style="background-color: #f4f4f4;">
<div class="container">
<div class="row">
<div class="col-md-6">
<!-- <h1 class="text-30">PAPA&rsquo;s Primary Functions</h1>

<ul class="list-leaf-style">
	<li>To sponsor statewide educational programs in cooperation with the University of California, municipal agencies, and industry training in safety, rules, and regulations, current technology, and field-tested research for pest management professionals.</li>
	<li>To provide the means for the recording and yearly accounting of Continuing Education hours.</li>
	<li>To publish a quarterly newsletter to inform members of association activities and pest management issues affecting the industry.</li>
	<li>To represent the concerns of members to industry and federal, state, and local agencies.</li>
	<li>To maintain media contacts throughout the state to keep the public aware of the concern of all pest management professionals for environmental safety.</li>
</ul> -->
<?php echo $result->content_3; ?>
</div>

<div class="col-md-6">
<!-- <h1 class="text-30">Member Benefits</h1>

<ul class="list-leaf-style">
	<li>Tracking of your continuing education (CE) hours to make it simple for you to submit your renewal with DPR.</li>
	<li>An official report of your CE hours automatically mailed to you in the fall of your renewal year.</li>
	<li>Quarterly editions of our newsletter, Applicators News, packed with the latest industry issues, information, seminars, reports, rules, and regulations.</li>
	<li>Discounts on our statewide seminars with training in every area of interest and importance to the professional pesticide applicator.</li>
</ul> -->
<?php echo $result->content_4; ?>
</div>
</div>
</div>
</div>


@stop 