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
							<h4 class="content-title mb-0 my-auto">Elements</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Media-object</span>
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
						<div class="card" id="media-object">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Basic Example</h6>
									<p class="text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="media d-block d-sm-flex">
											<img alt="" class="main-img-user avatar-lg mg-sm-l-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/faces/4.jpg')}}">
											<div class="media-body">
												<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
												Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
											</div>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code" data-toggle="tab" href="#html-code" role="tab" aria-controls="html-code" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="media-object01"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="media d-block d-sm-flex">
	<img alt="" class="main-img-user avatar-lg mg-sm-l-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/faces/4.jpg')}}">
	<div class="media-body">
		<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
		Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#media-object01"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>

						<div class="card" id="media-object2">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Nesting</h6>
									<p class="text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="media d-block d-sm-flex">
											<img alt="" class="main-img-user avatar-lg mg-sm-l-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/faces/9.jpg')}}">
											<div class="media-body">
												<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
												<p>Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
												<div class="media d-block d-sm-flex mg-t-25">
													<img alt="" class="main-img-user avatar-lg mg-sm-l-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/faces/8.jpg')}}">
													<div class="media-body">
														<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
														Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
													</div>
												</div>
											</div>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code2" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code2" data-toggle="tab" href="#html-code2" role="tab" aria-controls="html-code2" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="media-object02"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="media d-block d-sm-flex">
	<img alt="" class="main-img-user avatar-lg mg-sm-l-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/faces/9.jpg')}}">
	<div class="media-body">
		<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
		<p>Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
		<div class="media d-block d-sm-flex mg-t-25">
			<img alt="" class="main-img-user avatar-lg mg-sm-l-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/faces/8.jpg')}}">
			<div class="media-body">
				<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
				Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
			</div>
		</div>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#media-object02"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>

						<div class="card" id="media-object3">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Alignment</h6>
									<p class="text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="media d-block d-sm-flex">
											<img alt="" class="main-img-user avatar-lg mg-sm-l-20 mg-b-20 mg-sm-b-0 align-self-center" src="{{URL::asset('assets/img/faces/14.jpg')}}">
											<div class="media-body">
												<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
												Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
											</div>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code3" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code3" data-toggle="tab" href="#html-code3" role="tab" aria-controls="html-code3" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="media-object03"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="media d-block d-sm-flex">
	<img alt="" class="main-img-user avatar-lg mg-sm-l-20 mg-b-20 mg-sm-b-0 align-self-center" src="{{URL::asset('assets/img/faces/14.jpg')}}">
	<div class="media-body">
		<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
		Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#media-object03"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>

						<div class="card" id="media-object4">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Order</h6>
									<p class="text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="media d-block d-sm-flex">
											<div class="media-body">
												<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
												Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
											</div>
											<img alt="" class="main-img-user avatar-lg mg-sm-r-20 mg-t-20 mg-sm-t-0" src="{{URL::asset('assets/img/faces/5.jpg')}}">
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code4" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code4" data-toggle="tab" href="#html-code4" role="tab" aria-controls="html-code4" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="media-object04"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="media d-block d-sm-flex">
	<div class="media-body">
		<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
		Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
	</div>
	<img alt="" class="main-img-user avatar-lg mg-sm-r-20 mg-t-20 mg-sm-t-0" src="{{URL::asset('assets/img/faces/5.jpg')}}">
</div>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#media-object04"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>

						<div class="card" id="media-object5">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Media List</h6>
									<p class="text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="media media-list d-block d-sm-flex">
											<ul class="list-unstyled mb-0">
												<li class="media d-block d-sm-flex">
													<img alt="" class="main-img-user avatar-lg mg-sm-l-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/faces/2.jpg')}}">
													<div class="media-body">
														<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
														Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
													</div>
												</li>
												<li class="media d-block d-sm-flex mg-t-25">
													<img alt="" class="main-img-user avatar-lg mg-sm-l-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/faces/12.jpg')}}">
													<div class="media-body">
														<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
														Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
													</div>
												</li>
												<li class="media d-block d-sm-flex mg-t-25">
													<img alt="" class="main-img-user avatar-lg mg-sm-l-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/faces/7.jpg')}}">
													<div class="media-body">
														<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
														Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
													</div>
												</li>
											</ul>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code5" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code5" data-toggle="tab" href="#html-code5" role="tab" aria-controls="html-code5" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="media-object05"><pre><code class="language-markup"><script type="html-dashlead/script"><ul class="list-unstyled mb-0">
	<li class="media d-block d-sm-flex">
		<img alt="" class="main-img-user avatar-lg mg-sm-l-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/faces/2.jpg')}}">
		<div class="media-body">
			<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
			Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
		</div>
	</li>
	<li class="media d-block d-sm-flex mg-t-25">
		<img alt="" class="main-img-user avatar-lg mg-sm-l-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/faces/12.jpg')}}">
		<div class="media-body">
			<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
			Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
		</div>
	</li>
	<li class="media d-block d-sm-flex mg-t-25">
		<img alt="" class="main-img-user avatar-lg mg-sm-l-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/faces/7.jpg')}}">
		<div class="media-body">
			<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
			Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
		</div>
	</li>
</ul>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#media-object05"><i class="las la-clipboard"></i></div>
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