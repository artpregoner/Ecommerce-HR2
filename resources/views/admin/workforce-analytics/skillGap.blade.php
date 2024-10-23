@extends('layouts.app')
@section('title')Workforce - Skill Gap @endsection
@section('header')Workforce  @endsection <!--pageheader-->
@section('active-header')Skill Gap @endsection <!--active pageheader-->

@section('content')
<div class="row">
    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">AP and AR Balance
            </h5>
            <div class="card-body">
                <canvas id="chartjs_balance_bar"></canvas>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script src="{{ asset('asset/libs/js/admin/js/workforce/skillGap.js') }}"></script>
@endsection