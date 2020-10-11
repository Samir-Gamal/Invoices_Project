@extends('layouts.master')
@section('css')
<!---Internal  Owl Carousel css-->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
<!---Internal  Multislider css-->
<link href="{{URL::asset('assets/plugins/multislider/multislider.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Advanced ui</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Carousel</span>
						</div>
					</div>
					<div class="d-flex my-xl-auto right-content">
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-info btn-icon ml-2"><i class="mdi mdi-filter-variant"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-danger btn-icon ml-2"><i class="mdi mdi-star"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-warning  btn-icon ml-2"><i class="mdi mdi-refresh"></i></button>
						</div>
						<div class="mb-3 mb-xl-0">
							<div class="btn-group dropdown">
								<button type="button" class="btn btn-primary">14 Aug 2019</button>
								<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="sr-only">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuDate" data-x-placement="bottom-end">
									<a class="dropdown-item" href="#">2015</a>
									<a class="dropdown-item" href="#">2016</a>
									<a class="dropdown-item" href="#">2017</a>
									<a class="dropdown-item" href="#">2018</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row row-sm">
					<div class="col-lg-6 col-md-6">
						<div class="card custom-card">
							<div class="card-body ht-100p">
								<div>
									<h6 class="card-title mb-1">Static Carousel</h6>
									<p class="text-muted card-sub-title">Here’s a carousel with slides only.</p>
								</div>
								<div class="">
									<div class="carousel slide" data-ride="carousel" id="carouselExampleSlidesOnly">
										<div class="carousel-inner">
											<div class="carousel-item active">
												<img alt="img" class="d-block w-100" src="{{URL::asset('assets/img/photos/8.jpg')}}">
											</div>
											<div class="carousel-item">
												<img alt="img" class="d-block w-100" src="{{URL::asset('assets/img/photos/9.jpg')}}">
											</div>
											<div class="carousel-item">
												<img alt="img" class="d-block w-100" src="{{URL::asset('assets/img/photos/10.jpg')}}">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="card custom-card">
							<div class="card-body ht-100p">
								<div>
									<h6 class="card-title mb-1">With Controls</h6>
									<p class="text-muted card-sub-title">Adding in the previous and next controls.</p>
								</div>
								<div>
									<div class="carousel slide" data-ride="carousel" id="carouselExample2">
										<div class="carousel-inner">
											<div class="carousel-item active">
												<img alt="img" class="d-block w-100" src="{{URL::asset('assets/img/photos/18.jpg')}}">
											</div>
											<div class="carousel-item">
												<img alt="img" class="d-block w-100" src="{{URL::asset('assets/img/photos/12.jpg')}}">
											</div>
											<div class="carousel-item">
												<img alt="img" class="d-block w-100" src="{{URL::asset('assets/img/photos/13.jpg')}}">
											</div>
										</div>
										<a class="carousel-control-prev" href="#carouselExample2" role="button" data-slide="prev">
											<i class="fa fa-angle-left fs-30" aria-hidden="true"></i>
										</a>
										<a class="carousel-control-next" href="#carouselExample2" role="button" data-slide="next">
											<i class="fa fa-angle-right fs-30" aria-hidden="true"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="card custom-card">
							<div class="card-body ht-100p">
								<div>
									<h6 class="card-title mb-1">With Indicator</h6>
									<p class="text-muted card-sub-title">You can also add the indicators to the carousel, alongside the controls, too align any where</p>
								</div>
								<div>
									<div class="carousel slide" data-ride="carousel" id="carouselExample3">
										<ol class="carousel-indicators">
											<li class="active" data-slide-to="0" data-target="#carouselExample3"></li>
											<li data-slide-to="1" data-target="#carouselExample3"></li>
											<li data-slide-to="2" data-target="#carouselExample3"></li>
										</ol>
										<div class="carousel-inner">
											<div class="carousel-item active">
												<img alt="img" class="d-block w-100" src="{{URL::asset('assets/img/photos/14.jpg')}}">
											</div>
											<div class="carousel-item">
												<img alt="img" class="d-block w-100" src="{{URL::asset('assets/img/photos/15.jpg')}}">
											</div>
											<div class="carousel-item">
												<img alt="img" class="d-block w-100" src="{{URL::asset('assets/img/photos/16.jpg')}}">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="card custom-card">
							<div class="card-body ht-100p">
								<div>
									<h6 class="card-title mb-1">With Caption</h6>
									<p class="text-muted card-sub-title">Add captions to your slides easily with the <code>.carousel-caption</code> element within any <code>.carousel-item.</code></p>
								</div>
								<div>
									<div class="carousel slide" data-ride="carousel" id="carouselExample4">
										<ol class="carousel-indicators">
											<li class="active" data-slide-to="0" data-target="#carouselExample4"></li>
											<li data-slide-to="1" data-target="#carouselExample4"></li>
											<li data-slide-to="2" data-target="#carouselExample4"></li>
										</ol>
										<div class="carousel-inner bg-dark">
											<div class="carousel-item active">
												<img alt="img" class="d-block w-100 op-3" src="{{URL::asset('assets/img/photos/17.jpg')}}">
												<div class="carousel-caption d-none d-md-block">
													<h5>First Slide</h5>
													<p class="tx-14">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
												</div>
											</div>
											<div class="carousel-item">
												<img alt="img" class="d-block w-100 op-3" src="{{URL::asset('assets/img/photos/18.jpg')}}">
												<div class="carousel-caption d-none d-md-block">
													<h5>Second Slide</h5>
													<p class="tx-14">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
												</div>
											</div>
											<div class="carousel-item">
												<img alt="img" class="d-block w-100 op-3" src="{{URL::asset('assets/img/photos/19.jpg')}}">
												<div class="carousel-caption d-none d-md-block">
													<h5>Third Slide</h5>
													<p class="tx-14">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="card custom-card">
							<div class="card-body ht-100p">
								<div>
									<h6 class="card-title mb-1">Fade Animate Carousel</h6>
									<p class="text-muted card-sub-title">Add fade transition to your carousel to animate slides with a fade transition instead of a slide.</p>
								</div>
								<div>
									<div class="carousel slide carousel-fade" data-ride="carousel" id="carouselExample5">
										<ol class="carousel-indicators">
											<li class="active" data-slide-to="0" data-target="#carouselExample5"></li>
											<li data-slide-to="1" data-target="#carouselExample5"></li>
											<li data-slide-to="2" data-target="#carouselExample5"></li>
										</ol>
										<div class="carousel-inner bg-dark">
											<div class="carousel-item active">
												<img alt="img" class="d-block w-100" src="{{URL::asset('assets/img/photos/20.jpg')}}">
											</div>
											<div class="carousel-item">
												<img alt="img" class="d-block w-100" src="{{URL::asset('assets/img/photos/1.jpg')}}">
											</div>
											<div class="carousel-item">
												<img alt="img" class="d-block w-100" src="{{URL::asset('assets/img/photos/2.jpg')}}">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="card custom-card">
							<div class="card-body ht-100p">
								<div>
									<h6 class="card-title mb-1">Carousel With Thumbnails</h6>
									<p class="text-muted card-sub-title">The Carousel controls the Thumbnails easily design the images with thumbnails</p>
								</div>
								<div class="carousel-slider">
									<div id="carousel" class="carousel slide" data-ride="carousel">
										<div class="carousel-inner">
											<div class="carousel-item active"><img src="{{URL::asset('assets/img/photos/1.jpg')}}" alt="img"> </div>
											<div class="carousel-item"> <img src="{{URL::asset('assets/img/photos/2.jpg')}}" alt="img"> </div>
											<div class="carousel-item"> <img src="{{URL::asset('assets/img/photos/3.jpg')}}" alt="img"> </div>
											<div class="carousel-item"> <img src="{{URL::asset('assets/img/photos/4.jpg')}}" alt="img"> </div>
											<div class="carousel-item"> <img src="{{URL::asset('assets/img/photos/5.jpg')}}" alt="img"> </div>
											<div class="carousel-item"> <img src="{{URL::asset('assets/img/photos/6.jpg')}}" alt="img"> </div>
											<div class="carousel-item"> <img src="{{URL::asset('assets/img/photos/7.jpg')}}" alt="img"> </div>
											<div class="carousel-item"> <img src="{{URL::asset('assets/img/photos/8.jpg')}}" alt="img"> </div>
										</div>
										<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
											<i class="fa fa-angle-left fs-30" aria-hidden="true"></i>
										</a>
										<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
											<i class="fa fa-angle-right fs-30" aria-hidden="true"></i>
										</a>
									</div>
									<div class="clearfix">
										<div id="thumbcarousel" class="carousel slide" data-interval="false">
											<div class="carousel-inner">
												<div class="carousel-item active">
													<div data-target="#carousel" data-slide-to="0" class="thumb"><img src="{{URL::asset('assets/img/photos/1.jpg')}}" alt="img"></div>
													<div data-target="#carousel" data-slide-to="1" class="thumb"><img src="{{URL::asset('assets/img/photos/2.jpg')}}" alt="img"></div>
													<div data-target="#carousel" data-slide-to="2" class="thumb"><img src="{{URL::asset('assets/img/photos/3.jpg')}}" alt="img"></div>
													<div data-target="#carousel" data-slide-to="3" class="thumb"><img src="{{URL::asset('assets/img/photos/4.jpg')}}" alt="img"></div>
												</div>
												<div class="carousel-item">
													<div data-target="#carousel" data-slide-to="4" class="thumb"><img src="{{URL::asset('assets/img/photos/5.jpg')}}" alt="img"></div>
													<div data-target="#carousel" data-slide-to="5" class="thumb"><img src="{{URL::asset('assets/img/photos/6.jpg')}}" alt="img"></div>
													<div data-target="#carousel" data-slide-to="6" class="thumb"><img src="{{URL::asset('assets/img/photos/7.jpg')}}" alt="img"></div>
													<div data-target="#carousel" data-slide-to="7" class="thumb"><img src="{{URL::asset('assets/img/photos/8.jpg')}}" alt="img"></div>
												</div>
											</div>
											<a class="carousel-control-prev" href="#thumbcarousel" role="button" data-slide="prev">
												<i class="fa fa-angle-left fs-20" aria-hidden="true"></i>
											</a>
											<a class="carousel-control-next" href="#thumbcarousel" role="button" data-slide="next">
												<i class="fa fa-angle-right fs-20" aria-hidden="true"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="card custom-card">
							<div class="card-body ht-100p">
								<div>
									<h6 class="card-title mb-1">Multi Slider</h6>
									<p class="text-muted card-sub-title">Multislider is a jQuery powered slideshow that specializes in showing more than one slide at a time. There's no need to find messy CSS and JS work arounds for other single-slide solutions. Multislider allows the developer to focus fully on each individual slide as it's own component, and then displays as many slides as you decide in a manner that is fluid, consistent, and dymanic.</p>
								</div>
								<div id="basicSlider">
									<div class="MS-content">
										<div class="item">
											<a href="#" target="_blank"> <img src="{{URL::asset('assets/img/photos/1.jpg')}}" alt="" /> </a>
										</div>
										<div class="item">
											<a href="#" target="_blank"> <img src="{{URL::asset('assets/img/photos/2.jpg')}}" alt="" /> </a>
										</div>
										<div class="item">
											<a href="#" target="_blank"> <img src="{{URL::asset('assets/img/photos/3.jpg')}}" alt="" /> </a>
										</div>
										<div class="item">
											<a href="#" target="_blank"> <img src="{{URL::asset('assets/img/photos/4.jpg')}}" alt="" /> </a>
										</div>
										<div class="item">
											<a href="#" target="_blank"> <img src="{{URL::asset('assets/img/photos/5.jpg')}}" alt="" /> </a>
										</div>
										<div class="item">
											<a href="#" target="_blank"> <img src="{{URL::asset('assets/img/photos/6.jpg')}}" alt="" /> </a>
										</div>
										<div class="item">
											<a href="#" target="_blank"> <img src="{{URL::asset('assets/img/photos/7.jpg')}}" alt="" /> </a>
										</div>
										<div class="item">
											<a href="#" target="_blank"> <img src="{{URL::asset('assets/img/photos/8.jpg')}}" alt="" /> </a>
										</div>
										<div class="item">
											<a href="#" target="_blank"> <img src="{{URL::asset('assets/img/photos/9.jpg')}}" alt="" /> </a>
										</div>
										<div class="item">
											<a href="#" target="_blank"> <img src="{{URL::asset('assets/img/photos/10.jpg')}}" alt="" /> </a>
										</div>
										<div class="item">
											<a href="#" target="_blank"> <img src="{{URL::asset('assets/img/photos/11.jpg')}}" alt="" /> </a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!--Internal  Datepicker js -->
<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!-- Internal Select2 js-->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!-- Internal Owl Carousel js-->
<script src="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.js')}}"></script>
<!---Internal  Multislider js-->
<script src="{{URL::asset('assets/plugins/multislider/multislider.js')}}"></script>
<script src="{{URL::asset('assets/js/carousel.js')}}"></script>
@endsection