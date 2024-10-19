@extends('layouts.app')
@section('title')Helpdesk - My Tickets @endsection
@section('header')Helpdesk @endsection <!--pageheader-->
@section('active-header')My Tickets @endsection <!--active pageheader-->

@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="email-inbox-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="email-title"><span class="icon"><i class="fas fa-inbox"></i></span> My tickets <span class="new-messages">({{ $totalTickets }})</span> </div>
                        </div>
                        <div class="form-group row text-right ml-auto">
                            <div class="col col-sm-10 col-lg-12 offset-sm-10 offset-lg-5 ml-auto">
                                <a href="{{ route('helpdesk.create') }}" class="btn btn-space btn-primary">New Ticket</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered first">
                            <thead>
                                <tr>
                                    <th>Subject</th>
                                    <th>Description</th>
                                    <th>Department</th>
                                    <th style="width: 80px;">Priority</th>
                                    <th style="width: 80px;">Category</th>
                                    <th style="width: 100px;">Created at</th>
                                    <th style="width: 90px;">Actions</th> 
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tickets as $ticket)
                                <tr>
                                    <td>{{ $ticket->subject }}</td>
                                    <td>{{ $ticket->description }}</td>
                                    <td>{{ $ticket->department }}</td>
                                    <td>{{ $ticket->priority }}</td>
                                    <td>{{ $ticket->category }}</td>
                                    <td>{{ $ticket->created_at->format('Y/m/d') }}</td>
                                    <td>
                                        <div class="btn-group ml-auto">
                                            <a href="{{ route('helpdesk.edit', $ticket->id) }}" class="btn btn-sm btn-outline-light">Edit</a>
                                            <form action="{{ route('helpdesk.destroy', $ticket->id) }}" method="POST" >
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-light">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </form>
                                            <a href="" class="btn btn-sm btn-outline-light">View</a>
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



    