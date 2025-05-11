<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('admin/images/logo.png') }}" alt="" height="50" />
            </span>
            <span class="logo-lg">
                <img src="{{ asset('admin/images/logo.png') }}" alt="" height="50" />
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('admin/images/logo.png') }}" alt="" height="50" />
            </span>
            <span class="logo-lg">
                <img src="{{ asset('admin/images/logo.png') }}" alt="" height="50" />
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu"></div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title">
                    <span data-key="t-menu">Menu</span>
                </li>

                @canany(['dashboard.view'])
                <li class="nav-item">
                    <a class="nav-link menu-link  {{ request()->routeIs('dashboard') ? 'active' : 'collapsed' }}" href="{{ route('dashboard') }}">
                        <i class="ri-dashboard-2-line"></i>
                        <span data-key="t-dashboards">Dashboard</span>
                    </a>
                </li>
                @endcan

                @canany(['users.view', 'roles.view','vehicles.view','vendors.view','clients.view','drivers.view'])
                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->routeIs('users.index') || request()->routeIs('roles.index') || request()->routeIs('vehicles.index') || request()->routeIs('vendors.index') || request()->routeIs('clients.index') || request()->routeIs('drivers.index') ? 'active' : 'collapsed' }}" href="#sidebarAuth1" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth1">
                        <i class="ri-account-circle-line"></i> <span data-key="t-authentication">Masters</span>
                    </a>
                    <div class="collapse menu-dropdown {{ request()->routeIs('users.index') || request()->routeIs('roles.index') || request()->routeIs('vehicles.index') || request()->routeIs('vendors.index') || request()->routeIs('clients.index') || request()->routeIs('drivers.index') ? 'show' : '' }}" id="sidebarAuth1">
                        <ul class="nav nav-sm flex-column">
                            @canany(['users.view', 'roles.view'])
                            <li class="nav-item">
                                <a href="#sidebarSignUp" class="nav-link {{ request()->routeIs('users.index') || request()->routeIs('roles.index') ? 'active' : '' }}" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignUp" data-key="t-signup"> User Management
                                </a>
                                <div class="collapse menu-dropdown {{ request()->routeIs('users.index') || request()->routeIs('roles.index') ? 'show' : '' }}" id="sidebarSignUp">
                                    <ul class="nav nav-sm flex-column">
                                        @can('users.view')
                                            <li class="nav-item">
                                                <a href="{{ route('users.index') }}" class="nav-link {{ request()->routeIs('users.index') ? 'active' : '' }}" data-key="t-horizontal">Users</a>
                                            </li>
                                        @endcan
                                        @can('roles.view')
                                            <li class="nav-item">
                                                <a href="{{ route('roles.index') }}" class="nav-link {{ request()->routeIs('roles.index') ? 'active' : '' }}" data-key="t-horizontal">Roles</a>
                                            </li>
                                        @endcan
                                    </ul>
                                </div>
                            </li>
                            @endcanany
                            @can('vehicles.view')
                                <li class="nav-item">
                                    <a href="{{ route('vehicles.index') }}" class="nav-link {{ request()->routeIs('vehicles.index') ? 'active' : '' }}" data-key="t-horizontal">Vehicles</a>
                                </li>
                            @endcan
                            @can('vendors.view')
                            <li class="nav-item">
                                <a href="{{ route('vendors.index') }}" class="nav-link {{ request()->routeIs('vendors.index') ? 'active' : '' }}" data-key="t-horizontal">Vendors</a>
                            </li>
                            @endcan
                            @can('clients.view')
                            <li class="nav-item">
                                <a href="{{ route('clients.index') }}" class="nav-link {{ request()->routeIs('clients.index') ? 'active' : '' }}" data-key="t-horizontal">Clients</a>
                            </li>
                            @endcan
                            @can('drivers.view')
                            <li class="nav-item">
                                <a href="{{ route('drivers.index') }}" class="nav-link {{ request()->routeIs('drivers.index') ? 'active' : '' }}" data-key="t-horizontal">Drivers</a>
                            </li>
                            @endcan
                            @can('selfVehicle.view')
                            <li class="nav-item">
                                <a href="{{ route('selfVehicle.index') }}" class="nav-link {{ request()->routeIs('selfVehicle.index') ? 'active' : '' }}" data-key="t-horizontal">Self Vehicle</a>
                            </li>
                            @endcan
                        </ul>
                    </div>
                </li>
                @endcanany


            </ul>
        </div>
    </div>

    <div class="sidebar-background"></div>
</div>


<div class="vertical-overlay"></div>
