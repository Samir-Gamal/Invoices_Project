@extends('layouts.master')
@section('css')
<!--Internal  Font Awesome -->
<link href="{{URL::asset('assets/plugins/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
<!--Internal   Notify -->
<link href="{{URL::asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>
<!--Internal  treeview -->
<link href="{{URL::asset('assets/plugins/treeview/treeview.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Apps</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Notifications</span>
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
					<div class="col-md-12">
						<!-- div -->
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Position Notification
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="example border-0 p-0">
									<div class="btn-list">
										<button onclick="not1()" class="btn btn-light mg-t-5">Top</button>
										<button onclick="not2()" class="btn btn-light mg-t-5">Center</button>
										<button onclick="not3()" class="btn btn-light mg-t-5">Left</button>
										<button onclick="not4()" class="btn btn-light mg-t-5">Top Fullwidth</button>
										<button onclick="not5()" class="btn btn-light mg-t-5">Right</button>
										<button onclick="not51()" class="btn btn-light mg-t-5">Bottom</button>
									</div>
								</div>
							</div>
						</div>
						<!-- div -->

						<!-- div -->
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Notification Types
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="example border-0 p-0">
									<div class="btn-list">
										<button onclick="not6()" class="btn btn-primary mg-t-5">Primary</button>
										<button onclick="not7()" class="btn btn-success mg-t-5">Success</button>
										<button onclick="not8()" class="btn btn-danger mg-t-5">Error</button>
										<button onclick="not9()" class="btn btn-warning mg-t-5">Warning</button>
										<button onclick="not10()" class="btn btn-info mg-t-5">Info</button>
										<button onclick="not11()" class="btn btn-danger mg-t-5">Fixed Error</button>
										<button onclick="not12()" class="btn btn-dark mg-t-5">Opacity</button>
									</div>
								</div>
							</div>
						</div>
						<!-- div -->

						<!-- div -->
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Notification Styles
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="example border-0 p-0">
									<div class="btn-list">
										<button onclick="not13()" class="btn btn-primary mg-t-5">Mutiple lines</button>
										<button onclick="not14()" class="btn btn-primary mg-t-5">Fade Animation</button>
										<button onclick="not15()" class="btn btn-primary mg-t-5">Customize Background</button>
										<button onclick="not16()" class="btn btn-primary mg-t-5">Timeout</button>
									</div>
								</div>
							</div>
						</div>
						<!-- div -->

						<!-- div -->
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Call Back Notification
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="example border-0 p-0">
									<div class="btn-list">
										<button onclick="not17()" class="btn btn-primary">Call Back</button>
										<button onclick="not18()" class="btn btn-primary">Call Back 2</button>
									</div>
								</div>
							</div>
						</div>
						<!-- div -->
					</div>
				</div>
			</div>
		</div>
		<!--Main Content-->
@endsection
@section('js')
<!-- Internal Treeview js -->
<script src="{{URL::asset('assets/plugins/treeview/treeview.js')}}"></script>
<!--Internal  Notify js -->
<script src="{{URL::asset('assets/plugins/notify/js/notifIt.js')}}"></script>
<script src="{{URL::asset('assets/plugins/notify/js/notifit-custom.js')}}"></script>
@endsection