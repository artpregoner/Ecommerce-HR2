@extends('layouts.app')
@section('title')Schedule @endsection
@section('header')Schedule @endsection <!--pageheader-->
@section('active-header')My Schedule @endsection <!--active pageheader-->

@section('content')
<div class="row">
    <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div id='calendar1'></div>
            </div>
        </div>
    </div>
</div>
@endsection