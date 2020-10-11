@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Pricing</span>
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
				<h4 class="card-title mt-4">Column pricing table</h4>
				<div class="row">
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card">
							<div class="card-body text-center pricing">
								<div class="card-category">Basic</div>
								<div class="display-4 my-4">$10</div>
								<ul class="list-unstyled leading-loose">
									<li><strong>2 </strong> FreeDomain Name</li>
									<li><strong>2</strong> One-Click Apps</li>
									<li><strong>1</strong>  Databases</li>
									<li><strong>Money</strong> BackGuarantee</li>
									<li><strong>24/7</strong> Support</li>
								</ul>
								<div class="text-center mt-4">
									<a href="#" class="btn btn-primary btn-block">Buy Now</a>
								</div>
							</div>
						</div>
					</div><!-- COL-END -->
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card">
							<div class="card-body text-center pricing ">
								<div class="card-category">Premium</div>
								<div class="display-4 my-4">$49</div>
								<ul class="list-unstyled leading-loose">
									<li><strong>3 </strong> FreeDomain Name</li>
									<li><strong>5</strong> One-Click Apps</li>
									<li><strong>3</strong>  Databases</li>
									<li><strong>Money</strong> BackGuarantee</li>
									<li><strong>24/7</strong> Support</li>
								</ul>
								<div class="text-center mt-4">
									<a href="#" class="btn btn-pink btn-block">Buy Now</a>
								</div>
							</div>
						</div>
					</div><!-- COL-END -->
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card">
							<div class="card-body text-center pricing">
								<div class="card-category">Enterprise</div>
								<div class="display-4 my-4">$99</div>
								<ul class="list-unstyled leading-loose">
									<li><strong>10 </strong> FreeDomain Name</li>
									<li><strong>10</strong> One-Click Apps</li>
									<li><strong>8</strong>  Databases</li>
									<li><strong>Money</strong> BackGuarantee</li>
									<li><strong>24/7</strong> Support</li>
								</ul>
								<div class="text-center mt-4">
									<a href="#" class="btn btn-warning btn-block">Buy Now</a>
								</div>
							</div>
						</div>
					</div><!-- COL-END -->
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card">
							<div class="card-body text-center  pricing">
								<div class="card-category">Unlimited</div>
								<div class="display-4 my-4">$139</div>
								<ul class="list-unstyled leading-loose">
									<li><strong>12 </strong> FreeDomain Name</li>
									<li><strong>10</strong> One-Click Apps</li>
									<li><strong>6</strong>  Databases</li>
									<li><strong>Money</strong> BackGuarantee</li>
									<li><strong>24/7</strong> Support</li>
								</ul>
								<div class="text-center mt-4">
									<a href="#" class="btn btn-danger btn-block">Buy Now</a>
								</div>
							</div>
						</div>
					</div><!-- COL-END -->
				</div>
				<!-- row closed -->

				<!-- row -->
				<div class="row">
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card pricing-card">
							<div class="card-body text-center">
								<div class="card-category">Free</div>
								<div class="display-5 my-4">$0</div>
								<ul class="list-unstyled leading-loose">
									<li><strong>4</strong> Ads</li>
									<li><i class="fe fe-check text-success mr-2"></i> 30 days</li>
									<li><i class="fe fe-x text-danger mr-2"></i> Private Messages</li>
									<li><i class="fe fe-x text-danger mr-2"></i> Urgent Ads</li>
								</ul>
								<div class="text-center mt-6">
									<a href="#" class="btn btn-primary btn-block">Choose plan</a>
								</div>
							</div>
						</div>
					</div><!-- col-end -->
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card pricing-card">
							<div class="card-body text-center">
								<div class="card-category">Unlimited</div>
								<div class="display-5 my-4">$150</div>
								<ul class="list-unstyled leading-loose">
									<li><strong>Unlimited</strong> Ads</li>
									<li><i class="fe fe-check text-success mr-2"></i> 365 Days</li>
									<li><i class="fe fe-check text-success mr-2"></i> Private Messages</li>
									<li><i class="fe fe-check text-success mr-2"></i> Urgent ads</li>
								</ul>
								<div class="text-center mt-6">
									<a href="#" class="btn btn-warning btn-block">Choose plan</a>
								</div>
							</div>
						</div>
					</div><!-- col-end -->
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card pricing-card ">
							<div class="card-status bg-success"></div>
							<div class="card-body text-center">
								<div class="card-category">Premium</div>
								<div class="display-5 my-4">$65</div>
								<ul class="list-unstyled leading-loose">
									<li><strong>50</strong> Ads</li>
									<li><i class="fe fe-check text-success mr-2"></i> 60 Days</li>
									<li><i class="fe fe-x text-danger mr-2"></i> Private Messages</li>
									<li><i class="fe fe-x text-danger mr-2"></i> Urgent ads</li>
								</ul>
								<div class="text-center mt-6">
									<a href="#" class="btn btn-success btn-block">Choose plan</a>
								</div>
							</div>
						</div>
					</div><!-- col-end -->
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card pricing-card ">
							<div class="card-body text-center">
								<div class="card-category">Enterprise</div>
								<div class="display-5 my-4">$100</div>
								<ul class="list-unstyled leading-loose">
									<li><strong>100</strong> Ads</li>
									<li><i class="fe fe-check text-success mr-2"></i> 180 days</li>
									<li><i class="fe fe-check text-success mr-2"></i> Private Messages</li>
									<li><i class="fe fe-x text-danger mr-2"></i> Urgent ads</li>
								</ul>
								<div class="text-center mt-6">
									<a href="#" class="btn btn-danger btn-block">Choose plan</a>
								</div>
							</div>
						</div>
					</div><!-- col-end -->
				</div>
				<!-- /row -->

				<h4 class="card-title mt-4">Pricing cards 4 colums</h4>
				<!-- row -->
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-lg-6 col-xl-3">
						<div class="panel price panel-color">
							<div class="panel-heading bg-primary p-0 text-center">
								<h3>Personal</h3>
							</div>
							<div class="panel-body text-center">
								<p class="lead"><strong>$15 /</strong>  month</p>
							</div>
							<ul class="list-group list-group-flush text-center">
								<li class="list-group-item"><strong> 2 Free</strong> Domain Name</li>
								<li class="list-group-item"><strong>3 </strong> One-Click Apps</li>
								<li class="list-group-item"><strong> 1 </strong> Databases</li>
								<li class="list-group-item"><strong> Money </strong> BackGuarantee</li>
								<li class="list-group-item border-bottom-0"><strong> 24/7</strong> support</li>
							</ul>
							<div class="panel-footer text-center">
								<a class="btn btn-primary" href="#">Purchase Now!</a>
							</div>
						</div>
					</div><!-- COL-END -->
					<div class="col-xs-6 col-sm-6 col-lg-6 col-xl-3">
						<div class="panel price panel-color">
							<div class="panel-heading bg-warning  p-0 text-center">
								<h3>Team</h3>
							</div>
							<div class="panel-body text-center">
								<p class="lead"><strong>$25 /</strong> month</p>
							</div>
							<ul class="list-group list-group-flush text-center">
								<li class="list-group-item"><strong> 3 Free</strong> Domain Name</li>
								<li class="list-group-item"><strong>4 </strong> One-Click Apps</li>
								<li class="list-group-item"><strong> 2 </strong> Databases</li>
								<li class="list-group-item"><strong> Money </strong> BackGuarantee</li>
								<li class="list-group-item border-bottom-0"><strong> 24/7</strong> support</li>
							</ul>
							<div class="panel-footer text-center">
								<a class="btn btn-warning" href="#">Purchase Now!</a>
							</div>
						</div>
					</div><!-- COL-END -->
					<div class="col-xs-6 col-sm-6 col-lg-6 col-xl-3">
						<div class="panel price panel-color">
							<div class="panel-heading bg-success p-0 text-center">
								<h3>Business</h3>
							</div>
							<div class="panel-body text-center">
								<p class="lead"><strong>$99 /</strong> month</p>
							</div>
							<ul class="list-group list-group-flush text-center">
								<li class="list-group-item"><strong> 5 Free</strong> Domain Name</li>
								<li class="list-group-item"><strong>8 </strong> One-Click Apps</li>
								<li class="list-group-item"><strong> 2 </strong> Databases</li>
								<li class="list-group-item"><strong> Money </strong> BackGuarantee</li>
								<li class="list-group-item border-bottom-0"><strong> 24/7</strong> support</li>
							</ul>
							<div class="panel-footer text-center">
								<a class="btn btn-success" href="#">Purchase Now!</a>
							</div>
						</div>
					</div><!-- COL-END -->
					<div class="col-xs-6 col-sm-6 col-lg-6 col-xl-3">
						<div class="panel price panel-color">
							<div class="panel-heading bg-danger p-0 text-center">
								<h3>Corporate</h3>
							</div>
							<div class="panel-body text-center">
								<p class="lead"><strong>$35 /</strong>  month</p>
							</div>
							<ul class="list-group list-group-flush text-center">
								<li class="list-group-item"><strong> 4 Free</strong> Domain Name</li>
								<li class="list-group-item"><strong>6 </strong> One-Click Apps</li>
								<li class="list-group-item"><strong> 2 </strong> Databases</li>
								<li class="list-group-item"><strong> Money </strong> BackGuarantee</li>
								<li class="list-group-item border-bottom-0"><strong> 24/7</strong> support</li>
							</ul>
							<div class="panel-footer text-center">
								<a class="btn btn-danger" href="#">Purchase Now!</a>
							</div>
						</div>
					</div><!-- COL-END -->
				</div>
				<!-- /row -->

			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!--Internal  Chart.bundle js -->
<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
@endsection