<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{URL::to('/admin')}}" class="brand-link">
      <img src="{{ asset('public/backend/template/admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo')}}" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Manager</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('public/backend/template/admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">SPA</a>
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
            <a href="{{URL::to('/admin/menu/statistical')}}" class="nav-link">
              {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
              <p>
                Thống kê
                {{-- <i class="right fas fa-angle-left"></i> --}}
              </p>
            </a>
            
          </li>
        </ul>


        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
              
              <p>
                Quản lí nhân sự
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{URL::to('/admin/menu/staff1')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thông tin nhân viên</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('/admin/menu/room')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách phòng</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('/admin/menu/position')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách chức vụ</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
              <p>
                Quản lí dịch vụ
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{URL::to('/admin/menu/service_type')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Loại dịch vụ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('/admin/menu/service')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách dịch vụ</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="{{URL::to('/admin/menu/booking')}}" class="nav-link">
              {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
              
              <p>
                Quản lí lịch hẹn
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{URL::to('/admin/menu/news')}}" class="nav-link">
              {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
              
              <p>
                Quản lí tin tức
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{URL::to('/admin/menu/feedback')}}" class="nav-link">
              {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
              
              <p>
                Quản lí phản hồi
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>