<header class="header">
  <nav class="navbar">
    <div class="container-fluid">
      <div class="navbar-holder d-flex align-items-center justify-content-between">
        <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="fas fa-bars"> </i></a>
          <a href="{{ route('admin.home') }}" class="navbar-brand">
            <div class="brand-text d-none d-md-inline-block"><strong class="text-primary">Bluecommerce</strong></div></a></div>
        <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
          <!-- Notifications dropdown-->
          <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell"></i><span class="badge badge-warning">1</span></a>
            <ul aria-labelledby="notifications" class="dropdown-menu">
              <li>
                <a rel="nofollow" href="#" class="dropdown-item"> 
                  <div class="notification d-flex justify-content-between">
                    <div class="notification-content"><i class="fa fa-envelope"></i>You have 6 new messages </div>
                    <div class="notification-time"><small>4 minutes ago</small></div>
                  </div>
                </a>
              </li>
            </ul>
          </li>
          <!-- Messages dropdown-->
          <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope"></i><span class="badge badge-info">1</span></a>
            <ul aria-labelledby="notifications" class="dropdown-menu">
              <li>
                <a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                  <div class="msg-profile"> <img src="{{ asset('avatars/default_avatar.png') }}" alt="..." class="img-fluid rounded-circle"></div>
                  <div class="msg-body">
                    <h3 class="h5">Jason Doe</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                  </div>
                </a>
                </li>
              <li>
            </ul>
          </li>
          <!-- Log out-->
          <li class="nav-item">
            <a href="{!! url('/admin/logout') !!}" class="nav-link logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <span class="d-none d-sm-inline-block">Salir </span><i class="fas fa-sign-out-alt"></i>
            </a>
            <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>