<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \Illuminate\Http\Request;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        \Illuminate\Support\Facades\Schema::defaultStringLength(191);
        \Illuminate\Support\Facades\Validator::extend('status_account',function($attribute,$value,$parameters,$validator) {
            $model = \App\User::where($attribute,$value)->where('status_account', 'yes')->first();
            return $model ? 'yes' : '';
        }, 'Maaf akun anda tidak terikat dengan akun manapun.');
        \Illuminate\Support\Facades\Validator::extend('status_active',function($attribute,$value,$parameters,$validator) {
            $model = \App\User::where($attribute,$value)->where('status_active', 'active')->first();
            return $model ? 'active' : '';
        }, 'Akun belum aktif, mohon cek kembali email anda.');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
