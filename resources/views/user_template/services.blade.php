@extends('user_template.layouts.template')
@section('title')
    Services
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
			<!--=           Main Banner End         =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=   Service Section Area Start      =-->
			<!--=====================================-->
			<section class="service-wrap-layout2 section-padding-md bg-color-light position-relative">
				<div class="animated-figure">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="682px" height="624px" data-parallax='{"x" : 150, "y" : -400}'>
			<path fill-rule="evenodd"  fill="rgb(249, 251, 255)" d="M129.861,445.151 C135.817,359.733 165.631,309.507 69.925,231.284 C-48.622,134.391 1.806,7.438 100.124,2.487 C180.263,-1.549 184.232,52.109 291.793,81.829 C351.092,98.213 363.911,86.655 391.662,45.581 C442.752,-30.034 518.868,-4.403 507.727,69.983 C496.050,147.952 503.636,232.416 606.763,223.993 C707.036,215.803 714.686,361.609 582.959,374.723 C481.641,384.808 441.418,364.086 368.153,540.352 C316.484,664.660 114.605,663.966 129.861,445.151 Z"/>
		</svg>
				</div>
				<div class="container">
					<div class="section-heading heading-dark heading-layout1">
						<div class="heading-sub-title">CARACTÉRISTIQUES</div>
						<h2 class="heading-main-title">Nos services</h2>
						<p class="heading-paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting has been the industry's standard dummy text ever since</p>
					</div>
				</div>
				<div class="container-fluid">
					<div class="row has-animation">
						<div class="col-xl-5th col-sm-6">
							<div class="translate-left-10 opacity-animation transition-100 transition-delay-100">
								<div class="service-box-layout2 layout-bg-california">
									<div class="item-icon icon-bg-california">
										<div class="icon-color icon-color-california">
											<i class="flaticon-filter"></i>
										</div>
									</div>
									<h3 class="item-title"><a href="service-details.html">Étude de marché</a></h3>
									<p>GrursusGrursusGrursus Grursus Grursusddfrfort  suada lisis the Lorem ipsum dolarorit more and imanys this as this of ready consectetur elit.</p>
								</div>
							</div>
						</div>
						<div class="col-xl-5th col-sm-6">
							<div class="translate-left-10 opacity-animation transition-100 transition-delay-400">
								<div class="service-box-layout2 layout-bg-emerald">
									<div class="item-icon icon-bg-emerald">
										<div class="icon-color icon-color-emerald">
											<i class="flaticon-layers-1"></i>
										</div>
									</div>
									<h3 class="item-title"><a href="service-details.html">Mise en page créative</a></h3>
									<p>Grursus suada lisis the Lorem ipsum dolarorit more and imanys this as this of ready consectetur elit.</p>
								</div>
							</div>
						</div>
						<div class="col-xl-5th col-sm-6">
							<div class="translate-left-10 opacity-animation transition-100 transition-delay-700">
								<div class="service-box-layout2 layout-bg-royal-blue">
									<div class="item-icon icon-bg-royal-blue">
										<div class="icon-color icon-color-royal-blue">
											<i class="flaticon-speaker"></i>
										</div>
									</div>
									<h3 class="item-title"><a href="service-details.html">Le marketing numérique</a></h3>
									<p>Grursus suada lisis the Lorem ipsum dolarorit more and imanys this as this of ready consectetur elit.</p>
								</div>
							</div>
						</div>
						<div class="col-xl-5th col-sm-6">
							<div class="translate-left-10 opacity-animation transition-100 transition-delay-1000">
								<div class="service-box-layout2 layout-bg-dodger-blue">
									<div class="item-icon icon-bg-dodger-blue">
										<div class="icon-color icon-color-dodger-blue">
											<i class="flaticon-chart"></i>
										</div>
									</div>
									<h3 class="item-title"><a href="service-details.html">
                                        Référencement et liens retour</a></h3>
									<p>Grursus suada lisis the Lorem ipsum dolarorit more and imanys this as this of ready consectetur elit.</p>
								</div>
							</div>
						</div>
						<div class="col-xl-5th col-sm-6 d-none d-xl-block">
							<div class="translate-left-10 opacity-animation transition-100 transition-delay-1300">
								<div class="service-box-layout2 layout-bg-sunset-orange">
									<div class="item-icon icon-bg-sunset-orange">
										<div class="icon-color icon-color-sunset-orange">
											<i class="flaticon-graph"></i>
										</div>
									</div>
									<h3 class="item-title"><a href="service-details.html">Développement web</a></h3>
									<p>Grursus suada lisis the Lorem ipsum dolarorit more and imanys this as this of ready consectetur elit.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--=====================================-->
			<!--=    Service Section Area End       =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=    About Section Area Start       =-->
			<!--=====================================-->
			<section class="section-padding-bottom-md about-wrap-layout2 has-animation">
				<ul class="animated-shape-big">
					<li class="translate-right-75 opacity-animation transition-200 transition-delay-1500">
						<img src="{{asset('user/media/element/element21.png')}}" alt="Animated Figure">
					</li>
					<li class="translate-right-75 opacity-animation transition-200 transition-delay-2000">
						<img src="{{asset('user/media/element/element22.png')}}" alt="Animated Figure">
					</li>
				</ul>
				<div class="opacity-animation transition-200 transition-delay-3500">
					<ul class="animated-shape-small">
						<li>
							<img src="{{asset('user/media/element/element29.png')}}" alt="Animated Figure">
						</li>
						<li>
							<img src="{{asset('user/media/element/element30.png')}}" alt="Animated Figure">
						</li>
						<li>
							<img src="{{asset('user/media/element/element31.png')}}" alt="Animated Figure">
						</li>
					</ul>
				</div>
				<div class="container-fluid">
					<div class="row d-flex align-items-center">
						<div class="col-xl-6 col-12 pl-0 pr-0">
							<div class="about-box-layout2">
								<ul class="figure-holder">
									<li class="animated-bg">
										<div class="translate-left-75 opacity-animation transition-200 transition-delay-10">
											<svg width="691px" height="733px">
									<path fill-rule="evenodd" opacity="0.051" fill="rgb(255, 197, 4)"
							 		d="M129.222,271.913 C212.230,241.967 271.998,249.153 305.875,126.405 C347.835,-25.639 488.526,-30.969 534.149,59.618 C571.338,133.456 522.405,159.532 539.194,273.262 C548.450,335.961 564.686,343.229 614.968,352.282 C707.535,368.947 715.080,451.342 640.312,471.810 C561.945,493.263 485.477,535.574 536.377,629.244 C585.869,720.326 451.599,788.230 384.363,669.559 C332.649,578.284 335.429,531.755 138.737,536.091 C0.024,539.148 -83.418,348.624 129.222,271.913 Z"/>
								</svg>
										</div>
									</li>
									<li class="animated-figure">
										<div class="translate-left-75 opacity-animation transition-200 transition-delay-700">
											<div class="mask-image">
												<img src="{{asset('user/media/about/about2.jpg')}}" alt="About">
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-xl-6 col-12 compress-right-side">
							<div class="about-box-layout2">
								<div class="content-holder">
									<div class="translate-bottom-75 opacity-animation transition-150 transition-delay-1500">
										<div class="section-title">
                                            À propos de nous</div>
									</div>
									<div class="translate-bottom-75 opacity-animation transition-150 transition-delay-2000">
										<h2 class="item-title">Nous sommes ici pour une agence de marketing, créez un produit
                                        </h2>
									</div>
									<div class="translate-bottom-75 opacity-animation transition-150 transition-delay-2500">
										<h3 class="sub-title">Nous vous aidons à gérer vos actifs, fournissons un conseil financier. </h3>
									</div>
									<div class="translate-bottom-75 opacity-animation transition-150 transition-delay-3000">
										<p>Grursus mal suada faci lisis Lorem ipsum dolarorit more ametion many consectetur elit. Vesti at bulum nec odio aea the dumm ipsumm is that ipsum that dolocons rsus mal suada and fadolorit to consectetur our is dummy text more textelit.</p>
									</div>
									<div class="translate-bottom-75 opacity-animation transition-150 transition-delay-3500">
										<a href="about.html" class="btn-fill btn-gradient">Lire la suite<i class="flaticon-next"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--=====================================-->
			<!--=     About Section Area End        =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=   Process Section Area Start      =-->
			<!--=====================================-->
			<section class="process-wrap-layout2 section-padding-md bg-gradient-layout2 position-relative">
				<div class="container">
					<div class="section-heading heading-light heading-layout1">
						<div class="heading-sub-title">FLUX DE TRAVAIL</div>
						<h2 class="heading-main-title">Notre processus de travail</h2>
						<p class="heading-paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting has been the industry's standard dummy text ever since</p>
					</div>
					<div class="row gutters-80 has-animation">
						<div class="col-xl-3 col-md-6 col-12">
							<div class="translate-zoomout-50 opacity-animation transition-100 transition-delay-100">
								<div class="process-box-layout2">
									<div class="count-number">1</div>
									<div class="item-content">
										<div class="item-icon california">
											<i class="flaticon-research-1"></i>
										</div>
										<h3 class="item-title">Rechercher</h3>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6 col-12">
							<div class="translate-zoomout-50 opacity-animation transition-100 transition-delay-400">
								<div class="process-box-layout2">
									<div class="count-number">2</div>
									<div class="item-content">
										<div class="item-icon emerald">
											<i class="flaticon-think-1"></i>
										</div>
										<h3 class="item-title">Concept</h3>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6 col-12">
							<div class="translate-zoomout-50 opacity-animation transition-100 transition-delay-700">
								<div class="process-box-layout2">
									<div class="count-number">3</div>
									<div class="item-content">
										<div class="item-icon royal-blue">
											<i class="flaticon-growth"></i>
										</div>
										<h3 class="item-title">Développement</h3>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6 col-12">
							<div class="translate-zoomout-50 opacity-animation transition-100 transition-delay-1000">
								<div class="process-box-layout2">
									<div class="count-number">4</div>
									<div class="item-content">
										<div class="item-icon dodger-blue">
											<i class="flaticon-portfolio"></i>
										</div>
										<h3 class="item-title">Démo en direct</h3>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--=====================================-->
			<!--=    Process Section Area End       =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=    Feature Section Area Start     =-->
			<!--=====================================-->
			<section class="feature-wrap-layout2 overflow-hidden">
				<div class="container">
					<div class="row gutters-50">
						<div class="col-lg-6 has-animation">
							<div class="translate-left-75 opacity-animation transition-200 transition-delay-10">
								<div class="feature-box-layout2">
									<div class="item-figure">
										<img src="{{asset('user/media/feature/feature4.png')}}" alt="Feature">
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 d-flex align-items-center justify-content-center has-animation">
							<div class="feature-box-layout2">
								<div class="translate-bottom-75 opacity-animation transition-150 transition-delay-200">
									<h3 class="item-title">La prochaine génération de notre marketing</h3>
								</div>
								<div class="translate-bottom-75 opacity-animation transition-150 transition-delay-500">
									<p>Grursus mal suada faci lisis Lorem ipsum dolarorit ametion the at dummy consectetur elit. Vesti at bulum nec odio aea the dumm ipsum on that at to dolocons rsus mal suada and fadolorit to the consectetur elit. All the more Lorem Ipsum generators
										on the Internet tend to repeat chunks as dummy necessary making.</p>
								</div>
								<div class="translate-bottom-75 opacity-animation transition-150 transition-delay-800">
									<a href="about.html" class="btn-fill btn-gradient">Lire la suite <i class="flaticon-next"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-6 order-lg-2 has-animation">
							<div class="translate-bottom-75 opacity-animation transition-150 transition-delay-10">
								<div class="feature-box-layout2">
									<div class="item-figure">
										<img src="{{asset('user/media/feature/feature5.png')}}" alt="Feature">
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 order-lg-1 d-flex align-items-center justify-content-center has-animation">
							<div class="feature-box-layout2">
								<div class="translate-bottom-75 opacity-animation transition-150 transition-delay-200">
									<h3 class="item-title">Tirer le maximum de toute entreprise commerciale.</h3>
								</div>
								<div class="translate-bottom-75 opacity-animation transition-150 transition-delay-500">
									<p>Grursus mal suada faci lisis Lorem ipsum dolarorit ametion the at dumm consectetur elit. Vesti at bulum nec odio aea the dumm ipsum on that at dolocons rsus mal suada and fadolorit to the consectetur elit. All the this Lorem generators on the
										Internet tend ready making. Lorem ipsum more dolarorit ametion the at dumm consectetur elit. Lorem ipsum dolarorit is ametion the at dumm consectetur elit.</p>
								</div>
								<div class="translate-bottom-75 opacity-animation transition-150 transition-delay-800">
									<a href="about.html" class="btn-fill btn-gradient">Lire la suite <i class="flaticon-next"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--=====================================-->
			<!--=     Feature Section Area End      =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=  Testimonial Section Area Start   =-->
			<!--=====================================-->
			<section class="testimonial-wrap-layout2 section-padding-md bg-color-accent2">
				<div class="container">
					<div class="section-heading heading-dark heading-layout1">
						<div class="heading-sub-title">TÉMOIGNAGES</div>
						<h2 class="heading-main-title">Commentaires des clients</h2>
						<p class="heading-paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting has been the industry's standard dummy text ever since</p>
					</div>
					<div class="rc-carousel nav-control-layout1" data-loop="true" data-items="3" data-margin="10" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="700" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true"
					 data-r-x-small-dots="false" data-r-x-medium="1" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="1" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="1" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="1"
					 data-r-large-nav="true" data-r-large-dots="false" data-r-extra-large="1" data-r-extra-large-nav="true" data-r-extra-large-dots="false">
						<div class="testimonial-box-layout2">
							<div class="item-content">
								<div class="item-icon">
									<i class="flaticon-quote"></i>
								</div>
								<p>Grursus mal suada faci lisis to at Lorem at this dolarorit moreametion to consectetur elit. to at Vesti bulum at nec that...</p>
								<div class="media">
									<img src="{{asset('user/media/testimonial/testimonial1.png')}}" alt="Testimonial">
									<div class="media-body space-sm">
										<h3 class="item-title">Robert Bruce</h3>
										<div class="item-designation">Apps Developer</div>
									</div>
								</div>
							</div>
						</div>
						<div class="testimonial-box-layout2">
							<div class="item-content">
								<div class="item-icon">
									<i class="flaticon-quote"></i>
								</div>
								<p>Grursus mal suada faci lisis to at Lorem at this dolarorit moreametion to consectetur elit. to at Vesti bulum at nec that...</p>
								<div class="media">
									<img src="{{asset('user/media/testimonial/testimonial1.png')}}" alt="Testimonial">
									<div class="media-body space-sm">
										<h3 class="item-title">Robert Bruce</h3>
										<div class="item-designation">Apps Developer</div>
									</div>
								</div>
							</div>
						</div>
						<div class="testimonial-box-layout2">
							<div class="item-content">
								<div class="item-icon">
									<i class="flaticon-quote"></i>
								</div>
								<p>Grursus mal suada faci lisis to at Lorem at this dolarorit moreametion to consectetur elit. to at Vesti bulum at nec that...</p>
								<div class="media">
									<img src="{{asset('user/media/testimonial/testimonial2.png')}}" alt="Testimonial">
									<div class="media-body space-sm">
										<h3 class="item-title">Kate Kingston</h3>
										<div class="item-designation">Web Designer</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>


			<!--=====================================-->
			<!--=   Testimonial Section Area End    =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=      Team Section Area Start      =-->
			<!--=====================================-->
			<section id="team-wrap-layout1" class="section-padding-md">
				<div class="container">
					<div class="section-heading heading-dark heading-layout1">
						<div class="heading-sub-title">NOTRE MEILLEUR</div>
						<h2 class="heading-main-title">Équipe dédiée</h2>
						<p class="heading-paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting has been the industry's standard dummy text ever since</p>
					</div>
					<div class="row has-animation rc-carousel nav-control-layout4 col-full-width" data-options='{"trigger_start": 991, "trigger_end": 0}' data-loop="true" data-items="30" data-margin="10" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="700"
					 data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="1" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true"
					 data-r-small-dots="false" data-r-medium="2" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="3" data-r-large-nav="true" data-r-large-dots="false" data-r-extra-large="3" data-r-extra-large-nav="true" data-r-extra-large-dots="false">
						<div class="col-md-4">
							<div class="translate-bottom-75 opacity-animation transition-150 transition-delay-100">
								<div class="team-box-layout1">
									<div class="maks-item animted-bg-wrap">
										<span class="animted-bg"></span>
										<div class="item-figure">
											<img src="{{asset('user/media/team/team1.jpg')}}" alt="Team">
										</div>
										<ul class="social-items">
											<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#"><i class="fab fa-twitter"></i></a></li>
											<li><a href="#"><i class="fab fa-instagram"></i></a></li>
											<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
										</ul>
									</div>
									<div class="item-content">
										<h3 class="item-title"><a href="#">Michael Jackson</a></h3>
										<div class="sub-title">Ul / Ux Designer</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="translate-bottom-75 opacity-animation transition-150 transition-delay-600">
								<div class="team-box-layout1">
									<div class="maks-item animted-bg-wrap">
										<span class="animted-bg"></span>
										<div class="item-figure">
											<img src="{{asset('user/media/team/team2.jpg')}}" alt="Team">
										</div>
										<ul class="social-items">
											<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#"><i class="fab fa-twitter"></i></a></li>
											<li><a href="#"><i class="fab fa-instagram"></i></a></li>
											<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
										</ul>
									</div>
									<div class="item-content">
										<h3 class="item-title"><a href="#">Michael Jackson</a></h3>
										<div class="sub-title">Ul / Ux Designer</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="translate-bottom-75 opacity-animation transition-150 transition-delay-1100">
								<div class="team-box-layout1">
									<div class="maks-item animted-bg-wrap">
										<span class="animted-bg"></span>
										<div class="item-figure">
											<img src="{{asset('user/media/team/team3.jpg')}}" alt="Team">
										</div>
										<ul class="social-items">
											<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#"><i class="fab fa-twitter"></i></a></li>
											<li><a href="#"><i class="fab fa-instagram"></i></a></li>
											<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
										</ul>
									</div>
									<div class="item-content">
										<h3 class="item-title"><a href="#">Michael Jackson</a></h3>
										<div class="sub-title">Ul / Ux Designer</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--=====================================-->
			<!--=       Team Section Area End       =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=    Pricing Section Area Start     =-->
			<!--=====================================-->

			<!--=====================================-->
			<!--=     Pricing Section Area End      =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=     Brand Section Area Start      =-->
			<!--=====================================-->
			<section id="brand-wrap-layout1" class="brand-wrap-layout1 bg-gradient-layout3">
				<div class="container">
					<div class="rc-carousel" data-loop="true" data-items="8" data-margin="30" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="700" data-dots="false" data-nav="false" data-nav-speed="false" data-r-x-small="2" data-r-x-small-nav="false"
					 data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="false" data-r-x-medium-dots="false" data-r-small="3" data-r-small-nav="false" data-r-small-dots="false" data-r-medium="4" data-r-medium-nav="false" data-r-medium-dots="false" data-r-large="5"
					 data-r-large-nav="false" data-r-large-dots="false" data-r-extra-large="6" data-r-extra-large-nav="false" data-r-extra-large-dots="false">
						<div class="brand-box-layout1"><img src="{{asset('user/media/brand/brand1.png')}}" alt="Brand-thumb"></div>
						<div class="brand-box-layout1"><img src="{{asset('user/media/brand/brand2.png')}}" alt="Brand-thumb"></div>
						<div class="brand-box-layout1"><img src="{{asset('user/media/brand/brand3.png')}}" alt="Brand-thumb"></div>
						<div class="brand-box-layout1"><img src="{{asset('user/media/brand/brand4.png')}}" alt="Brand-thumb"></div>
						<div class="brand-box-layout1"><img src="{{asset('user/media/brand/brand5.png')}}" alt="Brand-thumb"></div>
						<div class="brand-box-layout1"><img src="{{asset('user/media/brand/brand6.png')}}" alt="Brand-thumb"></div>
						<div class="brand-box-layout1"><img src="{{asset('user/media/brand/brand3.png')}}" alt="Brand-thumb"></div>
					</div>
				</div>
			</section>
			<!--=====================================-->
			<!--=      Brand Section Area End       =-->
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
