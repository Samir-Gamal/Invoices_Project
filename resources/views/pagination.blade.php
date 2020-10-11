@extends('layouts.master')
@section('css')
<!---Internal  Prism css-->
<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
<!--- Custom-scroll -->
<link href="{{URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Elements</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Pagination</span>
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
					<div class="col-xl-12 col-lg-12">
						<div class="card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">BASIC PAGINATION</h6>
									<p class="text-muted card-sub-title">Below are basic pagination navigation.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<ul class="pagination mb-0">
											<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-forward"></i></a></li>
											<li class="page-item active"><a class="page-link" href="#">1</a></li>
											<li class="page-item"><a class="page-link" href="#">2</a></li>
											<li class="page-item"><a class="page-link" href="#">3</a></li>
											<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-back"></i></a></li>
										 </ul>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code" data-toggle="tab" href="#html-code" role="tab" aria-controls="html-code" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pagination1"><pre><code class="language-markup"><script type="html-dashlead/script"><ul class="pagination">
	<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-forward"></i></a></li>
	<li class="page-item active"><a class="page-link" href="#">1</a></li>
	<li class="page-item"><a class="page-link" href="#">2</a></li>
	<li class="page-item"><a class="page-link" href="#">3</a></li>
	<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-back"></i></a></li>
</ul></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#pagination1"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">PAGINATION FOR DARK BACKGROUND</h6>
										<p class="text-muted card-sub-title">Below are basic pagination navigation for dark background.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="pd-20 bg-gray-800">
												<ul class="pagination pagination-dark mb-0 mg-b-0">
													<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-forward"></i></a></li>
													<li class="page-item active"><a class="page-link" href="#">1</a></li>
													<li class="page-item"><a class="page-link" href="#">2</a></li>
													<li class="page-item"><a class="page-link" href="#">3</a></li>
													<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-back"></i></a></li>
												</ul>
											 </div>
										</div>
										<ul class="nav nav-tabs html-source" id="html-source-code2" role="tablist">
											<li class="nav-item">
												<a class="nav-link active ml-1 html-code" id="html-code2" data-toggle="tab" href="#html-code2" role="tab" aria-controls="html-code2" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
											</li>
										</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pagination2"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="pd-20 bg-gray-800">
	<ul class="pagination pagination-dark mg-b-0">
		<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-forward"></i></a></li>
		<li class="page-item active"><a class="page-link" href="#">1</a></li>
		<li class="page-item"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-back"></i></a></li>
	</ul>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#pagination2"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>

							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">COLOR VARIANT PAGINATION</h6>
										<p class="text-muted card-sub-title">Below are the available colored pagination variants..</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="row row-sm">
												<div class="col-sm-6 col-lg-4">
													<ul class="pagination pagination-primary mg-sm-b-0">
														<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-forward"></i></a></li>
														<li class="page-item active"><a class="page-link" href="#">1</a></li>
														<li class="page-item"><a class="page-link" href="#">2</a></li>
														<li class="page-item"><a class="page-link" href="#">3</a></li>
														<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-back"></i></a></li>
													</ul>
												</div><!-- col-4 -->
												<div class="col-sm-6 col-lg-4 mg-sm-t-0">
													<ul class="pagination pagination-success mb-0">
														<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-forward"></i></a></li>
														<li class="page-item active"><a class="page-link" href="#">1</a></li>
														<li class="page-item"><a class="page-link" href="#">2</a></li>
														<li class="page-item"><a class="page-link" href="#">3</a></li>
														<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-back"></i></a></li>
													</ul>
												</div><!-- col-4 -->
											</div>
										</div>
										<ul class="nav nav-tabs html-source" id="html-source-code3" role="tablist">
											<li class="nav-item">
												<a class="nav-link active ml-1 html-code" id="html-code3" data-toggle="tab" href="#html-code3" role="tab" aria-controls="html-code3" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
											</li>
										</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pagination3"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="row row-sm">
	<div class="col-sm-6 col-lg-4">
		<ul class="pagination pagination-primary">
			<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-forward"></i></a></li>
			<li class="page-item active"><a class="page-link" href="#">1</a></li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-back"></i></a></li>
		</ul>
	</div><!-- col-4 -->
	<div class="col-sm-6 col-lg-4 mg-sm-t-0">
		<ul class="pagination pagination-success">
			<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-forward"></i></a></li>
			<li class="page-item active"><a class="page-link" href="#">1</a></li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-back"></i></a></li>
		</ul>
	</div><!-- col-4 -->
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#pagination3"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>

							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">CIRCLED PAGINATION</h6>
										<p class="text-muted card-sub-title">Below are basic pagination navigation in circle.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<ul class="pagination pagination-circled mb-0">
												<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-forward"></i></a></li>
												<li class="page-item active"><a class="page-link" href="#">1</a></li>
												<li class="page-item"><a class="page-link" href="#">2</a></li>
												<li class="page-item"><a class="page-link" href="#">3</a></li>
												<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-back"></i></a></li>
											</ul>
										</div>
										<ul class="nav nav-tabs html-source" id="html-source-code4" role="tablist">
											<li class="nav-item">
												<a class="nav-link active ml-1 html-code" id="html-code4" data-toggle="tab" href="#html-code4" role="tab" aria-controls="html-code4" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
											</li>
										</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pagination4"><pre><code class="language-markup"><script type="html-dashlead/script"><ul class="pagination pagination-circled mb-0">
	<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-forward"></i></a></li>
	<li class="page-item active"><a class="page-link" href="#">1</a></li>
	<li class="page-item"><a class="page-link" href="#">2</a></li>
	<li class="page-item"><a class="page-link" href="#">3</a></li>
	<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-back"></i></a></li>
</ul></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#pagination4"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
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
<!-- Internal Jquery.mCustomScrollbar js-->
<script src="{{URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!--Internal  Clipboard js-->
<script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>
<!-- Internal Prism js-->
<script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>
@endsection