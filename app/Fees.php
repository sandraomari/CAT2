<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fees extends Model
{
    public function students()
	{
		return $this->belongsToMany('App/Student');
	}
}
