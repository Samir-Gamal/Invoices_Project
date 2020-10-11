@extends('layouts.master')
@section('css')
<link href="{{URL::asset('assets/plugins/morris.js/morris.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
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
				<div class="row">
					<div class="col-12 col-sm-6 col-lg-6 col-xl-3">
						<div class="card">
							<div class="card-header pb-0">
								<h5 class="card-title mb-0 pb-0">Card title</h5>
							</div>
							<div class="card-body">
								Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
							</div>
							<div class="card-footer">
								Card footer
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-6 col-xl-3">
						<div class="card card-primary">
							<div class="card-header pb-0">
								<h5 class="card-title mb-0 pb-0">Card title</h5>
							</div>
							<div class="card-body text-primary">
								Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
							</div>
							<div class="card-footer">
								Card footer
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-6 col-xl-3">
						<div class="card card-secondary">
							<div class="card-header pb-0">
								<h5 class="card-title mb-0 pb-0">Card title</h5>
							</div>
							<div class="card-body text-secondary">
								Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
							</div>
							<div class="card-footer">
								Card footer
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-6 col-xl-3">
						<div class="card card-success">
							<div class="card-header pb-0">
								<h5 class="card-title mb-0 pb-0">Card title</h5>
							</div>
							<div class="card-body text-success">
								Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
							</div>
							<div class="card-footer">
								Card footer
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-6 col-xl-3">
						<div class="card card-warning">
							<div class="card-header pb-0">
								<h5 class="card-title mb-0 pb-0">Card title</h5>
							</div>
							<div class="card-body text-warning">
								Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
							</div>
							<div class="card-footer">
								Card footer
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-6 col-xl-3">
						<div class="card card-info">
							<div class="card-header pb-0">
								<h5 class="card-title mb-0 pb-0">Card title</h5>
							</div>
							<div class="card-body text-info">
								Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
							</div>
							<div class="card-footer">
								Card footer
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-6 col-xl-3">
						<div class="card card-purple">
							<div class="card-header pb-0">
								<h5 class="card-title mb-0 pb-0">Card title</h5>
							</div>
							<div class="card-body text-purple">
								Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
							</div>
							<div class="card-footer">
								Card footer
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-6 col-xl-3">
						<div class="card card-danger">
							<div class="card-header pb-0">
								<h5 class="card-title mb-0 pb-0">Card title</h5>
							</div>
							<div class="card-body text-danger">
								Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
							</div>
							<div class="card-footer">
								Card footer
							</div>
						</div>
					</div>
				</div>

				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-12  col-lg-12 col-xl-4">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
								<p class="card-text">Ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
								<a href="#" class="card-link text-secondary">Card link</a>
								<a href="#" class="card-link text-secondary">Another link</a>
							</div>
						</div>
					</div>
					<div class="col-12  col-lg-12 col-xl-4">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
								<p class="card-text">Ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
								<a href="#" class="card-link text-secondary">Card link</a>
								<a href="#" class="card-link text-secondary">Another link</a>
							</div>
						</div>
					</div>
					<div class="col-12  col-lg-12 col-xl-4">
						<div class="card bg-info">
							<div class="card-body">
								<h5 class="card-title text-white">Card title</h5>
								<h6 class="card-subtitle mb-2 text-white">Card subtitle</h6>
								<p class="card-text">Ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
								<a href="#" class="card-link text-white">Card link</a>
								<a href="#" class="card-link text-white">Another link</a>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->

				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-12 col-sm-4 col-md-12 col-xl-4">
						<div class="card">
							<div class="card-body">
								On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-4 col-md-12 col-xl-4">
						<div class="card bg-orange">
							<div class="card-body">
								On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-4 col-md-12 col-xl-4">
						<div class="card bg-danger text-white">
							<div class="card-body">
								On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->

				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-md">
						<div class="card card-body bg-gray-200 bd-0">
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
						</div>
					</div>
					<div class="col-md mg-md-t-0">
						<div class="card card-body bg-secondary tx-white bd-0">
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
						</div>
					</div>
					<div class="col-md  mg-md-t-0">
						<div class="card card-body bg-primary tx-white bd-0">
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
						</div>
					</div>
				</div>
				<!-- /row closed -->

				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-md">
						<div class="card bg-gray-200 bd-0">
							<div class="card-body">
								<h5 class="card-title tx-dark tx-medium mg-b-10">The Card Title</h5>
								<p class="card-subtitle mg-b-15">This is the card subtitle</p>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a class="card-link" href="#">Card link</a> <a class="card-link" href="#">Another link</a>
							</div>
						</div>
					</div>
					<div class="col-md mg-md-t-0">
						<div class="card bg-secondary tx-white bd-0">
							<div class="card-body">
								<h5 class="card-title tx-white tx-medium mg-b-10">The Card Title</h5>
								<p class="card-subtitle mg-b-15 tx-white-8">This is the card subtitle</p>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a class="card-link tx-white-7 hover-white" href="#">Card link</a> <a class="card-link tx-white-7 hover-white" href="#">Another link</a>
							</div>
						</div>
					</div>
					<div class="col-md mg-md-t-0">
						<div class="card bg-secondary tx-white bd-0">
							<div class="card-body">
								<h5 class="card-title tx-white tx-medium mg-b-10">The Card Title</h5>
								<p class="card-subtitle tx-white-8 mg-b-15">This is the card subtitle</p>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a class="card-link tx-white-7 hover-white" href="#">Card link</a> <a class="card-link tx-white-7 hover-white" href="#">Another link</a>
							</div>
						</div>
					</div>
				</div>
				<!-- /row closed -->

				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-md-4 col-lg-4">
						<div class="card">
							<img alt="Image" class="img-fluid card-img-top" src="{{URL::asset('assets/img/photos/14.jpg')}}">
							<div class="card-body ">
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
						</div>
					</div><!-- col-4 -->
					<div class="col-md-4 col-lg-4 mg-md-t-0">
						<div class="card">
							<img alt="Image" class="img-fluid card-img-top" src="{{URL::asset('assets/img/photos/12.jpg')}}">
							<div class="card-body ">
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
						</div>
					</div><!-- col-4 -->
					<div class="col-md-4 col-lg-4 mg-md-t-0">
						<div class="card">
							<img alt="Image" class="img-fluid card-img-top" src="{{URL::asset('assets/img/photos/13.jpg')}}">
							<div class="card-body ">
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
						</div>
					</div><!-- col-4 -->
				</div>
				<!-- /row closed -->

				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-md-4 col-lg-4">
						<div class="card">
						<div class="card-body ">
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div><img alt="Image" class="img-fluid card-img-top" src="{{URL::asset('assets/img/photos/1.jpg')}}"></div>
					</div><!-- col-4 -->
					<div class="col-md-4 col-lg-4 mg-md-t-0">
						<div class="card">
						<div class="card-body ">
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div><img alt="Image" class="img-fluid card-img-top" src="{{URL::asset('assets/img/photos/2.jpg')}}"></div>
					</div><!-- col-4 -->
					<div class="col-md-4 col-lg-4 mg-md-t-0">
						<div class="card">
						<div class="card-body ">
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div><img alt="Image" class="img-fluid card-img-top" src="{{URL::asset('assets/img/photos/11.jpg')}}"></div>
					</div><!-- col-4 -->
				</div>
				<!-- /row closed -->

				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-md">
						<div class="card">
							<img alt="Image" class="img-fluid card-img-top" src="{{URL::asset('assets/img/photos/3.jpg')}}">
							<div class="card-img-overlay pd-30 bg-black-4 d-flex flex-column justify-content-center">
								<p class="tx-white tx-medium mg-b-15">The Cat Prisoner</p>
								<p class="tx-white-7 tx-13">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
								<p class="tx-13 mg-b-0"><a class="tx-white" href="">Read more</a></p>
							</div><!-- card-img-overlay -->
						</div>
					</div>
					<div class="col-md mg mg-md-t-0">
						<div class="card">
							<img alt="Image" class="card-img img-fluid card-img-top" src="{{URL::asset('assets/img/photos/5.jpg')}}">
							<div class="card-img-overlay pd-30 bg-black-4 d-flex flex-column justify-content-center">
								<p class="tx-white tx-medium mg-b-15">The Ghost Town</p>
								<p class="tx-white-7 tx-13">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
								<p class="tx-13 mg-b-0"><a class="tx-white" href="">Read more</a></p>
							</div><!-- card-img-overlay -->
						</div>
					</div>
					<div class="col-md mg-md-t-0">
						<div class="card">
							<img alt="Image" class="card-img img-fluid card-img-top" src="{{URL::asset('assets/img/photos/6.jpg')}}">
							<div class="card-img-overlay pd-30 bg-black-4 d-flex flex-column justify-content-center">
								<p class="tx-white tx-medium mg-b-15">The Green Leaves</p>
								<p class="tx-white-7 tx-13">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
								<p class="tx-13 mg-b-0"><a class="tx-white" href="">Read more</a></p>
							</div><!-- card-img-overlay -->
						</div>
					</div>
				</div>
				<!-- /row closed -->

				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-md-4">
						<div class="card">
							<div class="card-header tx-medium bd-0 tx-white bg-secondary">
								Description
							</div>
							<div class="card-body ">
								<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mg-md-t-0">
						<div class="card">
							<div class="card-header tx-medium bd-0 tx-white bg-primary">
								Description
							</div>
							<div class="card-body ">
								<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mg-md-t-0">
						<div class="card">
							<div class="card-header tx-medium bd-0 tx-white bg-gray-800">
								Description
							</div>
							<div class="card-body ">
								<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
							</div>
						</div>
					</div>
				</div>
				<!-- /row closed -->

				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-md">
						<div class="card">
							<div class="card-body">
								<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
							</div>
							<div class="card-footer bd-t">
								January, 20, 2017 4:30am
							</div>
						</div>
					</div>
					<div class="col-md mg-md-t-0">
						<div class="card">
							<div class="card-body">
								<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
							</div>
							<div class="card-footer bd-t tx-center">
								<a href="">Read more</a>
							</div>
						</div>
					</div>
					<div class="col-md mg-md-t-0">
						<div class="card">
							<div class="card-body">
								<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
							</div>
							<div class="card-footer bd-t tx-left">
								Share <i class="icon ion-logo-facebook mg-l-5 mg-r-5"></i> <i class="icon ion-logo-twitter"></i>
							</div>
						</div>
					</div>
				</div>
				<!-- /row closed -->

				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-md">
						<div class="card card-body tx-white-8 bg-primary bd-0">
							Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur.
						</div>
					</div>
					<div class="col-md  mg-md-t-0">
						<div class="card card-body tx-white-8 bg-secondary bd-0">
							Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur.
						</div>
					</div>
					<div class="col-md mg-md-t-0">
						<div class="card card-body tx-white-8 bg-success bd-0">
							Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur.
						</div>
					</div>
				</div>
				<!-- /row closed -->

				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-sm-6">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title mb-3">Special title treatment</h5>
								<p class="card-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
								<a href="#" class="btn btn-primary">See more</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title mb-3">Special title treatment</h5>
								<p class="card-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
								<a href="#" class="btn btn-primary">See more</a>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->

				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-lg-4 col-md-12 col-12 col-sm-12">
						<div class="card">
							<img class="card-img-top" src="{{URL::asset('assets/img/photos/1.jpg')}}" alt="Card image cap">
							<div class="card-body">
								<p class="card-text">To take a trivial example, which of us ever undertakes laborious physical exercise.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-12 col-sm-12">
						<div class="card">
							<img class="card-img-top" src="{{URL::asset('assets/img/photos/2.jpg')}}" alt="Card image cap">
							<div class="card-body">
								<p class="card-text"> To take a trivial example, which of us ever undertakes laborious physical exercise.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-12 col-sm-12">
						<div class="card">
							<img class="card-img-top" src="{{URL::asset('assets/img/photos/3.jpg')}}" alt="Card image cap">
							<div class="card-body">
								<p class="card-text"> To take a trivial example, which of us ever undertakes laborious physical exercise.</p>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->

				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-xl-4 col-lg-4 col-md-12">
						<div class="card">
							<img class="card-img-top w-100" src="{{URL::asset('assets/img/photos/4.jpg')}}" alt="">
							<div class="card-body">
								<h4 class="card-title mb-3">Card Title</h4>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
								<a class="btn btn-primary" href="#">Read More</a>
							</div>
						 </div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-12">
						<div class="card">
							<img class="card-img-top w-100" src="{{URL::asset('assets/img/photos/5.jpg')}}" alt="">
							<div class="card-body">
								<h4 class="card-title mb-3">Card Title</h4>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
								<a class="btn btn-primary" href="#">Read More</a>
							</div>
						 </div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-12">
						<div class="card">
							<img class="card-img-top w-100" src="{{URL::asset('assets/img/photos/6.jpg')}}" alt="">
							<div class="card-body">
								<h4 class="card-title mb-3">Card Title</h4>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
								<a class="btn btn-primary" href="#">Read More</a>
							</div>
						 </div>
					</div>
				</div>
				<!-- row closed -->

				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-xl-4 col-lg-4 col-md-12">
						<div class="card text-center">
							<img class="card-img-top w-100" src="{{URL::asset('assets/img/photos/7.jpg')}}" alt="">
							<div class="card-body">
								<h4 class="card-title mb-3">Card Title</h4>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
								<a class="btn btn-primary" href="#">Read More</a>
							</div>
						 </div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-12">
						<div class="card text-center">
							<img class="card-img-top w-100" src="{{URL::asset('assets/img/photos/8.jpg')}}" alt="">
							<div class="card-body">
								<h4 class="card-title mb-3">Card Title</h4>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
								<a class="btn btn-primary" href="#">Read More</a>
							</div>
						 </div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-12">
						<div class="card text-center">
							<img class="card-img-top w-100" src="{{URL::asset('assets/img/photos/9.jpg')}}" alt="">
							<div class="card-body">
								<h4 class="card-title mb-3">Card Title</h4>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
								<a class="btn btn-primary" href="#">Read More</a>
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
@endsection