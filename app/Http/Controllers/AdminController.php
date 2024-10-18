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
        //return view('admin.maindash'); // Ensure this view exists
    }

    public function users()
    {
        // Logic for managing users (e.g., listing users)
        //return view('admin.users'); // Ensure this view exists
    }

    public function settings()
    {
        // Logic for admin settings
        //return view('admin.settings'); // Ensure this view exists
    }
}
