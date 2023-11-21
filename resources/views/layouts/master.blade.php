<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,
initial-scale=1, shrink-to-fit=no">
<title>Portal News</title>
<link href="{{asset('template/css/media_query.css')}}"
rel="stylesheet" type="text/css"/>
<link href="{{asset('template/css/bootstrap.css')}}"
rel="stylesheet" type="text/css"/>
<link
href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font
-awesome.min.css" rel="stylesheet"
integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEev
oEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="{{asset('template/css/animate.css')}}"
rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/css?family=Poppins"
rel="stylesheet">
<link href="{{asset('template/css/owl.carousel.css')}}"
rel="stylesheet" type="text/css"/>
<link href="{{asset('template/css/owl.theme.default.css')}}"
rel="stylesheet" type="text/css"/>
<!-- Bootstrap CSS -->
<link href="{{asset('template/css/style_1.css')}}"
rel="stylesheet" type="text/css"/>
<!-- Modernizr JS -->
<script
src="{{asset('template/js/modernizr-3.5.0.min.js')}}"></script>
</head>
<body>
{{-- Header --}}
<div class="container-fluid bg-faded fh5co_padd_mediya
padding_786">
<div class="container padding_786">
<nav class="navbar navbar-toggleable-md navbar-light ">
<button class="navbar-toggler navbar-toggler-right
mt-3" type="button" data-toggle="collapse"
data-target="#navbarSupportedContent"
aria-controls="navbarSupportedContent" aria-expanded="false"
aria-label="Toggle navigation"><span
class="fa fa-bars"></span></button>
<a class="navbar-brand" href="#"><img
src="images/logo.png" alt="img" class="mobile_logo_width"/></a>
<div class="collapse navbar-collapse"
id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
<li class="nav-item ">
<a class="nav-link" href="/">Home <span
class="sr-only">(current)</span></a>
</li>
<li class="nav-item ">
<a class="nav-link" href="/about">About
<span class="sr-only">(current)</span></a>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle"
href="#" id="dropdownMenuButton2" data-toggle="dropdown"
aria-haspopup="true"
aria-expanded="false">Kategori <span
class="sr-only">(current)</span></a>
<div class="dropdown-menu"
aria-labelledby="dropdownMenuLink_1">
<a class="dropdown-item"
href="#">Tampil Kategori</a>
<a class="dropdown-item"
href="#">Tambah Kategori</a>
</div>
</li>
</ul>
</div>
</nav>
</div>
</div>
{{-- End Header --}}
{{-- Content --}}
<div class="container-fluid pb-4 pt-4 paddding">
@yield('content')
</div>
{{-- End Content --}}
{{-- Footer --}}
<div class="container-fluid fh5co_footer_right_reserved">
<div class="container">
<div class="row ">
<div class="col-12 col-md-6 py-4 Reserved"> ©
Copyright 2018, All rights reserved. Design by <a
href="https://freehtml5.co" title="Free HTML5 Bootstrap
templates">FreeHTML5.co</a>. </div>
</div>
</div>
</div>
{{-- End Footer --}}
<div class="gototop js-top">
<a href="#" class="js-gotop"><i class="fa
fa-arrow-up"></i></a>
</div>
<script
src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.m
in.js"></script>
<script
src="{{asset('template/js/owl.carousel.min.js')}}"></script>
<script
src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tethe
r.min.js"
integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKk
Dx6Qin1DkWx51bBrb"
crossorigin="anonymous"></script>
<script
src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/b
ootstrap.min.js"
integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVk
E+jo0ieGizqPLForn"
crossorigin="anonymous"></script>
<script
src="{{asset('template/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('template/js/main.js')}}"></script>
</body>
</html>