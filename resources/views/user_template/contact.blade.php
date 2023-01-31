

@extends('user_template.layouts.template')
@section('title')
    Contactez-nous
@endsection
@section('content')

<style>
    .page-banner{
       padding: 1px 0 100px;
    }
</style>
<section id="page-banner" class="page-banner bg-gradient-layout6 has-animation">
				<ul class="shape-holder">
					<li>
						<div class="translate-top-50 opacity-animation transition-200 transition-delay-10">
							<svg width="0" height="0">
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

            <section class="service-wrap-layout2 ">

<div class="container text-center">
    <div class="section-heading heading-dark heading-layout1 mt-5 text-center">
        <h2 class="heading-main-title text-center">Contactez-nous </h2>
    </div>
</div>




</section>



			<!--=====================================-->
			<!--=           Main Banner End         =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=      Blog Section Area Start      =-->
			<!--=====================================-->

            <section class="">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 mb-5 has-animation">
							<div class="">
								<div class="address-box-layout2">
									<div class="item-icon">
										<i class="flaticon-mail"></i>
									</div>
									<div class="item-content">
										<h3 class="item-title">Email &amp; Phone</h3>
										<ul class="list-item">
											<li>ouattarasekou7859@gmail.com</li>
											<li>+212603762941</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="">
								<div class="address-box-layout2">
									<div class="item-icon">
										<i class="flaticon-placeholder"></i>
									</div>
									<div class="item-content">
										<h3 class="item-title">Our Location</h3>
										<ul class="list-item">
											<li>Morocco</li>
											<li>Technopark city</li>
										</ul>
									</div>
								</div>
							</div>

						</div>
						<div class="col-lg-8 has-animation">
							<div class="contact-box-layout3">
                                @if ($errors->any())
                                    <div class="col-lg-8 text-center">
                                        <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                        </div>
                                    </div>

                                @endif
                                <div class="col-lg-8 text-center">
                                    @if (session()->has('valider'))
                                    <div class="alert alert-success alert-dismissible" role="alert" style="background: rgb(88, 221, 88);color: rgb(0, 0, 0);">

                                        {{session()->get('valider')}}.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                                    </div>
                                @endif
                                </div>

								<form action="{{ route('contactstore') }}" method="post" class="contact-form-box" >
                                    @csrf
									<div class="row">
										<div class="col-md-6 form-group">
											<div class="">
												<input type="text" placeholder="Nom & Prenom" class="form-control" name="name"  required>

											</div>
										</div>
										<div class="col-md-6 form-group">
											<div class="">
												<input type="email" placeholder="Email" class="form-control" name="email"  required>

											</div>
										</div>
										<div class="col-12 form-group">
											<div class="">
												<input type="text" placeholder="Object" class="form-control" name="subject"  required>

											</div>
										</div>
										<div class="col-12 form-group">
											<div class="">
												<textarea placeholder="Commentaire" class="textarea form-control" name="message" id="form-message" rows="7" cols="20"  required></textarea>

											</div>
										</div>
										<div class="col-12 form-group mb-0">
											<div class="">
												<button type="submit" class="btn-fill btn-gradient">Envoyer Message</button>
											</div>
										</div>
									</div>

								</form>
							</div>
						</div>
					</div>

				</div>
			</section>
			<!--=====================================-->
			<!--=       Blog Section Area End       =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=     Brand Section Area Start      =-->
			<!--=====================================-->

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



@endsection
