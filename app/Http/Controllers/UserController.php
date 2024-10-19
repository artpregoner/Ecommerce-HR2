<?php

namespace App\Http\Controllers;
use App\Models\Ticket; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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

    public function self_service()
    {
        // Logic for showing employee profile
        return view('user.self-service.schedule');
    }

    public function reimbursement()
    {
        // Logic for showing employee profile
        //return view('user.request_ticket'); // Ensure this view exists
    }

    public function helpdesk()
    {
        // Logic for handling employee requests
        //return view('user.helpdesk.ticket');
         // Ensure this view exists
    }
}

