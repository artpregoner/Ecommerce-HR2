@extends('layouts.app')
@section('title')Helpdesk - Update Ticket @endsection
@section('header')Helpdesk @endsection <!--pageheader-->
@section('active-header')Edit ticket @endsection <!--active pageheader-->

@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Edit Ticket</h5>
            <div class="card-body">
                <form action="{{ route('helpdesk.update', $ticket->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="subject" class="col-form-label">Subject</label>
                        <input id="subject" name="subject" type="text" class="form-control" value="{{ old('subject', $ticket->subject) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description', $ticket->description) }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="department">Department</label>
                        <select class="form-control" id="department" name="department" required>
                            <option {{ $ticket->department == 'Admin' ? 'selected' : '' }}>Admin</option>
                            <option {{ $ticket->department == 'Finance' ? 'selected' : '' }}>Finance</option>
                            <option {{ $ticket->department == 'Core 1' ? 'selected' : '' }}>Core 1</option>
                            <option {{ $ticket->department == 'Core 2' ? 'selected' : '' }}>Core 2</option>
                            <option {{ $ticket->department == 'Core 3' ? 'selected' : '' }}>Core 3</option>
                            <option {{ $ticket->department == 'LOGISTIC 1' ? 'selected' : '' }}>LOGISTIC 1</option>
                            <option {{ $ticket->department == 'LOGISTIC 2' ? 'selected' : '' }}>LOGISTIC 2</option>
                            <option {{ $ticket->department == 'HR 1' ? 'selected' : '' }}>HR 1</option>
                            <option {{ $ticket->department == 'HR 2' ? 'selected' : '' }}>HR 2</option>
                            <option {{ $ticket->department == 'HR 3' ? 'selected' : '' }}>HR 3</option>
                            <!-- Add more options here -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="priority">Priority</label>
                        <select class="form-control" id="priority" name="priority" required>
                            <option {{ $ticket->priority == 'Low' ? 'selected' : '' }}>Low</option>
                            <option {{ $ticket->priority == 'Medium' ? 'selected' : '' }}>Medium</option>
                            <option {{ $ticket->priority == 'High' ? 'selected' : '' }}>High</option>
                            <option {{ $ticket->priority == 'Urgent' ? 'selected' : '' }}>Urgent</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control" id="category" name="category" required>
                            <option {{ $ticket->category == 'Admin' ? 'selected' : '' }}>Admin</option>
                            <option {{ $ticket->category == 'Finance' ? 'selected' : '' }}>Finance</option>
                            <option {{ $ticket->category == 'Software Issue' ? 'selected' : '' }}>Software Issue</option>
                            <option {{ $ticket->category == 'Hardware Issue' ? 'selected' : '' }}>Hardware Issue</option>
                            <option {{ $ticket->category == 'Network Problem' ? 'selected' : '' }}>Network Problem</option>
                            <option {{ $ticket->category == 'HR Query' ? 'selected' : '' }}>HR Query</option>
                            <!-- Add more options here -->
                        </select>
                    </div>
                    <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="customFile" name="file">
                        <label class="custom-file-label" for="customFile">Attach file</label>
                    </div>
                    <div class="form-group row text-right">
                        <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0 ml-auto">
                            <button type="submit" class="btn btn-space btn-primary">Update</button>
                            <a href="{{ route('user.helpdesk.ticket') }}" class="btn btn-space btn-secondary">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
