<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Khadi Website </title>
	<!-- Bootstrap core CSS -->
	<link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	 <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" />
	<!-- Custom styles -->
	<link rel="stylesheet" href="{{asset('css/frontend_style.css')}}">
	<link rel='stylesheet' href="{{asset('css/responsive.css')}}">

	<link rel='stylesheet' href="{{asset('css/slick.css')}}">

	<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,500i,600,800" rel="stylesheet">

	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
	  integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	@yield('stylesheet')
</head>


<!-- ============================  Navigation Start =========================== -->
 @include('frontend.inc.header')
<!-- ============================  Navigation End ============================ -->



<!-- page content -->
  @yield('content')
<!-- /page content -->

<!-- Footer-->
@include('frontend.inc.footer')
<!-- Footer -->