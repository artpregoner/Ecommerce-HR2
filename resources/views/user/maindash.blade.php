@extends('layouts.app')
@section('title')Dashboard @endsection
@section('header')Dashboard @endsection <!--pageheader-->
@section('active-header')My Dashboard @endsection <!--active pageheader-->

@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card influencer-profile-data">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="text-center">
                            <img src="{{ asset('template/assets/images/user1.png') }}" alt="User Avatar" class="rounded-circle user-avatar-xxl">
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-8 col-md-8 col-sm-8 col-12">
                            <div class="user-avatar-info">
                                <div class="m-b-20">
                                    <div class="user-avatar-name">
                                        <h2 class="mb-1">{{ Auth::user()->name }}</h2>
                                    </div>
                                </div>
                                <!--  <div class="float-right"><a href="#" class="user-avatar-email text-secondary">www.henrybarbara.com</a></div> -->
                                <div class="user-avatar-address">
                                    <p class="border-bottom pb-3">
                                        <span class="d-xl-inline-block d-block mb-2"><i class="fa fa-map-marker-alt mr-2 text-primary "></i>44 Cubao QC</span>
                                        <span class="mb-2 ml-xl-4 d-xl-inline-block d-block">Joined date: 23 June, 2018  </span>
                                        <span class=" mb-2 d-xl-inline-block d-block ml-xl-4">Male </span>
                                        <span class=" mb-2 d-xl-inline-block d-block ml-xl-4">20 Year Old </span>
                                    </p>
                                    <div class="mt-3">
                                        <a href="#" class="badge badge-light mr-1">HR 2</a> <!--<a href="#" class="badge badge-light mr-1">Life Style</a> <a href="#" class="badge badge-light">Gym</a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                        <h5 class="text-muted">Claims & Reimbursement</h5>
                        <h2 class="mb-0">0</h2>
                    </div>
                    <div class="float-right icon-circle-medium  icon-box-lg  bg-secondary-light mt-1">
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
                        <h2 class="mb-0"> 50,000</h2>
                    </div>
                    <div class="float-right icon-circle-medium  icon-box-lg  bg-brand-light mt-1" style="color: #459423;">
                        <i class="fa fa-money-bill-alt fa-fw fa-sm" style="color: #459423;"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end total earned   -->
        <!-- ============================================================== -->
    </div>
    
@endsection
    