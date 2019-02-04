<?php

namespace App\Http\Controllers\Admin;

use App\CheckAdmin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        //return redirect()->route('adminbox.login');
        return view('Admin.dashboard', ['data' => $request->data]);
    }
}
