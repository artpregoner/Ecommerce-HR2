<?php

namespace App\Http\Controllers;
use App\Models\Ticket; // Import the Ticket model
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
    // workforce analytics
    public function employeeMetrics()
    {
        return view('admin.workforce-analytics.employeeMetrics');
    }
    public function skillGap()
    {
        return view('admin.workforce-analytics.skillGap');
    }
    public function turnoverHiring()
    {
        return view('admin.workforce-analytics.turnoverHiring');
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
}
