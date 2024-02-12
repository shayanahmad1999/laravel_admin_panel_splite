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
                        <h4 class="page-title">Form Wizard</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="text-light-color">Forms</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Wizard</li>
                        </ol>
                    </div>
                    <!--page-header closed-->

                    <!--row open-->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Default Form Wizard</h4>
                                </div>
                                <div class="card-body">
                                    <div id="smartwizard">
                                        <ul>
                                            <li><a href="#step-1">Login</a></li>
                                            <li><a href="#step-2">New User</a></li>
                                            <li><a href="#step-3">End</a></li>
                                        </ul>
                                        <div>
                                            <div id="step-1" class="">
                                                <form>
                                                    <div class="form-group">
                                                        <label>Email address</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail13"
                                                            placeholder="Enter email address">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input type="password" class="form-control"
                                                            id="exampleInputPassword16" placeholder="Password">
                                                    </div>
                                                    <div class="checkbox">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" data-checkboxes="mygroup"
                                                                class="custom-control-input" id="checkbox-1">
                                                            <label for="checkbox-1" class="custom-control-label">Check me
                                                                Out</label>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div id="step-2" class="">
                                                <form>
                                                    <div class="form-group">
                                                        <label>User Name</label>
                                                        <input type="text" class="form-control" id="inputtext3"
                                                            placeholder="Enter User Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email address</label>
                                                        <input type="email" class="form-control"
                                                            placeholder="Enter email address">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input type="password" class="form-control" placeholder="Password">
                                                    </div>
                                                    <div class="checkbox">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" data-checkboxes="mygroup"
                                                                class="custom-control-input" id="checkbox-2">
                                                            <label for="checkbox-2" class="custom-control-label">Check me
                                                                Out</label>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div id="step-3" class="">
                                                <div class="checkbox">
                                                    <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup"
                                                            class="custom-control-input" id="checkbox3">
                                                        <label for="checkbox3" class="custom-control-label">I agree terms &
                                                            Conditions</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--row closed-->

                    <!--row open-->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Arrows Form Wizard</h4>
                                </div>
                                <div class="card-body">
                                    <div id="smartwizard-1">
                                        <ul>
                                            <li><a href="#step-4">Login</a></li>
                                            <li><a href="#step-5">New User</a></li>
                                            <li><a href="#step-6">End</a></li>
                                        </ul>
                                        <div>
                                            <div id="step-4" class="">
                                                <form>
                                                    <div class="form-group">
                                                        <label>Email address</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail11"
                                                            placeholder="Enter email address">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input type="password" class="form-control"
                                                            id="exampleInputPassword10" placeholder="Password">
                                                    </div>
                                                    <div class="checkbox">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" data-checkboxes="mygroup"
                                                                class="custom-control-input" id="checkbox-3">
                                                            <label for="checkbox-3" class="custom-control-label">Check me
                                                                Out</label>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div id="step-5" class="">
                                                <form>
                                                    <div class="form-group">
                                                        <label>User Name</label>
                                                        <input type="text" class="form-control" id="inputtext2"
                                                            placeholder="Enter User Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email address</label>
                                                        <input type="email" class="form-control"
                                                            id="exampleInputEmail2" placeholder="Enter email address">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input type="password" class="form-control"
                                                            id="exampleInputPassword17" placeholder="Password">
                                                    </div>
                                                    <div class="checkbox">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" data-checkboxes="mygroup"
                                                                class="custom-control-input" id="checkbox-4">
                                                            <label for="checkbox-4" class="custom-control-label">Check me
                                                                Out</label>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div id="step-6" class="">
                                                <div class="checkbox">
                                                    <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup"
                                                            class="custom-control-input" id="checkbox-5">
                                                        <label for="checkbox-5" class="custom-control-label">I agree terms
                                                            & Conditions</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--row closed-->

                    <!--row open-->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Circles Form Wizard</h4>
                                </div>
                                <div class="card-body">
                                    <div id="smartwizard-2">
                                        <ul>
                                            <li><a href="#step-7">Login</a></li>
                                            <li><a href="#step-8">Register</a></li>
                                            <li><a href="#step-9">End</a></li>
                                        </ul>
                                        <div>
                                            <div id="step-7" class="">
                                                <form>
                                                    <div class="form-group">
                                                        <label>Email address</label>
                                                        <input type="email" class="form-control"
                                                            id="exampleInputEmail14" placeholder="Enter email address">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input type="password" class="form-control"
                                                            id="exampleInputPassword2" placeholder="Password">
                                                    </div>
                                                    <div class="checkbox">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" data-checkboxes="mygroup"
                                                                class="custom-control-input" id="checkbox-6">
                                                            <label class="custom-control-label">Check me Out</label>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div id="step-8" class="">
                                                <form>
                                                    <div class="form-group">
                                                        <label>User Name</label>
                                                        <input type="text" class="form-control" id="inputtext1"
                                                            placeholder="Enter User Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email address</label>
                                                        <input type="email" class="form-control"
                                                            id="exampleInputEmail3" placeholder="Enter email address">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input type="password" class="form-control"
                                                            id="exampleInputPassword4" placeholder="Password">
                                                    </div>
                                                    <div class="checkbox">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" data-checkboxes="mygroup"
                                                                class="custom-control-input" id="checkbox-7">
                                                            <label for="checkbox-7" class="custom-control-label">Check me
                                                                Out</label>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div id="step-9" class="">
                                                <div class="checkbox">
                                                    <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup"
                                                            class="custom-control-input" id="checkbox-8">
                                                        <label for="checkbox-8" class="custom-control-label">I agree terms
                                                            & Conditions</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--row closed-->

                    <!--row open-->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Dots Form Wizard</h4>
                                </div>
                                <div class="card-body">
                                    <div id="smartwizard-3">
                                        <ul>
                                            <li><a href="#step-10">Login</a></li>
                                            <li><a href="#step-11">New User</a></li>
                                            <li><a href="#step-12">End</a></li>
                                        </ul>
                                        <div>
                                            <div id="step-10" class="">
                                                <form>
                                                    <div class="form-group">
                                                        <label>Email address</label>
                                                        <input type="email" class="form-control"
                                                            id="exampleInputEmail6" placeholder="Enter email address">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input type="password" class="form-control"
                                                            id="exampleInputPassword7" placeholder="Password">
                                                    </div>
                                                    <div class="checkbox">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" data-checkboxes="mygroup"
                                                                class="custom-control-input" id="checkbox-9">
                                                            <label class="custom-control-label">Check me Out</label>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div id="step-11" class="">
                                                <form>
                                                    <div class="form-group">
                                                        <label>User Name</label>
                                                        <input type="text" class="form-control" id="inputtext"
                                                            placeholder="Enter User Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email address</label>
                                                        <input type="email" class="form-control"
                                                            id="exampleInputEmail8" placeholder="Enter email address">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input type="password" class="form-control"
                                                            id="exampleInputPassword9" placeholder="Password">
                                                    </div>
                                                    <div class="checkbox">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" data-checkboxes="mygroup"
                                                                class="custom-control-input" id="checkbox1">
                                                            <label for="checkbox1" class="custom-control-label">Check me
                                                                Out</label>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div id="step-12" class="">
                                                <div class="checkbox">
                                                    <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup"
                                                            class="custom-control-input" id="checkbox2">
                                                        <label for="checkbox2" class="custom-control-label">I agree terms
                                                            & Conditions</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
    @endsection
