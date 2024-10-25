@extends('layouts.app')
@section('title', 'Employee Leave Request') 
@section('header', 'Employee Leave Request')
@section('active-header', 'Request Leave')

@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Employee Leave Request</h5>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="user_id">User ID</label>
                        <input id="user_id" type="number" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="leave_type_id">Leave Type</label>
                        <select class="form-control" id="leave_type_id" required>
                            <option value="">Select Leave Type</option>
                            <option value="1">Sick Leave</option>
                            <option value="2">Vacation Leave</option>
                            <option value="3">Maternity Leave</option>
                            <option value="4">Paternity Leave</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="leave_start_date">Start Date</label>
                        <input id="leave_start_date" type="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="leave_end_date">End Date</label>
                        <input id="leave_end_date" type="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="leaveReasonTextarea">Reason for Leave</label>
                        <textarea class="form-control" id="leaveReasonTextarea" rows="3" placeholder="Provide a brief reason for your leave request..."></textarea>
                    </div>                    
                </form>
            </div>
            <div class="card-body border-top">
                <div class="form-group row text-right">
                    <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0 ml-auto">
                        <button type="submit" class="btn btn-space btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

