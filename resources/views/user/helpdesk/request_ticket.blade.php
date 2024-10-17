@extends('layouts.app')
@section('title')Helpdesk - My Tickets @endsection
@section('header')Helpdesk @endsection <!--pageheader-->
@section('active-header')My Tickets @endsection <!--active pageheader-->

@section('content')
<body>
    <h1>My ticket, {{ Auth::user()->name }}</h1>
</body>
@endsection
    