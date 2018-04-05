<nav class="side-navbar">
  <div class="side-navbar-wrapper">
    <!-- Sidebar Header    -->
    <div class="sidenav-header d-flex align-items-center justify-content-center">
      <!-- User Info-->
      <div class="sidenav-header-inner text-center">
        <img src="{{ asset('avatars/default_avatar.png') }}" alt="person" class="img-fluid rounded-circle">
        <h2 class="h5">{{ Auth::guard('admin')->user()->name }}</h2><span>ADMIN</span>
      </div>
      <!-- Small Brand information, appears on minimized sidebar-->
      <div class="sidenav-header-logo"><a href="{{ route('admin.home') }}" class="brand-small text-center"> <strong class=text-white>B</strong><strong class="text-white">C</strong></a></div>
    </div>
    <!-- Sidebar Navigation Menus-->
    <div class="main-menu">
      <h5 class="sidenav-heading">Menu</h5>
      <ul id="side-main-menu" class="side-menu list-unstyled">                  
        <li class="{{ Request::is('admin') ? 'active' : '' }}"><a href="{{ route('admin.home') }}"> <i class="fas fa-home"></i> Inicio</a></li>
        <li class="{{ Request::is('admin/servicios*') ? 'active' : '' }}"><a href="{{ route('admin.services') }}"> <i class="fas fa-list"></i> Servicios</a></li>

        <li class="{{ Request::is('admin/clientes') ? 'active' : '' }}">
          <a href="#CustomersDropdown" aria-expanded="false" data-toggle="collapse" class="collapsed">
            <i class="fas fa-users"></i> Clientes
          </a>
          <ul id="CustomersDropdown" class="list-unstyled collapse {{ Request::is('admin/clientes*') ? 'show' : '' }}">
            <li><a href="{{ route('admin.customers') }}"> Administrar</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>