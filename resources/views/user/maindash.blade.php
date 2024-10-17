@extends('layouts.app')
@section('title')Dashboard @endsection
@section('header')Dashboard @endsection <!--pageheader-->
@section('active-header')Dashboard @endsection <!--active pageheader-->

@section('content')
<body>
    <h1>Welcome, {{ Auth::user()->name }}</h1>
</body>
@endsection
    