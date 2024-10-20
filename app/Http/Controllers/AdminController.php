<?php

namespace App\Http\Controllers;
use App\Models\Ticket; // Import the Ticket model
use App\Models\User;

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

}
