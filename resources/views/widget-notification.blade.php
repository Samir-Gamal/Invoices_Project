@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Apps</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Widget-Notifications</span>
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
					<div class="col-lg-4 col-md-4">
						<!--Page Widget Error-->
						<div class="card bd-0 mg-b-20">
							<div class="card-body bd bd-success text-success text-center">
								<div class="success-widget">
									<h3>Success!</h3>
									<p class="mt-3 mb-0">Thanks so much for your message. We check e-mail frequently and will try our best to respond to your inquiry.</p>
								</div>
							</div>
						</div>
						<!--Page Widget Error-->
					</div>
					<div class="col-lg-4 col-md-4">
						<!--Page Widget Error-->
						<div class="card bd-0 mg-b-20">
							<div class="card-body bd bd-danger text-danger text-center">
								<div class="danger-widget">
									<h3>Danger!</h3>
									<p class="mt-3 mb-0">Thanks so much for your message. We check e-mail frequently and will try our best to respond to your inquiry.</p>
								</div>
							</div>
						</div>
						<!--Page Widget Error-->
					</div>
					<div class="col-lg-4 col-md-4">
						<!--Page Widget Error-->
						<div class="card bd-0 mg-b-20">
							<div class="card-body bd bd-warning text-warning text-center">
								<div class="warning-widget">
									<h3>Warning!</h3>
									<p class="mt-3 mb-0">Thanks so much for your message. We check e-mail frequently and will try our best to respond to your inquiry.</p>
								</div>
							</div>
						</div>
						<!--Page Widget Error-->
					</div>
				</div>

				<!-- row -->
				<div class="row row-sm">
					<div class="col-lg-4 col-md-4">
						<!--Page Widget Error-->
						<div class="card bd-0 mg-b-20">
							<div class="card-body text-danger">
								<div class="main-error-wrapper">
									<i class="si si-close mg-b-20 tx-50"></i>
									<h4 class="mg-b-20">Data Not Found.</h4>
									<a class="btn btn-outline-danger btn-sm" href="">Click to view details</a>
								</div>
							</div>
						</div>
						<!--Page Widget Error-->
					</div>
					<div class="col-lg-4 col-md-4">
						<!--Page Widget Error-->
						<div class="card bd-0 mg-b-20">
							<div class="card-body text-success">
								<div class="main-error-wrapper">
									<i class="si si-check mg-b-20 tx-50"></i>
									<h4 class="mg-b-20">Submitted Successfully</h4>
									<a class="btn btn-outline-success btn-sm" href="">Click to view details</a>
								</div>
							</div>
						</div>
						<!--Page Widget Error-->
					</div>
					<div class="col-lg-4 col-md-4">
						<!--Page Widget Error-->
						<div class="card bd-0 mg-b-20">
							<div class="card-body text-info">
								<div class="main-error-wrapper">
									<i class="si si-info mg-b-20 tx-50"></i>
									<h4 class="mg-b-20">Info Alert</h4>
									<a class="btn btn-outline-info btn-sm" href="">Click to view details</a>
								</div>
							</div>
						</div>
						<!--Page Widget Error-->
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-lg-4 col-md-4">
						<!--Page Widget Error-->
						<div class="card bd-0 mg-b-20 bg-danger">
							<div class="card-body text-white">
								<div class="main-error-wrapper">
									<i class="si si-close mg-b-20 tx-50"></i>
									<h4 class="mg-b-0">Data Not Found.</h4>
								</div>
							</div>
						</div>
						<!--Page Widget Error-->
					</div>
					<div class="col-lg-4 col-md-4">
						<!--Page Widget Error-->
						<div class="card bd-0 mg-b-20 bg-success">
							<div class="card-body text-white">
								<div class="main-error-wrapper">
									<i class="si si-check mg-b-20 tx-50"></i>
									<h4 class="mg-b-0">Submitted Successfully</h4>
								</div>
							</div>
						</div>
						<!--Page Widget Error-->
					</div>
					<div class="col-lg-4 col-md-4">
						<!--Page Widget Error-->
						<div class="card bd-0 mg-b-20 bg-info">
							<div class="card-body text-white">
								<div class="main-error-wrapper">
									<i class="si si-info mg-b-20 tx-50"></i>
									<h4 class="mg-b-0">Info Alert</h4>
								</div>
							</div>
						</div>
						<!--Page Widget Error-->
					</div>
				</div>
				<!-- row -->

				<!-- /row -->
				<div class="row row-sm">
					<div class="col-lg-4 col-md-4">
						<!--Page Widget Error-->
						<div class="card bd-0 mg-b-20 bg-danger-transparent alert p-0">
							<div class="card-header text-danger font-weight-bold">
								<i class="far fa-times-circle"></i> Error Data
								<button aria-label="Close" class="close" data-dismiss="alert" type="button"><span aria-hidden="true">×</span></button>
							</div>
							<div class="card-body text-danger">
								<strong>Oh snap!</strong> Change a few things up and try submitting again.
							</div>
						</div>
						<!--Page Widget Error-->
					</div>
					<div class="col-lg-4 col-md-4">
						<!--Page Widget Error-->
						<div class="card bd-0 mg-b-20 bg-success-transparent alert p-0">
							<div class="card-header text-success font-weight-bold">
								<i class="far fa-check-circle"></i> Success Data
								<button aria-label="Close" class="close" data-dismiss="alert" type="button"><span aria-hidden="true">×</span></button>
							</div>
							<div class="card-body text-success">
								<strong>Well done!</strong> You successfully read this important alert message.
							</div>
						</div>
						<!--Page Widget Error-->
					</div>
					<div class="col-lg-4 col-md-4">
						<!--Page Widget Error-->
						<div class="card bd-0 mg-b-20 bg-info-transparent alert p-0">
							<div class="card-header text-info font-weight-bold">
								<i class="far fa-question-circle"></i> Info Data
								<button aria-label="Close" class="close" data-dismiss="alert" type="button"><span aria-hidden="true">×</span></button>
							</div>
							<div class="card-body text-info">
								<strong>Heads up!</strong> This alert needs your attention, but it's not super important.
							</div>
						</div>
						<!--Page Widget Error-->
					</div>
				</div>
				<!-- row -->

				<!-- /row -->
				<div class="row row-sm">
					<div class="col-lg-4 col-md-4">
						<div class="card mg-b-20 text-center">
							<div class="card-body">
								<img src="{{URL::asset('assets/img/svgicons/no-data.svg')}}" alt="" class="wd-35p">
								<h5 class="mg-b-10 mg-t-15 tx-18">Items Not Found</h5>
								<a href="#" class="text-muted">Check The Settings</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="card mg-b-20 text-center">
							<div class="card-body">
								<img src="{{URL::asset('assets/img/svgicons/note_taking.svg')}}" alt="" class="wd-35p">
								<h5 class="mg-b-10 mg-t-15 tx-18">Its Empty In Here</h5>
								<a href="#" class="text-muted">Check The Settings</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="card mg-b-20 text-center">
							<div class="card-body">
								<img src="{{URL::asset('assets/img/svgicons/imac.svg')}}" alt="" class="wd-40p">
								<h5 class="mg-b-10 mg-t-15 tx-18">No Site Selected</h5>
								<a href="#" class="text-muted">Check The Settings</a>
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
<!-- Internal Chart js -->
<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
@endsection