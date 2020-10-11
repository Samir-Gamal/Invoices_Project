@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Utilities</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Display</span>
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
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Basic Display
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mb-0 mg-t-5">
										<thead>
											<tr>
												<th class="wd-30p">Class</th>
												<th class="wd-70p">Description</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><code>.d-inline</code></td>
												<td>Set an inline display property of an element.</td>
											</tr>
											<tr>
												<td><code>.d-inline-block</code></td>
												<td>Set an inline-block display property of an element.</td>
											</tr>
											<tr>
												<td><code>.d-block</code></td>
												<td>Set a block display property of an element.</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->

					<!--div-->
					<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Hiding Elements
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="table-responsive">
									<table class="table main-table-reference  text-nowrap mb-0 mg-t-5">
										<thead>
											<tr>
												<th class="wd-40p">Class</th>
												<th class="wd-60p">Screen Size</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><code>.d-none</code></td>
												<td>Hidden on all</td>
											</tr>
											<tr>
												<td><code>.d-none .d-sm-block</code></td>
												<td>Hidden only on xs</td>
											</tr>
											<tr>
												<td><code>.d-sm-none .d-md-block</code></td>
												<td>Hidden only on sm</td>
											</tr>
											<tr>
												<td><code>.d-md-none .d-lg-block</code></td>
												<td>Hidden only on md</td>
											</tr>
											<tr>
												<td><code>.d-lg-none .d-xl-block</code></td>
												<td>Hidden only on lg</td>
											</tr>
											<tr>
												<td><code>.d-xl-none</code></td>
												<td>Hidden only on xl</td>
											</tr>
											<tr>
												<td><code>.d-block</code></td>
												<td>Visible on all</td>
											</tr>
											<tr>
												<td><code>.d-block .d-sm-none</code></td>
												<td>Visible only on xs</td>
											</tr>
											<tr>
												<td><code>.d-none .d-sm-block .d-md-none</code></td>
												<td>Visible only on sm</td>
											</tr>
											<tr>
												<td><code>.d-none .d-md-block .d-lg-none</code></td>
												<td>Visible only on md</td>
											</tr>
											<tr>
												<td><code>.d-none .d-lg-block .d-xl-none</code></td>
												<td>Visible only on lg</td>
											</tr>
											<tr>
												<td><code>.d-none .d-xl-block</code></td>
												<td>Visible only on xl</td>
											</tr>
										</tbody>
									</table>
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
@endsection