@extends('layouts.layout')
@section('content')
    <!--Header Style -->
		<div class="wave -three"></div>

		<!--loader -->
		<div id="spinner"></div>

        <!--app open-->
		<div id="app" class="page">
			<div class="main-wrapper">


				<!--app-content open-->
				<div class="app-content">
					<section class="section">

					    <!--page-header open-->
						<div class="page-header pt-0">
							<h4 class="page-title">Edit Profile</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#" class="text-light-color">Pages</a></li>
								<li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
							</ol>
						</div>
						<!--page-header closed-->

                        <!--row open-->
						<div class="row">
							<div class="col-lg-12 col-xl-4 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h4>My Profile</h4>
									</div>
									<div class="card-body">
										<div class="text-center">
											<div class="userprofile social">
												<div class="userpic"> <img src="../../assets/img/avatar/avatar-3.jpeg" alt="" class="userpicimg"> </div>
												<h3 class="username">Shayan Ahmad</h3>
												<p>Web Designer, PAK</p>
												<div class="text-center mb-2">
													<span><i class="fa fa-star text-warning"></i></span>
													<span><i class="fa fa-star text-warning"></i></span>
													<span><i class="fa fa-star text-warning"></i></span>
													<span><i class="fa fa-star-half-o text-warning"></i></span>
													<span><i class="fa fa-star-o text-warning"></i></span>
												</div>
												<div class="socials text-center mb-3">
													<a href="" class="btn btn-circle btn-primary ">
													<i class="fa fa-facebook"></i></a> <a href="" class="btn btn-circle btn-danger ">
													<i class="fa fa-google-plus"></i></a> <a href="" class="btn btn-circle btn-info ">
													<i class="fa fa-twitter"></i></a> <a href="" class="btn btn-circle btn-warning "><i class="fa fa-envelope"></i></a>
												</div>
												<a href="profile.html" class="btn btn-primary mt-1"><i class="fe fe-eye followbtn ml-1"></i> View Profile</a>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h4>Recently Connected</h4>
									</div>
									<div class="card-body h-100 pt-3 pb-3">
										<div class="memberblock mb-0">
											<div class="row ">
												<div class="col-lg-4 pl-1 pr-1 m-t-5 m-b-5">
													<a href="" class="member"> <img src="../../assets/img/avatar/avatar-2.jpeg" alt="">
														<div class="memmbername">Ajay Sriram</div>
													</a>
												</div>
												<div class="col-lg-4 pl-1 pr-1 m-t-5 m-b-5">
													<a href="" class="member"> <img src="../../assets/img/avatar/avatar-3.jpeg" alt="">
														<div class="memmbername">Rajesh Sriram</div>
													</a>
												</div>
												<div class="col-lg-4 pl-1 pr-1 m-t-5 m-b-5">
													<a href="" class="member"> <img src="../../assets/img/avatar/avatar-4.jpeg" alt="">
														<div class="memmbername">Manish Sriram</div>
													</a>
												</div>
											</div>
											<div class="row ">
												<div class="col-lg-4 pl-1 pr-1 mb-0 m-t-5 m-b-5">
													<a href="" class="member"> <img src="../../assets/img/avatar/avatar-6.jpg" alt="">
														<div class="memmbername">John Sriram</div>
													</a>
												</div>
												<div class="col-lg-4 pl-1 pr-1 mb-0 m-t-5 m-b-5">
													<a href="" class="member"> <img src="../../assets/img/avatar/avatar-5.jpeg" alt="">
														<div class="memmbername">Chandra Amin</div>
													</a>
												</div>
												<div class="col-lg-4 pl-1 pr-1 mb-0 m-t-5 m-b-5">
													<a href="" class="member"> <img src="../../assets/img/avatar/avatar-3.jpeg" alt="">
														<div class="memmbername">Julian	Knox</div>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-xl-8 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h4>Edit Profile</h4>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="form-group">
													<label for="exampleInputname">First Name</label>
													<input type="text" class="form-control" id="exampleInputname" placeholder="First Name">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="form-group">
													<label for="exampleInputname1">Last Name</label>
													<input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Last Name">
												</div>
											</div>
										</div>
										<div class="form-group">
											<label for="exampleInputEmail1">Email address</label>
											<input type="email" class="form-control" id="exampleInputEmail1" placeholder="email address">
										</div>
										<div class="form-group">
											<label for="exampleInputnumber">Conatct Number</label>
											<input type="number" class="form-control" id="exampleInputnumber" placeholder="ph number">
										</div>
										<div class="form-group">
											<label class="form-label">About Me</label>
											<textarea class="form-control" rows="6">My bio.........</textarea>
										</div>
										<div class="form-group">
											<label class="form-label">DateOfBirth</label>
											<div class="row">
												<div class="col-md-4">
													<select class="form-control select2">
														<option value="0">Date</option>
														<option value="1">01</option>
														<option value="2">02</option>
														<option value="3">03</option>
														<option value="4">04</option>
														<option value="5">05</option>
														<option value="6">06</option>
														<option value="7">07</option>
														<option value="8">08</option>
														<option value="9">09</option>
														<option value="10">10</option>
														<option value="11">11</option>
														<option value="12">12</option>
														<option value="13">13</option>
														<option value="14">14</option>
														<option value="15">15</option>
														<option value="16">16</option>
														<option value="17">17</option>
														<option value="18">18</option>
														<option value="19">19</option>
														<option value="20">20</option>
														<option value="21">21</option>
														<option value="22">22</option>
														<option value="23">23</option>
														<option value="24">24</option>
														<option value="25">25</option>
														<option value="26">26</option>
														<option value="27">27</option>
														<option value="28">28</option>
														<option value="29">29</option>
														<option value="30">30</option>
														<option value="31">31</option>
													</select>
												</div>
												<div class="col-md-4">
													<select class="form-control select2">
														<option value="0">Mon</option>
														<option value="1">Jan</option>
														<option value="2">Feb</option>
														<option value="3">Mar</option>
														<option value="4">Apr</option>
														<option value="5">May</option>
														<option value="6">June</option>
														<option value="7">July</option>
														<option value="8">Aug</option>
														<option value="9">Sep</option>
														<option value="10">Oct</option>
														<option value="11">Nov</option>
														<option value="12">Dec</option>
													</select>
												</div>
												<div class="col-md-4">
													<select class="form-control select2">
														<option value="0">Year</option>
														<option value="1">2018</option>
														<option value="2">2017</option>
														<option value="3">2016</option>
														<option value="4">2015</option>
														<option value="5">2014</option>
														<option value="6">2013</option>
														<option value="7">2102</option>
														<option value="8">2012</option>
														<option value="9">2011</option>
														<option value="10">2010</option>
														<option value="11">2009</option>
														<option value="12">2008</option>
														<option value="13">2007</option>
														<option value="14">2006</option>
														<option value="15">2005</option>
														<option value="16">2004</option>
														<option value="17">2003</option>
														<option value="18">2002</option>
														<option value="19">2001</option>
														<option value="20">1999</option>
														<option value="21">1998</option>
														<option value="22">1997</option>
														<option value="23">1996</option>
														<option value="24">1995</option>
														<option value="25">1994</option>
														<option value="26">1993</option>
														<option value="27">1992</option>
														<option value="28">1991</option>
														<option value="29">1990</option>
														<option value="30">1989</option>
														<option value="31">1988</option>
													</select>
												</div>
											</div>
										</div>
										<div class="form-group mb-0">
											<div class="row">
												<div class="col-xl-6 col-lg-12 col-md-12 userprofile">
													<div class="userpic mb-2">
														<img src="../../assets/img/avatar/avatar-3.jpeg" alt="" class="userpicimg">
													</div>
													<p class="text-center">Web Designer, PAK</p>
													<div class="text-center">
														<a href="#" class="btn btn-primary mt-1"><i class="fe fe-camera  mr-1"></i>Change Photo</a><br>
														<a href="#" class="btn btn-warning mt-1 mb-3 mb-xl-0"><i class="fe fe-camera-off mr-1 mb-2"></i>Remove Photo</a>
													</div>
												</div>
												<div class="col-xl-6 col-lg-12 col-md-12">
													<div class="form-group">
														<label>Change Password</label>
														<input type="password" class="form-control"  value="password">
													</div>
													<div class="form-group">
														<label>New Password</label>
														<input type="password" class="form-control"  value="password">
													</div>
													<div class="form-group mb-0">
														<label>Confirm Password</label>
														<input type="password" class="form-control"  value="password">
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<a href="#" class="btn btn-primary mt-1">Save</a>
										<a href="#" class="btn btn-danger mt-1">Cancel</a>
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
						<div class="popup-head-left pull-left"><img src="../../assets/img/avatar/avatar-3.jpeg" alt="iamgurdeeposahan" class="mr-2"> Shayan Ahmad</div>
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
									<span class="direct-chat-name float-left">Shayan Ahmad</span>
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
									<span class="direct-chat-name float-left">Shayan Ahmad</span>
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

		</div>
		<!--app closed-->
@endsection