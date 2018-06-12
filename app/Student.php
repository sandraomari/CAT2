<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function FeesPay()
	{
		return $this->hasMany('App/Fees');
	}
}
