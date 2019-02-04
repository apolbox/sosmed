<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CheckAdmin extends Model
{
    public function account()
    {
        $this->belongsTo('App\Admin');
    }
}
