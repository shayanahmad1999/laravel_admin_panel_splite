@extends('layouts.layout')
@section('content')
    <!--Header Style -->
		<div class="wave -three"></div>

		<!--loader -->
		<div id="spinner"></div>

		<!-- app open -->
		<div id="app" class="page">
			<div class="main-wrapper">


                <!-- app-content open -->
				<div class="app-content">
					<section class="section">

					    <!-- page-header open -->
						<div class="page-header pt-0">
							<h4 class="page-title">Modals</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#" class="text-light-color">UI Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Modals</li>
							</ol>
						</div>
						<!-- page-header closed -->

						<!-- row open -->
						<div class="row">
							<div class="col-lg-4 col-md-6 col-12">
								<div class="card">
									<div class="card-header">
										<h4>Default Modal</h4>
									</div>
									<div class="card-body text-center">
										<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal">Default modal</button>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-12">
								<div class="card">
									<div class="card-header">
										<h4>Scrolling modal</h4>
									</div>
									<div class="card-body text-center">
										<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalLong">Scrolling modal</button>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-12">
								<div class="card">
									<div class="card-header">
										<h4>Large modal</h4>
									</div>
									<div class="card-body text-center">
										<button class="btn btn-danger" data-toggle="modal" data-target="#largeModal">Large modal</button>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-12">
								<div class="card">
									<div class="card-header">
										<h4>Small modal</h4>
									</div>
									<div class="card-body text-center">
										<button type="button" class="btn btn-success"  data-toggle="modal" data-target="#smallModal">Small modal</button>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-12">
								<div class="card">
									<div class="card-header">
										<h4>Grid modal</h4>
									</div>
									<div class="card-body text-center">
										<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal2">Grid modal</button>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-12">
								<div class="card">
									<div class="card-header">
										<h4>Input modal</h4>
									</div>
									<div class="card-body text-center">
										<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal3">Input modal</button>
									</div>
								</div>
							</div>
						</div>
						<!-- row closed -->

					</section>
				</div>
				<!-- app-content closed -->

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

				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<p class="mb-0">Modal body text goes here.</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary">Save changes</button>
							</div>
						</div>
					</div>
				</div>
				<!-- Modal closed -->

				<!--Scrolling Modal-->
				<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
								<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
								<p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. </p>
								<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
								<p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</p>
								<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary">Save changes</button>
							</div>
						</div>
					</div>
				</div>
				<!--Scrolling Modal closed-->

				<!-- Large Modal -->
				<div id="largeModal" class="modal fade">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content ">
							<div class="modal-header pd-x-20">
								<h6 class="modal-title">Message Preview</h6>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body pd-20">
								<h5 class=" lh-3 mg-b-20"><a href="" class="font-weight-bold">Why We Use Electoral College, Not Popular Vote</a></h5>
								<p class="mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
							</div><!-- modal-body -->
							<div class="modal-footer">
								<button type="button" class="btn btn-primary">Save changes</button>
								<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div><!-- modal-dialog -->
				</div>
				<!-- Large Modal closed -->

				<!-- small Modal -->
				<div id="smallModal" class="modal fade">
					<div class="modal-dialog modal-sm" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Message Preview</h6>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<p class="mb-0">This is a modal with small size</p>
							</div><!-- modal-body -->
							<div class="modal-footer">
								<button type="button" class="btn btn-primary">Save changes</button>
								<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div><!-- modal-dialog -->
				</div>
				<!-- small Modal closed -->

				<!-- Grid Modal -->
				<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModal2" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="example-Modal2">Modal title</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-md-6">
										<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
									</div>
									<div class="col-md-6">
										<p >But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the who loves toil and pain can procureor sit aspernatur  system.</p>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<p class="mb-0">expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure desires to obtain pain.</p>
									</div>
									<div class="col-md-6">
										<p class="mb-0">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat aut odit voluptatem.</p>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary">Save changes</button>
							</div>
						</div>
					</div>
				</div>
				<!-- Grid Modal closed -->

				<!-- Message Modal -->
				<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog"  aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="example-Modal3">New message</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label for="recipient-name" class="form-control-label">Recipient:</label>
										<input type="text" class="form-control" id="recipient-name">
									</div>
									<div class="form-group mb-0">
										<label for="message-text" class="form-control-label">Message:</label>
										<textarea class="form-control" id="message-text"></textarea>
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary">Send message</button>
							</div>
						</div>
					</div>
				</div>
				<!-- Message Modal closed -->

			</div>
@endsection