
@php

$recent_blog = App\Models\Blog::latest()->orderBy('id', 'desc')->limit(4)->get();

@endphp


@extends('user_template.layouts.template')
@section('title')
    Detail blog
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

<div class="container">
    <div class="section-heading heading-dark heading-layout1 mt-5">
        <h2 class="heading-main-title">Check detail blog </h2>
    </div>
</div>

</section>



			<!--=====================================-->
			<!--=           Main Banner End         =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=      Blog Section Area Start      =-->
			<!--=====================================-->
			<section class="blog-details-wrap  bg-color-light">
				<div class="container">
					<div class="row">
						<div class="col-lg-8">
							<div class="blog-details-box">
								<div class="blog-details-figure">
									<img src="{{ asset($detail->blog_img)}}" alt="Blog">
								</div>
								<div class="blog-details-content">
									<ul class="entry-meta">
                                        <input type="hidden" name="id_message" value="{{ $detail->id }}">
                                        <input type="hidden" name="slug_message" value="{{ $detail->slug }}">
										<li><i class="far fa-calendar-alt"></i>{{ $detail->date_creation }}</li>
										<li><i class="far fa-user"></i>By {{ $detail->name }}</li>
										<li><i class="far fa-comments"></i>09 Comments</li>

									</ul>
									<h2 class="entry-title">{{ $detail->title }}</h2>
									<p>{{ $detail->description }}</p>

								</div>
								<div class="blog-tag">
									<ul>
										<li class="item-comments">
											<i class="fas fa-chart-line"></i>919 Views
										</li>
										<li class="social-wrap">
											<div class="social-title">Share:</div>
											<div class="item-social">
												<a href="#"><i class="fab fa-facebook-f"></i></a>
												<a href="#"><i class="fab fa-twitter"></i></a>
												<a href="#"><i class="fab fa-linkedin-in"></i></a>
												<a href="#"><i class="fab fa-google-plus-g"></i></a>
												<a href="#"><i class="fab fa-pinterest"></i></a>
											</div>
										</li>

									</ul>
								</div>
								<div class="blog-author">
									<div class="media media-none--xs">
										<img src="{{ asset('user/media/blog/author.jpg')}}" alt="Author" class="media-img-auto">
										<div class="media-body">
											<h4 class="item-title">{{ $detail->name }}</h4>
											<p>Dorem ipsum dolor sit amet, consectetuer adipiscing elit,sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
										</div>
									</div>
								</div>
								<div class="related-post">
									<div class="widget-section-heading mb--10">
										<h3 class="item-heading">Related Post</h3>
									</div>
									<div class="rc-carousel" data-custom-nav="#owl-nav1" data-loop="" data-items="8" data-margin="30" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="700" data-dots="false" data-nav="false" data-nav-speed="false" data-r-x-small="1"
									 data-r-x-small-nav="false" data-r-x-small-dots="false" data-r-x-medium="1" data-r-x-medium-nav="false" data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="false" data-r-small-dots="false" data-r-medium="2" data-r-medium-nav="false"
									 data-r-medium-dots="false" data-r-large="3" data-r-large-nav="false" data-r-large-dots="false" data-r-extra-large="3" data-r-extra-large-nav="false" data-r-extra-large-dots="false">

									@foreach ($related_products as $related_product)
                                        	<div class="blog-box-layout7">
                                                <div class="item-figure">
                                                    <a href="{{route('detailblog',[$related_product->id,$related_product->slug])}}"><img src="{{ asset($related_product->blog_img)}}" alt="Blog Figure"></a>
                                                </div>
                                                <div class="item-content">
                                                    <ul class="entry-meta meta-color-accent justify-content-between">
                                                        <li><a href="#">{{ $detail->date_creation }}</a></li>
                                                    </ul>
                                                    <h3 class="entry-title title-color-dark"><a href="{{route('detailblog',[$related_product->id,$related_product->slug])}}">{{$related_product->title}}</a></h3>
                                                </div>
                                            </div>
                                    @endforeach

									</div>
								</div>
								<div class="blog-comment">
									<div class="widget-section-heading mb--10">
										<h3 class="item-heading">3 Comments</h3>
									</div>
									<ul>
										<li>
											<div class="media media-none--xs">
												<img src="{{asset('user/media/blog/comment1.jpg')}}" alt="Comment" class="rounded-circle media-img-auto">
												<div class="media-body space-sm">
													<h4 class="comment-title">Johnson Charles</h4>
													<span class="post-date">May 7, 2019</span>
													<p>Grursus mal suada faci lisis Lorem ipsum dolarorit more a ametion consectetur is elit. Vesti at bulum nec odio aea the dumm ipsumm.</p>
													<a href="#" class="item-btn">Reply</a>
												</div>
											</div>
										</li>
										<li>
											<div class="media media-none--xs">
												<img src="{{asset('user/media/blog/comment2.jpg')}}" alt="Comment" class="rounded-circle media-img-auto">
												<div class="media-body">
													<h4 class="comment-title">Maria Charles</h4>
													<span class="post-date">May 11, 2019</span>
													<p>Grursus mal suada faci lisis Lorem ipsum dolarorit more a ametion consectetur is elit. Vesti at bulum nec odio aea the dumm ipsumm.</p>
													<a href="#" class="item-btn">Reply</a>
												</div>
											</div>
										</li>
										<li>
											<div class="media media-none--xs">
												<img src="{{asset('user/media/blog/comment3.jpg')}}" alt="Comment" class="rounded-circle media-img-auto">
												<div class="media-body">
													<h4 class="comment-title">James Charles</h4>
													<span class="post-date">May 17, 2019</span>
													<p>Grursus mal suada faci lisis Lorem ipsum dolarorit more a ametion consectetur is elit. Vesti at bulum nec odio aea the dumm ipsumm.</p>
													<a href="#" class="item-btn">Reply</a>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<div class="leave-comment">
									<div class="widget-section-heading mb--10">
										<h3 class="item-heading">Leave a Comment</h3>
									</div>
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

									<form action="{{ route('messagestore') }}" method="post" class="leave-form-box box-bottom-margin">
                                        @csrf
										<div class="row gutters-20">
											<div class="col-md-6 form-group">
												<input type="text" placeholder="Nom " class="form-control" name="nom" id="leave-name"  >
												<div class="help-block with-errors"></div>
											</div>
											<div class="col-md-6 form-group">
												<input type="email" placeholder="E-mail " class="form-control" name="email" id="leave-email" >
												<div class="help-block with-errors"></div>
											</div>

											<div class="col-12 form-group">
												<textarea placeholder="Votre Commentaire" class="textarea form-control" name="messages" rows="7" cols="20"  ></textarea>
												<div class="help-block with-errors"></div>
											</div>
											<div class="col-12 form-group mb-0">
												<button type="submit"  class="btn-fill btn-gradient">Envoyer Commenter </button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-12 template-sidebar">
							<div class="widget bg-color-light radius-4">
								<div class="widget-search">
									<div class="input-group stylish-input-group">
										<input type="text" class="form-control" placeholder="Search here...">
										<span class="input-group-addon">
	            <button type="submit">SEARCH</button>
	        </span>
									</div>
								</div>
							</div>
							<div class="widget bg-color-light">
								<div class="widget-section-heading heading-layout1">
									<h3 class="item-heading">Recent Posts</h3>
								</div>
								<div class="widget-post">
									<ul>

                                        @foreach ($recent_blog as $recent_blogs)

    										<li class="media">
    											<div class="left-box">
    												<a href="{{route('detailblog',[$recent_blogs->id,$recent_blogs->slug])}}" class="item-figure"><img src="{{asset($recent_blogs->blog_img)}}" style="width:150px;height:100px" alt="Blog Figure"></a>
    											</div>
    											<div class="media-body space-sm">
    												<ul class="entry-meta meta-color-accent justify-content-between">
    													<li><a href="#">{{ $detail->date_creation }}</a></li>
    												</ul>
    												<h3 class="entry-title title-color-dark"><a href="blog-details.html">{{ $recent_blogs->title }}</a></h3>
    											</div>
    										</li>
                                        @endforeach

									</ul>
								</div>
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
