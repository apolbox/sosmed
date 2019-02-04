<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\WelcomeController as Welcome;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\LoginController as Login;
use App\Http\Controllers\Auth\RegisterController as Register;
use App\Http\Controllers\Auth\ForgotPasswordController as ForgotPassword;
use App\Http\Controllers\ProfileController as Profile;

Route::get('/','WelcomeController@index');
Auth::routes();
Route::get('/register/{token}','Auth\RegisterController@activating')->name('activating-account');
Route::get('/home', 'HomeController@pagesIndex')->name('home');
// Search form
Route::get('search','SearchController@index')->name('search')->middleware('auth');
Route::get('/iklan/{key}',function($key){
    return $key;
});
/**
 * [ADMINISTRATOR]
 *
 * Seluruh url yang hanya dapat diakses oleh admin dari aplikasi,
 * dan pengguna yang memiliki wewenang dan memiliki izin untuk mengakses
 * halaman khusus yang memang diperlukan izin tingkat lanjut.
 *
 */
Route::get('adminbox', [
    'uses' => 'AdminController@index',
    'as' => 'adminbox',
    'middleware' => 'auth.admin'
]);

Route::group(['prefix' => 'adminbox'], function() {

    Route::get('login', [
        'uses' => 'Admin\LoginController@index',
        'as' => 'adminbox.login'
    ]);

    Route::get('register', [
        'uses' => 'Admin\RegisterController@index',
        'as' => 'adminbox.register'
    ]);

    Route::post('authenticated', [
        'uses' => 'Admin\LoginController@checkAccount',
        'as' => 'authenticated'
    ]);

    Route::get('dashboard', 'AdminController@index')->name('dashboard');

});

Route::get('sukses',function(){
    return view('auth.register-success');
});

Route::get('profile/{key}', function($key) {
    $profile = new Profile();
    return $profile->show($key);
});

Route::post('posting','PostController@createPost')->name('posting')->middleware('auth');
//Route::get('home', 'HomeController@viewStatus')->name('postingan');

Route::get('blog',function(){


    // template blog
    return view('Pages.blog');
});

Route::get('tutorial',function(){


    // template blog
    return view('Pages.tutorial');
});

Route::get('bisnis',function(){


    // template blog
    return view('Pages.bisnis');
});

Route::get('karir',function(){


    // template blog
    return view('Pages.karir');
});

Route::get('tentang-kami',function(){


    // template blog
    return view('Pages.tentang-kami');
});

Route::get('kontak-kami',function(){


    // template blog
    return view('Pages.kontak-kami');
});

Route::get('saran',function(){


    // template blog
    return view('Pages.saran');
});
