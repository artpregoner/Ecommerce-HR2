@extends('layouts.app')
@section('title')Workforce - Metrics @endsection
@section('header')Workforce  @endsection <!--pageheader-->
@section('active-header')Employee Metrics @endsection <!--active pageheader-->

@section('content')
<div class="row">
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <h4>Absenteeism Rate</h4>
                <div class="text-center m-t-40">
                    <span class="legend-item mr-3">
                        <button class="button btn btn-info" data-category="male" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">
                            Male
                        </button>
                    </span>
                    <span class="legend-item mr-3">
                        <button class="button btn btn-secondary" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on top" data-category="female">
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
            <h5 class="card-header">Absenteeism Rate</h5>
            <div class="card-body">
                <canvas id="absenteeismChart"></canvas>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('asset/libs/js/admin/js/employeeMetrics.js') }}"></script>
@endsection
{{-- @section('content')
<div class="row">
    <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Department Category</h5>
            <div class="card-body">
                <div id="department-category" style="height: 420px;"></div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Absenteeism Aate</h5>
            <div class="card-body">
                <canvas id="absenteeismChart"></canvas>
            </div>
        </div>
    </div>
</div>
@endsection --}}