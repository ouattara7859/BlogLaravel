@extends('user_template.layouts.template')
@section('title')
    Portfolio
@endsection
@section('content')

	<!-- Dependency Styles -->
	<link rel="stylesheet" href="{{asset('user/dependencies/bootstrap/css/bootstrap.min.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('user/dependencies/select2/css/select2.min.css')}}" type="text/css">

	<!-- Site Stylesheet -->
	<link rel="stylesheet" href="{{asset('user/assets/css/app.css')}}" type="text/css">
	<!-- Animation Stylesheet -->
	<link rel="stylesheet" href="{{asset('user/dependencies/animation-css/animation-css.css')}}" type="text/css">



			<!--=====================================-->
			<!--=              Navbar End           =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=          Main Banner Start        =-->
			<!--=====================================-->

<style>
    .page-banner{
       padding: 1px 0 100px;
    }
</style>


			<section id="page-banner" class="page-banner bg-gradient-layout6 has-animation">
				<ul class="shape-holder">
					<li>
						<div class="translate-top-50 opacity-animation transition-200 transition-delay-10">
							<svg width="827px" height="827px">
					<defs>
						<linearGradient id="shape1" x1="0%" x2="50%" y1="86.603%" y2="0%">
						  	<stop offset="0%" stop-color="rgb(82,63,255)" stop-opacity="0.6" />
						  	<stop offset="100%" stop-color="rgb(117,14,213)" stop-opacity="0.6" />
						</linearGradient>
					</defs>
					<path fill="url(#shape1)"
					 d="M413.500,0.000 C641.870,0.000 827.000,185.130 827.000,413.500 C827.000,641.870 641.870,827.000 413.500,827.000 C185.130,827.000 -0.000,641.870 -0.000,413.500 C-0.000,185.130 185.130,0.000 413.500,0.000 Z"/>
				</svg>
						</div>
					</li>
					<li>
						<div class="translate-top-50 opacity-animation transition-100 transition-delay-300">
							<svg width="615px" height="615px">
					<defs>
						<linearGradient id="shape2" x1="0%" x2="50%" y1="86.603%" y2="0%">
						  	<stop offset="0%" stop-color="rgb(82,63,255)" stop-opacity="0.6" />
						  	<stop offset="100%" stop-color="rgb(109,26,223)" stop-opacity="0.6" />
						</linearGradient>
					</defs>
					<path fill="url(#shape2)"
					 d="M307.500,0.000 C477.327,0.000 615.000,137.673 615.000,307.500 C615.000,477.327 477.327,615.000 307.500,615.000 C137.672,615.000 -0.000,477.327 -0.000,307.500 C-0.000,137.673 137.672,0.000 307.500,0.000 Z"/>
				</svg>
						</div>
					</li>
					<li>
						<div class="translate-top-50 opacity-animation transition-50 transition-delay-600">
							<svg width="441px" height="441px">
					<defs>
						<linearGradient id="shape3" x1="0%" x2="50%" y1="86.603%" y2="0%">
						  	<stop offset="13%" stop-color="rgb(82,63,255)" stop-opacity="0.4" />
						  	<stop offset="100%" stop-color="rgb(130,33,221)" stop-opacity="0.4" />
						</linearGradient>
					</defs>
					<path fill="url(#shape3)"
					 d="M220.500,0.000 C342.279,0.000 441.000,98.721 441.000,220.500 C441.000,342.279 342.279,441.000 220.500,441.000 C98.721,441.000 -0.000,342.279 -0.000,220.500 C-0.000,98.721 98.721,0.000 220.500,0.000 Z"/>
				</svg>
						</div>
					</li>
				</ul>

			</section>

			<!--=====================================-->
			<!--=            Navbar Start           =-->
			<!--=====================================-->

			<!--=====================================-->
			<!--=              Navbar End           =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=         Main Banner Start         =-->
			<!--=====================================-->

			<!--=====================================-->
			<!--=           Main Banner End         =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=    Service Section Area Start     =-->
			<!--=====================================-->

			<!--=====================================-->
			<!--=     Service Section Area End      =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=     About Section Area Start      =-->
			<!--=====================================-->

			<!--=====================================-->
			<!--=      About Section Area End       =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=    Gallery Section Area Start     =-->
			<!--=====================================-->
			<section class="gallery-wrap-layout9 section-padding-md-equal bg-color-accent2">
				<div class="container">
					<div class="section-heading heading-dark heading-layout2 color-mountain-meadow">
						<div class="heading-sub-title">Travail récent</div>
						<h2 class="heading-main-title">Nous avons fait beaucoup de travail, vérifions-en quelques-uns d'ici</h2>
					</div>
					<div class="row zoom-gallery">
						<div class="col-lg-4 col-sm-6 col-12 has-animation">
							<div class="translate-bottom-20">
								<div class="gallery-box-layout3">
									<div class="item-figure">
										<img src="{{asset('user/media/gallery/gallery71.jpg')}}" alt="gallery">
										<div class="item-icon">
											<a href="{{asset('user/media/gallery/gallery71.jpg')}}" class="popup-zoom" data-fancybox-group="gallery" title=""><i class="fas fa-plus"></i></a>
										</div>
									</div>
									<div class="item-content">
										<h3 class="item-title"><a href="gallery-details.html">Agence créative</a></h3>
										<p> Developeur Web</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6 col-12 has-animation">
							<div class="translate-bottom-20">
								<div class="gallery-box-layout3">
									<div class="item-figure">
										<img src="{{asset('user/media/gallery/gallery72.jpg')}}" alt="gallery">
										<div class="item-icon">
											<a href="{{asset('user/media/gallery/gallery72.jpg')}}" class="popup-zoom" data-fancybox-group="gallery" title=""><i class="fas fa-plus"></i></a>
										</div>
									</div>
									<div class="item-content">
										<h3 class="item-title"><a href="gallery-details.html">Maquette mobile Apple</a></h3>
										<p>Developeur Application</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6 col-12 has-animation">
							<div class="translate-bottom-20">
								<div class="gallery-box-layout3">
									<div class="item-figure">
										<img src="{{asset('user/media/gallery/gallery73.jpg')}}" alt="gallery">
										<div class="item-icon">
											<a href="{{asset('user/media/gallery/gallery73.jpg')}}" class="popup-zoom" data-fancybox-group="gallery" title=""><i class="fas fa-plus"></i></a>
										</div>
									</div>
									<div class="item-content">
										<h3 class="item-title"><a href="gallery-details.html">La conception des produits</a></h3>
										<p>Designeur Ui/Ux </p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6 col-12 has-animation">
							<div class="translate-bottom-20">
								<div class="gallery-box-layout3">
									<div class="item-figure">
										<img src="{{asset('user/media/gallery/gallery74.jpg')}}" alt="gallery">
										<div class="item-icon">
											<a href="{{asset('user/media/gallery/gallery74.jpg')}}" class="popup-zoom" data-fancybox-group="gallery" title=""><i class="fas fa-plus"></i></a>
										</div>
									</div>
									<div class="item-content">
										<h3 class="item-title"><a href="gallery-details.html">Conception de maquette</a></h3>
										<p> Designeur Graphique</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6 col-12 has-animation">
							<div class="translate-bottom-20">
								<div class="gallery-box-layout3">
									<div class="item-figure">
										<img src="{{asset('user/media/gallery/gallery52.jpg')}}" alt="gallery">
										<div class="item-icon">
											<a href="{{asset('user/media/gallery/gallery52.jpg')}}" class="popup-zoom" data-fancybox-group="gallery" title=""><i class="fas fa-plus"></i></a>
										</div>
									</div>
									<div class="item-content">
										<h3 class="item-title"><a href="gallery-details.html">Design d'intérieur</a></h3>
										<p> Developeur Web</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6 col-12 has-animation">
							<div class="translate-bottom-20">
								<div class="gallery-box-layout3">
									<div class="item-figure">
										<img src="{{asset('user/media/gallery/gallery82.jpg')}}" alt="gallery">
										<div class="item-icon">
											<a href="{{asset('user/media/gallery/gallery82.jpg')}}" class="popup-zoom" data-fancybox-group="gallery" title=""><i class="fas fa-plus"></i></a>
										</div>
									</div>
									<div class="item-content">
										<h3 class="item-title"><a href="gallery-details.html">Impression de logo</a></h3>
										<p>Branding Items</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--=====================================-->
			<!--=     Gallery Section Area End      =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=  Testimonial Section Area Start   =-->
			<!--=====================================-->


			<!--=====================================-->
			<!--=   Testimonial Section Area End    =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=    Progress Section Area Start    =-->
			<!--=====================================-->
			<section class="progress-wrap-layout3 bg-position-center bg-no-repeat bg-size-cover" data-bg-image="{{asset('user/media/banner/banner2.jpg')}}">
				<div class="container zindex-level-2">
					<div class="row">
						<div class="col-lg-8 progress-content-layout1">
							<h2 class="item-title">ETout ce dont vous avez besoin pour gérer votre site Web.</h2>
							<p>Grursus mal suada faci lisis Lorem ipsum dolarorit more ametion many consectetur elit. Vesti at bulum nec odio aea the dumm ipsumm is that ipsum that dolocons rsus mal suada and taht fadolorit to consectetur our is dummy text more text elit.</p>
						</div>
						<div class="col-lg-4">
							<div class="row gutters-20">
								<div class="col-sm-6 col-12">
									<div class="progress-box-layout5">
										<h2 class="counting-text counter" data-num="845">845</h2>
										<div class="item-label">Gens heureux</div>
									</div>
								</div>
								<div class="col-sm-6 col-12">
									<div class="progress-box-layout5">
										<h2 class="counting-text counter" data-num="1240">1240</h2>
										<div class="item-label">Projets réalisés</div>
									</div>
								</div>
								<div class="col-sm-6 col-12">
									<div class="progress-box-layout5">
										<h2 class="counting-text counter" >7/7jrs</h2>
										<div class="item-label">Jours de travail</div>
									</div>
								</div>
								<div class="col-sm-6 col-12">
									<div class="progress-box-layout5">
										<h2 class="counting-text counter" data-num="67">67</h2>
										<div class="item-label">Lauréat</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--=====================================-->
			<!--=     Progress Section Area End     =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=      Blog Section Area Start      =-->
			<!--=====================================-->

			<!--=====================================-->
			<!--=       Blog Section Area End       =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=     Footer Section Area Start     =-->
			<!--=====================================-->

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
            @section('sub-menu')

            <div class="offcanvas-menu-wrap" id="offcanvas-wrap" data-position="left">
                <div class="close-btn offcanvas-close"><i class="fas fa-times"></i></div>
                <div class="offcanvas-content">
                    <div class="offcanvas-logo">
                        <img src="{{asset('user/media/logo_atlas66.png')}}" alt="logo" class="img-fluid" style="padding: 2px;">

                    </div>
                    <nav>
                        <ul class="offcanvas-nav">
                            <li class="nav-item">
                                <a href="{{route('home')}}">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a href="about.html">A Propos</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('services') }}">Nos Services</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('portfolio') }}">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('pageblog')}}">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('contact')}}">Contactez-nous</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="offcanvas-footer">
                        <div class="item-title">Suivez-nous</div>
                        <ul class="offcanvas-social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fas fa-rss"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>


            @endsection()


			<!--=====================================-->
			<!--=           Offcanvas End           =-->
			<!--=====================================-->

		</div>
	</div>



        @endsection()
