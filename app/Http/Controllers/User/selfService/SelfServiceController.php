<?php

namespace App\Http\Controllers\User\selfService;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SelfServiceController extends Controller
{
    public function show()
    {
        return view('user.self-service.leaverequest');
    }
}