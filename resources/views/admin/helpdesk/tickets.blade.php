@extends('layouts.app')
@section('title')Helpdesk - Tickets @endsection
@section('header')Helpdesk @endsection <!--pageheader-->
@section('active-header')Tickets @endsection <!--active pageheader-->

@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="email-inbox-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="email-title"><span class="icon"><i class="fas fa-inbox"></i></span> Tickets <span class="new-messages">({{ $tickets->count() }} tickets)</span> </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <tr>
                                <th>Email</th> <!-- User email from users database -->
                                <th>Subject</th> <!-- ticket database -->
                                <th>Description</th> <!-- ticket database -->
                                <th>Department</th> <!-- ticket database -->
                                <th>Priority</th> <!-- ticket database -->
                                <th>Category</th> <!-- ticket database -->
                                <th>Created at</th> <!-- ticket database -->
                                <th>Actions</th> <!-- Actions: Edit, Delete -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tickets as $ticket)
                            <tr>
                                <td>{{ $ticket->user->email }}</td> <!-- User's email -->
                                <td>{{ $ticket->subject }}</td>
                                <td>{{ $ticket->description }}</td>
                                <td>{{ $ticket->department }}</td>
                                <td>{{ $ticket->priority }}</td>
                                <td>{{ $ticket->category }}</td>
                                <td>{{ $ticket->created_at->format('Y-m-d') }}</td>
                                <td>
                                    <div class="btn-group ml-auto">
                                        <a href="{{ route('helpdesk.edit', $ticket->id) }}" class="btn btn-sm btn-outline-light">Reply</a>
                                        <form action="{{ route('helpdesk.destroy', $ticket->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-light" onclick="return confirm('Are you sure you want to delete this ticket?');">
                                                <i class="far fa-trash-alt"></i> Delete
                                            </button>
                                        </form>
                                    </div>
                                </td> 
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
