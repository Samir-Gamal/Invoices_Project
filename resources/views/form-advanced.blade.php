@extends('layouts.master')
@section('css')
<!--- Internal Select2 css-->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<!---Internal Fileupload css-->
<link href="{{URL::asset('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>
<!---Internal Fancy uploader css-->
<link href="{{URL::asset('assets/plugins/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet" />
<!--Internal Sumoselect css-->
<link rel="stylesheet" href="{{URL::asset('assets/plugins/sumoselect/sumoselect-rtl.css')}}">
<!--Internal  TelephoneInput css-->
<link rel="stylesheet" href="{{URL::asset('assets/plugins/telephoneinput/telephoneinput-rtl.css')}}">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Forms</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Form-Advanced</span>
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
					<div class="col-lg-6 col-md-12">
						<div class="card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Single Select Style</h6>
									<p class="text-muted card-sub-title">First import a latest version of jquery in your page. Then the jquery.sumoselect.min.js and its css (sumoselect.css)</p>
								</div>
								<div class="mb-4">
									<p class="mg-b-10">Single Select</p>
									<select name="somename" class="form-control SlectBox" onclick="console.log($(this).val())" onchange="console.log('change is firing')">
										<!--placeholder-->
										<option title="Volvo is a car"  value="volvo">Volvo</option>
										<option value="saab">Saab</option>
										<option value="mercedes">Mercedes</option>
										<option value="audi">Audi</option>
									</select>
								</div>
								<div class="mb-4">
									<p class="mg-b-10">Disabled Select</p>
									<select class="SlectBox form-control" disabled>
										<option value="volvo">Volvo</option>
										<option selected value="saab">Saab</option>
										<option value="mercedes">Mercedes</option>
										<option value="audi">Audi</option>
										<option disabled value="opt1">option1</option>
										<option value="opt2">option2</option>
										<option value="opt3">option3</option>
									</select>
								</div>
								<div>
									<p class="mg-b-10">Inline Select</p>
									<select class="SlectBox form-control">
										<option>selected</option>
										<option>Volvo</option>
										<option>Saab</option>
										<option value="mercedes">Mercedes</option>
										<option value="audi">Audi</option>
										<option>Volvo</option>
										<option>Saab</option>
										<option value="mercedes">Mercedes</option>
										<option value="audi">Audi</option>
										<option>Volvo</option>
										<option>Saab</option>
										<option value="mercedes">Mercedes</option>
										<option value="audi">Audi</option>
										<option>Volvo</option>
										<option>Saab</option>
										<option value="mercedes">Mercedes</option>
										<option value="audi">Audi</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Multiple Select Styles</h6>
									<p class="text-muted card-sub-title">First import a latest version of jquery in your page. Then the jquery.sumoselect.min.js and its css (sumoselect.css)</p>
								</div>
								<div class="mb-4">
									<p class="mg-b-10">Multiple Select</p>
									<select multiple="multiple" class="testselect2">
										<option selected value="volvo">Volvo</option>
										<option value="saab">Saab</option>
										<option value="mercedes">Mercedes</option>
										<option value="audi">Audi</option>
									</select>
								</div>
								<div class="mb-4">
									<p class="mg-b-10">Disabled Select</p>
									<select multiple="multiple" class="testselect2" disabled >
									   <option selected value="volvo">Volvo</option>
									   <option value="saab">Saab</option>
									   <option disabled="disabled" value="mercedes">Mercedes</option>
									   <option value="audi">Audi</option>
									   <option value="bmw">BMW</option>
									   <option value="porsche">Porche</option>
									   <option value="ferrari">Ferrari</option>
									   <option class="someclass" value="audi">Audi</option>
									   <option class="someclass" value="bmw">BMW</option>
									   <option class="someclass" value="porsche">Porche</option>
									   <option value="ferrari">Ferrari</option>
									   <option value="audi">Audi</option>
									   <option value="bmw">BMW</option>
									   <option value="porsche">Porche</option>
									   <option value="ferrari">Ferrari</option>
									   <option value="hyundai">Hyundai</option>
									   <option value="mitsubishi">Mitsubishi</option>
									</select>
								</div>
								<div>
									<p class="mg-b-10">Optgroup Support</p>
									<select   multiple="multiple" class="testselect2">
									   <option selected value="volvo">Volvo</option>
									   <option value="saab">Saab</option>
									   <option disabled="disabled" value="mercedes">Mercedes</option>
									   <option value="audi">Audi</option>
									   <option value="bmw">BMW</option>
									   <option value="porsche">Porche</option>
									   <option value="ferrari">Ferrari</option>
									   <option class="someclass" value="audi">Audi</option>
									   <option class="someclass" value="bmw">BMW</option>
									   <option class="someclass" value="porsche">Porche</option>
									   <option value="ferrari">Ferrari</option>
									   <option value="audi">Audi</option>
									   <option value="bmw">BMW</option>
									   <option value="porsche">Porche</option>
									   <option value="ferrari">Ferrari</option>
									   <option value="hyundai">Hyundai</option>
									   <option value="mitsubishi">Mitsubishi</option>
								   </select>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Multiple Select Styles</h6>
									<p class="text-muted card-sub-title">First import a latest version of jquery in your page. Then the jquery.sumoselect.min.js and its css (sumoselect.css)</p>
								</div>
								<div class="mb-4">
									<p class="mg-b-10">Multiple Select-1</p>
									<select multiple="multiple" onchange="console.log($(this).children(':selected').length)" class="selectsum1">
									   <option selected value="volvo">Volvo</option>
									   <option value="saab">Saab</option>
									   <option disabled="disabled" value="mercedes">Mercedes</option>
									   <option value="audi">Audi</option>
									   <option selected value="bmw">BMW</option>
									   <option value="porsche">Porche</option>
									   <option value="ferrari">Ferrari</option>
									   <option value="mitsubishi">Mitsubishi</option>
									</select>
								</div>
								<div>
									<p class="mg-b-10">Multiple Select-2</p>
									<select multiple="multiple" onchange="console.log($(this).children(':selected').length)" class="selectsum2">
									   <option selected value="volvo">Volvo</option>
									   <option value="saab">Saab</option>
									   <option disabled="disabled" value="mercedes">Mercedes</option>
									   <option value="audi">Audi</option>
									   <option selected value="bmw">BMW</option>
									   <option value="porsche">Porche</option>
									   <option value="ferrari">Ferrari</option>
									   <option value="mitsubishi">Mitsubishi</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Telephone Input</h6>
									<p class="text-muted card-sub-title">A JavaScript plugin for entering and validating international telephone numbers. It adds a flag dropdown to any input, detects the user's country, displays a relevant placeholder and provides formatting/validation methods.</p>
								</div>
								<div class="input-group">
									<input class="form-control" id="phone" name="phone" type="tel">
									<span class="input-group-btn">
										<button class="btn ripple btn-primary bl-tl-0 bl-bl-0" type="button">Submit</button>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">File Upload</h6>
									<p class="text-muted card-sub-title">Dropify is a jQuery plugin to create a beautiful file uploader that converts a standard <code>input type="file"</code> into a nice drag & drop zone with previews and custom styles.</p>
								</div>
								<div class="row mb-4">
									<div class="col-sm-12 col-md-4">
										<input type="file" class="dropify" data-height="200" />
									</div>
									<div class="col-sm-12 col-md-4 mg-t-10 mg-sm-t-0">
										<input type="file" class="dropify" data-default-file="{{URL::asset('assets/img/photos/1.jpg')}}" data-height="200"  />
									</div>
									<div class="col-sm-12 col-md-4 mg-t-10 mg-sm-t-0">
										<input type="file" class="dropify" disabled="disabled"  />
									</div>
								</div>
								<div>
									<input id="demo" type="file" name="files" accept=".jpg, .png, image/jpeg, image/png, html, zip, css,js" multiple>
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
<!-- Internal Select2 js-->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!--Internal Fileuploads js-->
<script src="{{URL::asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>
<!--Internal Fancy uploader js-->
<script src="{{URL::asset('assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>
<!--Internal  Form-elements js-->
<script src="{{URL::asset('assets/js/advanced-form-elements.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.js')}}"></script>
<!--Internal Sumoselect js-->
<script src="{{URL::asset('assets/plugins/sumoselect/jquery.sumoselect.js')}}"></script>
<!-- Internal TelephoneInput js-->
<script src="{{URL::asset('assets/plugins/telephoneinput/telephoneinput.js')}}"></script>
<script src="{{URL::asset('assets/plugins/telephoneinput/inttelephoneinput.js')}}"></script>
@endsection