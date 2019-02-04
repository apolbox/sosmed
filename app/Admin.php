<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    /**
     * Attributes yang diizinkan untuk ditampilkan.
     *
     * @var array $fillable
     */
    protected $fillable = [
        'username','email','password'
    ];

    /**
     * Attributes yang harus disembunyikan
     *
     * @var array $hidden
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    /**
     * Pilih menggunakan mysql sebagai default dari koneksi
     * akses pada database.
     *
     * @var string $connection
     */
    //protected $connection = 'mysql';
}
