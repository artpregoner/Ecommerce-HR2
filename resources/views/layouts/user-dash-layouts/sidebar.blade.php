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
                        <a class="nav-link" href="{{url('maindash')}}" aria-expanded="false" ><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
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
                    <!--<li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Tables</a>
                        <div id="submenu-5" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="general-table.html">General Tables</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="data-tables.html">Data Tables</a>
                                </li>
                            </ul>
                        </div>
                    </li>-->
                        <!-- ============================================================== -->
                        <!-- Helpdesk -->
                        <!-- ============================================================== -->
                    <li class="nav-divider">
                        Helpdesk
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('helpdesk/ticket')}}" aria-expanded="false"><i class="fas fa-fw  fa-envelope"></i>Ticket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('helpdesk/ticket-inbox')}}" aria-expanded="false" ><i class="fas fa-inbox"></i>Inbox <span class="badge badge-secondary">New</span></a>
                        <!--<div id="submenu-7" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="inbox.html">Inbox</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="email-details.html">Email Detail</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="email-compose.html">Email Compose</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="message-chat.html">Message Chat</a>
                                </li>
                            </ul>
                        </div>-->
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-8" aria-controls="submenu-8"><i class="fas fa-fw fa-columns"></i>Icons</a>
                        <div id="submenu-8" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="icon-fontawesome.html">FontAwesome Icons</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="icon-material.html">Material Icons</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="icon-simple-lineicon.html">Simpleline Icon</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="icon-themify.html">Themify Icon</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="icon-flag.html">Flag Icons</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="icon-weather.html">Weather Icon</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-9" aria-controls="submenu-9"><i class="fas fa-fw fa-map-marker-alt"></i>Maps</a>
                        <div id="submenu-9" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="map-google.html">Google Maps</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="map-vector.html">Vector Maps</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fas fa-f fa-folder"></i>Menu Level</a>
                        <div id="submenu-10" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Level 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-11" aria-controls="submenu-11">Level 2</a>
                                    <div id="submenu-11" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Level 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Level 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Level 3</a>
                                </li>
                            </ul>
                        </div>
                    </li>-->
                </ul>
            </div>
        </nav>
    </div>
</div>