<?php

namespace App\Http\Controllers\Admin\Workforce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class WorkforceController extends Controller
{
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