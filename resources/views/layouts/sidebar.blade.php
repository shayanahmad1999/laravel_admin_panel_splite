 <!--aside open-->
 <aside class="app-sidebar">
    <div class="app-sidebar__user">
        <div class="dropdown user-pro-body text-center">
            <div class="nav-link pl-1 pr-1 leading-none ">
                <img src="../../assets/img/avatar/avatar-3.jpeg" alt="user-img" class="avatar-xl rounded-circle mb-1">
                <span class="pulse bg-success" aria-hidden="true"></span>
            </div>
            <div class="user-info">
                <h6 class=" mb-1 text-dark">Alica Nestle</h6>
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
            <a class="side-menu__item" href="widgets.html"><i class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">Widgets</span></a>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-table"></i><span class="side-menu__label">Tables</span><span class="badge badge-secondary nav-badge1">New</span></a>
            <ul class="slide-menu">
                <li><a href="table.html" class="slide-item">Basic Tables</a></li>
                <li><a href="datatables.html" class="slide-item"> Data Tables</a></li>
                <li><a href="editable.html" class="slide-item"> Edit Table</a></li>
            </ul>
        </li>
    </ul>
</aside>
<!--aside closed-->