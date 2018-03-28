<nav class="side-navbar">
  <div class="side-navbar-wrapper">
    <!-- Sidebar Header    -->
    <div class="sidenav-header d-flex align-items-center justify-content-center">
      <!-- User Info-->
      <div class="sidenav-header-inner text-center">
        <img src="{{ asset('assets-admin/img/avatar-1.jpg') }}" alt="person" class="img-fluid rounded-circle">
        <h2 class="h5">{{ Auth::guard('admin')->user()->name }}</h2><span>ADMIN</span>
      </div>
      <!-- Small Brand information, appears on minimized sidebar-->
      <div class="sidenav-header-logo"><a href="{{ route('admin.home') }}" class="brand-small text-center"> <strong class=text-white>B</strong><strong class="text-white">C</strong></a></div>
    </div>
    <!-- Sidebar Navigation Menus-->
    <div class="main-menu">
      <h5 class="sidenav-heading">Menu</h5>
      <ul id="side-main-menu" class="side-menu list-unstyled">                  
        <li><a href="{{ route('admin.home') }}"> <i class="icon-home"></i>Inicio</a></li>
      </ul>
    </div>
  </div>
</nav>