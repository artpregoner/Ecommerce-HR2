<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HelpdeskController extends Controller
{
    // Show the list of tickets for the authenticated user
    public function index()
    {
        // Fetch tickets only for the logged-in user
        $tickets = Ticket::where('user_id', Auth::id())->get();
        return view('user.helpdesk.ticket', compact('tickets'));
    }

    // Show the form to create a new ticket
    public function create()
    {
        return view('user.helpdesk.create');
    }

    // Store a new ticket
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'subject' => 'required',
            'description' => 'required',
            'department' => 'required',
            'priority' => 'required',
            'category' => 'required',
            'file' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        // Handle file upload
        $filePath = null;
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('tickets', 'public');
        }

        // Create a new ticket associated with the logged-in user
        Ticket::create([
            'subject' => $request->subject,
            'description' => $request->description,
            'department' => $request->department,
            'priority' => $request->priority,
            'category' => $request->category,
            'file_path' => $filePath,
            'user_id' => Auth::id(),  // Associate the ticket with the logged-in user
        ]);

        return redirect()->route('user.helpdesk.ticket')->with('success', 'Ticket created successfully.');
    }
            // Show the form to edit a specific ticket
        public function edit(Ticket $ticket)
        {
            // Ensure the ticket belongs to the logged-in user
            if ($ticket->user_id !== Auth::id()) {
                abort(403, 'Unauthorized action.');
            }

            return view('user.helpdesk.edit', compact('ticket'));
        }

        // Delete a specific ticket
        public function destroy(Ticket $ticket)
        {
            // Ensure the ticket belongs to the logged-in user
            if ($ticket->user_id !== Auth::id()) {
                abort(403, 'Unauthorized action.');
            }

            // Delete the ticket
            $ticket->delete();

            return redirect()->route('user.helpdesk.ticket')->with('success', 'Ticket deleted successfully.');
        }

        // Update a specific ticket
public function update(Request $request, Ticket $ticket)
{
    // Ensure the ticket belongs to the logged-in user
    if ($ticket->user_id !== Auth::id()) {
        abort(403, 'Unauthorized action.');
    }

    // Validate the incoming request
    $request->validate([
        'subject' => 'required',
        'description' => 'required',
        'department' => 'required',
        'priority' => 'required',
        'category' => 'required',
        'file' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
    ]);

    // Handle file upload
    if ($request->hasFile('file')) {
        // Delete old file if it exists
        if ($ticket->file_path) {
            Storage::disk('public')->delete($ticket->file_path);
        }
        $ticket->file_path = $request->file('file')->store('tickets', 'public');
    }

    // Update the ticket with the new data
    $ticket->update([
        'subject' => $request->subject,
        'description' => $request->description,
        'department' => $request->department,
        'priority' => $request->priority,
        'category' => $request->category,
        'file_path' => $ticket->file_path,
    ]);

    return redirect()->route('user.helpdesk.ticket')->with('success', 'Ticket updated successfully.');
}

}
