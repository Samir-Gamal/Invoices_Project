@extends('layouts.master')
@section('css')
<!---Internal  Owl Carousel css-->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
<!--- Internal Timeline css-->
<link href="{{URL::asset('assets/plugins/timeline/css/timeline.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Advanced ui</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Timeline</span>
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
				<!-- Row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="card custom-card">
							<div class="card-header custom-card-header">
								<h6 class="card-title mb-0">Vertical Timeline</h6>
							</div>
							<div class="card-body">
								<div class="vtimeline">
									<div class="timeline-wrapper timeline-wrapper-primary">
										<div class="timeline-badge success"><img class="timeline-image" alt="img" src="{{URL::asset('assets/img/faces/3.jpg')}}"> </div>
										<div class="timeline-panel">
											<div class="timeline-heading">
												<h6 class="timeline-title">Art Ramadani posted a status update</h6>
											</div>
											<div class="timeline-body">
												<p>Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth chief trees but rooms think may.</p>
											</div>
											<div class="timeline-footer d-flex align-items-center flex-wrap">
												<i class="fe fe-heart  text-muted ml-1"></i>
												<span>19</span>
												<span class="mr-auto"><i class="fe fe-calendar text-muted mr-1"></i>19 Oct 2019</span>
											</div>
										</div>
									</div>
									<div class="timeline-wrapper timeline-inverted timeline-wrapper-secondary">
										<div class="timeline-badge"><i class="las la-business-time"></i></div>
										<div class="timeline-panel">
											<div class="timeline-heading">
												<h6 class="timeline-title">Job Meeting</h6>
											</div>
											<div class="timeline-body">
												<p>You have a meeting at Laborator Office Today.</p>
											</div>
											<div class="timeline-footer d-flex align-items-center flex-wrap">
												<i class="fe fe-heart  text-muted ml-1"></i>
												<span>25</span>
												<span class="mr-auto"><i class="fe fe-calendar text-muted mr-1"></i>10th Oct 2019</span>
											</div>
										</div>
									</div>
									<div class="timeline-wrapper timeline-wrapper-info">
										<div class="timeline-badge"><i class="las la-user-circle"></i></div>
										<div class="timeline-panel">
											<div class="timeline-heading">
												<h6 class="timeline-title">Arlind Nushi checked in at New York</h6>
											</div>
											<div class="timeline-body">
												<p>Alpha 5 has arrived just over a month after Alpha 4 with some major feature improvements and a boat load of bug fixes.</p>
											</div>
											<div class="timeline-footer d-flex align-items-center flex-wrap">
												<i class="fe fe-heart  text-muted ml-1"></i>
												<span>19</span>
												<span class="mr-auto"><i class="fe fe-calendar text-muted mr-1"></i>5th Oct 2019</span>
											</div>
										</div>
									</div>
									<div class="timeline-wrapper timeline-inverted timeline-wrapper-danger">
										<div class="timeline-badge success"><img class="timeline-image" alt="img" src="{{URL::asset('assets/img/faces/12.jpg')}}"> </div>
										<div class="timeline-panel">
											<div class="timeline-heading">
												<h6 class="timeline-title">Eroll Maxhuni uploaded 4 new photos to album Summer Trip</h6>
											</div>
											<div class="timeline-body">
												<p>Pianoforte principles our unaffected not for astonished travelling are particular.</p>
												<img src="{{URL::asset('assets/img/media/4.jpg')}}" class="mb-3" alt="img">
											</div>
											<div class="timeline-footer d-flex align-items-center flex-wrap">
												<i class="fe fe-heart  text-muted ml-1"></i>
												<span>19</span>
												<span class="mr-auto"><i class="fe fe-calendar text-muted mr-1"></i>27th Sep 2017</span>
											</div>
										</div>
									</div>
									<div class="timeline-wrapper timeline-wrapper-success">
										<div class="timeline-badge"><i class="las la-envelope-open-text"></i></div>
										<div class="timeline-panel">
											<div class="timeline-heading">
												<h6 class="timeline-title">Support Team sent you an email</h6>
											</div>
											<div class="timeline-body">
												<p>Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle quora plaxo ideeli hulu weebly balihoo....</p>
												<a class="btn ripple btn-primary text-white mb-3">Read more</a>
											</div>
											<div class="timeline-footer d-flex align-items-center flex-wrap">
												<i class="fe fe-heart  text-muted ml-1"></i>
												<span>25</span>
												<span class="mr-auto"><i class="fe fe-calendar text-muted mr-1"></i>25th Sep 2017</span>
											</div>
										</div>
									</div>
									<div class="timeline-wrapper timeline-inverted timeline-wrapper-warning">
										<div class="timeline-badge success"><img class="timeline-image" alt="img" src="{{URL::asset('assets/img/faces/15.jpg')}}"> </div>
										<div class="timeline-panel">
											<div class="timeline-heading">
												<h6 class="timeline-title">Mr. Doe shared a video</h6>
											</div>
											<div class="timeline-body">
												<div class="embed-responsive embed-responsive-16by9 mb-3">
													<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/XZmGGAbHqa0?rel=0&amp;controls=0&amp;showinfo=0"
													 allowfullscreen></iframe>
												</div>
											</div>
											<div class="timeline-footer d-flex align-items-center flex-wrap">
												<i class="fe fe-heart  text-muted ml-1"></i>
												<span>32</span>
												<span class="mr-auto"><i class="fe fe-calendar text-muted mr-1"></i>19th Sep 2017</span>
											</div>
										</div>
									</div>
									<div class="timeline-wrapper timeline-wrapper-dark">
										<div class="timeline-badge"><i class="las la-check-circle"></i></div>
										<div class="timeline-panel">
											<div class="timeline-heading">
												<h6 class="timeline-title">Sarah Young accepted your friend request</h6>
											</div>
											<div class="timeline-body">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet cupiditate, delectus deserunt doloribus earum eveniet explicabo fuga iste magni maxime</p>
											</div>
											<div class="timeline-footer d-flex align-items-center flex-wrap">
												<i class="fe fe-heart text-muted ml-1"></i>
												<span>26</span>
												<span class="mr-auto"><i class="fe fe-calendar text-muted mr-1"></i>15th Sep 2017</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Row -->

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
@endsection