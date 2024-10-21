@extends('layouts.app')
@section('title')Workforce - Skill Gap @endsection
@section('header')Workforce  @endsection <!--pageheader-->
@section('active-header')Skill Gap @endsection <!--active pageheader-->

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
</div>
@endsection
@section('scripts')
    <script src="{{ asset('asset/libs/js/admin/js/skillGap.js') }}"></script>
@endsection