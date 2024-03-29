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
                        <h4 class="page-title">Form Elements</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="text-light-color">Forms</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Elements</li>
                        </ol>
                    </div>
                    <!--page-header closed-->

                    <!--row open-->
                    <div class="row">
                        <div class="col-lg-12 col-xl-6 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>General Elements</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label class="col-md-3 form-label">Text</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" value="Typing.....">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 form-label" for="example-email">Email</label>
                                            <div class="col-md-9">
                                                <input type="email" id="example-email" name="example-email"
                                                    class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 form-label">Password</label>
                                            <div class="col-md-9">
                                                <input type="password" class="form-control" value="password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 form-label">Placeholder</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 form-label">Readonly</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" readonly=""
                                                    value="Readonly value">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 form-label">Disabled</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" disabled=""
                                                    value="Disabled value">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <label class="col-md-3 form-label">Number</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="number" name="number">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>General Elements</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label class="col-md-3 form-label">Name</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text" name="name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 form-label">Text area</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" rows="3">Hiiiii.....</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 form-label">URL</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="url" name="url">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 form-label">Search</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="search" name="search">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 form-label">Tel</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="tel" name="tel">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <label class="col-md-3 form-label">Input Select</label>
                                            <div class="col-md-9">
                                                <select class="form-control select2">
                                                    <option>Apple</option>
                                                    <option>Orange</option>
                                                    <option>Mango</option>
                                                    <option>Grapes</option>
                                                    <option>Banana</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--row closed-->

                    <!--row open-->
                    <div class="row">
                        <div class="col-lg-12 col-xl-6 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Vertical Form</h4>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1"
                                                    placeholder="Enter email">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1"
                                                    placeholder="Password">
                                            </div>
                                            <div class="checkbox">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup"
                                                        class="custom-control-input" id="checkbox-1">
                                                    <label for="checkbox-1" class="custom-control-label">Check me
                                                        Out</label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-1 mb-0">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Horizontal Form</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-md-3 col-form-label">User Name</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputName"
                                                    placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-md-3 col-form-label">Email</label>
                                            <div class="col-md-9">
                                                <input type="email" class="form-control" id="inputEmail3"
                                                    placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-md-3 col-form-label">Password</label>
                                            <div class="col-md-9">
                                                <input type="password" class="form-control" id="inputPassword3"
                                                    placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 row justify-content-end">
                                            <div class="col-md-9">
                                                <div class="checkbox">
                                                    <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup"
                                                            class="custom-control-input" id="checkbox-2">
                                                        <label for="checkbox-2" class="custom-control-label">Check me
                                                            Out</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 mt-2 row justify-content-end">
                                            <div class="col-md-9">
                                                <button type="submit" class="btn btn-info">Sign in</button>
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--row closed-->

                    <!--row open-->
                    <div class="row">
                        <div class="col-12 ">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Different Height</h4>
                                </div>
                                <div class="card-body">
                                    <input class="form-control input-lg" type="text" placeholder=".input-lg">
                                    <br>
                                    <input class="form-control" type="text" placeholder="Default input">
                                    <br>
                                    <input class="form-control input-sm" type="text" placeholder=".input-sm">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--row close-->

                    <!--row open-->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Different Width</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3 m-t-5 m-b-5">
                                            <input type="text" class="form-control" placeholder=".col-xs-3">
                                        </div>
                                        <div class="col-md-4 m-t-5 m-b-5">
                                            <input type="text" class="form-control" placeholder=".col-xs-4">
                                        </div>
                                        <div class="col-md-5 m-t-5 m-b-5">
                                            <input type="text" class="form-control" placeholder=".col-xs-5">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--row close-->

                    <!--row open-->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Form Input Grid</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-12" class="form-control">
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-6" class="form-control">
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-6" class="form-control">
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-4" class="form-control">
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-4" class="form-control">
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-4" class="form-control">
                                        </div>
                                        <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-3" class="form-control">
                                        </div>
                                        <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-3" class="form-control">
                                        </div>
                                        <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-3" class="form-control">
                                        </div>
                                        <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-3" class="form-control">
                                        </div>
                                        <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-2" class="form-control">
                                        </div>
                                        <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-2" class="form-control">
                                        </div>
                                        <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-2" class="form-control">
                                        </div>
                                        <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-2" class="form-control">
                                        </div>
                                        <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-2" class="form-control">
                                        </div>
                                        <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-2" class="form-control">
                                        </div>
                                        <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder="col-1" class="form-control">
                                        </div>
                                        <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder="col-1" class="form-control">
                                        </div>
                                        <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder="col-1" class="form-control">
                                        </div>
                                        <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder="col-1" class="form-control">
                                        </div>
                                        <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder="col-1" class="form-control">
                                        </div>
                                        <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder="col-1" class="form-control">
                                        </div>
                                        <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder="col-1" class="form-control">
                                        </div>
                                        <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder="col-1" class="form-control">
                                        </div>
                                        <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder="col-1" class="form-control">
                                        </div>
                                        <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder="col-1" class="form-control">
                                        </div>
                                        <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder="col-1" class="form-control">
                                        </div>
                                        <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder="col-1" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--row close-->

                </section>
            </div>
            <!--app-content closed-->


            <!-- Popupchat open-->
            <div class="popup-box chat-popup" id="qnimate">
                <div class="popup-head">
                    <div class="popup-head-left pull-left"><img src="../../assets/img/avatar/avatar-3.jpeg"
                            alt="iamgurdeeposahan" class="mr-2"> Shayan Ahmad</div>
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
                                <span class="direct-chat-name float-left">Shayan Ahmad</span>
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
                                <span class="direct-chat-name float-left">Shayan Ahmad</span>
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
