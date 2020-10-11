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
							<h4 class="content-title mb-0 my-auto">Elements</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Navigation</span>
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
						<div class="card custom-card" id="basic">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Basic Navigation</h6>
									<p class="text-muted card-sub-title">Below is an example of a basic navigation</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="p-3 bg-light border">
											<nav class="nav main-nav flex-column flex-md-row">
												<a class="nav-link active" href="#">Home</a>
												<a class="nav-link" href="#">About</a>
												<a class="nav-link" href="#">Pages</a>
												<a class="nav-link" href="#">Custom</a>
											</nav>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code" data-toggle="tab" href="#html-code" role="tab" aria-controls="html-code" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="nav1"><pre><code class="language-markup"><script type="html-dashlead/script"><nav class="nav main-nav flex-column flex-md-row">
	<a class="nav-link active" href="#">Home</a>
	<a class="nav-link" href="#">About</a>
	<a class="nav-link" href="#">Pages</a>
	<a class="nav-link" href="#">Custom</a>
</nav></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#nav1"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="vertical">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Vertical Navigation</h6>
										<p class="text-muted card-sub-title">Below is an example of a basic navigation in a vertical mode</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="p-3 bg-light border">
												<nav class="nav main-nav-column">
													<a class="nav-link active" href="#">Home</a>
													<a class="nav-link" href="#">About</a>
													<a class="nav-link" href="#">Pages</a>
													<a class="nav-link" href="#">Custom</a>
												</nav>
											</div>
										</div>
										<ul class="nav nav-tabs html-source" id="html-source-code2" role="tablist">
											<li class="nav-item">
												<a class="nav-link active ml-1 html-code" id="html-code2" data-toggle="tab" href="#html-code2" role="tab" aria-controls="html-code2" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
											</li>
										</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="nav2"><pre><code class="language-markup"><script type="html-dashlead/script"><nav class="nav main-nav-column">
	<a class="nav-link active" href="#">Home</a>
	<a class="nav-link" href="#">About</a>
	<a class="nav-link" href="#">Pages</a>
	<a class="nav-link" href="#">Custom</a>
</nav></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#nav2"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="pill">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Pills Navigation</h6>
										<p class="text-muted card-sub-title">Below is an example of a pill navigation</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="p-3 bg-light border">
												<nav class="nav nav-pills flex-column flex-md-row">
													<a class="nav-link active" href="#">Home</a>
													<a class="nav-link" href="#">About</a>
													<a class="nav-link" href="#">Pages</a>
													<a class="nav-link" href="#">Custom</a>
												</nav>
											</div>
										</div>
										<ul class="nav nav-tabs html-source" id="html-source-code3" role="tablist">
											<li class="nav-item">
												<a class="nav-link active ml-1 html-code" id="html-code3" data-toggle="tab" href="#html-code3" role="tab" aria-controls="html-code3" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
											</li>
										</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="nav3"><pre><code class="language-markup"><script type="html-dashlead/script"><nav class="nav nav-pills flex-column flex-md-row">
	<a class="nav-link active" href="#">Home</a>
	<a class="nav-link" href="#">About</a>
	<a class="nav-link" href="#">Pages</a>
	<a class="nav-link" href="#">Custom</a>
</nav></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#nav3"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="verticallpill">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Vertical Pills Navigation</h6>
										<p class="text-muted card-sub-title">Below is an example of a pill navigation in vertical mode</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="p-3 bg-light border">
												<nav class="nav nav-pills flex-column">
													<a class="nav-link active" href="#">Home</a>
													<a class="nav-link" href="#">About</a>
													<a class="nav-link" href="#">Pages</a>
													<a class="nav-link" href="#">Custom</a>
												</nav>
											</div>
										</div>
										<ul class="nav nav-tabs html-source" id="html-source-code4" role="tablist">
											<li class="nav-item">
												<a class="nav-link active ml-1 html-code" id="html-code4" data-toggle="tab" href="#html-code4" role="tab" aria-controls="html-code4" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
											</li>
										</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="nav4"><pre><code class="language-markup"><script type="html-dashlead/script"><nav class="nav nav-pills flex-column">
	<a class="nav-link active" href="#">Home</a>
	<a class="nav-link" href="#">About</a>
	<a class="nav-link" href="#">Pages</a>
	<a class="nav-link" href="#">Custom</a>
</nav></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#nav4"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="hori">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Horizontal Alignment</h6>
										<p class="text-muted card-sub-title">A navigation with center and right in which left is the default.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="p-3 bg-light mb-3">
												<nav class="nav main-nav flex-column flex-md-row justify-content-center">
													<a class="nav-link active" href="#">Home</a>
													<a class="nav-link" href="#">About</a>
													<a class="nav-link" href="#">Pages</a>
													<a class="nav-link" href="#">Custom</a>
												</nav>
											</div>
											<div class="p-3 bg-light border">
												<nav class="nav main-nav flex-column flex-md-row justify-content-end">
													<a class="nav-link active" href="#">Home</a>
													<a class="nav-link" href="#">About</a>
													<a class="nav-link" href="#">Pages</a>
													<a class="nav-link" href="#">Custom</a>
												</nav>
											</div>
										</div>
										<ul class="nav nav-tabs html-source" id="html-source-code5" role="tablist">
											<li class="nav-item">
												<a class="nav-link active ml-1 html-code" id="html-code5" data-toggle="tab" href="#html-code5" role="tab" aria-controls="html-code5" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
											</li>
										</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="nav5"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="p-3 bg-light mb-3">
	<nav class="nav main-nav flex-column flex-md-row justify-content-center">
		<a class="nav-link active" href="#">Home</a>
		<a class="nav-link" href="#">About</a>
		<a class="nav-link" href="#">Pages</a>
		<a class="nav-link" href="#">Custom</a>
	</nav>
</div>
<div class="p-3 bg-light border">
	<nav class="nav main-nav flex-column flex-md-row justify-content-end">
		<a class="nav-link active" href="#">Home</a>
		<a class="nav-link" href="#">About</a>
		<a class="nav-link" href="#">Pages</a>
		<a class="nav-link" href="#">Custom</a>
	</nav>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#nav5"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="colored">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Colored Nav Variations</h6>
										<p class="text-muted card-sub-title">A navigation with colored nav that wrapped the navigation.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="p-3 bg-primary mb-3">
												<nav class="nav main-nav main-nav-colored-bg main-nav-dark flex-column flex-md-row">
													<a class="nav-link active" href="#">Home</a>
													<a class="nav-link" href="#">About</a>
													<a class="nav-link" href="#">Pages</a>
													<a class="nav-link" href="#">Custom</a>
												</nav>
											</div>
											<div class="p-3 bg-secondary">
												<nav class="nav main-nav main-nav-colored-bg main-nav-dark flex-column flex-md-row">
													<a class="nav-link active" href="#">Home</a>
													<a class="nav-link" href="#">About</a>
													<a class="nav-link" href="#">Pages</a>
													<a class="nav-link" href="#">Custom</a>
												</nav>
											</div>
										</div>
										<ul class="nav nav-tabs html-source" id="html-source-code6" role="tablist">
											<li class="nav-item">
												<a class="nav-link active ml-1 html-code" id="html-code6" data-toggle="tab" href="#html-code6" role="tab" aria-controls="html-code6" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
											</li>
										</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="nav6"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="p-3 bg-primary mb-3">
	<nav class="nav main-nav main-nav-colored-bg main-nav-dark flex-column flex-md-row">
		<a class="nav-link active" href="#">Home</a>
		<a class="nav-link" href="#">About</a>
		<a class="nav-link" href="#">Pages</a>
		<a class="nav-link" href="#">Custom</a>
	</nav>
</div>
<div class="p-3 bg-secondary">
	<nav class="nav main-nav main-nav-colored-bg main-nav-dark flex-column flex-md-row">
		<a class="nav-link active" href="#">Home</a>
		<a class="nav-link" href="#">About</a>
		<a class="nav-link" href="#">Pages</a>
		<a class="nav-link" href="#">Custom</a>
	</nav>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#nav6"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="underline">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Underline Navigation</h6>
										<p class="text-muted card-sub-title">Below is a type of navigation that have a line at the bottom of active link.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="p-3 bg-light border">
												<nav class="nav main-nav-line flex-column flex-md-row">
													<a class="nav-link active" data-toggle="tab" href="#">Home</a>
													<a class="nav-link" data-toggle="tab" href="#">About</a>
													<a class="nav-link" data-toggle="tab" href="#">Pages</a>
													<a class="nav-link" data-toggle="tab" href="#">Custom</a>
												</nav>
											</div>
										</div>
										<ul class="nav nav-tabs html-source" id="html-source-code7" role="tablist">
											<li class="nav-item">
												<a class="nav-link active ml-1 html-code" id="html-code7" data-toggle="tab" href="#html-code7" role="tab" aria-controls="html-code7" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
											</li>
										</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="nav7"><pre><code class="language-markup"><script type="html-dashlead/script"><nav class="nav main-nav-line flex-column flex-md-row">
	<a class="nav-link active" data-toggle="tab" href="#">Home</a>
	<a class="nav-link" data-toggle="tab" href="#">About</a>
	<a class="nav-link" data-toggle="tab" href="#">Pages</a>
	<a class="nav-link" data-toggle="tab" href="#">Custom</a>
</nav></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#nav7"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="tab">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Simple Tab Navigation</h6>
										<p class="text-muted card-sub-title">Below is a tab navigation that have only few links.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="border">
												<div class="bg-gray-100 nav-bg">
													<nav class="nav nav-tabs">
														<a class="nav-link active" data-toggle="tab" href="#tabCont1">Home</a>
														<a class="nav-link" data-toggle="tab" href="#tabCont2">About</a>
														<a class="nav-link" data-toggle="tab" href="#tabCont3">Contact</a>
													</nav>
												</div>
												<div class="card-body tab-content">
													<div class="tab-pane active show" id="tabCont1">
														Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
													</div>
													<div class="tab-pane" id="tabCont2">
														At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
													</div>
													<div class="tab-pane" id="tabCont3">
														 Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
													</div>
												</div>
											</div>
										</div>
										<ul class="nav nav-tabs html-source" id="html-source-code8" role="tablist">
											<li class="nav-item">
												<a class="nav-link active ml-1 html-code" id="html-code8" data-toggle="tab" href="#html-code8" role="tab" aria-controls="html-code8" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
											</li>
										</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="nav8"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="tab-content">
	<div class="tab-pane active show" id="tabCont1">
		Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
	</div>
	<div class="tab-pane" id="tabCont2">
		At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
	</div>
	<div class="tab-pane" id="tabCont3">
		 Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#nav8"><i class="las la-clipboard"></i></div>
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