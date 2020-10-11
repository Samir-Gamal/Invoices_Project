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
							<h4 class="content-title mb-0 my-auto">Elements</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Thumbnails</span>
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
						<div class="card custom-card" id="thumb">
							<div class="card-body ht-100p">
								<div>
									<h6 class="card-title mb-1">Image Thumbnail</h6>
									<p class="text-muted card-sub-title">Images in Bootstrap are made responsive with .img-fluid. max-width: 100%; and height: auto; are applied to the image so that it scales with the parent element.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="row">
											<div class="col-6 col-md-3">
												<img alt="Responsive image" class="img-thumbnail" src="{{URL::asset('assets/img/photos/9.jpg')}}">
											</div>
											<div class="col-6 col-md-3">
												<img alt="Responsive image" class="img-thumbnail" src="{{URL::asset('assets/img/photos/13.jpg')}}">
											</div>
											<div class="col-6 col-md-3 mg-t-10 mg-sm-t-0">
												<img alt="Responsive image" class="img-thumbnail" src="{{URL::asset('assets/img/photos/14.jpg')}}">
											</div>
											<div class="col-6 col-md-3 mg-t-10 mg-sm-t-0">
												<img alt="Responsive image" class="img-thumbnail" src="{{URL::asset('assets/img/photos/15.jpg')}}">
											</div>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code" data-toggle="tab" href="#html-code" role="tab" aria-controls="html-code" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="images2"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="row">
	<div class="col-6 col-md-3">
		<img alt="Responsive image" class="img-thumbnail" src="{{URL::asset('assets/img/photos/9.jpg')}}">
	</div>
	<div class="col-6 col-md-3">
		<img alt="Responsive image" class="img-thumbnail" src="{{URL::asset('assets/img/photos/13.jpg')}}">
	</div>
	<div class="col-6 col-md-3 mg-t-10 mg-sm-t-0">
		<img alt="Responsive image" class="img-thumbnail" src="{{URL::asset('assets/img/photos/14.jpg')}}">
	</div>
	<div class="col-6 col-md-3 mg-t-10 mg-sm-t-0">
		<img alt="Responsive image" class="img-thumbnail" src="{{URL::asset('assets/img/photos/15.jpg')}}">
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#images2"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-12 col-md-12">
						<div class="card custom-card" id="aligning">
							<div class="card-body ht-100p">
								<div>
									<h6 class="card-title mb-1">Aligning Thumbnails</h6>
									<p class="text-muted card-sub-title">Align images with the helper float classes or text alignment classes.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="clearfix">
										  <img src="{{URL::asset('assets/img/photos/10.jpg')}}" class="float-sm-left wd-100p wd-sm-200" alt="img">
										  <img src="{{URL::asset('assets/img/photos/11.jpg')}}" class="float-sm-right wd-100p wd-sm-200 mg-t-10 mg-sm-t-0" alt="img">
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code2" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code2" data-toggle="tab" href="#html-code2" role="tab" aria-controls="html-code2" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="images3"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="clearfix">
  <img src="{{URL::asset('assets/img/photos/10.jpg')}}" class="float-sm-left wd-100p wd-sm-200" alt="img">
  <img src="{{URL::asset('assets/img/photos/11.jpg')}}" class="float-sm-right wd-100p wd-sm-200 mg-t-10 mg-sm-t-0" alt="img">
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#images3"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-12 col-md-12">
						<div class="card custom-card" id="contentthumb">
							<div class="card-body ht-100p">
								<div>
									<h6 class="card-title mb-1">Custom content Thumbnails</h6>
									<p class="text-muted card-sub-title">Using the images in custom content thumbnails</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="row">
											<div class="col-xl-4 col-lg-4">
												<div class="img-thumbnail mb-3">
													<a href="#">
														<img src="{{URL::asset('assets/img/photos/4.jpg')}}" alt="thumb1" class="thumbimg wd-100p">
													</a>
													<div class="caption">
														<h5>Thumbnail label</h5>
														<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
														<div class="btn btn-list pl-0 pb-0">
															<a href="#" class="btn ripple btn-primary" role="button">Button</a>
															<a href="#" class="btn ripple btn-secondary" role="button">Button</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-4 col-lg-4">
												<div class="img-thumbnail mb-3">
													<a href="#">
														<img src="{{URL::asset('assets/img/photos/9.jpg')}}" alt="thumb1" class="thumbimg  wd-100p">
													</a>
													<div class="caption">
														<h5>Thumbnail label</h5>
														<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
														<div class="btn btn-list pl-0 pb-0">
															<a href="#" class="btn ripple btn-primary" role="button">Button</a>
															<a href="#" class="btn ripple btn-secondary" role="button">Button</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-4 col-lg-4">
												<div class="img-thumbnail mb-3">
													<a href="#">
														<img src="{{URL::asset('assets/img/photos/8.jpg')}}" alt="thumb1" class="thumbimg  wd-100p">
													</a>
													<div class="caption">
														<h5>Thumbnail label</h5>
														<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
														<div class="btn btn-list pl-0 pb-0">
															<a href="#" class="btn ripple btn-primary" role="button">Button</a>
															<a href="#" class="btn ripple btn-secondary" role="button">Button</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code3" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code3" data-toggle="tab" href="#html-code3" role="tab" aria-controls="html-code3" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="images5"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="row">
	<div class="col-xl-4 col-lg-4">
		<div class="img-thumbnail  mb-3">
			<a href="#">
				<img src="{{URL::asset('assets/img/photos/4.jpg')}}" alt="thumb1" class="thumbimg wd-100p">
			</a>
			<div class="caption">
				<h5>Thumbnail label</h5>
				<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				<div class="btn btn-list pl-0 pb-0">
					<a href="#" class="btn ripple btn-primary" role="button">Button</a>
					<a href="#" class="btn ripple btn-secondary" role="button">Button</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-4 col-lg-4">
		<div class="img-thumbnail  mb-3">
			<a href="#">
				<img src="{{URL::asset('assets/img/photos/9.jpg')}}" alt="thumb1" class="thumbimg  wd-100p">
			</a>
			<div class="caption">
				<h5>Thumbnail label</h5>
				<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				<div class="btn btn-list pl-0 pb-0">
					<a href="#" class="btn ripple btn-primary" role="button">Button</a>
					<a href="#" class="btn ripple btn-secondary" role="button">Button</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-4 col-lg-4">
		<div class="img-thumbnail  mb-3">
			<a href="#">
				<img src="{{URL::asset('assets/img/photos/8.jpg')}}" alt="thumb1" class="thumbimg  wd-100p">
			</a>
			<div class="caption">
				<h5>Thumbnail label</h5>
				<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				<div class="btn btn-list pl-0 pb-0">
					<a href="#" class="btn ripple btn-primary" role="button">Button</a>
					<a href="#" class="btn ripple btn-secondary" role="button">Button</a>
				</div>
			</div>
		</div>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#images5"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-lg-6 col-md-12">
						<div class="card custom-card" id="responsive">
							<div class="card-body ht-100p">
								<div>
									<h6 class="card-title mb-1">Responsive Thumbnails</h6>
									<p class="text-muted card-sub-title">Images in Bootstrap are made responsive with .img-fluid. max-width: 100%; and height: auto; are applied to the image so that it scales with the parent element.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div><img alt="Responsive image" class="img-fluid" src="{{URL::asset('assets/img/photos/7.jpg')}}"></div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code4" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code4" data-toggle="tab" href="#html-code4" role="tab" aria-controls="html-code4" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="images1"><pre><code class="language-markup"><script type="html-dashlead/script"><div><img alt="Responsive image" class="img-fluid" src="{{URL::asset('assets/img/media/7.jpg')}}"></div>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#images1"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card custom-card" id="background">
								<div class="card-body ht-100p">
									<div>
										<h6 class="card-title mb-1">Background Image</h6>
										<p class="text-muted card-sub-title">Make image as background to your content using the helper or utilities classes.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<figure class="pos-relative mg-b-0">
												<img alt="Responsive image" class="img-fit-cover" src="{{URL::asset('assets/img/photos/12.jpg')}}">
												<figcaption class="pos-absolute a-0 pd-25 bg-black-5 tx-white-8">
													<h6 class="tx-14 tx-sm-16 tx-white tx-semibold mg-b-15 mg-sm-b-20">What Does Royalty-Free Mean?</h6>
													<p class="mg-b-0">Royalty free means you just need to pay for rights to use the item once per end product.
													You dont need to pay additional or ongoing fees for each person who sees or uses it.</p>
												</figcaption>
											</figure>
										</div>
										<ul class="nav nav-tabs html-source" id="html-source-code5" role="tablist">
											<li class="nav-item">
												<a class="nav-link active ml-1 html-code" id="html-code5" data-toggle="tab" href="#html-code5" role="tab" aria-controls="html-code5" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
											</li>
										</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="images4"><pre><code class="language-markup"><script type="html-dashlead/script"><figure class="pos-relative mg-b-0">
<img alt="Responsive image" class="img-fit-cover" src="{{URL::asset('assets/img/photos/12.jpg')}}">
<figcaption class="pos-absolute a-0 pd-25 bg-black-5 tx-white-8">
<h6 class="tx-14 tx-sm-16 tx-white tx-semibold mg-b-15 mg-sm-b-20">What Does Royalty-Free Mean?</h6>
<p class="mg-b-0">Royalty free means you just need to pay for rights
to use the item once per end product. You dont need to pay additional or ongoing fees for each person who sees or uses it.</p>
</figcaption>
</figure></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#images4"><i class="las la-clipboard"></i></div>
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