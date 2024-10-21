@extends('layouts.app')
@section('title')Workforce - Metrics @endsection
@section('header')Workforce  @endsection <!--pageheader-->
@section('active-header')Employee Metrics @endsection <!--active pageheader-->

@section('content')
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
@endsection

@section('scripts')
    <script src="{{ asset('asset/libs/js/admin/js/employeeMetrics.js') }}"></script>
@endsection