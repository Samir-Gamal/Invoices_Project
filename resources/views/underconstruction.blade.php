@extends('layouts.master2')
@section('css')
<!-- Sidemenu-respoansive-tabs css -->
<link href="{{URL::asset('assets/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css')}}" rel="stylesheet">
@endsection
@section('content')
		<div class="container-fluid">
			<div class="row no-gutter">
				<!-- The image half -->
				<div class="col-md-5 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent">
					<div class="row wd-100p mx-auto text-center">
						<div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
							<img src="{{URL::asset('assets/img/media/underconstruction.png')}}" class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
						</div>
					</div>
				</div>
				<!-- The content half -->
				<div class="col-md-7 col-lg-6 col-xl-5 bg-white">
					<div class="login d-flex align-items-center py-2">
						<!-- Demo content-->
						<div class="container">
							<div class="row">
								<div class="main-card-signin construction text-center border-0 mx-auto">
									<div class="p-4 wd-100p mx-auto">
										<div>
											<h2 class="tx-30">Under Maintenance</h2>
											<p class="tx-12 text-muted">Our website is currently undergoing scheduled maintenance. We Should be back shortly. Thank you for your patience!</p>
											<div class="row row-sm mx-auto">
												<div id="count-down" class="center-block mt-3 mb-3 mx-auto">
													<div class="clock-presenter days_dash">
														<div class="digit"></div>
														<div class="digit"></div>
														<p class="mt-2">Days</p>
													</div>
													<div class="clock-presenter hours_dash">
														<div class="digit"></div>
														<div class="digit"></div>
														<p class="mt-2">Hours</p>
													</div>
													<div class="clock-presenter minutes_dash">
														<div class="digit"></div>
														<div class="digit"></div>
														<p class="mt-2">Minutes</p>
													</div>
													<div class="clock-presenter seconds_dash">
														<div class="digit"></div>
														<div class="digit"></div>
														<p class="mt-2">Seconds</p>
													</div>
												</div>
											</div>
											<div class="input-group mt-5 text-center sub-input mt-1 ml-auto mr-auto mt-6">
												<input type="text" class="form-control input-lg " placeholder="Enter your Email">
												<div class="input-group-append ">
													<button type="button" class="btn btn-danger-gradient btn-lg br-tr-3  br-br-3">
														Subscribe
													</button>
												</div>
											</div>
											<div class="mt-4 d-flex mx-auto text-center justify-content-center">
												<button class="btn btn-icon btn-facebook" type="button">
													<span class="btn-inner--icon"> <i class="bx bxl-facebook tx-20 tx-facebook"></i> </span>
												</button>
												<button class="btn btn-icon" type="button">
													<span class="btn-inner--icon"> <i class="bx bxl-twitter tx-20 tx-info"></i> </span>
												</button>
												<button class="btn btn-icon" type="button">
													<span class="btn-inner--icon"> <i class="bx bxl-linkedin tx-20 tx-indigo"></i> </span>
												</button>
												<button class="btn btn-icon" type="button">
													<span class="btn-inner--icon"> <i class="bx bxl-instagram tx-20 tx-pink"></i> </span>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- End -->
					</div>
				</div><!-- End -->
			</div>
		</div>
@endsection
@section('js')
<!--- Jquery.Coutdown js -->
<script src="{{URL::asset('assets/plugins/jquery-countdown/jquery.lwtCountdown-1.0.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-countdown/count-down.js')}}"></script>
@endsection