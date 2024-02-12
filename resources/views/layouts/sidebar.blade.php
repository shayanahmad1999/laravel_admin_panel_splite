 <!--aside open-->
 <aside class="app-sidebar">
    <div class="app-sidebar__user">
        <div class="dropdown user-pro-body text-center">
            <div class="nav-link pl-1 pr-1 leading-none ">
                <img src="../../assets/img/avatar/avatar-3.jpeg" alt="user-img" class="avatar-xl rounded-circle mb-1">
                <span class="pulse bg-success" aria-hidden="true"></span>
            </div>
            <div class="user-info">
                <h6 class=" mb-1 text-dark">Shayan Ahmad</h6>
                <span class="text-muted app-sidebar__user-name text-sm"> Web-Designer</span>
            </div>
        </div>
    </div>
    <ul class="side-menu">
        <li class="slide">
            <a class="side-menu__item"  data-toggle="slide" href="#"><i class="side-menu__icon fa fa-laptop"></i><span class="side-menu__label">Dashboard</span><span class="badge badge-orange nav-badge">5</span></a>
            <ul class="slide-menu">
                <li><a class="slide-item"  href="{{route('admin.dashboard')}}"><span>Dashboard </span></a></li>
            </ul>
        </li>
        <li>
            <a class="side-menu__item" href="{{route('admin.modal')}}"><i class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">Modals</span></a>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-table"></i><span class="side-menu__label">Tables</span><span class="badge badge-secondary nav-badge1">New</span></a>
            <ul class="slide-menu">
                <li><a href="{{route('admin.basicTable')}}" class="slide-item">Basic Tables</a></li>
                <li><a href="{{route('admin.dataTable')}}" class="slide-item"> Data Tables</a></li>
                <li><a href="{{route('admin.editTable')}}" class="slide-item"> Edit Table</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-edit"></i><span class="side-menu__label">Forms</span><span class="badge badge-pink nav-badge">6</span></a>
            <ul class="slide-menu">
                <li><a href="{{route('admin.elementForm')}}" class="slide-item"> Form Elements</a></li>
                <li><a href="{{route('admin.advanceForm')}}" class="slide-item"> Advanced Form</a></li>
                <li><a href="{{route('admin.validationForm')}}" class="slide-item"> Form Validation</a></li>
                <li><a href="{{route('admin.wizardForm')}}" class="slide-item"> Form Wizard</a></li>
            </ul>
        </li>
    </ul>
</aside>
<!--aside closed-->