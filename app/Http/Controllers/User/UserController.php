<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\Ticket; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\TicketReply;

class UserController extends Controller
{
    public function dashboard()
    {
        // Get the currently authenticated user
        $user = Auth::user();

        // Retrieve the total number of tickets associated with this user
        $totalTickets = Ticket::where('user_id', $user->id)->count();

        // Pass the totalTickets to the view
        return view('user.maindash', compact('totalTickets')); // Ensure this view exists
    }

    // user reimbursement requests list
    public function ReimbursementRequests()
    {
        return view('user.reimbursement.requests');
    }

    public function ReimbursementCreate()
    {
        return view('user.reimbursement.create');
    }

    //reply ticket
    public function show($ticketId)
    {
        $ticket = Ticket::findOrFail($ticketId); // Find the ticket by ID
        // Ensure the user owns the ticket
        if ($ticket->user_id !== Auth::id()) {
            abort(403, 'Unauthorized access.');
        }

        return view('user.helpdesk.view', compact('ticket'));
    }
    
    public function store(Request $request, $ticketId)
    {
        // Find the ticket and ensure the user owns it
        $ticket = Ticket::findOrFail($ticketId);
        if ($ticket->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        $request->validate(['reply' => 'required|string|max:255']);
        
        TicketReply::create([
            'ticket_id' => $ticketId,
            'user_id' => Auth::id(),
            'reply' => $request->input('reply'),
        ]);
        return redirect()->route('user.helpdesk.show', $ticketId)->with('success', 'Reply added successfully.');
    }
    public function fetchReplies($ticketId)
    {
        $ticket = Ticket::with('replies.user')->findOrFail($ticketId);
        return view('user.helpdesk.view', compact('ticket'));
    }
}

