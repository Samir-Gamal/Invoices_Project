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
							<h4 class="content-title mb-0 my-auto">Elements</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Badge</span>
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
				<!-- Row -->
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card mg-b-20" id="badge">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Simple Badges
								</div>
								<p class="mg-b-20 text-muted card-sub-title">Badges scale to match the size of the immediate parent element by using relative font sizing and em units...</p>
								<div class="text-wrap">
									<div class="example">
										<h1>Heading 1 <span class="badge badge-light">New</span></h1>
										<h2>Heading 2 <span class="badge badge-light">New</span></h2>
										<h3>Heading 3 <span class="badge badge-light">New</span></h3>
										<h4>Heading 4 <span class="badge badge-light">New</span></h4>
										<h5>Heading 5 <span class="badge badge-light">New</span></h5>
										<h6>Heading 6 <span class="badge badge-light">New</span></h6>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code" data-toggle="tab" href="#html-code" role="tab" aria-controls="html-code" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>

<!---Prism Pre code-->
<figure class="highlight clip-widget" id="badge01"><pre><code class="language-markup"><script type="html-dashlead/script"><h1>Heading 1 <span class="badge badge-light">New</span></h1>
<h2>Heading 2 <span class="badge badge-light">New</span></h2>
<h3>Heading 3 <span class="badge badge-light">New</span></h3>
<h4>Heading 4 <span class="badge badge-light">New</span></h4>
<h5>Heading 5 <span class="badge badge-light">New</span></h5>
<h6>Heading 6 <span class="badge badge-light">New</span></h6>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#badge01"><i class="las la-clipboard"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
					</div>


					<div class="col-lg-12 col-md-12">
						<div class="card mg-b-20" id="badge1">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Colored Badges
								</div>
								<p class="mg-b-20 text-muted card-sub-title">Badges scale to match the size of the immediate parent element by using relative font sizing and em units...</p>
								<div class="text-wrap">
									<div class="example">
										<h1 class="text-primary">Heading 1 <span class="badge badge-primary">New</span></h1>
										<h2 class="text-danger">Heading 2 <span class="badge badge-danger">New</span></h2>
										<h3 class="text-warning">Heading 3 <span class="badge badge-warning">New</span></h3>
										<h4 class="text-success">Heading 4 <span class="badge badge-success">New</span></h4>
										<h5 class="text-info">Heading 5 <span class="badge badge-info">New</span></h5>
										<h6 class="text-secondary">Heading 6 <span class="badge badge-secondary">New</span></h6>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code2" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code2" data-toggle="tab" href="#html-code2" role="tab" aria-controls="html-code2" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>

<!---Prism Pre code-->
<figure class="highlight clip-widget" id="badge02"><pre><code class="language-markup"><script type="html-dashlead/script"><h1 class="text-primary">Heading 1 <span class="badge badge-primary">New</span></h1>
<h2  class="text-danger">Heading 2 <span class="badge badge-danger">New</span></h2>
<h3  class="text-warning">Heading 3 <span class="badge badge-warning">New</span></h3>
<h4  class="text-success">Heading 4 <span class="badge badge-success">New</span></h4>
<h5  class="text-info">Heading 5 <span class="badge badge-info">New</span></h5>
<h6  class="text-secondary">Heading 6 <span class="badge badge-secondary">New</span></h6>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#badge02"><i class="las la-clipboard"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-12 col-md-12">
						<div class="card mg-b-20" id="badge2">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									BADGES
								</div>
								<p class="mg-b-20 text-muted card-sub-title">Badges scale to match the size of the immediate parent element by using relative font sizing and em units...</p>
								<div class="text-wrap">
									<div class="example">
										<span class="badge badge-primary">Primary</span>
										<span class="badge badge-secondary">Secondary</span>
										<span class="badge badge-success">Success</span>
										<span class="badge badge-danger">Danger</span>
										<span class="badge badge-warning">Warning</span>
										<span class="badge badge-info">Info</span>
										<span class="badge badge-light">Light</span>
										<span class="badge badge-dark">Dark</span>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code3" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code3" data-toggle="tab" href="#html-code3" role="tab" aria-controls="html-code3" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>

<!---Prism Pre code-->
<figure class="highlight clip-widget" id="badge03"><pre><code class="language-markup"><script type="html-dashlead/script"><span class="badge badge-primary">Primary</span>
<span class="badge badge-secondary">Secondary</span>
<span class="badge badge-success">Success</span>
<span class="badge badge-danger">Danger</span>
<span class="badge badge-warning">Warning</span>
<span class="badge badge-info">Info</span>
<span class="badge badge-light">Light</span>
<span class="badge badge-dark">Dark</span>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#badge03"><i class="las la-clipboard"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-12 col-md-12">
						<div class="card mg-b-20" id="badge3">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Pill Badges
								</div>
								<p class="text-muted card-sub-title">Use the <code>.badge-pill</code> modifier class to make badges more rounded.</p>
								<div class="text-wrap">
									<div class="example">
										<span class="badge badge-pill badge-primary">Primary</span>
										<span class="badge badge-pill badge-secondary">Secondary</span>
										<span class="badge badge-pill badge-success">Success</span>
										<span class="badge badge-pill badge-danger">Danger</span>
										<span class="badge badge-pill badge-warning">Warning</span>
										<span class="badge badge-pill badge-info">Info</span>
										<span class="badge badge-pill badge-light">Light</span>
										<span class="badge badge-pill badge-dark">Dark</span>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code4" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code4" data-toggle="tab" href="#html-code4" role="tab" aria-controls="html-code4" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>

<!---Prism Pre code-->
<figure class="highlight clip-widget" id="badge04"><pre><code class="language-markup"><script type="html-dashlead/script"><span class="badge badge-pill badge-primary">Primary</span>
<span class="badge badge-pill badge-secondary">Secondary</span>
<span class="badge badge-pill badge-success">Success</span>
<span class="badge badge-pill badge-danger">Danger</span>
<span class="badge badge-pill badge-warning">Warning</span>
<span class="badge badge-pill badge-info">Info</span>
<span class="badge badge-pill badge-light">Light</span>
<span class="badge badge-pill badge-dark">Dark</span>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#badge04"><i class="las la-clipboard"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-12 col-md-12">
						<div class="card mg-b-20" id="badge4">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Link Badges
								</div>
								<p class="mg-b-20 text-muted card-sub-title">Using the contextual badge classes on an element quickly provide actionable badges with hover and focus states.</p>
								<div class="text-wrap">
									<div class="example">
										<a class="badge badge-primary" href="#">Primary</a>
										<a class="badge badge-secondary" href="#">Secondary</a>
										<a class="badge badge-success" href="#">Success</a>
										<a class="badge badge-danger" href="#">Danger</a>
										<a class="badge badge-warning" href="#">Warning</a>
										<a class="badge badge-info" href="#">Info</a>
										<a class="badge badge-light" href="#">Light</a>
										<a class="badge badge-dark" href="#">Dark</a>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code5" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code5" data-toggle="tab" href="#html-code5" role="tab" aria-controls="html-code5" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>

<!---Prism Pre code-->
<figure class="highlight clip-widget" id="badge05"><pre><code class="language-markup"><script type="html-dashlead/script"><a class="badge badge-primary" href="#">Primary</a>
<a class="badge badge-secondary" href="#">Secondary</a>
<a class="badge badge-success" href="#">Success</a>
<a class="badge badge-danger" href="#">Danger</a>
<a class="badge badge-warning" href="#">Warning</a>
<a class="badge badge-info" href="#">Info</a>
<a class="badge badge-light" href="#">Light</a>
<a class="badge badge-dark" href="#">Dark</a>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#badge05"><i class="las la-clipboard"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-12 col-md-12">
						<div class="card mg-b-20" id="badge5">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Link Badges
								</div>
								<p class="mg-b-20 text-muted card-sub-title">Badges can be used as part of links or buttons to provide a counter.</p>
								<div class="text-wrap">
									<div class="example">
										<button type="button" class="btn btn-primary mt-1 mb-1">Primary <span class="badge badge-light">22</span></button>
										<button type="button" class="btn btn-success mt-1 mb-1">Success <span class="badge badge-light">New</span></button>
										<button type="button" class="btn btn-info mt-1 mb-1">Info <span class="badge badge-light">5</span></button>
										<button type="button" class="btn btn-warning mt-1 mb-1">Warning <span class="badge badge-light badge-pill"><i class="typcn typcn-input-checked-outline tx-14"></i></span></button>
										<button type="button" class="btn btn-danger mt-1 mb-1">Danger <span class="badge badge-light badge-pill">Updated</span></button>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code6" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code6" data-toggle="tab" href="#html-code6" role="tab" aria-controls="html-code6" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<!---Prism Pre code-->
<figure class="highlight clip-widget" id="badge06"><pre><code class="language-markup"><script type="html-dashlead/script"><button type="button" class="btn btn-primary mt-1 mb-1">Primary <span class="badge badge-light">22</span></button>
<button type="button" class="btn btn-success mt-1 mb-1">Success <span class="badge badge-light">New</span></button>
<button type="button" class="btn btn-info mt-1 mb-1">Info <span class="badge badge-light">5</span></button>
<button type="button" class="btn btn-warning mt-1 mb-1">Warning <span class="badge badge-light badge-pill">
<i class="typcn typcn-input-checked-outline tx-14"></i></span></button>
<button type="button" class="btn btn-danger mt-1 mb-1">Danger <span class="badge badge-light badge-pill">Updated</span></button>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#badge06"><i class="las la-clipboard"></i></div>
</figure>
<!---Prism Pre code-->
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