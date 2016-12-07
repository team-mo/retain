<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function classifications() {
    	return $this->belongsToMany('App\Classification');
    }

    public function updates() {
    	return $this->hasMany('App\Update');
    }
}
