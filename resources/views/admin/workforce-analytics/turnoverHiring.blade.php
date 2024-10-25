@extends('layouts.app')
@section('title')Workforce - Turnover & Hiring @endsection
@section('header')Workforce  @endsection <!--pageheader-->
@section('active-header')Turnover & Hiring Needs @endsection <!--active pageheader-->

@section('content')
<div class="row">
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <h4>Turnover & Hiring Needs</h4>
                <div class="text-center m-t-40">
                    <span class="legend-item mr-3">
                        <button class="button btn btn-primary" data-category="male" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">
                            Male
                        </button>
                    </span>
                    <span class="legend-item mr-3">
                        <button class="button btn btn-primary" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on top" data-category="female">
                            Female
                        </button>
                    </span>
                    <span class="legend-item mr-3">
                        <button class="button btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on top" data-category="all">
                            All Employees
                        </button>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Turnover & Hiring Needs</h5>
            <div class="card-body">
                <canvas id="turnoverChart"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">All Employee</h5>
            <div class="card-body">
                <div class="ct-chart-allemployee ct-golden-section" style="height: 315px;"></div>
                <div class="text-center m-t-40">
                    <span class="legend-item mr-3">
                        <span class="fa-xs text-primary mr-1 legend-tile"><i class="fa fa-fw fa-square-full "></i></span><span class="legend-text">Male</span>
                    </span>
                    <span class="legend-item mr-3">
                        <span class="fa-xs text-secondary mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span>
                    <span class="legend-text">Female</span>
                    
                    </span>
                    <span class="legend-item mr-3">
                        <span class="fa-xs text-info mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span>
                    <span class="legend-text">All Employees <span class="legend-text" id="totalEmployees"> 150</span></span> 
                    </span>
                    <span class="legend-item mr-3">
                        <span class="fa-xs text-info mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span>
                    <span class="legend-text">Year over Year Change <span class="legend-text" id="yoyChange"> +5%</span></span> 
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
    <script src="{{ asset('asset/libs/js/admin/js/turnoverhiring.js') }}"></script>
@endsection