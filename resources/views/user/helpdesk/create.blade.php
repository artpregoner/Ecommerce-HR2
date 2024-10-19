{{-- @extends('layouts.app')
@section('title')Helpdesk - Create Ticket @endsection
@section('header')Helpdesk @endsection <!--pageheader-->
@section('active-header')Create Ticket @endsection <!--active pageheader--> --}}

{{-- @section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Create Ticket</h5>
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
                                <option>Admin</option>
                                <option>Finance</option>
                                <option>Core 1</option>
                                <option>Core 2</option>
                                <option>Core 3</option>
                                <option>LOGISTIC 1</option>
                                <option>LOGISTIC 2</option>
                                <option>HR 1</option>
                                <option>HR 2</option>
                                <option>HR 3</option>
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
                                <a href="{{ route('helpdesk.index') }}" class="btn btn-space btn-secondary">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection --}}


{{-- old one --}}
{{-- @section('content')
<div>
    <h1>Create Ticket</h1>
    <form action="{{ route('tickets.store') }}" method="POST">
        @csrf
        <div>
            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" required>
        </div>
        <div>
            <label for="status">Status:</label>
            <select id="status" name="status">
                <option value="Pending">Pending</option>
                <option value="Resolved">Resolved</option>
            </select>
        </div>
        <button type="submit">Create Ticket</button>
    </form>
</div>
@endsection --}}