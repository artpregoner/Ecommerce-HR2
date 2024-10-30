<?php

namespace App\Http\Controllers\User\selfService;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SelfServiceController extends Controller
{
    public function self_serviceLeaveReq()
    {
        return view('user.self-service.leaverequest');
    }
    public function self_serviceSchedule()
    {
        // Logic for showing employee profile
        return view('user.self-service.schedule');
    }
}