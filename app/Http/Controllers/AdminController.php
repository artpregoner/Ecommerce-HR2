<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Logic for showing the admin dashboard
        return view('user.maindash'); // Ensure this view exists
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
