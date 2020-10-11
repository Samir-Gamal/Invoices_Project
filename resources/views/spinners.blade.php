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
							<h4 class="content-title mb-0 my-auto">Elements</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Spinner</span>
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
						<div class="card" id="spinner">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Basic Example</h6>
									<p class="text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="spinner-border" role="status">
											<span class="sr-only">Loading...</span>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code" data-toggle="tab" href="#html-code" role="tab" aria-controls="html-code" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="spinner01"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="spinner-border" role="status">
	<span class="sr-only">Loading...</span>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#spinner01"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>

						<div class="card" id="spinner2">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">BORDER SPINNERS</h6>
									<p class="text-muted card-sub-title">Use the border spinners for a lightweight loading indicator..</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div>
											<div class="spinner-border text-primary" role="status">
												<span class="sr-only">Loading...</span>
											</div>
											<div class="spinner-border text-secondary" role="status">
												<span class="sr-only">Loading...</span>
											</div>
											<div class="spinner-border text-success" role="status">
												<span class="sr-only">Loading...</span>
											</div>
											<div class="spinner-border text-danger" role="status">
												<span class="sr-only">Loading...</span>
											</div>
											<div class="spinner-border text-warning" role="status">
												<span class="sr-only">Loading...</span>
											</div>
											<div class="spinner-border text-info" role="status">
												<span class="sr-only">Loading...</span>
											</div>
											<div class="spinner-border text-light" role="status">
												<span class="sr-only">Loading...</span>
											</div>
											<div class="spinner-border text-dark" role="status">
												<span class="sr-only">Loading...</span>
											</div>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code2" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code2" data-toggle="tab" href="#html-code2" role="tab" aria-controls="html-code2" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="spinner02"><pre><code class="language-markup"><script type="html-dashlead/script"><div>
	<div class="spinner-border text-primary" role="status">
		<span class="sr-only">Loading...</span>
	</div>
	<div class="spinner-border text-secondary" role="status">
		<span class="sr-only">Loading...</span>
	</div>
	<div class="spinner-border text-success" role="status">
		<span class="sr-only">Loading...</span>
	</div>
	<div class="spinner-border text-danger" role="status">
		<span class="sr-only">Loading...</span>
	</div>
	<div class="spinner-border text-warning" role="status">
		<span class="sr-only">Loading...</span>
	</div>
	<div class="spinner-border text-info" role="status">
		<span class="sr-only">Loading...</span>
	</div>
	<div class="spinner-border text-light" role="status">
		<span class="sr-only">Loading...</span>
	</div>
	<div class="spinner-border text-dark" role="status">
		<span class="sr-only">Loading...</span>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#spinner02"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>

						<div class="card" id="spinner3">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">GROWING SPINNER</h6>
									<p class="text-muted card-sub-title">If you don’t fancy a border spinner, switch to the grow spinner. While it doesn’t technically spin, it does repeatedly grow!</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="spinner-grow" role="status">
											<span class="sr-only">Loading...</span>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code3" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code3" data-toggle="tab" href="#html-code3" role="tab" aria-controls="html-code3" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="spinner03"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="spinner-grow" role="status">
	<span class="sr-only">Loading...</span>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#spinner03"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>

						<div class="card" id="spinner4">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">GROWING Color</h6>
									<p class="text-muted card-sub-title">If you don’t fancy a border spinner, switch to the grow spinner. While it doesn’t technically spin, it does repeatedly grow!</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="spinner-grow text-primary" role="status">
											<span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-grow text-secondary" role="status">
											<span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-grow text-success" role="status">
											<span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-grow text-danger" role="status">
											<span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-grow text-warning" role="status">
											<span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-grow text-info" role="status">
											<span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-grow text-light" role="status">
											<span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-grow text-dark" role="status">
											<span class="sr-only">Loading...</span>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code4" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code4" data-toggle="tab" href="#html-code4" role="tab" aria-controls="html-code4" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="spinner04"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="spinner-grow text-primary" role="status">
	<span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-secondary" role="status">
	<span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-success" role="status">
	<span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-danger" role="status">
	<span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-warning" role="status">
	<span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-info" role="status">
	<span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-light" role="status">
	<span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-dark" role="status">
	<span class="sr-only">Loading...</span>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#spinner04"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>

						<div class="card" id="spinner5">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">ALIGNMENT</h6>
									<p class="text-muted card-sub-title">Use flexbox utilities or text alignment utilities to place spinners exactly where you need them in any situation.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="text-center mg-b-20">
											<div class="spinner-border" role="status">
												<span class="sr-only">Loading...</span>
											</div>
										</div>
										<div class="text-right">
											<div class="spinner-border" role="status">
												<span class="sr-only">Loading...</span>
											</div>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code5" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code5" data-toggle="tab" href="#html-code5" role="tab" aria-controls="html-code5" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="spinner05"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="text-center mg-b-20">
	<div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	</div>
</div>
<div class="text-right">
	<div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#spinner05"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>

						<div class="card" id="spinner6">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Size</h6>
									<p class="mg-b-20">Add <code>.spinner-border-sm</code> and <code>.spinner-grow-sm</code> to make a smaller spinner that can quickly be used within other components.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="spinner-border spinner-border-sm" role="status">
											<span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-grow spinner-grow-sm" role="status">
											<span class="sr-only">Loading...</span>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code6" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code6" data-toggle="tab" href="#html-code6" role="tab" aria-controls="html-code6" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="spinner06"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="spinner-border spinner-border-sm" role="status">
	<span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow spinner-grow-sm" role="status">
	<span class="sr-only">Loading...</span>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#spinner06"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>

						<div class="card" id="spinner7">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Button</h6>
									<p class="text-muted card-sub-title">Use spinners within buttons to indicate an action is currently processing or taking place. You may also swap the text out of the spinner element and utilize button text as needed..</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<button class="btn btn-primary" type="button" disabled>
										    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
											<span class="sr-only">Loading...</span>
										</button>
										<button class="btn btn-primary" type="button" disabled>
											<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
										  Loading...
										</button>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code7" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code7" data-toggle="tab" href="#html-code7" role="tab" aria-controls="html-code7" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="spinner07"><pre><code class="language-markup"><script type="html-dashlead/script"><button class="btn btn-primary" type="button" disabled>
	<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
	<span class="sr-only">Loading...</span>
</button>
<button class="btn btn-primary" type="button" disabled>
	<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
  Loading...
</button></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#spinner07"><i class="las la-clipboard"></i></div>
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