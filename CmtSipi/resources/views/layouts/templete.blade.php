<!DOCTYPE html>
<html lang="en">
  <head>
    @yield('title')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- @yield('icon') --}}
    <link rel="icon" type="icon" href="{{asset('images/images.jfif')}}">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset("css/open-iconic-bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/animate.css")}}">

    <link rel="stylesheet" href="{{asset("css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/owl.theme.default.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/magnific-popup.css")}}">

    <link rel="stylesheet" href="{{asset("css/aos.css")}}">

    <link rel="stylesheet" href="{{asset("css/ionicons.min.css")}}">

    <link rel="stylesheet" href="{{asset("css/flaticon.css")}}">
    <link rel="stylesheet" href="{{asset("css/icomoon.css")}}">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
  </head>
  <body>
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center px-4">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
          <a href="{{url('/')}}"><img id="navbar-icon" src="{{asset('images/logo.png')}}" alt="Navbar Icon" height="55px" width="55px"></a>

	      {{-- <form action="#" class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
          </div>
        </form> --}}
	      <div class="collapse navbar-collapse d-flex justify-content-end" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item"><a href="{{url('/')}}" class="nav-link pl-0">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Deparments</a></li>
	        	<li class="nav-item"><a href="{{url('/about')}}" class="nav-link">About</a></li>
	        	{{-- <li class="nav-item"><a href="courses.html" class="nav-link">Courses</a></li> --}}
	        	{{-- <li class="nav-item"><a href="teacher.html" class="nav-link">Staff</a></li> --}}
	            <li class="nav-item"><a href="{{url('cont')}}" class="nav-link">Contact</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    @yield('content')

<!-- footer-->
    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-6 col-lg-3">
              <div class="ftco-footer-widget mb-5">
                  <h2 class="ftco-heading-2">Our Address</h2>
                  <div class="block-23 mb-3">
                    <ul>
                      <li><span class="icon icon-map-marker"></span><span class="text">16/C-D,Bashbari Road, Mohammadpur, Dhaka-1207</span></li>
                      <li><a href="#"><span class="icon icon-phone"></span><span class="text">+8801712634870</span></a></li>
                      <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@sipi.edu.bd</span></a></li>
                    </ul>
                  </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="ftco-footer-widget mb-5 ml-md-4">
                <h2 class="ftco-heading-2">Links</h2>
                <ul class="list-unstyled">
                  <li><a href="{{url('/')}}"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                  <li><a href="{{url('/about')}}"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                  <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
                  <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Deparments</a></li>
                  <li><a href="{{url('/cont')}}"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="ftco-footer-widget mb-5">
                  <h2 class="ftco-heading-2">Subscribe Us!</h2>
                <form action="#" class="subscribe-form">
                  <div class="form-group">
                    <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                    <input type="submit" value="Subscribe" class="form-control submit px-3">
                  </div>
                </form>
              </div>

              </div>
              <div class="col-md-6 col-lg-3">
                  <div class="ftco-footer-widget mb-5">
                  <h2 class="ftco-heading-2">Social Media With Us</h2>
                  <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                  </ul>
              </div>
          </div>
      </footer>




  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset("js/jquery.min.js")}}"></script>
  <script src="{{asset("js/jquery-migrate-3.0.1.min.js")}}"></script>
  <script src="{{asset("js/popper.min.js")}}"></script>
  <script src="{{asset("js/bootstrap.min.js")}}"></script>
  <script src="{{asset("js/jquery.easing.1.3.js")}}"></script>
  <script src="{{asset("js/jquery.waypoints.min.js")}}"></script>
  <script src="{{asset("js/jquery.stellar.min.js")}}"></script>
  <script src="{{asset("js/owl.carousel.min.js")}}"></script>
  <script src="{{asset("js/jquery.magnific-popup.min.js")}}"></script>
  <script src="{{asset("js/aos.js")}}"></script>
  <script src="{{asset("js/jquery.animateNumber.min.js")}}"></script>
  <script src="{{asset("js/scrollax.min.js")}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset("js/google-map.js")}}"></script>
  <script src="{{asset("js/main.js")}}"></script>

  </body>
</html>
