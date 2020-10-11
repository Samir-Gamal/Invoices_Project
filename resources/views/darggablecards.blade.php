@extends('layouts.master')
@section('css')
<!---Internal  Owl Carousel css-->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
<!---Internal  Darggable css-->
<link href="{{URL::asset('assets/plugins/darggable/jquery-ui-darggable.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex"><h4 class="content-title mb-0 my-auto">Apps</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Cards</span></div>
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
				<div class="sortable">
					<div class="row row-sm">
						<div class="col-xl-4 col-sm-12 col-md-6  col-lg-4">
							<div class="card custom-card card-body card-draggable">
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
							</div>
							<div class="card custom-card card-draggable">
								<img alt="Image" class="img-fluid card-img-top" src="{{URL::asset('assets/img/photos/1.jpg')}}">
								<div class="card-body">
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								</div>
							</div>
							<div class="card custom-card card-draggable">
								<div class="card-body">
									<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
								</div>
								<div class="card-footer">
									January, 20, 2017 4:30am
								</div>
							</div>
							<div class="card custom-card  bg-primary tx-white card-draggable">
								<div class="card-body">
									<h5 class="card-title tx-white tx-medium mg-b-10">The Card Title</h5>
									<p class="card-subtitle mg-b-15 tx-white-8">This is the card subtitle</p>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a class="card-link tx-white-7 hover-white" href="#">Card link</a> <a class="card-link tx-white-7 hover-white" href="#">Another link</a>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-sm-12 col-md-6 col-lg-4">
							<div class="card custom-card card-body card-draggable bg-secondary tx-white">
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
							</div>
							<div class="card custom-card card-draggable">
								<div class="card-body">
									<h5 class="card-title tx-dark tx-medium mg-b-10">The Card Title</h5>
									<p class="card-subtitle mg-b-15">This is the card subtitle</p>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a class="card-link" href="#">Card link</a> <a class="card-link" href="#">Another link</a>
								</div>
							</div>
							<div class="card custom-card bg-dark card-body tx-white-8 bg-gray-800 card-draggable">
								Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur.
							</div>
							<div class="card custom-card card-draggable">
								<div class="card-body">
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								</div>
								<img alt="Image" class="img-fluid card-img-top" src="{{URL::asset('assets/img/photos/3.jpg')}}">
							</div>
						</div>
						<div class="col-xl-4 col-sm-12 col-md-12 col-lg-4">
							<div class="card custom-card card-body card-draggable bg-primary tx-white">
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
							</div>
							<div class="card custom-card card-draggable">
								<img alt="Image" class="card-img img-fluid card-img-top" src="{{URL::asset('assets/img/photos/6.jpg')}}">
								<div class="card-img-overlay pd-30 bg-black-4 d-flex flex-column justify-content-center">
									<p class="tx-white tx-medium mg-b-15">The Ghost Town</p>
									<p class="tx-white-7 tx-13">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
									<p class="tx-13 mg-b-0"><a class="tx-white" href="">Read more</a></p>
								</div>
							</div>
							<div class="card custom-card card-draggable">
								<div class="card-header tx-medium">
									Description
								</div>
								<div class="card-body">
									<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
								</div>
							</div>
							<div class="card custom-card card-draggable">
								<img alt="Image" class="img-fluid card-img-top" src="{{URL::asset('assets/img/photos/1.jpg')}}">
								<div class="card-body">
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
<!--Internal  Datepicker js -->
<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!-- Internal Select2 js-->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!--- Internal Darggable js-->
<script src="{{URL::asset('assets/plugins/darggable/jquery-ui-darggable.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/darggable/darggable.js')}}"></script>
@endsection