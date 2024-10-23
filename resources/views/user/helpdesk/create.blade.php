@extends('layouts.app')
@section('title','Helpdesk - Create Ticket')
@section('header','Helpdesk')<!--pageheader-->
@section('active-header', 'Submit new Ticket')<!--active pageheader-->

@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Submit new Ticket</h5>
                <div class="card-body">
                    <form action="{{ route('helpdesk.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="subject" class="col-form-label">Subject</label>
                            <input id="subject" name="subject" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="department">Department</label>
                            <select class="form-control" id="department" name="department" required>
                                <option>Marketing</option>
                                <option>Sales</option>
                                <option>Customer Service</option>
                                <option>Logistics</option>
                                <option>Product Management</option>
                                <option>Human Resources (HR)</option>
                                <option>Finance</option>
                                <option>Accounting</option>
                                <!-- Add more options here -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="priority">Priority</label>
                            <select class="form-control" id="priority" name="priority" required>
                                <option>Low</option>
                                <option>Medium</option>
                                <option>High</option>
                                <option>Urgent</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control" id="category" name="category" required>
                                <option>Admin</option>
                                <option>Finance</option>
                                <option>Software Issue</option>
                                <option>Hardware Issue</option>
                                <option>Network Problem</option>
                                <option>HR Query</option>
                                <!-- Add more options here -->
                            </select>
                        </div>
                        <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" id="customFile" name="file">
                            <label class="custom-file-label" for="customFile">Attach file</label>
                        </div>
                        <div class="form-group row text-right">
                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0 ml-auto">
                                <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                <a href="#" class="btn btn-space btn-secondary" onclick="window.history.back()">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

