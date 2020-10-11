@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Utilities</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Background</span>
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
					<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<!--div-->
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Gray Set
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="example">
									<div class="gray-set">
										<div class="flex-1 bg-gray-100 ht-100p p-3">.bg-gray-100</div>
										<div class="flex-1 bg-gray-200 ht-100p p-3">.bg-gray-200</div>
										<div class="flex-1 bg-gray-300 ht-100p p-3">.bg-gray-300</div>
										<div class="flex-1 bg-gray-400 ht-100p p-3">.bg-gray-400</div>
										<div class="flex-1 bg-gray-500 ht-100p p-3">.bg-gray-500</div>
										<div class="flex-1 bg-gray-600 ht-100p p-3">.bg-gray-600</div>
										<div class="flex-1 bg-gray-700 ht-100p p-3 tx-white-7">.bg-gray-700</div>
										<div class="flex-1 bg-gray-800 ht-100p p-3 tx-white-7">.bg-gray-800</div>
										<div class="flex-1 bg-gray-900 ht-100p p-3 tx-white-7">.bg-gray-900</div>
									</div>
								</div>
								<div class="table-responsive mg-t-20 mb-0">
									<table class="table main-table-reference text-nowrap mg-t-0 mb-0">
										<tbody>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
												<td><code>class="bg-gray-[value]"</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Values</b></td>
												<td>900 | 800 | 700 | 600 | 500 | 400 | 300 | 200 | 100</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div><!--/div-->
					<!--div-->
					<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Solid Background Set
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="">
									<div class="flex-1 bg-primary p-3 tx-white">.bg-primary</div>
									<div class="flex-1 bg-secondary p-3 tx-white">.bg-secondary</div>
									<div class="flex-1 bg-success p-3 tx-white">.bg-success</div>
									<div class="flex-1 bg-warning p-3 tx-white">.bg-warning</div>
									<div class="flex-1 bg-danger p-3 tx-white">.bg-danger</div>
									<div class="flex-1 bg-info p-3 tx-white">.bg-info</div>
									<div class="flex-1 bg-indigo p-3 tx-white">.bg-indigo</div>
									<div class="flex-1 bg-purple p-3 tx-white">.bg-purple</div>
									<div class="flex-1 bg-pink p-3 tx-white">.bg-pink</div>
									<div class="flex-1 bg-teal p-3 tx-white">.bg-teal</div>
									<div class="flex-1 bg-orange p-3 tx-white">.bg-orange</div>
								</div>
								<div class="table-responsive mg-t-20 mb-0">
									<table class="table main-table-reference text-nowrap mg-t-0 mb-0">
										<tbody>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
												<td><code>class="bg-[value]"</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Values</b></td>
												<td>primary | secondary | success | warning | danger | info | indigo | purple | pink | teal | orange</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div><!--/div-->
					<!--div-->
					<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Solid Gradient Background Set
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="">
									<div class="flex-1 bg-primary-gradient p-3 tx-white">.bg-primary-gradient</div>
									<div class="flex-1 bg-secondary-gradient p-3 tx-white">.bg-secondary-gradient</div>
									<div class="flex-1 bg-success-gradient p-3 tx-white">.bg-success-gradient</div>
									<div class="flex-1 bg-warning-gradient p-3 tx-white">.bg-warning-gradient</div>
									<div class="flex-1 bg-danger-gradient p-3 tx-white">.bg-danger-gradient</div>
									<div class="flex-1 bg-info-gradient p-3 tx-white">.bg-info-gradient</div>
									<div class="flex-1 bg-purple-gradient p-3 tx-white">.bg-purple-gradient</div>
									<div class="flex-1 bg-pink-gradient p-3 tx-white">.bg-pink-gradient</div>
									<div class="flex-1 bg-teal-gradient p-3 tx-white">.bg-teal-gradient</div>
								</div>
								<div class="table-responsive mg-t-20 mb-0">
									<table class="table main-table-reference text-nowrap mg-t-0 mb-0">
										<tbody>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
												<td><code>class="bg-[value]"</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Values</b></td>
												<td>primary-gradient | secondary-gradient | success-gradient | warning-gradient | dange-gradientr | info-gradient | purple-gradient | pink-gradient | teal-gradient</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div><!--/div-->
					<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<!--div-->
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Transparent White Set
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="d-flex flex-wrap">
									<div class="flex-1 pos-relative">
										<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/photos/5.jpg')}}">
										<div class="pos-absolute a-0 bg-white-1"></div>
									</div>
									<div class="flex-1 pos-relative">
										<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/photos/5.jpg')}}">
										<div class="pos-absolute a-0 bg-white-2"></div>
									</div>
									<div class="flex-1 pos-relative">
										<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/photos/5.jpg')}}">
										<div class="pos-absolute a-0 bg-white-3"></div>
									</div>
									<div class="flex-1 pos-relative">
										<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/photos/5.jpg')}}">
										<div class="pos-absolute a-0 bg-white-4"></div>
									</div>
									<div class="flex-1 pos-relative">
										<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/photos/5.jpg')}}">
										<div class="pos-absolute a-0 bg-white-5"></div>
									</div>
									<div class="flex-1 pos-relative">
										<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/photos/5.jpg')}}">
										<div class="pos-absolute a-0 bg-white-6"></div>
									</div>
									<div class="flex-1 pos-relative">
										<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/photos/5.jpg')}}">
										<div class="pos-absolute a-0 bg-white-7"></div>
									</div>
									<div class="flex-1 pos-relative">
										<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/photos/5.jpg')}}">
										<div class="pos-absolute a-0 bg-white-8"></div>
									</div>
									<div class="flex-1 pos-relative">
										<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/photos/5.jpg')}}">
										<div class="pos-absolute a-0 bg-white-9"></div>
									</div>
								</div>
								<div class="table-responsive mg-t-20 mb-0">
									<table class="table main-table-reference text-nowrap mg-t-0 mb-0">
										<tbody>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
												<td><code>class="bg-white-[value]"</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Values</b></td>
												<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div><!--/div-->
					<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<!--div-->
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Transparent Black Set
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="d-flex flex-wrap">
									<div class="flex-1 pos-relative">
										<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/photos/5.jpg')}}">
										<div class="pos-absolute a-0 bg-black-1"></div>
									</div>
									<div class="flex-1 pos-relative">
										<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/photos/5.jpg')}}">
										<div class="pos-absolute a-0 bg-black-2"></div>
									</div>
									<div class="flex-1 pos-relative">
										<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/photos/5.jpg')}}">
										<div class="pos-absolute a-0 bg-black-3"></div>
									</div>
									<div class="flex-1 pos-relative">
										<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/photos/5.jpg')}}">
										<div class="pos-absolute a-0 bg-black-4"></div>
									</div>
									<div class="flex-1 pos-relative">
										<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/photos/5.jpg')}}">
										<div class="pos-absolute a-0 bg-black-5"></div>
									</div>
									<div class="flex-1 pos-relative">
										<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/photos/5.jpg')}}">
										<div class="pos-absolute a-0 bg-black-6"></div>
									</div>
									<div class="flex-1 pos-relative">
										<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/photos/5.jpg')}}">
										<div class="pos-absolute a-0 bg-black-7"></div>
									</div>
									<div class="flex-1 pos-relative">
										<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/photos/5.jpg')}}">
										<div class="pos-absolute a-0 bg-black-8"></div>
									</div>
									<div class="flex-1 pos-relative">
										<img alt="" class="wd-100p ht-100p object-fit-cover" src="{{URL::asset('assets/img/photos/5.jpg')}}">
										<div class="pos-absolute a-0 bg-black-9"></div>
									</div>
								</div>
								<div class="table-responsive mg-t-20 mb-0">
									<table class="table main-table-reference text-nowrap mg-t-0 mb-0">
										<tbody>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
												<td><code>class="bg-black-[value]"</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Values</b></td>
												<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9</td>
											</tr>
										</tbody>
									</table>
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
@endsection