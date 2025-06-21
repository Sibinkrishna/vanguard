<nav class="nxl-navigation">
    <div class="navbar-wrapper">
        <div class="m-header d-flex justify-content-center align-content-center align-items-center">
            <a href="" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <div class="d-flex flex-column align-items-center w-100">
                    <h2 class="text-uppercase mt-2">Vanguard</h2>
                    {{-- <img src="{{ asset('assets/images/logo/Logo.png') }}" alt="" class="logo logo-lg mb-1" style="width:70%;" />
                    <img src="{{ asset('assets/images/logo/Logo.png') }}" alt="" class="logo logo-sm" style="width:70%;" /> --}}
                </div>
            </a>
        </div>
        <div class="navbar-content">
            <ul class="nxl-navbar">
                <li class="nxl-item nxl-caption">
                    <label>Navigation</label>
                </li>

                <!-- Dashboard -->
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{ route('admin.dashboard') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-airplay"></i></span>
                        <span class="nxl-mtext">Dashboard</span>
                    </a>
                </li>

                <!-- Admin Management (Only for Super Admin) -->
                @role('super_admin')
                <li class="nxl-item nxl-hasmenu {{ request()->routeIs('admin.register.*') ? 'nxl-trigger' : '' }}">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-user"></i></span>
                        <span class="nxl-mtext">Admin Management</span>
                        <span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item {{ request()->routeIs('admin.register') ? 'active' : '' }}"><a class="nxl-link" href="{{ route('admin.register') }}">Admin Registration</a></li>
                        <li class="nxl-item {{ request()->routeIs('admin.register.list') || request()->routeIs('admin.update.permissions') || request()->routeIs('admin.edit') ? 'active' : '' }}"><a class="nxl-link" href="{{ route('admin.register.list') }}">Admin List</a></li>
                    </ul>
                </li>
                @endrole
                @can('view customer')
                <li class="nxl-item nxl-hasmenu {{ request()->routeIs('admin.customers.*') ? 'nxl-trigger' : '' }}">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-users"></i></span>
                        <span class="nxl-mtext">Customer Management</span>
                        <span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item {{ request()->routeIs('admin.customers.*') ? 'active' : '' }}"><a class="nxl-link" href="{{ route('admin.customers.index') }}">Customer List</a></li>
                    </ul>
                </li>
                @endcan
                @can('view product')
                <li class="nxl-item nxl-hasmenu {{ request()->routeIs('admin.products.*') ? 'nxl-trigger' : '' }}">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-layers    "></i></span>
                        <span class="nxl-mtext">Product Management</span>
                        <span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item {{ request()->routeIs('admin.products.*') ? 'active' : '' }}"><a class="nxl-link" href="{{ route('admin.products.index') }}">Products List</a></li>
                    </ul>
                </li>
                @endcan
                {{-- <li class="nxl-item nxl-hasmenu {{ request()->routeIs('admin.programs.*') ? 'nxl-trigger' : '' }}">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-layers"></i></span>
                        <span class="nxl-mtext">Program Management</span>
                        <span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item {{ request()->routeIs('admin.programs.*') ? 'active' : '' }}">
                            <a class="nxl-link" href="{{ route('admin.programs.index') }}">Program List</a>
                        </li>
                    </ul>
                </li>
                <li class="nxl-item nxl-hasmenu {{ request()->routeIs('admin.gallery.*') ? 'nxl-trigger' : '' }}">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-image"></i></span>
                        <span class="nxl-mtext">Gallery Management</span>
                        <span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item {{ request()->routeIs('admin.gallery.*') ? 'active' : '' }}">
                            <a class="nxl-link" href="{{ route('admin.gallery.index') }}">Gallery List</a>
                        </li>
                    </ul>
                </li>
                <li class="nxl-item nxl-hasmenu {{ request()->routeIs('admin.governing_body.*') ? 'nxl-trigger' : '' }}">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-users"></i></span>
                        <span class="nxl-mtext">Govening Body Manage</span>
                        <span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item {{ request()->routeIs('admin.governing_body.*') ? 'active' : '' }}">
                            <a class="nxl-link" href="{{ route('admin.governing_body.index') }}">Members List</a>
                        </li>
                    </ul>
                </li>
                <li class="nxl-item nxl-hasmenu {{ request()->routeIs('admin.page-manage.*') ? 'nxl-trigger' : '' }}">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-file-text"></i></span>
                        <span class="nxl-mtext">Page Manage</span>
                        <span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item {{ request()->routeIs('admin.page-manage.*') ? 'active' : '' }}">
                            <a class="nxl-link" href="{{ route('admin.page-manage.index') }}">Page List</a>
                        </li>
                    </ul>
                </li>
                <li class="nxl-item nxl-hasmenu {{ request()->routeIs('admin.vlounteer.*') ? 'nxl-trigger' : '' }}">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-file-text"></i></span>
                        <span class="nxl-mtext">Volunteers Enquiry</span>
                        <span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item {{ request()->routeIs('admin.vlounteer.*') ? 'active' : '' }}">
                            <a class="nxl-link" href="{{ route('admin.vlounteer.index') }}">Volunteers Enquiry List</a>
                        </li>
                    </ul>
                </li> --}}

        </div>

    </div>
</nav>
