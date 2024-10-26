<?php

namespace App\Http\Controllers\User\settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountSettingsController extends Controller
{
    public function show()
    {
        return view('user.settings.account');
    }
}
