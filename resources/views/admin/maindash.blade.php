@extends('layouts.app')
@section('title')Dashboard @endsection
@section('header')Dashboard @endsection <!--pageheader-->
@section('active-header')Main Dashboard @endsection <!--active pageheader-->

@section('content')
<h1>Welcome to the Admin Dashboard, {{ Auth::user()->name }}</h1>
<div class="ecommerce-widget">

    <div class="row">
        <!-- ============================================================== -->
        <!-- Total Employee  -->
        <!-- ============================================================== -->
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="card border-3 border-top border-top-primary">
                <div class="card-body">
                    <h5 class="text-muted">Total Employee</h5>
                    <div class="metric-value d-inline-block">
                        <h1 class="mb-1">{{ $totalEmployees }}</h1>
                    </div>
                    <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Total Employee  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- total orders  -->
        <!-- ============================================================== -->
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="card border-3 border-top border-top-primary">
                <div class="card-body">
                    <h5 class="text-muted">Helpdesk Tickets</h5>
                    <div class="metric-value d-inline-block">
                        <h1 class="mb-1">{{ $totalTickets }}</h1>
                    </div>
                    <div class="metric-label d-inline-block float-right text-danger font-weight-bold">
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end total orders  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- visitor  -->
        <!-- ============================================================== -->
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="card border-3 border-top border-top-primary">
                <div class="card-body">
                    <h5 class="text-muted">Claims & Reimbursement</h5>
                    <div class="metric-value d-inline-block">
                        <h1 class="mb-1">14</h1>
                    </div>
                    <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end visitor  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- new customer  -->
        <!-- ============================================================== -->
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="card border-3 border-top border-top-primary">
                <div class="card-body">
                    <h5 class="text-muted">New Hires</h5>
                    <div class="metric-value d-inline-block">
                        <h1 class="mb-1">{{ $totalEmployees }}</h1>
                    </div>
                    <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end new customer  -->
        <!-- ============================================================== -->
    </div>
    <div class="row">
        <div class="col-xl-3 col-lg-12 col-md-6 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header"><i class=" fas fa-user-circle fas fa-user-circle" title="us" id="us"></i> Employee Self-service</h5>
                <div class="card-body p-0">
                    <ul class="country-sales list-group list-group-flush">
                        <li class="country-sales-content list-group-item">
                            <span class="">Pending Leave Requests</span><span class="float-right text-dark">7</span>
                        </li>
                        <li class="list-group-item country-sales-content">
                            <span class="">Schedule Changes</span><span class="float-right text-dark">7</span>
                        </li>
                        <li class="list-group-item country-sales-content">
                            <span class="">Document Requests</span><span class="float-right text-dark">4</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-12 col-md-6 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header"><i class=" fas fa-user-circle fas fa-headphones" title="us" id="us"></i> Helpdesk</h5>
                <div class="card-body p-0">
                    <ul class="country-sales list-group list-group-flush">
                        <li class="country-sales-content list-group-item">
                            <span class="">Open Tickets</span><span class="float-right text-dark">3</span>
                        </li>
                        <li class="list-group-item country-sales-content">
                            <span class="">Resolved Today</span><span class="float-right text-dark">12</span>
                        </li>
                        <li class="list-group-item country-sales-content">
                            <span class="">Average Response Time</span><span class="float-right text-dark">2.5h</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-12 col-md-6 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header"><i class="fas fa-fw fas fa-hand-holding-usd" title="us" id="us"></i> Claims & Reimbursement</h5>
                <div class="card-body p-0">
                    <ul class="country-sales list-group list-group-flush">
                        <li class="country-sales-content list-group-item">
                            <span class="">Pending Claims</span><span class="float-right text-dark">3</span>
                        </li>
                        <li class="list-group-item country-sales-content">
                            <span class="">Processed Today</span><span class="float-right text-dark">7</span>
                        </li>
                        <li class="list-group-item country-sales-content">
                            <span class="">Total Amount Pending</span><span class="float-right text-dark">₱45,670</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-12 col-md-6 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header"><i class="fas fa-fw fas fa-chart-line" title="us" id="us"></i> Workforce Analytics</h5>
                <div class="card-body p-0">
                    <ul class="country-sales list-group list-group-flush">
                        <li class="country-sales-content list-group-item">
                            <span class="">Attendance Rate</span><span class="float-right text-dark">78%</span>
                        </li>
                        <li class="list-group-item country-sales-content">
                            <span class="">Productivity Score</span><span class="float-right text-dark">7%</span>
                        </li>
                        <li class="list-group-item country-sales-content">
                            <span class="">Turnover Rate</span><span class="float-right text-dark">4%</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Department Category</h5>
                <div class="card-body">
                    <div id="department-category" style="height: 420px;"></div>
                </div>
            </div>
        </div>
        {{-- <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Category</h5>
                <div class="card-body">
                    <div id="c3chart_category" style="height: 420px;"></div>
                </div>
            </div>
        </div> --}}
    </div>
    
</div>
@endsection
@section('scripts')
    <script src="{{ asset('asset/libs/js/admin/js/maindash.js') }}"></script>
@endsection