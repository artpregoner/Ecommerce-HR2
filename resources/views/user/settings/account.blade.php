@extends('layouts.app')
@section('title','Account Settings')
@section('header','Settings')<!--pageheader-->
@section('active-header', 'Account Settings')
@section('content')
<div class="row">
    <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card" id="headings">
            <div class="card-body">
                <h1>Account Settings</h1>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-8 col-lg-12 col-md-10 col-sm-10 col-10">
        <div class="card">
            <h3 class="card-header">Profile</h3>
            <div class="card influencer-profile-data">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12 text-center">
                            <img src="{{ asset('template/assets/images/user1.png') }}" alt="User Avatar" class="rounded-circle user-avatar-xxl">
                        </div>
                        <div class="col-xl-10 col-lg-8 col-md-8 col-sm-8 col-12">
                            <div class="user-avatar-info">
                                <div class="m-b-20">
                                    <div class="user-avatar-name">
                                        <h4 class="mb-1">Name:</h4>
                                        <h4 class="mb-1">Email:</h4>
                                        <h4 class="mb-1">Location:</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <button class="btn btn-primary btn-space" type="submit"><i class="icon s7-mail"></i> Edit Profile</button>
                        <button class="btn btn-dark btn-space" type="button"><i class="icon s7-close"></i> Upload Photo</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-8 col-lg-12 col-md-10 col-sm-10 col-10">
        <div class="card">
            <h3 class="card-header">Security</h3>
            <div class="card influencer-profile-data">
                <div class="card-body">
                    <div class="row">
                        <div class="m-b-20">
                            <div class="user-avatar-name">
                                <h4 class="mb-1">Last Password Change:</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <button class="btn btn-primary btn-space" type="submit"><i class="icon s7-mail"></i> Change Password</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-8 col-lg-12 col-md-10 col-sm-10 col-10">
        <div class="card">
            <h3 class="card-header">Account Information</h3>
            <div class="card influencer-profile-data">
                <div class="card-body">
                    <div class="row">
                        <div class="m-b-20">
                            <div class="user-avatar-name">
                                <h4 class="mb-1">Role:</h4>
                                <h4 class="mb-1">Account Created:</h4>
                                <h4 class="mb-1">Last Login:</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <button class="btn btn-primary btn-space" type="submit"><i class="icon s7-mail"></i> View Account History</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
