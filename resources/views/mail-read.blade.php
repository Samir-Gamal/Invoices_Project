@extends('layouts.master')
@section('css')
<!-- Internal Select2 css -->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex"><h4 class="content-title mb-0 my-auto">Mail</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Read-Mail</span></div>
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
				<!-- row opened -->
				<div class="row row-sm">
					<!-- Col -->
					<div class="col-lg-4 col-xl-3 col-md-12 col-sm-12">
						<div class="card mg-b-20">
							<div class="main-content-left main-content-left-mail card-body">
								<a class="btn btn-primary btn-compose" href="" id="btnCompose">Compose</a>
								<div class="main-mail-menu">
									<nav class="nav main-nav-column mg-b-20">
										<a class="nav-link" href=""><i class="bx bxs-inbox"></i> Inbox <span>18</span></a>
										<a class="nav-link" href=""><i class="bx bx-star"></i> Starred <span>8</span></a>
										<a class="nav-link" href=""><i class="bx bx-alarm-snooze"></i> Snoozed <span>6</span></a>
										<a class="nav-link" href=""><i class="bx bx-bookmarks"></i> Important <span>15</span></a>
										<a class="nav-link" href=""><i class="bx bx-send"></i> Sent Mail <span>24</span></a>
										<a class="nav-link" href=""><i class="bx bx-edit"></i> Drafts <span>2</span></a>
										<a class="nav-link" href=""><i class="bx bx-message-error"></i> Spam <span>32</span></a>
										<a class="nav-link" href=""><i class="bx bx-message-square-detail"></i> Chats <span>14</span></a>
										<a class="nav-link" href=""><i class="bx bx-folder-open"></i> All Mail <span>652</span></a>
										<a class="nav-link" href=""><i class="bx bx-book-content"></i> Contacts <span>547</span></a>
										<a class="nav-link" href=""><i class="bx bx-trash"></i> Trash <span>365</span></a>
									</nav>
									<label class="main-content-label main-content-label-sm">Settings</label>
									<nav class="nav main-nav-column">
										<a class="nav-link active" href="#">Email Settings</a>
										<a class="nav-link" href="#">Account Information</a>
									</nav>
								</div><!-- main-mail-menu -->
							</div>
						</div>
					</div>
					<!-- /Col -->
					<div class="col-xl-9 col-lg-8 col-md-12 col-sm-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Velit a labore <span class="badge badge-primary">inbox</span></h4>
							</div>
							<div class="card-body">
								<div class="email-media">
									<div class="mt-0 d-sm-flex">
										<img class="ml-2 rounded-circle avatar-xl" src="{{URL::asset('assets/img/faces/6.jpg')}}" alt="avatar">
										<div class="media-body">
											<div class="float-left d-none d-md-flex fs-15">
												<span class="mr-3">Sep 13 , 2019 12:45 pm</span>
												<small class="mr-3"><i class="bx bx-star tx-18" data-toggle="tooltip" title="" data-original-title="Rated"></i></small>
												<small class="mr-3"><i class="bx bx-reply tx-18" data-toggle="tooltip" title="" data-original-title="Reply"></i></small>
												<div class="mr-3">
													<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-horizontal  tx-18" data-toggle="tooltip" title="" data-original-title="View more"></i></a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#">Reply</a>
														<a class="dropdown-item" href="#">Report Spam</a>
														<a class="dropdown-item" href="#">Delete</a>
														<a class="dropdown-item" href="#">Show Original</a>
														<a class="dropdown-item" href="#">Print</a>
														<a class="dropdown-item" href="#">Filter</a>
													</div>
												</div>
											</div>
											<div class="media-title  font-weight-bold mt-3">Alica Nestle <span class="text-muted">( alicnestle@gmail.com )</span></div>
											<p class="mb-0">to Adam Cotter ( adamcotter@gmail.com ) </p>
											<small class="mr-2 d-md-none">Dec 13 , 2018 12:45 pm</small>
											<small class="mr-2 d-md-none"><i class="fe fe-star text-muted" data-toggle="tooltip" title="" data-original-title="Rated"></i></small>
											<small class="mr-2 d-md-none"><i class="fa fa-reply text-muted" data-toggle="tooltip" title="" data-original-title="Reply"></i></small>
										</div>
									</div>
								</div>
								<div class="eamil-body mt-5">
									<h6>Hi Sir/Madam</h6>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
									<p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
									<p> Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it?</p>
									<p class="mb-0">Thanking you Sir/Madam</p>
									<hr>
									<div class="email-attch">
										<div class="float-left">
											<a href="#"><i class="bx bxs-download tx-18" data-toggle="tooltip" title="" data-original-title="Download"></i></a>
										</div>
										<p>3 Attachments<a href="#"> View All Images</a></p>
										<div class="emai-img">
											<div class="d-sm-flex">
												<div class=" m-2">
													<a href="#"><img class="wd-150 mb-2" src="{{URL::asset('assets/img/photos/1.jpg')}}" alt="placeholder image"></a>
													<h6 class="mb-3 mb-lg-0">1.jpg <small class="text-muted">12kb</small></h6>
												</div>
												<div class="m-2">
													<a href="#"><img class="wd-150 mb-2" src="{{URL::asset('assets/img/photos/2.jpg')}}" alt="placeholder image"></a>
													<h6 class="mb-3 mb-lg-0">2.jpg <small class="text-muted">18kb</small></h6>
												</div>
												<div class="m-2">
													<a href="#"><img class="wd-150 mb-2" src="{{URL::asset('assets/img/photos/3.jpg')}}" alt="placeholder image"></a>
													<h6>3.jpg <small class="text-muted">21kb</small></h6>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer text-left">
								<a class="btn btn-primary mt-1 mb-1" href="#"><i class="fa fa-reply"></i> Reply</a>
								<a class="btn btn-info mt-1 mb-1" href="#"><i class="fa fa-share"></i> Forward</a>
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
<!-- Moment js -->
<script src="{{URL::asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<!-- Internal Select2.min js -->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.js')}}"></script>
@endsection