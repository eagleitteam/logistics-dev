<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('admin/images/logo_sm.png') }}" alt="" height="50" />
            </span>
            <span class="logo-lg">
                <img src="{{ asset('admin/images/logo_lg.png') }}" alt="" height="50" />
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('admin/images/logo_sm.png') }}" alt="" height="50" />
            </span>
            <span class="logo-lg">
                <img src="{{ asset('admin/images/logo_lg.png') }}" alt="" height="50" />
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

                @canany(['users.view', 'roles.view','vehicles.view','vendors.view','clients.view','drivers.view','stateNameWithCode.view'])
                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->routeIs('users.index') || request()->routeIs('roles.index') || request()->routeIs('vehicles.index') || request()->routeIs('vendors.index') || request()->routeIs('clients.index') || request()->routeIs('drivers.index') ||  request()->routeIs('stateNameWithCode.index') ? 'active' : 'collapsed' }}" href="#sidebarAuth1" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth1">
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
                            <li class="nav-item">
                                <a href="{{ route('trip-movement.create') }}" class="nav-link {{ request()->routeIs('trip-movement.create') ? 'active' : '' }}" data-key="t-horizontal">Add Trip Movement Entry</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('trip-movement.index') }}" class="nav-link {{ request()->routeIs('trip-movement.index') ? 'active' : '' }}" data-key="t-horizontal">Trip Movement List</a>
                            </li>                               
                            @can('StateNameWithCode.view')
                            <li class="nav-item">
                                <a href="{{ route('state.index') }}" class="nav-link {{ request()->routeIs('StateNameWithCode.index') ? 'active' : '' }}" data-key="t-horizontal">State Name With GST Code</a>
                            </li>
                            @endcan
                            @can('Gstrate.view')
                            <li class="nav-item">
                                <a href="{{ route('Gstrate.index') }}" class="nav-link {{ request()->routeIs('Gstrate.index') ? 'active' : '' }}" data-key="t-horizontal">GST Rate/Code Master</a>
                            </li>
                            @endcan
                            @can('Fuel.view')
                            <li class="nav-item">
                                <a href="{{ route('Fuel.index') }}" class="nav-link {{ request()->routeIs('Fuel.index') ? 'active' : '' }}" data-key="t-horizontal">Advanced Fuel Management</a>
                            </li>
                            @endcan
                            @can('Yearmaster.view')
                            <li class="nav-item">
                                <a href="{{ route('Yearmaster.index') }}" class="nav-link {{ request()->routeIs('Yearmaster.index') ? 'active' : '' }}" data-key="t-horizontal">Year Master</a>
                            </li>
                            @endcan
                            @can('BankRegister.view')
                            <li class="nav-item">
                                <a href="{{ route('Bank-Register.index') }}" class="nav-link {{ request()->routeIs('Bank-Register.index') ? 'active' : '' }}" data-key="t-horizontal">Add Bank Master</a>
                            </li>
                            @endcan
                            @can('Vouchermaster.view')
                            <li class="nav-item">
                                <a href="{{ route('Voucher-Master.index') }}" class="nav-link {{ request()->routeIs('Voucher-Master.index') ? 'active' : '' }}" data-key="t-horizontal">Voucher's Master</a>
                            </li>
                            @endcan
                            @can('Attendancemanagement.view')
                            <li class="nav-item">
                                <a href="{{ route('Attendance-Management.index') }}" class="nav-link {{ request()->routeIs('Attendance-Management.index') ? 'active' : '' }}" data-key="t-horizontal">Attendance Management</a>
                            </li>
                            @endcan
                            @can('Companyprofile.view')
                            <li class="nav-item">
                                <a href="{{ route('Company-Profile.index') }}" class="nav-link {{ request()->routeIs('Company-Profile.index') ? 'active' : '' }}" data-key="t-horizontal">Company Profile Setting</a>
                            </li>
                            @endcan
                            @can('ContactList.view')
                            <li class="nav-item">
                                <a href="{{ route('Contact-List.index') }}" class="nav-link {{ request()->routeIs('Contact-List.index') ? 'active' : '' }}" data-key="t-horizontal">Conatct List</a>
                            </li>
                            @endcan
                            @can('Employeemanagement.view')
                            <li class="nav-item">
                                <a href="{{ route('Employee-Management.index') }}" class="nav-link {{ request()->routeIs('Employee-Management.index') ? 'active' : '' }}" data-key="t-horizontal">Employee Management</a>
                            </li>
                            @endcan
                            @can('Groupandledgermaster.view')
                            <li class="nav-item">
                                <a href="{{ route('Ledger-Master.index') }}" class="nav-link {{ request()->routeIs('Ledger-Master.index') ? 'active' : '' }}" data-key="t-horizontal">Group & Ledger Master</a>
                            </li>
                            @endcan
                            @can('Payrollpaymentmanagement.view')
                            <li class="nav-item">
                                <a href="{{ route('Payroll-Payment-Management.index') }}" class="nav-link {{ request()->routeIs('Payroll-Payment-Management.index') ? 'active' : '' }}" data-key="t-horizontal">Payroll Payment Management</a>
                            </li>
                            @endcan
                            @can('Payrollslip.view')
                            <li class="nav-item">
                                <a href="{{ route('Payroll-Slip.index') }}" class="nav-link {{ request()->routeIs('Payroll-Slip.index') ? 'active' : '' }}" data-key="t-horizontal">Salary Procee & Slip Management</a>
                            </li>
                            @endcan
                            @can('Profilesetting.view')
                            <li class="nav-item">
                                <a href="{{ route('Profile-Setting.index') }}" class="nav-link {{ request()->routeIs('Profile-Setting.index') ? 'active' : '' }}" data-key="t-horizontal">Profile Setting</a>
                            </li>
                            @endcan
                            @can('Salaryreport.view')
                            <li class="nav-item">
                                <a href="{{ route('Salary-Report.index') }}" class="nav-link {{ request()->routeIs('Salary-Report.index') ? 'active' : '' }}" data-key="t-horizontal">Salary Report</a>
                            </li>
                            @endcan
                            @can('TaxOnsalaryreport.view')
                            <li class="nav-item">
                                <a href="{{ route('Salary-on-Tax-Report.index') }}" class="nav-link {{ request()->routeIs('Salary-on-Tax-Report.index') ? 'active' : '' }}" data-key="t-horizontal">Salary On Tax Report</a>
                            </li>
                            @endcan
                            @can('VendorHasVehicle.view')
                            <li class="nav-item">
                                <a href="{{ route('Link-Vehical-With-Vender.index') }}" class="nav-link {{ request()->routeIs('Link-Vehical-With-Vender.index') ? 'active' : '' }}" data-key="t-horizontal">Link Vehical With Vender</a>
                            </li>
                            @endcan
                            @can('CashMemo.view')
                            <li class="nav-item">
                                <a href="{{ route('Cash-Memo.index') }}" class="nav-link {{ request()->routeIs('Cash-Memo.index') ? 'active' : '' }}" data-key="t-horizontal">Cash Memo</a>
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
