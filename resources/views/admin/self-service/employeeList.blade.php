@extends('layouts.app')
@section('title')Employee Profiles @endsection
@section('header')Employee Profiles @endsection <!--pageheader-->
@section('active-header')Employee Management @endsection <!--active pageheader-->

@section('styles')
<link rel="stylesheet" href="{{ asset('asset/public/asset/libs/css/styles.css') }}">
@endsection

@section('content')
    <div class="row">
        <!-- ============================================================== -->
        <!-- search bar  -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <form>
                        <input class="form-control form-control-lg" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-primary search-btn" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end search bar  -->
        <!-- ============================================================== -->
        <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12">
            <!-- ============================================================== -->
            <!-- card influencer one -->
            <!-- ============================================================== -->
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="user-avatar float-xl-left pr-4 float-none">
                                <img src="{{ asset('template/assets/images/user1.png') }}" alt="User Avatar"
                                    class="rounded-circle user-avatar-xl">
                            </div>
                            <div class="pl-xl-3">
                                <div class="m-b-0">
                                    <div class="user-avatar-name d-inline-block">
                                        <h2 class="font-24 m-b-10">Pregoner, Art Javar</h2>
                                    </div>
                                </div>
                                <div class="user-avatar-address">
                                    <p class="mb-2"><i class="fa fa-map-marker-alt mr-2  text-primary"></i>Quezon City<span class="m-l-10">Male<span class="m-l-20">20 Year Old</span></span>
                                    </p>
                                    <div class="mt-3">
                                        <a href="#" class="mr-1 badge badge-light">HR Manager</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="float-xl-right float-none mt-xl-0 mt-4">
                                <a href="#" class="btn btn-secondary">Update</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- card influencer one -->
            <!-- ============================================================== -->
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="user-avatar float-xl-left pr-4 float-none">
                                <img src="{{ asset('template/assets/images/user1.png') }}" alt="User Avatar"
                                    class="rounded-circle user-avatar-xl">
                            </div>
                            <div class="pl-xl-3">
                                <div class="m-b-0">
                                    <div class="user-avatar-name d-inline-block">
                                        <h2 class="font-24 m-b-10">Prado, Renz</h2>
                                    </div>
                                </div>
                                <div class="user-avatar-address">
                                    <p class="mb-2"><i class="fa fa-map-marker-alt mr-2  text-primary"></i>Quezon City<span class="m-l-10">Male<span class="m-l-20">20 Year Old</span></span>
                                    </p>
                                    <div class="mt-3">
                                        <a href="#" class="mr-1 badge badge-light">HR Manager</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="float-xl-right float-none mt-xl-0 mt-4">
                                <a href="#" class="btn btn-secondary">Update</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- card influencer one -->
            <!-- ============================================================== -->
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="user-avatar float-xl-left pr-4 float-none">
                                <img src="{{ asset('template/assets/images/user1.png') }}" alt="User Avatar"
                                    class="rounded-circle user-avatar-xl">
                            </div>
                            <div class="pl-xl-3">
                                <div class="m-b-0">
                                    <div class="user-avatar-name d-inline-block">
                                        <h2 class="font-24 m-b-10">Mangat, Marni</h2>
                                    </div>
                                </div>
                                <div class="user-avatar-address">
                                    <p class="mb-2"><i class="fa fa-map-marker-alt mr-2  text-primary"></i>Quezon City<span class="m-l-10">Male<span class="m-l-20">20 Year Old</span></span>
                                    </p>
                                    <div class="mt-3">
                                        <a href="#" class="mr-1 badge badge-light">HR Manager</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="float-xl-right float-none mt-xl-0 mt-4">
                                <a href="#" class="btn btn-secondary">Update</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- card influencer one -->
            <!-- ============================================================== -->
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="user-avatar float-xl-left pr-4 float-none">
                                <img src="{{ asset('template/assets/images/user1.png') }}" alt="User Avatar"
                                    class="rounded-circle user-avatar-xl">
                            </div>
                            <div class="pl-xl-3">
                                <div class="m-b-0">
                                    <div class="user-avatar-name d-inline-block">
                                        <h2 class="font-24 m-b-10">Palma, Kurven James</h2>
                                    </div>
                                </div>
                                <div class="user-avatar-address">
                                    <p class="mb-2"><i class="fa fa-map-marker-alt mr-2  text-primary"></i>Quezon City<span class="m-l-10">Male<span class="m-l-20">20 Year Old</span></span>
                                    </p>
                                    <div class="mt-3">
                                        <a href="#" class="mr-1 badge badge-light">HR Manager</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="float-xl-right float-none mt-xl-0 mt-4">
                                <a href="#" class="btn btn-secondary">Update</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- card influencer one -->
            <!-- ============================================================== -->
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="user-avatar float-xl-left pr-4 float-none">
                                <img src="{{ asset('template/assets/images/user1.png') }}" alt="User Avatar"
                                    class="rounded-circle user-avatar-xl">
                            </div>
                            <div class="pl-xl-3">
                                <div class="m-b-0">
                                    <div class="user-avatar-name d-inline-block">
                                        <h2 class="font-24 m-b-10">Balderama, Ronnin</h2>
                                    </div>
                                </div>
                                <div class="user-avatar-address">
                                    <p class="mb-2"><i class="fa fa-map-marker-alt mr-2  text-primary"></i>Quezon City<span class="m-l-10">Male<span class="m-l-20">20 Year Old</span></span>
                                    </p>
                                    <div class="mt-3">
                                        <a href="#" class="mr-1 badge badge-light">HR Manager</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="float-xl-right float-none mt-xl-0 mt-4">
                                <a href="#" class="btn btn-secondary">Update</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Register Employee Account</h5>
                <div class="card-body">
                    <div class="">
                        <!-- Button trigger modal -->
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Register</a>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <form class="splash-container" method="POST" action="{{ route('register') }}">
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            @csrf
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="mb-1">Registration Form</h3>
                                                    <p>Please enter employee information.</p>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <input class="form-control form-control-lg" type="text" name="name" id="name" placeholder="Name" autocomplete="off" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <input class="form-control form-control-lg" type="email" name="email" id="email" placeholder="Email" autocomplete="off" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <input class="form-control form-control-lg" name="password" id="password" type="password" placeholder="Password" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <input class="form-control form-control-lg" name="password_confirmation" id="password_confirmation" type="password" placeholder="Confirm Password" required>
                                                    </div>
                                                    <div class="form-group pt-2">
                                                        <button class="btn btn-block btn-primary" type="submit" value="Register">Register</button>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="custom-control custom-checkbox">
                                                            <input class="custom-control-input" type="checkbox" required>
                                                            <span class="custom-control-label">By creating an account, you agree to the <a href="#">terms and conditions</a></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#" class="btn btn-secondary" data-dismiss="modal">Close</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('asset/libs/js/admin/js/self-service/employeeList.js') }}"></script>
@endsection
