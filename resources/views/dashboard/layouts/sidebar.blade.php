<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ route('dashboard') }}" class="text-center brand-link">
    <span class="brand-text font-weight-light"> Dashboard PPDB</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="#" class="nav-link {{ Request::is('dashboard*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-landmark"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('profil.index') }}" class="nav-link {{ Request::is('profil*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Profil</p>
              </a>
            </li>
            @can('isGuru')
            <li class="nav-item">
              <a href="{{ route('blog.index') }}" class="nav-link {{ Request::is('blog*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Agenda Sekolah</p>
              </a>
            </li>
            @endcan
          </ul>
        </li>
        @can('isOrangTua')
        <li class="nav-item">
          <a href="{{ route('pendaftaran-siswa.index') }}" class="nav-link {{ Request::is('pendaftaran-siswa*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-address-book"></i>
            <p>
              Pendaftaran Siswa
            </p>
          </a>
        </li>
        @endcan
        @can('isGuru')
        <li class="nav-item">
          <a href="{{ route('guru.index') }}" class="nav-link {{ Request::is('guru*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Daftar Guru
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('ppdb.index') }}" class="nav-link {{ Request::is('ppdb*') || Request::is('pendaftaran-siswa*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-clipboard-list"></i>
            <p>
              PPDB
            </p>
          </a>
        </li>
        @endcan
        <li class="nav-item">
          <form action="{{ route('logout') }}" class="nav-link" method="post" style="cursor:pointer;">
            @csrf
            <i class="nav-icon fas fa-door-closed"></i>
            <button type="submit"  style="all: unset;" >
              Logout
            </button>
          </form>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>