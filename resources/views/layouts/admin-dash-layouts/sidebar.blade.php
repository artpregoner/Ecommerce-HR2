<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                        <!-- ============================================================== -->
                        <!-- Dashboard --> 
                        <!-- ============================================================== -->
                    <li class="nav-item ">
                        <a class="nav-link {{ request()->is('admin/maindash') ? 'active' : '' }}" href="{{url('admin/maindash')}}" aria-expanded="false" ><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                    </li>
                        <!-- ============================================================== -->
                        <!-- Workforce Analytics -->
                        <!-- ============================================================== -->
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('workforce/*') ? 'active' : '' }}" href="#" data-toggle="collapse" data-target="#submenu-1" aria-expanded="false"><i class="fas fa-fw fa-chart-bar" aria-controls="submenu-1"></i>Workforce Analytics</a>
                        <div id="submenu-1" class="collapse submenu {{ request()->is('workforce*') ? 'show' : '' }}" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('workforce/skill-gap') ? 'active' : '' }}" href="{{url('workforce/skill-gap')}}">Skill Analysis Tool</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('workforce/employee-metrics') ? 'active' : '' }}" href="{{url('workforce/employee-metrics')}}">Employee Metrics<span class="badge badge-secondary">New</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('workforce/turnover-hiring') ? 'active' : '' }}" href="{{url('workforce/turnover-hiring')}}">Turnover & Hiring Needs</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                        <!-- ============================================================== -->
                        <!-- Emloyee Self-service -->
                        <!-- ============================================================== -->
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('self-service/*') || request()->is('employee-selfservice/*') ? 'active' : '' }}" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2">
                            <i class="far fa-user-circle"></i>Employee Self-Service
                        </a>
                        <div id="submenu-2" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('self-service/employee-profile') ? 'active' : '' }}" href="{{ url('self-service/employee-profile') }}">Employee Profiles Management</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('employee-selfservice/leave-requests') ? 'active' : '' }}" href="{{ url('employee-selfservice/leave-requests') }}">Employee Leave Applications</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                        <!-- ============================================================== -->
                        <!-- Employee Engagement -->
                        <!-- ============================================================== -->
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('employee-engagement/*') ? 'active' : '' }}" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4">
                                <i class="fas fa-users"></i>Employee Engagement
                            </a>
                            <div id="submenu-4" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('admin.employee-engagement.recognition') ? 'active' : '' }}" href="{{ route('admin.employee-engagement.recognition') }}">
                                            Recognition and Rewards Programs
                                        </a>
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a class="nav-link" href="form-validation.html">Engagement Metrics Overview</a>
                                    </li> --}}
                                </ul>
                            </div>
                        </li>
                        
                    <div style="border-top: 1px solid #ddd; margin: 10px 0;"></div>
                    <li class="nav-divider">
                        Claims & Reimbursement
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link {{ request()->Is('claims&reimbursement/requests') ? 'active' : '' }}" href="{{url('claims&reimbursement/requests')}}" aria-expanded="false" ><i class="fas fa-dollar-sign"></i>Claims & Reimbursement<span class="badge badge-success">6</span></a>
                    </li>
                    <div style="border-top: 1px solid #ddd; margin: 10px 0;"></div>
                        <!-- ============================================================== -->
                        <!-- Helpdesk -->
                        <!-- ============================================================== -->
                    <li class="nav-divider">
                        Helpdesk
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{url('admin/helpdesk/tickets')}}" aria-expanded="false"><i class="fas fa-fw  fa-envelope"></i>Ticket</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link {{ request()->Is('admin/helpdesk/tickets') ? 'active' : '' }}" href="{{url('admin/helpdesk/tickets')}}" aria-expanded="false" ><i class="fas fa-inbox"></i>Inbox <span class="badge badge-secondary">New</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>