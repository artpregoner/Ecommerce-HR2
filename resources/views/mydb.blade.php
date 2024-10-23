@extends('layouts.app')
@section('title')Dashboard @endsection
@section('header')Dashboard @endsection <!--pageheader-->
@section('active-header')Main Dashboard @endsection <!--active pageheader-->
@section('content')
    <div>
    <?php
        if(DB::connection()->getPdo()){
            echo "succ con to ano raww??/  " .DB::connection()->getDatabaseName();
        }
    ?>
    </div>
    <div>
        test
    </div>
@endsection('content')
