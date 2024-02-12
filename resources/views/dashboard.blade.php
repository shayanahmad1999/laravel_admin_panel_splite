@extends('layouts.layout')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <body class="app">

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
                                            <p class="mb-0"><span class=""><i
                                                        class="fa fa-arrow-circle-o-up ml-1 text-success"></i> 2.5%</span>
                                                last month</p>
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
                                            <p class="mb-0"><span class=""><i
                                                        class="fa fa-arrow-circle-o-down ml-1 text-danger"></i> 4%</span>
                                                last month</p>
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
                                            <p class="mb-0"><span class=""><i
                                                        class="fa fa-arrow-circle-o-up ml-1 text-success"></i> 12%</span>
                                                last month</p>
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
                                            <p class="mb-0"><span class=""><i
                                                        class="fa fa-arrow-circle-o-down ml-1 text-danger"></i> 5%</span>
                                                last month</p>
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
                                                        <td>Theresa Wright</td>
                                                        <td>PRO6789</td>
                                                        <td>Digisol DG-HR3400 Router </td>
                                                        <td>$11,987</td>
                                                        <td>Cash on delivered</td>
                                                        <td><span class="badge badge-secondary">Delivering</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>#07</td>
                                                        <td>Sebastian Black</td>
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
                        <div class="popup-head-left pull-left"><img src="../../assets/img/avatar/avatar-3.jpeg"
                                alt="iamgurdeeposahan" class="mr-2"> Alica Nestle</div>
                        <div class="popup-head-right pull-right">
                            <div class="btn-group">
                                <button class="chat-header-button" data-toggle="dropdown" type="button"
                                    aria-expanded="false">
                                    <i class="glyphicon glyphicon-cog"></i> </button>
                                <ul role="menu" class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#">Media</a></li>
                                    <li><a href="#">Block</a></li>
                                    <li><a href="#">Clear Chat</a></li>
                                    <li><a href="#">Email Chat</a></li>
                                </ul>
                            </div>
                            <button data-widget="remove" id="removeClass" class="chat-header-button pull-right"
                                type="button"><i class="glyphicon glyphicon-off"></i></button>
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
                                <img class="direct-chat-img" src="../../assets/img/avatar/avatar-3.jpeg"
                                    alt="message user image">
                                <div class="direct-chat-text">
                                    Hello. How are you today?
                                </div>
                            </div>
                            <div class="direct-chat-msg right">
                                <div class="direct-chat-info clearfix">
                                    <span class="direct-chat-name float-right">Roberts</span>
                                    <span class="direct-chat-timestamp float-left">8:05 Am</span>
                                </div>
                                <img class="direct-chat-img" src="../../assets/img/avatar/avatar-2.jpeg"
                                    alt="message user image">
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
                                <img alt="iamgurdeeposahan" src="../../assets/img/avatar/avatar-3.jpeg"
                                    class="direct-chat-img"><!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    Hey bro, how’s everything going ?
                                </div>
                                <div class="direct-chat-msg right">
                                    <div class="direct-chat-info clearfix">
                                        <span class="direct-chat-name float-right">Roberts</span>
                                        <span class="direct-chat-timestamp float-left">7:05 Am</span>
                                    </div>
                                    <img class="direct-chat-img" src="../../assets/img/avatar/avatar-2.jpeg"
                                        alt="message user image">
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

    </body>

    </html>
@endsection
