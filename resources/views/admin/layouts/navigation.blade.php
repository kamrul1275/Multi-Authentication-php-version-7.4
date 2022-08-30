<nav class="pcoded-navbar menu-light ">
    <div class="navbar-wrapper  ">
        <div class="navbar-content scroll-div " >

            <div class="">
                <div class="main-menu-header">
                    <img class="img-radius" src="{{ asset('backend/assets/images/user/avatar-2.jpg') }}" alt="User-Profile-Image">
                    <div class="user-details">
                        <div id="more-details">  {{ Auth()->guard('admin')->check() ?  Auth()->guard('admin')->user()->name : null }} <i class="fa fa-caret-down"></i></div>
                    </div>
                </div>
                <div class="collapse" id="nav-user-link">
                    <ul class="list-unstyled">
                        <li class="list-group-item"><a href="user-profile.html"><i class="feather icon-user m-r-5"></i>View Profile</a></li>
                        <li class="list-group-item"><a href="#!"><i class="feather icon-settings m-r-5"></i>Settings</a></li>
                        <li class="list-group-item"><a href="{{ url('/admin/logout') }}"><i class="feather icon-log-out m-r-5"></i>Logout</a></li>
                    </ul>
                </div>
            </div>

            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Category </span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="layout-vertical.html" >create category</a></li>
                        <li><a href="layout-horizontal.html" >all category</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>UI Element</label>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Sub-category</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="bc_alert.html">Alert</a></li>
                        <li><a href="bc_button.html">Button</a></li>
                        <li><a href="bc_badges.html">Badges</a></li>

                    </ul>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Forms &amp; table</label>
                </li>
                <li class="nav-item">
                    <a href="form_elements.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Forms</span></a>
                </li>
                <li class="nav-item">
                    <a href="tbl_bootstrap.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-align-justify"></i></span><span class="pcoded-mtext">Bootstrap table</span></a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Chart & Maps</label>
                </li>
                <li class="nav-item">
                    <a href="chart-apex.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">Chart</span></a>
                </li>
                <li class="nav-item">
                    <a href="map-google.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-map"></i></span><span class="pcoded-mtext">Maps</span></a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Pages</label>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-mtext">Authentication</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="auth-signup.html" target="_blank">Sign up</a></li>
                        <li><a href="auth-signin.html" target="_blank">Sign in</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="sample-page.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Sample page</span></a></li>

            </ul>

        </div>
    </div>
</nav>
