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
        <!-- ============================================================== -->
        <!-- visitor  -->
        <!-- ============================================================== -->
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="card border-3 border-top border-top-primary">
                <div class="card-body">
                    <h5 class="text-muted">Claims & Reimbursement</h5>
                    <div class="metric-value d-inline-block">
                        <h1 class="mb-1">0</h1>
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
    </div>

    <div class="row">
        <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Category</h5>
                <div class="card-body">
                    <div id="c3chart_category" style="height: 420px;"></div>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
    