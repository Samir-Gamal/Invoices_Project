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
							<h4 class="content-title mb-0 my-auto">Elements</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Tooltip</span>
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
				<div class="row">
					<div class="col-xl-12 col-lg-12">
						<!-- div -->
						<div class="card mg-b-20" id="Tooltip">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Default Tooltip
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="main-content-label main-content-label-sm mg-b-10">
									Static Example
								</div>
								<div class="tooltip-static-demo mg-b-20">
									<div class="row row-sm">
										<div class="col-sm-6 col-lg-3">
											<div class="tooltip bs-tooltip-top" role="tooltip">
												<div class="arrow"></div>
												<div class="tooltip-inner">
													Tooltip on the top
												</div>
											</div>
										</div>
										<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
											<div class="tooltip bs-tooltip-bottom" role="tooltip">
												<div class="arrow"></div>
												<div class="tooltip-inner">
													Tooltip on the bottom
												</div>
											</div>
										</div>
										<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
											<div class="tooltip bs-tooltip-left" role="tooltip">
												<div class="arrow"></div>
												<div class="tooltip-inner">
													Tooltip on the left
												</div>
											</div>
										</div>
										<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
											<div class="tooltip bs-tooltip-right" role="tooltip">
												<div class="arrow"></div>
												<div class="tooltip-inner">
													Tooltip on the right
												</div>
											</div>
										</div>
									</div>
								</div><!-- tooltip-static-demo -->
								<div class="main-content-label main-content-label-sm mg-b-10">
									Example
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="row row-sm tx-center">
											<div class="col-sm-6 col-lg-3">
												<button class="btn btn-secondary" data-placement="top" data-toggle="tooltip" title="Tooltip on top" type="button">Hover me</button>
											</div>
											<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
												<button class="btn btn-secondary" data-placement="bottom" data-toggle="tooltip" title="Tooltip on bottom" type="button">Hover me</button>
											</div>
											<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
												<button class="btn btn-secondary" data-placement="left" data-toggle="tooltip" title="Tooltip on left" type="button">Hover me</button>
											</div>
											<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
												<button class="btn btn-secondary" data-placement="right" data-toggle="tooltip" title="Tooltip on right" type="button">Hover me</button>
											</div>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code" data-toggle="tab" href="#html-code" role="tab" aria-controls="html-code" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>

<figure class="highlight mb-0" id="element1"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="row row-sm tx-center">
	<div class="col-sm-6 col-lg-3">
		<button class="btn btn-secondary" data-placement="top" data-toggle="tooltip" title="Tooltip on top" type="button">Hover me</button>
	</div>
	<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
		<button class="btn btn-secondary" data-placement="bottom" data-toggle="tooltip" title="Tooltip on bottom" type="button">Hover me</button>
	</div>
	<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
		<button class="btn btn-secondary" data-placement="left" data-toggle="tooltip" title="Tooltip on left" type="button">Hover me</button>
	</div>
	<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
		<button class="btn btn-secondary" data-placement="right" data-toggle="tooltip" title="Tooltip on right" type="button">Hover me</button>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element1"><i class="las la-clipboard"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!-- /div -->

						<!--div-->
						<div class="card mg-b-20" id="Tooltip2">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Colored Tooltip
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="main-content-label main-content-label-sm mg-b-10">
									Static Example
								</div>
								<div class="tooltip-static-demo mg-b-20">
									<div class="row row-sm">
										<div class="col-sm-6 col-lg-3">
											<div class="tooltip tooltip-primary bs-tooltip-top" role="tooltip">
												<div class="arrow"></div>
												<div class="tooltip-inner">
													Tooltip on the top
												</div>
											</div>
										</div>
										<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
											<div class="tooltip tooltip-primary bs-tooltip-bottom" role="tooltip">
												<div class="arrow"></div>
												<div class="tooltip-inner">
													Tooltip on the bottom
												</div>
											</div>
										</div>
										<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
											<div class="tooltip tooltip-primary bs-tooltip-left" role="tooltip">
												<div class="arrow"></div>
												<div class="tooltip-inner">
													Tooltip on the left
												</div>
											</div>
										</div>
										<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
											<div class="tooltip tooltip-primary bs-tooltip-right" role="tooltip">
												<div class="arrow"></div>
												<div class="tooltip-inner">
													Tooltip on the right
												</div>
											</div>
										</div>
									</div>
								</div><!-- tooltip-static-demo -->
								<div class="main-content-label main-content-label-sm mg-b-10">
									Example
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="bg-gray-200 pd-20">
											<div class="row row-sm tx-center">
											<div class="col-sm-6 col-lg-3">
												<button class="btn btn-secondary" data-placement="top" data-toggle="tooltip-primary" title="Tooltip on top" type="button">Hover me</button>
											</div>
											<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
												<button class="btn btn-secondary" data-placement="bottom" data-toggle="tooltip-primary" title="Tooltip on bottom" type="button">Hover me</button>
											</div>
											<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
												<button class="btn btn-secondary" data-placement="left" data-toggle="tooltip-primary" title="Tooltip on left" type="button">Hover me</button>
											</div>
											<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
												<button class="btn btn-secondary" data-placement="right" data-toggle="tooltip-primary" title="Tooltip on right" type="button">Hover me</button>
											</div>
										</div>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code2" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code2" data-toggle="tab" href="#html-code2" role="tab" aria-controls="html-code2" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>

<figure class="highlight mb-0" id="element2"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="row row-sm tx-center">
	<div class="col-sm-6 col-lg-3">
		<button class="btn btn-secondary" data-placement="top" data-toggle="tooltip-primary" title="Tooltip on top" type="button">Hover me</button>
	</div>
	<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
		<button class="btn btn-secondary" data-placement="bottom" data-toggle="tooltip-primary" title="Tooltip on bottom" type="button">Hover me</button>
	</div>
	<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
		<button class="btn btn-secondary" data-placement="left" data-toggle="tooltip-primary" title="Tooltip on left" type="button">Hover me</button>
	</div>
	<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
		<button class="btn btn-secondary" data-placement="right" data-toggle="tooltip-primary" title="Tooltip on right" type="button">Hover me</button>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element2"><i class="las la-clipboard"></i></div>
</figure>
<!---Prism Pre code-->
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
<!--Internal  Datepicker js -->
<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!-- Internal Select2 js-->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!--Internal  Clipboard js-->
<script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>
<!-- Internal Prism js-->
<script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>
@endsection