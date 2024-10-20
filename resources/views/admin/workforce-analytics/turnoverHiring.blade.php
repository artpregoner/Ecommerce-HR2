@extends('layouts.app')
@section('title')Workforce - Turnover & Hiring @endsection
@section('header')Workforce  @endsection <!--pageheader-->
@section('active-header')Turnover & Hiring Needs @endsection <!--active pageheader-->

@section('content')
<div class="row">
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">All Employee</h5>
            <div class="card-body">
                <div class="ct-chart-category ct-golden-section" style="height: 315px;"></div>
                <div class="text-center m-t-40">
                    <span class="legend-item mr-3">
                            <span class="fa-xs text-primary mr-1 legend-tile"><i class="fa fa-fw fa-square-full "></i></span><span class="legend-text">Man</span>
                    </span>
                    <span class="legend-item mr-3">
                        <span class="fa-xs text-secondary mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span>
                    <span class="legend-text">Woman</span>
                    </span>
                    <span class="legend-item mr-3">
                        <span class="fa-xs text-info mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span>
                    <span class="legend-text">Accessories</span>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Employee Turnover</h5>
            <div class="card-body">
                <canvas id="employee-turnover-chart"></canvas>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script src="{{ asset('asset/libs/js/admin/js/turnoverhiring.js') }}"></script>
@endsection