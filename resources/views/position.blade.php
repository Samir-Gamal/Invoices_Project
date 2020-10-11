@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Utilities</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Position</span>
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
									Set Position
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-0 mb-0">
										<thead>
											<tr>
												<th class="wd-30p">Class</th>
												<th class="wd-70p">Value</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><code>.pos-relative</code></td>
												<td>Set a relative position to an element.</td>
											</tr>
											<tr>
												<td><code>.pos-absolute</code></td>
												<td>Set an absolute position to an element.</td>
											</tr>
											<tr>
												<td><code>.pos-fixed</code></td>
												<td>Set a fixed position to an element.</td>
											</tr>
											<tr>
												<td><code>.pos-static</code></td>
												<td>Set a static position to an element.</td>
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
									Cornering
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="table-responsive">
									<table class="table main-table-reference  text-nowrap mg-t-0 mb-0">
										<thead>
											<tr>
												<th class="wd-30p">Class</th>
												<th class="wd-70p">Value</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><code>.t-[value]</code></td>
												<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
											</tr>
											<tr>
												<td><code>.r-[value]</code></td>
												<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
											</tr>
											<tr>
												<td><code>.b-[value]</code></td>
												<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
											</tr>
											<tr>
												<td><code>.l-[value]</code></td>
												<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
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
									X and Y Position
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-0 mb-0">
										<thead>
											<tr>
												<th class="wd-30p">Class</th>
												<th class="wd-70p">Value</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><code>.t-[value]</code></td>
												<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
											</tr>
											<tr>
												<td><code>.r-[value]</code></td>
												<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
											</tr>
											<tr>
												<td><code>.b-[value]</code></td>
												<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
											</tr>
											<tr>
												<td><code>.l-[value]</code></td>
												<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
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
									Negative Corner
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-0 mb-0">
										<thead>
											<tr>
												<th class="wd-30p">Class</th>
												<th class="wd-70p">Value</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><code>.t--[value]</code></td>
												<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
											</tr>
											<tr>
												<td><code>.r--[value]</code></td>
												<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
											</tr>
											<tr>
												<td><code>.b--[value]</code></td>
												<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
											</tr>
											<tr>
												<td><code>.l--[value]</code></td>
												<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
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
									Z-Index Property
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="table-responsive">
									<table class="table main-table-reference mg-t-0 mb-0">
										<thead>
											<tr>
												<th class="wd-30p">Class</th>
												<th class="wd-70p">Value</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><code>.z-index-[value]</code></td>
												<td>10 | 50 | 100 | 150 | 200</td>
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