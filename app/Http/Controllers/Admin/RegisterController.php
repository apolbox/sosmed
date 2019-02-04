<?php

namespace App\Http\Controllers\Admin;

use App\CheckAdmin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class RegisterController extends Controller
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
        return view('Admin.register');
    }

    public function checkAccount(Request $request)
    {
        $messages = [
            'email' => 'Email tidak terikat dengan akun manapun.'
        ];

        $this->validate($request, [
            'email' => 'required|string|max:255|unique:admins',
            'password' => 'required|string|min:6'
        ], $messages);

        $data = new CheckAdmin();
        $data->email = $request['email'];
        $data->password = $request['password'];
    }
}
