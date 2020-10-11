@extends('layouts.master')
@section('css')
<!--- Internal Select2 css-->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Forms</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Form-Layouts</span>
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
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Horizontal Alignment
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="pd-30 pd-sm-40 bg-gray-200">
									<div class="row row-xs">
										<div class="col-md-5">
											<input class="form-control" placeholder="Enter your username" type="text">
										</div>
										<div class="col-md-5 mg-t-10 mg-md-t-0">
											<input class="form-control" placeholder="Enter your password" type="password">
										</div>
										<div class="col-md mt-4 mt-xl-0">
											<button class="btn btn-main-primary btn-block">Sign In</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Vertical Alignment
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="row">
									<div class="col-lg-12">
										<div class="bg-gray-200 p-4">
											<div class="form-group">
												<input class="form-control" placeholder="Enter your username" type="text">
											</div>
											<div class="form-group">
												<input class="form-control" placeholder="Enter your password" type="password">
											</div><button class="btn btn-main-primary pd-x-20">Sign In</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Left Label Alignment
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="pd-30 pd-sm-40 bg-gray-200">
									<div class="row row-xs align-items-center mg-b-20">
										<div class="col-md-4">
											<label class="form-label mg-b-0">Firstname</label>
										</div>
										<div class="col-md-8 mg-t-5 mg-md-t-0">
											<input class="form-control" placeholder="Enter your firstname" type="text">
										</div>
									</div>
									<div class="row row-xs align-items-center mg-b-20">
										<div class="col-md-4">
											<label class="form-label mg-b-0">Lastnane</label>
										</div>
										<div class="col-md-8 mg-t-5 mg-md-t-0">
											<input class="form-control" placeholder="Enter your lastname" type="text">
										</div>
									</div>
									<div class="row row-xs align-items-center mg-b-20">
										<div class="col-md-4">
											<label class="form-label mg-b-0">Email</label>
										</div>
										<div class="col-md-8 mg-t-5 mg-md-t-0">
											<input class="form-control" placeholder="Enter your email" type="email">
										</div>
									</div>
									<button class="btn btn-main-primary pd-x-30 mg-r-5 mg-t-5">Register</button>
									<button class="btn btn-dark pd-x-30 mg-t-5">Cancel</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Form Group Wrapper
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="">
									<div class="row row-xs formgroup-wrapper">
										<div class="col-md-6">
											<div class="main-form-group">
												<label class="form-label">Email</label> <input class="form-control" placeholder="Enter your email" type="email" value="me@sprukotechnologies.com">
											</div><!-- main-form-group -->
										</div>
										<div class="col-md-6 mg-t-20 mg-md-t-0">
											<div class="main-form-group">
												<label class="form-label">Password</label> <input class="form-control" placeholder="Enter your password" type="password" value="thisismypassword">
											</div><!-- main-form-group -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Form in Dropdown
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="main-dropdown-form-demo">
									<div class="mg-t-20">
										<button class="btn btn-main-primary pd-x-20" data-toggle="dropdown">Live Example <i class="icon ion-ios-arrow-down mg-l-5 tx-12"></i></button>
										<div class="dropdown-menu">
											<h6 class="dropdown-title">Subscribe</h6>
											<p class="mg-b-20">Don't miss any update from us.</p>
											<div class="form-group">
												<input class="form-control" placeholder="Enter your fullname" type="text">
											</div>
											<div class="form-group">
												<input class="form-control" placeholder="Enter your email" type="email">
											</div><button class="btn btn-primary btn-block">Subscribe</button>
										</div>
									</div>
								</div><!-- main-dropdown-demo -->
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Form in Modal
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="tx-center pd-y-20 bg-gray-200">
									<a class="btn btn-main-primary" data-target="#modaldemo1" data-toggle="modal" href="">View Live Demo</a>
								</div><!-- pd-y-30 -->
								<div class="modal">
									<div class="modal-dialog wd-xl-400" role="document">
										<div class="modal-content">
											<div class="modal-body pd-sm-40">
												<button aria-label="Close" class="close pos-absolute t-15 r-20 tx-26" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
												<h5 class="modal-title mg-b-5">Create New Account</h5>
												<p class="mg-b-20">Let's get you all setup so you can begin using our app.</p>
												<div class="form-group">
													<input class="form-control" placeholder="Firstname" type="text">
												</div>
												<div class="form-group">
													<input class="form-control" placeholder="Lastname" type="text">
												</div>
												<div class="form-group">
													<input class="form-control" placeholder="Phone" type="text">
												</div>
												<div class="form-group">
													<input class="form-control" placeholder="Email" type="text">
												</div>
												<div class="form-group mg-b-25">
													<label class="ckbox mg-b-5"><input type="checkbox"><span class="tx-13">I agree to <a href="">Terms</a> and <a href="">Privacy Policy</a></span></label> <label class="ckbox"><input checked type="checkbox"><span class="tx-13">Yes, I want to receive email from your newsletter.</span></label>
												</div><button class="btn btn-primary btn-block">Continue</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Payment Details
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="row">
									<div class="col-md-10 col-lg-8 col-xl-6 mx-auto d-block">
										<div class="card card-body pd-20 pd-md-40 border shadow-none">
											<h5 class="card-title mg-b-20">Your Payment Details</h5>
											<div class="form-group">
												<label class="main-content-label tx-11 tx-medium tx-gray-600">Name on Card</label> <input class="form-control" required="" type="text">
											</div>
											<div class="form-group">
												<label class="main-content-label tx-11 tx-medium tx-gray-600">Card Number</label>
												<div class="pos-relative">
													<input class="form-control pd-r-80" required="" type="text">
													<div class="d-flex pos-absolute t-5 r-10"><img alt="" class="wd-30 mg-r-5" src="{{URL::asset('assets/img/visa.png')}}"> <img alt="" class="wd-30" src="{{URL::asset('assets/img/mastercard.png')}}"></div>
												</div>
											</div>
											<div class="form-group">
												<div class="row row-sm">
													<div class="col-sm-9">
														<label class="main-content-label tx-11 tx-medium tx-gray-600">Expiration Date</label>
														<div class="row row-sm">
															<div class="col-sm-7">
																<select class="form-control select2-no-search">
																	<option label="Choose one">
																	</option>
																	<option value="January">
																		January
																	</option>
																	<option value="February">
																		February
																	</option>
																	<option value="March">
																		March
																	</option>
																	<option value="April">
																		April
																	</option>
																	<option value="May">
																		May
																	</option>
																</select>
															</div>
															<div class="col-sm-5 mg-t-10 mg-sm-t-0">
																<select class="form-control select2-no-search">
																	<option label="Choose one">
																	</option>
																	<option value="2018">
																		2018
																	</option>
																	<option value="2019">
																		2019
																	</option>
																	<option value="2020">
																		2020
																	</option>
																	<option value="2021">
																		2021
																	</option>
																	<option value="2022">
																		2022
																	</option>
																</select>
															</div>
														</div>
													</div>
													<div class="col-sm-3 mg-t-20 mg-sm-t-0">
														<label class="main-content-label tx-11 tx-medium tx-gray-600">CVC</label> <input class="form-control" required="" type="text">
													</div>
												</div>
											</div>
											<div class="form-group mg-b-20">
												<label class="ckbox"><input checked type="checkbox"><span class="tx-13">Save my card for future purchases</span></label>
											</div>
											<button class="btn btn-main-primary btn-block">Complete Payment</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!--Internal  Select2 js -->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!-- Form-layouts js -->
<script src="{{URL::asset('assets/js/form-layouts.js')}}"></script>
@endsection