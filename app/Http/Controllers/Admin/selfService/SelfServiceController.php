<?php

namespace App\Http\Controllers\Admin\selfService;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SelfServiceController extends Controller
{
    public function employeeLeaveRequest()
    {
        return view('admin.self-service.leave-applications.leave-requests');
    }
}