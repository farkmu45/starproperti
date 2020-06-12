<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile" style="background: url({{asset('admin/assets/images/background/user-info.jpg) no-repeat;')}}">
            <!-- User profile image -->
            <div class="profile-img"> <img src="{{auth()->user()->photo ? asset(auth()->user()->photo) : asset('images/dashboard/user/demo-user.png')}}"  alt="user" /> </div>
            <!-- User profile text-->
            <div class="profile-text"> <a href="#" role="button" aria-haspopup="true" aria-expanded="true">{{auth()->user()->name}}</a>
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
                        <li><a href="/admin/propertys">All Listings</a></li>
                        <li><a href="/admin/propertys/create">Add Listings</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-border-color"></i><span class="hide-menu">Article</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="/admin/articles">All Article</a></li>
                        <li><a href="/admin/articles/create">Add Article</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-book"></i><span class="hide-menu">Event</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="/admin/events">All Event</a></li>
                        <li><a href="/admin/events/create">Add Event</a></li>
                        <li><a href="/admin/events-categories/">Categories</a></li>
                        <li><a href="/admin/events-categories/create">Add Categories</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Users</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="/admin/users">All User</a></li>
                        <li><a href="/admin/users/create">Add User</a></li>
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