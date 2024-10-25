@extends('layouts.app')
@section('title')Claims & Reimbursement @endsection
@section('header')Claims & Reimbursement @endsection <!--pageheader-->
@section('active-header')Requests @endsection <!--active pageheader-->
@section('styles')
        <link rel="stylesheet" type="text/css" href="{{ asset('template/assets/vendor/datatables/css/dataTables.bootstrap4.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('template/assets/vendor/datatables/css/buttons.bootstrap4.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('template/assets/vendor/datatables/css/select.bootstrap4.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('template/assets/vendor/datatables/css/fixedHeader.bootstrap4.css') }}">
@endsection

@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                <div class="email-title"><span class="icon"><i class="fas fa-calendar-alt"></i></span> Employee Leave Requests <span class="new-messages">(1 new requests)</span> </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <tr>
                                <th>Employee Name</th>
                                <th>Leave Type</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Reason</th>
                                <th>Status</th>
                                <th style="width: 0%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Art Pregoner</td>
                                <td>Vacation Leave</td>
                                <td>10-15-2024</td>
                                <td>10-20-2024</td>
                                <td>Family event attendance</td>
                                <td>Pending</td>
                                <td>
                                    <div class="btn-group ml-auto">
                                        <button class="btn btn-sm btn-outline-light">Approve</button>
                                        <button class="btn btn-sm btn-outline-light">Reject</button>
                                        <button class="btn btn-sm btn-outline-light">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </td> 
                            </tr>
                            <!-- Additional rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('template/assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('template/assets/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('template/assets/vendor/multi-select/js/jquery.multi-select.js') }}"></script>
    <script src="{{ asset('template/assets/libs/js/main-js.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('template/assets/vendor/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('template/assets/vendor/datatables/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('template/assets/vendor/datatables/js/data-table.js') }}"></script>
@endsection