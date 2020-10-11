@extends('layouts.master')
@section('css')
<!---Internal  Prism css-->
<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Elements</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Buttons</span>
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
						<div class="card" id="button1">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Default Buttons
								</div>
								<p class="mg-b-20">Predefined button styles, each serving its own semantic purpose..</p>
								<div class="text-wrap">
									<div class="example">
										<div class="row row-xs wd-xl-80p">
											<div class="col-sm-6 col-md-3">
												<button class="btn btn-primary btn-block">Primary</button>
											</div>
											<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
												<button class="btn btn-secondary btn-block">Secondary</button>
											</div>
											<div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0">
												<button class="btn btn-success btn-block">Success</button>
											</div>
											<div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0">
												<button class="btn btn-warning btn-block">Warning</button>
											</div>
											<div class="col-sm-6 col-md-3 mg-t-10">
												<button class="btn btn-danger btn-block">Danger</button>
											</div>
											<div class="col-sm-6 col-md-3 mg-t-10">
												<button class="btn btn-info btn-block">Info</button>
											</div>
											<div class="col-sm-6 col-md-3 mg-t-10">
												<button class="btn btn-light btn-block">Light</button>
											</div>
											<div class="col-sm-6 col-md-3 mg-t-10">
												<button class="btn btn-dark btn-block">Dark</button>
											</div>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code" data-toggle="tab" href="#html-code" role="tab" aria-controls="html-code" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="element1"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="row row-xs wd-xl-80p">
	<div class="col-sm-6 col-md-3">
		<button class="btn btn-primary btn-block">Primary</button>
	</div>
	<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
		<button class="btn btn-secondary btn-block">Secondary</button>
	</div>
	<div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0">
		<button class="btn btn-success btn-block">Success</button>
	</div>
	<div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0">
		<button class="btn btn-warning btn-block">Warning</button>
	</div>
	<div class="col-sm-6 col-md-3 mg-t-10">
		<button class="btn btn-danger btn-block">Danger</button>
	</div>
	<div class="col-sm-6 col-md-3 mg-t-10">
		<button class="btn btn-info btn-block">Info</button>
	</div>
	<div class="col-sm-6 col-md-3 mg-t-10">
		<button class="btn btn-light btn-block">Light</button>
	</div>
	<div class="col-sm-6 col-md-3 mg-t-10">
		<button class="btn btn-dark btn-block">Dark</button>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element1"><i class="las la-clipboard"></i></div>
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
											<td><code class="pd-0 bg-transparent">class="btn btn-[value]"</code></td>
											<td>primary | secondary | success | warning | danger | info | light | dark</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<div class="col-lg-12 col-md-12">
						<div class="card" id="button33">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Gradient Buttons
								</div>
								<p class="mg-b-20">Predefined button styles, each serving its own semantic purpose..</p>
								<div class="text-wrap">
									<div class="example">
										<div class="row row-xs wd-xl-80p">
											<div class="col-sm-6 col-md-3">
												<button class="btn btn-primary-gradient btn-block">Primary</button>
											</div>
											<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
												<button class="btn btn-secondary-gradient btn-block">Secondary</button>
											</div>
											<div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0">
												<button class="btn btn-success-gradient btn-block">Success</button>
											</div>
											<div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0">
												<button class="btn btn-warning-gradient btn-block">Warning</button>
											</div>
											<div class="col-sm-6 col-md-3 mg-t-10">
												<button class="btn btn-danger-gradient btn-block">Danger</button>
											</div>
											<div class="col-sm-6 col-md-3 mg-t-10">
												<button class="btn btn-info-gradient btn-block">Info</button>
											</div>
											<div class="col-sm-6 col-md-3 mg-t-10">
												<button class="btn btn-light-gradient btn-block">Light</button>
											</div>
											<div class="col-sm-6 col-md-3 mg-t-10">
												<button class="btn btn-dark-gradient btn-block">Dark</button>
											</div>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code22" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code22" data-toggle="tab" href="#html-code22" role="tab" aria-controls="html-code22" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="element33"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="row row-xs wd-xl-80p">
	<div class="col-sm-6 col-md-3">
		<button class="btn btn-primary-gradient btn-block">Primary</button>
	</div>
	<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
		<button class="btn btn-secondary-gradient btn-block">Secondary</button>
	</div>
	<div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0">
		<button class="btn btn-success-gradient btn-block">Success</button>
	</div>
	<div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0">
		<button class="btn btn-warning-gradient btn-block">Warning</button>
	</div>
	<div class="col-sm-6 col-md-3 mg-t-10">
		<button class="btn btn-danger-gradient btn-block">Danger</button>
	</div>
	<div class="col-sm-6 col-md-3 mg-t-10">
		<button class="btn btn-info-gradient btn-block">Info</button>
	</div>
	<div class="col-sm-6 col-md-3 mg-t-10">
		<button class="btn btn-light-gradient btn-block">Light</button>
	</div>
	<div class="col-sm-6 col-md-3 mg-t-10">
		<button class="btn btn-dark-gradient btn-block">Dark</button>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element33"><i class="las la-clipboard"></i></div>
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
											<td><code class="pd-0 bg-transparent">class="btn btn-[value]"</code></td>
											<td>primary-gradient | secondary-gradient | success-gradient | warning-gradient | danger-gradient | info-gradient | light-gradient | dark-gradient</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<div class="col-lg-12 col-md-12">
						<div class="card" id="button2">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Outline Buttons
								</div>
								<p class="mg-b-20">Predefined button styles, each serving its own semantic purpose..</p>
								<div class="text-wrap">
									<div class="example">
										<div class="row row-xs wd-xl-80p">
											<div class="col-sm-6 col-md-3">
												<button class="btn btn-outline-primary btn-block">Primary</button>
											</div>
											<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
												<button class="btn btn-outline-secondary btn-block">Secondary</button>
											</div>
											<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
												<button class="btn btn-outline-success btn-block">Success</button>
											</div>
											<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
												<button class="btn btn-outline-warning btn-block">Warning</button>
											</div>
											<div class="col-sm-6 col-md-3 mg-t-10">
												<button class="btn btn-outline-danger btn-block">Danger</button>
											</div>
											<div class="col-sm-6 col-md-3 mg-t-10">
												<button class="btn btn-outline-info btn-block">Info</button>
											</div>
											<div class="col-sm-6 col-md-3 mg-t-10">
												<button class="btn btn-outline-light btn-block">Light</button>
											</div>
											<div class="col-sm-6 col-md-3 mg-t-10">
												<button class="btn btn-outline-dark btn-block">Dark</button>
											</div>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code2" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code2" data-toggle="tab" href="#html-code2" role="tab" aria-controls="html-code2" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="element2"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="row row-xs wd-xl-80p">
	<div class="col-sm-6 col-md-3">
		<button class="btn btn-outline-primary btn-block">Primary</button>
	</div>
	<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
		<button class="btn btn-outline-secondary btn-block">Secondary</button>
	</div>
	<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
		<button class="btn btn-outline-success btn-block">Success</button>
	</div>
	<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
		<button class="btn btn-outline-warning btn-block">Warning</button>
	</div>
	<div class="col-sm-6 col-md-3 mg-t-10">
		<button class="btn btn-outline-danger btn-block">Danger</button>
	</div>
	<div class="col-sm-6 col-md-3 mg-t-10">
		<button class="btn btn-outline-info btn-block">Info</button>
	</div>
	<div class="col-sm-6 col-md-3 mg-t-10">
		<button class="btn btn-outline-light btn-block">Light</button>
	</div>
	<div class="col-sm-6 col-md-3 mg-t-10">
		<button class="btn btn-outline-dark btn-block">Dark</button>
	</div>
</div>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element2"><i class="las la-clipboard"></i></div>
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
											<td><code class="pd-0 bg-transparent">class="btn btn-outline-[value]"</code></td>
											<td> primary | secondary | success | warning | danger | info | light | dark</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<div class="col-lg-12 col-md-12">
						<div class="card" id="button3">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									ROUNDED BUTTONS
								</div>
								<p class="mg-b-20">Predefined button styles, each serving its own semantic purpose..</p>
								<div class="text-wrap">
									<div class="example">
										<div class="row row-xs wd-xl-80p">
											<div class="col-sm-6 col-md-3"><button class="btn btn-indigo btn-rounded btn-block">Primary</button></div>
											<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0"><button class="btn btn-outline-indigo btn-rounded btn-block">Primary</button></div>
											<div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0"><button class="btn btn-secondary btn-rounded btn-block">Secondary</button></div>
											<div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0"><button class="btn btn-outline-secondary btn-rounded btn-block">Secondary</button></div>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code3" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code3" data-toggle="tab" href="#html-code3" role="tab" aria-controls="html-code3" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="element3"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="row row-xs wd-xl-80p">
	<div class="col-sm-6 col-md-3"><button class="btn btn-indigo btn-rounded btn-block">Primary</button></div>
	<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0"><button class="btn btn-outline-indigo btn-rounded btn-block">Primary</button></div>
	<div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0"><button class="btn btn-secondary btn-rounded btn-block">Secondary</button></div>
	<div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0"><button class="btn btn-outline-secondary btn-rounded btn-block">Secondary</button></div>
</div>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element3"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-12 col-md-12">
						<div class="card" id="button4">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									BUTTON WITH ICONS
								</div>
								<p class="mg-b-20">A basic button with added icons...</p>
								<div class="text-wrap">
									<div class="example">
										<div class="row row-xs wd-xl-80p">
											<div class="col-sm-6 col-md-3"><button class="btn btn-indigo btn-with-icon btn-block"><i class="typcn typcn-folder"></i> Folder</button></div>
											<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0"><button class="btn btn-primary btn-with-icon btn-block"><i class="typcn typcn-mail"></i> Mail</button></div>
											<div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0"><button class="btn btn-success btn-with-icon btn-block"><i class="typcn typcn-edit"></i> Edit</button></div>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code4" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code4" data-toggle="tab" href="#html-code4" role="tab" aria-controls="html-code4" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="element4"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="row row-xs wd-xl-80p">
	<div class="col-sm-6 col-md-3"><button class="btn btn-indigo btn-with-icon btn-block"><i class="typcn typcn-folder"></i> Folder</button></div>
	<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0"><button class="btn btn-primary btn-with-icon btn-block"><i class="typcn typcn-mail"></i> Mail</button></div>
	<div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0"><button class="btn btn-success btn-with-icon btn-block"><i class="typcn typcn-edit"></i> Edit</button></div>
</div>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element4"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-12 col-md-12">
						<div class="card" id="button5">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									ICON BUTTONS
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication....</p>
								<div class="text-wrap">
									<div class="example">
										<div class="btn-icon-list">
											<button class="btn btn-indigo btn-icon"><i class="typcn typcn-folder"></i></button>
											<button class="btn btn-primary btn-icon"><i class="typcn typcn-calendar-outline"></i></button>
											<button class="btn btn-success btn-icon"><i class="typcn typcn-document-add"></i></button>
											<button class="btn btn-info btn-icon"><i class="typcn typcn-arrow-back-outline"></i></button>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code5" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code5" data-toggle="tab" href="#html-code5" role="tab" aria-controls="html-code5" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="element5"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="btn-icon-list">
	<button class="btn btn-indigo btn-icon"><i class="typcn typcn-folder"></i></button>
	<button class="btn btn-primary btn-icon"><i class="typcn typcn-calendar-outline"></i></button>
	<button class="btn btn-success btn-icon"><i class="typcn typcn-document-add"></i></button>
	<button class="btn btn-info btn-icon"><i class="typcn typcn-arrow-back-outline"></i></button>
</div>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element5"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-12 col-md-12">
						<div class="card" id="button6">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									DROPDOWN BUTTONS
								</div>
								<p class="mg-b-20">A button variant for using only icons.</p>
								<div class="text-wrap">
									<div class="example">
										<div class="row row-xs wd-xl-80p">
											<div class="col-sm-6 col-md-3">
												<button data-toggle="dropdown" class="btn btn-indigo btn-block">Dropdown <i class="icon ion-ios-arrow-down tx-11 mg-l-3"></i></button>
												<div class="dropdown-menu">
													<a href="" class="dropdown-item">Profile</a>
													<a href="" class="dropdown-item">Activity Logs</a>
													<a href="" class="dropdown-item">Account Settings</a>
													<a href="" class="dropdown-item">Logout</a>
												</div><!-- dropdown-menu -->
											</div>
											<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
												<button data-toggle="dropdown" class="btn btn-primary btn-block">Dropdown <i class="icon ion-ios-arrow-down tx-11 mg-l-3"></i></button>
												<div class="dropdown-menu">
													<a href="" class="dropdown-item">Profile</a>
													<a href="" class="dropdown-item">Activity Logs</a>
													<a href="" class="dropdown-item">Account Settings</a>
													<a href="" class="dropdown-item">Logout</a>
												</div><!-- dropdown-menu -->
											</div>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code6" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code6" data-toggle="tab" href="#html-code6" role="tab" aria-controls="html-code6" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="element6"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="row row-xs wd-xl-80p">
	<div class="col-sm-6 col-md-3">
		<button data-toggle="dropdown" class="btn btn-indigo btn-block">Dropdown <i class="icon ion-ios-arrow-down tx-11 mg-l-3"></i></button>
		<div class="dropdown-menu">
			<a href="" class="dropdown-item">Profile</a>
			<a href="" class="dropdown-item">Activity Logs</a>
			<a href="" class="dropdown-item">Account Settings</a>
			<a href="" class="dropdown-item">Logout</a>
		</div><!-- dropdown-menu -->
	</div>
	<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
		<button data-toggle="dropdown" class="btn btn-primary btn-block">Dropdown <i class="icon ion-ios-arrow-down tx-11 mg-l-3"></i></button>
		<div class="dropdown-menu">
			<a href="" class="dropdown-item">Profile</a>
			<a href="" class="dropdown-item">Activity Logs</a>
			<a href="" class="dropdown-item">Account Settings</a>
			<a href="" class="dropdown-item">Logout</a>
		</div><!-- dropdown-menu -->
	</div>
</div>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element6"><i class="las la-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-12 col-md-12">
						<div class="card" id="button7">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Button Groups
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication..</p>
								<div class="text-wrap">
									<div class="example">
										<div class="row row-sm">
											<div class="col-lg-4">
												<div aria-label="Basic example" class="btn-group" role="group">
													<button class="btn btn-secondary pd-x-25 active" type="button">Left</button> <button class="btn btn-secondary pd-x-25" type="button">Center</button> <button class="btn btn-secondary pd-x-25" type="button">Right</button>
												</div>
											</div><!-- col-4 -->
											<div class="col-lg-2 mg-t-20 mg-lg-t-0">
												<div aria-label="Basic example" class="btn-group" role="group">
													<button class="btn btn-secondary btn-icon active" type="button"><i class="typcn typcn-media-play-outline"></i></button> <button class="btn btn-secondary btn-icon" type="button"><i class="typcn typcn-media-pause-outline"></i></button> <button class="btn btn-secondary btn-icon" type="button"><i class="typcn typcn-media-stop-outline"></i></button>
												</div>
											</div><!-- col-2 -->
											<div class="col-lg-4 mg-t-20 mg-lg-t-0">
												<div aria-label="Basic example" class="btn-group" role="group">
													<button class="btn btn-indigo btn-icon active" type="button"><i class="typcn typcn-media-play-outline"></i></button> <button class="btn btn-primary btn-icon" type="button"><i class="typcn typcn-media-pause-outline"></i></button> <button class="btn btn-primary btn-icon" type="button"><i class="typcn typcn-media-stop-outline"></i></button>
												</div>
											</div><!-- col-4 -->
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code7" role="tablist">
										<li class="nav-item">
											<a class="nav-link active ml-1 html-code" id="html-code7" data-toggle="tab" href="#html-code7" role="tab" aria-controls="html-code7" aria-selected="true"><i class="fab fa-html5 text-orange ml-2"></i>HTML</a>
										</li>
									</ul>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="element7"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="row row-sm">
	<div class="col-lg-4">
		<div aria-label="Basic example" class="btn-group" role="group">
			<button class="btn btn-secondary pd-x-25 active" type="button">Left</button> <button class="btn btn-secondary pd-x-25" type="button">Center</button> <button class="btn btn-secondary pd-x-25" type="button">Right</button>
		</div>
	</div><!-- col-4 -->
	<div class="col-lg-2 mg-t-20 mg-lg-t-0">
		<div aria-label="Basic example" class="btn-group" role="group">
			<button class="btn btn-secondary btn-icon active" type="button"><i class="typcn typcn-media-play-outline"></i></button> <button class="btn btn-secondary btn-icon" type="button"><i class="typcn typcn-media-pause-outline"></i></button> <button class="btn btn-secondary btn-icon" type="button"><i class="typcn typcn-media-stop-outline"></i></button>
		</div>
	</div><!-- col-2 -->
	<div class="col-lg-4 mg-t-20 mg-lg-t-0">
		<div aria-label="Basic example" class="btn-group" role="group">
			<button class="btn btn-indigo btn-icon active" type="button"><i class="typcn typcn-media-play-outline"></i></button> <button class="btn btn-primary btn-icon" type="button"><i class="typcn typcn-media-pause-outline"></i></button> <button class="btn btn-primary btn-icon" type="button"><i class="typcn typcn-media-stop-outline"></i></button>
		</div>
	</div><!-- col-4 -->
</div>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element7"><i class="las la-clipboard"></i></div>
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