<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    function posts(){
    	$this->belongsToMany('App\Post');
    }
}
