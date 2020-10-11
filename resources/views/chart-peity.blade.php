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
							<h4 class="content-title mb-0 my-auto">Charts</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Peity-chart</span>
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
					<div class="col-lg-12">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Line Chart
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="d-sm-flex">
									<div>
										<span class="peity-line" data-peity='{ "fill": false, "stroke": "#285cf7", "height": 70, "width": 200 }'>10,4,4,7,5,9,10,1,4,4,7,5,9,10</span>
									</div>
									<div class="mg-sm-l-30 mg-t-20 mg-sm-t-0">
										<span class="peity-line" data-peity='{ "fill": false, "stroke": "#f10075", "height": 70, "width": 200 }'>-10,-4,-4,-7,-5,-9,-10,-1,-4,-4,-7,-5,-9,-10</span>
									</div>
								</div>
							</div>
						</div>
					</div><!-- col-->
					<div class="col-lg-12">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Area Chart
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="d-sm-flex">
									<div>
										<span class="peity-line" data-peity='{ "fill": "rgba(86, 70, 255,.2)", "stroke": "#285cf7", "height": 70, "width": 200 }'>10,4,4,7,5,9,10,1,4,4,7,5,9,10</span>
									</div>
									<div class="mg-sm-r-30 mg-t-20 mg-sm-t-0">
										<span class="peity-line" data-peity='{ "fill": "rgba(241,0,117,.2)", "stroke": "#f10075", "height": 70, "width": 200 }'>-10,-4,-4,-7,-5,-9,-10,-1,-4,-4,-7,-5,-9,-10</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-lg-12">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Bar Chart
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="d-lg-flex">
									<div class="mg-r-10 mg-t-10 wd-250 border pd-x-20 pd-t-20 bg-light">
										<span class="peity-bar" data-peity='{ "fill": ["#285cf7"], "height": 70, "width": 200 }'>10,4,4,7,5,9,10,5,4,4,7,5,9,10</span>
									</div>
									<div class="mg-r-10 mg-t-10 wd-250 border pd-x-20 pd-t-20 bg-light">
										<span class="peity-bar" data-peity='{ "fill": ["#285cf7","#560bd0"], "height": 70, "width": 200 }'>10,4,4,7,5,9,10,5,4,4,7,5,9,10</span>
									</div>
								</div>
								<div class="d-lg-flex">
									<div class="mg-r-10 mg-t-10 wd-250 border pd-x-20 pd-b-20 bg-light">
										<span class="peity-bar" data-peity='{ "fill": ["#560bd0"], "height": 70, "width": 200 }'>-10,-12,-12,-7,-5,-9,-10,-5,-13,-12,-7,-5,-9,-10</span>
									</div>
									<div class="mg-r-10 mg-t-10 wd-250 border pd-x-20 pd-b-20 bg-light">
										<span class="peity-bar" data-peity='{ "fill": ["#560bd0","#f10075"], "height": 70, "width": 200 }'>-10,-12,-12,-7,-5,-9,-10,-5,-13,-12,-7,-5,-9,-10</span>
									</div>
									<div class="mg-r-10 mg-t-10 wd-250 border pd-x-20 pd-y-10 bg-light">
										<span class="peity-bar" data-peity='{ "fill": ["#285cf7","#f10075"], "height": 70, "width": 200 }'>10,-4,4,5,-7,5,-9,-5,10,-5,4,-4,7,-5,9,-10,9,10</span>
									</div>
								</div>
							</div>
						</div>
					</div><!-- col-->
					<div class="col-lg-12">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Pie Chart
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="d-md-flex">
									<div class="mg-r-20 mg-t-10">
										<span class="peity-pie" data-peity='{ "fill": ["#285cf7", "#ecf0fa"], "height": 70, "width": 70 }'>1/5</span>
									</div>
									<div class="mg-r-20 mg-t-10">
										<span class="peity-pie" data-peity='{ "fill": ["#8500ff", "#ecf0fa"], "height": 70, "width": 70 }'>226/360</span>
									</div>
									<div class="mg-r-20 mg-t-10">
										<span class="peity-pie" data-peity='{ "fill": ["#f10075", "#ecf0fa"], "height": 70, "width": 70 }'>0.52/1.561</span>
									</div>
									<div class="mg-r-20 mg-t-10">
										<span class="peity-pie" data-peity='{ "fill": ["#3bb001", "#ecf0fa"], "height": 70, "width": 70 }'>1,4</span>
									</div>
									<div class="mg-r-20 mg-t-10">
										<span class="peity-pie" data-peity='{ "fill": ["#dc3545", "#ecf0fa"], "height": 70, "width": 70 }'>226,134</span>
									</div>
									<div class="mg-r-20 mg-t-10">
										<span class="peity-pie" data-peity='{ "fill": ["#3db4ec", "#ecf0fa"], "height": 70, "width": 70 }'>0.52,1.041</span>
									</div>
									<div class="mg-r-20 mg-t-10">
										<span class="peity-pie" data-peity='{ "fill": ["#285cf7","#8500ff","#f10075"], "height": 70, "width": 70 }'>10,4,4</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Donut Chart
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="d-md-flex">
									<div class="mg-r-20 mg-t-10">
										<span class="peity-donut" data-peity='{ "fill": ["#285cf7", "#ecf0fa"], "height": 70, "width": 70 }'>1/5</span>
									</div>
									<div class="mg-r-20 mg-t-10">
										<span class="peity-donut" data-peity='{ "fill": ["#8500ff", "#ecf0fa"], "height": 70, "width": 70 }'>226/360</span>
									</div>
									<div class="mg-r-20 mg-t-10">
										<span class="peity-donut" data-peity='{ "fill": ["#f10075", "#ecf0fa"], "height": 70, "width": 70 }'>0.52/1.561</span>
									</div>
									<div class="mg-r-20 mg-t-10">
										<span class="peity-donut" data-peity='{ "fill": ["#3bb001", "#ecf0fa"], "height": 70, "width": 70 }'>1,4</span>
									</div>
									<div class="mg-r-20 mg-t-10">
										<span class="peity-donut" data-peity='{ "fill": ["#dc3545", "#ecf0fa"], "height": 70, "width": 70 }'>226,134</span>
									</div>
									<div class="mg-r-20 mg-t-10">
										<span class="peity-donut" data-peity='{ "fill": ["#3db4ec", "#ecf0fa"], "height": 70, "width": 70 }'>0.52,1.041</span>
									</div>
									<div class="mg-r-20 mg-t-10">
										<span class="peity-donut" data-peity='{ "fill": ["#285cf7","#8500ff","#f10075"], "height": 70, "width": 70 }'>10,4,4</span>
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
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Data Attributes
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="d-md-flex">
									<div class="mg-r-20 mg-t-10">
										<div class="">
											<p class="data-attributes">
												<span data-peity='{ "fill": ["#285cf7", "#ecf0fa"], "height": 70, "width": 70, "innerRadius": 10, "radius": 40 }'>1/7</span>
											</p>
										</div>
									</div>
									<div class="mg-r-20 mg-t-10">
										<div class="">
											<p class="data-attributes">
												<span data-peity='{ "fill": ["#8500ff", "#ecf0fa"],"height": 70, "width": 70, "innerRadius": 14, "radius": 36 }'>2/7</span>
											</p>
										</div>
									</div>
									<div class="mg-r-20 mg-t-10">
										<div class="">
											<p class="data-attributes">
												<span data-peity='{ "fill": ["#f10075", "#ecf0fa"], "height": 70, "width": 70, "innerRadius": 16, "radius": 32 }'>3/7</span>
											</p>
										</div>
									</div>
									<div class="mg-r-20 mg-t-10">
										<div class="">
											<p class="data-attributes">
												<span data-peity='{ "fill": ["#3bb001", "#ecf0fa"], "height": 70, "width": 70, "innerRadius": 18, "radius": 28 }'>4/7</span>
											</p>
										</div>
									</div>
									<div class="mg-r-20 mg-t-10">
										<div class="">
											<p class="data-attributes">
												<span data-peity='{ "fill": ["#dc3545", "#ecf0fa"], "height": 70, "width": 70, "innerRadius": 20, "radius": 24 }'>5/7</span>
											</p>
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
									Updating Charts
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="wd-200">
									<span class="updating-chart" data-peity='{ "fill": ["rgba(86, 70, 255,.4)"],"stroke":["#285cf7]}'>5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2</span>
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
<!-- Internal jQuery Peity js -->
<script src="{{URL::asset('assets/plugins/peity/jquery.peity.min.js')}}"></script>
<!-- Internal Select2 js-->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!-- Internal Peity js -->
<script src="{{URL::asset('assets/js/chart.peity.js')}}"></script>
@endsection