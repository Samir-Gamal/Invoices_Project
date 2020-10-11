@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Tables</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Basic Tables</span>
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
				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0">SIMPLE TABLE</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
								<p class="tx-12 tx-gray-500 mb-2">Example of Valex Simple Table. <a href="">Learn more</a></p>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table mg-b-0 text-md-nowrap">
										<thead>
											<tr>
												<th>ID</th>
												<th>Name</th>
												<th>Position</th>
												<th>Salary</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>Joan Powell</td>
												<td>Associate Developer</td>
												<td>$450,870</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>Gavin Gibson</td>
												<td>Account manager</td>
												<td>$230,540</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td>Julian Kerr</td>
												<td>Senior Javascript Developer</td>
												<td>$55,300</td>
											</tr>
											<tr>
												<th scope="row">4</th>
												<td>Cedric Kelly</td>
												<td>Accountant</td>
												<td>$234,100</td>
											</tr>
											<tr>
												<th scope="row">5</th>
												<td>Samantha May</td>
												<td>Junior Technical Author</td>
												<td>$43,198</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->

					<!--div-->
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0">STRIPED ROWS</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
								<p class="tx-12 tx-gray-500 mb-2">Example of Valex Striped Rows.. <a href="">Learn more</a></p>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-striped mg-b-0 text-md-nowrap">
										<thead>
											<tr>
												<th>ID</th>
												<th>Name</th>
												<th>Position</th>
												<th>Salary</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>Joan Powell</td>
												<td>Associate Developer</td>
												<td>$450,870</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>Gavin Gibson</td>
												<td>Account manager</td>
												<td>$230,540</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td>Julian Kerr</td>
												<td>Senior Javascript Developer</td>
												<td>$55,300</td>
											</tr>
											<tr>
												<th scope="row">4</th>
												<td>Cedric Kelly</td>
												<td>Accountant</td>
												<td>$234,100</td>
											</tr>
											<tr>
												<th scope="row">5</th>
												<td>Samantha May</td>
												<td>Junior Technical Author</td>
												<td>$43,198</td>
											</tr>
										</tbody>
									</table>
								</div><!-- bd -->
							</div><!-- bd -->
						</div><!-- bd -->
					</div>
					<!--/div-->

					<!--div-->
					<div class="col-xl-12">
						<div class="card mg-b-20">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0">Bordered Table</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
								<p class="tx-12 tx-gray-500 mb-2">Example of Valex Bordered Table.. <a href="">Learn more</a></p>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-bordered mg-b-0 text-md-nowrap">
										<thead>
											<tr>
												<th>ID</th>
												<th>Name</th>
												<th>Position</th>
												<th>Salary</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>Joan Powell</td>
												<td>Associate Developer</td>
												<td>$450,870</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>Gavin Gibson</td>
												<td>Account manager</td>
												<td>$230,540</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td>Julian Kerr</td>
												<td>Senior Javascript Developer</td>
												<td>$55,300</td>
											</tr>
											<tr>
												<th scope="row">4</th>
												<td>Cedric Kelly</td>
												<td>Accountant</td>
												<td>$234,100</td>
											</tr>
											<tr>
												<th scope="row">5</th>
												<td>Samantha May</td>
												<td>Junior Technical Author</td>
												<td>$43,198</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->

					<!--div-->
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0">Hoverable Rows Table</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
								<p class="tx-12 tx-gray-500 mb-2">Example of Valex Hoverable Rows Table.. <a href="">Learn more</a></p>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-hover mb-0 text-md-nowrap">
										<thead>
											<tr>
												<th>ID</th>
												<th>Name</th>
												<th>Position</th>
												<th>Salary</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>Tiger Nixon</td>
												<td>System Architect</td>
												<td>$320,800</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>Garrett Winters</td>
												<td>Accountant</td>
												<td>$170,750</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td>Ashton Cox</td>
												<td>Junior Technical Author</td>
												<td>$86,000</td>
											</tr>
											<tr>
												<th scope="row">4</th>
												<td>Cedric Kelly</td>
												<td>Senior Javascript Developer</td>
												<td>$433,060</td>
											</tr>
											<tr>
												<th scope="row">5</th>
												<td>Airi Satou</td>
												<td>Accountant</td>
												<td>$162,700</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->
				</div>
				<!-- /row -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
@endsection