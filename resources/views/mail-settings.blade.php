@extends('layouts.master')
@section('css')
<!-- Internal Select2 css -->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex"><h4 class="content-title mb-0 my-auto">Mail</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Mail-setting</span></div>
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
					<!-- Col -->
					<div class="col-lg-4 col-xl-3">
						<div class="card mg-b-20">
							<div class="main-content-left main-content-left-mail card-body">
								<a class="btn btn-primary btn-compose" href="" id="btnCompose">Compose</a>
								<div class="main-mail-menu">
									<nav class="nav main-nav-column mg-b-20">
										<a class="nav-link" href=""><i class="bx bxs-inbox"></i> Inbox <span>18</span></a>
										<a class="nav-link" href=""><i class="bx bx-star"></i> Starred <span>8</span></a>
										<a class="nav-link" href=""><i class="bx bx-alarm-snooze"></i> Snoozed <span>6</span></a>
										<a class="nav-link" href=""><i class="bx bx-bookmarks"></i> Important <span>15</span></a>
										<a class="nav-link" href=""><i class="bx bx-send"></i> Sent Mail <span>24</span></a>
										<a class="nav-link" href=""><i class="bx bx-edit"></i> Drafts <span>2</span></a>
										<a class="nav-link" href=""><i class="bx bx-message-error"></i> Spam <span>32</span></a>
										<a class="nav-link" href=""><i class="bx bx-message-square-detail"></i> Chats <span>14</span></a>
										<a class="nav-link" href=""><i class="bx bx-folder-open"></i> All Mail <span>652</span></a>
										<a class="nav-link" href=""><i class="bx bx-book-content"></i> Contacts <span>547</span></a>
										<a class="nav-link" href=""><i class="bx bx-trash"></i> Trash <span>365</span></a>
									</nav>
									<label class="main-content-label main-content-label-sm">Settings</label>
									<nav class="nav main-nav-column">
										<a class="nav-link active" href="#">Email Settings</a>
										<a class="nav-link" href="#">Account Information</a>
									</nav>
								</div><!-- main-mail-menu -->
							</div>
						</div>
					</div>
					<!-- /Col -->

					<!-- Col -->
					<div class="col-lg-8 col-xl-9">
						<div class="card">
							<div class="card-body">
								<form class="form-horizontal">
									<div class="mb-4 main-content-label">Account</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">User Name</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control"  placeholder="User Name" value="Petey">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Email</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control"  placeholder="Email" value="info@Valex.in">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Language</label>
											</div>
											<div class="col-md-9">
												<select class="form-control select2-no-search">
													<option>Us English</option>
													<option>Arabic</option>
													<option>Korean</option>
												</select>
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Timezone</label>
											</div>
											<div class="col-md-9">
												<select class="form-control select2">
													<option value="Pacific/Midway">(GMT-11:00) Midway Island, Samoa</option>
													<option value="America/Adak">(GMT-10:00) Hawaii-Aleutian</option>
													<option value="Etc/GMT+10">(GMT-10:00) Hawaii</option>
													<option value="Pacific/Marquesas">(GMT-09:30) Marquesas Islands</option>
													<option value="Pacific/Gambier">(GMT-09:00) Gambier Islands</option>
													<option value="America/Anchorage">(GMT-09:00) Alaska</option>
													<option value="America/Ensenada">(GMT-08:00) Tijuana, Baja California</option>
													<option value="Etc/GMT+8">(GMT-08:00) Pitcairn Islands</option>
													<option value="America/Los_Angeles">(GMT-08:00) Pacific Time (US & Canada)</option>
													<option value="America/Denver">(GMT-07:00) Mountain Time (US & Canada)</option>
													<option value="America/Chihuahua">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
													<option value="America/Dawson_Creek">(GMT-07:00) Arizona</option>
													<option value="America/Belize">(GMT-06:00) Saskatchewan, Central America</option>
													<option value="America/Cancun">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
													<option value="Chile/EasterIsland">(GMT-06:00) Easter Island</option>
													<option value="America/Chicago">(GMT-06:00) Central Time (US & Canada)</option>
													<option value="America/New_York">(GMT-05:00) Eastern Time (US & Canada)</option>
													<option value="America/Havana">(GMT-05:00) Cuba</option>
													<option value="America/Bogota">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
													<option value="America/Caracas">(GMT-04:30) Caracas</option>
													<option value="America/Santiago">(GMT-04:00) Santiago</option>
													<option value="America/La_Paz">(GMT-04:00) La Paz</option>
													<option value="Atlantic/Stanley">(GMT-04:00) Faukland Islands</option>
													<option value="America/Campo_Grande">(GMT-04:00) Brazil</option>
													<option value="America/Goose_Bay">(GMT-04:00) Atlantic Time (Goose Bay)</option>
													<option value="America/Glace_Bay">(GMT-04:00) Atlantic Time (Canada)</option>
													<option value="America/St_Johns">(GMT-03:30) Newfoundland</option>
													<option value="America/Araguaina">(GMT-03:00) UTC-3</option>
													<option value="America/Montevideo">(GMT-03:00) Montevideo</option>
													<option value="America/Miquelon">(GMT-03:00) Miquelon, St. Pierre</option>
													<option value="America/Godthab">(GMT-03:00) Greenland</option>
													<option value="America/Argentina/Buenos_Aires">(GMT-03:00) Buenos Aires</option>
													<option value="America/Sao_Paulo">(GMT-03:00) Brasilia</option>
													<option value="America/Noronha">(GMT-02:00) Mid-Atlantic</option>
													<option value="Atlantic/Cape_Verde">(GMT-01:00) Cape Verde Is.</option>
													<option value="Atlantic/Azores">(GMT-01:00) Azores</option>
													<option value="Europe/Belfast">(GMT) Greenwich Mean Time : Belfast</option>
													<option value="Europe/Dublin">(GMT) Greenwich Mean Time : Dublin</option>
													<option value="Europe/Lisbon">(GMT) Greenwich Mean Time : Lisbon</option>
													<option value="Europe/London">(GMT) Greenwich Mean Time : London</option>
													<option value="Africa/Abidjan">(GMT) Monrovia, Reykjavik</option>
													<option value="Europe/Amsterdam">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
													<option value="Europe/Belgrade">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
													<option value="Europe/Brussels">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
													<option value="Africa/Algiers">(GMT+01:00) West Central Africa</option>
													<option value="Africa/Windhoek">(GMT+01:00) Windhoek</option>
													<option value="Asia/Beirut">(GMT+02:00) Beirut</option>
													<option value="Africa/Cairo">(GMT+02:00) Cairo</option>
													<option value="Asia/Gaza">(GMT+02:00) Gaza</option>
													<option value="Africa/Blantyre">(GMT+02:00) Harare, Pretoria</option>
													<option value="Asia/Jerusalem">(GMT+02:00) Jerusalem</option>
													<option value="Europe/Minsk">(GMT+02:00) Minsk</option>
													<option value="Asia/Damascus">(GMT+02:00) Syria</option>
													<option value="Europe/Moscow">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
													<option value="Africa/Addis_Ababa">(GMT+03:00) Nairobi</option>
													<option value="Asia/Tehran">(GMT+03:30) Tehran</option>
													<option value="Asia/Dubai">(GMT+04:00) Abu Dhabi, Muscat</option>
													<option value="Asia/Yerevan">(GMT+04:00) Yerevan</option>
													<option value="Asia/Kabul">(GMT+04:30) Kabul</option>
													<option value="Asia/Yekaterinburg">(GMT+05:00) Ekaterinburg</option>
													<option value="Asia/Tashkent">(GMT+05:00) Tashkent</option>
													<option value="Asia/Kolkata">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
													<option value="Asia/Katmandu">(GMT+05:45) Kathmandu</option>
													<option value="Asia/Dhaka">(GMT+06:00) Astana, Dhaka</option>
													<option value="Asia/Novosibirsk">(GMT+06:00) Novosibirsk</option>
													<option value="Asia/Rangoon">(GMT+06:30) Yangon (Rangoon)</option>
													<option value="Asia/Bangkok">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
													<option value="Asia/Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
													<option value="Asia/Hong_Kong">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
													<option value="Asia/Irkutsk">(GMT+08:00) Irkutsk, Ulaan Bataar</option>
													<option value="Australia/Perth">(GMT+08:00) Perth</option>
													<option value="Australia/Eucla">(GMT+08:45) Eucla</option>
													<option value="Asia/Tokyo">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
													<option value="Asia/Seoul">(GMT+09:00) Seoul</option>
													<option value="Asia/Yakutsk">(GMT+09:00) Yakutsk</option>
													<option value="Australia/Adelaide">(GMT+09:30) Adelaide</option>
													<option value="Australia/Darwin">(GMT+09:30) Darwin</option>
													<option value="Australia/Brisbane">(GMT+10:00) Brisbane</option>
													<option value="Australia/Hobart">(GMT+10:00) Hobart</option>
													<option value="Asia/Vladivostok">(GMT+10:00) Vladivostok</option>
													<option value="Australia/Lord_Howe">(GMT+10:30) Lord Howe Island</option>
													<option value="Etc/GMT-11">(GMT+11:00) Solomon Is., New Caledonia</option>
													<option value="Asia/Magadan">(GMT+11:00) Magadan</option>
													<option value="Pacific/Norfolk">(GMT+11:30) Norfolk Island</option>
													<option value="Asia/Anadyr">(GMT+12:00) Anadyr, Kamchatka</option>
													<option value="Pacific/Auckland">(GMT+12:00) Auckland, Wellington</option>
													<option value="Etc/GMT-12">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
													<option value="Pacific/Chatham">(GMT+12:45) Chatham Islands</option>
													<option value="Pacific/Tongatapu">(GMT+13:00) Nuku'alofa</option>
													<option value="Pacific/Kiritimati">(GMT+14:00) Kiritimati</option>
												</select>
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3 col">
												<label class="form-label">Verification</label>
											</div>
											<div class="col-md-9 col">
												<label class="ckbox mg-b-10"><input type="checkbox"><span>Email</span></label>
												<label class="ckbox mg-b-10"><input checked="" type="checkbox"><span>SMS</span></label>
												<label class="ckbox mg-b-10"><input type="checkbox"><span>Phone</span></label>
											</div>
										</div>
									</div>
									<div class="mb-4 main-content-label">Secuirity Settings</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Login Verification</label>
											</div>
											<div class="col-md-9">
												<a class="" href="#">Settup Verification</a>
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Password Verification</label>
											</div>
											<div class="col-md-9">
												<label class="ckbox mg-b-10"><input type="checkbox"><span>Require Personal Details</span></label>
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-3">
											</div>
											<div class="col-md-9">
												<a class="mg-r-20" href="#">Deactivate Account</a>
												<a class="" href="#">Change Password</a>
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="card-footer">
								<div class="float-left"><a href="#" class="btn btn-success">Save Changes</a></div>
							</div>
						</div>
					</div>
					<!-- /Col -->

					<!-- div -->
					<div class="main-mail-compose">
						<div>
							<div class="container-fluid">
								<div class="main-mail-compose-box">
									<div class="main-mail-compose-header">
										<span>New Message</span>
										<nav class="nav">
											<a class="nav-link" href=""><i class="fas fa-minus"></i></a>
											<a class="nav-link" href=""><i class="fas fa-compress"></i></a>
											<a class="nav-link" href=""><i class="fas fa-times"></i></a>
										</nav>
									</div>
									<div class="main-mail-compose-body p-0">
										<div class="form-group pd-10 mb-0">
											<label class="form-label">To</label>
											<div>
												<input class="form-control" placeholder="Enter recipient's email address" type="text">
											</div>
										</div>
										<div class="form-group pd-10 mb-0">
											<label class="form-label">Subject</label>
											<div>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="form-group pd-10 mb-0">
											<textarea class="form-control" placeholder="Write your message here..." rows="8"></textarea>
										</div>
										<div class="form-group pd-10 mb-0">
											<nav class="nav">
												<a class="nav-link" data-toggle="tooltip" href="" title="Add attachment"><i class="fas fa-paperclip"></i></a> <a class="nav-link" data-toggle="tooltip" href="" title="Add photo"><i class="far fa-image"></i></a> <a class="nav-link" data-toggle="tooltip" href="" title="Add link"><i class="fas fa-link"></i></a> <a class="nav-link" data-toggle="tooltip" href="" title="Emoticons"><i class="far fa-smile"></i></a> <a class="nav-link" data-toggle="tooltip" href="" title="Discard"><i class="far fa-trash-alt"></i></a>
											</nav><button class="btn btn-primary">Send</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /div -->
				</div>
				<!-- /row -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!-- Moment js -->
<script src="{{URL::asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<!-- Internal Select2.min js -->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.js')}}"></script>
@endsection