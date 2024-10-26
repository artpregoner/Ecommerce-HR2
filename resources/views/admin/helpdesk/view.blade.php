@extends('layouts.app')
@section('title')Helpdesk - Reply @endsection
@section('header')Helpdesk @endsection <!--pageheader-->
@section('active-header')View Reply @endsection <!--active pageheader-->

@section('content')
<div class="chat-module">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="email-title">
                        <span class="icon"><i class="fas fa-inbox"></i></span> Ticket Reply for: {{ $ticket->subject }}
                    </div>
                    <button type="button" class="btn btn-primary btn-space" onclick="window.history.back();">
                        Return to Ticket Lists
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="chat-module-top">
        <div class="chat-module-body">
            @if ($ticket->replies && count($ticket->replies) > 0)
                @foreach($ticket->replies->reverse() as $reply)
                    <div class="media chat-item {{ $reply->user_email == auth()->user()->email ? 'chat-right' : '' }}">
                        <img alt="{{ $reply->user->role }}" 
                             src="{{ asset('template/assets/images/' . ($reply->user->role == 'admin' ? 'admin.webp' : 'user1.png')) }}" 
                             class="rounded-circle user-avatar-lg">
                        <div class="media-body">
                            <div class="chat-item-title">
                                <span class="chat-item-author">{{ $reply->user->name }}</span>
                                <span class="text-muted">{{ $reply->created_at->diffForHumans() }}</span>
                            </div>
                            <div class="chat-item-body">
                                <p>{{ $reply->reply }}</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                @endforeach
            @else
                <p>No replies yet.</p>
            @endif
        </div>
    </div>

    <div class="email editor">
        <form action="{{ route('admin.helpdesk.reply', $ticket->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <textarea class="form-control" name="reply" rows="6" placeholder="Write your reply!" required></textarea>
            </div>
            <div class="action-send">
                <button class="btn btn-primary btn-space" type="submit">
                    <i class="icon s7-mail"></i> Send
                </button>
                <button type="button" class="btn btn-danger btn-space" onclick="window.history.back();">
                    <i class="icon s7-close"></i> Cancel
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
@section('scripts')
<script>
$(document).ready(function() {
    // Function to fetch replies for a specific ticket
    function fetchReplies(ticketId) {
        $.ajax({
            url: `/admin/helpdesk/${ticketId}/replies`, // Adjust URL as needed for admin
            method: 'GET',
            success: function(data) {
                $('#repliesContainer').html(data); // Update the replies container
            },
            error: function(xhr) {
                console.error("Error fetching replies:", xhr);
            }
        });
    }

    // Call fetchReplies every 5 seconds (5000 milliseconds)
    const ticketId = {{ $ticket->id }}; // Get the current ticket ID from your view
    setInterval(function() {
        fetchReplies(ticketId);
    }, 5000);

    // Handle the reply form submission
    $('#replyForm').on('submit', function(e) {
        e.preventDefault(); // Prevent the form from submitting normally

        $.ajax({
            url: $(this).attr('action'), // Use the form's action URL
            method: 'POST',
            data: $(this).serialize(), // Serialize the form data
            success: function(response) {
                $('textarea[name="reply"]').val(''); // Clear the textarea
                fetchReplies(ticketId); // Fetch the latest replies
            },
            error: function(xhr) {
                console.error("Error submitting reply:", xhr);
            }
        });
    });
});
</script>
@endsection
@section('scripts')
@endsection
