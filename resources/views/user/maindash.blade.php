@extends('layouts.app')
@section('title')Dashboard @endsection
@section('header')Dashboard @endsection <!--pageheader-->
@section('active-header')My Profile @endsection <!--active pageheader-->

@section('content')
    <div class="influence-profile">
        <div class="row">
            <!-- ============================================================== -->
            <!-- profile -->
            <!-- ============================================================== -->
            <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12">
                <!-- ============================================================== -->
                <!-- card profile -->
                <!-- ============================================================== -->
                <div class="card">
                    <div class="card-body">
                        <div class="user-avatar text-center d-block">
                            <img src="{{ asset('template/assets/images/user1.png') }}" alt="User Avatar"
                                class="rounded-circle user-avatar-xxl">
                        </div>
                        <div class="text-center">
                            <h2 class="font-24 mb-0">{{ Auth::user()->name }}</h2>
                            {{-- <p>Project Manager @Influnce</p> --}}
                        </div>
                    </div>
                    <div class="card-body border-top">
                        <h3 class="font-16">Contact Information</h3>
                        <div class="">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><i class="fas fa-fw fa-envelope mr-2"></i>@email</li>
                                <li class="mb-2"><i class="fas fa-fw fa-phone mr-2"></i>(900) 123 4567</li>
                                <li class="mb-0"><i class="fas fa-map-marker-alt mr-2"></i>Quezon City</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body border-top">
                        <div>
                            <ul class="list-unstyled mb-0">
                                <h3 class="font-16">Department</h3>
                                <li class="mb-2"><i class="fas fa-building mr-2"></i>HR</li>
                                <h3 class="font-16">Position</h3>
                                <li class="mb-2"><i class="fas fa-shopping-bag mr-2"></i>Employee</li>
                                <h3 class="font-16">Join Date</h3>
                                <li class="mb-0"><i class="far fa-calendar-check mr-2"></i>January 15, 2022</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end card profile -->
                <!-- ============================================================== -->
            </div>
            <div class="col-xl-9 col-lg-9 col-md-7 col-sm-12 col-12">
                <!-- ============================================================== -->
                <!-- campaign tab one -->
                <!-- ============================================================== -->
                <div class="influence-profile-content pills-regular">
                    <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-campaign-tab" data-toggle="pill" href="#pills-campaign"
                                role="tab" aria-controls="pills-campaign" aria-selected="true">Self-Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-packages-tab" data-toggle="pill" href="#pills-packages"
                                role="tab" aria-controls="pills-packages" aria-selected="false">Not Available</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab"
                                aria-controls="pills-review" aria-selected="false">Not Available</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-msg-tab" data-toggle="pill" href="#pills-msg" role="tab"
                                aria-controls="pills-msg" aria-selected="false">Not Available</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-campaign" role="tabpanel"
                            aria-labelledby="pills-campaign-tab">
                            <div class="row">
                                <!-- ============================================================== -->
                                <!-- four widgets   -->
                                <!-- ============================================================== -->
                                <!-- ============================================================== -->
                                <!-- total views   -->
                                <!-- ============================================================== -->
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-inline-block">
                                                <h5 class="text-muted">My Tickets</h5>
                                                <h2 class="mb-0">{{ $totalTickets }}</h2>
                                            </div>
                                            <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                                <i class="fas fa-ticket-alt fa-fw fa-sm text-info"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ============================================================== -->
                                <!-- end total views   -->
                                <!-- ============================================================== -->
                                <!-- ============================================================== -->
                                <!-- Claims & Reimbursement  -->
                                <!-- ============================================================== -->
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-inline-block">
                                                <h5 class="text-muted">Claims</h5>
                                                <h2 class="mb-0">0</h2>
                                            </div>
                                            <div
                                                class="float-right icon-circle-medium  icon-box-lg  bg-secondary-light mt-1">
                                                <i class="fa fa-handshake fa-fw fa-sm text-secondary"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ============================================================== -->
                                <!-- end Claims & Reimbursement   -->
                                <!-- ============================================================== -->
                                <!-- ============================================================== -->
                                <!-- total leave  -->
                                <!-- ============================================================== -->
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-inline-block">
                                                <h5 class="text-muted">Total Absent</h5>
                                                <h2 class="mb-0"> 2</h2>
                                            </div>
                                            <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                                                <i class="fas fa-calendar-times fa-fw fa-sm text-primary"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ============================================================== -->
                                <!-- end total leave   -->
                                <!-- ============================================================== -->
                                <!-- ============================================================== -->
                                <!-- total earned   -->
                                <!-- ============================================================== -->
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-inline-block">
                                                <h5 class="text-muted">Total Earned</h5>
                                                <h2 class="mb-0">50,000</h2>
                                            </div>
                                            <div
                                                class="float-right icon-circle-medium  icon-box-lg  bg-success-light mt-1">
                                                <i class="fa fa-money-bill-alt fa-fw fa-sm" style="color: #459423;"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ============================================================== -->
                                <!-- end total earned   -->
                                <!-- ============================================================== -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-packages" role="tabpanel"
                            aria-labelledby="pills-packages-tab">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="section-block">
                                        <h2 class="section-title">Not Available</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="section-block">
                                        <h2 class="section-title">Not Available</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-msg" role="tabpanel" aria-labelledby="pills-msg-tab">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="section-block">
                                        <h2 class="section-title">Not Available</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
@endsection
