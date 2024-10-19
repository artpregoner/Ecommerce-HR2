@extends('layouts.app')
@section('title')Dashboard @endsection
@section('header')Dashboard @endsection <!--pageheader-->
@section('active-header')Main Dashboard @endsection <!--active pageheader-->

@section('content')
<h1>Welcome to the Admin Dashboard, {{ Auth::user()->name }}</h1>
@endsection