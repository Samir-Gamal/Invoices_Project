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
							<h4 class="content-title mb-0 my-auto">Elements</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Popover</span>
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
						<div class="card" id="popover">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">DEFAULT POPOVER</h6>
									<p class="text-muted card-sub-title">Documentation and examples for adding Bootstrap popovers, like those found in iOS, to any element on your site..</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="tx-10 mb-1 font-weight-bold text-muted text-uppercase">
											STATIC EXAMPLE
										</div>
										<div class="popover-static-demo">
											<div class="row">
												<div class="col-md-6">
													<div class="popover bs-popover-top">
														<div class="arrow"></div>
														<h3 class="popover-header">Popover top</h3>
														<div class="popover-body">
															<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
														</div>
													</div><!-- popover -->
												</div><!-- col-6 -->
												<div class="col-md-6 mg-t-30 mg-md-t-0">
													<div class="popover bs-popover-bottom">
														<div class="arrow"></div>
														<h3 class="popover-header">Popover Bottom</h3>
														<div class="popover-body">
															<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
														</div>
													</div><!-- popover -->
												</div><!-- col-6 -->
												<div class="col-md-6 mg-t-30">
													<div class="popover bs-popover-left">
														<div class="arrow"></div>
														<h3 class="popover-header">Popover Left</h3>
														<div class="popover-body">
															<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
														</div>
													</div><!-- popover -->
												</div><!-- col-6 -->
												<div class="col-md-6 mg-t-30">
													<div class="popover bs-popover-right">
														<div class="arrow"></div>
														<h3 class="popover-header">Popover Right</h3>
														<div class="popover-body">
															<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
														</div>
													</div><!-- popover -->
												</div><!-- col-6 -->
											</div><!-- row -->
										</div>
									</div>
									<div class="example border-top-0">
										<div class="tx-10 mb-1 font-weight-bold text-muted text-uppercase">
											Live EXAMPLE
										</div>
										<div class="pd-20 bg-gray-200">
											<div class="row row-sm tx-center">
												<div class="col-sm-6 col-lg-3">
													<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="top" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover top">Click me</button>
												</div><!-- col-3 -->
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
													<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="bottom" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover bottom">Click me</button>
												</div><!-- col-3 -->
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
													<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="left" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover left">Click me</button>
												</div><!-- col-3 -->
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
													<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="right" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover right">Click me</button>
												</div><!-- col-3 -->
											</div><!-- row -->
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code" data-toggle="tab" href="#html-code" role="tab" aria-controls="html-code" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="popover01"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="row row-sm tx-center">
	<div class="col-sm-6 col-lg-3">
		<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="top" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover top">Click me</button>
	</div><!-- col-3 -->
	<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
		<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="bottom" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover bottom">Click me</button>
	</div><!-- col-3 -->
	<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
		<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="left" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover left">Click me</button>
	</div><!-- col-3 -->
	<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
		<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="right" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover right">Click me</button>
	</div><!-- col-3 -->
</div><!-- row --></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#popover01"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>

							<div class="card" id="popover2">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">DEFAULT POPOVER</h6>
										<p class="text-muted card-sub-title">Documentation and examples for adding Bootstrap popovers, like those found in iOS, to any element on your site..</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="popover-static-demo">
												<div class="row">
													<div class="col-md-6">
														<div class="popover popover-head-primary bs-popover-top">
															<div class="arrow"></div>
															<h3 class="popover-header">Popover top</h3>
															<div class="popover-body">
																<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
															</div>
														</div><!-- popover -->
													</div><!-- col-6 -->
													<div class="col-md-6 mg-t-30 mg-md-t-0">
														<div class="popover popover-head-secondary bs-popover-bottom">
															<div class="arrow"></div>
															<h3 class="popover-header">Popover Bottom</h3>
															<div class="popover-body">
																<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
															</div>
														</div><!-- popover -->
													</div><!-- col-6 -->
												</div>
											</div>
										</div>
										<div class="example border-top-0">
											<div class="pd-20 bg-gray-200">
												<div class="row row-sm tx-center">
													<div class="col-sm-6 col-lg-3">
														<button type="button" class="btn btn-secondary" data-container="body" data-popover-color="head-primary" data-placement="top" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover top">Click me</button>
													</div><!-- col-3 -->
													<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
														<button type="button" class="btn btn-secondary" data-container="body" data-popover-color="head-secondary" data-placement="bottom" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover bottom">Click me</button>
													</div><!-- col-3 -->
												</div>
											</div>
										</div>
										<ul class="nav nav-tabs html-source" id="html-source-code2" role="tablist">
											<li class="nav-item">
												<a class="nav-link active ml-1 html-code" id="html-code2" data-toggle="tab" href="#html-code2" role="tab" aria-controls="html-code2" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
											</li>
										</ul>
	<!-- Prism Precode -->
	<figure class="highlight clip-widget" id="popover02"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="row row-sm tx-center">
		<div class="col-sm-6 col-lg-3">
			<button type="button" class="btn btn-secondary" data-container="body" data-popover-color="head-primary" data-placement="top" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover top">Click me</button>
		</div><!-- col-3 -->
		<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
			<button type="button" class="btn btn-secondary" data-container="body" data-popover-color="head-secondary" data-placement="bottom" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover bottom">Click me</button>
		</div><!-- col-3 -->
	</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#popover02"><i class="las la-clipboard"></i></div>
	</figure>
	<!-- End Prism Precode -->
									</div>
								</div>
							</div>

							<div class="card" id="popover3">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">DEFAULT POPOVER</h6>
										<p class="text-muted card-sub-title">Documentation and examples for adding Bootstrap popovers, like those found in iOS, to any element on your site..</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="popover-static-demo">
												<div class="row">
													<div class="col-md-6">
														<div class="popover popover-primary bs-popover-top">
															<div class="arrow"></div>
															<h3 class="popover-header">Popover top</h3>
															<div class="popover-body">
																<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
															</div>
														</div><!-- popover -->
													</div><!-- col-6 -->
													<div class="col-md-6 mg-t-30 mg-md-t-0">
														<div class="popover popover-secondary bs-popover-bottom">
															<div class="arrow"></div>
															<h3 class="popover-header">Popover Bottom</h3>
															<div class="popover-body">
																<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
															</div>
														</div><!-- popover -->
													</div><!-- col-6 -->
												</div>
											</div>
										</div>
										<div class="example border-top-0">
											<div class="pd-20 bg-gray-200">
												<div class="row row-sm tx-center">
													<div class="col-sm-6 col-lg-3">
														<button type="button" class="btn btn-secondary" data-container="body" data-popover-color="primary" data-placement="top" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover top">Click me</button>
												    </div><!-- col-3 -->
													<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
														<button type="button" class="btn btn-secondary" data-container="body" data-popover-color="secondary" data-placement="bottom" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover bottom">Click me</button>
													</div><!-- col-3 -->
												</div>
											</div>
										</div>
										<ul class="nav nav-tabs html-source" id="html-source-code3" role="tablist">
											<li class="nav-item">
												<a class="nav-link active ml-1 html-code" id="html-code3" data-toggle="tab" href="#html-code3" role="tab" aria-controls="html-code3" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
											</li>
										</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="popover03"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="row row-sm tx-center">
	<div class="col-sm-6 col-lg-3">
		<button type="button" class="btn btn-secondary" data-container="body" data-popover-color="primary" data-placement="top" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover top">Click me</button>
	</div><!-- col-3 -->
	<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
		<button type="button" class="btn btn-secondary" data-container="body" data-popover-color="secondary" data-placement="bottom" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover bottom">Click me</button>
	</div><!-- col-3 -->
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#popover03"><i class="las la-clipboard"></i></div>
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