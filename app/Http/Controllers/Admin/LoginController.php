<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class LoginController extends Controller
{
    /**
     * Setelah berhasil login alihkan kehalaman dashboard.
     *
     * @var string $redirectTo
     */
    protected $redirectTo = 'adminbox/dashboard';

    /**
     * Membuat class instance
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth.admin')->except('logout');
    }

    public function index()
    {
        return view('Admin.login');
    }

    public function checkAccount(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string',
            'password' => 'required|string|min:6'
        ]);

        $data = new Admin();
        $data->email = $request['email'];
        //$data->password = $request['password'];

        $data = $data::where('email',$data->email)->get();
        return redirect($this->redirectTo)->with(['data' => $data]);
    }
}
