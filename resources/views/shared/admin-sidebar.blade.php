 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary">
    <!-- Brand Logo -->
    <a href="{{url('admin/dashboard')}}" class="brand-link">
      <span class="brand-text font-weight-light">Baby Care</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
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
            <a href="{{url('admin/dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{action('DayCareController@index')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Book Request</p>
            </a>
        </li>
        <li class="nav-item">
          <a href="{{action('DayCareController@approved')}}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Book Approved</p>
          </a>
      </li>
               <li class="nav-item">
                  <a href="{{action('PackageController@index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Packages</p>
                  </a>
                </li>
                
              <li class="nav-item">
                  <a href="{{action('EmployeeController@index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Employee</p>
                  </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/review-list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Review</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('user/list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('/')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>visit site</p>
                </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>