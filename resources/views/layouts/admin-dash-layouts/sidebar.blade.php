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
                        <a class="nav-link" href="{{url('admin/maindash')}}" aria-expanded="false" ><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                    </li>
                        <!-- ============================================================== -->
                        <!-- Emloyee Self-service -->
                        <!-- ============================================================== -->
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="far fa-user-circle"></i>Employee Self-Service</a>
                        <div id="submenu-2" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Employee Details<span class="badge badge-secondary">New</span></a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="general.html">Request </a>
                                </li> --}}
                            </ul>
                        </div>
                    </li>
                        <!-- ============================================================== -->
                        <!-- Workforce Analytics -->
                        <!-- ============================================================== -->
                    <li class="nav-item">
                        <a class="nav-link " href="{{url('workforce-analytics/workforce-analytics')}}" aria-expanded="false"><i class="fas fa-fw fa-chart-bar"></i>Workforce Analytics</a>
                    </li>
                        <!-- ============================================================== -->
                        <!-- Employee Engagement -->
                        <!-- ============================================================== -->
                    <li class="nav-item ">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fas fa-users"></i>Employee Engagement</a>
                        <div id="submenu-4" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="form-elements.html">Recognition and Rewards Programs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="form-validation.html">Engagement Metrics Overview</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                        <!-- ============================================================== -->
                        <!-- Helpdesk -->
                        <!-- ============================================================== -->
                    <li class="nav-divider">
                        Helpdesk
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('admin/helpdesk/tickets')}}" aria-expanded="false"><i class="fas fa-fw  fa-envelope"></i>Ticket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('admin/helpdesk/tickets')}}" aria-expanded="false" ><i class="fas fa-inbox"></i>Inbox <span class="badge badge-secondary">New</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>