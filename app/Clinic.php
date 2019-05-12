<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    public function comments(){
		return $this->hasMany('App\Comment','clinic_id');	
	}
	
	
}
