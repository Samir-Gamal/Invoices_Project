@extends('layouts.master')
@section('css')
<!-- Internal Morris Css-->
<link href="{{URL::asset('assets/plugins/morris.js/morris.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Charts</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Sparkline chart</span>
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
					<div class="col-lg-6">
						<div class="card mg-b-20 overflow-hidden">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Line Chart
								</div>
								<p class="mg-b-20">Below is the basic line chart example.</p>
								<div class="d-sm-flex">
									<div>
										<span id="sparkline1">3,4,4,7,5,9,10,6,4,4,7,5,9,10</span>
									</div>
									<div class="mg-sm-r-30 mg-t-20 mg-sm-t-0">
										<span id="sparkline2">3,4,4,7,5,9,10,6,4,4,7,5,9,10</span>
									</div>
								</div>
							</div>
						</div>
					</div><!-- col-->
					<div class="col-lg-6">
						<div class="card mg-b-20 overflow-hidden">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Area Chart
								</div>
								<p class="mg-b-20">Below is the area bar chart example.</p>
								<div class="d-sm-flex">
									<div>
										<span id="sparkline3">7,8,10,7,5,9,10,6,9,4,7,5,9,10,8</span>
									</div>
									<div class="mg-sm-r-30 mg-t-20 mg-sm-t-0">
										<span id="sparkline4">3,4,4,7,5,9,10,6,4,4,7,5,9,10,8</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-lg-6">
						<div class="card mg-b-20 overflow-hidden">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Bar Chart
								</div>
								<p class="mg-b-20">Below is the basic bar chart example.</p>
								<div class="d-sm-flex">
									<div>
										<span id="sparkline5">3,4,4,7,5,9,10,6,4,4,7,5,9,10</span>
									</div>
									<div class="mg-sm-r-30 mg-t-20 mg-sm-t-0">
										<span id="sparkline6">3,4,4,7,5,9,10,6,4,4,7,5,9,10</span>
									</div>
								</div>
							</div>
						</div>
					</div><!-- col-->

					<div class="col-lg-6">
						<div class="card mg-b-20 overflow-hidden">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Stacked Bar Chart
								</div>
								<p class="mg-b-20">Below is the basic stacked bar chart example.</p>
								<div class="d-sm-flex">
									<div>
										<span id="sparkline7">7,8,10,7,5,9,10,6,9,4,7,5,9,10,8</span>
									</div>
									<div class="mg-sm-r-30 mg-t-20 mg-sm-t-0">
										<span id="sparkline8">3,4,4,7,5,9,10,6,4,4,7,5,9,10,8</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-md-12">
						<!-- div -->
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Pie Chart
								</div>
								<p class="mg-b-20">An example of a pie chart with two series.</p>
								<div class="d-flex">
									<div>
										<span id="sparkline9">3,4,4</span>
									</div>
									<div class="mg-r-30">
										<span id="sparkline10">3,4,4,7,5,9</span>
									</div>
								</div>
							</div>
						</div>
					<!-- /div -->
					</div><!-- col-6 -->
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
<!-- Internal Jquery-sparkline js -->
<script src="{{URL::asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{URL::asset('assets/js/chart.sparkline.js')}}"></script>
@endsection