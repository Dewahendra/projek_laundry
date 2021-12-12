<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="http://127.0.0.1:8000/" class="nav-link active">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Page
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/pemilik_toko" class="nav-link active">
                  <i class="nav-icon fa fa-user"></i>
                  <p>Pemilik Toko</p>
                </router-link>
                </a>
              </li>
              <li class="nav-item">
                <router-link to="/pengguna" class="nav-link active">
                  <i class="nav-icon fa fa-users"></i>
                  <p>Pengguna</p>
                </router-link>
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