<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $guarded = [];
	
	public function photos()
	{
		return $this->hasMany('App\Models\Photo');
	}
}
