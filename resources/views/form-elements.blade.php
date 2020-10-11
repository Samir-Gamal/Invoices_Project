@extends('layouts.master')
@section('css')
<!-- Internal Select2 css -->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<!--Internal  Datetimepicker-slider css -->
<link href="{{URL::asset('assets/plugins/amazeui-datetimepicker/css/amazeui.datetimepicker.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/pickerjs/picker.min.css')}}" rel="stylesheet">
<!-- Internal Spectrum-colorpicker css -->
<link href="{{URL::asset('assets/plugins/spectrum-colorpicker/spectrum.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Forms</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Form-Elements</span>
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
				<div class="row row-sm">
					<div class="col-lg-6 col-xl-6 col-md-12 col-sm-12">
						<div class="card  box-shadow-0">
							<div class="card-header">
								<h4 class="card-title mb-1">Default Form</h4>
								<p class="mb-2">It is Very Easy to Customize and it uses in your website apllication.</p>
							</div>
							<div class="card-body pt-0">
								<form class="form-horizontal" >
									<div class="form-group">
										<input type="text" class="form-control" id="inputName" placeholder="Name">
									</div>
									<div class="form-group">
										<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
									</div>
									<div class="form-group">
										<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
									</div>
									<div class="form-group mb-0 justify-content-end">
										<div class="checkbox">
											<div class="custom-checkbox custom-control">
												<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
												<label for="checkbox-2" class="custom-control-label mt-1">Check me Out</label>
											</div>
										</div>
									</div>
									<div class="form-group mb-0 mt-3 justify-content-end">
										<div>
											<button type="submit" class="btn btn-primary">Sign in</button>
											<button type="submit" class="btn btn-secondary">Cancel</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-xl-6 col-md-12 col-sm-12">
						<div class="card  box-shadow-0 ">
							<div class="card-header">
								<h4 class="card-title mb-1">Vertical Form</h4>
								<p class="mb-2">It is Very Easy to Customize and it uses in your website apllication.</p>
							</div>
							<div class="card-body pt-0">
								<form >
									<div class="">
										<div class="form-group">
											<label for="exampleInputEmail1">Email address</label>
											<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Password</label>
											<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
										</div>
										<div class="checkbox">
											<div class="custom-checkbox custom-control">
												<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
												<label for="checkbox-1" class="custom-control-label mt-1">Check me Out</label>
											</div>
										</div>
									</div>
									<button type="submit" class="btn btn-primary mt-3 mb-0">Submit</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- row -->

				<!-- row -->
				<div class="row">
					<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<!--div-->
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Form Input &amp; Textarea
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="row row-sm">
									<div class="col-lg">
										<input class="form-control" placeholder="Input box" type="text">
									</div>
									<div class="col-lg mg-t-10 mg-lg-t-0">
										<input class="form-control" placeholder="Input box (readonly)" readonly type="text">
									</div>
									<div class="col-lg mg-t-10 mg-lg-t-0">
										<input class="form-control" disabled placeholder="Input box (disabled)" type="text">
									</div>
								</div>
								<div class="row row-sm mg-t-20">
									<div class="col-lg">
										<textarea class="form-control" placeholder="Textarea" rows="3"></textarea>
									</div>
									<div class="col-lg mg-t-10 mg-lg-t-0">
										<textarea class="form-control" placeholder="Textarea (readonly)" readonly rows="3"></textarea>
									</div>
									<div class="col-lg mg-t-10 mg-lg-t-0">
										<textarea class="form-control" disabled placeholder="Texarea (disabled)" rows="3"></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->

					<!--div-->
					<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Form Input Sizes
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="row row-sm">
									<div class="col-lg">
										<input class="form-control form-control-sm mg-b-20" placeholder="Input sm box" type="text">
										<input class="form-control mg-b-20" placeholder="Input box" type="text">
										<input class="form-control form-control-lg" placeholder="Input lg box" type="text">
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->

					<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Valid State Input
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
								<form class="needs-validation was-validated">
									<div class="row row-sm">
										<div class="col-lg-6">
											<div class="form-group has-success mg-b-0">
												<input class="form-control" placeholder="Input box (success state)" required="" type="text" value="This is input">
												<textarea class="form-control mg-t-20" placeholder="Textarea (success state)" required="" rows="3">This is textarea</textarea>
											</div>
										</div>
										<div class="col-lg-6 mg-t-20 mg-lg-t-0">
											<div class="form-group has-danger mg-b-0">
												<input class="form-control" placeholder="Input box (invalid state)" required="" type="text">
												<textarea class="form-control mg-t-20" placeholder="Textarea (invalid state)" required="" rows="3"></textarea>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!--/div-->

					<!--div-->
					<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Custom Checkboxes &amp; Radios
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="row">
									<div class="col-lg-3">
										<label class="ckbox"><input type="checkbox"><span>Checkbox Unchecked</span></label>
									</div>
									<div class="col-lg-3 mg-t-20 mg-lg-t-0">
										<label class="ckbox"><input checked type="checkbox"><span>Checkbox Checked</span></label>
									</div>
									<div class="col-lg-3 mg-t-20 mg-lg-t-0">
										<label class="ckbox"><input disabled type="checkbox"><span>Checkbox Disabled</span></label>
									</div>
								</div>
								<div class="row mg-t-10">
									<div class="col-lg-3">
										<label class="rdiobox"><input name="rdio" type="radio"> <span>Radio Unchecked</span></label>
									</div>
									<div class="col-lg-3 mg-t-20 mg-lg-t-0">
										<label class="rdiobox"><input checked name="rdio" type="radio"> <span>Radio Checked</span></label>
									</div>
									<div class="col-lg-3 mg-t-20 mg-lg-t-0">
										<label class="rdiobox"><input disabled name="rdio" type="radio"> <span>Radio Disabled</span></label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->

					<!--div-->
					<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									File Browser
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="row row-sm">
									<div class="col-sm-7 col-md-6 col-lg-4">
										<div class="custom-file">
											<input class="custom-file-input" id="customFile" type="file"> <label class="custom-file-label" for="customFile">Choose file</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->

					<!--div-->
					<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Toggle Switches
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="main-toggle-group-demo">
									<div class="main-toggle">
										<span></span>
									</div>
									<div class="main-toggle main-toggle-secondary">
										<span></span>
									</div>
									<div class="main-toggle main-toggle-success">
										<span></span>
									</div>
									<div class="main-toggle main-toggle-dark">
										<span></span>
									</div>
								</div>
								<div class="main-toggle-group-demo mg-t-10">
									<div class="main-toggle on">
										<span></span>
									</div>
									<div class="main-toggle main-toggle-secondary on">
										<span></span>
									</div>
									<div class="main-toggle main-toggle-success on">
										<span></span>
									</div>
									<div class="main-toggle main-toggle-dark on">
										<span></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->

					<!--div-->
					<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Input Groups
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="row row-sm">
									<div class="col-lg-4">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon1">@</span>
											</div><input aria-describedby="basic-addon1" aria-label="Username" class="form-control" placeholder="Username" type="text">
										</div><!-- input-group -->
									</div>
									<div class="col-lg-4">
										<div class="input-group mb-3">
											<input aria-describedby="basic-addon2" aria-label="Recipient's username" class="form-control" placeholder="Recipient's username" type="text">
											<div class="input-group-append">
												<span class="input-group-text" id="basic-addon2">@example.com</span>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text">$</span>
											</div><input aria-label="Amount (to the nearest dollar)" class="form-control" type="text">
											<div class="input-group-append">
												<span class="input-group-text">.00</span>
											</div>
										</div><!-- input-group -->
									</div>
								</div>
								<div class="row row-sm">
									<div class="col-lg-4">
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text">
													<label class="ckbox wd-16 mg-b-0"><input class="mg-0" type="checkbox"><span></span></label>
												</div>
											</div><input class="form-control" placeholder="Text input with checkbox" type="text">
										</div><!-- input-group -->
									</div><!-- col-4 -->
									<div class="col-lg-4 mg-t-20 mg-lg-t-0">
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text">
													<label class="rdiobox wd-16 mg-b-0"><input type="radio"><span></span></label>
												</div>
											</div><input class="form-control" placeholder="Text input with radiobox" type="text">
										</div><!-- input-group -->
									</div><!-- col-4 -->
									<div class="col-lg-4 mg-t-20 mg-lg-t-0">
										<div class="input-group">
											<input class="form-control" placeholder="Search for..." type="text"> <span class="input-group-btn"><button class="btn btn-primary" type="button"><span class="input-group-btn"><i class="fa fa-search"></i></span></button></span>
										</div><!-- input-group -->
									</div><!-- col-4 -->
								</div>
							</div>
						</div>
					</div>
					<!--/div-->

					<!--div-->
					<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Input Mask
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="row row-sm">
									<div class="col-lg-3">
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text">
													Date:
												</div>
											</div><input class="form-control" id="dateMask" placeholder="MM/DD/YYYY" type="text">
										</div><!-- input-group -->
									</div><!-- col-4 -->
									<div class="col-lg-3 mg-t-20 mg-lg-t-0">
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text">
													Phone:
												</div>
											</div><!-- input-group-prepend -->
											<input class="form-control" id="phoneMask" placeholder="(000) 000-0000" type="text">
										</div><!-- input-group -->
									</div>
									<div class="col-lg-4 mg-t-20 mg-lg-t-0">
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text">
													Phone + Ext.:
												</div>
											</div><!-- input-group-prepend -->
											<input class="form-control" id="phoneExtMask" placeholder="(000) 000-0000 ext 0000" type="text">
										</div><!-- input-group -->
									</div>
									<div class="col-lg-2 mg-t-20 mg-lg-t-0">
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text">
													SSN:
												</div><!-- input-group-text -->
											</div><!-- input-group-prepend -->
											<input class="form-control" id="ssnMask" placeholder="000-00-0000" type="text">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->

					<!--div-->
					<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Color Picker
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div>
									<input id="colorpicker" type="text">
								</div>
								<p class="mg-t-40 mg-b-10">You can allow alpha transparency selection. Check out these example.</p>
								<div>
									<input id="showAlpha" type="text">
								</div>
								<p class="mg-t-40 mg-b-10">Show pallete only. If you'd like, spectrum can show the palettes you specify, and nothing else.</p>
								<div>
									<input id="showPaletteOnly" type="text">
								</div>
							</div>
						</div>
					</div>
					<!--/div-->


					<!--div-->
					<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									jQuery UI Date Picker
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="row row-sm mg-b-20">
									<div class="input-group col-md-4">
										<div class="input-group-prepend">
											<div class="input-group-text">
												<i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
											</div>
										</div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text">
									</div>
								</div><!-- wd-200 -->
								<p class="mg-b-5">Set the numberOfMonths option to an integer of 2 or more to show multiple months in a single datepicker.</p>
								<div class="row row-sm mg-b-20">
									<div class="input-group col-md-4">
										<div class="input-group-prepend">
											<div class="input-group-text">
												<i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
											</div>
										</div><input class="form-control" id="datepickerNoOfMonths" placeholder="MM/DD/YYYY" type="text">
									</div>
								</div><!-- wd-200 -->
								<p class="mg-b-5">Display the datepicker embedded in the page instead of in an overlay.</p>
								<div class="fc-datepicker"></div>
								<hr class="mg-y-30">
								<div class="main-content-label mg-b-5">
									Datetimepicker
								</div>
								<p class="mg-b-20">Datetimepicker style variant on top of AmazeUI Datetimepicker.</p>
								<div class="row row-sm">
									<div class="input-group col-md-4">
										<div class="input-group-prepend">
											<div class="input-group-text">
												<i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
											</div>
										</div><input class="form-control" id="datetimepicker" type="text" value="2018-12-20 21:05">
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->

					<!--div-->
					<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Datetimepicker Style 2
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="row row-sm">
									<div class="input-group col-md-4">
										<div class="input-group-prepend">
											<div class="input-group-text">
												<i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
											</div>
										</div><input class="form-control" id="datetimepicker2" type="text" value="2018-12-20 21:05">
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->

					<!--div-->
					<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Datetimepicker Style 3
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="row row-sm">
									<div class="wd-250 mg-b-20">
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text">
													<i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
												</div>
											</div>
											<input type="text" value="January 20, 2019 09:00" id="datetimepicker3" class="form-control">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->

					<!--div-->
					<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Select<span class="tx-sserif">2</span>
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="row row-sm mg-b-20">
									<div class="col-lg-4">
										<p class="mg-b-10">Single Select</p><select class="form-control select2-no-search">
											<option label="Choose one">
											</option>
											<option value="Firefox">
												Firefox
											</option>
											<option value="Chrome">
												Chrome
											</option>
											<option value="Safari">
												Safari
											</option>
											<option value="Opera">
												Opera
											</option>
											<option value="Internet Explorer">
												Internet Explorer
											</option>
										</select>
									</div><!-- col-4 -->
									<div class="col-lg-4 mg-t-20 mg-lg-t-0">
										<p class="mg-b-10">Single Select with Search</p><select class="form-control select2">
											<option label="Choose one">
											</option>
											<option value="Firefox">
												Firefox
											</option>
											<option value="Chrome">
												Chrome
											</option>
											<option value="Safari">
												Safari
											</option>
											<option value="Opera">
												Opera
											</option>
											<option value="Internet Explorer">
												Internet Explorer
											</option>
										</select>
									</div><!-- col-4 -->
									<div class="col-lg-4 mg-t-20 mg-lg-t-0">
										<p class="mg-b-10">Single Select (Disabled)</p><select class="form-control select2" disabled>
											<option label="Choose one">
											</option>
											<option value="Firefox">
												Firefox
											</option>
											<option value="Chrome">
												Chrome
											</option>
											<option value="Safari">
												Safari
											</option>
											<option value="Opera">
												Opera
											</option>
											<option value="Internet Explorer">
												Internet Explorer
											</option>
										</select>
									</div><!-- col-4 -->
								</div>
								<div class="row row-sm">
									<div class="col-lg-4 mg-b-20 mg-lg-b-0">
										<p class="mg-b-10">Multiple Select</p><select class="form-control select2" multiple="multiple">
											<option value="Firefox">
												Firefox
											</option>
											<option value="Chrome">
												Chrome
											</option>
											<option value="Safari">
												Safari
											</option>
											<option value="Opera">
												Opera
											</option>
											<option value="Internet Explorer">
												Internet Explorer
											</option>
										</select>
									</div>
									<div class="col-lg-4 mg-b-20 mg-lg-b-0">
										<p class="mg-b-10">Multiple Select with Pre-Filled Input</p><select class="form-control select2" multiple="multiple">
											<option selected value="Firefox">
												Firefox
											</option>
											<option value="Chrome">
												Chrome
											</option>
											<option value="Safari">
												Safari
											</option>
											<option value="Opera">
												Opera
											</option>
											<option value="Internet Explorer">
												Internet Explorer
											</option>
										</select>
									</div>
									<div class="col-lg-4">
										<p class="mg-b-10">Multiple Select (Disabled)</p><select class="form-control select2-no-search" disabled multiple="multiple">
											<option selected value="Firefox">
												Firefox
											</option>
											<option value="Chrome">
												Chrome
											</option>
											<option value="Safari">
												Safari
											</option>
											<option value="Opera">
												Opera
											</option>
											<option value="Internet Explorer">
												Internet Explorer
											</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!--Internal  Datepicker js -->
<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!--Internal  jquery.maskedinput js -->
<script src="{{URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js')}}"></script>
<!--Internal  spectrum-colorpicker js -->
<script src="{{URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js')}}"></script>
<!-- Internal Select2.min js -->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!--Internal Ion.rangeSlider.min js -->
<script src="{{URL::asset('assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
<!--Internal  jquery-simple-datetimepicker js -->
<script src="{{URL::asset('assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')}}"></script>
<!-- Ionicons js -->
<script src="{{URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js')}}"></script>
<!--Internal  pickerjs js -->
<script src="{{URL::asset('assets/plugins/pickerjs/picker.min.js')}}"></script>
<!-- Internal form-elements js -->
<script src="{{URL::asset('assets/js/form-elements.js')}}"></script>
@endsection