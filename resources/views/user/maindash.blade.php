@extends('layouts.app')
@section('title')Dashboard @endsection
@section('header')Dashboard @endsection <!--pageheader-->
@section('active-header')My Profile @endsection <!--active pageheader-->

@section('content')
<div class="influence-profile">
    <div class="row">
        <!-- ============================================================== -->
        <!-- profile -->
        <!-- ============================================================== -->
        <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12">
            <!-- ============================================================== -->
            <!-- card profile -->
            <!-- ============================================================== -->
            <div class="card">
                <div class="card-body">
                    <div class="user-avatar text-center d-block">
                        <img src="{{ asset('template/assets/images/user1.png') }}" alt="User Avatar"
                            class="rounded-circle user-avatar-xxl">
                    </div>
                    <div class="text-center">
                        <h2 class="font-24 mb-0">{{ Auth::user()->name }}</h2>
                        {{-- <p>Project Manager @Influnce</p> --}}
                    </div>
                </div>
                <div class="card-body border-top">
                    <h3 class="font-16">Contact Information</h3>
                    <div class="">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><i class="fas fa-fw fa-envelope mr-2"></i>@email</li>
                            <li class="mb-2"><i class="fas fa-fw fa-phone mr-2"></i>(900) 123 4567</li>
                            <li class="mb-0"><i class="fas fa-map-marker-alt mr-2"></i>Quezon City</li>
                        </ul>
                    </div>
                </div>
                <div class="card-body border-top">
                    <div>
                        <ul class="list-unstyled mb-0">
                            <h3 class="font-16">Department</h3>
                            <li class="mb-2"><i class="fas fa-building mr-2"></i>HR</li>
                            <h3 class="font-16">Position</h3>
                            <li class="mb-2"><i class="fas fa-shopping-bag mr-2"></i>Employee</li>
                            <h3 class="font-16">Join Date</h3>
                            <li class="mb-0"><i class="far fa-calendar-check mr-2"></i>January 15, 2022</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end card profile -->
            <!-- ============================================================== -->
        </div>
        <div class="col-xl-9 col-lg-9 col-md-7 col-sm-12 col-12">
            <!-- ============================================================== -->
            <!-- campaign tab one -->
            <!-- ============================================================== -->
            <div class="influence-profile-content pills-regular">
                <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-campaign-tab" data-toggle="pill" href="#pills-campaign"
                            role="tab" aria-controls="pills-campaign" aria-selected="true">Self-Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-packages-tab" data-toggle="pill" href="#pills-packages"
                            role="tab" aria-controls="pills-packages" aria-selected="false">Overall</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab"
                            aria-controls="pills-review" aria-selected="false">My Recognitions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-msg-tab" data-toggle="pill" href="#pills-msg" role="tab"
                            aria-controls="pills-msg" aria-selected="false">Employee Feedback</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-campaign" role="tabpanel"
                        aria-labelledby="pills-campaign-tab">
                        <div class="row">
                            <!-- ============================================================== -->
                            <!-- four widgets   -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- total views   -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-inline-block">
                                            <h5 class="text-muted">My Tickets</h5>
                                            <h2 class="mb-0">{{ $totalTickets }}</h2>
                                        </div>
                                        <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                            <i class="fas fa-ticket-alt fa-fw fa-sm text-info"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end total views   -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- Claims & Reimbursement  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-inline-block">
                                            <h5 class="text-muted">Claims</h5>
                                            <h2 class="mb-0">0</h2>
                                        </div>
                                        <div
                                            class="float-right icon-circle-medium  icon-box-lg  bg-secondary-light mt-1">
                                            <i class="fa fa-handshake fa-fw fa-sm text-secondary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end Claims & Reimbursement   -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- total leave  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-inline-block">
                                            <h5 class="text-muted">Total Absent</h5>
                                            <h2 class="mb-0"> 2</h2>
                                        </div>
                                        <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                                            <i class="fas fa-calendar-times fa-fw fa-sm text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end total leave   -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- total earned   -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-inline-block">
                                            <h5 class="text-muted">Total Earned</h5>
                                            <h2 class="mb-0">50,000</h2>
                                        </div>
                                        <div
                                            class="float-right icon-circle-medium  icon-box-lg  bg-success-light mt-1">
                                            <i class="fa fa-money-bill-alt fa-fw fa-sm" style="color: #459423;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end total earned   -->
                            <!-- ============================================================== -->
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header"><i class="m-r-10 mdi mdi-account-settings-variant" style="font-size: 30px;"></i></i> Self-Service</h5>
                                    <div class="card-body p-0">
                                        <ul class="country-sales list-group list-group-flush">
                                            <li class="country-sales-content list-group-item">
                                                <span class="">Update Personal Info</span><span class="float-right text-dark"><a href="{{ route('user.account.settings') }}" class="btn btn-info active">Update</a></span>
                                            </li>
                                            <li class="list-group-item country-sales-content">
                                                <span class="">Download Payslip</span><span class="float-right text-dark"><a href="#" class="btn btn-info active">View</a></span>
                                            </li>
                                            <li class="list-group-item country-sales-content">
                                                <span class="">Request Documents</span><span class="float-right text-dark"><a href="#" class="btn btn-info active">Request</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-packages" role="tabpanel" aria-labelledby="pills-packages-tab">
                        <div class="row">
                            <div class="col-xl-3 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header"><i class="m-r-10 mdi mdi-account-settings-variant" style="font-size: 20px;" title="us" id="us"></i> Self-service</h5>
                                    <div class="card-body p-0">
                                        <ul class="country-sales list-group list-group-flush">
                                            <li class="country-sales-content list-group-item">
                                                <span class="">Pending Leave Requests</span><span class="float-right text-dark">7</span>
                                            </li>
                                            <li class="list-group-item country-sales-content">
                                                <span class="">Schedule Changes</span><span class="float-right text-dark">7</span>
                                            </li>
                                            <li class="list-group-item country-sales-content">
                                                <span class="">Document Requests</span><span class="float-right text-dark">4</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header"><i class="fas fa-headphones" title="us" id="us"></i> Helpdesk</h5>
                                    <div class="card-body p-0">
                                        <ul class="country-sales list-group list-group-flush">
                                            <li class="country-sales-content list-group-item">
                                                <span class="">Open Tickets</span><span class="float-right text-dark">3</span>
                                            </li>
                                            <li class="list-group-item country-sales-content">
                                                <span class="">Resolved Today</span><span class="float-right text-dark">12</span>
                                            </li>
                                            <li class="list-group-item country-sales-content">
                                                <span class="">.</span><span class="float-right text-dark">.</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header"><i class="fas fa-fw fas fa-hand-holding-usd" title="us" id="us"></i> Claims</h5>
                                    <div class="card-body p-0">
                                        <ul class="country-sales list-group list-group-flush">
                                            <li class="country-sales-content list-group-item">
                                                <span class="">Pending Claims</span><span class="float-right text-dark">3</span>
                                            </li>
                                            <li class="list-group-item country-sales-content">
                                                <span class="">Processed Today</span><span class="float-right text-dark">7</span>
                                            </li>
                                            <li class="list-group-item country-sales-content">
                                                <span class="">My total spend</span><span class="float-right text-dark">₱700</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
                        <div class="row">
                            <div class="col-xl-12 col-lg- col-md-7 col-sm-12 col-12">
                                <div class="section-block">
                                    <div class="card">
                                        <h5 class="card-header">My Recognitions</h5>
                                        <div class="card-body">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Award Type</th>
                                                        <th scope="col">From</th>
                                                        <th scope="col">Points</th>
                                                        <th scope="col">Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Performance Award</td>
                                                        <td>HR Manager</td>
                                                        <td>100</td>
                                                        <td>2024-10-24</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Team Player Award</td>
                                                        <td>Project Manager</td>
                                                        <td>50</td>
                                                        <td>2024-10-20</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-msg" role="tabpanel" aria-labelledby="pills-msg-tab">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="section-block">
                                    <div class="card">
                                        <h5 class="card-header"><i class="fab fa-rocketchat" style="font-size: 20px;" title="us" id="us"></i> Employee Feedback</h5>
                                        <div class="card-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="employeeFeedbackTextarea">Employee Feedback</label>
                                                    <textarea class="form-control" id="employeeFeedbackTextarea" rows="3" placeholder="Share your thoughts, suggestions, or concerns..."></textarea>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
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
@endsection
