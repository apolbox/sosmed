<?php

namespace App\Http\Controllers;

use App\postingan;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPost(Request $request)
    {
    	$postMan = new postingan;
    	//$postCreate = $postMan->create();

    	$postMan->username = $request->username;
    	$postMan->isi = $request->postarea;
    	$postMan->remember_token = $request->_token;


    	if ($postMan->save()) {
    		return redirect('home')->with('status','sukses update status');
    	}
    }
}
