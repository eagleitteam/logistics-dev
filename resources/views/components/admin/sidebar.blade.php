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

                @canany(['wards.view'])
                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->routeIs('wards.index') || request()->routeIs('departments.index') || request()->routeIs('class.index') || request()->routeIs('bank.index') || request()->routeIs('financial_year.index') || request()->routeIs('allowance.index') || request()->routeIs('deduction.index') || request()->routeIs('loan.index') || request()->routeIs('designation.index') || request()->routeIs('leaveType.index') || request()->routeIs('pay_scale.index') || request()->routeIs('document.index') || request()->routeIs('users.index') || request()->routeIs('roles.index') || request()->routeIs('working-department.index') || request()->routeIs('castes.index') ? 'active' : 'collapsed' }}" href="#sidebarAuth1" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth1">
                        <i class="ri-account-circle-line"></i> <span data-key="t-authentication">Masters</span>
                    </a>
                    <div class="collapse menu-dropdown {{ request()->routeIs('wards.index') || request()->routeIs('departments.index') || request()->routeIs('class.index') || request()->routeIs('bank.index') || request()->routeIs('financial_year.index') || request()->routeIs('allowance.index') || request()->routeIs('deduction.index') || request()->routeIs('loan.index') || request()->routeIs('designation.index') || request()->routeIs('leaveType.index') || request()->routeIs('pay_scale.index') || request()->routeIs('document.index') || request()->routeIs('users.index') || request()->routeIs('roles.index') || request()->routeIs('working-department.index') || request()->routeIs('castes.index') ? 'show' : '' }}" id="sidebarAuth1">
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
                            <!-- @can('wards.view') -->
                                <li class="nav-item">
                                    <a href="{{ route('vehicle.index') }}" class="nav-link {{ request()->routeIs('vehicle.index') ? 'active' : '' }}" data-key="t-horizontal">Add Vehicle DataType</a>
                                </li>
                            <!-- @endcan -->

                            <!-- @can('wards.view') -->
                                <li class="nav-item">
                                <a href="{{ route('vendor.index') }}" class="nav-link {{ request()->routeIs('vendorAddForm.index') ? 'active' : '' }}" data-key="t-horizontal">Add Vendor</a>
                                </li>
                            <!-- @endcan -->
                            
                            
                            <!-- @can('wards.view') -->
                            <li class="nav-item">
                                <a href="{{ route('bank.index') }}" class="nav-link {{ request()->routeIs('bank.index') ? 'active' : '' }}" data-key="t-horizontal">Bank</a>
                                </li>
                            <!-- @endcan -->

                            
                            <!-- @can('wards.view') -->
                            <li class="nav-item">
                                <a href="{{ route('client.index') }}" class="nav-link {{ request()->routeIs('client.index') ? 'active' : '' }}" data-key="t-horizontal">client</a>
                                </li>
                            <!-- @endcan -->

                             <!-- @can('wards.view') -->
                             <li class="nav-item">
                                <a href="{{ route('contact.index') }}" class="nav-link {{ request()->routeIs('contact.index') ? 'active' : '' }}" data-key="t-horizontal">Contact List</a>
                                </li>
                            <!-- @endcan -->

                            <!-- @can('wards.view') -->
                            <li class="nav-item">
                                <a href="{{ route('driver.index') }}" class="nav-link {{ request()->routeIs('driver.index') ? 'active' : '' }}" data-key="t-horizontal">Driver</a>
                                </li>
                            <!-- @endcan -->
                               <!-- @can('wards.view') -->
                            <li class="nav-item">
                                <a href="{{ route('group.index') }}" class="nav-link {{ request()->routeIs('group.index') ? 'active' : '' }}" data-key="t-horizontal">Group Ledger</a>
                                </li>
                            <!-- @endcan -->
                                <!-- @can('wards.view') -->
                            <li class="nav-item">
                                <a href="{{ route('todo.index') }}" class="nav-link {{ request()->routeIs('todo.index') ? 'active' : '' }}" data-key="t-horizontal">ToDo List</a>
                                </li>
                                
                            <!-- @endcan -->
                                  <!-- @can('wards.view') -->
                            <li class="nav-item">
                                <a href="{{ route('tripmovment.index') }}" class="nav-link {{ request()->routeIs('tripmovment.index') ? 'active' : '' }}" data-key="t-horizontal">Trip Movment</a>
                                </li>
                            <!-- @endcan -->
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
