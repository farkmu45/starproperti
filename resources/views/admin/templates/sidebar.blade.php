<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile" style="background: url({{asset('admin/assets/images/background/user-info.jpg) no-repeat;')}}">
            <!-- User profile image -->
            <div class="profile-img"> <img src="{{asset('admin/assets/images/users/profile.png')}}"  alt="user" /> </div>
            <!-- User profile text-->
            <div class="profile-text"> <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Markarn Doe</a>
                <div class="dropdown-menu animated flipInY">
                    <a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                    <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                    <div class="dropdown-divider"></div> <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                </div>
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="/admin/dashboard">Home</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-camera-burst"></i><span class="hide-menu">Promo Slider</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="/admin/slides">All Slider</a></li>
                        <li><a href="/admin/slides/create">Add Slider</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-image"></i><span class="hide-menu">Promo Popup</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="/admin/popups">All Popup</a></li>
                        <li><a href="/admin/popups/create">Add Popup</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-home-map-marker"></i><span class="hide-menu">Properties</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="/admin/poperties">All Properties</a></li>
                        <li><a href="/admin/poperties/create">Add Properties</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-border-color"></i><span class="hide-menu">Blog</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="/admin/blog">All Blog</a></li>
                        <li><a href="/admin/blog/create">Add Blog</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-book"></i><span class="hide-menu">Event</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="/admin/event">All Event</a></li>
                        <li><a href="/admin/event/create">Add Event</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Users</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="/admin/user">All User</a></li>
                        <li><a href="/admin/user/create">Add User</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer">
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
    </div>
    <!-- End Bottom points-->
</aside>