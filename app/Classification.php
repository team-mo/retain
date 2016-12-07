<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{
    public function trainings() {
    	return $this->hasMany('App\Training');
    }

    public function skills() {
    	return $this->hasMany('App\Skill');
    }
}
