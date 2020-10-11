@extends('layouts.master')
@section('css')
<!-- Internal fullcalendar Css-->
<link href="{{URL::asset('assets/plugins/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex"><h4 class="content-title mb-0 my-auto">Apps</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Calendar</span></div>
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
				<div class="main-content-app pd-b-0  main-content-calendar pt-0">
					<!-- row -->
					<div class="row row-sm">
						<div class="col-lg-12 col-xl-4">
							<div class=" card card--calendar p-0 mg-b-20">
								<div class="p-4 border-bottom">
									<h2 class="main-content-title mg-b-15 tx-16">My Calendar</h2>
									<div class="text-center mx-auto">
										<img src="{{URL::asset('assets/img/media/calendar.png')}}" alt="calendar" class="ht-80p wd-80p">
									</div>
								</div>
								<div class=" card p-4 mb-0 pb-0 pl-4 pr-4 pt-4">
									<div class="fc-datepicker main-datepicker border "></div>
								</div>
								<div class="p-4 pt-0">
									<label class="main-content-label tx-14 tx-bold mg-b-10">Event List</label>
									<nav class="nav main-nav-column main-nav-calendar-event">
										<a class="nav-link" href=""><i class="icon ion-ios-calendar tx-primary"></i>
										<div>
											Calendar Events
										</div></a> <a class="nav-link" href=""><i class="icon ion-ios-calendar tx-success"></i>
										<div>
											Birthday Events
										</div></a> <a class="nav-link" href=""><i class="icon ion-ios-calendar tx-danger"></i>
										<div>
											Holiday Calendar
										</div></a> <a class="nav-link" href=""><i class="icon ion-ios-calendar tx-warning"></i>
										<div>
											Other Calendar
										</div></a> <a class="nav-link exclude" href=""><i class="icon ion-ios-calendar tx-info"></i>
										<div>
											Discovered Events
										</div></a>
									</nav>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-xl-8">
							<div class="main-content-body main-content-body-calendar card p-4">
								<div class="main-calendar" id="calendar"></div>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!-- moomet min js -->
<script src="{{URL::asset('assets/plugins/moment/min/moment.min.js')}}"></script>
<!--Internal  Date picker js -->
<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!--Internal  Fullcalendar js -->
<script src="{{URL::asset('assets/plugins/fullcalendar/fullcalendar.min.js')}}"></script>
<!-- Internal Select2.full.min js -->
<script src="{{URL::asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>
<!--Internal App calendar js -->
<script src="{{URL::asset('assets/js/app-calendar-events.js')}}"></script>
<script src="{{URL::asset('assets/js/app-calendar.js')}}"></script>
@endsection