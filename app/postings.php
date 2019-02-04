<?php

namespace App;

use App\Model\PostArea;
use Illuminate\Database\Eloquent\Model;

class postings extends Model
{
	public function __construct()
	{
		$this->belongsTo(PostArea::class);
	}
}
