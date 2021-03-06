
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('dashboard/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Pemilihan BEM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img 
            @if (\Auth::user()->photo)
              src="{{ \Auth::user()->photo}}" style="height:40px; witdh:50px;"
            @else
              src="{{asset('dashboard/dist/img/user8-128x128.jpg') }}"            
            @endif
          class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ \Auth::user()->name}}</a>
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
                <a href="{{ url('beranda')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Beranda</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('pemilihan')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pemilihan</p>
                </a>
              </li>
              @if(\Auth::user()->role == "admin")
              <li class="nav-item">
                <a href="{{ url('mahasiswa')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('kandidat')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kandidat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('periode')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tanggal Periode</p>
                </a>
              </li>
              @endif

          <li class="nav-item">
            <a href="{{ url('keluar')}}" class="nav-link">
              <i class="nav-icon fas fa-key"></i>
              <p>
                Logout
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>

        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>