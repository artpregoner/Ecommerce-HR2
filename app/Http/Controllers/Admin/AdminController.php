<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Ticket; // Import the Ticket model
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\TicketReply;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalEmployees = User::count();
        $totalTickets = Ticket::count();
        return view('admin.maindash', compact('totalTickets', 'totalEmployees'));
    }

    public function adminTicketList()
    {
        // Fetch all tickets with associated user information
        $tickets = Ticket::with('user')->get();
        return view('admin.helpdesk.tickets', compact('tickets'));
    }
    //delete users tickets
    public function adminDestroy(Ticket $ticket)
    {
        // Ensure the authenticated user is admin
        if (Auth::user()->role !== 'admin') {
            abort(403, 'Unauthorized action.');
        }

        // Delete the ticket
        $ticket->delete();

        return redirect()->route('admin.helpdesk.tickets')->with('success', 'Ticket deleted successfully.');
    }

    // claims & reimbursiment
    public function adminReimbursement()
    {
        return view('admin.reimbursement.requests');
    }
    // Self-service employee management employee lists
    public function employeeManagement()
    {
        return view('admin.self-service.employeeList');
    }
    public function show($ticketId)
    {
        $ticket = Ticket::findOrFail($ticketId); // Find the ticket by ID

        // Pass the ticket to the view
        return view('admin.helpdesk.view', compact('ticket'));
    }
    public function store(Request $request, $ticketId)
    {
        // Validate the request
        $request->validate([
            'reply' => 'required|string|max:255',
        ]);

        // Create a new reply
        TicketReply::create([
            'ticket_id' => $ticketId,
            'user_id' => Auth::id(), // Get the logged-in user ID
            'reply' => $request->input('reply'),
        ]);

        // Redirect back to the ticket view
        return redirect()->route('admin.helpdesk.show', $ticketId)->with('success', 'Reply added successfully.');
    }
    
    public function showReply($id)
    {
        // Ensure to use eager loading for replies
        $ticket = Ticket::with('replies')->findOrFail($id); // Eager load replies
    
        return view('admin.helpdesk.view', compact('ticket'));
    }
    public function fetchReplies($ticketId)
    {
        $ticket = Ticket::with('replies.user')->findOrFail($ticketId); // Eager load replies and user
        return view('admin.helpdesk.view', compact('ticket')); // Adjust view path as necessary
    }
    public function recognition()
    {
        return view('admin.employee-engagement.recognition');
    }
}
