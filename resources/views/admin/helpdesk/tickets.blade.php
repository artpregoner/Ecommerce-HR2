@extends('layouts.app')
@section('title')Helpdesk - Tickets @endsection
@section('header')Helpdesk @endsection <!--pageheader-->
@section('active-header')Tickets @endsection <!--active pageheader-->
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
                <div class="email-title"><span class="icon"><i class="fas fa-inbox"></i></span> Tickets <span class="new-messages">({{ $tickets->count() }} tickets)</span> </div>
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
                                <th style="width: 80px;">Priority</th> <!-- ticket database -->
                                <th style="width: 80px;">Category</th> <!-- ticket database -->
                                <th style="width: 90px;">Created at</th> <!-- ticket database -->
                                <th style="width: 90px;">Actions</th> <!-- Actions: Edit, Delete -->
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
                                        <a href="{{ route('admin.helpdesk.show', $ticket->id) }}" class="btn btn-sm btn-outline-light">Reply</a>
                                        <form action="{{ route('admin.helpdesk.destroy', $ticket->id) }}" method="POST" style="display:inline;">
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
