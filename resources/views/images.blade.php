@extends('layouts.master')
@section('css')
<!-- Internal  Prism css -->
<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Elements</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Images</span>
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
				<div class="card mg-b-20" id="image1">
					<div class="card-body">
						<div class="main-content-label mg-b-5">
							Responsive Image
						</div>
						<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
						<div class="text-wrap">
							<div class="example">
								<div><img alt="Responsive image" class="img-fluid" src="{{URL::asset('assets/img/photos/1.jpg')}}"></div>
							</div>
						</div>
						<ul class="nav nav-tabs html-source" id="html-source-code" role="tablist">
							<li class="nav-item">
								<a class="nav-link active ml-1 html-code" id="html-code" data-toggle="tab" href="#html-code" role="tab" aria-controls="html-code" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
							</li>
						</ul>
<!-- Prism Code -->
<figure class="highlight clip-widget mb-0" id="image01"><pre><code class="language-markup"><script type="html-dashlead/script">
<div><img alt="Responsive image" class="img-fluid" src="{{URL::asset('assets/img/photos/1.jpg')}}"></div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#image01"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="card mg-b-20" id="image2">
					<div class="card-body">
						<div class="main-content-label mg-b-5">
							Image Thumbnail
						</div>
						<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
						<div class="text-wrap">
							<div class="example">
								<img alt="Responsive image" class="img-thumbnail wd-100p wd-sm-200" src="{{URL::asset('assets/img/photos/1.jpg')}}">
							</div>
						</div>
						<ul class="nav nav-tabs html-source" id="html-source-code2" role="tablist">
							<li class="nav-item">
								<a class="nav-link active ml-1 html-code" id="html-code2" data-toggle="tab" href="#html-code2" role="tab" aria-controls="html-code2" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
							</li>
						</ul>
<!-- Prism Code -->
<figure class="highlight clip-widget mb-0" id="image02"><pre><code class="language-markup"><script type="html-dashlead/script">
<img alt="Responsive image" class="img-thumbnail wd-100p wd-sm-200" src="{{URL::asset('assets/img/photos/1.jpg')}}"></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#image02"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
					</div>
				</div>
				<!-- /row -->

					<!-- row -->
					<div class="card mg-b-20" id="image3">
						<div class="card-body">
							<div class="main-content-label mg-b-5">
								Aligning Images
							</div>
							<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
							<div class="text-wrap">
								<div class="example">
									<div class="bd pd-20 clearfix">
										<img alt="" class="rounded float-sm-left wd-100p wd-sm-200" src="{{URL::asset('assets/img/photos/1.jpg')}}">
										<img alt="" class="rounded float-sm-right wd-100p wd-sm-200 mg-t-10 mg-sm-t-0" src="{{URL::asset('assets/img/photos/1.jpg')}}">
									</div>
								</div>
							</div>
							<ul class="nav nav-tabs html-source" id="html-source-code3" role="tablist">
								<li class="nav-item">
									<a class="nav-link active ml-1 html-code" id="html-code3" data-toggle="tab" href="#html-code3" role="tab" aria-controls="html-code3" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
								</li>
							</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget mb-0" id="image-3"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="bd pd-20 clearfix">
	<img alt="" class="rounded float-sm-left wd-100p wd-sm-200" src="{{URL::asset('assets/img/photos/1.jpg')}}">
	<img alt="" class="rounded float-sm-right wd-100p wd-sm-200 mg-t-10 mg-sm-t-0" src="{{URL::asset('assets/img/photos/1.jpg')}}">
</div>
</script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#image-3"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="card" id="image4">
					<div class="card-body">
						<div class="main-content-label mg-b-5">
							Background Image
						</div>
						<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
						<div class="text-wrap">
							<div class="example">
								<figure class="pos-relative mg-b-0 wd-sm-80p wd-md-50p">
									<img alt="Responsive image" class="img-fit-cover" src="{{URL::asset('assets/img/photos/1.jpg')}}">
									<figcaption class="pos-absolute a-0 pd-25 bg-black-5 tx-white-8">
										<h6 class="tx-14 tx-sm-16 tx-white tx-semibold mg-b-15 mg-sm-b-20">What Does Royalty-Free Mean?</h6>
										<p class="mg-b-0">Royalty free means you just need to pay for rights to use the item once per end product. You don't need to pay additional or ongoing fees for each person who sees or uses it.</p>
									</figcaption>
								</figure>
							</div>
						</div>
						<ul class="nav nav-tabs html-source" id="html-source-code4" role="tablist">
							<li class="nav-item">
								<a class="nav-link active ml-1 html-code" id="html-code4" data-toggle="tab" href="#html-code4" role="tab" aria-controls="html-code4" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
							</li>
						</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget mb-0" id="image-4"><pre><code class="language-markup"><script type="html-dashlead/script"><figure class="pos-relative mg-b-0 wd-sm-80p wd-md-50p">
	<img alt="Responsive image" class="img-fit-cover" src="{{URL::asset('assets/img/photos/1.jpg')}}">
	<figcaption class="pos-absolute a-0 pd-25 bg-black-5 tx-white-8">
		<h6 class="tx-14 tx-sm-16 tx-white tx-semibold mg-b-15 mg-sm-b-20">What Does Royalty-Free Mean?</h6>
		<p class="mg-b-0">Royalty free means you just need to pay for rights to use the item once per end product. You dont need to pay additional or ongoing fees for each person who sees or uses it.</p>
	</figcaption>
</figure>
</script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#image-4"><i class="las la-clipboard"></i></div>
</figure>
					</div>
				<!-- /row -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!-- Internal Jquery.mCustomScrollbar js-->
<script src="{{URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!--Internal  Clipboard js-->
<script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>
<!-- Internal Prism js-->
<script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>
@endsection