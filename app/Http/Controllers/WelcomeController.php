<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    /**
     * Tampilkan halaman depan web
     */
    public function index(Request $request)
    {
        if ($request->session()->has('guest')) {
            return view('home');
        }
        else {
            return view('Pages.welcome');
        }
    }
}
