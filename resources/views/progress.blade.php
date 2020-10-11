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
							<h4 class="content-title mb-0 my-auto">Elements</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Progress</span>
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
						<div class="card" id="progress">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">BASIC PROGRESS</h6>
									<p class="text-muted card-sub-title">A basic progress in all different colors.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="progress mg-b-20">
											<div class="progress-bar wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-20">
											<div class="progress-bar bg-success wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-20">
											<div class="progress-bar bg-warning wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-20">
											<div class="progress-bar bg-danger wd-65p" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress">
											<div class="progress-bar bg-indigo wd-75p" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code" data-toggle="tab" href="#html-code" role="tab" aria-controls="html-code" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="progress01"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="progress mg-b-20">
	<div class="progress-bar wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress mg-b-20">
	<div class="progress-bar bg-success wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress mg-b-20">
	<div class="progress-bar bg-warning wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress mg-b-20">
	<div class="progress-bar bg-danger wd-65p" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
	<div class="progress-bar bg-indigo wd-75p" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#progress01"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>

						<div class="card" id="progress2">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">STRIPED PROGRESS</h6>
									<p class="text-muted card-sub-title">A basic progress in all different colors.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="progress mg-b-20">
											<div class="progress-bar progress-bar-striped wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-20">
											<div class="progress-bar progress-bar-striped bg-success wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-20">
											<div class="progress-bar progress-bar-striped bg-warning wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-20">
											<div class="progress-bar progress-bar-striped bg-danger wd-65p" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress">
											<div class="progress-bar progress-bar-striped bg-info wd-75p" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code2" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code2" data-toggle="tab" href="#html-code2" role="tab" aria-controls="html-code2" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="progress02"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="progress mg-b-20">
	<div class="progress-bar progress-bar-striped wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress mg-b-20">
	<div class="progress-bar progress-bar-striped bg-success wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress mg-b-20">
	<div class="progress-bar progress-bar-striped bg-warning wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress mg-b-20">
	<div class="progress-bar progress-bar-striped bg-danger wd-65p" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
	<div class="progress-bar progress-bar-striped bg-info wd-75p" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#progress02"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>

						<div class="card" id="progress6">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">PROGRESSBAR STYLE</h6>
									<p class="text-muted card-sub-title">A basic progress in all different colors.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="progress progress-style ht-5 mb-4">
											<div class="progress-bar bg-primary wd-80p" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
										</div>
										<div class="progress progress-style ht-5 mb-4">
											<div class="progress-bar bg-danger wd-70p" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
										</div>
										<div class="progress progress-style ht-5 mb-4">
											<div class="progress-bar bg-success wd-60p" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
										</div>
										<div class="progress progress-style ht-5 mb-4">
											<div class="progress-bar bg-warning wd-50p" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
										</div>
										<div class="progress progress-style ht-5 mb-4">
											<div class="progress-bar bg-info wd-40p" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code2" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code2" data-toggle="tab" href="#html-code2" role="tab" aria-controls="html-code2" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="progress55"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="progress progress-style ht-5 mb-4">
	<div class="progress-bar bg-primary wd-80p" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
</div>
<div class="progress progress-style ht-5 mb-4">
	<div class="progress-bar bg-danger wd-70p" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
</div>
<div class="progress progress-style ht-5 mb-4">
	<div class="progress-bar bg-success wd-60p" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
</div>
<div class="progress progress-style ht-5 mb-4">
	<div class="progress-bar bg-warning wd-50p" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
</div>
<div class="progress progress-style ht-5 mb-4">
	<div class="progress-bar bg-info wd-40p" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#progress55"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>

						<div class="card" id="progress3">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Progress Sizes</h6>
									<p class="text-muted card-sub-title">A basic progress in different sizes.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<span class="tx-uppercase tx-11 d-block mg-b-5">Size Super Extra Small</span>
										<div class="progress mg-b-10">
											<div class="progress-bar ht-2 wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-10">
											<div class="progress-bar bg-success ht-2 wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress">
											<div class="progress-bar bg-danger ht-2 wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<span class="tx-uppercase tx-11 d-block mg-t-20 mg-b-5">Size Extra Small</span>
										<div class="progress mg-b-10">
											<div class="progress-bar progress-bar-xs wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-10">
											<div class="progress-bar bg-success progress-bar-xs wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress">
											<div class="progress-bar bg-danger progress-bar-xs wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>

										<span class="tx-uppercase tx-11 d-block mg-t-20 mg-b-5">Size Small</span>
										<div class="progress mg-b-10">
											<div class="progress-bar progress-bar-sm wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-10">
											<div class="progress-bar bg-success progress-bar-sm wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress">
											<div class="progress-bar bg-danger progress-bar-sm wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>

										<span class="tx-uppercase tx-11 d-block mg-t-20 mg-b-5">Size Normal</span>
										<div class="progress mg-b-10">
											<div class="progress-bar wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-10">
											<div class="progress-bar bg-success wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress">
											<div class="progress-bar bg-danger wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>

										<span class="tx-uppercase tx-11 d-block mg-t-20 mg-b-5">Size Large</span>
										<div class="progress mg-b-10">
											<div class="progress-bar progress-bar-lg wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-10">
											<div class="progress-bar bg-success progress-bar-lg wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress">
											<div class="progress-bar bg-danger progress-bar-lg wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code3" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code3" data-toggle="tab" href="#html-code3" role="tab" aria-controls="html-code3" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
	<!-- Prism Precode -->
<figure class="highlight clip-widget" id="progress03"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="progress mg-b-10">
	<div class="progress-bar ht-2 wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress mg-b-10">
	<div class="progress-bar bg-success ht-2 wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
	<div class="progress-bar bg-danger ht-2 wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<span class="tx-uppercase tx-11 d-block mg-t-20 mg-b-5">Size Extra Small</span>
<div class="progress mg-b-10">
	<div class="progress-bar progress-bar-xs wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress mg-b-10">
	<div class="progress-bar bg-success progress-bar-xs wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
	<div class="progress-bar bg-danger progress-bar-xs wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<span class="tx-uppercase tx-11 d-block mg-t-20 mg-b-5">Size Small</span>
<div class="progress mg-b-10">
	<div class="progress-bar progress-bar-sm wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress mg-b-10">
	<div class="progress-bar bg-success progress-bar-sm wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
	<div class="progress-bar bg-danger progress-bar-sm wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<span class="tx-uppercase tx-11 d-block mg-t-20 mg-b-5">Size Normal</span>
<div class="progress mg-b-10">
	<div class="progress-bar wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress mg-b-10">
	<div class="progress-bar bg-success wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
	<div class="progress-bar bg-danger wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<span class="tx-uppercase tx-11 d-block mg-t-20 mg-b-5">Size Large</span>
<div class="progress mg-b-10">
	<div class="progress-bar progress-bar-lg wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress mg-b-10">
	<div class="progress-bar bg-success progress-bar-lg wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
	<div class="progress-bar bg-danger progress-bar-lg wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#progress03"><i class="las la-clipboard"></i></div>
</figure>
	<!-- End Prism Precode -->
								</div>
							</div>
						</div>

						<div class="card" id="progress04">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">PROGRESS LABEL</h6>
									<p class="text-muted card-sub-title">A basic progress in different sizes.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="progress mg-b-10">
											<div class="progress-bar progress-bar-lg wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
										</div>
										<div class="progress mg-b-10">
											<div class="progress-bar progress-bar-lg bg-success wd-60p" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
										</div>
										<div class="progress">
											<div class="progress-bar progress-bar-lg bg-danger wd-95p" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code4" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code4" data-toggle="tab" href="#html-code4" role="tab" aria-controls="html-code4" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="progress4"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="progress mg-b-10">
	<div class="progress-bar progress-bar-lg wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
</div>
<div class="progress mg-b-10">
	<div class="progress-bar progress-bar-lg bg-success wd-60p" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
</div>
<div class="progress">
	<div class="progress-bar progress-bar-lg bg-danger wd-95p" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#progress04"><i class="las la-clipboard"></i></div>
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