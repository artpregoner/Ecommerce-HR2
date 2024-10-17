@extends('layouts.app')
@section('title')Helpdesk - My Tickets @endsection
@section('header')Helpdesk @endsection <!--pageheader-->
@section('active-header')My Tickets @endsection <!--active pageheader-->

@section('content')
<div class="row">
    <!-- ============================================================== -->
    <!-- basic table  -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="row">
                <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-3 pr-3">
                    <h5 class="card-header">My Tickets</h5>
                </div>
                <div class="col-sm-6 text-right">
                    <button type="submit" class="btn btn-space btn-primary">New Ticket</button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <tr>
                                <th style="width: 500px;">SUBJECT</th>
                                <th>CREATED AT</th>
                                <th>UPDATED AT</th>
                                <th>STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>FUnds</td>
                                <td>2011/04/25</td>
                                <td>a minute ago</td>
                                <td>New</td>
                            </tr>
                            <tr>
                                <td>User Information</td>
                                <td>2011/07/25</td>
                                <td>a minute ago</td>
                                <td>Resolved</td>
                            </tr>
                            <tr>
                                <td>Initiator</td>
                                <td>2009/01/12</td>
                                <td>4 days ago</td>
                                <td>New</td>
                            </tr>
                        </tbody>
                        <tfoot>
                        </tfoot>
                    </table>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end basic table  -->
    <!-- ============================================================== -->
</div>  
@endsection
    