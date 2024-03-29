  <!--nav open-->
  <nav class="navbar navbar-expand-lg main-navbar">
    <a class="header-brand" href="{{route('admin.dashboard')}}">
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
                    <span class="text-white">Hello,<span class="ml-1"> Shayan Ahmad</span></span>
                </span>
            <span><img src="{{asset('assets/img/avatar/avatar-3.jpeg')}}" alt="profile-user" class="rounded-circle w-32 mr-2"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class=" dropdown-header noti-title text-center border-bottom pb-3">
                    <h5 class="text-capitalize text-dark mb-1">Shayan Ahmad</h5>
                    <small class="text-overflow m-0"> Web-Designer</small>
                </div>
                <a class="dropdown-item" href="{{route('admin.profile')}}"><i class="mdi mdi-account-outline mr-2"></i> <span>My profile</span></a>
                <a class="dropdown-item" href="#"><i class="mdi mdi-settings mr-2"></i> <span>Settings</span></a>
                <a class="dropdown-item" href="#"><i class=" mdi mdi-message-outline mr-2"></i> <span>Mails</span></a>
                <a class="dropdown-item" href="#"><i class=" mdi mdi-account-multiple-outline mr-2"></i> <span>Friends</span></a>
                <a class="dropdown-item" href="#"><i class="fe fe-calendar mr-2"></i> <span>Activity</span></a>
                <a class="dropdown-item" href="#"><i class="mdi mdi-compass-outline mr-2"></i> <span>Support</span></a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="{{route('admin.login')}}"><i class="mdi  mdi-logout-variant mr-2"></i> <span>Logout</span></a>
            </div>
        </li>
    </ul>
</nav>
<!--nav closed-->