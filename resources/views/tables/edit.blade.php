@extends('layouts.layout')
@section('content')
    	<!--Header Style -->
		<div class="wave -three"></div>

		<!--loader -->
		<div id="spinner"></div>

        <!--app open-->
		<div id="app" class="page">
			<div class="main-wrapper" >


                <!--app-content open-->
				<div class="app-content">
					<section class="section">

						<!--page-header open-->
						<div class="page-header pt-0">
							<h4 class="page-title">Editable</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#" class="text-light-color">Tables</a></li>
								<li class="breadcrumb-item active" aria-current="page">Editable</li>
							</ol>
						</div>
						<!--page-header closed-->

                        <!--row open-->
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<span class="table-add float-right">
											<a href="#!" class="btn btn-icon"><i class="fa fa-plus fa-1x" aria-hidden="true"></i></a>
										</span>
										<h4>Edit Table</h4>
									</div>
									<div class="card-body">
										<div id="table" class="table-responsive table-editable">
											<table class="table table-bordered table-responsive-md table-striped text-center mb-0 text-nowrap">
												<tr>
													<th class="text-center">Person Name</th>
													<th class="text-center">Age</th>
													<th class="text-center">Company Name</th>
													<th class="text-center">Country</th>
													<th class="text-center">City</th>
													<th class="text-center">Sort</th>
													<th class="text-center">Remove</th>
												</tr>
												<tr>
													<td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
													<td class="pt-3-half" contenteditable="true">30</td>
													<td class="pt-3-half" contenteditable="true">Deepends</td>
													<td class="pt-3-half" contenteditable="true">Spain</td>
													<td class="pt-3-half" contenteditable="true">Madrid</td>
													<td class="pt-3-half">
														<span class="table-up"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a></span>
														<span class="table-down"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-down"
														aria-hidden="true"></i></a></span>
													</td>
													<td>
														<span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
													</td>
												</tr>
												<tr>
													<td class="pt-3-half" contenteditable="true">Guerra Cortez</td>
													<td class="pt-3-half" contenteditable="true">45</td>
													<td class="pt-3-half" contenteditable="true">Insectus</td>
													<td class="pt-3-half" contenteditable="true">USA</td>
													<td class="pt-3-half" contenteditable="true">San Francisco</td>
													<td class="pt-3-half">
														<span class="table-up"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a></span>
														<span class="table-down"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-down"
														aria-hidden="true"></i></a></span>
													</td>
													<td>
														<span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
													</td>
												</tr>
												<tr>
													<td class="pt-3-half" contenteditable="true">Guadalupe House</td>
													<td class="pt-3-half" contenteditable="true">26</td>
													<td class="pt-3-half" contenteditable="true">Isotronic</td>
													<td class="pt-3-half" contenteditable="true">Germany</td>
													<td class="pt-3-half" contenteditable="true">Frankfurt am Main</td>
													<td class="pt-3-half">
														<span class="table-up"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a></span>
														<span class="table-down"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-down"
														aria-hidden="true"></i></a></span>
													</td>
													<td>
														<span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
													</td>
												</tr>
												<tr class="hide">
													<td class="pt-3-half" contenteditable="true">Elisa Gallagher</td>
													<td class="pt-3-half" contenteditable="true">31</td>
													<td class="pt-3-half" contenteditable="true">Portica</td>
													<td class="pt-3-half" contenteditable="true">United Kingdom</td>
													<td class="pt-3-half" contenteditable="true">London</td>
													<td class="pt-3-half">
														<span class="table-up"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a></span>
														<span class="table-down"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-down"
														aria-hidden="true"></i></a></span>
													</td>
													<td>
														<span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
													</td>
												</tr>
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
@endsection