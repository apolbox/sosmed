<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PostArea extends Model
{
    protected $fillable = [
    	'username',
    	'isi',
    	'remember_token'
    ];
}
