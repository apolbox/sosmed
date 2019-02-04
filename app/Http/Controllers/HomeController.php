<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function pagesIndex(Request $request)
    {
        return $this->viewStatus($request);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return $this->viewStatus($request);
        $users = \App\User::where('status_online', 'online')
                                ->orderBy('id', 'desc')
                                ->take(10)
                                ->get();

        foreach($users as $users) {
            $postMan = \App\postings::where('username', $users->firstname)
                                        ->orderBy('id', 'desc')
                                        ->take(10)
                                        ->get();


            return view('home',[
                'area' => $postMan
            ]);
        }
    }

    public function viewStatus(Request $request)
    {
        $email = $request->session()->get('email');
        $users = \App\User::where('email', $email)
                                ->orderBy('id', 'desc')
                                ->take(10)
                                ->get();

        foreach($users as $users) {
            $postMan = \App\postings::where('username', $users->firstname)
                                        ->orderBy('id', 'desc')
                                        ->take(10)
                                        ->get();

            return view('Pages.homepage', [
                'area' => $postMan
            ]);
        }
    }
}
