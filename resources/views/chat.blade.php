@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex"><h4 class="content-title mb-0 my-auto">Mail</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Chat</span></div>
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
				<div class="row row-sm main-content-app mb-4">
					<div class="col-xl-4 col-lg-5">
						<div class="card">
							<div class="main-content-left main-content-left-chat">
								<nav class="nav main-nav-line main-nav-line-chat">
									<a class="nav-link active" data-toggle="tab" href="">Recent Chat</a> <a class="nav-link" data-toggle="tab" href="">Groups</a> <a class="nav-link" data-toggle="tab" href="">Calls</a>
								</nav>
								<div class="main-chat-contacts-wrapper">
									<label class="main-content-label main-content-label-sm">Active Contacts (5)</label>
									<div class="main-chat-contacts" id="chatActiveContacts">
										<div>
											<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/img/faces/3.jpg')}}"></div><small>Adrian</small>
										</div>
										<div>
											<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/img/faces/12.jpg')}}"></div><small>John</small>
										</div>
										<div>
											<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/img/faces/4.jpg')}}"></div><small>Daniel</small>
										</div>
										<div>
											<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/img/faces/13.jpg')}}"></div><small>Katherine</small>
										</div>
										<div>
											<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/img/faces/5.jpg')}}"></div><small>Raymart</small>
										</div>
										<div>
											<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/img/faces/14.jpg')}}"></div><small>Junrisk</small>
										</div>
										<div>
											<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/img/faces/6.jpg')}}"></div><small>George</small>
										</div>
										<div>
											<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/img/faces/15.jpg')}}"></div><small>Maryjane</small>
										</div>
										<div>
											<div class="main-chat-contacts-more">
												20+
											</div><small>More</small>
										</div>
									</div><!-- main-active-contacts -->
								</div><!-- main-chat-active-contacts -->
								<div class="main-chat-list" id="ChatList">
									<div class="media new">
										<div class="main-img-user online">
											<img alt="" src="{{URL::asset('assets/img/faces/5.jpg')}}"> <span>2</span>
										</div>
										<div class="media-body">
											<div class="media-contact-name">
												<span>Socrates Itumay</span> <span>2 hours</span>
											</div>
											<p>Nam quam nunc, blandit vel aecenas et ante tincid</p>
										</div>
									</div>
									<div class="media new">
										<div class="main-img-user">
											<img alt="" src="{{URL::asset('assets/img/faces/6.jpg')}}"> <span>1</span>
										</div>
										<div class="media-body">
											<div class="media-contact-name">
												<span>Dexter dela Cruz</span> <span>3 hours</span>
											</div>
											<p>Maec enas tempus, tellus eget con dime ntum rhoncus, sem quam</p>
										</div>
									</div>
									<div class="media selected">
										<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/img/faces/9.jpg')}}"></div>
										<div class="media-body">
											<div class="media-contact-name">
												<span>Reynante Labares</span> <span>10 hours</span>
											</div>
											<p>Nam quam nunc, bl ndit vel aecenas et ante tincid</p>
										</div>
									</div>
									<div class="media">
										<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/11.jpg')}}"></div>
										<div class="media-body">
											<div class="media-contact-name">
												<span>Joyce Chua</span> <span>2 days</span>
											</div>
											<p>Ma ecenas tempus, tellus eget con dimen tum rhoncus, sem quam</p>
										</div>
									</div>
									<div class="media">
										<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/4.jpg')}}"></div>
										<div class="media-body">
											<div class="media-contact-name">
												<span>Rolando Paloso</span> <span>2 days</span>
											</div>
											<p>Nam quam nunc, blandit vel aecenas et ante tincid</p>
										</div>
									</div>
									<div class="media new">
										<div class="main-img-user">
											<img alt="" src="{{URL::asset('assets/img/faces/7.jpg')}}"> <span>1</span>
										</div>
										<div class="media-body">
											<div class="media-contact-name">
												<span>Ariana Monino</span> <span>3 days</span>
											</div>
											<p>Maece nas tempus, tellus eget cond imentum rhoncus, sem quam</p>
										</div>
									</div>
									<div class="media">
										<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/8.jpg')}}"></div>
										<div class="media-body">
											<div class="media-contact-name">
												<span>Maricel Villalon</span> <span>4 days</span>
											</div>
											<p>Nam quam nunc, blandit vel aecenas et ante tincid</p>
										</div>
									</div>
									<div class="media">
										<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/12.jpg')}}"></div>
										<div class="media-body">
											<div class="media-contact-name">
												<span>Maryjane Cruiser</span> <span>5 days</span>
											</div>
											<p>Mae cenas tempus, tellus eget co ndimen tum rhoncus, sem quam</p>
										</div>
									</div>
									<div class="media">
										<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/15.jpg')}}"></div>
										<div class="media-body">
											<div class="media-contact-name">
												<span>Lovely Dela Cruz</span> <span>5 days</span>
											</div>
											<p>Mae cenas tempus, tellus eget co ndimen tum rhoncus, sem quam</p>
										</div>
									</div>
									<div class="media">
										<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/10.jpg')}}"></div>
										<div class="media-body">
											<div class="media-contact-name">
												<span>Daniel Padilla</span> <span>5 days</span>
											</div>
											<p>Mae cenas tempus, tellus eget co ndimen tum rhoncus, sem quam</p>
										</div>
									</div>
									<div class="media">
										<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/3.jpg')}}"></div>
										<div class="media-body">
											<div class="media-contact-name">
												<span>John Pratts</span> <span>6 days</span>
											</div>
											<p>Mae cenas tempus, tellus eget co ndimen tum rhoncus, sem quam</p>
										</div>
									</div>
									<div class="media">
										<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/7.jpg')}}"></div>
										<div class="media-body">
											<div class="media-contact-name">
												<span>Raymart Santiago</span> <span>6 days</span>
											</div>
											<p>Nam quam nunc, blandit vel aecenas et ante tincid</p>
										</div>
									</div>
									<div class="media border-bottom-0">
										<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/6.jpg')}}"></div>
										<div class="media-body">
											<div class="media-contact-name">
												<span>Samuel Lerin</span> <span>7 days</span>
											</div>
											<p>Nam quam nunc, blandit vel aecenas et ante tincid</p>
										</div>
									</div>
								</div><!-- main-chat-list -->
							</div>
						</div>
					</div>
					<div class="col-xl-8 col-lg-7">
						<div class="card">
							<a class="main-header-arrow" href="" id="ChatBodyHide"><i class="icon ion-md-arrow-back"></i></a>
							<div class="main-content-body main-content-body-chat">
								<div class="main-chat-header">
									<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/faces/9.jpg')}}"></div>
									<div class="main-chat-msg-name">
										<h6>Reynante Labares</h6><small>Last seen: 2 minutes ago</small>
									</div>
									<nav class="nav">
										<a class="nav-link" href=""><i class="icon ion-md-more"></i></a> <a class="nav-link" data-toggle="tooltip" href="" title="Call"><i class="icon ion-ios-call"></i></a> <a class="nav-link" data-toggle="tooltip" href="" title="Archive"><i class="icon ion-ios-filing"></i></a> <a class="nav-link" data-toggle="tooltip" href="" title="Trash"><i class="icon ion-md-trash"></i></a> <a class="nav-link" data-toggle="tooltip" href="" title="View Info"><i class="icon ion-md-information-circle"></i></a>
									</nav>
								</div><!-- main-chat-header -->
								<div class="main-chat-body" id="ChatBody">
									<div class="content-inner">
										<label class="main-chat-time"><span>3 days ago</span></label>
										<div class="media flex-row-reverse">
											<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/img/faces/9.jpg')}}"></div>
											<div class="media-body">
												<div class="main-msg-wrapper right">
													Nulla consequat massa quis enim. Donec pede justo, fringilla vel...
												</div>
												<div class="main-msg-wrapper right">
													rhoncus ut, imperdiet a, venenatis vitae, justo...
												</div>
												<div class="main-msg-wrapper pd-0"><img alt="" class="wd-100 ht-100" src="{{URL::asset('assets/img/ecommerce/01.jpg')}}"></div>
												<div>
													<span>9:48 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
												</div>
											</div>
										</div>
										<div class="media">
											<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/img/faces/6.jpg')}}"></div>
											<div class="media-body">
												<div class="main-msg-wrapper left">
													Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
												</div>
												<div>
													<span>9:32 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
												</div>
											</div>
										</div>
										<div class="media flex-row-reverse">
											<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/img/faces/9.jpg')}}"></div>
											<div class="media-body">
												<div class="main-msg-wrapper right">
													Nullam dictum felis eu pede mollis pretium
												</div>
												<div>
													<span>11:22 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
												</div>
											</div>
										</div><label class="main-chat-time"><span>Yesterday</span></label>
										<div class="media">
											<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/img/faces/6.jpg')}}"></div>
											<div class="media-body">
												<div class="main-msg-wrapper left">
													Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
												</div>
												<div>
													<span>9:32 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
												</div>
											</div>
										</div>
										<div class="media flex-row-reverse">
											<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/img/faces/9.jpg')}}"></div>
											<div class="media-body">
												<div class="main-msg-wrapper right">
													Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
												</div>
												<div class="main-msg-wrapper right">
													Nullam dictum felis eu pede mollis pretium
												</div>
												<div>
													<span>9:48 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
												</div>
											</div>
										</div><label class="main-chat-time"><span>Today</span></label>
										<div class="media">
											<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/img/faces/6.jpg')}}"></div>
											<div class="media-body">
												<div class="main-msg-wrapper left">
													Maecenas tempus, tellus eget condimentum rhoncus
												</div>
												<div class="main-msg-wrapper left">
													Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.
												</div>
												<div>
													<span>10:12 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
												</div>
											</div>
										</div>
										<div class="media flex-row-reverse">
											<div class="main-img-user online"><img alt="" src="{{URL::asset('assets/img/faces/9.jpg')}}"></div>
											<div class="media-body">
												<div class="main-msg-wrapper right">
													Maecenas tempus, tellus eget condimentum rhoncus
												</div>
												<div class="main-msg-wrapper right">
													Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.
												</div>
												<div>
													<span>09:40 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="main-chat-footer">
								<nav class="nav">
									<a class="nav-link" data-toggle="tooltip" href="" title="Add Photo"><i class="fas fa-camera"></i></a> <a class="nav-link" data-toggle="tooltip" href="" title="Attach a File"><i class="fas fa-paperclip"></i></a> <a class="nav-link" data-toggle="tooltip" href="" title="Add Emoticons"><i class="far fa-smile"></i></a> <a class="nav-link" href=""><i class="fas fa-ellipsis-v"></i></a>
								</nav><input class="form-control" placeholder="Type your message here..." type="text"> <a class="main-msg-send" href=""><i class="far fa-paper-plane"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- row -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!--Internal  lightslider js -->
<script src="{{URL::asset('assets/plugins/lightslider/js/lightslider.min.js')}}"></script>
<!--Internal  Chat js -->
<script src="{{URL::asset('assets/js/chat.js')}}"></script>
@endsection