<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    public function organisations() {
    	return $this->hasMany('App\Industry');
    }
}
