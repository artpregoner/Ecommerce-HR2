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
                                        <a href="#" class="mr-1 badge badge-light">Programmer</a>
                                        <a href="#" class="mr-1 badge badge-light">UI Designer</a>
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
                                        <a href="#" class="mr-1 badge badge-light">Programmer</a>
                                        <a href="#" class="mr-1 badge badge-light">Document</a>
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
                                        <a href="#" class="mr-1 badge badge-light">Document</a>
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
                                        <a href="#" class="mr-1 badge badge-light">Document</a>
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
                                        <a href="#" class="mr-1 badge badge-light">Document</a>
                                        <a href="#" class="mr-1 badge badge-light">UI Design</a>
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
                <h5 class="card-header">All Employee</h5>
                <div class="card-body">
                    <div class="all-employee-list ct-golden-section" style="height: 315px;"></div>
                    <div class="text-center m-t-40">
                        <span class="legend-item mr-3">
                                <span class="fa-xs man-color mr-1 legend-tile"><i class="fa fa-fw fa-square-full "></i></span><span class="legend-text">Man</span>
                        </span>
                        <span class="legend-item mr-3">
                            <span class="fa-xs woman-color mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span>
                        <span class="legend-text">Woman</span>
                        </span>
                        <span class="legend-item mr-3">
                            <span class="fa-xs turnover-color mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span>
                        <span class="legend-text">Turn Over</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('asset/libs/js/admin/js/self-service/employeeList.js') }}"></script>
@endsection
