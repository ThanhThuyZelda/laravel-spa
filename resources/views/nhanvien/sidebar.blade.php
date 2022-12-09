<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{URL::to('/admin')}}" class="brand-link">
      <img src="{{ asset('public/backend/template/admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo')}}" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Nhân viên</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('public/backend/template/admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">NHÂN VIÊN</a>
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
          
          <li class="nav-item menu-open">
            <a href="{{URL::to('/nhanvien/lichhen')}}" class="nav-link">
              {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
              
              <p>
                Quản lí lịch hẹn
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{URL::to('/nhanvien/tuvan')}}" class="nav-link">
              {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
              
              <p>
                Quản lí tư vấn
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{URL::to('/nhanvien/thanhtoan')}}" class="nav-link">
              {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
              
              <p>
                Quản lí thanh toán
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>