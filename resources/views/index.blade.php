<!DOCTYPE html>
<html lang="en">
<head>
<title> E-Home</title>
	<meta charset="UTF-8">
	<meta name="description" content="LERAMIZ Landing Page Template">
	<meta name="keywords" content="LERAMIZ, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="img/icon.ico" rel="shortcut icon"/>
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/animate.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/style.css')}}"/>
	



</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 header-top-left">
						<div class="top-info">
							<i class="fa fa-phone"></i>
							01797283528
						</div>
						<div class="top-info">
							<i class="fa fa-envelope"></i>
							karimehsan3@gmail.com
						</div>
					</div>
					<div class="col-lg-6 text-lg-right header-top-right">
						<div class="top-social">
							<a href=""><i class="fa fa-facebook"></i></a>
							<a href=""><i class="fa fa-twitter"></i></a>
							<a href=""><i class="fa fa-instagram"></i></a>
							<a href=""><i class="fa fa-pinterest"></i></a>
							<a href=""><i class="fa fa-linkedin"></i></a>
						</div>
						<div class="user-panel">
							<a href="#" id="registerbutton"><i class="fa fa-user-circle-o"></i> Register</a>
							<a href="#" id="logbutton"><i class="fa fa-sign-in"></i> Login</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="site-navbar">
						<a href="#" class="site-logo"><img style="margin-top: -75px;" src="img/Logoo.png" alt=""></a>
						<div class="nav-switch">
							<i class="fa fa-bars"></i>
						</div>
						<ul class="main-menu">
							<li><a href="{{route('index')}}">Home</a></li>
							<li><a href="{{route('postpage')}}">Properties</a></li>
							<li><a href="{{route('contact')}}">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="img/bg.jpg">
		<div class="container hero-text text-white">
			<h2>find your place with our local life style</h2>
			<p>Search real estate property records, houses, condos, land and more on rentalland.com®.<br>Find property info from the most comprehensive source data.</p>
			<a href="{{route('postpage')}}" class="site-btn">VIEW DETAIL</a>
		</div>
	</section>
	<!-- Hero section end -->

	<!-- Filter form section -->
	<div class="filter-search">
		<div class="container">
			<form class="filter-form" action="{{route('search_property')}}" method="post">
			@csrf
				<input style="width:29%;" type="text" name="rent" placeholder="Amount range e.g 15,000">
				<input style="width:29%;" type="text" name="c_name" placeholder="City">
				<select name="state">
				<option value="">-</option>
					<option value="SYLHET">Sylhet</option>
					<option value="DHAKA">Dhaka</option>
					<option value="CHOTTOGRAM">Chottogram</option>
					<option value="BARISHAL">Barishal</option>
				</select>
				<button type="submit" class="site-btn fs-submit">SEARCH</button>
			</form>
		</div>
	</div>
	<!-- Filter form section end -->
		
	<!-- feature category section -->
	<section class="feature-category-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>LOOKING PROPERTY</h3>
				<p>What kind of property are you looking for? We will help you</p>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6 f-cata">
					<img src="img/feature-cate/1.jpg" alt="">
					<h5>Apartment for rent</h5>
				</div>
				<div class="col-lg-3 col-md-6 f-cata">
					<img src="img/feature-cate/2.jpg" alt="">
					<h5>Family Home</h5>
				</div>
				<div class="col-lg-3 col-md-6 f-cata">
					<img src="img/feature-cate/3.jpg" alt="">
					<h5>Resort Villas</h5>
				</div>
				<div class="col-lg-3 col-md-6 f-cata">
					<img src="img/feature-cate/4.jpg" alt="">
					<h5>Office Building</h5>
				</div>
			</div>
		</div>
	</section>
	<!-- feature category section end-->

	<!-- Services section -->
	<section class="services-section spad set-bg" data-setbg="img/service-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<img src="img/service.jpg" alt="">
				</div>
				<div class="col-lg-5 offset-lg-1 pl-lg-0">
					<div class="section-title text-white">
						<h3>OUR SERVICES</h3>
						<p>We provide the perfect service for </p>
					</div>
					<div class="services">
						<div class="service-item">
							<i class="fa fa-comments"></i>
							<div class="service-text">
								<h5>Consultant Service</h5>
								<p>We also provide consulting service to get you a nice home</p>
							</div>
						</div>
						<div class="service-item">
							<i class="fa fa-home"></i>
							<div class="service-text">
								<h5>Properties Management</h5>
								<p>We also manage your properties</p>
							</div>
						</div>
						<div class="service-item">
							<i class="fa fa-briefcase"></i>
							<div class="service-text">
								<h5>Renting and Selling</h5>
								<p>You can depend on us to sell and rent your property</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Services section end -->

	<!-- Gallery section -->
	<section class="gallery-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>Popular Places</h3>
				<p>We understand the value and importance of place</p>
			</div>
			<div class="gallery">
				<div class="grid-sizer"></div>
				<a href="#" class="gallery-item grid-long set-bg" data-setbg="img/gallery/1.jpg">
					<div class="gi-info">
						<h3></h3>
						<h3>Dhaka</h3>
						<p>Capital of Bangladesh</p>
					</div>
				</a>
				<a href="#" class="gallery-item grid-wide set-bg" data-setbg="img/gallery/2.jpg">
					<div class="gi-info">
						<h3>Sylhet</h3>
						<p>Pious City</p>
					</div>
				</a>
				<a href="#" class="gallery-item set-bg" data-setbg="img/gallery/3.jpg">
					<div class="gi-info">
						<h3>Chottogram</h3>
						<p>City of Sea Port</p>
					</div>
				</a>
				<a href="#" class="gallery-item set-bg" data-setbg="img/gallery/4.jpg">
					<div class="gi-info">
						<h3>Barishal</h3>
						<p>Finest City of Bangladesh</p>
					</div>
				</a>
			</div>
		</div>
	</section>
	<!-- Gallery section end -->





	<!-- Footer section -->
	<footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 footer-widget">
					<img src="img/Logoo.png" alt="">
					<p>A complete organisation for rental management. We will do our level best to satisfy you. </p>
					<div class="social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 footer-widget">
					<div class="contact-widget">
						<h5 class="fw-title">CONTACT US</h5>
						<p><i class="fa fa-map-marker"></i>26D Chandantula, Amberkhana, Sylhet </p>
						<p><i class="fa fa-phone"></i>01797283528</p>
						<p><i class="fa fa-envelope"></i>www.rentallands.com</p>
						<p><i class="fa fa-clock-o"></i>Mon - Sat, 08 AM - 09 PM</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 footer-widget">
					<div class="double-menu-widget">
						<h5 class="fw-title">POPULAR PLACES</h5>
						<ul>
							<li><a href="">GULSHAN</a></li>
							<li><a href="">BARIDHARA</a></li>
							<li><a href="">UPOSHOHOR</a></li>
							<li><a href="">HOUSING STATES</a></li>
							<li><a href="">UTTARA</a></li>
						</ul>
						<ul>
							<li><a href="">DHAKA</a></li>
							<li><a href="">SYLHET</a></li>
							<li><a href="">BARISHAL</a></li>
							<li><a href="">CHOTTOGRAM</a></li>
							<li><a href="">NARAYANGANJ</a></li>
						</ul>
					</div>
				</div>
				
			</div>
			<div class="footer-bottom">
				<div class="footer-nav">
					<ul>
							<li><a href="{{route('index')}}">Home</a></li>
							<li><a href="{{route('postpage')}}">Properties</a></li>
							<li><a href="{{route('contact')}}">Contact</a></li>
					</ul>
				</div>
				<span style="color:white">Developer : SYED EHSANUL KARIM</span>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->






<!-- Modal for Button-->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog form-dark" role="document">
    <!--Content-->
    <div class="modal-content card card-image" style="background-image: url('img/modelimg.jpg');">
      <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
        <!--Header-->
        <div class="modal-header text-center pb-4">
          <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel"><strong>SIGN</strong> <a
              class="green-text font-weight-bold"><strong> UP</strong></a></h3>
          <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!--Body-->
        <div class="modal-body">
          <!--Body-->
        
          <!--Grid row-->
          <div class="row d-flex align-items-center mb-4">
            <!--Grid column-->
            <div class="text-center mb-3 col-md-12">
              <a href="{{route('signupadvisor')}} "><button type="button" class="btn btn-success btn-block btn-rounded z-depth-1">Property Advisor</button></a>
            </div>
            <!--Grid column-->
          </div>
		  <!--Grid row-->
		    <!--Grid row-->
			<div class="row d-flex align-items-center mb-4">
            <!--Grid column-->
            <div class="text-center mb-3 col-md-12">
              <a href="{{route('signuptenet')}} "><button type="button" class="btn btn-success btn-block btn-rounded z-depth-1">Tenant</button></a>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-md-12">
              <p  class="font-small white-text d-flex justify-content-end">Have an account? <a href="#" id="loginform" class="green-text ml-1 font-weight-bold">
                  Log in</a></p>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->

        </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Modal for Button -->
<!-- Modal Login -->	
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog form-dark" role="document">
	<!--Content-->
	@if(Session::has('msg'))
			<span style="background-color:black; padding:10px; color:white; font-weight:bold; border-radius=10px;">{{Session('msg')}}</span>
	@endif
    <div class="modal-content card card-image" style="background-image: url('img/modelimg.jpg');">
      <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
        <!--Header-->
        <div class="modal-header text-center pb-4">
          <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel"><strong>SIGN</strong> <a
              class="green-text font-weight-bold"><strong> In</strong></a></h3>
          <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!--Body-->
        <div class="modal-body">
          <!--Body-->
		  <form action="{{route('login')}}" method="post" autocomplete="off">
		  @csrf
		@if ($errors->any())
			<div class="alert alert-danger alert-dismissable">
				<a class="panel-close close" data-dismiss="alert">×</a>
				@foreach ($errors->all() as $error)
					<div class="glyphicon glyphicon-warning-sign">&nbsp</div><b>{{ $error }}</b>
					<br />
				@endforeach
			</div>
		@endif
          <div class="md-form mb-5">
            <input type="email" name="email" id="Form-email5" class="form-control validate white-text">
            <label data-error="wrong" data-success="right" for="Form-email5">Your email</label>
          </div>
          <div class="md-form pb-3">
            <input type="password" name="pass"  id="Form-pass5" class="form-control validate white-text">
            <label data-error="wrong" data-success="right" for="Form-pass5">Your password</label>
          </div>
          <!--Grid row-->
          <div class="row d-flex align-items-center mb-4">
            <!--Grid column-->
            <div class="text-center mb-3 col-md-12">
              <button type="submit" class="btn btn-success btn-block btn-rounded z-depth-1">Sign in</button>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
		  </form>
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-md-12">
              <p  class="font-small white-text d-flex justify-content-end">Create Account? <a href="#" id="createsignup" class="green-text ml-1 font-weight-bold">
                  Signup</a></p>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Modal for signin-->

                    
	<!--====== Javascripts & Jquery ======-->
	<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('js/masonry.pkgd.min.js')}}"></script>
	<script src="{{asset('js/magnific-popup.min.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>
	<!-- smodel script -->
	<script> 
		$('#registerbutton').on('click', function() {
    //  alert("hello"); 
     $('#register').modal('show');  
 });
 $('#logbutton').on('click', function() {
    //  alert("hello"); 
     $('#login').modal('show');  
 });
 $('#createsignup').on('click', function() {
	//  alert("hello"); 
	$('#login').modal('hide');
     $('#register').modal('show');  
 });
 $('#loginform').on('click', function() {
	//  alert("hello"); 
	$('#register').modal('hide');
     $('#login').modal('show');  
 });
	</script>
	@if(Session::has('msg'))
		 <script>
		 $('#login').modal('show');  
		 </script>
	@endif
	
	
</body>
</html>