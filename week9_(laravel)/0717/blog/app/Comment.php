<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    function article(){
    	return $this->belongsTo('App\Article');
    }
}