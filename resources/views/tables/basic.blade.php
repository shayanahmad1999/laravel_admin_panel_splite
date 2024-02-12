@extends('layouts.layout')
@section('content')

    <body class="app">
        <!--Header Style -->
        <div class="wave -three"></div>
        <div id="spinner"></div>

        <!-- app open -->
        <div id="app" class="page">
            <div class="main-wrapper">


                <!--app-content open-->
                <div class="app-content">
                    <section class="section">

                        <!--page-header open-->
                        <div class="page-header pt-0">
                            <h4 class="page-title">Basic Tables</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="text-light-color">Table</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Basic Tables</li>
                            </ol>
                        </div>
                        <!--page-header closed-->

                        <div class="section-body">

                            <!--row open-->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Basic Table</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered mb-0 text-nowrap">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Date of joining</th>
                                                        <th>Date of Re leaving</th>
                                                        <th>projects</th>
                                                        <th>Experience</th>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Joshua Welch</td>
                                                        <td>Web Designer</td>
                                                        <td>19-6-2014</td>
                                                        <td>19-6-2018</td>
                                                        <td>14</td>
                                                        <td>4 yrs</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Alan Randall</td>
                                                        <td>Accountant</td>
                                                        <td>21-5-2015</td>
                                                        <td>21-5-2018</td>
                                                        <td>10</td>
                                                        <td>3 yrs</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Jack Greene</td>
                                                        <td>App Developer</td>
                                                        <td>21-3-2010</td>
                                                        <td>21-3-2018</td>
                                                        <td>24</td>
                                                        <td>8 yrs</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Sean Lawrence</td>
                                                        <td>Jr.Developer</td>
                                                        <td>25-8-2015</td>
                                                        <td>25-8-2015</td>
                                                        <td>10</td>
                                                        <td>3 yrs</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Oliver Welch</td>
                                                        <td>HR</td>
                                                        <td>15-10-2012</td>
                                                        <td>15-10-2018</td>
                                                        <td>20</td>
                                                        <td>6 yrs</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Full Width Table</h4>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="table-responsive">
                                                <table class="table table-striped mb-0 text-nowrap">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Date of joining</th>
                                                        <th>Date of Re leaving</th>
                                                        <th>projects</th>
                                                        <th>Experience</th>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Joshua Welch</td>
                                                        <td>Web Designer</td>
                                                        <td>19-6-2014</td>
                                                        <td>19-6-2018</td>
                                                        <td>14</td>
                                                        <td>4 yrs</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Alan Randall</td>
                                                        <td>Accountant</td>
                                                        <td>21-5-2015</td>
                                                        <td>21-5-2018</td>
                                                        <td>10</td>
                                                        <td>3 yrs</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Jack Greene</td>
                                                        <td>App Developer</td>
                                                        <td>21-3-2010</td>
                                                        <td>21-3-2018</td>
                                                        <td>24</td>
                                                        <td>8 yrs</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Sean Lawrence</td>
                                                        <td>Jr.Developer</td>
                                                        <td>25-8-2015</td>
                                                        <td>25-8-2015</td>
                                                        <td>10</td>
                                                        <td>3 yrs</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Oliver Welch</td>
                                                        <td>HR</td>
                                                        <td>15-10-2012</td>
                                                        <td>15-10-2018</td>
                                                        <td>20</td>
                                                        <td>6 yrs</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--row closed-->

                            <!--row open-->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Hover Table</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-hover mb-0 text-nowrap">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Date of joining</th>
                                                        <th>Date of Re leaving</th>
                                                        <th>projects</th>
                                                        <th>Experience</th>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Joshua Welch</td>
                                                        <td>Web Designer</td>
                                                        <td>19-6-2014</td>
                                                        <td>19-6-2018</td>
                                                        <td>14</td>
                                                        <td>4 yrs</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Alan Randall</td>
                                                        <td>Accountant</td>
                                                        <td>21-5-2015</td>
                                                        <td>21-5-2018</td>
                                                        <td>10</td>
                                                        <td>3 yrs</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Jack Greene</td>
                                                        <td>App Developer</td>
                                                        <td>21-3-2010</td>
                                                        <td>21-3-2018</td>
                                                        <td>24</td>
                                                        <td>8 yrs</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Sean Lawrence</td>
                                                        <td>Jr.Developer</td>
                                                        <td>25-8-2015</td>
                                                        <td>25-8-2015</td>
                                                        <td>10</td>
                                                        <td>3 yrs</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Oliver Welch</td>
                                                        <td>HR</td>
                                                        <td>15-10-2012</td>
                                                        <td>15-10-2018</td>
                                                        <td>20</td>
                                                        <td>6 yrs</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Headercolor Table</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered mb-0 text-nowrap">
                                                    <tr class="bg-primary">
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Date of joining</th>
                                                        <th>Date of Re leaving</th>
                                                        <th>projects</th>
                                                        <th>Experience</th>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Joshua Welch</td>
                                                        <td>Web Designer</td>
                                                        <td>19-6-2014</td>
                                                        <td>19-6-2018</td>
                                                        <td>14</td>
                                                        <td>4 yrs</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Alan Randall</td>
                                                        <td>Accountant</td>
                                                        <td>21-5-2015</td>
                                                        <td>21-5-2018</td>
                                                        <td>10</td>
                                                        <td>3 yrs</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Jack Greene</td>
                                                        <td>App Developer</td>
                                                        <td>21-3-2010</td>
                                                        <td>21-3-2018</td>
                                                        <td>24</td>
                                                        <td>8 yrs</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Sean Lawrence</td>
                                                        <td>Jr.Developer</td>
                                                        <td>25-8-2015</td>
                                                        <td>25-8-2015</td>
                                                        <td>10</td>
                                                        <td>3 yrs</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Oliver Welch</td>
                                                        <td>HR</td>
                                                        <td>15-10-2012</td>
                                                        <td>15-10-2018</td>
                                                        <td>20</td>
                                                        <td>6 yrs</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--row closed-->

                            <!--row open-->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card Advance-table">
                                        <div class="card-header">
                                            <div class="float-right">
                                                <form>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Search">
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-primary"><i
                                                                    class="ion ion-search"></i></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <h4>Advanced Table</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered mb-0 text-nowrap">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Project</th>
                                                        <th>Progress</th>
                                                        <th>Team</th>
                                                        <th>Deadline</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-checkbox custom-control">
                                                                <input type="checkbox" data-checkboxes="mygroup"
                                                                    class="custom-control-input" id="checkbox-1">
                                                                <label for="checkbox-1"
                                                                    class="custom-control-label"></label>
                                                            </div>
                                                        </td>
                                                        <td>Konr Admin Template</td>
                                                        <td class="align-middle">
                                                            <div class="progress h-6" data-toggle="tooltip" title="90%">
                                                                <div class="progress-bar bg-success w-90"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img alt="image" src="../../assets/img/avatar/avatar-5.jpeg"
                                                                class="rounded-circle" width="35" data-toggle="title"
                                                                title="Wildan Ahdian">
                                                        </td>
                                                        <td>10-11-2018</td>
                                                        <td>
                                                            <div class="badge badge-success">Testing</div>
                                                        </td>
                                                        <td><a href="#" class="btn btn-action btn-primary">More</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-checkbox custom-control">
                                                                <input type="checkbox" data-checkboxes="mygroup"
                                                                    class="custom-control-input" id="checkbox-2">
                                                                <label for="checkbox-2"
                                                                    class="custom-control-label"></label>
                                                            </div>
                                                        </td>
                                                        <td>Gogg beauty Template</td>
                                                        <td class="align-middle">
                                                            <div class="progress h-6" data-toggle="tooltip" title="40%">
                                                                <div class="progress-bar bg-primary w-40"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img alt="image" src="../../assets/img/avatar/avatar-3.jpeg"
                                                                class="rounded-circle" width="35" data-toggle="title"
                                                                title="Nur Alpiana">
                                                            <img alt="image" src="../../assets/img/avatar/avatar-3.jpeg"
                                                                class="rounded-circle" width="35" data-toggle="title"
                                                                title="Hariono Yusup">
                                                            <img alt="image"
                                                                src="../../assets/img/avatar/avatar-4.jpeg"
                                                                class="rounded-circle" width="35" data-toggle="title"
                                                                title="Bagus Dwi Cahya">
                                                        </td>
                                                        <td>29-11-2018</td>
                                                        <td>
                                                            <div class="badge badge-info">Coding</div>
                                                        </td>
                                                        <td><a href="#" class="btn btn-action btn-primary">More</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-checkbox custom-control">
                                                                <input type="checkbox" data-checkboxes="mygroup"
                                                                    class="custom-control-input" id="checkbox-3">
                                                                <label for="checkbox-3"
                                                                    class="custom-control-label"></label>
                                                            </div>
                                                        </td>
                                                        <td>Hytr Hosting Template</td>
                                                        <td class="align-middle">
                                                            <div class="progress h-6" data-toggle="tooltip"
                                                                title="60%">
                                                                <div class="progress-bar bg-danger w-60"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img alt="image"
                                                                src="../../assets/img/avatar/avatar-3.jpeg"
                                                                class="rounded-circle" width="35" data-toggle="title"
                                                                title="Rizal Fakhri">
                                                            <img alt="image"
                                                                src="../../assets/img/avatar/avatar-2.jpeg"
                                                                class="rounded-circle" width="35" data-toggle="title"
                                                                title="Hasan Basri">
                                                        </td>
                                                        <td>31-10-2018</td>
                                                        <td>
                                                            <div class="badge badge-warning">Process</div>
                                                        </td>
                                                        <td><a href="#" class="btn btn-action btn-primary">More</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-checkbox custom-control">
                                                                <input type="checkbox" data-checkboxes="mygroup"
                                                                    class="custom-control-input" id="checkbox-4">
                                                                <label for="checkbox-4"
                                                                    class="custom-control-label"></label>
                                                            </div>
                                                        </td>
                                                        <td>Ureo Education Template</td>
                                                        <td class="align-middle">
                                                            <div class="progress h-6" data-toggle="tooltip"
                                                                title="50%">
                                                                <div class="progress-bar bg-secondary w-50"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img alt="image"
                                                                src="../../assets/img/avatar/avatar-2.jpeg"
                                                                class="rounded-circle" width="35" data-toggle="title"
                                                                title="Rizal Fakhri">
                                                            <img alt="image"
                                                                src="../../assets/img/avatar/avatar-5.jpeg"
                                                                class="rounded-circle" width="35" data-toggle="title"
                                                                title="Isnap Kiswandi">
                                                            <img alt="image"
                                                                src="../../assets/img/avatar/avatar-4.jpeg"
                                                                class="rounded-circle" width="35" data-toggle="title"
                                                                title="Yudi Nawawi">
                                                            <img alt="image"
                                                                src="../../assets/img/avatar/avatar-3.jpeg"
                                                                class="rounded-circle" width="35" data-toggle="title"
                                                                title="Khaerul Anwar">
                                                        </td>
                                                        <td>15-10-2018</td>
                                                        <td>
                                                            <div class="badge badge-danger">Completed</div>
                                                        </td>
                                                        <td><a href="#" class="btn btn-action btn-primary">More</a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--row closed-->
                        </div>

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
    </body>
@endsection
