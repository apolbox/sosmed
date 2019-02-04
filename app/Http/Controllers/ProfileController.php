<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($key)
    {
        $users = \App\User::where('firstname', $key)
                                ->orderBy('id', 'desc')
                                ->take(10)
                                ->get();
        
        return view('Pages.profile',[
            'profile' => $users
        ]);
    }
}
