@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Advanced ui</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Blog</span>
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
					<div class="col-xl-4 col-md-4">
						<div class="card custom-card">
							<img class="card-img-top w-100 bg-danger-transparent" src="{{URL::asset('assets/img/media/illustrate.png')}}" alt="">
							<div class="card-body">
								<h4 class="card-title">Blog Title</h4>
								<p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa. </p>
								<a class="" href="#">Read More<i class="fe fe-arrow-right ml-1"></i></a>
							</div>
						 </div>
					</div>
					<div class="col-xl-4 col-md-4">
						<div class="card custom-card">
							<img class="card-img-top w-100 bg-success-transparent" src="{{URL::asset('assets/img/media/illustrate1.png')}}" alt="">
							<div class="card-body">
								<h4 class="card-title">Blog Title</h4>
								<p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa. </p>
								<a class="" href="#">Read More<i class="fe fe-arrow-right ml-1"></i></a>
							</div>
						 </div>
					</div>
					<div class="col-xl-4 col-md-4">
						<div class="card custom-card">
							<img class="card-img-top w-100 bg-warning-transparent" src="{{URL::asset('assets/img/media/image2.png')}}" alt="">
							<div class="card-body">
								<h4 class="card-title">Blog Title</h4>
								<p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa. </p>
								<a class="" href="#">Read More<i class="fe fe-arrow-right ml-1"></i></a>
							</div>
						 </div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-xl-4 col-md-4">
						<div class="card custom-card">
							<img class="card-img-top w-100" src="{{URL::asset('assets/img/photos/1.jpg')}}" alt="">
							<div class="card-body">
								<h4 class="card-title">Blog Title</h4>
								<p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa. </p>
								<a class="btn ripple btn-primary" href="#">Read More<i class="fe fe-arrow-right ml-1"></i></a>
							</div>
						 </div>
					</div>
					<div class="col-xl-4 col-md-4">
						<div class="card custom-card">
							<img class="card-img-top w-100" src="{{URL::asset('assets/img/photos/2.jpg')}}" alt="">
							<div class="card-body">
								<h4 class="card-title">Blog Title</h4>
								<p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa. </p>
								<a class="btn ripple btn-primary" href="#">Read More<i class="fe fe-arrow-right ml-1"></i></a>
							</div>
						 </div>
					</div>
					<div class="col-xl-4 col-md-4">
						<div class="card custom-card">
							<img class="card-img-top w-100" src="{{URL::asset('assets/img/photos/3.jpg')}}" alt="">
							<div class="card-body">
								<h4 class="card-title">Blog Title</h4>
								<p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa. </p>
								<a class="btn ripple btn-primary" href="#">Read More<i class="fe fe-arrow-right ml-1"></i></a>
							</div>
						 </div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-xl-4 col-md-4">
						<div class="card custom-card text-center">
							<img class="card-img-top w-100" src="{{URL::asset('assets/img/photos/1.jpg')}}" alt="">
							<div class="card-body">
								<h4 class="card-title">Blog Title</h4>
								<p class="card-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								<a class="btn ripple btn-outline-secondary btn-sm" href="#">Read More </a>
							</div>
						 </div>
					</div>
					<div class="col-xl-4 col-md-4">
						<div class="card custom-card text-center">
							<img class="card-img-top w-100" src="{{URL::asset('assets/img/photos/5.jpg')}}" alt="">
							<div class="card-body">
								<h4 class="card-title">Blog Title</h4>
								<p class="card-text"> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								<a class="btn ripple btn-outline-secondary btn-sm" href="#">Read More</a>
							</div>
						 </div>
					</div>
					<div class="col-xl-4 col-md-4">
						<div class="card custom-card text-center">
							<img class="card-img-top w-100" src="{{URL::asset('assets/img/photos/6.jpg')}}" alt="">
							<div class="card-body">
								<h4 class="card-title">Blog Title</h4>
								<p class="card-text"> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								<a class="btn ripple btn-outline-secondary btn-sm" href="#">Read More</a>
							</div>
						 </div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-xl-3 col-lg-6  col-sm-6">
						<div class="card custom-card">
							<img class="card-img-top w-100 w-100" src="{{URL::asset('assets/img/photos/7.jpg')}}" alt="">
							<div class="card-body">
								<a href="#"><h4 class="card-title">Blog Title</h4></a>
								<p class="card-text mb-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
						 </div>
					</div>
					<div class="col-xl-3 col-lg-6  col-sm-6">
						<div class="card custom-card">
							<img class="card-img-top w-100 w-100" src="{{URL::asset('assets/img/photos/8.jpg')}}" alt="">
							<div class="card-body">
								<a href="#"><h4 class="card-title">Blog Title</h4></a>
								<p class="card-text mb-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
						 </div>
					</div>
					<div class="col-xl-3 col-lg-6  col-sm-6">
						<div class="card custom-card">
							<img class="card-img-top w-100 w-100" src="{{URL::asset('assets/img/photos/9.jpg')}}" alt="">
							<div class="card-body">
								<a href="#"><h4 class="card-title">Blog Title</h4></a>
								<p class="card-text mb-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
						 </div>
					</div>
					<div class="col-xl-3 col-lg-6  col-sm-6">
						<div class="card custom-card">
							<img class="card-img-top w-100 w-100" src="{{URL::asset('assets/img/photos/10.jpg')}}" alt="">
							<div class="card-body">
								<a href="#"><h4 class="card-title">Blog Title</h4></a>
								<p class="card-text mb-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
						 </div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-lg-6">
						<div class="card card-aside custom-card">
							<a href="#" class="card-aside-column  cover-image" data-image-src="{{URL::asset('assets/img/photos/11.jpg')}}" style="background: url(&quot;{{URL::asset('assets/img/photos/11.jpg')}}&quot;) center center;"></a>
							<div class="card-body d-flex flex-column">
								<h4><a href="#" class="card-title">Blog Title</a></h4>
								<div class="">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
								<div class="d-flex align-items-center pt-3 mt-auto">
									<div class="main-img-user avatar-sm ml-3">
										<img src="{{URL::asset('assets/img/faces//1.jpg')}}" class="w-10 rounded-circle" alt="avatar-img">
									</div>
									<div>
										<a href="" class="text-default">Alica Nestle</a>
										<small class="d-block text-muted">15 mintues ago</small>
									</div>
									<div class="mr-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="far fa-heart mr-1"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="far fa-thumbs-up"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="card card-aside custom-card">
							<div class="card-body d-flex flex-column">
								<h4><a href="#" class="card-title">Blog Title</a></h4>
								<div class="">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
								<div class="d-flex align-items-center pt-3 mt-auto">
									<div class="main-img-user avatar-sm ml-3">
										<img src="{{URL::asset('assets/img/faces//2.jpg')}}" class="w-10 rounded-circle" alt="avatar-img">
									</div>
									<div>
										<a href="" class="text-default">Alica Nestle</a>
										<small class="d-block text-muted">15 mintues ago</small>
									</div>
									<div class="mr-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="far fa-heart mr-1"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="far fa-thumbs-up"></i></a>
									</div>
								</div>
							</div>
							<a href="#" class="card-aside-column  cover-image" data-image-src="{{URL::asset('assets/img/photos/13.jpg')}}" style="background: url(&quot;{{URL::asset('assets/img/photos/13.jpg')}}&quot;) center center;"></a>
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
@endsection