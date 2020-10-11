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
							<h4 class="content-title mb-0 my-auto">Elements</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Typography</span>
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
				<!--row open -->
				<div class="row row-sm">
					<div class="col-xl-6 col-md-12">
						<div class="card">
							<div class="card-header pb-0">
								<h3 class="card-title mb-2">Default Heading Text</h3>
								<p class="mg-b-20 tx-13 text-muted">Examples using standard <code>h1</code> to <code>h6</code> html tags</p>
							</div>
							<div class="card-body pt-0">
								<div class="text-wrap">
									<div class="example">
										<h1>h1. Heading</h1>
										<h2>h2. Heading</h2>
										<h3>h3. Heading</h3>
										<h4>h4. Heading</h4>
										<h5>h5. Heading</h5>
										<h6>h6. Heading</h6>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code" data-toggle="tab" href="#html-code" role="tab" aria-controls="html-code" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="typo1"><pre><code class="language-markup"><script type="html-Dashkit/script"><h1>h1. Heading</h1>
<h2>h2. Heading</h2>
<h3>h3. Heading</h3>
<h4>h4. Heading</h4>
<h5>h5. Heading</h5>
<h6>h6. Heading</h6>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#typo1"><i class="las la-clipboard"></i></div>
</figure>
<!-- /Prism Precode -->
								</div>
							</div>
						</div>
					</div><!-- COL-END -->
					<div class="col-xl-6 col-md-12">
						<div class="card">
							<div class="card-header pb-0">
								<h3 class="card-title mb-2">HEADING WITH COLOR TEXT</h3>
								<p class="mg-b-20 tx-13 text-muted">Examples using standard <code>h1</code> to <code>h6</code> html tags</p>
							</div>
							<div class="card-body pt-0">
								<div class="text-wrap">
									<div class="example">
										<h1 class="text-primary">h1. Heading</h1>
										<h2  class="text-secondary">h2. Heading</h2>
										<h3  class="text-success">h3. Heading</h3>
										<h4  class="text-danger">h4. Heading</h4>
										<h5  class="text-info">h5. Heading</h5>
										<h6  class="text-warning">h6. Heading</h6>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code2" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code2" data-toggle="tab" href="#html-code2" role="tab" aria-controls="html-code2" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="typo2"><pre><code class="language-markup"><script type="html-Dashkit/script"><h1 class="text-primary">h1. Heading</h1>
<h2  class="text-secondary">h2. Heading</h2>
<h3  class="text-success">h3. Heading</h3>
<h4  class="text-danger">h4. Heading</h4>
<h5  class="text-info">h5. Heading</h5>
<h6  class="text-warning">h6. Heading</h6>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#typo2"><i class="las la-clipboard"></i></div>
</figure>
<!-- /Prism Precode -->
								</div>
							</div>
						</div>
					</div><!-- COL-END -->
				</div>
				<!-- row closed -->

				<!--row open -->
				<div class="row row-sm">
					<div class="col-xl-6 col-md-12">
						<div class="card">
							<div class="card-header pb-0">
								<h3 class="card-title mb-2">HEADING-INVERSE</h3>
								<p class="mg-b-20 tx-13 text-muted">Examples using <code>heading-inverse</code> css</p>
							</div>
							<div class="card-body pt-0">
								<div class="text-wrap">
									<div class="example">
										<h1 class="heading-inverse">h1. Heading</h1>
										<h2 class="heading-secondary">h2. Heading</h2>
										<h3 class="heading-inverse">h3. Heading</h3>
										<h4 class="heading-inverse">h4. Heading</h4>
										<h5 class="heading-inverse">h5. Heading</h5>
										<h6 class="heading-inverse">h6. Heading</h6>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code3" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code3" data-toggle="tab" href="#html-code3" role="tab" aria-controls="html-code3" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="typo3"><pre><code class="language-markup"><script type="html-Dashkit/script"><h1 class="heading-inverse">h1. Heading</h1>
<h2 class="heading-secondary">h2. Heading</h2>
<h3 class="heading-inverse">h3. Heading</h3>
<h4 class="heading-inverse">h4. Heading</h4>
<h5 class="heading-inverse">h5. Heading</h5>
<h6 class="heading-inverse">h6. Heading</h6>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#typo3"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div><!-- COL-END -->
					<div class="col-xl-6 col-md-12">
						<div class="card">
							<div class="card-header pb-0">
								<h3 class="card-title mb-2">Heading primary to danger</h3>
								<p class="mg-b-20 tx-13 text-muted">Examples using <code>heading-primary</code> to <code>heading-danger</code> css</p>
							</div>
							<div class="card-body pt-0">
								<div class="text-wrap">
									<div class="example">
										<h1 class="heading-primary">h1. Heading</h1>
										<h2 class="heading-secondary">h2. Heading</h2>
										<h3 class="heading-success">h3. Heading</h3>
										<h4 class="heading-info">h4. Heading</h4>
										<h5 class="heading-warning">h5. Heading</h5>
										<h6 class="heading-danger">h6. Heading</h6>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code4" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code4" data-toggle="tab" href="#html-code4" role="tab" aria-controls="html-code4" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="typo4"><pre><code class="language-markup"><script type="html-Dashkit/script"><h1 class="heading-primary">h1. Heading</h1>
<h2 class="heading-secondary">h2. Heading</h2>
<h3 class="heading-success">h3. Heading</h3>
<h4 class="heading-info">h4. Heading</h4>
<h5 class="heading-warning">h5. Heading</h5>
<h6 class="heading-danger">h6. Heading</h6>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#typo4"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div><!-- COL-END -->
				</div>
				<!-- row closed -->

				<!--row open -->
				<div class="row">
					<div class="col-xl-12 col-lg-12">
						<div class="card mg-b-20" id="typography">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Font Size
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-0">
										<tbody>
											<tr>
												<td class="bg-gray-100"><b>Classes</b></td>
												<td><code>.tx-[size]</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100"><b>Values</b></td>
												<td>8 | 9 | 10 | 11 | 12 | 13 | 14 | 15 | 16 | 18 | 20 | 22 | 24 | ... | 140</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-0 mg-b-0">
										<tbody>
											<tr>
												<td class="bg-gray-100"><b>Classes</b></td>
												<td><code>.tx-[viewport]-[size]</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100"><b>Viewports</b></td>
												<td>xs | sm | md | lg | xl</td>
											</tr>
											<tr>
												<td class="bg-gray-100"><b>Sizes</b></td>
												<td>8 | 9 | 10 | 11 | 12 | 13 | 14 | 15 | 16 | 18 | 20 | 22 | 24 | ... | 140 (step of 2)</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>

						<!--div-->
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Font Weight
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-0 mg-b-0">
										<tbody>
											<tr>
												<td class="bg-gray-100"><b>Classes</b></td>
												<td><code>.tx-[weight]</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100"><b>Weight</b></td>
												<td>bold | semibold | medium | normal | light | thin | xthin</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Font Color
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-0">
										<tbody>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
												<td><code>.tx-[color]</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Colors</b></td>
												<td>primary | success | warning | danger | info | indigo | purple | orange | teal | pink | black | white | inverse</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-0">
										<tbody>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
												<td><code>.tx-gray-[num]</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Colors</b></td>
												<td>100 | 200 | 300 | 400 | 500 | 600 | 700 | 800 | 900</td>
											</tr>
										</tbody>
									</table>
								</div>

								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-0 mg-b-0">
										<tbody>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
												<td><code>.tx-white-[transparency]</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Colors</b></td>
												<td>2 | 3 | 4 | 5 | 6 | 7 | 8</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Font Spacing
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-0">
										<tbody>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
												<td><code>.tx-spacing-[value]</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Values</b></td>
												<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-0 mg-b-0">
										<tbody>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
												<td><code>.tx-spacing--[value]</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Values</b></td>
												<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 ( negative spacing result )</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Line Height
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in website apllication.</p>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-0">
										<tbody>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
												<td><code>.lh-[value]</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Values</b></td>
												<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10 | 11 | 12 | 13 | 14 | 15</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-0 mg-b-0">
										<tbody>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
												<td><code>.lh-[viewport]-[value]</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>View Port</b></td>
												<td>xs | sm | md | lg | xl</td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Values</b></td>
												<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10 | 11 | 12 | 13 | 14 | 15</td>
											</tr>
										</tbody>
									</table>
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