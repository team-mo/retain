<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
	public function users() {
		return $this->hasMany('App\User');
	}

	public function organisation() {
		return $this->belongsTo('App\Organisation');
	}
}
