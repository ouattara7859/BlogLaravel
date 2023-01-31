


@extends('user_template.layouts.template')
@section('title')
    Listes blogs
@endsection
@section('content')

 <!--build:css-->
 <link rel="stylesheet" href="{{asset('user/assets/css/main.css')}}">
 <link rel="stylesheet" href="{{asset('user/dependencies/fontawesome/css/all.min.css')}}" type="text/css">

    <!-- endbuild -->

    <!--custom css start-->
    <link rel="stylesheet" href="{{asset('user/assets/css/custom.css')}}">
    <!--custom css end-->

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

            <section class="service-wrap-layout2 ">

				<div class="container">
					<div class="section-heading heading-dark heading-layout1 mt-5">
						<h2 class="heading-main-title"> {{ $h2 }} </h2>
					</div>
				</div>

			</section>



			<!--=====================================-->
			<!--=           Main Banner End         =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=      Blog Section Area Start      =-->
			<!--=====================================-->
            <div class="container">

            <div class="row">
                <div class="col-lg-9">


                    <section class="masonary-blog-section ">


                    <div class="row">
                    @foreach ($blog as $blogs)

                        <div class="col-lg-4 col-md-6">
                            <div class="single-article rounded-custom my-3">
                                <a href="{{route('detailblog',[$blogs->id,$blogs->slug])}}" class="article-img">
                                    <img src="{{asset($blogs->blog_img)}}" alt="article" class="img-fluid">
                                </a>
                                <div class="article-content p-4">
                                    <div class="article-category mb-4 d-block">
                                        <a href="javascript:;" class="d-inline-block text-dark badge  " style="background:#{{$blogs->color_random}}"> {{ $blogs->category   }}</a>
                                    </div>
                                    <a href="{{route('detailblog',[$blogs->id,$blogs->slug])}}">
                                        <h2 class="h5 article-title limit-2-line-text">{{$blogs->title}}</h2>
                                    </a>
                                    <p class="limit-2-line-text">{{ substr($blogs->description, 0,  100) }}</p>

                                    <a href="javascript:;">
                                        <div class="d-flex align-items-center pt-4">
                                            <div class="avatar">
                                                <img src="{{asset('user/assets/img/testimonial/3.jpg')}}" alt="avatar" width="40" class="img-fluid rounded-circle me-3">
                                            </div>
                                            <div class="avatar-info">
                                                <h6 class="mb-0 avatar-name">{{$blogs->name}}</h6>
                                                <span class="small fw-medium text-muted">April 24, 2021</span>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>

                    <!--pagination start-->
                    <div class="row justify-content-center align-items-center mt-5">
                        {{-- <div class="col-auto my-1">
                            <a href="#" class="btn btn-soft-primary btn-sm">Previous</a>
                        </div> --}}
                        <div class="col-auto my-1">
                            <nav>
                                <ul class="pagination rounded mb-0">

                                 {{-- {{ $blog ->onEachSide(2)->links() }} --}}
                                        {{-- <li class="page-item"><a class="page-link" href="#">1</a>
                                        </li> --}}


                                </ul>
                            </nav>
                        </div>
                        {{-- <div class="col-auto my-1">
                            <a href="#" class="btn btn-soft-primary btn-sm">Next</a>
                        </div> --}}
                    </div>
                    <!--pagination end-->



				</div>
			</section>

                <div class="col-lg-3">
                    <form action="">

							<div class="widget bg-color-light radius-4">
								<div class="widget-search">
									<div class="input-group stylish-input-group">
										<input type="text" name="search" class="form-control" placeholder="Recherche ici...">
										<span class="input-group-addon">
                                            <button type="submit">Recherche</button>
                                        </span>
									</div>
								</div>
							</div>
                        </form>
							<div class="widget bg-color-light mt-3">
								<div class="widget-section-heading heading-layout1">
									<h3 class="item-heading">Categories</h3>
								</div>
								<div class="widget-category">
									<ul>
										@foreach ($categories as $category)
                                            <li><a href="{{route('pageblog',['category' => $category->category]) }}">{{$category->category}}<span>({{$category->category_count   }})</span></a></li>
                                        @endforeach

									</ul>
								</div>
							</div>

						</div>
            </div>
            </div>



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

			<!--=====================================-->
			<!--=           Offcanvas End           =-->
			<!--=====================================-->

		</div>
	</div>

    @endsection



