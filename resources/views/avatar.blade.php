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
							<h4 class="content-title mb-0 my-auto">Elements</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Avatar</span>
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
					<div class="col-lg-12 col-md-12">
						<div class="card custom-card" id="sizes">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Avatar Sizes</h6>
									<p class="text-muted card-sub-title">An avatar can have different sizes like larger and smaller avatar.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="demo-avatar-group">
											<div class="main-img-user avatar-xs">
												<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/2.jpg')}}">
											</div>
											<div class="main-img-user avatar-sm">
												<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/3.jpg')}}">
											</div>
											<div class="main-img-user">
												<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/4.jpg')}}">
											</div>
											<div class="main-img-user avatar-md">
												<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/5.jpg')}}">
											</div>
											<div class="main-img-user avatar-lg">
												<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/6.jpg')}}">
											</div>
											<div class="main-img-user avatar-xl d-none d-sm-block">
												<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/7.jpg')}}">
											</div>
											<div class="main-img-user avatar-xxl d-none d-sm-block">
												<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/8.jpg')}}">
											</div>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code1" data-toggle="tab" href="#html-code1" role="tab" aria-controls="html-code1" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="avatar1"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="demo-avatar-group">
	<div class="main-img-user avatar-xs">
		<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/2.jpg')}}">
	</div>
	<div class="main-img-user avatar-sm">
		<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/3.jpg')}}">
	</div>
	<div class="main-img-user">
		<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/4.jpg')}}">
	</div>
	<div class="main-img-user avatar-md">
		<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/5.jpg')}}">
	</div>
	<div class="main-img-user avatar-lg">
		<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/6.jpg')}}">
	</div>
	<div class="main-img-user avatar-xl d-none d-sm-block">
		<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/7.jpg')}}">
	</div>
	<div class="main-img-user avatar-xxl d-none d-sm-block">
		<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/8.jpg')}}">
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#avatar1"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-12 col-md-12">
						<div class="card custom-card" id="shapes">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Avatar Shapes</h6>
									<p class="text-muted card-sub-title">An avatar can have different shapes like square and round, radius avatars.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="demo-avatar-group">
											<div class="main-img-user avatar-md">
												<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/4.jpg')}}">
											</div>
											<div class="main-img-user avatar-md">
												<img alt="avatar" class="square" src="{{URL::asset('assets/img/faces/5.jpg')}}">
											</div>
											<div class="main-img-user avatar-md">
												<img alt="avatar" class="radius" src="{{URL::asset('assets/img/faces/6.jpg')}}">
											</div>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code2" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code2" data-toggle="tab" href="#html-code2" role="tab" aria-controls="html-code2" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="avatar2"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="demo-avatar-group">
	<div class="main-img-user avatar-md">
		<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/4.jpg')}}">
	</div>
	<div class="main-img-user avatar-md">
		<img alt="avatar" class="square" src="{{URL::asset('assets/img/faces/5.jpg')}}">
	</div>
	<div class="main-img-user avatar-md">
		<img alt="avatar" class="radius" src="{{URL::asset('assets/img/faces/6.jpg')}}">
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#avatar2"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>


					<div class="col-lg-12 col-md-12">
						<div class="card custom-card" id="initials">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Initials Avatars</h6>
									<p class="text-muted card-sub-title">An avatar can have a temporary use of user's initial name while their photos are not yet available.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="demo-avatar-group avatar-list">
											<div class="avatar avatar-xs bg-primary rounded-circle">
												A
											</div>
											<div class="avatar avatar-sm bg-secondary rounded-circle">
												U
											</div>
											<div class="avatar bg-info rounded-circle">
												C
											</div>
											<div class="avatar avatar-md bg-success rounded-circle">
												X
											</div>
											<div class="avatar avatar-lg bg-warning rounded-circle">
												E
											</div>
											<div class="avatar avatar-xl d-none d-sm-flex bg-danger rounded-circle">
												M
											</div>
											<div class="avatar avatar-xxl d-none d-sm-flex bg-pink rounded-circle">
												NB
											</div>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code3" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code3" data-toggle="tab" href="#html-code3" role="tab" aria-controls="html-code3" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="avatar3"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="demo-avatar-group avatar-list">
	<div class="avatar avatar-xs bg-primary rounded-circle">
		A
	</div>
	<div class="avatar avatar-sm bg-secondary rounded-circle">
		U
	</div>
	<div class="avatar bg-info rounded-circle">
		C
	</div>
	<div class="avatar avatar-md bg-success rounded-circle">
		X
	</div>
	<div class="avatar avatar-lg bg-warning rounded-circle">
		E
	</div>
	<div class="avatar avatar-xl d-none d-sm-flex bg-danger rounded-circle">
		M
	</div>
	<div class="avatar avatar-xxl d-none d-sm-flex bg-pink rounded-circle">
		NB
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#avatar3"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="status">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Status Indicator</h6>
										<p class="text-muted card-sub-title">An avatar can have a status indicator to indicate users availability.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="demo-avatar-group">
												<div class="main-avatar avatar online">
													<img alt="avatar" class="rounded-circle avatar" src="{{URL::asset('assets/img/faces/9.jpg')}}">
												</div>
												<div class="main-avatar avatar-md offline">
													eb
												</div>
											</div>
										</div>
										<ul class="nav nav-tabs html-source" id="html-source-code4" role="tablist">
											<li class="nav-item">
												<a class="nav-link active ml-1 html-code" id="html-code4" data-toggle="tab" href="#html-code4" role="tab" aria-controls="html-code4" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
											</li>
										</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="avatar4"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="demo-avatar-group">
	<div class="main-avatar avatar online">
		<img alt="avatar" class="rounded-circle avatar" src="{{URL::asset('assets/img/faces/9.jpg')}}">
	</div>
	<div class="main-avatar avatar-md offline">
		eb
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#avatar4"><i class="las la-clipboard"></i></div>
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