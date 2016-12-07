<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    public function industry() {
    	return $this->belongsTo('App\Industry');
    }

    public function departments() {
    	return $this->hasMany('App\Department');
    }
}
