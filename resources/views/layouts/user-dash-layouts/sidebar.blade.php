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
                        Employee Self-Service
                    </li>
                        <!-- ============================================================== -->
                        <!-- Dashboard --> 
                        <!-- ============================================================== -->
                    <li class="nav-item ">
                        <a class="nav-link {{ request()->is('user/maindash') ? 'active' : '' }}" href="{{url('user/maindash')}}" aria-expanded="false" ><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                    </li>
                        <!-- ============================================================== -->
                        <!-- Emloyee Self-service -->
                        <!-- ============================================================== -->
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="far fa-user-circle"></i>Employee Self-Service</a>
                        <div id="submenu-2" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('user/employee-selfservice/leave-request') ? 'active' : '' }}" href="{{url('user/employee-selfservice/leave-request')}}">Request Leave</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="general.html">Leave Management </a>
                                </li> --}}
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('user/schedule') ? 'active' : '' }}" href="{{url('user/schedule')}}">My Schedule </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                        <!-- ============================================================== -->
                        <!-- Dashboard --> 
                        <!-- ============================================================== -->
                    <div style="border-top: 1px solid #ddd; margin: 10px 0;"></div>
                    <li class="nav-divider">Claims & Reimbursement</li>
                    <li class="nav-item ">
                        <a class="nav-link {{ request()->is('user/claims&reimbursement/requests') ? 'active' : '' }}" href="{{url('user/claims&reimbursement/requests')}}" aria-expanded="false" ><i class="fas fa-dollar-sign"></i>My Request<span class="badge badge-success">6</span></a>
                    </li>
                        <!-- ============================================================== -->
                        <!-- Helpdesk -->
                        <!-- ============================================================== -->
                    <div style="border-top: 1px solid #ddd; margin: 10px 0;"></div>
                    <li class="nav-divider">Helpdesk</li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('user/helpdesk/tickets') ? 'active' : '' }}" href="{{url('user/helpdesk/tickets')}}" aria-expanded="false"><i class="fas fa-fw  fa-envelope"></i>My Ticket</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{url('helpdesk/ticket-inbox')}}" aria-expanded="false" ><i class="fas fa-inbox"></i>Inbox <span class="badge badge-secondary">New</span></a>
                    </li> --}}
                </ul>
            </div>
        </nav>
    </div>
</div>