<!DOCTYPE html>
<html lang="en">

	<body class="app ">

		<!--Header Style -->
		<div class="wave -three"></div>

		<!--loader -->
		<div id="spinner"></div>

		<!--app open-->
		<div id="app" class="page">
			<div class="main-wrapper" >

			    <!--nav open-->
				<nav class="navbar navbar-expand-lg main-navbar">
					<a class="header-brand" href="index.html">
						<img src="{{asset('assets/img/brand/logo-white.png')}}" class="header-brand-img" alt="Splite-Admin  logo">
					</a>
					<form class="form-inline mr-auto">
						<ul class="navbar-nav mr-2">
							<li><a href="#" data-toggle="sidebar" class="nav-link nav-link toggle"><i class="fa fa-reorder"></i></a></li>
							<li><a href="#" data-toggle="search" class="nav-link nav-link d-md-none navsearch"><i class="fa fa-search"></i></a></li>
						</ul>
						<div class="search-element mr-3">
							<input class="form-control" type="search" placeholder="Search" aria-label="Search">
							<span class="Search-icon"><i class="fa fa-search"></i></span>
						</div>
					</form>
					<ul class="navbar-nav navbar-right">
					    <li class="dropdown dropdown-list-toggle d-none d-lg-block "><a href="#" data-toggle="dropdown" class="nav-link  nav-link-lg "><i class=" fa fa-flag-o "></i></a>
							<div class="dropdown-menu dropdown-menu-lg  dropdown-menu-right">
								<a href="#" class="dropdown-item d-flex align-items-center">
									<img src="../../assets/img/flags/french_flag.jpg" alt="flag-img" class=" flag-sm mr-3 align-self-center">
									<div>
										<strong>French</strong>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex align-items-center">
									<img src="../../assets/img/flags/germany_flag.jpg" alt="flag-img" class=" flag-sm mr-3 align-self-center">
									<div>
										<strong>Germany</strong>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex align-items-center">
									<img src="../../assets/img/flags/italy_flag.jpg" alt="flag-img" class=" flag-sm  mr-3 align-self-center">
									<div>
										<strong>Italy</strong>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex align-items-center">
									<img src="../../assets/img/flags/russia_flag.jpg" alt="flag-img" class=" flag-sm mr-3 align-self-center">
									<div>
										<strong>Russia</strong>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex align-items-center">
									<img src="../../assets/img/flags/spain_flag.jpg" alt="flag-img" class=" flag-sm mr-3 align-self-center">
									<div>
										<strong>Spain</strong>
									</div>
								</a>
							</div>
						</li>
						<li class="dropdown dropdown-list-toggle "><a href="#" data-toggle="dropdown" class="nav-link  nav-link-lg "><span class="badge badge-danger nav-link-badge">5</span><i class="hvr-buzz fa fa-envelope-o"></i></a>
							<div class="dropdown-menu dropdown-list dropdown-menu-right">
								<div class="dropdown-header">Messages
									<div class="float-right">
										<a href="#" class="text-white">View All</a>
									</div>
								</div>
								<div class="dropdown-list-content">
									<a href="#" class="dropdown-item dropdown-item-unread">
										<img alt="image" src="../../assets/img/avatar/avatar-3.jpeg" class="rounded-circle dropdown-item-img">
										<div class="dropdown-item-desc">
											<div class="dropdownmsg d-flex">
												<div class="">
													<b>Stewart Ball</b>
													<p>Your template awesome</p>
												</div>
												<div class="time">6 hours ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="dropdown-item dropdown-item-unread">
										<img alt="image" src="../../assets/img/avatar/avatar-2.jpeg" class="rounded-circle dropdown-item-img">
										<div class="dropdown-item-desc">
											<div class="dropdownmsg d-flex">
												<div class="">
													<b>Jonathan North</b>
													<p>Your Order Shipped.....</p>
												</div>
												<div class="time">45 mins ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="dropdown-item">
										<img alt="image" src="../../assets/img/avatar/avatar-4.jpeg" class="rounded-circle dropdown-item-img">
										<div class="dropdown-item-desc">
											<div class="dropdownmsg d-flex">
												<div class="">
													<b>Victor Taylor</b>
													<p>Hi!, I' am web developer</p>
												</div>
												<div class="time"> 8 hours ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="dropdown-item">
										<img alt="image" src="../../assets/img/avatar/avatar-3.jpeg" class="rounded-circle dropdown-item-img">
										<div class="dropdown-item-desc">
											<div class="dropdownmsg d-flex">
												<div class="">
													<b>Ruth	Arnold</b>
													<p>Hi!, I' am web designer</p>
												</div>
												<div class="time"> 3 hours ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="dropdown-item">
										<img alt="image" src="../../assets/img/avatar/avatar-5.jpeg" class="rounded-circle dropdown-item-img">
										<div class="dropdown-item-desc">
											<div class="dropdownmsg d-flex">
												<div class="">
													<b>Sam	Lyman</b>
													<p>Hi!, I' am java developer</p>
												</div>
												<div class="time"> 15 mintues ago</div>
											</div>
										</div>
									</a>
								</div>
							</div>
						</li>
						<li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link  nav-link-lg "><span class="badge badge-secondary nav-link-badge">6</span><i class="fa fa-bell-o"></i></a>
							<div class="dropdown-menu dropdown-list dropdown-menu-right">
								<div class="dropdown-header">Notifications
									<div class="float-right">
										<a href="#" class="text-white">View All</a>
									</div>
								</div>
								<div class="dropdown-list-content">
									<a href="#" class="dropdown-item">
										<i class="fa fa-users text-primary"></i>
										<div class="dropdown-item-desc">
											<b>So many Users Visit your template</b>
										</div>
									</a>
									<a href="#" class="dropdown-item">
										<i class="fa fa-exclamation-triangle text-danger"></i>
										<div class="dropdown-item-desc">
											<b>Error message occurred....</b>
										</div>
									</a>
									<a href="#" class="dropdown-item">
										<i class="fa fa-users text-warning"></i>
										<div class="dropdown-item-desc">
											<b> Adding new people</b>
										</div>
									</a>
									<a href="#" class="dropdown-item">
										<i class="fa fa-shopping-cart text-success"></i>
										<div class="dropdown-item-desc">
											<b>Your items Arrived</b>
										</div>
									</a>
									<a href="#" class="dropdown-item">
										<i class="fa fa-comment text-primary"></i>
										<div class="dropdown-item-desc">
											<b>New Message received</b> <div class="float-right"><span class="badge badge-pill badge-danger badge-sm">67</span></div>
										</div>
									</a>
									<a href="#" class="dropdown-item">
										<i class="fa fa-users text-primary"></i>
										<div class="dropdown-item-desc">
											<b>So many Users Visit your template</b>
										</div>
									</a>
								</div>
							</div>
						</li>
						<li class="dropdown dropdown-list-toggle d-none d-lg-block">
							<a href="#" class="nav-link nav-link-lg full-screen-link">
								<i class="fa fa-expand " id="fullscreen-button"></i>
							</a>
						</li>
						<li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg d-flex">
								<span class="mr-3 mt-2 d-none d-lg-block ">
									<span class="text-white">Hello,<span class="ml-1"> Alica Nestle</span></span>
								</span>
							<span><img src="../../assets/img/avatar/avatar-3.jpeg" alt="profile-user" class="rounded-circle w-32 mr-2"></span>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class=" dropdown-header noti-title text-center border-bottom pb-3">
									<h5 class="text-capitalize text-dark mb-1">Alica Nestle</h5>
									<small class="text-overflow m-0"> Web-Designer</small>
								</div>
								<a class="dropdown-item" href="profile.html"><i class="mdi mdi-account-outline mr-2"></i> <span>My profile</span></a>
								<a class="dropdown-item" href="#"><i class="mdi mdi-settings mr-2"></i> <span>Settings</span></a>
								<a class="dropdown-item" href="#"><i class=" mdi mdi-message-outline mr-2"></i> <span>Mails</span></a>
								<a class="dropdown-item" href="#"><i class=" mdi mdi-account-multiple-outline mr-2"></i> <span>Friends</span></a>
								<a class="dropdown-item" href="#"><i class="fe fe-calendar mr-2"></i> <span>Activity</span></a>
								<a class="dropdown-item" href="#"><i class="mdi mdi-compass-outline mr-2"></i> <span>Support</span></a>
								<div class="dropdown-divider"></div><a class="dropdown-item" href="login.html"><i class="mdi  mdi-logout-variant mr-2"></i> <span>Logout</span></a>
							</div>
						</li>
					</ul>
				</nav>
				<!--nav closed-->


                <!--app-content open-->
				<div class="app-content">
					<section class="section">

					    <!--page-header open-->
						<div class="page-header pt-0">
							<h4 class="page-title">Dashboard 01</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#" class="text-light-color">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Dashboard 01</li>
							</ol>
						</div>
						<!--page-header closed-->

                        <!--row open-->
						<div class="row">
							<div class="col-lg-6 col-xl-3 col-md-6 col-12">
								<div class="card">
									<div class="card-body text-center">
										<p class="text-muted mb-1">
											Today sales
										</p>
										<div class="">
											<h4 class="mt-2 mb-3">$2,345</h4>
											<div class="">
												<span class="sparkline_bar-1"></span>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="float-left">
											<p class="mb-0"><span class=""><i class="fa fa-arrow-circle-o-up ml-1 text-success"></i> 2.5%</span>  last month</p>
										</div>
										<div class="float-right">
											<i class="fa fa-line-chart"></i>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-3 col-md-6 col-12">
								<div class="card">
									<div class="card-body text-center">
										<p class="text-muted mb-1">
											Today Orders
										</p>
										<div class="">
											<h4 class="mt-2 mb-3">$568</h4>
											<div class="">
												<span class="sparkline_pie"></span>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="float-left">
											<p class="mb-0"><span class=""><i class="fa fa-arrow-circle-o-down ml-1 text-danger"></i> 4%</span>  last month</p>
										</div>
										<div class="float-right">
											<i class="fa fa-shopping-cart "></i>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-3 col-md-6 col-12">
								<div class="card">
									<div class="card-body text-center">
										<p class="text-muted mb-1">
											Sales Revenue
										</p>
										<div class="">
											<h4 class="mt-2 mb-3">$135</h4>
											<div class="">
												<span class="sparkline_line1"></span>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="float-left">
											<p class="mb-0"><span class=""><i class="fa fa-arrow-circle-o-up ml-1 text-success"></i> 12%</span>  last month</p>
										</div>
										<div class="float-right">
											<i class="fa fa-signal"></i>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-3 col-md-6 col-12">
								<div class="card">
									<div class="card-body text-center">
										<p class="text-muted mb-1">
											Today Profit
										</p>
										<div class="">
											<h4 class="mt-2 mb-3">15%</h4>
											<div class="">
												<span class="sparkline_discreet"></span>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="float-left">
											<p class="mb-0"><span class=""><i class="fa fa-arrow-circle-o-down ml-1 text-danger"></i> 5%</span>  last month</p>
										</div>
										<div class="float-right">
											<i class="fa fa-dollar"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--row closed-->

						<!--row open-->
						<div class="row">
							<div class="col-lg-6 col-xl-3 col-sm-12 col-md-6">
								<div class="card p-3">
									<div class="d-flex align-items-center">
										<span class="stamp stamp-md bg-primary mr-3">
											<i class="fa fa-users"></i>
										</span>
										<div>
											<h4 class="m-0"><strong>765</strong></h4>
											<h6 class="mb-0">Customers</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-3 col-sm-12 col-md-6">
								<div class="card p-3">
									<div class="d-flex align-items-center">
										<span class="stamp stamp-md bg-orange mr-3">
											<i class="fa fa-cart-arrow-down"></i>
										</span>
										<div>
											<h4 class="m-0"><strong>92</strong></h4>
											<h6 class="mb-0">Selling</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-3 col-sm-12 col-md-6">
								<div class="card p-3">
									<div class="d-flex align-items-center">
										<span class="stamp stamp-md bg-warning mr-3">
											<i class="fa fa-eye"></i>
										</span>
										<div>
											<h4 class="m-0"><strong>2,456 </strong></h4>
											<h6 class="mb-0">Visitors</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-3 col-sm-12 col-md-6">
								<div class="card p-3">
									<div class="d-flex align-items-center">
										<span class="stamp stamp-md bg-success mr-3">
											<i class="fa fa-file-text"></i>
										</span>
										<div>
											<h4 class="m-0"><strong>125 </strong></h4>
											<h6 class="mb-0">FeedBack</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--row closed-->

                        <!--row open-->
						<div class="row">
							<div class="col-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h4>Product Summary</h4>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered text-nowrap mb-0">
												<thead>
													<tr>
														<th>#No</th>
														<th>Client Name</th>
														<th>Product ID</th>
														<th>Product</th>
														<th>Product Cost</th>
														<th>Payment Mode</th>
														<th>Status</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>#01</td>
														<td>Sean Black</td>
														<td>PRO12345</td>
														<td>Mi LED Smart TV 4A 80</td>
														<td>$14,500</td>
														<td>Online Payment</td>
														<td><span class="badge badge-success">Delivered</span></td>
													</tr>
													<tr>
														<td>#02</td>
														<td>Evan Rees</td>
														<td>PRO8765</td>
														<td>Thomson R9 122cm (48 inch) Full HD LED TV </td>
														<td>$30,000</td>
														<td>Cash on delivered</td>
														<td><span class="badge badge-primary">Add Cart</span></td>
													</tr>
													<tr>
														<td>#03</td>
														<td>David Wallace</td>
														<td>PRO54321</td>
														<td>Vu 80cm (32 inch) HD Ready LED TV</td>
														<td>$13,200</td>
														<td>Online Payment</td>
														<td><span class="badge badge-orange">Pending</span></td>
													</tr>
													<tr>
														<td>#04</td>
														<td>Julia Bower</td>
														<td>PRO97654</td>
														<td>Micromax 81cm (32 inch) HD Ready LED TV</td>
														<td>$15,100</td>
														<td>Cash on delivered</td>
														<td><span class="badge badge-cyan">Delivering</span></td>
													</tr>
													<tr>
														<td>#05</td>
														<td>Kevin James</td>
														<td>PRO4532</td>
														<td>HP 200 Mouse & Wireless Laptop Keyboard </td>
														<td>$5,987</td>
														<td>Online Payment</td>
														<td><span class="badge badge-danger">Shipped</span></td>
													</tr>
													<tr>
														<td>#06</td>
														<td>Theresa	Wright</td>
														<td>PRO6789</td>
														<td>Digisol DG-HR3400 Router </td>
														<td>$11,987</td>
														<td>Cash on delivered</td>
														<td><span class="badge badge-secondary">Delivering</span></td>
													</tr>
													<tr>
														<td>#07</td>
														<td>Sebastian	Black</td>
														<td>PRO4567</td>
														<td>Dell WM118 Wireless Optical Mouse</td>
														<td>$4,700</td>
														<td>Online Payment</td>
														<td><span class="badge badge-info">Add to Cart</span></td>
													</tr>
													<tr>
														<td>#08</td>
														<td>Kevin Glover</td>
														<td>PRO32156</td>
														<td>Dell 16 inch Laptop Backpack </td>
														<td>$678</td>
														<td>Cash On delivered</td>
														<td><span class="badge badge-pink">Delivered</span></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--row closed-->
					</section>
				</div>
				<!--app-content closed-->

				<!-- Popupchat open-->
				<div class="popup-box chat-popup" id="qnimate">
					<div class="popup-head">
						<div class="popup-head-left pull-left"><img src="../../assets/img/avatar/avatar-3.jpeg" alt="iamgurdeeposahan" class="mr-2"> Alica Nestle</div>
						<div class="popup-head-right pull-right">
							<div class="btn-group">
								<button class="chat-header-button" data-toggle="dropdown" type="button" aria-expanded="false">
								<i class="glyphicon glyphicon-cog"></i> </button>
								<ul role="menu" class="dropdown-menu dropdown-menu-right">
									<li><a href="#">Media</a></li>
									<li><a href="#">Block</a></li>
									<li><a href="#">Clear Chat</a></li>
									<li><a href="#">Email Chat</a></li>
								</ul>
							</div>
							<button data-widget="remove" id="removeClass" class="chat-header-button pull-right" type="button"><i class="glyphicon glyphicon-off"></i></button>
						</div>
					</div>
					<div class="popup-messages">
						<div class="direct-chat-messages">
							<div class="chat-box-single-line">
								<abbr class="timestamp">December 15th, 2018</abbr>
							</div>
							<div class="direct-chat-msg">
								<div class="direct-chat-info clearfix">
									<span class="direct-chat-name float-left">Alica Nestle</span>
									<span class="direct-chat-timestamp float-right">7:40 Am</span>
								</div>
								<img class="direct-chat-img" src="../../assets/img/avatar/avatar-3.jpeg" alt="message user image">
								<div class="direct-chat-text">
									Hello. How are you today?
								</div>
							</div>
							<div class="direct-chat-msg right">
								<div class="direct-chat-info clearfix">
									<span class="direct-chat-name float-right">Roberts</span>
									<span class="direct-chat-timestamp float-left">8:05 Am</span>
								</div>
								<img class="direct-chat-img" src="../../assets/img/avatar/avatar-2.jpeg" alt="message user image">
								<div class="direct-chat-text">
									I'm fine. Thanks for asking!
								</div>
							</div>
							<div class="chat-box-single-line  mb-3">
								<abbr class="timestamp">December 14th, 2018</abbr>
							</div>
							<div class="direct-chat-msg doted-border">
								<div class="direct-chat-info clearfix">
									<span class="direct-chat-name float-left">Alica Nestle</span>
									<span class="direct-chat-timestamp float-right">6:20 Am</span>
								</div>
								<img alt="iamgurdeeposahan" src="../../assets/img/avatar/avatar-3.jpeg" class="direct-chat-img"><!-- /.direct-chat-img -->
								<div class="direct-chat-text">
									Hey bro, how’s everything going ?
								</div>
								<div class="direct-chat-msg right">
									<div class="direct-chat-info clearfix">
										<span class="direct-chat-name float-right">Roberts</span>
										<span class="direct-chat-timestamp float-left">7:05 Am</span>
									</div>
									<img class="direct-chat-img" src="../../assets/img/avatar/avatar-2.jpeg" alt="message user image">
									<div class="direct-chat-text">
										Nothing Much!
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="popup-messages-footer">
						<textarea id="status_message" placeholder="Type a message..." rows="10" cols="40" name="message"></textarea>
						<div class="btn-footer">
							<button class="bg_none"><i class="glyphicon glyphicon-film"></i> </button>
							<button class="bg_none"><i class="glyphicon glyphicon-camera"></i> </button>
							<button class="bg_none"><i class="glyphicon glyphicon-paperclip"></i> </button>
							<button class="bg_none pull-right"><i class="glyphicon glyphicon-thumbs-up"></i> </button>
						</div>
					</div>
				</div>
				<!-- Popupchat closed -->

			</div>

			<!--Footer-->
			<footer class="main-footer">
				<div class="text-center">
					Copyright &copy;Splite-Admin 2021. Design By<a href="https://spruko.com/"> Spruko</a>
				</div>
			</footer>
			<!--/Footer-->
		</div>
		<!--app closed-->

		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-angle-up"></i></a>

		<!-- Popup-chat -->
		<a href="#" id="addClass"><i class="ti-comment"></i></a>

		<!--Jquery.min js-->
		<script src="{{asset('assets/js/jquery.min.js')}}"></script>


		<!--Bootstrap.min js-->
		<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

		<!--Sidemenu js-->
		<script src="{{asset('assets/plugins/toggle-menu/sidemenu.js')}}"></script>

		<!--Scripts js-->
		<script src="{{asset('assets/js/scripts.js')}}"></script>
	</body>
</html>