            <div class="user-profile">
              <div class="user-thumb">
                <img src="{{auth()->user()->photo ? asset(auth()->user()->photo) : asset('images/dashboard/user/demo-user.png')}}" class="img-responsive" alt="" style="width: 100%; height:100%; object-fit:cover">
                <div class="varified">
                  <i class="fas fa-check"></i>
                </div>
              </div>
              <div class="user-name">
                <h5><a href="#">{{auth()->user()->name}}</a></h5>
              </div>
              
              
              @if (!Request::is('agents/*'))
              <div class="info">
                <div class="profile-info">
                  <a href="/agent" class="button primary-bg">Edit Profil</a>
                </div>
                <div class="notification">
                  <a href="#" class="button primary-bg">Log Out</a>
                </div>
              </div>
              @endif
            </div>

            @if (!Request::is('agents/*'))    
            <div class="dashboard-sidenav">
              <ul class="dashboard-nav" id="dashboard-nav">
                <li class="navigation-item">
                  <a href="/agent/dashboard"><span class="ti-layers-alt"></span>Dashboard</a>
                </li>
                <li class="navigation-item dropdown">
                  <a href="#"><span class="ti-location-pin"></span>Properti Saya</a>
                  <ul class="dropdown-menu">
                    <li><a href="/agent/properties">Semua Properti</a></li>
                    <li><a href="/agent/properties/create">Tambah Properti</a></li>
                  </ul>
                </li>
                <li class="navigation-item">
                  <a href="dashboard-settings.html"><span class="ti-settings"></span>Setting</a>
                </li>
                <li class="navigation-item">
                  <a href="dashboard-my-profile.html"><span class="ti-user"></span>My Profile</a>
                </li>
              </ul>
            </div>
            @endif
