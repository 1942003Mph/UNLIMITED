 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="" class="brand-link">
    <img src="{{asset('adminassets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light"> UNLIMITED</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('adminassets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ auth()->user()->name }}</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="{{ route("admin.index") }}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
      
          <li class="nav-item ">
            <a href="" class="nav-link">
              <i class="fa-solid fa-bell-concierge"></i> 
              <p>
                services
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route("admin.services.index") }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All services</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route("admin.services.create") }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>create</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item ">
            <a href="" class="nav-link">
              <i class="fa-solid fa-bell-concierge"></i> 
              <p>
                sittings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route("admin.services.index") }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All services</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route("admin.services.create") }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>create</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item ">
            <a href="" class="nav-link">
              <i class="fa-solid fa-sliders"></i>
              <p>
                sliders
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route("admin.sliders.index") }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All sliders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route("admin.sliders.create") }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>create</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item ">
            <a href="" class="nav-link">
              <i class="fa-solid fa-briefcase"></i>
              <p>
                OurWork
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route("admin.ourwork.index") }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All OurWork</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route("admin.ourwork.create") }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>create</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item ">
            <a href="" class="nav-link">
              <i class="fa-solid fa-medal"></i>
              <p>
                featurs
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route("admin.featurs.index") }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All featurs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route("admin.featurs.create") }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>create</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item ">
            <a href="" class="nav-link">
              <i class="fa-solid fa-people-group"></i>
              <p>
                team
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route("admin.teams.index") }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All teams</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route("admin.teams.create") }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>create</p>
                </a>
              </li>
            </ul>
          </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
