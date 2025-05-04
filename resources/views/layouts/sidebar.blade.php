        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('welcome') }}">
                <div class="sidebar-brand-icon ">
                    <i class="fas fa-book"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Engitech <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ $menuDs ?? '' }}">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>


            @if (auth()->user()->Jabatan=='Admin')
                <!-- Heading -->
                <div class="sidebar-heading">
                    Admin
                </div>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Nav Item - Charts -->
                <li class="nav-item {{ $menuAdminUser ?? '' }}">
                    <a class="nav-link" href="{{ route('user') }}">
                        <i class="fas fa-fw fa-user"></i>
                        <span>Data Pengguna</span></a>
                </li>

                <!-- Nav Item - Tables -->
                <li class="nav-item {{ $menuAdminTugas ?? '' }}">
                    <a class="nav-link" href="{{ route('tugas') }}">
                        <i class="fas fa-fw fa-tasks"></i>
                        <span>Data Tugas</span></a>
                </li>
                
            @else
                <!-- Heading -->
            <div class="sidebar-heading">
                Client
            </div>
            <!-- Divider -->
            <hr class="sidebar-divider">

            {{-- -- Nav Item - Tables --> --}}
            <li class="nav-item {{ $menuClientTugas ?? '' }}">
                <a class="nav-link" href="{{ route('tugas') }}">
                    <i class="fas fa-fw fa-tasks"></i>
                    <span>Tugas</span></a>
            </li>

            @endif

            
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->