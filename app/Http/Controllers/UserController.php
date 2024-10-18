<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        // Logic for showing the employee dashboard
        return view('user.maindash'); // Ensure this view exists
    }

    public function self_service()
    {
        // Logic for showing employee profile
        //return view('user.request_ticket'); // Ensure this view exists
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

