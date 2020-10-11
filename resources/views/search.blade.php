@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Advanced ui</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Search</span>
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
					<div class="col-sm-12 col-md-12">
						<div class="card custom-card">
							<div class="card-body pb-0">
								<div class="input-group mb-2">
									<input type="text" class="form-control" placeholder="Searching.....">
									<span class="input-group-append">
										<button class="btn ripple btn-primary" type="button">Search</button>
									</span>
								</div>
							</div>
							<div class="card-body pl-0 pr-0 bd-t-0 pt-0">
								<div class="main-content-body-profile mb-3">
									<nav class="nav main-nav-line">
										<a class="nav-link active" data-toggle="tab" href="#tab1">All</a>
										<a class="nav-link" data-toggle="tab" href="#tab2">Images</a>
										<a class="nav-link" data-toggle="tab" href="#tab3">Books</a>
										<a class="nav-link" data-toggle="tab" href="#tab4">News</a>
										<a class="nav-link" data-toggle="tab" href="#tab5">Videos</a>
									</nav>
								</div>
								<p class="text-muted mb-0 pl-3">About 12,546,90000 results (0.56 Seconds)</p>
							</div>
						</div>
						<div class="card custom-card">
							<div class="card-body">
								<div class="mb-2">
									<a href="#" class="h4 card-title">Search the new animations</a>
								</div>
								<h6 class="tx-13">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur eu fugiat nulla pariatur</h6>
								<p class="mb-0 text-muted">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
							</div>
						</div>
						<div class="card custom-card">
							<div class="card-body">
								<div class="mb-2">
									<a href="#" class="h4 card-title">Free Boostrap admin templates</a>
								</div>
								<h6 class="tx-13">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur eu fugiat nulla pariatur</h6>
								<p class="mb-0 text-muted">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
							</div>
						</div>
						<div class="card custom-card">
							<div class="card-body">
								<div class="mb-2">
									<a href="#" class="h4 card-title">20+ download the free templates</a>
								</div>
								<h6 class="tx-13">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur eu fugiat nulla pariatur</h6>
								<p class="mb-0 text-muted">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
							</div>
						</div>
						<div class="card custom-card">
							<div class="card-body">
								<div class="mb-2">
									<a href="#" class="h4 card-title">Customizable admin templates</a>
								</div>
								<h6 class="tx-13">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur eu fugiat nulla pariatur</h6>
								<p class="mb-0 text-muted">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
							</div>
						</div>
						<div class="card custom-card">
							<div class="card-body">
								<div class="mb-2">
									<a href="#" class="h4 card-title">HTML Admin templates</a>
								</div>
								<h6 class="tx-13">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur eu fugiat nulla pariatur</h6>
								<p class="mb-0 text-muted">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
							</div>
						</div>
						<div class="card custom-card">
							<div class="card-body">
								<div class="mb-2">
									<a href="#" class="h4 card-title">Best free admin templates</a>
								</div>
								<h6 class="tx-13">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur eu fugiat nulla pariatur</h6>
								<p class="mb-0 text-muted">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
							</div>
						</div>
						<div class="text-center search float-left">
							<ul class="pagination">
								<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-forward"></i></a></li>
								<li class="page-item active"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-back"></i></a></li>
							</ul>
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
<!-- Internal Rating js-->
<script src="{{URL::asset('assets/plugins/rating/jquery.rating-stars.js')}}"></script>
<script src="{{URL::asset('assets/plugins/rating/jquery.barrating.js')}}"></script>
<script src="{{URL::asset('assets/plugins/rating/ratings.js')}}"></script>
@endsection