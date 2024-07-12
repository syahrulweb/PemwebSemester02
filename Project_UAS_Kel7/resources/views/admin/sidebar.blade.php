<aside class="main-sidebar bg-gray sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <img src="{{ asset('assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Pengajuan Cuti</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/img/syahrul.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                  <a href="{{ __('profile') }}" class="d-block">{{ strtoupper(Auth::user()->name) }}</a>
                  <span> {{ strtoupper(Auth::user()->role) }} </span>
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
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/admin/pegawai') }}" class="nav-link text-dark">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pegawai</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/divisi') }}" class="nav-link text-dark">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Divisi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/jatah') }}" class="nav-link text-dark">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Jatah Cuti</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/pengajuan') }}" class="nav-link text-dark">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pengajuan Cuti</p>
                            </a>
                        </li>
                        <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
