@extends('layouts.app')
@section('title')Workforce @endsection
@section('header')Workforce  @endsection <!--pageheader-->
@section('active-header')Workforce Analytics @endsection <!--active pageheader-->

@section('content')
<div class="row-table">
    <div class="workforceTurnOver">
        <div class="chart-container">
            <div class="chart-card">
                <h2 class="chart-title">Employee Turnover</h2>
                <div id="employee-turnover-chart"></div>
                <div id="employee-turnover-legend" class="legend"></div>
            </div>
        </div>
    </div>
    <div class="departmentDistribution">
        <div class="chart-container">
            <div class="chart-card department-distribution">
                <h2 class="chart-title">Department Distribution</h2>
                <div id="department-distribution-chart"></div>
            </div>
        </div>
    </div>
</div>

<div class="absenteeismRate">
    <div class="chart-container">
        <div class="chart-card">
            <h2 class="chart-title">Absenteeism Rate</h2>
            <div id="absenteeism-rate-chart"></div>
            <div id="absenteeism-rate-legend" class="legend"></div>
        </div>
    </div>
</div>

@endsection