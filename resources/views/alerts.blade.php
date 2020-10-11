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
							<h4 class="content-title mb-0 my-auto">Elements</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Alerts</span>
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
						<div class="card" id="basic-alert">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Basic Alerts</h6>
									<p class="text-muted card-sub-title">Use one of the four required contextual classes.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="alert alert-success" role="alert">
											<button aria-label="Close" class="close" data-dismiss="alert" type="button">
												<span aria-hidden="true">&times;</span>
											</button>
											<strong>Well done!</strong> You successfully read this important alert message.
										</div>
										<div class="alert alert-info" role="alert">
											<button aria-label="Close" class="close" data-dismiss="alert" type="button">
												<span aria-hidden="true">&times;</span>
											</button>
											<strong>Heads up!</strong> This alert needs your attention, but it's not super important.
										</div>
										<div class="alert alert-warning" role="alert">
											<button aria-label="Close" class="close" data-dismiss="alert" type="button">
												<span aria-hidden="true">&times;</span>
											</button>
											<strong>Warning!</strong> Better check yourself, you're not looking too good.
										</div>
										<div class="alert alert-danger mg-b-0" role="alert">
											<button aria-label="Close" class="close" data-dismiss="alert" type="button">
												<span aria-hidden="true">&times;</span>
											</button>
											<strong>Oh snap!</strong> Change a few things up and try submitting again.
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code" data-toggle="tab" href="#html-code" role="tab" aria-controls="html-code" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Code -->
<figure class="highlight clip-widget" id="alert1"><pre><code class="language-markup"><script type="html-dashlead/script">
<div class="alert alert-success" role="alert">
    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
	   <span aria-hidden="true">&times;</span>
  </button>
    <strong>Well done!</strong> You successfully read this important alert message.
</div>
<div class="alert alert-info" role="alert">
	<button aria-label="Close" class="close" data-dismiss="alert" type="button">
		<span aria-hidden="true">&times;</span>
	</button>
	<strong>Heads up!</strong> This alert needs your attention, but it's not super important.
</div>
<div class="alert alert-warning" role="alert">
	<button aria-label="Close" class="close" data-dismiss="alert" type="button">
		<span aria-hidden="true">&times;</span>
	</button>
	<strong>Warning!</strong> Better check yourself, you're not looking too good.
</div>
<div class="alert alert-danger mg-b-0" role="alert">
	<button aria-label="Close" class="close" data-dismiss="alert" type="button">
		<span aria-hidden="true">&times;</span>
	</button>
	<strong>Oh snap!</strong> Change a few things up and try submitting again.
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#alert1"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
							<div class="card-footer">
								<table class="table main-table-reference mt-0 mb-0">
									<thead>
										<tr>
											<th class="wd-40p">Class Reference</th>
											<th class="wd-60p">Values</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><code class="pd-0 bg-transparent">class="alert alert-[value]"</code></td>
											<td>success | info | warning | danger</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<div class="col-lg-12 col-md-12">
						<div class="card" id="outline-alert">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Outline Alerts</h6>
									<p class="text-muted card-sub-title">Use one of the four required contextual classes.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="alert alert-outline-success" role="alert">
											<button aria-label="Close" class="close" data-dismiss="alert" type="button">
											<span aria-hidden="true">&times;</span></button>
											<strong>Well done!</strong> You successfully read this important alert message.
										</div>
										<div class="alert alert-outline-info" role="alert">
											<button aria-label="Close" class="close" data-dismiss="alert" type="button">
											<span aria-hidden="true">&times;</span></button>
											<strong>Heads up!</strong> This alert needs your attention, but it's not super important.
										</div>
										<div class="alert alert-outline-warning" role="alert">
											<button aria-label="Close" class="close" data-dismiss="alert" type="button">
											<span aria-hidden="true">&times;</span></button>
											<strong>Warning!</strong> Better check yourself, you're not looking too good.
										</div>
										<div class="alert alert-outline-danger mg-b-0" role="alert">
											<button aria-label="Close" class="close" data-dismiss="alert" type="button">
											<span aria-hidden="true">&times;</span></button>
											<strong>Oh snap!</strong> Change a few things up and try submitting again.
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code2" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code2" data-toggle="tab" href="#html-code2" role="tab" aria-controls="html-code2" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Code -->
<figure class="highlight clip-widget" id="alert001"><pre><code class="language-markup"><script type="html-dashlead/script">
<div class="alert alert-outline-success" role="alert">
	<button aria-label="Close" class="close" data-dismiss="alert" type="button">
	<span aria-hidden="true">&times;</span></button>
	<strong>Well done!</strong> You successfully read this important alert message.
</div>
<div class="alert alert-outline-info" role="alert">
	<button aria-label="Close" class="close" data-dismiss="alert" type="button">
	<span aria-hidden="true">&times;</span></button>
	<strong>Heads up!</strong> This alert needs your attention, but it's not super important.
</div>
<div class="alert alert-outline-warning" role="alert">
	<button aria-label="Close" class="close" data-dismiss="alert" type="button">
	<span aria-hidden="true">&times;</span></button>
	<strong>Warning!</strong> Better check yourself, you're not looking too good.
</div>
<div class="alert alert-outline-danger mg-b-0" role="alert">
	<button aria-label="Close" class="close" data-dismiss="alert" type="button">
	<span aria-hidden="true">&times;</span></button>
	<strong>Oh snap!</strong> Change a few things up and try submitting again.
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#alert001"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
							<div class="card-footer">
								<table class="table main-table-reference mt-0 mb-0">
									<thead>
										<tr>
											<th class="wd-40p">Class Reference</th>
											<th class="wd-60p">Values</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><code class="pd-0 bg-transparent">class="alert alert-outline-[value]"</code></td>
											<td>success | info | warning | danger</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>


					<div class="col-lg-12 col-md-12">
						<div class="card" id="solid-alert">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Solid Colored Alerts</h6>
									<p class="text-muted card-sub-title">Use one of the four required contextual classes.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="alert alert-solid-success" role="alert">
											<button aria-label="Close" class="close" data-dismiss="alert" type="button">
											<span aria-hidden="true">&times;</span></button>
											<strong>Well done!</strong> You successfully read this important alert message.
										</div>
										<div class="alert alert-solid-info" role="alert">
											<button aria-label="Close" class="close" data-dismiss="alert" type="button">
											<span aria-hidden="true">&times;</span></button>
											<strong>Heads up!</strong> This alert needs your attention, but it's not super important.
										</div>
										<div class="alert alert-solid-warning" role="alert">
											<button aria-label="Close" class="close" data-dismiss="alert" type="button">
											<span aria-hidden="true">&times;</span></button>
											<strong>Warning!</strong> Better check yourself, you're not looking too good.
										</div>
										<div class="alert alert-solid-danger mg-b-0" role="alert">
											<button aria-label="Close" class="close" data-dismiss="alert" type="button">
											<span aria-hidden="true">&times;</span></button>
											<strong>Oh snap!</strong> Change a few things up and try submitting again.
										</div>
									</div><!-- Prism Code -->
									<ul class="nav nav-tabs html-source" id="html-source-code3" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code3" data-toggle="tab" href="#html-code3" role="tab" aria-controls="html-code3" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<figure class="highlight clip-widget" id="alert2"><pre><code class="language-markup"><script type="html-dashlead/script">
<div class="alert alert-solid-success" role="alert">
	<button aria-label="Close" class="close" data-dismiss="alert" type="button">
	<span aria-hidden="true">&times;</span></button>
	<strong>Well done!</strong> You successfully read this important alert message.
</div>
<div class="alert alert-solid-info" role="alert">
	<button aria-label="Close" class="close" data-dismiss="alert" type="button">
	<span aria-hidden="true">&times;</span></button>
	<strong>Heads up!</strong> This alert needs your attention, but it's not super important.
</div>
<div class="alert alert-solid-warning" role="alert">
	<button aria-label="Close" class="close" data-dismiss="alert" type="button">
	<span aria-hidden="true">&times;</span></button>
	<strong>Warning!</strong> Better check yourself, you're not looking too good.
</div>
<div class="alert alert-solid-danger mg-b-0" role="alert">
	<button aria-label="Close" class="close" data-dismiss="alert" type="button">
	<span aria-hidden="true">&times;</span></button>
	<strong>Oh snap!</strong> Change a few things up and try submitting again.
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#alert2"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>

								<div class="card-footer">
									<table class="table main-table-reference mt-0 mb-0">
										<thead>
											<tr>
												<th class="wd-40p">Class Reference</th>
												<th class="wd-60p">Values</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><code class="pd-0 bg-transparent">class="alert alert-outline-[value]"</code></td>
												<td>success | info | warning | danger</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-12 col-md-12">
						<div class="card custom-card" id="link-alerts">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Link color Alerts</h6>
									<p class="text-muted card-sub-title">Use the <code class="highlighter-rouge">.alert-link</code> utility class to quickly provide matching colored links within any alert.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="alert alert-primary" role="alert">
										  This is a primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
										</div>
										<div class="alert alert-secondary" role="alert">
										  This is a secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
										</div>
										<div class="alert alert-success" role="alert">
										  This is a success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
										</div>
										<div class="alert alert-danger" role="alert">
										  This is a danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
										</div>
										<div class="alert alert-warning" role="alert">
										  This is a warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
										</div>
										<div class="alert alert-info" role="alert">
										  This is a info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
										</div>
										<div class="alert alert-light" role="alert">
										  This is a light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
										</div>
										<div class="alert alert-dark mb-0" role="alert">
										  This is a dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code4" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code4" data-toggle="tab" href="#html-code4" role="tab" aria-controls="html-code4" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>

<!-- Prism Precode -->
<figure class="highlight clip-widget" id="alert4"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="alert alert-primary" role="alert">
  This is a primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>

<div class="alert alert-secondary" role="alert">
  This is a secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>

<div class="alert alert-success" role="alert">
  This is a success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>

<div class="alert alert-danger" role="alert">
  This is a danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>

<div class="alert alert-warning" role="alert">
  This is a warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>

<div class="alert alert-info" role="alert">
  This is a info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>

<div class="alert alert-light" role="alert">
  This is a light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>

<div class="alert alert-dark mb-0" role="alert">
  This is a dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#alert4"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="additional-alerts">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Additional Content Alert</h6>
										<p class="text-muted card-sub-title">Alerts can also contain additional HTML elements like headings, paragraphs and dividers.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="alert alert-success mb-0" role="alert">
											  <h4 class="alert-heading">Well done!</h4>
											  <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
											  <hr>
											  <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
											</div>
										</div>
										<ul class="nav nav-tabs html-source" id="html-source-code5" role="tablist">
											<li class="nav-item">
												<a class="nav-link active ml-1 html-code" id="html-code5" data-toggle="tab" href="#html-code5" role="tab" aria-controls="html-code5" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
											</li>
										</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="alert5"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="alert alert-success mb-0" role="alert">
  <h4 class="alert-heading">Well done!</h4>
  <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can
  see how spacing within an alert works with this kind of content.</p>
  <hr>
  <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#alert5"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="dismiss-alerts">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Dismissing Alerts</h6>
										<p class="text-muted card-sub-title">Using the alert JavaScript plugin, it’s possible to dismiss any alert inline.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="alert alert-warning alert-dismissible fade show" role="alert">
											  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											  </button>
											</div>
											<div class="alert alert-success alert-dismissible fade show" role="alert">
											  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											  </button>
											</div>
											<div class="alert alert-danger alert-dismissible fade show" role="alert">
											  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											  </button>
											</div>
											<div class="alert alert-info alert-dismissible fade show mb-0" role="alert">
											  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											  </button>
											</div>
										</div>
										<ul class="nav nav-tabs html-source" id="html-source-code6" role="tablist">
											<li class="nav-item">
												<a class="nav-link active ml-1 html-code" id="html-code6" data-toggle="tab" href="#html-code6" role="tab" aria-controls="html-code" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
											</li>
										</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="alert6"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">&times;</span>
  </button>
</div>

<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">&times;</span>
  </button>
</div>

<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">&times;</span>
  </button>
</div>

<div class="alert alert-info alert-dismissible fade show mb-0" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">&times;</span>
  </button>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#alert6"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="icon-alerts">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Alert With Icon</h6>
										<p class="text-muted card-sub-title">Alerts can also contain additional HTML elements like headings, paragraphs and dividers.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="alert alert-default" role="alert">
												<span class="alert-inner--icon"><i class="fe fe-download"></i></span>
												<span class="alert-inner--text"><strong>Default!</strong> This is a warning alert—check it out that has an icon too!</span>
											</div>
											<div class="alert alert-primary" role="alert">
												<span class="alert-inner--icon"><i class="fe fe-check-square"></i></span>
												<span class="alert-inner--text"><strong>Primary!</strong> This is a warning alert—check it out that has an icon too!</span>
											</div>
											<div class="alert alert-success" role="alert">
												<span class="alert-inner--icon"><i class="fe fe-thumbs-up"></i></span>
												<span class="alert-inner--text"><strong>Success!</strong> This is a warning alert—check it out that has an icon too!</span>
											</div>
											<div class="alert alert-info" role="alert">
												<span class="alert-inner--icon"><i class="ti-bell"></i></span>
												<span class="alert-inner--text"><strong>Info!</strong> This is a warning alert—check it out that has an icon too!</span>
											</div>
											<div class="alert alert-warning" role="alert">
												<span class="alert-inner--icon"><i class="fe fe-info"></i></span>
												<span class="alert-inner--text"><strong>Warning!</strong> This is a warning alert—check it out that has an icon too!</span>
											</div>
											<div class="alert alert-danger mb-0" role="alert">
												<span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
												<span class="alert-inner--text"><strong>Danger!</strong> This is a warning alert—check it out that has an icon too!</span>
											</div>
										</div>
										<ul class="nav nav-tabs html-source" id="html-source-code7" role="tablist">
											<li class="nav-item">
												<a class="nav-link active ml-1 html-code" id="html-code7" data-toggle="tab" href="#html-code7" role="tab" aria-controls="html-code7" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
											</li>
										</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="alert7"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="alert alert-default" role="alert">
	<span class="alert-inner--icon"><i class="fe fe-download"></i></span>
	<span class="alert-inner--text"><strong>Default!</strong> This is a warning alert—check it out that has an icon too!</span>
</div>
<div class="alert alert-primary" role="alert">
	<span class="alert-inner--icon"><i class="fe fe-check-square"></i></span>
	<span class="alert-inner--text"><strong>Primary!</strong> This is a warning alert—check it out that has an icon too!</span>
</div>
<div class="alert alert-success" role="alert">
	<span class="alert-inner--icon"><i class="fe fe-thumbs-up"></i></span>
	<span class="alert-inner--text"><strong>Success!</strong> This is a warning alert—check it out that has an icon too!</span>
</div>
<div class="alert alert-info" role="alert">
	<span class="alert-inner--icon"><i class="ti-bell"></i></span>
	<span class="alert-inner--text"><strong>Info!</strong> This is a warning alert—check it out that has an icon too!</span>
</div>
<div class="alert alert-warning" role="alert">
	<span class="alert-inner--icon"><i class="fe fe-info"></i></span>
	<span class="alert-inner--text"><strong>Warning!</strong> This is a warning alert—check it out that has an icon too!</span>
</div>
<div class="alert alert-danger mb-0" role="alert">
	<span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
	<span class="alert-inner--text"><strong>Danger!</strong> This is a warning alert—check it out that has an icon too!</span>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#alert7"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="icon-dismissalerts">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Alert With Icon Dismissing</h6>
										<p class="text-muted card-sub-title">Alerts can also contain additional HTML elements like headings, paragraphs and dividers.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="alert alert-default alert-dismissible fade show" role="alert">
												<span class="alert-inner--icon"><i class="fe fe-download"></i></span>
												<span class="alert-inner--text"><strong>Default!</strong> This is a default alert—check it out!</span>
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>
											<div class="alert alert-primary alert-dismissible fade show" role="alert">
												<span class="alert-inner--icon"><i class="fe fe-check-square"></i></span>
												<span class="alert-inner--text"><strong>Primary!</strong> This is a primary alert—check it out!</span>
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>
											<div class="alert alert-success alert-dismissible fade show" role="alert">
												<span class="alert-inner--icon"><i class="fe fe-thumbs-up"></i></span>
												<span class="alert-inner--text"><strong>Success!</strong> This is a success alert—check it out!</span>
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>
											<div class="alert alert-warning alert-dismissible fade show" role="alert">
												<span class="alert-inner--icon"><i class="fe fe-info"></i></span>
												<span class="alert-inner--text"><strong>Warning!</strong> This is a warning alert—check it out!</span>
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>
											<div class="alert alert-info alert-dismissible fade show" role="alert">
												<span class="alert-inner--icon"><i class="ti-bell"></i></span>
												<span class="alert-inner--text"><strong>Info!</strong> This is a info alert—check it out!</span>
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>
											<div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
												<span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
												<span class="alert-inner--text"><strong>Danger!</strong> This is a danger alert—check it out!</span>
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>
										</div>
										<ul class="nav nav-tabs html-source" id="html-source-code8" role="tablist">
											<li class="nav-item">
												<a class="nav-link active ml-1 html-code" id="html-code8" data-toggle="tab" href="#html-code8" role="tab" aria-controls="html-code" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
											</li>
										</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="alert8"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="alert alert-default alert-dismissible fade show" role="alert">
	<span class="alert-inner--icon"><i class="fe fe-download"></i></span>
	<span class="alert-inner--text"><strong>Default!</strong> This is a default alert—check it out!</span>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">×</span>
	</button>
</div>
<div class="alert alert-primary alert-dismissible fade show" role="alert">
	<span class="alert-inner--icon"><i class="fe fe-check-square"></i></span>
	<span class="alert-inner--text"><strong>Primary!</strong> This is a primary alert—check it out!</span>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">×</span>
	</button>
</div>
<div class="alert alert-success alert-dismissible fade show" role="alert">
	<span class="alert-inner--icon"><i class="fe fe-thumbs-up"></i></span>
	<span class="alert-inner--text"><strong>Success!</strong> This is a success alert—check it out!</span>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">×</span>
	</button>
</div>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
	<span class="alert-inner--icon"><i class="fe fe-info"></i></span>
	<span class="alert-inner--text"><strong>Warning!</strong> This is a warning alert—check it out!</span>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">×</span>
	</button>
</div>
<div class="alert alert-info alert-dismissible fade show" role="alert">
	<span class="alert-inner--icon"><i class="ti-bell"></i></span>
	<span class="alert-inner--text"><strong>Info!</strong> This is a info alert—check it out!</span>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">×</span>
	</button>
</div>
<div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
	<span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
	<span class="alert-inner--text"><strong>Danger!</strong> This is a danger alert—check it out!</span>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">×</span>
	</button>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#alert8"><i class="las la-clipboard"></i></div>
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
<!-- Internal Jquery.mCustomScrollbar js-->
<script src="{{URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!--Internal  Clipboard js-->
<script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>
<!-- Internal Prism js-->
<script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>
@endsection