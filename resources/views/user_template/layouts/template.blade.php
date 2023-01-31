<!DOCTYPE html>
<html lang="en">


<head>
	<!-- Meta Data -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
        @yield('title')
    </title>


	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('user/media/favicon2.png')}}" >

	<!-- Dependency Styles -->
	<link rel="stylesheet" href="{{asset('user/dependencies/bootstrap/css/bootstrap.min.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('user/dependencies/fontawesome/css/all.min.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('user/dependencies/select2/css/select2.min.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('user/dependencies/flaticon/flaticon.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('user/dependencies/wow/css/animate.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('user/dependencies/page-piling/css/jquery.pagepiling.min.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('user/dependencies/nivo-slider/css/nivo-slider.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('user/dependencies/meanmenu/css/meanmenu.min.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('user/dependencies/magnific-popup/css/magnific-popup.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('user/dependencies/owl.carousel/css/owl.carousel.min.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('user/dependencies/owl.carousel/css/owl.theme.default.min.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('user/dependencies/slick/css/slick.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('user/dependencies/slick/css/slick-theme.css')}}" type="text/css">

	<!-- Site Stylesheet -->
	<link rel="stylesheet" href="{{asset('user/assets/css/app.css')}}" type="text/css">
	<!-- Animation Stylesheet -->
    {{-- <link rel="stylesheet" href="{{asset('user/assets/css/main.css')}}"> --}}

	<link rel="stylesheet" href="{{asset('user/dependencies/animation-css/animation-css.css')}}" type="text/css">

	<!-- Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">



</head>

<body>



	<div id="wrapper" class="wrapper">
		<a href="#main_content" data-type="section-switch" class="return-to-top">
			<i class="fas fa-angle-double-up"></i>
		</a>

		<div id="main_content"></div>

			<!--=====================================-->
			<!--=            Navbar Start           =-->
			<!--=====================================-->
			<header class="sticky-on">
				<div id="sticky-placeholder"></div>
				<div id="navbar-wrap" class="navbar-wrap">
					<div class="navbar-layout1">
						<div class="container">
							<div class="row no-gutters d-flex align-items-center position-relative">
								<div class="col-lg-2 d-flex justify-content-start">
									<div class="temp-logo text-center">
										<a href="{{route('home')}}" class="default-logo">
						<img src="{{asset('user/media/logo_atlas6.png')}}" alt="logo" class="img-fluid" style="padding: 2px; margin-top: -25px;">
					</a>
										<a href="{{route('home')}}" class="sticky-logo">
						<img src="{{asset('user/media/logo_atlas66.png')}}" alt="logo" class="img-fluid" style="padding: 0px; margin-top: -15px; ">
					</a>
									</div>
								</div>
								<div class="col-lg-8 d-flex justify-content-end possition-static">
									<nav id="dropdown" class="template-main-menu">
										<ul>
											<li class="position-static d-none d-lg-block">
												<a href="{{route('home')}}">Accueil </a>

											</li>

											<li>
												<a href="{{ route('services') }}">Nos Services</a>
												{{-- <ul class="dropdown-menu-col-1">
													<li><a href="service-layout2.html"><span>Services -02</span></a></li>
													<li><a href="service-details.html"><span>Services Details</span></a></li>
												</ul> --}}
											</li>
											<li>
												<a href="{{ route('portfolio') }}">Portfolio</a>

											</li>

											<li>
												<a href="{{route('pageblog')}}">Blog</a>

											</li>
											<li class="mr-5">
												<a href="{{ route('contact') }}"><span>Contacter</span></a>
											</li>

                                            @if(session()->has('userblog'))
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                 {{ Session::get('userblog')->name }} <span class="caret"></span>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                  <a class="dropdown-item" href="#">Profile</a>
                                                  <a class="dropdown-item" href="{{ route('deconnexion') }}">Logout</a>
                                                </div>
                                            </li>
                                            @else


                                                <li class="header-action-items single-item ">
                                                    <a href="{{route('connexion')}}" class="item-btn btn-ghost btn-light" style="padding: 11px;"><span>Connexion</span></a>
                                                </li>


                                            @endif

										</ul>
									</nav>
								</div>
								<div class="col-lg-2 d-flex justify-content-end">
									<ul class="header-action-items">

										<li class="single-item">
											<button type="button" class="offcanvas-menu-btn menu-status-open">
		                    <span class="menu-btn-icon">
		                        <span></span>
		                        <span></span>
		                        <span></span>
		                    </span>
		                </button>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>


				</div>
			</header>
			<!--=====================================-->
			<!--=              Navbar End           =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=         Main Banner Start         =-->
			<!--=====================================-->

			@yield('content')

			<!--=====================================-->
			<!--=      Brand Section Area End       =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=     Footer Section Area Start     =-->
			<!--=====================================-->
			<footer id="footer-wrap-layout1" class="footer-wrap-layout1 bg-color-light">
				<div class="footer-top-layout1 bg-no-repeat bg-size-cover bg-position-center" data-bg-image="{{asset('user/media/element/element3.png')}}">
					<div class="container">
						<div class="row">

                            <div class="col-xl-3 d-none d-xl-block">
								<div class="footer-widgets">
									<h5 class="footer-widget-heading"> <img src="{{asset('user/media/logo_atlas66.png')}}" alt="logo" ></h5>
									<ul class="footer-menu ">
                                        <p class="about-paragraph">Grursus mal suada faci Lorem to the ipsum dolarorit more ametion more consectetur elit.</p>
										<li></li>

									</ul>
								</div>
							</div>
							<div class="col-xl-3 d-none d-xl-block">
								<div class="footer-widgets">
									<h5 class="footer-widget-heading">Flux de travail</h5>
									<ul class="footer-menu ">
										<li><a href="#">Gestion</a></li>
										<li><a href="#">Rapports</a></li>
										<li><a href="#">Soutien</a></li>
										<li><a href="#">Communauté</a></li>
										<li><a href="#">Les clients</a></li>
									</ul>
								</div>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-6 col-12">
								<div class="footer-widgets">
									<h5 class="footer-widget-heading">Lien important</h5>
									<ul class="footer-menu">
										<li><a href="about.html">À propos de nous</a></li>
										<li><a href="#">Comment travailler</a></li>
										<li><a href="{{ route('contact') }}">Nous contacter</a></li>
										<li><a href="#">Nos médias</a></li>
										<li><a href="#">Confidentialité</a></li>
									</ul>
								</div>
							</div>

							<div class="col-xl-3 col-lg-3 col-md-6 col-12">
								<div class="footer-widgets">
									<h5 class="footer-widget-heading">Informations </h5>
									<p>Grursus mal suada faci lisis Lorem to ipsum consectetur.</p>
									<ul class="footer-contact">
										<li><i class="flaticon-placeholder"></i>Immeuble 113, Route de l'oasis, Casablanca, Morocco</li>
										<li><i class="flaticon-plane"></i>atlasconsulting@gmail.com</li>
										<li><i class="flaticon-telephone"></i>+212 603762941</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-bottom-layout1 bg-color-accent">
					<div class="container">
						<div class="copy-right-wrap">
							<p class="copy-right-text">© 2023 <a href="https://www.radiustheme.com/" rel="nofollow" target="_blank">Atlas Consulting.</a> Tous les droits sont réservés</p>
						</div>
					</div>
				</div>
			</footer>
			<!--=====================================-->
			<!--=      Footer Section Area End      =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=       Template Search Start       =-->
			<!--=====================================-->
			<div id="template-search" class="template-search">
				<button type="button" class="close">×</button>
				<form class="search-form">
					<input type="search" value="" placeholder="Type here........" />
					<button type="submit" class="search-btn">
			<i class="flaticon-search"></i>
		</button>
				</form>
			</div>
			<!--=====================================-->
			<!--=        Template Search End        =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=         Offcanvas Start           =-->
			<!--=====================================-->
		@yield('sub-menu')


			<!--=====================================-->
			<!--=           Offcanvas End           =-->
			<!--=====================================-->

		</div>
	</div>

       <!--build:js-->
       <script src="{{asset('user/assets/js/vendors/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('user/assets/js/vendors/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('user/assets/js/vendors/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('user/assets/js/vendors/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('user/assets/js/vendors/parallax.min.js')}}"></script>
    <script src="{{asset('user/assets/js/vendors/aos.js')}}"></script>
    <script src="{{asset('user/assets/js/app.js')}}"></script>
    <!--endbuild-->

	<!-- Dependency Scripts -->
	<script src="{{asset('user/dependencies/popper.js/popper.min.js')}}"></script>
	<script src="{{asset('user/dependencies/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('user/dependencies/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('user/dependencies/jquery.appear/jquery.appear.js')}}"></script>
	<script src="{{asset('user/dependencies/jquery.parallax-scroll/jquery.parallax-scroll.js')}}"></script>
	<script src="{{asset('user/dependencies/gmap3/js/gmap3.min.js')}}"></script>
	<script src="{{asset('user/dependencies/owl.carousel/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('user/dependencies/slick/js/slick.min.js')}}"></script>
	<script src="{{asset('user/dependencies/counter-up/jquery.counterup.min.js')}}"></script>
	<script src="{{asset('user/dependencies/waypoints/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('user/dependencies/select2/js/select2.min.js')}}"></script>
	<script src="{{asset('user/dependencies/isotope-layout/isotope.pkgd.min.js')}}"></script>
	<script src="{{asset('user/dependencies/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
	<script src="{{asset('user/dependencies/meanmenu/js/jquery.meanmenu.min.js')}}"></script>
	<script src="{{asset('user/dependencies/Parallaxie-master/parallaxie.js')}}"></script>
	<script src="{{asset('user/dependencies/nivo-slider/js/jquery.nivo.slider.js')}}"></script>
	<script src="{{asset('user/dependencies/nivo-slider/js/home.js')}}"></script>
	<script src="{{asset('user/dependencies/wow/js/wow.min.js')}}"></script>
	<script src="{{asset('user/dependencies/knob/jquery.knob.js')}}"></script>
	<script src="{{asset('user/dependencies/countdown/jquery.countdown.min.js')}}"></script>
	<script src="{{asset('user/dependencies/page-piling/js/jquery.pagepiling.min.js')}}"></script>
	<script src="{{asset('user/dependencies/tilt/tilt.jquery.min.js')}}"></script>
	<script src="{{asset('user/dependencies/theia-sticky-sidebar/theia-sticky-sidebar.min.js')}}"></script>
	<script src="{{asset('user/dependencies/theia-sticky-sidebar/resize-sensor.min.js')}}"></script>
	<script src="{{asset('user/dependencies/magnific-popup/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('user/dependencies/validator/validator.min.js')}}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB13ZAvCezMx5TETYIiGlzVIq65Mc2FG5g"></script>

	<!-- Site Scripts -->
	<script src="{{asset('user/assets/js/app.js')}}"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/digeco/digeco/{{route('home')}} by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Dec 2022 12:42:48 GMT -->
</html>
