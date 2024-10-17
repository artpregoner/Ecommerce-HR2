@extends('layouts.app')
@section('title')Dashboard @endsection
@section('header')Dashboard @endsection <!--pageheader-->
@section('active-header')Main Dashboard @endsection <!--active pageheader-->

@section('content')
<body>
    <h1>Welcome to the User Dashboard, {{ Auth::user()->name }}</h1>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
@endsection
    